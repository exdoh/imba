// Removes leading whitespaces
function LTrim( value ) {
	var re = /\s*((\S+\s*)*)/;
	return value.replace(re, "$1");	
}

// Removes ending whitespaces
function RTrim( value ) {
	var re = /((\s*\S+)*)\s*/;
	return value.replace(re, "$1");
}

// Removes leading and ending whitespaces
function trim( value ) {
	return LTrim(RTrim(value));
}


function chkNULL(form) {
  //alert(form.value);
  var str = form.value;
   var flag;

  if(trim(str)==""){
  form.value = ""; 
  form.focus();
  flag = true;
  }else { flag = false;}
  return flag;
}// JavaScript Document