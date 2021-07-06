<?php
if(isset($pin)){
$pin = $pin.$serial;
$pin = password_hash($pin,PASSWORD_DEFAULT);
}
if(isset($password)){
  if(isset($passcode)){
  $passcode = $passcode.$email;
  $passcode = password_hash($passcode,PASSWORD_DEFAULT);
}else{
$password = $password.$loginName;
$p=$password;
$password = password_hash($password,PASSWORD_DEFAULT);
}}

?>
