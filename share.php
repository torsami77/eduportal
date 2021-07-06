<?php
include ('certs.php');
?>

<html>
<head>
<title>Share credit unit&#40;s&#41;</title>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
</style>
</head>
<body>
<fieldset style="width:30%;">
<legend>Share credit unit&#40;s&#41; with fellow student&#40;s&#41;</legend>
<form action="" method="POST" >
<p>Enter the admission number of the student you want to share with</br>
<input type="text" name="reciever" size="30" placeholder="Receipient's Matric Number" required/></p>
<p>Enter amount to share</br>
<input type="number" name="amount" placeholder="Amount to share" required/></p>
<p>Enter your password</br>
<input type="password" name="password" placeholder="Password" required/></p>
<input type="submit" name="share" value="Share" />
</form>

<?php
if (ISSET($_POST['share'])){
	if(isset($_POST['amount'])){$share = $db->real_escape_string(strip_tags($_POST['amount']));
	if($share < 1){die('<font color="red">Invalid amount to share!!</font>');}else{$shared=$share;}}else
		{echo'<font color="red">Enter required fields</font>';}
	if(isset($_POST['reciever'])){$reciever = $db->real_escape_string(strip_tags($_POST['reciever']));}else
		{echo'<font color="red">Enter required fields</font>';}

		$loginName = $row['email'];
		$password = $db->real_escape_string(strip_tags($_POST['password']));
		if(!include ('sqli.php')){die ('<font color="red">Request not completed, please try again...</font>');}
		$pword = $row['password'];
		if (password_verify($password, $pword) && $loginName == $row['email']){


		$bal = $row['balance'];
		$value = $row['balance'] - $share;
	if($value < 0){echo'<font color="red">You dont have upto N'.$share.' amount unit&#40;s&#41; to share ...</font>';}else{
		$result = $db->query("SELECT `balance` FROM `students` WHERE `addnum`='$reciever'") ;
		if($result->num_rows)
		{
		$rw = $result->fetch_array(MYSQLI_BOTH);
		$share=$share+$rw['balance'];
		$rwbal=$rw['balance'];
		$db->query("UPDATE students SET balance='$value' WHERE addnum='$addnum'");
		$db->query("UPDATE students SET balance='$share' WHERE addnum='$reciever'");
		$to = 'To '.$reciever ;
		$from = 'From '.$addnum;
		if(!$insert = $db->query("INSERT INTO transactions
	(`addnum`, `payment`, `previous`, `amount`, `teller`, `bank`, `branch`, `date`)
	VALUES ('$addnum', 'Tuition Sharing', '$bal', '$shared', 'Transferred', 'Share Service', '$to', NOW() )"))
	{die($db(mysqli_error));};
	if(!$insert = $db->query("INSERT INTO transactions
	(`addnum`, `payment`, `previous`, `amount`, `teller`, `bank`, `branch`, `date`)
	VALUES ('$reciever', 'tuition', '$rwbal', '$shared', 'Recieved', 'Share service', '$from', NOW() )"))
	{die($db(mysqli_error));};
		echo '<font color="green">Credit unit&#40;s&#41; shared successfully </font>';
		}else{
			echo '<font color="red">No Student found with recieving Matric number...</font>';
		}

	}

}else{die ('<font color="red">Incorrect password, please try again..</font>');}


}


?>



</br>
</br>
</br>
<p><input type='button' value='Return to my home page' onclick='location.href="welcome.php"' /></p>
</fieldset>

</body>
</html>
