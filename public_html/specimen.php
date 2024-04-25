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
				  <?php 
					// if the url field is empty 
					if(isset($_POST['url']) && $_POST['url'] == ''){
					
						 // put your email address here 
                        if( $_POST['specimen'] == 'Fungus' ) {
							 $youremail = 'pmatheny@utk.edu';     
						 } else {
							 $youremail = 'jbudke@utk.edu'; 
						 }
					
						 // prepare a "pretty" version of the message
						 $body = "Date:  $_POST[date]
Type of Speciment:  $_POST[specimen]
Borrower's Name:  $_POST[name]
Title/Position:  $_POST[title]
Institution Name:  $_POST[institution]
Institution Acronym:  $_POST[acronym]
Address 1:  $_POST[addr1]
Address 2:  $_POST[addr2]
Address 3:  $_POST[addr3]
City, ST ZIP: $_POST[city], $_POST[state] $_POST[zip]
Country:  $_POST[country]
Email:  $_POST[email]
Phone:  $_POST[phone]
Researcher's Name:  $_POST[researcher]
Researcher's Title/Position:  $_POST[restitle]
Description of Research:  $_POST[descript]"; 
					
						 // Use the submitters email if they supplied one     
						 // (and it isn't trying to hack your form).     
						 // Otherwise send from your email address.     
					
						 if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
							 $headers = "From: $_POST[email]";     
						 } else {
							 $headers = "From: $youremail"; 
						 }
					
						 // finally, send the message     
						 mail($youremail, 'Herbarium Specimen Off-Campus Loan Request Form', $body, $headers ); } // otherwise, let the spammer think that they got their message through
					?>

                    <h2 class="entry-title">Thank You!</h2>
                  </header>
                    <p>Your request form has been submitted.</p>
			  <p><A href="index.php"><EM><STRONG>CLICK HERE</STRONG></EM></A> to return to the main page.</p>

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