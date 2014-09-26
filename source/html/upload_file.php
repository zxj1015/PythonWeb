<?php
echo $_COOKIE["python_web_student_number"];

$filename="upload_homework_file";
$homework_id=$_POST["upload_homework_id"];
if ($_FILES[$filename]["error"] > 0) {
  echo "Error: " . $_FILES[$filename]["error"] . "<br />";
}
else if($_FILES[$filename]["size"] / 1024 / 1024 > 10) {
  echo $_FILES[$filename]." too big";
} else {
  echo "Upload: " . $_FILES[$filename]["name"] . "<br />";
  echo "Type: " . $_FILES[$filename]["type"] . "<br />";
  echo "Size: " . ($_FILES[$filename]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES[$filename]["tmp_name"];
  if (!file_exists("../../homework/".$homework_id)) {
    echo "<br/>This homework is not published";
  } else {
    move_uploaded_file($_FILES[$filename]["tmp_name"], "../../homework/".$homework_id."/".$_FILES[$filename]["name"]);
  }
}
?>