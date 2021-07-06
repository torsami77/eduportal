<?php
include ('../cert.php');
if(!ISSET($_SESSION)){SESSION_START();}
if(ISSET($_SESSION ['email'])){
$email = $_SESSION ['email'];
$id = $_SESSION ['id'];
}else{header ("location: index.php");}
?>
<html>
<head>
<title>Create your password</title>
<LINK REL="StyleSheet" HREF="../css.css" TYPE="text/css" MEDIA="all"/>
</head>
<body>

<fieldset style="width:30%; margin:0 auto;">
<legend><strong>CREATE YOUR PASSWORD</strong></legend>
<form action="" method="POST">
<p><input type="password" name="password" placeholder="Create Your Password" required/></p>
<p><input type="password" name="vpassword" placeholder="Verrify the password" required/></p>
</br>
<input type="submit" name="create" value="Create Password" />
</form>

<?php
if (ISSET($_POST['create'])){
	$password = $db->real_escape_string(strip_tags($_POST['password']));
	$vpassword = $db->real_escape_string(strip_tags($_POST['vpassword'])) ;
	if ($password != $vpassword){
		die('<font color="red">Password does not match, please try again...</font>');
	}else{
		$loginName=$email ;
		if (!include '../sq.php'){die ('<font color="red">Site under update, please try again later1...</font>');}
if($insert = $db->query("
UPDATE bankdetails SET password='$password', date=NOW() WHERE id='$id' AND email='$email'")){
	$subject = 'Edu-Portal incorporation for '.$institution.' successfully' ;
	$office = 'algorised' ;
	$message = 'Hi,</br>
	This is just to confirm to that your incorporation account for '.$institution.' has been created successfully.</br>
	and so your bank can now participate on the <a href="'.$website.'/bank" >'.$website.'/bank</a> portal.</br>
	Admin</br>
	Algorised.' ;
	include('../email.php');
	SESSION_DESTROY();
	echo ("<script>alert('Password created successfully, you can now login')</script>");
	header ("location: index.php");
}else{
	die('<font color="red">Requested task not completed, please try again...</font>');
}
	}
	
	
}
?>
</fieldset>


</body>
</html>