<?php

include ('certs.php');
$page = 'dean';
include ('manage.php');
?>
<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Office of the Academic Dean</title>
</head>
<body>
<div class="form" style="margin:auto auto; width:900px;">
<?php
include('links.php');
?>
</div></br>

<div class="form" style="margin:auto auto; width:900px;">
<fieldset>
<legend>ADD COURSE OR LECTURER</legend>
<p><a href="newcourse.php" tab ="_blank">Add a new Course</a></p>
<p><a href="newlecturer.php" tab ="_blank">Add a new Lecturer</a></p>
<p><a href="#" tab ="_blank">Disapprove/Reapprove a Course for registration</a></p>
</fieldset></div></br></br>

<div class="form" style="margin:auto auto; width:900px;">
<fieldset>
<legend>ALLOCATE A COURSE TO A LECTURER</legend>

<form action="" method="POST">
<p>Pick a Course <select name="id" required>
<option value="">Pick a Course</option>
<?php
$result = $db->query("SELECT * FROM courses") or die ('<font color="red">Problem connecting to server, try again later!!</font>');
if($result->num_rows){
	$recs = $result->fetch_all(MYSQLI_ASSOC);
	foreach($recs as $rec){

echo "<option value=".$rec['id'].">". $rec['code']. ", ".$rec['title']."</option>";

};};
?>
</select></p>


<p>Allocate a Lecturer <select name="initials" required>
<option value="">Allocate a Lecturer </option>
<?php

$result = $db->query("SELECT * FROM faculty") or die ('<font color="red">Problem connecting to server, try again later!!</font>');
if($result->num_rows){
	$records = $result->fetch_all(MYSQLI_ASSOC);
	foreach($records as $record){

echo "<option value=".$record['initials'].">". $record['initials'].", ".$record['surname']." ".$record['firstname']." ".$record['othername']. "</option>";

};};
?>
</select></p>

<?php include('year.php');  ?>
<input type="submit" name="allocate" value="ALLOCATE" /></p>
</form>
<?php
if (isset($_POST['allocate'])){
	if (EMPTY($_POST['id'])){die('<script>alert("Please pick a course")</script>');}else
	{$id = $db->real_escape_string(strip_tags($_POST['id']))
	or die ('<font color="red">Site under update, please try again later...</font>');}
	if (EMPTY($_POST['initials'])){die('<script>alert("Please select the lecturer")</script>');}else
	{$initials = $db->real_escape_string(strip_tags($_POST['initials']))
	or die ('<font color="red">Site under update, please try again later...</font>');}
	if (EMPTY($_POST['section'])){die('<script>alert("Please select the section")</script>');}else
	{$section = $db->real_escape_string(strip_tags($_POST['section']))
	or die ('<font color="red">Site under update, please try again later...</font>');}
	if (EMPTY($_POST['year'])){die('<script>alert("Please select the Year")</script>');}else
	{$year = $db->real_escape_string(strip_tags($_POST['year']))
	or die ('<font color="red">Site under update, please try again later...</font>');}

    if($section === 'summer'){
		$period = 'summer';}else{$period ='regular';}
	$semester = $section;
		$alle = array( $semester,$period,$year);
		$alli = array($initials, $semester,$period,$year);


	$courses = $db->query("SELECT `allocated` FROM `courses` WHERE `id` = '$id' AND `allocated` != ''") ;
	if($courses->num_rows){
		$fet=mysqli_fetch_array($courses);
		$fetched=$fet['allocated'];
		$fetched = explode ("-",$fetched);

		$alle = join(",",$alle);
		$alli = join(",",$alli);

				$key=0; $sn=1;
			foreach($fetched as $fetcher){
				$fetcher = explode (",", $fetcher);
				array_shift($fetcher);
				$fetcher = implode (",", $fetcher);

				if($alle == $fetcher)
				{
					$key=$sn;
				}
				 $sn++;
			}
			if($key > 0){$key=$key-1; unset($fetched[$key]);}
			array_unshift($fetched, $alli);

			$allocated = join("-", $fetched);

		if($update = $db->query("
UPDATE `courses` SET `initials` = '$initials', `allocated`='$allocated' WHERE `id` = '$id'")){
	include('coursemail.php');
	include('email.php');
	echo'<script>alert("Course allocated successfully")</script>';
	echo'<font color="green">Course allocated successfully</font>';
}

		}else{

		$allocated = implode(",", $alli);
		if($update = $db->query("
UPDATE `courses` SET `initials` = '$initials', `allocated`='$allocated' WHERE `id` = '$id'")){
	include('coursemail.php');
	include('email.php');
	echo'<script>alert("Course allocated successfully")</script>';
	echo'<font color="green">Course allocated successfully</font>';
}

}
}


?>
</fieldset>
</div></br></br>

<div class="form" style="margin:auto auto; width:900px;">
<fieldset>
<legend> Students Academic Data </legend>
<fieldset style="float:right;">
<legend>Check a Student&#39;s Grades Progress </legend>
<form action="transcript.php" method="POST" >
<input type="text" name="addnum" placeholder="Matric Number" required/>
<input type="submit" name="grades" value="Check Grades" />
</form>
</fieldset>

<fieldset style="float:left;">
<legend>Check a Student&#39;s Course Plan</legend>
<form action="" method="POST" >
<input type="text" name="addnum" placeholder="Matric Number" required/>
<input type="submit" name="plan" value="Check Course Plan" />
</form>
<?php
if(ISSET($_POST['plan'])){
$plan = $db->real_escape_string(strip_tags($_POST['addnum']));
$programme = $db->query("SELECT `programme` FROM `students` WHERE `addnum` = '".$plan."'") ;
if(!$programme->num_rows){echo'<font color="red">No Student found with provided Admission Number..</font>';}else{

	$_SESSION['addnu'] = $plan;
	header ("location: courseplan.php");
}
}
?>
</fieldset>
</fieldset>
</div>
</br>
<div class="form" style="margin:auto auto; width:900px;">
<fieldset>
<legend>Grades Waiting for Confirmation</legend>
<?php
$check = $db->query("SELECT `id` FROM `courses`");
$checker=$check->fetch_all(MYSQLI_ASSOC);
foreach($checker as $se){
	$se=$se['id'];
	$select = $db->query("SELECT `code` FROM `$se` WHERE `confirm`='waiting'");
		if($select->num_rows){
			$sel=$select->fetch_array(MYSQLI_BOTH);
			echo '<a href="confirmgrades.php?code='.$se.'">'.$sel['code'].'</a>&emsp;&emsp;&emsp;';
		}}
?>

</fieldset>
</div>

</body>
</html>
