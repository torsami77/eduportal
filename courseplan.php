<?php
include ('certs.php');
?>
<html>
<head>
<title>Course Plan</title>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
table{
    border-collapse: collapse;
    border: 1px solid black;
	width: 100%
	}

td{width:90px;
    border-collapse: collapse;
    border: 2px solid black;
	}
</style>
</head>
<body>

<?php
if ($_SESSION['addnu']){
	$plan = $_SESSION['addnu'];
}elseif($row['addnum']){
	$plan = $row['addnum'];
}else{
	header ("location: index.php");
}

$programme = $db->query("SELECT `programme` FROM `students` WHERE `addnum` = '".$plan."'") ;
$prg = mysqli_fetch_array($programme);
$planned = $prg['programme'];

$programme = $db->query("SELECT `programme` FROM `programmes` WHERE abb = '".$planned."'") ;
$prg = mysqli_fetch_array($programme);
$programme = $prg['programme'];

$courses = $db->query("SELECT * FROM `courses` WHERE `$planned` = '$planned' && `level`=  100 && `semester` =1 ORDER BY `title`") or die($db->error) ;
  if($courses->num_rows){
echo '
<div style="width:60%;margin: 0 auto;">
<h2>Course Plan for '. $plan.' </br>&#40;'.$programme.'&#41; </h2>
</br></br>
<fieldset>
<legend>1st Year</legend>
</br>
<fieldset>
<legend>1st Semester</legend>
<table>
<tr><td><strong>Course Title</strong></td><td><strong>Course Code</strong></td>
<td><strong>Credit Hour</strong></td><td><strong>Level</strong></td></tr>
';

	$records = $courses->fetch_all(MYSQLI_BOTH);
		foreach($records as $count){
			/*$each = $count['id'];
			$table = $db->query("SELECT * FROM `$each` WHERE `score` = '' AND `addnum`='$plan'") ;
			if($table->num_rows){*/
				echo '<tr><td>'.$count['title'].'</td><td>'.$count['code'].'</td>
				<td>'.$count['hour'].'</td><td>'.$count['level'].'</td></tr>';
			//}
		}
echo'</table></fieldset></br></br>';

$courses = $db->query("SELECT * FROM `courses` WHERE `$planned` = '$planned' && `level`=  100 && `semester` =2 ORDER BY `title`") or die($db->error) ;
  if($courses->num_rows){
echo '
<fieldset>
<legend>2nd Semester</legend>
<table>
<tr><td><strong>Course Title</strong></td><td><strong>Course Code</strong></td>
<td><strong>Credit Hour</strong></td><td><strong>Level</strong></td></tr>
';

	$records = $courses->fetch_all(MYSQLI_BOTH);
		foreach($records as $count){
			/*$each = $count['id'];
			$table = $db->query("SELECT * FROM `$each` WHERE `score` = '' AND `addnum`='$plan'") ;
			if($table->num_rows){*/
				echo '<tr><td>'.$count['title'].'</td><td>'.$count['code'].'</td>
				<td>'.$count['hour'].'</td><td>'.$count['level'].'</td></tr>';
			//}
		}


}
echo'</fieldset></table></div>';
}

//Second Year--->>


$courses = $db->query("SELECT * FROM `courses` WHERE `$planned` = '$planned' && `level`=  200 && `semester` =1 ORDER BY `title`") or die($db->error) ;
  if($courses->num_rows){
echo '
<div style="width:60%;margin: 0 auto;">
</br></br>
<fieldset>
<legend>2st Year</legend>
</br>
<fieldset>
<legend>1st Semester</legend>
<table>
<tr><td><strong>Course Title</strong></td><td><strong>Course Code</strong></td>
<td><strong>Credit Hour</strong></td><td><strong>Level</strong></td></tr>
';

	$records = $courses->fetch_all(MYSQLI_BOTH);
		foreach($records as $count){
			/*$each = $count['id'];
			$table = $db->query("SELECT * FROM `$each` WHERE `score` = '' AND `addnum`='$plan'") ;
			if($table->num_rows){*/
				echo '<tr><td>'.$count['title'].'</td><td>'.$count['code'].'</td>
				<td>'.$count['hour'].'</td><td>'.$count['level'].'</td></tr>';
			//}
		}
echo'</table></fieldset></br></br>';

$courses = $db->query("SELECT * FROM `courses` WHERE `$planned` = '$planned' && `level`=  200 && `semester` =2 ORDER BY `title`") or die($db->error) ;
  if($courses->num_rows){
echo '
<fieldset>
<legend>2nd Semester</legend>
<table>
<tr><td><strong>Course Title</strong></td><td><strong>Course Code</strong></td>
<td><strong>Credit Hour</strong></td><td><strong>Level</strong></td></tr>
';

	$records = $courses->fetch_all(MYSQLI_BOTH);
		foreach($records as $count){
			/*$each = $count['id'];
			$table = $db->query("SELECT * FROM `$each` WHERE `score` = '' AND `addnum`='$plan'") ;
			if($table->num_rows){*/
				echo '<tr><td>'.$count['title'].'</td><td>'.$count['code'].'</td>
				<td>'.$count['hour'].'</td><td>'.$count['level'].'</td></tr>';
			//}
		}
}
echo'</fieldset></table></div>';
}


//Third Year--->>


$courses = $db->query("SELECT * FROM `courses` WHERE `$planned` = '$planned' && `level`=  300 && `semester` =1 ORDER BY `title`") or die($db->error) ;
  if($courses->num_rows){
echo '
<div style="width:60%;margin: 0 auto;">
</br></br>
<fieldset>
<legend>3rd Year</legend>
</br>
<fieldset>
<legend>1st Semester</legend>
<table>
<tr><td><strong>Course Title</strong></td><td><strong>Course Code</strong></td>
<td><strong>Credit Hour</strong></td><td><strong>Level</strong></td></tr>
';

	$records = $courses->fetch_all(MYSQLI_BOTH);
		foreach($records as $count){
			/*$each = $count['id'];
			$table = $db->query("SELECT * FROM `$each` WHERE `score` = '' AND `addnum`='$plan'") ;
			if($table->num_rows){*/
				echo '<tr><td>'.$count['title'].'</td><td>'.$count['code'].'</td>
				<td>'.$count['hour'].'</td><td>'.$count['level'].'</td></tr>';
			//}
		}
echo'</table></fieldset></br></br>';

$courses = $db->query("SELECT * FROM `courses` WHERE `$planned` = '$planned' && `level`=  300 && `semester` =2 ORDER BY `title`") or die($db->error) ;
  if($courses->num_rows){
echo '
<fieldset>
<legend>2nd Semester</legend>
<table>
<tr><td><strong>Course Title</strong></td><td><strong>Course Code</strong></td>
<td><strong>Credit Hour</strong></td><td><strong>Level</strong></td></tr>
';

	$records = $courses->fetch_all(MYSQLI_BOTH);
		foreach($records as $count){
			/*$each = $count['id'];
			$table = $db->query("SELECT * FROM `$each` WHERE `score` = '' AND `addnum`='$plan'") ;
			if($table->num_rows){*/
				echo '<tr><td>'.$count['title'].'</td><td>'.$count['code'].'</td>
				<td>'.$count['hour'].'</td><td>'.$count['level'].'</td></tr>';
			//}
		}
}
echo'</fieldset></table></div>';
}


//Fourth Year--->>


$courses = $db->query("SELECT * FROM `courses` WHERE `$planned` = '$planned' && `level`=  400 && `semester` =1 ORDER BY `title`") or die($db->error) ;
  if($courses->num_rows){
echo '
<div style="width:60%;margin: 0 auto;">
</br></br>
<fieldset>
<legend>4th Year</legend>
</br>
<fieldset>
<legend>1st Semester</legend>
<table>
<tr><td><strong>Course Title</strong></td><td><strong>Course Code</strong></td>
<td><strong>Credit Hour</strong></td><td><strong>Level</strong></td></tr>
';

	$records = $courses->fetch_all(MYSQLI_BOTH);
		foreach($records as $count){
			/*$each = $count['id'];
			$table = $db->query("SELECT * FROM `$each` WHERE `score` = '' AND `addnum`='$plan'") ;
			if($table->num_rows){*/
				echo '<tr><td>'.$count['title'].'</td><td>'.$count['code'].'</td>
				<td>'.$count['hour'].'</td><td>'.$count['level'].'</td></tr>';
			//}
		}
echo'</table></fieldset></br></br>';

$courses = $db->query("SELECT * FROM `courses` WHERE `$planned` = '$planned' && `level`= 400 && `semester` =2 ORDER BY `title`") or die($db->error) ;
  if($courses->num_rows){
echo '
<fieldset>
<legend>2nd Semester</legend>
<table>
<tr><td><strong>Course Title</strong></td><td><strong>Course Code</strong></td>
<td><strong>Credit Hour</strong></td><td><strong>Level</strong></td></tr>
';

	$records = $courses->fetch_all(MYSQLI_BOTH);
		foreach($records as $count){
			/*$each = $count['id'];
			$table = $db->query("SELECT * FROM `$each` WHERE `score` = '' AND `addnum`='$plan'") ;
			if($table->num_rows){*/
				echo '<tr><td>'.$count['title'].'</td><td>'.$count['code'].'</td>
				<td>'.$count['hour'].'</td><td>'.$count['level'].'</td></tr>';
			//}
		}
}
echo'</fieldset></table></div>';
}



?>
<div style="text-align:center;">
<p><input type="button" value="PRINT" onclick= "window.print()" /> &emsp;&emsp;&emsp;
<input type='button' value='Return to my home page' onclick='history.back(-1)' /></p>
<div>
</fieldset>
</body>
</html>
