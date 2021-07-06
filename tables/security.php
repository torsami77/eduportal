<?php
$db = new mysqli('localhost', 'root', '', 'db');

if($db->connect_errno){
	die('Sorry unable to connect to database at the moment, Please try again later.');
	}
	
$tab = "CREATE TABLE security (   
id 			   INT(5)	      	 NOT NULL	AUTO_INCREMENT,
pin  		   VARCHAR(255)    	 NOT NULL,
serial  	   VARCHAR(20)    	 NOT NULL,
addnum  	   VARCHAR(255)    	 NOT NULL,
date		   DATE         	 NOT NULL,


PRIMARY KEY(id) )";
	
if ($db->query($tab) === TRUE){echo "SUCCESSFULLY, Remember to add auto increment " ;} else {echo $db->error;};


?>