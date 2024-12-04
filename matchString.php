<!-- preg_match_all- used globally & preg_match -->
<?php
$string= 'PHP is the web scripting php language of 522 choice. 825';
$exo= preg_match_all("/[wo]/i",$string, $array);//i used for removing case sentivity for the string
// $exo= preg_match_all("/[wo]/",$string, $array);
if($exp){
    echo "A match was found.";
}else {
    echo "A match was not found.";
}
echo "<pre>";
print_r($array);
echo "</pre>";
