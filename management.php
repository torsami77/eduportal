<?php
include('certs.php');
?>
<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Management</title>
</head>
<body>
<div class="form" style="margin:auto auto; width:75%;">
<?php
include('links.php');
?>
</div>

<div class="form" style="margin:auto auto; width:75%;">
<fieldset>
<legend>MANAGEMENT</legend>
<p><input type="button" onclick="location.href='dean.php'" value="ACADEMIC DEAN" /></p>
<p><input type="button" onclick="location.href='account/'" value="BURSAR" /></p>
<p><input type="button" onclick="location.href='provost.php'" value="DEPUTY PROVOST" /></p>
<p><input type="button" onclick="location.href='provost.php'" value="PROVOST" /></p>
<p><input type="button" onclick="location.href='registrar.php'" value="REGISTRAR" /></p>
</fieldset>
</div>
</body>
</html>
