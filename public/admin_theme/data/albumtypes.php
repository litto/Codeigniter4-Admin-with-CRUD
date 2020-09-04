<?php include("header.php");

/*
 * Read an initialize search paramerts
*/
if(isset($_POST['unpublish'])){


    $cnt    =   $_POST['count'];
    $list   =   array();
    for($i=0;$i<$cnt;$i++){
        if(isset($_POST['chkId'.$i])){
            $list[] =   $_POST['chkId'.$i];
        }
    }
    if(count($list)>0){
        $obj    =   new Bodyconditionlib();
        $obj->unpublishList($list);
        $message    =   new Message('Selected items were unpublished ','message');
        $message->setMessage(); 
    }else{
            $message    =   new Message('No items selected','error');
            $message->setMessage();     
    }
    header("Location:bodycondition.php");
    exit;
}
/*
 * Publish Seleted list of items
*/
if(isset($_POST['publish'])){
    $cnt    =   $_POST['count'];
    $list   =   array();
    for($i=0;$i<$cnt;$i++){
        if(isset($_POST['chkId'.$i])){
            $list[] =   $_POST['chkId'.$i];
        }
    }
    if(count($list)>0){
        $obj    =   new Bodyconditionlib();
        $obj->publishList($list);
        $message    =   new Message('Selected items were published ','message');
        $message->setMessage(); 
    }else{
            $message    =   new Message('No items selected','error');
            $message->setMessage();     
    }
    header("Location:bodycondition.php");
    exit;
}
if(isset($_POST['delete'])){
    $cnt    =   $_POST['count'];
    $list   =   array();
    for($i=0;$i<$cnt;$i++){
        if(isset($_POST['chkId'.$i])){
            $list[] =   $_POST['chkId'.$i];
        }
    }
    if(count($list)>0){
        $obj    =   new Bodyconditionlib();
        $obj->deleteList($list);
        $message    =   new Message('Selected items deleted ','message');
        $message->setMessage(); 
    }else{
            $message    =   new Message('No items selected','error');
            $message->setMessage();     
    }
    header("Location:bodycondition.php");
    exit;
    
}


$msg    =   '';

$parent =   '';
$ord    =   '';
$mode   =   '';
$filter =   '';
$keyword='';
$country='';


if(isset($_POST['countrysearch'])){
	$country=$_POST['countrysearch'];
}else if(isset($_GET['countrysearch'])){
	$country=$_GET['countrysearch'];
}

if(isset($_GET['ord'])){
    $ord    =   $_GET['ord'];
}
if(isset($_GET['mode'])){
    $mode   =   $_GET['mode'];
}
if(isset($_POST['filter'])){
    $filter =   $_POST['filter'];
}else if(isset($_GET['filter'])){
    $filter =   $_GET['filter'];
}

$start  =   $_GET['start'];
$limit  =   20;
if(empty($start)){
    $start  =   0;
}

/*
 * Get results based on search conditions
*/
	
$values =   array('start'=>$start,'limit'=>$limit,"filter"=>$filter,"keyword"=>$keyword,"ord"=>$ord,"mode"=>$mode,'email'=>$email);

$obj    =   new Bodyconditionlib();
$records    =   $obj-> listall($values);

 $totalRecords   =   $obj->totalRecords;
$pageRecords    =   $obj->pageRecords;



$cnt    =   $totalRecords/$limit;
$cnt    =   ceil($cnt);
$current    =   ($start/$limit)+1;  
 $count=round($totalRecords/$limit);
$pagenum=$start;
$pg =   new Pages();
$pages  =   $pg->getPages($current,$cnt,$limit);                    
$first  =   $pg->getFirst($cnt,$limit);
$last   =   $pg->getLast($cnt,$limit);
$prev   =   $pg->getPrev($current,$cnt,$limit);
$next   =   $pg->getNext($current,$cnt,$limit);


$filterList =   array('----All----'=>'','Featured'=>'featured','Archived'=>'archived');

?>


<body class="<?php echo $skin; ?>">
		<!-- #section:basics/navbar.layout -->
<?php include("topheader.php");  ?>
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
<?php include("sidemenu.php"); ?>

			<!-- /section:basics/sidebar -->
			</div>
			<div class="main-content">
				<!-- #section:basics/content.breadcrumbs -->
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="home.php">Home</a>
						</li>

						<li>
							<a href="bodycondition.php">Bodycondition</a>
						</li>
						<li class="active">List</li>
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


					<!-- /section:settings.box -->


					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
<div class="row">
<div class="col-xs-12">
							<div class="widget-box">
										<div class="widget-header widget-header-small">
											<h5 class="widget-title lighter">Search Here</h5>
										</div>

										<div class="widget-body">
											<div class="widget-main">
						<form class="form-search" method="post" enctype="multipart/form-data" action="bodycondition.php">
													<div class="row">
														<div class="col-xs-12 col-sm-8">
															<div class="input-group">
																<input type="text" class="form-control search-query" placeholder="Type your query" />
																<span class="input-group-btn">
																	<button type="button" class="btn btn-purple btn-sm">
																		Search
																		<i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
																	</button>
																</span>
															</div>
															</div>
<div class="col-xs-12 col-sm-4">
											<a class="btn btn-app btn-primary btn-xs radius-4" href="addbodycondition.php">
											<i class="ace-icon fa fa-pencil-square-o bigger-160"></i>

											Create
											<span class="badge badge-transparent">
											
											</span>
										</a>
										<button class="btn btn-app btn-success btn-xs radius-4"  type="submit" name="publish">
											<i class="ace-icon fa fa-eye bigger-160"></i>

											Publish
											<span class="badge badge-transparent">
											
											</span>
										</button>
										
										<button class="btn btn-app btn-warning btn-xs radius-4" type="submit" name="unpublish">
											<i class="ace-icon fa fa-eye-slash bigger-160"></i>

											Unpublish
											<span class="badge badge-transparent">
											
											</span>
										</button>
										
										<button class="btn btn-app btn-danger btn-xs radius-4" type="submit" name="delete">
											<i class="ace-icon fa fa-trash-o bigger-160"></i>

											Delete
											<span class="badge badge-transparent">
												
											</span>
										</button>


													</div>		

													</div>
												
											</div>
										</div>
									</div>
</div>


</div></br>

		
<div class="row">

									 <?php $message  =   new Message('','');
                    $message->showMessage();
                     $message->clearmessage();
        ?>
</div>

						<div class="table-header">
									Bodycondition Listings
									</div>

					
  <?php 


  if($totalRecords > 0){ ?>
							<div class="row">
								<div class="col-xs-12">
									<table id="sample-table-1" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th class="center">
													<label class="position-relative">
														<input type="checkbox" class="ace" onclick="checkAll(this);" />
														<span class="lbl"></span>
													</label>
												</th>
												<th>Name</th>
											
												<th class="hidden-480">Status</th>

												<th></th>
											</tr>
										</thead>
  <input type="hidden" name="count" id="count" value="<?php echo $pageRecords;?>" />
										<tbody>
											<?php  for($i=0;$i<count($records);$i++){  ?>
											<tr>
												<td class="center">
													<label class="position-relative">
														<input type="checkbox" class="ace" name="chkId<?php echo $i;?>" id="chkId<?php echo $i;?>" value="<?php echo $records[$i]['id'];?>"  />
														<span class="lbl"></span>
													</label>
												</td>
  <input type="hidden" name="id<?php echo $i;?>" value="<?php echo $records[$i]['id'];?>" />
											<td><?php echo $records[$i]['name']; ?>
												

											</td>
								


											
												<td class="hidden-480">
												

													<?php if($records[$i]['status']==1){ ?>

<span class="label label-success">Published</span>
<?php }else if($records[$i]['status']==0) {?>
<span class="label label-important ">Unpublished</span>
<?php } ?>
												</td>

												<td>
													<div class="hidden-sm hidden-xs btn-group">
																<a class="btn btn-xs btn-info" href="editbodycondition.php?id=<?php echo $records[$i]['id']; ?>">
															<i class="ace-icon fa fa-pencil bigger-120"></i>
														</a>
														<button class="btn btn-xs btn-success" id="id-btn-publish<?php echo $records[$i]['id']; ?>">
															<i class="ace-icon fa fa-check bigger-120"></i>
														</button>
			                          <button class="btn btn-xs btn-warning" id="id-btn-unpublish<?php echo $records[$i]['id']; ?>">
															<i class="ace-icon fa  fa-eye-slash bigger-120"></i>
														</button>
											

														<button class="btn btn-xs btn-danger"  id="id-btn-dialog<?php echo $records[$i]['id']; ?>">
															<i class="ace-icon fa fa-trash-o bigger-120"></i>
														</button>

											
													</div>

													<div class="hidden-md hidden-lg">
														<div class="inline position-relative">
															<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
															</button>

															<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
													

																<li>
																	<a href="editbodycondition.php?id=<?php echo $records[$i]['id']; ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																		<span class="green">
																			<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<button class="tooltip-error" data-rel="tooltip" title="Delete" id="id-btn-dialog<?php echo $records[$i]['id']; ?>">
																		<span class="red">
																			<i class="ace-icon fa fa-trash-o bigger-120"></i>
																		</span>
																	</button>
																</li>

																		<li>
																	<button  class="tooltip-success" data-rel="tooltip" title="Publish" id="id-btn-publish<?php echo $records[$i]['id']; ?>">
																		<span class="green">
																			<i class="ace-icon fa fa-check bigger-120"></i>
																		</span>
																	</button>
																</li>

																					<li>
																	<button class="tooltip-success" data-rel="tooltip" title="Unpublish" id="id-btn-unpublish<?php echo $records[$i]['id']; ?>">
																		<span class="green">
																			<i class="ace-icon fa fa-eye-slash bigger-120"></i>
																		</span>
																	</button>
																</li>


															</ul>
														</div>
													</div>
												</td>
											</tr>
	<?php } ?>
		
										</tbody>
									</table>
									</form>
								</div><!-- /.span -->
							</div><!-- /.row -->

										<div class="modal-footer no-margin-top">
								

											<ul class="pagination pull-right no-margin">
												<li class="prev disabled">
										<a href="bodycondition.php?start=<?php echo $first;?>&keyword=<?php echo $keyword;?>&filter=<?php echo $filter;?>&ord=<?php echo $ord;?>&mode=<?php echo $mode;?>&countrysearch=<?php echo $country; ?>&state=<?php echo $statesearch; ?>&optcity=<?php echo $city; ?>">
														<i class="ace-icon fa fa-angle-double-left"></i>
													</a>
												</li>
 <?php for($i=0;$i<count($pages);$i++){ 
                        $star   =   ($pages[$i]-1)*$limit;  ?>
												<li <?php if($start==$star){?> class="active" <?php }?>>
													<a href="bodycondition.php?start=<?php echo $star;?>&keyword=<?php echo $keyword;?>&filter=<?php echo $filter;?>&ord=<?php echo $ord;?>&mode=<?php echo $mode;?>&countrysearch=<?php echo $country; ?>&state=<?php echo $statesearch; ?>&optcity=<?php echo $city; ?>"><?php echo $pages[$i];?></a>
												</li>

											  <?php }?>

												<li class="next">
													<a href="bodycondition.php?start=<?php echo $last;?>&keyword=<?php echo $keyword;?>&filter=<?php echo $filter;?>&ord=<?php echo $ord;?>&mode=<?php echo $mode;?>&countrysearch=<?php echo $country; ?>&state=<?php echo $statesearch; ?>&optcity=<?php echo $city; ?>">
													<i class="icon-double-angle-right">
														<i class="ace-icon fa fa-angle-double-right"></i>
													</a>
												</li>
											</ul>
										</div>


																				<?php }else{  ?>


<div class="alert alert-block alert-danger">

								Sorry...No Records Found..

							</div>

										<?php } ?>


							<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div><!-- /.main-content -->

			<div id="dialog-confirm" class="hide">
										<div class="alert alert-info bigger-110">
											These items will be permanently deleted and cannot be recovered.
										</div>

										<div class="space-6"></div>

										<p class="bigger-110 bolder center grey">
											<i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
											Are you sure?
										</p>
									</div><!-- #dialog-confirm -->


												<div id="publish-confirm" class="hide">
										<div class="alert alert-info bigger-110">
											These items will be Published.
										</div>

										<div class="space-6"></div>

										<p class="bigger-110 bolder center grey">
											<i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
											Are you sure?
										</p>
									</div><!-- #dialog-confirm -->

												<div id="unpublish-confirm" class="hide">
										<div class="alert alert-info bigger-110">
											These items will be Unpublished.
										</div>

										<div class="space-6"></div>

										<p class="bigger-110 bolder center grey">
											<i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
											Are you sure?
										</p>
									</div><!-- #dialog-confirm -->


									<div class="article"> </div>
<?php include("footer.php"); ?>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script src="util.js" type="text/javascript"></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery-ui.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			
				$( "#datepicker" ).datepicker({
					showOtherMonths: true,
					selectOtherMonths: false,
					//isRTL:true,
			
					
					/*
					changeMonth: true,
					changeYear: true,
					
					showButtonPanel: true,
					beforeShow: function() {
						//change button colors
						var datepicker = $(this).datepicker( "widget" );
						setTimeout(function(){
							var buttons = datepicker.find('.ui-datepicker-buttonpane')
							.find('button');
							buttons.eq(0).addClass('btn btn-xs');
							buttons.eq(1).addClass('btn btn-xs btn-success');
							buttons.wrapInner('<span class="bigger-110" />');
						}, 0);
					}
			*/
				});
			
			
				//override dialog's title function to allow for HTML titles
				$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
					_title: function(title) {
						var $title = this.options.title || '&nbsp;'
						if( ("title_html" in this.options) && this.options.title_html == true )
							title.html($title);
						else title.text($title);
					}
				}));
			
						
			<?php  for($i=0;$i<count($records);$i++){           ?>
				$( "#id-btn-dialog<?php echo $records[$i]['id']; ?>" ).on('click', function(e) {
					e.preventDefault();
				
					$( "#dialog-confirm" ).removeClass('hide').dialog({
						resizable: false,
						modal: true,
						title: "<div class='widget-header'><h4 class='smaller'><i class='icon-warning-sign red'></i>Delete Record?</h4></div>",
						title_html: true,
						buttons: [
							{
								html: "<i class='icon-trash bigger-110'></i>&nbsp; Delete this item",
								"class" : "btn btn-danger btn-mini",
								click: function() {
									$('.article').load("del_bodycondition.php?id="+<?php echo $records[$i]['id'];  ?>);
									$( this ).dialog( "close" );
								}
							}
							,
							{
								html: "<i class='icon-remove bigger-110'></i>&nbsp; Cancel",
								"class" : "btn btn-mini",
								click: function() {
									$( this ).dialog( "close" );
								}
							}
						]
					});
				});
			
			
				<?php } ?>

						<?php  for($i=0;$i<count($records);$i++){           ?>
				$( "#id-btn-unpublish<?php echo $records[$i]['id']; ?>" ).on('click', function(e) {
					e.preventDefault();
				
					$( "#unpublish-confirm" ).removeClass('hide').dialog({
						resizable: false,
						modal: true,
						title: "<div class='widget-header'><h4 class='smaller'><i class='icon-warning-sign red'></i>UnPublish Record?</h4></div>",
						title_html: true,
						buttons: [
							{
								html: "<i class='icon-trash bigger-110'></i>&nbsp; UnPublish",
								"class" : "btn btn-danger btn-mini",
								click: function() {
									$('.article').load("unpublish_bodycondition.php?id="+<?php echo $records[$i]['id'];  ?>);
									$( this ).dialog( "close" );
								}
							}
							,
							{
								html: "<i class='icon-remove bigger-110'></i>&nbsp; Cancel",
								"class" : "btn btn-mini",
								click: function() {
									$( this ).dialog( "close" );
								}
							}
						]
					});
				});
			
			
				<?php } ?>

				<?php  for($i=0;$i<count($records);$i++){           ?>
				$( "#id-btn-publish<?php echo $records[$i]['id']; ?>" ).on('click', function(e) {
					e.preventDefault();
				
					$( "#publish-confirm" ).removeClass('hide').dialog({
						resizable: false,
						modal: true,
						title: "<div class='widget-header'><h4 class='smaller'><i class='icon-warning-sign red'></i>Publish Record?</h4></div>",
						title_html: true,
						buttons: [
							{
								html: "<i class='icon-trash bigger-110'></i>&nbsp; Publish",
								"class" : "btn btn-danger btn-mini",
								click: function() {
									$('.article').load("publish_bodycondition.php?id="+<?php echo $records[$i]['id'];  ?>);
									$( this ).dialog( "close" );
								}
							}
							,
							{
								html: "<i class='icon-remove bigger-110'></i>&nbsp; Cancel",
								"class" : "btn btn-mini",
								click: function() {
									$( this ).dialog( "close" );
								}
							}
						]
					});
				});
			
			
				<?php } ?>
			
				$( "#id-btn-dialog2" ).on('click', function(e) {
					e.preventDefault();
				
					$( "#dialog-confirm2" ).removeClass('hide').dialog({
						resizable: false,
						modal: true,
						title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Empty the recycle bin?</h4></div>",
						title_html: true,
						buttons: [
							{
								html: "<i class='ace-icon fa fa-trash-o bigger-110'></i>&nbsp; Delete all items",
								"class" : "btn btn-danger btn-xs",
								click: function() {
									$( this ).dialog( "close" );
								}
							}
							,
							{
								html: "<i class='ace-icon fa fa-times bigger-110'></i>&nbsp; Cancel",
								"class" : "btn btn-xs",
								click: function() {
									$( this ).dialog( "close" );
								}
							}
						]
					});
				});
			
			
			
				
				

					
			});
		</script>

		<link rel="stylesheet" href="assets/css/ace.onpage-help.css" />
		<link rel="stylesheet" href="docs/assets/js/themes/sunburst.css" />

		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<script src="assets/js/ace/ace.onpage-help.js"></script>
		<script src="docs/assets/js/rainbow.js"></script>
		<script src="docs/assets/js/language/generic.js"></script>
		<script src="docs/assets/js/language/html.js"></script>
		<script src="docs/assets/js/language/css.js"></script>
		<script src="docs/assets/js/language/javascript.js"></script>
	</body>
</html>