$(document).ready(function(){

});

function MenuIsClicked(obj) {
  id = obj.id
  if (id == "homepage_id") {
      alert("homepage_id is wrong");
  } else if (id == "homework_id") {
      alert("homework_id is wrong");
  } else if (id == "project_id") {
      alert("project_id is wrong");
  } else if (id == "software_id") {
      alert("software_id is wrong");
  } else if (id == "book_id") {
      alert("book_id is wrong");
  } else if (id == "contact_id") {
      alert("concat_id is wrong");
  } else {
    alert("something is wrong");
  }
}