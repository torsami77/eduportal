<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
</head>
<body>

<?php
include ('certs.php');
?>
<fieldset id="form">
<?php include('navi.php'); ?>
</fieldset>

<fieldset id="form">
<legend>PERSONAL DATA</legend>
<p>1. <input type="text" name="last" placeholder="Last Name"/></p>
<p>2. <input type="text" name="first" placeholder="first Name"/></p>
<p>3. <input type="text" name="other" placeholder="Other Name"/></p>
<p>4.</br>
<textarea name="homeadd" cols="20" rows="5" placeholder="Home address">
</textarea>
</p>
<p>5.</br> 
<textarea name="postal" cols="20" rows="5" placeholder="Postal or contact address">
</textarea>
</p>
<p>6. Date of Birth: <input type="date" name="bday" placeholder="mm/dd/yyyy"/></p>
<p>7. <input type="text" name="bplace" placeholder="Place of birth"/></p>
<p>8. <?php include('countries.php'); ?> </p>
<p>9. <?php include('states.php'); ?> </p>
<p>10. If state outside Nigeria: <input type="text" name="outside" placeholder=" Specify state"/></p>
<p>11. <select name="marital">
<option>Select marital status</option>
<option value="single">Single</option>
<option value="married">Married</option>
<option value="widowed">Widowed</option>
<option value="divorced">divorced</option>
</select>
</p>
<p>12. If Married,</br>
a.<input type="text" name="spouse" placeholder="Name of spouse"/></br></br>
b. Date of marriage <input type="date" name="wedded" placeholder="mm/dd/yyyy"/>   </br></br>
c. If any, enter only figures seperated by commas to indicate the ages of children</br>
<textarea name="ages" placeholder="e.g; 5, 8, 10, 12, 15">
</textarea></p>
<p>13. If single, do you expect to marry during your time of study at the Seminary?  
Yes <input type="radio" name="engaged" value="yes"/> No <input type="radio" name="engaged" value="no"/>
</p>
<p>14. Are you in good health?  
Yes <input type="radio" name="engaged" value="yes"/> No <input type="radio" name="engaged" value="no"/></br>
<textarea cols="20" rows="5" name="health" placeholder="If no, what are your physical problems">
</textarea>
</p>

<p>15.</br>
<textarea cols="20" rows="5" name="health" placeholder="How do you plan to sponsor your studies at the Seminary">
</textarea>

</fieldset>


</form>



<fieldset id="form">
<?php include('gate.php'); ?>
</fieldset>
</body>