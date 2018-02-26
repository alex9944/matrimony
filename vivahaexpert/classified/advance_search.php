<?php
session_start();
ob_start();
include("config/error.php");
echo $postid=$_REQUEST['postid'];
//$user_id=$_SESSION['user_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $sitename;?></title>
<link type="text/css" rel="stylesheet" href="style/main.css"  />
<script language="JavaScript" src="ajax/ajaxfunctions2.js"></script>
<script language="javascript">

function ad_srch_valid(){

var category=document.advsearch.category.value;
			if(category=="")
			{
					alert("Please Select Your category");
					document.advsearch.category.focus();
					return false;
			}		
			
var subcategory=document.advsearch.subcategory.value;
			if(subcategory=="")
			{
					alert("Please Select Your subcategory");
					document.advsearch.subcategory.focus();
					return false;
			}
			
var keyword=document.advsearch.keyword.value;
			if(keyword=="")
			{
					alert("Please Select Your keyword");
					document.advsearch.keyword.focus();
					return false;
			}
}

 
</script>
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
			<div class="" style="padding-bottom:14px;">
				<a href="index.php" class="siteLink">Home</a>&nbsp;&nbsp;&nbsp;
				<a href="postclassified.php" class="siteLink">Post Ads</a>&nbsp;&nbsp;&nbsp;
				<a href="advance_search.php" class="siteLink">Search</a>&nbsp;&nbsp;&nbsp;
				<a href="edit_class.php" class="siteLink">My Ads</a>
			</div>
				<div class="in_head">
					<div class="in_head">
						<div class="in_head">
							<div class="head_txt">Advance Search</div>
						</div>
					</div>
				</div>
				<div>
					<form action="advance_result.php" method="post" enctype="multipart/form-data" name="advsearch" id="form1">
                                <table width="85%" border="0" cellspacing="0" cellpadding="5" style="font:normal 12px arial;color:#666666;" align="center">
                                  <tr>
                                    <td colspan="3" align="center" ><?php 
					if($_REQUEST['mess1']==1)
					{
					echo "<font color='green'><strong>Free Member Cant Post Classified Please </strong>&nbsp;<a href='membership.php' class='ad_text_color'>Upgrade Membership</a> </font>";
					}
					?>                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="15%" class="bold"><font color="#FF0000">*</font>&nbsp;Category</td>
                                    <td width="4%" align="center" class="bold"><strong>:</strong></td>
                                    <td width="61%"><select name="category" onchange="FUN3(this.value)" class="combo_box">
                                        <option value="">Select Category</option>
                                        <?php  $sta1=mysql_query("select * from class_category");
		                  while($con1=mysql_fetch_array($sta1)) {?>
                                        <option value="<?php echo $con1['c_id'];?>"><?php echo $con1['c_name'];?></option>
                                        <?php } ?>
                                      </select>                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="bold"><font color="#FF0000">*</font>&nbsp;Subcategory</td>
                                    <td align="center" class="bold">:</td>
                                    <td><div id="subcategory">
                                        <select name="subcategory" class="combo_box">
                                          <option value="">Select Subcategory</option>
                                        </select>
                                    </div></td>
                                  </tr>
                                  
                                  <tr>
                                    <td class="bold"><font color="#FF0000">*</font>&nbsp;Keyword</td>
                                    <td align="center" class="bold"><strong>:</strong></td>
                                    <td><input name="keyword" type="text" id="keyword" value="Search" class="text_box" onblur="Getback(this);" onClick="doClear(this);" /></td>
                                  </tr>
                               <!--<tr>
                    <td class="bold">Start Date<font color="#FF0000" size="-4">*</font> </td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td height="25" colspan="2" align="left" ><input id="godate"  name="godate" type="text" size="15" readonly="true" onclick="javascript:NewCal('godate','ddmmyyyy')">&nbsp;<a href="javascript:NewCal('godate','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date" style="vertical-align:bottom;"></a></td>
                    </tr>-->
                                  <!--<tr>
                    <td class="bold">End Date<font color="#FF0000" size="-4">*</font> </td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td height="25" colspan="4" align="left" ><input id="godate1"  name="godate1" type="text" size="15" readonly="true" onclick="javascript:NewCal('godate1','ddmmyyyy')">&nbsp;<a href="javascript:NewCal('godate1','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date" style="vertical-align:bottom;"></a></td>
                    </tr>-->


                                  <?php 
					$postselect=mysql_query("select * from `class_register` where `reg_id`='$usid'");
					
					$postfetch=mysql_fetch_array($postselect);
					$postname=$postfetch['reg_name'];
					$postemail=$postfetch['reg_email'];
					$postphone=$postfetch['reg_phone'];
					?>

                                  <tr>
                                    <td colspan="3" align="center">
										<input name="adv_search" type="submit" class="but_bg" value="Search" id="adv_search" onclick="return ad_srch_valid()" />&nbsp;&nbsp;&nbsp;
										<input type="Button" onclick="location.href='welcome.php'" value="Back" />
									</td>
                                  </tr>
                                  
                                </table>
                            </form>
				</div>
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
