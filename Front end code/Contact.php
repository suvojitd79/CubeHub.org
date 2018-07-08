<?php


session_start();
error_reporting(0);


function validate($data)
{

$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);

return $data;

}


if(isset($_SESSION['captcha_mail']) && isset($_POST['captcha_mail']))


{


if(isset($_POST['submit']) && filter_var($_POST['field2'], FILTER_VALIDATE_EMAIL) && $_SESSION['captcha_mail']==$_POST['captcha_mail'])
{

$GLOBALS['name'] = validate($_POST['field1']);

$GLOBALS['subject'] = validate($_POST['field6']);

$GLOBALS['email'] = validate($_POST['field2']);


$GLOBALS['designation'] = $_POST['field3'];

$GLOBALS['find'] = $_POST['field4'];

$GLOBALS['message'] = validate($_POST['field5']);



send_mail();

}



if (isset($GLOBALS['email'])) {
      if (filter_var($GLOBALS['email'], FILTER_VALIDATE_EMAIL)) {

 echo "<script type='text/javascript'>alert('Invalid credential!');</script>";

}

}


}







function send_mail()
{


//phpmailer class 



} 













?>







<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>CubeHub: Contact Us</title>
  <link rel="shortcut icon" type="image/jpg" href="rubik.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Krona+One|Shadows+Into+Light" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Song+Myung" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courgette|Russo+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bangers|Russo+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
<link href=hover.css" rel="stylesheet">		
<style type="text/css">



*{
  margin: 0;
  padding: 0;

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

/*.navbar-nav.navbar-right .item:hover{

background-color: #F0F0F0;
color:#000;
font-size: 1.5em;


}






.navbar-nav.navbar-right .btn:hover{

background-color: #F0F0F0;
color:#000;
font-size: 1.5em;

}*/


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












.form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;  
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .required{
    color:red;
}

















  /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {

   




} 

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {


    .form-style-1{
    width: 500px;
    position: absolute;
    top: 10%;
    left: 15%;

}} 

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {...} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {

.form-style-1{

    width: 700px;
    position: absolute;
    top: 10%;
    left: 15%;

}


} 


/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {

.form-style-1{

    width: 800px;
    position: absolute;
    top: 10%;
    left: 15%;

}



}




body {
    width: 100wh;
    height: 90vh;
    color: #fff;
    background: linear-gradient(-45deg, #FF225A, #6713E8, #22A6FF, #13E864,#D9FF24);
    background-size: 400% 400%;
    -webkit-animation: Gradient 15s ease infinite;
    -moz-animation: Gradient 15s ease infinite;
    animation: Gradient 15s ease infinite;
}

@-webkit-keyframes Gradient {
    0% {
        background-position: 0% 50%
    }
    50% {
        background-position: 100% 50%
    }
    100% {
        background-position: 0% 50%
    }
}

@-moz-keyframes Gradient {
    0% {
        background-position: 0% 50%
    }
    50% {
        background-position: 100% 50%
    }
    100% {
        background-position: 0% 50%
    }
}

@keyframes Gradient {
    0% {
        background-position: 0% 50%
    }
    50% {
        background-position: 100% 50%
    }
    100% {
        background-position: 0% 50%
    }
}




.form-style-1{


color:#000;


}



</style>




</head>

<body >


<!-- navigation menu -->

<div class="container-fluid" style="position: fixed;z-index: 20000;">

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
      <li><a  class="item hvr-underline-from-center" style="background-color: #1A5D63;cursor: pointer;">Contact Us</a></li>
      <li>
        <a class="btn btn-default btn-outline signup hvr-round-corners" data-toggle="collapse" aria-expand="false" aria-controls="nav-collapse1" id="sign_up">Sign up</a>
      </li>

      <li>
        <a href="#nav-collapse1" class="btn btn-default btn-outline login hvr-round-corners" data-toggle="collapse" aria-expand="false" aria-controls="nav-collapse1" id="log_in">Login&emsp;</a>
      </li>






    </ul>

</div>





  </div>

</nav>


</div>



<?php

$source_word='ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
$random_word= substr(str_shuffle($source_word),0,14);
$_SESSION['captcha_mail']=$random_word;
?>

<form method="POST" action="Contact.php">
<ul class="form-style-1" style="position: absolute;top:50px;">
    <li><label>Your Name<span class="required"></span></label><input type="text" name="field1" class="field-divided" placeholder="Name..." maxlength="20" autocomplete="off" autofocus required style="width: 100%;">

    <li>
        <label>Subject <span class="required"></span></label>
        <input type="text" name="field6" class="field-long" required maxlength="50" required autocomplete="off" placeholder="Write a subject...">
    </li>


    <li>
        <label>Email <span class="required"></span></label>
        <input type="email" name="field2" class="field-long" required autocomplete="off" placeholder="Email...">
    </li>
      <input type="hidden" name="captcha_mail" value="<?=$_SESSION['captcha_mail'];?>">
    


    <li>
        <label>What is your primary role?</label>
        <select name="field3" class="field-select">
        <option value="Developer">Developer</option>
        <option value="Student">Student</option>
        <option value="Educator">Educator</option>
        <option value="Programmer">Programmer</option>
        <option value="Executive">Executive</option>
        <option value="Artist">Artist</option>
        <option value="Game_design">Game Designer</option>
        <option value="Others">Others</option>
        </select>

    </li>


    <li>
        <label>How did you find CUBEHUB?</label>
        <select name="field4" class="field-select">
        <option value="google">google add</option>
        <option value="friends">friends</option>
        <option value="random">By random search</option>
        <option value="Others">others</option>
        </select>
    </li>


    <li>
        <label>Your Message <span class="required"></span></label>
        <textarea name="field5" id="field5" class="field-long field-textarea" required maxlength="3000"></textarea>
    </li>
    <li>
        <input type="submit" value="Submit" name="submit">
    </li>
</ul>
</form>


<script type="text/javascript">
  

  
  $('#sign_up').click(function(){
   window.location.href='*/register.php';
})


  $('#log_in').click(function(){
   window.location.href='*/login.php';
})


</script>



</body>














</html>