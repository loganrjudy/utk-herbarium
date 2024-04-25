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

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
	
	$Sp_Author = $_POST['SpeciesName'] ." ". $_POST['Author'];
	
$updateSQL = sprintf("UPDATE tblSpecies SET SpeciesName=%s, Author=%s, Sp_Author=%s, Woody=%s, GenusID=%s, OriginID=%s, FedStatusID=%s, StateStatusID=%s, NWI=%s, Seed=%s  WHERE SpeciesID=%s",
				   GetSQLValueString($_POST['SpeciesName'], "text"),
				   GetSQLValueString($_POST['Author'], "text"),
				   GetSQLValueString($Sp_Author, "text"),
				   GetSQLValueString($_POST['Woody'], "text"),
				   GetSQLValueString($_POST['GenusName'], "text"),
				   GetSQLValueString($_POST['OriginID'], "text"),
				   GetSQLValueString($_POST['FedStatusID'], "text"),
				   GetSQLValueString($_POST['StateStatusID'], "text"),
				   GetSQLValueString($_POST['NWI'], "text"),
				   GetSQLValueString($_POST['Seed'], "text"),
                   GetSQLValueString($_POST['SpeciesID'], "int"));

		   
		  $Result1 =mysqli_query($Herbarium, $updateSQL)
 or die(mysqli_error());

		  $insertGoTo = "specieslist.php";
		  if (isset($_SERVER['QUERY_STRING'])) {
			$insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
			$insertGoTo .= $_SERVER['QUERY_STRING'];
		  }

			header(sprintf("Location: %s", $insertGoTo));

}

$colname_getPost = "-1";
if (isset($_GET['SpeciesID'])) {
  $colname_getPost = $_GET['SpeciesID'];
}
 
$query_getPost = sprintf("SELECT * FROM tblGenus 

INNER JOIN tblSpecies ON tblSpecies.GenusID = tblGenus.GenusID
LEFT JOIN tblSpOccurred ON tblSpOccurred.SpeciesID = tblSpecies.SpeciesID
LEFT JOIN tblCounty ON tblCounty.CountyID = tblSpOccurred.CountyID

WHERE tblSpecies.SpeciesID = %s", GetSQLValueString($colname_getPost, "int"));

$getPost =mysqli_query($Herbarium, $query_getPost)
 or die(mysqli_error());
$row_getPost = mysqli_fetch_assoc($getPost);
$totalRows_getPost = mysqli_num_rows($getPost);
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
                    <h1 class="entry-title">Edit A  Species</h1>
                  </header>
<form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
	<p>
      <label for="GenusName">Genus Name:</label> 
      <select name="GenusName" id="GenusName">
            <option value="<?php echo $row_getPost['GenusID']; ?>" selected="selected"><?php echo $row_getPost['GenusName']; ?></option>
            <option value disabled>-------------</option>
		<?php
				 
				$query_getPosts = "SELECT * FROM tblGenus ORDER BY GenusName ASC";
				$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysqli_error());
				$row_getPosts = mysqli_fetch_assoc($getPosts);
				$totalRows_getPosts = mysqli_num_rows($getPosts);
		?>
		  <?php do { ?>
			<option value="<?php echo $row_getPosts['GenusID']; ?>"><?php echo $row_getPosts['GenusName']; ?></option>
		  <?php } while ($row_getPosts = mysqli_fetch_assoc($getPosts)) ?>
      </select>
	</p>
	<p>
		<label for="SpeciesName">Species Name:</label>
      <input name="SpeciesName" type="text" id="SpeciesName" value="<?php echo $row_getPost['SpeciesName']; ?>" size="64">
	</p>
	<p>
	  <label for="Author">Author:</label>
      <input name="Author" type="text" id="Author" value="<?php echo $row_getPost['Author']; ?>" size="64">
	</p>
	<p>
		<label for="Sp_Author">Species with Author:</label>
      <input name="Sp_Author" type="text" id="Sp_Author" value="<?php echo $row_getPost['SpeciesName']; ?> <?php echo $row_getPost['Author']; ?>" size="64">
	</p>
	<p>
	  <label for="Woody">Woody:</label>
	  <select name="Woody" id="Woody">
        <option value="<?php echo $row_getPost['Woody']; ?>" selected="selected"><?php if ($row_getPost['Woody'] != "0") { echo "Yes";} else {echo "No";} ?></option>
        <option value disabled>-------------</option>
	    <option value="0">No</option>
	    <option value="1">Yes</option>
      </select>
	</p>
	<p>
	  <label for="OriginID">Origin:</label>
	  <select name="OriginID" id="OriginID">
        <option value="<?php echo $row_getPost['OriginID']; ?>" selected="selected"><?php if ($row_getPost['OriginID'] != "1") { echo "Introduced";} else {echo "Native";} ?></option>
        <option value disabled>-------------</option>
	    <option value="1">Native</option>
	    <option value="2">Introduced</option>
      </select>
	</p>
	<p>
      <label for="FedStatusID">Federal Status:</label> 
      <select name="FedStatusID" id="FedStatusID">
            <option value="<?php echo $row_getPost['FedStatusID']; ?>" selected="selected"><?php if ($row_getPost['FedStatusID'] == "C") { echo "Candidate Species";} elseif ($row_getPost['FedStatusID'] == "DM") {echo "Delisted";} elseif ($row_getPost['FedStatusID'] == "LE") {echo "Listed Endangered";} elseif ($row_getPost['FedStatusID'] == "LT") {echo "Listed Threatened";} else {echo "No Status";} ?></option>
            <option value disabled>-------------</option>
		<?php 
		 
		$query_getPosts = "SELECT * FROM tblFedStatus ORDER BY FedStatus ASC";
		$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysqli_error());
		$row_getPosts = mysqli_fetch_assoc($getPosts);
		$totalRows_getPosts = mysqli_num_rows($getPosts);
		?>
		  <?php do { ?>
			<option value="<?php echo $row_getPosts['FedStatusID']; ?>"><?php echo $row_getPosts['FedStatus']; ?></option>
		  <?php } while ($row_getPosts = mysqli_fetch_assoc($getPosts)) ?>
      </select>
	</p>
	<p>
      <label for="StateStatusID">State Status:</label> 
      <select name="StateStatusID" id="StateStatusID">
            <option value="<?php echo $row_getPost['StateStatusID']; ?>" selected="selected"><?php if ($row_getPost['StateStatusID'] == "E") { echo "Endangered";} elseif ($row_getPost['StateStatusID'] == "E-P") {echo "Endangered -Possibly Extirpated";} elseif ($row_getPost['StateStatusID'] == "P") {echo "Possibly Extirpated";} elseif ($row_getPost['StateStatusID'] == "S") {echo "Special Concern";} elseif ($row_getPost['StateStatusID'] == "S-CE") {echo "Special Concern -Commercially Exploited";} elseif ($row_getPost['StateStatusID'] == "T") {echo "Threatened";} elseif ($row_getPost['StateStatusID'] == "T-CE") {echo "Threatened -Commercially Exploited";} else {echo "No Status";} ?></option>
            <option value disabled>-------------</option>
		<?php 
		 
		$query_getPosts = "SELECT * FROM tblStateStatus ORDER BY StateStatus ASC";
		$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysqli_error());
		$row_getPosts = mysqli_fetch_assoc($getPosts);
		$totalRows_getPosts = mysqli_num_rows($getPosts);
		?>
		  <?php do { ?>
			<option value="<?php echo $row_getPosts['StateStatusID']; ?>"><?php echo $row_getPosts['StateStatus']; ?></option>
		  <?php } while ($row_getPosts = mysqli_fetch_assoc($getPosts)) ?>
      </select>
	</p>
	<p>
      <label for="NWI">NWI Status:</label> 
      <select name="NWI" id="NWI">
            <option value="<?php echo $row_getPost['NWI']; ?>" selected="selected"><?php if ($row_getPost['NWI'] == "FAC") { echo "Facultative";} elseif ($row_getPost['NWI'] == "FAC+") {echo "Facultative +";} elseif ($row_getPost['NWI'] == "FAC-") {echo "Facultative -";} elseif ($row_getPost['NWI'] == "FACU") {echo "Facultative Upland";} elseif ($row_getPost['NWI'] == "FACU+") {echo "Facultative Upland +";} elseif ($row_getPost['NWI'] == "FACU-") {echo "Facultative Upland -";} elseif ($row_getPost['NWI'] == "FACW") {echo "Facultative Wetland";} elseif ($row_getPost['NWI'] == "FACW+") {echo "Facultative Wetland +";} elseif ($row_getPost['NWI'] == "FACW-") {echo "Facultative Wetland -";} elseif ($row_getPost['NWI'] == "NI") {echo "No Wetland Indicator";} elseif ($row_getPost['NWI'] == "OBL") {echo "Obligate Wetland";} elseif ($row_getPost['NWI'] == "UPL") {echo "Obligate Upland";} else {echo "Not Applicable";} ?></option>
            <option value disabled>-------------</option>
		<?php 
		 
		$query_getPosts = "SELECT * FROM tblNWIStatus ORDER BY NWIStatus ASC";
		$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysqli_error());
		$row_getPosts = mysqli_fetch_assoc($getPosts);
		$totalRows_getPosts = mysqli_num_rows($getPosts);
		?>
		  <?php do { ?>
			<option value="<?php echo $row_getPosts['NWI']; ?>"><?php echo $row_getPosts['NWIStatus']; ?></option>
		  <?php } while ($row_getPosts = mysqli_fetch_assoc($getPosts)) ?>
      </select>
	</p>
	<p>
	  <label for="Seed">Seeds:</label>
	  <select name="Seed" id="Seed">
        <option value="<?php echo $row_getPost['Seed']; ?>" selected="selected"><?php if ($row_getPost['Seed'] != "No") { echo "Yes";} else {echo "No";} ?></option>
        <option value disabled>-------------</option>
	    <option value="No">No</option>
	    <option value="Yes">Yes</option>
      </select>
	</p>
	<p><strong>Associated Counties:</strong></p>
	<table style="width: 300px;">
		<?php 
	
		$species = $_GET['SpeciesID'];	
	
		 
		$query_getPosts = "SELECT * FROM tblGenus 

		INNER JOIN tblSpecies ON tblSpecies.GenusID = tblGenus.GenusID
		LEFT JOIN tblSpOccurred ON tblSpOccurred.SpeciesID = tblSpecies.SpeciesID
		LEFT JOIN tblCounty ON tblCounty.CountyID = tblSpOccurred.CountyID

		WHERE tblSpecies.SpeciesID = '$species'";
		  
		$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysqli_error());
		$row_getPosts = mysqli_fetch_assoc($getPosts);
		$totalRows_getPosts = mysqli_num_rows($getPosts);
		?>
		<?php do { ?>
			<tr>
    			<td><?php echo $row_getPosts['CountyName']; ?></td>
				<td width="60"><a class="btn btn-smokey btn-block" href="delete_county.php?SpeciesID=<?php echo $row_getPosts['SpeciesID']; ?>&CountyID=<?php echo $row_getPosts['CountyID']; ?>" style="font-size: 14px;"><strong>Remove</strong></a></td>
    		</tr>
     	<?php } while ($row_getPosts = mysqli_fetch_assoc($getPosts))?>
     </table> 
     <p><a href="species_county.php">Click here to associate a county with a species.</a></p>
     <p>
       
       <input type="submit" name="update" id="update" value="Update Species">
		<input name="SpeciesID" type="hidden" id="SpeciesID" value="<?php echo $row_getPost['SpeciesID']; ?>">
		<input type="hidden" name="MM_update" value="form1">
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