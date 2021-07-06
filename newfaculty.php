<?php
include('cert.php');
?>

<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Edu-Portal</title>
</head>
<body>

<div style="width:30%; float:center; text-align: center;" >
<fieldset>
<legend>FACULTY & STAFF PASSWORD VERRIFICATION</legend>
<p style="color:blue;">Provide the details below and set your password</a>
<form action="" Method="POST">
<p><input type="email" name="email" value="<?php if(ISSET($_POST['submit'])){ echo $db->real_escape_string(strip_tags($_POST['email'])) ;}?>" placeholder="Email*" required/><font color="red">*</font></p>
<p><input type="text" name="pin" value="<?php if(ISSET($_POST['submit'])){ echo $db->real_escape_string(strip_tags($_POST['pin'])) ;}?>"placeholder="Pin*" required/><font color="red">*</font></p>
<p><input type="password" name="password" placeholder="Password*" required/><font color="red">*</font></p>
<p><input type="password" name="vpassword" placeholder="Verrify Password*" required/><font color="red">*</font></p>
<p><input type="submit" name="submit" value="Set my password" /></p>
</form>

<?php
if(isset($_POST['submit'])){
	if(isset($_POST['email'])){$email = $db->real_escape_string(strip_tags($_POST['email']));}else
		{die('<font color="red">All * fields are required!!</font>');}
	if(isset($_POST['pin'])){$pin = $db->real_escape_string(strip_tags($_POST['pin']));}else
		{die('<font color="red">All * fields are required!!</font>');}
	if(isset($_POST['password'])){$pass = $db->real_escape_string(strip_tags($_POST['password']));}else
		{die('<font color="red">All * fields are required!!</font>');}
	if(isset($_POST['vpassword'])){$vpassword = $db->real_escape_string(strip_tags($_POST['vpassword']));}else
		{die('<font color="red">All * fields are required!!</font>');}
		
	if($pass === $vpassword){
		$result = $db->query("SELECT * FROM `faculty` WHERE `email`='$email'") ;
		if($result == false){
			die('<font color="red">Invalid credentials, please try again!!</font>');
			}else{
			$row = $result->fetch_array(MYSQLI_BOTH);
			$serial = $email ;
			if(!include ('sqli.php')){die('<font color="red">Incomplete task, please try again!!</font>');}
			$pword = $row['password'];
				if (password_verify($pin, $pword) && $email == $row['email']){
					$loginName = $email;
					$password = $pass;
					include ('sq.php');
			if($update = $db->query("
UPDATE faculty SET password='$password' WHERE email='$email'")){
	{die('<font color="green">Password set!!  <a href="staff.php">click here to log-in</a></font>');}
}else{die('<font color="red">Incomplete task, please try again!!</font>');}}else
	{die('<font color="red">Invalid credentials, please try again!!</font>');}}}
		
	else{die('<font color="red">Password does not match!!</font>');}
	
	}




?>