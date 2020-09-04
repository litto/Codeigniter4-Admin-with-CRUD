<?php
include("db.php");
?><?php  include("header.php"); ?>
<?php

if(isset($_POST['submit'])){


    $activity_date        =   trim($_POST['activity_date']);
    $followuptype               =   trim($_POST['followuptype']);
    $productname               =   trim($_POST['productname']);
 $enquiry             =   trim($_POST['enquiry']);
  $remarks             =   trim($_POST['remarks']);
$userid=$_SESSION["loggeduser"];
$addeddate=date("Y/m/d H:i:s");
$id=$_POST['id'];
$followup=$_POST['followup'];
$previd=$_POST['previd'];

    if(trim($activity_date)=='' || trim($followuptype)=='' || trim($productname)==''){
        $message    =   new Message('Enter mandatory fields','error');
        $message->setMessage();
        
    }else{

    	$fo=new Followup();
$foldet=$fo->getdetails($followup);
$enquiry=$foldet[0]['enquiry_id'];
       
$pr=new Useractivity();
$en=new Enquiry();
$enqdet=$en->getdetails($enquiry);
$customer=$enqdet[0]['customer_id'];

$insert=array('date_activity'=>$activity_date,'remarks'=>$remarks,'type_id'=>$followuptype,'enquiry_id'=>$enquiry,'date_add'=>$addeddate,'product'=>$productname,'user'=>$userid,'id'=>$id,'customer'=>$customer,'followup'=>$followup);

if($pr->editactivity($insert)){  
$fo->updatedone($followup);
$fo->updateremarks($remarks,$followup);
if($previd!=$followup){
	$fo->updateundone($previd);
}

        	//$adminid=$ad->lastInsertId();
    
            $message    =   new Message('Activity edited successfully','message');
            $message->setMessage();         
          header("Location:useractivitylist.php");
            
        }else{  //failed insertion due to db error, set message queue
            $message    =   new Message('Unknown Error','error');
            $message->setMessage();
        }
 

          }




}



?>
	<!--

	TABLE OF CONTENTS.
	
	Use search to find needed section.
	
	===================================================================
	
	|  01. #CSS Links                |  all CSS links and file paths  |
	|  02. #FAVICONS                 |  Favicon links and file paths  |
	|  03. #GOOGLE FONT              |  Google font link              |
	|  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
	|  05. #BODY                     |  body tag                      |
	|  06. #HEADER                   |  header tag                    |
	|  07. #PROJECTS                 |  project lists                 |
	|  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
	|  09. #MOBILE                   |  mobile view dropdown          |
	|  10. #SEARCH                   |  search field                  |
	|  11. #NAVIGATION               |  left panel & navigation       |
	|  12. #MAIN PANEL               |  main panel                    |
	|  13. #MAIN CONTENT             |  content holder                |
	|  14. #PAGE FOOTER              |  page footer                   |
	|  15. #SHORTCUT AREA            |  dropdown shortcuts area       |
	|  16. #PLUGINS                  |  all scripts and plugins       |
	
	===================================================================
	
	-->
	
	<!-- #BODY -->
	<!-- Possible Classes

		* 'smart-skin-{SKIN#}'
		* 'smart-rtl'         - Switch theme mode to RTL (will be avilable from version SmartAdmin 1.5)
		* 'menu-on-top'       - Switch to top navigation (no DOM change required)
		* 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
		* 'fixed-header'      - Fixes the header
		* 'fixed-navigation'  - Fixes the main menu
		* 'fixed-ribbon'      - Fixes breadcrumb
		* 'fixed-footer'      - Fixes footer
		* 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
	-->
	<body class="menu-on-top fixed-header fixed-navigation fixed-ribbon">

		<!-- #HEADER -->
<?php include("topheader.php"); ?>
		<!-- END HEADER -->

		<!-- #NAVIGATION -->
		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
			<?php  include("menu.php"); ?>
		<!-- END NAVIGATION -->
<script type="text/javascript">
function callcancel(){
var r = confirm("Are you sure you want to Cancel??");
if (r == true) {
window.location="useractivitylist.php";
} else {
}

}
</script>

<?php
$id=$_GET['id'];
$usac=new Useractivity();
$rec=$usac->getdetails($id);


?>

		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
		<li><a href="home.php">Home</a></li><li><a href="useractivitylist.php">User Activity</a></li><li>Add</li>
				</ol>
				<!-- end breadcrumb -->

				<!-- You can also add more buttons to the
				ribbon for further usability

				Example below:

				<span class="ribbon-button-alignment pull-right">
				<span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
				<span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
				<span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
				</span> -->

			</div>
			<!-- END RIBBON -->
			
			

			<!-- MAIN CONTENT -->
			<div id="content">

				<!-- row -->
				<div class="row">
					
					<!-- col -->
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
						<h1 class="page-title txt-color-blueDark">
							
							<!-- PAGE HEADER -->
							<i class="fa-fw fa fa-home"></i> 
						User Activity
							<span>>  
							Edit
							</span>
						</h1>
					</div>
					<!-- end col -->
					
					<!-- right side of the page with the sparkline graphs -->
					<!-- col -->
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
	
						<!-- end sparks -->
					</div>
					<!-- end col -->
					
				</div>
				<!-- end row -->
				
				<!--
					The ID "widget-grid" will start to initialize all widgets below 
					You do not need to use widgets if you dont want to. Simply remove 
					the <section></section> and you can use wells or panels instead 
					-->
				
				<!-- widget grid -->
				<section id="widget-grid" class="">
				
					<!-- row -->
					<div class="row">
						
						<!-- NEW WIDGET START -->
						<article class="col-sm-12 col-md-12 col-lg-12">
													 <?php $message  =   new Message('','');
                    $message->showMessage();
        ?>
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-0">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
									<h2>Edit User activity</h2>				
									
								</header>
				
								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">	
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
					<form class="smart-form" enctype="multipart/form-data" action="edituseractivity.php?id=<?php echo $_GET['id']; ?>" method="post">
									<fieldset>
					<?php
$datw=date('Y-m-d');
$fpt=new Followuptype();
$followuptypes=$fpt->getcountry();
$prd=new Product();
$products=$prd->getall();
$en=new Enquiry();
$enquirys=$en->getall();
$cus=new Customer();
$fp=new Followup();
$followups=$fp->getac();
?>
												<section  class="col col-4">
													<label class="label">Activity Date</label>
													<label class="input"> 										
						<div class="input-group">
											<input type="text" name="activity_date" value="<?php echo $rec[0]['date_activity']; ?>" placeholder="Select a date" class="form-control datepicker" data-dateformat="yy-mm-dd">
																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															</div>
													</label>
												</section>

							<input type="hidden" name="id" value="<?php echo $_GET['id'];  ?>"/>
							<input type="hidden" name="previd" value="<?php echo $rec[0]['followup_id'];  ?>"/>					

<section class="col col-4">
													<label class="label">Type</label>
													<label class="select">
														<select id="optcountry"  name="followuptype"  style="width:100%" class="select2" >
															<option value=""> Select Type</option>
<?php for($i=0;$i<count($followuptypes);$i++){ 

 ?>

<option value="<?php echo $followuptypes[$i]['id']; ?>" <?php if($followuptypes[$i]['id']==$rec[0]['type_id']) { ?> selected="selected"    <?php } ?>  > <?php echo $followuptypes[$i]['name']; ?></option>

<?php } ?></select><i></i> </label>
												</section>

								<section class="col col-4">
													<label class="label">Product name:</label>
													<label class="input">
			<select id="optcountry"  name="productname"  style="width:100%" class="select2" >
															<option value="">Select product</option>
<?php for($i=0;$i<count($products);$i++){ 

 ?>

<option value="<?php echo $products[$i]['id']; ?>"  <?php if($products[$i]['id']==$rec[0]['product']) { ?> selected="selected"    <?php } ?> > <?php echo $products[$i]['name']; ?></option>

<?php } ?></select><i></i> </label>
												</section>



													<section class="col col-4">
													<label class="label">Followup-Customer:</label>
													<label class="input">
			<select id="optcountry"  name="followup"  style="width:100%" class="select2" >
															<option value="">Select</option>
<?php for($i=0;$i<count($followups);$i++){ 
$customerid=$followups[$i]['customer_id'];

$cusdet=$cus->getdetails($customerid);
$enquirydet=$en->getdetails($followups[$i]['enquiry_id']);

$foldet=$fpt->getdetails($followups[$i]['followup_type']);


 ?>

<option value="<?php echo $followups[$i]['id']; ?>"  <?php if($followups[$i]['id']==$rec[0]['followup_id']) { ?> selected="selected"    <?php } ?>  > <?php echo $cusdet[0]['name']; ?> (<?php echo $enquirydet[0]['enqref']; ?>)(<?php echo $foldet[0]['name']; ?>)</option>

<?php } ?></select><i></i> </label>
												</section>


	<section  class="col col-4">
													<label class="label"> Remarks</label>
													<label class="textarea textarea-resizable"> 										
									<textarea rows="3"  name="remarks"  class="custom-scroll"><?php echo $rec[0]["remarks"];?></textarea> 
													</label>
												</section>
	



</fieldset>

			<footer>
												<button type="submit" class="btn btn-primary"  name="submit">
													Submit
												</button>
												<button type="button" class="btn btn-danger" onclick="callcancel();">
													Cancel
												</button>
											</footer>
</form>



										<!-- this is what the user will see -->
				
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->
				
						</article>
						<!-- WIDGET END -->
						
					</div>
				
					<!-- end row -->
				
					<!-- row -->
				
					<div class="row">
				
						<!-- a blank row to get started -->
						<div class="col-sm-12">
							<!-- your contents here -->
						</div>
							
					</div>
				
					<!-- end row -->
				
				</section>
				<!-- end widget grid -->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

		<!-- PAGE FOOTER -->
		<?php include("footer.php"); ?>
		<!-- END SHORTCUT AREA -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
			}
		</script>

		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="js/app.config.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

		<!-- BOOTSTRAP JS -->
		<script src="js/bootstrap/bootstrap.min.js"></script>

		<!-- CUSTOM NOTIFICATION -->
		<script src="js/notification/SmartNotification.min.js"></script>

		<!-- JARVIS WIDGETS -->
		

		<!-- EASY PIE CHARTS -->
		<script src="js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

		<!-- SPARKLINES -->
		<script src="js/plugin/sparkline/jquery.sparkline.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>

		<!-- JQUERY SELECT2 INPUT -->
		<script src="js/plugin/select2/select2.min.js"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

		<!-- browser msie issue fix -->
		<script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

		<!-- FastClick: For mobile devices -->
		<script src="js/plugin/fastclick/fastclick.min.js"></script>

		<!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		<!-- Demo purpose only -->
		<script src="js/demo.min.js"></script>

		<!-- MAIN APP JS FILE -->
		<script src="js/app.min.js"></script>

		<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
		<!-- Voice command : plugin -->
		<script src="js/speech/voicecommand.min.js"></script>

		<!-- PAGE RELATED PLUGIN(S) 
		<script src="..."></script>-->

		<script type="text/javascript">

			$(document).ready(function() {
			 	
				/* DO NOT REMOVE : GLOBAL FUNCTIONS!
				 *
				 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
				 *
				 * // activate tooltips
				 * $("[rel=tooltip]").tooltip();
				 *
				 * // activate popovers
				 * $("[rel=popover]").popover();
				 *
				 * // activate popovers with hover states
				 * $("[rel=popover-hover]").popover({ trigger: "hover" });
				 *
				 * // activate inline charts
				 * runAllCharts();
				 *
				 * // setup widgets
				 * setup_widgets_desktop();
				 *
				 * // run form elements
				 * runAllForms();
				 *
				 ********************************
				 *
				 * pageSetUp() is needed whenever you load a page.
				 * It initializes and checks for all basic elements of the page
				 * and makes rendering easier.
				 *
				 */
				
				 pageSetUp();
				 
				/*
				 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
				 * eg alert("my home function");
				 * 
				 * var pagefunction = function() {
				 *   ...
				 * }
				 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
				 * 
				 * TO LOAD A SCRIPT:
				 * var pagefunction = function (){ 
				 *  loadScript(".../plugin.js", run_after_loaded);	
				 * }
				 * 
				 * OR
				 * 
				 * loadScript(".../plugin.js", run_after_loaded);
				 */
				
			})
		
		</script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
				_gaq.push(['_trackPageview']);
			
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>

	</body>

</html>