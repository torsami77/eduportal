<?php
if(!ISSET($_SESSION)){
SESSION_START();
			 $addnum = $_SESSION['addnum'] ;
header('location:'.$addnum.'.pdf');}else{header('location:index.php');}

?>