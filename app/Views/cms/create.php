<?php echo $mainheader;  ?>
<body class="skin-1">
		<!-- #section:basics/navbar.layout -->
<?php echo $topheader; ?>
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
<?php echo $sidemenu; ?>
			</div>


   <script type="text/javascript">  
        function countseotitle() {  
  
            var i = document.getElementById("seo_title").value.length;  
            document.getElementById("seo_title_label").innerHTML = 70 - i; 
 
        }  
    </script> 


       <script type="text/javascript">  
        function countseodescription() {  

  
            var i = document.getElementById("seo_description").value.length;  
            document.getElementById("seo_description_label").innerHTML = 160 - i; 
 
        }  
    </script>


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
							<a href="<?php echo base_url(); ?>/auth/dashboard">Home</a>
						</li>

						<li>
							<a href="<?php echo base_url(); ?>/auth/cms/list">Pages</a>
						</li>
						<li class="active">Add Record</li>
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
							Add Page
							<small>
								<i class="ace-icon fa fa-angle-double-right"></i>
								Create new Record
							</small>
						</h1>
					</div><!-- /.page-header -->
		

					<div class="row">
														<?php echo $messagebar;  ?>
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
				
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>/auth/cms/create/">

			<?php  echo form_hidden($csrf); ?>

			<div class="col-xs-12 col-sm-12 widget-container-col">
									<!-- #section:custom/widget-box -->
									<div class="widget-box">
										<div class="widget-header">
											<h5 class="widget-title">Page Details</h5>

											<!-- #section:custom/widget-box.toolbar -->
											<div class="widget-toolbar">
												<div class="widget-menu">
													<a href="#" data-action="settings" data-toggle="dropdown">
														<i class="ace-icon fa fa-bars"></i>
													</a>

													<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
														<li>
															<a data-toggle="tab" href="#dropdown1">Option#1</a>
														</li>

														<li>
															<a data-toggle="tab" href="#dropdown2">Option#2</a>
														</li>
													</ul>
												</div>

												<a href="#" data-action="fullscreen" class="orange2">
													<i class="ace-icon fa fa-expand"></i>
												</a>

												<a href="#" data-action="reload">
													<i class="ace-icon fa fa-refresh"></i>
												</a>

												<a href="#" data-action="collapse">
													<i class="ace-icon fa fa-chevron-up"></i>
												</a>

												<a href="#" data-action="close">
													<i class="ace-icon fa fa-times"></i>
												</a>
											</div>

											<!-- /section:custom/widget-box.toolbar -->
										</div>

										<div class="widget-body">
											<div class="widget-main">


												<div class="row">
						<div class="col-xs-6">
								<!-- #section:elements.form -->
								<div class="form-group">
									<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Title </label>

									<div class="col-sm-8">
										<input type="text" id="form-field-1" placeholder="Page Name"  name="txtMenuTitle" value="<?php echo $txtMenuTitle;?>"  class="col-xs-12 col-sm-12" />
									</div>
								</div>

                                 </div>

				<div class="col-xs-6">
								<!-- #section:elements.form -->
								<div class="form-group">
									<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Image </label>

									<div class="col-sm-8">
											<input type="file" id="id-input-file-2" name="txtFile"/>
									</div>
								</div>

                                 </div>




                                 </div>

<div class="row">

                            
                                 			<div class="col-xs-6">
								<!-- #section:elements.form -->
								<div class="form-group">
									<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Parent </label>

									<div class="col-sm-8">
																	<select  class="form-control" id="brands" data-placeholder="Choose Parent" name="txtParent"  >
										<option value="0" <?php if($txtParent==0){?> selected="selected"<?php }?>>-------Top-------</option>
                            <?php
                           
                            foreach($parentList as $ind=>$val){   //loop 1 start
                            
                            	
                            	if($val['items']!=''){
                                $sub    =   $val["items"];
                            }else{
                            	$sub='';
                            }
                                
                                ?>
                                <option value="<?php echo $val["id"]?>" <?php if($txtParent==$val["id"]){?> selected="selected"<?php }?>><?php echo $val["title"]?>
                                </option>                               
                                <?php
                                 if($sub!=''){
                                if(count($sub)>0){ //if1
            
                                     ?>
                                    <optgroup>
                                        <?php
                                        foreach($sub as $indd=>$vall){ //for 2

                                 if($vall['items']!=''){
                                $subb    =   $vall["items"];
                            }else{
                            	$subb='';
                            }
                                            ?>
                                            <option value="<?php echo $vall["id"]?>" <?php if($txtParent==$vall["id"]){?> selected="selected"<?php }?> ><?php echo $vall['title'];?></option>
                                            <?php
                                              if($subb!=''){
                                            if(count($subb)>0)  {
                                                foreach($subb as $inddd=>$valll){
                                                    ?>
                                                     <option value="<?php echo $valll["id"]?>" <?php if($txtParent==$valll["id"]){?> selected="selected"<?php }?> > &nbsp;&nbsp;&nbsp;--<?php echo $valll['title'];?></option>
                                                    <?php
                                                }
                                            } }
                                            
                                        } //for 2//
                                        ?>
                                    </optgroup>
                                    <?php

                                }//if1
                                }
                                
                            }//loop1 exit//
                            ?>
                        </select>
									</div>
								</div>

                                 </div>
			<div class="col-xs-6">
								<!-- #section:elements.form -->
								<div class="form-group">
									<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Page Title </label>

									<div class="col-sm-8">
										<input type="text" id="form-field-1" placeholder="Page Title" name="txtTitle"  value="<?php echo $txtTitle; ?>"   class="col-xs-12 col-sm-12" />
									</div>
								</div>

                                 </div>




</div>


<div class="row">

      		<div class="col-xs-12">
								<!-- #section:elements.form -->
								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Content </label>

									<div class="col-sm-10">
									<textarea name="txtContent" id="description" rows="5" cols="80"><?php echo $txtContent; ?></textarea>
									</div>
								</div>

                                 </div>

   

                                 </div>

                                 					</div>
										</div>
									</div>

									<!-- /section:custom/widget-box -->
								</div>

	<div class="col-xs-12 col-sm-12 widget-container-col">
									<!-- #section:custom/widget-box -->
									<div class="widget-box">
										<div class="widget-header">
											<h5 class="widget-title">SEO Management</h5>

											<!-- #section:custom/widget-box.toolbar -->
											<div class="widget-toolbar">
												<div class="widget-menu">
													<a href="#" data-action="settings" data-toggle="dropdown">
														<i class="ace-icon fa fa-bars"></i>
													</a>

													<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
														<li>
															<a data-toggle="tab" href="#dropdown1">Option#1</a>
														</li>

														<li>
															<a data-toggle="tab" href="#dropdown2">Option#2</a>
														</li>
													</ul>
												</div>

												<a href="#" data-action="fullscreen" class="orange2">
													<i class="ace-icon fa fa-expand"></i>
												</a>

												<a href="#" data-action="reload">
													<i class="ace-icon fa fa-refresh"></i>
												</a>

												<a href="#" data-action="collapse">
													<i class="ace-icon fa fa-chevron-up"></i>
												</a>

												<a href="#" data-action="close">
													<i class="ace-icon fa fa-times"></i>
												</a>
											</div>

											<!-- /section:custom/widget-box.toolbar -->
										</div>

										<div class="widget-body">
											<div class="widget-main">

	<div class="row">
			<div class="col-xs-12">
								<!-- #section:elements.form -->
								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> SEO Title </label>

									<div class="col-sm-7">
									<input type="text" name="seo_title" id="seo_title" onkeyup="countseotitle()" class="form-control" maxlength="70" value="<?php echo $seo_title; ?>">
									</div>
									<label class="col-sm-3" for="form-field-1" style="color:red;"> Remaining Characters: <span id="seo_title_label"> 70<?php echo $remainingtitlecount; ?> </span> </label>
								</div>

                                 </div>
</div>

<div class="row">
       	<div class="col-xs-12">
				
								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-tags">SEO Keywords</label>

									<div class="col-sm-10">
											<textarea id="form-field-tags"   name="seo_keywords" class="autosize-transition form-control"><?php echo $seo_keywords; ?></textarea>
								</div>
								</div></div>
<div class="row">


										<div class="col-xs-12">
					
								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Url Slug </label>

									<div class="col-sm-7">
									<input type="text" name="seo_slug" class="form-control" maxlength="70" value="<?php echo $seo_slug; ?>">
									</div>
						
								</div>

                                 </div>

                                 </div>
	
<div class="row">

     		<div class="col-xs-12">
								<!-- #section:elements.form -->
								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> SEO Description </label>

									<div class="col-sm-7">
								<textarea id="seo_description" onkeyup="countseodescription()"  maxlength="160" name="seo_description" class="autosize-transition form-control"><?php echo $seo_description; ?></textarea>

									</div>
									<label class="col-sm-3" for="form-field-1" style="color:red;"> Remaining Characters: <span id="seo_description_label"> 160<?php echo $remainingdesccount; ?></span> </label>
								</div>

                                 </div>

          
</div>

									





									
											</div>
										</div>
									</div>

									<!-- /section:custom/widget-box -->
								</div>






	


			<div class="clearfix form-actions">
									<div class="col-md-offset-3 col-md-9">
										<button class="btn btn-info" type="submit" name="submit">
											<i class="ace-icon fa fa-check bigger-110"></i>
											Submit
										</button>

										&nbsp; &nbsp; &nbsp;
										<button class="btn" type="reset">
											<i class="ace-icon fa fa-undo bigger-110"></i>
											Reset
										</button>
									</div>
								</div>
      </form>



							<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div><!-- /.main-content -->


<?php echo $footer; ?>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

<script type="text/javascript" src="<?php echo base_url(); ?>/admin_theme/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    mode : "exact",
    elements  : "description",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});
</script>

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

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/date-time/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/date-time/daterangepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/date-time/bootstrap-datetimepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/jquery.knob.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/jquery.autosize.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/bootstrap-tag.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url(); ?>/admin_theme/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$('.chosen-select').chosen({allow_single_deselect:true}); 
				//resize the chosen on window resize
				$(window).on('resize.chosen', function() {
					var w = $('.chosen-select').parent().width();
					$('.chosen-select').next().css({'width':w});
				}).trigger('resize.chosen');
			
				$('#chosen-multiple-style').on('click', function(e){
					var target = $(e.target).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
			
			
				
				//"jQuery UI Slider"
				//range slider tooltip example
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1] + "";
			
						if( !ui.handle.firstChild ) {
							$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
							.prependTo(ui.handle);
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
				
				$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing allowExt && allowMime function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var whitelist_ext, whitelist_mime;
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "ace-icon fa fa-picture-o";
			
						whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
						whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "ace-icon fa fa-cloud-upload";
						
						whitelist_ext = null;//all extensions are acceptable
						whitelist_mime = null;//all mimes are acceptable
					}
					var file_input = $('#id-input-file-3');
					file_input
					.ace_file_input('update_settings',
					{
						'btn_choose': btn_choose,
						'no_icon': no_icon,
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
					})
					file_input.ace_file_input('reset_input');
					
					file_input
					.off('file.error.ace')
					.on('file.error.ace', function(e, info) {
						//console.log(info.file_count);//number of selected files
						//console.log(info.invalid_count);//number of invalid files
						//console.log(info.error_list);//a list of errors in the following format
						
						//info.error_count['ext']
						//info.error_count['mime']
						//info.error_count['size']
						
						//info.error_list['ext']  = [list of file names with invalid extension]
						//info.error_list['mime'] = [list of file names with invalid mimetype]
						//info.error_list['size'] = [list of file names with invalid size]
						
						
						/**
						if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
						*/
						
						
						//if files have been selected (not dropped), you can choose to reset input
						//because browser keeps all selected files anyway and this cannot be changed
						//we can only reset file field to become empty again
						//on any case you still should check files with your server side script
						//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
					});
				
				});
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up', icon_down:'ace-icon fa fa-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus smaller-75', icon_down:'ace-icon fa fa-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
				//$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
				//or
				//$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
				//$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0
			
			
				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			
			
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
			
				$('#colorpicker1').colorpicker();
			
				$('#simple-colorpicker-1').ace_colorpicker();
				//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
				//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
				//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
				//picker.pick('red', true);//insert the color if it doesn't exist
			
			
				$(".knob").knob();
				
				
				var tag_input = $('#form-field-tags');
				try{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						//source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
						/**
						//or fetch data from database, fetch those that match "query"
						source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
						*/
					  }
					);
			
					//programmatically add a new
					var $tag_obj = $('#form-field-tags').data('tag');
					//$tag_obj.add('Programmatically Added');
				}
				catch(e) {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
				
				
				
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
		</script>

	</body>
</html>
