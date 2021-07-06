<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
#affiliations {
background: black;
color: white;
}
</style>
</head>
<body>

<?php
/*include ('certs.php');
if ($row['datecompleted'] != null){header('location: interview3.php');}
*/

include ('certs.php');
if(ISSET($_SESSION['email'])){
$management = $rw['management'] ;}else{$management = 'vip';}
if ($management != 'registrar'){
if ($row['datecompleted'] != null ){header('location: interview3.php');}}

?>
<fieldset class="form">
<?php include('navi.php'); ?>
</fieldset>


<fieldset style="width:70%;margin: 0 auto;">
<legend>AFFILIATIONS</legend>

<form action="" method="POST" enctype="multipart/form-data" >
<fieldset>
<legend>CHURCH MEMBERSHIP</legend>
<p>1.

<select name="denomination"  id="<?php  $value='denomination'; include ('value.php'); ?>" required>
	<option value="">Which Denomination do you belong to?</option>
	<option value="ECWA" <?php if(ISSET($value)){if($value == 'ECWA'){echo 'selected';}} ?> >ECWA</option>
	<option value="Others" <?php if(ISSET($value)){if($value == 'Others'){echo 'selected';}} ?> >Others</option>
</select><font color="red">*</font>
</br>If ECWA state DCC/ If others, Specify Denomination <input type="text" name="dcc" value="<?php  $value='dcc'; include ('value.php'); ?>" placeholder="Specify" required/> </p>
<p>2. <input type="text" size="40" name="pastor"  value="<?php  $value='pastor'; include ('value.php'); ?>" placeholder="Name of Pastor" required/></p>
<p>3. <input type="text" size="40" name="caddress"  value="<?php  $value='caddress'; include ('value.php'); ?>" placeholder="Church Address" required/></p>
<p id="<?php  $value='baptised'; include ('value.php'); ?>">4. Have you been baptised? <font color="red">*</font>
Yes <input type="radio" name="baptised" value="Yes" <?php if(ISSET($value)){if($value == 'Yes'){echo 'checked';}} ?>/>
No <input type="radio" name="baptised" value="No" <?php if(ISSET($value)){if($value == 'No'){echo 'checked';}} ?>/></p>

</fieldset>

<fieldset >
<legend>OCCUPATION</legend>
<p><font color="blue">Please enter 'N.A.' for Not Applicable fields</font></p>
<p>1. <input type="text" size="40" name="occupation"  value="<?php  $value='occupation'; include ('value.php'); ?>" placeholder="What is your occupation?" required/></p>
<p>2. <input type="text" size="40" name="position"  value="<?php  $value='position'; include ('value.php'); ?>" placeholder="What is your position in this job?"/></p>
<p>3. How long have you:</br>
 a. <input type="text" size="40" name="worked"  value="<?php  $value='worked'; include ('value.php'); ?>" placeholder="Worked in this job"/></br>
 b. <input type="text" size="40" name="held"  value="<?php  $value='held'; include ('value.php'); ?>" placeholder="Held this Position"/></p>
<p>4. <input type="text" size="40" name="employer"  value="<?php  $value='employer'; include ('value.php'); ?>" placeholder="Present employer's name:"/></p>
<p>5. <input type="text" size="40" name="eaddress" value="<?php  $value='eaddress'; include ('value.php'); ?>" placeholder="Employer's address:"/></p>



</fieldset>


<fieldset >
<legend>REFEREES</legend>
<p>List three names and addresses of your referees.
Each referee will recieve and must complete the appropriate Confidential Reference Form via email:</br>
 <p>1. The Pastor/official of your local church or the DCC or equivalent body and this form must be officially stamped,
  <p> a.<input type="text" name="ref1" size="40" value="<?php  $value='ref1'; include ('value.php'); ?>" placeholder="Name of referee 1" required/>
       b.<input type="text" name="refmobile1" size="40" value="<?php  $value='refmobile1'; include ('value.php'); ?>" placeholder="Mobile number of referee 1" required/>
	   c.<input type="email" name="refemail1" size="40"  value="<?php  $value='refemail1'; include ('value.php'); ?>" placeholder="Email of referee 1" required/>
</p></p>
 <p>2. The Principal of your previous school and this form must also be officially stamped
 <p> a.<input type="text" name="ref2" size="40" value="<?php  $value='ref2'; include ('value.php'); ?>" placeholder="Name of referee 2" required/>
       b.<input type="text" name="refmobile2" size="40"  value="<?php  $value='refmobile2'; include ('value.php'); ?>" placeholder="Mobile number of referee 2" required/>
	   c.<input type="email" name="refemail2" size="40"  value="<?php  $value='refemail2'; include ('value.php'); ?>" placeholder="Email of referee 2" required/>
</p></p>
 <p>3. A trained Medical Officer &#40; Examining Physician &#41;.
 <p> a.<input type="text" name="ref3" size="40"  value="<?php  $value='ref3'; include ('value.php'); ?>" placeholder="Name of referee 3" required/>
       b.<input type="text" name="refmobile3" size="40" value="<?php  $value='refmobile3'; include ('value.php'); ?>" placeholder="Mobile number of referee 3" required/>
	   c.<input type="email" name="refemail3" size="40" value="<?php  $value='refemail3'; include ('value.php'); ?>" placeholder="Email of referee 3" required/>
</p></p>




</fieldset>

<p><input type="submit" name="save" value="Save"/></p>
</form>

<?php
include ('affi.php');
?>
</fieldset>


<fieldset class="form">
</br>
<div style="float:left;">
<input type="button" value="<<< Back" onclick="location.href='academics.php'" />
</div>
<?php include('gate.php'); ?>
<div style="float:left;">
<input type="button" value=">>> Foward" onclick="location.href='others.php'" />
</div>
</fieldset>
</body>
