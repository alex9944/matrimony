<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); ?>
<?php 
if(!isset($_REQUEST["page"])) $page = 1;
else  $page = $_REQUEST["page"];
if(isset($page))
{
	$view = $_REQUEST["view"];
	$page =  $page;
	$max_results = 1; 
	$from = (($page * $max_results) - $max_results);


$searchcondition = "";
$searchlink = "";
if($view == "visitors")
{
	$searchquery = "SELECT R.* FROM visitor V,register R WHERE vmemberid = '".$_SESSION['matriid']."' AND memberid = MatriID  AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
	$searchcondition = "Your Visitors";
}
if($view == "match")
{
		$loginmembersql = "SELECT PE_FromAge,PE_ToAge,PE_MotherTongue,PE_Religion,PE_Caste,PE_Education,PE_Countrylivingin FROM register WHERE MatriID='".$_SESSION['matriid']."'";
		$loginmemberexec = mysql_query($loginmembersql);
		$loginmemberfetch = mysql_fetch_array($loginmemberexec);
				
		$searchquery = "SELECT * FROM register WHERE Gender != '".$_SESSION['gender']."' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		if(($loginmemberfetch["PE_MotherTongue"] != "") && ($loginmemberfetch["PE_MotherTongue"] != "NULL"))
			$searchquery .= " AND Language='".$loginmemberfetch["PE_MotherTongue"]."'";
		if(($loginmemberfetch["Religion"] != "") && ($loginmemberfetch["Religion"] != "NULL"))
			$searchquery .= " AND Religion='".$loginmemberfetch["PE_Religion"]."'";
		if(($loginmemberfetch["PE_Caste"] != "Any") && ($loginmemberfetch["PE_Caste"] != "") && ($loginmemberfetch["PE_Caste"] != "NULL") && ($loginmemberfetch["PE_Caste"] != "Does not matter") && ($loginmemberfetch["PE_Caste"] != "Does not Matter"))
			$searchquery .= " AND Caste='".$loginmemberfetch["PE_Caste"]."'";
		if(($loginmemberfetch["PE_Education"] != "Any") && ($loginmemberfetch["PE_Education"] != "") && ($loginmemberfetch["PE_Education"] != "NULL") && ($loginmemberfetch["PE_Education"] != "Does not matter") && ($loginmemberfetch["PE_Education"] != "Does not Matter"))	
		$searchquery .= " AND Education='".$loginmemberfetch["PE_Education"]."'";
		$searchquery .= " AND Country='".$loginmemberfetch["PE_Countrylivingin"]."' AND Age BETWEEN '".$loginmemberfetch["PE_FromAge"]."' AND  '".$loginmemberfetch["PE_ToAge"]."'";
	$searchcondition = "Your Match";
}
if($view == "newmember")
{
	$searchquery = "SELECT * FROM register WHERE Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
	$searchcondition = "New Members";
}
$searchlink .= "&view=".$view;
$count_record_exec = mysql_query($searchquery);
$searchresultcount = mysql_num_rows($count_record_exec);
$total_pages = ceil($searchresultcount / $max_results);

if($view == "visitors")
{
	$searchquery .= " order by vid desc LIMIT $from, $max_results ";
}
if($view == "match")
{
	$searchquery .= " order by ID desc LIMIT $from, $max_results ";
}
if($view == "newmember")
{
	$searchquery .= " order by ID desc LIMIT $from, $max_results ";
}
//echo $searchquery;
$memcontrol =  mysql_query($searchquery);	
$finalsearcondition = "";
$finalsearcondition .= $searchcondition;
}

?>
<div id="wrapper">


<!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); 	
  $row = mysql_fetch_array($memcontrol)
?>
<!-- HEADER ENDS HERE ###################################################  -->

<!-- CONTENT AREA STARTS HERE ###################################################  -->

 <!-- BREADCRUMBS STARTS HERE #####################################  -->
<div id="breadcrumb"> 
<ul class="breadcrumbs">
		<li class="left"></li>
        
      <li class="center">
        <div id="breadcrumb_text">You are Here:
<span class="pathway">
<?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png"><?php echo $searchcondition;?> <img alt="" src="images/icons/arrow_breadcrumbs.png">View Full Profile Of <?php  echo $row['MatriID'];?></span>
<?php
//VISITOR PROFILE FOR MEMBER REGISTER PAGE
if($_SESSION['matriid'] != "")
{
	$visitor_sql = "SELECT COUNT(*) AS vcount FROM visitor WHERE memberid = '".$_SESSION["matriid"]."' AND vmemberid ='".$row['MatriID']."'";
	$visitor_exec = mysql_query($visitor_sql);
	$visitor_fetch = mysql_fetch_array($visitor_exec);
	
	if($visitor_fetch["vcount"] == 0)
	{
		if($_SESSION['matriid'] != $row["MatriID"])
		{
			if($_SESSION['gender'] != $row["Gender"])
			{
				$insert_visitor_sql = "INSERT INTO visitor(memberid,vmemberid) VALUES('".$_SESSION["matriid"]."','".$row['MatriID']."')";
				mysql_query($insert_visitor_sql);
			}
		}
	}
}
?>
</div>
      </li>
        
        <li class="right"></li>
</ul>
</div>
<!-- BREADCRUMBS ENDS HERE ########################################  -->

  <div id="content_area">
  
 
    <?Php include('include/searchleftside.php'); ?>
    <div id="inner_right">
<a name="top" id="top"></a>
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
<h1><?php echo $searchcondition;?></h1>


<table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
        <tbody><tr>
          <td class="pg_left"></td>
          <td height="48" align="center" valign="middle" class="pg_center"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="prof_det_toolbar" style="height:48px;">
            <tbody><tr>
<?Php
            if($page > 1){ 

    $prev = ($page - 1); 
?>
              <td width="110" class="p_d_block1"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $prev.$searchlink; ?>" class="pageNum" style="float:left; font-size:11px; margin-left:15px;">&lt;&lt; Prev Profile</a></td>
<?Php
} 
if($page < $total_pages){ 

    $next = ($page + 1); 
?>
              <td width="110" class="p_d_block1"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $next.$searchlink; ?>" class="pageNum" style="float:left; font-size:11px; margin-left:15px; ">Next Profile&gt;&gt; </a></td>
<?Php

} 
?>
              <td>&nbsp;</td>
              <td width="60" class="p_d_block2"><a href="printprofile.php?id=<?php  echo $row['MatriID']?>" target="_blank" class="btn_print block">Print</a></td>
              <td width="60" class="p_d_block2"><a href="forward_message_submit.php?recsno=<?php  echo $row['MatriID']?>" class="btn_mailforward block"> Forward</a></td>
            </tr>
          </tbody></table></td>
          <td class="pg_right"></td>
        </tr>
      </tbody></table>
      <?php  
if($row['Height'] =="1") { $similarheight = "Below 4ft"; }
else if($row['Height'] =="2") { $similarheight = "4ft 6in"; }
else if($row['Height'] =="3") { $similarheight = "4ft 7in"; }
else if($row['Height'] =="4") { $similarheight = "4ft 8in"; }
else if($row['Height'] =="5") { $similarheight = "4ft 9in"; }
else if($row['Height'] =="6") { $similarheight = "4ft 10in"; }
else if($row['Height'] =="7") { $similarheight = "4ft 11in"; }
else if($row['Height'] =="8") { $similarheight = "5ft"; }
else if($row['Height'] =="9") { $similarheight = "5ft 1in"; }
else if($row['Height'] =="10") { $similarheight = "5ft 2in"; }
else if($row['Height'] =="11") { $similarheight = "5ft 3in"; }
else if($row['Height'] =="12") { $similarheight = "5ft 4in"; }
else if($row['Height'] =="13") { $similarheight = "5ft 5in"; }
else if($row['Height'] =="14") { $similarheight = "5ft 6in"; }
else if($row['Height'] =="15") { $similarheight = "5ft 7in"; }
else if($row['Height'] =="16") { $similarheight = "5ft 8in"; }
else if($row['Height'] =="17") { $similarheight = "5ft 9in"; }
else if($row['Height'] =="18") { $similarheight = "5ft 10in"; }
else if($row['Height'] =="19") { $similarheight = "5ft 11in"; }
else if($row['Height'] =="20") { $similarheight = "6ft"; }
else if($row['Height'] =="21") { $similarheight = "6ft 1in"; }
else if($row['Height'] =="22") { $similarheight = "6ft 2in"; }
else if($row['Height'] =="23") { $similarheight = "6ft 3in"; }
else if($row['Height'] =="24") { $similarheight = "6ft 4in"; }
else if($row['Height'] =="25") { $similarheight = "6ft 5in"; }
else if($row['Height'] =="26") { $similarheight = "6ft 6in"; }
else if($row['Height'] =="27") { $similarheight = "6ft 7in"; }
else if($row['Height'] =="28") { $similarheight = "6ft 8in"; }
else if($row['Height'] =="29") { $similarheight = "6ft 9in"; }
else if($row['Height'] =="30") { $similarheight = "6ft 10in"; }
else if($row['Height'] =="31") { $similarheight = "6ft 11in"; }
else if($row['Height'] =="32") { $similarheight = "7ft"; }
else if($row['Height'] =="33") { $similarheight = "Above 7ft"; }
?>
<a href="viewsimilarprofile.php?gender=<?php echo $row['Gender']; ?>&age=<?php echo $row['Age']; ?>&religion=<?php echo $row['Religion']; ?>&caste=<?php echo $row['Caste']; ?>&education=<?php echo $row['Education']; ?>&height=<?php echo $similarheight; ?>" class="float_right" style="margin-top:5px; margin-bottom:5px;">View Similar Profile</a>
      
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left"><a href="#" class="title"><?php  echo $row['Name']?> (<?php  echo $row['MatriID']?>), <? echo $row['Country']; ?> - <? echo $row['State']; ?></a></h3>
          <a href="#" class="icon_acc_type acc_diamond" title="<?php echo $sitename; ?> Diamond Account Holder"></a> <!--<span class="icon status stat_online">Active: <strong>Online Now</strong></span>--><?php include("include/profilechat.php"); ?> </div>
<?Php if(isset($_SESSION['username'])) { ?>
          <div class="footer" style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f9d6a5;"> 
           <a href="blockmember.php?id=<?php echo $row['MatriID']; ?>" class="btn_services btn_block float_right">Block this Member</a> 
           <a href="add_to_favorite.php?id=<?php echo $row['MatriID']; ?>" class="btn_services btn_favorite float_right" style="border-left-width: 1px; border-left-style: solid; border-left-color: #f9d6a5;">Add to Favorite</a>
          <a href="#" class="btn_services btn_varify float_right" style="border-left-width: 1px; border-left-style: solid; border-left-color: #f9d6a5;">Varify Profile</a>
          
           </div>
<?php } ?>
        <div class="body clear">
          <table width="100%" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td >
              <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>
<?php if($row['Photo1']== "nophoto.gif" or $row['Photo1Approve'] == 'No'  ) 
       {
	     if($row['Gender'] == 'Male')
		  { ?>
		    <img src="images/icons/noimage_man.jpg" width="100" height="100" class="img_profile" />
<?php     } 
        elseif($row['Gender'] == 'Female') 
		  { ?>
            <img src="images/icons/noimage_girl.jpg" width="100" height="100" class="img_profile" />
<?php     }
       else
	      { ?>
	        <img src="images/icons/photo_upload_lady.jpg" width="100" height="100" class="img_profile" />
<?        }
       }
	else if($row['PhotoProtect']== "Yes") 
	  { 
	    if($row['Gender'] == 'Male') 
		 { ?>
		<img src="images/icons/photo_askme_man.jpg" width="100" height="100" class="img_profile" />
<?Php		
	     } else {
?>		
 	    <img src="images/icons/photo_askme_lady.jpg" width="100" height="100" class="img_profile" />
<?Php
   	     } 

      }

else  {  
if(isset($_SESSION['username'])) { 
?>					
  <a href="view_photo_album.php?id=<? echo $row['MatriID']; ?>"><img width="110" height="110" src="memphoto1/<?php echo $row['Photo1']?>" /></a>
<?php } else { ?>
  <img width="110" height="110" src="memphoto1/<?php echo $row['Photo1']?>" />
<? } } ?></td>
    <td style="padding:5px;"></td>
<!-- IF VIDEO IS AVAILABLE SHOW the below 2 TDs -->   
<?php  if(isset($_SESSION['username'])) { ?>
    <td style="padding-right:10px;"><a href="view_video_album.php?id=<? echo $row['MatriID']; ?>"><img src="images/video.jpg" width="100" height="100" class="img_profile" /></a></td>
<?php } ?>    
  </tr>
  
    <tr>
    <td align="center"> <?php  if(isset($_SESSION['username'])) { ?>
<a href="view_photo_album.php?id=<? echo $row['MatriID']; ?>">photo album</a>
<?php } ?>    
<div class="thumb_slider"><!-- <a href="#">1</a> <a href="#" class="active">2</a> <a href="#">3</a> <a href="#">4</a><a href="#">5</a><a href="#">6</a><a href="#">7</a> -->     <?php
/*	$photo_count_sel = "SELECT COUNT(*) FROM photoalbum WHERE matriid = '".$row['MatriID']."' AND status='Active'";
	$photo_count_exec = mysql_query($photo_count_sel); 
	$photo_count_fetch =mysql_fetch_array($photo_count_exec);
*/	?> </div></td>
    <td > </td>

<!-- IF VIDEO IS AVAILABLE SHOW the below 2 TDs -->   
<?php  if(isset($_SESSION['username'])) { ?>
    <td align="center"><a href="view_video_album.php?id=<? echo $row['MatriID']; ?>">Video</a></td>
<?php } ?>    
  </tr>
  
</table>

              
               </td>
              <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="profile">
                <tr class="hline2">
                  <th width="90">Posted By</th>
                  <td width="230">: <? echo $row['Profilecreatedby']; ?></td>
                  <th width="85">&nbsp;</th>
                  <td>&nbsp;</td>
                </tr>
                <tr class="hline2">
                  <th>Last Login</th>
                  <td>:&nbsp;<? echo $row['Lastlogin']; ?></td>
                  <th>&nbsp;</th>
                  <td>&nbsp;</td>
                </tr>
                <tr class="hline2">
                  <th>Registered on</th>
                  <td>:&nbsp;<? echo $row['Regdate']; ?></td>
                  <th>&nbsp;</th>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4" valign="top"><strong>About Me</strong><br />
                    <? echo $row['Profile']; ?></td>
                </tr>
              </table></td>
            </tr>
          </table>
        </div>
        <?php  if(isset($_SESSION['username'])) { ?>        <div class="footer"> 

<a href="express_int.php?MatriID=<? echo $row['MatriID']; ?>" class="btn_services btn_expressInterest" > Express Interest</a><a href="#"  class="btn_services btn_message" > Send Message</a>
<a href="#" title="Profile Varification not Available"  class="btn_services btn_sms">Send SMS</a>
<!--<a href="#"  class="btn_services btn_chat" >Chat </a>-->


<?php if($chat == 1) { ?>
<a href="javascript:void(0)" onClick="javascript:chatWith('<?php echo $row['MatriID']?>')"  class="icon btn_services btn_chat" > Chat </a> 
<?php } else { ?>
<a title="Chat Not Available" class="btn_services btn_chat" href="#"> Chat </a>
<?Php } ?>


<a href="view_phonenumber.php?ID=<? echo $row['ID']; ?>"  class="btn_services btn_viewPhone" >Call Now</a>
<a href="view_video_album.php?id=<? echo $row['MatriID']; ?>"  class="btn_services btn_video" > Video</a>
<a href="viewhoroscope.php?id=<?php echo $row['MatriID']; ?>" target="_blank"  class="btn_services btn_horoscope" >Horoscope</a>
</div>
        <div class="want_to_contact">
         <table width="100%" border="0" cellspacing="5" cellpadding="0">
           <tr>
             <td>
              <p>Premium members have success rate 80% more than free members.</p>
             </td>
             <td>
              <a href="membershipform.php" class="button-small square-orange uppercase" style="margin:5px auto;"><span></span> Upgrade Membership</a>
             </td>
           </tr>
         </table>
        </div>
<?Php } ?>
        <?php  if(!isset($_SESSION['username'])) { ?> 
              <div class="footer"><a class="icon btn_services btn_viewPhone" href="#"> View Phone</a> 
   <a title="Horoscope Not Available" class="icon_disable btn_services_disable btn_horoscope" href="#"> Horoscope</a>
        
        <a style="border-right:none;" class="icon_disable btn_services_disable btn_varify" title="Profile Varification not Available" href="#">Varify Profile</a> 


</div>
<div class="want_to_contact">
  <table cellspacing="0" cellpadding="0" border="0" width="100%">
    <tbody><tr>
      <td align="center" width="180"><strong>Want to Contact her ?</strong></td>
      <td align="center" width="140"><a title="Register Free" href="registration1.php"><img width="120" height="40" src="images/btn_register.png"></a></td>
      <td align="center" width="30">or</td>
      <td align="center" width="80"><a class="link" href="login.php"><strong>Login</strong></a></td>
      <td>&nbsp;</td>
    </tr>
  </tbody></table>
</div>
<?Php } ?>
</div>
      <div class="want_to_contact_bottom" style="border-top: solid 1px #f9d6a5;">
        <p><a href="#basicinfo">Basic Information</a> | <a href="#religious">Socio Religious Attributes</a> | <a href="#education">Education and Occupation </a> | <a href="#physical">Physical Attributes</a> | <a href="#contact">Contact Details</a> | <a href="#family">Family Details</a> | <a href="#partner">Partner Preference</a> | <a href="#hobbies">Hobbies and Interest</a></p>
      </div>
      <div id="profiledetails"> <a name="basicinfo" id="basicinfo">Basic Information</a>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Name</td>
            <td width="25%">:&nbsp; <? echo $row['Name']; ?></td>
            <td width="25%">Caste</td>
            <td width="25%">:&nbsp; <? echo $row['Caste']; ?></td>
          </tr>
          <tr>
            <td>Mother tongue</td>
            <td>:&nbsp; <? echo $row['Language']; ?></td>
            <td>Sub Caste</td>
            <td>:&nbsp; <? echo $row['Subcaste']; ?></td>
          </tr>
          <tr>
            <td>Religion</td>
            <td>:&nbsp; <? echo $row['Religion']; ?></td>
            <td>Email</td>
            <td>:&nbsp; <? echo $row['ConfirmEmail']; ?></td>
          </tr>
        </table>
        <div class="hline2"></div>
        <a name="religious" id="religious">Socio Religious Attributes</a>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Gothra(m) </td>
            <td width="25%">: &nbsp;<? echo $row['Gothram']; ?></td>
            <td width="25%">Manglik</td>
            <td width="25%">: &nbsp;<? echo $row['Manglik']; ?></td>
          </tr>
          <tr>
            <td>Star(Nakshatra)</td>
            <td>:&nbsp; <? echo $row['Star']; ?></td>
            <td><span class="bodywk">Place of Birth</span></td>
            <td>:&nbsp; <? echo $row['POB']; ?></td>
          </tr>
          <tr>
            <td>Moonsign</td>
            <td>: &nbsp;<? echo $row['Moonsign']; ?></td>
            <td><span class="bodywk">Time of Birth</span></td>
            <td>: &nbsp;<? echo $row['TOB']; ?></td>
          </tr>
          <tr>
            <td>Horoscope Match</td>
            <td>:&nbsp; <? echo $row['Horosmatch']; ?></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table>
        <div class="hline2"></div>
        <a name="education" id="education">Education and Occupation</a>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Education</td>
            <td width="25%">:&nbsp; <? echo $row['Education']; ?></td>
            <td width="25%">Occupation</td>
            <td>:&nbsp; <? echo $row['Occupation']; ?></td>
          </tr>
          <tr>
            <td>Edu Details</td>
            <td>:&nbsp; <? echo $row['EducationDetails']; ?></td>
            <td>Employed in</td>
            <td>:&nbsp; <? echo $row['Employedin']; ?></td>
          </tr>
          <tr>
            <td>Annual income</td>
            <td>:&nbsp; <? echo $row['Annualincome']; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <div class="hline2"></div>
        <a name="physical" id="physical">Physical Attributes</a>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Height</td>
            <td width="25%">:&nbsp; <?php  

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

?></td>
            <td width="25%">Body type</td>
            <td>:&nbsp; <? echo $row['Bodytype']; ?></td>
          </tr>
          <tr>
            <td>Weight</td>
            <td>:&nbsp; <? echo $row['Weight']; ?></td>
            <td>Diet</td>
            <td>:&nbsp; <? echo $row['Diet']; ?></td>
          </tr>
          <tr>
            <td>Blood Group</td>
            <td>:&nbsp; <? echo $row['BloodGroup']; ?></td>
            <td>Smoke</td>
            <td>:&nbsp; <? echo $row['Smoke']; ?></td>
          </tr>
          <tr>
            <td>Complexion</td>
            <td>:&nbsp; <? echo $row['Complexion']; ?></td>
            <td>Drink</td>
            <td>:&nbsp; <? echo $row['Drink']; ?></td>
          </tr>
        </table>
        <div class="hline2"></div>
        <a name="contact" id="contact">Contact Details</a>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Address</td>
            <td width="25%">:&nbsp; <? echo $row['Address']; ?></td>
            <td width="25%">Phone</td>
            <td>:&nbsp; <? echo $row['Phone']; ?></td>
          </tr>
          <tr>
            <td>Country</td>
            <td>:&nbsp; <? echo $row['Country']; ?></td>
            <td>Mobile</td>
            <td>:&nbsp; <? echo $row['Mobile']; ?></td>
          </tr>
          <tr>
            <td>State</td>
            <td>:&nbsp; <? echo $row['State']; ?></td>
            <td>Residence in</td>
            <td>:&nbsp; <? echo $row['Residencystatus']; ?></td>
          </tr>
          <tr>
            <td>City</td>
            <td>:&nbsp; <? echo $row['City']; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <div class="hline2"></div>
        <a name="family" id="family">Family</a>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Family Details</td>
            <td width="25%">:&nbsp; <? echo $row['FamilyDetails']; ?></td>
            <td width="25%">No of Sisters</td>
            <td>:&nbsp; <? echo $row['noofsisters']; ?></td>
          </tr>
          <tr>
            <td>Family Values</td>
            <td>:&nbsp; <? echo $row['Familyvalues']; ?></td>
            <td>Father Name</td>
            <td>:&nbsp; <? echo $row['Fathername']; ?></td>
          </tr>
          <tr>
            <td>Family Type</td>
            <td>:&nbsp; <? echo $row['FamilyType']; ?></td>
            <td>Father Occupation</td>
            <td>:&nbsp; <? echo $row['Fathersoccupation']; ?></td>
          </tr>
          <tr>
            <td>Family Status</td>
            <td>:&nbsp; <? echo $row['FamilyStatus']; ?></td>
            <td>Mother Name</td>
            <td>:&nbsp; <? echo $row['Mothersname']; ?></td>
          </tr>
          <tr>
            <td>Family Origin</td>
            <td>:&nbsp; <? echo $row['FamilyOrigin']; ?></td>
            <td>Mother Occupation</td>
            <td>:&nbsp; <? echo $row['Mothersoccupation']; ?></td>
          </tr>
          <tr>
            <td>No of Brothers</td>
            <td>:&nbsp; <? echo $row['noofbrothers']; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <div class="hline2"></div>
        <a name="partner" id="partner">Partner Preference</a>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Looking for</td>
            <td width="25%">:&nbsp; <? echo $row['Looking']; ?></td>
            <td width="25%">Complexion</td>
            <td>:&nbsp; <? echo $row['PE_Complexion']; ?></td>
          </tr>
          <tr>
            <td>Age</td>
            <td>:&nbsp; From  <? echo $row['PE_FromAge']; ?>&nbsp; to&nbsp; <? echo $row['PE_ToAge']; ?></td>
            <td>Education</td>
            <td>:&nbsp; <? echo $row['PE_Education']; ?></td>
          </tr>
          <tr>
            <td>Expectations</td>
            <td>:&nbsp; <? echo $row['PartnerExpectations']; ?></td>
            <td>Religion</td>
            <td>:&nbsp; <? echo $row['PE_Religion']; ?></td>
          </tr>
          <tr>
            <td>Country Living in</td>
            <td>:&nbsp; <? echo $row['PE_Countrylivingin']; ?></td>
            <td>Caste</td>
            <td>:&nbsp; <? echo $row['PE_Caste']; ?></td>
          </tr>
          <tr>
            <td>Height</td>
            <td>:&nbsp; <? echo $row['PE_Height']; ?></td>
            <td>Resident Status</td>
            <td>:&nbsp; <? echo $row['PE_Residentstatus']; ?></td>
          </tr>
        </table>
        <div class="hline2"></div>
        <a name="hobbies" id="hobbies">Hobbies and Interest</a>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Hobbies</td>
            <td width="25%">:&nbsp; <? echo $row['Hobbies']; ?></td>
            <td width="25%">Interests</td>
            <td>:&nbsp; <? echo $row['Interests']; ?></td>
          </tr>
          <tr>
            <td>Other Hobby</td>
            <td>:&nbsp; <? echo $row['OtherHobbies']; ?></td>
            <td>Other Interest</td>
            <td>:&nbsp; <? echo $row['OtherInterests']; ?></td>
          </tr>
</table>
      </div>
      <?Php if(!isset($_SESSION['username'])) { ?>

      <div class="want_to_contact_bottom">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="180" align="center"><strong>Want to Contact her ?</strong></td>
            <td width="140" align="center"><a href="#" title="Register Free"><img src="images/btn_register.png" width="120" height="40" /></a></td>
            <td width="30" align="center">or</td>
            <td width="80" align="center"><a href="#" class="link"><strong>Login</strong></a></td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </div>
      <?php } ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
        <tbody><tr>
          <td class="pg_left"></td>
          <td height="48" align="center" valign="middle" class="pg_center"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="prof_det_toolbar" style="height:48px;">
            <tbody><tr>
              <td width="80" class="p_d_block1"><a href="#top" class="btn_goTop">Go Top</a></td>
              <td>&nbsp;</td>
<?Php
            if($page > 1){ 

    $prev = ($page - 1); 
?>
              <td width="110" class="p_d_block2"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $prev.$searchlink; ?>" class="pageNum" style="float:left; font-size:11px; margin-right:3px;margin-left:10px;">&lt;&lt; Prev Profile</a></td>
<?Php
} 
if($page < $total_pages){ 

    $next = ($page + 1); 
?>
              <td width="110" class="p_d_block2"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $next.$searchlink; ?>" class="pageNum" style="float:left; font-size:11px; margin-left:15px; ">Next Profile&gt;&gt; </a></td>
<?Php

} 
?>
            </tr>
          </tbody></table></td>
          <td class="pg_right"></td>
        </tr>
      </tbody></table>
        
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