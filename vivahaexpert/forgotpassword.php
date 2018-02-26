<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript">

function validate()

  {

if(document.form1.email.value == "" ) {

alert("Kindly enter your E-mail ID.");

document.form1.email.focus();

return false;

}





else if (document.form1.email.value.length != 0)

{

	var e_check  = document.form1.email.value;



	if(document.form1.email.value.indexOf(" ") != -1)	{

	alert("Kindly enter correct E-Mail ID without any spaces in it.");

	document.form1.email.focus();

	return false;

	}



	if(document.form1.email.value.indexOf("@") == -1)	{

	alert("Invalid E-Mail ID! Kindly enter correct E-Mail ID.");

	document.form1.email.focus();

	return false;

	}

   	validarr = document.form1.email.value.split("@");



   	if(validarr[0].length==0)   	{

   	alert("Invalid E-Mail ID! Kindly enter the correct E-mail ID.");

   	document.form1.email.focus();

   	return false;

   	}

  	if(validarr[1].indexOf("@") >=0)   	{

   	alert("Invalid E-Mail ID! Kindly enter the correct E-mail ID.");

   	document.form1.email.focus();

   	return false;

   	}

   	if(validarr[1].length==0)   	{

   	alert("Invalid E-Mail ID! Kindly enter the correct E-mail ID.");

   	document.form1.email.focus();

   	return false;

   	}

   	if(validarr[1].length != 0)   	{



		if(validarr[1].indexOf(".") == -1)     	{

		alert("Invalid E-Mail ID! Kindly enter the correct E-mail ID.");

		document.form1.email.focus();

		return false;

		}

		validemail = validarr[1].split(".");

		 if(validemail[0].length==0)   		{

		 alert("Invalid E-Mail ID! Kindly enter the correct E-mail ID.");

		 document.form1.email.focus();

		 return false;

		}

		if(validemail[1].length==0)  		{

		alert("Invalid E-Mail ID! Kindly enter the correct E-mail ID.");

		document.form1.email.focus();

		return false;

		}

	}   // end of of validemail

} // end of valid email-id check





		

	}



</script>
</head>

<body>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <a href="#">Home</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">How it Works</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/innerpagesidebar.php'); ?>
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
          <h2 class="float_left title"> <span class="black" style="color:#333;">Forgot Password</span></h2>
        </div>
        <div class="body">
	<form action="forgotpassword_submit.php" method="post" name="form1" id="form1" onSubmit="return validate()">	
            <table width="97%" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" >
              <tr>
                <td width="53%" colspan="2" valign="top" ><br />
                  <table width="100%" border="0" cellpadding="4" cellspacing="2" class="tbl_profiledetails">
  <tr>

    <td colspan="2"><?php 

$StrAction=$_GET['Action'];

if ($StrAction == "err")

{

	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";

	echo "<tr>";

	echo "<td class=Alert><strong>Please Correct the  errors.</strong> </td>";

	echo "</tr>";

	echo "<tr>";

	echo "<td class=Alert>";

	echo "Your specified emailid does not exist in our site. OR Invalid Email.";

	echo "</td>";

	echo "</tr>";

	echo "</table>";

}

?></td>

  </tr>
                    <tr>
                      <td colspan="2" ><div align="left">Kindly provide your <strong>Email ID</strong> to get your Forgot password. Your new Password will be send to your email.</div></td>
                    </tr>
                    <tr>
                      <td colspan="2" >&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="29%" ><div align="left">Email ID:</div></td>
                      <td width="71%" ><div align="left"><input name="email" type="text" Class="textbox1" id="email" maxlength="50"  /></div></td>
                    </tr>
                    <tr>
                      <td >&nbsp;</td>
                      <td ><div align="left">
					  <input class="button-small square-orange uppercase" style="clear:both; border:0px; text-align:center; font-size:10px; font:bold;"  name="Submit" type="image" value="Submit" onclick="return validateloginform();">
					  <!--<input name="Submit" type="image" value="Submit" src="pics/submit_but.gif" />--></div></td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                  </table></td>
                <td width="2%" ><img src="pics/vertical_line.jpg" width="1" height="272" /></td>
                <td width="45%" valign="top" ><br />
                  <table cellspacing="2" cellpadding="2">
                    <tr>
                      <td colspan="2"><strong>Not Yet a Member? <a href="registration1.php">Join Now</a></strong></td>
                    </tr>
                    <tr>
                      <td colspan="2">Registration with <?php echo $info['Webname']; ?> will provide you with   the following privileges:</td>
                    </tr>
                    <tr>
                      <td colspan="2" height="10"></td>
                    </tr>
                    <tr>
                      <td align="right" width="23%">1.</td>
                      <td width="77%">View Profiles (Free)</td>
                    </tr>
                    <tr>
                      <td align="right">2.</td>
                      <td>Contact Profiles</td>
                    </tr>
                    <tr>
                      <td align="right">3.</td>
                      <td>Get Match Alerts</td>
                    </tr>
                    <tr>
                      <td align="right">4.</td>
                      <td>Upload Photo(s)</td>
                    </tr>
                    <tr>
                      <td align="right">5.</td>
                      <td>Privacy Assured</td>
                    </tr>
                    <tr valign="center" align="middle">
                      <td colspan="2" height="50"><div align="center"><a href="registeration1.php" class="btn_registerfree"><img src="images/btn_registerfree.gif" width="136" height="46" alt="register free" /></a></div></td>
                    </tr>
                  </table></td>
              </tr>
            </table>
          </form>
        </div>
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
      </div>
      <div class="banner_h_std"><img src="images/H_STD_BANNER.gif" width="468" height="80" /></div>
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
    </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>
