<?php
if(isset($_POST['save'])){
if(empty($_POST['last'])){$correct='1. Please your Last Name is required!!'; include('correct.php');}else{$last = $db->real_escape_string(strip_tags($_POST['last'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if(empty($_POST['first'])){$correct='2. Please your First Name is required!!'; include('correct.php');}else{$first = $db->real_escape_string(strip_tags($_POST['first'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if(!empty($_POST['other'])){$other = $db->real_escape_string(strip_tags($_POST['other'])) or die ('<font color="red">Site under update, please try again later...</font>');}else{$other='';};
if(empty($_POST['homeadd'])){$correct='4. Please your Home Address is required!!'; include('correct.php');}else{$homeadd = $db->real_escape_string(strip_tags($_POST['homeadd'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if(empty($_POST['postal'])){$correct='5. Please your Contact/Postal is required!!'; include('correct.php');}else{$postal = $db->real_escape_string(strip_tags($_POST['postal'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if(empty($_POST['bday'])){$correct='6. Please your Date of Birth is required!!'; include('correct.php');}else
{$bday= $_POST['bday'] ;
	 list($year,$month,$day)=explode("-",$bday);
if(checkdate($month,$day,$year))
{$bday = $db->real_escape_string(strip_tags($_POST['bday'])) or die 
('<font color="red">Site under update, please try again later...</font>');}
else{$correct='6. Please Enter a valid date format "Year-Month-Day"'; include('correct.php');}	
}

if(empty($_POST['bplace'])){$correct='7. Please your Place of Birth is required!!'; include('correct.php');}else{$bplace = $db->real_escape_string(strip_tags($_POST['bplace'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if(empty($_POST['country'])){$correct='8. Please your Country of Origin is required!!'; include('correct.php');}else{$country = $db->real_escape_string(strip_tags($_POST['country'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if($country == 'Nigeria'){if (empty($_POST['state'])){$correct='9. Please your State of Origin is required!!'; include('correct.php');} else{$state = $db->real_escape_string(strip_tags($_POST['state'])) or die ('<font color="red">Site under update, please try again later...</font>');};};

if($country !== 'Nigeria'){if (empty($_POST['outside']))
{$correct='10. Please Specify state outside Nigeria'; include('correct.php');}else{$outside = $db->real_escape_string(strip_tags($_POST['outside'])) or die ('<font color="red">Site under update, please try again later...</font>');};}else{$outside = '';};

if(empty($_POST['marital'])){$correct='11. Please your Marital Status is required!!'; include('correct.php');}else{$marital = $db->real_escape_string(strip_tags($_POST['marital'])) or die ('<font color="red">Site under update, please try again later...</font>');}
if($marital == 'Married'){if (empty($_POST['spouse'])){$correct='12.a. Please your Spouse&#39s Name is required!!'; include('correct.php');}else{$spouse = $db->real_escape_string(strip_tags($_POST['spouse'])) or die ('<font color="red">Site under update, please try again later...</font>');}}else{$spouse = '';};

if($marital == 'Married'){if(empty($_POST['wedded']))
{$correct='12.b. Please indicate date of marriage "Year-Month-Day"'; include('correct.php');}else
{$wedded= $_POST['wedded'] ;
	 list($year,$month,$day)=explode("-",$wedded);
if(checkdate($month,$day,$year))
{$wedded = $db->real_escape_string(strip_tags($_POST['wedded'])) or die 
('<font color="red">Site under update, please try again later...</font>');}
else{$correct='12.b. Please Enter a valid date format "Year-Month-Day"'; include('correct.php');}	
};}else{$wedded='';};

if(!empty($_POST['ages'])){$ages = $db->real_escape_string(strip_tags($_POST['ages'])) or die ('<font color="red">Site under update, please try again later...</font>');}else{$ages='';};
if($marital == 'Single'){$wedded='';};
if($marital == 'Married'){$engaged='';};
if($marital !== 'Married'){if(empty($_POST['engaged'])){$correct='13. Please indicate if you expect to marry during your time of study at the Seminary'; include('correct.php');}else{$engaged = $db->real_escape_string(strip_tags($_POST['engaged'])) or die ('<font color="red">Site under update, please try again later...</font>');};}else{$engaged='';};
if(empty($_POST['health'])){$correct='14. Please indicate your Health Status'; include('correct.php');}else{$health = $db->real_escape_string(strip_tags($_POST['health'])) or die ('<font color="red">Site under update, please try again later...</font>');};
if($health == 'No'){if(empty($_POST['physique'])){$correct='15. Please indicate your Physical Health condition'; include('correct.php');}else{$physique = $db->real_escape_string(strip_tags($_POST['physique'])) or die ('<font color="red">Site under update, please try again later...</font>');};}else{$physique='';};
if(empty($_POST['sponsor'])){$correct='15. Please indicate how you plan to Sponsor your studies at the Seminary'; include('correct.php');}else{$sponsor = $db->real_escape_string(strip_tags($_POST['sponsor'])) or die ('<font color="red">Site under update, please try again later...</font>');}



if($update = $db->query("
UPDATE students SET last='$last', first='$first', other='$other', homeadd='$homeadd', postal='$postal', bday='$bday', 
bplace='$bplace', country='$country', state='$state', outside='$outside', marital='$marital', spouse='$spouse', wedded='$wedded', ages='$ages', 
engaged='$engaged', health='$health', physique='$physique', sponsor='$sponsor', per='Yes' 
WHERE addnum='$addnum'"
)){

header ("location: academics.php");


}else{die ('<font color="red">Site under update, please try again later...</font>');};
};
?>