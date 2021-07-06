<?php

include ('certs.php');
$page = 'registrar';
include ('manage.php');
?>
<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Bursary Office</title>
</head>
<body>
<div class="form" style="margin:auto auto; width:75%;">
<?php
include('links.php');
?>
</div>


<div class="form" style="margin:auto auto; width:75%;">
<fieldset>
<legend>Check transaction&#40;s&#41;</legend>
<fieldset>
&emsp;
<legend>View all</legend>
<form action="" method="POST" >
<p>From:
<input type="date" name="from" placeholder="yyyy-mm-dd"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required/></p>
<p>To:&emsp;
<input type="date" name="to" placeholder="yyyy-mm-dd"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required/></p>
<p>&emsp;&emsp;&emsp;<input type="submit" name="all" value="View all" /></p>
</form>

<?php
if (ISSET($_POST['all'])){
	$from = $db->real_escape_string(strip_tags($_POST['from']));
	$to = $db->real_escape_string(strip_tags($_POST['to']));
	$all = $db->query("SELECT * FROM `transactions` WHERE `date`='$from' || `date`>'$from' AND `date`<'$to' || `date`='$to'");
	if (!$all->num_rows){echo '<font color="blue">No record&#40;s&#41; found..</font>';
		}else{
			if(!ISSET($_SESSION)){SESSION_START();}
			$_SESSION['from'] = $from;
			$_SESSION['to'] = $to;
header ("location: viewreport.php");}}

?>
</fieldset>
</br>
</br>
</br>
<fieldset>
<legend>View Individual</legend>
<form action="" method="POST" >
<p>&emsp;&emsp;&emsp;<input type="text" name="individual" placeholder="Matric Number" required/></p>
<p>From:
<input type="date" name="from" placeholder="yyyy-mm-dd"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required/></p>
<p>To:&emsp;
<input type="date" name="to" placeholder="yyyy-mm-dd"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required/></p>
<p>&emsp;&emsp;&emsp;<input type="submit" name="view" value="View" /></p>
</form>
&emsp;
<?php

if (ISSET($_POST['view'])){
	$from = $db->real_escape_string(strip_tags($_POST['from']));
	$to = $db->real_escape_string(strip_tags($_POST['to']));
	$individual = $db->real_escape_string(strip_tags($_POST['individual']));
	$all = $db->query("SELECT * FROM `transactions` WHERE (`addnum`='$individual') AND (`date`='$from' || `date`>'$from') AND (`date`<'$to' || `date`='$to')
	");
	if (!$all->num_rows){echo '<font color="blue">No record&#40;s&#41; found..</font>';
		}else{
			if(!ISSET($_SESSION)){SESSION_START();}
			$_SESSION['from'] = $from;
			$_SESSION['to'] = $to;
			$_SESSION['individual'] = $individual;
header ("location: viewreport.php");}}

?>
</fieldset>
</fieldset>
</div>

</body>
</html>