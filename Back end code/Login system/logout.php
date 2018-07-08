<?php

// if the user is logged in then we will redirect him to the main page where log out button will be there
error_reporting(0);
session_start();

unset($_SESSION['user_id']);
unset($_SESSION['login_id']);
$_SESSION=array();
session_unset(); //unset the variables
session_destroy(); //end the session
//header('Location:http://localhost/home/login.php');
header('Location:*/login.php');



?>

