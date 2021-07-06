<fieldset>
<legend>NEW APPLICANT</legend>
<p style="text-align: left;">
If you have a slip for application form, submit the Transaction code and Serial Number in-order to sign-up</p>

<form action="" method="POST" >
<p>000-00000-00000-00000</br>
<input type="text" name="transcode" placeholder="Transaction Code" required/></p>
<p><input type="text" name="teller" placeholder="Serial Number" required/></p>
<p><input type="submit" value="Sign up" name="submit"></p>
</form>
<?php

if (ISSET($_POST['submit'])){

$pin = $db->real_escape_string(strip_tags($_POST['transcode'])) ;
$serial = $db->real_escape_string(strip_tags($_POST['teller'])) ;

	$result = $db->query("SELECT * FROM `security` WHERE `teller` = '$serial' AND `signed-up` = ''") ;
if($result->num_rows){

	$row = $result->fetch_array(MYSQLI_BOTH);
if(!include 'sqli.php'){die ('<font color="red">Site under update, please try again later...</font>');}

$pword = $row['transcode'];
if (password_verify($pin, $pword) && $row['signed-up'] === ''){
if(!ISSET($_SESSION)){SESSION_START();}
$_SESSION ['teller']= "$serial";
$_SESSION ['addnum']= $row['addnum'];
$_SESSION ['prog']= $row['programme'];

header ("location: signup.php");

	} else {
    die('<font color="red"> Invalid Serial or Pin Number</font>');
};

}else{
	die ('<font color="red">Invalid Pin or Serial Number</font>');
};

}



?>
<div style="background:white;">
<p><a href="" >Click here to view participating banks</a></br>
<font color="red">... Coming soon ...</font></p>
<img src="images/card.png" /><img src="images/card1.png" /><img src="images/card2.png" /></a>
</div>


</fieldset>
