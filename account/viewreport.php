<html>
<head>
<title>Tuition log&#40;s&#41;</title>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
table{
    border-collapse: collapse;
    border: 2px solid blue;
	width: 100%
	}

tr, td{
    border-collapse: collapse;
    border: 2px solid black;
	}
</style>
</head>
<body>
<?php
include ('../cert.php');

			if(!ISSET($_SESSION)){SESSION_START();}
			if(ISSET($_SESSION['from'])){$from = $_SESSION['from'];}
			if(ISSET($_SESSION['to'])){$to = $_SESSION['to'];}
			if(ISSET($_SESSION['individual'])){$individual=$_SESSION['individual'];}
			if(ISSET($individual)){
			$all =
$db->query("SELECT * FROM `transactions` WHERE (`addnum`='$individual') AND (`bank` != 'Share Service' || `bank` !=  'Credit Units') AND (`date`='$from' || `date`>'$from') AND (`date`<'$to' || `date`='$to')");
			}
			elseif(ISSET($from)){
			$all = $db->query("SELECT * FROM `transactions` WHERE (`date`='$from' || `date`>'$from') AND (`date`<'$to' || `date`='$to') AND (`bank` != 'Share Service' || `bank` !=  'Credit Units')");
			}
			if (!$all->num_rows){header ("location: transactions.php");}


			echo '<fieldset style="background-color:white; width:48%; float:right;">
			<legend>';
			if(ISSET($individual)){echo '<h3>'.$individual.' Bank Deposits; from '.$from.' to '.$to.'</h3>';}
			elseif(ISSET($from)){

				echo '<h3>All Bank Deposits from '.$from.' to '.$to.'</h3>';
			}
			echo'</legend>';


		echo '<table>';
			echo '<tr><td><strong>Student I.D.</strong></td><td><strong>Detail</strong></td><td><strong>Amount</strong></td>
      <td><strong>Teller</strong></td><td><strong>Gateway</strong></td><td><strong>Cashier</strong></td><td><strong>Date</br>Y-M-D</strong></td></tr>';
      $total = 0 ;
  while($rp=mysqli_fetch_array($all)){
				$bank = $rp['bank'];
			$result2 = $db->query("SELECT `bank` FROM `bankdetails` WHERE `id` = '$bank'");
			if($result2->num_rows){
			$bnk = mysqli_fetch_array($result2);$bank = $bnk['bank'];}else{$bank = $rp['bank'];}
		echo '<tr><td>'.$rp['addnum'].'</td><td>'.$rp['payment'].'</td><td>N'.$rp['amount'].'</td><td>'.$rp['teller'].'</td>
				<td>'.$bank.'</td><td>'.$rp['branch'].'</td><td>'.$rp['date'].'</td></tr>';
          $total= $total + $rp['amount'];
			}
			echo '</table><h2>Total Deposits: N'.$total.'</h2></fieldset>';
			if(ISSET($_SESSION['from'])){UNSET($_SESSION['from']);}
			if(ISSET($_SESSION['individual'])){UNSET($_SESSION['individual']);}

?>
</br></br></br></br>


<?php
//Second sorting..

if(ISSET($individual)){
$all =
$db->query("SELECT * FROM `transactions` WHERE (`addnum`='$individual') AND (`date`='$from' || `date`>'$from') AND (`date`<'$to' || `date`='$to')");
}
elseif(ISSET($from)){
$all = $db->query("SELECT * FROM `transactions` WHERE `date`='$from' || `date`>'$from' AND `date`<'$to' || `date`='$to'");
}
if (!$all->num_rows){header ("location: transactions.php");}


echo '<fieldset style="background-color:white; width:48%; float:left;">
<legend>';
if(ISSET($individual)){echo '<h3>'.$individual.' Overall Break Down; from '.$from.' to '.$to.'</h3>';}
elseif(ISSET($from)){

  echo '<h3>All Breakdown from '.$from.' to '.$to.'</h3>';
}
echo'</legend>';


echo '<table>';
echo '<tr><td><strong>Student I.D.</strong></td><td><strong>Detail</strong></td><td><strong>Previous Balance</strong></td><td><strong>Amount</strong></td>
<td><strong>Teller</strong></td><td><strong>Gateway</strong></td><td><strong>Cashier</strong></td><td><strong>Date</br>Y-M-D</strong></td></tr>';
$total = 0 ;
while($rp=mysqli_fetch_array($all)){
  $bank = $rp['bank'];
$result2 = $db->query("SELECT `bank` FROM `bankdetails` WHERE `id` = '$bank'");
if($result2->num_rows){
$bnk = mysqli_fetch_array($result2);$bank = $bnk['bank'];}else{$bank = $rp['bank'];}
echo '<tr><td>'.$rp['addnum'].'</td><td>'.$rp['payment'].'</td><td>'.$rp['previous'].'</td><td>N'.$rp['amount'].'</td><td>'.$rp['teller'].'</td>
  <td>'.$bank.'</td><td>'.$rp['branch'].'</td><td>'.$rp['date'].'</td></tr>';
    $total= $total + $rp['amount'];
}
echo '</table></fieldset>';
if(ISSET($_SESSION['from'])){UNSET($_SESSION['from']);}
if(ISSET($_SESSION['individual'])){UNSET($_SESSION['individual']);}

?>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="button" value="PRINT" onclick= "window.print()" />&emsp;&emsp;&emsp;
<input type='button' value='Return to my home page' onclick='history.back(-1)' /></br></br>

</body>
</html>
