<?php require_once('../Connections/herbarium.php'); ?>

<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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

$varCategory = mysql_real_escape_string($_GET["CategoryID"]);
$varFamily = mysql_real_escape_string($_GET["FamilyID"]);
$varGenus = mysql_real_escape_string($_GET["GenusID"]);
$varSpecies = mysql_real_escape_string($_GET["SpeciesID"]);

if ($varCategory != "" && $varFamily != "" && $varGenus != "") {

 
$query_getPosts = "SELECT tblGenus.GenusName, tblSpecies.SpeciesName FROM tblGenus INNER JOIN tblSpecies ON tblGenus.GenusID = tblSpecies.GenusID WHERE tblGenus.GenusName = '$varGenus' ORDER BY tblSpecies.SpeciesName;";	

$selectCount = "SELECT COUNT(tblSpecies.SpeciesName) AS CountOfSpeciesName FROM tblGenus INNER JOIN tblSpecies ON tblGenus.GenusID = tblSpecies.GenusID WHERE tblGenus.GenusName='$varGenus';";

$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
$totalRows_getPosts = mysql_num_rows($getPosts);
	
$varCount =mysqli_query($selectCount);
$countSpecies = mysqli_fetch_assoc($varCount);
}

?>

<?php include_once ("../includes/header.php");?>

<SCRIPT LANGUAGE="JavaScript">
	 function retrace()
	 {
	   history.back() 
	 }
</SCRIPT>

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
								  <h3><strong>Atlas</strong></h3>

									<h4><?php echo $varCategory; ?>: <?php echo $varFamily; ?></h4>
									<p align="center"><?php if ($varSpecies != "") { ?>
									<IMG SRC="atlasD/<?php echo strtolower($varCategory); ?>/<?php echo strtolower($varFamily); ?>/<?php echo strtolower($varGenus); ?>-<?php echo str_replace(" ","%20",$varSpecies);?>.gif" alt="Map of <?php echo $varGenus; ?> <?php echo $varSpecies; ?>"></p>
								<?php } else { ?>
									<p><strong>Distribution Map(s) Available: <?php echo $countSpecies['CountOfSpeciesName']; ?></strong></p>
									<?php } ?>
									<p>Click the thumbnail(s) below to see the enlarged map for each species under the <strong>Genus <span style="color: #006C93;"><?php echo $varGenus; ?></span></strong>.</p>
									<?php									
									while ($row_getPosts = mysqli_fetch_assoc($getPosts)) {?>
										  <div class="one-fourth column" align="center" style="height: 100px;">
											  <a href = "vascular-maps.php?CategoryID=<?php echo $varCategory; ?>&FamilyID=<?php echo $varFamily; ?>&GenusID=<?php echo $varGenus; ?>&SpeciesID=<?php echo $row_getPosts['SpeciesName']; ?>" target="_parent"><IMG SRC="atlasD/<?php echo strtolower($varCategory); ?>/<?php echo strtolower($varFamily); ?>/<?php echo strtolower($varGenus); ?>-<?php echo str_replace(" ","%20",$row_getPosts['SpeciesName']);?>.gif" alt="Map of <?php echo $varGenus; ?> <?php echo $row_getPosts['SpeciesName']; ?>" width="150"><br><?php echo $row_getPosts['SpeciesName'] ?></a>
											</div>
									<?php }?>
									<h6 align="center">NOTE: orange = species presence | grey = species not observed</h6>
								  <br clear="all" />
								  <div>
									  <FORM id=form1 name=form1>
										<INPUT TYPE="BUTTON" NAME="GOBACK" VALUE="Previous Page" OnCLick="retrace()">
									  </FORM>
							  		</div>
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