<?php session_start();
ob_start();
include "../config/error.php";
$viewid=$_REQUEST['viewid'];
$view_select=mysql_query("select * from `class_postclassified` where `p_id`='$viewid'");
$view_fetch=mysql_fetch_array($view_select);

$cat_id=$view_fetch['p_category'];
$cat_select=mysql_query("select * from `class_category` where `c_id`='$cat_id'");
$cat_fetch=mysql_fetch_array($cat_select);
$subcat_id=$view_fetch['p_subcategory'];
$subcat_select=mysql_query("select * from `class_subcategory` where `sid`='$subcat_id'");
$subcat_fetch=mysql_fetch_array($subcat_select);   
$classtype_id=$view_fetch['p_classtype'];
$classtype_select=mysql_query("select * from `class_type` where `cid`='$classtype_id'");
$classtype_fetch=mysql_fetch_array($classtype_select);
$country_id=$view_fetch['p_country'];
$country_select=mysql_query("select * from `class_country` where `countryid`='$country_id'");
$country_fetch=mysql_fetch_array($country_select);
$state_id=$view_fetch['p_state'];
$state_select=mysql_query("select * from `class_state` where `stateid`='$state_id'");
$state_fetch=mysql_fetch_array($state_select);
$city_id=$view_fetch['p_city'];
$p_date=$view_fetch['p_date'];
if(isset($_REQUEST['delid'])){
	
		 $userid_admin=$_REQUEST['delid'];
	
		mysql_query("delete from class_postclassified where p_id='$userid_admin'");
	}
	
	if(isset($_REQUEST['inactid']))
   {
   		 $userid_admin=$_REQUEST['inactid'];
		mysql_query("update class_postclassified set p_status='0' where p_id='$userid_admin' ");
		
	}
	if(isset($_REQUEST['actid'])){
		  $userid_admin=$_REQUEST['actid'];
		  mysql_query("update class_postclassified set p_status='1' where p_id='$userid_admin' ");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $adminsitename;?></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script>
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
    <td width="20%" align="center" class="ad_text_color"><a href="individual_usertype.php?userview=2" class="link1" >All</a></td>
        <td width="20%" align="center" class="ad_text_color"><a href="individual_usertype.php?userview=2" class="link1" >Payment</a></td>-->
        <!--<td width="21%" align="center" class="ad_text_color"><a href="individual_usertype.php?userview=1" class="link1" >Free</a></td>
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
                <td bgcolor="#fef5fa"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="left" valign="top" ><form action="manageuser.php?delid=<?php echo $view_fetch['p_id'];?>" method="post" enctype="multipart/form-data" name="postForm" id="form1" onsubmit="return postCheck();">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center" style="border:solid 1px #0F507F;">
                                      <tr>
                                        <td colspan="3" align="right" class="bold"><a href="javascript:history.back();" class="ad_text_color">Back</a></td>
                                      </tr>
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
                                        <td colspan="3" class="head_bg"><strong>View Classified: </strong></td>
                                      </tr>
                                      <tr>
                                        <td width="37%" class="bold">Category<font color="#FF0000" size="-4">*</font> </td>
                                        <td width="2%" align="center" class="bold"><strong>:</strong></td>
                                        <td width="61%"><?php echo $cat_fetch['c_name'];?></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Subcategory<font color="#FF0000" size="-4">*</font></td>
                                        <td align="center" class="bold">:</td>
                                        <td><?php echo $subcat_fetch['subcategoryname'];?></td>
                                      </tr>
                                      <!--<tr>
                                        <td class="bold">Classified Type<font color="#FF0000" size="-4">*</font></td>
                                        <td align="center" class="bold">:</td>
                                        <td><?php echo $classtype_fetch['value'];?></td>
                                      </tr>-->
                                      <tr>
                                        <td class="bold">Title<font color="#FF0000" size="-4">*</font></td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $view_fetch['p_title'];?></td>
                                      </tr>
									  <tr>
                                        <td class="bold">City<font color="#FF0000" size="-4">*</font></td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $view_fetch['p_city'];?></td>
                                      </tr>
									   <tr>
                                        <td class="bold">State<font color="#FF0000" size="-4">*</font></td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $view_fetch['p_state'];?></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Country<font color="#FF0000" size="-4">*</font></td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $country_fetch['country'];?></td>
                                      </tr>
                                     
                                      
                                      <tr>
                                        <td class="bold">Description <font color="#FF0000" size="-4">*</font></td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $view_fetch['p_description'];?>                                       </td>
                                      </tr>
                                     <?php 
										$image=$view_fetch['p_photo1'];
										if($image!="")
										{
										$mage_res="../".$image;
										}
										else
										{
										$mage_res="images/img_noimg.jpg";
										}?>
                                      <tr>
                                        <td class="bold">Posted Date<font color="#FF0000" size="-4">*</font> </td>
                                        <td align="center" class="bold">:</td>
                                        <td><?php echo $p_date; ?></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Photo1</td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><img src="<?php echo $mage_res; ?>" width="100" height="100" /></td>
                                      </tr>
									  <?php 
										$image1=$view_fetch['p_photo2'];
										if($image1!="")
										{
										$mage_res1="../".$image1;
										}
										else
										{
										$mage_res1="images/img_noimg.jpg";
										}?>
                                      <tr>
                                        <td class="bold">Photo2</td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><img src="images/NOIMAGE.jpeg" height="100" width="100"/></td>
                                      </tr>
									  <?php 
										$image2=$view_fetch['p_photo3'];
										if($image2!="")
										{
										$mage_res2="../".$image2;
										}
										else
										{
										$mage_res2="images/img_noimg.jpg";
										}?>
                                      <tr>
                                        <td class="bold">Photo3</td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><img src="images/NOIMAGE.jpeg" height="100" width="100"/></td>
                                      </tr>
									  <?php 
										$image3=$view_fetch['p_photo4'];
										if($image3!="")
										{
										$mage_res3="../".$image3;
										}
										else
										{
										$mage_res3="images/img_noimg.jpg";
										}?>
                                      <tr>
                                        <td class="bold">Photo4</td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><img src="images/NOIMAGE.jpeg" height="100" width="100"/></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" class="head_blue"><strong> Responses for the above listing should be sent to :</strong></td>
                                      </tr>
                                      
                                      <tr>
                                        <td class="bold">Contact Name<font color="#FF0000" size="-4">*</font> </td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $view_fetch['p_conname'];?></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Contact Email<font color="#FF0000" size="-4">*</font> </td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $view_fetch['p_conemail'];?></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Contact Number<font color="#FF0000" size="-4">*</font> </td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><?php echo $view_fetch['p_conno'];?></td>
                                      </tr>
                                      
                                      <tr><td>&nbsp;</td><td>&nbsp;</td>
									  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="35%">&nbsp;</td>
   <td width="11%" align="center" bgcolor="#faf3f7"><a href="editclassified.php?p_id=<?php echo $view_fetch['p_id'];?>"><img src="images/edit_f2.png" width="32" height="32" border="0" title="Edit"/></a></td>

	<td width="13%" align="center" valign="bottom"><input name="delete" type="image"  src="../images/delete_x.jpg"class="button" value="Delete" onclick="if( confirm('Are you sure you want to Delete this Record?') )
						{
						
						return true;
						}
						else
						{	
						return false; 
						}" />
 <!-- demo	  <input name="delete" type="image"  src="../images/delete_x.jpg"class="button" title="Delete" value="Delete" onclick="alert('This Feature Is Disabled In The Demo Version...');
return false;" /></td> -->
    <td width="33%" class="bold"><?PHP
		  $userid_admin=$view_fetch['p_id']; 
		  $activate=$view_fetch['p_status'];
		  if($activate==1)
		  {
		  ?>
        <a href="manageclassified.php?inactid=<?php echo $userid_admin;?>" class="ad_text_color"
		    onclick="if( confirm('Are you sure you want to Inactivate this Record?') )
			{
			return true;
			}
			else
			{
			return false; 
			}" style="text-decoration:none; "><img src="images/activate_btn.png" border="0" /></a>
			
			
		<!-- demo	<a href="manageclassified.php?inactid=<?php //echo $userid_admin;?>" class="ad_text_color" style="text-decoration:none;" onclick="return editfun()">Inactivate</a> -->
        <?php } if($activate==0){?>
        <a href="manageclassified.php?actid=<?Php echo $userid_admin;?>" class="ad_text_color" onclick="if(confirm('Are you sure you want to Activate this Record?') )
								{
								 return true;
								}
								else
								{
								 return false; 
								}" style="text-decoration:none; "><img src="images/deactivate_btn.png" border="0" /></a>
	  <!-- demo <a href="manageclassified.php?actid=<?Php //echo $userid_admin;?>" class="ad_text_color" style="text-decoration:none;" onclick="return editfun()">Activate</a> -->
        <?php } ?>        </td>
    <td width="8%" align="right" class="bold"><span class="ad_text_color"><a href="manageclassified.php"> Back </a></span></td>
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
