<?php
$courses = $db->query("SELECT `allocated`,`title`,`code` FROM `courses` WHERE `id` = '$id'") ;
$fet=mysqli_fetch_array($courses);
$title = $fet['title'];
$code = $fet['code'];
$lecturer = $db->query("SELECT `email`,`firstname` FROM `faculty` WHERE `initials` = '$initials'") ;
$lect=mysqli_fetch_array($lecturer);
$email = $lect['email'];
$first = $lect['firstname'];
	
$subject= $year.', Semeter &#40;'.$semester.'&#41;, Course Allocation';
$message = '<p>Hi '.$first.'</p>,</br>
	You receive this message because you have been allocated '.$title.'&#40;'.$code.'&#41; to teach in the 
	Semeter&#40;'.$semester.'&#41; on the '.$institution.' 
	portal. To proceed; click on <a href="www.'.$institution.'.sch.ng/staff.php"> to view your page and submit grades when due.</br>
	<p>Thank you</br>Office of the Dean</br>'.$institution.'</p>';




?>