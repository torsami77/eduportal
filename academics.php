<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
#academics {
background: black;
color: white;
}
.form{
width: 90%;
margin: 0 auto;
}
</style>
</head>
<body>

<?php
include ('certs.php');
if(ISSET($_SESSION['email'])){
$management = $rw['management'] ;}else{$management = 'vip';}
if ($management != 'registrar'){
if ($row['datecompleted'] != null ){header('location: interview2.php');}}
?>
<fieldset class="form">
<?php include('navi.php'); ?>
</fieldset>

<fieldset class="form">
<legend>ACADEMIC BACKGROUND</legend>
<form action="" method="POST" enctype="multipart/form-data" >
<table border="1">
<tr><td>SN</td><th>Name of School/Institution</th><th>Dates Attended</br>From  ---- To</th>
<th>Certificate Awarded</th><th>Grade Obtain</th><th>Date Received </th><th>Upload Scanned Copy</th></tr>

<?php
	for ($sn=1; $sn <=5; $sn++){
		$x=($sn==1)?"required":"";
	echo '
	<tr><td>'.$sn.'.</td><td>
<input type="text" size="30" name="school'.$sn.'" value="';$value='school'.$sn.''; include ('value.php');echo'" placeholder="Name of School/Institution" '.$x.'/></td>
<td><input type="date" size="10" name="from'.$sn.'" value="';$value='from'.$sn.''; include ('value.php');echo'" placeholder="yyyy-mm-dd"
/>--

<input type="date" size="10" name="to'.$sn.'"  value="';$value='to'.$sn.''; include ('value.php');echo'" placeholder="yyyy-mm-dd"
/></td>
<td><input type="text" name="cert'.$sn.'" size="25" value="';$value='cert'.$sn.''; include ('value.php');echo'" placeholder="Certificate Awarded"/></td>
<td>
	<select name="grade'.$sn.'" value="';$value='grade'.$sn.''; include ('value.php');echo'" >
		<option value="">Grade Obtain</option>
	<option value="Credit"'; if(ISSET($value)){if($value == 'Credit'){echo 'selected';}} echo'>Credit</option>
	<option value="Distinction"'; if(ISSET($value)){if($value == 'Distinction'){echo 'selected';}} echo'>Distinction</option>
	<option value="Excellence"'; if(ISSET($value)){if($value == 'Excellence'){echo 'selected';}} echo'>Excellence</option>
	<option value="Failed"'; if(ISSET($value)){if($value == 'Failed'){echo 'selected';}} echo'>Failed</option>
	<option value="Fair"'; if(ISSET($value)){if($value == 'Fair'){echo 'selected';}} echo'>Fair</option>
	<option value="First class"'; if(ISSET($value)){if($value == 'First class'){echo 'selected';}} echo' >First class</option>
	<option value="Good"'; if(ISSET($value)){if($value == 'Good'){echo 'selected';}} echo'>Good</option>
	<option value="Lower credit"'; if(ISSET($value)){if($value == 'Lower class'){echo 'selected';}} echo'>lower credit</option>
	<option value="Poor"'; if(ISSET($value)){if($value == 'Poor'){echo 'selected';}} echo'>Poor</option>
	<option value="Second class"'; if(ISSET($value)){if($value == 'Second class'){echo 'selected';}} echo'>Second class</option>
	<option value="Upper credit"'; if(ISSET($value)){if($value == 'Upper class'){echo 'selected';}} echo'>Upper Credit</option>
	</select>
</td>
<td><input type="date" size="10" name="certdate'.$sn.'" value="';$value='certdate'.$sn.''; include ('value.php');echo'" placeholder="yyyy-mm-dd"/></td>
<td>';
$uploaderdir="certs/".$sn."/".$addnum.'_'.$sn.".pdf";
if(file_exists($uploaderdir)){echo'<font>You can <a href="certs/index.php?sn='.$sn.'" tab="_blank">view uploaded file </a> or </br>
upload another file to update the file</font>';}

echo'<input type="file" name="scancert'.$sn.'" /></td></tr>




	';
}


?>
</table>

<p><input type="submit" name="save" value="Save"/></p>
</form>
<?php include('aca.php');?>
</fieldset>


<fieldset class="form">
</br>
<div style="float:left;">
<input type="button" value="<<< Back" onclick="location.href='personal.php'" />
</div>
<?php include('gate.php'); ?>
<div style="float:left;">
<input type="button" value=">>> Foward" onclick="location.href='affiliations.php'" />
</div>
</fieldset>
</body>
