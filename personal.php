<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
#personal {
background: black;
color: white;
}
</style>
</head>
<body>

<?php
include ('certs.php');
if(ISSET($_SESSION['email'])){
$management = $rw['management'] ;}else{$management = 'vip';}
if ($management != 'registrar'){
if ($row['datecompleted'] != null ){header('location: interview1.php');}}
?>
<fieldset class="form">
<?php include('navi.php'); ?>
</fieldset>

<fieldset class="form">
<legend>PERSONAL DATA</legend>
<form method="POST" action="" enctype="multipart/form-data">

<p>1. <input type="text" name="last"
value="<?php  $value='last'; include ('value.php'); ?>" placeholder="Last Name" required/></p>

<p>2. <input type="text" name="first"
value="<?php  $value='first'; include ('value.php'); ?>" placeholder="First Name" required/></p>

<p>3. <input type="text" name="other"
value="<?php  $value='other'; include ('value.php'); ?>" placeholder="Other Name"/></p>

<p>4.</br>
<textarea name="homeadd" cols="20" rows="5" placeholder="Home address" required>
<?php  $value='homeadd'; include ('value.php'); ?>
</textarea>
</p>

<p>5.</br>
<textarea name="postal" cols="20" rows="5" placeholder="Postal or contact address" required>
<?php  $value='postal'; include ('value.php'); ?>
</textarea>
</p>

<p>6. Date of Birth:
<input type="date" name="bday" placeholder="yyyy-mm-dd" value="<?php  $value='bday'; include ('value.php'); ?>"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" /></p>
<p>7. <input type="text" name="bplace" value="<?php  $value='bplace'; include ('value.php'); ?>" placeholder="Place of birth" required /></p>
<p>8. <?php include('countries.php'); ?> </p>
<p>9. <?php include('states.php'); ?> </p>
<p>10. If state outside Nigeria: <input type="text" name="outside" placeholder=" Specify state" value="<?php  $value='outside'; include ('value.php'); ?>" /></p>
<p>11. <select name="marital" id="<?php  $value='marital'; include ('value.php'); ?>" required>
<option value="">Select Marital status</option>
<option value="Single" <?php if(ISSET($value)){if($value == 'Single'){echo 'selected';}} ?> >Single</option>
<option value="Married" <?php if(ISSET($value)){if($value == 'Married'){echo 'selected';}} ?> >Married</option>
<option value="Widowed" <?php if(ISSET($value)){if($value == 'Widowed'){echo 'selected';}} ?> >Widowed</option>
<option value="Divorced" <?php if(ISSET($value)){if($value == 'Divorced'){echo 'selected';}} ?> >Divorced</option>
</select>
</p>
<p>12. If Married,</br>
a.<input type="text" name="spouse" value="<?php  $value='spouse'; include ('value.php'); ?>" placeholder="Name of spouse"/></br></br>
b. Date of marriage
<input type="date" name="wedded" placeholder="yyyy-mm-dd" value="<?php  $value='wedded'; include ('value.php'); ?>"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))"/>   </br></br>
c. If any, enter only figures seperated by commas to indicate the ages of children</br>
<textarea name="ages" placeholder="e.g; 5, 8, 10, 12, 15">
<?php  $value='ages'; include ('value.php'); ?>
</textarea></p>
<p id="<?php  $value='engaged'; include ('value.php'); ?>">
13. If single, do you expect to marry during your time of study at the Seminary?
Yes <input type="radio" name="engaged" value="Yes" <?php if(ISSET($value)){if($value == 'Yes'){echo 'checked';}} ?>/>
No <input type="radio" name="engaged" value="No" <?php if(ISSET($value)){if($value == 'No'){echo 'checked';}} ?>/>
</p>
<p id="<?php  $value='health'; include ('value.php'); ?>">
14. Are you in good health?<font color="red">*</font>
Yes <input type="radio" name="health" value="Yes" <?php if(ISSET($value)){if($value == 'Yes'){echo 'checked';}} ?>/>
No <input type="radio" name="health" value="No" <?php if(ISSET($value)){if($value == 'No'){echo 'checked';}} ?>/></br>
<textarea cols="20" rows="5" name="physique" placeholder="If no, what are your physical problems">
<?php  $value='physique'; include ('value.php'); ?>
</textarea>
</p>

<p>15.<font color="red">*</font> </br>
<textarea cols="20" rows="5" name="sponsor" placeholder="How do you plan to sponsor your studies at the Seminary"  required>
<?php  $value='sponsor'; include ('value.php'); ?>
</textarea>
<p><input type="submit" name="save" value="Save"/></p>



</form>
<?php include('per.php'); ?>
</fieldset>


<fieldset class="form">
</br>
<?php include('gate.php'); ?>
<div style="float:left;">
<input type="button" value=">>> Foward" onclick="location.href='academics.php'" />
</div>
</fieldset>
</body>
