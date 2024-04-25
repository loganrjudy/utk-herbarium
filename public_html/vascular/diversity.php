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
                  <header class="entry-header"><h1 class="entry-title">Diversity Map of Tennessee</h1>
                  </header>
								  <p><STRONG></STRONG><img src="../images/diversitymap.jpg" alt="Tennessee Diversity Map"/></p>
								  <p>&nbsp;</p>
								  <h4>Sorted by County</h4>
                                    <div class="one-fourth column box-light">
                                      <table cellspacing="0" cellpadding="0" style="font-size:10px;">
                                        <TR>
                                          <TD><strong>County</strong></TD>
                                          <TD><strong>Native<BR>
                                          Vascular<BR>
                                          Plants</strong></TD>
                                        </TR>
                                        <TR>
                                          <TD>Anderson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County1 FROM tblSpOccurred WHERE CountyID=1";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County1'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Bedford</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County2 FROM tblSpOccurred WHERE CountyID=2";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County2'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Benton</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County3 FROM tblSpOccurred WHERE CountyID=3";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County3'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Bledsoe</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County4 FROM tblSpOccurred WHERE CountyID=4";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County4'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Blount</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County5 FROM tblSpOccurred WHERE CountyID=5";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County5'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Bradley</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County6 FROM tblSpOccurred WHERE CountyID=6";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County6'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Campbell</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County7 FROM tblSpOccurred WHERE CountyID=7";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County7'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Cannon</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County8 FROM tblSpOccurred WHERE CountyID=8";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County8'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Carroll</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County9 FROM tblSpOccurred WHERE CountyID=9";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County9'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Carter</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County10 FROM tblSpOccurred WHERE CountyID=10";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County10'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Cheatham</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County11 FROM tblSpOccurred WHERE CountyID=11";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County11'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Chester</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County12 FROM tblSpOccurred WHERE CountyID=12";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County12'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Claiborne</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County13 FROM tblSpOccurred WHERE CountyID=13";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County13'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Clay</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County14 FROM tblSpOccurred WHERE CountyID=14";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County14'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Cocke</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County15 FROM tblSpOccurred WHERE CountyID=15";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County15'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Coffee</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County16 FROM tblSpOccurred WHERE CountyID=16";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County16'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Crockett</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County17 FROM tblSpOccurred WHERE CountyID=17";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County17'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Cumberland</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County18 FROM tblSpOccurred WHERE CountyID=18";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County18'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Davidson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County19 FROM tblSpOccurred WHERE CountyID=19";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County19'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Decatur</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County20 FROM tblSpOccurred WHERE CountyID=20";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County20'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>DeKalb</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County21 FROM tblSpOccurred WHERE CountyID=21";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County21'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Dickson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County22 FROM tblSpOccurred WHERE CountyID=22";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County22'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Dyer</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County23 FROM tblSpOccurred WHERE CountyID=23";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County23'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Fayette</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County24 FROM tblSpOccurred WHERE CountyID=24";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County24'];
										  	?>
                                       	  </TD>
                                        </TR>
                                      </table>
                                    </div>
                                    <div class="one-fourth column box-light">
                                      <table cellspacing="0" cellpadding="0" style="font-size:10px;">
                                        <TR>
                                          <TD><strong>County</strong></TD>
                                          <TD><strong>Native<BR>
                                          Vascular<BR>
                                          Plants</strong></TD>
                                        </TR>
                                        <TR>
                                          <TD>Fentress</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County25 FROM tblSpOccurred WHERE CountyID=25";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County25'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Franklin</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County26 FROM tblSpOccurred WHERE CountyID=26";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County26'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Gibson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County27 FROM tblSpOccurred WHERE CountyID=27";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County27'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Giles</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County28 FROM tblSpOccurred WHERE CountyID=28";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County28'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Grainger</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County29 FROM tblSpOccurred WHERE CountyID=29";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County29'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Greene</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County30 FROM tblSpOccurred WHERE CountyID=30";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County30'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Grundy</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County31 FROM tblSpOccurred WHERE CountyID=31";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County31'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Hamblen</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County32 FROM tblSpOccurred WHERE CountyID=32";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County32'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Hamilton</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County33 FROM tblSpOccurred WHERE CountyID=33";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County33'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Hancock</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County34 FROM tblSpOccurred WHERE CountyID=34";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County34'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Hardeman</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County35 FROM tblSpOccurred WHERE CountyID=35";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County35'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Hardin</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County36 FROM tblSpOccurred WHERE CountyID=36";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County36'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Hawkins</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County37 FROM tblSpOccurred WHERE CountyID=37";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County37'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Haywood</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County38 FROM tblSpOccurred WHERE CountyID=38";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County38'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Henderson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County39 FROM tblSpOccurred WHERE CountyID=39";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County39'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Henry</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County40 FROM tblSpOccurred WHERE CountyID=40";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County40'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Hickman</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County41 FROM tblSpOccurred WHERE CountyID=41";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County41'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Houston</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County42 FROM tblSpOccurred WHERE CountyID=42";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County42'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Humphreys</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County43 FROM tblSpOccurred WHERE CountyID=43";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County43'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Jackson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County44 FROM tblSpOccurred WHERE CountyID=44";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County44'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Jefferson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County45 FROM tblSpOccurred WHERE CountyID=45";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County45'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Johnson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County46 FROM tblSpOccurred WHERE CountyID=46";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County46'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Knox</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County47 FROM tblSpOccurred WHERE CountyID=47";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County47'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Lake</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County48 FROM tblSpOccurred WHERE CountyID=48";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County48'];
										  	?>
                                       	  </TD>
                                        </TR>
                                      </table>
                                    </div>
                                    <div class="one-fourth column box-light">
                                      <table cellspacing="0" cellpadding="0" style="font-size:10px;">
                                        <TR>
                                          <TD><strong>County</strong></TD>
                                          <TD><strong>Native<BR>
                                          Vascular<BR>
                                          Plants</strong></TD>
                                        </TR>
                                        <TR>
                                          <TD>Lauderdale</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County49 FROM tblSpOccurred WHERE CountyID=49";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County49'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Lawrence</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County50 FROM tblSpOccurred WHERE CountyID=50";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County50'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Lewis</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County51 FROM tblSpOccurred WHERE CountyID=51";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County51'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Lincoln</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County52 FROM tblSpOccurred WHERE CountyID=52";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County52'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Loudon</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County53 FROM tblSpOccurred WHERE CountyID=53";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County53'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Macon</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County54 FROM tblSpOccurred WHERE CountyID=54";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County54'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Madison</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County55 FROM tblSpOccurred WHERE CountyID=55";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County55'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Marion</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County56 FROM tblSpOccurred WHERE CountyID=56";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County56'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Marshall</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County57 FROM tblSpOccurred WHERE CountyID=57";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County57'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Maury</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County58 FROM tblSpOccurred WHERE CountyID=58";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County58'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>McMinn</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County59 FROM tblSpOccurred WHERE CountyID=59";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County59'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>McNairy</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County60 FROM tblSpOccurred WHERE CountyID=60";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County60'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Meigs</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County61 FROM tblSpOccurred WHERE CountyID=61";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County61'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Monroe</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County62 FROM tblSpOccurred WHERE CountyID=62";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County62'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Montgomery</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County63 FROM tblSpOccurred WHERE CountyID=63";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County63'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Moore</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County64 FROM tblSpOccurred WHERE CountyID=64";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County64'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Morgan</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County65 FROM tblSpOccurred WHERE CountyID=65";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County65'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Obion</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County66 FROM tblSpOccurred WHERE CountyID=66";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County66'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Overton</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County67 FROM tblSpOccurred WHERE CountyID=67";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County67'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Perry</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County68 FROM tblSpOccurred WHERE CountyID=68";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County68'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Pickett</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County69 FROM tblSpOccurred WHERE CountyID=69";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County69'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Polk</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County70 FROM tblSpOccurred WHERE CountyID=70";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County70'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Putnam</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County71 FROM tblSpOccurred WHERE CountyID=71";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County71'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Rhea</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County72 FROM tblSpOccurred WHERE CountyID=72";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County72'];
										  	?>
                                       	  </TD>
                                        </TR>
                                      </table>
                                    </div>
                                    <div class="one-fourth column box-light">
                                      <table cellspacing="0" cellpadding="0" style="font-size:10px;">
                                        <TR>
                                          <TD><strong>County</strong></TD>
                                          <TD><strong>Native<BR>
                                          Vascular<BR>
                                          Plants</strong></TD>
                                        </TR>
                                        <TR>
                                          <TD>Roane</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County73 FROM tblSpOccurred WHERE CountyID=73";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County73'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Robertson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County74 FROM tblSpOccurred WHERE CountyID=74";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County74'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Rutherford</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County75 FROM tblSpOccurred WHERE CountyID=75";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County75'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Scott</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County76 FROM tblSpOccurred WHERE CountyID=76";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County76'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Sequatchie</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County77 FROM tblSpOccurred WHERE CountyID=77";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County77'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Sevier</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County78 FROM tblSpOccurred WHERE CountyID=78";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County78'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Shelby</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County79 FROM tblSpOccurred WHERE CountyID=79";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County79'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Smith</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County80 FROM tblSpOccurred WHERE CountyID=80";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County80'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Stewart</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County81 FROM tblSpOccurred WHERE CountyID=81";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County81'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Sullivan</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County82 FROM tblSpOccurred WHERE CountyID=82";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County82'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Sumner</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County83 FROM tblSpOccurred WHERE CountyID=83";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County83'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Tipton</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County84 FROM tblSpOccurred WHERE CountyID=84";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County84'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Trousdale</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County85 FROM tblSpOccurred WHERE CountyID=85";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County85'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Unicoi</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County86 FROM tblSpOccurred WHERE CountyID=86";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County86'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Union</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County87 FROM tblSpOccurred WHERE CountyID=87";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County87'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Van Buren</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County88 FROM tblSpOccurred WHERE CountyID=88";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County88'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Warren</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County89 FROM tblSpOccurred WHERE CountyID=89";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County89'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Washington</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County90 FROM tblSpOccurred WHERE CountyID=90";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County90'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Wayne</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County91 FROM tblSpOccurred WHERE CountyID=91";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County91'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Weakley</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County92 FROM tblSpOccurred WHERE CountyID=92";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County92'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>White</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County93 FROM tblSpOccurred WHERE CountyID=93";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County93'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Williamson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County94 FROM tblSpOccurred WHERE CountyID=94";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County94'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Wilson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County95 FROM tblSpOccurred WHERE CountyID=95";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County95'];
										  	?>
                                       	  </TD>
                                        </TR>
                                      </table>
                                    </div>
                                    <br class="clear">
                                    
                                    <h4>Sorted by Number of Taxa</h4>
                                    <div class="one-fourth column box-light">
                                      <table cellspacing="0" cellpadding="0" style="font-size:10px;">
                                        <TR>
                                          <TD><strong>County</strong></TD>
                                          <TD><strong>Native<BR>
                                          Vascular<BR>
                                          Plants</strong></TD>
                                        </TR>
                                        <TR>
                                          <TD>Knox</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County47 FROM tblSpOccurred WHERE CountyID=47";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County47'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Montgomery</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County63 FROM tblSpOccurred WHERE CountyID=63";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County63'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Blount</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County5 FROM tblSpOccurred WHERE CountyID=5";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County5'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Davidson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County19 FROM tblSpOccurred WHERE CountyID=19";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County19'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Stewart</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County81 FROM tblSpOccurred WHERE CountyID=81";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County81'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Marion</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County56 FROM tblSpOccurred WHERE CountyID=56";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County56'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Sevier</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County78 FROM tblSpOccurred WHERE CountyID=78";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County78'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Cumberland</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County18 FROM tblSpOccurred WHERE CountyID=18";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County18'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Franklin</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County26 FROM tblSpOccurred WHERE CountyID=26";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County26'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Polk</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County70 FROM tblSpOccurred WHERE CountyID=70";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County70'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Rutherford</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County75 FROM tblSpOccurred WHERE CountyID=75";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County75'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Roane</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County73 FROM tblSpOccurred WHERE CountyID=73";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County73'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Van Buren</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County88 FROM tblSpOccurred WHERE CountyID=88";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County88'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Giles</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County28 FROM tblSpOccurred WHERE CountyID=28";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County28'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Coffee</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County16 FROM tblSpOccurred WHERE CountyID=16";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County16'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Shelby</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County79 FROM tblSpOccurred WHERE CountyID=79";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County79'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Grundy</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County31 FROM tblSpOccurred WHERE CountyID=31";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County31'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Hamilton</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County33 FROM tblSpOccurred WHERE CountyID=33";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County33'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Maury</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County58 FROM tblSpOccurred WHERE CountyID=58";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County58'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Monroe</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County62 FROM tblSpOccurred WHERE CountyID=62";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County62'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
											<TD>Sumner</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County83 FROM tblSpOccurred WHERE CountyID=83";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County83'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Campbell</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County7 FROM tblSpOccurred WHERE CountyID=7";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County7'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Morgan</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County65 FROM tblSpOccurred WHERE CountyID=65";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County65'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Hardin</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County36 FROM tblSpOccurred WHERE CountyID=36";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County36'];
										  	?>
                                       	  </TD>
                                        </TR>
                                      </table>
                                    </div>
                                    <div class="one-fourth column box-light">
                                      <table cellspacing="0" cellpadding="0" style="font-size:10px;">
                                        <TR>
                                          <TD><strong>County</strong></TD>
                                          <TD><strong>Native<BR>
                                          Vascular<BR>
                                          Plants</strong></TD>
                                        </TR>
                                        <TR>
                                          <TD> Carter</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County10 FROM tblSpOccurred WHERE CountyID=10";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County10'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Cheatham</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County11 FROM tblSpOccurred WHERE CountyID=11";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County11'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Williamson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County94 FROM tblSpOccurred WHERE CountyID=94";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County94'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Anderson</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County1 FROM tblSpOccurred WHERE CountyID=1";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County1'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Humphreys</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County43 FROM tblSpOccurred WHERE CountyID=43";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County43'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Fentress</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County25 FROM tblSpOccurred WHERE CountyID=25";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County25'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Dickson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County22 FROM tblSpOccurred WHERE CountyID=22";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County22'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Bledsoe</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County4 FROM tblSpOccurred WHERE CountyID=4";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County4'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Scott</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County76 FROM tblSpOccurred WHERE CountyID=76";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County76'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Putnam</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County71 FROM tblSpOccurred WHERE CountyID=71";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County71'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Lewis</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County51 FROM tblSpOccurred WHERE CountyID=51";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County51'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Hickman</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County41 FROM tblSpOccurred WHERE CountyID=41";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County41'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Overton</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County67 FROM tblSpOccurred WHERE CountyID=67";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County67'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>DeKalb</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County21 FROM tblSpOccurred WHERE CountyID=21";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County21'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Unicoi</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County86 FROM tblSpOccurred WHERE CountyID=86";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County86'];
										  	?></TD>
                                        </TR>
                                        <TR>
											<TD>Carroll</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County9 FROM tblSpOccurred WHERE CountyID=9";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County9'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>White</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County93 FROM tblSpOccurred WHERE CountyID=93";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County93'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Rhea</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County72 FROM tblSpOccurred WHERE CountyID=72";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County72'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Cocke</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County15 FROM tblSpOccurred WHERE CountyID=15";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County15'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
											<TD>Hawkins</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County37 FROM tblSpOccurred WHERE CountyID=37";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County37'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Claiborne</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County13 FROM tblSpOccurred WHERE CountyID=13";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County13'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Henry</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County40 FROM tblSpOccurred WHERE CountyID=40";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County40'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Wilson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County95 FROM tblSpOccurred WHERE CountyID=95";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County95'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Johnson</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County46 FROM tblSpOccurred WHERE CountyID=46";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County46'];
										  	?></TD>
                                        </TR>
                                      </table>
                                    </div>
                                    <div class="one-fourth column box-light">
                                      <table cellspacing="0" cellpadding="0" style="font-size:10px;">
                                        <TR>
                                          <TD><strong>County</strong></TD>
                                          <TD><strong>Native<BR>
                                          Vascular<BR>
                                          Plants</strong></TD>
                                        </TR>
                                        <TR>
                                          <TD>Grainger</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County29 FROM tblSpOccurred WHERE CountyID=29";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County29'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Sullivan</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County82 FROM tblSpOccurred WHERE CountyID=82";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County82'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Haywood</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County38 FROM tblSpOccurred WHERE CountyID=38";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County38'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
											<TD>Greene</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County30 FROM tblSpOccurred WHERE CountyID=30";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County30'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Tipton</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County84 FROM tblSpOccurred WHERE CountyID=84";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County84'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Fayette</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County24 FROM tblSpOccurred WHERE CountyID=24";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County24'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>McNairy</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County60 FROM tblSpOccurred WHERE CountyID=60";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County60'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Union</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County87 FROM tblSpOccurred WHERE CountyID=87";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County87'];
										  	?></TD>
                                        </TR>
                                        <TR>
											<TD>Meigs</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County61 FROM tblSpOccurred WHERE CountyID=61";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County61'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Obion</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County66 FROM tblSpOccurred WHERE CountyID=66";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County66'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Wayne</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County91 FROM tblSpOccurred WHERE CountyID=91";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County91'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
											 <TD>Warren</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County89 FROM tblSpOccurred WHERE CountyID=89";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County89'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Clay</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County14 FROM tblSpOccurred WHERE CountyID=14";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County14'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
											<TD>Washington</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County90 FROM tblSpOccurred WHERE CountyID=90";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County90'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Decatur</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County20 FROM tblSpOccurred WHERE CountyID=20";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County20'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Loudon</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County53 FROM tblSpOccurred WHERE CountyID=53";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County53'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Marshall</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County57 FROM tblSpOccurred WHERE CountyID=57";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County57'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Lawrence</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County50 FROM tblSpOccurred WHERE CountyID=50";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County50'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
											<TD>Houston</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County42 FROM tblSpOccurred WHERE CountyID=42";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County42'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Sequatchie</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County77 FROM tblSpOccurred WHERE CountyID=77";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County77'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
											<TD>Jackson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County44 FROM tblSpOccurred WHERE CountyID=44";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County44'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Lauderdale</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County49 FROM tblSpOccurred WHERE CountyID=49";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County49'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Robertson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County74 FROM tblSpOccurred WHERE CountyID=74";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County74'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Hardeman</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County35 FROM tblSpOccurred WHERE CountyID=35";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County35'];
										  	?></TD>
                                        </TR>
                                      </table>
                                    </div>
                                    <div class="one-fourth column box-light">
                                      <table cellspacing="0" cellpadding="0" style="font-size:10px;">
                                        <TR>
                                          <TD><strong>County</strong></TD>
                                          <TD><strong>Native<BR>
                                          Vascular<BR>
                                          Plants</strong></TD>
                                        </TR>
                                        <TR>
                                          <TD>Benton</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County3 FROM tblSpOccurred WHERE CountyID=3";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County3'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Bradley</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County6 FROM tblSpOccurred WHERE CountyID=6";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County6'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Cannon</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County8 FROM tblSpOccurred WHERE CountyID=8";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County8'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Perry</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County68 FROM tblSpOccurred WHERE CountyID=68";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County68'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Lake</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County48 FROM tblSpOccurred WHERE CountyID=48";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County48'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Bedford</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County2 FROM tblSpOccurred WHERE CountyID=2";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County2'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
											<TD>Lincoln</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County52 FROM tblSpOccurred WHERE CountyID=52";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County52'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>McMinn</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County59 FROM tblSpOccurred WHERE CountyID=59";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County59'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Macon</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County54 FROM tblSpOccurred WHERE CountyID=54";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County54'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Madison</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County55 FROM tblSpOccurred WHERE CountyID=55";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County55'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Henderson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County39 FROM tblSpOccurred WHERE CountyID=39";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County39'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Pickett</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County69 FROM tblSpOccurred WHERE CountyID=69";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County69'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Jefferson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County45 FROM tblSpOccurred WHERE CountyID=45";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County45'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Smith</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County80 FROM tblSpOccurred WHERE CountyID=80";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County80'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
											<TD>Hancock</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County34 FROM tblSpOccurred WHERE CountyID=34";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County34'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Dyer</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County23 FROM tblSpOccurred WHERE CountyID=23";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County23'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Chester</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County12 FROM tblSpOccurred WHERE CountyID=12";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County12'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Gibson</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County27 FROM tblSpOccurred WHERE CountyID=27";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County27'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Hamblen</TD>
                                          <TD><?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County32 FROM tblSpOccurred WHERE CountyID=32";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County32'];
										  	?></TD>
                                        </TR>
                                        <TR>
                                          <TD>Weakley</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County92 FROM tblSpOccurred WHERE CountyID=92";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County92'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Moore</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County64 FROM tblSpOccurred WHERE CountyID=64";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County64'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Trousdale</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County85 FROM tblSpOccurred WHERE CountyID=85";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County85'];
										  	?>
                                       	  </TD>
                                        </TR>
                                        <TR>
                                          <TD>Crockett</TD>
                                          <TD>
                                   	  		<?php 
											 
											$query_getPosts = "SELECT COUNT(SpeciesID) AS County17 FROM tblSpOccurred WHERE CountyID=17";
											$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysql_error());
											$row_getPosts = mysqli_fetch_assoc($getPosts);
											$totalRows_getPosts = mysqli_num_rows($getPosts);
										  	echo $row_getPosts['County17'];
										  	?>
                                       	  </TD>
                                        </TR>
                                      </table>
                                    </div>
                                    <br class="clear">
                                   
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