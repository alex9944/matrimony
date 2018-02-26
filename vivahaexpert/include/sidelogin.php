<script language="javascript">
function validateloginform()
{
	if(document.form1.txtusername.value== "Username")
	{
		alert("Kindly enter username.");
		document.form1.txtusername.focus();
		return false;
	}		
	if(document.form1.txtpassword.value== "Password")
	{
		alert("Kindly enter password.");
		document.form1.txtpassword..focus();
		return false;
	}
	return true;	
}
function checkusername()
{
	if(document.form1.txtusername.value== "")
	{
		document.form1.txtusername.value = "Username";
		return false;
	}
	return true;	
}
function checkpassword()
{
	if(document.form1.txtpassword.value== "")
	{
		document.form1.txtpassword.value = "Password";
		return false;
	}	
	return true;	
}
function rusername()
{
	if(document.form1.txtusername.value== "Username")
	{
		document.form1.txtusername.value = "";
		return false;
	}
	return true;	
}
function rpassword()
{
	if(document.form1.txtpassword.value== "Password")
	{
		document.form1.txtpassword.value = "";
		return false;
	}	
	return true;	
}
</script>
<table cellspacing="0" cellpadding="0" border="0" style="width:234px;" class="wrapper2">
          <tbody><tr>
            <td class="td11"></td>
            <td class="td12"></td>
            <td class="td13"></td>
          </tr>
          <tr>
            <td class="td21"></td>
            <td style="height:146px; padding:6px; vertical-align:top; overflow:hidden;" class="td22"><h2>Login </h2>
            <FORM action="memlogin_submit.php" method="post" name="form1" id="form1">
              <table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="margin-top:5px;" class="padding_5p">
                <tbody><tr>
                  <td colspan="2"><label style="width:200px" class="rounded-textbox1">
                    <input type="text" style="width:194px" value="Username" class="rounded-textbox1" name="txtusername" id="txtusername" onblur="checkusername();" onfocus="rusername();" />
                  </label></td>
                </tr>
                <tr>
                  <td colspan="2"><label style="width:200px" class="rounded-textbox1">
                    <input type="password" style="width:194px" value="Password" class="rounded-textbox1" name="txtpassword" id="txtpassword" onblur="checkpassword();" onfocus="rpassword();">
                  </label></td>
                </tr>
                <tr>
                  <td width="80%" style="padding:0px; padding-top:5px; "><a class="link" href="forgotpassword.php">Forgot Password?</a></td>
                  <td align="right" style="padding:0px; padding-top:5px;"><!--<a class="button-small square-orange uppercase" href="#"><span></span> Login</a>-->
				  
			<!--	  <input type="submit" name="Login" id="Login" value="Login" onclick="return validateloginform();" />-->
				  
				  <input type="image" value="Login" name="Login" style="clear:both; border:0px; text-align:center; width:65px;" class="button-small square-orange uppercase" onclick="return validateloginform();">
				  </td>
                </tr>
              </tbody></table>
              </FORM></td>
            <td class="td23"></td>
          </tr>
          <tr>
            <td class="td31"></td>
            <td class="td32"></td>
            <td class="td33"></td>
          </tr>
        </tbody></table>