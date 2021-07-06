





<fieldset class="form">
<legend>SIGN-UP</legend>
<form action="" method="POST" enctype="multipart/form-data" >
<p><font color="red">All fields are required</font></p>
<p><input type="text" name="email" placeholder="Your Email*" required/><font color="red">*</font></p>
<p><input type="number" name="mobile" size="11" placeholder="Your Phone Number*" required/><font color="red">*</font></p>
<p><font color="blue"> Password must be at least eight characters</font><font color="red">*</font></p>
<p><input pattern=".{8,}" type="password" name="pword" placeholder="Create Password*" required/><font color="red">*</font></p>
<p><input pattern=".{8,}" type="password" name="vpword" placeholder="Verify Password*" required/><font color="red">*</font></p>
<?php include('programme.php');?>
<p></p>
<input type="submit" value="Sign up" name="submit"/>
</form>

<?php
if (isset($_POST["submit"]))
{


header ('Location: personal.php');	
}
;
?>


</fieldset>