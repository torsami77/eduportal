<?php
if(!ISSET($_SESSION)){
SESSION_START();
			 $addnum = $_SESSION['addnum'] ;
			 $sn= $_GET['sn'];
header('location:'.$addnum.'_'.$sn.'.pdf');}else{header('location:index.php');}

?>