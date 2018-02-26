<?php 

if(isset($_REQUEST['loginbutton']) || isset($_REQUEST['dlogin']))
{
$login_userid=$_REQUEST['email'];
$login_pass=$_REQUEST['password'];

if(isset($_REQUEST['dlogin']))
{
$login_userid=base64_decode($_REQUEST['username']);
$login_pass=base64_decode($_REQUEST['password']);
}

$login_select=mysql_query("select * from `class_register` where `reg_email`='$login_userid' AND `reg_password`='$login_pass' AND `reg_status`='0'" );

 $login_count=mysql_num_rows($login_select);

if($login_count > 0)
{

$login_fetch=mysql_fetch_array($login_select);
$user_id=$login_fetch['reg_id'];
$_SESSION['userid']=$user_id;
$_SESSION['username']=$login_fetch['reg_name'];
 $_SESSION['emailid']=$login_userid;
header("location:welcome.php");
}
else
{
header("location:login.php?loginerror=2");
}
}
?>
<script language="javascript">

function echeck(str) 
{

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid Email ID");
		   return false;
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid Email ID");
		   return false;
		}
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid Email ID");
		    return false;
		}
		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid Email ID");
		    return false;
		 }
		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid Email ID");
		    return false;
		 }
		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid Email ID");
		    return false;
		 }		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid Email ID");
		    return false;
		 }
 		 return true;					
	}

function logincheck()
{

var email=document.loginForm.email.value;
			if(email=="")
			{
					alert("Please Enter Your Email ID");
					document.loginForm.email.focus();
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
			
var password=document.loginForm.password.value;
			if(password=="")
			{
					alert("Please Enter Your Possword");
					document.loginForm.password.focus();
					return false;
			}
			//if(password.length < 6)
				//{
				//	alert("Your Password Sould Be Minimum 6 Char");
				//	document.loginForm.password.focus();
				//	return false;
				//}	
				
		
					
}

</script>

<div class="header">Login</div>
<div class="msg_bx"> 

</div>
<div class="frmloginbx">
			<form name="loginForm" method="post" action="" onsubmit="return logincheck();">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" >
	  
	  
	    <tr><td height="10"></td></tr>
        <tr>
        	<td align="center" colspan="4">
            	<font style="color:#1AA9C8; font-size:14px;">If you already register, login here</font>
            </td>
        </tr>
        <tr>
          <td colspan="4" align="center" valign="top" height="30">
		  <?php
		  if($_REQUEST['success']==1)
		  {
		  echo "<font color='green'><strong>Thanks for Join! Registration successfull!</strong> </font><input type='hidden' name='uname' value='124' />";
		  }
		  ?>
		  
		  <?php 
		  if($_REQUEST['loginerror']==2)
		  {
		    echo "<font color='red'><strong>Invalid Email Id & Password</strong></font><input type='hidden' name='uname' value='124' />";
		  
		  }
		  
		  
		   ?>		 
		   
		   <?php 
							  if($_REQUEST['success']==1)
							  {
							  echo "<font color='green'><strong>Your Email Id and password send to your Mail</strong></font><input type='hidden' name='uname' value='124' />";
							  }
							  elseif($_REQUEST['fail']==2)
							  {
							  echo "<font color='red'><strong>Your User ID is Wrong. Enter Correct User ID</strong></font><input type='hidden' name='uname' value='124' />";
							  }
							  
							  ?>		    </td>
        </tr>              
        <tr>
          <td width="10%" height="40" align="right">&nbsp;</td>
          <td width="23%" align="left" class="bold"><font color="#FF0000">*</font><span class="bold">Email ID</span></td>
          <td width="10%" align="center" class="bold">&nbsp; : &nbsp;</td>
          <td width="50%" align="center"><label>
            <input name="email" type="text" class="text_box2" id="email">
          </label></td>
        </tr>
        <tr>
          <td height="40" align="right">&nbsp;</td>
          <td height="40" align="left" class="bold"><font color="#FF0000">*</font>Password</td>
          <td align="center" class="bold">:</td>
          <td align="center"><label>
            <input name="password" type="password" class="text_box2" id="password" value="" />
          </label></td>
        </tr>
        
        <tr>
          <td colspan="6" align="center" valign="top" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
              <td colspan="2" align="center">
                <input name="loginbutton" type="submit" class="but_bg" id="loginbutton" value="Submit" />
              </td>
            </tr>
            <tr>
              <td colspan="2" align="center">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" align="center" class="link1"><span class="ad_text_color"><a class="siteLink" href="forgotpassword.php">Forgot Password</a></span></td>
              <td colspan="2" align="center" class="link1"><!--<span class="ad_text_color">
			  <a class="siteLink" href="javascript:void(0);" onclick="window.open('http://2daybiz.com/products/2daybizusers/add.php?pro=classified', 'Demo', 'scrollbars,resizable,width=480, height=270'); return false;">for Demo</a></span> --></td>
            </tr>
          </table></td>
        </tr>
	    
      </table>
	  </form>
</div>


<?php $sel=mysql_query("select * from google_ad where location='right_top'"); 
    $tab=mysql_fetch_array($sel);
	if($tab)
	{
	 echo $tab['source'];
	 }
?>