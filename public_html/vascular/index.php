<?php require_once('../Connections/herbarium.php'); ?>

<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysql_escape_string($theValue);

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

 
$query_getPosts = "SELECT COUNT(PhotoID) AS Photo FROM tblPhoto";
$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
$row_getPosts = mysqli_fetch_assoc($getPosts);
$totalRows_getPosts = mysqli_num_rows($getPosts);

?>

<?php include_once ("../includes/header.php");?>

<script src="/library/js/jquery.nivo.slider.js" type="text/javascript"></script>
<link rel="stylesheet" href="/library/css/nivo-slider-float-right.css" type="text/css" />

<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider({
			effect: 'fade',
			controlNav: false,
			randomStart: true,
			pauseTime: 5000,
		});
	});
</script>

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
								<?php include_once ("images-summer.php");?>
								  <p>The taxonomic emphasis of  the vascular plant collection is reflected in the historically broad interests  of the TENN  staff and students in floristics and phytogeography. In general, the collection  may be best described as one with a strong emphasis on widespread and/or  temperate taxa. Even though the collection houses representative specimens of  the world's flora, it is unique in having the largest collection of specimens  from the state of Tennessee, as an official repository for the historic collections documenting flora  of the Great Smoky Mountains National Park (a <a href="https://whc.unesco.org/en/list/259/" target="new">UNESCO World Heritage Site</a> and part of the <a href="https://en.unesco.org/biosphere/eu-na/southern-appalachian" target="new">Southern Appalachian Biosphere Reserve</a>), and large representation from throughout the southern Appalachians.  Significant and representative collections are also present from the remainder  of the U. S., Central and South America, and Afro-Eurasia.</p>
								  <p>The pteridophyte collection is more  cosmopolitan than the rest of the vascular plant collection due in large part to the collecting and exchange of A.M. Evans and A.J. Sharp. About 50% is from Tennessee, the Great Smoky Mountains, and the rest from North America north of Mexico.  About 30% is from Central and South America and the West Indies (e.g. Puerto  Rico, Jamaica, Mexico, and Costa Rica); and the remainder from the Eastern Hemisphere, particularly Taiwan, Japan, and western Europe. TENN houses extensive collections of  vascular plant taxa, long cited in botanical literature, as classic examples  showing the phytogeographic relationships of the flora of Tennessee  and the southern Appalachians with that of southeastern Asia, the highlands of Mexico,  and the western United States. Again, no other moderate sized and few major U.S. herbaria can match TENN in its holdings of specimens critical to future studies in these areas of  phytogeography and biodiversity in the Eastern U.S.</p>
								  <p>Scientific and public outreach  is exemplified by the vascular plant web site which hosts <?php echo $row_getPosts['Photo']; ?> photos and distribution maps of Tennessee  plants.</p>
								  <p>To view a list of other plant images and distribution sites, <a href="../other.php">click here</a>.</p>
								  <p>All names in our online guide to the vascular plants of Tennessee follow the taxonomic treatment used in <A href="http://utpress.org/title/guide-to-the-vascular-plants-of-tennessee/" target="new"><em>Guide to the Vascular Plants of Tennessee</em></A> (2015). If you have trouble finding a scientific name on our site, you can search for synonyms on <A href="https://www.tropicos.org/" target="new">Tropicos</A> or the <A href="https://plants.sc.egov.usda.gov/java/" target="new">USDA Plants Database</A>.</p>
								<h4>Database</h4>
									<ul>
								  <LI><A href="http://sernecportal.org/" target="new">Southeast Regional Network of Expertise and Collections (SERNEC)</A></LI>
								 </ul>	
									<div class="half">
									  <h4>Browse Tennessee Flora by:</h4>
									  <ul>
										<li><a href="vascular-browse-family.php">Family</a></li>
										<li><a href="vascular-browse-genus.php">Genus</a></li>
										<li><a href="vascular-browse-common.php">Common Name</a></li>
										<li><a href="state-status.php">State Status</a></li>
										<li><a href="federal-status.php">Federal Status</a></li>
									  </ul>
									</div>
									<div class="half">
									  <h4>Search Tennessee Flora by:</h4>
									  <ul>
										<li><a href="vascular-search-name.php">Name</a></li>
										<li><a href="vascular-search-county.php">County</a></li>
									  </ul>
									</div>
									<br class="clear">
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