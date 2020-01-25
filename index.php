<?php
	require 'server.php';

	if(isset($_POST['submit_student'])){ // Fetching variables of the form which travels in URL
		echo 1;
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$category = $_POST['category'];
		$dept = $_POST['dept'];
		$enroll = $_POST['enroll'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$ctype = $_POST['ctype'];
		$complaint = $_POST['complaint'];
		echo 2;
		$stmt = $conn->prepare("INSERT INTO `studentdb` (`fname`, `lname`, `gender`, `category`, `dept`, `enroll`, `email`, `mobile`, `ctype`, `complaint`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssssss", $fname, $lname, $gender, $category, $dept, $enroll, $email, $mobile, $ctype, $complaint);
		$stmt->execute();
		echo 3;
		
		//Insert Query of SQL

		//$query = mysql_query("insert into students(student_name, student_email, student_contact, student_address) values ('$name', '$email', '$contact', '$address')");
	}  
	
	if(isset($_POST['submit_faculty'])){ // Fetching variables of the form which travels in URL

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$category = $_POST['category'];
		$dept = $_POST['dept'];
		$empid = $_POST['empid'];
		$designation = $_POST['designation'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$ctype = $_POST['ctype'];
		$complaint = $_POST['complaint'];
	
		$stmt = $conn->prepare("INSERT INTO `facultydb` (`fname`, `lname`, `gender`, `category`, `dept`, `empid`, `designation`, `email`, `mobile`, `ctype`, `complaint`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssss", $fname, $lname, $gender, $category, $dept, $empid, $designation, $email, $mobile, $ctype, $complaint);
		$stmt->execute();
		//Insert Query of SQL
	
		//$query = mysql_query("insert into students(student_name, student_email, student_contact, student_address) values ('$name', '$email', '$contact', '$address')");
	
	} 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Complaint Management System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel = "stylesheet" href ="Static/CSS/style1.css">
	<script src="https://kit.fontawesome.com/38635abe8d.js"></script>

</head>
<body>
<a class="footer-admin" href="login.php">&nbsp;Admin&nbsp;</a>

	<div class = "container gradient-box">
	<div>
		<img class="padded" src="Static/Images/iiitn.jpg" alt="something went wrong" width="100%"/>
		
	
		<h1 class="alignment">Complaint Management System</h1>
		<h3 class="aa" >DBMS Mini Project Part-2</h3>
	</div>
	<div>
		<table>
			<tr>
				<th><h4><a class="btnwrap" href="student.php">&nbsp; Student &nbsp;</a></h4></th>
				<th><h4><a class="btnwrap" href="faculty.php">&nbsp; Faculty &nbsp;</a></h4></th>
			</tr>
		</table>
		
		
	</div>
	</div>
	<footer class="fixed-bottom footer" id="footer">
			<div class="row">
				<div class="container col-sm-7 footer-copyright">
				© Mehul's Theme - All rights reserved
					<div class="credits">	
						Designed by <a href="https://www.github.com/Mehul2205">Mehul Patni</a>
						
					</div>
				</div>
				<div class="col-sm-5 footer-social">
					<div class="pull-right hidden-xs hidden-sm ">
						<a href="https://www.facebook.com/mehul.patni.370"><i class="fab fa-facebook"></i></a>
						<a href="https://www.instagram.com/mehulpatni2205/"><i class="fab fa-instagram"></i></a>
						<a href="https://github.com/Mehul2205"><i class="fab fa-github"></i></a>
						<a href="http://www.linkedin.com/in/mehul-patni"><i class="fab fa-linkedin"></i></a>
					</div>
					
				</div>
				
			</div>
		<div class="pull-right">
			
		</div>
	</footer>
</body>
</html>