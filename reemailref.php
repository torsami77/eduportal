<?php
include('certs.php');
$reff=$_SESSION['reff'];
?>
<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
</style>
</head>
<body>
<fieldset class="form">
<legend>UPDATE REFEREE</legend>
<form action="" method="POST" >
<p><input type="text" name="names" placeholder="Full Names of referee" required/></p>
<p><input type="number" name="mobile" placeholder="Mobile Number" required/></p>
<p><input type="email" name="email" placeholder="Referee Email" required/></p>
<p><input type="submit" name="update" value="Update and resend email" />
</form>

<?php
if(ISSET($_POST['update'])){
if(EMPTY($_POST['names']) || EMPTY($_POST['mobile']) || EMPTY($_POST['email']) )
{die('<font color="red">All fields are required!!!</font>');
}else{
		$names = $db->real_escape_string(strip_tags($_POST['names']));
		$mobile = $db->real_escape_string(strip_tags($_POST['mobile']));
		$email = $db->real_escape_string(strip_tags($_POST['email']));
		
		$passcode = mt_rand (10000, 99999);
		$passcode = $reff.$row['addnum'].$passcode ;
		$ref=$names;
		include('mail.php');
		include ('email.php');
		$loginName=$email;
		$password=$passcode;
		include('sq.php');
		
		$ref = 'ref'.$reff;
		$refmobile = 'refmobile'.$reff;
		$refemail = 'refemail'.$reff;
		$passcode = 'refpasscode'.$reff;
		
		if($update = $db->query("
		UPDATE students SET
		
		$ref = '$names',
		$refmobile = '$mobile',
		$refemail = '$email',
		$passcode = '$password'
		

WHERE addnum='$addnum'"
)){
	echo '<font color="green">Email updated and email sent to referee...</font>
	<p><a href="interview0.php">Click here to return to Home Page</a></p>';
}	
}
}



?>
</fieldset>
</body>

</html>