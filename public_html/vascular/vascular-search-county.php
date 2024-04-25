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
								  <h3><strong>Search Database by County</strong></h3>
								  <form action="vascular-search-county-results.php" method="post">
								    <p>
								      <label for="select">County:</label>
								      <select name="CountyNameID" id="CountyNameID">
								        <OPTION selected="selected">Anderson</OPTION>  
								        <OPTION>Bedford</OPTION>   
								        <OPTION>Benton</OPTION>
								        <OPTION>Bledsoe</OPTION>   
								        <OPTION>Blount</OPTION>    
								        <OPTION>Bradley</OPTION>
								        <OPTION>Campbell</OPTION>  
								        <OPTION>Cannon</OPTION>    
								        <OPTION>Carroll</OPTION>
								        <OPTION>Carter</OPTION>    
								        <OPTION>Cheatham</OPTION>  
								        <OPTION>Chester</OPTION>
								        <OPTION>Claiborne</OPTION> 
								        <OPTION>Clay</OPTION>      
								        <OPTION>Cocke</OPTION>
								        <OPTION>Coffee</OPTION>    
								        <OPTION>Crockett</OPTION>  
								        <OPTION>Cumberland</OPTION>
								        <OPTION>Davidson</OPTION>  
								        <OPTION>Decatur</OPTION>   
								        <OPTION>DeKalb</OPTION>
								        <OPTION>Dickson</OPTION>   
								        <OPTION>Dyer</OPTION>      
								        <OPTION>Fayette</OPTION>
								        <OPTION>Fentress</OPTION>  
								        <OPTION>Franklin</OPTION>  
								        <OPTION>Gibson</OPTION>
								        <OPTION>Giles</OPTION>     
								        <OPTION>Grainger</OPTION>  
								        <OPTION>Greene</OPTION>
								        <OPTION>Grundy</OPTION>    
								        <OPTION>Hamblen</OPTION>   
								        <OPTION>Hamilton</OPTION>
								        <OPTION>Hancock</OPTION>   
								        <OPTION>Hardeman</OPTION>  
								        <OPTION>Hardin</OPTION>
								        <OPTION>Hawkins</OPTION>   
								        <OPTION>Haywood</OPTION>   
								        <OPTION>Henderson</OPTION>
								        <OPTION>Henry</OPTION>     
								        <OPTION>Hickman</OPTION>   
								        <OPTION>Houston</OPTION>
								        <OPTION>Humphreys</OPTION> 
								        <OPTION>Jackson</OPTION>   
								        <OPTION>Jefferson</OPTION>
								        <OPTION>Johnson</OPTION>   
								        <OPTION>Knox</OPTION>      
								        <OPTION>Lake</OPTION>
								        <OPTION>Lauderdale</OPTION>
								        <OPTION>Lawrence</OPTION>  
								        <OPTION>Lewis</OPTION>
								        <OPTION>Lincoln</OPTION>   
								        <OPTION>Loudon</OPTION>    
								        <OPTION>Macon</OPTION>
								        <OPTION>Madison</OPTION>   
								        <OPTION>Marion</OPTION>    
								        <OPTION>Marshall</OPTION>
								        <OPTION>Maury</OPTION>     
								        <OPTION>McMinn</OPTION>    
								        <OPTION>McNairy</OPTION>
								        <OPTION>Meigs</OPTION>     
								        <OPTION>Monroe</OPTION>    
								        <OPTION>Montgomery</OPTION>
								        <OPTION>Moore</OPTION>     
								        <OPTION>Morgan</OPTION>    
								        <OPTION>Obion</OPTION>
								        <OPTION>Overton</OPTION>   
								        <OPTION>Perry</OPTION>     
								        <OPTION>Pickett</OPTION>
								        <OPTION>Polk</OPTION>      
								        <OPTION>Putnam</OPTION>    
								        <OPTION>Rhea</OPTION>
								        <OPTION>Roane</OPTION>     
								        <OPTION>Robertson</OPTION> 
								        <OPTION>Rutherford</OPTION>
								        <OPTION>Scott</OPTION>     
								        <OPTION>Sequatchie</OPTION>
								        <OPTION>Sevier</OPTION>
								        <OPTION>Shelby</OPTION>    
								        <OPTION>Smith</OPTION>     
								        <OPTION>Stewart</OPTION>
								        <OPTION>Sullivan</OPTION>  
								        <OPTION>Sumner</OPTION>    
								        <OPTION>Tipton</OPTION>
								        <OPTION>Trousdale</OPTION> 
								        <OPTION>Unicoi</OPTION>    
								        <OPTION>Union</OPTION>
								        <OPTION>Van Buren</OPTION> 
								        <OPTION>Warren</OPTION>    
								        <OPTION>Washington</OPTION>
								        <OPTION>Wayne</OPTION>     
								        <OPTION>Weakley</OPTION>   
								        <OPTION>White</OPTION>
								        <OPTION>Williamson</OPTION>
								        <OPTION>Wilson</OPTION>
							          </select>
							        </p>
								    <p>
								      <label for="CategoryNameID">Category:</label>
                                      <select name="CategoryNameID" id="CategoryNameID">
                        				<OPTION selected="selected">Dicots</OPTION>
										<OPTION>Gymnosperms</OPTION>
                        				<OPTION>Monocots</OPTION> 
                                   		<OPTION>Pteridophytes</OPTION>
                                      </select>
								    </p>
								    <p>
								      <label for="OriginNameID">Nativity:</label>
                                      <select name="OriginNameID" id="OriginNameID">
                        				<OPTION selected="selected">Native</OPTION> 
                                     	<OPTION>Introduced</OPTION>
                                      </select>
								    </p>
								    <p>
								      <input type="submit" name="submit" id="submit" value="Search">
								    </p>
								  </form>
								  <hr>
								  <h6>Search Notes:</h6>
                                  <ol>
                                    <li>
                                      <h6>The search may take a couple of minutes to complete depending on your Internet connection speed and the number of records entered in the county.</h6>
                                    </li>
                                    <li>
                                      <h6>Search result contains only those taxa that have been entered into the TENN flora database.  If you have knowledge of a plant not listed, please contact Dr. B. E. Wofford at <A href="mailto:bewofford@utk.edu">bewofford@utk.edu</A>.								  </h6>
                                    </li>
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