<?php

include ('certs.php');
$page = 'dean';
include ('manage.php');
?>
<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Office of the Academic Dean</title>
</head>
<body>
<div class="form" style="margin:auto auto; width:900px;">
<?php
include('links.php');
?>
</div></br>

<div class="form" style="margin:auto auto; width:900px;">
<fieldset>
  <legend>Disapprove or Reapprove a course for registration</legend>

  <form action="" method="POST">
  <p>Pick a Course <select name="id" required>
  <option value="">Pick a Course</option>
  <?php

  $result = $db->query("SELECT * FROM courses") or die ('<font color="red">Problem connecting to server, try again later!!</font>');
  if($result->num_rows){
  	$recs = $result->fetch_all(MYSQLI_ASSOC);
  	foreach($recs as $rec){

  echo "<option value=".$rec['id'].">". $rec['code']. ", ".$rec['title']."</option>";

  };};
  ?>
  </select></p>
  <p><input type="submit" name="disapprove" value="Disapprove" /> <input type="submit" name="reapprove" value="Reapprove" /></p>
<?php
if(isset($_POST['disapprove'])){
$id = $db->real_escape_string(strip_tags($_POST['id']));
if($update = $db->query("
UPDATE `courses` SET `disapproved` = 'disapproved' WHERE `id` = '$id'"))
echo '<font color="yellow">Disapproval Completed!! </font>';
}
if(isset($_POST['reapprove'])){
$id = $db->real_escape_string(strip_tags($_POST['id']));
if($update = $db->query("
UPDATE `courses` SET `disapproved` = 'reapproved' WHERE `id` = '$id'"))
echo '<font color="green">Reapproval Completed!! </font>';
}
?>
</fieldset>
</br>
<p><input type='button' value='<- BACK TO HOME PAGE' onclick='location.href="dean.php"' /></p>
</div>
