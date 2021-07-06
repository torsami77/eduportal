<?php
include ('certs.php');
?>
<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
fieldset{
	width: 100%;
}
</style>
</head>
<body>

<fieldset style="background-color:white;">
<legend>COMPUTED TRANSCRIPT</legend>
<?php
if (ISSET($_POST['addnum'])){
	$addnum = $db->real_escape_string(strip_tags($_POST['addnum']));}elseif(
		ISSET($_SESSION['addnum'])
	){
		$addnum = $_SESSION['addnum'];
	}

	$programme = $db->query("SELECT `programme`,`last`,`first`,`other` FROM `students` WHERE `addnum` = '".$addnum."'") ;
	$prg = mysqli_fetch_array($programme);
	$programme = $prg['programme'];

	$prog = $db->query("SELECT `programme` FROM `programmes` WHERE `abb` = '".$programme."'") ;
	$pr = mysqli_fetch_array($prog);
	$programmed = $pr['programme'];
	$fullnames =  $prg['last'].', '.$prg['first'].' '.$prg['other'];

	echo $fullnames.'<br/>' ;
	echo $addnum.'<br/>' ;
	echo $programmed.'<br/>' ;
	echo date('Y-m-d').'<br/>' ;




$termhours = 0;
$termpoints = 0;
$totalpoints = 0;
$totalhours = 0;

$timing=1;
while($timing < 5){
	$level = $timing.'00';
$check = $db->query("SELECT `id`,`hour` FROM `courses` WHERE `$programme`='$programme' and `level`='$level' AND `semester`='1'");
if($check->num_rows){
	echo
	'<fieldset class="form">
	<legend><strong>1st Year</strong></legend></br>
	<strong>1st Semester</strong>
	<table>
	<tr><td><strong>Course Code</strong></td><td><strong>Course Title</strong></td><td><strong>Units Earned</strong></td><td><strong>C.A.</strong>
	</td><td><strong>Exams</strong></td><td><strong>Total Score</strong></td><td><strong>Grade</strong></td><td><strong>Points</strong></td>
	<td><strong>Date Graded</strong></td></tr>';
	$checker=$check->fetch_all(MYSQLI_ASSOC);

	$termhours = 0;
	$termpoints = 0;
	foreach($checker as $see){
		$se=$see['id'];
		$hr=$see['hour'];
		$select = $db->query("SELECT * FROM `$se` WHERE `addnum`='$addnum' AND `status`='completed' AND `confirm`='confirm'") or die($db->error);
			if($select->num_rows){
				$sel=$select->fetch_array(MYSQLI_BOTH);
				$points = $sel['scale'] * $hr ;
				echo'
				<tr><td>'.$sel['code'].'</td><td>'.$sel['title'].'</td><td>'.$hr.'</td><td>'.$sel['ca'].'</td><td>'.$sel['exam'].'</td>
				<td>'.$sel['score'].'</td><td>'.$sel['grade'].'</td><td>'.$points.'</td><td>'.$sel['gradedate'].'</td></tr>' ;
				$termhours=$hr+ $termhours ;
				$termpoints = $points + $termpoints ;
				}
	}
	$totalpoints = $termpoints + $totalpoints ;
	$totalhours = $termhours + $totalhours ;
	$termgpa=$termpoints/$termhours ;
	echo '</table><table>';
	echo '<tr><td><strong>Term Units Earned: '.$termhours.'</strong></td>
	<td><strong>Term Points.: '.$termpoints.'</strong></td><td><strong>Term G.P.A.: '.$termgpa.'</strong></td></tr>';
	echo '</table>';

/////////////////second semester
$termhours = 0;
$termpoints = 0;
$check = $db->query("SELECT `id` FROM `courses` WHERE `$programme`='$programme' and `level`='$level' AND `semester`='2'");
if($check->num_rows){
	echo
	'</br></br>
	<strong>2nd Semester</strong>
	<table>
	<tr><td><strong>Course Title</strong></td><td><strong>Course Code</strong></td><td><strong>C.A.</strong></td><td><strong>Exams</strong></td><td><strong>Total Score</strong></td><td><strong>Grade</strong></td><td><strong>Date Graded</strong></td></tr>';
	$checker=$check->fetch_all(MYSQLI_ASSOC);

	foreach($checker as $see){
		$se=$see['id'];
		$hr=$see['hour'];
		$select = $db->query("SELECT * FROM `$se` WHERE `addnum`='$addnum' AND `status`='completed' AND `confirm`='confirm'") or die($db->error);
			if($select->num_rows){
				$sel=$select->fetch_array(MYSQLI_BOTH);
				$points = $sel['scale'] * $hr ;
				echo'
				<tr><td>'.$sel['code'].'</td><td>'.$sel['title'].'</td><td>'.$hr.'</td><td>'.$sel['ca'].'</td><td>'.$sel['exam'].'</td>
				<td>'.$sel['score'].'</td><td>'.$sel['grade'].'</td><td>'.$points.'</td><td>'.$sel['gradedate'].'</td></tr>' ;
				$termhours=$hr+ $termhours ;
				$termpoints = $points + $termpoints ;
				}
	}
	$totalpoints = $termpoints + $totalpoints ;
	$totalhours = $termhours + $totalhours ;
	$termgpa=$termpoints/$termhours ;
	echo '</table><table>';
	echo '<tr><td><strong>Term Units Earned: '.$termhours.'</strong></td>
	<td><strong>Term Points.: '.$termpoints.'</strong></td><td><strong>Term G.P.A.: '.$termgpa.'</strong></td></tr>';
	echo '</table>';
}


////////////////////end of year
echo '</fieldset>';
}
$timing=$timing+1;
}
//outsideloop
$totalgpa = $totalpoints/$totalhours ;
echo '</br></br>
	<fieldset>
	<table>';
echo '<tr><td><strong>Total Units Earned.: '.$totalhours.'</strong></td><td><strong>Total Points.: '.$totalpoints.'</strong></td>
<td><strong>Total G.P.A.: '.$totalgpa.'</strong></td></tr>';
echo '</table>
		</fieldset>';

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
</br>
</br>
</br>
<div style="text-align:center;">
<p><input type="button" value="PRINT" onclick= "window.print()" /> &emsp;&emsp;&emsp;
<input type='button' value='Return to my home page' onclick='history.back(-1)' /></p>
<div>
</fieldset>
</body>
</html>
