<?php
require_once('connect.php');

require_once('function.php');
//$_SESSION['vanish']=0;

error_reporting(0);

session_start();
$_SESSION['x']=1;

if(isset($_SESSION['user_id']))
		//user_name will set in registration and user_id will set in log in
	{

		header('Location:*/');


	}


//date_default_timezone_set("");

	//start a session so we could see whether the user is logged in
	
	$_SESSION['message']='';
	$_SESSION['toggle'] = 0 ;		

	$error_msg=' ';
	$error = array();

	$_SESSION['failure']='';




function isgmail($mail)
{

return mb_substr(trim($mail),-10)=='@gmail.com';

}


function isyahoo($mail)
{

return mb_substr(trim($mail),-10)=='@yahoo.com';

}


function ishotmail($mail)
{

return mb_substr(trim($mail),-12)=='@hotmail.com';

}




if(isset($_POST['butt']))
{

 $error=array();

//two passwords are equal


 	if($_SESSION['captcha']!=$_POST['captcha'])
 		{


 			$error_msg= "oops! wrong captcha";

 		}	


 	else	
 	{	

	if($_POST['password1']==$_POST['password2'])
	{

if((!isgmail($_POST['email'])) && (!ishotmail($_POST['email'])) && (!isyahoo($_POST['email'])) && 1)
		{

			//fails in three cases

			$error_msg="Please check your mail address and try again with a Gmail,or a Hotmail or a yahoo account";


		}


			else{


				//assigned posted values to variables
				//unique value

				$username=ucfirst(strtolower(mysqli_real_escape_string($connection,$_POST['username'])));
				$email= strtolower(mysqli_real_escape_string($connection,$_POST['email']));
				$password=$_POST['password1'];
				$avatar_path_base = 'profile_pic/'.uniqid('',true);      //this for database      //without extention
				$avatar_path_actual = 'user_page/'.$avatar_path_base; //this for file



				// $RandomAccountNumber = uniqid();
    //        move_uploaded_file($ProfilePicTemp, "Content/" . $RandomAccountNumber);

				// print_r($_FILES);

                //check the extension of the image first
                // check the error and size of that image also 
				$is_ok=1;

                $file_name = $_FILES['avatar']['name'];

                //echo print_r($_FILES['avatar']);


                //$file_extension = pathinfo($file_name,PATHINFO_EXTENSION);

                $parts = explode('.', $file_name);


                $file_extension = strtolower(end($parts));



              	$image = array('png','jpg','jpeg','gif');


              	/*
						if(in_array($file_extension,$image))
							{
	
							}


              	*/

              	
              	for($i=0;$i<sizeof($image);$i++){

              		if($file_extension==$image[$i])
              					{
              						$is_ok=0;  //0 means no error
              						break;
              					}
              	      
                      }


                      if($is_ok==1)  //error
                      		{

                      			array_push($error,"Invalid file type. Only PNG, JPG, GIF and JPEG types are accepted");

                      		}




                      //error value of a file
                      
                  if($_FILES['avatar']['error'])    
                  {
                  	array_push($error,"File error!");
                  }
                

                		//size checker

                  if($_FILES['avatar']['size']>2048576 || $_FILES['avatar']['size']==0) 
                  	//max= 5MB
                  	{
                  	
                  	array_push($error,"File too large! File must be less than 2 megabyte");
                  				

                  	}


	                if(count($error)==0)
	                {

	                	



	         				//checking the values existing in the database

						$q ="SELECT username FROM users where (username = '$username')";
							                            

							$query = mysqli_query($connection,$q);


							if(mysqli_num_rows($query))
							//username already exist
							{

							$error_msg="The name has already been taken!";


							}
							else{

							//check for mail verification

							$q1="SELECT email FROM users where email = '$email'";
							$query1=mysqli_query($connection,$q1);

							if(mysqli_num_rows($query1))
							{
							// check whether mail is exist 

							$error_msg="This E-mail is already in use";

							}

							else{

								


								//REDIRECT AND SHOW THE EMAIL-POP UP FOR VERIFICATION

								//make a count session variable to keep the count so that after 5 attempt user will be redirected to registration page


							
				$_SESSION['count'] = 6;  //reset the value
				$_SESSION['email'] = $email;
				$_SESSION['username'] = $username;
				$_SESSION['image'] = $avatar_path_actual.".".$file_extension;
				$_SESSION['success']= 0 ; // no of mail sent 
				$_SESSION['failure']='empty'; //error msg
				$_SESSION['image_client_location'] = $_FILES['avatar']['tmp_name'];
				$_SESSION['password'] = $password;
				$_SESSION['image_2'] = 'chat/'.$avatar_path_base.".".$file_extension;
				$_SESSION['image_3'] = 'Community/'.$avatar_path_base.".".$file_extension;
						 

					  


							//phpmailer and generate the code

							function send_mail()
								{

									//PHPmailer

								
								}	



			send_mail(); //sending the mail

		

			if(copy($_SESSION['image_client_location'], $_SESSION['image']) && copy($_SESSION['image_client_location'], $_SESSION['image_2']) && copy($_SESSION['image_client_location'], $_SESSION['image_3']))

			{


			header('Location:*/emailconfirm.php'); //final OTP verification

			}
								

					


							}

							/*END*/

















							}




					    }	

			        else{

			  
						        	 foreach($error as $err) {
						        		

			             			        //echo "<center><p style='color:red'>".$err."</p></center>"."<br>";

			             			        $error_msg=$err;

						        	}


			        }





	   }


	}

	else{

    	//echo "<center><p style='color:red'>Passwords Don't Match</p></center>";

    	$error_msg="Passwords didn't match. Try again.";




      }






    }  




}		         


	

	
    






?>













	<!DOCTYPE html>
	<html>
	  <head>
	  			<title>CubeHub: Registration</title>
	  			<link rel="shortcut icon" type="image/jpg" href="rubik.ico">
			  	<meta charset="utf-8">
				 <meta name="viewport" content="width=device-width, initial-scale=1">
				<!-- Latest compiled and minified CSS -->
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

					<!-- jQuery library -->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

					<!-- Latest compiled JavaScript -->
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
					
					<link rel="stylesheet" type="text/css" href="style.css">
					<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
					<link href="https://fonts.googleapis.com/css?family=Eater" rel="stylesheet">



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

}

.navbar-nav.navbar-right .login:hover{

background-color:#3AA84B;

}


.navbar-nav.navbar-right .signup{

background-color:#ECC417;
border-radius: 20px;

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
			<li><a href="*/home/" class="item home hvr-underline-from-center">Home<span class="sr-only">(current)</span></a></li>
			<li><a href="*/Articles.php" class="item hvr-underline-from-center">Articles</a></li>
			<li><a href="*/Contact.php" class="item hvr-underline-from-center">Contact Us</a></li>
			<li>
				<a class="btn btn-default btn-outline signup hvr-round-corners" data-toggle="collapse" aria-expand="false" aria-controls="nav-collapse1" style="background-color: #1A5D63;cursor: pointer;">Sign up</a>
			</li>

			<li>
				<a class="btn btn-default btn-outline login hvr-round-corners" data-toggle="collapse" aria-expand="false" aria-controls="nav-collapse1" id="log_in">Login&emsp;</a>
			</li>






		</ul>

	</div>





	</div>

</nav>


</div>











	    <div class="container" style="position:relative;top: -40px;">
	        	
		    <form 	action="register.php" class="form-signin" method="POST" autocomplete="on" enctype="multipart/form-data">
		    <div class="alert alert-error" id="clear"><?=$_SESSION['message'] ?></div>
		    <div class="alert alert-error" id="clear"><?=$error_msg;?></div>	
		    <h2 class="form-signin-heading">SIGNUP NOW</h2>
		    <div class="input-group" style="width: 100%;">      
		     <input type="text" name="username" class="form-control" placeholder="Username" pattern=[a-zA-Z@0-9]{3,11} title="Must contain at least 3 characters and not more than 11 without any special character(s) " required autofocus style="border-radius: 0;">
		    </div>

		    <label for="inputemail" class="sr-only">EMAIL ADDRESS</label>
		    <input type="email" name="email" id="input-email" class="form-control" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="provide a valid mail address" required style="border-radius: 0;">
		    <label for="inputpassword" class="sr-only">PASSWORD</label>   
		    <input type="password" name="password1" id="inputpassword" class="form-control" placeholder="password" pattern="[A-Za-z@0-9]{5,30}" title="Must contain at least characters without any special character except @" required style="border-radius: 0;">
		    <input type="password" name="password2" id="inputpassword" class="form-control" placeholder="confirm password" pattern="[A-Za-z0-9]{5,30}" title="Must contain at least characters without any special character except @" required style="border-radius: 0;">	
		    <div class="avatar">
		    	<label>Choose your profile picture:</label>
		    	<input type="file" name="avatar" accept="image/*" required="true" style="border:0;margin:0;border-radius: 0;">
		    </div>


		    <div class="captcha" style="margin-bottom: 10px;">
		    	<label style="color:red;text-transform: uppercase;font-family: 'Eater', cursive;
						font-size: 1.1em;">please fill the captcha</label><br>
		    	<label style="width: 220px;height: 60px;background-color:#CEBFE6;">
		    		<?php

		    		$source_word='ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
		    		$random_word= substr(str_shuffle($source_word),0,4);
		    		$_SESSION['captcha']=$random_word;
		    	echo "<div style='font-size:3em;color:#004C97;text-align:center;position:relative;top:-3px;letter-spacing:10px;'>".$_SESSION['captcha']."</div>";

		    		?>



		    	</label>

		    	<input type="text" name="captcha" required="true" autocomplete="off" class="form-control" placeholder="write here" style="border-radius: 0;">
		    </div>



		    <button class="btn btn-lg btn-primary btn-block" type="submit" name="butt">Register</button>
		    <a class="btn btn-lg btn-primary btn-block" href="login.php">LOGIN</a>

	    </form>
		</div>





<script type="text/javascript">
	
localStorage.setItem("time",15*60);

function hide() {
    document.getElementById("clear").style.display = "none";
};
setTimeout(hide, 4000);




	$('#log_in').click(function(){
   window.location.href='*/login.php';
})







</script>





	</body>
	</html>