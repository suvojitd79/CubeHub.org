<?php

//trim-removes all special characters \r \n 
//strip_tags-removes html and php attribute
//addslashes - adds back slash in front of '' "" \ NULL


function protect($string){

$string =trim(strip_tags(addslashes($string)));

return $string;

}



?>

