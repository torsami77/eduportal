<?php
include ('cert.php');
if(!ISSET($_SESSION)){SESSION_START();}
if(ISSET($_SESSION['teller'])){
$serial = $_SESSION['teller'] ;
$addnum = $_SESSION['addnum'];
$programme   = $_SESSION ['prog'];
$programme = $db->query("SELECT `programme` FROM `programmes` WHERE abb = '".$programme."'") or die (mysqli_error($db));
$prg = mysqli_fetch_array($programme);$programme = $prg['programme'];
$passportdir="passport/".$addnum.".jpg" ;

}else{header ("location: index.php");};
$started= $db->query("SELECT `datestarted` FROM `students` WHERE addnum='".$addnum."'");
$sta = mysqli_fetch_array($started);
if ($sta['datestarted'] != null){header('location: loggedout.php');}
?>
<html>
<head>
<title>Sign up</title>
<LINK REL="StyleSheet" HREF="css.css" TYPE="text/css" MEDIA="all"/>
<style>
</style>
</head>
<body>

<fieldset class="form">
<div style="float:right;">
<?php
echo "<p><input type='button' value='LOG-OUT' onclick='location.href=";
echo '"loggedout.php"';
echo "' />";
?>
</div>
</fieldset>

<fieldset class="form">
<legend>SIGN-UP</legend>
<form action="" method="POST" enctype="multipart/form-data" >
<div style="margin:0 10% 0 0; float:left;">

<?php
if(isset($_POST['pass'])){
	if(file_exists($passportdir)){unlink($passportdir);}
	$file= $_FILES['photo']['tmp_name'];
	$finfo = new finfo();
	$fileinfo = $finfo->file($file, FILEINFO_MIME_TYPE);
	if ($fileinfo == 'image/jpeg' || $fileinfo == 'image/jpg' || $fileinfo == 'image/png' || $fileinfo =='image/gif'){

$maxDimW = 150;
$maxDimH = 180;
list($width, $height, $type, $attr) = getimagesize( $_FILES['photo']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['photo']['tmp_name'];
    $fn = $_FILES['photo']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    if( $ratio > 1) {
        $width = $maxDimW;
        $height = $maxDimH/$ratio;
    } else {
        $width = $maxDimW*$ratio;
        $height = $maxDimH;
    }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $passportdir); // adjust format as needed
	header ("location: signup.php");

}else{$photo = '<font color="red">Image file too small</font>'; include('passport.php');};}else{
$photo = '<font color="red">Selected file is not an image</br>Please select an image file </font>'; include('passport.php');};}
else{
	if(file_exists($passportdir)){echo'<img src="'.$passportdir.'" />';
	echo '</br><font color="green">Passport uploaded successfully...</font>
	</br><input type="file" name="photo" required/></br>
	<input type="submit" name="pass" value="Change Passport"/>';}else{
	$photo = 'Upload a passport photograph'; include('passport.php');
}
}


?>
</div>
</form>
<fieldset>
<form action="" method="POST" enctype="multipart/form-data" >
<p><font color="red">All fields are required</font></p>

<p><strong>PROGRAMME OF STUDY: </strong> <?php echo $programme ; ?> </p>
<p><font color="blue">Make sure you enter a functional email</font><font color="red">*</font></br>
<input type="email" value="<?php if(ISSET($_POST['submit'])){ echo $db->real_escape_string(strip_tags($_POST['email'])) ;} ?>" name="email" placeholder="Your Email*" /><font color="red">*</font></p>
<p><input type="email" value="<?php if(ISSET($_POST['submit'])){ echo $db->real_escape_string(strip_tags($_POST['cemail'])) ;} ?>" name="cemail" placeholder="Confirm Email*" /><font color="red">*</font></p>
<p><input type="number" value="<?php if(ISSET($_POST['submit'])){ echo $db->real_escape_string(strip_tags($_POST['mobile'])) ;} ?>" name="mobile" placeholder="Mobile Phone Number*" /><font color="red">*</font></p>
<p><font color="blue"> Password must be at least eight characters</font><font color="red">*</font></p>
<p><input pattern=".{8,}" type="password" value="<?php if(ISSET($_POST['submit'])){ echo $db->real_escape_string(strip_tags($_POST['pword'])) ;} ?>" name="pword" placeholder="Create Password*" /><font color="red">*</font></p>
<p><input pattern=".{8,}" type="password" value="<?php if(ISSET($_POST['submit'])){ echo $db->real_escape_string(strip_tags($_POST['vpword'])) ;} ?>" name="vpword" placeholder="Verify Password*" /><font color="red">*</font></p>
<br/>
<p style="color:red; text-align:center;">Tick this box to indicate that you agree to be solely responsible for email and password compromise,
	as password reset email will be sent to the email given above in situations such as password recovery..
</br>
<input type="checkbox" name="checked" required>
</p>
<br/>
<input type="submit" value="Sign up" name="submit"/>
</form>


<?php
if (isset($_POST["submit"]))
{

$mobile=$db->real_escape_string(strip_tags($_POST['mobile']));
$email=$db->real_escape_string(strip_tags($_POST['email']));
$cemail=$db->real_escape_string(strip_tags($_POST['cemail']));
$pword=$db->real_escape_string(strip_tags($_POST['pword']));
$vpword=$db->real_escape_string(strip_tags($_POST['vpword']));

if (!isset($_POST['checked']))
{die ('<font color="red">Please check the signature box to indicate your adherance to email</font>');}

if($cemail != $email){die('<font color="red">Email address do not match...</font>');}


if(!file_exists($passportdir)){die ('<font color="red">Upload a passport photograph!!</font>');};

if(!ISSET($email)){die ('<font color="red">Please all * fields are required!! </font>'); }
else{if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
{die ('<font color="red">Enter a valid email!!</font>');}else{
$loginName = $db->real_escape_string(strip_tags($_POST['email']))
or die ('<font color="red">Site under update, please try again later...</font>');
$checker = $db->query("SELECT * FROM `students` where `email`='$loginName'");
if($checker->num_rows){
die ( '<font color="red">The Email is already associated with another student,</br> use a different Email!!</font>') ;};};};

if(!ISSET($mobile)){die ('<font color="red">Please all * fields are required!! </font>') ;}
else{
$mobile = $db->real_escape_string(strip_tags($_POST['mobile'])) ;};
if(!ISSET($pword)){die ('<font color="red">Please all * fields are required!! </font>') ;}else{$password = $db->real_escape_string(strip_tags($_POST['pword'])) or die ('<font color="red">Site under update, please try again later...</font>');
if(!ISSET($vpword)){die ('<font color="red">Please all * fields are required!! </font>') ;}else{
if (ISSET($pword) !== ISSET($vpword)){die ('<font color="red">Password does not match!!</font>');}
if (!include 'sq.php'){die ('<font color="red">Site under update, please try again later1...</font>');}

if($insert = $db->query("
UPDATE `security` SET `signed-up`='1' WHERE `addnum`='$addnum'")){
if($insert = $db->query("
UPDATE `students` SET `email`='$loginName', `password`='$password', `pnumber`='$mobile',
`datestarted`=NOW() WHERE `addnum`='$addnum'"))
{$email = $loginName ;
	require('cmail.php');
	require ('email.php');
if ($mail == true){
	SESSION_DESTROY();
header ("location: confirmmail.php");
}else{die('<font color="red">Site under update, please try again later...</font>');}
};
};};
};
};
?>

</fieldset>
</fieldset>
</body>
</html>
