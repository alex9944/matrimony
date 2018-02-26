<?php session_start();
ob_start();
if(!isset($_SESSION['userid']))
{
header("location:index.php");
}
include("config/error.php");
$userid=$_SESSION['userid'];

$edit_id=$_SESSION['usereditid'];

$editsql=mysql_query("select * from class_register where reg_id='$userid'");

$editfetch=mysql_fetch_array($editsql);

$editname=$editfetch['reg_name'];
$editaddress=$editfetch['reg_address'];
$editcountry=$editfetch['reg_country'];
$editstate=$editfetch['reg_state'];
$editcity=$editfetch['reg_city'];
$editphone=$editfetch['reg_phone'];
$editemail=$editfetch['reg_email'];
$editwebsite=$editfetch['reg_website'];

if(isset($_REQUEST['editbutton'])=="Submit")
{

$ename=$_REQUEST['ename'];
$address=$_REQUEST['address'];

 $country=$_REQUEST['country'];
 $state=$_REQUEST['state'];
 $city=$_REQUEST['city'];

$ephone=$_REQUEST['ephone'];
$eemail=$_REQUEST['eemail'];
$website=$_REQUEST['website'];

$upss = mysql_query("UPDATE class_register set reg_name='$ename',reg_address='$address',reg_phone='$ephone',reg_country='$country',reg_state='$state',reg_city='$city',reg_website='$website' WHERE reg_id ='$userid'") or die(mysql_error());
if($upss)
{
header("location:welcome.php?mes=1");
}
else
{
echo "error";
}
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $sitename;?></title>
<link type="text/css" rel="stylesheet" href="style/main.css"  />
<script language="JavaScript" src="ajax/ajaxfunctions2.js"></script>
<script language="JavaScript" src="ajaxfunction.js"></script>
<script language="javascript" type="text/javascript" src="datetimepicker.js"></script>
<script language="javascript">


function namecheck()
{
var ename=document.indexform.ename.value;
if(ename!="")
	      {
	       var iChars = "!@#$%^&*()+=-[]\\\';`,./{}|\":<>?0123456789";
    	      for (var i = 0; i < ename.length; i++)
	        	 {
  		           if (iChars.indexOf(ename.charAt(i)) != -1)
			         {
					 ename="";
  			 alert ("Your Name has special characters. \nThese are not allowed.\n Please remove them and try again.");
			          return false;
			        }
					
  		          }
 	         } 

}

function citycheck()
{
var name=document.indexform.city.value;
if(name!="")
	      {
	       var iChars = " !@#$%^&*()+=-[]\\\';`,./{}|\":<>?0123456789";
    	      for (var i = 0; i < name.length; i++)
	        	 {
  		           if (iChars.indexOf(name.charAt(i)) != -1)
			         {					 
					 alert ("Your Name has special characters. \nThese are not allowed.\n Please remove them and try again.");
					 document.indexform.city.value = "";
			          return false;
			        }
					
  		          }
				  
				 if(name.length < 6){
				   alert("Please Enter Minimum 6 Characters");				  
				  return false;
                 }				 
 	         } 
                                  
}

function statecheck()
{
var name=document.indexform.state.value;
if(name!="")
	      {
	       var iChars = " !@#$%^&*()+=-[]\\\';`,./{}|\":<>?0123456789";
    	      for (var i = 0; i < name.length; i++)
	        	 {
  		           if (iChars.indexOf(name.charAt(i)) != -1)
			         {					 
					 alert ("Your Name has special characters. \nThese are not allowed.\n Please remove them and try again.");
					 document.indexform.state.value = "";
			          return false;
			        }
					
  		          }
				  
				 if(name.length < 6){
				   alert("Please Enter Minimum 6 Characters");				  
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

function regCheck()
{
//alert("hai");
var ename=document.indexform.ename.value;
			if(ename=="")
			{
					alert("Please Enter Your Name");
					document.indexform.ename.focus();
					return false;
			}
			else
			{
				var result= namecheck();
				if(result==false)
				{  
				   document.indexform.ename.focus();
					return false; 
				}
			}
			
/*var eemail=document.indexform.eemail.value;
			if(eemail=="")
			{
					alert("Please Enter Your Email ID");
					document.indexform.eemail.focus();
					return false;
			}
			else
				{
					var as=echeck(eemail);
					if(as==false)
					{
						return false;
					}
				} */

			if(document.indexform.address.value=="")
				{
				   alert("Please Enter Your Address");
					document.indexform.address.focus();
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
			
var state=document.indexform.state.value;
			if(state=="")
			{
					alert("Please Select Your State");
					document.indexform.state.focus();
					return false;
			}
			
			
var country=document.indexform.country.value;
			if(country=="")
			{
					alert("Please Select Your Country");
					document.indexform.country.focus();
					return false;
			}				
				
var ephone=document.indexform.ephone.value;
			if(ephone=="")
			{
					alert("Please Enter Your Phone Number");
					document.indexform.ephone.focus();
					return false;
			}	
			if(isNaN(ephone))
			{
		     		alert("Please Enter Number only");
					document.indexform.ephone.focus();
					
					return false;
			}			
			
					
}

</script>
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
					<div class="head_txt">Edit Profile</font></div>
				</div>
			</div>
		</div>
		
		<div class="frmcont">
		<form name="indexform" method="post" action="#" onsubmit="return regCheck();">
			<table align="right" width="95%" border="0" cellspacing="0" cellpadding="5">
            
            <tr>
              <td width="18%" height="35" align="left" class="bold"><font color="#FF0000">*&nbsp;</font>Name</td>
              <td width="6%" align="center" class="bold">:</td>
              <td width="62%"><label>
                <input name="ename" type="text" class="text_box" id="ename" value="<?php echo $editname;?>" />
              </label></td>
            </tr>
            <tr>
              <td valign="top" height="35" align="left" class="bold"><font color="#FF0000">*&nbsp;</font>Address</td>
              <td valign="top" align="center" class="bold">:</td>
              <td valign="top"><textarea name="address" id="address" class="text_area" onblur="space(this.id)"><?php echo $editaddress;?></textarea></td>
            </tr>
			<tr>
                    <td class="bold"><font color="#FF0000">*&nbsp;</font>City</td>
                    <td align="center" class="bold">:</td>
                    <td><input name="city" id="city" class="text_box" type="text" value="<?php echo $editcity; ?>" /></td>
            </tr>
			
			<tr>
                    <td class="bold"><font color="#FF0000">*&nbsp;</font>State</td>
                    <td align="center" class="bold">:</td>
                    <td><input name="state" id="state" class="text_box" type="text" value="<?php echo $editstate; ?>" /></td>
            </tr>
			<tr>
                    <td class="bold"><font color="#FF0000">*&nbsp;</font>Country</td>
                    <td align="center" class="bold">:</td>
                    <td>					  		  
					   <select  name="country" id="country" class="combo_box">
						<option  value="">Select Country</option>
                     <?php  $sta2=mysql_query("select * from class_country order by country asc");
		                   while($con2=mysql_fetch_array($sta2)) {?>
						<option value="<?php echo $con2['countryid'];?>"  <?php if($editcountry==$con2['countryid']) {echo "selected";} ?> ><?php echo substr($con2['country'], 0, 20);?></option>
                    <?php } ?>
						</select>		
					</td>
            </tr>
			
                  <tr>
              <td height="35" align="left" class="bold"><font color="#FF0000">*&nbsp;</font>Phone Number</td>
              <td align="center" class="bold">:</td>
              <td><label>
                <input name="ephone" type="text" class="text_box" id="ephone" value="<?php echo $editphone;?>" />
              </label></td>
            </tr>
                  
                  <tr>
              <td height="35" align="left" class="bold"><font color="#FF0000">&nbsp;&nbsp;</font>Webpage</td>
              <td align="center" class="bold">:</td>
              <td><label>
                <input name="website" type="text"class="text_box" id="website" value="<?php echo $editwebsite;?>"/>
              </label></td>
            </tr>
            <tr>
              <td colspan="3" align="center" >
			  	<input type="submit" name="editbutton" id="editbutton" value="Update Profile" class="but_bg"/>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="Button" onclick="location.href='welcome.php'" value="Back" />
			  </td>
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
