// JavaScript Document
function GetXmlHttpObject() { 
 var objXMLHttp=null 
 
 if(window.XMLHttpRequest) {
  objXMLHttp=new XMLHttpRequest() 
 }
 else if (window.ActiveXObject) {
  objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP")
 }
 return objXMLHttp
}


var xmlHttpar;
function FUN3(value) { 

 xmlHttpar=GetXmlHttpObject()
 if(xmlHttpar==null)		{
  alert ("Browser does not support HTTP Request");
  return;
 } 
 var url="ajax/ajaxcategory.php?subcat="+value;

 xmlHttpar.onreadystatechange=FUN4;
 xmlHttpar.open("GET",url,true);
 xmlHttpar.send(null);
}

function FUN4() 
{ 
 if(xmlHttpar.readyState==4 || xmlHttpar.readyState=="complete")
 { 
  document.getElementById('subcategory').innerHTML=xmlHttpar.responseText ;
 } 
}