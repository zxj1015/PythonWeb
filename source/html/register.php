<?php
$reg_user_id=$_POST["user_id"];
$reg_user_name=$_POST["user_name"];
$reg_user_pwd=$_POST["user_pwd"];
$reg_user_mail=$_POST["user_mail"];
$reg_user_phone=$_POST["user_phone"];

$file = fopen('../../information/userinfo.txt', 'r') or exit("Unable to open file!");
$has_registered_user=false;

while (!feof($file)) 
{ 
  $line=fgets($file, 1024);
  list($user_id, $name, $pwd, $email, $phone, $power) =  split ("\t", $line);
  if ($reg_user_id == $user_id) {
	$has_registered_user=true;
	break;
  }
}
fclose($file);
if($has_registered_user == false){
  $new_user_info="\n".$reg_user_id."\t".$reg_user_name."\t".$reg_user_pwd."\t".$reg_user_mail."\t".$reg_user_phone."\t"."1";
  echo $new_user_info;
  $file = fopen('../../information/userinfo.txt', 'a') or exit("Unable to open file!");
  fputs($file, $new_user_info);
  fclose($file);
}
?>
<html>
hello world
</html>