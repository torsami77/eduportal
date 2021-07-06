<?php

include ('certs.php');
$page = 'registrar';
include ('manage.php');
?>
<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Office of the Registrar</title>
</head>
<body>
<div class="form" style="margin:auto auto; width:75%;">
<?php
include('links.php');
?>
</div>

<div class="form" style="margin:auto auto; width:75%;">
<fieldset>
<legend>ENROL A CURRENT STUDENT</legend>
<form action="" method="POST">
<p><input type="text" name="first" placeholder="First Name" required/></p>
<p><input type="text" name="surname" placeholder="Surname" required/></p>
<p><input type="text" name="other" placeholder="Other Name" required/></p>
<p><input type="text" name="pnumber" placeholder="Phone Number" required/></p>
<p><input type="text" name="addnum" placeholder="Admission Number" required/></p>
<p><input type="text" name="caddnum" placeholder="Confirm Admission Number" required/></p>
<p><input type="email" name="email" placeholder="Student's Email" required/></p>
<p><input type="email" name="cemail" placeholder="Confirm the Email" required/></p>
<p><input type="number" name="adstatus" placeholder="Admission Status" required/></p>
<p><input type="number" name="duration" placeholder="Duration Given" /></p>
<p><textarea name="detail" rows="10" columns="90">If Admission status is probation; provide details</textarea></p>

<p><?php include('programme.php');?></p>
<p>Date of Admission &#40;The period this student started study&#41;</br>
<input type="date" name="admitted" placeholder="yyyy-mm-dd"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required/><font color="red">*</font></p>
<p>Confirm Date &#40;The period this student started study&#41;</br>
<input type="date" name="cadmitted" placeholder="yyyy-mm-dd"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required/><font color="red">*</font></p>

<p><input type="submit" name="enrol" value="Enrol Student" /></p>
</form>

<?php
if(ISSET($_POST['enrol'])){
if(EMPTY($_POST['addnum']) || EMPTY($_POST['caddnum']) || EMPTY($_POST['email']) || EMPTY($_POST['cemail'])
|| EMPTY($_POST['programme']))
{die('<font color="red">All fields are required!!!</font>');
}else{
		$pnumber = $db->real_escape_string(strip_tags($_POST['pnumber']));
		$addnum = $db->real_escape_string(strip_tags($_POST['addnum']));
		$caddnum = $db->real_escape_string(strip_tags($_POST['caddnum']));
		$email = $db->real_escape_string(strip_tags($_POST['email']));
		$cemail = $db->real_escape_string(strip_tags($_POST['cemail']));
		$admitted = $db->real_escape_string(strip_tags($_POST['admitted']));
		$cadmitted = $db->real_escape_string(strip_tags($_POST['cadmitted']));
		$programme = $db->real_escape_string(strip_tags($_POST['programme']));
		$adstatus = $db->real_escape_string(strip_tags($_POST['adstatus']));
		$duration = $db->real_escape_string(strip_tags($_POST['duration']));

		if($adstatus == 1){
		$adstatus = 'Provisional';
	}elseif($adstatus == 2){
		$adstatus == 'Probasional';
	}else{die('<font color="red">Enter proper values for Admission Status...</font>');}

	if($duration != 2 or $duration != 3){$duration = 0;}
	if($adstatus != 2){$detail = null;}else{$detail = $db->real_escape_string(strip_tags($_POST['detail'])); }

if(($addnum != $caddnum) && ($email != $cemail) && ($admitted != $cadmitted)){
	echo '<font color="red">Admission number/Date of admission or Email matches do not corespond, enter again!!!</font>';
}else{
	$passcode = mt_rand (10000, 99999);
	$passcod = $passcode;

	$message = "
	<br/>
	Hi,<br/>
	<br/>
	You are receiving this email because, someone has used this email to enrol entry </br>
	on ".$website."
	<p/>If you are aware and this is your email,
	<a href='http://www.".$institution.".sch.ng/schangepassword.php'>click here</a>
	 to use your I.D. number, email and ".$passcod." as password inorder to create your password, </br>
	 else kindly disregard this email .</br>
	<p/>
	Thank you!!<br/>
	<br/>
	Registrar<br/>
	<br/>
	www.".$institution.".sch.ng"
	;



	$result = $db->query("SELECT * FROM students WHERE addnum = '$addnum'") ;
if($result->num_rows){
	if(!ISSET($_SESSION)){SESSION_START();}
	$_SESSION['ad']=$addnum;
	$_SESSION['mail']=$email;
	$_SESSION['pr']=$programme;
	$_SESSION['passcode']=$passcode;
	echo '<fieldset>
		<lengend>Update?</legend>
		<form action="" method="POST">
		<p><font color="blue">A student already exist with the Admission Number '.$addnum.',
		would you like to update the student data?</font></br>
		<font color="red">N.B: Student must return to email to get passcode for log in... </font></p>
		<p>
		<input type="hidden" name="pnumber" value="'.$pnumber.'" />
		<input type="hidden" name="adstatus" value="'.$adstatus.'" />
		<input type="hidden" name="duration" value="'.$duration.'" />
		<input type="hidden" name="detail" value="'.$detail.'" />
		<input type="submit" name="yes" value="Yes" />
		<input type="submit" name="no" value="No" />
		</p>
		</form>
		</fieldset>
	' ;
}else{
		$subject = 'Create Password' ;
		$office = 'Registrar';

include ('sq.php');

	$register = "REPLACE INTO `students`
		(`id`, `addnum`, `email`, `programme`, `admitted`, `password`, `adstatus`, `duration`, `probation`, `pnumber`)
		VALUES
		(NULL, '$addnum', '$email', '$programme', '$admitted', '$passcode', '$adstatus', '$duration', '$detail', '$pnumber')" ;
		include ('email.php');
		if ($mail == false){
			die('<font color="red">Please try again...</font>');
		}
	if ($db->query($register)) {
		die('<font color="green"> Student Enrolled Successfully, Check Email for Verification link...</font></br>
		');
}else{die($db->error);}
}}}}
if(ISSET($_POST['no'])){
	if(!ISSET($_SESSION)){SESSION_START();}
	UNSET($_SESSION['ad'],$_SESSION['mail'],$_SESSION['pr']);
	header ("location: enrolment.php");
}
if(ISSET($_POST['yes'])){
	$adstatus = $db->real_escape_string(strip_tags($_POST['adstatus']));
	$duration = $db->real_escape_string(strip_tags($_POST['duration']));
	$detail = $db->real_escape_string(strip_tags($_POST['detail']));
	$pnumber = $db->real_escape_string(strip_tags($_POST['pnumber']));


	if(!ISSET($_SESSION)){SESSION_START();}
	if(!ISSET($_SESSION['pr'])){header ("location: enrolment.php");	}
	$addnum = $_SESSION['ad'];
	$email = $_SESSION['mail'];
	$programme = $_SESSION['pr'];

include ('sq.php');

	$db->query("UPDATE students SET `email`='$email',`programme`='$programme', `password`='$passcode', `adstatus` = '$adstatus', `duration`='$duration',
`probation` = '$detail', `pnumber`='$pnumber'	WHERE `addnum`='$addnum'") or die($db->error);
	UNSET($_SESSION['ad'],$_SESSION['mail'],$_SESSION['pr']);

	include ('email.php');
	if ($mail == false){
		die('<font color="red">Please try again...</font>');
	}
	die('<font color="green">Student Account Updated Successfully and...</font></br>
		');
}


?>


</fieldset>
<p style="float:right;"><a href="registrar.php">Return to Home Page</a></p>
</div>

</body>
</html>
