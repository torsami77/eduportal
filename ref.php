<?php
		$ref_b ='ref'.$sn;
		$refmobile_b ='refmobile'.$sn ;
		$refemail_b ='refemail'.$sn ;
		$passcode_b ='refpasscode'.$sn ;
		
	
		
		$ref = $_POST['ref'.$sn];
		if(empty($_POST['refmobile'.$sn])){$correct='specify mobile number for referee '.$sn ; include('correct.php');}else{
			$refmobile = $_POST['refmobile'.$sn];
		};
		
		if(empty($_POST['refemail'.$sn])){$correct='specify email for referee '.$sn ; include('correct.php');}else{
		$refemail = $_POST['refemail'.$sn];
		};
		
		$passcode = mt_rand (10000, 99999);
		$passcode = $sn.$row['addnum'].$passcode ;
		$email = $refemail ;
		include('mail.php');
		include ('email.php');
		$loginName=$email;
		$password=$passcode;
		include('sq.php');
		
		if(!$update = $db->query("
		UPDATE students SET
		
		$ref_b = '$ref',
		$refmobile_b = '$refmobile',
		$refemail_b = '$refemail',
		$passcode_b = '$password'
		

WHERE addnum='$addnum'"
)){
die (mysqli_error($db));
//('<font color="red">Site under update, please try again later...</font>');
};
		
?>