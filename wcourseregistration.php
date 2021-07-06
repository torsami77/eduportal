<?php
include ('certs.php');
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
<td><input type="checkbox" name="prog[]" value="'. $rw['id'].'" checked readonly /></td><td>&nbsp;'
. $rw['title'].'&nbsp;</td><td>&nbsp; ' . $rw['code'].'&nbsp;</td><td>&nbsp; ' . $rw['hour'].
'</td><td>&nbsp; ' . $rw['level'].'</td></tr>';

}

echo "</table>
";
echo "</br>";
echo "</br>";

}

echo '</br></br>' ;
?>

<fieldset>
<legend>Select Accomodation Status</legend>
	<select name="accomodation" required>
		<option value="">Select Accomodation Status</option>
		<option value="nocharge">Living on campus with husband</option>
		<option value="nocharge">Living off-Campus</option>
		<option value="mos">&#40;Living Depently&#41; Married Old Structure => N3, 500. 00 per semester </option>
		<option value="mrs">&#40;Living Depently&#41; Married Renovated Structure => N5, 000. 00 per semester </option>
		<option value="tcd">&#40;Living Depently&#41; T.C. Dorm => N2, 000. 00 per semester </option>
		<option value="yak">&#40;Living Depently&#41; Yako => N2, 500. 00 per semester </option>
		<option value="rod">&#40;Living Depently&#41; Rodabough => N2, 500. 00 per semester </option>
		<option value="tas">&#40;Living Depently&#41; Talatu-Single => N3, 000. 00 per semester </option>
		<option value="taf">&#40;Living Depently&#41; Talatu-Flat => N20, 000. 00 per semester </option>
		<option value="gds">&#40;Living Depently&#41; Grace Dorm Single => N4, 000. 00 per semester </option>
		<option value="gdf">&#40;Living Depently&#41; Grace Dorm Flat => N30, 000. 00 per semester </option>
		<option value="fwc">&#40;Living Depently&#41; Family Worship Centre => N2, 500. 00 per semester</option>
	</select>


</fieldset>

<?php
echo '</br></br>' ;
echo '<input type="submit" name="tuition" value="Calculate Tuition" />' ;
echo '</form>';

?>
<div style="float:right;"><a href="welcome.php">
	Click here to go back to previous page</a></div>
</fieldset>


<?php
if(ISSET($_POST['tuition'])){
	if(!ISSET($_SESSION)){SESSION_START();}
	$_SESSION['prog']=$_POST['prog'];
	$_SESSION['accomodation']=$_POST['accomodation'];
	header ("location: wtuition.php");
}
?>
</body>
</html>