<?php

if(EMPTY($_POST['cid']) || EMPTY($_POST['section']) || EMPTY($_POST['year']))
{die('<font color = "red">Please all * fields are ..required</font>');}else{

  $cid = $db->real_escape_string(strip_tags($_POST['cid']));
  $section = $db->real_escape_string(strip_tags($_POST['section']));
  $year = $db->real_escape_string(strip_tags($_POST['year']));

   if($section === 'summer'){
  $period = 'summer';}else{$period ='regular';}
$semester = $section;
  $alle = array( $semester,$period,$year);
  $alli = array($initials, $semester,$period,$year);

    $courses = $db->query("SELECT `allocated` FROM `courses` WHERE `id` = '$cid' AND `allocated` != ''") ;
if($courses->num_rows){
  $fet=mysqli_fetch_array($courses);
  $fetched=$fet['allocated'];
  $fetched = explode ("-",$fetched);
  $alli = implode(",",$alli);
    if(!in_array($alli, $fetched)){
      die('<font color="red">Please specify a course allocated to you<font/>');
    }else{

$template = 'grades/template.xlsx' ;
require __DIR__ . '/vendor/autoload.php';
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
//$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($template);
$reader->setReadDataOnly(TRUE);

if($spreadsheet = $reader->load($template)){

$title = $db->query("SELECT * FROM `courses` WHERE `id` = '$cid'") or die (mysqli_error($db));
$tit = mysqli_fetch_array($title);$title = $tit['title'];$code = $tit['code'];

$result = $db->query("SELECT `addnum` FROM `$cid` WHERE `status`='registered' AND `year`='$year' AND `semester`='$semester' AND `period`='$period' AND `confirm`!='confirmed'")
or die ($db(mysqli_error));

if($result->num_rows){
  $recs = $result->fetch_all(MYSQLI_ASSOC);

  $spreadsheet->getActiveSheet()->setCellValue('B1', 'ECWA THEOLOGICAL SEMINARY, KAGORO');
  $spreadsheet->getActiveSheet()->setCellValue('B2', 'GRADE SHEET TEMPLATE');

  $spreadsheet->getActiveSheet()->setCellValue('A4', $title);
  $spreadsheet->getActiveSheet()->setCellValue('B4', $code);
  $spreadsheet->getActiveSheet()->setCellValue('C4', $initials);
  $spreadsheet->getActiveSheet()->setCellValue('D4', $semester);
  $spreadsheet->getActiveSheet()->setCellValue('E4', $year);


  $spreadsheet->getActiveSheet()->getStyle("A7:E7")->getFont()->setBold(true);

/*
  $spreadsheet = PhpOffice\PhpSpreadsheet\Spreadsheet;
  $spreadsheet->setColumValue('A2', str_repeat('abcd '*200));
  $spreadsheet->getColumnDimension('A7:E7')->setAutoSize(true);

  "=IF($D<40,"F", IF($D<45,"P", IF($D<50,"D", IF($D<60,"C" , IF($D<70,"B" , IF($D>69,"A"))))))"
*/

  $no = 8;
	foreach($recs as $rec){
    $A='A'.$no;
    $B='B'.$no;
    $C='C'.$no;
    $D='D'.$no;
    $E='E'.$no;

		$stu=$rec['addnum'];
    $spreadsheet->getActiveSheet()->setCellValue($A, $stu);
    $spreadsheet->getActiveSheet()->setCellValue($D, "=sum($B, $C)");
    $spreadsheet->getActiveSheet()->setCellValue($E, '=IF('.$D.'<40,"F", IF('.$D.'<45,"P", IF('.$D.'<50,"D", IF('.$D.'<60,"C" , IF('.$D.'<70,"B" , IF('.$D.'>69,"A"))))))');
    $no++;
      }



$date = date('Y-m-d H:i:s');

$newfile='grades/templates/template'.$initials.'_'.$code.'_'.$date.'.xlsx' ;
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
$writer->save($newfile);

header ("location: ".$newfile);

}else{


  echo "<font color='red'>No student&#40;s&#41; pending for grade in this class...</font>";}


}}}else{
  die('<font color="red">Please specify a course allocated to you<font/>');
}




}
?>
