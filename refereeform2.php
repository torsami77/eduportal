<fieldset>
<legend>REFEREE</legend>

<form action="" method="POST" >
<?php echo "<strong style='color:blue;'>REFEREE'S POSITION: </strong>".$position ; ?>
<p style="color:green;" ><strong>On behalf of the applicant profiled above, please fill this form before the examination date indicated, 
also sign and stamp this reference form &#40; if applicable&#41;. </br>&#40; All information on this form will be 
held in strictest confidence &#41;. </strong></p>
<p style="color:red;" >*All fields must be entered, enter "N.A." for fields that are "Not Applicable". </p>
 
<p>1. Your Postal Address:</br>
<textarea cols="20" rows="7" name="1" placeholder="Referee's postal address" required >
<?php  $refvalue ="1" ; include ('refvalue.php'); ?>
</textarea></p>

<p>2. <input type="text" name="2" size="60" placeholder=" How long have you known the applicant?" 
value="<?php  $refvalue ='2' ; include ('refvalue.php'); ?>" required
/>
</p>

<p>3. <input type="text" name="3" size="60" placeholder="In what capacity have you known the applicant?" 
value="<?php  $refvalue ='3' ; include ('refvalue.php'); ?>" required
/>
</p>

<p id="<?php  $refvalue ="4" ; include ('refvalue.php'); ?>">
4. How well do you know the applicant?<font color="red">*</font>  
Very well<input type="radio" name="4" value="Very well"
 <?php if(ISSET($refvalue)){if($refvalue == "Very well"){echo 'checked';}} ?> required />&emsp; 
Rather well<input type="radio" name="4" value="Rather well"
 <?php if(ISSET($refvalue)){if($refvalue == 'Rather well'){echo 'checked';}} ?>/>&emsp;
Casually<input type="radio" name="4" value="Casually"
 <?php if(ISSET($refvalue)){if($refvalue == 'Casually'){echo 'checked';}} ?>/> &emsp;
Not well<input type="radio" name="4" value="Not well"
 <?php if(ISSET($refvalue)){if($refvalue == 'Not well'){echo 'checked';}} ?>/> &emsp;
 </p>
 
 <p>5. <input type="text" name="5" size="60" placeholder=" Is the applicant capable of studying at the level indicated ? " 
value="<?php  $refvalue ='5' ; include ('refvalue.php'); ?>" required
/>
</p>

<p>6. <input type="text" name="6" size="60" placeholder=" If you have taught the applicant, how many of your courses did he/she take?  " 
value="<?php  $refvalue ='6' ; include ('refvalue.php'); ?>" required
/>
</p>

<p id="<?php  $refvalue ="7" ; include ('refvalue.php'); ?>">
7. How well did the applicant do in the course&#40s&#41?<font color="red">*</font>  
Very well<input type="radio" name="7" value="Very well"
 <?php if(ISSET($refvalue)){if($refvalue == "Very well"){echo 'checked';}} ?> required />&emsp; 
Rather well<input type="radio" name="7" value="Rather well"
 <?php if(ISSET($refvalue)){if($refvalue == 'Rather well'){echo 'checked';}} ?>/>&emsp;
Casually<input type="radio" name="7" value="Casually"
 <?php if(ISSET($refvalue)){if($refvalue == 'Casually'){echo 'checked';}} ?>/> &emsp;
Not well<input type="radio" name="7" value="Not well"
 <?php if(ISSET($refvalue)){if($refvalue == 'Not well'){echo 'checked';}} ?>/> &emsp;
 </p>


<p>
8. Please rate the applicant in the following areas.</br>
<table style="text-align:center;">
<tr><td></td><td></td><td>&emsp; Poor &emsp;</td><td>&emsp; Good &emsp; </td><td> Very </br> Good &emsp;</td><td> Not</br> Observed </td></tr>
<tr>
<div id="<?php  $refvalue ='8' ; include ('refvalue.php'); ?>">
<td>a.</td><td style="text-align:left;"> Applicant’s spoken English  </td>
<td><input type="radio" name="8" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required/></td>
<td><input type="radio" name="8" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="8" value="Very Good"  
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="8" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>
 

<tr>
<div id="<?php  $refvalue ='9' ; include ('refvalue.php'); ?>">
<td>b.</td><td style="text-align:left;"> Applicant’s written English  </td>
<td><input type="radio" name="9" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required/></td>
<td><input type="radio" name="9" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="9" value="Very Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="9" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>
 
<tr>
<div id="<?php  $refvalue ='10' ; include ('refvalue.php'); ?>">
<td>c.</td><td style="text-align:left;"> Applicant’s study habits  </td>
<td><input type="radio" name="10" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="10" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="10" value="Very Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="10" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>
 
<tr>
<div id="<?php  $refvalue ='11' ; include ('refvalue.php'); ?>">
<td>d.</td><td style="text-align:left;"> Applicant’s ministry motivation </td>
<td><input type="radio" name="11" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required/></td>
<td><input type="radio" name="11" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="11" value="Very Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="11" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>
 
<tr>
<div id="<?php  $refvalue ='12' ; include ('refvalue.php'); ?>">
<td>e.</td><td style="text-align:left;"> Applicant’s submission to Authority </td>
<td><input type="radio" name="12" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="12" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="12" value="Very Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="12" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='13' ; include ('refvalue.php'); ?>">
<td>f.</td><td style="text-align:left;"> Applicant’s teachability </td>
<td><input type="radio" name="13" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="13" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="13" value="Very Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="13" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='14' ; include ('refvalue.php'); ?>">
<td>g.</td><td style="text-align:left;"> Applicant’s team cooperation </td>
<td><input type="radio" name="14" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="14" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="14" value="Very Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="14" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='15' ; include ('refvalue.php'); ?>">
<td>h.</td><td style="text-align:left;"> Applicant’s Academic Ability </td>
<td><input type="radio" name="15" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="15" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="15" value="Very Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="15" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='16' ; include ('refvalue.php'); ?>">
<td>i.</td><td style="text-align:left;"> Applicant’s health </td>
<td><input type="radio" name="16" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="16" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="16" value="Very Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="16" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='17' ; include ('refvalue.php'); ?>">
<td>j.</td><td style="text-align:left;"> Applicant’s creativity and imagination  </td>
<td><input type="radio" name="17" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="17" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="17" value="Very Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="17" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='18' ; include ('refvalue.php'); ?>">
<td>k.</td><td style="text-align:left;"> Applicant’s self-confidence and disciple </td>
<td><input type="radio" name="18" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="18" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="18" value="Very Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="18" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='19' ; include ('refvalue.php'); ?>">
<td>l.</td><td style="text-align:left;"> Applicant’s leadership skills </td>
<td><input type="radio" name="19" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="19" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="19" value="Very Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="19" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='20' ; include ('refvalue.php'); ?>">
<td>m.</td><td style="text-align:left;"> Applicant’s potential for career advancement </td>
<td><input type="radio" name="20" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="20" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="20" value="Very Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="20" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='21' ; include ('refvalue.php'); ?>">
<td>n.</td><td style="text-align:left;"> Applicant’s ability to analyse problems and formulate solutions </td>
<td><input type="radio" name="21" value="Poor" 
<?php if(ISSET($refvalue)){if($refvalue == 'Poor'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="21" value="Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="21" value="Very Good" 
<?php if(ISSET($refvalue)){if($refvalue == 'Very Good'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="21" value="Not Observed" 
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

</table>
</p>


<p>9. To the best of your knowledge does the Applicant have any of the following problems</br>
<table style="text-align:center;">
<tr><td></td><td></td><td> &emsp; Yes &emsp;</td><td> &emsp;No &emsp;</td><td> Not</br> Observed </td></tr>
<tr>
<div id="<?php  $refvalue ='22' ; include ('refvalue.php'); ?>">
<td>a.</td><td style="text-align:left;"> A drinking problem &#40; alcohol, beer &#41; </td>
<td><input type="radio" name="22" value="Yes" 
<?php if(ISSET($refvalue)){if($refvalue == 'Yes'){echo 'checked';}} ?> required/></td>
<td><input type="radio" name="22" value="No" 
<?php if(ISSET($refvalue)){if($refvalue == 'No'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="22" value="Not Observed"  
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='23' ; include ('refvalue.php'); ?>">
<td>b.</td><td style="text-align:left;"> Loose morals  </td>
<td><input type="radio" name="23" value="Yes" 
<?php if(ISSET($refvalue)){if($refvalue == 'Yes'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="23" value="No" 
<?php if(ISSET($refvalue)){if($refvalue == 'No'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="23" value="Not Observed"  
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='24' ; include ('refvalue.php'); ?>">
<td>c.</td><td style="text-align:left;"> A lying problem   </td>
<td><input type="radio" name="24" value="Yes" 
<?php if(ISSET($refvalue)){if($refvalue == 'Yes'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="24" value="No" 
<?php if(ISSET($refvalue)){if($refvalue == 'No'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="24" value="Not Observed"  
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='25' ; include ('refvalue.php'); ?>">
<td>d.</td><td style="text-align:left;"> A stealing problem    </td>
<td><input type="radio" name="25" value="Yes" 
<?php if(ISSET($refvalue)){if($refvalue == 'Yes'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="25" value="No" 
<?php if(ISSET($refvalue)){if($refvalue == 'No'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="25" value="Not Observed"  
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='26' ; include ('refvalue.php'); ?>">
<td>e.</td><td style="text-align:left;"> A problem of laziness  </td>
<td><input type="radio" name="26" value="Yes" 
<?php if(ISSET($refvalue)){if($refvalue == 'Yes'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="26" value="No" 
<?php if(ISSET($refvalue)){if($refvalue == 'No'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="26" value="Not Observed"  
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='27' ; include ('refvalue.php'); ?>">
<td>f.</td><td style="text-align:left;"> A money problem  </td>
<td><input type="radio" name="27" value="Yes" 
<?php if(ISSET($refvalue)){if($refvalue == 'Yes'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="27" value="No" 
<?php if(ISSET($refvalue)){if($refvalue == 'No'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="27" value="Not Observed"  
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='28' ; include ('refvalue.php'); ?>">
<td>g.</td><td style="text-align:left;"> A problem of morality  </td>
<td><input type="radio" name="28" value="Yes" 
<?php if(ISSET($refvalue)){if($refvalue == 'Yes'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="28" value="No" 
<?php if(ISSET($refvalue)){if($refvalue == 'No'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="28" value="Not Observed"  
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='29' ; include ('refvalue.php'); ?>">
<td>h.</td><td style="text-align:left;"> A problem with obedience  </td>
<td><input type="radio" name="29" value="Yes" 
<?php if(ISSET($refvalue)){if($refvalue == 'Yes'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="29" value="No" 
<?php if(ISSET($refvalue)){if($refvalue == 'No'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="29" value="Not Observed"  
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='30' ; include ('refvalue.php'); ?>">
<td>i.</td><td style="text-align:left;"> Attending disco- night  </td>
<td><input type="radio" name="30" value="Yes" 
<?php if(ISSET($refvalue)){if($refvalue == 'Yes'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="30" value="No" 
<?php if(ISSET($refvalue)){if($refvalue == 'No'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="30" value="Not Observed"  
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

<tr>
<div id="<?php  $refvalue ='31' ; include ('refvalue.php'); ?>">
<td>j.</td><td style="text-align:left;"> A smoking problem </td>
<td><input type="radio" name="31" value="Yes" 
<?php if(ISSET($refvalue)){if($refvalue == 'Yes'){echo 'checked';}} ?> required /></td>
<td><input type="radio" name="31" value="No" 
<?php if(ISSET($refvalue)){if($refvalue == 'No'){echo 'checked';}} ?>/></td>
<td><input type="radio" name="31" value="Not Observed"  
<?php if(ISSET($refvalue)){if($refvalue == 'Not Observed'){echo 'checked';}} ?>/></td>
</div>
</tr>

</table>
</p>

<p>10. <input type="text" name="32" size="60" placeholder=" What is the applicant’s strongest characteristic ? " 
value="<?php  $refvalue ='32' ; include ('refvalue.php'); ?> "  required
/>
</p>

<p>11. <input type="text" name="33" size="60" placeholder="  What is the applicant’s weakest characteristic ? " 
value="<?php  $refvalue ='33' ; include ('refvalue.php'); ?>" required
/>
</p>

<p>12. <input type="text" name="34" size="60" placeholder=" Kindly comment on the applicant’s abilities for this level of study. " 
value="<?php  $refvalue ='34' ; include ('refvalue.php'); ?>" required
/>
</p>

<p id="<?php  $refvalue ="35" ; include ('refvalue.php'); ?>">
13. Has the applicant the intellectual ability, energy and perseverance necessary for this level of study? <font color="red">*</font>  
Yes<input type="radio" name="35" value="Yes"
 <?php if(ISSET($refvalue)){if($refvalue == 'Yes'){echo 'checked';}} ?> required />&emsp; 
No<input type="radio" name="35" value="No"
 <?php if(ISSET($refvalue)){if($refvalue == 'No'){echo 'checked';}} ?> />&emsp;
Not Sure<input type="radio" name="35" value="Not Sure"
 <?php if(ISSET($refvalue)){if($refvalue == 'Not Sure'){echo 'checked';}} ?>/> &emsp;
</p>

<p>14. <input type="text" name="36" size="60" placeholder="  How will this applicant be a benefit to the Church by this course of study ? " 
value="<?php  $refvalue ='36' ; include ('refvalue.php'); ?>" required
/>
</p>

<p  id="<?php  $refvalue ='37' ; include ('refvalue.php'); ?>">
15. In summary, how would you recommend the applicant for this programme ? &#40; Choose one of the following&#41;</br>
&emsp; I do not  recommend this applicant &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input type="radio" name="37" value="Do not" 
<?php if(ISSET($refvalue)){if($refvalue == 'Do not'){echo 'checked';}} ?> required /></br>
&emsp; I recommend this applicant with reservation &emsp;&nbsp;&nbsp; <input type="radio" name="37" value="Reservation" 
<?php if(ISSET($refvalue)){if($refvalue == 'Reservation'){echo 'checked';}} ?>/></br>
&emsp; I recommend this applicant &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&ensp; <input type="radio" name="37" value="Recommend"  
<?php if(ISSET($refvalue)){if($refvalue == 'Recommend'){echo 'checked';}} ?>/></br>
&emsp; I highly recommend this applicant &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; <input type="radio" name="37" value="Highly Recommend"  
<?php if(ISSET($refvalue)){if($refvalue == 'Highly Recommend'){echo 'checked';}} ?>/></br>
</p>


<p>16. Is there any other information that you feel necessary in our consideration of this applicant?</br>
<textarea cols="40" rows="7" name="38" placeholder="Is there any other information that you feel necessary in our consideration of this applicant?" required >
<?php  $refvalue ='38' ; include ('refvalue.php'); ?>
</textarea></p>



<p>
<fieldset>
<legend>Signature</legend>
17. Today the <?php echo date("d/m/Y") ; ?>, To the best of my knowledge, I comply that all the informations
given are corresponding to the applicant whose particulars appear above and I will be solely responsible 
for any false information given.</br>

<div style="width: 20%; margin:0 auto;">
<input type="checkbox" name="39" value="checked" required >
Signature
</div>
</fieldset>
</p>


<p><input type="submit" name="submit2" value="Submit" />
</form>

</fieldset>
<?php
if(ISSET($_POST['submit2'])){
	$totalquestion = 38 ;
	require ('refloop.php');
};

?>