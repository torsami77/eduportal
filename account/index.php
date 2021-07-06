<?php
include ('../cert.php');
?>
<html>
<head>
<title>Account Department</title>
<LINK REL="StyleSheet" HREF="../css.css" TYPE="text/css" MEDIA="all"/>
<style>
</style>
</head>
<body>

<fieldset style="width:30%; margin:0 auto;">
<legend><strong>ACCOUNT OFFICIAL</strong></legend>
<form action="" method="POST">
<p><input type="email" name="email" placeholder="Email address" required/></p>
<p><input type="password" name="password" placeholder="Password" required/></p>
</br>
<input type="submit" name="login" value="Login" />
</form>
<?php
if (ISSET($_POST['login'])){
$pin = $db->real_escape_string(strip_tags($_POST['password'])) ;
$pinn = $db->real_escape_string(strip_tags($_POST['password'])) ;
$serial = $db->real_escape_string(strip_tags($_POST['email'])) ;

$result = $db->query("SELECT * FROM bankdetails WHERE email = '$serial'") ;
if($result == TRUE){

	$row = $result->fetch_array(MYSQLI_BOTH);
$pword = $row['password'];
if(!include '../sqli.php'){die ('<font color="red">Site under update, please try again later...</font>');}
if (password_verify($pin, $pword)){
if(!ISSET($_SESSION)){SESSION_START();}
$_SESSION ['email']= "$serial";
$_SESSION ['id']= $row['id'];
$_SESSION ['bank']= $row['bank'];
header ("location: transactions.php");
}elseif(password_verify($pinn, $pword)){
if(!ISSET($_SESSION)){SESSION_START();}
$_SESSION ['email']= "$serial";
$_SESSION ['id']= $row['id'];
header ("location: verrify.php");
}else{
	die('<font color="red">Invalid log-in credentials!!</font>');
}
}else{
	die('<font color="red">Invalid log-in credentials!!</font>');
}
}
?>



<div style="background:white; text-align:center;">
<img src="images/download.png" width="40" height="40"/>
<img src="images/download.jpg" width="40" height="40"/>
<img src="images/download1.jpg" width="40" height="40" />
<img src="images/download2.jpg" width="40" height="40" />
<img src="images/download3.jpg" width="40" height="40" />
</div>

</fieldset>

</body>
</html>
