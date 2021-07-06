<?php
include('cert.php');
?>

<html>
<head>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<title>Password recovery: Edu-Portal</title>
</head>
<body>

<div style="width:30%; float: right; text-align: center;" >
  <div class="vl"></div>
  <fieldset>
  <p style="color:red;">A password reset email will be sent to your email box</p>
  <legend>Recover password</legend>
  <form action="" method="POST">
  <p><input type="text" name="addnum" placeholder="Student's ID" required/></p>
  <p><input type="email" name="email" placeholder="Enter your Email" required/></p>
  <p><input type="submit" name="submit" value="Reset my password and send link to my email" /></p>
  </form>

<?php
if(ISSET($_POST['submit'])){
  if(empty($_POST['email']) || empty($_POST['addnum']))
  {
    die('<font color="red">Please enter email !!</font>');
  }else{
    $addnum = $db->real_escape_string(strip_tags($_POST['addnum']));
    $loginName = $db->real_escape_string(strip_tags($_POST['email']));
    $pepper= mt_rand (10000000, 99999999);
    $password = $pepper;
    $result = $db->query("SELECT * FROM `students` WHERE `email`='$loginName' AND `addnum`='$addnum'") ;
  if($result->num_rows){
    $row = $result->fetch_array(MYSQLI_BOTH);
    $firstname=$row['first'];

    include ('sq.php');
    $db->query("UPDATE students SET password='$password' WHERE email='$loginName' AND `addnum`='$addnum'");

    $email = $loginName;
    $office = 'No reply';
  	$subject = 'Set your Password';
  	$message = '<p>Hi '.$firstname.'</p>,</br>
  	You receive this message because password reset is being requested for your account on the '.$institution.'
  	portal. To create your new password; click on <a href="www.'.$institution.'.sch.ng/schangepassword.php"> SET PASSWORD </a>, provide '.$pepper.' as your old password and set your password</br>
  	<p>Thank you</br>Webmaster<br/>'.$institution.'</p>';
  	include ('email.php');
  	if($mail==true){
  		die("<font color='green'>Lecturer added and password link sent to lecturer's email</font>");
  		}else{
  	die('<font color="red">Lecturer not added, please try again...</font>');
  	}


    echo '
    <font color="green">Password reset successfully, proceed to your email to access reset link...</font>';



    }else{
    die('<font color="red">Invalid Email or Current Password!!</font>');

    }
  }

}



?>





  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  </fieldset>

</div>

</body>
</html>
