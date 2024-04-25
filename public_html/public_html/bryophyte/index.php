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

<!--  <div class="entry-thumbnail"><img src="images/main.png" class="attachment-large wp-post-image" alt="Magnolia Blossoms" style="width:100%;" /></div>-->


		
		
		<div id="content" class="site-content site-content wide" role="main">

				<article class="hentry">

        <!-- And here begins the Content area. This is where you place your content -->

								<div class="entry-content reg">
         <header class="entry-header"><h1 class="entry-title">Bryophyte Herbarium</h1>
         </header> 				
								<?php include_once ("slider.php");?>
								 <p>The Bryophyte herbarium has been curated by  two individuals, A. J. Sharp (1934-1974) and D. K. Smith (1974-2015). The collection was inventoried in 1995 and contained approximately 165,000 specimens. At that time, included were 254 known type specimens (59 hepatics including hornworts and 195 mosses). An estimated 50 or more types are likely commingled with the general collections, based on our recovery rates over the years. For year 2007 the collection contains ca. 150,000 mosses, 20,000 liverworts (and hornworts), and 13,000 lichens. Stotler and Crandall-Stotler (1977) reported 119 genera of liverworts (including hornworts) for North  America; of which 117 genera are represented in TENN. Anderson, Crum, and Buck (1990) listed 312 genera of mosses for North America; of which 305 genera are represented in TENN. The most recent world list of moss genera (Crosby &amp; Magill 1977) enumerated ca. 750 genera. TENN contains 754 generic folders of mosses and we estimate 10% to be synonomic within the collection; thereby, distinguishing the moss collection as representative of 80-90% of the world's genera. </p>
								 <p> The collection houses 183,000 filed specimens from throughout the World.The herbarium is recently imaging, databasing, and uploading specimen info to the Bryophyte portal (see Consortium of North American Bryophyte Herbaria under Databases below). The collection has a strong emphasis on North America (Pacific Northwest and Alaska, SE US), Mexico, Asia and Tennessee Appalachian Region. The collection is especially strong in collections from the Southern Appalachians and from Mexico, a result of extensive collecting by A.J. Sharp and other notable collectors.</p>
								 <h4>Databases</h4>
								 <ul>
								  <LI><A href="http://bryophyteportal.org/" target="new">Consortium of North American Bryophyte Herbaria</A></LI>
								  <LI><A href="moss-checklist.php">TENN Mosses from Consortium Database</A></LI>
								 </ul> 
							  <hr>
									<h6><EM>If you have any questions or comments, please contact <A href="mailto:jbudke@utk.edu">Dr. Jessica M. Budke</A></EM>.</h6> 
								  
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

  
 <?php include_once ("../includes/footer.php");?>