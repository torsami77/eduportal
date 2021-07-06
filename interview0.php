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
$addnum = $_SESSION['addnum'];
?>

<fieldset class="form">
</br>
<div style="float:left;">
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
	 if ($row['refcomment1'] != 'completed'){echo
	 '</br><p><form action="" method="POST">
	<font color="blue"><strong>*The Pastor/official of your local church has not completed the referral form sent to his/her email</strong></font></p>
	<input type="submit" name="1" value="Update Referee" /></form></p>';
		 echo'
		  <p>' ;
	 }
	  if ($row['refcomment2'] != 'completed'){echo
	  '</br><p><form action="" method="POST">
	  <font color="blue"><strong>*Principal or equivalent of your previous school has not completed the referral form sent to his/her email</strong></font></p>
	  <input type="submit" name="2" value="Update Referee" /></form></p>';
	 }
	  if ($row['refcomment3'] != 'completed'){echo
	  '</br><p><form action="" method="POST">
		<font color="blue"><strong>*Your trained Medical Officer &#40; Examining Physician &#41;" has not completed the referral form sent to his/her email</strong></font></p>
		<input type="submit" name="3" value="Update Referee" /></form></p>';
	 }
		  echo '</div></div>';

if(ISSET($_POST['1'])){$_SESSION['reff']=1; header ("location: reemailref.php");;}
if(ISSET($_POST['2'])){$_SESSION['reff']=2; header ("location: reemailref.php");;}
if(ISSET($_POST['3'])){$_SESSION['reff']=3; header ("location: reemailref.php");;}
		  ?>
</fieldset>


<fieldset class="form">
</br>
<div style="float:left;">
</div>
<h2 style="color:blue; float:left;">INTERVIEW MODE</h2>
<div style="float:left;">
<input type="button" value=">>> Foward" onclick="location.href='interview1.php'" />
</div>
</fieldset>
</body>
