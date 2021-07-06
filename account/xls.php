<?php
$filename=$_FILES["file"]["tmp_name"];

/*
$finfo = new finfo;

$fileinfo = $finfo->file($file, FILEINFO_MIME);

echo $fileinfo ;


if ($_FILES["file"]["size"]>0){
*/

$branch = $bank;
require __DIR__ . '/vendor/autoload.php';
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
$reader->setReadDataOnly(TRUE);
if($spreadsheet = $reader->load($filename)){

$warn = $spreadsheet->getActiveSheet()->getCell('A4')->getValue();
$warn = $db->real_escape_string(strip_tags($warn));

$yes = $spreadsheet->getActiveSheet()->getCell('A5')->getValue();
$yes = $db->real_escape_string(strip_tags($yes));

$agree = $spreadsheet->getActiveSheet()->getCell('B5')->getValue();
$agree = $db->real_escape_string(strip_tags($agree));

if ($warn != 'DO NOT ALLOW SOMEONE TO / USE YOUR ACCOUNT TO : UPLOAD THIS TEMPLATE FOR SOMEONE AS YOU ARE SOLELY RESPONSIBLE.'
or $agree != 'I AM SOLELY RESPONSIBLE FOR UPLOADING THIS TEMPLATE'){
	die ('<font color="red">Please use the appropriate template </font>');
}

if ($yes != 'YES'){
	die ('<font color="red">You must signed "YES" to confirmed your awareness</font>');
}else{
  $count = 0;
  $worksheet = $spreadsheet->getActiveSheet();
  $rows = $worksheet->toArray();
  foreach($rows as $cell){
  $count++;
  if($count>7){
          $addnum = $db->real_escape_string(strip_tags($cell[0]));
          $teller = $db->real_escape_string(strip_tags($cell[1]));
          $amount = $db->real_escape_string(strip_tags($cell[2]));
          $bankid = $db->real_escape_string(strip_tags($cell[4]));
          if((!is_numeric($addnum)) or (!is_numeric($teller)) or (!is_numeric($amount)) or ($amount > 200000) or !isset($bankid)
        ){die(//$addnum.$ca.$exam.$grade.
          '<br/><font color="red">Request not completed, error found on line '.$count.'</font>');}
          }
  }

  $count = 0;
  foreach($rows as $cell){
  $count++;
  if($count>7){
		$addnum = $db->real_escape_string(strip_tags($cell[0]));
		$teller = $db->real_escape_string(strip_tags($cell[1]));
		$amount = $db->real_escape_string(strip_tags($cell[2]));
		$bankid = $db->real_escape_string(strip_tags($cell[4]));


		$find = $db->query("SELECT * FROM transactions WHERE teller = '$teller'") ;
		$row = $find->fetch_array(MYSQLI_BOTH);
	if($find->num_rows){
		die ('<font color="red">Line '.$count.' Teller already used for student with <strong>ID: '.$row['addnum'].'</strong></font>');
	}else{
		$balance = $db->query("SELECT `balance` FROM `students` WHERE addnum = '".$addnum."'") ;
		if ($balance != TRUE){die ('<font color="red">No student found with the given Admission number..</font>');}else{
			$bal = mysqli_fetch_array($balance);$balance = $bal['balance'];
		$previous = $balance ;
		$balance = $balance + $amount ;

		if(!$insert = $db->query("INSERT INTO transactions
		(`addnum`, `payment`, `previous`, `amount`, `teller`, `bank`, `branch`, `date`)
		VALUES ('$addnum', 'tuition', '$previous', '$amount', '$teller', '$bankid', '$branch', NOW() )"))
		{echo $previous.'<br/>' ;
			die(mysqli_error($db));};

			if($update = $db->query("
	UPDATE students SET balance='$balance'
	WHERE addnum='$addnum'"
	)){}
}
}
}}
 $date = date('Y-m-d H:i:s');

$newfile='uploads/'.$branch.'_'.$date.'.xlsx' ;

move_uploaded_file($_FILES['file']['tmp_name'], $newfile);

echo "<script>alert('Tuitions updated successfully')</script>";
echo "<font color='green'>Tuitions updated successfully</font>";









}}
?>
