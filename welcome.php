<?php
include ('certs.php');
$passportdir="passport/".$addnum.".jpg" ;
$regstatus = $db->query("SELECT `status` FROM `faculty` WHERE management = 'registrar'") or die (mysqli_error($db));
		$regst = mysqli_fetch_array($regstatus);$regstatus = $regst['status'];
$programme = $row['programme'];
$programme = $db->query("SELECT `programme` FROM `programmes` WHERE `abb` = '".$programme."'") ;
$prg = mysqli_fetch_array($programme);
$programme = $prg['programme'];

?>
<html>
<head>
<title>Welcome back!!
</title>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
.welcome{
	float:left;
	width:174px;
	height:100px;
	margin:10 50;
	background-color:lightblue;
	text-align:center;
}
.wel{
	float:left;
	width:174px;
	height:100px;
	margin:10 50;
	background-color:red;
	text-align:center;
}
</style>
</head>
<body>

<fieldset class="form">
<legend>BIO-DATA</legend>

<div style="float:right; margin:10 50; width:18%;">
<?php
if ($row['admitted'] != null){
echo 'Admission Number: '.$addnum.'</br>';}else{
	echo 'Application Number: '.$addnum.'</br>';
}
echo' <img src="'.$passportdir.'" />'; ?>
</div>
<div style="float:left;margin:10 50;width:60%; ">
<?php
echo "<p><input type='button' value='LOG-OUT' onclick='location.href=";
echo '"loggedout.php"';
echo "' />";
echo " <input type='button' value='CHANGE PASSWORD' onclick='location.href=";
echo '"schangepassword.php"';
echo "' /></p></br>";

echo '<p>Hi, '.$row['first'].' '.$row['last'].'</p>
	 <p><strong>Mobile Number:</strong> '.$row['pnumber'].'</p>
	 <p><strong>Email Address:</strong> '.$row['email'].'</p>
	 <p><strong>Programme:</strong> '.$programme.'</p>';
	 if ($row['datecompleted'] == null && $row['admitted'] == null ){
		  echo '</div></fieldset>
		  <fieldset class="form">
		<legend>Links</legend>
		 <div id="nav" style="text-color:white;">
<div style="float:left; margin:10 50; background-color:green;">
<li><a href="personal.php">CONTINUE</br>REGISTRATION</a></li></br>
</div></div></div>

<div style="background-color:lightblue;">';
include ('navi.php');
echo '</div>

</fieldset>';
}elseif ($row['datecompleted'] != null && $row['admitted'] != null && $row['adstatus'] != 'Not admitted' && $row['email'] == $_SESSION['namelogin']){

		echo '
	 <p><strong>School Year:</strong> '.$schoolyear.' level</p>
</div>
</fieldset>

<fieldset class="form">
<legend>Links</legend>
<div id="nav" style="text-color:white;">
';

echo'
<li><div class="welcome">
<a href="courseplan.php"></br>VIEW</br>COURSE PLAN</a>
</div></li>
';
	$check = $db->query("SELECT * FROM `registered` WHERE `addnum` = '$addnum'
	AND `currentyear` = '$currentyear' AND `currentsemester` = '$currentsemester'");
if ($check->num_rows){
		echo'
<li><div class="welcome">
<a href="courseview.php">VIEW</br>REGISTERED</br>COURSE&#40;S&#41;</a>
</div></li>';

	if($regstatus == 'Opened'){echo'
<li><div class="welcome">
<a href="courseregistration.php">CHANGE</br>REGISTERED</br>COURSE&#40;S&#41;</a>
</div></li>
		';

	}else{echo'
<li><div class="wel">
<a>COURSE</br>REGISTRATION</br>CLOSED</a>
</div></li>
		';
	}


	}else{if($regstatus == 'Opened'){

	if ($row['programme']=='cbwi'){
		echo'


<li><div class="welcome">
<a href="wcourseregistration.php"></br>COURSE</br>REGISTRATION</a>
</div></li>
	';

	}else{

		echo'


<li><div class="welcome">
<a href="courseregistration.php"></br>COURSE</br>REGISTRATION</a>
</div></li>
	';
	}


	}else{echo'
<li><div class="wel">
<a>COURSE</br>REGISTRATION</br>CLOSED</a>
</div></li>
		';
	}
	}

echo'
<li><div class="welcome">
<a href="transcript.php"></br>VIEW</br>TRANSCRIPT</a>
</div></li>

<li><div class="welcome">
<a href="report.php"></br>CHECK</br>TUITION LOGS</a>
</div></li>

<li><div class="welcome">
<a href="share.php">SHARE</br>CREDIT</br>UNIT&#40;S&#41;</a>
</div></li>
';

echo "

</div>
	 </fieldset>" ;

echo '
</fieldset>
<fieldset class="form">
<legend>Credit Unit&#40;s&#41;</legend>
<div style="float:right;">
<strong>Balance: <font color="green">N'.$row['balance'].'</font></strong>
</div>
</fieldset>
';

	 }else{
		 header ("location:interview0.php");
		 };

?>
</body>
</html>
