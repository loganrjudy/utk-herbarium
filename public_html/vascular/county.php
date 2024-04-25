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

$colname_getPost = "-1";
if (isset($_GET['CountyID'])) {
  $colname_getPost = $_GET['CountyID'];
}
else {
	echo "Record not found";
}
mysql_select_db($database_Herbarium, $Herbarium);
$query_getPost = "SELECT * 

FROM tblCategory INNER JOIN tblFamily ON tblCategory.CategoryID = tblFamily.CategoryID
INNER JOIN tblGenus ON tblFamily.FamilyID = tblGenus.FamilyID
INNER JOIN tblSpecies ON tblSpecies.GenusID = tblGenus.GenusID

INNER JOIN tblSpOccurred ON tblSpOccurred.SpeciesID = tblSpecies.SpeciesID
INNER JOIN tblCounty ON tblCounty.CountyID = tblSpOccurred.CountyID

WHERE tblCounty.CountyID = '$colname_getPost'

ORDER BY tblCategory.CategoryID, tblGenus.GenusName, tblSpecies.SpeciesName, tblSpecies.Author;";

$getPost = mysql_query($query_getPost, $Herbarium) or die(mysql_error());
$row_getPost = mysql_fetch_assoc($getPost);
$totalRows_getPost = mysql_num_rows($getPost);

$CategoryLast = 'NA';
$SpeciesLast  = 'NA';

?>

<?php include_once ("../includes/header.php");?>

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
                  <header class="entry-header"><h1 class="entry-title">Checklist of Tennessee Vascular Plants</h1>
                  </header>
								  <h3><?php echo $row_getPost['CountyName']; ?> County</h3>
									<?php do { 
											if ($row_getPost['CategoryName'] != $CategoryLast) {?>
										  	<br clear="all" /><h4><?php echo $row_getPost['CategoryName']; ?></h4>
											<?php } $CategoryLast = $row_getPost['CategoryName']; 
												if ($row_getPost['SpeciesName'] != $SpeciesLast) {?>
										  <div class="half">
											  <h6 style="margin: 0px; font-weight: lighter;">&bull; <?php echo $row_getPost['GenusName'];?> <?php echo $row_getPost['SpeciesName'];?></h6>
										  </div>
												<?php } ?>
									<?php } while ($row_getPost = mysql_fetch_assoc($getPost)); ?>
									
								  <br clear="all" />
								  
								  <hr>
									<h6>All names follow the <A href="http://utpress.org/title/guide-to-the-vascular-plants-of-tennessee/" target="new"><em>Guide to the Vascular Plants of Tennessee</em></A> (2015). <br></h6>
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