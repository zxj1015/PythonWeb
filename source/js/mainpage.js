$(document).ready(function(){
	SelectHomeWorkWeekNumber("homework1_id");
});

function DownLoadFile(fileName){
   window.open(fileName);
}

function UploadFile(id) {
  if (id=="upload_homework_btn") {
    // get the work id to upload.
    homework_id="";
    obj_list=$(".homework_list_item");
    for (i=0;i<obj_list.length;++i) {
    	if(obj_list[i].style.background!="rgb(255, 255, 255)") {
    	  homework_id=obj_list[i].id.split("_")[0];
    	  break;
    	}
    }
    if (homework_id=="") {
      alert("This homework is not started");
      return ;
    }
    filename=$("#upload_homework_file").val();
    if(filename=="") {
      alert("Please select a file to upload");
      return ;
    }
    suffix=getSuffix(filename);
    basename=getBasename(filename);
    if (suffix!="zip") {
      alert("Upsupported file type. Only .zip file can be uploaded");
      return;
    }
    student_no=getCookie("python_web_student_number");
    if(basename!=student_no) {
      alert("请把文件重命名为: "+student_no+"."+suffix);
      return ;
    }
    $("#upload_homework_id").val(homework_id);
    document.getElementById("upload_homework_form").submit();
  }
}

function MenuIsClicked(obj) {
  id = obj.id
  $("#image_head_page").css("display","none");
  $("#homepage_news_page").css("display","none");
  $("#homework_page").css("display","none");
  $("#book_page").css("display","none");
  $("#contact_page").css("display","none");
  if (id == "homepage_id") {
    $("#image_head_page").css("display","");
    $("#homepage_news_page").css("display","");	
  } else if (id == "homework_id") {
    $("#homework_page").css("display","");
  } else if (id == "project_id") {
  
  } else if (id == "software_id") {

  } else if (id == "book_id") {
    $("#image_head_page").css("display","");
    $("#book_page").css("display","");
  } else if (id == "contact_id") {
    $("#image_head_page").css("display",""); 
    $("#contact_page").css("display","");
  } else {
    alert("something is wrong");
  }
}
// select homework date. 
function SelectHomeWorkWeekNumber(id) {
  $("#homework_body_page tbody").css("display","none");
  $("#homework_list a").css("background-color","#fff");
  $("#"+id).css("background-color","#CCCCFF");
  id=id.split("_")[0];
  id=id+"_page";
  $("#"+id).css("display","");
}

function DownLoadBook(obj) {
  id = obj.id;
  DownLoadFile("../../book/python_hexin.pdf");
}

function DownLoadHomeWork(id) {

  homework_id="";
  obj_list=$(".homework_list_item");
  for (i=0;i<obj_list.length;++i) {
    	if(obj_list[i].style.background!="rgb(255, 255, 255)") {
    	  homework_id=obj_list[i].id.split("_")[0];
    	  break;
    	}
  }
  if (homework_id=="") {
      alert("This homework is not started");
      return ;
  }
  student_no=getCookie("python_web_student_number");
  //alert('../../homework/'+homework_id+"/"+student_no+".zip");
  if (id=="download_my_homework") {
    window.location.href = '../../homework/'+homework_id+"/"+student_no+".zip";
  }
  if (id=="download_standard_homework") {
    window.location.href = '../../homework/'+homework_id+"/"+"standard_result.zip";
  }
}


