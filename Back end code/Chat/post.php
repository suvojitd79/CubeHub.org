<?php

session_start();
error_reporting(0);


if(isset($_SESSION['user_id']) && isset($_SESSION['login_id']))
	{
		$text = $_POST['text'];
		//echo $text;
		//store the data in a file

		$file = fopen('log.html', 'a');
		
		fwrite($file,"<div class='box'><img src='".$_SESSION['a_']."' class='img-round'><div class='magic'>".stripslashes(htmlspecialchars($text))."</div></div><br>");
		
		fclose($file);
	}


?>

