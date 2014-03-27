function sendAjax(url,div,ret_act){
alert(url);
  var xmlhttp = false;
if (window.XMLHttpRequest)	{
   //IE7 , firefox
	xmlhttp = new XMLHttpRequest() ;
}else if (window.ActiveXObject){
   //ie5,ie6
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
    if(xmlhttp){
	var target = document.getElementById(div);
	xmlhttp.open("GET",url) ;
	xmlhttp.onreadystatechange = function() {

    	   if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {  
		         var txt = xmlhttp.responseText;
				 target.innerHTML  =txt;	
				 alert('ajax ret = '+txt);
			     if(ret_act)ajaxReturnAction();
	    	}//end if (state,status)     	
	}//end function
	xmlhttp.send(null);
  }//end if(xmlhttp)
}//end doAction 

function sendAjax_POST(url,param,div,ret_act){
  //alert('ajax param '+param);
  //alert('ajax url '+url);
  var xmlhttp = false;
if (window.XMLHttpRequest)	{
   //ie7 , firefox
	xmlhttp = new XMLHttpRequest() ;
}else if (window.ActiveXObject){
//ie5,ie6
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP") ;
}
    if(xmlhttp){
	var target = document.getElementById(div);
	xmlhttp.open("POST",url) ;
	xmlhttp.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded' );
	xmlhttp.send(param);
    var chkFlag = true; 
	xmlhttp.onreadystatechange = function() {
		chkFlag = false;
    // alert("ready state="+xmlhttp.readyState+" status="+xmlhttp.status);
    	   if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {  
		         var txt = xmlhttp.responseText;
			     //alert('ajax ret = '+txt);
				 target.innerHTML  =txt;	
				 if(ret_act)ajaxReturnAction();
	    	}//end if (state,status)     	
	}//end function
	
	//for fire fox not work with nreadystatechange
	  if(chkFlag){
		 var txt = xmlhttp.responseText;
	    //alert('ajax ret = '+txt);
		 target.innerHTML  =txt;	
		 if(ret_act)ajaxReturnAction();  
	  }
	//for fire fox not work with nreadystatechange
	
  }//end if(xmlhttp)
}//end doAction