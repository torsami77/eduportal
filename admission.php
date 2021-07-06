<?php

include ('certs.php');
$page = 'registrar';
include ('manage.php');
?>
<html>
<head>
<style>
table{
    border-collapse: collapse;
    border: 2px solid red;
	width: 100%
	}

tr, td{
    border-collapse: collapse;
    border: 2px solid red;
	}
</style>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Office of the Registrar</title>
</head>
<body>



<div class="form" style="margin:auto auto; width:100%;">



<fieldset>
<legend>Grant Admission</legend>

<form action="" method="POST">
<?php
if(!ISSET($_SESSION)){SESSION_START();}
if(!ISSET($_SESSION['programme'])){header('location: registrar.php');}
$programme = $_SESSION['programme'];
$prog = $_SESSION['prog'];
$result = $db->query("SELECT * FROM students WHERE datecompleted is not null AND admitted is null AND programme='$programme'")
or die ('<font color="red">Problem connecting to server, try again later!!</font>');
if($result->num_rows){

	echo '<div style="font-size:20px; color:blue;">Grant Admission for candidate&#40;s&#41; of '.$prog.'</div>' ;
	echo "</br><table>
	<tr style='font-weight:900;'><td>Application No</td><td>Surname</td><td>First Name</td><td>Other Name</td><td>Provisional</td>
	<td>Probasional</td><td>Not admitted</td></tr>" ;

	$row_cnt = $result->num_rows ;
	$row_cnt = $row_cnt - 1 ;

	$recs = $result->fetch_all(MYSQLI_ASSOC);

	$lastrow = $recs[$row_cnt]['addnum'] ;
	$firstrow = $recs[0]['addnum'];
	foreach($recs as $rec){
		$addnum = $rec['addnum'];
		$email = 'email'.$addnum;
		SETCOOKIE($email, $rec['email']);

echo "<tr><td>".$rec['addnum']."</td><td>".$rec['last']."</td><td>".$rec['first']."</td>
		<td>".$rec['other']."</td>
		<td><input type='radio' name='".$addnum."' value='Provisional' required></td>
		<td><input type='radio' name='".$addnum."' value='Probasional'></td>
		<td><input type='radio' name='".$addnum."' value='Not admitted'></td>
		</tr>";
	};
echo "</table></br><input type='submit' name='grant' value='Grant Admission Status' />";

}else{echo '<font color="red">No candidate&#40;s&#41; pending for admission status in this category</font>
				</br></br><input type="button" value="Back"';
		echo 'onclick="location.href=';
		echo "'registrar.php'" ;
		echo '"/>' ;}


?>


</form>

<?php

if(ISSET($_POST['grant'])){
$loop = $firstrow;
while($loop <= $lastrow){
	if(ISSET($_POST[$loop])){
			$email='email'.$loop;
			if(!ISSET($_COOKIE[$email])){die('<font color="red">Cookie must be enabled on your browser
			to run this request</font></br><a href="registrar.php">Try again</a>');
			}else{
				$email = $_COOKIE[$email] ;
		$data = $db->real_escape_string(strip_tags($_POST[$loop]));

		$update = $db->query("UPDATE `students` SET `admitted` = NOW(),`adstatus` ='$data' WHERE `addnum` ='$addnum")
				or die (mysqli_error($db));
		if ($update){

			include ('admissionletter.php');
			include ('email.php');}
				}
	}
	$loop++ ;
}

	session_destroy();
	header('location: adstatus.php');

}

?>
</fieldset>


</div>
</body>
</html>
