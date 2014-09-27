<?php
$login_user_id=$_POST["login_user_no"];
$login_user_pwd=$_POST["login_user_pwd"];
$file = fopen('../../information/userinfo.txt', 'r') or exit("Unable to open file!");
flock($file, LOCK_SH) or die("lock error");
$valid_user=false;
$has_this_id=false;
$login_info="";
while (!feof($file)) 
{ 
  $line=fgets($file, 1024);
  list($user_id, $name, $pwd, $email, $phone, $power) =  split ("\t", $line);
  if ($login_user_id == $user_id) {
    $has_this_id=true;
    if ($login_user_pwd == $pwd) {
	  $valid_user=true;
	  break;
	}
  }
}
flock($file, LOCK_UN);
fclose($file);
if($valid_user == true) {
  setcookie("python_web_student_number",$login_user_id, time()+3600);
  echo "<script>location.href='mainpage.php';</script>";
} else {
  if ($has_this_id == true) {
    $login_info="用户名存在，密码错误。";
  } else {
    $login_info="用户名不存在。";
  }
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
         echo '<image src="../../picture/leiben.png" style="width:250px;height:270px;box-shadow: 0px 0px 7px 5px;margin-left:5px; border-radius:7px">';
         echo '<h4 style="width:250px;color:#FFFFFF;padding-top:15px">'.$login_info.'</h4>';
         echo '<button class="btn btn-danger" onclick="goto_login()" style="margin-top:20px;width:280px;height:35px">重新登陆</button>';
      ?>
      <script>
        function goto_login() {
          window.location.href = '../../index.html';
        }
      </script>
    </div>
  </div>
  
  <div style="margin-top:20px;text-align:center">
    <h1>Welcome everyone to here!</h1>
  </div>  

<body>
</html>
