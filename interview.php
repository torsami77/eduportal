<?php
include('cert.php');
if(!ISSET($_SESSION['email'])){
header ("location:staff.php");};
?>
<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
</style>
</head>
<body>

<div style="width:50%; text-align:center; margin:0 auto;">
</br>
<p><input type='button' value='<- BACK TO HOME PAGE' onclick='location.href="registrar.php"' /></p>
</br></br>
<fieldset>
<legend>RETRIEVE CANDIDATE DATA</legend>
<form action="" method="POST">
Enter candidate Admission number <input type="text" name="addnum" />
<input type="submit" name="retrieve" value="Retrieve" />
</form>
<?php
if(!ISSET($_SESSION['email'])){header ("location: loggedout.php");};
if(isset($_POST['retrieve'])){
	if(isset($_POST['addnum'])){
		$addnum = $db->real_escape_string(strip_tags($_POST['addnum'])) or die ('<font color="red">Please enter a valid candidate admission number</font>');}
$result = $db->query("SELECT addnum FROM students where addnum=$addnum") or die ('<font color="red">Problem connecting to server, try again later!!</font>');
if($result->num_rows){
	SESSION_START();
	$_SESSION['addnu']= "$addnum" ;
	header ("location: interview01.php");
}else{die('<script>alert("The Admission number you entered was not found")</script>');}
	}


?>
</fieldset>
</div>
</body>
</html>
