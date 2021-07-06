<?php
//Put algo to determine programme of study
$programme = $db->query("SELECT `programme`,`last`,`first`,`other` FROM `students` WHERE `addnum` = '".$addnum."'") ;
$prg = $result->fetch_array(MYSQLI_BOTH);
$programmed = $prg['programme'];
$fullnames = $prg['last'].', '.$prg['first'].' '.['other'] ;
$date = date('Y-m-d');


if(ISSET($_SESSION['prog'])){
	$programme = $_SESSION['prog'];
}else{
	$programme = $programmed ;
};

$programme = $db->query("SELECT `programme`,`accreditation` FROM `programmes` WHERE `abb` = '".$programme."'") ;
$prg = mysqli_fetch_array($programme);
$programme = $prg['programme'];
$accredited = $prg['accreditation'];


$office = 'Registrar';
$subject = 'Admission at '.$institution ;
$from 	 = 'registrar@'.$institution ;

if ($data == 'Provisional'){
$heading = strtoupper($data);
$sub = strtolower($heading);

include ('letemplate.php');

;}elseif($data == 'Probasional'){
	$heading = strtoupper($data);
	$sub = strtolower($heading);

include ('letemplate.php');

}elseif($data == 'Not admitted'){
	$heading = strtoupper("No");

include ('letemplate.php');

}elseif($supp == 1){
$heading = strtoupper($data);
$sub = strtolower($heading);
$suppinfo='Meanwhile, due to your low performance during the entrance exams and interview, you will be required to begin with the Preliminary Studies
 which normarlly takes two semesters to complete. This is intended to give you a very good background for B.A. Programme into which you are admitted.
  In this case, you will not need to reapply. Your better performance would make you start the B.A. Programme straightaway after a successful completion
	of the former.';

include ('letemplate.php');

}elseif($supp == 2){
$heading = strtoupper($data);
$sub = strtolower($heading);


include ('letemplate.php');
}

;
?>
