<?php
$db = new mysqli('localhost', 'root', '', 'db');

if($db->connect_errno){
	die('Sorry unable to connect to database at the moment, Please try again later.');
	}
	
$tab = "CREATE TABLE transactions (   
id 			   INT(5)	      	 NOT NULL	AUTO_INCREMENT,
addnum  	   VARCHAR(255)    	 NOT NULL,
payment  	   VARCHAR(255)    	 NOT NULL,
amount		   INT(10)			 NOT NULL,
transcode 	   VARCHAR(255)    	 NOT NULL,
teller  	   VARCHAR(255)    	 NOT NULL,
bank   		   VARCHAR(255)    	 NOT NULL,
branch   	   VARCHAR(255)    	 NOT NULL,
date		   DATE         	 NOT NULL,


PRIMARY KEY(id) )";
	
if ($db->query($tab) === TRUE){echo "SUCCESSFULLY, Remember to add auto increment " ;} else {echo $db->error;};


?>