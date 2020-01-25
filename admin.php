<?php
require('server.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en" class=" "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="scroll-viewwport" content="width=device-width, initial-scale=1">

	<title>Personal Details</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

	<link href="css/select2.min.css" rel="stylesheet">

	<link href="css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md" cz-shortcut-listen="true">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title"><span>Application Portal</span></a>
                    </div>

                    <!-- /menu profile quick info -->

                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>Application Details</h3>
                            <ul class="nav side-menu">

                                <li><a id="menu_1"><i class="fa fa-user"></i> Personal Details <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">

                                        <li id="Application Details__Personal Details__Personal Details">
                                            <a href="detail.php"></i> Personal Details</a>
                                        </li>


                                        <li id="Application Details__Personal Details__Contact">
                                            <a href="contact.php"></i> Contact</a>
                                        </li>


                                        <li id="Application Details__Personal Details__Permanent Address">
                                            <a href="permanent_add.php"></i> Permanent Address</a>
                                        </li>


                                        <li id="Application Details__Personal Details__Correspondence Address">
                                            <a href="corr_add.php"></i> Correspondence Address</a>
                                        </li>

                                    </ul>
                                </li>
                                </ul>
                            </div>
                        </div>

						<!-- /sidebar menu -->

					</div>
				</div>

				<!-- top navigation -->

				<div class="top_nav">
					<div class="nav_menu">
						<nav>
							<div class="nav toggle">
								<a id="menu_toggle"><i class="fa fa-bars"></i></a>
							</div>

							<ul class="nav navbar-nav navbar-right">
								<li class="">
									<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<?php echo $firstname." ".$lastname?>
										<span class=" fa fa-angle-down"></span>
									</a>
									<ul class="dropdown-menu dropdown-usermenu pull-right">
									</ul>
								</li>


							</ul>
						</nav>
					</div>
				</div>

				<!-- /top navigation -->

				<!-- page content -->
				<div class="right_col" role="main" style="min-height: 1087px;">
					<div class="">
						<div class="page-title">
							<div class="title_left">
								<h3>Personal Details</h3>
							</div>
						</div>


						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
									<div class="x_title">
										<h2>Please provide your latest information for the post of <?php  echo $post."(".$department.")" ?></h2>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">

										<div class="jumbotron">
											
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /page content -->
			</div>
		</div>

		<!-- jQuery -->

		<script src="js/jquery.min.js.download"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js.download"></script>
		<!-- FastClick -->
		<script src="js/fastclick.js.download"></script>
		<!-- NProgress -->
		<script src="js/jquery.easypiechart.min.js.download"></script>
		<script src="js/bootstrap-progressbar.min.js.download"></script>

		<script src="js/moment.min.js.download"></script>
		<script src="js/daterangepicker.js.download"></script>
		<script src="js/daterangepicker.js.download"></script>
		<script src="js/select2.full.min.js.download"></script>

		<!-- Custom Theme Scripts -->
		<script src="js/custom.min.js.download"></script>
	</body>
</html>