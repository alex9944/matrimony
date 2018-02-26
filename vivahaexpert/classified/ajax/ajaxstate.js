function categorylisted(id)
{
 xmlHttp=GetXmlHttpObject1()
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="ajax/ajaxstate.php"
		url=url+"?id="+id
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged1 
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)
}

function stateChanged1() 
{ 
 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
  document.getElementById("statenew").innerHTML=xmlHttp.responseText 
 } 
} 

function GetXmlHttpObject1()
{ 
 var objXMLHttp=null
 if (window.XMLHttpRequest)
 {
 objXMLHttp=new XMLHttpRequest()
 }
 else if (window.ActiveXObject)
 {
  objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP")
 }
 return objXMLHttp
}






