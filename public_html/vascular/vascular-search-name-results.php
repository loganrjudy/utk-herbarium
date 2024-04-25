<?php require_once('../Connections/herbarium.php'); ?>

<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

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

$varFamily = $_POST["FamilyNameID"];
$varGenus = $_POST["GenusNameID"];
$varSpecies = $_POST["SpeciesNameID"];
$varCommon = $_POST["CommonNameID"];

$varExist = '';
$numcount = 0;

if ($varFamily == "" && $varGenus == "" && $varSpecies == "" && $varCommon == "") {
  header("Location: vascular-search-name.php?error=1"); }

 
$query_getPost = "SELECT tblCategory.CategoryName, tblFamily.FamilyName, tblGenus.GenusName, tblSpecies.SpeciesName, tblSpecies.Author, tblCommonName.CommonName, tblSynonym.Synonym 

FROM tblCategory INNER JOIN tblFamily ON tblCategory.CategoryID = tblFamily.CategoryID
INNER JOIN tblGenus ON tblFamily.FamilyID = tblGenus.FamilyID
INNER JOIN tblSpecies ON tblGenus.GenusID = tblSpecies.GenusID

LEFT JOIN tblLinkCommName ON tblSpecies.SpeciesID = tblLinkCommName.SpeciesID
LEFT JOIN tblCommonName ON tblLinkCommName.CommID = tblCommonName.CommID

LEFT JOIN tblLinkSynonym ON tblLinkSynonym.SpeciesID = tblSpecies.SpeciesID
LEFT JOIN tblSynonym ON tblSynonym.SynID = tblLinkSynonym.SynID";

if ($varFamily != "" && $varGenus != "" && $varSpecies != "" && $varCommon != "") {
  $query_getPost.= " WHERE tblFamily.FamilyName = '$varFamily' ";
  $query_getPost.= " AND   tblGenus.GenusName = '$varGenus' ";
  $query_getPost.= " AND   tblSpecies.SpeciesName = '$varSpecies' ";
  $query_getPost.= " AND   tblCommonName.CommonName LIKE '%$varCommon%' ";
}

elseif ($varFamily != "" && $varGenus != "" && $varSpecies != "" && $varCommon == "") {
  $query_getPost.= " WHERE tblFamily.FamilyName = '$varFamily' ";
  $query_getPost.= " AND   tblGenus.GenusName = '$varGenus' ";
  $query_getPost.= " AND   tblSpecies.SpeciesName = '$varSpecies' ";
}

elseif ($varFamily != "" && $varGenus != "" && $varSpecies == "" && $varCommon != "") {
  $query_getPost.= " WHERE tblFamily.FamilyName = '$varFamily' ";
  $query_getPost.= " AND   tblGenus.GenusName = '$varGenus' ";
  $query_getPost.= " AND   tblCommonName.CommonName LIKE '%$varCommon%' ";
}
  
elseif ($varFamily != "" && $varGenus == "" && $varSpecies != "" && $varCommon != "") {
  $query_getPost.= " WHERE tblFamily.FamilyName = '$varFamily' ";
  $query_getPost.= " AND   tblSpecies.SpeciesName = '$varSpecies' ";
  $query_getPost.= " AND   tblCommonName.CommonName LIKE '%$varCommon%' ";
}
  
elseif ($varFamily == "" && $varGenus != "" && $varSpecies != "" && $varCommon != "") {
  $query_getPost.= " WHERE tblGenus.GenusName = '$varGenus' ";
  $query_getPost.= " AND   tblSpecies.SpeciesName = '$varSpecies' ";
  $query_getPost.= " AND   tblCommonName.CommonName LIKE '%$varCommon%' ";
}

elseif ($varFamily != "" && $varGenus != "" && $varSpecies == "" && $varCommon == "") {
  $query_getPost.= " WHERE tblFamily.FamilyName = '$varFamily' ";
  $query_getPost.= " AND   tblGenus.GenusName = '$varGenus' ";
}

elseif ($varFamily != "" && $varGenus == "" && $varSpecies != "" && $varCommon == "") {
  $query_getPost.= " WHERE tblFamily.FamilyName = '$varFamily' ";
  $query_getPost.= " AND   tblSpecies.SpeciesName = '$varSpecies' ";
}

elseif ($varFamily != "" && $varGenus == "" && $varSpecies == "" && $varCommon != "") {
  $query_getPost.= " WHERE tblFamily.FamilyName = '$varFamily' ";
  $query_getPost.= " AND   tblCommonName.CommonName LIKE '%$varCommon%' ";
}

elseif ($varFamily == "" && $varGenus != "" && $varSpecies != "" && $varCommon == "") {
  $query_getPost.= " WHERE tblGenus.GenusName = '$varGenus' ";
  $query_getPost.= " AND   tblSpecies.SpeciesName = '$varSpecies' ";
}
  
elseif ($varFamily == "" && $varGenus != "" && $varSpecies == "" && $varCommon != "") {
  $query_getPost.= " WHERE tblGenus.GenusName = '$varGenus' ";
  $query_getPost.= " AND   tblCommonName.CommonName LIKE '%$varCommon%' ";
}

elseif ($varFamily == "" && $varGenus == "" && $varSpecies != "" && $varCommon != "") {
  $query_getPost.= " WHERE tblSpecies.SpeciesName = '$varSpecies' ";
  $query_getPost.= " AND   tblCommonName.CommonName LIKE '%$varCommon%' ";
}

elseif ($varFamily != "" && $varGenus == "" && $varSpecies == "" && $varCommon == "") {
  $query_getPost.= " WHERE tblFamily.FamilyName = '$varFamily' ";
}
  
elseif ($varFamily == "" && $varGenus != "" && $varSpecies == "" && $varCommon == "") {
  $query_getPost.= " WHERE tblGenus.GenusName = '$varGenus' ";
}
  
elseif ($varFamily == "" && $varGenus == "" && $varSpecies != "" && $varCommon == "") {
  $query_getPost.= " WHERE tblSpecies.SpeciesName = '$varSpecies' ";
}
  
elseif ($varFamily == "" && $varGenus == "" && $varSpecies == "" && $varCommon != "") {
  $query_getPost.= " WHERE tblCommonName.CommonName LIKE '%$varCommon%' ";
}


else {
	echo "Record not found";
	$query_getPost.= " WHERE tblFamily.FamilyName = ''";
}

$query_getPost.= " ORDER BY tblFamily.FamilyName, tblGenus.GenusName, tblSpecies.SpeciesName, tblSpecies.Author, tblSynonym.Synonym;";

$getPost =mysqli_query($Herbarium, $query_getPost)
 or die(mysqli_error());
$row_getPost = mysqli_fetch_assoc($getPost);
$totalRows_getPost = mysqli_num_rows($getPost);

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
                  
                  <?php 
					if ($varFamily == "") {
					  $varFamily="<em>- all families -</em>";
					}
					if ($varGenus == "") {
					  $varGenus="<em>- all genus -</em>";
					}
					if ($varSpecies == "") {
					  $varSpecies="<em>- all species -</em>";
					}
					if ($varCommon == "") {
					  $varCommon="<em>- all names -</em>";
					}
					?>
								  <h3><strong>Search Results:</strong></h3>
								  <p><strong>Family Name:</strong> <?php echo $varFamily; ?><br>
							      <strong>Genus:</strong> <?php echo $varGenus; ?><br>
							      <strong>Species:</strong> <?php echo $varSpecies; ?><br>
								  <strong>Common Name:</strong> <?php echo $varCommon; ?><br></p>
							      
						
						<?php do {
							$varExist = TRUE;
						} while ($row_getPost = mysqli_fetch_assoc($getPost)) ?>
						
						<?php if ($varExist == TRUE) { ?>
							      
					
						<p>Click on the species name to see the species distribution map.</p>
						
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						    <tr style="background-color: #dddddd;">
						      <th width="200">FAMILY NAME</th>
						      <th>SPECIES NAME</th>
				          	</tr>
				          
			          <?php
						$getPost =mysqli_query($Herbarium, $query_getPost)
 or die(mysqli_error());
						$totalRows_getPost = mysqli_num_rows($getPost);
						do {
						?>
					    
						    <tr>
		          		 	<?php if (!($GenusLast == $row_getPost['GenusName'] && $SpeciesLast == $row_getPost['SpeciesName'])) {
							if ($FamilyLast != $row_getPost['FamilyName']) { ?>
									<td><strong><?php echo $row_getPost['FamilyName']; ?></strong></td>
						      	<?php } else { ?>
							  		<td style="border-top: none;">&nbsp;</td>
					      		<?php } $FamilyLast = $row_getPost['FamilyName'];?>
					      		
						      <?php if ($GenusLast != $row_getPost['GenusName'] && $GenusLast == $row_getPost['GenusName']) { ?>
						      <td>
						      <strong><?php echo $row_getPost['GenusName']; ?></strong> [<a href="vascular-maps.php?CategoryID=<?php echo $row_getPost['CategoryName']; ?>&FamilyID=<?php echo $row_getPost['FamilyName']; ?>&GenusID=<?php echo $row_getPost['GenusName']; ?>">Maps</a> | <a href="vascular-photos.php?CategoryID=<?php echo $row_getPost['CategoryName']; ?>&FamilyID=<?php echo $row_getPost['FamilyName']; ?>&GenusID=<?php echo $row_getPost['GenusName']; ?>">Photos</a>]<br>
						      		<?php $numcount = $numcount+1 ?>
										<strong><?php echo $numcount ?>. <a href="vascular-database.php?CategoryID=<?php echo $row_getPost['CategoryName']; ?>&FamilyID=<?php echo $row_getPost['FamilyName']; ?>&GenusID=<?php echo $row_getPost['GenusName']; ?>&SpeciesID=<?php echo str_replace(" ","%20",$row_getPost['SpeciesName']); ?>"><?php echo $row_getPost['GenusName']; ?> <?php echo $row_getPost['SpeciesName']; ?></a></strong> <?php echo $row_getPost['Author']; ?>
							  </td>
							<?php } else { ?>
						      <td>
								   <?php $numcount = $numcount+1 ?>
										<strong><?php echo $numcount ?>. <a href="vascular-database.php?CategoryID=<?php echo $row_getPost['CategoryName']; ?>&FamilyID=<?php echo $row_getPost['FamilyName']; ?>&GenusID=<?php echo $row_getPost['GenusName']; ?>&SpeciesID=<?php echo str_replace(" ","%20",$row_getPost['SpeciesName']); ?>"><?php echo $row_getPost['GenusName']; ?> <?php echo $row_getPost['SpeciesName']; ?></a></strong> <?php echo $row_getPost['Author'];
									} $GenusLast = $row_getPost['GenusName'];?>
										
										<?php if ($row_getPost['CommonName'] != '') {  ?>	
											<br>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Common Name:</strong> <?php echo $row_getPost['CommonName']; ?>
										<?php } ?>

										<?php if ($row_getPost['Synonym'] != '') {  ?>
										  <br>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Synonyms:</strong>
										<?php } ?>
									
				        		</td>				        		
									<?php }
										$SpeciesLast = $row_getPost['SpeciesName'];
										$GenusLast = $row_getPost['GenusName'];?>
							</tr>
							<?php if ($row_getPost['Synonym'] != '') {  ?>
								<tr>
										<td style="line-height: 12px; border-top: none;">&nbsp;</td>
										<td style="line-height: 0px; border-top: none;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull; <?php echo $row_getPost['Synonym']; ?></td>	
								</tr>
							<?php } ?>
										  	
					        <?php } while ($row_getPost = mysqli_fetch_assoc($getPost)) ?>
						  </table>
						  
							<?php } ?>
					    
						    <?php if ($varExist != TRUE) { ?>
							  	<h4>There are no records found from the above search parameters. Please go back and try again.</h4>
							<?php } mysql_free_result($getPost);?>
									
								  <p><br clear="all" />
							      </p>
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