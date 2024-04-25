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

 
$query_getPosts = "SELECT *, LEFT(GenusName, 1) AS first_char FROM tblGenus WHERE UPPER(LEFT(GenusName, 1)) BETWEEN 'A' AND 'Z' ORDER BY GenusName";
$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
$totalRows_getPosts = mysqli_num_rows($getPosts);

$current_char = '';

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
								  <h3><strong>Browse by Genus Name</strong></h3>
								  <h5 align="center"><A href="vascular-browse-genus.php#A">A</A> <A href="vascular-browse-genus.php#B">B</A> <A href="vascular-browse-genus.php#C">C</A> <A href="vascular-browse-genus.php#D">D</A> <A href="vascular-browse-genus.php#E">E</A> <A href="vascular-browse-genus.php#F">F</A> <A href="vascular-browse-genus.php#G">G</A> <A href="vascular-browse-genus.php#H">H</A> <A href="vascular-browse-genus.php#I">I</A> <A href="vascular-browse-genus.php#J">J</A> <A href="vascular-browse-genus.php#K">K</A> <A href="vascular-browse-genus.php#L">L</A> <A href="vascular-browse-genus.php#M">M</A> <A href="vascular-browse-genus.php#N">N</A> <A href="vascular-browse-genus.php#O">O</A> <A href="vascular-browse-genus.php#P">P</A> <A href="vascular-browse-genus.php#Q">Q</A> <A href="vascular-browse-genus.php#R">R</A> <A href="vascular-browse-genus.php#S">S</A> <A href="vascular-browse-genus.php#T">T</A> <A href="vascular-browse-genus.php#U">U</A> <A href="vascular-browse-genus.php#V">V</A> <A href="vascular-browse-genus.php#W">W</A> <A href="vascular-browse-genus.php#X">X</A> <A href="vascular-browse-genus.php#Y">Y</A> <A href="vascular-browse-genus.php#Z">Z</A></h5>

									<?php
									do {
										if ($row_getPosts['first_char'] != $current_char) {
											$current_char = $row_getPosts['first_char'];?>
								  <br clear="all" /><h3 id="<?php echo strtoupper($current_char);?>">- <?php echo strtoupper($current_char); ?> -</h3>
										<?php }?>
										  <div class="one-fourth column" style="margin: 0px;">
										 	<a href = "vascular-browse-genus-results.php?GenusName=<?php echo $row_getPosts['GenusName']; ?>"><?php echo $row_getPosts['GenusName'];?> </a><br />
											</div>
									<?php } while ($row_getPosts = mysqli_fetch_assoc($getPosts)) ?>
									
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