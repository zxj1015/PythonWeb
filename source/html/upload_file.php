<?php
if (!isset($_COOKIE["python_web_student_number"])) {
   echo "<script>  window.location.href = '../../index.html'; </script>";
}
$student_number=$_COOKIE["python_web_student_number"];
$result_string="";

$filename="upload_homework_file";
$homework_id=$_POST["upload_homework_id"];

if ($_FILES[$filename]["error"] > 0) {
  $result_string="Error: " . $_FILES[$filename]["error"] . "<br />";
}
else if($_FILES[$filename]["size"] / 1024 / 1024 > 10) {
  $result_string="Error: ".$_FILES[$filename]." too big";
} else {
  if (!file_exists("../../homework/".$homework_id)) {
    $result_string="Error: "."<br/>This homework is not published";
  } else {
	$result_string="Error: :"."Copy to folder failed";
    move_uploaded_file($_FILES[$filename]["tmp_name"], "../../homework/".$homework_id."/".$_FILES[$filename]["name"]);
    $result_string="Succeed Upload File";
  }
}

?>
<html>
<title>
Python Website <?php echo $student_number ?>
</title>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/mainpage.css">
  <link rel="stylesheet" href="../../software/bootstrap-3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../software/bootstrap-3.2.0/css/bootstrap-theme.min.css">
  
  <script src="../../software/jquery-ui-1.10.4/js/jquery-1.10.2.js"></script>
  <script src="../js/mainpage.js"></script>
</head>
<body>
  <script>
    function goto_mainpage() {
      window.location.href = 'mainpage.php';
    }
  </script>
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">  
      <a id="homepage_id" class="navbar-brand" href="#" onclick="goto_mainpage()">HomePage</a>
      <a id="homework_id"class="navbar-brand" href="#" onclick="goto_mainpage()">HomeWork</a>
      <a id="project_id" class="navbar-brand" href="#" onclick="goto_mainpage()">Project</a>
      <a id="software_id" class="navbar-brand" href="#" onclick="goto_mainpage()">SoftWare</a>
      <a id="book_id" class="navbar-brand" href="#" onclick="goto_mainpage()">Book</a>
      <a id="contact_id" class="navbar-brand" href="#" onclick="goto_mainpage()">Contact</a>
      <a class="navbar-brand" href="#" style="float:right">Student Number: <?php echo $student_number; ?></a>
  </div>
  <div class="container" style="margin-top:100px;width:900px;padding-top:15px;padding-bottom:15px;padding-left:100px;padding-right:100px;text-align:center">
      <table class="table table-striped" style="">
        <thead>
          <tr>
            <th>#</th>
            <th>Information</th>
            <th>Student Number</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>FileName</td>
            <td><?php echo $_FILES[$filename]["name"]; ?></td>
            <td><?php echo $student_number; ?></td>
            <td>
              <?php
                date_default_timezone_set("Asia/Shanghai");
                echo date("Y-m-d"); 
              ?>
            </td>
          </tr>
          <tr>
            <td>FileType</td>
            <td><?php echo $_FILES[$filename]["type"]; ?></td>
          </tr>
          <tr>
            <td>FileSize</td>
            <td><?php echo sprintf("%.2f",$_FILES[$filename]["size"] / 1024)." KB"; ?></td>
          </tr>
        </tbody>
      </table>
      <h2 style="text-align:center;margin-top:40px"><?php echo $result_string; ?></h2>
      <button class="btn btn-lg btn-primary" onclick="goto_mainpage()" style="margin-top:20px"> 点击继续</button>
   <div>
</body>
</html>