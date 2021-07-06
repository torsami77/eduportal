<fieldset>
<legend>REFEREE</legend>

<form action="" method="POST" >
<?php echo "<strong style='color:blue;'>REFEREE'S POSITION: </strong>".$position ; ?>
<p style="color:green;" ><strong>On behalf of the applicant profiled above, please fill this form before the examination date indicated, 
also sign and stamp this reference form &#40; if applicable&#41;. </br>&#40; All information on this form will be 
held in strictest confidence &#41;. </strong></p>

<p>1. Your Postal Address:</br>
<textarea cols="20" rows="7" name="42" placeholder="Referee's postal address" >
<?php  $refvalue ="42" ; include ('refvalue.php'); ?>
</textarea></p>

<p style="color:red;" >*After Interacting and Examining the candidate, All fields must be entered, enter "N.A." for fields that are "Not Applicable". </p>

<p style="color:blue;" >&emsp;&emsp;I. Ailment Diagnosis</p>
<p>Please check to indicate positive or negative for the diagnosis listed below;</p>
<table>
<tr><td></td><td>&emsp;&emsp;Positive&emsp;</td><td>&emsp;Negative</td></tr>
<tr>
<td id="<?php  $refvalue ='1' ; include ('refvalue.php'); ?>" >2. Tuberculosis </br></td>
<td style="text-align:center;"><input type="radio" name="1" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="1" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='2' ; include ('refvalue.php'); ?>" >3. Epilepsy </br></td>
<td style="text-align:center;"><input type="radio" name="2" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="2" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='3' ; include ('refvalue.php'); ?>" >4. Drug Allergic </br></td>
<td style="text-align:center;"><input type="radio" name="3" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="3" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='4' ; include ('refvalue.php'); ?>" >5. Cardiac Disease </br></td>
<td style="text-align:center;"><input type="radio" name="4" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="4" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='5' ; include ('refvalue.php'); ?>" >6. Asthma </br></td>
<td style="text-align:center;"><input type="radio" name="5" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="5" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='6' ; include ('refvalue.php'); ?>" >7. Ulcer </br></td>
<td style="text-align:center;"><input type="radio" name="6" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="6" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='7' ; include ('refvalue.php'); ?>" >8. Syphilis </br></td>
<td style="text-align:center;"><input type="radio" name="7" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="7" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='8' ; include ('refvalue.php'); ?>" >9. Renal Disease </br></td>
<td style="text-align:center;"><input type="radio" name="8" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="8" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='9' ; include ('refvalue.php'); ?>" >10. Diabetis </br></td>
<td style="text-align:center;"><input type="radio" name="9" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="9" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='10' ; include ('refvalue.php'); ?>" >11. Drug Abuse </br></td>
<td style="text-align:center;"><input type="radio" name="10" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="10" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='11' ; include ('refvalue.php'); ?>" >12. Psychosis </br></td>
<td style="text-align:center;"><input type="radio" name="11" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="11" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='12' ; include ('refvalue.php'); ?>" >13. Hypersion </br></td>
<td style="text-align:center;"><input type="radio" name="12" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="12" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='13' ; include ('refvalue.php'); ?>" >14. Rheumatism </br></td>
<td style="text-align:center;"><input type="radio" name="13" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="13" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='14' ; include ('refvalue.php'); ?>" >15. Cancer </br></td>
<td style="text-align:center;"><input type="radio" name="14" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="14" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='15' ; include ('refvalue.php'); ?>" >16. Pneumonia </br></td>
<td style="text-align:center;"><input type="radio" name="15" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="15" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='16' ; include ('refvalue.php'); ?>" >17. Typhoid Fever </br></td>
<td style="text-align:center;"><input type="radio" name="16" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="16" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='17' ; include ('refvalue.php'); ?>" >18. Leprosy </br></td>
<td style="text-align:center;"><input type="radio" name="17" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="17" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='18' ; include ('refvalue.php'); ?>" >19. Other Communicable Disease </br></td>
<td style="text-align:center;"><input type="radio" name="18" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="18" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='19' ; include ('refvalue.php'); ?>" >20. Regular Medication </br></td>
<td style="text-align:center;"><input type="radio" name="19" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="19" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
</table>

<p style="color:blue;" >&emsp;&emsp;II. Physical Examination.</p>

<p>21. Height <input type="text" name="20" size="20" placeholder=" Height" 
value="<?php  $refvalue ='20' ; include ('refvalue.php'); ?>" 
/> cm&#40;s&#41;
</p>
<p>22. Weight <input type="text" name="21" size="20" placeholder=" Weight" 
value="<?php  $refvalue ='21' ; include ('refvalue.php'); ?>" 
/> kg&#40;s&#41;
</p>
<p>23.Blood pressure: Systolic <input type="text" name="21" size="10" placeholder=" " 
value="<?php  $refvalue ='21' ; include ('refvalue.php'); ?>" 
/> mmHg <input type="text" name="22" size="10" placeholder=" " 
value="<?php  $refvalue ='22' ; include ('refvalue.php'); ?>" 
/> mmHg
</p>
<p>24. Pulse Rate <input type="text" name="23" size="20" placeholder=" Pulse Rate" 
value="<?php  $refvalue ='23' ; include ('refvalue.php'); ?>" 
/> /min &emsp; &#91;
<font id="<?php  $refvalue ='24' ; include ('refvalue.php'); ?>"></font> 
<input type="radio" name="24" value="Regular" 
<?php if(ISSET($refvalue)){if($refvalue == 'Regular'){echo 'checked';}} ?> />&#93; Regular &emsp;&emsp; 
&#91;<input type="radio" name="24" value="Irregular" 
<?php if(ISSET($refvalue)){if($refvalue == 'Irregular'){echo 'checked';}} ?> />&#93; Irregular 
</p>
<p id="<?php  $refvalue ='25' ; include ('refvalue.php'); ?>" >25. Eye Sight colour blindness 
&emsp;&emsp;&#91;<input type="radio" name="25" value="Corrected" 
<?php if(ISSET($refvalue)){if($refvalue == 'Corrected'){echo 'checked';}} ?> />&#93; Corrected &emsp;&emsp; 
&#91;<input type="radio" name="25" value="Uncorrected" 
<?php if(ISSET($refvalue)){if($refvalue == 'Uncorrected'){echo 'checked';}} ?> />&#93; Uncorrected 
</p>

<p id="<?php  $refvalue ='26' ; include ('refvalue.php'); ?>" >26. Hearing
&emsp;&emsp;&#91;<input type="radio" name="26" value="Normal" 
<?php if(ISSET($refvalue)){if($refvalue == 'Normal'){echo 'checked';}} ?> />&#93; Normal &emsp;&emsp; 
&#91;<input type="radio" name="26" value="Impaired" 
<?php if(ISSET($refvalue)){if($refvalue == 'impaired'){echo 'checked';}} ?> />&#93; Impaired 
</p>

<p id="<?php  $refvalue ='27' ; include ('refvalue.php'); ?>" >27. Speech
&emsp;&emsp;&#91;<input type="radio" name="27" value="Normal" 
<?php if(ISSET($refvalue)){if($refvalue == 'Normal'){echo 'checked';}} ?> />&#93; Normal &emsp;&emsp; 
&#91;<input type="radio" name="27" value="Impaired" 
<?php if(ISSET($refvalue)){if($refvalue == 'impaired'){echo 'checked';}} ?> />&#93; Impaired 
</p>

<p>28. Chest: &emsp;Please describe the results of physical and X-ray examinations of applicant’s chest, </br>&emsp;&emsp;&emsp;&emsp;
&emsp;also note the exact date of X-ray &#40; X-ray taken more than 6 months prior to the certification is not valid&#41;.
</br>
</p><p>&emsp;&emsp;&emsp;&emsp;X-ray film</br>
&emsp;&emsp;&emsp;&emsp;Date 
<input type="date" name="28" placeholder=" yyyy-mm-dd" value="<?php  $value='28'; include ('refvalue.php'); ?>"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" />

<input type="date" name="bday" placeholder="yyyy-mm-dd" value="<?php  $value=28; include ('refvalue.php'); ?>"
pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]
|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" />

   </br>
&emsp;&emsp;&emsp;&emsp;Film N0 <input type="text" name="29" size="20" placeholder=" Film N0" 
value="<?php  $refvalue ='29' ; include ('refvalue.php'); ?>" 
/></br>
&emsp;&emsp;&emsp;&emsp;Lung fields <input type="text" name="30" size="20" placeholder=" Lung fields" 
value="<?php  $refvalue ='30' ; include ('refvalue.php'); ?>" 
/></br>
<font id="<?php  $refvalue ='31' ; include ('refvalue.php'); ?>" ></font>
&emsp;&emsp;&emsp;&emsp;Cardiomegaly &emsp;&emsp;<input type="radio" name="31" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/>Positive
&emsp;<input type="radio" name="31" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/>Negative
</br>



&emsp;&emsp;&emsp;&emsp;Bone Cage <input type="text" name="32" size="20" placeholder=" Bone Cage" 
value="<?php  $refvalue ='32' ; include ('refvalue.php'); ?>" 
/></br>
&emsp;&emsp;&emsp;&emsp;Diaphragmatic domes <input type="text" name="33" size="20" placeholder=" Diaphragmatic domes " 
value="<?php  $refvalue ='33' ; include ('refvalue.php'); ?>" 
/></br>
</p>

<p>29. Abdomen
<table>
<tr><td></td><td>&emsp;&emsp;Positive&emsp;</td><td>&emsp;Negative</td></tr>
<tr>
<td id="<?php  $refvalue ='34' ; include ('refvalue.php'); ?>" >
&emsp;&emsp;&emsp;&emsp; Hernia </br></td>
<td style="text-align:center;"><input type="radio" name="34" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="34" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='35' ; include ('refvalue.php'); ?>" >
&emsp;&emsp;&emsp;&emsp; Liver Enlargement </br></td>
<td style="text-align:center;"><input type="radio" name="35" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="35" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
<tr>
<td id="<?php  $refvalue ='36' ; include ('refvalue.php'); ?>" >
&emsp;&emsp;&emsp;&emsp;  Splenomegaly  </br></td>
<td style="text-align:center;"><input type="radio" name="36" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"><input type="radio" name="36" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
</table>
</p>


<p style="color:blue;" >&emsp;&emsp;II. Laboratory test.</p>

<p>30. Urinalysis:</br>
<textarea cols="20" rows="7" name="37" placeholder="Urinalysis details" >
<?php  $refvalue ="37" ; include ('refvalue.php'); ?>
</textarea></p>

<p>31. Stool:</br>
<textarea cols="20" rows="7" name="38" placeholder="Stool details" >
<?php  $refvalue ="38" ; include ('refvalue.php'); ?>
</textarea></p>

<p>32. Haemoglobin:</br>
<textarea cols="20" rows="7" name="39" placeholder="Haemoglobin details" >
<?php  $refvalue ="39" ; include ('refvalue.php'); ?>
</textarea></p>

<p>
<table>
<tr>
<td id="<?php  $refvalue ='40' ; include ('refvalue.php'); ?>" >
33.  HIV.  </br></td>
<td style="text-align:center;">Positive<input type="radio" name="40" value="Positive" 
<?php if(ISSET($refvalue)){if($refvalue == 'Positive'){echo 'checked';}} ?>/></td>
<td style="text-align:center;"> Negative<input type="radio" name="40" value="Negative" 
<?php if(ISSET($refvalue)){if($refvalue == 'Negative'){echo 'checked';}} ?>/></td>
</tr>
</table>
</p>

<p>34. Comment&#40;s&#41;:</br>
<textarea cols="20" rows="7" name="41" placeholder="Comment(s)" >
<?php  $refvalue ="41" ; include ('refvalue.php'); ?>
</textarea></p>







</form>

</fieldset>
<?php
if(ISSET($_POST['submit3'])){
	$totalquestion = 42 ;
	require ('refloop.php');
};

?>