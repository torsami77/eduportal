<?php
$db = new mysqli('localhost', 'root', '', 'db');

if($db->connect_errno){
	die('Sorry unable to connect to database at the moment, Please try again later.');
	}
	
$tab = "CREATE TABLE courses (   
id 		   	   INT(5)	      	 NOT NULL	AUTO_INCREMENT,
title		   VARCHAR(255)		 NOT NULL,
code		   VARCHAR(255)		 NOT NULL,
bacrs		   VARCHAR(255)		 NOT NULL,
baecrs	       VARCHAR(255)		 NOT NULL,
batm           VARCHAR(255)		 NOT NULL,
batp           VARCHAR(255)		 NOT NULL,
bats           VARCHAR(255)		 NOT NULL,
bep            VARCHAR(255)		 NOT NULL,
cbwi           VARCHAR(255)		 NOT NULL,
ctpm           VARCHAR(255)		 NOT NULL,
dt             VARCHAR(255)		 NOT NULL,
mabsnt         VARCHAR(255)		 NOT NULL,
mabsot         VARCHAR(255)		 NOT NULL,
mace           VARCHAR(255)		 NOT NULL,
mactpp         VARCHAR(255)		 NOT NULL,
maep           VARCHAR(255)		 NOT NULL,
mapt           VARCHAR(255)		 NOT NULL,
mapbc		   VARCHAR(255)		 NOT NULL,
pgdps	       VARCHAR(255)		 NOT NULL,
`100`	       INT(5)	      	 NOT NULL,
`200`	       INT(5)	      	 NOT NULL,
`300`		   INT(5)	      	 NOT NULL,
`400`		   INT(5)	      	 NOT NULL,
date		   DATE         	 NOT NULL,


PRIMARY KEY(id) )";
	
if ($db->query($tab) === TRUE){echo "SUCCESSFULLY, Remember to add auto increment " ;} else {echo $db->error;};


?>