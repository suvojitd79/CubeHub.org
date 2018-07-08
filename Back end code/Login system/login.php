	<?php
	require_once('connect.php'); //database connection
	require_once('function.php');
	//date_default_timezone_set('');
	error_reporting(0);
	//start a session so we could see whether the user is logged in
	session_start();

	$_SESSION['vanish']=0;
	$_SESSION['x']=1;
	$error_msg= '';

	//ob_start();




	if(isset($_SESSION['user_id']))
		//user_name will set in registration and user_id will set in log in
	{

		header('Location:user_page/');


	}


	//if the user provide all the information  isset()

	if(!empty($_POST['email']) && !empty($_POST['password']))
	{

	//assigned posted values to variables
	//unique value
	//$username=mysqli_real_escape_string($connection,$_POST['username']);
	$email=mysqli_real_escape_string($connection,$_POST['email']);
	$password=mysqli_real_escape_string($connection,$_POST['password']);

	//checking the email value existing in the database



	$q="SELECT * FROM users where email='$email'";

	$query=mysqli_query($connection,$q);

	//$row=mysqli_num_rows($query);

	if(!mysqli_num_rows($query)){
	//user with that email does not exist
	 

	$error_msg= "User with this email does not exist!";                   

	}else{

	//if the email exist then check for password


	$row = mysqli_fetch_assoc($query); 

	if(!password_verify($password,$row['password']))	
	{
	$error_msg='password is not valid!';


	}

	else{
		//set the  cookies if the  


		$_SESSION['username']=$row['username'];
		$_SESSION['img']=$row['avatar'];

	if(!empty($_POST['remember']))
	{

		setcookie("member_login",$_POST['email'],time()+2595600);
		setcookie("member_password",$_POST['password'],time()+2595600);
	}

	else{

		if(isset($_COOKIE['member_login']))
		{
			//unset the value
			setcookie("member_login","");


		}

		if(isset($_COOKIE['member_password']))
		{
			//unset the value
			setcookie("member_password","");


		}







	}















	

	//update the time so that we could find all the active online users 

   // mysqli_query($connection,"UPDATE ** SET online='$time' where id=".$_SESSION['uid']." ");

	//redirected them to the main page

	//make a entry in the login table and redirect the user to the welcome page

	//making the connection

	//if the user has already logged in then simply update it otherwise just make a entry

	$connect = new PDO('mysql:host=localhost;dbname=my_account','root','');


		
		//get the id
		$query = "SELECT * FROM users where email=:email";
		$statement = $connect->prepare($query);
		$statement->execute(array('email'=>$_POST['email']));
		$result = $statement->fetchAll();
		foreach($result as $row)
			{
				$id = $row['id'];
			}

		

			
			$query='SELECT * FROM login_details where user_id=:user_id';
			$statement = $connect->prepare($query);
			$statement->execute(array('user_id'=>$id));
			$row_number = $statement->rowCount();

			$result = $statement->fetch();










				//update the last activity
			if($row_number==1)
			{

				$query='UPDATE login_details SET last_activity=:last_activity where user_id=:user_id';
				$statement = $connect->prepare($query);
				$statement->execute(array('last_activity'=>date('Y-m-d H:i:s',strtotime('now')),'user_id'=>$id));



					//start a new session

				$login_id=$id;

				if(!empty($login_id))
				{	
					$_SESSION['user_id'] = $id; //show the details of the user
					//$_SESSION['type']=$row['user_type'];
					$_SESSION['login_id'] = $result['login_details_id'];
					header('Location:user_page/');
				}
				












			}


				else //create a new entry

					{$query='INSERT INTO login_details(user_id,last_activity) VALUES(:user_id,:last_activity)';
				$statement = $connect->prepare($query);
				$statement->execute(array('user_id'=>$row['id'],'last_activity'=>date('Y-m-d H:i:s',strtotime('now'))));


					//start a new session

				$login_id=$connect->lastInsertId();

				if(!empty($login_id))
				{	
					$_SESSION['user_id'] = $id; 			//show the details of the user
															//$_SESSION['type']=$row['user_type'];
					$_SESSION['login_id'] = $login_id;
					header('Location:user_page/');
				}
				







					}



				

	






















	}


	}


	}





	?>


	<!DOCTYPE html>
	<html>
	  <head>	

	  		<title>CubeHub: Log in</title>
	  		<link rel="shortcut icon" type="image/jpg" href="rubik.ico">
		  	<meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





			<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">




			<link rel="stylesheet" type="text/css" href="style.css">

			<style type="text/css">
					*{
				padding: 0;
				margin: 0;
			}


			.avatar label{
				background-color: white;

			}

			.avatar{
              margin-bottom: 10px;

			}
			::-webkit-scrollbar{
				width: 0;

				}



.navbar-inverse{width: 100vw;
	position: absolute;top: 0;left: 0;border-radius: 0;}

.container{width: 100%;}

.navbar-brand{ position: relative; z-index: 2;
	font-family: 'Anton', sans-serif;font-size: 2em;
	
}


.navbar-inverse .navbar-brand{

color:#fff;


}


.navbar-nav.navbar-right .item{

font-family: 'Arvo', serif;
transition: 1s ease;
color:#fff;
font-size: 1.1em;
}



.navbar-nav.navbar-right .btn { position: relative; z-index: 2; 
	padding: 4px 18px; margin: 10px auto;font-family: 'Arvo', serif;
	transition: 1s ease;
 }


/* Round Corners */
.hvr-round-corners {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: border-radius;
  transition-property: border-radius;
}
.hvr-round-corners:hover, .hvr-round-corners:focus, .hvr-round-corners:active {
  border-radius: 1em;
  background-color: #fff;
}



.navbar-nav.navbar-right .btn{

color:#fff;
font-size: 1.3em;
border:none;
}

.navbar-nav.navbar-right .login{

background-color:#3AA84B;
border-radius: 20px;

}

.navbar-nav.navbar-right .login:hover{

background-color:#3AA84B;

}


.navbar-nav.navbar-right .signup{

background-color:#ECC417;


}

.navbar-nav.navbar-right .signup:hover{

background-color:#ECC417;

}


.navbar .navbar-collapse { position: relative; }
.navbar .navbar-collapse .navbar-right > li:last-child
{padding-left: 0px; }

.navbar .navbar-collapse .navbar-right  li{

margin-left: 20px;

}





.btn.btn-circle { border-radius: 50px; }
.btn.btn-outline { background-color: transparent; }





@media (max-width: 700px) {
    .navbar-header {
        float: none;
    }
    .navbar-toggle {
        display:block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-collapse.collapse {
        /*display: block;!important;*/
        position: relative;
    }
    .navbar-nav {
        float: none!important;
        margin: 7.5px -1px;
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
}



::-webkit-scrollbar{

width: 0px;
display: none;

}




/* Float Shadow */
.hvr-float-shadow {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0px 0 50px rgba(255, 255, 255, 1);
  position: relative;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
}
.hvr-float-shadow:before {
  pointer-events: none;
  position: absolute;
  z-index: -1;
  content: '';
  top: 100%;
  left: 5%;
  height: 10px;
  width: 90%;
  opacity: 0;
  background: -webkit-radial-gradient(center, ellipse, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
  background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
  /* W3C */
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform, opacity;
  transition-property: transform, opacity;
}
.hvr-float-shadow:hover, .hvr-float-shadow:focus, .hvr-float-shadow:active {
  -webkit-transform: translateY(-5px);
  transform: translateY(-5px);
  cursor: pointer;
  /* move the element up by 5px */
}
.hvr-float-shadow:hover:before, .hvr-float-shadow:focus:before, .hvr-float-shadow:active:before {
  opacity: 1;
  -webkit-transform: translateY(5px);
  transform: translateY(5px);
  /* move the element down by 5px (it will stay in place because it's attached to the element that also moves up 5px) */
}



/* Underline From Center */
.hvr-underline-from-center {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  overflow: hidden;
}
.hvr-underline-from-center:before {
  content: "";
  position: absolute;
  z-index: -1;
  left: 51%;
  right: 51%;
  bottom: 0;
  background: #fff;
  height: 4px;
  -webkit-transition-property: left, right;
  transition-property: left, right;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-underline-from-center:hover:before, .hvr-underline-from-center:focus:before, .hvr-underline-from-center:active:before {
  left: 0;
  right: 0;
}

			</style>

		    <title>user login</title>
	  </head>
	<body>





<!-- navigation menu -->

<div class="container-fluid" style="position: fixed;z-index: 20000;top:0;">

	<nav class="navbar navbar-inverse">


		
	 <div class="container">


	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a  class="navbar-brand hvr-float-shadow">CUBEHUB</a>	
	</div>





	<div class="collapse navbar-collapse" id="navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="*/" class="item home hvr-underline-from-center">Home<span class="sr-only">(current)</span></a></li>
			<li><a href="*/Articles.php" class="item hvr-underline-from-center">Articles</a></li>
			<li><a href="*/Contact.php" class="item hvr-underline-from-center">Contact Us</a></li>
			<li>
				<a id="sign_up" class="btn btn-default btn-outline signup hvr-round-corners" data-toggle="collapse" aria-expand="false" aria-controls="nav-collapse1" >Sign up</a>
			</li>

			<li>
				<a class="btn btn-default btn-outline login hvr-round-corners" data-toggle="collapse" aria-expand="false" aria-controls="nav-collapse1" style="background-color: #1A5D63;cursor: pointer;">Login&emsp;</a>
			</li>






		</ul>

</div>





	</div>

</nav>


</div>




	    <div class="container">
	        

		    <form 	action="login.php" class="form-signin" method="POST">
		    <div class="alert alert-error" id="clear"><?=$error_msg;?></div>	
		    <h2 class="form-signin-heading">LOG IN</h2>
		    
		    <label for="inputemail" class="sr-only">EMAIL ADDRESS</label>
		    <input type="email" name="email" id="input-email" class="form-control" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="provide a valid mail address"  value="<?php if(isset($_COOKIE['member_login'])){echo $_COOKIE['member_login'];}?>" required autofocus>
		    <label for="inputpassword" class="sr-only">PASSWORD</label>   
		    <input type="password" name="password" id="inputpassword" class="form-control" placeholder="password" pattern="[A-Za-z@0-9]{5,30}" title="Must contain at least 5 or more characters" required value="<?php if(isset($_COOKIE['member_password'])){echo $_COOKIE['member_password'];}  ?>">

		    <label class="checkbox-inline" style="font-family: 'Fjalla One', sans-serif;color:#FF2D00;
			"><input type="checkbox" name="remember" style="margin-right:5px;" <?php if(isset($_COOKIE['member_login'])){echo "checked";};?> >Remember me</label>
																	



		    <button class="btn btn-lg btn-primary btn-block" type="submit">GO</button>
		    <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
            

            <div class="forgot">
            <a  class="forg" href="forgot.php">Forgot your password?</a>
	        </div>
	    </form>
		</div>



<script type="text/javascript">
	

function hide()
{

document.getElementById('clear').style.display='none';

}

setTimeout(hide,4000);


	$('#sign_up').click(function(){
   window.location.href='*/register.php';
})


// 	$('#log_in').click(function(){
//    window.location.href='http://localhost/home/login.php';
// })




</script>









	</body>
	</html>