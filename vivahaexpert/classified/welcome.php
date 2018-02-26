<?php ob_start();
session_start();
include("config/error.php");
if(!isset($_SESSION['userid']))
{
header("location:index.php");
}

$id=$_SESSION['userid'];

$regsql=mysql_query("select * from `class_register` where `reg_id`='$id'");
$View_fetch=mysql_fetch_array($regsql);
$view_name=$View_fetch['reg_name'];
$view_address=$View_fetch['reg_address'];
$view_country=$View_fetch['reg_country'];
$country_select=mysql_query("select * from `class_country` where `countryid`='$view_country'");
$country_fetch=mysql_fetch_array($country_select);
$country_name=$country_fetch['country'];
$view_state=$View_fetch['reg_state'];
$state_select=mysql_query("select * from `class_state` where `stateid`='$view_state'");
$state_fetch=mysql_fetch_array($state_select);
//$state_name=$View_fetch['reg_state'];
//$view_city=$View_fetch['reg_city'];
//$city_select=mysql_query("select * from `class_city` where `cityid`='$view_city'");
//$city_fetch=mysql_fetch_array($city_select);
$city_name=$View_fetch['reg_city'];
$view_email=$View_fetch['reg_email'];
$view_phone=$View_fetch['reg_phone'];
$reg_website=$View_fetch['reg_website'];
$view_lastview=$View_fetch['last_visit'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $sitename;?></title>
<link type="text/css" rel="stylesheet" href="style/main.css"  />
</head>

<body>
<div id="container">
	<h1 id="header_font">
	  <strong><?php echo $sitename;?> classifieds</strong>
	</h1>
	<div class="contend_main">
		<?php include("includes/header.php");?>
	<div class="clr"></div>
	<div class="con_lft">	
		<div class="element-box">
			<div class="t">
				<div class="t">
					<div class="t"></div>
				</div>
			</div>
			<div class="m" style="height:500px;">
				<?php include("includes/left.php");?>
			</div>
			<div class="b">
				<div class="b">
					<div class="b"></div>
				</div>
			</div>
		</div>
		<!-- left ads -->
		<?php include("includes/left-ads.php");?>
	</div>
	<div class="con_rgt">
	
		<div class="element-box">
			<div class="t">
				<div class="t">
					<div class="t"></div>
				</div>
			</div>
		<div class="m" style="padding-left:10px;padding-right:10px;">
		<div class="">
			<a href="index.php" class="siteLink">Home</a>&nbsp;&nbsp;&nbsp;
			<a href="postclassified.php" class="siteLink">Post Ads</a>&nbsp;&nbsp;&nbsp;
			<a href="advance_search.php" class="siteLink">Search</a>&nbsp;&nbsp;&nbsp;
			<a href="edit_class.php" class="siteLink">My Ads</a>
		</div><br />
		<div class="in_head">
			<div class="in_head">
				<div class="in_head">
					<div class="head_txt">Manage Profile</font></div>
				</div>
			</div>
		</div>
		
		<div class="frmcont">
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td align="left" valign="top"  ><form id="form1" name="indexform" method="post" action="" onsubmit="return regCheck();">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                
                                <tr>
                                  <td colspan="5" align="center"><?php 
					if($_REQUEST['mes']==1)
					{
					echo "<font color='green'><strong>Your Profile Updated Successfully</strong> </font>";
					}
					
					?>                                  </td>
                                </tr>
                                <?php if($_REQUEST['mess']=="1")
					{
					?>
                                <tr>
                                  <td height="15" colspan="5" align="center" class="sub_title"><strong style="color:red;">Classified Added Succesfully</strong></td>
                                </tr>
                                <?php
				  }
				  ?>
                                
                                <tr>
                                  <td width="5%" class="bold">&nbsp;</td>
                                  <td width="16%" height="30" class="bold" >Name</td>
                                  <td width="5%" align="center" class="bold">:</td>
                                  <td colspan="2" ><?php echo $view_name;?></td>
                                </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" class="bold">Address</td>
                                  <td align="center" class="bold">:</td>
                                  <td colspan="2" ><?php echo $view_address;?></td>
                                </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" class="bold">Country</td>
                                  <td align="center" class="bold">:</td>
                                  <td colspan="2" ><?php if( $country_name!='') { echo $country_name; } else { echo "India"; } ?></td>
                                </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" class="bold">State</td>
                                  <td align="center" class="bold">:</td>
                                  <td colspan="2" ><?php echo $state_fetch['state_name'];?></td>
                                </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" class="bold">City</td>
                                  <td align="center" class="bold">:</td>
                                  <td colspan="2" ><?php echo $city_name;?></td>
                                </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" class="bold">Contact Number</td>
                                  <td align="center" class="bold">:</td>
                                  <td colspan="2" ><?php echo $view_phone;?></td>
                                </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" class="bold">Email ID</td>
                                  <td align="center" class="bold">:</td>
                                  <td colspan="2">
								  <?php 
								  if(!isset($_SESSION['dlogin'])){
								  echo '<a class="siteLink" href="mailto:'.$view_email.'">'.$view_email.'</a>';
								  }
								  else {
								  ?>
								  <img src="blur_id.jpg" alt="Didnot Show ID" title="Didnot Show ID"  />
								  <?php } ?></td>
                                </tr>
                                <tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" class="bold">Website Url </td>
                                  <td align="center" class="bold">:</td>
                                  <td colspan="2"><?php if($reg_website == ""){echo "Not Mentioned"; } else { echo '<a target="_blank" class="siteLink" href="'.$reg_website.'">'.$reg_website.'</a>';} ?></td>
                                </tr>
								<tr><td height="10"></td></tr>
								<tr>
                                  <td class="bold">&nbsp;</td>
                                  <td height="30" class="bold"><input type="Button" onclick="location.href='editprofile.php'" value="Edit Profile" /></td>
                                  <td align="center" class="bold"></td>
                                  <td colspan="2"><input type="Button" onclick="location.href='changepassword.php'" value="Change Password" /></td>
                                </tr>
								
								<tr><td height="10"></td></tr>
                              </table>
                          </form></td>
                        </tr>
                      </table>
					  
		</div>
		<div class="in_head">
			<div class="in_head">
				<div class="in_head">
					<div class="head_txt">Manage Classifieds</font></div>
				</div>
			</div>
		</div>
		
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td align="left" valign="top"  ><form id="form1" name="indexform" method="post" action="" onsubmit="return regCheck();">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
							  	<tr><td height="10"></td></tr>
                                <tr>
                                  <td width="50%" height="47" colspan="3" align="center" class="link1">&nbsp;&nbsp;&nbsp;&nbsp;<input type="Button" onclick="location.href='postclassified.php'" value="Add Classified" /></td>
                                  <td align="center" class="link1"><input type="Button" onclick="location.href='edit_class.php'" value="View my ads" /></td>
                                </tr>
                              </table>
                          </form></td>
                        </tr>
                      </table>
		<div class="clr"></div>
		</div>
		<div class="b">
			<div class="b">
				<div class="b"></div>
			</div>
		</div>
		</div>
		<!-- center ads -->
		<?php include("includes/center-ads.php");?>
	</div>
	<div class="clr"></div>
	<?php include("includes/footer.php");?>
	</div>
</div>
<div class="bottom_line"></div>
</body>
</html>
