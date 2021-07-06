<?php

if(!ISSET($_SESSION)){
SESSION_START();}
			 $addnum = $_SESSION['addnu'] ;
			 $sn = $_SESSION['sn'] ;

include('certs.php');


$programme = $row['programme'];
$programme = $db->query("SELECT `programme` FROM `programmes` WHERE abb = '".$programme."'") ;
$prg = mysqli_fetch_array($programme);
$programme = $prg['programme'];



?>

<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Edu-Portal</title>
</head>
<body>

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
<fieldset>
<legend></legend>
<p> <input type='button' value='LOG-OUT' onclick='location.href="loggedout.php"' /> </p>
</fieldset>

<div style="width:75%; margin: 0 auto; " >
<?php if ($sn==1)
		{$position =  "&emsp;&emsp;&emsp;&emsp;&ensp;Pastor/official of Applicant's local Church or DCC or equivalent body" ;
		require ('refereeform1.php');}
elseif($sn==2)
		{$position = "&emsp;&emsp;&emsp;&emsp;&ensp;Principal or equivalent of Applicant's previous school " ;
		require ('refereeform2.php');}
else{$position = "&emsp;&emsp;&emsp;&emsp;&ensp;A trained Medical Officer &#40; Examining Physician &#41;" ;
		require ('refereeform3.php');}
?>

</div>
</body>
</html>
