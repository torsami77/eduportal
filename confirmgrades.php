<?php
include ('certs.php');
$page = 'dean';
include ('manage.php');
?>
<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Office of the Academic Dean</title>
<style>

td{width:100px;
	}
</style>
</head>
<body>

<div style="width:75%; margin:0 auto;">
<p><input type='button' value='<- BACK TO HOME PAGE' onclick='location.href="dean.php"' /></p>
</br></br>
<form action="" method="POST" >
<?php
$se = $db->real_escape_string(strip_tags($_GET['code']));
	$select = $db->query("SELECT `title` FROM `courses` WHERE `id`='$se'");
	$tit = $select->fetch_array(MYSQLI_BOTH); $title=$tit['title'];
	echo '<p><strong>'.$title.'</strong></p>' ;
	echo '<br/>' ;
	$select = $db->query("SELECT * FROM `$se` WHERE `confirm`='waiting' ORDER BY `year`, `regdate`");
		if($select->num_rows){
      echo '<table>
      <tr><td><strong>Student I.D.</strong></td><td><strong>Year Taken</strong></td>
      <td><strong>Period</strong></td><td><strong>C.A.</strong></td><td><strong>Exams</strong></td>
      <td><strong>Total Score</strong></td><td><strong>Grade</strong></td><td><strong>Lecturer</strong></td>
			<td><strong>Date Graded</strong></td><td><strong>Approve</strong></td></tr>';

    while($sel = mysqli_fetch_array($select)){
      //$sele =$select->fetch_array(MYSQLI_BOTH);
      //foreach($sele as $sel){
      //  echo  $sele['addnum'] ;
$array[]=$sel['addnum'];
			echo '
      <tr><td>'. $sel['addnum'].'</td><td>'.$sel['year'].'</td><td>'.$sel['period'].'</td><td>'
      .$sel['ca'].'</td><td>'.$sel['exam'].'</td><td>'.$sel['score'].'</td><td>'.$sel['grade'].'</td>
			<td>'.$sel['initials'].'</td><td>'.$sel['gradedate'].'</td>
<td><input type="checkbox" name="confirmed[]" value="'. $sel['addnum'].'" ></td></tr>';

		}
    echo '</table>';
  }else{
		header ('location: dean.php');
	}
?>
</br>
<div style="text-align:center;">
<input type="submit" name="confirm" value="Confirm" />
</div>
</form>
<?php
if(ISSET($_POST['confirm'])){

				if(ISSET($_POST['confirmed'])){
				$confirmed=$_POST['confirmed'];
				foreach($confirmed as $con){

					 $array = array_diff($array, [$con]);
					 $update = $db->query("UPDATE `$se` SET `confirm` = 'confirmed' WHERE `addnum` = '$con'") or die(mysqli_error($db));
					 echo '<script> alert("Verified grades are confirmed and unverified sent back for review") </script>';
					 header ('location: dean.php');
				}
				}

				if(!empty($array)){
					foreach($array as $ar){
						 $update = $db->query("UPDATE `$se` SET `confirm` = 'notconfirmed' WHERE `addnum` = '$ar'");
						  echo '<script> alert("Verified grades are confirmed and unverified sent back for review") </script>';
							header ('location: dean.php');
					}
				}






}
?>


</div>
</body>
</html>
