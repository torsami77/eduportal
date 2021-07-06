<?php

if(ISSET($_POST['save']))
{
if(empty($_POST['denomination'])){$correct='1. Please your Denomination is required' ; include('correct.php');}else{$denomination = $db->real_escape_string(strip_tags($_POST['denomination'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if($denomination == 'ECWA' && (empty($_POST['dcc']))){$correct='1. Please specify your DCC' ; include('correct.php');}else{
	if(!empty($_POST['dcc'])){$dcc = $db->real_escape_string(strip_tags($_POST['dcc']));}else{$dcc='';}};
if(empty($_POST['pastor'])){$correct='2. Please your "Name of Pastor " is required' ; include('correct.php');}else{$pastor = $db->real_escape_string(strip_tags($_POST['pastor'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if(empty($_POST['caddress'])){$correct='3. Please your Church Address is required' ; include('correct.php');}else{$caddress = $db->real_escape_string(strip_tags($_POST['caddress'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if(empty($_POST['baptised'])){$correct='4. Please specify your Baptism status' ; include('correct.php');}else{$baptised = $db->real_escape_string(strip_tags($_POST['baptised'])) or die ('<font color="red">Site under update, please try again later...</font>');}

if(empty($_POST['occupation'])){$occupation='';
								$position='';
								$worked='';
								$held='';
								$employer='';
								$eaddress='';}else


{$occupation = $db->real_escape_string(strip_tags($_POST['occupation'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if(empty($_POST['position'])){$correct='Occupation</br>2. Please specify your Position on this Job!!' ; include('correct.php');}else{$position = $db->real_escape_string(strip_tags($_POST['position'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if(empty($_POST['worked'])){$correct='Occupation</br>3. Please specify how long you have worked in this job!!' ; include('correct.php');}else{$worked = $db->real_escape_string(strip_tags($_POST['worked'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if(empty($_POST['held'])){$correct='Occupation</br>4. Please specify how long you have held this position!!' ; include('correct.php');}else{$held = $db->real_escape_string(strip_tags($_POST['held'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if(empty($_POST['employer'])){$correct='Occupation</br>5. Please specify the "name of your Employer!!"' ; include('correct.php');}else{$employer = $db->real_escape_string(strip_tags($_POST['employer'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if(empty($_POST['eaddress'])){$correct='Occupation</br>6. Please specify the "address of your Employer!!"' ; include('correct.php');}else{$eaddress = $db->real_escape_string(strip_tags($_POST['eaddress'])) or die ('<font color="red">Site under update, please try again later...</font>');}

if(!$update = $db->query("
UPDATE students SET

		denomination = '$denomination',
		dcc = '$dcc',
		pastor = '$pastor',
		caddress = '$caddress',
		baptised = '$baptised',
		occupation = '$occupation',
		position = '$position',
		worked = '$worked',
		held = '$held',
		employer = '$employer',
		eaddress = '$eaddress',
		affi='Yes'

WHERE addnum='$addnum'"
)){
die ('<font color="red">Site under update, please try again later...</font>');};

if(isset($_POST['ref1']))
{$sn=1;
include ('ref.php');
};

if(isset($_POST['ref2']))
{$sn=2;
include ('ref.php');
};

if(isset($_POST['ref3']))
{$sn=3;
include ('ref.php');
};

header ("location: others.php");
};
?>