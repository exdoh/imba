var isNN = (navigator.appName.indexOf("Netscape")!=-1);
  
function autoTab(input,len, e) {
  var keyCode = (isNN) ? e.which : e.keyCode; 
  var filter = (isNN) ? [0,8,9] : [0,8,9,16,17,18,37,38,39,40,46];
    if(input.value.length >= len && !containsElement(filter,keyCode)) {
       input.value = input.value.slice(0, len);
       input.form[(getIndex(input)+1) % input.form.length].focus();
  }
function containsElement(arr, ele) {
   var found = false, index = 0;
      while(!found && index < arr.length)
       if(arr[index] == ele)
         found = true;
       else
      index++;
return found;
}
function getIndex(input) {
   var index = -1, i = 0, found = false;
     while (i < input.form.length && index == -1)
       if (input.form[i] == input)index = i;
       else i++;
      return index;
    }
return true;
}
function chkval(form,flag){
  // flag = 1 **hour**
  // flag = 2 **min**
    var reg = /^[0-9][0-9]*$/;
	var val = form.value;
	var ret = true;
	
	if(reg.test(val)){//chk num
       switch (flag){
	    case 1 :  //hour
	              if (val < 0  || val > 23) {
                    alert("Hour must be between 0 and 23.");
                    form.value = "00";
	                form.focus(); 
                    ret = false;
                  }else if (val.length == 1)form.value = "0" + val; 
        break;
		case 2 : //min
		           if (val < 0  || val > 59) {
                     alert("Minute must be between 0 and 59.");
                     form.value = "00"; 
	                 form.focus(); 
                     ret = false;
                   }else if (val.length == 1)form.value = "0" + val; 
		break;
	   }//end switch
	}//end chk num
	else { //value not number
	    alert('value must be number');
		form.value = '00';
		form.focus(); 
		ret = false;
	}
	return ret;
}
	
    
   
   
