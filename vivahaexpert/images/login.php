<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>
<link type="text/css"  rel="stylesheet" href="css/ui-elements-1.css" />
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
        <div id="breadcrumb_text">You are Here:
<span class="pathway">
<?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Member Login</span>
</div>
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
        
          <h2 class="float_left title">
          <span class="black" style="color:#333;">Member Login</span></h2>
        </div>
        <div class="body">
<FORM action="memlogin_submit.php" method="post" name="form1" id="form1">	

	<table width="97%" border="0" cellpadding="0" cellspacing="0" >

      

      

      <tr>

        <td width="53%" colspan="2" valign="top" ><br />

            <table width="100%" border="0" cellpadding="4" cellspacing="2">

              <tr>

                <td colspan="2" >

<?php 

$StrAction=$_GET['Action'];

if ($StrAction == "wrong")

{

	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";

	echo "<tr>";

	echo "<td class=Alert><strong>Please Correct the Following errors.</strong> </td>";

	echo "</tr>";

	echo "<tr>";

	echo "<td><ul class=Alert>";

	echo "<li>Invalid Matri ID / E-mail OR Incorrect Password.</li>";

	echo "<li>Make sure that the Caps Lock or A light is switched off on your keyboard   before trying again. </li>";

	echo "<li>To login use your email OR Matri ID e.g. abc@rediffmail.com. </li>";

	echo "<li>Please Specify Password. </li>";

	echo "</ul></td>";

	echo "</tr>";
	echo "<tr class='hline3'>
            <td>&nbsp;</td>
          </tr>";

	echo "</table>";

}

?>				</td>

              </tr>

              

              <tr>

                <td colspan="2" >Kindly provide your Login ID &amp; Password to enjoy uninterupted services</td>

              </tr>

              <tr>

                <td colspan="2" ><span class="textnormal"></span></td>

              </tr>

              <tr>

                <td width="15%" ><div align="right">ID/Email&nbsp;&nbsp;&nbsp; </div></td>

                <td width="35%" ><input name="txtusername" type="text" Class="textbox1" maxlength="50"  /></td>

              </tr>

              <tr>

                <td ><div align="right">Password&nbsp;&nbsp;&nbsp; </div></td>

                <td ><input name="txtpassword" type="password" Class="textbox1" id="txtpassword" maxlength="50"  /></td>

              </tr>

              <tr height="7">

                <td >&nbsp;</td>

                <td >                  <input name="Submit" type="submit" value="Submit" src="pics/lgn-button.gif" />
				<input name="input" type="button" class="btn1 clear" value="click here">
				</td>

              </tr>

              <tr>

                <td colspan="2"  ></td>

              </tr>

              <tr>

                <td colspan="2" ><div align="center"><a href="forgotpassword.php">Forgot Your Password?</a> <a href="forgotpassword.aspx"></a> </div></td>

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

	

	</FORM>
            </div>
        
        <div class="footer">
        <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a>
        </div>
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
