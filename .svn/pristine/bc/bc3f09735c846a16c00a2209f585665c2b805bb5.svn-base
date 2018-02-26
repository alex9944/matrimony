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
function FUNCTION3(value) { 

 xmlHttpar=GetXmlHttpObject()
 if(xmlHttpar==null)		{
  alert ("Browser does not support HTTP Request")
  return
 } 
 var url="ajax/ajaxusername1.php?email="+value;
 xmlHttpar.onreadystatechange=FUNCTION4
 xmlHttpar.open("GET",url,true)
 xmlHttpar.send(null)
}

function FUNCTION4() 
{ 
 if (xmlHttpar.readyState==4 || xmlHttpar.readyState=="complete")
 { 
  document.getElementById('ajaxemail').innerHTML=xmlHttpar.responseText 
 } 
}