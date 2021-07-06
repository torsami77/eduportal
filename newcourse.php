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

<div style="width:600px; margin:0 auto;">
<p><input type='button' value='<- BACK TO HOME PAGE' onclick='location.href="dean.php"' /></p>
</br></br>
<fieldset>
<legend>ADD A NEW COURSE</legend>
<form action="newcourse.php" Method="POST">
<p><input type="text" name="title" placeholder="Course Title" required/></p>
<p><input type="text" name="code" placeholder="Course Code" required/></p>
</p>Check appropriate Programmes allowed to register this course</br>
<?php
$result = $db->query("SELECT abb, programme FROM programmes") or die
 ('<font color="red">Problem connecting to server, try again later!!</font>');
$numrows = mysqli_num_rows($result);
if($result->num_rows){
 while($row=mysqli_fetch_array($result))
    {
echo
'<input type="checkbox" name="prog[]" value="'. $row['abb'].'" />' . $row['programme'].'</br>';

	}

}


?>


</p>
</p>Pick appropriate level and Semester for the course</br>

<select name="hour" required>
	<option value="">Credit hour&#40;s&#41;</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	</select>
	<font color="red">*</font>

<select name="level" required>
	<option value="">Select Level</option>
	<option value="100">100</option>
	<option value="200">200</option>
	<option value="300">300</option>
	<option value="400">400</option>
	</select>
	<font color="red">*</font>

<select name="semester" required>
	<option value="">Select Semester</option>
	<option value="1">First Semester</option>
	<option value="2">Second Semester</option>
</select>
<font color="red">*</font>
<p><input type="submit" name="course" value="Add" /></p>
</form>
<?php
if (isset($_POST['course'])){
if(!empty($_POST['title']) && !empty($_POST['code']) && !empty($_POST['prog']) && !empty($_POST['semester'])
	&& !empty($_POST['level']) && !empty($_POST['hour']) && !empty($_POST['prog']))
{  if(isset($_POST['title'])){$title = $db->real_escape_string(strip_tags($_POST ['title']));};
	if(isset($_POST['code'])){$code = $db->real_escape_string(strip_tags($_POST ['code']));};
	$level = $db->real_escape_string(strip_tags($_POST['level']));
	$hour = $db->real_escape_string(strip_tags($_POST['hour']));
	$semester = $db->real_escape_string(strip_tags($_POST['semester']));
	$insert = "INSERT INTO courses (id, title, code, semester, level, hour, date)
	VALUES (NULL, '$title', '$code', '$semester', '$level', '$hour',NOW())";
		if ($db->query($insert) === TRUE) {
		$table = $db->insert_id;

		//$table = mysqli_insert_id($insert);
		require ('tables/createcourse.php');
		$prog = $_POST['prog'];
		foreach($prog as $selected){
	$update = $db->query("UPDATE `courses` SET `$selected` = '$selected' WHERE `code` = '$code'") or die(mysqli_error($db));
	}
	echo '<font color="green">Course added successfully!!</font>';
	echo '<script>alert("Course added successfully!!!")</script>';
	}else{die(mysqli_error($db));
		echo '<font color="red">Requested task incomplete, please try again!!</font>';
		echo '<script>alert("Requested task incomplete, please try again!!")</script>';}
}else{echo '<script>alert("Enter all required fields!!")</script>';}
}

?>
</fieldset>

</div>
</body>
</html>
