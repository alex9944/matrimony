function categorylist(id)
{
	
 xmlHttp=GetXmlHttpObject1()
		if (xmlHttp==null)
		{
			alert ("Browser does not support HTTP Request")
			return
		} 
		var url="ajax_category.php"
		url=url+"?catid="+id
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
 else
 {
	 document.getElementById("statenew").innerHTML= "<option>Loading...</option>";
 }
} 

function citylist(id)
{
//alert(id);
 xmlHttp=GetXmlHttpObject1()
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="ajax_category.php"
		url=url+"?q="+id
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged2 
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)
}

function stateChanged2() 
{ 
 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
  document.getElementById("citynew").innerHTML=xmlHttp.responseText 
 } 
} 


function cityzip(id)
{
 xmlHttp=GetXmlHttpObject1()
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="ajax_category.php"
		url=url+"?zip="+id
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged3
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)
}

function stateChanged3() 
{ 
 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
  document.getElementById("cityzip").innerHTML=xmlHttp.responseText 
 } 
}

function cityvisit(id)
{
	
 xmlHttp=GetXmlHttpObject1()
		if (xmlHttp==null)
		{
		alert ("Browser does not support HTTP Request")
		return
		} 
		var url="ajax_category.php"
		url=url+"?visit="+id
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChangedcityvisit
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)
}

function stateChangedcityvisit() 
{ 
 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
  document.getElementById("divcityvisit").innerHTML=xmlHttp.responseText 
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



function chkcat(id)
{
	
 xmlHttp=GetXmlHttpObject1()
		if (xmlHttp==null)
		{
			alert ("Browser does not support HTTP Request")
			return
		} 
		var url="disp_subcat.php"
		url=url+"?c_id="+id
		url=url+"&sid="+Math.random()
		xmlHttp.onreadystatechange=stateChanged1 
		xmlHttp.open("GET",url,true)
		xmlHttp.send(null)
}

function stateChanged1() 
{ 
 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
  document.getElementById("scat_id").innerHTML=xmlHttp.responseText 
 } 
 else
 {
	 document.getElementById("scat_id").innerHTML= "<option>Loading...</option>";
 }
} 


