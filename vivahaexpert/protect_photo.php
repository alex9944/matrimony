<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript">
function validate()

  {

 if (document.form.txtppwd.value == "" )

		 {

			alert( "Password Required." );

			document.form.txtppwd.focus( );

			return false;

		}

		

		if ( document.form.txtppwd.value.length < 4 )

		{

			alert( "Password must be atleast 4 characters." );	

			document.form.txtppwd.focus( );

			return false;

		}

		

		if ( document.form.txtppwd.value.length > 20 )

		{

			alert( "Password must be maximum 20 characters." );	

			document.form.txtppwd.focus( );

			return false;

		}

		

		

	}



</script>
</head>

<body>
<?php include("config.php"); 
?>
<!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
<div class="profile_block">
  <div class="header">
    <h3 class="float_left title">Protect my Photo</h3>
  </div>
  <div class="body" align="left">
    <form action="photoprotect_submit.php" method="post" name="form" id="form"  onSubmit="return validate()">
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
        <tr>
          <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="content">
              <tr>
                <td align="left">If the photo is protected, then other members can not visible your photo. If anyone interested to view your photo, then they will send a request photo password to you. <br>
                  <br>
                  If you have  obtained the Photo Password request then you can 'Accept/Decline' the Request. </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center">
                    <table width="374" border="0" cellpadding="2" cellspacing="2" class="tbl_profiledetails">
                      <tr>
                        <td height="19" colspan="2"><strong>&nbsp;&nbsp;Set/Reset Password to Protect your Photo</strong></td>
                      </tr>
                      <tr>
                        <td height="25" colspan="2" valign="middle"></td>
                      </tr>
                      <tr>
                        <td width="121"><div align="left">Enter Password : </td>
                        <td width="237"><div align="left"><input name="txtppwd" type="text" class="textbox1" id="txtppwd" maxlength="50"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><div align="left">
                          <input name="Submit" type="image" value="Submit" src="pics/submit_but.gif">
                          </div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table>
                  </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center"><a href="javascript:window.close()">X Close Window</a></div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
      </table>
    </form>
    
    <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
  </div>
</div>
</body>
</html>