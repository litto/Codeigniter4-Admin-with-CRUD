	<body class="skin-1">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="home.php" class="navbar-brand">
						<small>
						<img src="<?php echo base_url(); ?>/admin_theme/assets/avatars/logo.png" height="25px">
							Administrator
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<?php echo $notificationbar; ?>

						<!-- #section:basics/navbar.user_menu -->
					<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url(); ?>/admin_theme/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
						<?php echo $user->username; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="changepassword.php">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="contactsettings.php">
										<i class="ace-icon fa fa-user"></i>
										Contact
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>


						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
	<?php echo $sidemenu; ?>
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<!-- #section:basics/content.breadcrumbs -->
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="#">Home</a>
						</li>
						<li class="active">Dashboard</li>
					</ul><!-- /.breadcrumb -->

					<!-- #section:basics/content.searchbox -->
					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
						</form>
					</div><!-- /.nav-search -->

					<!-- /section:basics/content.searchbox -->
				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					<!-- #section:settings.box -->


					<!-- /section:settings.box -->
					<div class="page-header">
						<h1>
						Dashboard
							<small>
								<i class="ace-icon fa fa-angle-double-right"></i>
						Details
							</small>
						</h1>
					</div><!-- /.page-header -->

					<div class="row">
						<div class="col-xs-12">

				<div class="row">
								<div class="space-6"></div>

								<?php


$nopages=0;
$nobanners=0;
$noads=0;
$noproducts=0;
$noactiveproducts=0;
$noinactiveproducts=0;
$nocustomers=0;
$noorders=0;
$nosellers=0;
$noadmins=0;


								?>

			
	<div class="row">
<div class="col-sm-2">
<a href="page-content.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/cms.png" /></a>
</div>

<div class="col-sm-2">
<a href="banners.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/sliders.png" /></a>
</div>

<div class="col-sm-2">
<a href="albums.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/album.png" /></a>
</div>

<div class="col-sm-2">
<a href="musicalbum.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/music.png" /></a>
</div>

<div class="col-sm-2">
<a href="videoalbum.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/video.png" /></a>
</div>
<div class="col-sm-2">
<a href="products-list.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/products.png" /></a>
</div>

	</div>
<div class="row">&nbsp; &nbsp;<div class="hr hr32 hr-dotted"></div> </div>
	<div class="row">
<div class="col-sm-2">
<a href="projects-list.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/projects.png"/></a>
</div>

<div class="col-sm-2">
<a href="testimony-list.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/testimonial.png" /></a>
</div>

<div class="col-sm-2">
<a href="calendar.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/schedule.png" /></a>
</div>

<div class="col-sm-2">
<a href="news-list.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/news-list.png" /></a>
</div>

<div class="col-sm-2">
<a href="events-list.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/events.png" /></a>
</div>
<div class="col-sm-2">
<a href="community-list.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/community.png" /></a>
</div>

	</div>


	<div class="row">&nbsp; &nbsp;<div class="hr hr32 hr-dotted"></div> </div>
	<div class="row">
<div class="col-sm-2">
<a href="schedule-list.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/business-and-finance.png"/></a>
</div>

<div class="col-sm-2">
<a href="media-list.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/media-list.png" /></a>
</div>

<div class="col-sm-2">
<a href="career-list.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/career-list.png" /></a>
</div>

<div class="col-sm-2">
<a href="users.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/users.png" /></a>
</div>

<div class="col-sm-2">
<a href="contactsettings.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/contact-list.png" /></a>
</div>
<div class="col-sm-2">
<a href="logout.php"><img src="<?php echo base_url(); ?>/admin_theme/assets/icons/logout.png" /></a>
</div>

	</div>



						

							</div><!-- /.row -->





							</div>

							<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div><!-- /.main-content -->


		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>/admin_theme/assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?php echo base_url(); ?>/admin_theme/assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>/admin_theme/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/fullcalendar.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/bootbox.min.js"></script>

	    <script src="<?php echo base_url(); ?>/admin_theme/assets/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
			
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				});
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
		</script>

