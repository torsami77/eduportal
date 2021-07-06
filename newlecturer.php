<?php

include ('certs.php');
$page = 'dean';
include ('manage.php');
?>
<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Office of the Academic Dean</title>
</head>
<body>

<div style="width:500px; margin:0 auto;">
</br>
<p><input type='button' value='<- BACK TO HOME PAGE' onclick='location.href="dean.php"' /></p>
</br></br>
<fieldset>
<legend>ADD A NEW LECTURER</legend>
<form action="" Method="POST">
<p><input type="text" name="surname" placeholder="Surname" required/></p>
<p><input type="text" name="firstname" placeholder="First Name" required/></p>
<p><input type="text" name="other" placeholder="Other Name" /></p>
<p><input type="text" name="initials" placeholder="Initials" required/></p>
<p><input type="text" name="title" placeholder="Title" required/></p>
<p><input type="email" name="email" placeholder="Email Address" required/></p>
<p><input type="submit" name="lecturer" value="Add" /></p>
</form>
</br>
<?php
if (isset($_POST['lecturer'])){
if ( !empty($_POST['surname']) && !empty($_POST['firstname']) && !empty($_POST['initials']) && !empty($_POST['email']) )
{
if (isset($_POST['email'])){$email = $db->real_escape_string(strip_tags($_POST['email'])) or die ('<font color="red">Site under update, please try again later...</font>');}
$result = $db->query("SELECT email FROM faculty WHERE email='$email'") or die ('Incomplete task, Please try again');
if($result->num_rows){
die('<script>alert("Please the email you are trying to use is associated with another Lecturer")</script>');}else{
if (isset($_POST['surname'])){$surname = $db->real_escape_string(strip_tags($_POST['surname'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if (isset($_POST['firstname'])){$firstname = $db->real_escape_string(strip_tags($_POST['firstname'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if (isset($_POST['other'])){$other = $db->real_escape_string(strip_tags($_POST['other']));}else{$other='';}
$title = $db->real_escape_string(strip_tags($_POST['title']))
if (isset($_POST['initials'])){$initials = $db->real_escape_string(strip_tags($_POST['initials'])) or die ('<font color="red">Site under update, please try again later...</font>');}
   $result = $db->query("SELECT initials FROM faculty WHERE initials='$initials'") or die ('Incomplete task, Please try again');
if($result->num_rows){
die('<script>alert("Please the Initials you are trying to use is associated with another Lecturer")</script>');}else{

   $pass = mt_rand (10000, 99999);
   $password = $pass;
   $loginName = $email;
   include('sq.php');
if ($insert = $db->query("INSERT INTO faculty (id, surname, firstname, othername, initials, title, email, password, date)
VALUES (NULL, '$surname', '$firstname', '$other', '$initials', '$title', '$email', '$password', NOW())")){
	$office = 'Dean';
	$subject = 'Set your Password';
	$message = '<p>Hi '.$firstname.'</p>,</br>
	You receive this message because your email has been used to sign-up as a faculty on the '.$institution.'
	portal. To proceed; click on <a href="www.'.$institution.'.sch.ng/newfaculty.php"> SET PASSWORD </a>, provide '.$pass.' as your pin number and set your password</br>
	<p>Thank you</br>Office of the Dean</br>'.$institution.'</p>';
	include ('email.php');
	if($mail==true){
		die("<font color='green'>Lecturer added and password link sent to lecturer's email</font>");
		}else{
	die('<font color="red">Lecturer not added, please try again...</font>');
	}


}}
}}else{
	echo '<font color="red">Enter all required fields!!</font>';
	echo '<script>alert("Enter all required fields!!")</script>';}

}
?>
</fieldset>
</div>

</body>
</html>
