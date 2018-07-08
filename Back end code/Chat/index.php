
<?php

session_start();
error_reporting(0);

if(!isset($_SESSION['user_id']) && !isset($_SESSION['login_id'])) 
    {
    header('Location:*/register.php'); 

    }


session_start();


$connect = new PDO('mysql:host=localhost;dbname=my_account','root','');





if(!isset($_SESSION['user_id'])) 
    {

    header('Location:*/register.php'); 

    }


    //fetch the data need for the user

    $query = "SELECT username,avatar from users where id=:user_id";

    $statement = $connect->prepare($query);

    $statement->execute(array('user_id'=>$_SESSION['user_id']));

    $result = $statement->fetchAll();

    foreach($result as $row)
          {

          $GLOBALS['username'] = $row['username'];    
          $GLOBALS['avatar'] = $row['avatar'];
          }

$array = explode('/',$avatar);

$avatar='profile_pic'.'/'.$array[2];



$_SESSION['u_']=$username;
$_SESSION['a_']=$avatar;




?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>CubeHub: Chat</title>
	<link rel="shortcut icon" type="image/jpg" href="rubik.ico">
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
	
  	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">

		*{

			padding: 0;
			margin: 0;



		}



		body{
			background:url(a1.jpg);

		}


		 #back{
				transition:2s;

			}

	
			#back:hover{

				transform: scale(1.2);
				color:red;
						}

			.container{
				padding-top: 20px;

			}			

			


			#chat{

				width:100%;
				height:70vh;
				overflow: scroll;		

			}







			body::-webkit-scrollbar {
				    width: 0px;  /* remove scrollbar space */
				    background: transparent;  /* optional: just make scrollbar invisible */
				}
				/* optional: show position indicator in red */
				body::-webkit-scrollbar-thumb {
				    background: #FF0000;
				}


				::-webkit-scrollbar {
display: none;
}

	body::-webkit-scrollbar { width: 0 !important }
	body { -ms-overflow-style: none; }

	body{ overflow: -moz-scrollbars-none; }

			body::-moz-scrollbar {
				    width: 0px;  /* remove scrollbar space */
				    background: transparent;  /* optional: just make scrollbar invisible */
				}
				/* optional: show position indicator in red */
				body::-moz-scrollbar-thumb {
				    background: #FF0000;
				}





			::-webkit-scrollbar {  /*chrome and safari*/
				    width: 0px;  /* remove scrollbar space */
				    background: transparent;  /* optional: just make scrollbar invisible */
				}
				
				::-moz-scrollbar {		/*firefox*/
				    width: 0px;  /* remove scrollbar space */
				    background: transparent;  /* optional: just make scrollbar invisible */
				}

				::-o-scrollbar {		/*opera*/
				    width: 0px;  /* remove scrollbar space */
				    background: transparent;  /* optional: just make scrollbar invisible */
				}		
					::-ms-scrollbar {   /*internet explorer*/
				    width: 0px;  /* remove scrollbar space */
				    background: transparent;  /* optional: just make scrollbar invisible */
				}




				body{

					overflow-y:hidden;


				}




			

		/* Extra small devices (phones, 600px and down) */
		@media only screen and (max-width: 600px) {} 

		/* Small devices (portrait tablets and large phones, 600px and up) */
		@media only screen and (min-width: 600px) {} 

		/* Medium devices (landscape tablets, 768px and up) */
		@media only screen and (min-width: 768px) {.container{width: 70%;}} 

		/* Large devices (laptops/desktops, 992px and up) */
		@media only screen and (min-width: 992px) {.container{width:60%;}} 

		/* Extra large devices (large laptops and desktops, 1200px and up) */
		@media only screen and (min-width: 1200px) {.container{width:50%;}}









	</style>



	<script type="text/javascript">
		
		//if the data is empty then it will through some msg
			function validate(){

				var msg = document.forms["form1"]["data"];
						if(msg.value==""){

							window.alert("Please fill out this field");
							msg.focus();
							return false;

						    }



			}
		
			function enter_key(e)
						{

							if(e.keyCode==13)
							{


								document.getElementById('hit').click();
								console.log("125");

							}




						}







	</script>
</head>




<body>




	<div class="container" style="height: 90vh;position:relative;top:-13px;">
		<div class="panel panel-default">
			<div class="panel-heading" style="height: 75px;background-color: #fff;padding-left: 25px;padding-top: 5px;">

				<div style="display: inline-block;">


					<img src="<?php echo $avatar; ?>" style="width: 50px;height: 50px;border-radius: 50%;margin-right: 10px;"><span style="font-family: 'Roboto Mono', monospace;"><?php echo $username;?></span>
													<div style="position: relative;left: 60px;top: -15px;"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve" width="20px" height="20px">
						<path style="fill:#6AC259;" d="M213.333,0C95.518,0,0,95.514,0,213.333s95.518,213.333,213.333,213.333
							c117.828,0,213.333-95.514,213.333-213.333S331.157,0,213.333,0z M174.199,322.918l-93.935-93.931l31.309-31.309l62.626,62.622
							l140.894-140.898l31.309,31.309L174.199,322.918z"/>
						<g></g></svg><small style="position: relative;top:-6px;left: 3px;">Active</small>
								</div>



				</div>
				<div><i class="fa fa-sign-out" aria-hidden="true" style="float: right;position: relative;padding-right: 25px;bottom: 55px;cursor: pointer;transform: scale(1.5);color: red;" id="back" ></i></div>	

				<!-- <div align="right"><i class="fa fa-times" aria-hidden="true" id="back" style="cursor: pointer;">Quit now</i></div> -->
			</div>
			
			<div class="panel-body" style="background-color: #DDE3E3;padding-left: 20px;">


				<!-- displaying the chat content -->

				<div id="chat" style="padding-bottom: 10px;">
					

					<?php

							if(file_exists('log.html') && filesize('log.html')>0)
							{

								$file = fopen('log.html','r');
								$contents = fread($file,filesize('log.html'));
								fclose($file);
								echo $contents;


							}




					?>


				</div>

				<form method="post" name="form1" id="chat_data" style="margin-right:20px;">
					
							        <input type="text" name="data" class="form-control" autofocus="true" placeholder="Chat here as <?php echo $username;?>" style="padding-right: 30px;font-size:15px;" id="msg" autocomplete="off" maxlength="1000" onkeypress="enter_key(event);">

					
							        <i class="fa fa-paper-plane send" aria-hidden="true" style="position: relative; top:-25px;right:0;font-size: 20px;opacity: .8;float: right ;margin-right:6px;cursor: pointer;" onclick="validate()" id="hit"></i>
							        		       
				</form>

			</div>
		</div>
	</div>






<script type="text/javascript">








		$(document).ready(
				function(){
					//if the user press the logout button


									//handle empty input
				$('#chat_data').submit(function() {
				    if ($.trim($("#msg").val()) === ""){
				        son_of_a_();
				        return false;
				    }
				});


					var toggle=1;

					$("#back").click(
							function(){
								var exit = confirm("Are you sure you want to go back to Dashboard?");
								if(exit==true){

									window.location = '*/user_page';

								              }

							
							}
						);






					//grab data- send to server- clear the input area


					//If user submits the form
					$("#hit").click(function(){	
						
						var raw=$('#msg').val();
						var clientmsg = $("#msg").val().split(' ').join('');;
						
						if(clientmsg!='')
						{$.post("post.php", {text: raw});				
						$("#msg").val("");
						$("#msg").focus();
						toggle=1;
						return true;
					    }
					    else{

					    	alert("Enter some text");
					    	$("#msg").val("");
							$("#msg").focus();

					    }



					});


			




					//sending request through ajax to update the chat box
					//this part will rquest 

					function refresh()
							{


								//alert($('#chat').scrollTop());
								// var oldscrollHeight = $("#chat")[0].scrollHeight; //OR $('#test').prop('scrollHeight') 

								//confirm(oldscrollHeight);
								//alert(oldscrollHeight);

							var oldHeight = $('#chat').prop('scrollHeight')-20;




								$.ajax(
 								   {
 								   	url:"log.html",
 								   	cache:false, //prevent the data from being cached
 								   	success: function(html)
 								   				{// put the data in the chat div
 								   					$("#chat").html(html);

 								   					//auto-scroll	

 								   var newHeight  = $('#chat').prop('scrollHeight');				
 								  

 								   if(newHeight > oldHeight && toggle==1)
 								   			{
 								   				
 								   			$('#chat').animate({scrollTop:newHeight},.00001);
 								   			toggle=0;

 								   			}

 								   		


 								   				},
 								   	error: function(){


 								   		//leave it black for the time being
 								   					}			



									});

							}


							// updating the chat log

							setInterval(refresh,0.5);

							


						

							

			});







    $(document).ready(function(){


      //refresh the last ctivity by pinging the server 

      function update_activity()
            {
              var action = 'update_time';
              $.ajax({

                  url:'action.php',
                  method:'POST',
                  data:{action:action},
                  success:function(data)
                        {

                        }
                    
                    });

            }

  setInterval(function(){update_activity();},3000);          


       





    });








	
</script>





</body>
</html>







