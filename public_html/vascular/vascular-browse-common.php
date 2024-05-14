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
									 <p>All names in our online guide to the vascular plants of Tennessee follow the taxonomic treatment used in <A href="http://utpress.org/title/guide-to-the-vascular-plants-of-tennessee/" target="new"><em>Guide to the Vascular Plants of Tennessee</em></A> (2015). If you have trouble finding a scientific name on our site, you can search for synonyms on <A href="https://www.tropicos.org/" target="new">Tropicos</A> or the <A href="https://plants.sc.egov.usda.gov/java/" target="new">USDA Plants Database</A>.</p>
								  <h3><strong>Browse by Common Name</strong></h3>
								  <p>&nbsp;</p>
								  <h5 align="center"><A href="vascular-browse-common.php#A">A</A> <A href="vascular-browse-common.php#B">B</A> <A href="vascular-browse-common.php#C">C</A> <A href="vascular-browse-common.php#D">D</A> <A href="vascular-browse-common.php#E">E</A> <A href="vascular-browse-common.php#F">F</A> <A href="vascular-browse-common.php#G">G</A> <A href="vascular-browse-common.php#H">H</A> <A href="vascular-browse-common.php#I">I</A> <A href="vascular-browse-common.php#J">J</A> <A href="vascular-browse-common.php#K">K</A> <A href="vascular-browse-common.php#L">L</A> <A href="vascular-browse-common.php#M">M</A> <A href="vascular-browse-common.php#N">N</A> <A href="vascular-browse-common.php#O">O</A> <A href="vascular-browse-common.php#P">P</A> <A href="vascular-browse-common.php#Q">Q</A> <A href="vascular-browse-common.php#R">R</A> <A href="vascular-browse-common.php#S">S</A> <A href="vascular-browse-common.php#T">T</A> <A href="vascular-browse-common.php#U">U</A> <A href="vascular-browse-common.php#V">V</A> <A href="vascular-browse-common.php#W">W</A> <A href="vascular-browse-common.php#X">X</A> <A href="vascular-browse-common.php#Y">Y</A> <A href="vascular-browse-common.php#Z">Z</A></h5>

									<?php
									 
									$query_getPosts = "SELECT *, UPPER(LEFT(CommonName, 1)) AS first_char FROM tblCommonName WHERE UPPER(LEFT(CommonName, 1)) BETWEEN 'A' AND 'Z' ORDER BY CommonName";
									$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysqli_error());
									$totalRows_getPosts = mysqli_num_rows($getPosts);
									
									$current_char = '';
									do {
										if ($row_getPosts['first_char'] != $current_char) {
											$current_char = $row_getPosts['first_char'];?>
								  <br clear="all" /><h3 id="<?php echo strtoupper($current_char);?>"><?php echo strtoupper($current_char); ?></h3>
										<?php }?>
										  <div class="one-third column" style="margin-bottom: 0px;">
										 	<a href = "vascular-browse-common-results.php?CommID=<?php echo $row_getPosts['CommID']; ?>"><?php echo $row_getPosts['CommonName'];?> </a>
											</div>
									<?php } while ($row_getPosts = mysqli_fetch_assoc($getPosts)) ?>
									
								  <br clear="all" />
								  <hr>
								  <h6>The common names   were derived from:</h6>
								  <OL>
								    <LI>
								      <h6>USDA, NRCS. 2001. The PLANTS Database,   Version 3.1 (<A href="http://plants.usda.gov/" target="_blank">http://plants.usda.gov</A>) National   Plant Data Center, Baton Rouge, LA 70874-4490 USA.</h6>
								    </LI>
								    <LI>
								      <h6>Brako, L., A. Y. Rossman,   &amp; D. F. Farr. 1997. Scientific and Common Names of 7,000 Vascular Plants in   the United States. APS Press, St. Paul, Minnesota.</h6>
								    </LI>
								    <LI>
								      <h6>Wofford, B. Eugene.   1989. Guide to the Vascular Plants of the Blue Ridge. The University of Georgia   Press, Athens &amp; London.</h6>
								    </LI>
								    <LI>
								      <h6> Wofford, B. Eugene, &amp; Edward W. Chester.   2002. Trees, Shrubs, and Woody Vines of Tennessee. The University of Tennessee   Press, Knoxville.								  </h6>
								    </LI>
								  </OL>
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