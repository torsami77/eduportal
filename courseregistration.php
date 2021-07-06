<?php
include ('certs.php');
$regstatus = $db->query("SELECT `status` FROM `faculty` WHERE management = 'registrar'") or die (mysqli_error($db));
		$regst = mysqli_fetch_array($regstatus);$regstatus = $regst['status'];
	if($regstatus != 'Opened'){header ("location: welcome.php");}
	
	$reverse = $db->query("SELECT * FROM `registered` WHERE `addnum` = '$addnum'
	AND `currentyear` = '$currentyear' AND `currentsemester` = '$currentsemester' AND `period`='$period'
	");
	if($reverse->num_rows){
		$revs = mysqli_fetch_array($reverse);
		$spend = $revs['spend'];
		$progs = $revs['courses'];
		$progs = explode(",",$progs);
		foreach($progs as $clean){
			$db->query("UPDATE `$clean` SET `status`='' WHERE addnum='$addnum'");
		}
		$prevbal = $row['balance'];
		$refund=$row['balance']+$spend;
		$reglog = $row['reglog'] - 1;
		
		if(!$insert = $db->query("INSERT INTO transactions 
			(`addnum`, `payment`, `previous`, `amount`, `teller`, `bank`, `branch`, `date`) 
			VALUES ('$addnum', 'Change of Courses', '$prevbal', '$spend', 'Refunded', 'Credit Units', 'Requested by $addnum', NOW() )"))
			{die($db(mysqli_error));};
		
	$db->query("UPDATE students SET balance='$refund', reglog='$reglog' WHERE `addnum`='$addnum'");
	$db->query("DELETE FROM `registered` WHERE `addnum` = '$addnum'");
	}
	
	if ($abbrev=='cbwi'){header ("location: wcourseregistration.php");}
?>

<html>
<head>
<title>Course Registration</title>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
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
</head>
<body>

<fieldset class="form">
<legend>COURSE REGISTRATION</legend>
<p style="color:blue;">Below are list of current course&#40;s&#41; you can take this semester, tick the apporiate 
check box&#40;es&#41;<input type="checkbox" checked/> to indicate selected course&#40;s&#41;</p>
<?php
echo '<p style="color:red;";><strong>NB:</strong> If you are "retaking", your new grade for the course will overwrite the previous grade</br>';
$abbrev = $row['programme'] ;
$duration = $db->query("SELECT `duration` FROM `programmes` WHERE `abb` = '$abbrev'") or die (mysqli_error($db));
$du = mysqli_fetch_array($duration);
$duration = $du['duration'];
if ($schoolyear > $duration){
			echo '
			<fieldset>
			<legend style="color:red;">Select school year&#40;s&#41; to register for course&#40;s&#41; </legend>
			<form method="POST" action="">
				<select name="carry">
					<option> Choose School Year&#40;s&#41; </option>
					<option value="1">1,2</option>
					<option value="2">1,4</option>
					<option value="3">2,3</option>
					<option value="4">3,4</option>
				</select></br></br>
				<input type="submit" name="check" value="Check for course&#40;s&#41; " />
			</form>
			</fieldset>
			' ;

}else{

$courses = $db->query("SELECT * FROM `courses` WHERE `level` = '$schoolyear' AND 
`semester` = '$currentsemester' AND `$abbrev` = '$abbrev'") 
or die (mysqli_error($db));
//'<font color="red">Problem connecting to server, try again later!!</font>'); 
if($courses->num_rows){
	echo '<form action="" method="POST" />';
	echo "<table>
	<tr style='font-weight:900; color:blue;'><td>&nbsp;Select&nbsp;</td><td>&nbsp;Course Title&nbsp;</td>
	<td>&nbsp;Course Code&nbsp;</td><td>&nbsp;Credit hour&nbsp;</td><td>&nbsp;School Year&#40;level&#41;&nbsp;</td></tr>";
	while($rw=mysqli_fetch_array($courses))
    {
echo
'<tr>
<td><input type="checkbox" name="prog[]" value="'. $rw['id'].'" /></td><td>&nbsp;'
. $rw['title'].'&nbsp;</td><td>&nbsp; ' . $rw['code'].'&nbsp;</td><td>&nbsp; ' . $rw['hour'].
'</td><td>&nbsp; ' . $rw['level'].'</td></tr>';

}
echo "</table>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
}else{
echo ('<font color="green">No current course&#40;s&#41; available for your registration!! Please contact Office of the Academic Dean for more information</font>');
}


$carryover = $schoolyear - 100 ;
if ($carryover > 0){
$courses = $db->query("SELECT * FROM `courses` WHERE `level` = '$carryover' AND 
`semester` = '$currentsemester' AND `$abbrev` = '$abbrev'") 
or die (mysqli_error($db));
//'<font color="red">Problem connecting to server, try again later!!</font>'); 
if($courses->num_rows){
	echo '<form action="" method="POST" />';
	echo '<fieldset style="border-color:red;">
		<legend><font color="red">Previous school year &#40;You can take or retake course&#40;s&#41; from previous school year below&#41;</font></legend>';
	
	echo "<table>
	<tr style='font-weight:900; color:red;'><td>&nbsp;Select&nbsp;</td><td>&nbsp;Course Title&nbsp;</td>
	<td>&nbsp;Course Code&nbsp;</td><td>&nbsp;Credit hour&nbsp;</td><td>&nbsp;School Year&#40;level&#41;&nbsp;</td></tr>";
	while($rw=mysqli_fetch_array($courses))
    {
echo
'<tr>
<td><input type="checkbox" name="prog[]" value="'. $rw['id'].'" /></td><td>&nbsp;'
. $rw['title'].'&nbsp;</td><td>&nbsp; ' . $rw['code'].'&nbsp;</td><td>&nbsp; ' . $rw['hour'].
'</td><td>&nbsp; ' . $rw['level'].'</td></tr>';

}
echo "</table>
</fieldset>";
echo "</br>";
echo "</br>";

}
}
echo '</br></br>' ;
include ('dorm.php');
echo '</br></br>' ;
echo '<input type="submit" name="tuition" value="Calculate Tuition" />' ;
echo '</form>';
}


if(ISSET($_POST['check'])){
	if(ISSET($_POST['carry']) === 1){
		$a = 100;$b = 200;}
		elseif(ISSET($_POST['carry']) === 2){
		$a = 100;$b = 400;}
		elseif(ISSET($_POST['carry']) === 3){
		$a = 200;$b = 300;}
		else{$a = 300;$b = 400;}
	
		
$courses = $db->query("SELECT * FROM `courses` WHERE `semester` = '$currentsemester' AND `$abbrev` = '$abbrev'
AND (`level`='$a' OR `level`='$b' )
") 
or die (mysqli_error($db));
//'<font color="red">Problem connecting to server, try again later!!</font>'); 
if($courses->num_rows){
	echo '<form action="" method="POST" />';
	echo '<fieldset style="border-color:red;">
		<legend><font color="red">Previous school year &#40;You can take or retake course&#40;s&#41; from previous school year below&#41;</font></legend>';
	echo '<p style="color:red;";><strong>NB:</strong> If you are "retaking" a course listed on this section, your new grade for the course will overwrite the previous grade</br>';
	echo "<table>
	<tr style='font-weight:900; color:red;'><td>&nbsp;Select&nbsp;</td><td>&nbsp;Course Title&nbsp;</td>
	<td>&nbsp;Course Code&nbsp;</td><td>&nbsp;Credit hour&nbsp;</td><td>&nbsp;School Year&#40;level&#41;&nbsp;</td></tr>";
	while($rw=mysqli_fetch_array($courses))
    {
echo
'<tr>
<td><input type="checkbox" name="prog[]" value="'. $rw['id'].'" /></td><td>&nbsp;'
. $rw['title'].'&nbsp;</td><td>&nbsp; ' . $rw['code'].'&nbsp;</td><td>&nbsp; ' . $rw['hour'].
'</td><td>&nbsp; ' . $rw['level'].'</td></tr>';
	
}
echo "</table>
</fieldset>";
}
echo '</br></br>' ;
include ('dorm.php');
echo '</br></br>' ;
echo '<input type="submit" name="tuition" value="Calculate Tuition" />' ;
echo '</form>';
}
?>

<div style="float:right;"><a href="welcome.php">
	Click here to go back to previous page</a></div>
</fieldset>
<?php
if(ISSET($_POST['tuition'])){
	if(!ISSET($_SESSION)){SESSION_START();}
	$_SESSION['prog']=$_POST['prog'];
	$_SESSION['dorm']=$_POST['dorm'];
	header ("location: tuition.php");
}
?>
</body>
</html>