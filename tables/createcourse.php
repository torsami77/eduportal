<?php
//$db = new mysqli('localhost', 'root', '', 'db');

if($db->connect_errno){
	die('Sorry unable to connect to database at the moment, Please try again later.');
	}

$tab = "CREATE TABLE `{$table}` (
id 		   	   INT(5)	      	 NOT NULL	AUTO_INCREMENT,
addnum		   INT(5)			 NULL,
title	   	   VARCHAR(255)		 NULL,
code		   VARCHAR(255)		 NULL,
programme	   VARCHAR(255)		 NULL,
initials	   VARCHAR(255)		 NULL,
status         VARCHAR(255)		 NULL,
year      	   VARCHAR(255)		 NULL,
semester       VARCHAR(255)		 NULL,
period         VARCHAR(255)		 NULL,
ca          VARCHAR(255)		 NULL,
exam          VARCHAR(255)		 NULL,
score          VARCHAR(255)		 NULL,
scale					INT(5)				NULL,
grade          VARCHAR(255)		 NULL,
regdate		   DATE         	 NULL,
gradedate	   DATE         	 NULL,
confirm          VARCHAR(255)		 NULL,


PRIMARY KEY(id) )";

if ($db->query($tab) === FALSE){die(mysqli_error($db));
	die ('<font color="red">Requested task incomplete, please try again!!</font>') ;}
else {echo $db->error;};


?>
