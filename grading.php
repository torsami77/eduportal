<?php
include ('certs.php');

?>
<html>
<head>
<title>Submit Grade
</title>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<style>
td{width:90px;
	}
</style>
<body>
<fieldset class="form">
<legend>Submit Grade</legend>
<p><input type='button' value='<- BACK TO HOME PAGE' onclick='location.href="faculty.php"' /></p>
</br></br>
<?php

if(!ISSET($_SESSION)){SESSION_START();}
if(!ISSET($_SESSION['cid'])){header ("location: grading.php");}
		$cid=$_SESSION['cid'];
		$initials =	$_SESSION['initials'] ;
		$semester =	$_SESSION['semester'] ;
		$period =	$_SESSION['period'] ;
		$year     = $_SESSION['year'] ;

		$title = $db->query("SELECT * FROM `courses` WHERE `id` = '$cid'") or die (mysqli_error($db));
		$tit = mysqli_fetch_array($title);$title = $tit['title'];$code = $tit['code'];
		$_SESSION['code'] = $code;
		echo '<p><h3>'.$title.' &#40;'.$code.'&#41;</h3></p>';

$result = $db->query("SELECT * FROM `$cid` WHERE `status`='registered' AND `year`='$year' AND
	`semester`='$semester' AND `period`='$period' AND `confirm`!='confirmed'")
 or die ($db(mysqli_error));

 //if unique key isset
 //elseifv

if($result->num_rows){

	echo '

	<p style="color:blue;">Enter grade for each student and click on the tick button</p>
	<table>
			<tr><td>Student&#40;s&#41; ID</td><td>C.A.</td><td>Exams</td><td>Total</td><td>Grade</td><td>Tick &emsp;&#10004;</td></tr>';
	$recs = $result->fetch_all(MYSQLI_ASSOC);
	foreach($recs as $rec){
		$stu=$rec['addnum'];
	echo "<form action='' method='POST' ><tr><td>".$rec['addnum']."</td>
			   			 <td><input class='".$stu."' type='number' placeholder='C.A. Score' name='ca".$stu."'";
			   echo "max='100'/></td>";
				 echo "<td><input class='".$stu."' type='number' placeholder='Exams Score' name='exam".$stu."'";
			   echo "max='100'/></td>";
				 echo '<td><input type="text" id="total" size="5" name="total" value="0" readonly/></td>'; ?>
				 <script>
				 $(document).ready(function(){
				   var total = 0;
					 var stu = "<?php echo $stu ?>";
				   $(.stu).keyup(function(){
				     $(.stu).each(function() {
				       var txtBoxVal = $(this).val();
				       total = total + Number(txtBoxVal);
				     });
				   $('#total').val(total);
				   total = 0;
				   });
				 });
				 </script>
<?php
		 echo "<td><select name='grade".$stu."' " ; echo">";?>
					<option>Select Grade</option>
					<option value="A"  <?php if(ISSET($value)){if($value == 'A'){echo 'selected';}} ?>  >A</option>
					<option value="B"  <?php if(ISSET($value)){if($value == 'B'){echo 'selected';}}?>  >B</option>
					<option value="C"  <?php if(ISSET($value)){if($value == 'C'){echo 'selected';}} ?>  >C</option>
					<option value="D"  <?php if(ISSET($value)){if($value == 'D'){echo 'selected';}} ?> >D</option>
					<option value="E"  <?php if(ISSET($value)){if($value == 'E'){echo 'selected';}} ?> >E</option>
					<option value="F"  <?php if(ISSET($value)){if($value == 'F'){echo 'selected';}} ?> >F</option>
	<option value="Incomplete" <?php if(ISSET($value)){if($value == 'Incomplete'){echo 'selected';}} ?> >Incomplete</option>
			       </select>
			  </td>
				<td>&ensp;<input type='submit' name='post<?php echo $stu ; ?>' value='&#10004;' /></td>
		  </tr></form>
		  <?php
if(ISSET($_POST['post'.$stu]))
{//$grade = $db->real_escape_string(strip_tags($_POST['grade'.$stu]));
 $ca = $db->real_escape_string(strip_tags($_POST['ca'.$stu]));
 $exam = $db->real_escape_string(strip_tags($_POST['exam'.$stu]));
 $score = $ca + $exam;

if (empty($score) or $score < 0 or $score > 100){die('<script>alert("Please enter appropriate figures for student with ID '.$stu.'")</script>');}

 if($score < 40){$grade = 'F';}elseif
	 ($score < 45){$grade = 'P';}elseif
	 ($score < 50){$grade = 'D';}elseif
	 ($score < 60){$grade = 'C';}elseif
	 ($score < 70){$grade = 'B';}elseif
	 ($score > 69){$grade = 'A';}

 $update = $db->query("UPDATE `$cid` SET `grade` = '$grade', `ca` ='$ca', `exam` ='$exam', `score` ='$score',
	 `status`='completed', `confirm`='waiting', `initials`='$initials',
 `gradedate` = NOW() WHERE `addnum` = '$stu'") or die(mysqli_error($db));
header ("location: grading.php");

}
}
	echo '</table>
		<p></p>';

}else{

	echo "<font color='red'>No student&#40;s&#41; pending for grade in this class...</font>";

}
?>
</fieldset>

<?php





?>

</body>
</html>
