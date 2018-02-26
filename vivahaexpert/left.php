<table width="100%" border="0" cellspacing="1" cellpadding="1">

  <tr>

    <td>

	<?php

session_start();

if(!isset($_SESSION['username']))

{ ?>

	normal

	

	

	<?

}

else

{
?>



      <table width="95%" border="0" cellspacing="2" cellpadding="2">

        <tr>

          <td><div align="center" class="ACTIVE"><strong>[<?php echo "Logged in " .$_SESSION['matriid']; ?>]</strong></div></td>

        </tr>

      </table>

      <!-- ''''''''''''''MEMBER ONLY''''''''''''''''''' -->

      <table width="170" border="0" cellspacing="0" cellpadding="0">

        <tr>

          <td height="21" background="pics/bglmtop.gif" >&nbsp;</td>

        </tr>

        <tr>

          <td background="pics/bglmmain.gif"><table class="white" cellspacing="0" cellpadding="0" width="160" 

                        align="center" border="0">

              <tbody>

                <tr>

                  <td valign="top"><div class="t">

                      <div class="b">

                        <div class="l">

                          <div class="r">

                            <div class="bl">

                              <div class="br">

                                <div class="tl">

                                  <div class="tr">

                                    <table class="white" cellspacing="0" cellpadding="0" width="160" 

                        align="center" border="0">

                                      <tbody>

                                        <tr>

                                          <td valign="top"><div class="t">

                                              <div class="b">

                                                <div class="l">

                                                  <div class="r">

                                                    <div class="bl">

                                                      <div class="br">

                                                        <div class="tl">

                                                          <div class="tr">

                                                            <table cellspacing="2" cellpadding="0" width="155" 

                              align="center" border="0">

                                                              <tbody>

                                                                <tr>

                                                                  <td 

                                height="20" colspan="2" align="right" valign="center"><div align="left"><strong>My Account </strong></div></td>

                                                                </tr>

                                                                

                                                                <tr>

                                                                  <td valign="center" align="middle" 

                                background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                

                                                                <tr>

                                                                  <td height="20" align="right" valign="center">

																  <img height="5" src="pics/Redarrowbullent.png" width="7" /></td>

                                                                  <td align="left" valign="center">

																 &nbsp;<a style="text-decoration:underline"  href="myprofile.php"><span class="bodylink1">My Profile</span></a></td>

                                                                </tr>

                                                                <tr>

                                                                  <td valign="center" align="middle" 

                                background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr>

                                                                  <td width="17" height="20" align="right" valign="center">

																  <img height="5" src="pics/Redarrowbullent.png" width="7" /></td>

                                                                  <td width="150" align="left" valign="center">&nbsp;<a style="text-decoration:underline"   href="modifyprofile.php"><span class="bodylink1">Modify My Profile </span></a> </td>

                                                                </tr>

                                                                <tr>

                                                                  <td valign="center" align="middle" 

                                background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr>

                                                                  <td valign="center" align="right" height="20">

																  <img height="5" src="pics/Redarrowbullent.png" width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"   href="changepassword.php"><span class="bodylink1">Change Password</span></a></td>

                                                                </tr>

                                                                <tr>

                                                                  <td valign="center" align="middle" 

                                background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr>

                                                                  <td valign="center" align="right" height="20">

																  <img height="5" src="pics/Redarrowbullent.png" width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"  href="delmyprofile.php"><span class="bodylink1">Delete Profile</span></a> </td>

                                                                </tr>

                                                                <tr>

                                                                  <td valign="center" align="middle" 

                                background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr>

                                                                  <td height="20" colspan="2" align="right" valign="center"><div align="left"><strong>My Search </strong></div></td>

                                                                </tr>

                                                                <tr>

                                                                  <td valign="center" align="right" height="20">

																  <img height="5" src="pics/Redarrowbullent.png" width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"  href="simplesearch.php"><span class="bodylink1">Quick Search </span></a></td>

                                                                </tr>

                                                                <tr>

                                                                  <td background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td valign="center" align="right" height="20">

																  <img height="5" src="pics/Redarrowbullent.png" width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"  href="adv_search.php"><span class="bodylink1">Advanced Search</span> </a></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td valign="center" align="right" height="20">

																  <img height="5" src="pics/Redarrowbullent.png" width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"   href="keyword_search.php"><span class="bodylink1">Keyword Search </span></a><a style="text-decoration:underline"   href="shareexperience.php"></a><a style="text-decoration:underline"   href="referafriend.php"></a></td>

                                                                </tr>

                                                                <tr>

                                                                  <td background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td valign="center" align="right" height="20"><img 

                                height="5" 

                                src="pics/Redarrowbullent.png" 

                                width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"   href="edu_search.php"><span class="bodylink1">Education Search</span></a></td>

                                                                </tr>

                                                                <tr>

                                                                  <td background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td valign="center" align="right" height="20"><img 

                                height="5" 

                                src="pics/Redarrowbullent.png" 

                                width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"  href="occu_search.php"><span class="bodylink1">Occupational  Search</span></a></td>

                                                                </tr>

                                                                <tr>

                                                                  <td background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td valign="center" align="right" height="20"><img 

                                height="5" 

                                src="pics/Redarrowbullent.png" 

                                width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"  href="id_search.php"><span class="bodylink1">Members ID Search</span></a></td>

                                                                </tr>

                                                                <tr>

                                                                  <td background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td valign="center" align="right" height="20"><img 

                                height="5" 

                                src="pics/Redarrowbullent.png" 

                                width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"   href="mymatches.php"><span class="bodylink1">My Matches</span></a></td>

                                                                </tr>

                                                                <tr>

                                                                  <td background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td height="20" colspan="2" align="right" valign="center"><div align="left"><strong>My Messages </strong></div></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td valign="center" align="right" height="20"><img 

                                height="5" 

                                src="pics/Redarrowbullent.png" 

                                width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"   href="myint.php"><span class="bodylink1">Interests Received</span></a></td>

                                                                </tr>

                                                                <tr>

                                                                  <td background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td valign="center" align="right" height="20"><img 

                                height="5" 

                                src="pics/Redarrowbullent.png" 

                                width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"   href="mymessage.php"><span class="bodylink1">Message Received </span></a></td>

                                                                </tr>

                                                                <tr>

                                                                  <td background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td height="20" colspan="2" align="right" valign="center"><div align="left"><strong>My Photo</strong></div></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td valign="center" align="right" height="20"><img 

                                height="5" 

                                src="pics/Redarrowbullent.png" 

                                width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"   href="addphoto.php"><span class="bodylink1">Manage My photo</span></a></td>

                                                                </tr>

                                                                <tr>

                                                                  <td background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td height="20" colspan="2" align="right" valign="center"><div align="left"><strong>My Horoscope </strong></div></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td valign="center" align="right" height="20"><img 

                                height="5" 

                                src="pics/Redarrowbullent.png" 

                                width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"   href="addhoros.php"><span class="bodylink1">Manage My Horoscope</span></a></td>

                                                                </tr>

                                                                <tr>

                                                                  <td background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td height="20" colspan="2" align="right" valign="center"><div align="left"><strong>My Membership </strong></div></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td valign="center" align="right" height="20"><img 

                                height="5" 

                                src="pics/Redarrowbullent.png" 

                                width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"   href="mymembership.php"><span class="bodylink1">My Membership </span></a></td>

                                                                </tr>

                                                                <tr>

                                                                  <td background="pics/reddot.gif" 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                                <tr valign="bottom">

                                                                  <td valign="center" align="right" height="20"><img 

                                height="5" 

                                src="pics/Redarrowbullent.png" 

                                width="7" /></td>

                                                                  <td valign="center" align="left">&nbsp;<a style="text-decoration:underline"   href="myorders.php"><span class="bodylink1">My Orders </span></a></td>

                                                                </tr>

                                                                

                                                                <tr>

                                                                  <td 

                                colspan="2" height="1"></td>

                                                                </tr>

                                                              </tbody>

                                                            </table>

                                                          </div>

                                                        </div>

                                                      </div>

                                                    </div>

                                                  </div>

                                                </div>

                                              </div>

                                          </div></td>

                                        </tr>

                                      </tbody>

                                    </table>

                                  </div>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>

                  </div></td>

                </tr>

              </tbody>

          </table></td>

        </tr>

        <tr>

          <td><img src="pics/bglmbot.gif" width="170" height="18" /></td>

        </tr>

      </table>

    <?

}

?></td>

  </tr>

</table>

