<?php

error_reporting(0);
session_start();
ob_start();
date_default_timezone_set("");

$connect = new PDO('mysql:host=localhost;dbname=my_comment','root','');


$error='';

$comment_name=$_SESSION['u_'];
$comment_image=$_SESSION['a_'];

$comment_content=$_POST['comment_content'];


if(!preg_match('/[<\>]/',$comment_content) && trim($comment_content)!='')
{


//$comment_content=wordwrap($comment_content,150,"<br>");

$query = "INSERT INTO data(parent_comment_id,comments,author,image) VALUES(:parent_comment_id,:comments,:author,:image)";

$statement = $connect->prepare($query);

$statement->execute(

		array(':parent_comment_id'=> $_POST['comment_id'],':comments'=>$comment_content,':author'=>$comment_name,':image'=>$comment_image)

 		        	);

//$id = $connect->lastInsertId();



$error='Thanks! Comment has been added successfully!';
}
else{

$error='Oops! failed to upload!';


}




$data = array('error'=>$error);

// right before outputting the JSON, clear the buffer.

ob_end_clean();


echo json_encode($data);


?>