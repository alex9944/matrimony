<?php ob_start();
session_start();
include("config/error.php");
include("config/db_configue.php");
include("includes/functions.php");

if(isset($_REQUEST['regbutton']))
{
$reg_name=$_REQUEST['regname'];
 $reg_email=$_REQUEST['regemail']; 

//$reg_country=$_REQUEST['country'];	
$reg_country=324;	
$reg_state=$_REQUEST['state'];
$reg_city=$_REQUEST['city'];
	$add1=$_REQUEST['add1'];
	$add2=$_REQUEST['add2'];
	if (($add1!="") && ($add2!=""))
	{
		$reg_address=$add1.", ".$add2;
	}
	else if (($add1!="") && ($add2==""))
	{
		$reg_address=$add1;
	}
//echo $reg_address;exit;
$reg_webpage="http://".$_REQUEST['webpage'];
$reg_phone=$_REQUEST['regphone'];
$reg_pass=$_REQUEST['password'];

$reg_date = date("Y-m-d h:m:s");

$ip_addr = $_SERVER['REMOTE_ADDR'];

$exec=select_query("select * from class_register where reg_email='$reg_email'");
$regcnt=counttt($exec);
if($regcnt==0)
{
mysql_query("INSERT INTO `class_register`(`reg_name` , `reg_email` , `reg_country`, `reg_state`, `reg_city`, `reg_address`,`reg_website`, `reg_phone`, `reg_password` , `reg_status`, `posted_date`, `ip_addr`) VALUES ('$reg_name', '$reg_email', '$reg_country', '$reg_state', '$reg_city','$reg_address','$reg_webpage', '$reg_phone', '$reg_pass','0', '$reg_date', '$ip_addr')") or die(mysql_error());
$lastid=mysql_insert_id();
//header("location:login.php?success=1");
//}
/*
if($regcnt==0)
{
mysql_query("INSERT INTO `class_register`(`reg_name` , `reg_email` , `reg_country`, `reg_state`, `reg_city`, `reg_address`,`reg_website`, `reg_phone`, `reg_password` , `reg_status`, `posted_date`) VALUES ('$reg_name', '$reg_email', '$reg_country', '$reg_state', '$reg_city','$reg_address','$reg_webpage', '$reg_phone', '$reg_pass','1', '$reg_date')") or die(mysql_error());
$lastid=mysql_insert_id();

//$mem_sql=mysql_fetch_array(mysql_query("select * from membership limit 0,1"));
//mysql_query("INSERT INTO `class_membership`(`userid` , `maxnoads` ,`freeads`,`paymentads`, `avabfree`, `avabpayment` ,`memshiptype`  , `status`, `posted_date`) VALUES ('$lastid', '$mem_sql[postads]','$mem_sql[postads]','', '$mem_sql[postads]', '','$mem_sql[id]', '0', '$reg_date')");
*/

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $siteadmin" . "\r\n";
$to      = $reg_email;
$subject = "$sitename - Login Information";

$contact = $site_url_reg."contact_us.php";

$message ="<font style=\"font-size:12px;font-style:normal;font-family:Tahoma,Verdana,Arial,Helvetica,sans-serif\">
<table width=\"766\" border=\"0\" cellspacing=\"5\" cellpadding=\"0\" align=\"center\" style=\"border:1px solid #EFF2F2;padding:20px\">
<tr>
<td><a target=\"_blank\" href=\"$site_url_reg\">
<img  src=\"$sitelogo\" border=\"0\"></a></td>
</tr>
<tr><td style=\"background:#0195C5;height:5px;\"></td></tr>
<tr><td>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"5\" width=\"100%\" align=\"left\" style=\"color:#333333;margin-top:20px;\">
<tr valign=\"top\">
<td style=\"width:255px;padding:10px 20px;font-size:12px;\">
<div style=\"color:#0195C5;font-size:14px;font-weight:bold;\">Dear $reg_name!</div>
<br/>
<div style=\"font-weight:bold;font-size:12px;\">
Congratulations on becoming a part of the $sitename!!
</div>
<br/>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-size:12px;\">
<tr><td colspan=\"2\">The following are your login details :<br/><br/></td></tr>
<tr><td>EmailId :</td><td><span style=\"font-weight:bold\">$reg_email</span></td></tr>
<tr><td>Password :</td><td><span style=\"font-weight:bold\">$reg_pass</span></td></tr>
<tr><td><a href='$site_url/login.php?maction=$lastid'>click here</a> to login <br /><br /> </td></tr>
</table>

<br/><br/>

If you need any help along the way, please <a href=\"$contact\">Contact Us</a><br/><br/>Thanks for using $sitename!
<br/> - $sitename
</td>
</tr>
</table>
</td></tr>
</table>
<table width=\"766\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"padding-top: 5px; padding-bottom: 5px;\">
<tbody>
<tr>
<td style=\"font-size:12px;color:#0195c5;line-height:1.4em;text-align:center;padding-top:10px;\" colspan=\"2\">Copyright ".date("Y")." $sitename All Rights Reserved.</td>
</tr>
</tbody>
</table>
</font>";
//echo $message;die();
	//$mil=ma($to,$subject,$message,$headers);
	
	
	
 mail($to,$subject,$message,$headers); 
 header("location:login.php?success=1");

} 

else
{
header("location:registration.php?fail=2");
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

function showcity(str)
{
if (str=="")
  {
  document.getElementById("city").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("city").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","get_city.php?q="+str,true);
xmlhttp.send();
}

function space(sid) {
var name=document.getElementById(sid).value;
document.getElementById(sid).value=name.replace(/^(?:\s)*/g,'').replace(/(?:\s)*$/g,'');
}
function namecheck()
{
var name=document.indexform.regname.value;
if(name!="")
	      {
	       var iChars = "!@#$%^&*()+=-[]\\\';`,./{}|\":<>?0123456789";
    	      for (var i = 0; i < name.length; i++)
	        	 {
  		           if (iChars.indexOf(name.charAt(i)) != -1)
			         {					 
					 alert ("Your Name has special characters. \nThese are not allowed.\n Please remove them and try again.");
					 document.indexform.regname.value = "";
					 document.indexform.regname.focus();
			          return false;
			        }
					
  		          }
				  
				 if(name.length < 6){
				   alert("Please Enter Minimum 6 Characters");
				   document.indexform.regname.select();
				  return false;
                 }				 
 	         } 
                                  
}   

function citycheck()
{
var name=document.indexform.city.value;
if(name!="")
	      {
	       var iChars = "!@#$%^&*()+=-[]\\\';`,./{}|\":<>?0123456789";
    	      for (var i = 0; i < name.length; i++)
	        	 {
  		           if (iChars.indexOf(name.charAt(i)) != -1)
			         {					 
					 alert ("Your Name has special characters. \nThese are not allowed.\n Please remove them and try again.");
					 document.indexform.city.value = "";
			          return false;
			        }
					
  		          }
 	         } 
                                  
}

function statecheck()
{
var name=document.indexform.state.value;
if(name!="")
	      {
	       var iChars = "!@#$%^&*()+=-[]\\\';`,./{}|\":<>?0123456789";
    	      for (var i = 0; i < name.length; i++)
	        	 {
  		           if (iChars.indexOf(name.charAt(i)) != -1)
			         {					 
					 alert ("Your Name has special characters. \nThese are not allowed.\n Please remove them and try again.");
					 document.indexform.state.value = "";
			          return false;
			        }
					
  		          }
				  
				 
 	         } 
                                  
}

function tandc()
{
	//alert("Hello");
	if (document.indexform.termandcondition.checked == true)
	{
		document.indexform.termandcondition.checked=false;
	}
	else
	{
		document.indexform.termandcondition.checked=true;
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

function regCheck()
{
//alert("hai");
var regname=document.indexform.regname.value;
			if(regname=="")
			{
					alert("Please Enter Your Name");
					document.indexform.regname.focus();
					return false;
			}
			else
			{
				var result= namecheck();
				if(result==false)
				{  
				   document.indexform.regname.focus();
					return false; 
				}
			}
			
var regemail=document.indexform.regemail.value;
			if(regemail=="")
			{
					alert("Please Enter Your Email ID");
					document.indexform.regemail.focus();
					return false;
			}
			else
				{
					var as=echeck(regemail);
					if(as==false)
					{
						return false;
					}
				}
var address1=document.indexform.add1.value;
	if(address1=="")
	{
		alert("Enter your address");
		document.indexform.add1.focus();
	}
			/*if(document.indexform.address.value=="")
				{
				   alert("Please Enter Your Address");
					document.indexform.address.focus();
					return false;
				
				}
			if(document.indexform.address.value.length > 250)
				{
				   alert("Address content should not exists 250 char.");
					document.indexform.address.focus();
					return false;
				
				}*/
		var state=document.indexform.state.value;
			if(state=="")
			{
					alert("Please Select Your State");
					document.indexform.state.focus();
					return false;
			}			
			
		
		
var city=document.indexform.city.value;
			if(city=="")
			{
					alert("Please Select Your City");
					document.indexform.city.focus();
					return false;
			}
            else
			{
				var result= citycheck();
				if(result==false)
				{  
				   document.indexform.city.focus();
					return false; 
				}
			}			
			

/*var country=document.indexform.country.value;
			if(country=="")
			{
					alert("Please Select Your Country");
					document.indexform.country.focus();
					return false;
			}		*/			
				
				
				
				
			if(document.indexform.webpage.value!="")
			{
					
				
			var tomatch= /[A-Za-z0-9\.-]{3,}\.[A-Za-z]{3}/
			 if (tomatch.test(document.indexform.webpage.value))
			 {
				 
			 }
			 else
			 {
				 window.alert("not valid. Try again. \"www.google.com\" or \"google.in\" etc..");
				 document.indexform.webpage.focus()
				 return false; 
				}
			}
				


				
var regphone=document.indexform.regphone.value;
			/*if(regphone=="")
			{
					alert("Please Enter Your Phone Number");
					document.indexform.regphone.focus();
					return false;
			}*/
			if(regphone!="")
			{	
			if(isNaN(regphone))
			{
		     		alert("Please Enter Number only");
					document.indexform.regphone.value="";
					document.indexform.regphone.focus();
					return false;
			}
			if(document.indexform.regphone.value.length < 10)
				{
				   alert("Invalid phone number");
					document.indexform.regphone.focus();
					return false;
				
				}
			}
			
			var password=document.indexform.password.value;
			if(password=="")
			{
					alert("Please Enter Your Password");
					document.indexform.password.focus();
					return false;
			}	
			if(password!="" )
			{
			  if(password.length<6)
			  {
				alert("Minimun Six Character in Password")
				document.indexform.password.focus();
				return false;
			  }
			}	
			var cpassword=document.indexform.cpassword.value;
			if(cpassword=="")
			{
					alert("Please Enter Your Confirm Password");
					document.indexform.cpassword.focus();
					return false;
			}	
			
			if(cpassword!="" )
			{
			  if(cpassword.length<6)
			  {
				alert("Minimun Six Character in Confirm Password")
				document.indexform.cpassword.focus();
				return false;
			  }
			}	
			
			if(password != cpassword)
			{
				alert("confirm password should be same as password");
				document.indexform.password.focus();
				return false;
			}		
			
			if(document.indexform.termandcondition.checked==false)
			{
			alert("Please check The terms & Condition");
			document.indexform.termandcondition.focus();
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

<body>
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
		<?php //include("includes/left-ads.php");?>
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
					<div class="head_txt">Registration</font></div>
				</div>
			</div>
		</div>
		
		<div class="reg_frmcont" style="float:left;">
			<table class="registration" width="100%" border="0" cellspacing="0" cellpadding="5">
			<form name="indexform" method="post" action="" onsubmit="return regCheck();">
			<tr>
			<td colspan="4" align="center">
			<?php 
			if($_REQUEST['fail']==2)
			{
			echo "<font color='red'>Email ID alredy Exists</font><input type='hidden' name='uname' value='124' />";
			}
			?>
			</td>
			</tr>
			<tr>
			<td width="4%" align="right">&nbsp;</td>
			<td width="28%" align="left" class="bold"><font color="#FF0000">*&nbsp;</font>Name</td>
			<td width="4%" align="center" class="bold">:</td>
			<td width="54%"><label>
			<input name="regname" type="text" class="text_box" id="regname" size="23">
			</label></td>
			</tr>
			<tr>
			<td align="right">&nbsp;</td>
			<td align="left" class="bold"><font color="#FF0000">*&nbsp;</font>Email ID</td>
			<td align="center" class="bold">:</td>
			<td>
			<input name="regemail" type="text" id="regemail" class="text_box" onblur="FUNCTION3(this.value)" size="23">
			<div id="ajaxemail"></div>          </td>
			</tr>
			<tr>
			<td align="right">&nbsp;</td>
			<td align="left" class="bold" valign="top"><font color="#FF0000">*&nbsp;</font>Address</td>
			<td align="center" class="bold" valign="top">:</td>
			<td>
            	<input type="text" name="add1" id="add1" class="text_box" onblur="space(this.id)" /><br />
                <div style="padding-top:10px;"> </div>
                <input type="text" name="add2" id="add2" class="text_box" onblur="space(this.id)" />
			<!--<textarea name="address" id="address" class="text_area" onblur="space(this.id)"></textarea>-->
			</td>
			</tr>
			
		<!--	<tr>
			<td align="right">&nbsp;</td>
			<td align="left" class="bold"><font color="#FF0000">*&nbsp;</font>Country</td>
			<td align="center" class="bold">:</td>
			<td>
			<select name="country" id="country" class="combo_box" onchange="Javascript:categorylisted(this.value);">
			<option value="">Select Country</option>
			 <?php  $sta2=mysql_query("select * from class_country order by country asc");
			 while($con2=mysql_fetch_array($sta2)) {?>
			<option value="<?php echo $con2['countryid'];?>" ><?php echo $con2['country'];?></option>
			<?php } ?>
			</select>									
			</td>
			</tr> -->
			
			<tr>
			<td align="right">&nbsp;</td>
			<td align="left" class="bold"><font color="#FF0000">*&nbsp;</font>State</td>
			<td align="center" class="bold">:</td>
			<td>
						<div id="statenew">
							<select name="state" id="state" onchange="showcity(this.value)" class="combo_box">
		  					<option value="">Select State</option>
			<?php  $sta2=mysql_query("select * from class_state where countryid='324' order by state_name asc");
			 while($con2=mysql_fetch_array($sta2)) {?>
			<option value="<?php echo $con2['stateid'];?>" ><?php echo $con2['state_name'];?></option>
			<?php } ?>
							</select></div>

			<!--<label>
			 <input name="state" type="text" id="state" class="text_box" size="23"> 
			</label>-->
			</td>
			</tr>
			
			
			<tr>
			<td align="right">&nbsp;</td>
			<td align="left" class="bold"><font color="#FF0000">*&nbsp;</font>City</td>
			<td align="center" class="bold">:</td>
			<td><label>
            <select name="city" id="city" class="combo_box">
            <option value="">Select City</option>
            <option value="<?php echo $_REQUEST['city'] ?>"><?php echo $_REQUEST['city'] ?></option>
            </select>
			<!--<input name="city" type="text" id="city" class="text_box" size="23">-->
			</label></td>
			</tr>
			
			
			
			
			<tr>
			<td align="right">&nbsp;</td>
			<td align="left" class="bold"><font color="#FF0000">&nbsp;&nbsp;</font>Webpage</td>
			<td align="center" class="bold">:</td>
			<td>
			<font style="color:#1AA9C8; font-size:14px; font-weight:bold">http://</font><input name="webpage" type="text" class="text_box1" size="23"  />
			</td>
			</tr>
			<tr>
			<td align="right">&nbsp;</td>
			<td align="left" class="bold"><font color="#FF0000">&nbsp;</font>Phone Number</td>
			<td align="center" class="bold">:</td>
			<td><label>
			<input name="regphone" id="rephone" class="text_box" type="text" maxlength="12" onblur="space(this.id)">
			</label></td>
			</tr>
			<tr>
			<td align="right">&nbsp;</td>
			<td align="left" class="bold"><font color="#FF0000">*&nbsp;</font>Password</td>
			<td align="center" class="bold">:</td>
			<td><input name="password" type="password" class="text_box" id="password" size="23"></td>
			</tr>
			<tr>
			<td align="right">&nbsp;</td>
			<td align="left" class="bold"><font color="#FF0000">*&nbsp;</font>Confirm Password</td>
			<td align="center" class="bold">:</td>
			<td><input name="cpassword" type="password" class="text_box" id="cpassword" size="23"></td>
			</tr>
			<tr>
			<td colspan="4" align="center" class="bold" style="vertical-align:middle;">
            <input name="termandcondition" id="termandcondition" type="checkbox" value="" />
			<!--<b>
            	<a href="javascript:tandc()" style="text-decoration:none; color:#000000">I Agree to The Terms & Condition</a>
            </b>-->
                	I Agree to The<a href="javascript:void(0);" onClick="javascript:window.open('term_condition.php','TermsandConditions','scrollbars,resizable,width=800, height=600'); return false;" class="siteLink"> Terms & Condition</a>
            </td>
			
			</tr>
			<tr>
			<td colspan="4" align="center" >
			<input name="regbutton" type="submit" class="but_bg" id="regbutton" value="Submit"></td>
			</tr> </form>
			</table>
		</div>
		<div class="login_box_cont">
			<div class="login_box">
			  <div class="t">
					<div class="t">
						<div class="t"></div>
					</div>
				</div>
				<div class="m" style="height:auto;">
					<?php include("includes/loginbox.php");?>
				</div>
				<div class="b">
					<div class="b">
						<div class="b"></div>
					</div>
				</div>
			</div>
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
		<?php //include("includes/center-ads.php");?>
	</div>
	<div class="clr"></div>
	<?php include("includes/footer.php");?>
	</div>
</div>
<div class="bottom_line"></div>
</body>
</html>
