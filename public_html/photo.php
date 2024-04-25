<?php require_once('Connections/herbarium.php'); ?>

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



?>

<?php include_once ("includes/header.php");?>

<?php include_once ("includes/nav.php");?>
  
	<div id="primary" class="content-area">
		<div id="sitetitle" class="site-header">
  <h2 class="department"><a href="http://herbarium.utk.edu/" title="University of Tennessee Herbarium - TENN" rel="home">UT Herbarium - TENN</a>
  <small><a href="http://artsci.utk.edu">College of Arts &amp; Sciences</a></small> </h2> 
		</div>


     <!-- Would you like a big image. This is where you'd put it. -->

<!-- <div class="entry-thumbnail"><img src="images/main.png" class="attachment-large wp-post-image" alt="Magnolia Blossoms" style="width:100%;" /></div>-->


		
		
		<div id="content" class="site-content site-content wide" role="main">

				<article class="hentry">

    <!-- And here begins the Content area. This is where you place your content -->

								<div class="entry-content reg">
     <header class="entry-header"><h1 class="entry-title">Photography Credits</h1>
     </header>
									<p>
                                      	<?php 
											 
											$query_getPosts = "SELECT COUNT(PhotoID) AS Photos FROM tblPhoto";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysqli_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo number_format($row_getPosts['Photos']);
										  ?>
										   images of ca.
											<?php 
												 
												$query_getPosts = "SELECT COUNT(SpeciesID) AS Species FROM tblSpecies";
												$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysqli_error());
												$row_getPosts = mysqli_fetch_assoc($getPosts);
												$totalRows_getPosts = mysqli_num_rows($getPosts);
												echo number_format($row_getPosts['Species']);
											  ?>
										  species (ca. 97% of the state flora), and
											<?php 
												 
												$query_getPosts = "SELECT COUNT(SpeciesID) AS SpeciesCounty FROM tblSpOccurred";
												$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysqli_error());
												$row_getPosts = mysqli_fetch_assoc($getPosts);
												$totalRows_getPosts = mysqli_num_rows($getPosts);
												echo number_format($row_getPosts['SpeciesCounty']);
											  ?>
								  county occurrences for browse and search in the Vascular Plant Herbarium as of <?php echo date ('F d, Y'); ?>. The remaining 3% are introduced species known from three or fewer counties that have not become established as part of the Tennessee flora.</p>
									<p>Photographs of the woody plants of Tennessee (with Wofford &amp; Chester caption) are from &ldquo;Guide to Trees, Shrubs, and Woody Vines of Tennessee&rdquo; by B. Eugene Wofford &amp; Edward W. Chester. For additional information about this book contact the University of Tennessee Press (under seasonal catalogs) at: <A href="http://www.utpress.org/" target="_blank">www.utpress.org</A>. </p>
									<p>Approximately 1,100 images of grasses, sedges, and rushes were scanned and processed by Chris A. Fleming, botany graduate student, from specimens deposited in the University of Tennessee Herbarium (TENN). 4,396 images of mostly herbaceous species were also added to image archive and photo link entries of database by Chris Fleming as of October 14, 2004. Images are dynamically linked and displayed upon users inquiry via the online Flora Database developed by Victor Ma.</p>
									<p>Daniel Reed has generously provided 269 excellent images now available for viewing on November 1, 2002 from his website "Wildflowers of the Southeastern United Sates." This site has numerous other images and additional information about each species. We highly recommend that you visit <A href="http://www.2bnthewild.com/" target="_blank">www.2bnthewild.com</A>.</p>
									<p>Dennis D. Horn is a retired engineer; his interest in vascular plants began in 1965 while hiking in the Smokies. He has been involved with the TN Native Plant Society since 1978 and is currently Vice-President. He is also a member of the Scientific Advisory Committee for rare plants in TN. He began plant photography in the early 1980's and has recently provided 332 high quality images made available for viewing on December 13, 2002.</p>
									<p>The Division of Natural History, Tennessee Dept. of Environment and Conservation, has provided over 100 images of a significant number of Tennessee rare plants as well as many of the endemic or near endemic species from the cedar glades of middle Tennessee. These images were made available for viewing on December 13, 2002. </p>
									<p>Thomas G. Barnes, Univ. of Kentucky, has provided over 600 excellent images made available for viewing on February 28, 2003. Many of these images will appear in a forthcoming Univ. Press of KY book, A Guide to the Wildflowers and Ferns of Kentucky. Dr. Barnes in an Extension Professor &amp; Wildlife Specialist and an award-winning photographer and writer (Gardening for the Birds &amp; Kentucky's Last Great Places).</p>
									<p>The Tennessee Native Plant Society (TNPS) contributed over 300 images now available for viewing. Numerous members provided these images and are acknowledged with their photographs. These and nearly 500 additional high quality images appear in the official TNPS field guide Wildflowers of Tennessee, the Ohio Valley, and the Southern Appalachians published in May 2005. Over 1250 species in 90 plant families are described with special notes added about history, folklore, ethnobotany, and origin of plant names. For additional information visit the TNPS website at <A href="http://www.tnps.org/" target="_blank"> www.tnps.org</A></p>
									<p>Steve Baskauf, Vanderbilt University, provided 400 high quality images posted on the website in September 2005. These images and many others can also be viewed on his bioimages website: <A href="http://bioimages.cas.vanderbilt.edu/" target="_blank">bioimages.cas.vanderbilt.edu</A></p>
									<p>Eugene Wofford, emeritus director of the TENN Herbarium, provided 701 new images of woody plants in winter condition (386 taxa from 161 families) added on July 21, 2008. </p>
								 <p>The initiative to add plant images to our existing distribution maps of the vascular plants of Tennessee began with a grant from The University of Tennessee Libraries Digital Center (DLC). To date, the DLC has provided ca. 1,500 electronic images that are now available for viewing. The majority of original images were provided by personnel of The University of Tennessee Botany Dept., Knoxville, TN and the Austin Peay State University Center for Field Biology, Clarksville, TN. </p>
									<h3>Copyright Disclaimer</h3>
									<p>Usage and reproduction of distribution maps, images, and other data are authorized without permission for personal, noncommercial, educational, or scientific purposes. We request that the University of Tennessee Herbarium and a photographer and/or copyright holder be properly acknowledged. This web site may not be used for commercial purposes or added to other web pages accessible on the world wide web without prior permission. Please contact <A href="mailto:molive18@utk.edu">Margaret Oliver</A> for permission requests.</p>
									<h3>List of Photographers</h3>
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
									  <tr>
										<th>Photographer</th>
										<th>Institution/Location</th>
										<th width="225">Email</th>
									  </tr>
									  <?php
										
										 
										$query_getPosts = "SELECT * FROM tblPhotographer ORDER BY LastName ASC";
										$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysqli_error());
										$row_getPosts = mysqli_fetch_assoc($getPosts);
										$totalRows_getPosts = mysqli_num_rows($getPosts);
										
										do { ?>
										<tr>
										  <td><?php echo $row_getPosts['PhotographerName']; ?></td>
										  <td><?php echo $row_getPosts['InstitutionAddress']; ?></td>
										  <td><?php echo $row_getPosts['Email']; ?></td>
										</tr>
									  <?php } while ($row_getPosts = mysqli_fetch_assoc($getPosts)); ?>
									  </table>

    <!-- And here are a couple of helpers to get you started in page layout -->
    <!-- Whenever you need to begin a fresh 'new row' of content. Add br with the class of clear -->
    
    <br class="clear">
				 </div><!-- .entry-content -->
    <!-- And here begins the Content area. This is where you place your content -->
						
					<footer class="entry-meta">

   </footer><!-- .entry-meta -->
				</article><!-- #post -->

			
		</div>



    <!-- If you would like to have an 'expanded footer' (four columns of supplementary content) you should place it here. -->
    <!-- For a sample of the Expanded footer's HTML, check the `/library/partials/` directory. -->




	</div><!-- #primary -->
</div><!-- .main-content -->

 <footer id="colophon" class="site-footer" role="contentinfo">

    <!-- If you would like to have an 'expanded footer' (four columns of supplementary content) you should place it here. -->
    <!-- For a sample of the Expanded footer's HTML, check the `/library/partials/` directory. -->

 
 <?php include_once ("includes/footer.php");?>