<?php
if (!isset($_COOKIE["python_web_student_number"])) {
   echo "<script>  window.location.href = '../../index.html'; </script>";
}
$student_number=$_COOKIE["python_web_student_number"];
?>
<!DOCTYPE HTML>
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
  <script src="../js/util.js"></script>
  <script src="../js/mainpage.js"></script>
</head>
<body>
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">  
      <a id="homepage_id" class="navbar-brand" href="#" onclick="MenuIsClicked(this)">HomePage</a>
      <a id="homework_id"class="navbar-brand" href="#" onclick="MenuIsClicked(this)">HomeWork</a>
      <a id="project_id" class="navbar-brand" href="#" onclick="MenuIsClicked(this)">Project</a>
      <a id="software_id" class="navbar-brand" href="#" onclick="MenuIsClicked(this)">SoftWare</a>
      <a id="book_id" class="navbar-brand" href="#" onclick="MenuIsClicked(this)">Book</a>
      <a id="contact_id" class="navbar-brand" href="#" onclick="MenuIsClicked(this)">Contact</a>
      <a class="navbar-brand" href="#" style="float:right">Student Number: <?php echo $student_number ?></a>
  </div>

  <div class="container" id="image_head_page" style="margin-top:60px;width:900px;padding-top:15px;padding-bottom:15px;background-color:#E0E0FF">
      <img style="height:200px" src="../../picture/jiaoda.png"/>
      <img style="height:170px;width:170px;margin-left:40px" src="../../picture/pylabel.png"/>
  </div>

  <div class="container" id="homepage_news_page" style="width:900px;margin-top:10px;padding:0px;">
      <h1>News</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Content</th>
            <th>Publisher</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Website setup over</td>
            <td>Me</td>
            <td>2014-9-25</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Nothing</td>
            <td>Me</td>
            <td>2014-9-25</td>
          </tr>
        </tbody>
      </table>
  </div>    
  
  <div id="homework_page" style="display:none">
    <div id="homework_list" class="list-group" style="float:left;margin-left:5px;margin-top:100px;width:200px">
      <a id="homework1_id" onclick="SelectHomeWorkWeekNumber(this.id)" href="#" class="list-group-item homework_list_item">Homework 1 (Not Satrted)</a>
      <a id="homework2_id" onclick="SelectHomeWorkWeekNumber(this.id)" href="#" class="list-group-item homework_list_item">Homework 2</a>
      <a id="homework3_id" onclick="SelectHomeWorkWeekNumber(this.id)" href="#" class="list-group-item homework_list_item">Homework 3</a>
      <a id="homework4_id" onclick="SelectHomeWorkWeekNumber(this.id)" href="#" class="list-group-item homework_list_item">Homework 4</a>
    </div>
    <div style="float:left;margin-left:100px;margin-top:100px;width:800px">
      <div>
        <table id="homework_body_page" class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Problem Number</th>
              <th>Publisher</th>
              <th>Deadline</>
            </tr>
          </thead>
          <tbody id="homework1_page">
            <tr>
              <td>1</td>
              <td>Ex 1.1, Ex1.7</td>
              <td>Xinjian Zhang</td>
              <td>2014-9-25</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Ex 1.5, Ex1.7</td>
              <td>Xinjian Zhang</td>
              <td>2014-9-25</td>
            </tr>
          </tbody>
          <tbody id="homework2_page" style="display:none">
            <tr>
              <td>1</td>
              <td>Ex 2.1,Ex2.3</td>
              <td>Xinjian Zhang</td>
              <td>2014-9-25</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Ex2.8, Ex2.9</td>
              <td>Xinjian Zhang</td>
              <td>2014-9-25</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div  style="margin-top:50px;padding:50px">
        <form name="upload_homework_form" id="upload_homework_form" method="post" action="upload_file.php" enctype="multipart/form-data" style="display:inline;">
          <input id="upload_homework_file" name="upload_homework_file" type="file" style="width:400px;display:inline;height:38px;">
          <input id="upload_homework_id" name="upload_homework_id" style="display:none">
        </form>
        <button onclick="UploadFile(this.id)" id="upload_homework_btn" class="btn btn-primary" style="margin-left:10px">Upload File</button>
      </div>
	  <div style="margin-top:30px;padding-left:100px;padding-right:100px">
        <button id="download_my_homework" onclick="DownLoadHomeWork(this.id)" class="btn btn-primary" style="margin-left:20px">Download My Homework</button>
        <button id="download_standard_homework" onclick="DownLoadHomeWork(this.id)" class="btn btn-primary" style="margin-left:20px">Download Standard Result</button>
	  </div>
    </div>
  </div>
  
  <div class="container" id="book_page" style="width:900px;margin-top:10px;padding:0px;display:none">
    <div class="container" style="width:900px;margin-top:20px;padding:0px">
      <table class="table table-striped">
        <tbody>
          <tr>
            <td style="width:120px"><img style="width:100px;height:120px" src="../../picture/python_hexin.png"/></td>
            <td>Python核心教程</td>
            <td>Xinjian Zhang</td>
            <td>2014-9-25</td>
            <td><button id="download_1" onclick="DownLoadBook(this)" type="button" class="btn btn-success">Download</button></td>
          </tr>
          <tr>
            <td style="width:120px"><img style="width:100px;height:120px" src="../../picture/sprit_of_computing.png"/></td>
            <td>Algorithmics - The sprit of computing</td>
            <td>Xinjian Zhang</td>
            <td>2014-9-25</td>
            <td><button id="download_2" onclick="DownLoadBook(this)" type="button" class="btn btn-success">Download</button></td>
          </tr>
        </tbody>
      </table>
    </div>    
  </div>

  <div class="container" id="contact_page" style="display:none;width:900px;margin-top:10px;padding:0px">
    <div class="container" style="width:900px;margin-top:20px;padding:0px">
      <table class="table table-striped">
        <thead>
          <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Address</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>阮娜</td>
            <td>naruan@cs.sjtu.edu.cn</td>
            <td>15021561683</td>
            <td>电信群楼3号楼527</td>
          </tr>
          <tr>
            <td>张新建</td>
            <td>zhangxinjian1015@gmail.com</td>
            <td>15800917568</td>
            <td>电信群楼3号楼东侧</td>
          </tr>
        </tbody>
      </table>
    </div>    
  </div>
  
</body>
</html>
