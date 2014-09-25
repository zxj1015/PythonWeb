$(document).ready(function(){

});

function DownLoadFile(fileName){
   window.open(fileName);
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
  id=id.split("_")[0];
  id=id+"_page";
  $("#"+id).css("display","");
}

function DownLoadBook(obj) {
  id = obj.id;
  DownLoadFile("../../book/python_hexin.pdf");
}

function DownLoadHomeWork() {
  alert("Not Finished");
}


