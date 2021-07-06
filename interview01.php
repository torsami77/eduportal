<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
#personal {
background: black;
color: white;
}
</style>
</head>
<body>
<fieldset class="form">
<div style="float:right;">
<?php
echo "<p><input type='button' value='LOG-OUT' onclick='location.href=";
echo '"loggedout.php"';
echo "' />";
?>
</div>
</fieldset>
<?php
include ('certs.php');
if(!ISSET($_SESSION['addnu'])){header('location: interview.php');}
$addnum = $_SESSION['addnu'];
$result = $db->query("SELECT * FROM students WHERE addnum='$addnum'") ;
$row = $result->fetch_array(MYSQLI_BOTH) ;
?>

<fieldset class="form">
</br>
<div style="float:left;">
</div>
<div style="float:left;">
<input type="button" value="<<< Back" onclick="location.href='interview.php'" />
</div>
<h2 style="color:blue; float:left;">INTERVIEW MODE</h2>
<div style="float:left;">
<input type="button" value=">>> Foward" onclick="location.href='interview1.php'" />
</div>
</fieldset>


<fieldset class="form">
<legend>BIO-DATA</legend>

<div style="float:right; margin:10 50; width:18%;">
<?php
$passportdir="passport/".$addnum.".jpg" ;
echo 'Application Number: '.$addnum.'</br><img src="'.$passportdir.'" />'; ?>
</div>
<div style="float:left; margin:10 50;width:60%;">
<?php
$abbrev = $row['programme'];
$programme = $db->query("SELECT * FROM `programmes` WHERE `abb` = '".$abbrev."'") or die (mysqli_error($db));
$prg = mysqli_fetch_array($programme);
$examdate = $prg['examdate'];
$programme = $prg['programme'];
$interviewdate = $prg['interviewdate'];

echo '<div style="float:left; ">
	 <p><strong>Full Names:</strong>  '.$row['last'].', '.$row['first'].' '.$row['other'].'</p>
	 <p><strong>Mobile Number:</strong> '.$row['pnumber'].'</p>
	 <p><strong>Email Address:</strong> '.$row['email'].'</p>
	 <p><strong>Programme:</strong> '.$programme.'</p></br></br>';
	 if ($examdate != null){echo '
	 <p><font color="blue"><strong>*Entrance Examination Date:</strong> '.$examdate.'</font></p>' ;
	 }
	 if ($interviewdate != null){echo '
	 <p><font color="blue"><strong>*Entrance Interview Date:</strong> '.$interviewdate.'</font></p>' ;
	 }

		  echo '</div></div>';

		  ?>
</fieldset>


<fieldset class="form">
</br>
<div style="float:left;">
</div>
<div style="float:left;">
<input type="button" value="<<< Back" onclick="location.href='interview.php'" />
</div>
<h2 style="color:blue; float:left;">INTERVIEW MODE</h2>
<div style="float:left;">
<input type="button" value=">>> Foward" onclick="location.href='interview1.php'" />
</div>
</fieldset>
</body>
