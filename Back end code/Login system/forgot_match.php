<?php

session_start();
error_reporting(0);
$error_msg='';




if((isset($_COOKIE['con_time']) || isset($_GET['r_user_id'])) && $_SESSION['x']==0)
{

echo "<script type=text/javascript>localStorage.setItem('pass_time',10);</script>";




if(isset($_GET['r_user_id'])){
$_SESSION['con_code']=$_GET['r_user_id'];
}

if(isset($_POST['reset_confirmed_password']))

{
if((($_SESSION['r_user_id']==$_SESSION['con_code']) && (time()<=$_SESSION['r_user_t']+600))) 
 {

if(1)
{

	if($_SESSION['captcha']!=$_POST['captcha'])
 		{


 			$error_msg= 'oops! wrong captcha';

 		}

else{


if($_POST['password1']==$_POST['password2'])
{
	//CHECK and update the database 
	//redirect to login page


$connect = new PDO('mysql:host=localhost;dbname=my_account','root','');


$query = "UPDATE users SET password=:password WHERE username='{$_SESSION['user_name']}'";

$statement = $connect->prepare($query);

$x1=$statement->execute(array('password'=>password_hash($_POST['password1'],PASSWORD_DEFAULT)));

if($x1)
{
	//successful

	//$_SESSION['x']=1;
	header('Location:*/password_reset_succ.php');


}

else{

$error_msg= 'Oops!Password reset has been failed.try again later';
//$_SESSION['x']=1;

}




}
else{

	$error_msg = "Passwords Don't Match";


}



}



}




}



else{

	//$_SESSION['x']=1;

header('Location:*/login.php');


}



}
}

else{

//$_SESSION['x']=1;
header('Location:*/register.php');



}





?>




<!DOCTYPE html>
	<html>
	  <head>
	  		<title>CubeHub: Password Reset</title>
	  		<link rel="shortcut icon" type="image/jpg" href="rubik.ico">
		  	<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet">
				
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js" integrity="sha384-VspmFJ2uqRrKr3en+IG0cIq1Cl/v/PHneDw6SQZYgrcr8ZZmZoQ3zhuGfMnSR/F2" crossorigin="anonymous"></script>

				<link rel="stylesheet" type="text/css" href="style.css">
			

		    <title>Password reset page</title>
	  </head>
	<body>

	    <div class="container">
	        	
		    <form 	action="forgot_match.php" class="form-signin" method="POST">
		    <div class="alert alert-error" id="clear"><?=$error_msg;?></div>	
		    <h2 class="form-signin-heading">PASSWORD RESET PAGE</h2>
		    
		    <input type="password" name="password1" id="inputpassword" class="form-control" placeholder="Write your password" pattern="[A-Za-z@0-9]{5,30}" title="Must contain at least 5 characters without any special character except @" required autofocus>
		    <input type="password" name="password2" id="inputpassword" class="form-control" placeholder="confirm password" pattern="[A-Za-z0-9]{5,30}" title="Must contain at least 5 characters without any special character except @" required>	
		    
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


		    
      
		    <button name="reset_confirmed_password" class="btn btn-lg btn-primary btn-block" type="submit" style="font-size: .7em;">RESET PASSWORD</button>

       	    </form>
		</div>

<script type="text/javascript">
	function hide() {
    document.getElementById("clear").style.display = "none";
};
setTimeout(hide, 4000);


</script>

</body>
</html>


