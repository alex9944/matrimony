<?php session_start();
ob_start();
include "../config/error.php";
if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}
$userid_admin=$_SESSION['userid'];
$edit_id=$_REQUEST['usereditid'];

$editsql=mysql_query("select * from class_register where reg_id='$edit_id'");

$editfetch=mysql_fetch_array($editsql);

$editname=$editfetch['reg_name'];
$editaddress=$editfetch['reg_address'];
$editcountry=$editfetch['reg_country'];
$editstate=$editfetch['reg_state'];
$editcity=$editfetch['reg_city'];
$editphone=$editfetch['reg_phone'];
$editemail=$editfetch['reg_email'];
$editwebsite=$editfetch['reg_website'];

if($_REQUEST['editbutton']=="Submit")
{
$ename=$_REQUEST['ename'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
 //country=$_REQUEST['country'];
  $country=324;
$state1=$_REQUEST['state1'];
 $city1=$_REQUEST['city1'];

$ephone=$_REQUEST['ephone'];
$eemail=$_REQUEST['eemail'];
$website=$_REQUEST['website'];
//echo "UPDATE class_register set reg_name='$ename',reg_email='$eemail',reg_phone='$ephone',reg_country='$country',reg_state='$state1',reg_city='$city1' WHERE reg_id ='$edit_id'";exit;
$upss = mysql_query("UPDATE class_register set reg_name='$ename',reg_email='$email',reg_address='$address',reg_phone='$ephone',reg_country='$country',reg_state='$state1',reg_city='$city1',reg_website='$website' WHERE reg_id ='$edit_id'");
if($upss)
{
header("location:manageuser.php?mes=1");
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<meta name="copyright" content="i-netsolution 2008-2009"/>  
<meta name="keywords" content="<?php echo $keywords;?>"/>
<meta name="description" content="<?php echo $description;?>"/>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<script language="JavaScript" src="ajax/ajaxfunctions2.js"></script>
<script language="JavaScript" src="ajaxfunction.js"></script>
<script language="javascript" type="text/javascript" src="datetimepicker.js"></script>
<script language="javascript">


function namecheck()
{
var ename=document.indexform.ename.value;
if(ename!="")
	      {
	       var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";
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
			
var eemail=document.indexform.email.value;
			if(eemail=="")
			{
					alert("Please Enter Your Email ID");
					document.indexform.email.focus();
					return false;
			}
			else
				{
					var as=echeck(eemail);
					if(as==false)
					{
						return false;
					}
				}	
				
var ephone=document.indexform.ephone.value;
			/*if(ephone=="")
			{
					alert("Please Enter Your Phone Number");
					document.indexform.ephone.focus();
					return false;
			}	*/
			
			if(ephone!="")
			{
			if(isNaN(ephone))
			{
		     		alert("Please Enter Number only");
					document.indexform.ephone.focus();
					
					return false;
			}			
			}
			
			var tomatch= /http:\/\/[A-Za-z0-9\.-]{3,}\.[A-Za-z]{3}/
			if(document.indexform.website.value!='')
			{
			 if (tomatch.test(document.indexform.website.value))
			 {
				 
			 }
			 else
			 {
				 window.alert("valid. Try again. http://www.google.com");
				 document.indexform.website.focus()
				 return false; 
				}
			}
					
}

</script>
<body>
<table width="98%" border="0" cellpadding="3" cellspacing="1" align="center">
  <tr>
    <td colspan="9"><?php include("includes/adminheader.php");?></td>
  </tr>
  <tr>
    <td colspan="9">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9"><?php include("includes/adminmenu.php");?></td>
  </tr>
  <tr>
  <form name="indexform" method="post" action="#" onsubmit="return regCheck();">
      <td bgcolor="#FFFFFF"><br />
        <table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="4%" align="right" valign="bottom"><img src="images/box_left_top.jpg" width="17" height="17" /></td>
          <td width="92%" background="images/box_top.jpg" style="background-position:bottom; background-repeat:repeat-x;">&nbsp;</td>
          <td width="4%" align="left" valign="bottom"><img src="images/box_right_top.jpg" width="17" height="17" /></td>
        </tr>
        <tr>
          <td background="images/box_left_center.jpg" style="background-position:right; background-repeat:repeat-y;">&nbsp;</td>
          <td bgcolor="#fef5fa"><table width="100%" border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td height="60" colspan="3" align="center" class="head_bg"><div align="left"><strong>Edit Profile </strong></div></td>
            </tr>
            <tr>
              <td colspan="3" align="center"></td>
            </tr>
            <tr>
              <td width="32%" height="35" align="right" class="bold"><div align="left"><font color="#FF0000"></font>Name</div></td>
              <td width="6%" align="center" class="bold">:</td>
              <td width="62%"><label>
                <input name="ename" type="text" id="ename" class="text_box" value="<?php echo $editname;?>" />
              </label></td>
            </tr>
            <tr>
              <td height="35" align="left" class="bold">Email</td>
              <td align="center" class="bold">:</td>
              <td><label>
                <input type="text" name="email" class="text_box" value="<?php echo $editemail;?>" />
              </label></td>
            </tr>
            <tr>
              <td height="35" align="left" class="bold">Address</td>
              <td align="center" class="bold">:</td>
              <td><input name="address" type="text" id="address" class="text_box" value="<?php echo $editaddress;?>"/></td>
            </tr>
            <tr>
              <td height="35" align="left" class="bold">City</td>
              <td align="center" class="bold">:</td>
              <td><input name="city1" type="text" id="city1" class="text_box" value="<?php echo $editcity;?>"/></td>
            </tr>
            <tr>
              <td height="35" align="left" class="bold">State</td>
              <td align="center" class="bold">:</td>
              <td>
			  <select name="state1" id="state1" class="combo_box">
		  					<option value="">Select State</option>
			<?php  $sta2=mysql_query("select * from class_state where countryid='324' order by state_name asc");
			 while($con2=mysql_fetch_array($sta2)) {?>
			<option value="<?php echo $con2['stateid'];?>" <?php if($con2['stateid']==$editstate) { ?> selected="selected"<?php } ?> ><?php echo $con2['state_name'];?></option>
			<?php } ?>
							</select>
			  <!--<input name="state1" type="text" id="state1" class="text_box" value="<?php echo $editstate;?>"/> --></td>
            </tr>
			<!--<tr>
			<td class="bold">Country<font color="#FF0000" size="-4"></font></td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td>
					

                        <?php
						$editfetch['reg_country'];
						  $cont=mysql_query("select * from class_country order by country asc");?>
						<select name="country" id="country" class="combo_box" onChange="Javascript:categorylist(this.value);" > 
					<select name="country" id="country" class="combo_box" >
						<option value="">Select Country</option>
		                  <?php while($con2=mysql_fetch_array($cont)) {?>
                           <option value="<?php echo $con2['countryid'];?>"<?php if($con2['countryid']==$editfetch['reg_country']) { ?> selected="selected"<?php } ?> ><?php echo $con2['country'];?></option>
                            <?php } ?>
                    </select>                    </td>
                  </tr>-->
          <?php /*        <tr>
                    <td class="bold">State<font color="#FF0000" size="-4"></font></td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td>
					<?php 
					$editfetch['reg_state'];
					$stat= mysql_query("select * from class_state"); ?>
					<div id="statenew">
					<select name="state1" id="state1" onchange="Javascript:citylist(this.value);">
					<option value="">Select State</option>
					<?php while($state12=mysql_fetch_array($stat)){?>
			  <option value="<?php echo $state12['stateid'];?>"<?php if($state12['stateid']==$editfetch['reg_state']) { ?> selected="selected"<?php } ?> ><?php echo $state12['state_name'];?></option><?php }?>
              </select></div></td>
                  </tr>
                  <tr>
                    <td class="bold">City<font color="#FF0000" size="-4">&nbsp;</font></td>
                    <td align="center" class="bold">:</td>
                    <td><?php 
					$editfetch['reg_city'];
					$city = mysql_query("select * from class_city"); ?>
					<div id="citynew">
                      <select name="city1" id="city1">
                        <option value="">Select City</option>
                        <?php while($city12=mysql_fetch_array($city)) { ?>
                        <option value="<?php echo $city12['cityid']; ?>"<?php if($city12['cityid']==$editfetch['reg_city']) { ?> selected="selected"<?php } ?> ><?php echo $city12['city_name']; ?></option>
                        <?php } ?>
                      </select></div>
                      
                       <input name="city" type="hidden" />                      </td>
                  </tr>  */ ?>
                  <tr>
              <td height="35" align="right" class="bold"><div align="left"><font color="#FF0000"></font>Phone Number </div></td>
              <td align="center" class="bold">:</td>
              <td><label>
                <input name="ephone" type="text" id="ephone" class="text_box" value="<?php echo $editphone;?>" />
              </label></td>
            </tr>
                  <!--<tr>
                    <td height="35" align="right" class="bold"><div align="left"><font color="#FF0000"></font>Email ID </div></td>
                    <td align="center" class="bold">:</td>
                    <td><input name="eemail" type="text" id="eemail" value="<?php echo $editemail;?>" /></td>
                  </tr>-->
                  <tr>
              <td height="35" align="left" class="bold">Webpage</td>
              <td align="center" class="bold">:</td>
              <td><label>
                <input name="website" type="text" id="website" class="text_box" value="<?php echo $editwebsite;?>"/>
              </label></td>
            </tr>
            <tr>
              <td colspan="3" align="center" >
			      <!-- <input type="submit" name="editbutton" id="editbutton"  disabled="disabled" value="Submit" /> This feature is disabled in the demo version...  -->           
				   <input type="submit" name="editbutton" id="editbutton" class="but_bg" value="Submit" />           
				  </td>
            </tr>
            <tr>
              <?php /*?><td colspan="3" align="right" class="link1"><span class="ad_text_color"><a href="welcome.php" style="padding-right:30px;">Back</a></span></td><?php */?>
            </tr>
          </table></td>
          <td background="images/box_right_center.jpg" style="background-position:left; background-repeat:repeat-y;">&nbsp;</td>
        </tr>
        <tr>
          <td align="right" valign="top"><img src="images/box_left_bottom.jpg" width="17" height="17" /></td>
          <td background="images/box_bottom.jpg" style="background-position:top; background-repeat:repeat-x;">&nbsp;</td>
          <td align="left" valign="top"><img src="images/box_right_bottom.jpg" width="17" height="17" /></td>
        </tr>
      </table></td>
    </form>
	</tr>
</table>
</body>
</html>
