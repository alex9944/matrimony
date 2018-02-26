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
			
			if(document.postForm.classtype.value =="")
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
			var regphone=document.postForm.pricess.value;
			if(regphone!="") {
				if(isNaN(regphone)) {
		     		alert("Invalid price format!");
					document.postForm.pricess.select();
					return false;
				}
			}	

var city=document.postForm.city.value;
			if(city=="")
			{
					alert("Please Select Your City");
					document.postForm.city.focus();
					return false;
			}
			
var state=document.postForm.state.value;
			if(state=="")
			{
					alert("Please Select Your State");
					document.postForm.state.focus();
					return false;
			}			
			
var country=document.postForm.country.value;
			if(country=="")
			{
					alert("Please Select Your Country");
					document.postForm.country.focus();
					return false;
			}		
			

			

			
var description=document.postForm.description.value;
			if(description=="")
			{
					alert("Please Select Your Description");
					document.postForm.description.focus();
					return false;
			}
			
/* var godate=document.postForm.godate.value;
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
			} */
			
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
<script language="JavaScript">
function do1(){
document.getElementById('ph2').style.display = 'block' ;
document.getElementById('img1').style.display = 'none' ;
}
function do2(){
document.getElementById('ph3').style.display = 'block' ;
document.getElementById('img2').style.display = 'none' ;
}
function do3(){
document.getElementById('ph4').style.display = 'block' ;
document.getElementById('img3').style.display = 'none' ;
}
</script>
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
			EDIT CLASSIFIED
		</div>
		<div class="frmcont">
			<form action="" method="post" enctype="multipart/form-data" name="postForm" id="form1" onsubmit="return postCheck();">
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
                    <td width="20%" class="bold">Category <font color="#FF0000" size="-4">*</font> </td>
                    <td width="5%" align="center" class="bold">:</td>
                    <td>
                     
                        <?php $detail1['p_category'];
					
						 $sta1=mysql_query("select * from `class_category");?>
						 
						<select name="category" id="category" onchange="FUN3(this.value)" class="combo_box">
                        <option value="">Select</option>
						<?php while($cat=mysql_fetch_array($sta1)) { ?>
		               
                           <option value="<?php echo $cat['c_id']?>" <?php if($cat['c_id']==$detail1['p_category']) { ?> selected="selected"<?php } ?> ><?php echo $cat['c_name']; ?></option>
                            <?php  } ?>
						</select> </td>
                  </tr>
                  <tr>
                    <td class="bold">Subcategory <font color="#FF0000" size="-4">*</font></td>
                    <td align="center" class="bold">:</td>
                    <td>
                     <div id="subcategory">
               <select name="subcategory" class="combo_box">
  					<option value="">Select</option>
                <?php 
				$exec_areg=mysql_query("select * from class_subcategory"); 
				while($fetch_areg=mysql_fetch_array($exec_areg))
				{?>
				<option value="<?php echo $fetch_areg['sid']; ?>"<?php if($creg_profile1['p_subcategory']==$fetch_areg['sid'] ){ ?> selected="selected" <?php } ?>><?php echo $fetch_areg['subcategoryname']; ?></option>
				<?php } ?>
			</select>    
			</div>                    </td>
                  </tr>
                  <tr>
                    <td class="bold">Classified Type <font color="#FF0000" size="-4">*</font></td>
                    <td align="center" class="bold">:</td>
                    <td>
                    
                      <select name="classtype" class="combo_box">
                      <option value="">Select</option>
                      <option value="1"<?php if($detail1['p_classtype']==1){ ?> selected="selected" <?php } ?>>Free</option>
                      <?php  $usersql=mysql_query("select * from memberregister where userid='$usid'");
					  if(mysql_num_rows($usersql) > 0)
					   {
					   ?>
                      <option value="2"<?php if($detail1['p_classtype']==2){ ?> selected="selected" <?php } ?>>Payment</option>
                      <?php } ?>
                      </select></td>
                  </tr>
                  <tr>
                    <td class="bold">Title <font color="#FF0000" size="-4">*</font></td>
                    <td align="center" class="bold">:</td>
                    <td><input name="title" type="text" id="title" class="text_box" value="<?php echo $detail1['p_title'];?>" /></td>
                  </tr>
				 <tr>
                     <td class="bold">Price</td>
                     <td align="center" class="bold">:</td>
                     <td><input name="pricess" type="text" maxlength="12" value="<?php if($detail1['p_price'] != 0) echo $detail1['p_price'];?>" id="pricess" class="text_box" onblur="space(this.id)" style="width:100px;" /> <em>If you are giving away your item, enter a price of 0 </em></td>
                   </tr>
				  <tr>
                     <td class="bold">City <font color="#FF0000" size="-4">*</font></td>
                     <td align="center" class="bold">:</td>
                     <td><label>
						<input name="city" type="text" id="city" class="text_box" value="<?php echo $detail1['p_city']; ?>">
						</label></td>
                   </tr>
				<tr>
                 <td class="bold">State <font color="#FF0000" size="-4">*</font></td>
                  <td align="center" class="bold">:</td>
                  <td><label>
					<input name="state" type="text" id="state" class="text_box" value="<?php echo $detail1['p_state'];?>" >
					</label></td>
                </tr>
                   <tr>
						<td class="bold">Country <font color="#FF0000" size="-4">*</font></td>
						<td align="center" class="bold">:</td>
                       <td><select name="country" class="combo_box">
                           <option value="">Select Country</option>
                        <?php  $sta2=mysql_query("select * from class_country order by country asc");
		                  while($con2=mysql_fetch_array($sta2)) {?>
                          <option value="<?php echo $con2['countryid'];?>" <?php if($detail1['p_country']==$con2['countryid']) { echo "selected";}?>><?php echo $con2['country'];?></option>
                         <?php } ?>
                           </select>
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
                    <td align="left" ><label><textarea name="description" id="description" class="text_area" cols="25" rows="3"><?php echo $detail1['p_description'];?></textarea></label></td>
                  </tr>
				<tr>
					<td class="bold">I am:  <font color="#FF0000" size="-4">*</font></td>
					<td align="center" class="bold">:</td>
					<td>
						<input type="Radio" name="iam" <?php if($detail1['p_iam'] == 1) { ?>checked="checked"<?php } ?> value="1" />&nbsp;&nbsp;An Individual&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="Radio" name="iam" <?php if($detail1['p_iam'] == 2) { ?>checked="checked"<?php } ?> value="2" />&nbsp;&nbsp;A Professional/Business
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
							<td width="40%" style="padding-left:10px;"><input name="photo1" type="file" id="photo1" /><br /><span align="left">Size upto 2 MB</span></td>
							<td><span class="ad_text"><?php if(file_exists($detail1['p_photo1'])) {?><img src="<?php echo $detail1['p_photo1'];?>" width="40" height="40" /><?php } else { ?><img src="images/NOIMAGE.jpeg" height="40" width="40"/><?php }?></span></td>
							<td><?php if($detail1['p_photo2'] == '') { ?><img src="images/list2-add.png" alt="Add" onclick="do1()" id="img1" title="Edit More" height="28" width="28"/><?php } ?>&nbsp;</td>
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
							<td width="40%" style="padding-left:10px;"><input name="photo2" type="file" id="photo2" /><br /><span align="left">Size upto 2 MB</span></td>
							<td><span class="ad_text"><?php if(file_exists($detail1['p_photo2'])) {?><img src="<?php echo $detail1['p_photo2'];?>" width="40" height="40" /><?php } else { ?><img src="images/NOIMAGE.jpeg" height="40" width="40"/><?php }?></span></td>
						    <td><?php if($detail1['p_photo3'] == '') { ?><img src="images/list2-add.png" alt="Add" onclick="do2()" id="img2" height="28" title="Edit More" width="28"/><?php } ?>&nbsp;</td>
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
							<td width="40%" style="padding-left:10px;"><input name="photo3" type="file" id="photo3" /><br /><span align="left">Size upto 2 MB</span></td>
							<td><span class="ad_text"><?php if(file_exists($detail1['p_photo3'])) {?><img src="<?php echo $detail1['p_photo3'];?>" width="40" height="40" /><?php } else { ?><img src="images/NOIMAGE.jpeg" height="40" width="40"/><?php }?></span></td>
							<td><?php if($detail1['p_photo4'] == '') { ?><img src="images/list2-add.png" alt="Add" onclick="do3()" id="img3" height="28" title="Edit More" width="28"/><?php } ?>&nbsp;</td>
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
							<td width="40%" style="padding-left:10px;"><input name="photo4" type="file" id="photo4" /><br /><span align="left">Size upto 2 MB</span></td>
						<td><span class="ad_text"><?php if(file_exists($detail1['p_photo4'])) {?><img src="<?php echo $detail1['p_photo4'];?>" width="40" height="40" /><?php } else { ?><img src="images/NOIMAGE.jpeg" height="40" width="40"/><?php }?></span></td>
						<td>&nbsp;</td>
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
						<input name="edit_form" type="submit" class="but_bg" value="Update Classified " />&nbsp;&nbsp;&nbsp;
										<input type="Button" onclick="location.href='edit_class.php'" value="Back" />
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
