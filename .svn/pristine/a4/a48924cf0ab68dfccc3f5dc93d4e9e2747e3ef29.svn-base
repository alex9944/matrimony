<?php session_start();
ob_start();
include "../config/error.php";
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

$classtype=1;


 $title=$_REQUEST['title'];
 //$country=$_REQUEST['country'];
 $country=324;
 $state=$_REQUEST['state1'];
 $city=$_REQUEST['city1'];
 $description=$_REQUEST['description'];
/* $godate=$_REQUEST['godate'];
 $godate1=$_REQUEST['godate1'];*/




$img1=$_FILES['photo1']['name'];
$imgext=explode(".",$img1);
$imgext1=count($imgext)-1;
 $time=explode(" ",microtime());

  $adimage1=$_SESSION['username']."$imgext[0]"."$time[1]".".$imgext[$imgext1]";
$tmpfilename1=$_FILES['photo1']['tmp_name'];
$upload1="../uploads/".$adimage1;
if(move_uploaded_file($tmpfilename1,$upload1))
{
	$querypart1 = ",`p_photo1`='$upload1'";
}

$img2=$_FILES['photo2']['name'];
$imgext1=explode(".",$img2);
$imgext11=count($imgext1)-1;
$time1=explode(" ",microtime());
  $adimage2=$_SESSION['username']."$imgext1[0]"."$time1[1]".".$imgext1[$imgext11]";
$tmpfilename2=$_FILES['photo2']['tmp_name'];
$upload2="../uploads/".$adimage2;
if(move_uploaded_file($tmpfilename2,$upload2))
{
	$querypart2 = ",`p_photo2`='$upload2'";
}

$img3=$_FILES['photo3']['name'];
$imgext3=explode(".",$img3);
$imgext31=count($imgext3)-1;
 $time2=explode(" ",microtime());
  $adimage3=$_SESSION['username']."$imgext3[0]"."$time2[1]".".$imgext3[$imgext31]";
$tmpfilename3=$_FILES['photo3']['tmp_name'];
$upload3="../uploads/".$adimage3;
if(move_uploaded_file($tmpfilename3,$upload3))
{
	$querypart3 = ",`p_photo3`='$upload3'";
}

$img4=$_FILES['photo4']['name'];
$imgext4=explode(".",$img4);
$imgext41=count($imgext4)-1;
 $time3=explode(" ",microtime());
  $adimage4=$_SESSION['username']."$imgext4[0]"."$time3[1]".".$imgext4[$imgext41]";
$tmpfilename4=$_FILES['photo4']['tmp_name'];
$upload4="../uploads/".$adimage4;
if(move_uploaded_file($tmpfilename4,$upload4))
{
	$querypart4 = ",`p_photo4`='$upload4'";
}


 $conname=$_REQUEST['conname'];
 $conemail=$_REQUEST['conemail'];
 $conphone=$_REQUEST['conphone'];
 $date=date('d-m-y');

$uploadQuery = "update `class_postclassified` SET 
`p_category`='$category',
`p_subcategory`='$subcategory',
`p_classtype`='$classtype',
`p_title`='$title',
`p_country`='$country',
`p_state`='$state',
`p_city`='$city',
`p_description`='$description'".
$querypart1.
$querypart2.$querypart3.$querypart4."
 where `p_id`='$p_id'";

if(!mysql_query($uploadQuery))
	echo "Error ".mysql_error();
else
	echo "Success";

header("location:managehotlisting.php");

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $adminsitename;?></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function namecheck()
{
var conname=document.postForm.conname.value;
if(conname!="")
	      {
	       var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";
    	      for (var i = 0; i < conname.length; i++)
	        	 {
  		           if (iChars.indexOf(conname.charAt(i)) != -1)
			         {
					 conname="";
  			 alert ("Your Name has special characters. \nThese are not allowed.\n Please remove them and try again.");
			          return false;
			        }
					
  		          }
 	         } 

}
function echeck(str) 
{

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID");
		   document.postForm.conemail.focus();
		   return false;
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID");
		   document.postForm.conemail.focus();
		   return false;
		}
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID");
			document.postForm.conemail.focus();
		    return false;
		}
		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID");
			document.postForm.conemail.focus();
		    return false;
		 }
		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID");
			document.postForm.conemail.focus();
		    return false;
		 }
		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID");
			document.postForm.conemail.focus();
		    return false;
		 }		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID");
			document.postForm.conemail.focus();
		    return false;
		 }
 		 return true;					
	}

function postCheck()
{
var category=document.postForm.category.value;
			if(category=="")
			{
					alert("Please Select Your Category");
					document.postForm.category.focus();
					return false;
			}
			
			if(document.postForm.subcategory.value=="")
			{
					alert("Please Select Your Sub Category");
					document.postForm.subcategory.focus();
					return false;
			}
			
			if(document.postForm.classtype.value=="")
			{
			
			  		alert("Please Select Your Classified Type");
					document.postForm.classtype.focus();
					return false;
			
			}
			
var title=document.postForm.title.value;
			if(title=="")
			{
					alert("Please Enter Your Title");
					document.postForm.title.focus();
					return false;
			}	
			
var country=document.postForm.country.value;
			if(country=="")
			{
					alert("Please Select Your Country");
					document.postForm.country.focus();
					return false;
			}		
			
var state1=document.postForm.state1.value;
			if(state1=="")
			{
					alert("Please Select Your State");
					document.postForm.state1.focus();
					return false;
			}
			
var city1=document.postForm.city1.value;
			if(city1=="")
			{
					alert("Please Select Your City");
					document.postForm.city1.focus();
					return false;
			}
			
var description=document.postForm.description.value;
			if(description=="")
			{
					alert("Please Select Your Description");
					document.postForm.description.focus();
					return false;
			}
			
var godate=document.postForm.godate.value;
			if(godate=="")
			{
					alert("Please Select Your Start Date");
					document.postForm.godate.focus();
					return false;
			}
			
var godate1=document.postForm.godate1.value;
			if(godate1=="")
			{
					alert("Please Select Your End Date");
					document.postForm.godate1.focus();
					return false;
			}
			
	if(document.postForm.photo1.value!= "" )
			{
				var ss=document.postForm.photo1.value;
				var index=ss.lastIndexOf(".");
				var sstring=ss.substring(index+1);
				var ssivanew=sstring.toLowerCase();
				if(ssivanew!="jpg" && ssivanew!="png" && ssivanew!="jpeg" && ssivanew!="bmp")
				{
					  alert("Please upload .jpg , .png , .jpeg , .bmp files only");
					  return false;
				 }
				
			
			}
			
			if(document.postForm.photo2.value!= "" )
			{
				var ss=document.postForm.photo2.value;
				var index=ss.lastIndexOf(".");
				var sstring=ss.substring(index+1);
				var ssivanew=sstring.toLowerCase();
				if(ssivanew!="jpg" && ssivanew!="png" && ssivanew!="jpeg" && ssivanew!="bmp")
				{
					  alert("Please upload .jpg , .png , .jpeg , .bmp files only");
					  return false;
				 }
				
			
			}
			
			if(document.postForm.photo3.value!= "" )
			{
				var ss=document.postForm.photo3.value;
				var index=ss.lastIndexOf(".");
				var sstring=ss.substring(index+1);
				var ssivanew=sstring.toLowerCase();
				if(ssivanew!="jpg" && ssivanew!="png" && ssivanew!="jpeg" && ssivanew!="bmp")
				{
					  alert("Please upload .jpg , .png , .jpeg , .bmp files only");
					  return false;
				 }
				
			
			}
			
			if(document.postForm.photo4.value!= "" )
			{
				var ss=document.postForm.photo4.value;
				var index=ss.lastIndexOf(".");
				var sstring=ss.substring(index+1);
				var ssivanew=sstring.toLowerCase();
				if(ssivanew!="jpg" && ssivanew!="png" && ssivanew!="jpeg" && ssivanew!="bmp")
				{
					  alert("Please upload .jpg , .png , .jpeg , .bmp files only");
					  return false;
				 }
				
			
			}
						
var conname=document.postForm.conname.value;
			if(conname=="")
			{
					alert("Please Enter Your Name");
					document.postForm.conname.focus();
					return false;
			}
			else
			{
				var result= namecheck();
				if(result==false)
				{  
				   document.postForm.conname.focus();
					return false; 
				}
			}
			
var conemail=document.postForm.conemail.value;
			if(conemail=="")
			{
					alert("Please Enter Your Email ID");
					document.postForm.conemail.focus();
					return false;
			}
			else
				{
					var as=echeck(conemail);
					if(as==false)
					{
						return false;
					}
				}	
				
var conphone=document.postForm.conphone.value;
			if(conphone=="")
			{
					alert("Please Enter Your Phone Number");
					document.postForm.conphone.focus();
					return false;
			}	
			if(isNaN(conphone))
			{
		     		alert("Please Enter Number only");
					document.postForm.conphone.focus();
					return false;
			}			
					

			
}			

</script>
<script language="JavaScript" src="ajax/ajaxfunctions2.js"></script>
<script language="JavaScript" src="ajaxfunction.js"></script>
<script language="javascript" src="ajax/ajaxstate.js"></script>
<script language="javascript" type="text/javascript" src="datetimepicker.js"></script>
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
  <!--<tr>
    <td width="20%" align="center" class="ad_text_color"><a href="individual_usertype.php?userview=2" class="link1" >All</a></td>
        <td width="20%" align="center" class="ad_text_color"><a href="individual_usertype.php?userview=2" class="link1" >Payment</a></td>-->
       <!-- <td width="21%" align="center" class="ad_text_color"><a href="individual_usertype.php?userview=1" class="link1" >Free</a></td>
  </tr>-->
  
  
 
        
        
         <tr bgcolor="#FFFFFF">
          <td colspan="12"><br />
            <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="4%" align="right" valign="bottom"><img src="images/box_left_top.jpg" width="17" height="17" /></td>
                <td width="92%" background="images/box_top.jpg" style="background-position:bottom; background-repeat:repeat-x;">&nbsp;</td>
                <td width="4%" align="left" valign="bottom"><img src="images/box_right_top.jpg" width="17" height="17" /></td>
              </tr>
              <tr>
                <td background="images/box_left_center.jpg" style="background-position:right; background-repeat:repeat-y;">&nbsp;</td>
                <td bgcolor="#fef5fa"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		  <?php
  /*while($seldata=mysql_fetch_array($detail1))
  {*/

 ?>
            <tr>
              <td align="left" valign="top"  height="300">
              <form action="" method="post" enctype="multipart/form-data" name="postForm" id="form1" onsubmit="return postCheck();">
                <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center">
				
                  <tr>
                    <td colspan="4" class="head_bg"><strong>Edit Classified: </strong></td>
                    </tr>
                  <tr>
                    <td width="37%" class="bold">Category<font color="#FF0000" size="-4"></font> </td>
                    <td width="5%" align="center" class="bold"><strong>:</strong></td>
                    <td>
                     
                        <?php $detail1['p_category'];
					
						 $sta1=mysql_query("select * from class_category");?>
						 
						<select name="category" id="category" onchange="FUN3(this.value);" class="combo_box">
                        <option value="">Select</option>
						<?php while($cat=mysql_fetch_array($sta1)) { ?>
		               
                           <option value="<?php echo $cat['c_id']?>" <?php if($cat['c_id']==$detail1['p_category']) { ?> selected="selected"<?php } ?> ><?php echo $cat['c_name']; ?></option>
                            <?php  } ?>
                    </select> </td>
                  </tr>
                  <tr>
                    <td class="bold">Subcategory</td>
                    <td align="center" class="bold">:</td>
                    <td>
                     <div id="subcategory">
               <select name="subcategory" class="combo_box">
  					<option value="">Select</option>
                <?php 
				$exec_areg=mysql_query("select * from class_subcategory"); 
				while($fetch_areg=mysql_fetch_array($exec_areg))
				{?>
				<option value="<?php echo $fetch_areg['sid']; ?>"<?php if($detail1['p_subcategory']==$fetch_areg['sid'] ){ ?> selected="selected" <?php } ?>><?php echo $fetch_areg['subcategoryname']; ?></option>
				<?php } ?>
			</select>    
			</div>                    </td>
                  </tr>
                  <!--<tr>
                    <td class="bold">Classified Type</td>
                    <td align="center" class="bold">:</td>
                    <td>
                    
                      <select name="classtype">
                      <option value="">Select</option>
                      <option value="1"<?php if($detail1['p_classtype']==1){ ?> selected="selected" <?php } ?>>Free</option>
                      <?php  $usersql=mysql_query("select * from memberregister where userid='$usid'");
					  if(mysql_num_rows($usersql) > 0)
					   {
					   ?>
                      <option value="2"<?php if($detail1['p_classtype']==2){ ?> selected="selected" <?php } ?>>Payment</option>
                      <?php } ?>
                      </select></td>
                  </tr>-->
                  <tr>
                    <td class="bold">Title<font color="#FF0000" size="-4"></font></td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td><input name="title" type="text" id="title" class="text_box" value="<?php echo $detail1['p_title'];?>" /></td>
                  </tr>
				  <!--<tr>
                    <td class="bold">Country<font color="#FF0000" size="-4"></font></td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td>
					
					<select name="country" onChange="Javascript:categorylist(this.value);">-->
                    <!--  <option value="">Select Country</option>
                        <?php
						$detail1['p_country'];
						  $cont=mysql_query("select * from class_country order by country asc");?>
						<select name="country" id="country" class="combo_box" onchange="Javascript:categorylisted(this.value);" >
						<option value="">Select Country</option>
		                  <?php while($con2=mysql_fetch_array($cont)) {?>
                           <option value="<?php echo $con2['countryid'];?>"<?php if($con2['countryid']==$detail1['p_country']) { ?> selected="selected"<?php } ?> ><?php echo $con2['country'];?></option>
                            <?php } ?>
                    </select>  </td>
                  </tr>-->
				  
				   <tr>
                    <td class="bold">State<font color="#FF0000" size="-4"></font></td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td>
					  <!-- <input name="state1" type="text" id="state1" class="text_box" value="<?php //echo $detail1['p_state'];?>" /> -->
					  <div id="statenew">
							<select name="state" id="state" class="combo_box">
		  					<option value="">Select State</option>
							<?php  $states=mysql_query("select * from class_state where countryid = 324 order by state_name asc");
							 while($stat=mysql_fetch_array($states)) {?>
							<option value="<?php echo $stat['stateid'];?>" <?php if($detail1['p_state'] == $stat['stateid']) {?> selected="selected"<?php } ?> ><?php echo $stat['state_name'];?></option>
							<?php } ?>
							</select>
						</div>
					</td>
                  </tr>
				  <tr>
                    <td class="bold">City<font color="#FF0000" size="-4"></font></td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td><input name="city1" type="text" id="city1" class="text_box" value="<?php echo $detail1['p_city'];?>" /></td>
                  </tr>
				 
                  
         <?php /*         <tr>
                    <td class="bold">State<font color="#FF0000" size="-4"></font></td>
                    <td align="center" class="bold"><strong>:</strong></td>
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
                    <td class="bold">City<font color="#FF0000" size="-4"></font></td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td>
					<?php 
					$detail1['p_city'];
					$city = mysql_query("select * from class_city"); ?>
					<div id="citynew">
					  <select name="city1" id="city1">
					  <option value="">Select City</option>
					  <?php while($city12=mysql_fetch_array($city)) { ?>
					    <option value="<?php echo $city12['cityid']; ?>"<?php if($city12['cityid']==$detail1['p_city']) { ?> selected="selected"<?php } ?> ><?php echo $city12['city_name']; ?></option><?php } ?>
					      </select></div></td>
                    </tr> */  ?>
					
                  <tr>
                    <td class="bold">Description </td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td align="left" ><label><textarea name="description" id="description" class="text_area" cols="30" rows="3"><?php echo $detail1['p_description'];?></textarea></label></td>
                  </tr>
                 <!-- <tr>
                    <td class="bold">Start Date</td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td height="25" colspan="2" align="left" ><input id="godate"  name="godate" type="text" readonly="true" onclick="javascript:NewCal('godate','ddmmyyyy')" value="<?php //echo $detail1['p_sdate']; ?>" size="15" />&nbsp;<a href="javascript:NewCal('godate','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date" style="vertical-align:bottom;"></a></td>
                    </tr>
				  <tr>
                    <td class="bold">End Date</td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td height="25" colspan="4" align="left" ><input id="godate1"  name="godate1" type="text" readonly="true" onclick="javascript:NewCal('godate','ddmmyyyy')" size="15" value="<?php echo $detail1['p_edate']; ?>" />&nbsp;<a href="javascript:NewCal('godate1','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date" style="vertical-align:bottom;"></a></td>
                    </tr>-->
				  <tr>
                    <td class="bold">Photo1</td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td width="40"><input name="photo1" type="file" id="photo1" value="<?php echo $detail1['p_photo1']?>" /></td>
					<td><span class="ad_text"><img src="../<?php echo $detail1['p_photo1']; ?>" width="40" height="40" /></span></td>
                  </tr>
				  <tr>
                    <td class="bold">Photo2</td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td><input name="photo2" type="file" id="photo2" /></td>
					<td><span class="ad_text"><?php if(file_exists($detail1['p_photo2'])) {?><img src="<?php echo $detail1['p_photo2'];?>" width="40" height="40" /></span><?php } else { ?><img src="images/NOIMAGE.jpeg" height="40" width="40"/><?php }?></td>
                  </tr>
				  <tr>
                    <td class="bold">Photo3</td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td><input name="photo3" type="file" id="photo3" /></td>
					<td><span class="ad_text"><?php if(file_exists($detail1['p_photo3'])) {?><img src="<?php echo $detail1['p_photo3'];?>" width="40" height="40" /></span><?php } else { ?><img src="images/NOIMAGE.jpeg" height="40" width="40"/><?php }?></td>
                  </tr>
				  <tr>
                    <td class="bold">Photo4</td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td><input name="photo4" type="file" id="photo4" /></td>
					<td><span class="ad_text"><?php if(file_exists($detail1['p_photo4'])) {?><img src="<?php echo $detail1['p_photo4'];?>" width="40" height="40" /></span><?php } else { ?><img src="images/NOIMAGE.jpeg" height="40" width="40"/><?php }?></td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                    <td>&nbsp;</td>
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
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td><input type="text" name="conname" readonly="true"  value="<?php // echo $postname;?>"/></td>
                  </tr>
                  <tr>
                    <td class="bold">Contact Email<font color="#FF0000" size="-4">*</font> </td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td><input type="text" name="conemail" readonly="true" value="<?php //echo $postemail;?>"/></td>
                  </tr>
                  <tr>
                    <td class="bold">Contact Number<font color="#FF0000" size="-4">*</font> </td>
                    <td align="center" class="bold"><strong>:</strong></td>
                    <td><input type="text" name="conphone" readonly="true" value="<?php //echo $postphone;?>"/></td>
                  </tr>-->
                  <tr>
                    <td height="80" colspan="3" align="center">
					 <!-- <input name="edit_form" disabled="disabled"  type="submit" class="but_bg" value="Edit" />This feature is disabled in the demo version... -->
					 <input name="edit_form"  type="submit" class="but_bg" value="Update" />
					  </td>
                    </tr>
					<tr><td align="right" colspan="4"><span class="ad_text_color"><a href="managehotlistings.php" class="link1">Back </a></span></td>
					</tr>
                </table>
                
                  
              </form></td>
            </tr>
          </table></td>
                    </tr>
                </table></td>
                <td background="images/box_right_center.jpg" style="background-position:left; background-repeat:repeat-y;">&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><img src="images/box_left_bottom.jpg" width="17" height="17" /></td>
                <td background="images/box_bottom.jpg" style="background-position:top; background-repeat:repeat-x;">&nbsp;</td>
                <td align="left" valign="top"><img src="images/box_right_bottom.jpg" width="17" height="17" /></td>
              </tr>
            </table></td>
        </tr>
</table>
</body>
</html>
