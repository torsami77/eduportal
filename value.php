<?php
if(ISSET($_POST[''.$value.''])){
$value = $db->real_escape_string(strip_tags($_POST[''.$value.'']));
echo $value ;
}
else{
	if($row[''.$value.''] !== '')
{$value = $row[''.$value.''];
	echo $value ;
}}
	 
 ?>