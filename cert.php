<?php
$instheader = '<strong>INSTITUITION</strong>' ;
$institution = 'etsk' ;
$website = 'www.etsk.sch.ng' ;
$db = new mysqli('sql11.freemysqlhosting.net', 'sql11423416', 'PFsP4MV6z7', 'sql11423416');

if($db->connect_errno){
	die('Sorry unable to connect to database at the moment, Please try again later.');
	}
ob_start();
if(!ISSET($_SESSION)){SESSION_START();}

?>
