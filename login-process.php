<?php
include 'server.php'; //connect the connection page
 
if(empty($_SESSION)) // if the session not yet started
   session_start();
if(!isset($_POST['submit'])) { // if the form not yet submitted
   header("Location: login.php");
   exit;
}
//check if the username entered is in the database.
$test_query = "SELECT `email`, `password` FROM `admin` WHERE email = '".$_POST['username']."'";
$query_result = $conn->query($test_query);
//conditions
if($query_result->num_rows==0) {
//if username entered not yet exists
    echo "The username you entered is invalid.";
}else {
//if exists, then extract the password.
    while($row_query = $query_result->fetch_assoc()) {
        // check if password are 
        $pass = md5($_POST['password']);
        echo $pass;
        if($row_query['password']==$pass){
            $_SESSION['password'] = $_POST['password'];
            header("Location: dashboard.php");
            exit;
        } else{ // if not
            header('Location:rec_index.php?invalid=True');
        }
    }
}
?>