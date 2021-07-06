<?php
$db = new mysqli('localhost', 'root', '', 'db');

if($db->connect_errno){
	die('Sorry unable to connect to database at the moment, Please try again later.');
	}
	
$tab = "CREATE TABLE courses (   
id 		   	   INT(5)	      	 NOT NULL	AUTO_INCREMENT,
course		   VARCHAR(255)		 NOT NULL,
coursecode	   VARCHAR(255)		 NOT NULL,
education	   VARCHAR(255)		 NOT NULL,
mission		   VARCHAR(255)		 NOT NULL,
pastoral	   VARCHAR(255)		 NOT NULL,
`100`	       INT(5)	      	 NOT NULL,
`200`	       INT(5)	      	 NOT NULL,
`300`		   INT(5)	      	 NOT NULL,
`400`		   INT(5)	      	 NOT NULL,
date		   DATE         	 NOT NULL,


PRIMARY KEY(id) )";
	
if ($db->query($tab) === TRUE){echo "SUCCESSFULLY, Remember to add auto increment " ;} else {echo $db->error;};


?>