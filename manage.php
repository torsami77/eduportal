<?php

if(!ISSET($_SESSION)){SESSION_START();}

/*
$names = $db->query("SELECT * FROM `faculty` WHERE `surname` = '".$rw['surname']."' AND `firstname` = '".$rw['firstname']."' ") or die (mysqli_error($db));
if($names->num_rows){
  $verify=$names->num_rows;
  if($verify>0){
    {SESSION_UNSET();
    SESSION_DESTROY();
    header ("location: staff.php");
  }else{
  }
}
*/
$management = $rw['management'] ;
if ($management != $page)
{SESSION_UNSET();
SESSION_DESTROY();
header ("location: staff.php");}

?>
