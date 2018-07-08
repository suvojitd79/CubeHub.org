<?php

session_start();
error_reporting(0);

?>



<!DOCTYPE html>
<html>
<head>
	<title>CubeHub: Community</title>
	<link rel="shortcut icon" type="image/jpg" href="rubik.ico">
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=IM+Fell+English+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="hover.css">


		<style type="text/css">


		body{
		background-color: #eee;
		}

















			::-webkit-scrollbar{
				width: 0;
			}
			::-moz-scrollbar{
				width: 0;
			}	
			::-o-scrollbar{
				width: 0;
			}		

			/* Extra small devices (phones, 600px and down) */
			@media screen and (min-width: 300px) and (max-width:600px) {

				.header1 h1{

						font-size: 1em;


					}

					.header1 h3{

						font-size: 1em;

							}		

					#dis{

						font-size: 1em;

					}		


							

			} 

			/* Small devices (portrait tablets and large phones, 600px and up) */
			@media only screen and (min-width: 601px) {

				.header1 h1{

						font-size: 1.5em;


					}

					.header1 h3{

						font-size: 1.5em;

							}		





						} 

			/* Medium devices (landscape tablets, 768px and up) */
			@media only screen and (min-width: 768px) {...} 

			/* Large devices (laptops/desktops, 992px and up) */
			@media only screen and (min-width: 992px) {...} 

			/* Extra large devices (large laptops and desktops, 1200px and up) */
			@media only screen and (min-width: 1200px) {...}



			#report-butt{

						display: none;
						position: fixed;
						z-index:1;
						padding-top: 30px;
						left:0;
						top: 0;
						width: 100%;
						height: 100%;
						overflow: auto;
						background-color: rgba(0,0,0,.4);

						}


				#reportForm{

						box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
						-webkit-animation-name: animatetop;
					    -webkit-animation-duration: 0.4s;
					    animation-name: animatetop;
					    animation-duration: 0.4s;
					    -moz-animation-name: animatetop;
					    -moz-animation-duration: 0.4s;
					    -o-animation-name: animatetop;
					    -o-animation-duration: 0.4s;

					    	}


					    	/* Add Animation */
					@-webkit-keyframes animatetop {
					    from {top:-300px; opacity:0} 
					    to {top:0; opacity:1}
					}

					@keyframes animatetop {
					    from {top:-300px; opacity:0}
					    to {top:0; opacity:1}
					}














	</style>
</head>

<body style="background-color: #eee;">


	<span id="comment_message" class="text-success"></span>

	<div class="container-fluid no-gutters">

		

		
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  header1">

		<div><i class="fa fa-sign-out" aria-hidden="true" style="float: right;position: relative;cursor: pointer;transform: scale(1.5);color: red;top:20px;left: -15px;" id="back" ></i></div>	
		<h1 style="text-align: center;font-family: 'Shrikhand', cursive;font-family: 'IM Fell English SC', serif;padding:5px;letter-spacing: 3px;">Welcome to Cubehub Community</h1>
		<h3 style="text-align: center;font-family: 'IM Fell English SC', serif;margin:10px 0 30px 0;">Post questions || share knowledge</h3>
		

	<div class="comment_div">	

		<form id="comment_form" method="POST">
				
				<div class="form-group">
					<textarea name="comment_content" class="form-control comment" placeholder="Leave a question..." rows="6" required="true" autofocus="true" id="comment_content" maxlength="3000" style="font-size: 1.2em;"></textarea><div id="max_length_tag" style="float: right;padding: 2px;"></div>

				<div class="form-group" style="margin-top:20px;">
					<input type="hidden" name="comment_id" id="comment_id" value="0">
					<input type="submit" name="submit" id="submit" class="btn btn-success" value="submit" style="font-size: .8em;">&emsp;
					<button type="button" class="btn btn-danger" id="cancel"  style="font-size: .8em;">cancel</button>
				</div>
				
		</form>		

	</div>	


	<div style="font-family: 'IM Fell English SC', serif;margin-top: 50px;font-size:1.5em;cursor: pointer;background:#f9f9f9;width:142px;padding: 5px;
" id="dis" class="hvr-float-shadow">Discussion(s)</div>
		

		<div id="display_comment"  style="margin-top:5px;padding-top:10px;background-color: rgba(0,0,0,.4);">
			
		</div>

	</div>
	
		
	</div>

<div id="report-butt">

<div id="reportForm" style="width: 280px;height: 500px;border:1px solid #f9f9f9;margin:0 auto;text-align: center;background-color: #f9f9f9;position: relative;">
	
<h1 style="text-align: center;font-family:monospace;">Report Concern</h1>

<p style="padding: 5px;font-family: monospace;text-align: center;">
	We take inappropriate user behavior and user generated content seriously. Please let us know if you believe there is a violation of the<a href="*/home/
Terms%20and%20Conditions.php" style="text-decoration: none;"> CubeHub Community Guidelines.</a>
</p>

<div style="margin-bottom:20px;">Please describe the problem</div>

<form id="flag_form">

<input type="hidden" name="report_id" value="0" id="report_id">	
<textarea style="padding: 5px;" rows="10" required autofocus maxlength="3000" name="report_content" id="report_content">
</textarea><br>

<button type="button" class="cancel" style="background-color:#87898D;color:#fff;border:none;font-size:1.2em;cursor: pointer;">Cancel</button>
<input type="Submit"  name="submit" style="background-color:red;color:#fff;border:none;font-size:1.2em;cursor: pointer;">

</form>

</div>

</div>







</body>
</html>




<script type="text/javascript">
	



var scroll_top;



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
       









	//grab and store the data

var content = document.getElementById('comment_content');
var sub_button= document.getElementById('submit');

var error=0;


//handle empty input
$('#comment_form').submit(function() {
    if ($.trim($("#comment_content").val()) === ""){
        son_of_a_();
        return false;
    }
});


	$(document).ready(


		function(){





			var text_max=3000;
			$('#max_length_tag').html(text_max+'/3000');

			$('#comment_content').keyup(function(){

			var length1= $('#comment_content').val().length; 	

			var text_remaining = text_max - length1;

			$('#max_length_tag').html(text_remaining +'/3000');
	
			

			});

			$("#back").click(
							function(){
								var exit = confirm("Are you sure you want to go back to Dashboard?");
								if(exit==true){

									window.location = '*/user_page';

								              }

							
							}
						);





	
			$('#comment_form').on('submit',function(event){

				event.preventDefault();

	
 


				var form_data = $(this).serialize();

				

				$.ajax({

					url:"add_comment.php",
					method:"POST",
					data:form_data,
					dataType:"json",  //data expecting back from server is of type json  
					success:function(data){

						if(data.error!='')
						{

							$('#comment_form')[0].reset();

							$('#comment_message').html(data.error);
							$('#comment_id').val('0');
							//$('#comment_no').val(data.val);
							$('#comment_content').attr('placeholder','Leave a question...');



							load_comment();


						}


					}

					



					 })

				$('#comment_content').focus();



			});			
	



	









			load_comment();  //runs when after loading the page


			function load_comment(){

				$.ajax({

					url:'fetch_comment.php',
					method:'post',
					success:function(data){

						$('#display_comment').html(data);


					}


					  })


			}


				$(window).scroll(function(){

					scroll_top=$(this).scrollTop();
					//console.log(scroll_top);



						});




				$(document).on('click','.reply',function(){




					// var scrollTop     = $(window).scrollTop(),
				 //    elementOffset = $(this).offset().top,
				 //    distance      = (elementOffset - scrollTop);
				 //    console.log(distance);




					var comment_id = $(this).attr("id");
					$('#comment_id').val(comment_id);
					$('#comment_content').focus();
					$('#comment_content').attr('placeholder','write your reply');




				});








					$('#flag_form').on('submit',function(event){

							event.preventDefault();


							var form_data = $(this).serialize();


							$.ajax({

								url:'report.php',
								method:'POST',
								data:form_data,
								dataType:'JSON',
								success: function(data){

									if(data.error!='') //on success
											{

										$('#comment_message').html(data.error);
										$('#report-butt').css('display','none');
										$('html').scrollTop(0);

											}


						}	

			})











									});







				$(document).on('click','#cancel',function(){


					content.value='';
					content.focus();


				});

			
		var flag_box = document.getElementById('report-butt');
	

		var flag_box_container = document.getElementById('reportForm');

		var cancel_flag = document.getElementsByClassName('cancel')[0];






				$(document).on('click','.flag',function(){

					$('#report-butt').css('display','block');
					$('#report-butt').css('z-index','100000');
					$('#report_content').val('');
					$('#report_content').focus();

					var comment_id = $(this).attr("id");
					$('#report_id').val(comment_id);

					//console.log(comment_id);
					
						});

				$(document).on('click','.cancel',function(){

					$('#report-butt').css('display','none');



				});


				$(window).on('click',function(event){

					if(event.target==flag_box)
					{
						$('#report-butt').css('display','none');
					}

				});


				



					

				






				



			function fade(){


				$('#comment_message').html("");


			}

			setInterval(fade,3000);







		});



</script>