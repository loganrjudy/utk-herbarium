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
         <header class="entry-header"><h1 class="entry-title">Fungal Herbarium</h1>
         </header> 				
								<?php include_once ("slider.php");?>
								 <p>The collection houses over 75,000 specimens including ca. 6,000 collections of plant pathogens. The collection consists overwhelmingly of Basidiomycotina (ca. 54,000 specimens), with two extremely strong representation of two groups: clavarioid fungi (&ldquo;coral fungi,&rdquo; Aphyllophorales; worldwide; 9,000 specimens); and mushrooms (Agaricales; worldwide but especially strong in collections from the southern Appalachian Mountains (ca. 40,000 specimens; the research interests of L. R. Hesler for 50 years, and of R. H. Petersen for seven years) . Within the fungus collection are housed ca. 1150 type specimens, ranging from holotypes to paratypes. Important collections include many holotypes of Hesler collections vouchering his several monographs authored singly or with Alexander Smith, holotypes of Petersen collections of clavarioid fungi, vouchering many publications on that group, types specimens of Tremellales from Lindsay S. Olive, and isotype specimens of W. A. Murrill collections sent to Hesler in the 1950'S. </p>
								 <p> The collection is world-wide. We probably have the largest collection of clavaroid fungi from China outside that country. The New Zealand collection is probably the best outside New  Zealand and Zurich. Although much larger and richer fungus collections exist in this country [i.e., New York Botanical Garden (NY), University of Michigan (MICH), National Fungus Collections, Beltsville (BPI)], no other collection can match TENN in southern Appalachian fungi (East Tennessee, western North Carolina).</p>
									<p>In 2020, TENN and 24 collaborating universities, museums, and gardens around the United States were awarded a new grant by the National Science Foundation (NSF): &quot;Building a Global Consortium of Bryophytes and Lichens: Keystones of Cryptobiotic Communities,&quot; also known as the <a href="https://globaltcn.utk.edu/" target="new">GLOBAL Bryophyte and Lichen Thematic Collections Network (TCN)</a>. This will result in the imaging and digitization of almost 1.2 million bryophyte and lichen specimens, which will be available through online databases.</p>
								 <h4>Databases</h4>
								 <ul>
								  <li><A href="http://lichenportal.org/" target="new">Consortium of North American Lichen Herbaria</A></li>
								  <li><a href="http://mycoportal.org/portal/index.php" target="new">Mycology Collections  Portal</a></li>
							     </ul>
                 <hr>
								 <h6><EM>If you have any questions or comments, please contact <A href="mailto:pmatheny@utk.edu">Dr. P. Brandon Matheny </A>or <A href="mailto:khughes@utk.edu">Dr. Karen W. Hughes</A></EM></h6>
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