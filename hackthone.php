<?php
$password = 'temporal101';
$loginName = 'bursar@etsk.sch';

if(isset($password)){
$password = $password.$loginName;
$p=$password;
$password = password_hash($password,PASSWORD_DEFAULT);
echo $password ;
}
?>