<?php session_start();
ob_start();
include("config/error.php");

$postid=$_REQUEST['postid'];
$usid=$_SESSION['userid'];
$user_id=$_REQUEST['user_id'];

if(!isset($_SESSION['userid']))
{
header("location:index.php");
}
$p_id=$_REQUEST['p_id'];
$reg_id=$_REQUEST['reg_id'];
//echo "select * from `class_postclassified` where `userid`='$usid'"; exit;
if($_REQUEST['p_id'])
{
//echo "select * from `class_postclassified` where `p_id`='$p_id'";
$detail1=mysql_fetch_array(mysql_query("select * from `class_postclassified` where `p_id`='$p_id'"));


$creg_profile1=mysql_fetch_array(mysql_query("select * from class_postclassified where p_id='$p_id'"));

echo mysql_error();
}
?>
<?php 
if(isset($_REQUEST['edit_form']))
{
$category=$_REQUEST['category'];

$subcategory=$_REQUEST['subcategory'];

$classtype=$_REQUEST['classtype'];


$title=$_REQUEST['title'];
$country=$_REQUEST['country'];
$state=$_REQUEST['state'];
$city=$_REQUEST['city'];
$description=$_REQUEST['description'];
/*echo $godate=$_REQUEST['godate'];
echo $godate1=$_REQUEST['godate1'];*/

/*echo $img1=$_FILES['photo1']['name'];
$tmpfilename1=$_FILES['photo1']['tmp_name'];
$upload1="uploads/".$img1;
move_uploaded_file($tmpfilename1,$upload1);

echo $img2=$_FILES['photo2']['name'];
$tmpfilename2=$_FILES['photo2']['tmp_name'];
$upload2="uploads/".$img2;
move_uploaded_file($tmpfilename2,$upload2);

echo $img3=$_FILES['photo3']['name'];
$tmpfilename3=$_FILES['photo3']['tmp_name'];
$upload3="uploads/".$img3;
move_uploaded_file($tmpfilename3,$upload3);

echo $img4=$_FILES['photo4']['name'];
$tmpfilename4=$_FILES['photo4']['tmp_name'];
$upload4="uploads/".$img4;
move_uploaded_file($tmpfilename4,$upload4);*/

// photo 1 code starts here 

$img1=$_FILES['photo1']['name'];

$imgerr=0;
$sizeerr1msg="";

if($img1){

$size1 = $_FILES['photo1']['size'];

if ($size1 > 2097152)  //2097152
{					   
$imgerr=1;
$sizeerr1msg='<font color="red"><strong>You have exceeded the size limit of Photo1!</strong></font>';
}
else{

$imgext=explode(".",$img1);
$imgext1=count($imgext)-1;
 $time=explode(" ",microtime());

 $adimage1=$_SESSION['username']."$imgext[0]"."$time[1]".".$imgext[$imgext1]";
$tmpfilename1=$_FILES['photo1']['tmp_name'];
$upload1="uploads/".$adimage1;
if(move_uploaded_file($tmpfilename1,$upload1))
{
	$querypart1 = ",`p_photo1`='$upload1'";
}

}
}

// photo 2 code starts here 

$img2=$_FILES['photo2']['name'];

$sizeerr2msg="";

if($img2){

$size2 = $_FILES['photo2']['size'];

if ($size2 > 2097152)  //2097152
{					   
$imgerr=1;
$sizeerr2msg='<font color="red"><strong>You have exceeded the size limit of Photo2!</strong></font>';
}
else{
$imgext1=explode(".",$img2);
$imgext11=count($imgext1)-1;
$time1=explode(" ",microtime());
  $adimage2=$_SESSION['username']."$imgext1[0]"."$time1[1]".".$imgext1[$imgext11]";
$tmpfilename2=$_FILES['photo2']['tmp_name'];
$upload2="uploads/".$adimage2;
if(move_uploaded_file($tmpfilename2,$upload2))
{
	$querypart2 = ",`p_photo2`='$upload2'";
}
}
}

// photo 3 code starts here 

$img3=$_FILES['photo3']['name'];

$sizeerr3msg="";

if($img3){

$size3 = $_FILES['photo3']['size'];

if ($size3 > 2097152)  //2097152
{					   
$imgerr=1;
$sizeerr3msg='<font color="red"><strong>You have exceeded the size limit of Photo3!</strong></font>';
}
else{
$imgext3=explode(".",$img3);
$imgext31=count($imgext3)-1;
 $time2=explode(" ",microtime());
  $adimage3=$_SESSION['username']."$imgext3[0]"."$time2[1]".".$imgext3[$imgext31]";
$tmpfilename3=$_FILES['photo3']['tmp_name'];
$upload3="uploads/".$adimage3;
if(move_uploaded_file($tmpfilename3,$upload3))
{
	$querypart3 = ",`p_photo3`='$upload3'";
}
}
}

// photo 4 code starts here 

$img4=$_FILES['photo4']['name'];

$sizeerr4msg="";

if($img4){

$size4 = $_FILES['photo4']['size'];

if ($size4 > 2097152)  //2097152
{					   
$imgerr=1;
$sizeerr4msg='<font color="red"><strong>You have exceeded the size limit of Photo4!</strong></font>';
}
else{
$imgext4=explode(".",$img4);
$imgext41=count($imgext4)-1;
 $time3=explode(" ",microtime());
  $adimage4=$_SESSION['username']."$imgext4[0]"."$time3[1]".".$imgext4[$imgext41]";
$tmpfilename4=$_FILES['photo4']['tmp_name'];
$upload4="uploads/".$adimage4;
if(move_uploaded_file($tmpfilename4,$upload4))
{
	$querypart4 = ",`p_photo4`='$upload4'";
}
}
}


 $conname=$_REQUEST['conname'];
 $conemail=$_REQUEST['conemail'];
 $conphone=$_REQUEST['conphone'];
 $date=date('d-m-y');
 if($_REQUEST['pricess'] != "") $pricess = $_REQUEST['pricess']; else $pricess = 0;
 $iam = $_REQUEST['iam'];

$uploadQuery = "update `class_postclassified` SET 
`p_category`='$category',
`p_subcategory`='$subcategory',
`p_classtype`='$classtype',
`p_title`='$title',
`p_price`='$pricess',
`p_country`='$country',
`p_state`='$state',
`p_city`='$city',
`p_iam`='$iam',
`p_description`='$description'".
$querypart1.
$querypart2.$querypart3.$querypart4."


 where `p_id`='$p_id'";
 
if($imgerr!=1){
if(!mysql_query($uploadQuery))
	echo "Error ".mysql_error();
else
	echo "Success";
header ("location:edit_class.php?reg_id=$usid&mesg=1");
}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $sitename;?></title>
<link type="text/css" rel="stylesheet" href="style/main.css"  />

<script language="JavaScript" src="ajax/ajaxfunctions2.js"></script>
<script language="JavaScript" src="ajaxfunction.js"></script>
<script language="javascript" type="text/javascript" src="datetimepicker.js"></script>
<!--  -->
<script type="text/javascript" src="javascript/gallery/js/jquery.js"></script>
<script type="text/javascript" src="javascript/gallery/js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="javascript/gallery/css/jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript">
$(function() {
    $('#gallery a').lightBox();
});
</script>
<!--  -->
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
		<div class="m" style="padding-left:10px;">
		<div class="titleBg">
			VIEW CLASSIFIED
		</div>
		<div class="frmcont">
			
                <table width="95%" border="0" cellspacing="0" cellpadding="5" align="right" id="gallery">
				 <tr>
                   <td colspan="3" align="center" >
					<?php 
					 echo $sizeerr1msg;
					 echo $sizeerr2msg;
					 echo $sizeerr3msg;
					 echo $sizeerr4msg; 
					?>		
                    
                   </td>
                   </tr>
                  <tr>
                    <td width="20%" class="bold">Category </td>
                    <td width="5%" align="center" class="bold">:</td>
                    <td>
                     
                        <?php
						  $cid = $detail1['p_category'];
					      
						  $sta1=mysql_query("select * from class_category where c_id='$cid'");						 
						
						  $cat=mysql_fetch_array($sta1);
 
						  echo $cat['c_name'];
						  ?>
		               
                          
                           </td>
                  </tr>
                  <tr>
                    <td class="bold">Subcategory </td>
                    <td align="center" class="bold">:</td>
                    <td>
                     <div id="subcategory">
              
                <?php 
				$subcatid = $creg_profile1['p_subcategory'];
				$exec_areg=mysql_query("select * from class_subcategory where sid='$subcatid'"); 
				$fetch_areg=mysql_fetch_array($exec_areg);
				echo $fetch_areg['subcategoryname'];
				?>
			
				
			
			</div>                    </td>
                  </tr>
                  <tr>
                    <td class="bold">Classified Type </td>
                    <td align="center" class="bold">:</td>
                    <td>
                      <label> 					     
					     <?php if($detail1['p_classtype']==1){ echo "Free"; }?>
                         <?php if($detail1['p_classtype']==2){ echo "Payment"; }?> 
					  </label>
                      </td>
                  </tr>
                  <tr>
                    <td class="bold">Title </td>
                    <td align="center" class="bold">:</td>
                    <td><label><?php echo $detail1['p_title'];?> </label></td>
                  </tr>
				 <tr>
                     <td class="bold">Price</td>
                     <td align="center" class="bold">:</td>
                     <td><label><?php if($detail1['p_price'] != 0) echo $detail1['p_price']; else echo "----";?></label></td>
                   </tr>
				  <tr>
                     <td class="bold">City </td>
                     <td align="center" class="bold">:</td>
                     <td><label>
						<?php echo $detail1['p_city']; ?>
						</label></td>
                   </tr>
				<tr>
                 <td class="bold">State </td>
                  <td align="center" class="bold">:</td>
                  <td><!--<label>
					<input name="state" type="text" id="state" class="text_box" value="<?php echo $detail1['p_state'];?>" >
					</label>-->
					
					 <?php  
					 $stid = $detail1['p_state'];
					 $states=mysql_query("select * from class_state where stateid='$stid'");
					 $stat=mysql_fetch_array($states);
					 echo $stat['state_name'];
					 ?>
				
					
				</td>
                </tr>
                   <tr>
						<td class="bold">Country </td>
						<td align="center" class="bold">:</td>
                       <td>
                        <?php 
						$conid = $detail1['p_country'];
  						$sta2=mysql_query("select * from class_country where countryid='$conid'");
		                $con2=mysql_fetch_array($sta2);
						echo $con2['country'];
						?>
                      
                         
                        </td>
                   </tr>
             <?php /*    <tr>
                    <td class="bold">Country<font color="#FF0000" size="-4"></font></td>
                    <td align="center" class="bold">:</td>
                    <td>
					

                        <?php
						$detail1['p_country'];
						  $cont=mysql_query("select * from class_country order by country asc");?>
						<select name="country" id="country" onChange="Javascript:categorylist(this.value);" >
						<option value="">Select Country</option>
		                  <?php while($con2=mysql_fetch_array($cont)) {?>
                           <option value="<?php echo $con2['countryid'];?>"<?php if($con2['countryid']==$detail1['p_country']) { ?> selected="selected"<?php } ?> ><?php echo $con2['country'];?></option>
                            <?php } ?>
                    </select>                    </td>
                  </tr>
                  <tr>
                    <td class="bold">State <font color="#FF0000" size="-4"></font></td>
                    <td align="center" class="bold">:</td>
                    <td>
					<?php 
					$detail1['p_state'];
					$stat= mysql_query("select * from class_state"); ?>
					<div id="statenew">
					<select name="state1" id="state1" onchange="Javascript:citylist(this.value);">
					<option value="">Select state</option>
					<?php while($state12=mysql_fetch_array($stat)){?>
			  <option value="<?php echo $state12['stateid'];?>"<?php if($state12['stateid']==$detail1['p_state']) { ?> selected="selected"<?php } ?> ><?php echo $state12['state_name'];?></option><?php }?>
              </select>	</div>				</td>
                  </tr>
                  <tr>
                    <td class="bold">City <font color="#FF0000" size="-4"></font></td>
                    <td align="center" class="bold">:</td>
                    <td>
					<?php 
					$detail1['p_city'];
					$city = mysql_query("select * from class_city"); ?>
					<div id="citynew">
					  <select name="city1" id="city1">
					  <option value="">Select City</option>
					  <?php while($city12=mysql_fetch_array($city)) { ?>
					    <option value="<?php echo $city12['cityid']; ?>" <?php if($city12['cityid']==$detail1['p_city']) { ?> selected="selected"<?php } ?> ><?php echo $city12['city_name']; ?></option><?php } ?>
					      </select></div></td>
                    </tr> */ ?>
					
                  <tr>
                    <td class="bold">Description </td>
                    <td align="center" class="bold">:</td>
                    <td align="left" ><div><?php echo $detail1['p_description'];?></div></td>
                  </tr>
				<tr>
					<td class="bold">I am:  </td>
					<td align="center" class="bold">:</td>
					<td>
					   <label>
					   <?php  if($detail1['p_iam'] == 1) { echo "An Individual"; } 
								if($detail1['p_iam'] == 2) { echo "A Professional/Business"; }
					   ?>
					   </label>
						
					</td>
				</tr>
                <!--  <tr>
                    <td class="bold">Start Date</td>
                    <td align="center" class="bold">:</td>
                    <td height="25" colspan="2" align="left" ><input id="godate"  name="godate" type="text" readonly="true" onclick="javascript:NewCal('godate','ddmmyyyy')" value="<?php echo $detail1['p_sdate']; ?>" size="15" />&nbsp;<a href="javascript:NewCal('godate','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date" style="vertical-align:bottom;"></a></td>
                    </tr>
				  <tr>
                    <td class="bold">End Date</td>
                    <td align="center" class="bold">:</td>
                    <td height="25" colspan="4" align="left" ><input id="godate1"  name="godate1" type="text" readonly="true" onclick="javascript:NewCal('godate','ddmmyyyy')" size="15" value="<?php //echo $detail1['p_edate']; ?>" />&nbsp;<a href="javascript:NewCal('godate1','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date" style="vertical-align:bottom;"></a></td>
                    </tr>-->
				  <tr>
				    <td colspan="3">
					  <div id="ph1">
					   <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center">
					    <tr> 
							<td width="20%" class="bold">Photo1</td>
							<td width="4%" align="center" class="bold">:</td>
							
							<td style="padding-left:10px;"><span class="ad_text"><?php if(file_exists($detail1['p_photo1'])) {?><img src="<?php echo $detail1['p_photo1'];?>" width="40" height="40" /><?php } else { ?><img src="images/NOIMAGE.jpeg" height="40" width="40"/><?php }?></span></td>
							
					 	</tr>
                       </table>	
					   </div>
                    </td> 		 			   
                  </tr>
				  
				  <tr>
				    <td colspan="3">
					  <div id="ph2" <?php if($detail1['p_photo2'] != '') { ?>style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>
					   <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center" >
					    <tr>
							<td width="20%" class="bold">Photo2</td>
							<td width="4%" align="center" class="bold">:</td>
							
							<td style="padding-left:10px;"><span class="ad_text"><?php if(file_exists($detail1['p_photo2'])) {?><img src="<?php echo $detail1['p_photo2'];?>" width="40" height="40" /><?php } else { ?><img src="images/NOIMAGE.jpeg" height="40" width="40"/><?php }?></span></td>
						  
						</tr>
                       </table>	
					   </div>
                    </td>
				  </tr>
				  
				  <tr>
				    <td colspan="3">
					<div id="ph3" <?php if($detail1['p_photo3'] != '') { ?>style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>
					   <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center" >
					    <tr>
							<td width="20%" class="bold">Photo3</td>
							<td width="4%" align="center" class="bold">:</td>
							
							<td style="padding-left:10px;"><span class="ad_text"><?php if(file_exists($detail1['p_photo3'])) {?><img src="<?php echo $detail1['p_photo3'];?>" width="40" height="40" /><?php } else { ?><img src="images/NOIMAGE.jpeg" height="40" width="40"/><?php }?></span></td>
							
							
						</tr>
                       </table>	
					</div>
                    </td>
                  </tr>
				  
				  <tr>
				  <td colspan="3">
					<div id="ph4" <?php if($detail1['p_photo4'] != '') { ?>style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>
					   <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center" >
					    <tr>
						<td width="20%" class="bold">Photo4</td>
							<td width="4%" align="center" class="bold">:</td>
							
						<td style="padding-left:10px;"><span class="ad_text"><?php if(file_exists($detail1['p_photo4'])) {?><img src="<?php echo $detail1['p_photo4'];?>" width="40" height="40" /><?php } else { ?><img src="images/NOIMAGE.jpeg" height="40" width="40"/><?php }?></span></td>
					
						</tr>
                       </table>	
					</div>
                    </td>
				  </tr>
                  
                  <!--<tr>
                    <td colspan="3" class="head_blue"><strong> Responses for the above listing should be sent to :</strong></td>
                    </tr>
					<?php 
					/*$postselect=mysql_query("select * from `class_register` where `reg_id`='$usid'");
					
					$postfetch=mysql_fetch_array($postselect);
					$postname=$postfetch['reg_name'];
					$postemail=$postfetch['reg_email'];
					$postphone=$postfetch['reg_phone'];*/
					?>
					
                  <tr>
                    <td class="bold">Contact Name<font color="#FF0000" size="-4">*</font> </td>
                    <td align="center" class="bold">:</td>
                    <td><input type="text" name="conname" readonly="true"  value="<?php // echo $postname;?>"/></td>
                  </tr>
                  <tr>
                    <td class="bold">Contact Email<font color="#FF0000" size="-4">*</font> </td>
                    <td align="center" class="bold">:</td>
                    <td><input type="text" name="conemail" readonly="true" value="<?php //echo $postemail;?>"/></td>
                  </tr>
                  <tr>
                    <td class="bold">Contact Number<font color="#FF0000" size="-4">*</font> </td>
                    <td align="center" class="bold">:</td>
                    <td><input type="text" name="conphone" readonly="true" value="<?php //echo $postphone;?>"/></td>
                  </tr>-->
                  <tr>
                    <td colspan="3" align="center">
						<input name="edit_form" type="button" class="but_bg" value="Edit Classified " onclick="location.href='edit_classified.php?p_id=<?php echo $p_id;?>'" />&nbsp;&nbsp;&nbsp;
						<input type="Button" onclick="location.href='edit_class.php'" value="Back" />
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
