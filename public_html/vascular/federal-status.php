<?php require_once('../Connections/herbarium.php'); ?>

<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($Herbarium, $theValue);

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

 
$query_getPosts = "SELECT * FROM tblFedStatus WHERE FedStatusID != 'N/A' ORDER BY FedStatus ASC";
$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysqli_error());
$row_getPosts = mysqli_fetch_assoc($getPosts);
$totalRows_getPosts = mysqli_num_rows($getPosts);
?>

<?php include_once ("../includes/header.php");?>
<?php include_once ("../includes/nav.php");?>
      
	<div id="primary" class="content-area">
		<div id="sitetitle" class="site-header">
      <h2 class="department"><a href="http://herbarium.utk.edu/" title="University of Tennessee Herbarium - TENN" rel="home">UT Herbarium - TENN</a>
       <small><a href="http://Herbarium.utk.edu">College of Arts &amp; Sciences</a></small> </h2> 
		</div>


                    <!-- Would you like a big image. This is where you'd put it. -->

<!--    <div class="entry-thumbnail"><img src="images/main.png" class="attachment-large wp-post-image" alt="Magnolia Blossoms" style="width:100%;" /></div>-->


		
		
		<div id="content" class="site-content site-content wide" role="main">

				<article class="hentry">

                <!-- And here begins the Content area. This is where you place your content -->

								<div class="entry-content reg">
                  <header class="entry-header"><h1 class="entry-title">Vascular Plant Herbarium</h1>
                  </header> 
								  <h3>Federal Status</h3>
									  <?php do { ?>
										<h4><a href="vascular-search-status-results.php?FedStatusID=<?php echo $row_getPosts['FedStatus']; ?>"><?php echo $row_getPosts['FedStatus']; ?></a></h4>
										<ul><?php echo $row_getPosts['Description']; ?></ul>
									  <?php } while ($row_getPosts = mysqli_fetch_assoc($getPosts)); ?>
								  <hr>
                                  <h6><em>Searches may take a couple of minutes to complete depending on your Internet connection speed and the number of records entered.</em></h6>
                                  <h6><em>The State and Federal Status are based on <A href="http://www.state.tn.us/environment/na/pdf/plant_list.pdf" target="new">Tennessee Natural Heritage Program Rare Plant List 2008</A>, and updated on-line by Pat Barnwell. Search result contains only those taxa that have been entered into the TENN flora database.  If you have knowledge of a plant not listed, please contact Dr. B. E. Wofford at <A href="mailto:bewofford@utk.edu">bewofford@utk.edu</A>. </em></h6>
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