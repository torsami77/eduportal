<?php
include('cert.php');
?>

<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Edu-Portal</title>
</head>
<body>

<div style="width:30%; float:right; text-align: center;" >
<fieldset>
<legend>FACULTY & STAFF LOGIN</legend>
<form action="" Method="POST">
<p><input type="email" name="email" placeholder="Email" /></p>
<p><input type="password" name="password" placeholder="Password" /></p>
<p><input type="checkbox" name="checkbox" />Managerial privileges</p>
<p><input type="submit" name="submit" value="Log-in" /></p>
</form>

<?php
if(isset($_POST['submit'])){
	if(isset($_POST['email'])){$loginName = $db->real_escape_string(strip_tags($_POST['email']));}else
		{die('<script>alert("Enter required fields")</script>');}
	if(isset($_POST['password'])){$password = $db->real_escape_string(strip_tags($_POST['password']));}else
		{die('<script>alert("Enter required fields")</script>');}

	if(!isset($_POST['checkbox'])){
		$result = $db->query("SELECT * FROM `faculty` WHERE `email`='$loginName'") ;
		if($result == false){
			die('<script>alert("Invalid Log-in credentials, try again!!!")</script>');
			}else{
			$rw = $result->fetch_array(MYSQLI_BOTH);
			if(!include ('sqli.php')){die('<script>alert("Incomplete task, try again!!!")</script>');}
			$pword = $rw['password'];
				if (password_verify($password, $pword) && $loginName == $rw['email']){
			if(!ISSET($_SESSION)){SESSION_START();}
			$_SESSION['initials'] = $rw['initials'];
			$_SESSION['email'] = $rw['email'];
			header ("location: faculty.php");}else
	{die('<script>alert("1Invalid Log-in credentials try again!!")</script>');}}}

	else{
		$result = $db->query("SELECT * FROM `faculty` WHERE `email`= '$loginName'") ;
		$rw = $result->fetch_array(MYSQLI_BOTH);
		if($rw['management'] == ''){
			die('<script>alert("Invalid Log-in credentials try again!!")</script>');
			}else{
			if(!include ('sqli.php')){header ("location: staff.php");}
			$pword = $rw['password'];
if (password_verify($password, $pword) && $loginName == $rw['email']){
			if(!ISSET($_SESSION)){SESSION_START();}
			$_SESSION['initials'] = $rw['initials'];
			//$_SESSION['management'] = $rw['management'];
			$_SESSION['email'] = $rw['email'];
			$man = $rw['management'];
			header ("location: ".$man.".php");

}else
			{die('<script>alert("Invalid Log-in credentials try again!!")</script>');}}



}
}


?>
</fieldset>

</div>

</body>
</html>
