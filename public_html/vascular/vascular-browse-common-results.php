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

$colname_getPost = "-1";
if (isset($_GET['CommID'])) {
  $colname_getPost = $_GET['CommID'];
}
else {
	echo "Record not found";
}
 
$query_getPost = sprintf("SELECT tblCategory.CategoryName, tblFamily.FamilyName, tblGenus.GenusName, tblSpecies.SpeciesName, tblSpecies.Author, tblCommonName.CommonName, tblSynonym.Synonym, tblSpecies.OriginID, tblNWIStatus.NWIStatus, tblStateStatus.StateStatus, tblFedStatus.FedStatus FROM tblStateStatus INNER JOIN (tblFedStatus INNER JOIN (tblNWIStatus INNER JOIN (tblSynonym RIGHT JOIN (((((tblCategory INNER JOIN tblFamily ON tblCategory.CategoryID = tblFamily.CategoryID) INNER JOIN tblGenus ON tblFamily.FamilyID = tblGenus.FamilyID) INNER JOIN tblSpecies ON tblGenus.GenusID = tblSpecies.GenusID) INNER JOIN (tblCommonName INNER JOIN tblLinkCommName ON tblCommonName.CommID = tblLinkCommName.CommID) ON tblSpecies.SpeciesID = tblLinkCommName.SpeciesID) LEFT JOIN tblLinkSynonym ON tblSpecies.SpeciesID = tblLinkSynonym.SpeciesID) ON tblSynonym.SynID = tblLinkSynonym.SynID) ON tblNWIStatus.NWI = tblSpecies.NWI) ON tblFedStatus.FedStatusID = tblSpecies.FedStatusID) ON tblStateStatus.StateStatusID = tblSpecies.StateStatusID WHERE tblCommonName.CommID = %s ORDER BY tblGenus.GenusName, tblSpecies.SpeciesName, tblSpecies.Author;", GetSQLValueString($colname_getPost, "int"));
$getPost =mysqli_query($Herbarium, $query_getPost)
 or die(mysqli_error());
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
								  <h4>Vascular Plant Database Common Name Results</h4>
								  <p>Click on the species name to see the species distribution map       and photo image.</p>
								  <p><strong>Common Name:</strong> <?php echo $row_getPost['CommonName']; ?><br>
						          <strong>Family Name:</strong> <?php echo $row_getPost['FamilyName']; ?></p>
									<div class="box-light limestone"><h4 align="center">SPECIES</h4></div>
									<?php do {
												if ($row_getPost['SpeciesName'] != $SpeciesLast) {?>
													<ul>
														<li><strong><a href="vascular-database.php?CategoryID=<?php echo $row_getPost['CategoryName']; ?>&FamilyID=<?php echo $row_getPost['FamilyName']; ?>&GenusID=<?php echo $row_getPost['GenusName']; ?>&SpeciesID=<?php echo $row_getPost['SpeciesName']; ?>"><?php echo $row_getPost['GenusName']; ?> <?php echo $row_getPost['SpeciesName']; ?></a></strong>
														
														<?php if ($row_getPost['OriginID'] != '1') {  ?>*
														
														<?php } echo $row_getPost['Author']; ?>
														
														<?php if ($row_getPost['StateStatus'] != 'No Status') {  ?>
														<span style="color: #517C96">(TN <?php echo $row_getPost['StateStatus']; ?>)
														  <?php }?>
														  
														<?php if ($row_getPost['FedStatus'] != 'No Status') {  ?>
														&nbsp;(<?php echo $row_getPost['FedStatus']; ?>)
															<?php }?> </span>  
														
														  <?php if ($row_getPost['NWIStatus'] != 'Not Applicable') {  ?>
														  <br><strong>NWI R2 TN:</strong> <?php echo $row_getPost['NWIStatus']; ?>
														  <?php }?>
														  
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
								  <hr>
									 <h6>*Non-native taxon known to be naturalized in Tennessee</h6>
									<h6>
										All names &amp; statuses follow the <A href="http://utpress.org/title/guide-to-the-vascular-plants-of-tennessee/" target="new"><em>Guide to the Vascular Plants of Tennessee</em></A> (2015). <br>
										 <a href="vascular-description.php">Click here </a> for a description of rare, threatened, or endangered (RTE) status &amp; National Wetland Indicator (NWI)  status.<br> </h6>
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