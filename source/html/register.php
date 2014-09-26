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
  $file = fopen('../../information/userinfo.txt', 'a') or exit("Unable to open file!");
  fputs($file, $new_user_info);
  fclose($file);
}
?>

<html>
<title>
Python Website
</title>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../software/bootstrap-3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../software/bootstrap-3.2.0/css/bootstrap-theme.min.css">
  
  <script src="../../software/jquery-ui-1.10.4/js/jquery-1.10.2.js"></script>
  <script src="../../source/js/checkdata.js"></script>
  <script src="../../source/js/register.js"></script>
</head>
<body>
  <div class="navbar navbar-fixed-top" style="background-color:#444;height:60px;" role="navigation">  
      <a class="navbar-brand" style="color:#FFFFFF;font-size:30px;padding-top:20px;margin-left:30px;font:3px/1.4 Helvetica, arial, freesans, clean, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol">
         Python Web
      </a>
  </div>

  <div style="width:100%;height:550px;background-image:url(../../picture/muzhipin.png);">
    <div style="padding-top:100px;width:700px;margin-left:100px;float:left;color:#FFFFFF;">
		<h1 style="font-size:70px"> Learn python</h1>
		<h1 style="font-size:70px"> better, together.</h1>
		<h1 style="font-size:21px;margin-top:50px">
		  News publication, homework and project hand in, books and software sharing, our concat information 
		  and many other useful information.
		</h1>
    </div>
    <div style="padding-top:80px;width:400px;float:right">
      <?php
       if ($has_registered_user == false) {
         echo '<image src="../../picture/welcome.png" style="width:250px;height:270px;box-shadow: 0px 0px 7px 5px;margin-left:5px">';
         echo '<h4 style="width:250px;color:#FFFFFF;padding-top:15px">注册成功，转到登陆界面。</h4>';
         echo '<button class="btn btn-primary" onclick="goto_login()" style="margin-top:20px;width:280px;height:35px">去登陆</button>';
       } else {
         echo '<image src="../../picture/leiben.png" style="width:250px;height:270px;box-shadow: 0px 0px 7px 5px;margin-left:5px; border-radius:7px">';
         echo '<h4 style="width:250px;color:#FFFFFF;padding-top:15px">注册失败，需要重新注册。</h4>';
         echo '<button class="btn btn-danger" onclick="goto_register()" style="margin-top:20px;width:280px;height:35px">重新注册</button>';
       }
      ?>
      <script>
        function goto_login() {
          window.location.href = '../../index.html';
        }
        function goto_register() {
          window.location.href = 'register.html';
        }
      </script>
    </div>
  </div>
  
  <div style="margin-top:20px;text-align:center">
    <h1>Welcome everyone to here!</h1>
  </div>  

<body>
</html>