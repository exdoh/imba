var selected = '#999999' ;
var over = '#CCCCCC'; 
/*
var selected = '#999999' ;
var over = '#0066FF';
*/
var d_bg = '#FFFFFF';


function tableBG(table) {   //on mouse over
var t = document.getElementById(table);
if(t.style.backgroundColor != selected)
t.style.backgroundColor = over; 
}//end table BG

function resetTable(table,bg) {  // on mouse out
var t = document.getElementById(table);
if(t.style.backgroundColor != selected)
t.style.backgroundColor = d_bg; 
}//end table BG

function setFont(table,count) // on click
{
  var r;
  for(i=0;i<count;i++){
   r = "rows"+i; 
   var t1 = document.getElementById(r);
   if(t1){
   //t1.style.fontWeight = 'normal';
   //t1.style.textDecoration  = 'none';
   t1.style.backgroundColor = d_bg; 
   }
  }
  
  var t = document.getElementById(table);
//  t.style.fontWeight = 'bolder'; 
 //t.style.textDecoration  = 'underline';
 t.style.backgroundColor = selected; 
}

function clearFont(count)  // reset all font
{
  var r;
  for(i=0;i<count;i++){
   r = "rows"+i; 
   var t1 = document.getElementById(r);
   if(t1){
     // t1.style.fontWeight = 'normal';
     //t1.style.textDecoration  = 'none';
	 t1.style.backgroundColor = '#FFFFFF'; 
   }
  }
}