<?php
include('certs.php');
?>
<html>
<head>
<title>Change your password!!
</title>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
</style>
<body>

<fieldset class="form">
<legend>Change Password</legend>
<form action="" method="POST" >
<p><input type="email" name="email" placeholder="Enter Your Email" required /></p>
<p><input type="password" name="current" placeholder="Enter Current Password" required /></p>
<p><input type="password" name="new" placeholder="Create New Password" required /></p>
<p><input type="password" name="verrify" placeholder="Verify Password" required /></p>
<p><input type="submit" name="changed" value="Change my password" /></p>
</form>
<?php
if(ISSET($_POST['changed'])){
	if(empty($_POST['email']) || empty($_POST['current']) || empty($_POST['new']) || empty($_POST['verrify']))
	{
		die('<font color="red">All fields are required !!</font>');
	}else{
		$loginName = $db->real_escape_string(strip_tags($_POST['email']));
		$password = $db->real_escape_string(strip_tags($_POST['current']));
		$new = $db->real_escape_string(strip_tags($_POST['new']));
		$verrify = $db->real_escape_string(strip_tags($_POST['verrify']));
		if($loginName != $email){
			die('<font color="red">You must log in with requesting email!!</font>');
		}
		
		if($new != $verrify){
			die('<font color="red">New Password do not match!!</font>');
		}else{
			$result = $db->query("SELECT * FROM `faculty` WHERE `email`='$loginName'") ;
		if($result == false){
			die('<font color="red">Invalid Email or Current Password!!</font>');
			}else{
			$rw = $result->fetch_array(MYSQLI_BOTH);
			if(!include ('sqli.php')){die('<script>alert("Incomplete task, try again!!!")</script>');}
			$pword = $rw['password'];
				if (password_verify($password, $pword) && $loginName == $rw['email']){
					$password=$new;
					include('sq.php');
		$db->query("UPDATE faculty SET password='$password' WHERE email='$loginName'");
		echo '
		<font color="green">Password changed successfully...</font>
		<p background-color="green"><a href="staff.php">Click here to return to Login Page</a></p>
		
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