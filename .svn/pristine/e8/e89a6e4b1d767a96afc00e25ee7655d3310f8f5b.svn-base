<?php include('protect.php'); ?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<script language="javascript">



message = ("Sorry, you are not allowed to enter any spaces");

function nospaces(which) {

x = which.value

if (navigator.appName == "Netscape" ) {

if (e.which == 32) {

alert (message);

return false

}

}

if (navigator.appName == "Microsoft Internet Explorer") {

if (event.keyCode == 32) {

alert (message);

return false;

}

}

x = x.replace(/\s/g,""); // remove the unwanted space

document.signupForm.txtp.value = x;

}

</script>



<script language="JavaScript">



<!--

function Check_form() {





// Check old Password 

		if ( document.signupForm.txtop.value == "" )

		{

			alert( "Kindly enter your old password." );

			document.signupForm.txtop.focus( );

			return false;

		}



// Check Password 

		if ( document.signupForm.txtp.value == "" )

		{

			alert( "Kindly enter a new password." );

			document.signupForm.txtp.focus( );

			return false;

		}



		if ( document.signupForm.txtp.value.length < 4 )

		{

			alert( "Password must be atleast 4 characters." );	

			document.signupForm.txtp.focus( );

			return false;

		}





		if ( document.signupForm.txtp.value.length > 20 )

		{

		alert( "Password must be Max 20 characters." );	

		document.signupForm.txtp.focus( );

		return false;

		}



		if ( document.signupForm.txtcp.value == "" )

		{

			alert( "Kindly enter a confirm password." );

			document.signupForm.txtcp.focus( );

			return false;

		}



		if ( document.signupForm. txtp.value != signupForm. txtcp.value )

		{

			alert( "Password and Confirm password must be same." );

			document.signupForm.txtp.value = "";

			document.signupForm.txtcp.value = "";



			document.signupForm.txtp.focus( );



			return false;

		}



		tmpPass = document.signupForm.txtp.value;



		goodPasswd = 1;



		for( var idx=0; idx< tmpPass.length; idx++ )

		{

			ch = tmpPass.charAt(idx);



			if( !((ch>='a') && (ch<='z')) && !((ch>='A') && (ch<='Z')) && !((ch>=0) && (ch <=9)) )

			{

				goodPasswd = 0;

				break;

			}

		}



		if( goodPasswd ==0 )

		{

			alert( "Password must contains only letters and digits." );

			document.signupForm.txtp.value="";

			document.signupForm.txtcp.value="";

			document.signupForm.txtp.focus();

			return false;

		}



	



return true;

}



//-->

</script>

<title>Set Admin Password</title>

</head>

<link href="style.css" rel="stylesheet" type="text/css">

<body>

<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">

  <tr>

    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">

      <tr>

        <td colspan="2"><?php include("adminheader.php");?></td>

      </tr>

      <tr>

        <td bgcolor="#FCECD6" width="20%" valign="top"><?php include("adminleft.php");?></td>

        <td width="80%" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">

          <tr>

            <td>&nbsp;</td>

            <td class="headertext">&nbsp;</td>

          </tr>

          <tr>

            <td width="3%"><span class="HeadText1"><img src="images/icon29.gif" width="19" height="16" /></span></td>

            <td width="97%" class="headertext">SET ADMIN PASSWORD </td>

          </tr>

        </table>

          <br />

          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">

            <tr>

              <td><div align="center" class="smalltextgrey">

                  <div align="left" class="smalltextred"> Below is the list of Administrator Password. You can   change/edit admin's password </div>

              </div></td>

            </tr>

          </table>

          <br />

          <form  name="signupForm" id="signupForm" method="post" action="adminpass_submit.php" onSubmit="return Check_form();">

            <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">

              <tr>

                <td colspan="2"><div align="center" class="error"><strong><?php $straction =  $_GET['action'];

		  if ($straction == "wrong old password") {

		  echo "<img src=pics/warning.png width=32 height=32 align=absmiddle>  You did enter Wrong Old Password";

		  } ?>

                </strong></div></td>

              </tr>

              <tr>

                <td><div align="right">Enter Old Password :</div></td>

                <td><input name="txtop" type="password" class="forminput" id="txtop" maxlength="50"></td>

              </tr>

              <tr>

                <td width="37%" bgcolor="#FFFFD5"><div align="right">Enter New Password : </div></td>

                <td width="63%" bgcolor="#FFFFD5"><input name="txtp" type="password" class="forminput" id="txtp" maxlength="50" onkeydown="nospaces(this)" />

                </td>

              </tr>

              <tr>

                <td bgcolor="#FFFFD5"><div align="right">Enter New Confirm Password : </div></td>

                <td bgcolor="#FFFFD5"><input name="txtcp" type="password" class="forminput" id="txtcp" maxlength="50"></td>

              </tr>

              <tr>

                <td>&nbsp;</td>

                <td><input type="submit" name="Submit" value="Submit" /></td>

              </tr>

              <tr>

                <td>&nbsp;</td>

                <td>&nbsp;</td>

              </tr>

            </table>

          </form>

		  <p>&nbsp;</p></td>

      </tr>

      <tr>

        <td colspan="2"><?php include("adminfooter.php");?></td>

      </tr>

    </table></td>

  </tr>

</table>

</body>

</html>

