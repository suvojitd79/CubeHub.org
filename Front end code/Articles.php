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
	<title>CubeHub: Articles</title>
<link rel="shortcut icon" type="image/jpg" href="rubik.ico">

	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width">

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
<link href=hover.css" rel="stylesheet">
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<link rel="stylesheet" type="text/css" href="articles.css">
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic|Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text" rel="stylesheet">

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>

<body>

<div class="container-fluid" style="z-index: 20000;position:fixed;top: 0;left: 0;">

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
			<li><a  class="item hvr-underline-from-center" style="background-color: #1A5D63;cursor: pointer;">Articles</a></li>
			<li><a href="*/Contact.php" class="item hvr-underline-from-center">Contact Us</a></li>
			<li>
				<a  class="btn btn-default btn-outline signup hvr-round-corners" data-toggle="collapse" aria-expand="false" aria-controls="nav-collapse1" id="sign_up">Sign up</a>
			</li>

			<li>
				<a class="btn btn-default btn-outline login hvr-round-corners" data-toggle="collapse" aria-expand="false" aria-controls="nav-collapse1" id="log_in">Login&emsp;</a>
			</li>






		</ul>

</div>





	</div>

</nav>


</div>

<div class="main-head">
	
		<div class="head1">
			
				<div class="box-head">
					The Rubik's Cube, a mechanical <span id="s1">3-D</span> puzzle was invented by Hungarian sculptor and professor of architecture <span id="s2">Ernő Rubik</span> in 1974.
				</div>		
						
		        <header>CUBEHUB</header>


		</div>



		<div class="head2">


			<a href="https://en.wikipedia.org/wiki/Ern%C5%91_Rubik" ><img src="sample.png" title="Ern˝o Rubik" class="a1"></a>

			<p class="a2">The Cube is an imitation of life itself or even an improvement on life. The problems of puzzles are very near the problems of life, our whole life is solving puzzles. If you are hungry, you have to find something to eat. But everyday problems are very mixed–they’re not clear. The Cube’s problem depends just on you. You can solve it independently. But to find happiness in life, you’re not independent. That’s the only big difference.</p>
			<h1 class="a3">Ern˝o Rubik</h1>	


		</div>


</div>




<div class="contain">


	<div class="columns a4">
		
		<div class="column">

			<div class="head">
				
				<span class="headline hl1" style="font-size: 1.5em;">Background of Rubik's cube</span> <p><span class="headline hl2">Originally called the "Magic 
                Cube",Renamed "Rubik's Cube" by Ideal Toys in 1980</span></p>
			
			</div>



			<p>
				The Rubik’s Cube consists of 26 little cubies.9 cubes are visible on each of 6 sides out of which 12 of them on the sides are counted twice, and 8 of them on vertices are counted thrice.@9*6-12*1-8*2=26@.The standard cube has six different colors:white, red, blue, green, orange, and yellow.As of January 2009, about 350 million Rubik’s Cubes have been sold worldwide. 
			</p>



			<figure class="figure">
				
				<img class="media"  src="GIF\compressed\1.gif" alt="">

				<figcaption class="figcaption">Ernő Rubik,inventor of Rubik's Cube</figcaption>

			</figure>


			<p>
				There are 8 corner pieces that can be arranged in 8! ways, each
				of which can be arranged in 3 orientations, giving 38 possibilities for each
				permutation of the corner pieces.And also here are 12 edge pieces which can be arranged in 12! ways. Each edge piece has 2 possible orientations, so each permutation of edge pieces has 212 arrangements.In the Rubik’s cube, only 13 of the permutations have the rotations of the corner cubies correct. Only 12 of the permutations have the same edge-flipping orientation as the original cube, and only 12 of these have the correct cubie-rearrangement parity.
			</p>

			<div class="citation1" style="padding-right: 20px;">

			The 2x2 Cube(Mini Cube)

		     </div>



			<figure class="figure">
				
				<img class="media"  src="GIF\compressed\16.gif" alt="">

				<figcaption class="figcaption">2x2 mini cube</figcaption>

			</figure>

			<p>
				This one is the smaller version of the Rubik’s Cube. It's been known as  Mini Cube and Pocket Cube also. It is consist of 8 smaller cubes, without having any edge piece. Larry D.Nichols invented a 2×2×2 "Puzzle in  1970 with Pieces Rotatable in Groups" and filed a Canadian patent application for it. The 2x2x2 cube was patented by Ernö Rubik on 29 March 1983, US4378117.
                The number of possible positions of the cube is = 3,674,160
			</p>





			<div class="citation1" style="padding-right: 20px;">
			The 4x4 Cube(Master Cube/Rubik's revenge)
		    </div>



			<figure class="figure">
				
				<img class="media"  src="GIF\compressed\5.gif" alt="">

				<figcaption class="figcaption">Rubik's revenge(2nd one)</figcaption>

			</figure>
			
			<p>
				The Rubik's Revenge is a 4×4×4 version of Rubik's cube, Invented by Péter Sebestény in 1981. The Rubik's Revenge was nearly called the Sebestény Cube until a somewhat last-minute decision changed the puzzle's name to attract fans of the original Rubik's Cube.Unlike the original puzzle (and the 5×5×5 cube), it has no fixed facets: the center facets (four per face) are free to move to different positions.This gives a total number of permutations of 7.40x10<sup>45</sup>
			</p>



	<!-- 		<div class="citation">




			Why is this little toy so popular in this World??

			
		</div>


		<div class="citation-content">


			<h2>seems easy but tricky</h2>


			<figure class="figure">
				
				<img class="media"  src="https://media.giphy.com/media/glmRyiSI3v5E4/giphy.gif" alt="">

				<figcaption class="figcaption">Say what?????</figcaption>

			</figure>

			<ol style="margin:0;padding:0; ">

				<li>

				<p>
					The inventor of this puzzle had no idea how to solve the cube. Randomly twisting it, he realized, it would take longer than he had on Earth. It was later calculated that 43 quintillion possible positions of the Cube exist.It took a month of twisting and re-twisting in his room before he figured out the puzzle.
				</p>

			    </li>



			    <li>More than 350 million Rubik’s Cubes have been sold around the globe so far.</li>


			    <li>There's one solution out of 43 quintillion possible combinations.</li>


            </ol>




            	<h2>Symbol of Excellence</h2>

            	<p>If you show up anywhere having a cube in your hand, people will think that you are some sort of genius. Most of the people have not tried solving this puzzle but the majority of them are familiar with the difficulty of this puzzle. As a result, on average only 1 out of 40 people try to figure it out and rest of them just quit trying after spending some time on it</p>


            </div>



        <div class="space1">    


            	<div class="citation">


            	People solving Rubik's cube

            	</div>



            	<div class="citation-content">

		            	<figure class="figure">
						
						<img class="media"  src="https://media.giphy.com/media/rRX48fWaHe9sk/source.gif" alt="">

						<figcaption class="figcaption">playing with cube</figcaption>

		       			</figure>

       		    </div>

       		 
       	</div>


       		

       		 <div class="citation">


       			Final Motivation


  			</div>	      			
       				
       				

  				<div class="citation-content" style="padding:45px;">


       				<figure class="figure">
				
				<img class="media"  src="https://media.giphy.com/media/l0MYA39BePpkpBX1K/giphy.gif" alt="">

				<figcaption class="figcaption">Nelson Mandela</figcaption>

       			</figure>


       			<!- <ul style="margin:0;padding:0; ">


       			
       				<li>“There is no failure except in no longer trying.” ―Elbert Hubbard</li>

       				
       				<br>

       				<li>“Never give up on something that you can’t go a day without thinking about.” ―Winston Churchill</li>



       			</ul>





          




       			</div>







 --> 


		</div>		















        <div class="column a4">

			<div class="head">
				
				<span class="headline hl3" style="font-size: 1.5em;">Solutions</span> <p><span class="headline hl4">It takes atmost 200 moves to solve this puzzle but speedcubes use around 40-50 moves</span></p>
			
			</div>



			<p>
				There are so many general methods by which we can solve a cube within a couple of minutes.There are so many general methods by which we can solve a cube within a couple of minutes. The most popular method was developed by David Singmaster, published in the book Notes on Rubik's "Magic Cube" in 1981. This solution involves solving the Cube layer by layer, in which one layer, designated the top, is solved first, followed by the middle layer, and then the final and bottom layer. Other general solutions include "corners first" methods or combinations of several other methods.
			</p>



			<figure class="figure">
				
				<img class="media"  src="GIF\compressed\6.gif" alt="">

				<figcaption class="figcaption">13 year-old solves Rubik's cube</figcaption>

			</figure>


			<p>
				The quickest way to solve a cube is by Speedcubing that has been developed for solving the Rubik's Cube as quickly as possible. Jessica Fridrich has developed the most common speedcubing solution. It is a very efficient layer-by-layer method that requires a large number of algorithms, especially for orienting and permuting the last layer. The first-layer corners and second layer are done simultaneously, with each corner paired up with a second-layer edge piece.

			</p>



				<figure class="figure">
			
				<img class="media"  src="GIF\compressed\7.gif" alt="">

				<figcaption class="figcaption">BLINDFOLDED(OMG!)</figcaption>

				</figure>



			    

			<p>
			  Lars Petrus has developed another method in which a 2×2×2 section is solved first, followed by a 2×2×3, and then the incorrect edges are solved using a three-move algorithm, which eliminates the need for a possible 32-move algorithm later. One of the advantages of this method is that it tends to give solutions in fewer moves.This method is also popular for fewest move competitions.
	
			</p>


			<div class="citation1" style="padding-right: 20px;">
			How do I solve a 1x1 cube????
		    </div>






			    <figure class="figure">
			
				<img class="media"  src="GIF\compressed\17.gif" alt="">

				<figcaption class="figcaption">Mr.bing thinking how to solve a 1x1 cube</figcaption>

				</figure>


				<a href="https://www.youtube.com/watch?v=RrTjfH0x4cQ">
							<svg version="1.1" id="ytube" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
						<circle style="fill:#474F70;" cx="256" cy="256" r="256"/>
						<g>
							<path style="fill:#FF4F6F;" d="M447.667,349.27H73.988c-17.127,0-31.01-13.884-31.01-31.01V76.461
								c0-17.127,13.884-31.01,31.01-31.01h373.68c17.127,0,31.01,13.884,31.01,31.01v241.797
								C478.678,335.385,464.794,349.27,447.667,349.27z"/>
							<path style="fill:#FF4F6F;" d="M238.983,426.783l-65.705-88.412l87.55-117.806l87.55,117.806l-65.705,88.412
								C271.789,441.427,249.865,441.427,238.983,426.783z"/>
						</g>
						<g>
							<path style="fill:#FFFFFF;" d="M149.131,208.596h-43.627v52.913c0,4.029-4.556,6.132-9.286,6.132c-4.555,0-9.286-2.102-9.286-6.133
								V145.521c0-4.205,4.73-5.957,9.286-5.957c4.73,0,9.286,1.752,9.286,5.957v48.357h43.627v-48.357c0-4.205,4.73-5.957,9.286-5.957
								c4.73,0,9.286,1.752,9.286,5.957v115.987c0,4.029-4.555,6.133-9.286,6.133c-4.556,0-9.286-2.102-9.286-6.133V208.596z"/>
							<path style="fill:#FFFFFF;" d="M209.398,196.157h26.981c3.855,0,6.133,3.505,6.133,7.534c0,3.329-1.928,7.184-6.133,7.184h-26.981
								v40.298h52.036c3.854,0,6.133,3.855,6.133,8.41c0,3.855-1.928,8.059-6.133,8.059h-62.374c-4.029,0-8.235-2.102-8.235-6.133V145.696
								c0-4.03,4.205-6.133,8.235-6.133h62.374c4.205,0,6.133,4.205,6.133,8.059c0,4.556-2.278,8.41-6.133,8.41h-52.036V196.157z"/>
							<path style="fill:#FFFFFF;" d="M290.69,267.641c-4.029,0-8.235-2.102-8.235-6.133V145.521c0-4.205,4.73-5.957,9.286-5.957
								c4.73,0,9.286,1.752,9.286,5.957v105.65h45.554c3.679,0,5.606,4.029,5.606,8.235c0,4.03-1.927,8.235-5.606,8.235H290.69V267.641z"
								/>
							<path style="fill:#FFFFFF;" d="M366.025,145.521c0-3.154,2.803-5.957,7.184-5.957h34.166c21.551,0,38.371,10.337,38.371,38.545
								v1.401c0,28.034-17.346,38.721-39.422,38.721h-21.725v43.277c0,4.029-4.556,6.133-9.286,6.133c-4.555,0-9.286-2.102-9.286-6.133
								V145.521H366.025z M384.597,156.034v47.481h21.725c12.965,0,20.85-7.358,20.85-22.777v-2.102c0-15.419-7.885-22.602-20.85-22.602
								H384.597z"/>
						</g>
	

					</svg>



				</a>



				<figure class="figure">
			
				<img class="media"  src="GIF\compressed\8.gif" alt="">

				<figcaption class="figcaption">Bazinga!</figcaption>

				</figure>




















		</div>		





	<div class="column a4">

			<div class="head">
				
				<span class="headline hl5" style="font-size: 1.5em;">Rubik's cube in movies</span> <p><span class="headline hl6">First used in <a href="https://en.wikipedia.org/wiki/Armageddon_(1998_film)">ARMAGEDDON</a>,a 1998 science fiction-action film</span></p>
			
			</div>



			<p>
				The Rubik’s Cube, an ultimate brain teaser, is being used in music videos, commercials, and movies. It can be used as a background object to help the audience relate to the character portrayed. Th vast popularity of the puzzle has resulted in several appearances throughout the media and the arts, either as a background object or as a key element. The cube has most likely appeared in too many pieces of media as a background image to count. 
			</p>



			<figure class="figure">
				
				<img class="media"  src="GIF\compressed\3.gif" alt="">

				<figcaption class="figcaption">Will Smith solving a Rubix cube in <br>The Pursuit of Happyness</figcaption>

			</figure>


			<p>	Will Smith, an American musician, and an actor is most noted to cubers for his role as Chris Gardner in the film The Pursuit of Happyness, in which he is depicted solving a Rubik's Cube in under two minutes.
				
			
			</p>


			<figure class="figure">
				
				<img class="media"  src="GIF\compressed\4.gif" alt="">

				<figcaption class="figcaption">Justin Bieber solving a Rubix cube</figcaption>

			</figure>

			

			<p>

				<div class="citation1" style="padding-right: 20px;">

				List of movies

			    </div>



				
				<ul>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/The_Pursuit_of_Happyness"> The pursuit of Happyness(2006)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Tron"> Tron(1982)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/WALL-E"> WALL-E(2008)</li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/The_Amazing_Spider-Man_(2012_film)">The Amazing Spider-Man(2012)</a></li>


				    </ul>

					
					<figure class="figure">
				
					<img class="media"  src="GIF\compressed\9.gif" alt="">

					<figcaption class="figcaption">Wake up scene(The Amazing Spider-Man)</figcaption>

					</figure>


					<ul>


					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Being_John_Malkovich"> Being John Malkovich(1999)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Drive_(2011_film)"> Drive(2011)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Armageddon_(1998_film)"> Armageddon(1998)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Duplicity_(film)"> Duplicity(2009)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Enter_the_Void"> Enter the Void(2009)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Hellboy_(2004_film)"> Hellboy(2004)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Hitch_(film)"> Hitch(2005)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Let_Me_In_(film)"> Let Me In(2010)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/The_Machinist"> The Machinist(2004)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Despicable_Me_3"> Despicable Me 3(2017)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Snowden_(film)"> Snowden(2016)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/In_a_Better_World"> In a Better World(Hævnen, 2010)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Smosh:_The_Movie"> Smosh:The Movie(2015)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Mary_and_Max"> Mary and Max(2009)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/Dude,_Where%27s_My_Car%3F">Dude, Where's My Car?(2000)</a></li>
					<li style="margin-left: -20px;"><a href="https://en.wikipedia.org/wiki/3_Idiots">3 idiots(2009)</a></li>
				</ul>
			</p>




			<p>
				

				<div class="citation1" style="padding-right: 20px;">
				List of TV series
			    </div>



					<ul>
						
					<li><a href="https://en.wikipedia.org/wiki/Lucifer_(TV_series)">Lucifer(2016-present)</a></li>
				    <li><a href="https://en.wikipedia.org/wiki/The_Big_Bang_Theory">The Big Bang Theory(2007-2017)</a></li>


				    </ul>

				    <figure class="figure">
				
					<img class="media"  src="GIF\compressed\10.gif" alt="">

					<figcaption class="figcaption">Jim parsons and Johnny Galecki(The Big Bang Theory) </figcaption>

					</figure>

					<ul>

					<li><a href="https://en.wikipedia.org/wiki/South_Park">South Park(1997-present)</a></li>
					<li><a href="https://en.wikipedia.org/wiki/Rick_and_Morty">Rick and Morty(2013-present)</a></li>
					</ul>

			</p>






		</div>		





















		<div class="column a4">

			<div class="head">
				
				<span class="headline hl7" style="font-size: 1.5em;">Shocking facts about Rubik's cube</span> <p><span class="headline hl8">Did you know that ????</span></p>
			
			</div>



			<p>
				The Cube has 43,252,003,274,489,856 different possible configurations.
			</p>

			
			<!-- <figure class="figure">
				
				<img class="media"  src="https://media.giphy.com/media/l0Hlxv7SOrUPZ8aWs/giphy.gif" alt="">

				<figcaption class="figcaption">3D view of Rubik's cube</figcaption>

			</figure>
 -->

			<!-- <figure class="figure">
				
				<img class="media"  src="https://media.giphy.com/media/aWPGuTlDqq2yc/giphy.gif" alt="">

				<figcaption class="figcaption">3D view of Rubik's cube</figcaption>

			</figure>
 -->





			<!-- <figure class="figure">
				
				<img class="media"  src="https://media.giphy.com/media/CN1bhedArWkta/giphy.gif" alt="">

				<figcaption class="figcaption">3D view of Rubik's cube</figcaption>

			</figure>
 -->


				
			<!-- <figure class="figure">
				<img class="media"  src="https://media.giphy.com/media/jquDWJfPUMCiI/giphy.gif" alt="">

				<figcaption class="figcaption">3D view of Rubik's cube</figcaption>

			</figure>
 -->

			<figure class="figure">
				
				<img class="media"  src="GIF\compressed\12.gif" alt="">

				<figcaption class="figcaption">eek!</figcaption>

			</figure>



		<!-- 	<figure class="figure">
				
				<img class="media"  src="https://media.giphy.com/media/fOVGTYyYtV6Ra/giphy.gif" alt="">

				<figcaption class="figcaption">3D view of Rubik's cube</figcaption>

			</figure>
 -->


			<p>
				The least number of moves required in unscrambling the Cube from the worst disorder, the shortest route, is often called God's Algorithm. Morwen Thistlethwaite calculated it to be 52 moves using computers at the Polytechnic of the South Bank in London. 
			</p>

			


				<figure class="figure">
					
					<img class="media"  src="GIF\compressed\13.gif" alt="">

					<figcaption class="figcaption">woo-hoo</figcaption>

				</figure>



<!-- 
			<figure class="figure">
				
				<img class="media"  src="https://media.giphy.com/media/Kz4e1QpUSbf20/giphy.gif" alt="">

				<figcaption class="figcaption">3D view of Rubik's cube</figcaption>

			</figure>
 -->

		

			<p>
				The quickest way to solve a cube is by Speedcubing that has been developed for solving the Rubik's Cube as quickly as possible. Jessica Fridrich has developed the most common speedcubing solution.
			</p>
			    

				<!-- <figure class="figure">
				
				<img class="media"  src="https://media.giphy.com/media/lfmYxOkGpNtEk/giphy.gif" alt="">

				<figcaption class="figcaption">3D view of Rubik's cube</figcaption>

			    </figure>

 -->





			<p>
			  Lars Petrus has developed another method in which a 2×2×2 section is solved first, followed by a 2×2×3, and then the incorrect edges are solved using a three-move algorithm, which eliminates the need for a possible 32-move algorithm later.
	


			</p>




			<figure class="figure">
				
				<img class="media"  src="GIF\compressed\11.gif" alt="">

				<figcaption class="figcaption">Jimmy Fallon</figcaption>

			</figure>




			<p>
				
	     	A football game in Connecticut was delayed when one player, Bob Blake, failed to take the field. He was found in the locker room playing with the Cube
			</p>

			<figure class="figure">
				
				<img class="media"  src="GIF\compressed\14.gif" alt="">

				<figcaption class="figcaption">Steve Carell</figcaption>

			</figure>



			<p>
				
	     	The first world championship organized by the Guinness Book of World Records was held in Munich on March 13, 1981. All Cubes were moved 40 times and rubbed with petroleum jelly. The official winner, with a record of 38 seconds, was Jury Froeschl, born in Munich. The first international world championship was held in Budapest on June 5, 1982, and was won by Minh Thai, a Vietnamese student from Los Angeles, with a time of 22.95 seconds.</p>

			<figure class="figure">
				
				<img class="media"  src="GIF\compressed\18.gif" alt="">

				<figcaption class="figcaption">Excited Jennifer Aniston</figcaption>

			</figure>




			<p>
			Rubik's cube won Toy of the Year in 1980 and 1981.Over 350 million Rubik’s Cubes have been sold worldwide.
			</p>

			<figure class="figure">
				
				<img class="media"  src="GIF\compressed\15.gif" alt="">

				<figcaption class="figcaption">What?</figcaption>

			</figure>







<!-- 			<figure class="figure">
				
				<img class="media"  src="https://media.giphy.com/media/14mgxYFJHXGmoo/giphy.gif" alt="">

				<figcaption class="figcaption">How to get started?</figcaption>

			</figure>






			<p>
				
				
				<div class="citation1">
				How can we solve any cube puzzle in general???</h1>
				</div>


				<h2 style="text-align:center;text-transform:uppercase;">Algorithm</h2>
				<p>
				<ul>
				<li>Top edge pieces (Cross)</li>
				<li>Top corner pieces</li>
				<li>Middle edge pieces</li>
				<li>Solve remaining edge </pieces</
				<li>Position corner pieces</pieces<>
				<li>Orient corner pieces</li> correctly</li>
			    </ul>

				</p>




			


			<figure class="figure">
				
				<img class="media"  src="https://media.giphy.com/media/zG6MKhlBxIloc/giphy.gif" alt="">

				<figcaption class="figcaption">3D view of Rubik's cube</figcaption>

			</figure>
 -->

		<!-- 	<figure class="figure">
				
				<img class="media"  src="https://media.giphy.com/media/zcCGBRQshGdt6/giphy.gif" alt="">

				<figcaption class="figcaption">3D view of Rubik's cube</figcaption>

			</figure>


			<figure class="figure">
				
				<img class="media"  src="https://media.giphy.com/media/iI6eeGjwScTCM/giphy.gif" alt="">

				<figcaption class="figcaption">3D view of Rubik's cube</figcaption>

			</figure>

			<figure class="figure">
				
				<img class="media"  src="https://media.giphy.com/media/3o6Zt6KHxJTbXCnSvu/giphy.gif" alt="">

				<figcaption class="figcaption">3D view of Rubik's cube</figcaption>

			</figure>
 -->










		</div>		











































	</div>
</div>


<div class="container" class="copy-right">
		<p style="text-align: center;">&copy; 2018 cubehub.org , All Rights Reserved</p>
	</div>

<script type="text/javascript">
	
	window.sr = ScrollReveal({reset:true});
	sr.reveal('.head1',{duration:2000});
	sr.reveal('.a1',{duration:3000});
	sr.reveal('.a2',{duration:3000});
	sr.reveal('.a3',{duration:3000});
	//sr.reveal('.a4',{duration:30});
	// sr.reveal('.a5',{duration:3000});
	// sr.reveal('.a6',{duration:3000});
	// sr.reveal('.a7',{duration:3000});







	
	$('#sign_up').click(function(){
   window.location.href='*/register.php';
})


	$('#log_in').click(function(){
   window.location.href='*/home/login.php';
})


</script>


</body>
</html>