<?php
include('certs.php');
?>
<html>
<head>
<title>View Registered Course&#40;s&#41!!
</title>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
table{
    border-collapse: collapse;
    border: 2px solid red;
	width: 100%
	}

tr, td{
    border-collapse: collapse;
    border: 2px solid black;
	}
</style>
</head>
<body>
<div class="form">
<p><input type='button' value='<- GO BACK TO HOME PAGE' onclick='location.href="welcome.php"' /></p>
</div>
<fieldset class="form" style="background-color:lightgreen;">
<legend><h2>Registered Course&#40;s&#41;</h2></legend>
<p style="float:right;"><input type='button' value='PRINT' onclick='window.print()' /></p>
<p><h1>Student ID: <?php echo $addnum ; ?> </h1></p>

<?php
$reverse = $db->query("SELECT * FROM `registered` WHERE `addnum` = '$addnum'");
	if(!$reverse->num_rows){
	header ("location: welcome.php");
	}else{
		 echo "<table>
	<tr style='font-weight:900; color:blue;'><td>&nbsp;Selected&nbsp;</td><td>&nbsp;Course Title&nbsp;</td>
	<td>&nbsp;Course Code&nbsp;</td><td>&nbsp;Credit hour&#40;s&#41;&nbsp;</td><td>&nbsp;Tuition&nbsp;</td></tr>";
		
	$dorm = $row['dormitary'];
	$dorm = $db->query("SELECT * FROM dorm WHERE id='$dorm'") ;
    $dm = $dorm->fetch_array(MYSQLI_BOTH) ;
	$dormitary = $dm['dormitary'];
	$dormfee = $dm['dormfee'];
		
		$revs = mysqli_fetch_array($reverse);
		$progs = $revs['courses'];
		$spend = $revs['spend'];
		$progs = explode(",",$progs);
		foreach($progs as $clean){
			$courses = $db->query("SELECT * FROM `courses` WHERE `id` = '$clean'");
		while($rw=mysqli_fetch_array($courses)){
		
			echo
'<tr>
<td>&emsp;&#10004;</td><td>&nbsp;'
. $rw['title'].'&nbsp;</td><td>&nbsp; ' . $rw['code'].'&nbsp;</td><td>&nbsp; ' . $rw['hour'].
'</td><td>&nbsp; N'. $credithour * $rw['hour'].'</td></tr>';
	}
		}
		echo"</table></br></br></br><table>";
echo "<tr style='font-weight:900; color:blue;'><td>&nbsp;Selected&nbsp;</td><td>&nbsp;Items&emsp;
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 &emsp;&emsp;</td><td>&nbsp;Tuition&nbsp;</td></tr>" ;

if($row['reglog'] == 1){
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Non-Refundable Medical Deposit</td><td>&nbsp;N3000</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;I.D. Card</td><td>&nbsp;N1000</td></tr>" ;
}
	 
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Accomodation &#40; ".$dormitary." &#41;</td><td>&nbsp;N".$dormfee."</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Compound Improvement</td><td>&nbsp;N1500</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Student Council Fees</td><td>&nbsp;N1000</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Educators</td><td>&nbsp;N400</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Sports</td><td>&nbsp;N300</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Utility</td><td>&nbsp;N1500</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;I.C.T.</td><td>&nbsp;N1500</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Library Charges</td><td>&nbsp;N300</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Administrative Charges</td><td>&nbsp;N1000</td></tr>" ;
$total = $spend+$dormfee; 
echo '<tr><td colspan="2">&emsp;&nbsp;<strong>Total tuition</strong>: </td><td><font color="red">&nbsp;N' .$total. '</font></td></tr>' ;
echo '</table>';
	}


?>


</fieldset>
<div class="form">
<p><input type='button' value='<- GO BACK TO HOME PAGE' onclick='location.href="welcome.php"' /></p>
</div>
</body>
</html>