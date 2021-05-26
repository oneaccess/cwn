<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/separate/vendor/jquery-steps.min.css">
<link rel="stylesheet" href="css/lib/lobipanel/lobipanel.min.css">
<link rel="stylesheet" href="css/separate/vendor/lobipanel.min.css">
<link rel="stylesheet" href="css/lib/jqueryui/jquery-ui.min.css">
<link rel="stylesheet" href="css/separate/pages/widgets.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="with-side-menu control-panel control-panel-compact">

	<header class="site-header">
	    <div class="container-fluid">
			
	        <a href="index.php" class="site-logo">
	            <img class="hidden-md-down" href="index.html" src="img/logo-2.png" alt="">
	            <img class="hidden-lg-up" href="index.html" src="img/logo-2-mob.png" alt="">
	        </a>
	
	        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button>
	
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">				
	                <div class="site-header-shown">
	                    <div class="dropdown dropdown-notification notif">
						
	                        <a href="#"
	                           class="header-alarm dropdown-toggle active"
	                           id="dd-notification"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-alarm"></i>
	                        </a>
							
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">								
	                            <div class="dropdown-menu-notif-header">
	                                Notifications
	                                <span class="label label-pill label-danger">1</span>								
	                            </div>
	                            <div class="dropdown-menu-notif-list">
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-1.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">อิศเรศ</a> งานกระบวนการตกแต่ง
	                                    <div class="color-blue-grey-lighter">15 Minutes ago</div>
	                                </div>	                             
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="#">See more</a>
	                            </div>
	                        </div>
	                    </div>
						
	
	                    <div class="dropdown dropdown-lang">
	                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <span class="flag-icon flag-icon-th"></span>
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right">
	                            <div class="dropdown-menu-col">
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-th"></span>ไทย</a>
									<a class="dropdown-item current" href="#"><span class="flag-icon flag-icon-us"></span>English</a>
	                            </div>
	                        </div>
	                    </div>
	
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="img/avatar-2-64.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="sign-in.html"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
	                        </div>
	                    </div>
	
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->
					<div class="site-header-search-container">
	                            <form class="site-header-search closed">
	                                <input type="text" placeholder="Search"/>
	                                <button type="submit">
	                                    <span class="font-icon-search"></span>
	                                </button>
	                                <div class="overlay"></div>
	                            </form>
	                        </div>
	
	                <div class="mobile-menu-right-overlay"></div>
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->
	<div class="modal fade"
					 id="ImportModal1"
					 tabindex="-1"
					 role="dialog"
					 aria-labelledby="myModalLabel"
					 aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<div class="table-responsive">
						<div class="box-typical-body">
					<section class="box-typical box-panel">
				<header class="box-typical-header" style="height:5px;">
					<div class="tbl-row" style="height:5px;">
						<div class="tbl-cell tbl-cell-title" style="height:5px;">
							<h3 style="text-align:center;">นำหนังเข้าระบบ</h3>
						</div>
					</div>
				</header>
				<div class="box-typical-body">
					<form id="example-form" action="#" class="form-wizard">
						<div>
							<h3 style="font-size:6px">ข้อมูล</h3>
							<section>
								<div class="form-group">
									<label>Lot No.</label>
									<input type="text" class="form-control" id="exampleInputEmail1" required>
								</div>
								<div class="form-group">
									<label>ใบสั่งซื้อ</label>
									<input type="text" class="form-control" id="exampleInputPassword1" required>
								</div>
								<div class="form-group">
									<label>รหัสลูกค้า</label>
									<input type="text" class="form-control" id="exampleInputPassword1" required>
								</div>
							</section>
							<h3 style="font-size:6px">รายละเอียด</h3>
							<section>
								<div class="row">
									<div class="col-lg-3">
										<fieldset class="form-group">
											<label class="form-label semibold" for="exampleInput">ประเภท</label>
											<input type="text" class="form-control" id="exampleInputEmail1" >
										</fieldset>
									</div>
									<div class="col-lg-3">
										<fieldset class="form-group">
											<label class="form-label" for="exampleInputEmail1">สี</label>
											<input type="text" class="form-control" id="exampleInputEmail1" >

										</fieldset>
									</div>
									<div class="col-lg-3">
										<fieldset class="form-group">
											<label class="form-label" for="exampleInputPassword1">ความหนา</label>
											<input type="text" class="form-control" id="exampleInputEmail1" >

										</fieldset>
									</div>
									<div class="col-lg-3">
										<fieldset class="form-group">
											<label class="form-label" for="exampleInputPassword1">เกรด</label>
											<input type="text" class="form-control" id="exampleInputEmail1" >

										</fieldset>
									</div>
									
								</div><!--.row-->
								<div class="form-group">
									<label>แหล่งหนัง</label>
									<input type="text" class="form-control" id="exampleInputPassword1" >
								</div>
								<div class="row">
									<div class="col-lg-4">
										<fieldset class="form-group">
											<label class="form-label semibold" for="exampleInput">วันที่สั่งซื้อ</label>
											<input type="text" class="form-control" id="exampleInputEmail1" >
										</fieldset>
									</div>
									<div class="col-lg-4">
										<fieldset class="form-group">
											<label class="form-label" for="exampleInputEmail1">วันที่ออกใบกำกับ</label>
											<input type="text" class="form-control" id="exampleInputEmail1" >

										</fieldset>
									</div>
									<div class="col-lg-4">
										<fieldset class="form-group">
											<label class="form-label" for="exampleInputPassword1">วันที่ส่งมอบ</label>
											<input type="text" class="form-control" id="exampleInputEmail1" >

										</fieldset>
									</div>
								</div><!--.row-->
							</section>
							<h3 style="font-size:6px">ตรวจสอบข้อมูล</h3>
			<section>
				<div class="card-block invoice">
					<div class="payment-details">
						<strong>ใบรายการนำหนังเข้าระบบ</strong><img src="qr.png" alt="Trulli" width="100" height="100" align="right">
							<table>
								<tr>
									<td>Lot No:</td>
									<td>30001</td>
								</tr>
								<tr>
									<td>ใบสั่งซื้อ:</td>
									<td>xxxxxxx</td>
								</tr>
								<tr>
									<td>รหัสลูกค้า:</td>
									<td>xxxxxxx</td>
								</tr>
								<tr>
									<td>ประเภท:</td>
									<td>xxxxxxx</td>
								</tr>
								<tr>
									<td>สี:</td>
									<td>xxxxxxx</td>
								</tr>
								<tr>
									<td>ความหนา:</td>
									<td>xxxxxxx</td>
								</tr>
								<tr>
									<td>เกรด:</td>
									<td>xxxxxxx</td>
								</tr>
								<tr>
									<td>จำนวน:</td>
									<td>xxxxxxx</td>
								</tr>
								<tr>
									<td>วันที่สั่งซื้อ:</td>
									<td>xxxxxxx</td>
								</tr>
								<tr>
									<td>วันที่ออกใบกำกับ:</td>
									<td>xxxxxxx</td>
								</tr>
								<tr>
									<td>วันที่ส่งมอบ:</td>
									<td>xxxxxxx</td>
								</tr>
							</table>								
					</div>			
				</div>
			</section>
						</div>
					</form>
				</div><!--.box-typical-body-->
			</section>
				</div><!--.box-typical-body-->
					</div>
							</div>
							<!--<div class="modal-footer">
								<button type="button" class="btn btn-rounded btn-primary" data-dismiss="modal">OK</button>
							</div>-->
						</div>
					</div>
	</div>
	<div class="modal fade"
					 id="ImportModal2"
					 tabindex="-1"
					 role="dialog"
					 aria-labelledby="myModalLabel"
					 aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
									<i class="font-icon-close-2"></i>
								</button>
								<!--<h4 class="modal-title" id="myModalLabel">Modal title</h4>-->
							</div>
							<div class="modal-body">
								<div class="table-responsive">
						<table class="table table-hover">
							<tbody>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-2-1"/>
											<label for="tbl-check-2-1"></label>
										</div>
									</td>
									<td><a href="#">State</a></td>
									<td>Text example here lorem ipsum</td>
									<td nowrap="nowrap">
										<div class="progress-steps-block">
											<div class="progress-steps">
												<div class="progress-step active"></div>
												<div class="progress-step"></div>
												<div class="progress-step"></div>
											</div>
											<div class="progress-steps-caption">1/3</br> 
											Steps</br> Complete</div>
										</div>
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>	
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-2-2"/>
											<label for="tbl-check-2-2"></label>
										</div>
									</td>
									<td><a href="#">State</a></td>
									<td>Text example here lorem ipsum</td>
									<td nowrap="nowrap">
										<div class="progress-steps-block">
											<div class="progress-steps">
												<div class="progress-step active"></div>
												<div class="progress-step active"></div>
												<div class="progress-step"></div>
											</div>
											<div class="progress-steps-caption">2/3</br> Steps</br> Complete</br></div>
										</div>
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
								</tr>
								<tr>
									<td class="table-check">
										<div class="checkbox checkbox-only">
											<input type="checkbox" id="tbl-check-2-3"/>
											<label for="tbl-check-2-3"></label>
										</div>
									</td>
									<td><a href="#">State</a></td>
									<td>Text example here lorem ipsum</td>
									<td nowrap="nowrap">
										<div class="progress-steps-block">
											<div class="progress-steps">
												<div class="progress-step active"></div>
												<div class="progress-step active"></div>
												<div class="progress-step active"></div>
											</div>
											<div class="progress-steps-caption">3/3</br> Steps</br> Complete</br></div>
										</div>
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">NULL</div>
										0%
									</td>
									<td>
										<div class="font-11 color-blue-grey-lighter uppercase">Unique values</div>
										72
									</td>
								</tr>
							</tbody>
						</table>
					</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-rounded btn-primary" data-dismiss="modal">OK</button>
							</div>
						</div>
					</div>
	</div>
	<button type="button"
						class="btn btn-inline btn-primary"
						data-toggle="modal"
						data-target=".bd-example-modal-sm">Small modal</button>

				<div class="modal fade bd-example-modal-sm"
					 id="myModal"
					 tabindex="-1"
					 role="dialog"
					 aria-labelledby="mySmallModalLabel"
					 aria-hidden="true">
					<div class="modal-dialog" style="width: 250px;height:600px;">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
									<i class="font-icon-close-2"></i>
								</button>
								<h4 class="modal-title" id="myModalLabel" style="margin-left:45px;">Qr Code Scan</h4>
							</div>
							<div class="modal-body">
								<iframe src="qr/qrscan.html" frameborder="0" height="100%" width="100%"></iframe>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-rounded btn-primary" data-dismiss="modal" style="margin-right:80px;">OK</button>
							</div>
						</div>
					</div>
				</div><!--.modal-->
	<div class="mobile-menu-left-overlay"></div>			
	<nav class="side-menu">
	    <ul class="side-menu-list">		
	        <li class="grey with-sub">
	            <span>
	                <span class="font-icon font-icon-burger"></span>
	                <span class="lbl">งานในระบบ</span>					
	            </span>
	            <ul>
	                <li class="with-sub">
	                    <span>
	                        <span class="lbl">นำเข้าวัตถุดิบ</span>
	                    </span>
	                    <ul>
	                        <li class="with-sub">
	                            <span>
	                                <span class="lbl">หนัง</span>
	                            </span>
	                            <ul>
	                                <li><a align="center" data-toggle="modal" data-target="#ImportModal1"><span class="lbl">หนัง A</span></a></li>
	                                <li><a href="#"><span class="lbl">หนัง B</span></a></li>
	                            </ul>
	                        </li>
	                        <li class="with-sub">
	                            <span>
	                                <span class="lbl">วัตถุเคมี</span>
	                            </span>
	                            <ul>
	                                <li><a align="center" data-toggle="modal" data-target="#ImportModal2"><span class="lbl">สารเคมีA</span></a></li>
	                                <li><a href="#"><span class="lbl">B</span></a></li>
	                            </ul>
	                        </li>
	                    </ul>
	                </li>
	            </ul>
	        </li>
	        <li class="grey with-sub">
	            <span>
	                <span class="font-icon font-icon-burger"></span>
	                <span class="lbl">รายงาน</span>
	            </span>
	            <ul>
	                <li class="with-sub">
	                    <span>
	                        <span class="lbl">รายงานการผลการปฏิบัติงาน</span>
	                    </span>
	                    <ul>
	                        <li class="with-sub">
	                            <span>
	                                <span class="lbl" >A</span>
	                            </span>
	                            <ul>
	                                <li><a href="cwn-report.php"><span class="lbl">A-1</span></a></li>
	                                <li><a href="#"><span class="lbl">A-2</span></a></li>
	                            </ul>
	                        </li>	                        
	                    </ul>
	                </li>
	            </ul>
	        </li>
	    </ul>
	
	    <section>
	        <header class="side-menu-title">Tags</header>
	        <ul class="side-menu-list">
	            <li>
	                <a href="#">
	                    <i class="tag-color green"></i>
	                    <span class="lbl">Website<br></span>						
	                </a>
	            </li>
	        </ul>
			<button type="button" style="margin-left:60px;"
						class="btn btn-inline btn-primary"
						data-toggle="modal"
						data-target="#myModal">
					QR-Scan
				</button>				
	    </section>	
	</nav><!--.side-menu-->
	<div w3-include-html="cwn-dashboard.php"></div>
	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script type="text/javascript" src="js/lib/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/lib/lobipanel/lobipanel.min.js"></script>
	<script type="text/javascript" src="js/lib/match-height/jquery.matchHeight.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="js/lib/jquery-validation/jquery.validate.min.js"></script>
	<script src="js/lib/jquery-steps/jquery.steps.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.panel').lobiPanel({
				sortable: true
			});
			$('.panel').on('dragged.lobiPanel', function(ev, lobiPanel){
				$('.dahsboard-column').matchHeight();
			});

			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('string', 'Day');
				dataTable.addColumn('number', 'Values');
				// A column for custom tooltip content
				dataTable.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
				dataTable.addRows([
					['MON',  130, ' '],
					['TUE',  130, '130'],
					['WED',  180, '180'],
					['THU',  175, '175'],
					['FRI',  200, '200'],
					['SAT',  170, '170'],
					['SUN',  250, '250'],
					['MON',  220, '220'],
					['TUE',  220, ' ']
				]);

				var options = {
					height: 314,
					legend: 'none',
					areaOpacity: 0.18,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						textPosition: 'out'
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						baselineColor: '#16b4fc',
						ticks: [0,25,50,75,100,125,150,175,200,225,250,275,300,325,350],
						gridlines: {
							color: '#1ba0fc',
							count: 15
						},
					},
					lineWidth: 2,
					colors: ['#fff'],
					curveType: 'function',
					pointSize: 5,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#008ffb',
						strokeWidth: 0,
					},
					chartArea:{
						left:0,
						top:0,
						width:'100%',
						height:'100%'
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
				chart.draw(dataTable, options);
			}
			$(window).resize(function(){
				drawChart();
				setTimeout(function(){
				}, 1000);
			});
		});
	</script>
<script src="js/app.js"></script>
<script>
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /* Remove the attribute, and call this function once more: */
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      /* Exit the function: */
      return;
    }
  }
}
</script>
<script>
		$(function() {
			$("#example-basic ").steps({
				headerTag: "h3",
				bodyTag: "section",
				transitionEffect: "slideLeft",
				autoFocus: true
			});

			var form = $("#example-form");
			form.validate({
				rules: {
					agree: {
						required: true
					}
				},
				errorPlacement: function errorPlacement(error, element) { element.closest('.form-group').find('.form-control').after(error); },
				highlight: function(element) {
					$(element).closest('.form-group').addClass('has-error');
				},
				unhighlight: function(element) {
					$(element).closest('.form-group').removeClass('has-error');
				}
			});

			form.children("div").steps({
				headerTag: "h3",
				bodyTag: "section",
				transitionEffect: "slideLeft",
				onStepChanging: function (event, currentIndex, newIndex)
				{
					form.validate().settings.ignore = ":disabled,:hidden";
					return form.valid();
				},
				onFinishing: function (event, currentIndex)
				{
					form.validate().settings.ignore = ":disabled";
					return form.valid();
				},
				onFinished: function (event, currentIndex)
				{
					alert("Submitted!");
				}
			});

			$("#example-tabs").steps({
				headerTag: "h3",
				bodyTag: "section",
				transitionEffect: "slideLeft",
				enableFinishButton: false,
				enablePagination: false,
				enableAllSteps: true,
				titleTemplate: "#title#",
				cssClass: "tabcontrol"
			});

			$("#example-vertical").steps({
				headerTag: "h3",
				bodyTag: "section",
				transitionEffect: "slideLeft",
				stepsOrientation: "vertical"
			});
		});
	</script>
<script>includeHTML();</script>
</body>
</html>
