<?php include("memprotect.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<script src="js/login.js" language="javascript"></script>



<?Php include("include/innerheadersection.php"); ?>







</head>



<body>

<?php include("config.php"); ?>

<?php

///////////////////// THIS IS THE MAIN FILE FOR THE MEMBERS ////////////////////////////////////

include 'dbconnect.php'; 

$strid=$_SESSION['username']; 

$member = mysql_query("SELECT *, MatriID,Name,Photo1,Profile,Left(profile,200) as profile1,date_format(Lastlogin,'%d-%m-%Y') as lastlogindate, date_format(MemshipExpiryDate,'%d-%m-%Y') as memexpdate FROM register where MatriID='$strid' ");

////////////////////////////////////////////////////////////////////////////////////////////////

if($strid!='')
$update = mysql_query("UPDATE register set online_status  = 1 where MatriID =".$strid);

?>

<?php 

//|||||||||||||||| START CREATE GLOBAL LOGIN SESSION FOR VARIOUS CONTROLS ||||||||||||||||||||||||\\



  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");

  while($row = mysql_fetch_array($memcontrol))

  {

	  $_SESSION['matriid'] = $row['MatriID'];

	  $_SESSION['name'] = $row['Name'];

	  $_SESSION['gender'] = $row['Gender'];

	  $_SESSION['status'] = $row['Status'];

	  $_SESSION['ppp'] = $row['PhotoprotectPassword'];

	  $_SESSION['password'] = $row['ConfirmPassword'];

	  

	  if(($row['Status']!="Active")&&($row['Status']!="InActive"))

	  {

		$_SESSION['payment_status']="Payment";

	  }

if(isset($_SESSION['payment_status'])&& ($_SESSION['payment_status'] != ""))



    {



	   $logid  =  $strid;



	   $qry  = "update register set online_status = 'online' where MatriID = '$logid' ";



	   mysql_query($qry);	   



	}

  }

  //mysql_close($con);

//|||||||||||||||| END CREATE GLOBAL LOGIN SESSION FOR VARIOUS CONTROLS ||||||||||||||||||||||||\\

?>

<?php

//||||||||||||||||||||||| IF PAID MEMBERSHIP EXPIRED THEN UPDATE MEMBERSHIP INTO ACTIVE ||||||||||||||| \\ 

$checkmem = mysql_query("SELECT MatriID, Memshipexpirydate, DATEDIFF( CURRENT_DATE, Memshipexpirydate ) AS expdays FROM register WHERE MatriID='$strid' ");

while($row = mysql_fetch_array($checkmem))

		{

			$Strexpdays=$row['expdays'];

			if ($Strexpdays >1)

			{

			$updatemem = mysql_query("UPDATE register SET Status ='Active' WHERE MatriID='$strid' ");

			}

		} 

?>



<div id="wrapper">





<!-- HEADER STARTS HERE ###################################################  -->

  <?Php include("include/menu.php"); ?>

<!-- HEADER ENDS HERE ###################################################  -->



<!-- CONTENT AREA STARTS HERE ###################################################  -->



 <!-- BREADCRUMBS STARTS HERE #####################################  -->



<!-- BREADCRUMBS ENDS HERE ########################################  -->

<div class="container">

  <div id="content_area" class="content-bg">

  

 

    <?Php include('include/loginsidebar.php'); 

	$row = mysql_fetch_array($member)

	?>

    <div class="col-md-9">



      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->

      <h1 style="color:#C8060E;"><a name="top" id="top"></a>Nice to See You..., <strong><?php  echo $row['Name']?></strong></h1>

      <div class="profile_block">

        <div class="header">

          <h3 class="float_left"><a href="#" class="title"><?php  echo $row['Name']?> (<?php  echo $row['MatriID']?>), <?php  echo $row['Country']?> - <?php  echo $row['State']?></a></h3>

        </div>

        <div class="body">

          <table width="100%" border="0" cellspacing="0" cellpadding="0">

            <tr>

              <td width="130" align="center" valign="top">

              <?php if($row['Photo1']== "nophoto.gif" ) { 

			  if($row['Gender'] == "Female") {

			  ?>

<a href="addphoto.php" title="Add your Main Photo"><img src="images/icons/photo_upload_lady.jpg" width="100" height="100" class="img_profile" /></a>

<?Php

			  }

			  else

			  {

			  ?>

<a href="addphoto.php" title="Add your Main Photo"><img src="images/icons/photo_upload_man.jpg" width="100" height="100" class="img_profile" /></a>

<?Php

			  }

} else  {  ?>					

  <img width="110" height="110" class="watermark" src="memphoto1/<?php echo $row['Photo1']?>" />

<? } ?>

                </td>

              <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="profile">

                <tr class="hline2">

                  <th width="90">Posted By</th>

                  <td width="230">: <?php echo $row['Profilecreatedby']?></td>

                  <th width="85">Membership</th>

                  <td><?php  if($row['Status'] == 'Active') { echo 'Free'; } else ?>   <?php { echo "" .ucfirst(strtolower($row['Status'])); }?></td>

                </tr>

                <tr class="hline2">

                  <th>Created on</th>

                  <td>:&nbsp;<?php  echo $row['Regdate']?></td>

                  <th>Last Login</th>

                  <td>:&nbsp;<?php  echo $row['lastlogindate']?></td>

                </tr>

<tr class="hline2">

                  <th valign="top">&nbsp;</th>

                  <td valign="top">&nbsp;</td>

                  <td colspan="2" align="center"><p>Premium members have success rate 80% more than free members.</p>

                  <a href="membershipform.php" class="button-small square-orange uppercase float_right" style="float:none; clear:both; margin:5px auto;"><span></span> Upgrade Membership</a>

                  </td>

                  </tr>

                  <tr>

                  <td colspan="4" valign="top"><p><strong>Upload Profile Picture</strong>:

                    Profiles with pictures are viewed more often.</p>

                    <p><strong>Log on Frequently:</strong>                      This will sort your profile to the top of the searches. </p>

                    <p><strong>Complete Profile Text:</strong>                        Stand out with personal 

                        <br>

                    </p>

                    <p><strong>Verify Your Profile</strong>:

                    Let everyone know you are a serious member.</p></td>

                </tr>

              </table></td>

            </tr>

          </table>

        </div>

        <div class="want_to_contact" style="height:auto; clear:both; overflow:auto;">

        <h2 style="color:#C8060E;">Your Check List</h2>

        

        <ul class="checklist">

<?php 

if(($row['Name'] == "") && ($row['Bodytype'] == "") && ($row['Complexion'] == "") && ($row['Age'] == "") && ($row['Maritalstatus']  == "") && ($row['Height'] == "") && ($row['Weight'] == "") && ($row['Language'] == "") && ($row['BloodGroup'] == ""))

	$photoclass = "prof_pending";

else

	$photoclass = "prof_complete";

?>

<li class="<?php echo $photoclass; ?>"><a href="myprofile.php">Personal Description</a></li>

<?php 

if(($row['Gothram'] == "") && ($row['Manglik'] == "") && ($row['Star'] == "") && ($row['POB'] == "") && ($row['Moonsign']  == "") && ($row['TOB'] == "") && ($row['Horosmatch'] == ""))

	$photoclass = "prof_pending";

else

	$photoclass = "prof_complete";

?>

<li class="<?php echo $photoclass; ?>"><a href="myprofile.php">Religious Information</a></li>

<?php 

if(($row['Diet'] == "") && ($row['Smoke'] == "") && ($row['Drink'] == ""))

	$photoclass = "prof_pending";

else

	$photoclass = "prof_complete";

?>

<li class="<?php echo $photoclass; ?>"><a href="myprofile.php">Life Style  </a></li>

<?php 

if(($row['Education'] == "") && ($row['Occupation'] == "") && ($row['EducationDetails'] == "")  && ($row['Employedin'] == "")  && ($row['Annualincome'] == ""))

	$photoclass = "prof_pending";

else

	$photoclass = "prof_complete";

?>

<li class="<?php echo $photoclass; ?>"><a href="myprofile.php">Profession </a></li>

<?php 

if(($row['Familyvalues'] == "") && ($row['FamilyDetails'] == "") && ($row['FamilyType'] == "")  && ($row['FamilyStatus'] == "")  && ($row['FamilyOrigin'] == ""))

	$photoclass = "prof_pending";

else

	$photoclass = "prof_complete";

?>

<li class="<?php echo $photoclass; ?>"><a href="myprofile.php">Family </a></li>

<?php 

if(($row['Country'] == "") && ($row['State'] == "") && ( $row['City'] == "")  && ($row['Residencystatus'] == ""))

	$photoclass = "prof_pending";

else

	$photoclass = "prof_complete";

?>

<li class="<?php echo $photoclass; ?>"><a href="myprofile.php">Location </a></li>

<?php 

if(($row['Hobbies'] == "") && ($row['OtherHobbies'] == ""))

	$photoclass = "prof_pending";

else

	$photoclass = "prof_complete";

?>

<li class="<?php echo $photoclass; ?>"><a href="myprofile.php">Hobbies</a></li>

<?php 

if(($row['Interests'] == "") && ($row['OtherInterests'] == ""))

	$photoclass = "prof_pending";

else

	$photoclass = "prof_complete";

?>

<li class="<?php echo $photoclass; ?>"><a href="myprofile.php">Interests </a></li>

<?php 

if(($row['Looking'] == "") && ($row['PE_Complexion'] == "") && ($row['PE_FromAge'] == "") && ($row['PE_Education'] == "") && ($row['PartnerExpectations'] == "") && ($row['PE_Religion'] == "") && ($row['PE_Countrylivingin'] == "") && ($row['PE_Caste'] == "") && ($row['PE_Height'] == "") && ($row['PE_Residentstatus'] == ""))

	$photoclass = "prof_pending";

else

	$photoclass = "prof_complete";

?>

<li class="<?php echo $photoclass; ?>"><a href="myprofile.php">Partner Preference</a></li>

<?php

//$countphoto_sql = "SELECT COUNT(*) AS photocount FROM photoalbum WHERE matriid ='".$strid."'";
$countphoto_sql = "SELECT Photo1, Photo2, Photo3, Photo4, Photo5, Photo6, Photo7 FROM register WHERE matriid ='".$strid."'";

$countphoto_exec = mysql_query($countphoto_sql);

$countphoto_fetch = mysql_fetch_array($countphoto_exec);

$photocount = 0;

if(($countphoto_fetch["Photo1"] != 'nophoto.gif') || ($countphoto_fetch["Photo2"] != 'nophoto.gif') || ($countphoto_fetch["Photo3"] != 'nophoto.gif') || (($countphoto_fetch["Photo4"] != 'nophoto.gif') && ($countphoto_fetch["Photo4"] != '') && ($countphoto_fetch["Photo4"] != 0)) || (($countphoto_fetch["Photo5"] != 'nophoto.gif') && ($countphoto_fetch["Photo5"] != '') && ($countphoto_fetch["Photo5"] != 0)) || (($countphoto_fetch["Photo6"] != 'nophoto.gif') && ($countphoto_fetch["Photo6"] != '') && ($countphoto_fetch["Photo6"] != 0)) || (($countphoto_fetch["Photo7"] != 'nophoto.gif') && ($countphoto_fetch["Photo7"] != '') && ($countphoto_fetch["Photo7"] != 0)))
{
	$photocount = 1;
}

//if($countphoto_fetch["photocount"] == 0)
if($photocount == 0)
	$photoclass = "prof_pending";

else

	$photoclass = "prof_complete";

?>

<li class="<?php echo $photoclass; ?>"><a href="addphoto.php">Photos </a></li>

<?php

$counthoros_sql = "SELECT COUNT(*) AS horoscount FROM onlinehoroscope WHERE custid ='".$strid."'";

$counthoros_exec = mysql_query($counthoros_sql);

$counthoros_fetch = mysql_fetch_array($counthoros_exec);

//print_r($counthoros_fetch);

if($counthoros_fetch["horoscount"] == 0)
{
	$photoclass = "prof_pending";
	$horolink  = "manage_horoscope.php";
	
	$horoschk = mysql_query("SELECT MatriID,Horoscheck FROM register where MatriID='$strid' and Horoscheck != 'NULL' ");
	$horocount = mysql_affected_rows();
	if($horocount > 0)
	{
	   $photoclass = "prof_complete";
	   $horolink   = "viewhoroscope.php?id=".$strid;
	}
	
}
else
{
	$photoclass = "prof_complete";
	$horolink   = "viewhoroscope.php?id=".$strid;
}
?>
<?php  if($row['Status'] == 'Active') { ?> 
<li class="<?php echo $photoclass; ?>"><a href="<?php echo $horolink; ?>">Horoscope </a></li>
<?php } else { 
	if($row['horo_match'] != 'Not Required') {
?>
<li class="<?php echo $photoclass; ?>"><a href="<?php echo $horolink; ?>">Horoscope </a></li>
<?php } else { ?>
		<li class="prof_pending"><a href="<?php echo $horolink; ?>">Horoscope </a></li>
<?php } ?>    
<?php }?>

<?php

$countvideo_sql   = "SELECT COUNT(*) AS videocount FROM managevideo WHERE matriid ='".$strid."' and status = 'Active'";

$countvideo_exec  = mysql_query($countvideo_sql);

$countvideo_fetch = mysql_fetch_array($countvideo_exec);


if($countvideo_fetch['videocount'] == 0)

	$photoclass = "prof_pending";

else

	$photoclass = "prof_complete";

?>

<li class="<?php echo $photoclass; ?>"><a href="managevideo.php">Videos </a></li>

<?

$sel = "select count(*) as cnt from verify_profile where matriid ="."'".$_SESSION['matriid']."' and approved  = 1" ;
$qry = mysql_query($sel);
$fetch  = mysql_fetch_array($qry );
if($fetch['cnt']>0 ) {
  $css = 'prof_complete';
  $verify_link  = "javascript:;";
  $verify_title = 'You\'ve already Verified your Profile';
} else{
  $css = "prof_pending";
  $verify_link  = "verify_profile.php";
  $verify_title = '';
}
?>
<li class="<?php echo $css; ?>"><a href="<?php echo $verify_link; ?>" title="<?php echo $verify_title; ?>">Verify Profile</a></li>
</ul>

        </div>



      </div>
	  
	  
	  <?php // include("my_addons.php");?>
	  

        			   <?php include("myint_inc.php");?>


			
			  
			  <?php include("my_phone_password_request.php");?>
			  
			  
			  <?php include("my_photo_password_request.php");?>
			  <?php include("my_photo_request.php");?>
			  
			  <?php include("my_horoscope_list.php");?>
			  
			  <?php include("mymessage_inc.php");?>

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
<!-- CONTENT AREA ENDS HERE ###################################################  -->  



<!-- FOOTER STARTS HERE ###################################################  -->

<?php include("include/footermenu.php"); ?>

<!-- FOOTER ENDS HERE ###################################################  -->    







</div>

</body>

</html>