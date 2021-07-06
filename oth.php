<?php
if(ISSET($_POST['save'])){
	if(empty($_POST['court'])){$correct='1. Please indicate if you have ever beeen convicted'; include('correct.php');}else{
		$court = $db->real_escape_string(strip_tags($_POST['court'])) or die ('<font color="red">Site under update, please try again later...</font>');
	}
	
	if ($_POST['court']=='Yes'){
	if(empty($_POST['convicted'])){$correct='1. Please indicate why you were convicted'; include('correct.php');}else{
		$convicted = $db->real_escape_string(strip_tags($_POST['convicted'])) or die ('<font color="red">Site under update, please try again later...</font>');
	}}else{$convicted='';};
	
	if(empty($_POST['discipline'])){$correct='2. Please indicate if you have ever beeen "Discipline by a Church"'; include('correct.php');}else{
		$discipline = $db->real_escape_string(strip_tags($_POST['discipline'])) or die ('<font color="red">Site under update, please try again later...</font>');
	}
	
		if ($_POST['discipline']=='Yes'){
	if(empty($_POST['cdiscipline'])){$correct='2. Please indicate why you where discipline'; include('correct.php');}else{
		$cdiscipline = $db->real_escape_string(strip_tags($_POST['cdiscipline'])) or die ('<font color="red">Site under update, please try again later...</font>');
	}}else{$cdiscipline='';};
	
	if(empty($_POST['why'])){$correct='3. Please indicate why you want to come to the Seminary'; include('correct.php');}else{
		$why = $db->real_escape_string(strip_tags($_POST['why'])) or die ('<font color="red">Site under update, please try again later...</font>');
	}
	
	if(empty($_POST['what'])){$correct='4. Please indicate your beliefs about The Bible'; include('correct.php');}else{
		$what = $db->real_escape_string(strip_tags($_POST['what'])) or die ('<font color="red">Site under update, please try again later...</font>');
	}

		if(empty($_POST['christian'])){$correct='5. Please indicate if you consider yourself a Christian'; include('correct.php');}else{
		$christian = $db->real_escape_string(strip_tags($_POST['christian'])) or die ('<font color="red">Site under update, please try again later...</font>');
	}
	
	if ($_POST['christian']=='Yes'){
	if(empty($_POST['basis'])){$correct='5. Please indicate on what base you consider yourself a Christian'; include('correct.php');}else{
		$basis = $db->real_escape_string(strip_tags($_POST['basis'])) or die ('<font color="red">Site under update, please try again later...</font>');
	}}else{$basis='';};
	
	$pdffile = 'testimony'; $q = '6.a.';
	$uploaderdir= $pdffile."/".$addnum.".pdf";
	if(is_uploaded_file($_FILES[$pdffile]['tmp_name'])){include('pdffile.php');}
	else {
	if(!file_exists($uploaderdir)){$correct= 'Please Upload a scanned copy in PDF format below 1MB</br> for question '.$q ; 
	include('correct.php'); }}

	
	$pdffile = 'call'; $q = '6.b.';
	$uploaderdir= $pdffile."/".$addnum.".pdf";
	if(is_uploaded_file($_FILES[$pdffile]['tmp_name'])){include('pdffile.php');}
	else {
	if(!file_exists($uploaderdir)){$correct= 'Please Upload a scanned copy in PDF format below 1MB</br> for question '.$q ; 
	include('correct.php'); }}
	
	$pdffile = 'medical'; $q = '7';
	$uploaderdir= $pdffile."/".$addnum.".pdf";
	if(is_uploaded_file($_FILES[$pdffile]['tmp_name'])){include('pdffile.php');}
	else {
	if(!file_exists($uploaderdir)){$correct= 'Please Upload a scanned copy in PDF format below 1MB</br> for question '.$q ; 
	include('correct.php'); }}
	
	if(!$update = $db->query("
UPDATE students SET 

		court = '$court',
		convicted = '$convicted',
		discipline = '$discipline',
		cdiscipline = '$cdiscipline',
		why = '$why',
		what = '$what',
		christian = '$christian',
		basis = '$basis',
		oth = 'Yes'

WHERE addnum=$addnum"
)){

die ('<font color="red">Site under update, please try again later...</font>');};

	
	
	
	
	
header ("location: submit.php");
	};
?>