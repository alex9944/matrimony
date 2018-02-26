<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<?php include("config.php"); ?>
<script type="text/JavaScript">

<!--

function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}



function MM_validateForm() { //v4.0

  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;

  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);

    if (val) { nm=val.name; if ((val=val.value)!="") {

      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');

        if (p<1 || p==(val.length-1)) errors+=' '+nm+' must contain valid e-mail.\n';

      } else if (test!='R') { num = parseFloat(val);

        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';

        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');

          min=test.substring(8,p); max=test.substring(p+1);

          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';

    } } } else if (test.charAt(0) == 'R') errors += ''+nm+' is required.\n'; }

  } if (errors) alert('Please Correct the Following:\n'+errors);

  document.MM_returnValue = (errors == '');

}

//-->

</script>
</head>

<body>
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST")

{



$strname = $_POST['name'];

$strsitename = $info['Webname'];

$to = $info['ToEmail'];

$from = $_POST['email'];

$subject = "Feedback from $strsitename";

$strmessage = $_POST['comments'];

$message = "

<table width=573 border=0 align=center cellpadding=2 cellspacing=2>

  <tr>

    <td width=562 valign=top class=style3>Dear Sir/madam </td>

  </tr>

  

  <tr>

    <td valign=top class=style3><p><br>

      $strmessage</p>

      <p>Warm regards<br>

        $strname<br>

      </p></td>

  </tr>

</table>

		";

		// To send HTML mail, the Content-type header must be set

		ini_set("SMTP",$smtphost);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";

		$success = mail($to,$subject, $message, $headers); 

		 print "<script>";

     		 print "self.location='logoutconfirm.php?action=success';"; 

     		 print "</script>";

		

 	

}

?>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
 <!--  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <a href="#">Home</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Log Out</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div> -->
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
   <div class="container">
    <div id="inner_right"  style="width:100%!important"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
          <h2 class="float_left title"> <span class="black" style="color:#C8060E;">Logout Confirmation</span></h2>
        </div>
        <div class="body"> 
          <!-- START LEFT PART -->
        <?php /*?> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><div align="left">Logged Out</div></td>
              <td>&nbsp;</td>
            </tr>
          </table><?php */?>
          <table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="3" style="text-align:center; color:green;"><span style="float:left;"><img src="pics/tick.png" /></span><strong style="float:left; padding:3px 0 0 5px;">You have successfully logged out... </strong></td>
                  </tr>
                  <tr>
                    <td  valign="top" width="53%" >
					  
					  
					  
                      <table width="100%" border="0" cellpadding="4" cellspacing="2">
                        <tr>
                          <td colspan="2" ><div align="left">Dear Member, <br />
                              You have logged out from <?php echo $info['Webname']; ?> Thank you for using our services. </div></td>
                        </tr>
                      </table>
					  
					  <table width="100%" border="0" cellpadding="4" cellspacing="2">
                        <tr>
                          <td colspan="2" ><div align="left"><a href="login.php"><b>Click here</b></a> to log on to <?php echo $siteadmin;?></div></td>
                        </tr>
                      </table>
					  
					  
					  </td>
					  
					  <td width="2%" ><img src="pics/vertical_line.jpg" width="1" height="272" /></td> 
					  
                    <td width="45%" valign="top" ><div align="center">
                        <?php 

				$straction = $_GET['action'];

				if ($straction == "success")

				{

				echo "<div class='Alert' style='width:100%;'>Feedback has been Sent Success:\n<ul>";

				echo "</ul></div>"; 

				} 

				else if ($straction == "error")

				{

				echo "<div class='Alert' style='width:100%;'>Error has been occured\n<ul>";

				echo "<li>Invalid Email.</li>\n";

				echo "</ul></div>"; 

				} 

				?>
                      </div>
                      <form action="<?=$_SERVER['PHP_SELF']?>" method="post" onSubmit="MM_validateForm('name','','R','email','','RisEmail','comments','','R');return document.MM_returnValue">
                        <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" id="Table13" class="tbl_profiledetails">
                          <tbody>
                            <tr>
                              <td><div align="left"><span class="smallbold3"><strong>Send your Feedback Here: </strong></span></div></td>
                            </tr>
                            <tr>
                              <td>Your Name:<br>
                                <input id="name" name="name" class="textbox1"/></td>
                            </tr>
                            <tr>
                              <td>Your Email:<br>
                                <input id="email" name="email" class="textbox1"/></td>
                            </tr>
                            <tr>
                              <td><p>
                                  <textarea id="comments" name="comments" rows="4" cols="30">Share your opinion, comments and criticism</textarea>
                                </p></td>
                            </tr>
                            <tr>
                              <td><div align="left">
<!--                                  <input name="Submit" type="submit" class="bodysg"  id="btnSubmit" value="Send Feedback" onserverclick="Button_Click"  runat="server" />--><input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Send feedback" type="image" value="Send feedback" alt="Send feedback" onclick="return Button_Click();">
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                      </form>
                      <br></td>
                  </tr>
                </table></td>
            </tr>
          </table>
          
          <!-- END LEFT PART --> 
        </div>
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
      </div>
      <div class="banner_h_std"><img src="images/H_STD_BANNER.gif" width="468" height="80" /></div>
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
    </div>
  </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>