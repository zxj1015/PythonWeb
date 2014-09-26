function isNull(str) { 
  if (str == "") {
    return true;
  } 
  var regu = "^[ ]+$"; 
  var re = new RegExp(regu); 
  return re.test(str); 
}

function checkMobile(s){   
  var regu =/^[1][0-9][0-9]{9}$/; 
  var re = new RegExp(regu); 
  if (re.test(s)) { 
    return true; 
  } else { 
    return false; 
  } 
} 

function checkStudentNumber(s) {
  if (s.length != 10) {
  	return false;
  }   
  var regu = "^[0-9]+$"; 
  var re = new RegExp(regu); 
  if (s.search(re) != -1) { 
    return true; 
  } else { 
    return false; 
  } 
} 

function checkEmail(strEmail) { 
  var emailReg = /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/; 
  if( emailReg.test(strEmail) ){ 
    return true; 
  } else { 
    return false; 
  } 
} 

function checkName(s) {
  var regu = "^[0-9a-zA-Z\u4e00-\u9fa5]+$";   
  var re = new RegExp(regu); 
  if (re.test(s)) { 
    return true; 
  } else { 
    return false; 
  } 
}

function checkPassward(str) {
  if (str.indexOf(' ')>=0) {
    return false;
  }
  if (str.indexOf('\t')>=0) {
    return false;
  }
  if (str.indexOf('\n')>=0) {
    return false;
  }
  if (str.length > 50) {
    return false;
  }
  return true;
}