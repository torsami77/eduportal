<?php
include ('certs.php');
if(!ISSET($_SESSION['email'])){header ("location:staff.php");}
$initials = $_SESSION['initials'];
?>
<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
</head>
<body>

<fieldset class="form">

<?php
include('links.php');
?>
</fieldset>

</br></br>

</p>

<div>
<fieldset class="form">
<legend>Course Grading</legend>
<div style="float:left; width:40%;">
<form action="" method="POST">
<p>Pick a course
<select name="cid" required>
<option value="">Select a course</option>
<?php

$result = $db->query("SELECT * FROM courses") or die ('<font color="red">Problem connecting to server, try again later!!</font>');
if($result->num_rows){
	$recs = $result->fetch_all(MYSQLI_ASSOC);
	foreach($recs as $rec){

echo "<option value=".$rec['id'].">". $rec['code']. ", ".$rec['title']."</option>";

};};
?>
</select>
<?php include('year.php');?>
<input type="submit" name="grading" value="Enter grades" />
<input type="submit" name="template" value="Download grading template" />
</p>
</form>
<?php
if(ISSET($_POST['grading'])){
	if(EMPTY($_POST['cid']) || EMPTY($_POST['section']) || EMPTY($_POST['year']))
	{die('<font color = "red">Please all * fields are ..required</font>');}else{

		$cid = $db->real_escape_string(strip_tags($_POST['cid']));
		$section = $db->real_escape_string(strip_tags($_POST['section']));
		$year = $db->real_escape_string(strip_tags($_POST['year']));

		 if($section === 'summer'){
		$period = 'summer';}else{$period ='regular';}
	$semester = $section;
		$alle = array( $semester,$period,$year);
		$alli = array($initials, $semester,$period,$year);

			$courses = $db->query("SELECT `allocated` FROM `courses` WHERE `id` = '$cid' AND `allocated` != ''") ;
	if($courses->num_rows){
		$fet=mysqli_fetch_array($courses);
		$fetched=$fet['allocated'];
		$fetched = explode ("-",$fetched);
		$alli = implode(",",$alli);
		//print_r($fetched);
			/*
			foreach($fetched as $fetcher){
				$fetcher = explode (",", $fetcher);
				if($alli === $fetcher){
					$result = 'found';
				}else{
					$result = 'notfound';
				}

			}*/
			if(!in_array($alli, $fetched)){
				die('<font color="red">Please specify a course allocated to you<font/>');
			}else{
				if(!ISSET($_SESSION)){SESSION_START();}
				$_SESSION['cid']=$cid;
				$_SESSION['initials'] = $initials;
				$_SESSION['semester'] = $semester;
				$_SESSION['period'] = $period;
				$_SESSION['year'] = $year;

				header ("location: grading.php");

	}}else{
		die('<font color="red">Please specify a course allocated to you<font/>');
	}




	}

};
//almost same funtion for second button

if(ISSET($_POST['template'])){
include ('grades/templates.php');
};

?>
</div>
<div style="width:50%; float:right; padding:0 0 0 40; ">
<fieldset>
<legend>Upload grades from file using template</legend>
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

</fieldset>
</div>
</br>
<div>
<fieldset class="form">
<legend>Grades waiting for your attention</legend>
</br>
<?php
$check = $db->query("SELECT `id` FROM `courses`");
$checker=$check->fetch_all(MYSQLI_ASSOC);
foreach($checker as $se){
	$se=$se['id'];
	$select = $db->query("SELECT `code`, `title` FROM `$se` WHERE `confirm`='notconfirmed' AND `initials`='$initials'");
		if($select->num_rows){
			$sel=$select->fetch_array(MYSQLI_BOTH);
			echo $sel['code'].'--'.$sel['title'].'&emsp;&emsp;&emsp;';
		}}
?>
</fieldset>
</div>


</body>
</html>
