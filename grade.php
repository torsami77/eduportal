<?php
if(ISSET($_POST['grade'.$stu])){
$value = $db->real_escape_string(strip_tags($_POST['grade'.$stu]));
echo $value ;
}
?>