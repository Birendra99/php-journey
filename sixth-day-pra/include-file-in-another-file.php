<?php
// include needs for the common code
// include -> it gives always warning and loads mulitple times 
// include_once ->  loads a single time 
// require -> its gives error 
// require_once ->  load a single time 

// include ("child-file.php");

for($a=1; $a<=5; $a++){
    include_once("child-file.php");
}

?>