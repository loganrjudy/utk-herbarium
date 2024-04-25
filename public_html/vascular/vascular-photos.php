<?php require_once('../Connections/herbarium.php'); ?>

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

$varCategory = mysql_real_escape_string($_GET["CategoryID"]);
$varFamily = mysql_real_escape_string($_GET["FamilyID"]);
$varGenus = mysql_real_escape_string($_GET["GenusID"]);
$varSpecies = mysql_real_escape_string($_GET["SpeciesID"]);
$varPhotoName = mysql_real_escape_string($_GET["PhotoNameID"]);

$numcount = 0;
$seedcount = 0;

 

$query_getPosts = "SELECT tblGenus.GenusName, tblSpecies.SpeciesName, tblSpecies.Seed, tblPhoto.PhotoName, tblPhoto.SeedPhotoName, tblPhotographer.PhotographerName FROM (tblGenus INNER JOIN tblSpecies ON tblGenus.GenusID = tblSpecies.GenusID) LEFT JOIN (tblPhotographer RIGHT JOIN tblPhoto ON tblPhotographer.PhotographerID = tblPhoto.PhotgrapherID) ON tblSpecies.SpeciesID = tblPhoto.SpeciesID WHERE tblGenus.GenusName = '$varGenus' && tblPhoto.PhotoName IS NOT NULL ORDER BY tblGenus.GenusName, tblSpecies.SpeciesName;";	

$getPosts =mysqli_query($query_getPosts, $Herbarium) or die(mysql_error());
$totalRows_getPosts = mysql_num_rows($getPosts);

$query_getPost = "SELECT tblGenus.GenusName, tblSpecies.SpeciesName, tblSpecies.Seed, tblPhoto.PhotoName, tblPhoto.SeedPhotoName, tblPhotographer.PhotographerName FROM (tblGenus INNER JOIN tblSpecies ON tblGenus.GenusID = tblSpecies.GenusID) LEFT JOIN (tblPhotographer RIGHT JOIN tblPhoto ON tblPhotographer.PhotographerID = tblPhoto.PhotgrapherID) ON tblSpecies.SpeciesID = tblPhoto.SpeciesID WHERE tblGenus.GenusName = '$varGenus' && tblPhoto.PhotoName IS NOT NULL ORDER BY tblGenus.GenusName, tblSpecies.SpeciesName;";	

$getPost =mysqli_query($query_getPost, $Herbarium) or die(mysql_error());
$totalRows_getPost = mysql_num_rows($getPost);

$query_getPost1 = "SELECT tblGenus.GenusName, tblSpecies.SpeciesName, tblSpecies.Seed, tblPhoto.PhotoName, tblPhoto.SeedPhotoName, tblPhotographer.PhotographerName FROM (tblGenus INNER JOIN tblSpecies ON tblGenus.GenusID = tblSpecies.GenusID) LEFT JOIN (tblPhotographer RIGHT JOIN tblPhoto ON tblPhotographer.PhotographerID = tblPhoto.PhotgrapherID) ON tblSpecies.SpeciesID = tblPhoto.SpeciesID WHERE tblGenus.GenusName = '$varGenus' && tblPhoto.PhotoName IS NOT NULL ORDER BY tblGenus.GenusName, tblSpecies.SpeciesName;";	

$getPost1 =mysqli_query($query_getPost1, $Herbarium) or die(mysql_error());
$row_getPost1 = mysql_fetch_assoc($getPost1);
$totalRows_getPost1 = mysql_num_rows($getPost1);

$selectCount = "SELECT COUNT(tblSpecies.SpeciesName) AS CountOfSpeciesName FROM (tblGenus INNER JOIN tblSpecies ON tblGenus.GenusID = tblSpecies.GenusID) LEFT JOIN tblPhoto ON tblSpecies.SpeciesID = tblPhoto.SpeciesID WHERE (tblPhoto.PhotoName IS NOT NULL || tblPhoto.SeedPhotoName IS NOT NULL) && tblGenus.GenusName='$varGenus'";
	
$varCount =mysqli_query($selectCount);
$countSpecies = mysql_fetch_assoc($varCount);

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
								  <h3><strong>Photos</strong></h3>

									<h4><?php echo $varCategory; ?>: <?php echo $varFamily; ?></h4>
									<p align="center"><?php if ($varSpecies != "") { ?>
										<a target="new" href="photoD/<?php echo $varCategory; ?>/<?php echo $varFamily; ?>/<?php echo $varPhotoName; ?>.jpg"><IMG SRC="photoD/<?php echo $varCategory; ?>/<?php echo $varFamily; ?>/<?php echo $varPhotoName; ?>.jpg" alt="<?php echo $varPhotoName; ?>"><br><?php echo $varGenus; ?> <?php echo $varSpecies; ?></a></p>
								<?php } else { ?>
									<p><strong>Total Online <em><?php echo $varGenus; ?></em> Photo(s) Available: <?php echo $countSpecies['CountOfSpeciesName']; ?></strong></p>
									<?php } ?>
									<p>Click the thumbnail(s) below to see the enlarged photo for each species under the Genus <strong><?php echo $varGenus; ?></strong>.</p>
                                                  
                                    <?php if ($row_getPost1['Seed'] == 'Yes'){ ?>
                                            <h4>Seed Photos</h4>
                                    <?php 									
									while ($row_getPost = mysql_fetch_assoc($getPost)) {
										if ((empty($row_getPost['PhotoName'])) && (!empty($row_getPost['SeedPhotoName']))) {
										$seedcount = $seedcount+1 ?>
										  <div class="one-fourth column" align="center" style="height: 175px;">
											  <a href="vascular-photos-enlarge.php?CategoryID=<?php echo $varCategory ?>&FamilyID=<?php echo $varFamily ?>&GenusID=<?php echo $varGenus ?>&SpeciesID=<?php echo str_replace(" ","%20",$row_getPost['SpeciesName']) ?>&PhotoNameID=<?php echo $row_getPost['SeedPhotoName']; ?>&PhotographerNameID=<?php echo $row_getPost['PhotographerName']; ?>"><IMG class="aligncenter" SRC="photoD/<?php echo $varCategory; ?>/<?php echo $varFamily; ?>/<?php echo $row_getPost['SeedPhotoName']; ?>.jpg" alt="<?php echo $row_getPost['SeedPhotoName']; ?>" style="max-height: 100px;"><?php echo $seedcount; ?>. <?php echo $row_getPost['SpeciesName']; ?></a>
											</div>
									<?php } }?>
                                                  
								          <br clear="all" />
                                            <h4>Plant Photos</h4>
                                    <?php }?>
                                    
									<?php									
									while ($row_getPosts = mysql_fetch_assoc($getPosts)) {
										if ($row_getPosts['PhotoName'] != "") {
										$numcount = $numcount+1 ?>
										  <div class="one-fourth column" align="center" style="height: 175px;">
											  <a href="vascular-photos-enlarge.php?CategoryID=<?php echo $varCategory ?>&FamilyID=<?php echo $varFamily ?>&GenusID=<?php echo $varGenus ?>&SpeciesID=<?php echo str_replace(" ","%20",$row_getPosts['SpeciesName']) ?>&PhotoNameID=<?php echo $row_getPosts['PhotoName']; ?>&PhotographerNameID=<?php echo $row_getPosts['PhotographerName']; ?>"><IMG class="aligncenter" SRC="photoD/<?php echo $varCategory; ?>/<?php echo $varFamily; ?>/<?php echo $row_getPosts['PhotoName']; ?>.jpg" alt="<?php echo $row_getPosts['PhotoName']; ?>" style="max-height: 100px;"><?php echo $numcount; ?>. <?php echo $row_getPosts['SpeciesName']; ?></a>
											</div>
									<?php } } ?>
                                              
								  <br clear="all" />
								  <div>
									  <FORM id=form1 name=form1>
										<INPUT TYPE="BUTTON" NAME="GOBACK" VALUE="Previous Page" OnCLick="retrace()">
									  </FORM>
							  		</div>
								  <hr>
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