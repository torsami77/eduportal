  <?php

include ('certs.php');
$page = 'registrar';
include ('manage.php');
?>
<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Office of the Registrar</title>
</head>
<body>
<div class="form" style="margin:auto auto; width:75%;">
<?php
include('links.php');
?>
</div>


<div class="form" style="margin:auto auto; width:75%;">



<fieldset>
<legend>Grant Admission </legend>
<div style="float:right;">
<fieldset>
<legend>Use Template</legend>
<form action="" method="POST" enctype="multipart/form-data">
<div style="float:right;background-color:yellow;">
<p><input type="file" name="file" /></p>
<p><input type="submit" name="upload" value="Upload Admission" /></p>

<?php
if(ISSET($_POST['upload'])){
$filename=$_FILES["file"]["tmp_name"];
require __DIR__ . '/vendor/autoload.php';
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
$reader->setReadDataOnly(TRUE);
if($spreadsheet = $reader->load($filename)){

  $validity = $spreadsheet->getActiveSheet()->getCell('D2')->getValue();
  $validity = $db->real_escape_string(strip_tags($validity));

  $today = date('Y-m-d');
  $time = strtotime($validity);
  $check = $today - $time;
  if($check < 0){die ('<font color="red">Enter valid dates on cell D2</font>');}

  $count = 0;
  $worksheet = $spreadsheet->getActiveSheet();
  $rows = $worksheet->toArray();

  foreach($rows as $cell){
    $count++;
    if($count > 4){
    $addnum = $db->real_escape_string(strip_tags($cell[1]));
    $status = $db->real_escape_string(strip_tags($cell[3]));
    $supp = $db->real_escape_string(strip_tags($cell[4]));
    $duration = $db->real_escape_string(strip_tags($cell[5]));
    $detail = $db->real_escape_string(strip_tags($cell[6]));

    if($supp == 1){
      $update = $db->query("UPDATE `students` SET `programme` = 'prems' WHERE `addnum` ='$addnum'") or die (mysqli_error($db));
    }elseif($supp == 2){
      $update = $db->query("UPDATE `students` SET `programme` = 'pgdps' WHERE `addnum` ='$addnum'") or die (mysqli_error($db));
    }else{
      if($status == 1){
      $data = 'Provisional';
    }elseif($status == 2){
      $data == 'Probasional';
    }elseif($status == 3){
      $data = 'Not admitted';
    }else{
      die ('<font color="red">Process stoped on line '.$count.', Please enter valid entries..</font>');
    }
    }

    if($adstatus == 1){
    $adstatus = 'Provisional';
  }elseif($adstatus == 2){
    $adstatus == 'Probasional';
  }else{die('<font color="red">Enter proper values for Admission Status on line '.$count.'</font>');}

  if($duration != 2 or $duration != 3){$duration = 0;}
  if($adstatus != 2){$detail = null;}else{$detail = $db->real_escape_string(strip_tags($_POST['detail'])); }


    $update = $db->query("UPDATE `students` SET `admitted` = NOW(),`adstatus` ='$data', `duration`='$duration', `probation`='$detail', `deferment`='$validity'
    WHERE `addnum` ='$addnum'") or die (mysqli_error($db));
    if ($update){

      include ('admissionletter.php');
      include ('email.php');}


  }}

}else{
  die('<font color="red">Please use the updated template!!</font>');
}
$date = date('Y-m-d H:i:s');

$newfile='admissions/admission'.$date.'.xlsx' ;

move_uploaded_file($_FILES['file']['tmp_name'], $newfile);

echo "<script>alert('Admission status sent to candidates..')</script>";
echo '<font color="green">Admission status sent to candidates..</font>';


}
?>

</div>
<div style="float:left; ">
<input type="submit" name="applicants" value="Download Template" />
<div class="vl"></div><div class="vl"></div>
<?php
if(ISSET($_POST['applicants'])){

  $applicants = 'admissions/template.xlsx' ;
  require __DIR__ . '/vendor/autoload.php';
  $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
  //$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($template);
  $reader->setReadDataOnly(TRUE);

  if($spreadsheet = $reader->load($applicants)){
    $applicants = $db->query("SELECT `addnum`,`last`, `first`, `other`, `programme` FROM `students`
      WHERE `datecompleted` is not NULL AND `admitted` is NULL ORDER BY `programme`") or die (mysqli_error($db));

      if($applicants->num_rows){
        $recs = $applicants->fetch_all(MYSQLI_ASSOC);

        $spreadsheet->getActiveSheet()->setCellValue('B1', 'ECWA THEOLOGICAL SEMINARY, KAGORO');
        $spreadsheet->getActiveSheet()->setCellValue('B2', 'ADMISSION STATUS TEMPLATE');

        $spreadsheet->getActiveSheet()->setCellValue('A4', 'Programme');
        $spreadsheet->getActiveSheet()->setCellValue('B4', 'Application Number');
        $spreadsheet->getActiveSheet()->setCellValue('C4', 'Applicants Full Names');
        $spreadsheet->getActiveSheet()->setCellValue('D4', 'Admission Status');
        $spreadsheet->getActiveSheet()->setCellValue('E4', 'Supplementary');
        $spreadsheet->getActiveSheet()->setCellValue('F4', 'Years');
        $spreadsheet->getActiveSheet()->setCellValue('G4', 'Detail');

        $spreadsheet->getActiveSheet()->getStyle("A4:G4")->getFont()->setBold(true);

        $spreadsheet->getActiveSheet()->getStyle("B1","B2")->getFont()->setBold(true);

        $no = 5;
        foreach($recs as $rec){
          $A='A'.$no;
          $B='B'.$no;
          $C='C'.$no;


          $programme = $rec['programme'];

          $programme = $db->query("SELECT `programme` FROM `programmes` WHERE abb = '".$programme."'") ;
          $prg = mysqli_fetch_array($programme);
          $programme = $prg['programme'];


          $addnum = $rec['addnum'];
          $fulln = $rec['last'].', '.$rec['first'].' '.$rec['other'];
          $spreadsheet->getActiveSheet()->setCellValue($A, $programme);
          $spreadsheet->getActiveSheet()->setCellValue($B, $addnum);
          $spreadsheet->getActiveSheet()->setCellValue($C, $fulln);


        $no++;
        }

        $date = date('Y-m-d H:i:s');

        $newfile='admissions/templates/template'.$date.'.xlsx' ;
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
        $writer->save($newfile);

        header ("location: ".$newfile);
      }else{


        echo "</br><font color='red'>No candidate&#40;s&#41; pending for admission status</font>";}


      }



  }

?>
</div>
</form>
</fieldset>
</div>


<form action="" method="POST">
<?php
include ('programme.php');
?>
<input type="submit" name="proceed" value="Proceed" />
</form>
<?php
if(isset($_POST['proceed'])){
	if($_POST['programme'] != ''){
		if(!ISSET($_SESSION)){SESSION_START();}
		$programme = $_POST['programme'];

		$programme = $db->query("SELECT `programme` FROM `programmes` WHERE abb = '".$programme."'") or die (mysqli_error($db));
		$prg = mysqli_fetch_array($programme);$programme = $prg['programme'];

		$_SESSION['prog'] = $programme;
		$_SESSION['programme'] = $_POST['programme'];
		header('location: admission.php');

	}
	else{echo '<font color="red">Please select programme to proceed to candidate&#40;s&#41; list</font>' ;}
}
?>
<fieldset>
<legend>Defer Admission</legend>
<form action="" method="POST">
<input type="text" name="addnum" placeholder="Admission Number" required/>
<input type="text" name="serial" placeholder="Serial Number on Payment Slip" required/>
<input type="submit" name="defer" value="Defer Student" />
</form>
<?php
if(ISSET($_POST['defer'])){
    $addnum = $db->real_escape_string(strip_tags($_POST['addnum']));
    $serial = $db->real_escape_string(strip_tags($_POST['serial']));

    $query = $db->query("SELECT `teller` FROM `transactions` WHERE `teller` = '".$serial."' AND `addnum` = '".$addnum."'") or die (mysqli_error($db));
    if(!$query->num_rows){
      die('<font color="red">No Payment record found with given Details</font>');
    }

    $query = $db->query("SELECT `addnum`,`deferment` FROM `students` WHERE `addnum` = '".$addnum."'") or die (mysqli_error($db));
    if(!$query->num_rows){
      die('<font color="red">No student found with given Admission Number</font>');
    }else{
      $qry = mysqli_fetch_array($query);
     $year = date('Y', strtotime($qry['deferment']));
     $month = date('m', strtotime($qry['deferment']));
     $day = date('d', strtotime($qry['deferment']));
      $year = $year + 1 ;
      $deferment = $year.'-'.$month.'-'.$day ;

      $update = $db->query("UPDATE `students` SET `deferment` = '$deferment' WHERE `addnum` = '$addnum' ") or die(mysqli_error($db));

      echo '<font color="green">Deferment successfully for '.$addnum.'</font>';
    }

}
?>
</fieldset>
</fieldset>


</div>
</br>
<div class="form" style="margin:auto auto; width:75%;">
<fieldset>
<legend>Course Registration Status</legend>
<form action="" method="POST">
<?php
$regstat = $db->query("SELECT `status` FROM `faculty` WHERE management = 'registrar'") or die (mysqli_error($db));
		$regst = mysqli_fetch_array($regstat);$regstat = $regst['status'];
		$rest = $regstat;

	if (ISSET($_POST['regstatus'])){
		if($rest == 'Opened'){$regstatus = 'Closed';}else{$regstatus = 'Opened';}
		$db->query("UPDATE faculty SET status='$regstatus' WHERE management='registrar'");
		header ("location:registrar.php");
	}

	if($regstat == 'Closed'){
		echo
		'<p><font color="red">Registration is currently Closed</font></p>
		<input type="submit" name="regstatus" value="Open Registration" />';
	}else{
		echo
		'<p><font color="green">Registration is currently Opened</font></p>
		<input type="submit" name="regstatus" value="Close Registration" />';
	}
?>

</form>

</div>
</br>

<div class="form" style="margin:auto auto; width:75%;">
<fieldset>
<legend>Set Dates</legend>
<fieldset style="float:left;">
<legend>Entrance Examination Date</legend>
<form action="" method="POST">
<select name="class">
<option>Pick a category</option>
<option value="pg" >Post-Graduate Programmes</option>
<option value="ug">Under-Graduate Programmes</option>
<option value="cert">Certificate Programmes</option>
<option value="dip">Diploma Programmes</option>
</select>
<font color="red">*</font>
<p>Examination Date:
<input type="date" name="examdate" placeholder="yyyy-mm-dd"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required/><font color="red">*</font></p>
<input type="submit" name="exdate" value="Set Exam date" />
</form>
<?php
if(ISSET($_POST['exdate'])){
	$examdate = $db->real_escape_string(strip_tags($_POST['examdate']));
	$class = $db->real_escape_string(strip_tags($_POST['class']));
	if (empty($examdate) || empty($class))
	{echo '<font color="red">All fields are required *</font>';}else{
		$db->query("UPDATE programmes SET examdate='$examdate' WHERE class='$class'");
		echo '<font color="green">Examination date set successfully..</font>';
	}
}
?>
</fieldset>

<fieldset style="float:right;">
<legend>Entrance Interview date</legend>
<form action="" method="POST">
<select name="class">
<option>Pick a category</option>
<option value="pg" >Post-Graduate Programmes</option>
<option value="ug">Under-Graduate Programmes</option>
<option value="cert">Certificate Programmes</option>
<option value="dip">Diploma Programmes</option>
</select>
<font color="red">*</font>
<p>Interview Date:
<input type="date" name="interviewdate" placeholder="yyyy-mm-dd"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required/><font color="red">*</font></p>
<input type="submit" name="intdate" value="Set Interview date" />
</form>
<?php
if(ISSET($_POST['intdate'])){
	$interviewdate = $db->real_escape_string(strip_tags($_POST['interviewdate']));
	$class = $db->real_escape_string(strip_tags($_POST['class']));
	if (empty($interviewdate) || empty($class))
	{echo '<font color="red">All fields are required *</font>';}else{
		$db->query("UPDATE programmes SET interviewdate='$interviewdate' WHERE class='$class'");
		echo '<font color="green">Interview date set successfully..</font>';
	}

}

?>
</fieldset>
</fieldset>
</div>

</br>
<div class="form" style="margin:auto auto; width:75%;">
<fieldset>
<legend>Student's Data</legend>
<div style="width: 48%; float:left;">
<fieldset>
<legend>Change Course of Study</legend>
<form action="" method="POST">
<p><input type="text" name="addnum" placeholder="Student I.D." /></p>
<p><?php include ('programme.php') ;?></p>
<input type="submit" name="changecourse" value="Update" />
</form>
<?php
if(ISSET($_POST['changecourse'])){
  $addnum = $db->real_escape_string(strip_tags($_POST['addnum']));
  $prog = $db->real_escape_string(strip_tags($_POST['programme']));
  $pr = $prog ;

  $programme = $db->query("SELECT `programme` FROM `students` WHERE `addnum` = '".$addnum."'") or die (mysqli_error($db));
  $prg = mysqli_fetch_array($programme);$programme = $prg['programme'];

  $programme = $db->query("SELECT `programme` FROM `programmes` WHERE abb = '".$programme."'") or die (mysqli_error($db));
  $prg = mysqli_fetch_array($programme);$programme = $prg['programme'];

  $prog = $db->query("SELECT `programme` FROM `programmes` WHERE abb = '".$prog."'") or die (mysqli_error($db));
  $prg = mysqli_fetch_array($prog);$prog = $prg['programme'];

  echo '
  <font color="red">Are you sure you want to  update</br> course of study for '.$addnum.' </br> from '.$programme.' </br>to '.$prog.'?</br></font>
  <form action="" method="POST">
  <input type="hidden" name="addnum" value="'.$addnum.'" />
  <input type="hidden" name="prog" value="'.$pr.'" />
  <input type="submit" name="yes" value="Yes" />
  <input type="submit" name="no" value="No" />
  </form>
  ';
}
if (ISSET($_POST['yes'])){
  $addnum = $db->real_escape_string(strip_tags($_POST['addnum']));
  $prog = $db->real_escape_string(strip_tags($_POST['prog']));
  $update = $db->query("UPDATE `students` SET `programme` = '$prog' WHERE `addnum` = '$addnum'") or die(mysqli_error($db));
  echo '<font color="green">Course of study updated successfully</font>';
}
if (ISSET($_POST['no'])){
  header ("location:registrar.php");
}
?>
</fieldset>
</div>
<div style="width:48%; float:right;">
<fieldset>
<legend>Trace Student</legend>
<form action="" method="POST">
<p><input type="text" name="addnum" placeholder="Student I.D." /></p>
<input type="submit" name="correctdata" value="Correct Data" />
<input type="submit" name="obtaintrans" value="Print Transcript" />
</form>
<?php
if (ISSET($_POST['correctdata'])){
    $addnum = $db->real_escape_string(strip_tags($_POST['addnum']));
    $select = $db->query("SELECT * FROM `students` WHERE `addnum`='$addnum'") or die($db->error);
			if($select->num_rows){
        SESSION_START;
        $_SESSION['addnum'] = $addnum;
        ob_start();
        header ('location:personal.php');
}else{
  echo '<script>alert("No student found with given I.D.")</script>';
  echo '<font color="red"><br/>No student found with given I.D.</font>';}
}
if (ISSET($_POST['obtaintrans'])){
    $addnum = $db->real_escape_string(strip_tags($_POST['addnum']));
    $select = $db->query("SELECT * FROM `students` WHERE `addnum`='$addnum'") or die($db->error);
			if($select->num_rows){
        SESSION_START;
        $_SESSION['addnum'] = $addnum;
        ob_start();
        header ('location:transcript.php');
}else{
  echo '<script>alert("No student found with given I.D.")</script>';
  echo '<font color="red"><br/>No student found with given I.D.</font>';}
}
?>

</fieldset>
</div>
<p style="float:right;"><input type='button' value='View Candidate Data' onclick='location.href="interview.php"' /></p>
</fieldset>
</div>

<!--
<div class="form" style="margin:auto auto; width:75%;">
<fieldset>
<legend>Enrol a Current Student</legend>
<p><input type='button' value='Enrol a Current Student' onclick='location.href="enrolment.php"' /></p>
</fieldset>
</div>
-->

</body>

</html>
