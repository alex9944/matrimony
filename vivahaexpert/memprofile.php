<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>

<body>
<?php include("config.php"); ?>
<?php 
$strid=$_GET['id']; 
$result = mysql_query("SELECT *,Left(profile,200) as profile1,date_format(Lastlogin,'%d-%M-%Y') as lastlogindate FROM register where matriid='$strid' ");
$count=@mysql_num_rows($result);

			// If result matched $myusername and $mypassword, table row must be 1 row
	 if($count!=1)
	 {
	 print "<script>";
     print " self.location='searchoption.php?Action=refine';"; // Comment this line if you don't want to redirect
     print "</script>";
	 }
?>
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Express Interest</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/loginsidebar.php'); 
	$row = mysql_fetch_array($memcontrol)
	?>
    <div id="inner_right"> 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a> </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Express Interest</h3>
        </div>
        <div class="body" align="left">
          <table width="100%" height="0" border="0" align="center" cellpadding="1" cellspacing="1" id="content" class="tbl_profiledetails">
            <tr>
              <td colspan="4" valign="top" ><table width="100%" border="0" cellpadding="2" cellspacing="2">
                  <tr>
                    <td><?php /////////////////// EXPRESS INTEREST MSG //////////////////////////////////////////

	$streiid = $_GET['eiid'];

	$expresssql = mysql_query("Select * from expressinterest where id='$streiid' ");

	 while($row = mysql_fetch_array($expresssql))

	{ 

		echo "Hi I am " . $row['eisender']?>
                      ,<br />
                      <strong><?php echo $row['eimsg']?></strong> <br />
                      <br />
                      <table width="350" border="0" cellspacing="0" cellpadding="0" align="center">
                        <tr>
                          <td width="50%"><div align="left">
                              <form action="ei_recieved_pending_eiaccept.php" method="post">
                                <input name="txttoid" type="hidden" id="txttoid" value="<?php echo $row['eisender'] ?>" />
                                <input name="txteimid" type="hidden" id="txteimid" value="<?php echo $streiid ?>" />
                                If you interested Click <br />
                                <?php /*?><input name="Submit2" type="image" value="Submit" src="pics/expint-accept-button.gif" /><?php */?>
								<input name="Submit2" type="submit" value="Accept" style="background:#589F2F; padding:5px; color:#fff; height:25px;"  />
                              </form>
                            </div></td>
                          <td width="50%"><div align="left">
                              <form action="ei_recieved_pending_eideclined.php" method="post">
                                <input name="txttoid1" type="hidden" id="txttoid2" value="<?php echo $row['eisender'] ?>" />
                                <input name="txteimid1" type="hidden" id="txteimid2" value="<?php echo $streiid ?>" />
                                If you not interested Click <br />
                                <?php /*?><input name="Submit3" type="image" value="Submit" src="pics/expint-decline-button.gif" /><?php */?>
								<input name="Submit3" type="submit" value="Decline" style="background:#F1000B; padding:5px; color:#fff; height:25px;" />
                              </form>
                            </div></td>
                        </tr>
                      </table>
                      <br />
                      This is my Profile Below...
                      <? }

	?></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td><?php  while($row = mysql_fetch_array($result)){ ?>
                <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
                  <tr>
                    <td><div align="right"><img src="pics/print.gif" width="16" height="16" align="absmiddle"> <a href="printprofile.php?id=<?php  echo $row['MatriID']; ?>">Print this Profile</a> </div></td>
                  </tr>
                </table>
                <br />
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="379" valign="top" ><table width="100%" border="0" cellspacing="2" cellpadding="1">
                              <tr>
                                <td width="14" class="h1dp">&nbsp;</td>
                                <td width="356" ><div align="left" class="paratext"><strong> MatriID:
                                    <?php  echo $row['MatriID']?>
                                    </strong></div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="left" class="Partext1">Posted by:
                                    <?php  echo $row['Profilecreatedby']?>
                                  </div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="left" class="Partext1">Last login :
                                    <?php  echo $row['lastlogindate']?>
                                  </div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="left" class="Partext1">Registered On:
                                    <?php  echo $row['Regdate']?>
                                  </div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="left"></div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="left" class="Partext1">I am
                                    <?php  echo $row['Age']?>
                                    ,
                                    <?php  echo $row['Maritalstatus']?>
                                    <?php  echo $row['Religion']?>
                                    <?php  echo $row['Gender']?>
                                    living in<br />
                                    <?php  echo $row['State']?>
                                    ,
                                    <?php  echo $row['Country']?>
                                  </div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="left"></div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="left">
                                    <?php 

		  $strprofile =  $row['profile1'];

		  $newprofile = wordwrap($strprofile, 8, "\n", true);

		  echo "$newprofile\n";

		  ?>
                                    <span class="smalltextred">&nbsp;... more</span> <a href='#q1'>&raquo;&raquo;</a></div></td>
                              </tr>
                            </table></td>
                          <td><div align="center">
                              <table width="150" height="150" border="0" align="center" id="photo">
                                <tr>
                                  <td><?php if($row['Photo1']=="nophoto.gif")

{ ?>
                                    <img src="memphoto1/nophoto.gif" width="139" height="175" border="0"/>
                                    <? }

else if($row['Photo1Approve']== "No")

{ ?>
                                    <img src="pics/bigphotonotapprove.gif" width="137" height="177" border="0"/>
                                    <? }

else if($row['PhotoProtect']== "Yes")

{ 

?>
                                    <div align="center"><img src="pics/bigphotoprotect.gif" width="137" height="177" border="0" /> <br>
                                      <a href="#" onClick="MM_openBrWindow('photopasswordrequest.php?MatriID=<? echo $row['MatriID']; ?>','ppr','width=650,height=500')"> Request Photo </a> <br>
                                      <br>
                                      <a href="#" onClick="MM_openBrWindow('viewprotectphotoform.php?MatriID=<? echo $row['MatriID']; ?>','ppr','width=650,height=500')"> View Photo </a> </div>
                                    <? }

else if( $row['PhotoProtect']!= "Yes" and $row['Photo1']!="nophoto.gif" )

{ ?>
                                    <div align="center"> <a href="#"> <img width="150" height="150" src="memphoto1/<?php echo $row['Photo1']?>" alt="<?php  echo $row['MatriID']?>" hspace="1" vspace="1" border="0" onClick="MM_openBrWindow('view_photo.php?id=<?php  echo $row['MatriID']?>&amp;Choice=1','vp','resizable=yes,width=600,height=450')" /> </a> </div>
                                    <? } ?>
                                    <br>
                                    <div align="center">
                                      <?php ///////////// HOROSCOPE VIEW ////// 

$strhoros = $row['HorosApprove'];

if ($strhoros =="Yes"){ ?>
                                      <a href="#" onClick="MM_openBrWindow('viewhoros.php?MatriID=<?php  echo $row['MatriID']?>','va','scrollbars=yes,width=620,height=550')">View Horoscope </a>
                                      <? } else { } ?>
                                    </div></td>
                                </tr>
                              </table>
                            </div></td>
                        </tr>
                      </table></td>
                  </tr>
                </table>
                <br />
                <table width="588" border="0" align="center" cellpadding="0" cellspacing="0" id="contacttbl">
                  <tr>
                    <td width="290"><?php 

					$stractionei=$_GET['action'];

					if($stractionei =="ei")

					{

					}

					else 

					{ ?>
                      <form action="express_int.php" method="post" name="ei" id="ei">
                        <input name="txteiid" type="hidden" id="txteiid" value="<?php  echo $row['MatriID']?>" />
                        <input name="Submit" type="image" value="Submit" src="pics/Ei.gif" />
                        <input name="txteigender" type="hidden" id="txteigender" value="<?php  echo $row['Gender']?>" />
                        <? } ?>
                      </form></td>
                    <td width="284"><? 

// View Address For PAID MEMBERS (Should be into Membership and contact Allocation) ////

$adview = mysql_query("SELECT MatriID,Noofcontacts,Status FROM register WHERE DATEDIFF( CURRENT_DATE, Memshipexpirydate ) <1 AND Status <> 'InActive' AND Status <> 'Active' AND Noofcontacts >0 AND MatriID ='".$_SESSION['username']."' ");

if(mysql_num_rows($adview) == 0)

{

	// NO CONTACT			

} 

else 

{

$_SESSION['viewprofile'] = $row["MatriID"];	

?>
                      <form >
                        <div align="right">
                        <a href="#"> <img src="pics/address.gif" border="0" onClick="MM_openBrWindow('address.php','address','width=350,height=300')"></a>
                        <div class="highslide-html-content" id="highslide-html" style="width: 300px">
                          <div class="highslide-move" style="border: 0; height: 18px; padding: 2px; cursor: default"> <a href="#" onClick="return hs.close(this)" class="control">Close</a></div>
                          <div class="highslide-body"></div>
                        </div>
                        <?			

} ?>
                      </form></td>
                  </tr>
                </table>
                <?php 

session_start();

if(!isset($_SESSION['username'])) {  ?>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><hr size="1" /></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="0" align="center" cellpadding="2" cellspacing="3">
                        <tr>
                          <td class="bigtext">Register FREE </td>
                        </tr>
                        <tr>
                          <td><span class="h3r"><a href="registration1.php">Register FREE</a> </span> to Contact this member. </td>
                        </tr>
                        <tr>
                          <td><img src="pics/add-inter-bullet.gif" width="6" height="6" /> Send/receive Unlimited Personalised 
                            
                            Messages to this member. </td>
                        </tr>
                        <tr>
                          <td><img src="pics/add-inter-bullet.gif" width="6" height="6" /> View the Verified contact phone numbers, Address
                            
                            of this member.</td>
                        </tr>
                        <tr>
                          <td><img src="pics/add-inter-bullet.gif" width="6" height="6" /> Chat with a prospective partner.</td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td><hr size="1" /></td>
                  </tr>
                </table>
                <? } ?>
                <br />
                <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
                  <tr>
                    <td><div align="center">
                        <table width="100%" border="0" cellpadding="0" cellspacing="2">
                          <tbody>
                            <tr>
                              <td colspan="4"><div align="left">
                                  <h3 class="hline3"><strong>Basic  Information</strong></h3>
                                </div></td>
                            </tr>
                            <tr>
                              <td width="139"><div align="left">Name :</div></td>
                              <td colspan="3"><div align="left">
                                  <?php  echo $row['Name']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td valign="top"><div align="left">Gender :</div></td>
                              <td width="159"><div align="left">
                                  <?php  echo $row['Gender']?>
                                </div></td>
                              <td valign="top"><div align="left">Age :</div></td>
                              <td width="190"><div align="left">
                                  <?php  echo $row['Age']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td valign="top"><div align="left">Date of Birth  :</div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['DOB']?>
                                </div></td>
                              <td valign="top"><div align="left">Place of Birth :</div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['POB']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td valign="top"><div align="left">Marital Status :</div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['Maritalstatus']?>
                                </div></td>
                              <td valign="top" width="102"><div align="left">Children Status :</div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['childrenlivingstatus']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td width="139"><div align="left">Time of Birth  :</div></td>
                              <td colspan="3"><div align="left">
                                  <?php  echo $row['TOB']?>
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <br />
                        <table width="100%" border="0" cellpadding="0" cellspacing="2">
                          <tbody>
                            <tr>
                              <td colspan="4" valign="top"><div align="left">
                                  <h3 class="hline3"><strong>Education and Occupation</strong></h3>
                                </div></td>
                            </tr>
                            <tr>
                              <td width="138"><div align="left">Education :</div></td>
                              <td colspan="3"><div align="left">
                                  <?php  echo $row['Education']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td valign="top"><div align="left">Edu Details  :</div></td>
                              <td width="160"><div align="left">
                                  <?php  echo $row['EducationDetails']?>
                                </div></td>
                              <td width="102"><div align="left">Occupation :</div></td>
                              <td width="190"><div align="left">
                                  <?php  echo $row['Occupation']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td valign="top"><div align="left">Employed in   :</div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['Employedin']?>
                                </div></td>
                              <td valign="top"><div align="left">Annual Income  :</div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['Annualincome']?>
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <br />
                        <table width="100%" border="0" cellpadding="0" cellspacing="2">
                          <tbody>
                            <tr>
                              <td colspan="4" valign="top"><div align="left">
                                  <h3 class="hline3"><strong>Socio Religious Background</strong></h3>
                                </div></td>
                            </tr>
                            <tr>
                              <td width="140"><div align="left">Religion :</div></td>
                              <td  valign="top" width="157"><div align="left">
                                  <?php  echo $row['Religion']?>
                                </div></td>
                              <td width="103"><div align="left">Caste/Division :</div></td>
                              <td width="190"><div align="left">
                                  <?php  echo $row['Caste']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td valign="top"><div align="left">Subcaste/Sec :</div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['Subcaste']?>
                                </div></td>
                              <td valign="top"><div align="left">Gothram:</div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['Gothram']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td valign="top"><div align="left">Language :</div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['Language']?>
                                </div></td>
                              <td valign="top"><div align="left">Star :</div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['Star']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td valign="top"><div align="left">Moonsign : </div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['Moonsign']?>
                                </div></td>
                              <td valign="top"><div align="left">Horoscope Match  : </div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['Horosmatch']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td valign="top"><div align="left">Manglik/Dosham : </div></td>
                              <td colspan="3"><div align="left">
                                  <?php  echo $row['Manglik']?>
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <br />
                        <table width="100%" border="0" cellpadding="0" cellspacing="2">
                          <tbody>
                            <tr>
                              <td colspan="4" valign="top"><div align="left">
                                  <h3 class="hline3"><strong>Physical Status and Lifestyle</strong></h3>
                                </div></td>
                            </tr>
                            <tr>
                              <td width="140"><div align="left">Height :</div></td>
                              <td valign="top" width="156"><div align="left">
                                  <?php  
$strheight = $row['Height'];
if($strheight =="1") { echo "Below 4ft"; }
else if($strheight =="2") { echo "4ft 6in"; }
else if($strheight =="3") { echo "4ft 7in"; }
else if($strheight =="4") { echo "4ft 8in"; }
else if($strheight =="5") { echo "4ft 9in"; }
else if($strheight =="6") { echo "4ft 10in"; }
else if($strheight =="7") { echo "4ft 11in"; }
else if($strheight =="8") { echo "5ft"; }
else if($strheight =="9") { echo "5ft 1in"; }
else if($strheight =="10") { echo "5ft 2in"; }
else if($strheight =="11") { echo "5ft 3in"; }
else if($strheight =="12") { echo "5ft 4in"; }
else if($strheight =="13") { echo "5ft 5in"; }
else if($strheight =="14") { echo "5ft 6in"; }
else if($strheight =="15") { echo "5ft 7in"; }
else if($strheight =="16") { echo "5ft 8in"; }
else if($strheight =="17") { echo "5ft 9in"; }
else if($strheight =="18") { echo "5ft 10in"; }
else if($strheight =="19") { echo "5ft 11in"; }
else if($strheight =="20") { echo "6ft"; }
else if($strheight =="21") { echo "6ft 1in"; }
else if($strheight =="22") { echo "6ft 2in"; }
else if($strheight =="23") { echo "6ft 3in"; }
else if($strheight =="24") { echo "6ft 4in"; }
else if($strheight =="25") { echo "6ft 5in"; }
else if($strheight =="26") { echo "6ft 6in"; }
else if($strheight =="27") { echo "6ft 7in"; }
else if($strheight =="28") { echo "6ft 8in"; }
else if($strheight =="29") { echo "6ft 9in"; }
else if($strheight =="30") { echo "6ft 10in"; }
else if($strheight =="31") { echo "6ft 11in"; }
else if($strheight =="32") { echo "7ft"; }
else if($strheight =="33") { echo "Above 7ft"; }
?>
                                </div></td>
                              <td width="104"><div align="left">Weight :</div></td>
                              <td width="190"><div align="left">
                                  <?php  echo $row['Weight']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td valign="top"><div align="left">Blood Group:</div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['BloodGroup']?>
                                </div></td>
                              <td valign="top"><div align="left">Body Type:</div></td>
                              <td  valign="top"><div align="left">
                                  <?php  echo $row['Bodytype']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td valign="top"><div align="left">Complexion :</div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['Complexion']?>
                                </div></td>
                              <td valign="top"><div align="left">Diet :</div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['Diet']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td valign="top"><div align="left">Smoke : </div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['Smoke']?>
                                </div></td>
                              <td valign="top"><div align="left">Drink  : </div></td>
                              <td valign="top"><div align="left">
                                  <?php  echo $row['Drink']?>
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <br />
                        <table width="100%" border="0" cellpadding="0" cellspacing="2">
                          <tbody>
                            <tr>
                              <td colspan="4" valign="top"><div align="left">
                                  <h3 class="hline3"><strong>Profile Description</strong></h3>
                                </div></td>
                            </tr>
                            <tr>
                              <td width="106"><div align="left">I am Looking : </div></td>
                              <td width="442" colspan="3"><div align="left">
                                  <?php  echo $row['Looking']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td colspan="4"><div align="left"><a name="q1" id="q1"></a>
                                  <?php 

		  $strprofile =  $row['Profile'];

		  $newprofile = wordwrap($strprofile, 8, "\n", true);

		  echo "$newprofile\n";

		  ?>
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <br />
                        <table width="100%" border="0" cellpadding="0" cellspacing="2">
                          <tbody>
                            <tr>
                              <td colspan="4" valign="top"><div align="left">
                                  <h3 class="hline3"><strong>Family Details</strong></h3>
                                </div></td>
                            </tr>
                            <tr>
                              <td width="140"><div align="left">Family Details:</div></td>
                              <td colspan="3"><div align="left">
                                  <?php  echo $row['FamilyDetails']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td  

valign="top"><div align="left">Family Values  :</div></td>
                              <td width="157"><div align="left">
                                  <?php  echo $row['Familyvalues']?>
                                </div></td>
                              <td width="103"><div align="left">Family Type :</div></td>
                              <td width="190"><div align="left">
                                  <?php  echo $row['FamilyType']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td  

valign="top"><div align="left">Family Status  :</div></td>
                              <td><div align="left">
                                  <?php  echo $row['FamilyStatus']?>
                                </div></td>
                              <td><div align="left">Father Occupation  : </div></td>
                              <td><div align="left">
                                  <?php  echo $row['Fathersoccupation']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td  

valign="top"><div align="left">Mother Occupation  :</div></td>
                              <td><div align="left">
                                  <?php  echo $row['Mothersoccupation']?>
                                </div></td>
                              <td><div align="left">Family Origin  : </div></td>
                              <td><div align="left">
                                  <?php  echo $row['FamilyOrigin']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td  

valign="top"><div align="left">No Of Brothers  :</div></td>
                              <td><div align="left">
                                  <?php  echo $row['noofbrothers']?>
                                </div></td>
                              <td><div align="left">No Of Sisters  : </div></td>
                              <td><div align="left">
                                  <?php  echo $row['noofsisters']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td  

valign="top">No Of Brothers Married : </td>
                              <td><div align="left">
                                  <?php  echo $row['nbm']?>
                                </div></td>
                              <td><div align="left"><span >No Of Sisters Married : </span></div></td>
                              <td><div align="left">
                                  <?php  echo $row['nsm']?>
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <br />
                        <table width="100%" border="0" cellpadding="0" cellspacing="2">
                          <tbody>
                            <tr>
                              <td colspan="4" valign="top"><div align="left">
                                  <h3 class="hline3"><strong>Partner Preference</strong></h3>
                                </div></td>
                            </tr>
                            <tr>
                              <td width="139"><div align="left">Age :</div></td>
                              <td colspan="3"><div align="left">
                                  <?php  echo $row['PE_FromAge']?>
                                  Between
                                  <?php  echo $row['PE_ToAge']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td  

valign="top"><div align="left">Looking For  :</div></td>
                              <td width="156"><div align="left">
                                  <?php  echo $row['Looking']?>
                                </div></td>
                              <td width="105"><div align="left">Complexion  : </div></td>
                              <td width="190"><div align="left">
                                  <?php  echo $row['PE_Complexion']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td  

valign="top"><div align="left">Height  :</div></td>
                              <td><div align="left">
                                  <?php  echo $row['PE_Height']?>
                                </div></td>
                              <td><div align="left">Partner Preference   : </div></td>
                              <td><div align="left">
                                  <?php  echo $row['PartnerExpectations']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td  

valign="top"><div align="left">Religion  :</div></td>
                              <td><div align="left">
                                  <?php  echo $row['PE_Religion']?>
                                </div></td>
                              <td><div align="left">Caste  : </div></td>
                              <td><div align="left">
                                  <?php  echo $row['PE_Caste']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td  

valign="top"><div align="left">Eating habits   :</div></td>
                              <td><div align="left">
                                  <?php  echo $row['PE_Eatinghabbits']?>
                                </div></td>
                              <td><div align="left">Education  : </div></td>
                              <td><div align="left">
                                  <?php  echo $row['PE_Education']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td  

valign="top"><div align="left">Country Living in   :</div></td>
                              <td><div align="left">
                                  <?php  echo $row['PE_Countrylivingin']?>
                                </div></td>
                              <td><div align="left">Resident Status   : </div></td>
                              <td><div align="left">
                                  <?php  echo $row['PE_Residentstatus']?>
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <br />
                        <table width="100%" border="0" cellpadding="0" cellspacing="2">
                          <tbody>
                            <tr>
                              <td colspan="4" valign="top"><div align="left">
                                  <h3 class="hline3"><strong>Hobies and Interests</strong></h3>
                                </div></td>
                            </tr>
                            <tr>
                              <td width="142"><div align="left">Hobbies :</div></td>
                              <td width="458" colspan="3"><div align="left">
                                  <?php  echo $row['Hobbies']?>
                                  -
                                  <?php  echo $row['OtherHobbies']?>
                                </div></td>
                            </tr>
                            <tr>
                              <td><div align="left">Interest : </div></td>
                              <td colspan="3"><div align="left">
                                  <?php  echo $row['Interests']?>
                                  -
                                  <?php  echo $row['OtherInterests']?>
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                      </div></td>
                  </tr>
                </table>
                <?php } mysql_close($con); ?>
                
                <!-- RESULTS END --></td>
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
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>