<?php session_start();
ob_start();
include "../config/error.php";
if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}
$userviewid=$_REQUEST['userviewid'];
$view_select=mysql_query("select * from `class_register` where `reg_id`='$userviewid'");
$view_fetch=mysql_fetch_array($view_select);

$reg_name=$view_fetch['reg_name'];

//$view_city=$view_fetch['reg_city'];
//	 $city_select=mysql_query("select * from `class_city` where `cityid`='$view_city'");
//$city_fetch=mysql_fetch_array($city_select);
//$user_city=$city_fetch['city_name'];
$user_city=$view_fetch['reg_city'];

  $view_state=$view_fetch['reg_state'];
	  $state_select=mysql_query("select * from `class_state` where `stateid`='$view_state'");
$state_fetch=mysql_fetch_array($state_select);
$user_state=$state_fetch['state_name'];
//$user_state=$view_fetch['reg_state'];

$view_country=$view_fetch['reg_country'];
	  
$country_select=mysql_query("select * from `class_country` where `countryid`='$view_country'");
$country_fetch=mysql_fetch_array($country_select);
$user_country=$country_fetch['country'];

$reg_email=$view_fetch['reg_email'];
$reg_phone=$view_fetch['reg_phone'];
$reg_website=$view_fetch['reg_website'];
$reg_address=$view_fetch['reg_address'];

$classtype_id=$view_fetch['reg_usertype'];
$classtype_select=mysql_query("select * from `membership` where `id`='$classtype_id'");
$classtype_fetch=mysql_fetch_array($classtype_select);
$usertype=$classtype_fetch['member'];

$posted_date=$view_fetch['posted_date'];

$ip_addr=$view_fetch['ip_addr'];

if(isset($_REQUEST['delid'])){
	
		 $userid_admin=$_REQUEST['delid'];
	
		mysql_query("delete from class_register where reg_id='$userid_admin'");
	}
	
	if(isset($_REQUEST['inactid']))
   {
   		 $userid_admin=$_REQUEST['inactid'];
		mysql_query("update class_register set reg_status='0' where reg_id='$userid_admin' ");
		
	}
	if(isset($_REQUEST['actid'])){
		  $userid_admin=$_REQUEST['actid'];
		  mysql_query("update class_register set reg_status='1' where reg_id='$userid_admin' ");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $adminsitename;?></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript">

function editfun()
{

alert("This is demo version not allowed to change");
  return false;	


}


</script>
</head>

<body>
<table width="98%" border="0" cellpadding="3" cellspacing="1" align="center">
  <tr>
    <td colspan="9"><?php include("includes/adminheader.php");?></td>
  </tr>
  <tr>
    <td colspan="9">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9"><?php include("includes/adminmenu.php");?></td>
  </tr>
 <!-- <tr>
    <td align="center" width="32%" class="ad_text_color"><a href="individual_user.php?userview=All" class="link1">All</a></td>
        <td width="32%" align="center" class="ad_text_color"><a href="individual_user.php?userview=Payment" class="link1" >Payment</a></td>-->
        <!--<td width="32%" align="center" class="ad_text_color"><a href="individual_user.php?userview=Free" class="link1">Free</a></td>
  </tr>-->
  
  
 
        
        
         <tr bgcolor="#FFFFFF">
          <td colspan="12"><br />
            <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="4%" align="right" valign="bottom"><!--<img src="../images/box_left_top.jpg" width="17" height="17" /> --></td>
                <td width="92%" background="../images/box_top.jpg" style="background-position:bottom; background-repeat:repeat-x;">&nbsp;</td>
                <td width="4%" align="left" valign="bottom"><!--<img src="../images/box_right_top.jpg" width="17" height="17" /> --></td>
              </tr>
              <tr>
                <td background="../images/box_left_center.jpg" style="background-position:right; background-repeat:repeat-y;">&nbsp;</td>
                <td bgcolor="#fef5fa"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center"  style="border:solid 1px #0F507F;">
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="left" valign="top" ><form action="manageuser.php?delid=<?php echo $view_fetch['reg_id'];?>" method="post" enctype="multipart/form-data" name="postForm" id="form1" onsubmit="return postCheck();" >
                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center">
                                      <tr>
                                        <td colspan="3" align="center" ><?php 
					if($_REQUEST['mess1']==1)
					{
					echo "<font color='green'><strong>Free Member Cant Post Classified Please </strong>&nbsp;<a href='membership.php' class='ad_text_color'>Upgrade Membership</a> </font>";
					}
					?>                                        </td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" class="head_bg"><strong>View User Details: </strong></td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" align="right" class="bold"><a href="manageuser.php" class="ad_text_color">Back</a></td>
                                      </tr>
                                      <tr>
                                        <td width="37%" class="bold">User Name<font color="#FF0000" size="-4">*</font> </td>
                                        <td width="2%" align="center" class="bold"><strong>:</strong></td>
                                        <td width="61%"><?php echo $reg_name;?></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">City<font color="#FF0000" size="-4">*</font></td>
                                        <td align="center" class="bold">:</td>
                                        <td><?php echo $user_city;?></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">State<font color="#FF0000" size="-4">*</font></td>
                                        <td align="center" class="bold">:</td>
                                        <td><?php echo $user_state;?></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Country</td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $user_country;?></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Address</td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $reg_address;?></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Email ID <font color="#FF0000" size="-4">*</font></td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $reg_email;?></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Phone Numer</td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $reg_phone;?></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Website</td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><a href="mailto:<?php echo $reg_website;?>"><?php echo $reg_website;?></a></td>
                                      </tr>
                                     
                                        <!--<td class="bold">User Type </td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $usertype;?></td>-->
                                
									  
                                      <tr>
                                        <td class="bold">Posted Date </td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $posted_date;?></td>
                                      </tr>
									  
									  <tr>
                                        <td class="bold">IP Address </td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $ip_addr;?></td>
                                      </tr>
                                     
                                      <tr>
                                        <td align="right" colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td width="66%">&nbsp; </td>
    <td width="6%"><a href="edituser.php?usereditid=<?php echo $view_fetch['reg_id'];?>" class="bold">   <img src="images/edit_f2.png" width="32" height="32" border="0" title="Edit" /></a></span></td>
    <td width="7%"> 
	 <!-- demo <input name="delete2" type="image"  src="../images/delete_x.jpg"class="button" title="Delete" value="Delete" onclick="return editfun();" /></span> -->
	 <input name="delete2" type="image"  src="../images/delete_x.jpg"class="button" title="Delete" value="Delete" onclick="if(confirm('Are you Sure to delete this record'))
	   { return true; } else {return false;}" /></span>
	 </td>
<td  class="bold"> <span class="ad_text_color" ><?PHP
		  $userid_admin=$view_fetch['ip_addr']; 
		  $activate=$view_fetch['reg_status'];
		  if($activate==1)
		  {
		  ?>
        <a href="manageuser.php?inactid=<?php echo $userid_admin;?>" class="register"
		    onclick="if( confirm('Are you sure you want to activate this Record?') )
			{
			return true;
			}
			else
			{
			return false; 
			}" style="text-decoration:none; "><img src="images/deactivate_btn.png" border="0" /></a>
            
            
      <!-- demo     <a href="manageuser.php?inactid=<?php //echo $userid_admin;?>" class="register"
		    onclick="return editfun();" style="text-decoration:none; ">Activate</a>  -->
            
        <?php } if($activate==0){?>
        <a href="manageuser.php?actid=<?PHP echo $userid_admin;?>" class="register" onclick="if(confirm('Are you sure you want to InActivate this Record?') )
								{
								 return true;
								}
								else
								{
								 return false; 
								}" style="text-decoration:none; "><img src="images/activate_btn.png" border="0" /></a>
                                
                                
                                
                        <!-- demo         <a href="manageuser.php?actid=<?PHP //echo $userid_admin;?>" class="register" onclick="return editfun();" style="text-decoration:none; ">Inactivate</a> -->
                                
        <?php } ?>  </span>  </td>    <td width="4%"><span class="ad_text_color"><a href="manageuser.php" class="bold"> Back </a></span></td>
  </tr>
</table>
</td>
										
                                      </tr>
                                    </table>
                                </form></td>
                              </tr>
                            </table></td>
                          </tr>
                      </table></td>
                    </tr>
                </table></td>
                <td background="../images/box_right_center.jpg" style="background-position:left; background-repeat:repeat-y;">&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><!--<img src="../images/box_left_bottom.jpg" width="17" height="17" /> --></td>
                <td background="../images/box_bottom.jpg" style="background-position:top; background-repeat:repeat-x;">&nbsp;</td>
                <td align="left" valign="top"><!--<img src="../images/box_right_bottom.jpg" width="17" height="17" /> --></td>
              </tr>
            </table></td>
        </tr>
</table>
</body>
</html>
