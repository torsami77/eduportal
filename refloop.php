<?php
$loop = 1;
while($loop <= $totalquestion){
		$refvalue = $sn.$loop ;
	if(!empty($_POST[$loop]) || $ref[$refvalue] == TRUE){
		$data = $db->real_escape_string(strip_tags($_POST[$loop]));
		$column = $sn.$loop ;
		$update = $db->query("UPDATE `referee` SET `$column` ='$data' WHERE `addnum` ='$addnum'") ;
		if (!$update){die (mysqli_error($db)) ;}
		
	}else{
		die('<div class="error" id="error">All field marked as * must be entered</div>') ;
	}
	$loop++ ;
}	$referee = 'refcomment'.$sn;
	$update = $db->query("UPDATE `students` SET `$referee` ='completed' WHERE `addnum` ='$addnum'") ;
	session_destroy();
	header('location: thankref.php');



?>