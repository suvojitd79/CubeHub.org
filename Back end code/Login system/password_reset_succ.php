<?php

session_start();
error_reporting(0);

if(isset($_COOKIE['con_time']))
{

$_SESSION['x']=1;

}
else{

header('*/login.php');


}



?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Successful password reset</title>
	 <link rel="shortcut icon" type="image/jpg" href="rubik.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet">
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js" integrity="sha384-VspmFJ2uqRrKr3en+IG0cIq1Cl/v/PHneDw6SQZYgrcr8ZZmZoQ3zhuGfMnSR/F2" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Song+Myung" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">


<style type="text/css">

	body{

background-color: #eee;

	}


</style>






</head>
<body>

	<div class="container-fluid" style="position: absolute;top:80px;text-align: center;">
		<div class="row  no-gutters">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" width="70px" height="70px">
						<g>
							<g id="check_x5F_alt">
								<path d="M16,0C7.164,0,0,7.164,0,16s7.164,16,16,16s16-7.164,16-16S24.836,0,16,0z M13.52,23.383    L6.158,16.02l2.828-2.828l4.533,4.535l9.617-9.617l2.828,2.828L13.52,23.383z" fill="#91DC5A"/>
							</g>
						</g>
						</svg>

						<p style="font-family: 'Song Myung', serif;font-size:1.3em;
							">Your password has been reset successfully!</p>

						<small style="color:green;font-family: 'Song Myung', serif;
				">You will be redirected to the login page in <span id="redirect" style="font-family: 'Indie Flower', cursive;font-size: 2em;padding:8px;"></span> second(s)</small>

			</div>
		</div>		
	</div>

	<script type="text/javascript">
		
		//show the time


		var i=0;

		function change_time(time)
		{

		var item=document.getElementById("redirect");	
		if(time==0)
		{
		window.location.replace("*/login.php");
		localStorage.clear();	
		}

		if(time<4)
		{
			item.style.color='red';
		}

		localStorage.setItem('pass_time',time);

		item.innerHTML=time;

		i++;


		}


var x = localStorage.getItem('pass_time'); 

setInterval(function(){change_time(x-i);},1000);



	</script>

</body>
</html>