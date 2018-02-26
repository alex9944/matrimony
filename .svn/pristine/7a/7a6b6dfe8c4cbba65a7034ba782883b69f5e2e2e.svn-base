<?php include('protect.php'); ?>

<?php

include('../dbconnect.php'); 

//include('../config.php'); 

if(!$_POST['chkapprove'])

{

			//echo "You did not select";

			header('location:approve_inactive_to_active.php?Action=not check');

}





	foreach($_POST["chkapprove"] AS $val)

	{

	// UPDATE STATUS from InActive to Active

	$update1 = mysql_query("update register set status='Active' where matriid IN ('$val')")

	or die("Could not update data because ".mysql_error());

	}



foreach($_POST["chkapprove"] AS $val)

{

	// SEND ACTIVE EMAIL ALERTS TO MEMBERS

	//select all email addresses

	$sql = "SELECT * FROM register,siteconfig where MatriID  IN ('$val');";

	$result=@mysql_query($sql);

	

	//loop thru results and send the mail

	//while(list($ConfirmEmail)=@mysql_fetch_row($result ))

	while ($row = mysql_fetch_array($result)) 

	{

		//$to =$confirmemail; 

		$name  = $row['Name']; 

		$to  = $row['ConfirmEmail'];

		$matriid  = $row['MatriID'];

		$email  = $row['ConfirmEmail'];

		$pass = $row['ConfirmPassword'];
         $pass1 = $row['pass'];
		//$strpass = md5($pass); 

		$website = $row['Webname'];

		$webfriendlyname = $row['WebFriendlyname'];

		$webtomail = $row['ToEmail'];

		$webfrommail = $row['Fromemail'];

		$logo = $row['Weblogopath'];

		$membership_name   = $row['Status'];

		$from =  $row['Fromemail'];  // website config From Email

		$subject = "Your profile on ".$sitename." has been activated";

			

		$message = '<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div style="width:100% !important;-webkit-text-size-adjust:none;margin:0; padding:0;" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">

<center>

        	<table style="height:100% !important; margin:0; padding:0; width:100% !important;background-color:#FAFAFA;" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">

            	<tr>

                	<td align="center" valign="top">

					

                        

                        <table border="0" cellpadding="10" cellspacing="0" width="600" id="templatePreheader">

                            <tr>

                                <td valign="top" class="preheaderContent">

                                

                                	

                                    <table border="0" cellpadding="10" cellspacing="0" width="100%">

                                    	<tr>

                                        	<td valign="top">

                                            
                                            </td>

                                            

											<td valign="top" width="190">

                                            	

                                            </td>

											

                                        </tr>

                                    </table>

                                                       

                                </td>

                            </tr>

                        </table>

                       

                    	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">

                        	<tr>

                            	<td align="center" valign="top">

                                   

                                	<table style=" background-color:#FFFFFF;border-bottom:0;" border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">

                                        <tr>

                                            <td height="100" style="color:#202020;font-family:Arial;font-size:34px;font-weight:bold;line-height:100%;padding:0;text-align:center;vertical-align:middle;" class="headerContent">

											

											

											

											<img src="'.$site_url.'/title1.jpg" border="0"  />

											

											

                                            

                                            	

                                            </td>

                                      </tr>

                                    </table>

                                   

                                </td>

                            </tr>

                        	<tr>

                            	<td align="center" valign="top">

                                   

                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">

                                    	<tr>

                                            <td valign="top"  style="background-color:#FFFFFF;" class="bodyContent">

                                

                                                

                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">

                                                    <tr>

                                                        <td valign="top">

                                                          <div mc:edit="std_content00" style="color:#505050;font-family:Arial;font-size:14px;line-height:150%;text-align:left;">

                                                                <h2 style="color:#A50050;display:block;font-family:Arial;font-size:30px;font-weight:bold;line-height:100%;margin-top:0;margin-right:0;margin-bottom:0px;	margin-left:0;text-align:left;background-color:green;"  > Welcome to</h2>
																<h3><font color="#A50050">'.$sitename.' !</font>  </h3>

                                                                


                      <h3  style=" border-bottom: 2px solid #FFE0C4;"><strong> Made in Heaven, found here.</strong></h3>


      
                                                          
														   Your Name: '. $name.'
														   <br>
														   <br>
														   
														   Dear '. $name .',
														   <p>Congratulations! Your membership is now active on  our site.&nbsp; Now go log on and find your  special match! </p>
													
														   <p>'.$sitename.' prides itself on having a true authenticated active members database. We&rsquo;re a  growing website, powered by '.$sitename.'. Your membership profile may be  browsed by thousands of people on our site. We hope you find our service  invaluable assisting you with finding a great match! Spammer and Scammer are  not tolerated and remover by real people who constantly moderate every single  member who joins us. </p>
														   <p>And while you are  on the site we strongly encourage you to use all our search options and profile  matching tools and features. This means we can put you in direct contact with a  person who best matches your personal requirements in a future partner. </p>
														   <p>If you need further  assistance, please visit the extensive Help section of our site, where you will  find answers concerning updating, deleting, upgrading your profile, and using  our features.</p>
														   <p>'.$sitename.' Team takes this opportunity to wish you the very best of luck! </p>
														   <p>&nbsp;</p>
														   <table border="1" cellspacing="0" cellpadding="0">
                                                             <tr>
                                                               <td width="338" valign="top"><p>&nbsp;</p>
                                                                   <p>Here    are your login details. Keep them safe.<br>
                                                                     Your    email is: <a href="mailto:'.$email.'">'.$email.'</a><br>
                                                                     You    can also use Matrimony Profile ID to login: '.$matriid.' <br>
                                                                     Password:  '.$pass1.' <br>
                                                                     Our    web address is: <a href="'.$site_url.'">'.$site_url.'</a><br>
                                                                       <a href=\''.$site_url.'/login.php\'>Click here to Login</a></p>
                                                                 <p>&nbsp;</p></td>
                                                             </tr>
                                                           </table>
														   <p>With warm regards  from the <br>
														     '.$sitename.'  Team</p>
														   <p>&nbsp;</p>
														   <p>IMPORTAT:<br>
														     This is a '.$sitename.'  notification. Please do not reply to this email. This mail was created by  automation.<br>
  &nbsp;This email was sent to you because you have  agreed to receive emails from us. If you wish to stop receiving them send an  email with any subject and text to <a href="mailto:'.$siteadmin.'">'.$siteadmin.'</a> </p>
														   <p>&nbsp;</p>
														   <br>
                                                          </div>

														</td>

                                                    </tr>

                                                </table>

                                                                                              

                                            </td>


                                        </tr>

                                    </table>

                                   

                                </td>

                            </tr>

                        	<tr>

                            	<td align="center" valign="top">
<table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter">
                                    	<tr>
                                        	<td valign="top" class="footerContent">
                                            
                                                <!-- // Begin Module: Standard Footer \\ -->
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td colspan="2" valign="middle" id="social">
                                                            <div mc:edit="std_social">
                                                                &nbsp;<a href="#">follow on Twitter</a> | <a href="#">friend on Facebook</a>&nbsp;
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" width="350">
                                                            <div mc:edit="std_footer">
																<em>Copyright &copy; date(Y) '.$sitename.', All rights reserved.</em>
																<br />
																
																<br />
																<strong>Our mailing address is:</strong>
																<br />
																'.$sitename.'<br />

																Mobile: '.$site_number.' <br />
                                                            </div>
                                                        </td>
                                                        <td valign="top" width="190" id="monkeyRewards">
                                                            <div mc:edit="monkeyrewards">
                                                             
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" valign="middle" id="utility">
                                                            <div mc:edit="std_utility">
                                                                &nbsp;<a href="'.$site_url.'/unsubscribe.php">unsubscribe from this list</a> | <a href="*|UPDATE_PROFILE|*">update subscription preferences</a>&nbsp;
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Standard Footer \\ -->
                                            
                                            </td>
                                        </tr>
                                  </table>
                                   

                                	

                                                                                          

                              </td>

                          </tr>

                      </table>

                                   

                  </td>

              </tr>

    </table>

                        <br />

                    </td>

                </tr>

            </table>

  </center>

    </div>

';

			

	ini_set("SMTP",$smtphost);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";

			mail($to, $subject, $message, $headers); 
			
			//include('features_email');
		
		
		$message1 = '
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div style="width:100% !important;-webkit-text-size-adjust:none;margin:0; padding:0;" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
  <center>
    <table style="height:100% !important; margin:0; padding:0; width:100% !important;background-color:#FAFAFA;" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
      <tr>
        <td align="center" valign="top"><table border="0" cellpadding="10" cellspacing="0" width="600" id="templatePreheader">
            <tr>
              <td valign="top" class="preheaderContent"><table border="0" cellpadding="10" cellspacing="0" width="100%">
                  <tr>
                    <td valign="top"></td>
                    <td valign="top" width="190"></td>
                  </tr>
                </table></td>
            </tr>
          </table>
          <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
            <tr>
              <td align="center" valign="top"><table style=" background-color:#FFFFFF;border-bottom:0;" border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">
                  <tr>
                    <td height="100" style="color:#202020;font-family:Arial;font-size:34px;font-weight:bold;line-height:100%;padding:0;text-align:center;vertical-align:middle;" class="headerContent"><img src="'.$site_url.'/title1.jpg" border="0"  /> </td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                  <tr>
                    <td valign="top"  style="background-color:#FFFFFF;" class="bodyContent"><table border="0" cellpadding="20" cellspacing="0" width="100%">
                        <tr>
                          <td valign="top"><div mc:edit="std_content00" style="color:#505050;font-family:Arial;font-size:14px;line-height:150%;text-align:left;">
                              <h2 style="color:#A50050;display:block;font-family:Arial;font-size:30px;font-weight:bold;line-height:100%;margin-top:0;margin-right:0;margin-bottom:0px;	margin-left:0;text-align:left;background-color:green;"  > Welcome to</h2>
                              <h3><font color="#A50050">'.$sitename.'!</font> </h3>
                              
                              <hr>
                              <ul style="display:inline; list-style:none;" >
                                <li class="" style="float:left; list-style:none; color:#A50050;"><a style="color:#A50050; font-weight:bold;" class="" href="'.$site_url.'/mymatri.php">My Home</a> </li>
                                <li class="" style="float:left; list-style:none; color:#A50050;"><a style="color:#A50050; font-weight:bold;" href="'.$site_url.'/myprofile.php">&nbsp;&nbsp;My Profile </a> </li>
                                <li class="" style="float:left; list-style:none; color:#A50050;"><a style="color:#A50050; font-weight:bold;" href="'.$site_url.'/search_page.php">&nbsp;&nbsp;My Search</a> </li>                               
                                <li class="" style="float:left; list-style:none; color:#A50050;"><a style="color:#A50050; font-weight:bold;" href="'.$site_url.'/my_favourites.php">&nbsp;&nbsp;My Favourites</a> </li>
                                <li class="" style="float:left; list-style:none; color:#A50050;"><a style="color:#A50050; font-weight:bold;" href="'.$site_url.'/membershipform.php">&nbsp;&nbsp;Upgrade</a> </li>
                                <li class="" style="float:left; list-style:none; color:#A50050;"><a style="color:#A50050; font-weight:bold;" href="'.$site_url.'/faq.php">&nbsp;&nbsp;Help</a> </li>
                                <li class="" style="float:left; list-style:none; color:#A50050;"><a style="color:#A50050; font-weight:bold;" href="'.$site_url.'/contactus.php">&nbsp;&nbsp;Contact Us</a></li>
                               
                              </ul>
							  <div style="clear:both;"></div>
                              <hr>			  
							  
							  
							  <div id="breadcrumb_text"><b>You are Here:</b> <a style="color:#A50050; font-weight:bold;" href="'.$site_url.'/mymatri.php">My Home</a></div>
							  
							  <p style=" font-size:18px;">Nice to See you '. $name .',</p>
							  <table>
							   <tr><td>Profile No. '. $matriid .'</td><td>Membership Type: '. $membership_name .'</td></tr>
							  </table>
							  <p style="font-size:16px; color:#00B0F0;">Maximize Your Success on the Site</p>
							  <p style="color:#666666; padding:10px 0;">Complete the Following...</p>
							  
							  <ul style="margin:0; padding:0 20px;">
							   <li style="list-style:disc;color:#00B0F0; font-size:14px;">Upload Profile Picture</li>
							  </ul>
							  <p style="padding: 0 20px;; margin:0;">Profiles with pictures are viewed more often.</p>
							  
							  <ul style="margin:0; padding:0 20px;">
							   <li style="list-style:disc;color:#00B0F0; font-size:14px;">Log on Frequently</li>
							  </ul>
							  <p style="padding: 0 20px;; margin:0;">This will sort your profile to the top of the searches.</p>
							  
							  <ul style="margin:0; padding:0 20px;">
							   <li style="list-style:disc;color:#00B0F0; font-size:14px;">Complete Profile Text</li>
							  </ul>
							  <p style="padding: 0 20px;; margin:0;">Stand out with personal text.</p>
							  
							  <ul style="margin:0; padding:0 20px;">
							   <li style="list-style:disc;color:#00B0F0; font-size:14px;">Verify Your Profile</li>
							  </ul>
							  <p style="padding: 0 20px;; margin:0;">This process will sort your profile is genuine. </p>
							  
							  <p style="padding:10px 0;">And while you are on the site we strongly encourage you to use all our search options and profile matching tools and features. This means we can put you in direct contact with a person who best matches your personal requirements in a future partner. </p>
							  
							  <p style="padding:10px 0;">If you need further assistance, please visit the extensive Help section of our site, where you will find answers concerning updating, deleting, upgrading your profile, and using our features.</p>
							  
							  <p style="padding:10px 0;">'.$sitename.' Team takes this opportunity to wish you the very best of luck! </p>
							  
                              <p>With warm regards  from the <br>
                                '.$sitename.'  Team</p>
                              <p>&nbsp;</p>
                              <p>IMPORTAT:<br>
                                This is a '.$sitename.'  notification. Please do not reply to this email. This mail was created by  automation.<br>
                                &nbsp;This email was sent to you because you have  agreed to receive emails from us. If you wish to stop receiving them send an  email with any subject and text to <a href="mailto:'.$siteadmin.'">'.$siteadmin.'</a> </p>
                              <p>&nbsp;</p>
                              <br>
                            </div></td>
                        </tr>
                      </table></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td align="center" valign="top"><table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter">
                  <tr>
                    <td valign="top" class="footerContent"><!-- // Begin Module: Standard Footer \\ -->
                      <table border="0" cellpadding="10" cellspacing="0" width="100%">
                        <tr>
                          <td colspan="2" valign="middle" id="social"><div mc:edit="std_social"> &nbsp;<a href="#">follow on Twitter</a> | <a href="#">friend on Facebook</a>&nbsp; </div></td>
                        </tr>
                        <tr>
                          <td valign="top" width="350"><div mc:edit="std_footer"> <em>Copyright &copy; 2013 '.$sitename.', All rights reserved.</em> <br />
                              <br />
                              <strong>Our mailing address is:</strong> <br />
                              '.$sitename.'<br />
                              Mobile: '.$site_number.' <br />
                            </div></td>
                          <td valign="top" width="190" id="monkeyRewards"><div mc:edit="monkeyrewards"> </div></td>
                        </tr>
                        <tr>
                          <td colspan="2" valign="middle" id="utility"><div mc:edit="std_utility"> &nbsp;<a href="'.$site_url.'/unsubscribe.php">unsubscribe from this list</a> | <a href="*|UPDATE_PROFILE|*">update subscription preferences</a>&nbsp; </div></td>
                        </tr>
                      </table>
                      <!-- // End Module: Standard Footer \\ -->
                    </td>
                  </tr>
                </table></td>
            </tr>
          </table></td>
      </tr>
    </table>
    <br />
    </td>
    </tr>
    </table>
  </center>
</div>';
		
	ini_set("SMTP",$smtphost);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";
			mail($to, $subject, $message1, $headers); 

			

			

	}

}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Login</title>

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

        <td width="80%"><table width="100%" height="400" border="0" cellpadding="1" cellspacing="1" id="content">

          <tr>

            <td height="54" colspan="4" valign="middle"><div align="center"></div></td>

            </tr>

          <tr>

            <td colspan="4" valign="top" class="HeadText1"><p>&nbsp;</p>

              <table width="500" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC" class="GreenBox">

                <tr>

                  <form name="form1" id="form1" method="post" action="login_submit.php" onsubmit="return memloginvalidate()">

                    <td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">

                        <tr>

                          <td colspan="3" class="smalltextgrey"><div align="center"><strong>APPROVE CONFIRMATION </strong></div></td>

                        </tr>

                        <tr>

                          <td width="3">&nbsp;</td>

                          <td width="464" class="HeadText1"><div align="center" class="smalltextred">Profiles approved successful and confirmation mail sent successful. </div></td>

                          <td width="5">&nbsp;</td>

                        </tr>

                        <tr>

                          <td>&nbsp;</td>

                          <td>                            <?php 

						  foreach($_POST["chkapprove"] AS $val)

						  {

						 // echo "$val";

						  echo " <img src=images/redt.gif width=14 height=11 /> <a href=viewprofile.php?ID=$val> $val <a>- Approved Success <br><hr> ";



						  } ?>						  </td>

                          <td>&nbsp;</td>

                        </tr>

                        <tr>

                          <td>&nbsp;</td>

                          <td>&nbsp;</td>

                          <td>&nbsp;</td>

                        </tr>

                    </table></td>

                  </form>

                </tr>

              </table>              

              <p>&nbsp;</p>

              <p>&nbsp;</p>

              <p align="center">&nbsp;</p></td>

            </tr>

          

        </table></td>

      </tr>

      <tr>

        <td colspan="2"><?php include("adminfooter.php");?></td>

      </tr>

    </table></td>

  </tr>

</table>

</body>

</html>

