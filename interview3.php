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
include ('certs.php');
if(!ISSET($_SESSION['addnu'])){header('location: interview.php');}
$addnum = $_SESSION['addnu'];
$result = $db->query("SELECT * FROM students WHERE addnum='$addnum'") ;
$row = $result->fetch_array(MYSQLI_BOTH) ;
?>

<fieldset class="form">
</br>
<div style="float:left;">
<input type="button" value="<<< Back" onclick="location.href='interview2.php'" />
</div>
<h2 style="color:blue; float:left;">INTERVIEW MODE</h2>
<div style="float:left;">
<input type="button" value=">>> Foward" onclick="location.href='interview4.php'" />
</div>
</fieldset>


<fieldset style="width:70%;margin: 0 auto;">
<legend>AFFILIATIONS</legend>

<form action="" method="POST" enctype="multipart/form-data" >
<fieldset>
<legend>CHURCH MEMBERSHIP</legend>
<p>1. <input type="text" size="40" name="denomination"  value="<?php  $value='denomination'; include ('value.php'); ?>" placeholder="Which Denomination do you belong to?"/>
, if ECWA state DCC <input type="text" name="dcc" value="<?php  $value='dcc'; include ('value.php'); ?>" placeholder="DCC" /> </p>
<p>2. <input type="text" size="40" name="pastor"  value="<?php  $value='pastor'; include ('value.php'); ?>" placeholder="Name of Pastor"/></p>
<p>3. <input type="text" size="40" name="caddress"  value="<?php  $value='caddress'; include ('value.php'); ?>" placeholder="Church Address"/></p>
<p id="<?php  $value='baptised'; include ('value.php'); ?>">4. Have you been baptised?
Yes <input type="radio" name="baptised" value="Yes" <?php if(ISSET($value)){if($value == 'Yes'){echo 'checked';}} ?>/>
No <input type="radio" name="baptised" value="No" <?php if(ISSET($value)){if($value == 'No'){echo 'checked';}} ?>/></p>

</fieldset>

<fieldset >
<legend>OCCUPATION</legend>
<p>1. <input type="text" size="40" name="occupation"  value="<?php  $value='occupation'; include ('value.php'); ?>" placeholder="What is your occupation?"/></p>
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
Each referee must complete the appropriate Confidential Reference Form as follows:</br>
 <p>1. The Pastor/official of your local church or the DCC or equivalent body and this form must be officially stamped,</p>
 <p>2. The Principal of your previous school and this form must also be officially stamped and </p>
 <p>3. A trained Medical Officer &#40; Examining Physician &#41;. </p>
 <p>i. a.<input type="text" name="ref1" size="40" value="<?php  $value='ref1'; include ('value.php'); ?>" placeholder="Name of referee 1" />
       b.<input type="text" name="ref1mobile" size="40" value="<?php  $value='refmobile1'; include ('value.php'); ?>" placeholder="Mobile number of referee 1" />
	   c.<input type="email" name="ref1email" size="40"  value="<?php  $value='refemail1'; include ('value.php'); ?>" placeholder="Email of referee 1" />
</p>
 <p>ii. a.<input type="text" name="ref2" size="40" value="<?php  $value='ref2'; include ('value.php'); ?>" placeholder="Name of referee 2" />
       b.<input type="text" name="ref2mobile" size="40"  value="<?php  $value='refmobile2'; include ('value.php'); ?>" placeholder="Mobile number of referee 2" />
	   c.<input type="email" name="ref2email" size="40"  value="<?php  $value='refemail2'; include ('value.php'); ?>" placeholder="Email of referee 2" />
</p>
 <p>iii. a.<input type="text" name="ref3" size="40"  value="<?php  $value='ref3'; include ('value.php'); ?>" placeholder="Name of referee 3" />
       b.<input type="text" name="ref3mobile" size="40" value="<?php  $value='refmobile3'; include ('value.php'); ?>" placeholder="Mobile number of referee 3" />
	   c.<input type="email" name="ref3email" size="40" value="<?php  $value='refemail3'; include ('value.php'); ?>" placeholder="Email of referee 3" />
</p>

</fieldset>

</form>

<?php
include ('affi.php');
?>
</fieldset>


<fieldset class="form">
</br>
<div style="float:left;">
<input type="button" value="<<< Back" onclick="location.href='interview2.php'" />
</div>
<h2 style="color:blue; float:left;">INTERVIEW MODE</h2>
<div style="float:left;">
<input type="button" value=">>> Foward" onclick="location.href='interview4.php'" />
</div>
</fieldset>
</body>
