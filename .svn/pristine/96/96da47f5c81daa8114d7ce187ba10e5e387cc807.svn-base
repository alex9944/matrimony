<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}

if(isset($_REQUEST['Submit']))
{

$category=$_REQUEST['category'];

$subcategory=$_REQUEST['subcategory'];



$classtype=1;

$title=$_REQUEST['title'];

$country=324;
$state=$_REQUEST['state'];
$city=$_REQUEST['city'];
$address=$_REQUEST['address'];
$description=$_REQUEST['description'];



$imgerr=0;

// photo 2 code starts here 

$img1=$_FILES['photo1']['name'];

$sizeerr1msg="";

if($img1){

$size1 = $_FILES['photo1']['size'];

if ($size1 > 2097152)  //2097152
{							   
//$err3=1;
$imgerr=1;
$sizeerr1msg='<font color="red"><strong>You have exceeded the size limit of photo1!</strong></font>';
//$err3msg='<font color="red"><strong>You have exceeded the size limit!</strong></font>';
?>
<!-- <script type="text/javascript">
document.getElementById('err3').style.display = 'block' ;
</script> -->
<?php
 
}
else{
$imgext=explode(".",$img1);
$imgext1=count($imgext)-1;
 $time=explode(" ",microtime());

  $adimage1=$_SESSION['username']."$imgext[0]"."$time[1]".".$imgext[$imgext1]";
$tmpfilename1=$_FILES['photo1']['tmp_name'];
$upload1="uploads/".$adimage1;
move_uploaded_file($tmpfilename1,$upload1);
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
//$img2=$_FILES['photo2']['name'];
$imgext1=explode(".",$img2);
$imgext11=count($imgext1)-1;
$time1=explode(" ",microtime());
$adimage2=$_SESSION['username']."$imgext1[0]"."$time1[1]".".$imgext1[$imgext11]";
$tmpfilename2=$_FILES['photo2']['tmp_name'];
$upload2="uploads/".$adimage2;
move_uploaded_file($tmpfilename2,$upload2);
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
move_uploaded_file($tmpfilename3,$upload3);
}
}

$img4=$_FILES['photo4']['name'];

$sizeerr4msg="";

if($img4){

$size4 = $_FILES['photo4']['size'];

if ($size4 > 2097152)  //2MB
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
move_uploaded_file($tmpfilename4,$upload4);
}
}

$conname=$_REQUEST['conname'];
$conemail=$_REQUEST['conemail'];
$conphone=$_REQUEST['conphone'];
$date=date('Y-m-d');
if($_REQUEST['pricess'] != "") $pricess = $_REQUEST['pricess']; else $pricess = 0;
$iam = $_REQUEST['iam'];

if($imgerr!=1) 
if(mysql_query("insert into `class_2daydiscount`(`d_category`,`d_subcategory`,`d_classtype`,`d_title`,`d_price`,`d_address`,`d_country`,`d_state`,`d_city`,`d_description`,`d_sdate`,`d_photo1`,`d_photo2`,`d_photo3`,`d_photo4`,`d_conname`,`d_conemail`,`d_conno`,`d_date`,`d_iam`,`d_status`)
 values('$category','$subcategory','$classtype','$title','$pricess','$address','$country','$state','$city','$description','$godate1','$upload1','$upload2','$upload3','$upload4','$conname','$conemail','$conphone','$date','$iam','1')"))



{

header("location:2daydiscounts.php?errmsg1=1");

//header("location:postclassified.php?errmsg2=1");

}

//header("location:welcome.php?mess=1");


else
{

header("location:welcome.php?mess=1");

}




}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title><?php echo $adminsitename;?></title>

<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
.style2 {color: #FF0000}
-->
</style>
<script language="javascript">

function space(sid) {
var name=document.getElementById(sid).value;
document.getElementById(sid).value=name.replace(/^(?:\s)*/g,'').replace(/(?:\s)*$/g,'');
}
function namecheck()
{
var conname=document.postForm.conname.value;
if(conname!="")
	      {
	       var iChars = "!@#$%^&*()+=-[]\\\';,`./{}|\":<>?0123456789";
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
			
		/*	if(document.postForm.classtype.value=="")
			{
			
			  		alert("Please Select Your Classified Type");
					document.postForm.classtype.focus();
					return false;
			
			}*/
		
var title=document.postForm.title.value;
			if(title=="")
			{
					alert("Please Enter Your Title");
					document.postForm.title.focus();
					return false;
			}	
var address=document.postForm.address.value;
			if(address=="")
			{
					alert("Please Enter Your Address");
					document.postForm.address.focus();
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
			
/*var country=document.postForm.country.value;
			if(country=="")
			{
					alert("Please Select Your Country");
					document.postForm.country.focus();
					return false;
			}		*/
			


			
var description=document.postForm.description.value;
			if(description=="")
			{
					alert("Please Select Your Description");
					document.postForm.description.focus();
					return false;
			}
			
/*var godate=document.postForm.godate.value;
			if(godate=="")
			{
					alert("Please Select Your Start Date");
					document.postForm.godate.focus();
					return false;
			}*/
			
/*var godate1=document.postForm.godate1.value;
			if(godate1=="")
			{
					alert("Please Select Your End Date");
					document.postForm.godate1.focus();
					return false;
			}*/
			
		/*	if(document.postForm.photo1.value=="")
			{
			  	alert("Upload the Photo");
			   document.postForm.photo1.focus();
			   return false;
			  
			} */
			if(document.postForm.photo1.value!= "" )
			{
			
				//var oas = new ActiveXObject("Scripting.FileSystemObject");
				//var d = document.a.b.value;
				//var e = oas.getFile(d);
				//var f = e.size;
				//alert(f + " bytes");


				var ss=document.postForm.photo1.value;
				var index=ss.lastIndexOf(".");				
				var sstring=ss.substring(index+1);
				var ssivanew=sstring.toLowerCase();
				if(ssivanew!="jpg" && ssivanew!="png" && ssivanew!="jpeg" && ssivanew!="bmp")
				{
					  alert("Please upload .jpg , .png , .jpeg , .bmp files only");
					  return false;
				 }
				 
				/*var e = oas.getFile(ss);
				var f = e.size; 
				if(parseInt(f) > 1024){               //10mb = 10485760
				
				  alert("Maximum Upload Size Is 5 Mb !! Uploaded File size is:"+f);
				} */
			 
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

function val()
{
 if(document.addcategory.category.value=="")
 {
  alert("Please Enter The Category Name");
  document.addcategory.category.focus();
  return false;
 }
}  
function editfun()
{

alert("This is demo version not allowed to change");
  return false;	


}
</script>

</head>

<body>
<table width="98%" cellpadding="3" cellspacing="1" align="center">
	<tr>
		<td height="26" colspan="9">
			<?php include("includes/adminheader.php");?>		</td>
	</tr>
	<tr><td height="10" colspan="9">&nbsp;</td>
	</tr>
	
	<tr>
	  <td height="20" colspan="9"><?php include("includes/adminmenu.php");?></td>
  </tr>
	
	<tr>
		<td height="223" colspan="2">
			<table width="77%" align="center" cellspacing="0" style="border:solid 1px #669966;">
				<tr>
				  <td height="27" bgcolor="#edcfde" class="link1">&nbsp;&nbsp;Add New Discount Classiifed </td>
				</tr>
				<tr>
				  <td align="right" bgcolor="#faf3f7">&nbsp;</td>
				</tr>
				<tr><td valign="top" bgcolor="#faf3f7">
					<form action="" method="post" enctype="multipart/form-data" name="postForm" id="form1" onsubmit="return postCheck();">
              <table width="95%" border="0" cellspacing="0" cellpadding="5" align="right" >
                <tr>
                  <td colspan="3" align="center" ><?php 
					if($_REQUEST['mess1']==1)
					{
					echo "<font color='green'><strong>Free Member Cant Post Classified Please </strong>&nbsp;<a href='membership.php' class='ad_text_color'>Upgrade Membership</a> </font>";
					}
					?>
                      <?php 
					if($_REQUEST['errmsg']==1)
					{
					echo "<font color='green'><strong>You Cant Post Classified Please </strong>&nbsp;<a href='membership.php' class='ad_text_color'>Upgrade Membership</a> </font>";
					}
					?>
                      <?php 
					if($_REQUEST['errmsg1']==1)
					{
					echo "<font color='green'><strong>You have Completed Free Classifieds Ads</strong></font>";
					}
					?>
                      <?php 
					if($_REQUEST['errmsg2']==1)
					{
					echo "<font color='green'><strong>You have Completed Payment Classifieds Ads</strong></font>";
					}
					if($_REQUEST['errmsg3']==1)
					{					
					//echo '<font color="red"><strong>You have exceeded the size limit!</strong></font>';
					}
					?>
                      <?php					 
					 //echo $err3msg;
					 //print_r($_POST);
					 echo $sizeerr1msg;
					 echo $sizeerr2msg;
					 echo $sizeerr3msg;
					 echo $sizeerr4msg;
					 
					?>
                  </td>
                </tr>
                <tr>
                  <td width="16%" class="bold">Category <font color="#FF0000" size="-4">*</font> </td>
                  <td width="4%" align="center" class="bold">:</td>
                  <td><select name="category" onchange="FUN3(this.value);showpr()" class="combo_box">
                    <option value="">Select Category</option>
                    <?php  $sta1=mysql_query("select * from class_category");
		                  while($con1=mysql_fetch_array($sta1)) {?>
                    <option value="<?php echo $con1['c_id'];?>" <?php if($_POST['category'] == $con1['c_id']) echo "selected='selected'";  ?> ><?php echo $con1['c_name'];?></option>
                    <?php } ?>
                  </select>
                  </td>
                </tr>
                <tr>
                  <td class="bold">Subcategory <font color="#FF0000" size="-4">*</font></td>
                  <td align="center" class="bold">:</td>
                  <td><div id="subcategory">
                    <select name="subcategory" class="combo_box">
                      <option value="">Select Subcategory</option>
                      <?php 
												$exec_areg=mysql_query("select * from class_subcategory"); 
												while($fetch_areg=mysql_fetch_array($exec_areg))
													{?>
                      <option value="<?php echo $fetch_areg['sid']; ?>" <?php if($_POST['subcategory']==$fetch_areg['sid'] ) {  ?> selected="selected" <?php } ?>><?php echo $fetch_areg['subcategoryname']; ?></option>
                      <?php } ?>
                    </select>
                  </div></td>
                </tr>
                <!-- <tr>
                                        <td class="bold">Classified Type <font color="#FF0000" size="-4">*</font></td>
                                        <td align="center" class="bold">:</td>
                                        <td><select name="classtype" class="combo_box">
                                            <option value="">Select Type</option>
                                            <option value="1" <?php if($_POST['classtype']==1){ ?> selected="selected" <?php } ?>>Free</option>
                                            <?php  /* $usersql=mysql_query("select * from memberregister where userid='$usid'");
					  if(mysql_num_rows($usersql) > 0)
					  {
					   ?> 
                                            <option value="2">Payment</option>
                                            <?php  } */ ?>
                                          </select>                                            
                                        </td>
                                      </tr> -->
                <tr>
                  <td class="bold">Title <font color="#FF0000" size="-4">*</font></td>
                  <td align="center" class="bold">:</td>
                  <td><input name="title" type="text"  id="title" class="text_box" onblur="space(this.id)"/></td>
                </tr>
                <tr>
                  <td class="bold">Price</td>
                  <td align="center" class="bold">:</td>
                  <td><input name="pricess" type="text" maxlength="12"  id="pricess" class="text_box" onblur="space(this.id)" style="width:150px;" />
                      <em>If you are giving away your item, enter a price of 0 </em></td>
                </tr>
				 <tr>
                  <td class="bold">Address <font color="#FF0000" >*</font></td>
                  <td align="center" class="bold">:</td>
                  <td><input name="address" type="text"  id="address" class="text_box" onblur="space(this.id)"/></td>
                </tr>
                <!--<tr>
                                        <td class="bold">Country <font color="#FF0000" size="-4">*</font></td>
                                        <td align="center" class="bold">:</td>
                                        <td> India
										   <select name="country" class="combo_box" onchange="Javascript:categorylisted(this.value);">
                                            <option value="">Select Country</option>
                                            <?php  $sta2=mysql_query("select * from class_country order by country asc");
											while($con2=mysql_fetch_array($sta2)) {?>
                                            <option value="<?php echo $con2['countryid'];?>" <?php if($_POST['country']==$con2['countryid']){ ?> selected="selected" <?php } ?> ><?php echo $con2['country'];?></option>
                                            <?php } ?>
                                           </select> 
                                        </td>
                                      </tr>-->
                <tr>
                  <td class="bold">State <font color="#FF0000" size="-4">*</font></td>
                  <td align="center" class="bold">:</td>
                  <td><div id="statenew">
                    <select name="state" id="state" class="combo_box">
                      <option value="">Select State</option>
                      <?php  $sta2=mysql_query("select * from class_state where countryid='324' order by state_name asc");
							 while($con2=mysql_fetch_array($sta2)) {?>
                      <option value="<?php echo $con2['stateid'];?>" ><?php echo $con2['state_name'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                      <!--<label>
											<input name="state" type="text" id="state" value="<?php //echo $_POST['state'];?>" class="text_box" >
											</label> -->
                  </td>
                </tr>
                <tr>
                  <td class="bold">City <font color="#FF0000" size="-4">*</font></td>
                  <td align="center" class="bold">:</td>
                  <td><label>
                    <input name="city" type="text" id="city" value="<?php echo $_POST['city'];?>" class="text_box" />
                  </label></td>
                </tr>
                <tr>
                  <td class="bold">Description <font color="#FF0000" size="-4">*</font></td>
                  <td align="center" class="bold">:</td>
                  <td><textarea name="description" cols="28" rows="5" id="description" value="<?php echo $_POST['description'];?>" class="text_area" onblur="space(this.id)"></textarea></td>
                </tr>
                <tr>
                  <td class="bold">I am <font color="#FF0000" size="-4">*</font></td>
                  <td align="center" class="bold">:</td>
                  <td><input type="Radio" name="iam" checked="checked" value="1" />
                    &nbsp;&nbsp;An Individual&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="Radio" name="iam" value="2" />
                    &nbsp;&nbsp;A Professional/Business </td>
                </tr>
                <!--<tr>
                    <td class="bold">Start Date<font color="#FF0000" size="-4">*</font> </td>
                    <td align="center" class="bold">:</td>
                    <td height="25" colspan="2" align="left" ><input id="godate"  name="godate" type="text" size="15" readonly="true" onclick="javascript:NewCal('godate','ddmmyyyy')">&nbsp;<a href="javascript:NewCal('godate','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date" style="vertical-align:bottom;"></a></td>
                    </tr>-->
                <!--<tr>
                    <td class="bold">End Date<font color="#FF0000" size="-4">*</font> </td>
                    <td align="center" class="bold">:</td>
                    <td height="25" colspan="4" align="left" ><input id="godate1"  name="godate1" type="text" size="15" readonly="true" onclick="javascript:NewCal('godate1','ddmmyyyy')">&nbsp;<a href="javascript:NewCal('godate1','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date" style="vertical-align:bottom;"></a></td>
                    </tr>-->
                <tr>
                  <td colspan="3"><div id="ph1" style="display:block;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                      <tr>
                        <td width="15%" class="bold">Photo1</td>
                        <td width="4%" align="center" class="bold">:</td>
                        <td width="40%" style="padding-left:10px;"><input name="photo1" type="file" id="photo1" />
                              <br />
                          <span align="left">Size upto 2 MB</span></td>
                        <td><img src="images/list2-add.png" alt="Add" onclick="do1()" title="Add More" id="img1" height="28" width="28"/>&nbsp;</td>
                      </tr>
                    </table>
                  </div></td>
                </tr>
                <tr>
                  <td colspan="3"><div id="ph2" style="display:none;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center">
                      <tr>
                        <td width="15%" class="bold">Photo2</td>
                        <td width="4%" align="center" class="bold">:</td>
                        <td width="40%" style="padding-left:10px;"><input name="photo2" type="file" id="photo2" />
                              <br />
                          <span align="left">Size upto 2 MB</span></td>
                        <td><img src="images/list2-add.png" alt="Add" onclick="do2()" id="img2" title="Add More" height="28" width="28"/>&nbsp;</td>
                      </tr>
                    </table>
                  </div></td>
                </tr>
                <tr>
                  <td colspan="3"><div id="ph3" style="display:none;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center">
                      <tr>
                        <td width="15%" class="bold">Photo3</td>
                        <td width="4%" align="center" class="bold">:</td>
                        <td width="40%" style="padding-left:10px;"><input name="photo3" type="file" id="photo3" />
                              <br />
                          <span align="left">Size upto 2 MB</span></td>
                        <td><img src="images/list2-add.png" alt="Add" onclick="do3()" id="img3" title="Add More" height="28" width="28"/>&nbsp;</td>
                      </tr>
                    </table>
                  </div></td>
                </tr>
                <tr>
                  <td colspan="3"><div id="ph4" style="display:none;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center">
                      <tr>
                        <td width="15%" class="bold">Photo4</td>
                        <td width="4%" align="center" class="bold">:</td>
                        <td width="40%" style="padding-left:10px;"><input name="photo4" type="file" id="photo4" />
                              <br />
                          <span align="left">Size upto 2 MB</span></td>
                        <td></td>
                      </tr>
                    </table>
                  </div></td>
                </tr>
                <tr>
                  <td colspan="3" class="head_blue"><strong>A Responses for the above listing should be sent to :</strong></td>
                </tr>
                
                <tr>
                  <td height="10"></td>
                </tr>
                <tr>
                  <td class="bold">Contact Name<font color="#FF0000" size="-4">*</font></td>
                  <td align="center" class="bold">:</td>
                  <td>
                      <input type="text" name="conname" id="conname" class="text_box" onblur="space(this.id)" />
                  </td>
                </tr>
                <tr>
                  <td class="bold">Contact Email<font color="#FF0000" size="-4">*</font></td>
                  <td align="center" class="bold">:</td>
                  <td>
                      <input type="text" name="conemail"  id="conemail"class="text_box" onblur="space(this.id)" />
                  </td>
                </tr>
                <tr>
                  <td class="bold">Contact Number<font color="#FF0000" size="-4">*</font></td>
                  <td align="center" class="bold">:</td>
                  <td>
                      <input type="text" name="conphone"  id="conphone"class="text_box" onblur="space(this.id)" />
                  </td>
                </tr>
                <tr>
                  <td height="80" colspan="3" align="center"><input name="Submit" type="submit"  value="Submit" />
                    &nbsp;&nbsp;&nbsp;
                    <input name="Button" type="Button" onclick="location.href='2daydiscounts.php'" value="Back" />
                  </td>
                </tr>
              </table>
            </form>
				</td></tr>
				<tr bgcolor="#faf3f7"><td>&nbsp;</td></tr>
		  </table>	  </td>
	</tr>
</table>
</body>
</html>

<?PHP
 function getPagingQuery($sql, $itemPerPage = 10)
{
	if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
		$page = (int)$_GET['page'];
	} else {
		$page = 1;
	}
	
	// start fetching from this row number
	$offset = ($page - 1) * $itemPerPage;
	
	return $sql . " LIMIT $offset, $itemPerPage";
	
}
function getPagingLink($sql, $itemPerPage = 5,$strGet)
{
	$result        = mysql_query($sql) or die(mysql_error());
	$pagingLink    = '';
	$totalResults  = mysql_numrows($result);
		
	
	$totalPages    = ceil($totalResults / $itemPerPage);
	
		
	// how many link pages to show
	$numLinks      = 10;

		
	// create the paging links only if we have more than one page of results
	if ($totalPages > 1) {
	
		$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;
		
		if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
			$pageNumber = (int)$_GET['page'];
		} else {
			$pageNumber = 1;
		}
		
		// print 'previous' link only if we're not
		// on page one
		if ($pageNumber > 1) {
			$page = $pageNumber - 1;
			if ($page > 1) {
				$prev = " <a href=\"$self?page=$page&$strGet\" class=\"linktex\">| Prev |</a> ";
			} else {
				$prev = " <a href=\"$self?$strGet\" class=\"linktex\">| Prev |</a> ";
			}	
				
			$first = " <a href=\"$self?$strGet\" class=\"linktex\"> First</a> ";
		} else {
			$prev  = ''; // we're on page one, don't show 'previous' link
			$first = ''; // nor 'first page' link
		}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = " <a href=\"$self?page=$page&$strGet\" class=\"linktex\">| Next</a> ";
			$last = " <a href=\"$self?page=$totalPages&$strGet\" class=\"linktex\">| Last</a> ";
		} else {
			$next = ''; // we're on the last page, don't show 'next' link
			$last = ''; // nor 'last page' link
		}

		$start = $pageNumber - ($pageNumber % $numLinks) + 1;
		$end   = $start + $numLinks - 1;		
		
		$end   = min($totalPages, $end);
		
		$pagingLink = array();
		for($page = $start; $page <= $end; $page++)	{
			if ($page == $pageNumber) {
			    
				$pagingLink[] = " $page ";   // no need to create a link to current page
			} else {
				if ($page == 1) {
				  
					$pagingLink[] = " <a href=\"$self?$strGet\" class=\"linktex\">$page</a> ";
				} else {	
				 
					$pagingLink[] = " <a href=\"$self?page=$page&$strGet\" class=\"linktex\">$page</a> ";
				}	
			}
	
		}
		
		$pagingLink = implode(' | ', $pagingLink);
		
		// return the page navigation link
		$pagingLink = $first . $prev . $pagingLink . $next . $last;
		
	}
	
	if(empty($pagingLink)) { $pagingLink="<font color='#dddddd'>  First | Prev | 1 | 2 | 3 | Next | Last </font>"; }
	return $pagingLink;
}
 ?> 
