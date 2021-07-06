<?php
include('cert.php');
?>

<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Edu-Portal</title>
</head>
<body>

<div style="width:30%; margin: 0 auto; text-align: center;" >
<fieldset>
<legend>REFEREE</legend>
<form action="" Method="POST">
<p><input type="email" name="email" placeholder="Email" /></p>
<p><input type="password" name="password" placeholder="Passcode" /></p>
<p><input type="submit" name="submit" value="Log-in" /></p>
</form>

<?php
if(isset($_POST['submit'])){
	if(isset($_POST['email'])){$loginName = $db->real_escape_string(strip_tags($_POST['email']));}else
		{die('<script>alert("Enter required fields")</script>');}
	if(isset($_POST['password'])){$password = $db->real_escape_string(strip_tags($_POST['password']));}else
		{die('<script>alert("Enter required fields")</script>');}

		$sn = substr ("$password", 0,1);
		$addnum = substr ("$password", 1,2);


		$result = $db->query("SELECT * FROM students WHERE addnum='$addnum'") ;
		if($result == false){
			die('<font color="red">Invalid Log-in credentials, try again!!!</font>');
			}else{
			$row = $result->fetch_array(MYSQLI_BOTH);
			if(!include ('sqli.php')){die('<script>alert("Incomplete task, try again!!")</script>');}
			$pword = $row['refpasscode'.$sn];
				if (password_verify($password, $pword) && $loginName == $row['refemail'.$sn]){
			SESSION_START();
			$_SESSION['addnu'] = $addnum;
			$_SESSION['sn'] = $sn;
			header ("location: refereeform.php");}else{
			{die('<font color="red">Invalid Log-in credentials, try again!!</font>');}}
}}

?>
</fieldset>
</div>

</body>
</html>
