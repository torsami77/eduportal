<?php
include ('cert.php');
?>

<html>
<head>
<title>Course Plan</title>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
table{
    border-collapse: collapse;
    border: 1px solid black;
	width: 100%
	}

td{width:90px;
    border-collapse: collapse;
    border: 2px solid black;
	}
</style>
</head>
<body>


<?php

echo "
<fieldset>
<legend><h2>
".$institution." ADMISSION LIST.</h2>
</legend>" ;

$all =$db->query
("SELECT `addnum`, `programme`, `last`, `first`, `other`, `adstatus` FROM `students` WHERE (`adstatus` !='Not Admitted' || `adstatus` != null) ORDER BY `programme`");

if($all->num_rows){
  echo "<table>
      <tr><td><strong>PROGRAMME</strong></td><td><strong>ADMISSION NUMBER</strong></td><td><strong>FULL NAMES</strong></td><td><strong>ADMISSION STATUS</strong></td></tr>";

$all = $all->fetch_all(MYSQLI_BOTH);
foreach($all as $cand){
$fullnames = $cand['last'].', '.$cand['first'].' '.$cand['other'];
$programme = $cand['programme'];
$programme = $db->query("SELECT `programme`, `major` FROM `programmes` WHERE `abb` = '".$programme."'") ;
$prg = mysqli_fetch_array($programme);
$programme = $prg['programme'];
$major = $prg['major'];
  echo '<tr><td>'.$programme.'</td><td>'.$cand['addnum'].'</td><td>'.$fullnames.'</td><td>'.$cand['adstatus'].'</td></tr>';
}



  echo "<table>";
}




echo "</fieldset>"
?>
</body>
</html>
