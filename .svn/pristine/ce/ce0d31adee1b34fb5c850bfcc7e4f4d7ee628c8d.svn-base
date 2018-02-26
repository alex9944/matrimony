<?php include("config.php"); ?>

<?php

include('dbconnect.php'); 

$update1 = mysql_query("update register set matriid=concat(prefix,id),age=(YEAR(CURDATE())-YEAR(dob)) - (RIGHT(CURDATE(),5)<RIGHT(dob,5))")

or die("Could not update data because ".mysql_error());

?>





<?php 

/////////////////// SEND MEMBER ALERT FIRST EMAIL  //////////////////////////////////////////////	

$stremail = $_GET['emid'];



$result = mysql_query("SELECT * FROM register,siteconfig where ConfirmEmail = '$stremail' ");

while($row = mysql_fetch_array($result))

  {

$website = $row['Webname'];

$webfriendlyname = $row['WebFriendlyname'];

$logo = $row['Weblogopath'];

$strname = $row['Name'];

$strmatriid = $row['MatriID'];

$strpassword = $_SESSION['ConfirmPassword'];

$strsitename = $info['Webname'];

$to = $_GET['emid'];

$from = $info['ContactEmail'];



$subject = "Your $strsitename profile is under validation";

//$message = "<html><style type='text/css'><!--.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }--></style><body><table width='600' border='0' cellspacing='0' cellpadding='0'><tr><td background=$website/pics/email_top.gif width=600 height=22><img src='$logo' border=0></td></tr><tr><td background=$website/pics/email_middle.gif><table width=600 border=0 cellspacing=2 cellpadding=2><tr><td width=10>&nbsp;</td><td width=562 rowspan=3 valign=top><table width=573 border=0 align=center cellpadding=2 cellspacing=2><tr><td width=562 valign=top class=style3>Dear $strname,</td></tr><tr><td width=562 valign=top class=style3>Welcome to $strsitename,</td></tr><tr><td width=562 valign=top class=style3> Matrimony ID : $strmatriid</td></tr><tr><td valign=top class=style3><p>Thank you for choosing our matrimony services to find your life partner.</p><p>$strsitename, the Most Successful Matrimony Portal for Indians.</p><p>I take this opportunity to wish you the very best in your partner search. Should you require further assistance in helping you decide what's best for you, do not hesitate to contact our 24X7 support.</p><p>Warm regards<br>$strsitename's Team<br></p></td></tr><tr><td valign=top class=style3>&nbsp;</td></tr><tr><td valign=top class=style2>You are receiving this mail as a registered member of $strsitename. This is a computer auto generated message. Please do not Reply.</td></tr></table><p style='font:normal 12px Arial, MS Sans serif, tahoma;color:#000000;'></p></td><td width=8>&nbsp;</td></tr><tr></tr><tr></tr></table></td></tr><tr><td><img src=$website/pics/email_bottom.gif width=600 height=22></td></tr></table></body></html>";

$message = '<html>
<head>
<style>
body {
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
}
.smallclass {
	font-size:10px;
}
.emaila {
	color: #A50050;
	text-decoration: none;
}
.emaila:hover {
	color: #A50050;
	text-decoration: underline;
}
.emailhline3 {
	border-bottom: 2px solid #FFE0C4;
	padding-bottom: 3px;
	padding-top: 3px;
}
.emailprofiledetails {
	background-color: #FFFBF8;
	border: 1px solid #FAD6A6;
	padding:20px;
}
h1, .h1 {
	color:#A50050;
	display:block;
	font-family:Arial;
	font-size:34px;
	font-weight:bold;
	line-height:100%;
	margin-top:0;
	margin-right:0;
	margin-bottom:10px;
	margin-left:0;
	text-align:left;
}
.sgreen {
	color:#066;
}
.nred {
	color:#F00;
}
</style>
</head>
<body>
<table width="563" border="0" align="center" cellspacing="0" cellpadding="0" class="emailprofiledetails">
  <tr>
    <td><table width="553" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="left">Thank for registering!<br />
            <hr size="1" style="background-color:#FFE0C4; color:#FFE0C4" /></td>
        </tr>
        <tr>
          <td align="left"><h1 class="h1">Welcome to</h1></td>
        </tr>
        <tr>
          <td class="emailhline3" align="left"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left" valign="middle" width="319"><img src="images/logo.png" width="309" height="64"></td>
                <td align="left" valign="middle" class="sgreen"><b> from Joseph<font class="nred">Kappil</font> J<font class="nred">K</font></b></td>
              </tr>
            </table><br/></td>
        </tr>
        <tr><td align="justify"><br/>Your Name: $strname.<br/>
Your Matrimony ID: $strmatriid<br/><br/>
Dear $strname.,<br/>
Thank you for joining us. At '.$sitename.', we understand deeply that you are up for an ideal life partner. You&acute;ve come to the right place! Your membership is now under validation. As soon as we complete this process your profile activation notice will be sent to you via email. From there on, you can go logon directly and find your special match!  We wish you the best of luck!<br/><br/>
With warm regards from the<br/>
'.$sitename.' Team<br/><br/>

</td></tr>
<tr><td align="justify"><font class="nred">IMPORTAT:</font><br/>
<font class="smallclass">This is a   notification. Please do not reply to this email. This mail was created by automation.
This email was sent to you because you have agreed to receive emails from us. If you wish to stop receiving them send an email with any subject and text to <a href="mailto:'.$sitename.'" class="emaila">'.$sitename.'</a></font>
      </table></td>
  </tr>
</table>
</body>
</html>';

		// To send HTML mail, the Content-type header must be set

		

		ini_set("SMTP",$smtphost);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";

		$success = mail($to,$subject, $message, $headers); 

		

 }	

	

?>













<HTML>



<HEAD>

<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<TITLE><?php echo $info['Title']; ?></TITLE>

<LINK href="style.css" rel="stylesheet" type="text/css">

<STYLE type="text/css">

<!--

.style6 {font-family: Verdana;

	font-size: 8.5pt;

	color: #424542;

}

.style1 {color: #FFFFFF}

.style5 {font-size: 12px}

-->

</STYLE>

</HEAD>





<BODY class="body">









<DIV align="center">



  <TABLE width="780" border="0" cellpadding="0" cellspacing="0">

    <!--DWLayoutTable-->

    <TR>

      <TD width="780" height="164">

        <TABLE width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="Tborder">

          <!--DWLayoutTable-->

          <TR>

            <TD height="37" colspan="2">

			<?php include("header.php");?>		</TD>

            </TR>

          <TR>            </TR>

          <TR>

            <TD height="17" colspan="2" valign="top">

			

							

							<?php include("topmenu.php");?>

							

							

							</TD>

          </TR>

          <TR bgcolor="#FFFFFF">

            <TD colspan="2" valign="top"><TABLE width="100%" border="0" cellpadding="0" cellspacing="0">

              <TR>

                <TD>&nbsp;</TD>

                <TD ><DIV align="right"></DIV></TD>

              </TR>

              <TR>

                <TD>&nbsp;</TD>

                <TD class="heading1"><DIV align="center">

                  <table width="72%" height="20" border="0" align="left" cellpadding="0" cellspacing="0">

                    <tr>

                      <td width="38%" background="images/middlelinefinal.jpg"><div align="left">&nbsp;&nbsp;<strong>Register Confirm </strong></div></td>

                      <td width="62%">&nbsp;</td>

                    </tr>

                  </table>

                </DIV></TD>

              </TR>

              <TR>

                <TD><SPAN class="style1">&nbsp;&nbsp;&nbsp;&nbsp;</SPAN></TD>

                <TD valign="top"><DIV class=submenubox style="WIDTH:490" >

                    <DIV class=submenuContent style="WIDTH: 100%">

                      <DIV align="justify">

                        <DIV align="center" class="h2black">

                          <CENTER>

                            Thank you for Registering with <?php echo $info['WebFriendlyname']; ?>

                          </CENTER>

                        </DIV>

                        <P align="left"><STRONG>Congratulations</STRONG> Your FREE <?php echo $info['WebFriendlyname']; ?> profile has been created. It will be online as soon as we review it and confirmation message will send to you.</P>

                        <P align="left">-Free membership allows you to search and initiate contact. </P>

                      </DIV>

                    </DIV>

                </DIV></TD>

              </TR>

              <TR>

                <TD height="18">&nbsp;</TD>

                <TD valign="top">&nbsp;</TD>

              </TR>

            </TABLE>

			 <?php include("paymentoption.php");?>

			</TD>

          </TR>

          <TR>

            <TD  colspan=5 1></TD>

          </TR>

          

          <TR>

            <?php include("footer.php");?>

          </TR>

        </TABLE>

    </TD>

    </TR>

  </TABLE>

</DIV>



</BODY>



</HTML>

