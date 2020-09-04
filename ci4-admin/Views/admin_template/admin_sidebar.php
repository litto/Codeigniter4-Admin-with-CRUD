			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						

						<!-- /section:basics/sidebar.layout.shortcuts -->
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

								<i class="menu-icon fa fa-globe"></i>
					<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li <?php if($currentpage=='home'){  ?> class="active" <?php } ?> >
						<a href="<?php echo base_url(); ?>//auth/dashboard">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>


	<li <?php if($currentpage=='page-content' || $currentpage=='page-create' || $currentpage=='page-update' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text"> CMS Pages</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='page-create' ){  ?> class="active" <?php } ?>>
								<a href="<?php echo base_url(); ?>/auth/cms/create">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>

							<li <?php if($currentpage=='page-content' ){  ?> class="active" <?php } ?>>
								<a href="<?php echo base_url(); ?>/auth/cms/list">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>

	

	<li <?php if($currentpage=='banners.php' || $currentpage=='addbanner.php' || $currentpage=='editbanner.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-camera"></i>
							<span class="menu-text"> Banners</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='addbanner.php' ){  ?> class="active" <?php } ?>>
								<a href="<?php echo base_url(); ?>/auth/banner/create">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>

											<li <?php if($currentpage=='banners.php' ){  ?> class="active" <?php } ?>>
								<a href="banners.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>

				

	<li <?php if($currentpage=='albums.php' || $currentpage=='addalbum.php' || $currentpage=='editalbum.php' || $currentpage=='imagelisting.php'  || $currentpage=='addphoto.php' ||  $currentpage=='editphoto.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-camera-retro"></i>
							<span class="menu-text"> Photo Albums</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='addalbum.php' ){  ?> class="active" <?php } ?>>
								<a href="addalbum.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>

											<li <?php if($currentpage=='albums.php' ){  ?> class="active" <?php } ?>>
								<a href="albums.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>


							<li <?php if($currentpage=='musicalbum.php' || $currentpage=='addmusicalbum.php' || $currentpage=='editmusicalbum.php' || $currentpage=='music.php'  || $currentpage=='addmusic.php' ||  $currentpage=='editmusic.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-bolt"></i>
							<span class="menu-text"> Music Albums</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='addmusicalbum.php' ){  ?> class="active" <?php } ?>>
								<a href="addmusicalbum.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>

											<li <?php if($currentpage=='musicalbum.php' ){  ?> class="active" <?php } ?>>
								<a href="musicalbum.php">
											<i class="menu-icon fa fa-list"></i>
								List 
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>



							<li <?php if($currentpage=='videoalbum.php' || $currentpage=='addvideoalbum.php' || $currentpage=='editvideoalbum.php' || $currentpage=='videos.php'  || $currentpage=='addvideo.php' ||  $currentpage=='editvideo.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-video-camera"></i>
							<span class="menu-text"> Video Albums</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='addvideoalbum.php' ){  ?> class="active" <?php } ?>>
								<a href="addvideoalbum.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>

											<li <?php if($currentpage=='videoalbum.php' ){  ?> class="active" <?php } ?>>
								<a href="videoalbum.php">
											<i class="menu-icon fa fa-list"></i>
								List 
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>


		
					<li <?php if($currentpage=='products-list.php' || $currentpage=='addproduct.php' || $currentpage=='editproduct.php'){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-gift"></i>
							<span class="menu-text"> Products/Services</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">


									<li <?php if($currentpage=='addproduct.php' ){  ?> class="active" <?php } ?>>
								<a href="addproduct.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>


											<li <?php if($currentpage=='products-list.php' ){  ?> class="active" <?php } ?>>
								<a href="products-list.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>



										<li <?php if($currentpage=='projects-list.php' || $currentpage=='addproject.php' || $currentpage=='editproject.php'){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-book"></i>
							<span class="menu-text"> Portfolio/Projects</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">


									<li <?php if($currentpage=='addproject.php' ){  ?> class="active" <?php } ?>>
								<a href="addproject.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>


											<li <?php if($currentpage=='projects-list.php' ){  ?> class="active" <?php } ?>>
								<a href="projects-list.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>


	<li <?php if($currentpage=='testimony-list.php' || $currentpage=='addtestimony.php' || $currentpage=='edittestimony.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-comments"></i>
							<span class="menu-text"> Testimony</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='addtestimony.php' ){  ?> class="active" <?php } ?>>
								<a href="addtestimony.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>

											<li <?php if($currentpage=='testimony-list.php' ){  ?> class="active" <?php } ?>>
								<a href="testimony-list.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>



	<li <?php if($currentpage=='clients-list.php' || $currentpage=='addclient.php' || $currentpage=='editclient.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-users"></i>
							<span class="menu-text"> Clients</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='addclient.php' ){  ?> class="active" <?php } ?>>
								<a href="addclient.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>

											<li <?php if($currentpage=='clients-list.php' ){  ?> class="active" <?php } ?>>
								<a href="clients-list.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>



	<li <?php if($currentpage=='brands-list.php' || $currentpage=='addbrand.php' || $currentpage=='editbrand.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-heart"></i>
							<span class="menu-text"> Brands</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='addbrand.php' ){  ?> class="active" <?php } ?>>
								<a href="addbrand.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>

											<li <?php if($currentpage=='brands-list.php' ){  ?> class="active" <?php } ?>>
								<a href="brands-list.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>



						<li <?php if($currentpage=='calendar.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-calendar"></i>
							<span class="menu-text"> Calendar</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

		

											<li <?php if($currentpage=='calendar.php' ){  ?> class="active" <?php } ?>>
								<a href="calendar.php">
											<i class="menu-icon fa fa-list"></i>
								Manage
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>



<li <?php if($currentpage=='news-list.php' || $currentpage=='addnews.php' || $currentpage=='editnews.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-bullhorn"></i>
							<span class="menu-text"> News</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='addnews.php' ){  ?> class="active" <?php } ?>>
								<a href="addnews.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>

											<li <?php if($currentpage=='news-list.php' ){  ?> class="active" <?php } ?>>
								<a href="news-list.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>





<li <?php if($currentpage=='events-list.php' || $currentpage=='addevent.php' || $currentpage=='editevent.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text"> Events </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='addevent.php' ){  ?> class="active" <?php } ?>>
								<a href="addevent.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>

											<li <?php if($currentpage=='events-list.php' ){  ?> class="active" <?php } ?>>
								<a href="events-list.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>





						<li <?php if($currentpage=='community-list.php' || $currentpage=='addcommunity.php' || $currentpage=='editcommunity.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-heart"></i>
							<span class="menu-text"> Communities </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='addcommunity.php' ){  ?> class="active" <?php } ?>>
								<a href="addcommunity.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>

											<li <?php if($currentpage=='community-list.php' ){  ?> class="active" <?php } ?>>
								<a href="community-list.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>



						<li <?php if($currentpage=='schedule-list.php' || $currentpage=='addschedule.php' || $currentpage=='editschedule.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text"> Schedules </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='addschedule.php' ){  ?> class="active" <?php } ?>>
								<a href="addschedule.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>

											<li <?php if($currentpage=='schedule-list.php' ){  ?> class="active" <?php } ?>>
								<a href="schedule-list.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>

	
						<li <?php if($currentpage=='media-list.php' || $currentpage=='addmedia.php' || $currentpage=='editmedia.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-download"></i>
							<span class="menu-text"> Media</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='addmedia.php' ){  ?> class="active" <?php } ?>>
								<a href="addmedia.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>

											<li <?php if($currentpage=='media-list.php' ){  ?> class="active" <?php } ?>>
								<a href="media-list.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>


						<li <?php if($currentpage=='career-list.php' || $currentpage=='addcareer.php' || $currentpage=='editcareer.php' || $currentpage=='applicants-list.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-briefcase"></i>
							<span class="menu-text"> Careers </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

					<li <?php if($currentpage=='addcareer.php' ){  ?> class="active" <?php } ?>>
								<a href="addcareer.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add Career
								</a>

								<b class="arrow"></b>
							</li>

							<li <?php if($currentpage=='career-list.php' ){  ?> class="active" <?php } ?>>
								<a href="career-list.php">
											<i class="menu-icon fa fa-list"></i>
								Career List
								</a>

								<b class="arrow"></b>
							</li>

							<li <?php if($currentpage=='applicants-list.php' ){  ?> class="active" <?php } ?>>
								<a href="applicants-list.php">
											<i class="menu-icon fa fa-list"></i>
								Applicants List
								</a>

								<b class="arrow"></b>
							</li>



						</ul>

						</li>



					<li <?php if($currentpage=='users.php' || $currentpage=='adduser.php' || $currentpage=='edituser.php'){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-users"></i>
							<span class="menu-text"> Users</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">


									<li <?php if($currentpage=='adduser.php' ){  ?> class="active" <?php } ?>>
								<a href="adduser.php">
											<i class="menu-icon fa fa-pencil"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>


											<li <?php if($currentpage=='users.php' ){  ?> class="active" <?php } ?>>
								<a href="users.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>


	<li <?php if($currentpage=='subscribers.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-user"></i>
							<span class="menu-text"> Subscribers</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">


											<li <?php if($currentpage=='subscribers.php' ){  ?> class="active" <?php } ?>>
								<a href="subscribers.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>

			
			
<li <?php if($currentpage=='editcountry.php' || $currentpage=='addcountry.php' || $currentpage=='country.php' || $currentpage=='editcurrency.php' || $currentpage=='addcurrency.php' || $currentpage=='currency.php' || $currentpage=='editstate.php' || $currentpage=='addstate.php' || $currentpage=='state.php' || $currentpage=='editcity.php' || $currentpage=='addcity.php' || $currentpage=='city.php' || $currentpage=='editlistcategory.php' || $currentpage=='addlistcategory.php' || $currentpage=='listcategory.php' || $currentpage=='editlistsubcategory.php' || $currentpage=='addlistsubcategory.php' || $currentpage=='listsubcategory.php' || $currentpage=='editlistsubcategory.php' || $currentpage=='editproductcategory.php' || $currentpage=='addproductcategory.php' || $currentpage=='productcategory.php' || $currentpage=='editproductsubcategory.php' || $currentpage=='addproductsubcategory.php' || $currentpage=='productsubcategory.php' || $currentpage=='editproductsubcategory.php' ||  $currentpage=='editalbumtype.php' || $currentpage=='addalbumtype.php' || $currentpage=='albumtypes.php' || $currentpage=='editmediatype.php' || $currentpage=='addmediatype.php' || $currentpage=='mediatypes.php' || $currentpage=='editgeneraltype.php' || $currentpage=='addgeneraltype.php' || $currentpage=='generaltypes.php' || $currentpage=='editcolour.php' || $currentpage=='addcolour.php' || $currentpage=='colour.php' || $currentpage=='editsellertype.php' || $currentpage=='addsellertype.php' || $currentpage=='sellertype.php' || $currentpage=='editfueltype.php' || $currentpage=='addfueltype.php' || $currentpage=='fueltype.php' || $currentpage=='editusage.php' || $currentpage=='addusage.php' || $currentpage=='usage.php' || $currentpage=='editbrand.php' || $currentpage=='addbrand.php' || $currentpage=='brand.php' || $currentpage=='editmailtemplate.php' || $currentpage=='addmailtemplate.php' || $currentpage=='mailtemplate.php' || $currentpage=='editbedroom.php' || $currentpage=='addbedroom.php' || $currentpage=='bedroom.php' || $currentpage=='editbathroom.php' || $currentpage=='addbathroom.php' || $currentpage=='bathroom.php' || $currentpage=='editemploymenttype.php' || $currentpage=='addemploymenttype.php' || $currentpage=='employmenttype.php' || $currentpage=='editcareer.php' || $currentpage=='addcareer.php' || $currentpage=='career.php' || $currentpage=='editeducation.php' || $currentpage=='addeducation.php' || $currentpage=='education.php' || $currentpage=='editexperience.php' || $currentpage=='addexperience.php' || $currentpage=='experience.php' || $currentpage=='editbankcategory.php' || $currentpage=='addbankcategory.php' || $currentpage=='bankcategory.php' || $currentpage=='editclothsize.php' || $currentpage=='addclothsize.php' || $currentpage=='clothsizes.php' || $currentpage=='editshoesize.php' || $currentpage=='addshoesize.php' || $currentpage=='shoesizes.php' || $currentpage=='editshipping.php' || $currentpage=='addshipping.php' || $currentpage=='shipping.php' || $currentpage=='importshipping.php' || $currentpage=='warehouse-edit.php' || $currentpage=='warehouse-add.php' || $currentpage=='warehouse.php' || $currentpage=='shelves-edit.php' || $currentpage=='shelves-add.php' || $currentpage=='shelves.php' || $currentpage=='slots-edit.php' || $currentpage=='slots-add.php' || $currentpage=='slots.php'){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-book"></i>
							<span class="menu-text"> Masters</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

			

				<li <?php if( $currentpage=='editcountry.php' || $currentpage=='addcountry.php' || $currentpage=='country.php' || $currentpage=='editstate.php' || $currentpage=='addstate.php' || $currentpage=='state.php' || $currentpage=='editcity.php' || $currentpage=='addcity.php' || $currentpage=='city.php'){  ?> class="active" <?php } ?>>
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Location
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li <?php if($currentpage=='addcountry.php' ){  ?> class="active" <?php } ?>>
										<a href="addcountry.php">
											<i class="menu-icon fa fa-plus"></i>
											Add Country
										</a>

										<b class="arrow"></b>
									</li>
										
										<li <?php if($currentpage=='country.php' || $currentpage=='editcountry.php'){  ?> class="active" <?php } ?>>
										<a href="country.php">
											<i class="menu-icon fa fa-list"></i>
											Country List
										</a>

										<b class="arrow"></b>
									</li>

		<li <?php if($currentpage=='state.php' || $currentpage=='editstate.php' ){  ?> class="active" <?php } ?>>
										<a href="state.php">
											<i class="menu-icon fa fa-list"></i>
											State List
										</a>

										<b class="arrow"></b>
									</li>

	<li <?php if($currentpage=='addstate.php' ){  ?> class="active" <?php } ?>>
										<a href="addstate.php">
											<i class="menu-icon fa fa-plus"></i>
											Add State
										</a>

										<b class="arrow"></b>
									</li>

<li <?php if($currentpage=='city.php' || $currentpage=='editcity.php' ){  ?> class="active" <?php } ?>>
										<a href="city.php">
											<i class="menu-icon fa fa-list"></i>
											City List
										</a>

										<b class="arrow"></b>
									</li>

	<li <?php if($currentpage=='addcity.php' ){  ?> class="active" <?php } ?>>
										<a href="addcity.php">
											<i class="menu-icon fa fa-plus"></i>
											Add City
										</a>

										<b class="arrow"></b>
									</li>




								</ul>
							</li>
	


	

	
						<li <?php if( $currentpage=='editlistcategory.php' || $currentpage=='addlistcategory.php' || $currentpage=='listcategory.php' || $currentpage=='editlistsubcategory.php' || $currentpage=='addlistsubcategory.php' || $currentpage=='listsubcategory.php' || $currentpage=='editlistsubcategory.php' ){  ?> class="active" <?php } ?>>
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

							Category
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">

								<li <?php if( $currentpage=='editlistcategory.php' || $currentpage=='addlistcategory.php'  || $currentpage=='editlistsubcategory.php' || $currentpage=='addlistsubcategory.php'  || $currentpage=='editlistsubcategory.php' ){  ?> class="active" <?php } ?>>
								<a href="addlistcategory.php">
											<i class="menu-icon fa fa-plus"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>
		
								<li <?php if( $currentpage=='listcategory.php'  || $currentpage=='listsubcategory.php'  ){  ?> class="active" <?php } ?> >
								<a href="listcategory.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>
		
								</ul>
							</li>
					

				<li <?php if( $currentpage=='editproductcategory.php' || $currentpage=='addproductcategory.php' || $currentpage=='productcategory.php' || $currentpage=='editproductsubcategory.php' || $currentpage=='addproductsubcategory.php' || $currentpage=='productsubcategory.php' || $currentpage=='editproductsubcategory.php' ){  ?> class="active" <?php } ?>>
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

							Sub  Category
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">

								<li <?php if( $currentpage=='editproductcategory.php' || $currentpage=='addproductcategory.php'  || $currentpage=='editproductsubcategory.php' || $currentpage=='addproductsubcategory.php'  || $currentpage=='editproductsubcategory.php' ){  ?> class="active" <?php } ?>>
								<a href="addproductcategory.php">
											<i class="menu-icon fa fa-plus"></i>
								Add
								</a>

								<b class="arrow"></b>
							</li>
		
								<li <?php if( $currentpage=='productcategory.php'  || $currentpage=='productsubcategory.php'  ){  ?> class="active" <?php } ?> >
								<a href="productcategory.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>
		
								</ul>
							</li>

			


					


						<li <?php if( $currentpage=='editcurrency.php' || $currentpage=='addcurrency.php' || $currentpage=='currency.php' ){  ?> class="active" <?php } ?>>
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

							Currency
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">

								<li <?php if($currentpage=='addcurrency.php' ){  ?> class="active" <?php } ?> >
								<a href="addcurrency.php">
											<i class="menu-icon fa fa-plus"></i>
							Add
								</a>

								<b class="arrow"></b>
							</li>
		
							<li <?php if( $currentpage=='editcurrency.php'  || $currentpage=='currency.php' ){  ?> class="active" <?php } ?>>
								<a href="currency.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>
		
								</ul>
							</li>

					

<li <?php if( $currentpage=='editmailtemplate.php' || $currentpage=='addmailtemplate.php' || $currentpage=='mailtemplate.php' ){  ?> class="active" <?php } ?>>
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

						Mail Templates
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">

								<li <?php if($currentpage=='addmailtemplate.php' ){  ?> class="active" <?php } ?> >
								<a href="addmailtemplate.php">
											<i class="menu-icon fa fa-plus"></i>
							Add
								</a>

								<b class="arrow"></b>
							</li>
		
							<li <?php if( $currentpage=='editmailtemplate.php'  || $currentpage=='mailtemplate.php' ){  ?> class="active" <?php } ?>>
								<a href="mailtemplate.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>
		
								</ul>
							</li>

					


					

<li <?php if( $currentpage=='editalbumtype.php' || $currentpage=='addalbumtype.php' || $currentpage=='albumtypes.php' ){  ?> class="active" <?php } ?>>
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

						Album Types
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">

								<li <?php if($currentpage=='addalbumtype.php' ){  ?> class="active" <?php } ?> >
								<a href="addalbumtype.php">
											<i class="menu-icon fa fa-plus"></i>
							Add
								</a>

								<b class="arrow"></b>
							</li>
		
							<li <?php if( $currentpage=='editalbumtype.php'  || $currentpage=='albumtypes.php' ){  ?> class="active" <?php } ?>>
								<a href="albumtypes.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>
		
								</ul>
							</li>

					

				

<li <?php if( $currentpage=='editmediatype.php' || $currentpage=='addmediatype.php' || $currentpage=='mediatypes.php' ){  ?> class="active" <?php } ?>>
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

						Media Types
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">

								<li <?php if($currentpage=='addmediatype.php' ){  ?> class="active" <?php } ?> >
								<a href="addmediatype.php">
											<i class="menu-icon fa fa-plus"></i>
							Add
								</a>

								<b class="arrow"></b>
							</li>
		
							<li <?php if( $currentpage=='editmediatype.php'  || $currentpage=='mediatypes.php' ){  ?> class="active" <?php } ?>>
								<a href="mediatypes.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>
		
								</ul>
							</li>


							<li <?php if( $currentpage=='editgeneraltype.php' || $currentpage=='addgeneraltype.php' || $currentpage=='generaltypes.php' ){  ?> class="active" <?php } ?>>
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

						General Types
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">

								<li <?php if($currentpage=='addgeneraltype.php' ){  ?> class="active" <?php } ?> >
								<a href="addgeneraltype.php">
											<i class="menu-icon fa fa-plus"></i>
							Add
								</a>

								<b class="arrow"></b>
							</li>
		
							<li <?php if( $currentpage=='editgeneraltype.php'  || $currentpage=='generaltypes.php' ){  ?> class="active" <?php } ?>>
								<a href="generaltypes.php">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>
		
								</ul>
							</li>

	




										
						</ul>
					</li>


					<li <?php if($currentpage=='mailsettings.php' || $currentpage=='changepassword.php' || $currentpage=='contactsettings.php' || $currentpage=='authentication.php' || $currentpage=='sitesettings.php' ){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-cogs"></i>
							<span class="menu-text"> Settings</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

								<li class="">
								<a href="mailsettings.php">
											<i class="menu-icon fa fa-list"></i>
								Mail settings
								</a>

								<b class="arrow"></b>
							</li>
						

											
		<li class="">
								<a href="sitesettings.php">
											<i class="menu-icon fa fa-list"></i>
								Site Settings
								</a>

								<b class="arrow"></b>
							</li>
							              <li class="">
								<a href="changepassword.php">
											<i class="menu-icon fa fa-list"></i>
								Change Password
								</a>

								<b class="arrow"></b>
							</li>




	       
				               <li class="">
								<a href="authentication.php">
											<i class="menu-icon fa fa-list"></i>
								2F Authentication
								</a>

								<b class="arrow"></b>
							</li>
										<li class="">
								<a href="contactsettings.php">
											<i class="menu-icon fa fa-list"></i>
								Contact Settings
								</a>

								<b class="arrow"></b>
							</li>
				



						</ul>

						</li>

					
		<li <?php if($currentpage=='adminusers' || $currentpage=='addadminuser' || $currentpage=='editadminuser'){  ?> class="active open" <?php } ?>>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-users"></i>
							<span class="menu-text"> Admin Users</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
			<li <?php if($currentpage=='addadminuser' ){  ?> class="active" <?php } ?> >
								<a href="<?php echo base_url(); ?>/auth/create_user">
											<i class="menu-icon fa fa-plus"></i>
							Add
								</a>

								<b class="arrow"></b>
							</li>

											<li <?php if($currentpage=='adminusers' || $currentpage=='editadminuser' ){  ?> class="active" <?php } ?>>
								<a href="<?php echo base_url(); ?>/auth/user_list">
											<i class="menu-icon fa fa-list"></i>
								List
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

						</li>
	

							<li class="">
								<a href="auth/logout">
									<i class="menu-icon fa  fa-lock"></i>
									Logout
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>