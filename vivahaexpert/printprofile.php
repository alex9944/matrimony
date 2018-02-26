<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="css/template.css" rel="stylesheet" type="text/css" media="all" />
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<script type="text/JavaScript">

<!--

function MM_openBrWindow(theURL,winName,features) { //v2.0

  window.open(theURL,winName,features);

}

//-->

</script>
<style type="text/css">
.nameclass {
	color: #A50050;
	display: block;
	font-family: Arial;
	font-size: 14px;
	font-weight: bold;
	line-height: 100%;
	margin: 0 0 10px;
	text-align: left;
}
</style>
</head><body>
<?Php include("include/metatag.php"); ?>
<? 

// Database Connection 

include 'dbconnect.php'; 

$strid=$_GET['id']; 

$result = mysql_query("SELECT *,Left(profile,200) as profile1,date_format(Lastlogin,'%d-%M-%Y') as lastlogindate FROM register where matriid='$strid' ");

$count=@mysql_num_rows($result);

			// If result matched $myusername and $mypassword, table row must be 1 row

			

	 if($count!=1)

	 {

	 print "<script>";

    // print " self.location='searchoption.php?Action=refine';"; // Comment this line if you don't want to redirect
	
	 print " self.location='search_page.php?Action=refine';";
     print "</script>";

	 }

?>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="750" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="left"><div align="center" class="profiledetails">
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
                <tr>
                  <td><?php  while($row = mysql_fetch_array($result)){ ?>
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr class="hline3">
                        <td width="307" valign="middle"><div align="center"><img src="images/logo.png" width="309" height="64"><br /><br />
                            <img src="pics/print.gif" width="16" height="16" align="absmiddle"> <a href="javascript:print();">PRINT NOW</a> </div></td>
                        <td width="246"><p><strong>
		<?php echo $siteadmin; ?><br>
                        
	<?php echo $address; ?>		
						
	<a href="mailto:<?php echo $site_contact; ?>"><?php echo $site_contact; ?></a></strong></p></td>
                      </tr>
                    </table>
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="497" valign="top" align="left"><table width="400" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td colspan="3" align="left"><h3 class="nameclass"><?php  echo $row['Name']?></h3></td>
                                  </tr>
                                  <tr>
                                    <td width="97"><div align="left"><strong> MatriID</strong></div></td>
                                    <td width="3">:</td>
                                    <td width="240" align="left"><strong><?php  echo $row['MatriID']?></strong></span></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Posted by</div></td>
                                    <td>:</td>
                                    <td><span><?php  echo $row['Profilecreatedby']?></span></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Last login </div></td>
                                    <td>:</td>
                                    <td><span>
                                      <?php  echo $row['lastlogindate']?>
                                      </span></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Registered On </div></td>
                                    <td>:</td>
                                    <td><span>
                                      <?php  echo $row['Regdate']?>
                                      </span></td>
                                  </tr>
                                </table></td>
                              <td width="249"><div align="center">
                                  <table width="150" height="150" border="0" align="center" id="Photo1">
                                    <tr>
                                      <td><?php if($row['Photo1']=="nophoto.gif")

{ 
if($row['Gender'] == "Female") {
?>
                                        <img src="images/icons/noimage_girl.jpg" width="100" height="100" border="0" />
                                        <?Php
} else if($row['Gender'] == "Male") {
?>
                                        <img src="images/icons/noimage_man.jpg" width="100" height="100" border="0" />
                                        <?php } else {
?>
                                        <img src="pics/nophoto.gif" width="139" height="175" border="0" class="submenubox"/>
                                        <?  } }

else if($row['Photo1Approve']== "No")

{ ?>
                                        <img src="pics/bigPhoto1notapprove.gif" width="137" height="177" border="0" class="submenubox"/>
                                        <? }

else if($row['Photo1Protect']== "Yes")

{ 

?>
                                        <div align="center"><img src="pics/bigPhoto1protect.gif" width="137" height="177" border="0" class="submenubox" /> <br>
                                          <a href="#" onClick="MM_openBrWindow('Photo1passwordrequest.php?MatriID=<? echo $row['MatriID']; ?>','ppr','width=650,height=500')"> Request Photo1 </a> <br>
                                          <br>
                                          <a href="#" onClick="MM_openBrWindow('viewprotectPhoto1form.php?MatriID=<? echo $row['MatriID']; ?>','ppr','width=650,height=500')"> View Photo1 </a></div>
                                        <? }

else if( $row['Photo1Protect']!= "Yes" and $row['Photo1']!="nophoto.gif" )

{ ?>
                                        <div align="center"> <a href="#"> 
                                          <img src="memphoto1/<?php echo $row['Photo1']?>" width="120"  hspace="1" vspace="1" border="0" class="submenubox" onClick="MM_openBrWindow('viewPhoto1.php?id=<?php  echo $row['MatriID']?>&amp;Choice=1','vp','resizable=yes,width=600,height=450')" /> </a> </div>
                                        <? } ?>
                                        <br>
                                        <div align="center">
                                          <?php ///////////// HOROSCOPE VIEW ////// 

$strhoros = $row['HorosApprove'];

if ($strhoros =="Yes"){ ?>
                                          <a href="#" onClick="MM_openBrWindow('viewhoros.php?MatriID=<?php  echo $row['MatriID']?>','va','scrollbars=yes,width=770,height=620')">View Horoscope </a>
                                          <? } else { } ?>
                                        </div></td>
                                    </tr>
                                  </table>
                                </div></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                    <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
                      <tr>
                        <td><div align="center">
                            <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
                              <tr>
                                <td><div align="center"> 
                                    <table width="650" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
                                      <tbody>
                                        <tr  >
                                          <td colspan="6" valign="top" bgcolor=""  

><div align="left"><b>Basic  Information</b></div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td width="124" 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Name</div></td>
                                          <td width="4" 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Name']?>
                                              &nbsp;</div></td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">Gender </div></td>
                                          <td valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Gender']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Date of Birth </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td width="153"  valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['dateofbirth']?>
                                            </div></td>
                                          <td width="88" 

valign="top" bgcolor="FFFFFF"  

><div align="left">Age </div></td>
                                          <td width="6" valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Age']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Marital Status </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Maritalstatus']?>
                                            </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left"></div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left"></div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left"></div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Children Status </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['childrenlivingstatus']?>
                                            </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left"></div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left"></div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left"></div></td>
                                        </tr>
                                      </tbody>
                                    </table><table width="650" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
                                      <tbody>
                                        <tr  >
                                          <td colspan="6" 

valign="top"><div align="left"><b>Education and Occupation </b></div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td width="124" 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Education </div></td>
                                          <td width="5" 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td colspan="4" valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Education']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Edu Details </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td width="152" valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['EducationDetails']?>
                                            </div></td>
                                          <td width="88" 

valign="top" bgcolor="FFFFFF"  

><div align="left">Occupation </div></td>
                                          <td width="5" 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Occupation']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Employed in </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Employedin']?>
                                            </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">Income </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Annualincome']?>
                                            </div></td>
                                        </tr>
                                      </tbody>
                                    </table><table width="650" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
                                      <tbody>
                                        <tr  >
                                          <td colspan="6" 

valign="top"><div align="left"><b> Socio Religious Background </b></div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td width="124" 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Sub Caste</div></td>
                                          <td width="4" 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td colspan="4" valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Caste']?>
                                            </div>
                                            <div align="left"></div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Gothram</div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Gothram']?>
                                            </div>
                                            <div align="left"></div></td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">Star</div></td>
                                          <td valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Star']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Language </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Language']?>
                                            </div></td>
                                          <td width="88" 

valign="top" bgcolor="FFFFFF"  

><div align="left">Place of Birth </div></td>
                                          <td width="3" 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td width="159" 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['POB']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Moonsign </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Moonsign']?>
                                            </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">Time of Birth </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['TOB']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Dosham </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

> :</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Manglik']?>
                                            </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">Horos Match </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Horosmatch']?>
                                            </div></td>
                                        </tr>
                                      </tbody>
                                    </table><table width="650" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
                                      <tbody>
                                        <tr  >
                                          <td colspan="6" 

valign="top"><div align="left"><b>Physical Status and Lifestyle </b></div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td width="124" 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Height </div></td>
                                          <td width="5" 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td width="152" 

 valign="top" bgcolor="FFFFFF"  

><div align="left">
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
                                          <td width="88" valign="top" bgcolor="FFFFFF"  

><div align="left">Weight </div></td>
                                          <td width="3" valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Weight']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Blood Group</div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['BloodGroup']?>
                                            </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">Body Type</div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Bodytype']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Complexion </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Complexion']?>
                                            </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">Diet </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Diet']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Smoke</div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Smoke']?>
                                            </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">Drink </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Drink']?>
                                            </div></td>
                                        </tr>
                                      </tbody>
                                    </table><table width="650" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
                                      <tbody>
                                        <tr  >
                                          <td colspan="5" 

valign="top"><div align="left"><b>Profile Description </b></div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td width="124" 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;I am Looking For </div></td>
                                          <td width="5" 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td width="429"  colspan="3" valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Looking']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td colspan="5" 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1">
                                                <tr>
                                                  <td><a name="q1" id="q1"></a>
                                                    <?php 

		  $strprofile =  $row['Profile'];

		  $newprofile = wordwrap($strprofile, 15, "\n", true);

		  echo "$newprofile\n";

		  ?></td>
                                                </tr>
                                              </table>
                                            </div></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table width="650" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
                                      <tbody>
                                        <tr  >
                                          <td colspan="5" 

valign="top"><div align="left"><b>Hobies and Interests </b></div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td width="124" 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Hobbies</div></td>
                                          <td width="6" 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td  colspan="3" valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Hobbies']?>
                                              -
                                              <?php  echo $row['OtherHobbies']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Interest</div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td colspan="3" valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Interests']?>
                                              -
                                              <?php  echo $row['OtherInterests']?>
                                            </div></td>
                                        </tr>
                                      </tbody>
                                    </table><table width="650" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
                                      <tbody>
                                        <tr  >
                                          <td colspan="6" 

valign="top"><div align="left"><b>Family Details </b></div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Father Name </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td colspan="4" valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Fathername']?>
                                              &nbsp; <span class="textsmall1">
                                              <?php  echo $row['Fathersoccupation']?>
                                              </span> </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Mother Name </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td colspan="4" valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Mothersname']?>
                                              <span class="textsmall1">&nbsp;
                                              <?php  echo $row['Mothersoccupation']?>
                                              </span> </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td width="124" 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Family Values </div></td>
                                          <td width="6" 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Familyvalues']?>
                                            </div></td>
                                          <td width="88" valign="top" bgcolor="FFFFFF"  

><div align="left">Origin</div></td>
                                          <td valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td width="155" valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['FamilyOrigin']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Family Status </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['FamilyStatus']?>
                                            </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">Type </div></td>
                                          <td width="7" 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['FamilyType']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp; Brothers </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['noofbrothers']?>
                                            </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">Sisters </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['noofsisters']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;About Sibling's </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td colspan="4" 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['nbm']?>
                                              and
                                              <?php  echo $row['nsm']?>
                                            </div></td>
                                        </tr>
                                      </tbody>
                                    </table><table width="650" border="0" cellpadding="4" cellspacing="1" class="submenubox">
                                      <tbody>
                                        <tr  >
                                          <td colspan="6" 

valign="top"><div align="left"><b>Partner Preference </b></div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td width="121" 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Age </div></td>
                                          <td width="5" 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td colspan="4" valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['PE_FromAge']?>
                                              Between
                                              <?php  echo $row['PE_ToAge']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Looking For </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td width="155" valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['Looking']?>
                                            </div></td>
                                          <td width="88" 

valign="top" bgcolor="FFFFFF"  

><div align="left">Complexion</div></td>
                                          <td width="3" 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['PE_Complexion']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Height </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left"> <span class="style3">From</span>
                                              <?php  echo $row['PE_Height']?>
                                              &nbsp;&nbsp; <span class="style3">to</span>
                                              <?php  echo $row['PE_Height1']?>
                                            </div>
                                            <div align="left"></div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">Sub Caste </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['PE_Caste']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Eating habits </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['PE_Eatinghabbits']?>
                                            </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">Education</div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['PE_Education']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Country Living in </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['PE_Countrylivingin']?>
                                            </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">Resident Status </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">
                                              <?php  echo $row['PE_Residentstatus']?>
                                            </div></td>
                                        </tr>
                                        <tr bgcolor="#ffffff">
                                          <td 

valign="top" bgcolor="FFFFFF"  

><div align="left">&nbsp;&nbsp;Preference </div></td>
                                          <td 

valign="top" bgcolor="FFFFFF"  

>:</td>
                                          <td colspan="4" 

valign="top" bgcolor="FFFFFF"  

><div align="left"><span  >
                                              <?php  echo $row['PartnerExpectations']?>
                                              </span></div></td>
                                        </tr>
                                      </tbody>
                                    </table></div></td>
                              </tr>
                            </table>
                            
                            
                            <?php $strha = $row['HorosApprove']; 

if($strha == "Yes") { ?><table width="98%" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
                              <tbody>
                                <tr bgcolor="" >
                                  <td colspan="2" valign="top" bgcolor=""  

><div align="left"><strong>HOROSCOPE : </strong></div></td>
                                </tr>
                                <tr bgcolor="" >
                                  <td valign="top" bgcolor=""  

>Star :
                                    <?php  echo $row['Star']; ?></td>
                                  <td valign="top" bgcolor=""  

>Raashi :
                                    <?php  echo $row['Moonsign']; ?></td>
                                </tr>
                                <tr bgcolor="" >
                                  <td valign="top" bgcolor=""  

>Birth Place  :
                                    <?php  echo $row['POB']; ?>
                                    ,&nbsp;&nbsp; Birth Time  :
                                    <?php  echo $row['TOB']; ?></td>
                                  <td valign="top" bgcolor=""  

>Thosam :
                                    <?php  echo $row['thosam']; ?></td>
                                </tr>
                                <tr bgcolor="" >
                                  <td valign="top" bgcolor=""  

><table 

                        border="1" cellpadding="5" cellspacing="0" bordercolor="#666666" class="tblLight">
                                      <tr>
                                        <td id="rTD1" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['r1']; ?></td>
                                        <td id="rTD2" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['r2']; ?></td>
                                        <td id="rTD3" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['r3']; ?></td>
                                        <td id="rTD4" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['r4']; ?></td>
                                      </tr>
                                      <tr>
                                        <td id="rTD5" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['r5']; ?></td>
                                        <td align="middle" colspan="2" rowspan="2"><div align="center"><font size="3"><b>&#2992;&#3006;&#2970;&#3007;</b></font></div></td>
                                        <td id="rTD6" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['r6']; ?></td>
                                      </tr>
                                      <tr>
                                        <td id="rTD7" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['r7']; ?></td>
                                        <td id="rTD8" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['r8']; ?></td>
                                      </tr>
                                      <tr>
                                        <td id="rTD9" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['r9']; ?></td>
                                        <td id="rTD10" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['r10']; ?></td>
                                        <td id="rTD11" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['r11']; ?></td>
                                        <td id="rTD12" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['r12']; ?></td>
                                      </tr>
                                    </table></td>
                                  <td valign="top" bgcolor=""  

><table 

                        border="1" cellpadding="5" cellspacing="0" bordercolor="#666666" class="tblLight">
                                      <tr>
                                        <td id="aTD1" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['a1']; ?></td>
                                        <td id="aTD2" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['a2']; ?></td>
                                        <td id="aTD3" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['a3']; ?></td>
                                        <td id="aTD4" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['a4']; ?></td>
                                      </tr>
                                      <tr>
                                        <td id="aTD5" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['a5']; ?></td>
                                        <td align="middle" colspan="2" rowspan="2"><div align="center"><font size="3"><b>&#2949;&#2990;&#3021;&#2970;&#2990;&#3021;</b></font></div></td>
                                        <td id="aTD6" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['a6']; ?></td>
                                      </tr>
                                      <tr>
                                        <td id="aTD7" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['a7']; ?></td>
                                        <td id="aTD8" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['a8']; ?></td>
                                      </tr>
                                      <tr>
                                        <td id="aTD9" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['a9']; ?></td>
                                        <td id="aTD10" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['a10']; ?></td>
                                        <td id="aTD11" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['a11']; ?></td>
                                        <td id="aTD12" align="middle" width="80" height="80">&nbsp;
                                          <?php  echo $row['a12']; ?></td>
                                      </tr>
                                    </table></td>
                                </tr>
                              </tbody>
                            </table>
                            <?php }  else { } ?>
                          </div></td>
                      </tr>
                    </table>
                    <?php }  ?>
                    
                    <!-- RESULTS END --></td>
                </tr>
              </table>
            </div></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>