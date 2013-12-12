function confirmUpdate(theForm,formID,msg)
{
var id   = formID.value;
  if(id) setValue(theForm,msg);
  else alert("Please select a record.");
}
function confirmDelete(table,theForm,formID,formDel,msg)
{
var name = formDel.value;
var id   = formID.value;
//alert("n "+name+" id "+id);
  if(id){
    var agree=confirm("Do you want to delete "+table+"  \""+name+"\" ?");
      if (agree)
         setValue(theForm,msg);
   }else alert("Please select a record.");
}
function setValue(theForm,msg)
{
	theForm.mode.value = msg;
	theForm.submit();
}