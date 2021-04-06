<?php include('accesscheck.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/css/font-awesome.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
				<?php include('header.php'); ?>
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
			<?php include('sidebar.php'); ?>
			<div class="main-content">
				<div class="main-content-inner">
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

						

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
					
						<!-- /section:settings.box -->
						<!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
							
							
							
							
							
							<div class="row">
						<div class="col-xs-12">
							<div class="widget-box widget-color-blue2 light-border" id="searchCustomersDiv">
								<div class="widget-header widget-header-blue widget-header-flat">
										<h4 class="widget-title lighter">Search Filters</h4>
									</div>
								<div class="widget-body">
									<div class="widget-main">	
										<div id="fuelux-wizard-container">
											<form class="form-horizontal" id='searchForm'>
												<div class="space-2"></div>
													<div class="form-group">
															<!--select id="ventureName2" name="ventureName2" class="select2" data-placeholder="Click to Choose...">
															</select-->
															<div class="col-sm-3">
																<div class="col-sm-12" align="center">SELECT TEST CENTER <br/>
																<select class="form-control" name="testcenter" id="testcenter">
	<option <?php if( isset($_GET['testcenter']) && $_GET['testcenter']=="All" ) echo "selected"; ?> value="All">ALL CENTERS</option>
	<option <?php if( isset($_GET['testcenter']) && $_GET['testcenter']=="Anantapur" ) echo "selected"; ?> value="Anantapur">Anantapur</option>
	<option <?php if( isset($_GET['testcenter']) && $_GET['testcenter']=="Hyderabad" ) echo "selected"; ?> value="Hyderabad">Hyderabad</option>
	<option <?php if( isset($_GET['testcenter']) && $_GET['testcenter']=="Kakinada" ) echo "selected"; ?> value="Kakinada">Kakinada</option>
	<option <?php if( isset($_GET['testcenter']) && $_GET['testcenter']=="Tirupati" ) echo "selected"; ?> value="Tirupati">Tirupati</option>
	<option <?php if( isset($_GET['testcenter']) && $_GET['testcenter']=="Vijayawda" ) echo "selected"; ?> value="Vijayawda">Vijayawda</option>
	<option <?php if( isset($_GET['testcenter']) && $_GET['testcenter']=="Visakhapatnam" ) echo "selected"; ?> value="Visakhapatnam">Visakhapatnam</option>
<option <?php if( isset($_GET['testcenter']) && $_GET['testcenter']=="Warangal" ) echo "selected"; ?> value="Warangal">Warangal</option>

<option <?php if( isset($_GET['testcenter']) && $_GET['testcenter']=="Bangalore" ) echo "selected"; ?> value="Bangalore">Bangalore</option>
<option <?php if( isset($_GET['testcenter']) && $_GET['testcenter']=="Chennai" ) echo "selected"; ?> value="Chennai">Chennai</option>
<option <?php if( isset($_GET['testcenter']) && $_GET['testcenter']=="Kolkata" ) echo "selected"; ?> value="Kolkata">Kolkata</option>
<option <?php if( isset($_GET['testcenter']) && $_GET['testcenter']=="Noida" ) echo "selected"; ?> value="Noida">Noida</option>
<!------------------------------------------------------------- Added by Renuka----------------------------------------------------------->
<option <?php if( isset($_GET['testcenter']) && $_GET['testcenter']=="At home" ) echo "selected"; ?> value="At home">At home</option>









																</select></div>
															</div>
															<div class="col-sm-3">
																<div class="col-sm-12" align="center">EMAIL STATUS <br/>
																<select class="form-control" name="emailstatus" id="emailstatus">
																	<option <?php if( isset($_GET['emailstatus']) && $_GET['emailstatus']=="YES" ) echo "selected"; ?> value="YES">YES</option>
																	<option <?php if( isset($_GET['emailstatus']) && $_GET['emailstatus']=="NO" ) echo "selected"; ?> value="NO">NO</option>
																</select></div>
															</div>
															<div class="col-sm-3">
																<div class="col-sm-12" align="center">SPECIFIC HALLTICKET<br/>
																	<input <?php if(isset($_GET['onlyht'])) echo "value='".$_GET['onlyht']."'"; ?> class="form-control" name="onlyht" id="onlyht" type="text" />
																</div>
															</div>
															 <div class="col-sm-3">
																<br/>
																<div class="input-group-addon btn-app btn-success" style="cursor: pointer;color: #ffffff;border-color:rgba(126, 138, 125, 0.23) !important;width: 20px" onclick='loadApps()'>
																<span class="glyphicon glyphicon-search"></span>
																</div>
															</div>
															<div class="col-sm-3">
																
																<a class="pull-right btn btn-sm btn-success" onclick='loadsendApps()'>
																	<span class="bigger-110">SEND HALLTICKETS</span>
																</a>
															</div>
															
													</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>

						
								
								<div class="row">
									<div class="col-xs-12">
										
										<div class="table-header">
											Applicants Data  <div class="pull-right tableTools-container"></div>
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>Email</th>
														<th>Name</th>
														<th>Mobile</th>
														<th>App No</th>
														<th>Test Center</th>
														<th>Time</th>
													</tr>
												</thead>
												<tbody>
													
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php include('footer.php'); ?>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/dataTables/jquery.dataTables.js"></script>
		<script src="assets/js/dataTables/jquery.dataTables.bootstrap.js"></script>
		<script src="assets/js/dataTables/extensions/buttons/dataTables.buttons.js"></script>
		<script src="assets/js/dataTables/extensions/buttons/buttons.flash.js"></script>
		<script src="assets/js/dataTables/extensions/buttons/buttons.html5.js"></script>
		<script src="assets/js/dataTables/extensions/buttons/buttons.print.js"></script>
		<script src="assets/js/dataTables/extensions/buttons/buttons.colVis.js"></script>
		<script src="assets/js/dataTables/extensions/select/dataTables.select.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace/elements.scroller.js"></script>
		<script src="assets/js/ace/elements.colorpicker.js"></script>
		<script src="assets/js/ace/elements.fileinput.js"></script>
		<script src="assets/js/ace/elements.typeahead.js"></script>
		<script src="assets/js/ace/elements.wysiwyg.js"></script>
		<script src="assets/js/ace/elements.spinner.js"></script>
		<script src="assets/js/ace/elements.treeview.js"></script>
		<script src="assets/js/ace/elements.wizard.js"></script>
		<script src="assets/js/ace/elements.aside.js"></script>
		<script src="assets/js/ace/ace.js"></script>
		<script src="assets/js/ace/ace.ajax-content.js"></script>
		<script src="assets/js/ace/ace.touch-drag.js"></script>
		<script src="assets/js/ace/ace.sidebar.js"></script>
		<script src="assets/js/ace/ace.sidebar-scroll-1.js"></script>
		<script src="assets/js/ace/ace.submenu-hover.js"></script>
		<script src="assets/js/ace/ace.widget-box.js"></script>
		<script src="assets/js/ace/ace.settings.js"></script>
		<script src="assets/js/ace/ace.settings-rtl.js"></script>
		<script src="assets/js/ace/ace.settings-skin.js"></script>
		<script src="assets/js/ace/ace.widget-on-reload.js"></script>
		<script src="assets/js/ace/ace.searchbox-autocomplete.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			function loadApps()
			{
				var c = $("#testcenter").val();
				var p = $("#emailstatus").val();
				var a = $("#onlyht").val();
				var url = "sendHT.php?testcenter="+c+"&emailstatus="+p+"&onlyht="+a;
				window.location.href=url;
			}
			function loadsendApps()
			{
				var c = $("#testcenter").val();
				var p = $("#emailstatus").val();
				var a = $("#onlyht").val();
				var url = "../authentication/sendEmailHT.php?testcenter="+c+"&emailstatus="+p+"&onlyht="+a;
				window.location.href=url;
			}
			jQuery(function($) {
				//initiate dataTables plugin
				<?php 
					$centerURL = "https://msitprogram.net/admissions/admin/service/gatht.php";
					if(isset($_GET['testcenter'])) 
						$centerURL = $centerURL."?testcenter=".$_GET['testcenter'];
					else
						$centerURL = $centerURL."?testcenter=All";
					if(isset($_GET['emailstatus'])) 
						$centerURL = $centerURL."&emailstatus=".$_GET['emailstatus'];
					else
						$centerURL = $centerURL."&emailstatus=NO";
					
					if(isset($_GET['onlyht'])) 
						$centerURL = $centerURL."&onlyht=".$_GET['onlyht'];
					else
						$centerURL = $centerURL."&onlyht=NO";
				?>
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"deferRender": true,
					"aoColumns": [
									{ "mData": "email"},
									{ "mData": "full_name" },
									{ "mData": "mobile_no"},
									{ "mData": "gatAppNo" },
									{ "mData": "center" },
									{ "mData": "testTime" }
								],
					//"aaSorting": [],
					"aaSorting": [],
					//"aaData":pullColleges(),
					
					"sAjaxDataProp":"apps",
					//"bProcessing": true,
			        //"bServerSide": true,
			        "sAjaxSource": "<?php echo $centerURL; ?>",
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
					
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.swfPath = "assets/js/dataTables/extensions/buttons/swf/flashExport.swf"; //in Ace demo assets will be replaced by correct assets path
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(!this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				function pullColleges()
				{
					var collegesList = [];
					$.ajax({
					type: 'GET',
					async: false,
					url: 'https://msitprogram.net/admissions/admin/service/applicants.php',
					//data: JSON.stringify(postData),
					contentType: "application/json",
					success: function(data, textStatus, jqXHR){
						console.log(data);
						data = JSON.stringify(data);
						collegesList=data.apps;				        
					},
					error: function(jqXHR, textStatus, errorThrown){
						alert(JSON.stringify(jqXHR));
					}
					});	
					return collegesList;
				}
				
				$('#dynamic-table tbody tr').click(function(event) {					
						$(this).addClass('highlight').siblings().removeClass('highlight');
					});
			})
		</script>

		<!-- the following scripts are used in demo only for onpage help and you don't need them -->
		<link rel="stylesheet" href="assets/css/ace.onpage-help.css" />
		
		<script type="text/javascript"> ace.vars['base'] = '.'; </script>
		<script src="assets/js/ace/elements.onpage-help.js"></script>
		<script src="assets/js/ace/ace.onpage-help.js"></script>
				<script src="docs/assets/js/rainbow.js"></script>
		<script src="docs/assets/js/language/generic.js"></script>
		<script src="docs/assets/js/language/html.js"></script>
		<script src="docs/assets/js/language/css.js"></script>
		<script src="docs/assets/js/language/javascript.js"></script>

	</body>
</html>
