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
                    <h1 class="entry-title">Herbarium Administration Area</h1>
                  </header>
                  <h3>Select an option</h3>
					<div class="one-third column">
					<p align="center"><a class="btn btn-smokey btn-block" href="add_family.php" style="font-size: 20px;"><strong>Add New Family</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="add_genus.php" style="font-size: 20px;"><strong>Add New Genus</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="add_species.php" style="font-size: 20px;"><strong>Add New Species</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="add_common.php" style="font-size: 20px;"><strong>Add Common Name</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="assoc_common.php" style="font-size: 20px;"><strong>Associate Common Name<br>to Species</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="add_synonym.php" style="font-size: 20px;"><strong>Add Synonym</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="assoc_synonym.php" style="font-size: 20px;"><strong>Associate Synonym<br>to Species</strong></a></p>
					</div>
					<div class="one-third column">
					<p align="center"><a class="btn btn-smokey btn-block" href="add_photo.php" style="font-size: 20px;"><strong>Upload Photo</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="add_seed_photo.php" style="font-size: 20px;"><strong>Upload TN Seed Photo</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="add_nontn_seed_photo.php" style="font-size: 20px;"><strong>Upload Non-TN Seed<br>
				    Photo</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="add_map.php" style="font-size: 20px;"><strong>Upload Map</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="species_county.php" style="font-size: 20px;"><strong>Add Species by County</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="add_photographer.php" style="font-size: 20px;"><strong>Add Photographer</strong></a></p>
					</div>
					<div class="one-third column">
					<p align="center"><a class="btn btn-smokey btn-block" href="familylist.php" style="font-size: 20px;"><strong>View All Families</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="genuslist.php" style="font-size: 20px;"><strong>View All Genera</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="specieslist.php" style="font-size: 20px;"><strong>View All Species</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="commonlist.php" style="font-size: 20px;"><strong>View All Common Names</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="synonymlist.php" style="font-size: 20px;"><strong>View All Synonyms</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="photolist.php" style="font-size: 20px;"><strong>View All Photos</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="seedphotolist.php" style="font-size: 20px;"><strong>View All TN Seed Photos</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="nontnseedphotolist.php" style="font-size: 20px;"><strong>View All Non-TN Seed<br>
				    Photos</strong></a></p>
					<p align="center"><a class="btn btn-smokey btn-block" href="photographer.php" style="font-size: 20px;"><strong>View All Photographers</strong></a></p>
					</div>
					<br class=”clear”>                  
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