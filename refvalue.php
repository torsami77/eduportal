<?php
if(ISSET($_POST[''.$refvalue.''])){
$refvalue = $db->real_escape_string(strip_tags($_POST[''.$refvalue.'']));
echo $refvalue ;
}
else{
	$refvalue = $sn.$refvalue ;
	if($ref[$refvalue] == TRUE)
{$refvalue = $ref[$refvalue];
	echo $refvalue ;
}}	

?>