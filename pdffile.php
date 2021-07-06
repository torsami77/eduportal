<?php
$file1 = file_get_contents($_FILES[$pdffile]['tmp_name']);
	$file1 = substr($file1,0,4);
if ($file1 == '%PDF' && $_FILES[$pdffile]['size'] < 1000000 )
{move_uploaded_file($_FILES[$pdffile]['tmp_name'], $uploaderdir);
} else {
	if(!file_exists($uploaderdir)){
$correct= $sn.'.Please Upload a scanned copy in PDF format below 1MB</br> for '.$q ; 
	include('correct.php'); }}





?>