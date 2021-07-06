<?php
include ('../cert.php');

if(!ISSET($_SESSION)){SESSION_START();}
	if(!ISSET($_SESSION['teller'])){	header ("location: transactions.php");}else{
	if(!ISSET($_SESSION['id'])){	header ("location: transactions.php");}
	if(ISSET($_SESSION['teller'])){$teller = $_SESSION['teller'] ;}
	if(ISSET($_SESSION['bankid'])){$bankid = $_SESSION['bankid'];}
	if(ISSET($_SESSION['transcode'])){$transcode = $_SESSION['transcode'];}
	if(ISSET($_SESSION['programme'])){$programme = $_SESSION['programme'];}
	if(ISSET($_SESSION['amount'])){$amount = $_SESSION['amount'];}
	if(ISSET($_SESSION['branch'])){$branch = $_SESSION['branch'];}
	if(ISSET($_SESSION['addnu'])){$addnum = $_SESSION['addnu'];}


	}
	if(ISSET($programme)){$programme = $db->query("SELECT `programme` FROM `programmes` WHERE abb = '".$programme."'") or die (mysqli_error($db));
	$prg = mysqli_fetch_array($programme);$programme = $prg['programme'];}
	/*$bankid = $db->query("SELECT `bank` FROM `bankdetails` WHERE id = '".$bankid."'") or die (mysqli_error($db));
$bnk = mysqli_fetch_array($bankid);$bankid = $bnk['bank']; */
?>
<html>
<head>
<title>Transaction slip</title>
</head>
<body>
<print>
<fieldset style="width:60%; margin:5% auto; text-align:center;">
<legend><strong>TRANSACTION SLIP</strong></legend>
<p><?php if(ISSET($_SESSION['form']))
{echo '<font color="blue"><strong>Proof of payment for Application Form for '.$programme.'</strong></font>'; } ?></p>
<p><?php if(ISSET($_SESSION['tution']))
{echo '<font color="blue"><strong>Proof of payment for Tuition</strong></font>'; } ?></p>
<p><font color="blue">...Log on to <?php echo '"'.$website.'/students"' ;?> and proceed...</font></p>

<div style="text-align:left;">
	<table>
<strong>
<?php if (!EMPTY($addnum)){echo '<tr><td>Admission Number:&emsp; </td><td>'.$addnum.'</td></tr>' ;  }  ?>
<?php if (!EMPTY($amount)){echo '<tr><td>Amount: &emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;</td><td>N'.$amount.'</td></tr>' ;  }  ?>
<?php if (!EMPTY($transcode)){echo '<tr><td>Transaction Code:&emsp; </td><td>'.$transcode.'</td></tr>' ;} ?>
<?php if (!EMPTY($teller)){echo '<tr><td>Serial Number:&emsp;&emsp;&nbsp;</td><td>' .$teller.'</td></tr>' ; }	 ?>
<?php if (!EMPTY($bankid)){echo '<tr><td>Bank: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td><td>' .$bankid.'</td></tr>' ;}    ?>
<?php if (!EMPTY($branch)){echo '<tr><td>Cashier: &emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;</td><td>' .$branch.'</td></tr>' ;}    ?>
</strong>
</table>
</div></br></br></br></br>
<input type="button" value="PRINT" onclick= "window.print()" /></br></br>
<p style="text-align:left;"><font color="red"><strong>Endeavor to maintain this slip as you will solely be
responsible for not providing this slip for future reference...</strong></font></p>
</fieldset>
</print>
<div style="text-align:center;"><input type="button" value="<<<-- Go Back" onclick= "location.href='transactions.php'" /></div>
</body>
<?php
UNSET($_SESSION['teller']);
?>
</html>
