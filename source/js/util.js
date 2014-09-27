// get cookies given the cookie name.
function getCookie(name) { 
  var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
  if(arr=document.cookie.match(reg)) {
    return unescape(arr[2]); 
  } else { 
    return null;
  } 
} 

// get filename given path.
function getFilename(path) {
  separator="/";
  if(path.indexOf("/")>0) {
    separator="/";
  }
  if(path.indexOf("\\")>0) {
    separator="\\";
  }
  path_toks=path.split(separator);
  return path_toks[path_toks.length-1];
}
// get the folder given path.
function getFoldername(path) {
  separator="/";
  if(path.indexOf("/")>0) {
    separator="/";
  }
  if(path.indexOf("\\")>0) {
    separator="\\";
  }
  path_toks=path.split(separator);
  path_toks.pop();
  return path_toks.join(separator);
}

function getSuffix(path) {
  path_toks=path.split(".");
  suffix=path_toks[path_toks.length-1];
  return suffix;
}

function getBasename(path) {
  filename=getFilename(path);
  path_toks=filename.split(".");
  path_toks.pop();
  return path_toks.join(".");
}