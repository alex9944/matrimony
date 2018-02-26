<?php include('protect.php'); ?>
<script>
function caste_resetRF(val){ 
alertdo(val);
document.getElementById('Language').selectedIndex = 0;
}

function alertdo(flag)  { 
if(flag == 1) {
document.getElementById("caste").innerHTML = 'Caste/Division ';
} else if(flag == 2  || flag == 10 || flag == 11) {
document.getElementById("caste").innerHTML = 'Sect/Division';
} else if(flag == 12 || flag == 13  || flag == 14 || flag == 3) {
document.getElementById("caste").innerHTML = 'Denomination/Division';
} else {
document.getElementById("caste").innerHTML = 'Caste/Division ';
}


}

</script>
<? 
$Language =array('','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu','','Badaga');
				
$caste =array('-Select-','Hindu','Muslim - Shia','Muslim - Sunni','Muslim - Others','Christian - Catholic','Christian - Orthodox','Christian - Protestant','Christian - Others','Sikh','Jain - Digambar','Jain - Shwetambar','Jain - Others','Parsi','Buddhist','Inter-Religion','No Religious Belief');		

  $religion = array("1"=>"Hindu","2"=>"Muslim - Shia","3"=>"Muslim - Sunni","4"=>"Muslim - Others","5"=>"Christian - Catholic","6"=>"Christian - Orthodox","7"=>"Christian - Protestant","8"=>"Christian - Others","9"=>"Sikh","10"=>"Jain - Digambar","11"=>"Jain - Shwetambar","12"=>"Jain - Others","13"=>"Parsi","14"=>"Buddhist","15"=>"Inter-Religion","16"=>"No Religious Belief");
/*echo "<pre>";
print_r($Language);
exit;*/
// Database Connection 

include '../dbconnect.php'; 

$strmid=$_GET['ID']; 

//$result = mysql_query("SELECT *,Left(profile,200) as profile1 FROM register where MatriID='$strmid' ");

$result = mysql_query("SELECT *,profile as profile1 FROM register where MatriID='$strmid' ");

if(isset($_REQUEST["approve"]))
{
	$update1 = mysql_query("update register set status='Active' where matriid IN ('$strmid')");
	$msg = "Approved Successfully.";
}

?>



<HTML>

<HEAD>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Login</title>

<script type="text/javascript" src="../scripts/jquery1.6.2_production.js"></script>

<script type="text/JavaScript">

<!--

function MM_openBrWindow(theURL,winName,features) { //v2.0

  window.open(theURL,winName,features);

}

//-->

</script>

<script>
function do_request(lang,religion,caste,divid)
{ 
 $.post("generateCaste3.php?lang="+lang+"&rel="+religion+"&cast="+caste, function(data) {
 
 //alert("generateCaste3.php?lang="+lang+"&rel="+religion+"&cast="+caste );
	if(data!=''){
	//alert(data);
	document.getElementById(divid).innerHTML = data;
	}});

}
</script>

<script type="text/javascript">
	
	function read_more()
	{
	
		if(document.getElementById('show_more').style.display=='none') {
		document.getElementById('read_more').innerHTML='Less';
		document.getElementById('show_more').style.display='block'; }
		else
		{
		document.getElementById('show_more').style.display='none';
		document.getElementById('read_more').innerHTML='More';
		}
	
	}

</script>
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

        <td width="80%"><table width="98%" height="0" border="0" align="center" cellpadding="1" cellspacing="1" id="content">

          <tr>

            <td height="0" colspan="4" valign="middle">&nbsp;</td>
          </tr>

          <tr>

            <td width="73%" height="0" valign="middle">            <table align="center">
            <tr><td>
               <div align="center"><span class="BlueBoxheader">VIEW PROFILE </span></div>
               </td><td valign="middle">
               <?php if(isset($msg)) { echo $msg; } else { ?>
               <form action="viewprofile.php?ID=<?php echo $_GET['ID']; ?>" method="post" name="approvefrm" id="approvefrm" style="padding:0px; margin:0px;"><input type="hidden" name="approve" id="approve" value="true" /><input type="submit" value="Approve" class="green-button" name="Submit"></form>
               <?php } ?>
               </td></tr></table></td>

            <td width="13%" height="0" valign="middle"><a href="approve_inactive_to_active.php">Go back to approve</a></td>
            <td width="5%" height="0" valign="middle">&nbsp;</td>
            <td width="9%" height="0" valign="middle">&nbsp;</td>
          </tr>

          <tr>

            <td colspan="4" valign="top" class="HeadText1"><!-- RESULTS START -->

                <?php  

				while($row = mysql_fetch_array($result)){ ?>

                <br />

                

                <table width="7"  border="0" align="center" cellpadding="0" cellspacing="0" class="blackbox">

                <tr>

                  <td><div align="center">

                    <table width="100%" border="0" cellpadding="0" cellspacing="0">

                      <tbody>

                        <tr>

                          <td 

width="20%" valign="top" bgcolor="#E8FDA6" style="PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; PADDING-TOP: 5px"><div align="left" class="headertext"><strong> <span class="smalltextgrey"><img src="images/icon7.gif" width="19" height="16" /></span> Profile</strong></div></td>

                            <td valign="top" bgcolor="#E8FDA6" style="PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; PADDING-TOP: 5px"><div align="right" class="headertext"><strong><?php  echo $row['Status']?>

                            </strong></div>

                                <div align="right"></div>

                              <div align="center"><a href="#"></a></div>

                              <div align="right"></div></td>
                          </tr>

                        <tr>

                          

                          <td height="2" colspan="2" background="images/dot.gif" class="smalltextgrey"></td>				
                          </tr>
                        </tbody>
                      </table>

                    <!--		<div style="padding-left:0px;padding-top:5px;padding-bottom:5px;"><font class="leftmenuhead"><font color="#EF6F1F">View Profile</font></div>-->

                    <table width="100%" border="0" cellspacing="0" cellpadding="0">

                      <tr>

                        <td width="379" valign="top" ><table width="100%" border="0" cellspacing="3" cellpadding="0">

                          <tr>

                            <td width="10"><div align="left"></div></td>

                                <td width="290" class="h1dp"><div align="left" class="paratext"><strong>

                                  MatriID: 

                                  <?php  echo $row['MatriID']?>

                                  </strong></div></td>
                              </tr>

                          <tr>

                            <td><div align="left"></div></td>

                                <td><div align="left" class="Partext1">Posted by:

                                  <?php  echo $row['Profilecreatedby']?>

                                  </div></td>
                              </tr>

                          <tr>

                            <td><div align="left"></div></td>

                                <td><div align="left" class="Partext1">Last login :

                                  <?php echo $row['lastlogin']; ?>

                                  </div></td>
                              </tr>

                          <tr>

                            <td><div align="left"></div></td>

                                <td><div align="left" class="Partext1">Registered On:

                                  <?php  echo $row['Regdate']?>

                                  </div></td>
                              </tr>

                          <tr>

                            <td><div align="left"></div></td>

                                <td><div align="left"></div></td>
                              </tr>

                          <tr>

                            <td><div align="left"></div></td>

                                <td><div align="left" class="Partext1">I am

                                  <?php  echo $row['Age']?>

                                  ,

                                  <?php  echo $row['Maritalstatus'];
								  
								  
								  
								  
								   //echo $caste;
            //echo $row['Caste'];
			if(is_numeric($row['Caste'])) {
				$caste_sql = "SELECT cName FROM castedata WHERE cId = '".$row['Caste']."'";
				$caste_exec = mysql_query($caste_sql);
				$caste_fetch = mysql_fetch_array($caste_exec);
				echo '&nbsp;'.$caste_fetch["cName"];
			}
			else
			{
				echo '&nbsp;'.$row["Caste"];	
			} ?>
								  
								  
								

                                  <?php  //echo $caste[$row['Religion']]?>

                                  <?php  echo $row['Gender']?>

                                  living in<br />

                                  <?php  echo $row['State']?>

                                  ,

                                  <?php  echo $row['Country']?>

                                  </div></td>
                              </tr>

                          <tr>

                            <td><div align="left"></div></td>

                                <td><div align="left"></div></td>
                              </tr>

                          <tr>

                            <td><div align="left"></div></td>

                                <td><div align="left">

                                  <span class="Partext1"><?php 

		  $strprofile =  $row['profile1'];

		  $newprofile = wordwrap(substr($strprofile,0,200), 8, "\n", true);

		  echo "$newprofile\n";

		  ?>
		  			<span id="show_more" style="display:none;">
					<?php echo substr($strprofile,201,strlen($strprofile)); ?>
					</span>
		  
                                    </span>  <span class="smalltextred">&nbsp;... <a href="javascript:void(0);" id="read_more" onClick="read_more()">more</a></span> <a href='#q1'>&raquo;&raquo;</a></div></td>
                              </tr>

                          <tr>

                            <td><div align="left"></div></td>

                                <td rowspan="2"><asp:ImageButton ID="Button1"  runat="server"  ImageUrl="Images/ei.gif" OnClick="Express_Interest_Click"/>

                                  <br>

                                  <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="blackbox">

                                  <tr>

                                    <td width="4%" class="HeadText1">&nbsp;</td>

                                    <td width="96%" class="HeadText1"><?php  echo $row['Address']?>,<br>

                                      <?php  echo $row['City']?>,

                                      <?php  echo $row['State']?>,

                                      <?php  echo $row['Country']?>

                                      <br>

                                      Phone :

                                      <?php  echo $row['Phone']?>

                                      <br>

                                      Mobile :                                      <?php  echo $row['Mobile']?></td>
                                  </tr>
                                </table></td>
                              </tr>

                          <tr>

                            <td><div align="left"></div></td>
                                </tr>

                          </table></td>

                          <td><div align="center"><span class="Partext1">

                            

                            </span>

                            <table width="200" border="0" cellspacing="0" cellpadding="0">

                              <tr>

                                <td>&nbsp;</td>
                                </tr>

                              <tr>

                                <td><div align="center"> 

								

								<a href="#">

				  <img src="../photoprocess.php?image=<?php echo $row['Photo1']?>&square=175;"  hspace="1" vspace="1" border="0" class="submenubox" onClick="MM_openBrWindow('viewphoto1.php?id=<?php  echo $row['MatriID']?>&Choice=1','vp','resizable=yes,width=600,height=450')">				  </a>

								


								</div>								</td>
                                </tr>

                              <tr>

                                <td><div align="center"><a href="#" class="paratext" onClick="MM_openBrWindow('viewphoto1.php?id=<?php  echo $row['MatriID']?>&Choice=1','vp','resizable=yes,width=600,height=450')">View Photos </a></div>

                                  <div align="center"><br>

                                    

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
                      </table>

                    <br />

                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">

                      <tbody>

                        <tr bgcolor="#FFF0B3" class="rowlightbrown">

                          <td colspan="4" 

valign="top" bgcolor="#FFFFCC" class="lstrongarial" 

style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Basic  Information</b></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td width="139" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Name :</div></td>

                            <td colspan="3" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['Name']?>

                              &nbsp;</div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Gender :</div></td>

                            <td width="159" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['Gender']?>                          

                              </div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Age :</div></td>

                            <td width="196" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['Age']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td valign="top" colspan="4" height="1"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Date of Birth  :</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">

                              <?php  echo $row['DOB']?>

                              </div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Place of Birth :</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">

                              <?php  echo $row['place_of_birth']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td valign="top" colspan="4" height="1"><div align="left"><img height="1" src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Marital Status :</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">

                              <?php  echo $row['Maritalstatus']?>

                              </div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top" 

width="96"><div align="left">No of Children &amp; Living Status :</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">

                              <?php if(trim($row['childrenlivingstatus']) != '&')  echo $row['childrenlivingstatus']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

  <td valign="top" colspan="4" height="1"><img height="1" 

src="" width="100%" /></td>
   </tr>

                        

                        

                        <tr bgcolor="#ffffff">

                          <td width="139" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Time of Birth  :</div></td>

                            <td colspan="3" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['time_of_birth']?>

                              </div></td>
                          </tr>

                        

                        <tr bgcolor="#eeebda">

  <td valign="top" colspan="4" height="1"><img height="1" 

src="" width="100%" /></td>
   </tr>
                        </tbody>
                      </table>

                    <br />

                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">

                      <tbody>

                        <tr bgcolor="#FFF0B3" class="rowlightbrown">

                          <td colspan="4" 

valign="top" bgcolor="#FFFFCC" class="lstrongarial" 

style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Education and Occupation </b></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td width="138" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Education :</div></td>

                            <td colspan="3" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['Education']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Edu Details  :</div></td>

                            <td width="160" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['EducationDetails']?>

                              </div></td>

                            <td width="102" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Occupation :</div></td>

                            <td width="190" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['Occupation']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td valign="top" colspan="4" height="1"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Employed in   :</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">

                              <?php  echo $row['Employedin']?>

                              </div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Annual Income  :</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">

                              <?php  echo $row['Annualincome']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td valign="top" colspan="4" height="1"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>
                        </tbody>
                      </table>

                    <br />

                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">

                      <tbody>

                        <tr bgcolor="#FFF0B3" class="rowlightbrown">

                          <td colspan="4" 

valign="top" bgcolor="#FFFFCC" class="lstrongarial" 

style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b> Socio Religious Background </b></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td width="140" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Religion :</div></td> 

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top" 

width="157"><div align="left">

                              <?php  echo $religion[$row['Religion']]?>

                              </div></td>

                            <td width="116" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left"> 

<?php

 switch ($row['Religion']) {
    case 10:
        echo "Sect/Division ";
        break;
    case 11:
        echo "Sect/Division ";
        break;
    case 2:
        echo "Sect/Division ";
        break;
	 case 12:
        echo "Denomination/Division ";
        break;
    case 13:
        echo "Denomination/Division ";
        break;
    case 14:
        echo "Denomination/Division";
        break;	
	case 3:
        echo "Denomination/Division";
        break;		
	default:
		echo "Caste/Division ";
		break;	
} ?>


</div></td>

                            <td width="177" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                             <script>
			do_request(<?php echo $row['Language'] ?>,<?php echo $row['Religion'] ?>, <?php echo $row['Caste'] ?>,'<?php echo $row['MatriID'] ?>');
			</script> 
			<div id="<?php echo $row['MatriID'] ?>">
			
			</div>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Subcaste/Sec :</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top"><div align="left">

                              <?php  echo $row['Subcaste']?>

                              </div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"> <div align="left">Gothram:</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top"><div align="left">

                              <?php  echo $row['Gothram']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Language :</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">

                              <?php 
							  
							   $Language =array('','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu','','Badaga');
							  
							   //echo $row['Language'];
							   
							   echo $Language[$row['Language']]; ?>

                              </div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Star :</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">

                              <?php  echo $row['Star']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Moonsign : </div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">

                              <?php  echo $row['Moonsign']?>

                              </div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Horoscope Match  : </div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">

                              <?php  echo $row['horo_match']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Manglik/Dosham : </div></td>

                            <td colspan="3" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['Manglik']?>

                              </div></td>
                          </tr>

                        

                        <tr bgcolor="#eeebda">

  <td valign="top" colspan="4" height="1"><img height="1" 

src="" width="100%" /></td>
   </tr>
                        </tbody>
                      </table>

                    <br />

                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">

                      <tbody>

                        <tr bgcolor="#FFF0B3" class="rowlightbrown">

                          <td colspan="4" 

valign="top" bgcolor="#FFFFCC" class="lstrongarial" 

style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Physical Status and Lifestyle </b></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td width="140" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Height :</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top" 

width="156"><div align="left">

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

                            <td width="104" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Weight :</div></td>

                            <td width="190" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['Weight']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Blood Group:</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top"><div align="left">

                              <?php  echo $row['BloodGroup']?>

                              </div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"> <div align="left">Body Type:</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" valign="top"><div align="left">

                              <?php  echo $row['Bodytype']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Complexion :</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">

                              <?php  echo $row['Complexion']?>

                              </div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Diet :</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">

                              <?php  echo $row['Diet']?>

                              </div></td>
                          </tr>
						  
						  <tr><td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Habbits :</div></td>

                            <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">

                              <?php  echo $row['txtHabbits']?>

                              </div></td>
                          </tr>

                        

                        

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><img height="1" 

src="" width="100%" /></td>
                          </tr>
                        </tbody>
                      </table>

                    <br />

                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">

                      <tbody>

                        <tr bgcolor="#FFF0B3" class="rowlightbrown">

                          <td colspan="4" 

valign="top" bgcolor="#FFFFCC" class="lstrongarial" 

style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Profile Description </b></div></td>
                          </tr>

                       <?php /*?> <tr bgcolor="#ffffff">

                          <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">I am Looking : </div></td>

                            <td colspan="3" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['Looking']?>

                              </div></td>
                          </tr><?php */?>

                        <tr bgcolor="#EEEBDA">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td width="132" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Profile Description :</div></td>

                            <td width="458" colspan="3" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left"><a name="q1"></a>

                              <?php 

		  $strprofile =  $row['profile1'];

		  $newprofile = wordwrap($strprofile, 8, "\n", true);

		  echo "$newprofile\n";

		  ?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><img height="1" 

src="" width="100%" /></td>
                          </tr>
                        </tbody>
                      </table>

                    <br />

                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">

                      <tbody>

                        <tr bgcolor="#FFF0B3" class="rowlightbrown">

                          <td colspan="4" 

valign="top" bgcolor="#FFFFCC" class="lstrongarial" 

style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Family Details </b></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td width="140" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Family Details:</div></td>

                            <td colspan="3" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['FamilyDetails']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Family Values  :</div></td>

                            <td width="157" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['Familyvalues']?>

                              </div></td>

                            <td width="114" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Family Type :</div></td>

                            <td width="179" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['FamilyType']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td valign="top" colspan="4" height="1"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Family Status  :</div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['FamilyStatus']?>

                              </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Father Occupation  : </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['Fathersoccupation']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Mother Occupation  :</div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['Mothersoccupation']?>

                              </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Family Origin  : </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['FamilyOrigin']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">No Of Brothers  :</div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['noofbrothers']?>

                              </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">No Of Sisters  : </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['noofsisters']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><img height="1" 

src="" width="100%" /></td>
                          </tr>
                        </tbody>
                      </table>

                    <br />

                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">

                      <tbody>

                        <tr bgcolor="#FFF0B3" class="rowlightbrown">

                          <td colspan="4" 

valign="top" bgcolor="#FFFFCC" class="orangesubtitles" 

style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Partner Preference </b></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td width="139" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Age :</div></td>

                            <td colspan="3" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['PE_FromAge']?>

                              Between

                              <?php  echo $row['PE_ToAge']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Looking For  :</div></td>

                            <td width="156" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['Looking']?>

                            </div></td>

                            <td width="105" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Complexion  : </div></td>

                            <td width="190" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['PE_Complexion']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td valign="top" colspan="4" height="1"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Height  :</div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['PE_Height']?>

                              </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Partner Preference   : </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['PartnerExpectations']?>

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Religion  :</div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php 
							  $religion = array("1"=>"Hindu","2"=>"Muslim - Shia","3"=>"Muslim - Sunni","4"=>"Muslim - Others","5"=>"Christian - Catholic","6"=>"Christian - Orthodox","7"=>"Christian - Protestant","8"=>"Christian - Others","9"=>"Sikh","10"=>"Jain - Digambar","11"=>"Jain - Shwetambar","12"=>"Jain - Others","13"=>"Parsi","14"=>"Buddhist","15"=>"Inter-Religion","16"=>"No Religious Belief");
							  
							  //echo "<pre>"; print_r($caste); exit; 
							   echo $religion[$row['PE_Religion']]?>

                              </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Caste  : </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

							<script>
			do_request(<?php echo $row['Language'] ?>,<?php echo $row['PE_Religion'] ?>, <?php echo $row['PE_Caste'] ?>,'clsPeCaste');
			</script> 
                            
							<div id="clsPeCaste"></div>
							  <?php  #echo $row['PE_Caste']?> 

                              </div></td>
                          </tr>

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                       

                        <tr bgcolor="#ffffff">

                          <td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Country Living in   :</div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['PE_Countrylivingin']?>

                              </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Resident Status   : </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['PE_Residentstatus']?>

                              </div></td>
                          </tr>

						<tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>

                         <tr bgcolor="#ffffff">

                          <?php /*?><td class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px" 

valign="top"><div align="left">Eating habits   :</div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['PE_Eatinghabbits']?>

                              </div></td><?php */?>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Education  : </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php  echo $row['PE_Education']?>

                              </div></td>
							  
							  
							  
							  
							  
							  <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Mother Tongue  : </div></td>

                            <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                              <?php 
							  $Language =array('','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu','','Badaga');
							 // print_r($Language);
							  //echo $row['PE_MotherTongue'];
							  
							  if(trim($row['PE_MotherTongue']) != '0')  echo $Language[$row['PE_MotherTongue']]; ?>

                              </div></td>
							  
							  
                          </tr>

                        

                        <tr bgcolor="#eeebda">

                          <td height="1" colspan="4" valign="top"><img height="1" 

src="" width="100%" /></td>
                          </tr>
                        </tbody>
                      </table>

                    <br />

                    <table width="600" border="0" cellpadding="0" cellspacing="2" class="submenubox">

                      <tbody>

                        <tr bgcolor="#FFF0B3" class="rowlightbrown">

                          <td colspan="8" 

valign="top" bgcolor="#FFFFCC" class="lstrongarial" 

style="PADDING-RIGHT: 1px; PADDING-LEFT: 5px; PADDING-BOTTOM: 5px; COLOR: #7b4c24; PADDING-TOP: 5px"><div align="left" class="Partext1"><b>Hobies and Interests </b></div></td>
                          </tr>

                        <tr bgcolor="#ffffff">

                          <td width="142" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Hobbies :</div></td>

                            <td width="458" colspan="3" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
					<? echo str_replace(",",", ",$row['Hobbies']); ?>
                            

                              </div></td>
							  
							  
							  
							  <td width="142" 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Other Hobbies :</div></td>

                            <td width="458" colspan="3" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">                              
<? echo str_replace(",",", ",$row['OtherHobbies']); ?>
                              

                              </div></td>
							  
							  
							  
							  
							  
                          </tr>

                        <tr bgcolor="#EEEBDA">

                          <td height="1" colspan="4" valign="top"><div align="left"><img height="1" 

src="" width="100%" /></div></td>
                          </tr>
						  
						  

                        <tr bgcolor="#ffffff">

                          <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Interest : </div></td>

                            <td colspan="3" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">
<? echo str_replace(",",", ",$row['Interests']); ?>

                             

                              

                              </div></td>
							  
							  
							  <td 

valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">Other Interest : </div></td>

                            <td colspan="3" valign="top" class="smalltextgrey" 

style="PADDING-LEFT: 2px PADDING-BOTTOM: 3px; PADDING-TOP: 5px"><div align="left">

                            

                              <? echo str_replace(",",", ",$row['OtherInterests']); ?>

                              </div></td>
							  
							  
                          </tr>
                        </tbody>
                      </table>

                  </div></td>
                </tr>
                </table>

			  <?php } mysql_close($con); ?>

              <!-- RESULTS END -->            </td></tr>

          <tr>

            <td colspan="4" valign="top" class="HeadText1">&nbsp;</td>
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

