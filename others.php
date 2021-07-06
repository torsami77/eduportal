<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
#others {
background: black;
color: white;
}
</style>
</head>
<body>

<?php
/*include ('certs.php');
if ($row['datecompleted'] != null){header('location: interview4.php');}
*/


include ('certs.php');
if(ISSET($_SESSION['email'])){
$management = $rw['management'] ;}else{$management = 'vip';}
if ($management != 'registrar'){
if ($row['datecompleted'] != null ){header('location: interview4.php');}}

?>
<fieldset class="form">
<?php include('navi.php'); ?>
</fieldset>

<fieldset class="form">
<legend>OTHERS</legend>
<form action="" method="POST" enctype="multipart/form-data" >
<p id="<?php  $value='court'; include ('value.php'); ?>" >1. Have you ever been convicted by a court of law?<font color="red">*</font>
Yes <input type="radio" name="court" value="Yes" <?php if(ISSET($value)){if($value == 'Yes'){echo 'checked';}} ?>/>
No <input type="radio" name="court" value="No" <?php if(ISSET($value)){if($value == 'No'){echo 'checked';}} ?>/></br>
<textarea cols="30" rows="8" name="convicted" placeholder="If yes, for what reason&#40s&#41" >
<?php  $value='convicted'; include ('value.php'); ?>
</textarea></p>
<p id="<?php  $value='discipline'; include ('value.php'); ?>">2. Have you ever been discipline by a church?<font color="red">*</font>
Yes <input type="radio" name="discipline" value="Yes" <?php if(ISSET($value)){if($value == 'Yes'){echo 'checked';}} ?>/>
No <input type="radio" name="discipline" value="No" <?php if(ISSET($value)){if($value == 'No'){echo 'checked';}} ?>/></br>
<textarea cols="30" rows="8" name="cdiscipline" placeholder="If yes, for what reason&#40s&#41" >
<?php  $value='cdiscipline'; include ('value.php'); ?>
</textarea></p>
<p>3. </br><textarea cols="30" rows="8" name="why" placeholder="Why do you want to come to the Seminary?" required>
<?php  $value='why'; include ('value.php'); ?>
</textarea><font color="red">*</font></p>
<p>4. </br><textarea cols="30" rows="8" name="what" placeholder="What are your beliefs about the Bible?" required>
<?php  $value='what'; include ('value.php'); ?>
</textarea><font color="red">*</font></p>
<p id="<?php  $value='christian'; include ('value.php'); ?>">5. Do you consider yourself a CHRISTIAN?<font color="red">*</font>
Yes <input type="radio" name="christian" value="Yes" <?php if(ISSET($value)){if($value == 'Yes'){echo 'checked';}} ?>/>
No <input type="radio" name="christian" value="No" <?php if(ISSET($value)){if($value == 'No'){echo 'checked';}} ?>/></br>
<textarea cols="30" rows="8" name="basis" placeholder="If yes, on what basis?" >
<?php  $value='basis'; include ('value.php'); ?>
</textarea>
</p>
<p>6. Upload a PDF document that explains:<font color="red">*</font></br>
a. How you become a Christian and what the Lord means to you today.
<?php $uploaderdir="testimony/".$addnum.".pdf";
if(file_exists($uploaderdir)){echo'<font></br>You can <a href="testimony/index.php" tab="_blank">view uploaded file </a>or
upload another file to update the file</font>';}?>
</br><input type="file" name="testimony" /></br></br>
b. Why you want to come to the Seminary.
<?php $uploaderdir="call/".$addnum.".pdf";
if(file_exists($uploaderdir)){echo'<font></br>You can <a href="call/index.php" tab="_blank">view uploaded file </a>or
upload another file to update the file</font>';}?>
</br><input type="file" name="call" /></p></br></br>
<p>7. Upload a PDF scanned copy of your completed medical form.<font color="red">*</font>
<?php $uploaderdir="medical/".$addnum.".pdf";
if(file_exists($uploaderdir)){echo'<font></br>You can <a href="medical/index.php" tab="_blank">view uploaded file </a>or
upload another file to update the file</font>';}?>
</br><input type="file" name="medical" /></p></br></br>
<p><input type="submit" name="save" value="Save"/></p>
</form>

<?php
include ('oth.php');
?>

</fieldset>


<fieldset class="form">
</br>
<div style="float:left;">
<input type="button" value="<<< Back" onclick="location.href='affiliations.php'" />
</div>
<?php include('gate.php'); ?>
<div style="float:left;">
<input type="button" value=">>> Foward" onclick="location.href='submit.php'" />
</div>
</fieldset>
</body>
