<?php
include ('cert.php');
$addnum = 2018364 ;

$result = $db->query("SELECT * FROM students WHERE addnum='$addnum'") ;
  $row = $result->fetch_array(MYSQLI_BOTH) ;

echo $row['email'];
echo $row['last'];
echo $row['programme'];
?>
</br></br></br>

<?php
if ($row['last'] != null){
  echo 'Is not Null';
}

?>
