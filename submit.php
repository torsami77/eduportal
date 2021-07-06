<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
#submit {
background: black;
color: white;
}
</style>
</head>
<body>

<?php
include ('certs.php');
if ($row['datecompleted'] != null){header('location: interview1.php');}
?>
<fieldset class="form">
<?php include('navi.php');
$programme = $row['programme'];
$programme = $db->query("SELECT * FROM `programmes` WHERE `abb` = '".$programme."'") or die ($db(mysqli_error));
$prg = mysqli_fetch_array($programme);$programme = $prg['programme']; ?>
</fieldset>

<fieldset class="form">
<legend>SUBMIT</legend>
<form action="" method="POST" enctype="multipart/form-data" >
Today the <?php echo date("d/m/Y") ; ?>, I adhere to complete my application for admision to study
<?php echo $programme ; ?> at the <?php echo $fullinstadd ;?>
and I comply that all the informations submitted are valid and I will be solely responsible for any false information given.</br>

<div style="width: 20%; margin:0 auto;">
<input type="checkbox" name="checked" required>
Signature
<p><input type="submit" name="submit" value="submit"</p>
</form>
<?php
if (isset($_POST['submit'])){

	if (!isset($_POST['checked']))
	{$correct='Please tick the signature box to indicate your adherance to submit this application'; include('correct.php');}
	else{
		if ($row['per']!== 'Yes'){
			$correct='Please navigate to Personal Data page, complete and save the entry fields'; include('correct.php');}
		if ($row['aca']!== 'Yes'){
			$correct='Please navigate to Academic Details page, complete and save the entry fields'; include('correct.php');}
		if ($row['affi']!== 'Yes'){
			$correct='Please navigate to Affiliation Details page, complete and save the entry fields'; include('correct.php');}
		if ($row['oth']!== 'Yes'){
			$correct='Please navigate to Other Details page, complete and save the entry fields'; include('correct.php');}


	if(!$update = $db->query("
UPDATE students SET

		datecompleted = NOW()

WHERE addnum=$addnum"
)){

	die ('<font color="red">Site under update, please try again later...</font>');};}


header ("location: welcome.php");
}
?>
</div>
<font style="color:blue;">If you submit, you would never be able to effect changes to the information submitted,
make sure you have given proper information</font>
<p style="color:red;">You must submit before your application could be considered... </p>



</fieldset>


<fieldset class="form">
</br>
<div style="float:left;">
<input type="button" value="<<< Back" onclick="location.href='others.php'" />
</div>
<?php include('gate.php'); ?>

</fieldset>
</body>
