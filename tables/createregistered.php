<?php
$db = new mysqli('localhost', 'root', '', 'db');

if($db->connect_errno){
	die('Sorry unable to connect to database at the moment, Please try again later.');
	}
	
$tab = "CREATE TABLE `registered` (   
id 		   	   INT(5)	      	 NOT NULL	AUTO_INCREMENT,
addnum		   INT(5)			 NOT NULL,
courses	   	   VARCHAR(255)		 NOT NULL,
date	  	   DATE         	 NOT NULL,


PRIMARY KEY(id) )";
	
if ($db->query($tab) === FALSE){die(mysqli_error($db));
	die ('<font color="red">Requested task incomplete, please try again!!</font>') ;} 
else {echo $db->error;};


?>