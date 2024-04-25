<?php require_once('Connections/herbarium.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
	// server should keep session data for AT LEAST 1 hour
	ini_set('session.gc_maxlifetime', 7200);

	// each client should remember their session id for EXACTLY 1 hour
	session_set_cookie_params(7200);
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "login.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "login.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>

<?php include_once ("includes/header.php");?>

<?php include_once ("includes/nav-admin.php");?>
      
	<div id="primary" class="content-area">
		<header id="sitetitle" class="site-header" role="banner">
      <h2 class="department"><a href="http://herbarium.utk.edu/" title="University of Tennessee Herbarium - TENN" rel="home">UT Herbarium - TENN</a>
       <small><a href="http://Herbarium.utk.edu">College of Arts &amp; Sciences</a></small> </h2>
		</header>	
		
		
		<div id="content" class="site-content site-content wide" role="main">

				<article class="hentry">

                <!-- And here begins the Content area. This is where you place your content -->

								<div class="entry-content reg">
                  <header class="entry-header">
                    <h1 class="entry-title">Upload Seed Photo</h1>
                  </header>
<form enctype="multipart/form-data" action="upload_photo.php" method="POST">
	<p>
	  <label for="CategoryName">Category:</label>
	  <select name="CategoryName" id="CategoryName">
	    <option value="Dicots" selected="SELECTED">Dicots</option>
	    <option value="Gymnosperms">Gymnosperms</option>
	    <option value="Monocots">Monocots</option>
	    <option value="Pteridophytes">Pteridophytes</option>
      </select>
	</p>
	<p>
	  <label for="Family">Family:</label>
      <select name="Family" id="Family">
		<?php 
		 
		$query_getPosts = "SELECT * FROM tblFamily ORDER BY FamilyName ASC";
		$getPosts =mysqli_query($query_getPosts, $Herbarium) or die(mysql_error());
		$row_getPosts = mysql_fetch_assoc($getPosts);
		$totalRows_getPosts = mysql_num_rows($getPosts);
		?>
		  <?php do { ?>
			<option value="<?php echo $row_getPosts['FamilyName']; ?>"><?php echo $row_getPosts['FamilyName']; ?></option>
		  <?php } while ($row_getPosts = mysql_fetch_assoc($getPosts)) ?>
      </select>
	</p>
	<p>
	  <label for="SpeciesID">Species:</label>
      <select name="SpeciesID" id="SpeciesID">
		<?php 
		 
		$query_getPosts = "SELECT * FROM tblSpecies INNER JOIN tblGenus ON tblGenus.GenusID = tblSpecies.GenusID ORDER BY GenusName, SpeciesName ASC";
		$getPosts =mysqli_query($query_getPosts, $Herbarium) or die(mysql_error());
		$row_getPosts = mysql_fetch_assoc($getPosts);
		$totalRows_getPosts = mysql_num_rows($getPosts);
		?>
      <?php do { ?>
	    <option value="<?php echo $row_getPosts['SpeciesID']; ?>"><?php echo $row_getPosts['GenusName']; ?> <?php echo $row_getPosts['SpeciesName']; ?></option>
	  <?php } while ($row_getPosts = mysql_fetch_assoc($getPosts)) ?>
      </select>
	</p>
	<p>
	  <label for="PhotgrapherID">Photographer:</label>
      <select name="PhotgrapherID" id="PhotgrapherID">
		<?php 
		 
		$query_getPosts = "SELECT * FROM tblPhotographer ORDER BY PhotographerName ASC";
		$getPosts =mysqli_query($query_getPosts, $Herbarium) or die(mysql_error());
		$row_getPosts = mysql_fetch_assoc($getPosts);
		$totalRows_getPosts = mysql_num_rows($getPosts);
		?>
      <?php do { ?>
	    <option value="<?php echo $row_getPosts['PhotographerID']; ?>"><?php echo $row_getPosts['PhotographerName']; ?></option>
	  <?php } while ($row_getPosts = mysql_fetch_assoc($getPosts))?>
      </select>
	</p>
      <p>
        <label for="JKU">J.K. Underwood Identification Number (JKU):</label>
     	 <input name="JKU" type="text" id="JKU" size="64"></p> 
      <p>
        <label for="Collector">Collector:</label>
     	 <input name="Collector" type="text" id="Collector" size="64"></p>  
      <p>
        <label for="orientation">Seed Image Orientation:</label><br>
     	 <ul><label>
     	   <input type="radio" name="orientation" value="PD" id="orientation_0">
     	   proximal/distal</label>
     	 <br>
     	 <label>
     	   <input type="radio" name="orientation" value="DV" id="orientation_1">
     	   dorsal/ventral</label>
     	 <br>
     	 <label>
     	   <input type="radio" name="orientation" value="DL" id="orientation_2">
     	   dorsal/lateral</label>
     	 <br>
     	 <label>
     	   <input type="radio" name="orientation" value="F" id="orientation_3">
     	   feature</label>
     	 <br>
     	 <label>
     	   <input type="radio" name="orientation" value="V" id="orientation_4">
     	   variation</label>
     	 <br>
     	 <label>
     	   <input type="radio" name="orientation" value="FS" id="orientation_5">
     	   fruit and seed</label></ul>
      </p> 
      <p>
        <label for="SeedPhotoName">Seed Photo Name:</label>
     	 <input name="SeedPhotoName" type="text" id="SeedPhotoName" size="64"> 
     	 <em>(i.e. ab_cdef1...do <strong>NOT</strong> add the file extension)</em> </p> 
      <p>
        <input name="CreationDate" type="hidden" id="CreationDate" value="<?php echo date("Y-m-d H:i:s") ?>" readonly>
      </p> 
      <p>
        <label for="image">Select Photo to Upload:</label>
     	 <input type="file" name="fileToUpload" id="fileToUpload"> <em>(NOTE: make sure the file is .jpg format and that the extension is lowercase)</em></p>
      <p>
        
        <input name="submit" type="submit" value="Upload Photo">
  </p>
  </form>
								</div>
								<!-- .entry-content -->
                <!-- And here begins the Content area. This is where you place your content -->
						
					<footer class="entry-meta">

          </footer><!-- .entry-meta -->
				</article><!-- #post -->

			
		</div>



                <!-- If you would like to have an 'expanded footer' (four columns of supplementary content) you should place it here.  -->
                <!-- For a sample of the Expanded footer's HTML, check the `/library/partials/` directory.  -->




	</div><!-- #primary -->
</div><!-- .main-content -->

    <footer id="colophon" class="site-footer" role="contentinfo">

                <!-- If you would like to have an 'expanded footer' (four columns of supplementary content) you should place it here.  -->
                <!-- For a sample of the Expanded footer's HTML, check the `/library/partials/` directory.  -->

<?php include_once ("includes/footer.php");?>