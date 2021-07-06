<fieldset>
<legend>LOG-IN</legend>
<form action="" method="POST">
<p style="text-align:left;">Prospective and returning students should use this interface to log-in...</p>
<p><input type="text" name="addnum" placeholder="Application or Matric N0" /></p>
<p><input type="email" name="email" placeholder="Email" /></p>
<p><input type="password" name="password"  placeholder="Password" /></p>
<p><input type="submit" name="login" value="Log-in" /></p>
<br/>
</form>


<?php
if(ISSET($_POST['login'])){
	if(ISSET($_POST['addnum'])){
		$addnum = $db->real_escape_string(strip_tags($_POST['addnum']));}
$result = $db->query("SELECT * FROM students WHERE addnum = '$addnum'") ;
if($result == false){
	echo '<font color="red">Invalid login credentials!!!</font>' ;

}else{
$row = $result->fetch_array(MYSQLI_BOTH);
$loginName = $db->real_escape_string(strip_tags($_POST['email']));
$password = $db->real_escape_string(strip_tags($_POST['password']));
if(!include ('sqli.php')){header ("location: index.php");}
$pword = $row['password'];
if (password_verify($password, $pword) && $addnum == $row['addnum'] && $loginName == $row['email']){
if(!ISSET($_SESSION)){SESSION_START();}
$_SESSION['addnum'] = $addnum;
$_SESSION['namelogin'] = $loginName;
header ("location: welcome.php");}else{
	echo '<font color="red">Invalid login credentials!!!</font>' ;

};
}
}
?>

<p><a href="precovery.php">Forgot password?</a></p>
</fieldset>
