<?php

require_once('connect.php');
session_start();
error_reporting(0);
$_SESSION['x']=1;
$error_msg=''; 
if(isset($_POST['reset_password']))
{
if($_SESSION['captcha']!=$_POST['captcha'])
 		{


 			$error_msg="oops! wrong captcha";

 		}

 else{

 	//check whether the email exist or not

$email=mysqli_real_escape_string($connection,$_POST['email']);

$_SESSION['user_mail'] = $email;

$connect = new PDO('mysql:host=localhost;dbname=my_account','root','');


$query = "SELECT * FROM users where email=:email";

$statement = $connect->prepare($query);

$statement->execute(array('email'=>$email));

$result = $statement->fetch();



if($result){

$_SESSION['user_name']= $result['username'];

}






if($result)

{

//send an email

function send_mail()
{

//PHPmailer

}	



send_mail();



}

else{

echo "<center>"."<p style='color:red;'>"."User with this email does not exist!"."</p>"."</center>";



}







 }			


}

?>





<!DOCTYPE html>
	<html>
	  <head>
	  		<title>CubeHub: Password Recovery</title>
	  		<link rel="shortcut icon" type="image/jpg" href="rubik.ico">
		  	<meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet">
			
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js" integrity="sha384-VspmFJ2uqRrKr3en+IG0cIq1Cl/v/PHneDw6SQZYgrcr8ZZmZoQ3zhuGfMnSR/F2" crossorigin="anonymous"></script>

			<link rel="stylesheet" type="text/css" href="style.css">

		   
	  </head>
	<body>

	    <div class="container">
	        	
		    <form 	action="forgot.php" class="form-signin" method="POST">
		    <div class="alert alert-error"><?=$error_msg;?></div>		
		    <h2 class="form-signin-heading">Password Recovery</h2>
		    
		    <input type="email" name="email" id="input-email" class="form-control" placeholder="Email Address..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter your mail address" required autofocus>
		    <br>

		    <div class="captcha" style="margin-bottom: 10px;">
		    	<label style="color:red;text-transform: uppercase;font-family: 'Eater', cursive;
						font-size: 1em;">please fill the captcha</label><br>
		    	<label style="width: 220px;height: 60px;background-color:#CEBFE6;">
		    		<?php

		    		$source_word='ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
		    		$random_word= substr(str_shuffle($source_word),0,4);
		    		$_SESSION['captcha']=$random_word;
		    	echo "<div style='font-size:3em;color:#004C97;text-align:center;position:relative;top:-13px;letter-spacing:10px;'>".$_SESSION['captcha']."</div>";

		    		?>



		    	</label>

		    	<input type="text" name="captcha" required="true" autocomplete="off" class="form-control" placeholder="write here">
		    </div>


		    
      
		    <button name="reset_password" class="btn btn-lg btn-primary btn-block" type="submit" style="font-size: .7em;">SEND ME THE PASSWORD RESET LINK</button>

		    <br>
		    <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
            <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>

       	    </form>
		</div>

<script type="text/javascript">
	


	

setTimeout(function(){if(<?php echo $_SESSION['vanish']?>==1)
	{

		window.location.replace("*/home/");	

	}},10000);





</script>



	</body>
	</html>