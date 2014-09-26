// check if the login data is valied.
function CheckLoginData() {
  user_no=$("#login_user_no").val();
  user_pwd=$("#login_user_pwd").val();
  if(isNull(user_no) || isNull(user_pwd)) {
    alert("Student number and password can't be null");
    return false;
  }
  if(!checkStudentNumber(user_no)) {
    alert("Student number format is not right");
    return false; 
  }
  if(!checkPassward(user_pwd)) {
    alert("Password format is not right! Can't contain empty words and must be less than 50");
    return false;
  }
  return true;
}

// submit login information to server when 
// submit button is clicked.
function submit_login_info() {
  if(CheckLoginData()) {
    document.getElementById("login_form").submit();
  }
}

// goto register page if register button is clicked.
function submit_register_info() {
  window.location.href = 'source/html/register.html';
}
