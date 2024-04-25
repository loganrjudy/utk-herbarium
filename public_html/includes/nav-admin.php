      <!-- Here is your navigation. Notice that the submenu is nested within the LI.  -->
      <!-- Also, you'll notice it's complicated. It works for mobile and for desktop. Replicate the Button, Div, ID, and class structure.  -->

        <div class="sidebar-offcanvas inactive">
            <nav role="navigation">
        		      <button type="button" class="toggle close collapseMenu">
        		        <span class="sr-only">Toggle navigation</span> <i class="icon-fa-chevron-right"></i><br>CLOSE</button>
        			    <!-- Collect the nav links, forms, and other content for toggling -->


        			    <!-- Your site-specific search -->
                  <form id="utk_seek" name="utk_seek" method="post" accept-charset="iso-8859-1" action="http://www.utk.edu/masthead/query.php">
  					        <div class="form-group">
  					          <input tabindex="1" type="text" class="form-control" placeholder="Find a Page" role="search" aria-label="Site Search">
                      <input type="hidden" name="qtype" value="site_utk:mfll.utk.edu">  <!-- To turn this into a site-specific search, change the value of this element to: "site_utk:YOURURL.utk.edu" -->
 					        </div>
  					      </form>


                  <div id="megamenu">
  <ul class="mainnav" role="menu">
       
              <li>
                <a class="home_button" href="manage_database.php" tabindex="2"  role="button"  >Home <i class="icon-fa-home pull-right"></i></a>
              </li>
              <li class="top-menu-item">
              <button id="drop2" class="list-item-button" aria-haspopup="true" role="button" >Add New<i class="icon-fa-chevron-right pull-right"></i></button>
                <div class="megamenu-sub" id="menu-one"  aria-labelledby="drop2" aria-expanded="false">
                  <button class="menu-back btn"  data-toggle="dropdown"  role="button"><i class="icon-fa-chevron-left"></i> <span class="back">Back</span></button>
                    <h3>Add New</h3>
                    <div class="inner">
                    <div class="menu-header">
                      <ul class="menu">
                        <li class="menu-item"><a href="add_family.php">Family</a></li>
                        <li class="menu-item"><a href="add_genus.php">Genus</a></li>
                        <li class="menu-item"><a href="add_species.php">Species</a></li>
                        <li class="menu-item"><a href="add_common.php">Common Name</a></li>
                        <li class="menu-item"><a href="add_synonym.php">Synonym</a></li>
                        <li class="menu-item"><a href="add_photographer.php">Photographer</a></li>
                      </ul>
                    </div>
                  </div>
				</div>
			  </li>
              <li><a href="species_county.php" class="home_button" tabindex="3"  role="button">Species by County</a></li>
              <li class="top-menu-item">
              <button id="drop4" class="list-item-button" aria-haspopup="true" role="button" >Upload<i class="icon-fa-chevron-right pull-right"></i></button>
                <div class="megamenu-sub" id="menu-three"  aria-labelledby="drop4" aria-expanded="false">
                  <button class="menu-back btn"  data-toggle="dropdown"  role="button"><i class="icon-fa-chevron-left"></i> <span class="back">Back</span></button>
                    <h3>Upload</h3>
                    <div class="inner">
                    <div class="menu-header">
                      <ul class="menu">
                        <li class="menu-item"><a href="add_map.php">Map</a></li>
                        <li class="menu-item"><a href="add_photo.php">Photo</a></li>
                        <li class="menu-item"><a href="add_seed_photo.php">Seed Photo</a></li>
                      </ul>
                    </div>
                  </div>
				</div>
			  </li>
              <li class="top-menu-item">
              <button id="drop5" class="list-item-button" aria-haspopup="true" role="button" >View All<i class="icon-fa-chevron-right pull-right"></i></button>
                <div class="megamenu-sub" id="menu-four"  aria-labelledby="drop5" aria-expanded="false">
                  <button class="menu-back btn"  data-toggle="dropdown"  role="button"><i class="icon-fa-chevron-left"></i> <span class="back">Back</span></button>
                    <h3>View All</h3>
                    <div class="inner">
                    <div class="menu-header">
                      <ul class="menu">
                        <li class="menu-item"><a href="familylist.php">Families</a></li>
                        <li class="menu-item"><a href="genuslist.php">Genera</a></li>
                        <li class="menu-item"><a href="specieslist.php">Species</a></li>
                        <li class="menu-item"><a href="commonlist.php">Common Names</a></li>
                        <li class="menu-item"><a href="synonymlist.php">Synonyms</a></li>
                        <li class="menu-item"><a href="photolist.php">Photos</a></li>
                        <li class="menu-item"><a href="seedphotolist.php">Seed Photos</a></li>
                        <li class="menu-item"><a href="photographer.php">Photographers</a></li>
                      </ul>
                    </div>
                  </div>
				</div>
			  </li>
              <li><a href="<?php echo $logoutAction ?>" class="home_button" tabindex="4"  role="button">Logout</a>
              </li>
        </ul>
      </div>
    </nav><!-- #site-navigation -->
        </div>
      </div>