<?php

if(!ISSET($_SESSION)){
SESSION_START();}
			 $addnum = $_SESSION['addnu'] ;
			 $_SESSION['sn'] = 1;
			 $sn = $_SESSION['sn'] ;

include('certs.php');
if(!ISSET($_SESSION['addnu'])){header('location: interview.php');}

$result = $db->query("SELECT * FROM students WHERE addnum='$addnum'") ;
$row = $result->fetch_array(MYSQLI_BOTH) ;

$programme = $row['programme'];
$programme = $db->query("SELECT `programme` FROM `programmes` WHERE abb = '".$programme."'") ;
$prg = mysqli_fetch_array($programme);
$programme = $prg['programme'];

if(!ISSET($_SESSION['email'])){
header('location: interview1.php');
}
?>

<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Edu-Portal</title>
</head>
<body>


<fieldset style="width:73%; margin: 0 auto; ">
</br>
<div style="float:left;">
<input type="button" value="<<< Back" onclick="location.href='interview4.php'" />
</div>
<h2 style="color:blue; float:left;">INTERVIEW MODE</h2>
<div style="float:left;">
<input type="button" value="View candidate's next referee" onclick="location.href='interview6.php'" />
</div>
</fieldset>


<div style="width:75%; margin: 0 auto; " >
<fieldset>
<legend>APPLICANT'S PROFILE</legend>
<form action="" Method="POST">
<p><?php echo "<strong><font color='blue' >APPLICANT'S FULL NAME:</font> &emsp; &emsp; ".$row['last']." ".$row['other']." ".$row['first']."</strong>" ; ?></p>
<p><?php echo "<strong><font color='blue' >PROGRAMME APPLYING FOR:</font> &ensp;".$programme ;?></p>
<p><?php echo "<strong><font color='blue' >REFEREE'S FULL NAME:</font>&emsp;&emsp;&emsp;&ensp; ".$row['ref'.$sn]."</strong>" ; ?></p>
</form>
</fieldset>
</div>

<div style="width:75%; margin: 0 auto; " >
<?php if ($sn==1)
		{$position =  "&emsp;&emsp;&emsp;&emsp;&ensp;Pastor/official of Applicant's local Church or DCC or equivalent body" ;
		require ('refereeform1i.php');}
elseif($sn==2)
		{$position = "&emsp;&emsp;&emsp;&emsp;&ensp;Principal or equivalent of Applicant's previous school " ;
		require ('refereeform2i.php');}
else{$position = "&emsp;&emsp;&emsp;&emsp;&ensp;A trained Medical Officer &#40; Examining Physician &#41;" ;
		require ('refereeform3i.php');}
?>

</div>
<fieldset style="width:73%; margin: 0 auto; ">
</br>
<div style="float:left;">
<input type="button" value="<<< Back" onclick="location.href='interview4.php'" />
</div>
<h2 style="color:blue; float:left;">INTERVIEW MODE</h2>
<div style="float:left;">
<input type="button" value="View candidate's next referee" onclick="location.href='interview6.php'" />
</div>
</fieldset>
</body>
</html>
