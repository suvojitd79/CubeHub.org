<?php

session_start();
error_reporting(0);

$connect = new PDO('mysql:host=localhost;dbname=my_account','root','');


//date_default_timezone_set('');


if(isset($_POST["action"]))
{

	if($_POST["action"]=='update_time')
	{

		$query = 'UPDATE login_details SET last_activity=:last_activity WHERE login_details_id = :login_details_id';
		$statement = $connect->prepare($query);
		$statement->execute(array('last_activity'=>date('Y-m-d H:i:s'),'login_details_id'=>$_SESSION['login_id']));	

	}



}


?>
