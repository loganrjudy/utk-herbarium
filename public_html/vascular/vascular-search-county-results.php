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

$varCounty = $_POST["CountyNameID"];
$varCategory = $_POST["CategoryNameID"];
$varOrigin = $_POST["OriginNameID"];

 
$query_getPost = "SELECT tblNativity.Origin, tblCategory.CategoryName, tblCounty.CountyName, tblFamily.FamilyName, tblGenus.GenusName, tblSpecies.SpeciesName, tblSpecies.Author, tblCommonName.CommonName, tblSynonym.Synonym 

FROM tblCategory INNER JOIN tblFamily ON tblCategory.CategoryID = tblFamily.CategoryID
INNER JOIN tblGenus ON tblFamily.FamilyID = tblGenus.FamilyID
INNER JOIN tblSpecies ON tblGenus.GenusID = tblSpecies.GenusID

LEFT JOIN tblLinkCommName ON tblSpecies.SpeciesID = tblLinkCommName.SpeciesID
LEFT JOIN tblCommonName ON tblLinkCommName.CommID = tblCommonName.CommID

LEFT JOIN tblLinkSynonym ON tblLinkSynonym.SpeciesID = tblSpecies.SpeciesID
LEFT JOIN tblSynonym ON tblSynonym.SynID = tblLinkSynonym.SynID

LEFT JOIN tblSpOccurred ON tblSpecies.SpeciesID = tblSpOccurred.SpeciesID
LEFT JOIN tblCounty ON tblSpOccurred.CountyID = tblCounty.CountyID

INNER JOIN tblNativity ON tblNativity.OriginID = tblSpecies.OriginID

WHERE tblCategory.CategoryName = '" . $varCategory . "' AND tblCounty.CountyName = '" . $varCounty . "' AND tblNativity.Origin = '" . $varOrigin . "' 

ORDER BY tblGenus.GenusName, tblSpecies.SpeciesName;";

$getPost =mysqli_query($Herbarium, $query_getPost)
 or die(mysqli_error());
$row_getPost = mysqli_fetch_assoc($getPost);
$totalRows_getPost = mysqli_num_rows($getPost);

$GenusLast = 'NA';
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
                  <header class="entry-header"><h1 class="entry-title">Vascular Plant Herbarium</h1>
                  </header>
								  <h3><strong>Search Results for <?php echo $varCounty; ?> County</strong></h3>
								  <p><strong>Category:</strong> <?php echo $varCategory; ?><br>
							      <strong>Nativity:</strong> <?php echo $varOrigin; ?></p>

									<?php do {
											if ($row_getPost['SpeciesName'] != $SpeciesLast) {?>
													<ul>
														<li><strong><a href="vascular-database.php?CategoryID=<?php echo $row_getPost['CategoryName']; ?>&FamilyID=<?php echo $row_getPost['FamilyName']; ?>&GenusID=<?php echo $row_getPost['GenusName']; ?>&SpeciesID=<?php echo $row_getPost['SpeciesName']; ?>"><?php echo $row_getPost['GenusName']; ?> <?php echo $row_getPost['SpeciesName']; ?></a></strong>
														
														<?php echo $row_getPost['Author']; ?>
														  
														  <?php if ($row_getPost['CommonName'] != '') {  ?>														  
														  <br><strong>Common Name:</strong> <?php echo $row_getPost['CommonName']; ?>
														  <?php } ?>
														  
														  <?php if ($row_getPost['Synonym'] != '') {  ?>
														  <br><strong>Synonyms:</strong><br>
														  <?php } ?>
													  </li>
													</ul>
												<?php } ?>
													<ul style="line-height: 12px;">
														<?php if ($row_getPost['Synonym'] != '') {  ?>
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; <?php echo $row_getPost['Synonym']; ?>
															<?php } ?>
													</ul>
										<?php } while ($row_getPost = mysqli_fetch_assoc($getPost)); ?>
									
								  <br clear="all" />
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