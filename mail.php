<?php
$office = 'Registrar';
$subject = 'Fill in as Referee' ;
$from 	 = 'Admission at '.$institution ;

$message =	"
</br>
Dear ".$ref.",<br/>
<br/>
".$row['last']." ".$row['other']." ".$row['first']." with Application Number $addnum, has requested you to serve as referee
<br/>
If you wish to proceed; your passcode is $passcode 
</p>click <a href='http://www.".$institution.".sch.ng/referee.php'> 
here to fill the referee form. </a> <br/>
<br/>
Thank you!!<br/>
<br/>
Registrar<br/>
<br/>"
.$fullinstadd
;
?>