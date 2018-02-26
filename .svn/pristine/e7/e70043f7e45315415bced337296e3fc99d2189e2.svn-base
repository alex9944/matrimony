<?php include("memprotect.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?Php include("include/innerheadersection.php"); ?>

</head>



<body>

<?php include("config.php"); ?>

<?php 

$streiid = $_GET['eiid'];

$streiidgen = $_GET['gen'];

?>

<div id="wrapper"> 

  

  <!-- HEADER STARTS HERE ###################################################  -->

  <?Php include("include/menu.php"); ?>

  <!-- HEADER ENDS HERE ###################################################  --> 

  

  <!-- CONTENT AREA STARTS HERE ###################################################  --> 

  

  <!-- BREADCRUMBS STARTS HERE #####################################  -->

  <!-- <div id="breadcrumb">

    <ul class="breadcrumbs">

      <li class="left"></li>

      <li class="center">

        <div id="breadcrumb_text">You are Here: <span class="pathway"> <a href="#">My Home</a> <img alt="" src="images/icons/arrow_breadcrumbs.png"> Express  Interest</span> </div>

      </li>

      <li class="right"></li>

    </ul>

  </div> -->

  <!-- BREADCRUMBS ENDS HERE ########################################  -->

  
<div class="container">
  <div id="content_area" class="content-bg">

    <?Php include('include/loginsidebar.php'); 

	$row = mysql_fetch_array($memcontrol)

	?>
<div class="col-md-9">
    <div id="inner_right" > 

      

      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->

      <h1><a name="top" id="top"></a>

        </strong></h1>

      <div class="profile_block">

        <div class="header">

          <h3 class="float_left title">Express Interest</h3>

        </div>

        <div class="body" align="left">

          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">

            <tr>

              <td><table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">

                  <tr>

                    <td>Express Interest by sending pre-set messages to members   for free. You will be intimated <br />

                      by e-mail if someone is interested in you. Go   ahead, select a message and send a free interest.</td>

                  </tr>

                  <tr>

                    <td>&nbsp;</td>

                  </tr>

                  <tr>

                    <td><form name="eiform" id="eiform" action="express_int_send_submit.php"  method="post">

                        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">

                          <tbody>

                            <tr>

                              <td colspan="2" valign="center" bgcolor="#FFFFFF"><strong>Send Express Interest Message to : <?php echo $streiid ?></span>

                                <input name="txteiid" type="hidden" id="txteiid" value="<?php echo $streiid ?>">

                                <input name="txteiidgen" type="hidden" id="txteiidgen" value="<?php echo $streiidgen ?>">

                                </strong></td>

                            </tr>

                            <tr>

                              <td valign="center"><input name="INTERESTMSG" type="radio" id="INTERESTMSG" value="1" checked="checked"/></td>

                              <td valign="center">I am interested in   your profile. If you are interested in my profile, please contact   me.</td>

                            </tr>

                            <tr>

                              <td valign="center"><input type="radio" value="2" name="INTERESTMSG" id="INTERESTMSG"/></td>

                              <td valign="center">I have gone through   your details and feel we have lot in common. Would sure like to know your   opinion on this?</td>

                            </tr>

                            <tr>

                              <td valign="center"><input type="radio" value="3" name="INTERESTMSG" id="INTERESTMSG"/></td>

                              <td valign="center">You are someone   special I wish to know better. Please contact me at the   earliest.</td>

                            </tr>

                            <tr>

                              <td valign="center"><input type="radio" value="4" name="INTERESTMSG" id="INTERESTMSG"/></td>

                              <td valign="center">We found your   profile to be a good match. Please contact us to proceed   further.</td>

                            </tr>

                            <tr>

                              <td valign="center"><input type="radio" value="5" name="INTERESTMSG" id="INTERESTMSG"/></td>

                              <td valign="center">You are the kind of   person we were searching for. Please send us your contact   details.</td>

                            </tr>

                            <tr>

                              <td colspan="2" valign="center">
							   <script>
								function goBack()
								  {
								     alert('hi');
								     window.history.back()
								  }
								</script>
							   <a href="javascript:;" onclick="javascript: window.history.back();"><b><< Go Back</b></a>
							   
							   <input class="button-small square-orange uppercase" style="clear:both; border:0px; text-align:center; width:65px;" name="Submit" type="image" value="Submit"></td>

                            </tr>

                          </tbody>

                        </table>

                      </form></td>

                  </tr>

                  <tr>

                    <td><div align="right">Ready to take the next step?</div></td>

                  </tr>

                  <tr>

                    <td><table cellspacing="0" cellpadding="5" width="100%" border="0" runat="server" id="personal_msg_infobox" visible="false">

                        <tbody>

                          <tr>

                            <td width="331" align="center"><img height="211" alt="" src="pics/contact_profile.gif" width="321" border="0" /></td>

                            <td valign="top"><table width="100%">

                                <tbody>

                                  <tr>

                                    <td valign="top"><b><p>How   would you like to send your very own personally typed messages?</p>

                                      <p>Express   Interest is ideal to start communication but to get the contact details of a   member and to send personalized e-mails you must upgrade your membership to paid   membership. </p>

                                      <p><a href="membershipform.php">Click here</a> to become a paid   member.</p></b></td>

                                  </tr>

                                </tbody>

                              </table></td>

                          </tr>

                        </tbody>

                      </table></td>

                  </tr>

                  <tr>

                    <td>&nbsp;</td>

                  </tr>

                  <tr>

                    <td>How it works? <br />

                      An   e-mail will be sent to the opposite member (without revealing your contact   information) expressing your interest. The opposite member has the option to   'Accept' or 'Decline' your interest and you will be notified of his/her decision   via e-mail. Similarly, you have the option to 'Accept' or 'Decline' members who   express their interest in you. </td>

                  </tr>

                  <tr>

                    <td>&nbsp;</td>

                  </tr>

                </table></td>

            </tr>

          </table>

          <div class="hline2"></div>

        </div>

      </div>

      <?php include("include/afterloginmenu_active.php"); ?>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">

        <tr>

          <td class="pg_left"></td>

          <td height="48" align="center" valign="middle" class="pg_center"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="prof_det_toolbar" style="height:48px;">

              <tr>

                <td width="80" class="p_d_block1"><a href="#top" class="btn_goTop">Go Top</a></td>

                <td>&nbsp;</td>

              </tr>

            </table></td>

          <td class="pg_right"></td>

        </tr>

      </table>

      <br />

      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 

    </div>

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