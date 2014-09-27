<?php
public function downloads($name){
  $name_tmp = explode("_",$name);
  $type = $name_tmp[0];
  $file_time = explode(".",$name_tmp[3]);
  $file_time = $file_time[0];
  $file_date = date("Y-m-d",$file_time);
        $file_dir = SITE_PATH."/data/uploads/$type/$file_date/";    
         
        if (!file_exists($file_dir.$name)){
            header("Content-type: text/html; charset=utf-8");
            echo "File not found!";
            exit; 
        } else {
            $file = fopen($file_dir.$name,"r"); 
            Header("Content-type: application/octet-stream");
            Header("Accept-Ranges: bytes");
            Header("Accept-Length: ".filesize($file_dir . $name));
            Header("Content-Disposition: attachment; filename=".$name);
            echo fread($file, filesize($file_dir.$name));
            fclose($file);
        }
    }

?>
