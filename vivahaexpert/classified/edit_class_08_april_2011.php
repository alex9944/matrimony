<?php
session_start();
ob_start();
include("config/error.php");
include("pagination.php");
include("config/db_configue.php");
$postid=$_REQUEST['postid'];

//$user_id=$_SESSION['user_id'];

if(!isset($_SESSION['userid']))
{
header("location:index.php");
}
$user_id=$_REQUEST['user_id'];
$p_id=$_REQUEST['p_id'];
//echo "select * from `class_postclassified` where `user_id`='$_SESSION[userid]'"; 
//$exec=select_query("select * from `class_postclassified` where `user_id`='$_SESSION[userid]' order by p_id desc");


if($_REQUEST['p_id'])
{
echo "delete from `class_postclassified` where `p_id`='$p_id'"; 
mysql_query("delete from `class_postclassified` where `p_id`='$p_id'");
header("location:edit_class.php");
}

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
		<div class="in_head" style="padding-bottom:20px;">
			<div class="in_head">
				<div class="in_head">
					<div class="head_txt">My Ads</font></div>
				</div>
			</div>
		</div>
		<div class="frmcont">
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="classified-table">
  <?php
  if($_REQUEST['mesg']=="1")
	{
  ?>
  <tr><td colspan="8" align="center" style="color:red;">Classified Updated Successfully</td></tr>
  <?php } ?>
  <tr>
  
    <th width="6%" align="center" class="tab_head"><strong>S.No.</strong></th>
    <th width="18%" class="tab_head"><strong>Category</strong></th>
    <th width="" class="tab_head"><strong>Title</strong></th>
    <th width="15%" class="tab_head"><strong>Country</strong> </th>
    <th width="8%" align="center" class="tab_head">Edit </th>
	<th width="8%" align="center" class="tab_head">Delete</th>
  </tr>
  
   <?php
   
   
  $select="select * from `class_postclassified` where `user_id`='$_SESSION[userid]' order by p_id desc";
  $strget="";
  $rowsPerPage =10;
  if(isset($_REQUEST['page']))
  {
  $i=$_REQUEST['page']*$rowsPerPage;
  }
  else
  {
  $i=1;
  }
  $query=mysql_query(getPagingQuery1($select, $rowsPerPage,$strget)) or die(mysql_error()); 
  $pagingLink = getPagingLink1($select, $rowsPerPage,$strget); 
  $countuser=mysql_num_rows($query);
   
   
   //$i=1;
  while($seldata=fetchclass($query))
  {
?>
  <tr >
    <td align="center" class="tab1"><strong><?php echo $i;?></strong></td>
    <td class="tab1"><strong><?php  $seldata['p_category']; 
	$cat=mysql_fetch_array(mysql_query("select * from `class_category` where `c_id`='$seldata[p_category]'"));
	echo $cat['c_name'];
	?></strong></td>
    <td class="tab1"><strong><?php echo $seldata['p_title'];  ?></strong></td>
    <td class="tab1"><span class="style1">
      <?php $seldata['p_country'];
	$cont=mysql_fetch_array(mysql_query("select * from `class_country` where `countryid`='$seldata[p_country]'"));
	echo $cont['country']; 
	 ?>
    </span></td>
	
    <td align="center" class="tab1"><span class="ad_text_color"><a href="edit_classified.php?p_id=<?php echo $seldata['p_id'] ?>"> <img src="admin/images/edit_f2.png" width="32" height="32" border="0" title="Edit"/> </a></span></td>
    
    <td align="center" class="tab1"> <a href="javascript:if(confirm('Are you Sure Want To Delete')){ window.location='edit_class.php?p_id=<?php echo $seldata['p_id'] ?>';}" ><img src="images/delete_x.jpg" border="0" /></a></td>
  </tr>
  <?php
 // $cont=mysql_query("select * from class_country where countryid='$usid'");
//  $count=mysql_num_rows($cont);
//  if($count > 1)
//  {
//  while($country1=mysql_fetch_array($count))
  ?>
  <!--<tr >
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"></td>
  </tr><br />-->
 <!-- <tr><td colspan="5" height="5" bgcolor="#CCCCCC"></td></tr>-->
  <?php  $i++;
  } ?>
 <!-- <tr><td colspan="8" align="right" valign="baseline" style="right:10px;" class="link1"><span class="ad_text_color"><a href="welcome.php">Back </a></span></td>
  </tr> -->
  
  <tr>
    <td style="padding-top:20px;" colspan="8" align="center"><?php  
		  if($countuser > 0)
		  {
		   echo '<div align="center" class="ad_text_color">'.$pagingLink.'<br /></div>';
		  }
		  else
		  {
		  echo "<font color=Red>No Records Found</font>"."<br><br>";
		  echo '<div align="center" class="ad_text_color">'.$pagingLink.'<br /></div>';
		  } 
		  ?>
		  
		  </td>
  </tr>
  
</table>
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
