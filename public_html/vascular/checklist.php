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
                  <header class="entry-header"><h1 class="entry-title">Checklist of Tennessee Vascular Plants</h1>
                  </header>
								  <h4><STRONG></STRONG>Checklist by Category</h4>
                                    
                                  <table width="95%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td align="center"><strong> Categories<em> (click to choose)</em></strong></td>
                                      <td width="200" align="center"><strong>Families</strong></td>
                                      <td width="200" align="center"><strong>Genera</strong></td>
                                      <td width="200" align="center"><strong> Species &amp; Lesser Taxa</strong></td>
                                    </tr>
                                    <tr>
                                      <td><a href="checklist-type.php?CategoryID=1">Pteridophytes</a></td>
                                      <td align="center">
                                      	<?php 
											 
											$query_getPosts = "SELECT COUNT(CategoryID) AS Family1 FROM tblFamily WHERE CategoryID=1";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['Family1'];
										  ?>
                                     </td>
                                      <td align="center">
                                   	  <?php 
											 
											$query_getPosts = "SELECT COUNT(GenusID) AS Genus1 FROM tblGenus INNER JOIN tblFamily ON tblFamily.FamilyID = tblGenus.FamilyID WHERE tblFamily.CategoryID=1";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['Genus1'];
										  ?></td>
                                      <td align="center">
                                   	  <?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS Species1 FROM tblSpecies INNER JOIN tblGenus ON tblGenus.GenusID = tblSpecies.GenusID INNER JOIN tblFamily ON tblGenus.FamilyID = tblFamily.FamilyID WHERE tblFamily.CategoryID=1";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['Species1'];
										  ?></td>
                                    </tr>
                                    <tr>
                                      <td><a href="checklist-type.php?CategoryID=2">Gymnosperms</a></td>
                                      <td align="center">
                                      	<?php 
											 
											$query_getPosts = "SELECT COUNT(CategoryID) AS Family2 FROM tblFamily WHERE CategoryID=2";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['Family2'];
										  ?>
										</td>
                                      <td align="center">
                                      	<?php 
											 
											$query_getPosts = "SELECT COUNT(GenusID) AS Genus2 FROM tblGenus INNER JOIN tblFamily ON tblFamily.FamilyID = tblGenus.FamilyID WHERE tblFamily.CategoryID=2";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['Genus2'];
										  ?>
                                     </td>
                                      <td align="center">
                                   	  <?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS Species2 FROM tblSpecies INNER JOIN tblGenus ON tblGenus.GenusID = tblSpecies.GenusID INNER JOIN tblFamily ON tblGenus.FamilyID = tblFamily.FamilyID WHERE tblFamily.CategoryID=2";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['Species2'];
										  ?></td>
                                    </tr>
                                    <tr>
                                      <td colspan="4">Angiosperms:</td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="checklist-type.php?CategoryID=3">Monocots</a></td>
                                      <td align="center">
                                      	<?php 
											 
											$query_getPosts = "SELECT COUNT(CategoryID) AS Family3 FROM tblFamily WHERE CategoryID=3";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['Family3'];
										  ?>
                                     </td>
                                      <td align="center">
                                   	  <?php 
											 
											$query_getPosts = "SELECT COUNT(GenusID) AS Genus3 FROM tblGenus INNER JOIN tblFamily ON tblFamily.FamilyID = tblGenus.FamilyID WHERE tblFamily.CategoryID=3";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['Genus3'];
										  ?></td>
                                      <td align="center">
                                   	  <?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS Species3 FROM tblSpecies INNER JOIN tblGenus ON tblGenus.GenusID = tblSpecies.GenusID INNER JOIN tblFamily ON tblGenus.FamilyID = tblFamily.FamilyID WHERE tblFamily.CategoryID=3";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['Species3'];
										  ?></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="checklist-type.php?CategoryID=4">Dicots</a></td>
                                      <td align="center">
                                      	<?php 
											 
											$query_getPosts = "SELECT COUNT(CategoryID) AS Family4 FROM tblFamily WHERE CategoryID=4";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['Family4'];
										  ?>
                                     </td>
                                      <td align="center">
                                   	  <?php 
											 
											$query_getPosts = "SELECT COUNT(GenusID) AS Genus4 FROM tblGenus INNER JOIN tblFamily ON tblFamily.FamilyID = tblGenus.FamilyID WHERE tblFamily.CategoryID=4";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['Genus4'];
										  ?></td>
                                      <td align="center">
                                   	  <?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS Species4 FROM tblSpecies INNER JOIN tblGenus ON tblGenus.GenusID = tblSpecies.GenusID INNER JOIN tblFamily ON tblGenus.FamilyID = tblFamily.FamilyID WHERE tblFamily.CategoryID=4";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['Species4'];
										  ?></td>
                                    </tr>
                                    <tr>
                                      <td align="right"><strong>TOTALS:</strong></td>
                                      <td align="center">
                                      	<strong>
                                      	<?php 
											 
											$query_getPosts = "SELECT COUNT(FamilyID) AS FamilyTotal FROM tblFamily";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['FamilyTotal'];
										  ?>
                                      	</strong></td>
                                      <td align="center">
                                   	    <strong>
                                   	    <?php 
											 
											$query_getPosts = "SELECT COUNT(GenusID) AS GenusTotal FROM tblGenus";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['GenusTotal'];
										  ?>
                               	      </strong></td>
                                      <td align="center">
                                   	    <strong>
                                   	    <?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS SpeciesTotal FROM tblSpecies";
											$getPosts = mysql_query($query_getPosts, $Herbarium) or die(mysql_error());
											$row_getPosts = mysql_fetch_assoc($getPosts);
											$totalRows_getPosts = mysql_num_rows($getPosts);
										  	echo $row_getPosts['SpeciesTotal'];
										  ?>
                               	      </strong></td>
                                    </tr>
                                  </table><hr>
									<h6>This checklist was based on B. Eugene Wofford and Robert Kral. 1993 and <EM>Checklist of the Vascular Plants of Tennessee</EM> published by Botanical Research Institute of Texas, Inc.,   and updated online by the UT Herbarium - TENN on <?php echo date ('F d, Y'); ?> .</h6>
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