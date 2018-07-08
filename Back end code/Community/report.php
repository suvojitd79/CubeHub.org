<?php
error_reporting(0);
session_start();
ob_start();
//date_default_timezone_set("");

$connect = new PDO('mysql:host=localhost;dbname=my_comment','root','');

$error='';


$flag_report_id=$_POST['report_id']; 

$flag_content=$_POST['report_content'];

$flag_by=$_SESSION['username'];


if(!preg_match('/[<\>]/',$comment_content) && trim($flag_content)!='')
{



//$comment_content=wordwrap($comment_content,150,"<br>");

$query = "INSERT INTO flag_report(flag_report_id,flag_content,flag_by) VALUES(:flag_report_id,:flag_content,:flag_by)";

$statement = $connect->prepare($query);

$statement->execute(

		array(':flag_report_id'=> $flag_report_id,':flag_content'=>$flag_content,':flag_by'=>$flag_by)

 		        	);


$error='Thanks! report has been added successfully!';
}
else{

$error='Oops! failed to upload the report!';


}




$data = array('error'=>$error);

// right before outputting the JSON, clear the buffer.
ob_end_clean();


echo json_encode($data);


?>