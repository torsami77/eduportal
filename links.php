<fieldset>
<div style="float:left; width:50%;">
<h3>Hello, <?php echo $rw['title'].' '.$rw['surname'].' '.$rw['firstname']; ?></h3>
</div>
<div style="float:right; width:50%;">
<input type='button' value='LOG-OUT' onclick='location.href="loggedout.php"' />
<input type='button' value='CHANGE PASSWORD' onclick='location.href="fchangepassword.php"' />
</div>
</fieldset>
