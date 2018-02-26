<?php ob_start();
session_start();
include("config/error.php");
include("config/db_configue.php");
include("includes/functions.php");

if(isset($_REQUEST['submit']))
{
$name=$_REQUEST['name'];
$email=$_REQUEST['email']; 
$mobile=$_REQUEST['mobile'];
$subject=$_REQUEST['subject'];
$msg=$_REQUEST['msg'];


$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $email" . "\r\n";
$to      = $siteadmin;
$subject = "$sitename - $subject";


$message ="<font style=\"font-size:12px;font-style:normal;font-family:Tahoma,Verdana,Arial,Helvetica,sans-serif\">
<table width=\"766\" border=\"0\" cellspacing=\"5\" cellpadding=\"0\" align=\"center\" style=\"border:1px solid #EFF2F2;padding:20px\">
<tr>
<td><a target=\"_blank\" href=\"$site_url_reg\">
<img  src=\"$logo_url\" border=\"0\"></a></td>
</tr>
<tr><td style=\"background:#0195C5;height:5px;\"></td></tr>
<tr><td>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"5\" width=\"100%\" align=\"left\" style=\"color:#333333;margin-top:20px;\">
<tr valign=\"top\">
<td style=\"width:255px;padding:10px 20px;font-size:12px;\">
<div style=\"line-height: 13.5pt; font-size: 11.5pt; color: black;\">
<b>$sitename : ENQUIRY</b>
</div><br/>
<div style=\"color:#0195C5;font-size:14px;font-weight:bold;\">Dear Sir,</div>
<br/>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-size:12px;\">
<tr><td colspan=\"2\">You have received an enquiry from: &nbsp;&nbsp;<span style=\"font-weight:bold\">$name</span><br/><br/></td></tr>
<tr><td>Name :</td><td><span style=\"font-weight:bold\">$name</span></td></tr>
<tr><td>Email ID :</td><td><span style=\"font-weight:bold\">$email</span></td></tr>
<tr><td>Mobile Number :</td><td><span style=\"font-weight:bold\">$mobile</span></td></tr>
<tr><td>Message :</td><td><span style=\"font-weight:bold\">$msg</span></td></tr>
</table>

<br/><br/>
Thanks & Regards,
<br/> - $sitename
</td>
</tr>
</table>
</td></tr>
</table>
<table width=\"766\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"padding-top: 5px; padding-bottom: 5px;\">
<tbody>
<tr>
<td style=\"font-size:12px;color:#0195c5;line-height:1.4em;text-align:center;padding-top:10px;\" colspan=\"2\">Copyright ".date("Y")." $sitename. All Rights Reserved.</td>
</tr>
</tbody>
</table>
</font>";
//echo $message;die();
	//$mil=ma($to,$subject,$message,$headers);
 mail($to,$subject,$message,$headers); 



$headers1  = "MIME-Version: 1.0\r\n";
$headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers1 .= "From: $siteadmin" . "\r\n";
$to1      = $email;
$subject1 = "Thank you for your enquiry - $sitename ";

$contact = $site_url_reg."contact_us.php";

$message1 ="<font style=\"font-size:12px;font-style:normal;font-family:Tahoma,Verdana,Arial,Helvetica,sans-serif\">
<table width=\"766\" border=\"0\" cellspacing=\"5\" cellpadding=\"0\" align=\"center\" style=\"border:1px solid #EFF2F2;padding:20px\">
<tr>
<td><a target=\"_blank\" href=\"$site_url\">
<img  src=\"$sitelogo\" border=\"0\"></a></td>
</tr>
<tr><td style=\"background:#0195C5;height:5px;\"></td></tr>
<tr><td>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"5\" width=\"100%\" align=\"left\" style=\"color:#333333;margin-top:20px;\">
<tr valign=\"top\">
<td style=\"width:255px;padding:10px 20px;font-size:12px;\">
<div style=\"color:#0195C5;font-size:14px;font-weight:bold;\">Dear $name,</div>
<br/>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-size:12px;\">
<tr><td colspan=\"2\">Greetings from $sitename.<br/><br/></td></tr>
<tr><td colspan=\"2\">Thank you for your enquiry on , ".date("j F Y")." <br/><br/></td></tr>

</table>

<br/><br/>

We have received your mail. We will contact you soon. <br><br>
If you need any help along the way, please <a href=\"$contact\">Contact Us</a><br/><br/>Thanks for using Classified!
<br/> - $sitename
</td>
</tr>
</table>
</td></tr>
</table>
<table width=\"766\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"padding-top: 5px; padding-bottom: 5px;\">
<tbody>
<tr>
<td style=\"font-size:12px;color:#0195c5;line-height:1.4em;text-align:center;padding-top:10px;\" colspan=\"2\">Copyright ".date("Y")." $sitename. All Rights Reserved.</td>
</tr>
</tbody>
</table>
</font>";


 if(mail($to1,$subject1,$message1,$headers1))
 { 
 header("location:contact_us.php?success");
 }
 else
 {
 header("location:contact_us.php?error");
 }

}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $sitename;?></title>
<link type="text/css" rel="stylesheet" href="style/main.css"  />
<script language="javascript">
function space(sid) {
var name=document.getElementById(sid).value;
document.getElementById(sid).value=name.replace(/^(?:\s)*/g,'').replace(/(?:\s)*$/g,'');
}
function namecheck()
{
var name=document.form.name.value;
if(name!="")
	      {
	       var iChars = "!@#$%^&*()+=-[]\\\';`,./{}|\":<>?0123456789";
    	      for (var i = 0; i < name.length; i++)
	        	 {
  		           if (iChars.indexOf(name.charAt(i)) != -1)
			         {					 
					 alert ("Your Name has special characters. \nThese are not allowed.\n Please remove them and try again.");
					 document.form.name.value = "";
			          return false;
			        }
					
  		          }
				  
				 if(name.length < 4){
				   alert("Please Enter Minimum 4 Characters");
				   document.form.name.select();
				  return false;
                 }				 
 	         } 
                                  
}   


                                    
function echeck(str) 
{

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID");
		   return false;
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID");
		   return false;
		}
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID");
		    return false;
		}
		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }
		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID");
		    return false;
		 }
		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }
 		 return true;
	}

function contactcheck()
{
//alert("hai");
var regname=document.form.name.value;
			if(regname=="")
			{
					alert("Please Enter Your Name");
					document.form.name.focus();
					return false;
			}
			else
			{
				var result= namecheck();
				if(result==false)
				{  
				   document.form.name.focus();
					return false; 
				}
			}
			
var email=document.form.email.value;
			if(email=="")
			{
					alert("Please Enter Your Email ID");
					document.form.email.focus();
					return false;
			}
			else
				{
					var as=echeck(email);
					if(as==false)
					{
						return false;
					}
				}	
			
				
	var mobile=document.form.mobile.value;
			/*if(regphone=="")
			{
					alert("Please Enter Your Phone Number");
					document.indexform.regphone.focus();
					return false;
			}*/
			if(mobile!="")
			{	
			if(isNaN(mobile))
			{
		     		alert("Please Enter Number only");
					document.form.mobile.value="";
					document.form.mobile.focus();
					return false;
			}
			if(document.form.mobile.value.length < 10)
				{
				   alert("Invalid phone number");
					document.form.mobile.focus();
					return false;
				
				}
			}
			
			var subject=document.form.subject.value;
			if(subject=="")
			{
					alert("Please Enter Your Subjet");
					document.form.subject.focus();
					return false;
			}
			
			var mess=document.form.msg.value;
			if(mess=="")
			{
					alert("Please Enter Your Message");
					document.form.msg.focus();
					return false;
			}
			
			 if(document.getElementById('txtInput').value=="")
	{
		alert('Enter Verification code');
		document.getElementById('txtInput').focus();
		return false;
	}
	
	if(document.getElementById('txtInput').value!="")
	{
		return ValidCaptcha();
	}
				
}
 function DrawCaptcha()
    {
        var a = Math.ceil(Math.random() * 10)+ '';
        var b = Math.ceil(Math.random() * 10)+ '';       
        var code = a + ' + ' + b+ ' = ';
        document.getElementById("txtCaptcha").value = code;
        document.getElementById("total").value = parseInt(a)+parseInt(b);
    }

    // Validate the Entered input aganist the generated security code function   
    function ValidCaptcha()
    {
        var str1 = parseInt(document.getElementById('total').value);
        var str2 = parseInt(document.getElementById('txtInput').value);
        //alert(str1);
		//alert(str2);
        if(str1 != str2)
		{        
		alert("Verification code is wrong !!!");
		document.getElementById('txtInput').focus();
		return false;
		}
		
    }
</script>
<script language="javascript">

function show(divid)
{ 

    
		document.getElementById(divid).style.display = "block";
		
	
}
function hide(divid)
 
{
	
	<!--window.location='register.php';-->
	document.getElementById(divid).style.display = "none";
	
}


</script>
<script language="javascript" src="ajax/ajaxfunctions1.js"></script>
<script language="javascript" src="ajax/ajaxstate.js"></script>
<script language="JavaScript" src="ajaxfunction.js"></script>
</head>

<body onload="DrawCaptcha();">
<div id="container">
	<h1 id="header_font">
	  <strong><?php echo $sitename;?> classifieds</strong>
	</h1>
	<div class="contend_main">
		<?php include("includes/header.php");?>
	<div class="clr"></div>
	<div class="con_lft">	
		<div class="element-box">
			<div class="t">
				<div class="t">
					<div class="t"></div>
				</div>
			</div>
			<div class="m" style="height:500px;">
				<?php include("includes/left.php");?>
			</div>
			<div class="b">
				<div class="b">
					<div class="b"></div>
				</div>
			</div>
		</div>
		<!-- left ads -->
		<?php include("includes/left-ads.php");?>
	</div>
	<div class="con_rgt">
	
		<div class="element-box">
			<div class="t">
				<div class="t">
					<div class="t"></div>
				</div>
			</div>
		<div class="m" style="padding-left:10px;padding-right:10px;">
		<div class="in_head">
			<div class="in_head">
				<div class="in_head">
					<div class="head_txt">Contact Us</font></div>
				</div>
			</div>
		</div>
		
		<div class="frmcont">
			<form name="form" method="post" action="" onsubmit="return contactcheck();">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" >
	    <tr><td height="10">&nbsp;</td></tr>
        <tr>
          <td colspan="4" align="center" valign="top" height="30">
		  <?php
		  if(isset($_REQUEST['success']))
		  {
		  echo "<font color='green'><strong>Your mail has been sent successfull!</strong></font>";
		  }
		  ?>
		  
		  <?php 
		  if(isset($_REQUEST['error']))
		  {
		    echo "<font color='red'><strong>Mail not sent</strong></font>";
		  
		  }
		   ?> 
			    </td>
        </tr>
		
		<tr>
          <td height="40" align="right">&nbsp;</td>
          <td height="40" align="left" class="bold">Name<font color="#FF0000">*</font></td>
          <td align="center" class="bold">:</td>
          <td><label>
            <input name="name" type="text" class="text_box" id="name" value="" />
          </label></td>
        </tr>
		
        <tr>
          <td width="10%" height="40" align="right">&nbsp;</td>
          <td width="23%" align="left" class="bold"><span class="bold">Email ID</span><font color="#FF0000">*</font></td>
          <td width="5%" align="center" class="bold">:</td>
          <td width="62%"><label>
            <input name="email" type="text" class="text_box" id="email">
          </label></td>
        </tr>

        <tr>
          <td height="40" align="right">&nbsp;</td>
          <td height="40" align="left" class="bold">Mobile Number</td>
          <td align="center" class="bold">:</td>
          <td><label>
            <input name="mobile" type="text" class="text_box" id="mobile" value="" />
          </label></td>
        </tr>
	    
		<tr>
          <td height="40" align="right">&nbsp;</td>
          <td height="40" align="left" class="bold">Subject<font color="#FF0000">*</font></td>
          <td align="center" class="bold">:</td>
          <td><label>
            <input name="subject" type="text" class="text_box" id="subject" value="" />
          </label></td>
        </tr>
		
		<tr>
          <td height="40" align="right">&nbsp;</td>
          <td height="40" align="left" class="bold">Message<font color="#FF0000">*</font></td>
          <td align="center" class="bold">:</td>
          <td><label>
            <textarea name="msg" id="msg" rows="8" cols="35" class="text_area" style="width:350px; height:150px;"></textarea>
          </label></td>
        </tr>
        
        <tr>
         <td height="40" align="right">&nbsp;</td>
		<td height="40" align="left" class="bold">Verification code</td>
		<td align="center" class="bold">:</td>
		<td ><input type="text" id="txtCaptcha" 
            style="background-image:url('images/secure.jpg'); text-align:center; border:none;
            font-weight:bold; font-family:Modern; height:30px; width:75px;" readonly="readonly"/>
                        
			<img src="images/refresh.png" id="btnrefresh" onClick="DrawCaptcha();" style="margin-left:10px;"/>
			<input type="hidden" name="" id="total">		
		<input type="text" id="txtInput" class="Welcometext" style="width:50px;" />
		</td>
		</tr>
		
		<tr>
          <td height="40" align="right">&nbsp;</td>
          <td height="40" align="left" class="bold"></td>
          <td align="center" class="bold">&nbsp;</td>
          <td><label>
             <input name="submit" type="submit" class="but_bg" id="submit" value="Submit" />     
          </label></td>
        </tr>
		
      </table>
	  </form>
		</div>
		
		<div class="clr"></div>
		</div>
		<div class="b">
			<div class="b">
				<div class="b"></div>
			</div>
		</div>
		</div>
		<!-- center ads -->
		<?php include("includes/center-ads.php");?>
	</div>
	<div class="clr"></div>
	<?php include("includes/footer.php");?>
	</div>
</div>
<div class="bottom_line"></div>
</body>
</html>
