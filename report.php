<?php
include ('certs.php');
?>
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
<fieldset style="width:60%;">
<legend>Tuition transaction log&#40;s&#41;</legend>
<?php
$result = $db->query("SELECT * FROM `transactions` WHERE `addnum`='$addnum'") ;
		if($result->num_rows)
		{
			echo '<table>';
			echo '<tr><td>Previous Balance</td><td>Amount</td><td>Description</td><td>Teller Number</td><td>Gateway</td><td>Details</td><td>Date</td></tr>';
			while($rw=mysqli_fetch_array($result)){
				$bank = $rw['bank'];
			$result2 = $db->query("SELECT `bank` FROM `bankdetails` WHERE `id` = '$bank'");
			if($result2->num_rows){
			$bnk = mysqli_fetch_array($result2);$bank = $bnk['bank'];}else{$bank = $rw['bank'];}
		echo '<tr><td>'.$rw['previous'].'</td><td>'.$rw['amount'].'</td><td>'.$rw['payment'].'</td>
			 <td>'.$rw['teller'].'</td><td>'.$bank.'</td><td>'.$rw['branch'].'</td><td>'.$rw['date'].'</td></tr>';
				
			}
			echo '</table>';
		}else{
			echo '<font color="blue">No tuition payment record&#40;s&#41; found for you yet..</font>';
		}

?>

</br>
</br>
</br>
<p><input type='button' value='Return to my home page' onclick='location.href="welcome.php"' /></p>
</fieldset>