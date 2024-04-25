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

$start = 0;
$limit = 50;

if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id)*$limit;
}

?>

<?php include_once ("includes/header.php");?>

<?php include_once ("includes/nav-admin.php");?>
      
	<div id="primary" class="content-area">
		<header id="sitetitle" class="site-header" role="banner">
      <h2 class="department"><a href="http://herbarium.utk.edu/" title="University of Tennessee Herbarium - TENN" rel="home">UT Herbarium - TENN</a>
       <small><a href="http://artsci.utk.edu">College of Arts &amp; Sciences</a></small> </h2> 
		</header>	
		
		
		<div id="content" class="site-content site-content wide" role="main">

				<article class="hentry">

                <!-- And here begins the Content area. This is where you place your content -->

								<div class="entry-content reg">
                  <header class="entry-header">
                    <h1 class="entry-title">TN Seed Photos</h1>
                  </header>
<p>Below is a list of all seed photos found in the state of Tennessee. To search for a specific photo, type in the name of the photo (actual file name) and click search. To add a new photo, <a href="add_seed_photo.php">click here</a>.</p>
		<form action="seedphotolist.php" method="GET">
			<label for="query">Search: </label><input type="text" name="query" />
			<input type="submit" value="Search"/>
		</form>
		<br clear="all" />
		
		<?php 
			$query = $_GET['query'];						
									
			 
			$query_getPosts = "SELECT tblPhoto.SeedPhotoName, tblPhoto.PhotoID, tblCategory.CategoryName, tblFamily.FamilyName, tblGenus.GenusName, tblSpecies.SpeciesName, tblPhoto.JKU, tblPhoto.orientation
			
			FROM tblCategory
				INNER JOIN tblFamily ON tblCategory.CategoryID = tblFamily.CategoryID
				INNER JOIN tblGenus ON tblFamily.FamilyID = tblGenus.FamilyID
				INNER JOIN tblSpecies on tblGenus.GenusID = tblSpecies.GenusID
				INNER JOIN tblPhoto ON tblSpecies.SpeciesID = tblPhoto.SpeciesID
			
			WHERE (tblPhoto.SeedPhotoName LIKE '%$query%') OR (tblPhoto.JKU LIKE '%$query%')
			
			ORDER BY tblPhoto.SeedPhotoName ASC LIMIT $start, $limit";
									
			$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
			$row_getPosts = mysqli_fetch_assoc($getPosts);
			$totalRows_getPosts = mysqli_num_rows($getPosts);
			
			if(mysqli_num_rows($getPosts) > 0){ // if one or more rows are returned do following						
		?>
									
									
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  	  <?php do { ?>
            <?php if (!empty($row_getPosts['SeedPhotoName'])) { ?>
                <tr>
                  <td width="100"><IMG class="aligncenter" SRC="vascular/photoD/<?php echo $row_getPosts['CategoryName']; ?>/<?php echo $row_getPosts['FamilyName']; ?>/<?php echo $row_getPosts['SeedPhotoName']; ?>.jpg" alt="<?php echo $row_getPosts['SeedPhotoName']; ?>" style="max-height: 100px;"></td>
                  <td><strong>Species:</strong> <?php echo $row_getPosts['GenusName']; ?> <?php echo $row_getPosts['SpeciesName']; ?><br>
                      <strong>Collection #:</strong> <?php echo $row_getPosts['JKU']; ?><br>
                      <strong>Orientation:</strong>
                        <?php
                            if ($row_getPosts['orientation'] == "PD") {
                                echo "proximal/distal";
                            } elseif ($row_getPosts['orientation'] == 'DV') {
                                echo "dorsal/ventral";
                            } elseif ($row_getPosts['orientation'] == 'DL') {
                                echo "dorsal/lateral";
                            } elseif ($row_getPosts['orientation'] == 'F') {
                                echo "feature";
                            } elseif ($row_getPosts['orientation'] == 'V') {
                                echo "variation";
                            } elseif ($row_getPosts['orientation'] == 'FS') {
                                echo "fruit and seed";
                            } ?><br>
                    <strong>Image Name:</strong> <?php echo $row_getPosts['SeedPhotoName']; ?>.jpg</td>
                  <td width="60" style="text-align:center;"><a class="btn btn-smokey btn-block" href="delete_photo.php?PhotoID=<?php echo $row_getPosts['PhotoID']; ?>">DELETE</a></td>
                </tr>
            <?php } ?>
		    <?php } while ($row_getPosts = mysqli_fetch_assoc($getPosts)); ?>
          </table>
          <br clear="all" />
          <?php 
				if(mysqli_num_rows($getPosts) >= 50) {
				
					$rows=mysqli_num_rows(mysql_query("select * from tblPhoto"));
					$total=floor($rows/$limit);

					if($id>=1)
					{
					echo "<a href='?$start' class='btn btn-smokey' style='width:100px; float:left; display:block; margin-right:10px;'>HOME</a>";
					echo "<a href='?id=".($id-1)."' class='btn btn-smokey' style='width:100px; float:left; display:block;'>PREVIOUS</a>";
					}
					if($id!=$total)
					{
					echo "<a href='?id=".$total."' class='btn btn-smokey' style='width:100px; float:right; display:block; margin-left:10px;'>END</a>";
					echo "<a href='?id=".($id+1)."' class='btn btn-smokey' style='width:100px; float:right; display:block; '>NEXT</a>";
					}
				} else {echo "<a href='?$start' class='btn btn-smokey' style='width:100px; float:left; display:block; margin-right:10px;'>HOME</a>";}

			?>
          <br clear="all" />
          
          <?php } ?>
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