<?php

include ('../certs.php');
if(!ISSET($_SESSION)){SESSION_START();}
if(ISSET($_SESSION ['bank'])){
$email = $_SESSION ['email'];
$bankid = $_SESSION ['id'];
$bank = $_SESSION ['bank'];
$branch = $bank;
}else{
	SESSION_UNSET();
	header ("location: index.php");}
$currentyear = date('Y', strtotime(date("y-m-d"))) ;
?>
<html>
<head>
<title>Transactions</title>
<LINK REL="StyleSheet" HREF="../css.css" TYPE="text/css" MEDIA="all"/>
<style>
</style>
</head>
<body>
<fieldset>
<div style="float:right;"><?php echo '<h2>Hello, '.$bank.'</h2>' ; ?>
<input type='button' value='LOG-OUT' onclick='location.href="loggedout.php"' />
</div>
</fieldset>

<div style="float:right;width:45%; margin:0 auto;">
<fieldset>
<legend><strong>Purchase Application Form</strong></legend>
<font color="blue">*Carefully corespond selected programme to collected amount..</font>
<form action="" method="POST">
<?php include('../programme.php'); ?>
<p>
<select name="bankid" required >
	<option value="" >Select Receiving Bank</option>
	<option value="Access Bank">Access Bank</option>
	<option value="Diamond Bank">Diamond Bank</option>
	<option value="First Bank">First Bank</option>
	<option value="Sterling Bank">Sterling Bank</option>
	<option value="U.B.A.">U.B.A.</option>
	<option value="Zenith Bank">Zenith Bank</option>
</select>
</p>
<p><input type="text" name="teller" placeholder="Teller Number" required/></p>
</br>
<input type="submit" name="purchase" value="Purchase" />
</form>

<?php
if (ISSET($_POST['purchase'])){
	$programme = $db->real_escape_string(strip_tags($_POST['programme']));
	$bankid = $db->real_escape_string(strip_tags($_POST['bankid']));
	$teller = $db->real_escape_string(strip_tags($_POST['teller']));
	include('amount.php');

	$find = $db->query("SELECT * FROM transactions WHERE teller = '$teller'") ;
if($find->num_rows){
	$row = $find->fetch_array(MYSQLI_BOTH);
	echo '<font color="red">Teller already used for student with <strong>ID: '.$row['addnum'].'</strong></font>';

}else{

	if($insert = $db->query("INSERT INTO `security`
	(`programme`, `branch`, `bank`, `signed-up`)
	VALUES ('$programme', '$branch', '$bankid', '' )"))
	{

/*
$create = "INSERT INTO security (`id`, `programme`, `branch`,`bank` )
VALUES (NULL, '$programme', '$branch','$bankid')";
if ($db->query($create)) {
*/

    $lastid = $db->insert_id;
	$addnum= $currentyear.$lastid ;

	$identify=$lastid;
	$pepper= mt_rand (10000, 99999);
	$value = $amount;
	$salt = mt_rand (10000, 99999);
	$transcode = $identify.'-'.$pepper.'-'.$value.'-'.$salt ;
	$pin = $identify.'-'.$pepper.'-'.$value.'-'.$salt ;
	$serial = $teller;
	if(!include '../sq.php'){die ('<font color="red">Site under update, please try again later...</font>');}


	$form = $pr.' ( '.$programmed.' ) ';

	$db->query("INSERT INTO students (`addnum`,`programme`) VALUES ('$addnum','$programme')");
	$db->query("INSERT INTO referee (`addnum`) VALUES ('$addnum')");
	$db->query("INSERT INTO transactions (`addnum`, `payment`, `amount`, `teller`, `bank`, `branch`, `date`)
	VALUES ('$addnum', '$form', '$amount', '$teller', '$bankid', '$branch', NOW() )");

	if($update = $db->query("
UPDATE security SET addnum='$addnum', transcode='$pin', teller='$teller', date=NOW()
WHERE id='$lastid'"
)){	if(!ISSET($_SESSION)){SESSION_START();}
	$_SESSION['teller']= "$teller" ;
	$_SESSION['bankid']= "$bankid";
	$_SESSION['transcode']= "$transcode";
	$_SESSION['branch']= "$branch";
	$_SESSION['programme']= "$programme";
	$_SESSION['amount']= "$value";
	$_SESSION['form']= "form";
	header ("location:print.php");
	}else{die($db(mysqli_error));};
}else{die($db->error);};
}
}
?>
</fieldset>
</br>
</p>



<fieldset>
<legend><strong>Make Payment&#40;s&#41;</strong></legend>
<div style="width:50%; float:right; padding:0 0 0 40; ">
<fieldset>
<legend>Upload Tuitions(only) from file using template</legend>
<a href="template.xlsx" style="float:right;">Click here to download template</a>
<form action="" method="POST" enctype="multipart/form-data" >
<p><input type="file" name="file" /></p>
<p><input type="submit" name="upload" value="Upload" /></p>
</form>
<?php
if(ISSET($_POST['upload'])){

include ('xls.php');

}

?>
</fieldset>
</div>

<form action="" method="POST" >
<p><select name="payment" required>
	<option value="tuition">Tuition</option>
	<option value="deferment">Deferment</option>
</select></p>
<p><input type="text" name="addnum" placeholder="Admission Number" required/></p>
<p><input type="text" name="teller" placeholder="Teller Number" required/></p>
<p>&#40;Enter amount below without comma&#40;s&#41;&#41; </br>
N <input type="number" name="amount" placeholder="Amount" required/> .00</p>
<select name="bankid" required >
	<option value="" >Select Receiving Bank</option>
	<option value="Access Bank">Access Bank</option>
	<option value="Diamond Bank">Diamond Bank</option>
	<option value="First Bank">First Bank</option>
	<option value="Sterling Bank">Sterling Bank</option>
	<option value="U.B.A.">U.B.A.</option>
	<option value="Zenith Bank">Zenith Bank</option>
</select>
<p><input type="submit" name="tution" value="Make payment" /></p>
</form>
<?php
if (ISSET($_POST['tution'])){
	$addnum = $db->real_escape_string(strip_tags($_POST['addnum']));
	$bankid = $db->real_escape_string(strip_tags($_POST['bankid']));
	$teller = $db->real_escape_string(strip_tags($_POST['teller']));
	$amount = $db->real_escape_string(strip_tags($_POST['amount']));
	$payment = $db->real_escape_string(strip_tags($_POST['payment']));

if($addnum == '' || $bankid == '' || $teller == '' || $amount == '' || $payment == ''){die ('<font color="red">All fields are required..</font>');}

	$find = $db->query("SELECT * FROM transactions WHERE teller = '$teller'") ;
	$row = $find->fetch_array(MYSQLI_BOTH);
if($find->num_rows){
	echo '<font color="red">Teller already used for student with <strong>ID: '.$row['addnum'].'</strong></font>';
}else{
	$balance = $db->query("SELECT `balance` FROM `students` WHERE addnum = '".$addnum."'") ;
	if ($balance != TRUE){die ('<font color="red">No student found with the given Admission number..</font>');}else{
		$bal = mysqli_fetch_array($balance);$balance = $bal['balance'];
	$previous = $balance ;
	$balance = $balance + $amount ;

	if(!$insert = $db->query("INSERT INTO transactions
	(`addnum`, `payment`, `previous`, `amount`, `teller`, `bank`, `branch`, `date`)
	VALUES ('$addnum', '$payment', '$previous', '$amount', '$teller', '$bankid', '$branch', NOW() )"))
	{die($db(mysqli_error));};

		if($update = $db->query("
UPDATE students SET balance='$balance'
WHERE addnum='$addnum'"
)){
	if(!ISSET($_SESSION)){SESSION_START();}
	$_SESSION['teller']= "$teller" ;
	$_SESSION['bankid']= "$bankid";
	$_SESSION['branch']= "$branch";
	$_SESSION['addnu']= "$addnum";
	$_SESSION['amount']= "$amount";
	$_SESSION['tution']= "$payment";
	header ("location: print.php");
	}else{die($db(mysqli_error));};
}
}
}
?>

</fieldset>
</div>


<div>
<fieldset style="width:45%; float:left;">
<legend><strong>Tuition Rate&#40;s&#41;</strong></legend>
<font color="blue">*Carefully corespond selected programme to collected amount..</font>
<?php// include('tuitions.php');?>
<p>- Undergraduate Application Form --- N3, 500. 00</p>
<p>- Postgraduate Application Form ---  N5, 500. 00</p>
</fieldset>
</div>
</br>
</br>
</br>
<div>
<fieldset class="form" style="float:left; width:45%;">
<legend>Check transaction&#40;s&#41;</legend>
<fieldset>
&emsp;
<legend>View all</legend>
<form action="" method="POST" >
<p>From:
<input type="date" name="from" placeholder="yyyy-mm-dd"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required/></p>
<p>To:&emsp;
<input type="date" name="to" placeholder="yyyy-mm-dd"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required/></p>
<p>&emsp;&emsp;&emsp;<input type="submit" name="all" value="View all" /></p>
</form>

<?php
if (ISSET($_POST['all'])){
	$from = $db->real_escape_string(strip_tags($_POST['from']));
	$to = $db->real_escape_string(strip_tags($_POST['to']));
	$all = $db->query("SELECT * FROM `transactions` WHERE `date`='$from' || `date`>'$from' AND `date`<'$to' || `date`='$to'");
	if (!$all->num_rows){echo '<font color="blue">No record&#40;s&#41; found..</font>';
		}else{
			if(!ISSET($_SESSION)){SESSION_START();}
			$_SESSION['from'] = $from;
			$_SESSION['to'] = $to;
header ("location: viewreport.php");}}

?>
</fieldset>
</br>
</br>
</br>
<fieldset>
<legend>View Individual</legend>
<form action="" method="POST" >
<p>&emsp;&emsp;&emsp;<input type="text" name="individual" placeholder="Matric Number" required/></p>
<p>From:
<input type="date" name="from" placeholder="yyyy-mm-dd"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required/></p>
<p>To:&emsp;
<input type="date" name="to" placeholder="yyyy-mm-dd"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required/></p>
<p>&emsp;&emsp;&emsp;<input type="submit" name="view" value="View" /></p>
</form>
&emsp;
<?php

if (ISSET($_POST['view'])){
	$from = $db->real_escape_string(strip_tags($_POST['from']));
	$to = $db->real_escape_string(strip_tags($_POST['to']));
	$individual = $db->real_escape_string(strip_tags($_POST['individual']));
	$all = $db->query("SELECT * FROM `transactions` WHERE (`addnum`='$individual') AND (`date`='$from' || `date`>'$from') AND (`date`<'$to' || `date`='$to')
	");
	if (!$all->num_rows){echo '<font color="blue">No record&#40;s&#41; found..</font>';
		}else{
			if(!ISSET($_SESSION)){SESSION_START();}
			$_SESSION['from'] = $from;
			$_SESSION['to'] = $to;
			$_SESSION['individual'] = $individual;
header ("location: viewreport.php");}}

?>
</fieldset>
</fieldset>
</div>


<div style="width:45%; float:right;">
<fieldset>
<legend>Offer acceptable percentage for students</legend>
<form action="" method="POST" >
<input type="number" name="per" placeholder="Acceptable Percentage" required/>% &emsp;
<input type="submit" name="button" value="Update" /><p>
<?php
$check=$db->query("SELECT `status` FROM `faculty` WHERE `management`='bursar'");
$chk = mysqli_fetch_array($check);$check = $chk['status'];
if($check != ''){echo "<font color='red'>Current acceptable percentage is ".$check."%</font>";}


?>
</p></form>
<?php
if(ISSET($_POST['button'])){
$per = $db->real_escape_string(strip_tags($_POST['per']));

if($update = $db->query("
UPDATE faculty SET status='$per'
WHERE management='bursar'"
)){
	echo "<script>alert('Acceptable percentage updated successfully!!!')</script>" ;
	header("location:transactions.php");
}else{
echo "<script>alert('Acceptable percentage updated successfully!!!')</script>" ;
}


}

?>
</fieldset>
</div>


</body>
</html>
