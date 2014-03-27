function setFont2(table,count)
{
  var r;
  for(i=0;i<count;i++){
   r = "trows"+i; 
   var t1 = document.getElementById(r);
   if(t1)
   t1.style.fontWeight = 'normal';
  }
  
  var t = document.getElementById(table);
  t.style.fontWeight = 'bolder'; 
}

function clearFont2(count)
{
  var r;
  for(i=0;i<count;i++){
   r = "trows"+i; 
   var t1 = document.getElementById(r);
   if(t1)
   t1.style.fontWeight = 'normal';
  }
}

function setHilight(table,count)
{
  var r;
  for(i=0;i<count;i++){
   r = "trows"+i; 
   var t1 = document.getElementById(r);
   if(t1)
   t1.style.backgroundColor = '#FFFFFF';
  }
  
  var t = document.getElementById(table);
  t.style.backgroundColor = '#999999';
}

function setHilight(table,count)
{
  var r;
  for(i=0;i<count;i++){
   r = "trows"+i; 
   var t1 = document.getElementById(r);
   if(t1)
   t1.style.backgroundColor = '#FFFFFF';
  }
  
  var t = document.getElementById(table);
  t.style.backgroundColor = '#999999';
}

function setHilight_new(set)
{
  var tmp   = document.getElementById('tmp_hilight');
  var clear = tmp.value;
  if(clear!="")document.getElementById(clear).style.backgroundColor = '#FFFFFF';
  document.getElementById(set).style.backgroundColor = '#999999';
  tmp.value = set;
}

function clearHilight(count)
{
  var r;
  for(i=0;i<count;i++){
   r = "trows"+i; 
   var t1 = document.getElementById(r);
   if(t1)
   t1.style.backgroundColor = '#FFFFFF';
  }
}

function setFont3(table,count)
{
  var r;
  for(i=0;i<count;i++){
   r = "srows"+i; 
   var t1 = document.getElementById(r);
   if(t1)
   t1.style.fontWeight = 'normal';
  }
  
  var t = document.getElementById(table);
  t.style.fontWeight = 'bolder'; 
}

function clearFont3(count)
{
  var r;
  for(i=0;i<count;i++){
   r = "srows"+i; 
   var t1 = document.getElementById(r);
   if(t1)
   t1.style.fontWeight = 'normal';
  }
}

function setFont4(table,count)
{
  var r;
  for(i=0;i<count;i++){
   r = "wrows"+i; 
   var t1 = document.getElementById(r);
   if(t1)
   t1.style.fontWeight = 'normal';
  }
  
  var t = document.getElementById(table);
  t.style.fontWeight = 'bolder'; 
}

function clearFont4(count)
{
  var r;
  for(i=0;i<count;i++){
   r = "wrows"+i; 
   var t1 = document.getElementById(r);
   if(t1)
   t1.style.fontWeight = 'normal';
  }
}

function setFont5(table,count)
{
  var r;
  for(i=0;i<count;i++){
   r = "brows"+i; 
   var t1 = document.getElementById(r);
   if(t1)
   t1.style.fontWeight = 'normal';
  }
  
  var t = document.getElementById(table);
  t.style.fontWeight = 'bolder'; 
}

function clearFont5(count)
{
  var r;
  for(i=0;i<count;i++){
   r = "brows"+i; 
   var t1 = document.getElementById(r);
   if(t1)
   t1.style.fontWeight = 'normal';
  }
}
