<?php include_once ("includes/header.php");?>

<style>
.antispam { display:none;}
</style>

<?php include_once ("includes/nav.php");?>
      
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
                  <header class="entry-header">
                    <h1 class="entry-title">Herbarium Specimen Off-Campus Loan Request Form</h1>
                  </header>
									<p><STRONG>Please complete the form below and click <strong>"Submit Form"</strong> on bottom of the page when finished.</STRONG></p>
									<form name="specimen" action="specimen.php" method="post" id="specimen">
            						  <input type="hidden" name="form_name" value="specimen" />
                                      <p>
                                        <label for="date">Date:</label>
                                        <input name="date" type="text" required="required" size="12" maxlength="24" />
                                      <em>(MM/DD/YY)</em></p>
                                      <p><strong>Type of Specimen:</strong>
<label>
                    <select name="specimen" required >
                      <option selected="selected">- please select specimen -</option>
                      <option value="Bryophytes">Bryophytes</option>
                      <option value="Fungus">Fungus</option>
                      <option value="Vascular Plants">Vascular Plants</option>
                    </select>
                    </label>
                                      </p>
                                      <p><strong>Requester's Full Name:</strong>
                                        <input name="name" type="text" required size="48" maxlength="64" />
                                      </p>
                                      <p><strong>Title/Position</strong>:
<input name="title" type="text" size="32" maxlength="64" />
                                      </p>
                                      <p><strong>Institution Name:</strong>
                                        <input name="institution" type="text" required="required" size="32" maxlength="64" />
                      &nbsp;&nbsp;&nbsp;&nbsp;<strong>Institution Acronym:
                        </strong>
                      <input name="acronym" type="text" size="12" maxlength="64" />
                                      </p>
                                      <p><strong>Address 1:</strong>
                                        <input name="addr1" type="text" size="48" maxlength="64" />
                                      </p>
                                      <p><strong>Address 2:
                                      </strong>
                                        <input name="addr2" type="text" size="48" maxlength="64" />
                                      </p>
                                      <p><strong>Address 3:
                                      </strong>
                                        <input name="addr3" type="text" size="48" maxlength="64" />
                                      </p>
                                      <p><strong>City, ST, Zip:</strong>
                                        <input name="city" type="text" size="32" maxlength="64" />
                        ,
                        <input name="state" type="text" size="4" maxlength="4" /> 
                        <input name="zip" type="text" size="12" maxlength="12" />
                                      </p>
                                      <p><strong>Country: 
                                      </strong>
                                        <input name="country" type="text" size="48" maxlength="64" />
                                      </p>
                                      <p><strong>Email:
                                      </strong>
                                        <input name="email" type="text" required="required" size="32" maxlength="64" />
                        <br />
                                      </p>
                                      <p><strong>Phone:</strong>
                                        <input name="phone" type="text" required="required" size="24" maxlength="32" />
                                      </p>
                                      <p><strong>If you are a student, please list your supervisor's information below:</strong></p>
                                      <p><strong>Full Name:</strong>
                                        <input name="researcher" type="text" required="required" size="48" maxlength="64" />
                                      </p>
                                      <p><strong>Title/Position:</strong>
                                        <input name="restitle" type="text" size="32" maxlength="64" />
                                      </p>
                                      <p><strong>Email:
                                      </strong>
                                        <input name="sup_email" type="text" required="required" size="32" maxlength="64" />
                        <br />
                                      </p></p>
                                      <p><strong>Descriptions of Specimens and Remarks:</strong><br />
                        <textarea name="descript" cols="64" rows="10" id="Research"></textarea>
                                      </p>
                                      <h6><em><strong>Please provide as much detail as possible. (i.e. specimen numbers, locations, geographic scope, synonyms, expected term of loan, etc.)</strong></em></h6>                      
					<p class="antispam">Leave this empty: <input type="text" name="url" /></p>
								    <p>
								      <input type="submit" name="submit" id="submit" value="Submit Form">
								    </p>
                        <input name="reset" type="reset" value="Reset Form" />

                      </p>
                  </form>

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

    
  <?php include_once ("includes/footer.php");?>