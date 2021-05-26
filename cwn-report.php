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

    	<link href="css/lib/charts-c3js/c3.min.css" rel="stylesheet" type="text/css">
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
	
	        <a href="index.html" class="site-logo">
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
							<div class="modal-header">
								<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
									<i class="font-icon-close-2"></i>
								</button>
								<h4 class="modal-title" id="myModalLabel">Modal title</h4>
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
	<div class="modal fade"
					 id="ImportModal2"
					 tabindex="-1"
					 role="dialog"
					 aria-labelledby="myModalLabe2"
					 aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
									<i class="font-icon-close-2"></i>
								</button>
								<h4 class="modal-title" id="myModalLabel">Modal title</h4>
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
								<!--<iframe src="qr/qrscan.html" frameborder="0" height="100%" width="100%"></iframe>-->
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
	                                <li><a align="center" data-toggle="modal" data-target="#ImportModal2"><span class="lbl">สารเคมี A</span></a></li>
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
	                        <li class="with-sub">
	                            <span>
	                                <span class="lbl" >รายงานการผลการปฏิบัติงาน</span>
	                            </span>
	                            <ul>
	                                <li><a href="cwn-report.html"><span class="lbl">A-1</span></a></li>
	                                <li><a href="#"><span class="lbl">A-2</span></a></li>
	                            </ul>
	                        </li>	                        

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
	                    <span class="lbl">Website</span>
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

<div class="page-content" style="margin-top:-50px;";>
    <header class="page-content-header">
        <div class="container-fluid">
            <div class="tbl">
                <!--<div class="tbl-row">
                    <div class="tbl-cell">
                        <h3>รายงานการดำเนินการ</h3>
                    </div>
                </div>-->
            </div>
        </div>
    </header><!--.page-content-header-->

    <div class="container-fluid">
        <!--<section class="card">
            <header class="card-header">
                Line Chart
            </header>
            <div class="card-block">
                <div id="line-chart"></div>
            </div>
        </section>

        <section class="card">
            <header class="card-header">
                Spline Chart
            </header>
            <div class="card-block">
                <div id="spline-chart"></div>
            </div>
        </section>

        <section class="card">
            <header class="card-header">
                Step Chart
            </header>
            <div class="card-block">
                <div id="step-chart"></div>
            </div>
        </section>

        <section class="card">
            <header class="card-header">
                Area Chart
            </header>
            <div class="card-block">
                <div id="area-chart"></div>
            </div>
        </section>

        <section class="card">
            <header class="card-header">
                Bar Chart
            </header>
            <div class="card-block">
                <div id="bar-chart"></div>
            </div>
        </section>

        <section class="card">
            <header class="card-header">
                Scatter Plot Chart
            </header>
            <div class="card-block">
                <div id="scatter-plot-chart"></div>
            </div>
        </section>-->

        <section class="card">
            <header class="card-header">
					รายงานการดำเนินการ
            </header>
            <div class="card-block">
                <div id="combination-chart"></div>
            </div>
        </section>

        <div class="row">
            <div class="col-lg-4">
                <section class="card">
                    <header class="card-header">
                        Pie Chart
                    </header>
                    <div class="card-block">
                        <div id="pie-chart"></div>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="card">
                    <header class="card-header">
                        Donut Chart
                    </header>
                    <div class="card-block">
                        <div id="donut-chart"></div>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="card">
                    <header class="card-header">
                        Gauge Chart
                    </header>
                    <div class="card-block">
                        <div id="gauge-chart"></div>
                    </div>
                </section>
            </div>
        </div>
    </div><!--.container-fluid-->
</div><!--.page-content-->

<script src="js/lib/jquery/jquery.min.js"></script>
<script src="js/lib/tether/tether.min.js"></script>
<script src="js/lib/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>

<script src="js/lib/d3/d3.min.js"></script>
<script src="js/lib/charts-c3js/c3.min.js"></script>
<script src="js/lib/charts-c3js/c3js-init.js"></script>

<script src="js/app.js"></script>
</body>
</html>
