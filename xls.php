<?php
$filename=$_FILES["file"]["tmp_name"];

/*
$finfo = new finfo;

$fileinfo = $finfo->file($file, FILEINFO_MIME);

echo $fileinfo ;


if ($_FILES["file"]["size"]>0){
*/

require __DIR__ . '/vendor/autoload.php';
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
$reader->setReadDataOnly(TRUE);
if($spreadsheet = $reader->load($filename)){

$tle = $spreadsheet->getActiveSheet()->getCell('A4')->getValue();
$tle = $db->real_escape_string(strip_tags($tle));

$ode = $spreadsheet->getActiveSheet()->getCell('B4')->getValue();
$ode = $db->real_escape_string(strip_tags($ode));

$ils = $spreadsheet->getActiveSheet()->getCell('C4')->getValue();
$ils = $db->real_escape_string(strip_tags($ils));

$ion = $spreadsheet->getActiveSheet()->getCell('D4')->getValue();
$ion = $db->real_escape_string(strip_tags($ion));

$ear = $spreadsheet->getActiveSheet()->getCell('E4')->getValue();
$ear = $db->real_escape_string(strip_tags($ear));
//$ear is also $year
$year = $ear;

if($ion === 'summer'){
$period = 'summer';}else{$period ='regular';}
$semester = $ion;

$alle = array( $semester,$period,$ear);
$alli = array($initials, $semester,$period,$ear);

$courses = $db->query("SELECT `allocated`,`id` FROM `courses` WHERE `code` = '$ode' AND `title`='$tle' AND `allocated` != ''") ;
if($courses->num_rows){
$fet=mysqli_fetch_array($courses);
$cid=$fet['id'];
$fetched=$fet['allocated'];
$fetched = explode ("-",$fetched);
$alli = implode(",",$alli);

if(!in_array($alli, $fetched)){
	die('<font color="red">Error found on line 4, Please enter particulars for the course you want to grade properly<font/>');
}else{
  $grader = ['A', 'B', 'C', 'D', 'E', 'F'];
  $count = 0;
  $worksheet = $spreadsheet->getActiveSheet();
  $rows = $worksheet->toArray();
  foreach($rows as $cell){
  $count++;
  if($count>7){
          $stu = $db->real_escape_string(strip_tags($cell[0]));
          $ca = $db->real_escape_string(strip_tags($cell[1]));
          $exam = $db->real_escape_string(strip_tags($cell[2]));
          $grade = $db->real_escape_string(strip_tags($cell[4]));
          if((!is_numeric($stu)) or (!is_numeric($ca)) or (!is_numeric($exam)) or (!in_array($grade, $grader))
        ){die(//$stu.$ca.$exam.$grade.
          '<br/><font color="red">Request not completed, error found on line '.$count.'</font>');}
          }
  }

  $count = 0;
  foreach($rows as $cell){
  $count++;
  if($count>7){
$stu = $db->real_escape_string(strip_tags($cell[0]));
$ca = $db->real_escape_string(strip_tags($cell[1]));
$exam = $db->real_escape_string(strip_tags($cell[2]));
//$grade = $db->real_escape_string(strip_tags($cell[4]));
$score = $ca + $exam;

if($score < 40){$grade = 'F';	$points = 0}elseif
	($score < 45){$grade = 'P';	$points = 1}elseif
	($score < 50){$grade = 'D';	$points = 2}elseif
	($score < 60){$grade = 'C';	$points = 3}elseif
	($score < 70){$grade = 'B';	$points = 4}elseif
	($score > 69){$grade = 'A';	$points = 5

if ($score < 0 or $score > 100){die('<font color="red">Please enter appropriate figures on line '.$count.'</font>');}

                               // add this line
$update = $db->query("UPDATE `$cid` SET `grade` = '$grade', `ca` ='$ca', `exam` ='$exam', `score` ='$score', `scale`='$points', `status`='completed', `confirm`='waiting', `initials`='$initials',
`gradedate` = NOW() WHERE `addnum` = '$stu' AND `status`='registered' AND `year`='$year' AND
	`semester`='$semester' AND `period`='$period' AND `confirm`!='confirmed'") or die(mysqli_error($db));
//($count.'-'.$cid.'-'.$grade.'-'.$ca.'-'.$exam.'-'.$score.'-'.$initials);
}
}

 $date = date('Y-m-d H:i:s');

$newfile='grades/grades/'.$ils.'_'.$ode.'_'.$date.'.xlsx' ;

move_uploaded_file($_FILES['file']['tmp_name'], $newfile);

echo "<script>alert('Grades updated successfully')</script>";
echo "<font color='green'>Grades updated successfully</font>";
}








}else{
  die('<font color="red">Please use the updated template!!</font>');
}
}
?>
