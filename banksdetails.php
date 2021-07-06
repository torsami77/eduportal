<?php
$db = new mysqli('localhost', 'root', '', 'db');

if($db->connect_errno){
	die('Sorry unable to connect to database at the moment, Please try again later.');
	}
	
$tab = "CREATE TABLE bankdetails (   
id 			   INT(5)	      	 NOT NULL	AUTO_INCREMENT,
email	  	   VARCHAR(255)    	 NOT NULL,
password  	   VARCHAR(255)    	 NOT NULL,
bank	 	   VARCHAR(255)    	 NOT NULL,
date		   DATE         	 NOT NULL,


PRIMARY KEY(id) )";
	
if ($db->query($tab) === TRUE){echo "SUCCESSFULLY, Remember to add auto increment " ;} else {echo $db->error;};


?>