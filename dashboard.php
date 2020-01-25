<?php
include 'server.php'; //connect the connection page

if(empty($_SESSION)) // if the session not yet started
   session_start();

if(!isset($_SESSION['password'])) { //if not yet logged in
   header("Location: login.php");// send to login page
   exit;
}

$test_query = "SELECT COUNT(*) FROM studentdb";
$query_result = $conn->query($test_query);
if($query_result->num_rows>0) {

    $row_query = $query_result->fetch_assoc();
} else{
    $row_query = 0;
}

$test_query1 = "SELECT COUNT(*) FROM facultydb";
$query_result1 = $conn->query($test_query1);
if($query_result1->num_rows>0) {

    $row_query1 = $query_result1->fetch_assoc();
} else{
    $row_query1 = 0;
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
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
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
                    <div class="col-sm-6 stats">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        &emsp;<div class="counting" data-count="<?php echo htmlspecialchars($row_query['COUNT(*)']);?>">00</div>
                        <h5>Student Complaint</h5>
                    </div>
                    <div class="col-sm-6 stats">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        &emsp;<div class="counting" data-count="<?php echo htmlspecialchars($row_query1['COUNT(*)']);?>">00</div>
                        <h5>Faculty Complaint</h5>
                    </div>
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
    <script src="Static/JS/jscript1.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
                $('.counting').each(function() {
                    var $this = $(this), $countTo = $this.attr('data-count');
                    var $countNum = $this.text()
                    var $countNum1 = $countTo
                    console.log($countNum, $countNum1)
                    $({ countNum: $this.text()}).animate({
                        countNum: $countTo
                    },{
                        duration: 1000,
                        easing:'linear',
                        step: function() {
                        $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        //alert('finished');
                        }
                    }); 
                });
        </script>

</html>
