<?php
include ('certs.php');
	$dorm = $_SESSION['dorm'];
	$dorm = $db->query("SELECT * FROM dorm WHERE abb='$dorm'") ;
    $dm = $dorm->fetch_array(MYSQLI_BOTH) ;
	$dormitary = $dm['dormitary'];
	$dormfee = $dm['dormfee'];
	if(!ISSET($_SESSION)){SESSION_START();}
	$_SESSION['$dormid'] = $dm['id'];
	if($row['reglog'] == 0){$newstu = 4000;}else{$newstu = 0;};

	$charges = 7500 ;
	$tui=$dormfee + $charges+$newstu;

?>
<html>
<head>
<title>Course Registration</title>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
<style>
table{
    border-collapse: collapse;
    border: 2px solid red;
	width: 100%
	}

tr, td{
    border-collapse: collapse;
    border: 2px solid black;
	}
</style>
</style>
</head>
<body>
<?php

if (ISSET($_SESSION['prog'])){

	echo '<fieldset class="form">
		  <legend style="color:blue;">Register Course&#40;s&#41; </legend>
		  <form method="POST" action="">';
		  echo "<table>
	<tr style='font-weight:900; color:blue;'><td>&nbsp;Selected&nbsp;</td><td>&nbsp;Course Title&nbsp;</td>
	<td>&nbsp;Course Code&nbsp;</td><td>&nbsp;Credit hour&nbsp;</td><td>&nbsp;Tuition&nbsp;</td></tr>";

	$total = 0;
	$prog = $_SESSION['prog'];
		foreach($prog as $selected){
	$courses = $db->query("SELECT * FROM `courses` WHERE `id` = '$selected'") ;
	while($rw=mysqli_fetch_array($courses)){
		$total=$total + $rw['hour'];
			echo
'<tr>
<td>&emsp;&#10004;<input type="hidden" name="prog[]" value="'. $rw['id'].'" /></td><td>&nbsp;'
. $rw['title'].'&nbsp;</td><td>&nbsp; ' . $rw['code'].'&nbsp;</td><td>&nbsp; ' . $rw['hour'].
'</td><td>&nbsp; N'. $credithour * $rw['hour'].'</td></tr>';
	}

	}
$total = $total * $credithour + $tui;
echo"</table></br></br></br><table>";
echo "<tr style='font-weight:900; color:blue;'><td>&nbsp;Selected&nbsp;</td><td>&nbsp;Items&emsp;
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 &emsp;&emsp;</td><td>&nbsp;Tuition&nbsp;</td></tr>" ;

if($row['reglog'] == 0){
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Non-Refundable Medical Deposit</td><td>&nbsp;N3000</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;I.D. Card</td><td>&nbsp;N1000</td></tr>" ;
}
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Accomodation &#40; ".$dormitary." &#41;</td><td>&nbsp;N".$dormfee."</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Compound Improvement</td><td>&nbsp;N1500</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Student Council Fees</td><td>&nbsp;N1000</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Educators</td><td>&nbsp;N400</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Sports</td><td>&nbsp;N300</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Utility</td><td>&nbsp;N1500</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;I.C.T.</td><td>&nbsp;N1500</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Library Charges</td><td>&nbsp;N300</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Administrative Charges</td><td>&nbsp;N1000</td></tr>" ;
echo '<tr><td colspan="2">&emsp;&nbsp;Total: </td><td><font color="red">&nbsp;N' .$total. '</font></td></tr>' ;
echo '</table>';
echo'
</br>';

$bursary = $db->query("SELECT `status` FROM `faculty` WHERE management = 'bursar'") or die (mysqli_error($db));
		$burs = mysqli_fetch_array($bursary);$bursary = $burs['status'];

$percentage=$total/100*$bursary ;
$equation=$row['balance']-$total;

//if($equation < 0){
if($row['balance'] < $percentage ){
	echo '<font color="red">You do not have enough credit units to register for the selected course&#40;s&#41;!!
	Please contact the bursary for more information</font>
	<div><a href="courseregistration.php">
	click here to go back to previous page</a></div>';
}else{echo'<font color="green">If you proceed with registration, <font color="red">N'.$total.'</font> will be deducted from your credit unit&#40;s&#41;</font>
</br></br>
<input type="submit" name="register" value="Register" /></form>
<div style="float:right;"><a href="courseregistration.php">
	I do not want to proceed now, take me to previous page</a></div>
</fieldset>';}
echo '
</fieldset>
<fieldset class="form">
<legend>Credit Unit&#40;s&#41;</legend>
<div style="float:right;">
<strong>Balance: <font color="green">N'.$row['balance'].'</font></strong>
</div>
</fieldset>
';



}else{
	die('
	<fieldset class="form">
	<div>No course is selected for registration,</br> <a href="courseregistration.php">
	click here to go back and try again!!</a></div>

	</fieldset>
	');
}

if(ISSET($_POST['register'])){
	if(!ISSET($_SESSION)){SESSION_START();}
	$dormid = $_SESSION['$dormid'];
	$prog = $_SESSION['prog'];
	$total = 0;
		foreach($prog as $selected){
	$courses = $db->query("SELECT * FROM `courses` WHERE `id` = '$selected'") ;

	while($rw=mysqli_fetch_array($courses)){
		$total=$total + $rw['hour'];
		$title = $rw['title'];
		$code = $rw['code'];
		$programme = $row['programme'];
		$db->query("DELETE FROM `$selected` WHERE `addnum` = '$addnum'");
	 	$replace = "REPLACE INTO `$selected`
		(`addnum`, `title`, `code`, `programme`, `status`, `year`, `semester`, `period`, `regdate`)
		VALUES
		('$addnum', '$title', '$code', '$programme', 'registered', '$currentyear', '$currentsemester', '$period', NOW() )" ;
		if (!$db->query($replace)) {die (mysqli_error($db));}
	}}
	$prog=implode(",",$prog);
	$check = $db->query("SELECT * FROM `registered` WHERE `addnum` = '$addnum' AND `courses`='$prog'
	AND `currentyear` = '$currentyear' AND `currentsemester` = '$currentsemester' AND `period`='$period'");
	if (!$check->num_rows){
	$total = $total * $credithour + $tui;
	$equation=$row['balance']-$total;
	$reglog = $row['reglog'] + 1;
	$db->query("UPDATE students SET balance='$equation', reglog='$reglog', dormitary='$dormid' WHERE addnum='$addnum'")
	or die($db(mysqli_error));

		$prevbal = $row['balance'];
		if(!$insert = $db->query("INSERT INTO transactions
			(`addnum`, `payment`, `previous`, `amount`, `teller`, `bank`, `branch`, `date`)
			VALUES ('$addnum', 'Course Registration', '$prevbal', '$total', 'Deducted', 'Credit Units', 'Requested by $addnum', NOW() )"))
			{die($db(mysqli_error));};


		$register = "REPLACE INTO `registered`
		(`id`, `addnum`, `courses`, `currentyear`, `currentsemester`, `spend`, `period`, `date`)
		VALUES
		(NULL, '$addnum', '$prog', '$currentyear', '$currentsemester', '$total', '$period', NOW() )" ;
	if (!$db->query($register)) {die ($db(mysqli_error));}}
	header ("location: courseview.php");
}



?>
</body>
</html>
