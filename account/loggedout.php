<html>
<head>
<title>Logged Out!!
</title>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
</style>
<body>

<fieldset style="background-color:lightgreen; width:60%; margin:0 auto; height:50%;">
<legend><h2>Logged-out</h2></legend>
<h1>* You have been logged out successfully !!</h1>
<input type='button' value='<- Go to LOG-IN page' onclick='location.href="index.php"' />
<?php
include('../certs.php');	
SESSION_UNSET();
SESSION_DESTROY();
?>
</fieldset>

</body>
</html>