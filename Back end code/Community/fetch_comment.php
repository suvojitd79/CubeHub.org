
<?php

error_reporting();
session_start();
ob_start();
//date_default_timezone_set("");



//implement the ago system 
function get_time($time)

{
$year=floor($time/31536000);
$month=floor(($time%31536000)/2592000);
$day=floor((($time%31536000)%2592000)/86400);

$hour=floor(((($time%31536000)%2592000)%86400)/3600);
$min= floor((((($time%31536000)%2592000)%86400)%3600)/60);
$second= floor(((((($time%31536000)%2592000)%86400)%3600)%60)%60);


$time_array = array('year'=>$year,'month'=>$month,'day'=>$day,'hour'=>$hour,'min'=>$min,
				'second'=>$second);


foreach ($time_array as $key => $value) {

		if($time_array[$key]!=0)			
		{
			if($time_array[$key]==1)	
				{return $time_array[$key]." ".$key. " ago";}
			else{return $time_array[$key]." ".$key."s ago";}
			
		}



}

return "Just now";	
}



$connect = new PDO('mysql:host=localhost;dbname=my_comment','root','');

// $username = $_SESSION['username'];
// $avatar = $_SESSION['img'];


$query = 'SELECT * FROM data where parent_comment_id=0 ORDER BY comment_id DESC';


$statement = $connect->prepare($query);

$statement->execute();

$output='';

$result=$statement->fetchAll();


  foreach($result as $row)
        {

        // $output .= '<div class="panel panel-default">
        //             <div class="panel-heading">By <b>'.$row['author'].'</b> on '.$row['time'].'</div>
        //             <div class="panel-body"> '.$row['comments'].' </div>
        //             <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id='.$row['comment_id'].'>Reply</button></div>
        //             </div>'; 



        //calculate the time



         




        	$_SESSION['time_'] = $row['time'];

         $output .= '<div class="container-fluid" style="margin:0;padding:0;">
         				<div class="row no-gutters">
         					
         						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box" style="margin:0 auto;border:1px solid #3E606F;padding:30px 30px 30px 30px;margin-bottom:20px;background:#fff;">
         								<div id="content_section" style="font-family:monospace;font-size:1.2em;background: #f9f9f9;

																">'. $row['comments'].'</div>


										<div><button type="button" class="btn btn-info reply" id="'.$row['comment_id'].'" style="text-align:center;position:absolute;border-radius:3px;bottom:5px;right:90px;cursor:pointer;padding:0;" >Reply</button>
											<button type="button" class="flag" id="'.$row['comment_id'].'" style="text-align:center;position:absolute;border-radius:3px;bottom:5px;right:140px;cursor:pointer;padding:0 8px;background:#87898D;border:none;color:#fff;">Flag</button>

										</div>						

		         						<div id="pic_section" style="float:right;text-align:center;border:1px solid #3E606F;position:relative;right:-25px;bottom:-25px;cursor:pointer;" ><img src="'.$row['image'] .'" class="img-thumbnail" style="width:80px;height:80px;"><br><small>'.$row['author'].'</small><br><small>'.get_time(time()-strtotime($row['time'])).'</small>
		         						</div>

         								
         						</div>
         					
         				</div>
         			</div>';           




        $output.= get_reply_comment($connect,$row['comment_id']);            

        }


       echo $output; 

       
        function get_reply_comment($connect,$parent_id=0,$width_left=100)
              {


                $query = "SELECT * FROM data where parent_comment_id= '$parent_id' ORDER BY comment_id DESC";


                  $statement = $connect->prepare($query);

                  $statement->execute();

                  $output='';

                  $result=$statement->fetchAll();


                  $row = $statement->rowCount();


                  if($parent_id=0)
                  {
                    $margin_left=0;


                  }

                  else{


                    
                    $width_left= $width_left -5;

                  }





                  if($row>0) {

                    foreach($result as $row)
                          {

                                 

                              $array = explode('/',$row['image']);

                             $avatar='profile_pic'.'/'.$array[1];






                            $image = $avatar;

                          
                          $output .= '<div class="container-fluid" style="padding:0px;margin:0;width:'.$width_left.'%;">
         						<div class="row no-gutters">
         					
         						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box" style="margin:0 auto;border:1px solid #3E606F;padding:30px 30px 30px 30px;margin-bottom:20px;background:#fff;">
         								<div id="content_section" style="font-family:monospace;font-size:1.2em;background: #f9f9f9;

																">'. $row['comments'].'</div>


										<div><button type="button" class="btn btn-info reply" id="'.$row['comment_id'].'" style="text-align:center;position:absolute;border-radius:3px;bottom:5px;right:90px;cursor:pointer;padding:0;" >Reply</button>
											<button type="button" class="flag" id="'.$row['comment_id'].'" style="text-align:center;position:absolute;border-radius:3px;bottom:5px;right:140px;cursor:pointer;padding:0 8px;background:#87898D;border:none;color:#fff;" >Flag</button>

										</div>						

		         						<div id="pic_section" style="float:right;text-align:center;border:1px solid #3E606F;position:relative;right:-25px;bottom:-25px;cursor:pointer;" ><img src="'.$row['image'] .'" class="img-thumbnail" style="width:80px;height:80px;"><br><small>'.$row['author'].'</small><br><small>'.get_time(time()-strtotime($row['time'])).'</small>
		         						</div>

         								
         						</div>
         					
         				</div>
         			</div>';           
            









                          $output.= get_reply_comment($connect,$row['comment_id'],$width_left);            

                          }

                        }


                        return $output;

                      }




?>
<style type="text/css">
 

/* Sweep To Right */
.hvr-sweep-to-right {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.hvr-sweep-to-right:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #2098D1;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-sweep-to-right:hover, .hvr-sweep-to-right:focus, .hvr-sweep-to-right:active {
  color: white;
}
.hvr-sweep-to-right:hover:before, .hvr-sweep-to-right:focus:before, .hvr-sweep-to-right:active:before {
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

#pic_section:hover {
    /* Start the shake animation and make the animation last for 0.5 seconds */
    animation: shake 1.9s; 
    /* When the animation is finished, start again */
    animation-iteration-count: infinite; 
}

@keyframes shake {
    0% { transform: translate(1px, 1px) rotate(0deg); }
    10% { transform: translate(-1px, -2px) rotate(-1deg); }
    20% { transform: translate(-3px, 0px) rotate(1deg); }
    30% { transform: translate(3px, 2px) rotate(0deg); }
    40% { transform: translate(1px, -1px) rotate(1deg); }
    50% { transform: translate(-1px, 2px) rotate(-1deg); }
    60% { transform: translate(-3px, 1px) rotate(0deg); }
    70% { transform: translate(3px, 1px) rotate(-1deg); }
    80% { transform: translate(-1px, -1px) rotate(1deg); }
    90% { transform: translate(1px, 2px) rotate(0deg); }
    100% { transform: translate(1px, -2px) rotate(-1deg); }
}

.box{


}

.box:hover{

	box-shadow: 0px 0px 30px #000000;
    z-index: 2;

    cursor: pointer;
}



</style>

