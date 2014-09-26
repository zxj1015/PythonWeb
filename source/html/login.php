<?php
$login_user_id=$_POST["login_user_no"];
$login_user_pwd=$_POST["login_user_pwd"];
$file = fopen('../../information/userinfo.txt', 'r') or exit("Unable to open file!");
$valid_user=false;
while (!feof($file)) 
{ 
  $line=fgets($file, 1024);
  list($user_id, $name, $pwd, $email, $phone, $power) =  split ("\t", $line);
  if ($login_user_id == $user_id and $login_user_pwd == $pwd) {
	$valid_user=true;
	break;
  }
}
fclose($file);
if($valid_user == true) {
  setcookie("python_web_student_number",$login_user_id, time()+3600);
  echo "<script>location.href='mainpage.php';</script>";
} else {
  echo "<script>location.href='../../index.html';</script>";
}
?>
