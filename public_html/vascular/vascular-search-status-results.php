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

$varState=$_GET["StateStatusID"];
$varFederal=$_GET["FedStatusID"];
if ($varState != "") {
  $varStatus=$varState;
}
if ($varFederal != "") {
  $varStatus=$varFederal;
}

 
$query_getPost = sprintf("SELECT tblStateStatus.StateStatus, tblCategory.CategoryName, tblFamily.FamilyName, tblFedStatus.FedStatus, tblFedStatus.Description, tblStateStatus.Description, tblGenus.GenusName, tblSpecies.SpeciesName, tblSpecies.Author, tblCommonName.CommonName, tblSynonym.Synonym FROM (tblCategory INNER JOIN tblFamily ON tblCategory.CategoryID = tblFamily.CategoryID) INNER JOIN (tblSynonym RIGHT JOIN (tblCommonName INNER JOIN (((tblStateStatus INNER JOIN (tblGenus INNER JOIN (tblFedStatus INNER JOIN tblSpecies ON tblFedStatus.FedStatusID = tblSpecies.FedStatusID) ON tblGenus.GenusID = tblSpecies.GenusID) ON tblStateStatus.StateStatusID = tblSpecies.StateStatusID) INNER JOIN tblLinkCommName ON tblSpecies.SpeciesID = tblLinkCommName.SpeciesID) LEFT JOIN tblLinkSynonym ON tblSpecies.SpeciesID = tblLinkSynonym.SpeciesID) ON tblCommonName.CommID = tblLinkCommName.CommID) ON tblSynonym.SynID = tblLinkSynonym.SynID) ON tblFamily.FamilyID = tblGenus.FamilyID");

if ($varState != "") {
  $query_getPost.=" WHERE tblStateStatus.StateStatus = '".$varState."' ";
  $query_getPost.=" ORDER BY tblGenus.GenusName, tblSpecies.SpeciesName;";
}
elseif ($varFederal != "") {
  $query_getPost.=" WHERE tblFedStatus.FedStatus = '".$varFederal."' "; 
  $query_getPost.=" ORDER BY tblGenus.GenusName, tblSpecies.SpeciesName;";
}
else {
	echo "Record not found";
}

$getPost =mysqli_query($Herbarium, $query_getPost)
 or die(mysql_error());
$row_getPost = mysqli_fetch_assoc($getPost);
$totalRows_getPost = mysqli_num_rows($getPost);

$GenusLast = 'NA';
$SpeciesLast  = 'NA';
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
								  <h4>Vascular Plant Database Family Results</h4>
								  <p><strong>Status:</strong> <?php echo $varStatus; ?></p>
									  <?php if ($varStatus != "Possibly Extirpated") {?>
									  <?php do {
											if ($row_getPost['SpeciesName'] != $SpeciesLast) {?>
													<ul>
														<li><strong><a href="vascular-database.php?CategoryID=<?php echo $row_getPost['CategoryName']; ?>&FamilyID=<?php echo $row_getPost['FamilyName']; ?>&GenusID=<?php echo $row_getPost['GenusName']; ?>&SpeciesID=<?php echo $row_getPost['SpeciesName']; ?>"><?php echo $row_getPost['GenusName']; ?> <?php echo $row_getPost['SpeciesName']; ?></a></strong>
														
														<?php echo $row_getPost['Author']; ?>
														  
														  <br><strong>Common Name:</strong> <?php echo $row_getPost['CommonName']; ?>
														  
														  <?php if ($row_getPost['Synonym'] != '') {  ?>
														  <br><strong>Synonyms:</strong><br>
														  <?php } ?>
													  </li>
													</ul>
												<?php } 
												$SpeciesLast = $row_getPost['SpeciesName']; ?>
													<ul style="line-height: 12px;">
														<?php if ($row_getPost['Synonym'] != '') {  ?>
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; <?php echo $row_getPost['Synonym']; ?>
															<?php } ?>
													</ul>
										<?php } while ($row_getPost = mysqli_fetch_assoc($getPost)); ?>
										<?php } else { ?>
									<p>There are no records available for this category.</p>
										<?php } ?>
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