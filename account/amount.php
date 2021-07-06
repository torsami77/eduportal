<?php
/*
second option is to select $programme from $programme and compare with result[class] to determine amount

*/
$programmed = $db->query("SELECT `class`,`programme` FROM `programmes` WHERE `abb` = '".$programme."'") ;
$prg = mysqli_fetch_array($programmed);
$programmed = $prg['programme'];
$class = $prg['class'];


if($class == 'pg'){
	$amount = 5500 ;
	$pr = 'Post-Graduate';
}else{
	$amount = 3500 ;
	$pr = 'Under-Graduate';
}


?>
