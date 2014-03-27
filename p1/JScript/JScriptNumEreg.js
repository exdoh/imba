function numEreg(form) {
  //alert(form.value);
  var str = form.value;
   // var reg1 = /(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/; // not valid
   // var reg2 = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/; // valid
  var reg2 = /^[1-9][0-9]*$/;
  if(str!=""){
  if (reg2.test(str)) { //valid
    
    return true;
  } else {
//  form.value = str; 
  form.value = ""; 
  alert("Data must be an integer");
  form.focus();
  return false;
  }
  }
}

function numEreg0(form) {
  //alert(form.value);
  var str = form.value;
   // var reg1 = /(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/; // not valid
   // var reg2 = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/; // valid
  var reg2 = /^[0-9][0-9]*$/;
  if(str!=""){
  if (reg2.test(str)) { //valid
    
    return true;
  } else {
  //form.value = str; 
 // form.value = ""; 
  alert("Data must be number");
  form.focus();
  return false;
  }
  }
}