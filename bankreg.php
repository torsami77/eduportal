<?php
include ('cert.php');
?>
<html>
<head>
</head>
<body>
<form action="" method="POST">

<p><input type="email" name="email" placeholder="EMAIL" required /></p>
<p><input type="text" name="bank" placeholder="CASHIER'S FULL NAMES" required /></p>
<p><input type="submit" name="submit" value="INCORPORATE" /></p>

</form>

<?php
if (ISSET($_POST['submit'])){
	$email = $db->real_escape_string(strip_tags($_POST['email']));
	$bank = $db->real_escape_string(strip_tags($_POST['bank']));
	$salt = mt_rand (10000, 99999);
	$pepper = mt_rand (10000, 99999);
	$pinn = $salt.$pepper;
	$pin = $salt.$pepper;
	$pin = password_hash($pin,PASSWORD_DEFAULT);
	$result = $db->query("SELECT * FROM bankdetails WHERE email = '$email'") ;
	if($result === TRUE){die ('<font color="red">Email already exist!!!</font>');}
	
	
	$inc = "INSERT INTO bankdetails (id, email, bank, password ) VALUES (NULL, '$email', '$bank', '$pin')" ;
	if($db->query($inc) === FALSE){
	die ($db(mysqli_error));
	}else{
	$subject = 'Incorporate Edu-Portal for '.$institution ;
	$office = 'algorised' ;
	$message = 'Hi,</br>
	Sequel to your application and agreement to be incorporated into the Edu-Portal Initiative for '.$institution.',
	navigate to the '.$institution.' portal <a href="'.$website.'/bank">'.$website.'/bank</a> use your provided
	</br> email address and PIN number as : '.$pinn.' to create password for your account.</br>
	Admin</br>
	Algorised.' ;
	include('email.php');
	echo $pinn.'</br>';
	echo $email ;
	}
	
}

?>
</body>
</html>