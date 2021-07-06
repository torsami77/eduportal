<?php
include('cert.php');
?>
<html>
<head>
<title>Change your password!!</title>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
</style>
</head>
<body>

<fieldset class="form">
<legend>Change Password</legend>
<form action="" method="POST" >
<p>Application or Admission Number</br>
<input type="addnum" name="addnum" placeholder="I.D. Number" required /></p>
<p><input type="email" name="email" placeholder="Enter Your Email" required /></p>
<p><input pattern=".{8,}" type="password" name="current" placeholder="Enter Current Password" required /></p>
<p><input pattern=".{8,}" type="password" name="new" placeholder="Create New Password" required /></p>
<p><input pattern=".{8,}" type="password" name="verrify" placeholder="Verrify Password" required /></p>
<p><input type="submit" name="changed" value="Change my password" /></p>
</form>

<?php
if(ISSET($_POST['changed'])){
	if(empty($_POST['email']) || empty($_POST['new']) || empty($_POST['current']) ||
	empty($_POST['verrify']) || empty($_POST['addnum']))
	{
		die('<font color="red">All fields are required !!</font>');
	}else{
		$ad = $db->real_escape_string(strip_tags($_POST['addnum']));
		$loginName = $db->real_escape_string(strip_tags($_POST['email']));
		$password = $db->real_escape_string(strip_tags($_POST['current']));
		$new = $db->real_escape_string(strip_tags($_POST['new']));
		$verrify = $db->real_escape_string(strip_tags($_POST['verrify']));
		if($new != $verrify){
			die('<font color="red">Password do not match!!</font>');
		}else{
			$result = $db->query("SELECT * FROM `students` WHERE `email`='$loginName' AND `addnum`='$addnum'") ;
		if(!$result->num_rows){
			die('<font color="red">Invalid Email or Current Password!!</font>');
			}else{
			$row = $result->fetch_array(MYSQLI_BOTH);
			if(!include ('sqli.php')){die('<script>alert("Incomplete task, try again!!!")</script>');}
			$pword = $row['password'];
				if (password_verify($password, $pword) && $loginName == $row['email']){
					$password=$new;
					include('sq.php');
		$db->query("UPDATE students SET password='$password' WHERE email='$loginName' AND `addnum`='$addnum'");
		echo '
		<font color="green">Password changed successfully...</font>
		<p background-color="green"><a href="index.php">Click here to return to Login Page</a></p>

		';
		SESSION_UNSET();
		SESSION_DESTROY();

		}else{
		die('<font color="red">Invalid Email or Current Password!!</font>');

		}
	}

}}}
?>

</fieldset>

</body>
</html>
