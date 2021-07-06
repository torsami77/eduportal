<?php
		$school='school'.$sn;
		$from='from'.$sn;
		$to='to'.$sn;
		$cert='cert'.$sn;
		$grade='grade'.$sn;
		$certdate='certdate'.$sn;
		$scancert='scancert'.$sn;

if(!empty($_POST['school'.$sn]))
{ $$school = $db->real_escape_string(strip_tags($_POST['school'.$sn])
) or die ('<font color="red">Site under update, please try again later...</font>');
}
else{$$school ='';
	}

if(!empty($_POST['school'.$sn])){
	if(empty($_POST['from'.$sn])){
$correct= $sn.'. Please enter valid format "Year-Month-Day"</br>for Institution '.$sn.', Dates Attended' ; include('correct.php');}else
	{$$from = $_POST['from'.$sn] ;
	 list($year,$month,$day)=explode("-",$$from);
if(checkdate($month,$day,$year))
{ $$from = $db->real_escape_string(strip_tags($_POST['from'.$sn])) or die
('<font color="red">Site under update, please try again later...</font>');
  }
else{
$correct= $sn.'. Please enter valid format "Year-Month-Day"</br>for Institution '.$sn.', Dates Attended' ; include('correct.php');}
}	}else{$$from ="";
		  }

if(!empty($_POST['school'.$sn])){
	if(empty($_POST['to'.$sn])){
$correct= $sn.'. Please enter valid format "Year-Month-Day"</br>for Institution '.$sn.', Dates Attended' ; include('correct.php');}else
	{$$to= $_POST['to'.$sn] ;
	 list($year,$month,$day)=explode("-",$$to);
if(checkdate($month,$day,$year))
{$$to = $db->real_escape_string(strip_tags($_POST['to'.$sn])) or die
('<font color="red">Site under update, please try again later...</font>');
}
else{
$correct= $sn.'. Please enter valid format "Year-Month-Day"</br>for Institution '.$sn.', Dates Attended' ; include('correct.php');}
}	}else{$$to ="";
		  }

if(!empty($_POST['school'.$sn])){
	if(empty($_POST['cert'.$sn])){
$correct= $sn.'. Please enter Certificate Awarded</br>for Institution '.$sn ; include('correct.php');
}else
	{$$cert = $db->real_escape_string(strip_tags($_POST['cert'.$sn]))
	or die ('<font color="red">Site under update, please try again later...</font>');
	}
}else{$$cert ="";
	  }

if(!empty($_POST['school'.$sn])){
	if(empty($_POST['grade'.$sn])){
$correct= $sn.'. Please enter Grade Obtain on certificate</br>for Institution '.$sn ; include('correct.php');
}else
	{$$grade = $db->real_escape_string(strip_tags($_POST['grade'.$sn])) or die ('<font color="red">Site under update, please try again later...</font>');
	}
}else{$$grade ="";
	  }

if(!empty($_POST['school'.$sn])){
	if(empty($_POST['certdate'.$sn])){
$correct= $sn.'. Please Enter valid format "Year-Month-Day"</br>for certificate '.$sn.', Date Received' ; include('correct.php');
die ('<font color="red">Enter a valid Date format </font>') ;}else
	{$$certdate = $_POST['certdate'.$sn] ;
	 list($year,$month,$day)=explode("-",$$certdate);
if(checkdate($month,$day,$year))
{ $$certdate = $db->real_escape_string(strip_tags($_POST['certdate'.$sn])) or die ('<font color="red">Site under update, please try again later...</font>');
}
else{
$correct= $sn.'. Please Enter valid format "Year-Month-Day"</br>for certificate '.$sn.', Date Received' ; include('correct.php');}
}	}else{$$certdate = "";
		  }
	$uploaderdir="certs/".$sn."/".$addnum.'_'.$sn.".pdf";
	//$uploaderdir="certs/".$addnum.'_'.$sn.".pdf";
	if(is_uploaded_file($_FILES['scancert'.$sn]['tmp_name'])){
$file1 = file_get_contents($_FILES['scancert'.$sn]['tmp_name']);
	$file1 = substr($file1,0,4);
if ($file1 == '%PDF' && $_FILES['scancert'.$sn]['size'] < 1000000 )
{move_uploaded_file($_FILES['scancert'.$sn]['tmp_name'], $uploaderdir);
} else {
	if(!file_exists($uploaderdir)){
$correct= $sn.'.Please Upload a scanned copy in PDF format below 1MB</br> for certificate number '.$sn ;
	include('correct.php'); }}}
	else {
	if(!file_exists($uploaderdir)){
$correct= $sn.'.Please Upload a scanned copy in PDF format below 1MB</br> for certificate number '.$sn ;
	include('correct.php'); }}


		$school_b = $$school;
		$from_b = $$from;
		$to_b = $$to;
		$cert_b = $$cert;
		$grade_b = $$grade;
		$certdate_b = $$certdate;

if(!$update = $db->query("
UPDATE students SET

		$school = '$school_b',
		$from = '$from_b',
		$to = '$to_b',
		$cert = '$cert_b',
		$grade = '$grade_b',
		$certdate = '$certdate_b',
		aca='Yes'

WHERE addnum='$addnum'"
)){
die ('<font color="red">Site under update, please try again later...</font>');};


?>
