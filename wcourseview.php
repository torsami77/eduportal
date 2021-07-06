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
		  echo "<table>
	<tr style='font-weight:900; color:blue;'><td>&nbsp;Selected</td><td>&nbsp;Course Title&nbsp;&nbsp;</td>
	<td>&nbsp;Course Code&nbsp;</td><td>&nbsp;Credit hour&#40;s&#41;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;Tuition &#40;N5000&#41;</td></tr>";

	$total = 0;
	$courses = $db->query("SELECT * FROM `courses` WHERE `cbwi` = 'cbwi' AND `level` = '$schoolyear'") ;
	while($rw=mysqli_fetch_array($courses)){
			echo
'<tr>
<td>&emsp;&#10004;<input type="hidden" name="prog[]" value="'. $rw['id'].'" /></td><td>&nbsp;'
. $rw['title'].'&nbsp;&nbsp;&nbsp;</td><td>&nbsp; ' . $rw['code'].'&nbsp;</td><td>&nbsp; ' . $rw['hour'].
'</td><td>&nbsp;</td></tr>';
	}
	$accomodation = $row['dormitary'];
	$dorm = $db->query("SELECT * FROM dorm WHERE id='$accomodation'") ;
	if($dorm->num_rows){
    $dm = $dorm->fetch_array(MYSQLI_BOTH) ;
	$dormitary = $dm['dormitary'];
	$dormfee = $dm['dormfee'];
	if(!ISSET($_SESSION)){SESSION_START();}
	$_SESSION['$dormid'] = $dm['id'];
	}else{
	$dormitary = '';
	$dormfee = 0;
	}
	
	//if($row['reglog'] == 0){$newstu = 4000;}else{$newstu = 0;};
	
	$academics = 5000;
	$cookery = 1000 ;
	$tui=$dormfee + $academics + $cookery;
	
$total = $tui;
echo"</table></br></br></br><table>";
echo "<tr style='font-weight:900; color:blue;'><td>&nbsp;Selected&nbsp;</td><td>&nbsp;Items&emsp;
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 &emsp;&emsp;</td><td>&nbsp;Tuition&nbsp;</td></tr>" ;

/*if($row['reglog'] == 0){
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Non-Refundable Medical Deposit</td><td>&nbsp;N3000</td></tr>" ;
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;I.D. Card</td><td>&nbsp;N1000</td></tr>" ;
}
*/

if($dormitary == TRUE){
echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Accomodation &#40; ".$dormitary." &#41;</td><td>&nbsp;N".$dormfee."</td></tr>" ;
}

echo "<tr><td>&emsp;&#10004;</td><td>&nbsp;Cookery</td><td>&nbsp;N1000</td></tr>" ;
echo'</table></br></br><table>';
echo '<tr><td colspan="2">&emsp;&nbsp;<strong>Total tuition</strong>:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;</td><td><font color="red">&nbsp;N' .$total. '</font></td></tr>' ;
echo '</table>';
echo'
</br>';
?>


</fieldset>
</div>
</fieldset>
<div class="form">
<p><input type='button' value='<- GO BACK TO HOME PAGE' onclick='location.href="welcome.php"' /></p>
</div>
</body>
</html>