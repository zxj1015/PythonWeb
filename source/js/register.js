function CheckRegisterInfo() {
  user_id=$("#user_id").val();
  user_name=$("#user_name").val();
  user_pwd=$("#user_pwd").val();
  user_pwd2=$("#user_pwd2").val()
  user_mail=$("#user_mail").val();
  user_phone=$("#user_phone").val();
  if (isNull(user_id) || isNull(user_name) || isNull(user_pwd) || isNull(user_pwd2) || isNull(user_mail) || isNull(user_phone)) {
    return false;
  }
  if (!checkStudentNumber(user_id)) {
	alert("student number is not right");
	return false;
  }
  if (!checkName(user_name)) {
    alert("User Name is not right");
    return false;
  }
  if (!checkPassward(user_pwd)) {
    alert("Password format is not right, can't contain empty words and must be less than 50");
    return false;
  }
  if (!checkEmail(user_mail)) {
    alert("Email format is not right");
    return false;
  }
  if (!checkMobile(user_phone)) {
    alert("Phone number is not right");
    return false;
  }
  if (user_pwd != user_pwd2) {
    alert("两次输入密码不相同");
    return false;
  }
  return true;
}
function submit_register_info()
{
  if(CheckRegisterInfo()) {
    document.getElementById("register_form").submit();
  }
}
