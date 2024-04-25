  		<!-- #Find Box -->

      <!-- Here is your navigation. Notice that the submenu is nested within the LI.  -->
      <!-- Also, you'll notice it's complicated. It works for mobile and for desktop. Replicate the Button, Div, ID, and class structure.  -->

        <div class="sidebar-offcanvas inactive">
            <nav role="navigation">
        		      <button type="button" class="toggle close collapseMenu">
        		        <span class="sr-only">Toggle navigation</span> <i class="icon-fa-chevron-right"></i><br>CLOSE</button>
        			    <!-- Collect the nav links, forms, and other content for toggling -->





      <form method="post" action="http://google.tennessee.edu/search">
          <div class="form-group">
             <input title="Find Page" type="text" class="form-control" name="q"  maxlength="256" onfocus="if(this.value == 'Search This Site') { this.value = ''; }" value="Search This Site">
          </div>
      
          <input type="hidden" name="output" value="xml_no_dtd">
          <input type="hidden" name="oe" value="UTF-8">
          <input type="hidden" name="ie" value="UTF-8">
          <input type="hidden" name="ud" value="1">
          <input type="hidden" name="site" value="Knoxville">
          <input type="hidden" name="client" value="utk_translate_frontend">
          <input type="hidden" name="entqr" value="3">
          <input type="hidden" name="as_sitesearch" value="utk.edu" title="search type"><!-- To turn this into a site-specific search, change the value of this element to: "YOURURL.utk.edu" -->
          <input type="hidden" name="proxystylesheet" value="utk_translate_frontend">
          <input type="submit" name="btnF" class="sr-only" value="Go">
      </form>


                  <div id="megamenu">
  <ul class="mainnav" role="menu">
       
              <li>
                <a class="home_button" href="/" role="button"  >Home <i class="icon-fa-home pull-right"></i></a>
              </li>
              <li class="top-menu-item">
                <button id="drop2" class="list-item-button" aria-haspopup="true" role="button">Bryophytes<i class="icon-fa-chevron-right pull-right"></i></button>
                <div class="megamenu-sub dropdown-menu" id="menu-one"  aria-labelledby="drop2" aria-expanded="false">
                  <button  class="menu-back btn" data-toggle="dropdown" role="button" ><i class="icon-fa-chevron-left"></i> <span class="back">Back</span></button>
                  <h3>Bryophytes</h3>
                  <div class="inner">
                    <div class="menu-header">
                      <ul id="menu-short" class="menu">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1629"><a href="/bryophyte/index.php">Bryophyte Herbarium</a></li>
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="#">Bryophyte Collections Databases</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><A href="http://bryophyteportal.org/" target="new">Consortium of North American Bryophyte Herbaria</A></li>
                                <li class="menu-item"><A href="/bryophyte/moss-checklist.php">TENN Mosses from Consortium Database</A></li>
                            </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="top-menu-item">
              <button id="drop3" class="list-item-button" aria-haspopup="true" role="button" >Fungi<i class="icon-fa-chevron-right pull-right"></i></button>
                <div class="megamenu-sub" id="menu-two"  aria-labelledby="drop3" aria-expanded="false">
                  <button class="menu-back btn"  data-toggle="dropdown"  role="button"><i class="icon-fa-chevron-left"></i> <span class="back">Back</span></button>
                    <h3>Fungi</h3>
                    <div class="inner">
                    <div class="menu-header">
                      <ul class="menu">
                        <li class="menu-item"><a href="/fungus/index.php">Fungal Herbarium</a></li>
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="#">Fungal Collection Databases</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><A href="http://lichenportal.org/" target="new">Consortium of North American Lichen Herbaria</A></li>
                                <li class="menu-item"><A href="http://mycoportal.org/portal/index.php" target="new">Mycology Collections Portal</A></li>
                            </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
            </div>
              </li>
              <li class="top-menu-item">
                <button id="drop4" class="list-item-button" aria-haspopup="true" role="button">Vascular Plants<i class="icon-fa-chevron-right pull-right"></i></button>
                <div class="megamenu-sub dropdown-menu" id="menu-three"  aria-labelledby="drop4" aria-expanded="false">
                  <button  class="menu-back btn" data-toggle="dropdown" role="button" ><i class="icon-fa-chevron-left"></i> <span class="back">Back</span></button>
                  <h3>Vascular Plants</h3>
                  <div class="inner">
                    <div class="menu-header">
                      <ul id="menu-short" class="menu">
                        <li class="menu-item"><a href="/vascular/index.php">Vascular Plant Herbarium</a></li>
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="#">Browse Vascular Plants by:</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="/vascular/vascular-browse-family.php">Family Name</a></li>
                                <li class="menu-item"><a href="/vascular/vascular-browse-genus.php">Genus Name</a></li>
                                <li class="menu-item"><a href="/vascular/vascular-browse-common.php">Common Name</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="#">Checklist of Tennessee Vascular Plants</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="/vascular/checklist.php">Checklist by Category</a></li>
                                <li class="menu-item"><a href="/vascular/county-checklist.php">Checklist by County</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="/vascular/diversity.php">Diversity Map of Tennessee</a></li>
                        <li class="menu-item"><A href="/vascular/vascular-description.php">RTE &amp; NWI Status Descriptions</A></li>
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="#">Seed Herbarium</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><A href="/vascular/underwood.php">TN Seed Herbarium</A></li>
                                <li class="menu-item"><a href="/vascular/nontnseed.php">Non-TN Seed Herbarium</a></li>
                            </ul>
                        </li>  
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="#">Search Vascular Plants by:</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="/vascular/vascular-search-name.php">Name</a></li>
                                <li class="menu-item"><a href="/vascular/vascular-search-county.php">County</a></li>
                            </ul>
                        </li>                        
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="#">Search by Status</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="/vascular/state-status.php">State Status</a></li>
                                <li class="menu-item"><a href="/vascular/federal-status.php">Federal Status</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><A href="http://plants.usda.gov/java/threat?txtparm=&category=sciname&familycategory=DI&familycategory=FN&familycategory=GY&familycategory=MO&duration=all&growthhabit=all&wetland=all&statefed=all&stateSelect=US47&sort=sciname&submit.x=69&submit.y=12" target="new">Tennessee Threatened &amp; Endangered Plant List from USDA</A></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="top-menu-item">
              <button id="drop5" class="list-item-button" aria-haspopup="true" role="button" >People<i class="icon-fa-chevron-right pull-right"></i></button>
                <div class="megamenu-sub" id="menu-four"  aria-labelledby="drop5" aria-expanded="false">
                  <button class="menu-back btn"  data-toggle="dropdown"  role="button"><i class="icon-fa-chevron-left"></i> <span class="back">Back</span></button>
                    <h3>People</h3>
                    <div class="inner">
                    <div class="menu-header">
                      <ul class="menu">
                        <li class="menu-item"><a href="/people/director.php">Director</a></li>
                        <li class="menu-item"><a href="/people/curators.php">Curators</a></li>
                        <li class="menu-item"><a href="/people/staff.php">Staff</a></li>
                        <li class="menu-item"><a href="/people/associated.php">Associated Staff</a></li>
                        <li class="menu-item"><a href="/people/visiting.php">Visiting Researchers</a></li>
                        <li class="menu-item"><a href="/people/undergraduate.php">Undergraduate Students</a></li>
                        <li class="menu-item"><a href="/people/graduate.php">Graduate Students</a></li>
                        <li class="menu-item"><a href="/people/volunteers.php">Volunteers</a></li>
                      </ul>
                    </div>
                  </div>
            </div>
              </li>
              <li class="top-menu-item">
              <button id="drop6" class="list-item-button" aria-haspopup="true" role="button" >Herbarium Resources<i class="icon-fa-chevron-right pull-right"></i></button>
                <div class="megamenu-sub" id="menu-five"  aria-labelledby="drop6" aria-expanded="false">
                  <button class="menu-back btn"  data-toggle="dropdown"  role="button"><i class="icon-fa-chevron-left"></i> <span class="back">Back</span></button>
                    <h3>Herbarium Resources</h3>
                    <div class="inner">
                    <div class="menu-header">
                      <ul class="menu">
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="#">Policies</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="/TENNLoanPolicy.pdf" target="new">TENN Loan Policy</a></li>
                                <li class="menu-item"><a href="/TENNDestructiveSamplingPolicy.pdf" target="new">TENN Destructive Sampling Policy</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="#">Specimen Request Forms</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="/OnCampusLoans.pdf" target="new">On-Campus Loans</a></li>
                                <li class="menu-item"><a href="/loans.php">Off-Campus Loans</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="#">Annotation Labels</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="/AnnotationLabelTemplate.doc" target="new">Annotation Label Template</a></li>
                                <li class="menu-item"><a href="/DestructiveSamplingAnnotationLabelTemplate.doc" target="new">Destructive Sampling Annotation Template</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><A href="/microscopes.php">Microscopes</A></li>
                        <li class="menu-item"><a href="/fieldequipment.php">Field Equipment</a></li>
                        <li class="menu-item"><a href="/resources.php">Specimen Sampling Equipment</a></li>
                      </ul>
                    </div>
                  </div>
            </div>
              </li>
              <li class="top-menu-item">
              <button id="drop7" class="list-item-button" aria-haspopup="true" role="button" >Research Funding Opportunities<i class="icon-fa-chevron-right pull-right"></i></button>
                <div class="megamenu-sub" id="menu-six"  aria-labelledby="drop7" aria-expanded="false">
                  <button class="menu-back btn"  data-toggle="dropdown"  role="button"><i class="icon-fa-chevron-left"></i> <span class="back">Back</span></button>
                    <h3>Research Funding Opportunities</h3>
                    <div class="inner">
                    <div class="menu-header">
                      <ul class="menu">
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="#">Breedlove, Dennis Fund Award</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="https://eeb.utk.edu/breedlove-dennis-awards/" target="new">Application Form</a></li>
                                <li class="menu-item"><a href="https://eeb.utk.edu/breedlove-dennis-awards/" target="new">Post-fieldwork Report Form</a></li>
                                <li class="menu-item"><a href="/Breedlove Dennis Award Compiled Report 2018-2022 Public.pdf" target="new">Previously Awarded Field Work</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="https://eeb.utk.edu/lynne-and-bob-davis-herbarium-award/"target="new">Lynne and Bob Davis Award</a></li>
                        <li class="menu-item menu-item-has-children"><a href="https://eeb.utk.edu/hochman-research-award/"target="new">Hochman Research Award</a></li>
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="https://eeb.utk.edu/holton-plant-research-graduate-scholars-award/"target="new">Holton Plant Research Graduate Scholars Award</a></li>
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="https://eeb.utk.edu/hesler-awards/"target="new">Undergraduate and Graduate Student Herbarium Research Awards</a></li>
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="https://eeb.utk.edu/hesler-awards/"target="new">Visiting Researcher Fellowships</A></li>
                        <li class="menu-item menu-item-has-children" aria-haspopup="true" aria-expanded="false"><a href="https://eeb.utk.edu/hesler-awards/"target="new">Internal Faculty Herbarium Research Awards</A></li>
                      </ul>
                    </div>
                  </div>
            </div>
              </li>
              <li class="top-menu-item">
              <button id="drop8" class="list-item-button" aria-haspopup="true" role="button" >Inside the Herbarium<i class="icon-fa-chevron-right pull-right"></i></button>
                <div class="megamenu-sub" id="menu-seven"  aria-labelledby="drop8" aria-expanded="false">
                  <button class="menu-back btn"  data-toggle="dropdown"  role="button"><i class="icon-fa-chevron-left"></i> <span class="back">Back</span></button>
                    <h3>Research Inside the Herbarium</h3>
                    <div class="inner">
                    <div class="menu-header">
                      <ul class="menu">
                        <li class="menu-item"><A href="/inside.php">Herbarium Rooms</A></li>
                      </ul>
                    </div>
                  </div>
            </div>
              </li>
              <li>
              	<a href="https://eeb.utk.edu" target="new" class="home_button" tabindex="10"  role="button">Ecology and Evolutionary Biology</a>
              </li>
	          <li>
              	<a href="http://www.wildflowerpilgrimage.org/" target="new" class="home_button" tabindex="9"  role="button">Wildflower Pilgrimage</a>
              </li>
              <li class="top-menu-item">
                <button  id="drop11" class="list-item-button" aria-haspopup="true" role="button">Site Information<i class="icon-fa-chevron-right pull-right"></i></button>
                  <div class="megamenu-sub dropdown-menu" id="menu-ten"  aria-labelledby="drop11" aria-expanded="false">
                  <button class="menu-back btn"  data-toggle="dropdown" aria-haspopup="true" role="button"><i class="icon-fa-chevron-left"></i> <span class="back">Back</span></button>
                  <h3>Site Information</h3>
                    <div class="inner">
                    <div class="menu-header">
                      <ul class="menu">
                        <li class="menu-item"><a href="/copyright.php">Copyrights and Disclaimers</a></li>
                        <li class="menu-item"><a href="/database.php">Database, Maps and Publication Credits</a></li>
                        <li class="menu-item"><a href="/other.php">Other Plant Image and Distribution Sites</a></li>
                        <li class="menu-item"><a href="/photo.php">Photograph Credits</a></li>
                        <li class="menu-item"><a href="/content.php">Site Contents and Usage</a></li>
                      </ul>
                    </div>
                  </div>
            </div>
          </li>
          <li id="giving"><a href="https://giving.utk.edu/biodiversity" target="new">Give to the UT Herbarium<i class="icon-fa-gift fa-lg pull-right"></i></a></li>
        </ul>
      </div>
    </nav><!-- #site-navigation -->
        </div>
      </div>