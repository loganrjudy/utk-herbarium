<?php require_once('../Connections/herbarium.php'); ?>

<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
	global $Herbarium;
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($Herbarium, $theValue) : mysqli_escape_string($Herbarium, $theValue);

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

$start = 0;
$limit = 50;

if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id)*$limit;
}

?>

<?php include_once ("../includes/header.php");?>
<style>
	.pagnation
		{
		float: right;
		margin: 0;
		padding: 0;
		}
	.pagnation li
		{
		list-style: none;
		display:inline-block;
		}
	.pagnation li a, .current
		{
		display: block;
		padding: 5px;
		text-decoration: none;
		color: #8A8A8A;
		}
	.current
		{
		font-weight:bold;
		color: #000;
		}	
</style>

<?php include_once ("../includes/nav.php");?>
      
	<div id="primary" class="content-area">
		<header id="sitetitle" class="site-header" role="banner">
      <h2 class="department"><a href="http://herbarium.utk.edu/" title="University of Tennessee Herbarium - TENN" rel="home">UT Herbarium - TENN</a>
       <small><a href="http://artsci.utk.edu">College of Arts &amp; Sciences</a></small> </h2> 
		</header>	
		
		
		<div id="content" class="site-content site-content wide" role="main">

				<article class="hentry">

                <!-- And here begins the Content area. This is where you place your content -->

								<div class="entry-content reg">
                  <header class="entry-header">
                    <h1 class="entry-title">TN Seed Herbarium</h1>
                  </header>
<p>Below is a list of all seed specimens in the state of Tennessee. To search for a specific seed, enter the the first two letters of the Genus or the first four letters of the Species or the collection #.</p>
		<form action="underwood.php" method="GET">
			<label for="query">Search:&nbsp;</label><input type="text" name="query" />
			<input type="submit" value="Search"/>
		</form>
		<br clear="all" />
		
		<?php 
			$query = $_GET['query'];						
									
			 
			$query_getPosts = "SELECT tblPhoto.SeedPhotoName, tblPhoto.PhotoID, tblCategory.CategoryName, tblFamily.FamilyName, tblGenus.GenusName, tblSpecies.SpeciesName, tblPhoto.JKU, tblPhoto.Collector, tblPhoto.orientation
			
			FROM tblCategory
				INNER JOIN tblFamily ON tblCategory.CategoryID = tblFamily.CategoryID
				INNER JOIN tblGenus ON tblFamily.FamilyID = tblGenus.FamilyID
				INNER JOIN tblSpecies on tblGenus.GenusID = tblSpecies.GenusID
				INNER JOIN tblPhoto ON tblSpecies.SpeciesID = tblPhoto.SpeciesID
			
			WHERE (SeedPhotoName LIKE '%$query%') OR (JKU LIKE '%$query%')
			
			ORDER BY tblGenus.GenusName, tblSpecies.SpeciesName, tblPhoto.SeedPhotoName ASC LIMIT $start, $limit";
									
			$getPosts =mysqli_query($Herbarium, $query_getPosts) or die(mysqli_error());
			$row_getPosts = mysqli_fetch_assoc($getPosts);
			$totalRows_getPosts = mysqli_num_rows($getPosts);
			
			if(mysqli_num_rows($getPosts) > 0){ // if one or more rows are returned do following						
		?>
									
									
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  	  <?php do { ?>
            <?php if (!empty($row_getPosts['SeedPhotoName'])) { ?>
                <tr>
                  <td width="100"><IMG class="aligncenter" SRC="photoD/<?php echo $row_getPosts['CategoryName']; ?>/<?php echo $row_getPosts['FamilyName']; ?>/<?php echo $row_getPosts['SeedPhotoName']; ?>.jpg" alt="<?php echo $row_getPosts['SeedPhotoName']; ?>" style="max-height: 100px;"></td>
                  <td><a href="vascular-photos-enlarge.php?CategoryID=<?php echo $row_getPosts['CategoryName']; ?>&FamilyID=<?php echo $row_getPosts['FamilyName']; ?>&GenusID=<?php echo $row_getPosts['GenusName']; ?>&SpeciesID=<?php echo $row_getPosts['SpeciesName']; ?>&PhotoNameID=<?php echo $row_getPosts['SeedPhotoName']; ?>"><strong>Species:</strong> <?php echo $row_getPosts['GenusName']; ?> <?php echo $row_getPosts['SpeciesName']; ?><br>
                      <strong>Collection #:</strong> <?php echo $row_getPosts['JKU']; ?><br>
                      <strong>Collector:</strong> <?php
                            if ($row_getPosts['Collector'] == "") {
                                echo "JK Underwood"; 
                            } else
                                echo $row_getPosts['Collector']; ?><br>
                      <strong>Orientation:</strong>
                        <?php
                            if ($row_getPosts['orientation'] == "PD") {
                                echo "proximal/distal";
                            } elseif ($row_getPosts['orientation'] == 'DV') {
                                echo "dorsal/ventral";
                            } elseif ($row_getPosts['orientation'] == 'DL') {
                                echo "dorsal/lateral";
                            } elseif ($row_getPosts['orientation'] == 'F') {
                                echo "feature";
                            } elseif ($row_getPosts['orientation'] == 'V') {
                                echo "variation";
                            } elseif ($row_getPosts['orientation'] == 'FS') {
                                echo "fruit and seed";
                            } ?></a></td>
                </tr>
            <?php } ?>
		    <?php } while ($row_getPosts = mysqli_fetch_assoc($getPosts)); ?>
          </table>
          <br clear="all" />
          <?php 
				if(mysqli_num_rows($getPosts) >= 50) {
				
					$rows=mysqli_num_rows(mysqli_query("select * from tblPhoto"));
					$total=floor($rows/$limit);

					if($id>=1)
					{
					echo "<a href='?$start' class='btn btn-smokey' style='width:100px; float:left; display:block; margin-right:10px;'>HOME</a>";
					echo "<a href='?id=".($id-1)."' class='btn btn-smokey' style='width:100px; float:left; display:block;'>PREVIOUS</a>";
					}
					if($id!=$total)
					{
					echo "<a href='?id=".($id+1)."' class='btn btn-smokey' style='width:100px; float:right; display:block; '>NEXT</a>";
					}
				} else {echo "<a href='?$start' class='btn btn-smokey' style='width:100px; float:left; display:block; margin-right:10px;'>HOME</a>";}

			?>
          <br clear="all" />
          
          <?php } ?>
								</div>
								<!-- .entry-content -->
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