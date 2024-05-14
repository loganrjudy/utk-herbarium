<?php require_once('../Connections/herbarium.php'); ?>

<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  global $Herbarium;
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($Herbarium, $theValue) : mysqli_escape_string($Herbarium, $theValue);

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

$varCategory = mysqli_real_escape_string($Herbarium, $_GET["CategoryID"]);
$varFamily = mysqli_real_escape_string($Herbarium, $_GET["FamilyID"]);
$varGenus = mysqli_real_escape_string($Herbarium, $_GET["GenusID"]);
$varSpecies = mysqli_real_escape_string($Herbarium, $_GET["SpeciesID"]);

$numcount = 0;
$seedcount = 0;

if ($varCategory != "" && $varFamily != "" && $varGenus != "") {

 
    
$query_getPosts = "SELECT tblGenus.GenusName, tblSpecies.SpeciesName, tblSpecies.Seed, tblPhoto.PhotoName, tblPhoto.SeedPhotoName, tblPhoto.JKU, tblPhoto.orientation, tblPhotographer.PhotographerName FROM (tblGenus INNER JOIN tblSpecies ON tblGenus.GenusID = tblSpecies.GenusID) LEFT JOIN (tblPhotographer RIGHT JOIN tblPhoto ON tblPhotographer.PhotographerID = tblPhoto.PhotgrapherID) ON tblSpecies.SpeciesID = tblPhoto.SpeciesID WHERE tblGenus.GenusName = '$varGenus' && tblSpecies.SpeciesName= '$varSpecies';";	

$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysqli_error());
$totalRows_getPosts = mysqli_num_rows($getPosts);
    
$query_getPost = "SELECT tblGenus.GenusName, tblSpecies.SpeciesName, tblSpecies.Seed, tblPhoto.PhotoName, tblPhoto.SeedPhotoName, tblPhoto.JKU, tblPhoto.orientation, tblPhotographer.PhotographerName FROM (tblGenus INNER JOIN tblSpecies ON tblGenus.GenusID = tblSpecies.GenusID) LEFT JOIN (tblPhotographer RIGHT JOIN tblPhoto ON tblPhotographer.PhotographerID = tblPhoto.PhotgrapherID) ON tblSpecies.SpeciesID = tblPhoto.SpeciesID WHERE tblGenus.GenusName = '$varGenus' && tblSpecies.SpeciesName= '$varSpecies';";
    
$getPost =mysqli_query($Herbarium, $query_getPost)
 or die(mysqli_error());
$totalRows_getPost = mysqli_num_rows($getPost);
    
$query_getPost1 = "SELECT tblGenus.GenusName, tblSpecies.SpeciesName, tblSpecies.Seed, tblPhoto.PhotoName, tblPhoto.SeedPhotoName, tblPhoto.JKU, tblPhoto.orientation, tblPhotographer.PhotographerName FROM (tblGenus INNER JOIN tblSpecies ON tblGenus.GenusID = tblSpecies.GenusID) LEFT JOIN (tblPhotographer RIGHT JOIN tblPhoto ON tblPhotographer.PhotographerID = tblPhoto.PhotgrapherID) ON tblSpecies.SpeciesID = tblPhoto.SpeciesID WHERE tblGenus.GenusName = '$varGenus' && tblSpecies.SpeciesName= '$varSpecies';";
    
$getPost1 =mysqli_query($Herbarium, $query_getPost1)
 or die(mysqli_error());
$row_getPost1 = mysqli_fetch_assoc($getPost1);
$totalRows_getPost1 = mysqli_num_rows($getPost1);

}

?>

<?php include_once ("../includes/header.php");?>

<SCRIPT LANGUAGE="JavaScript">
	 function retrace()
	 {
	   history.back() 
	 }
</SCRIPT>

<?php include_once ("../includes/nav.php");?>
      
	<div id="primary" class="content-area">
		<div id="sitetitle" class="site-header">
      <h2 class="department"><a href="http://herbarium.utk.edu/" title="University of Tennessee Herbarium - TENN" rel="home">UT Herbarium - TENN</a>
       <small><a href="http://artsci.utk.edu">College of Arts &amp; Sciences</a></small> </h2> 
		</div>


                    <!-- Would you like a big image. This is where you'd put it. -->

<!--    <div class="entry-thumbnail"><img src="images/main.png" class="attachment-large wp-post-image" alt="Magnolia Blossoms" style="width:100%;" /></div>-->


		
		
		<div id="content" class="site-content site-content wide" role="main">

				<article class="hentry">

                <!-- And here begins the Content area. This is where you place your content -->

								<div class="entry-content reg">
                  <header class="entry-header"><h1 class="entry-title">Vascular Plant Herbarium</h1>
                  </header>
								  <h3><strong>Database Results</strong></h3>

									<h4><?php echo $varCategory; ?>: <?php echo $varFamily; ?></h4>
									<p><strong>Species Name: <em><?php echo $varGenus; ?> <?php echo $varSpecies; ?></em></strong></p>
									
									<p>Click the thumbnail(s) below to see the enlarged photo.</p>
									<?php									
									while ($row_getPosts = mysqli_fetch_assoc($getPosts)) {
										if ($row_getPosts['PhotoName'] != "") {
										$numcount = $numcount+1 ?>
										  <div class="one-fourth column" align="center" style="height: 175px;">
											  <a href="vascular-photos-enlarge.php?CategoryID=<?php echo $varCategory ?>&FamilyID=<?php echo $varFamily ?>&GenusID=<?php echo $varGenus ?>&SpeciesID=<?php echo str_replace(" ","%20",$row_getPosts['SpeciesName']) ?>&PhotoNameID=<?php echo $row_getPosts['PhotoName']; ?>&PhotographerNameID=<?php echo $row_getPosts['PhotographerName']; ?>"><IMG class="aligncenter" SRC="photoD/<?php echo $varCategory; ?>/<?php echo $varFamily; ?>/<?php echo $row_getPosts['PhotoName']; ?>.jpg" alt="<?php echo $row_getPosts['PhotoName']; ?>" style="max-height: 100px;"><?php echo $varGenus; ?> <?php echo $varSpecies; ?> #<?php echo $numcount; ?></a>
											</div>
                                    <?php } } ?>
                                                  
                                    <?php if ($row_getPost1['Seed'] == 'Yes'){ ?>
                                        <br clear="all" />
                                        <h4>Seed Photos</h4>
                                    <?php } 
                                              
									while ($row_getPost = mysqli_fetch_assoc($getPost)) {
										if ((empty($row_getPost['PhotoName'])) && (!empty($row_getPost['SeedPhotoName']))){ 
										$seedcount = $seedcount+1 ?>
                                              <div class="one-fourth column" align="center" style="height: 175px;">
											  <a href="vascular-photos-enlarge.php?CategoryID=<?php echo $varCategory ?>&FamilyID=<?php echo $varFamily ?>&GenusID=<?php echo $varGenus ?>&SpeciesID=<?php echo str_replace(" ","%20",$row_getPost['SpeciesName']) ?>&PhotoNameID=<?php echo $row_getPost['SeedPhotoName']; ?>&PhotographerNameID=<?php echo $row_getPost['PhotographerName']; ?>"><IMG class="aligncenter" SRC="photoD/<?php echo $varCategory; ?>/<?php echo $varFamily; ?>/<?php echo $row_getPost['SeedPhotoName']; ?>.jpg" alt="<?php echo $row_getPost['SeedPhotoName']; ?>" style="max-height: 100px;"><?php echo $varGenus; ?>  <?php echo $varSpecies; ?><br>
                                                  Collection #: <?php echo $row_getPost['JKU']; ?><br>
                                                Orientation: <?php 
                                                    if ($row_getPost['orientation'] == "PD") {
                                                      echo "proximal/distal";
                                                    } elseif ($row_getPost['orientation'] == "DV") {
                                                      echo "dorsal/ventral";
                                                    } elseif ($row_getPost['orientation'] == "DL") {
                                                      echo "dorsal/lateral";
                                                    } elseif ($row_getPost['orientation'] == "F") {
                                                      echo "feature";
                                                    } elseif ($row_getPost['orientation'] == "V") {
                                                      echo "variation";
                                                    } elseif ($row_getPost['orientation'] == "FS") {
                                                      echo "fruit and seed";
                                                    } ?></a>
											</div>
                                            <?php } } ?>
                                            <br clear="all" />      
                                  <?php if ($row_getPost1['Seed'] == 'Yes'){ ?>
                                        <br clear="all" />
                                        <p>To view a list of all seed specimens housed in the J.K. Underwood Collection at TENN, <a href="underwood.php">click here</a>.</p><hr>

                                  <?php } ?>          
                                                  
                                    <?php if ((empty($row_getPost1['PhotoName'])) && (empty($row_getPost1['SeedPhotoName']))){ ?>
                                        <p>Updating photographs for <strong><?php echo $varGenus; ?> <?php echo $varSpecies; ?></strong>.  Please check back soon. See distribution map below.</p>
                                    <?php } ?>
                                                  
								  <br clear="all" />
                                                  
									<p align="center"><IMG SRC="atlasD/<?php echo strtolower($varCategory); ?>/<?php echo strtolower($varFamily); ?>/<?php echo strtolower($varGenus); ?>-<?php echo str_replace(" ","%20",$varSpecies);?>.gif" alt="Map of <?php echo $varGenus; ?> <?php echo $varSpecies; ?>"></p>
									<p align="center">Click to see all the species <a href="vascular-maps.php?CategoryID=<?php echo $varCategory; ?>&FamilyID=<?php echo $varFamily; ?>&GenusID=<?php echo $varGenus; ?>">distribution maps</a> or <a href="vascular-photos.php?CategoryID=<?php echo $varCategory; ?>&FamilyID=<?php echo $varFamily; ?>&GenusID=<?php echo $varGenus; ?>">photos</a> under the <strong>Genus <?php echo $varGenus; ?></strong>.</p>
											  <h6 align="center">NOTE: orange = species presence | grey = species not observed</h6>
								  <br clear="all" />
								  <div>
									  <FORM id=form1 name=form1>
										<INPUT TYPE="BUTTON" NAME="GOBACK" VALUE="Previous Page" OnCLick="retrace()">
									  </FORM>
							  		</div>
								  <hr>
									<h6>
										All names follow the <A href="http://utpress.org/title/guide-to-the-vascular-plants-of-tennessee/" target="new"><em>Guide to the Vascular Plants of Tennessee</em></A> (2015). <br></h6>  
								  <h6><em>If you have any questions or comments, please contact <A href="mailto:jbudke@utk.edu">Dr. Jessica M. Budke</A> or <a href="mailto:molive18@utk.edu">Margaret  Oliver</a></em>.</h6>
									<!-- And here are a couple of helpers to get you started in page layout -->
									  <!-- Whenever you need to begin a fresh 'new row' of content. Add br with the class of clear  -->
									  
									  <br class="clear">
								  
				  </div><!-- .entry-content -->
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

    
  <?php include_once ("../includes/footer.php");?>