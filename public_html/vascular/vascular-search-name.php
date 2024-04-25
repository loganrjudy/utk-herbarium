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
								  <h3><strong>Search Database by Name</strong></h3>
								  <form action="vascular-search-name-results.php" method="post">
									  <h4 style="color: #8D2048;"><? 
										if ($_GET["error"] == 1) {
										  echo "Incorrect Search Parameters";
										}
										?></h4>
								    <p>
								      <label for="FamilyNameID">Family Name:</label>
                                    <input name="FamilyNameID" type="text" id="FamilyNameID" size="45">
								    </p>
								    <p>
								      <label for="GenusNameID">Genus Name:</label>
                                      <input name="GenusNameID" type="text" id="GenusNameID" size="45">
								    </p>
								    <p>
								      <label for="SpeciesNameID">Specific Epithet:</label>
                                      <input name="SpeciesNameID" type="text" id="SpeciesNameID" size="45">
								    </p>
								    <p>
								      <label for="CommonNameID">Common Name:</label>
                                      <input name="CommonNameID" type="text" id="CommonNameID" size="45">
								    </p>
								    <p>
								      <input type="submit" name="submit" id="submit" value="Search">
								      <input type="reset" name="reset" id="reset" value="Clear">
								    </p>
								  </form>
								  <hr>
								  <h6>Search Notes:</h6>
                                  <ol>
                                    <li>
                                      <h6>The search criteria are not case sensitive.</h6>
                                    </li>
                                    <LI>
                                      <h6>The common name search field will match all names containing the letters/word entered. (i.e. entering "blue" will return all names containing "blue" such as "bluestar", "sky blue", "blue beech" and etc.)</h6>
                                    </LI>
                                    <LI>
                                      <h6>Searches may take a few seconds to a couple of minutes to complete depending on Internet connection speed and the number of records entered in the county.</h6>
                                    </LI>
                                    <LI>
                                      <h6>Search result contains only those taxa that have been entered into the TENN flora database. If you have knowledge of a plant not listed, please contact us. </h6>
                                    </LI>
                                  </ol>
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