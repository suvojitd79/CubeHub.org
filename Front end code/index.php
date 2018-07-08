<?php

session_start();



if(isset($_SESSION['user_id']))
		//user_name will set in registration and user_id will set in log in
{

		header('Location:user_page/');


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>CubeHub: community of cubers</title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/jpg" href="rubik.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="index.css">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Krona+One|Shadows+Into+Light" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Passion+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cantarell" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

</head>
<body>


<div class="welcome-section content-hidden" style="font-family: 'open sans',Arial;
		font-weight: 700;
		cursor: pointer;visibility: hidden;" id="vanish">
		<div class="content-wrap">
			<ul class="fly-in">


				<li>W</li>
				<li>E</li>
				<li>L</li>
				<li>C</li>
				<li>O</li>
				<li>M</li>
				<li>E&emsp;&emsp;</li>				
				<li>T</li>
				<li>O</li>
				<br>
			</ul>	

				<ul class="fly-in fly-in1">
				<li>C</li>
				<li>U</li>
				<li>B</li>
				<li>E</li>
				<li>H</li>
				<li>U</li>
				<li>B</li>
				

			</ul>


			













			<a class="enter-button" style="cursor: pointer;" class="enter-button">&emsp;ENTER</a>

		</div>
	</div>




<div id="loader">
	<div id="loader_con"></div>
</div>














<div class="main_body" style="display: none;">

<div>
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
			<li><a class="item home hvr-underline-from-center" style="background-color: #1A5D63;cursor: pointer;">Home<span class="sr-only">(current)</span></a></li>
			<li><a href="*/Articles.php" class="item hvr-underline-from-center">Articles</a></li>
			<li><a href="*/Contact.php" class="item hvr-underline-from-center">Contact Us</a></li>
			<li>
				<a  class="btn btn-default btn-outline signup hvr-round-corners" data-toggle="collapse" aria-expand="false" aria-controls="nav-collapse1" id="sign_up">Sign up</a>
			</li>

			<li>
				<a  class="btn btn-default btn-outline login hvr-round-corners" data-toggle="collapse" aria-expand="false" aria-controls="nav-collapse1" id="log_in">Login&emsp;</a>
			</li>






		</ul>

</div>





	</div>

</nav>


</div>

</div>




	 <section id=vid-section>

						<div class="background-wrap" style="height: 100vh;">
							<video id="vid" autoplay="true" preload="auto" loop="true" muted>
								<source id="back_v"  src="compressed.mp4" type="video/mp4">			
							</video>
				           

						</div>	



						<div class="vid-data">
							  <h1>cubehub</h1>
				              <p>a community of cubers</p>
				              <form action="" method="POST">
				              		<input type="text" name="" placeholder="Search..." required="true" autocomplete="off"> 
				              		

				              		<button class=search id="search_">
				              				<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="touch" x="0px" y="0px" width="5vw" height="5vh" viewBox="0 0 485.213 485.213" style="enable-background:new 0 0 485.213 485.213;" xml:space="preserve">
				              				<g>	
				              				<path d="M471.882,407.567L360.567,296.243c-16.586,25.795-38.536,47.734-64.331,64.321l111.324,111.324    c17.772,17.768,46.587,17.768,64.321,0C489.654,454.149,489.654,425.334,471.882,407.567z" fill="#000"/>
											<path d="M363.909,181.955C363.909,81.473,282.44,0,181.956,0C81.474,0,0.001,81.473,0.001,181.955s81.473,181.951,181.955,181.951    C282.44,363.906,363.909,282.437,363.909,181.955z M181.956,318.416c-75.252,0-136.465-61.208-136.465-136.46    c0-75.252,61.213-136.465,136.465-136.465c75.25,0,136.468,61.213,136.468,136.465    C318.424,257.208,257.206,318.416,181.956,318.416z" fill="#000"/>
											<path d="M75.817,181.955h30.322c0-41.803,34.014-75.814,75.816-75.814V75.816C123.438,75.816,75.817,123.437,75.817,181.955z" fill="#000"/>
											</g>	
										    </svg> -->

				              		</button>
				              </form>
						</div>

            </section>






	<div class="carousel slide" id="myCarousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner">

			<div class="item active">
				<img src="back_images/1a1.jpg" class="img-responsive fill" style="max-width: 100%;max-height: 100%;border-radius: 0;">
				<div class="carousel-caption">
				
				</div>
			</div>

			<div class="item">
				<img src="back_images/2a2.jpg" class="img-responsive fill" style="max-width: 100%;max-height: 100%;border-radius: 0;">
				<div class="carousel-caption">
				</div>
			</div>

			<div class="item">
				<img src="back_images/3a3.jpg" class="img-responsive fill" style="max-width: 100%;max-height: 100%;border-radius: 0;">
				<div class="carousel-caption">
					
				</div>
			</div>

		</div>


		<a href="#myCarousel" class="carousel-control left" data-slide="prev">
			<span class="icon-prev"></span>
		</a>

		<a href="#myCarousel" class="carousel-control right" data-slide="next">
			<span class="icon-next"></span>
		</a>



	</div>	




<div class="parallax1_actual">



	<div class="container text-center">
			<h1 style="font-size: 8vw;font-family: 'Shadows Into Light', cursive;color: #fff;padding:2vw;
			">What's happening right now?</h1>
	</div>


	<div class="container" style="padding-bottom: 40px;">
		<div class="row">

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="box box1 parallax1">
					<div class="box-icon">
						<div class="round-1">
						<img src="back_images/robot2.gif" class="img-responsive" style="height: 100px;width: 100px;border-radius: 50%;"></div>
					</div>
					<div class="info">
						<h4 class="text-center" style="text-transform: uppercase;">Algorithm</h4>
						<p>
							Step 1: Solve the edge pieces of the top layer <br>
							Step 2: Solve the corner pieces of the top layer<br>
							Step 3: Solve the edge pieces of the middle layer<br>
							Step 4: Orient the last layer edge pieces<br> 
							Step 5: Permute the four last layer corner pieces 
						</p>

						<a href="https://www.youcandothecube.com/solve-it/3-x-3-solution" class="btn btn-info">More</a>
					</div>
				</div>				
			</div>
			

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="padding-bottom: 90px;">
				<div class="box box1 parallax1">
					<div class="box-icon">
						<!-- <span class="fa fa-4x fa-html5"></span> --><div class="round-1"><img src="back_images/c9.PNG" class="img-responsive" style="height: 100px;width: 100px;border-radius: 50%;"></div>
					</div>
					<div class="info">
						<h4 class="text-center">SeungBeom Cho</h4>
						<p>SeungBeom Cho (조승범) set a new Rubik's Cube World Record in the first round of the ChicaGhosts 2017 competition on October 28, 2017 Chicago, Illinois USA.He solved the cube in 4.59 seconds.

						</p>
						<a href="https://mashable.com/2017/10/29/rubiks-cube-4-59-video/#EUgFjNinsaqd" class="btn btn-info">More</a>
					</div>
				</div>				
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="box box1 parallax1">
					<div class="box-icon">
<!-- <span class="fa fa-4x fa-html5"></span> -->
				<div class="round-1">
				<img src="back_images/c8.jpg " class="img-responsive" style="height: 100px;width: 100px;border-radius: 50%;"></div>
					</div>
					<div class="info">
						<h4 class="text-center">FELIX ZEMDEGS</h4>
						<p>Feliks completed the Rubik's cube puzzle in just 4.22 seconds to take the title from SeungBeom Cho (Republic of Korea) who, according to the World Cube Association (the official organisation that regulates Rubik’s Cube competitions), held the record with a time of 4.59 sec.
						</p>
						<a href="https://www.worldcubeassociation.org/persons/2009ZEMD01" class="btn btn-info">More</a>
					</div>
				</div>				
			</div>



			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="box box1 parallax1">
					<div class="box-icon">
						<!-- <span class="fa fa-4x fa-html5"></span> --><div class="round-1">
						<img src="back_images/robot.gif" class="img-responsive" style="height: 100px;width: 100px;border-radius: 50%;"></div>
					</div>
					<div class="info">
						<h4 class="text-center">Robótica</h4>
						<p>A robot called the Sub1 solved a Rubik’s Cube in 0.637-seconds, earning it the Guinness World Record for being the fastest cube-solving bot. That honor did not last long as a pair of engineers have demonstrated a new robot that can solve a Rubik’s Cube in almost half that time: a mere 0.38 seconds.

						</p>
						<a href="https://www.youtube.com/watch?v=nt00QzKuNVY" class="btn btn-info">More</a>
					</div>
				</div>				
			</div>







		</div>
	</div>


</div>




	<div class="container block-1">
		<div class="row" style="background-color:#FFF3F2;">
			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12" style="padding:10px;">
				<img src="back_images/b3.jpg" class="img-responsive img1">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12" style="padding: 0 10px 0 10px;text-align: center;">
				<h1 class="mar-t-100">
					<span class="span-1">Community website for cubers</span><br>
					
				</h1>

				

				<ul class="list-unstyled">
					<li><h4><i class="fa fa-check" aria-hidden="true"></i>Collaborate & innovate</h4></li>
					<li><h4><i class="fa fa-check" aria-hidden="true"></i>Get involved and help others</h4></li>
					<li><h4><i class="fa fa-check" aria-hidden="true"></i>Create your own science</h4></li>
					<li><h4><i class="fa fa-check" aria-hidden="true"></i>Develop problem solving skill</h4></li>
					<li><h4><i class="fa fa-check" aria-hidden="true"></i>Share ideas</h4></li>

					<li><h4><i class="fa fa-check" aria-hidden="true"></i>Have fun</h4></li>
					
				</ul>


			
				<a href="*/Contact.php" class="btn btn-info rounded-1" style="letter-spacing:2px;font-size: .9em;font-family: 'Anton', sans-serif;
								">More info</a>

				<a href="*/register.php" class="btn btn-success rounded-1" style="font-size: 1.5em;font-family: 'Anton', sans-serif; 
					" >Sign up now!</a>

			</div>




		</div>
	</div>


	<div class="container block-2">
		<div class="row">
			
			

				<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12" style="padding: 0 10px 0 10px;text-align: center;">
				<h1 class="mar-t-100">
					<span class="span-2">Key Featues</span>
				</h1>

				

				<ul class="list-unstyled">
					<li><h4><i class="fa fa-check" aria-hidden="true"></i>Comminity Forum</h4></li>
					<li><h4><i class="fa fa-check" aria-hidden="true"></i>Publish your own article</h4></li>
					<li><h4><i class="fa fa-check" aria-hidden="true"></i>Live chat</h4></li>
					<li><h4><i class="fa fa-check" aria-hidden="true"></i>Online Gameplay&emsp;<small style="font-family: 'Shadows Into Light', cursive;color: #09090A;

					">[under development]</small></h4></li>
					
				</ul>


			
				

				<a href="*/login.php" class="btn btn-danger rounded-1"  style="font-size: 1.5em;font-family: 'Anton', sans-serif;
					" id="log_in">Log in</a>

			</div>

		

			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12" style="padding: 10px;">
				<img src="back_images/b4.jpg" class="img-responsive img2" style="width: 100%;">
			</div>


		</div>
	</div>



	<div class="container" style="background-color:#FFF3F2;">
		<div class="row">
			<div class="col-xs-12 col-lg-6 col-md-6 col-sm-12 pie">

				<div class="container" style="width: 100%;margin: 20px auto;">

					<div>
							<canvas id="canvas">
								

							</canvas>


					</div>


					
				</div>
				
			</div>

			<div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 block-3" style="padding:30px 30px 20px 20px;">

				<p class="cross-style">The <del>Rubiks</del> <ins>Rubik's</ins> Cube is a cube consisting of 6 sides with <del>8</del><ins>9</ins> individual pieces on each. The
				main objective when using one is to recreate it's original position, a solid color for each
				side, with out removing any piece from the cube. Though it is colorful and looks like a
				children's toy, there have been many championships for it's completion.<del>It's</del><ins>This</ins> unique design was made by an engineer named Erno Rubik, a socialist bureaucrat who lived in Budapest,
				Hungary. He built the simple toy in his mother's apartment and did not know of the 500 million people who
				were going to become overly perplexed over it. His first idea of the cube came in the Spring of 1974.</p>
				
			</div>
		</div>
	</div>





<!--Table-->

<div class="table1">

<h1>Top 10 Fastest Rubik's Cube Speedcubers</h1>


<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Country</th>
			<th>Event</th>
			<th>time</th>
		</tr>			
	</thead>

	<tbody>


		<tr>
			<td>Feliks Zemdegs</td>
			<td>Australia</td>
			<td>Cube For Cambodia 2018</td>
			<td>4.22</td>
		</tr>

		<tr>
			<td>SeungBeom Cho</td>
			<td>South Korea</td>
			<td>ChicaGhosts 2017</td>
			<td>4.59</td>
		</tr>


		<tr>
			<td>Patrick Ponce</td>
			<td>USA</td>
			<td>Rally in the Valley 2017</td>
			<td>4.69</td>
		</tr>

		<tr>
			<td>Feliks Zemdegs</td>
			<td>Australia</td>
			<td>POPS Open, Melbourne 2016</td>
			<td>4.73</td>
		</tr>

		<tr>
			<td>Mats Valk</td>
			<td>Netherlands</td>
			<td>Jawa Timur Open 2016</td>
			<td>4.74</td>
		</tr>

        <tr>
			<td>Lucas Etter</td>
			<td>USA</td>
			<td>River Hill Fall 2015</td>
			<td>4.90</td>
		</tr>


		<tr>
			<td>Keaton Ellis</td>
			<td>USA</td>
			<td>River Hill Fall 2015</td>
			<td>5.09</td>
		</tr>


		<tr>
			<td>Collin Burns</td>
			<td>USA</td>
			<td>Doylestown Spring 2015</td>
			<td>5.25</td>
		</tr>

		<tr>
			<td>Mats Valk</td>
			<td>Netherlands</td>
			<td>Zonhoven Open 2013</td>
			<td>5.55</td>
		</tr>


		<tr>
			<td>Feliks Zemdegs</td>
			<td>Australia</td>
			<td>Melbourne Winter Open 2011</td>
			<td>5.66</td>
		</tr>


		<tr>
			<td>Feliks Zemdegs</td>
			<td>Australia</td>
			<td>Melbourne Winter Open 2011</td>
			<td>6.18</td>
		</tr>


		<tr>
			<td>Feliks Zemdegs</td>
			<td>Australia</td>
			<td>Kubaroo Open 2011</td>
			<td>6.24</td>
		</tr>


		<tr>
			<td>Feliks Zemdegs</td>
			<td>Australia</td>
			<td>Melbourne Summer Open 2011</td>
			<td>6.65</td>
		</tr>

		

		<tr>
			<td>Feliks Zemdegs</td>
			<td>Australia</td>
			<td>Melbourne Cube Day 2010</td>
			<td>6.67</td>
		</tr>


		<tr>
			<td>Feliks Zemdegs</td>
			<td>Australia</td>
			<td>Melbourne Cube Day 2010</td>
			<td>7.03</td>
		</tr>



		<tr>
			<td>Erik Akkersdijk</td>
			<td>Netherlands</td>
			<td>Czech Open 2008</td>
			<td>7.08</td>
		</tr>


		<tr>
			<td>Yu Nakajima</td>
			<td>Japan</td>
			<td>Kashiwa Open 2008</td>
			<td>8.72</td>
		</tr>


		<tr>
			<td>Edorard Chambon</td>
			<td>France</td>
			<td>Murcia Open 2008</td>
			<td>9.18</td>
		</tr>

</tbody></table>		

</div>





	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">


				        
						 <blockquote id="quote1">
						 		<div class="round-1">
						 		<img src="back_images/c10.PNG" class="img-responsive" style="height:80px;width: 80px;border-radius: 50%;position: relative;left:40%;">
						 		</div>	

							 	<p class="quotation">The biggest misconception about cubing is that it's difficult,which is really isn't.
							 	</p>

							 	<footer style="text-align: right;background-color: #f9f9f9;">
							 		<a href="https://en.wikipedia.org/wiki/Collin_Burns" style="text-decoration:none;color: #000;">Collin Burns</a>

							 	</footer>


						 </blockquote>


				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

				<blockquote id="quote2">

								<div class="round-1">
								<img src="back_images/c11.PNG" class="img-responsive" style="height:80px;width: 80px;border-radius: 50%;position: relative;left:40%;">
								</div>


							 	<p class="quotation">I started cubing in April, 2008, after browsing youtube. I saw there were youtube awards for different categories, and the award for best instructional video was Dan Brown’s “How to solve a Rubik’s Cube” I didn’t have one at home, so I went to the shops and bought a cheap one, and solved it within a few hours of first watching the video.
							 	</p>

							 	<footer style="text-align: right;background-color: #f9f9f9;">
							 		<a href="https://en.wikipedia.org/wiki/Feliks_Zemdegs" style="text-decoration:none;color: #000;">Feliks Zemdegs</a>

							 	</footer>


						 </blockquote>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

				<blockquote id="quote3">

						<div class="round-1">
						<img src="back_images/c12.PNG" class="img-responsive" style="height:80px;width: 80px;border-radius: 50%;position: relative;left:40%;">
						</div>


					 	<p class="quotation">I started when I was 11. I was still in my last year of elementary school and my teacher she bought me a cube in the class and I was interested.I thought it was like a impossible challenge so I was like pushing myself to learn that and after a week I was able to solve the first two layer by myself without any help and then I went to mom 'cause I wasn't able to solve the last layer and it turned out she still had the book from the 80' that how to solve a Rubik's cube so she gave that to me and I started reading and reading and it took me about a week I think before I was able to solve the Rubik's cube and it was just like as slow as anyone else. I think it's like 10min or maybe even worse and after that I was just kept practicing and practicing.    
					 	</p>

					 	<footer style="text-align: right;background-color: #f9f9f9;">
					 		<a href="https://en.wikipedia.org/wiki/Mats_Valk" style="text-decoration:none;color: #000;">Mats Valk</a>

					 	</footer>


						 </blockquote>
				
			</div>
		</div>
	</div>




<div class="container-fluid block-4" style="margin: 0;padding: 0px;">
	<div class="parallax-2 text-center">
		<div class="row">
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="150px" height="150px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<path d="M0,262.285c0,23.198,2.17,44.188,6.511,62.967c4.339,18.777,10.348,35.092,18.026,48.946
		c7.678,13.854,17.442,26.039,29.293,36.554c11.85,10.516,24.703,19.112,38.556,25.788c13.853,6.675,29.668,12.099,47.444,16.273
		c17.776,4.173,35.928,7.094,54.455,8.764c18.527,1.669,38.89,2.503,61.089,2.503c22.366,0,42.813-0.834,61.341-2.503
		c18.525-1.67,36.721-4.592,54.58-8.764c17.857-4.174,33.756-9.598,47.693-16.273c13.938-6.677,26.873-15.272,38.809-25.788
		c11.936-10.515,21.781-22.702,29.543-36.554c7.76-13.854,13.811-30.168,18.15-48.946c4.34-18.777,6.51-39.769,6.51-62.967
		c0-41.395-13.854-77.197-41.559-107.408c1.502-4.006,2.879-8.554,4.131-13.646c1.252-5.091,2.42-12.351,3.504-21.781
		c1.086-9.432,0.668-20.321-1.252-32.673c-1.918-12.353-5.465-24.953-10.643-37.807l-3.754-0.751
		c-2.672-0.5-7.055-0.375-13.146,0.376s-13.186,2.253-21.279,4.507c-8.096,2.253-18.527,6.594-31.297,13.02
		s-26.248,14.479-40.436,24.16c-24.367-6.677-57.834-10.016-100.396-10.016c-42.396,0-75.778,3.339-100.147,10.016
		c-14.188-9.682-27.75-17.734-40.685-24.16S91.8,55.355,84.122,53.103c-7.677-2.254-14.855-3.714-21.531-4.382
		c-6.677-0.668-10.892-0.876-12.644-0.626c-1.752,0.25-3.13,0.543-4.131,0.876c-5.174,12.854-8.721,25.453-10.64,37.807
		c-1.919,12.352-2.337,23.242-1.252,32.673c1.085,9.43,2.254,16.69,3.505,21.781c1.252,5.092,2.629,9.64,4.131,13.646
		C13.854,185.088,0,220.89,0,262.285z M62.842,325.127c0-24.035,10.933-46.068,32.798-66.097
		c6.509-6.012,14.104-10.559,22.783-13.646c8.679-3.089,18.485-4.841,29.418-5.259c10.933-0.417,21.406-0.334,31.421,0.251
		c10.014,0.584,22.366,1.377,37.054,2.378c14.688,1.002,27.374,1.502,38.056,1.502c10.683,0,23.368-0.5,38.056-1.502
		c14.689-1.001,27.039-1.794,37.057-2.378c10.014-0.585,20.486-0.668,31.42-0.251c10.934,0.418,20.738,2.17,29.42,5.259
		c8.678,3.088,16.271,7.635,22.781,13.646c21.865,19.695,32.799,41.728,32.799,66.097c0,14.354-1.795,27.081-5.385,38.182
		c-3.588,11.102-8.178,20.405-13.771,27.915c-5.592,7.511-13.352,13.896-23.283,19.153c-9.932,5.258-19.611,9.305-29.041,12.146
		c-9.432,2.837-21.533,5.049-36.305,6.635c-14.773,1.586-27.959,2.546-39.559,2.879c-11.602,0.334-26.33,0.501-44.189,0.501
		c-17.859,0-32.589-0.167-44.189-0.501c-11.6-0.333-24.787-1.293-39.558-2.879s-26.872-3.798-36.303-6.635
		c-9.43-2.841-19.111-6.889-29.042-12.146c-9.931-5.257-17.693-11.641-23.284-19.153c-5.591-7.511-10.182-16.813-13.77-27.915
		C64.636,352.208,62.842,339.479,62.842,325.127z M320,320.08c0,26.51,14.326,48,32,48s32-21.49,32-48s-14.326-48-32-48
		S320,293.57,320,320.08z M128,320.08c0,26.51,14.327,48,32,48s32-21.49,32-48s-14.327-48-32-48S128,293.57,128,320.08z"/>
</g>

	</svg>

			</div>


			


			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxx2">
				
				<h2  class="pro1">Want to contribute to this project?</h2>
				<h2  class="pro2">Find this project on Github</h2>
				<a  class="btn btn-info pro3">Download code</a>

			</div>


		</div>
	</div>
</div>























	<div class="container block-5" style="border-top:1px solid rgba(0,0,0,.2);border-bottom:1px solid rgba(0,0,0,.2);">
		<div class="row">
			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12" style="text-align:left;">
				<h4 style="color:#48A74A;font-family: 'Alfa Slab One', cursive;margin-top: 20px;
					">QUICK LINKS</h4>
									<ul class="list-unstyled">
										<li><a href="*/Privacy%20Policy.php" style="text-decoration: none;font-family: 'Russo One', sans-serif;
					">Privacy Policy</a></li>
										<li><a href="*/Terms%20and%20Conditions.php" style="text-decoration: none;font-family: 'Russo One', sans-serif;
					">Terms & condition</a></li>
										
										<li><a href="*/Contact.php" style="text-decoration: none;font-family: 'Russo One', sans-serif;
					">contact us</a></li>
									</ul>
			</div>

			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
					
				
				<h4 style="color:#48A74A;font-family: 'Alfa Slab One', cursive;
					margin-top: 20px;">SHARE BUTTONS</h4>

				<div class="share">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="share" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 341.387 341.387" style="enable-background:new 0 0 341.387 341.387;" xml:space="preserve">
						<g>
							<path d="M269.081,209.189c-22.713,0-42.777,11.521-54.68,29.021l-83.612-46.31c4.839-9.184,7.609-19.61,7.609-30.69   c0-10.775-2.645-20.926-7.238-29.922l63.472-27.617c11.939,17.215,31.816,28.523,54.307,28.523   c36.445,0,66.098-29.652,66.098-66.098C315.036,29.65,285.386,0,248.938,0c-36.443,0-66.092,29.65-66.092,66.096   c0,7.488,1.309,14.658,3.611,21.373l-65.929,28.688c-12.072-12.91-29.198-21.045-48.228-21.045   c-36.443,0-66.093,29.652-66.093,66.098c0,36.446,29.649,66.099,66.093,66.099c18.812,0,35.772-7.939,47.821-20.601l86.27,47.776   c-2.18,6.551-3.404,13.531-3.404,20.803c0,36.445,29.65,66.1,66.094,66.1c36.445,0,66.098-29.652,66.098-66.1   C335.179,238.842,305.526,209.189,269.081,209.189z M248.938,18.116c26.455,0,47.979,21.523,47.979,47.98   c0,26.459-21.523,47.98-47.979,47.98s-47.979-21.521-47.979-47.98C200.962,39.639,222.483,18.116,248.938,18.116z M72.301,209.189   c-26.454,0-47.977-21.522-47.977-47.979c0-26.459,21.522-47.98,47.977-47.98c26.456,0,47.98,21.521,47.98,47.98   C120.282,187.667,98.757,209.189,72.301,209.189z M269.081,323.268c-26.455,0-47.977-21.523-47.977-47.98   c0-26.459,21.521-47.979,47.977-47.979s47.98,21.52,47.98,47.979C317.062,301.744,295.536,323.268,269.081,323.268z" fill="#48A74A"/>
						</g>
						<g></g></svg>
				</div>



				<div id="share-buttons">
    
    
    
				

    <!-- Email -->
    <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com">
        <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
    </a>
 
    <!-- Facebook -->
    <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
    
    <!-- Google+ -->
    <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
    </a>
    
    <!-- LinkedIn -->
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
    </a>
    
    <!-- Pinterest -->
    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
        <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" />
    </a>
    
    
    
    <!-- Reddit -->
    <a href="http://reddit.com/submit?url=https://simplesharebuttons.com&amp;title=Simple Share Buttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
    </a>
    
    
    
   
     
    <!-- Twitter -->
    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>
    
    
    
   

</div>

			</div>
		</div>
	</div>


	<div class="container" class="copy-right">
		<p style="text-align: center;">&copy; 2018 cubehub.org , All Rights Reserved</p>
	</div>









</div>







<script type="text/javascript">




	$('#sign_up').click(function(){
   window.location.href='*/register.php';
})


	$('#log_in').click(function(){
   window.location.href='*/login.php';
})





	$(document).ready(function()
	 {
    if ($.cookie('noShowWelcome'))
    {
     $('.welcome-section').remove();
    
    $('.main_body').css("display","block");
    	
    	$('.welcome_section').css('display','none');
    	document.getElementById('vanish').style.display='none';
    	document.getElementById('vanish').style.visibility='hidden';

    	}


    	document.getElementById('vanish').style.visibility='visible';



		});





		$(function(){




			var welcome_section = $('.welcome-section'),enter_button=$('.enter-button');

			setTimeout(function(){

				welcome_section.removeClass('content-hidden');
				



			},60);



			$(window).click(function(){


				//event.preventDefault();
					welcome_section.addClass('content-hidden').fadeOut(800);
					$('.welcome_section').css('background-color','black');
					$('.main_body').css("display","block");
					//$('.welcome_section').css("display","none");
					 $(".welcome_section").removeAttr("style");
					 $('body').css('background','transparent');

					 $.cookie('noShowWelcome', true);
					

			});







		});














	window.sr = ScrollReveal({reset:true});

	//sr.reveal('#vid-section',{duration:2000});
	sr.reveal('#myCarousel',{duration:1000});
	sr.reveal('.text-center',{duration:1000});
	sr.reveal('.parallax1',{duration:1000});
	sr.reveal('.block-1',{duration:1000});
	sr.reveal('.block-2',{duration:1000});
	sr.reveal('#canvas',{duration:1000});
	sr.reveal('.block-3',{duration:1000});
	sr.reveal('.table1',{duration:1000});
	sr.reveal('#quote1',{duration:1000});
	sr.reveal('#quote2',{duration:1000});
	sr.reveal('#quote3',{duration:1000});
	sr.reveal('.block-4',{duration:1000});
	sr.reveal('.block-5',{duration:1000});





var data ={

labels:["community","Q/A","articles","chat","gameplay"],
datasets:[{
	fillColor:"rgba(0,60,100,1)",
	strokeColor:"black",
	data:["90","60","40","50","5"]


		}]
}


var c= document.getElementById("canvas").getContext("2d");

var chart = new Chart(c ,{
    type: 'bar',
    data: data,
    responsive: true,
  barValueSpacing: 2
});


$(function(){

	$('.img1').on({


		mouseenter:function(){

			$(this).attr('src','back_images/c3.jpg');

		},

		mouseleave:function(){


			$(this).attr('src','back_images/b3.jpg');


		}




	});


	$('.img2').on({


			mouseenter:function(){


				$(this).attr('src','back_images/c4.jpg');



			},

			mouseleave:function(){

			

				$(this).attr('src','back_images/b4.jpg');


			}


		});






});



	$(window).ready(function(){


		$('.carousel').carousel({


			interval:3000


			})




	});


document.getElementById("search_").disabled = true;




</script>


</body>
</html>