<?php
include 'server.php'; //connect the connection page

if(empty($_SESSION)) // if the session not yet started
   session_start();

if(!isset($_SESSION['password'])) { //if not yet logged in
   header("Location: login.php");// send to login page
   exit;
}
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="Static/Images/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="Static/CSS/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="Static/CSS/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="Static/CSS/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="Static/CSS/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="Static/CSS/pe-icon-7-stroke.css" rel="stylesheet" />
    <style>
    .stats {
        text-align: center;
        font-size: 35px;
        font-weight: 700;
        font-family: 'Montserrat', sans-serif;
    }

    .stats .fa {
        color: #008080;
        font-size: 60px;
    }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="Static/Images/Static/Images/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    ADMIN
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="scomplaint.php">
                        <i class="pe-7s-user"></i>
                        <p>Sudent Complaints</p>
                    </a>
                </li>
                <li>
                    <a href="fcomplaint.php">
                        <i class="pe-7s-note2"></i>
                        <p>Faculty Complaints</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <table class="table">
                        <tr>
                            <th style="min-width:140px">Name</th>
                            <th style="min-width:100px">Department</th>
                            <th style="min-width:140px">Enrollment Number</th>
                            <th style="min-width:140px">Complaint Type</th>
                            <th>Complaint Description</th>
                        </tr>  
                        <?php 
                            $query = "SELECT fname, lname, dept, enroll, ctype, complaint FROM studentdb";
                            $result = $conn->query($query);
                            if($result->num_rows>0){
                                while ($row = $result->fetch_assoc()) {
                                    $field1name = $row["fname"]." ".$row["lname"];
                                    $field2name = $row["dept"];
                                    $field3name = $row["enroll"];
                                    $field4name = $row["ctype"];
                                    $field5name = $row["complaint"];  
                                    ?>

                                    <tr> 
                                        <td><?php echo $field1name;?></td> 
                                        <td><?php echo $field2name;?></td> 
                                        <td><?php echo $field3name;?></td> 
                                        <td><?php echo $field4name;?></td> 
                                        <td><?php echo $field5name;?></td> 
                                    </tr>

                                    <?php
                                }
                                $result->free();
                            } 
                        ?>  
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
