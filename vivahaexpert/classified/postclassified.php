<?php session_start();
ob_start();
include("config/error.php");
$postid=$_REQUEST['postid'];
if(isset($_SESSION['userid']))
{
	$usid=$_SESSION['userid'];
}
else
{
	$usid=0;
}
/*if(!isset($_SESSION['userid']))
{
header("location:registration.php");
}*/

 define ("MAX_SIZE","2"); 
 $errors=0;
 
 
if(isset($_REQUEST['Submit']))
{

$category=$_REQUEST['category'];

$subcategory=$_REQUEST['subcategory'];

//$classtype=$_REQUEST['classtype']; free

$classtype=1;

$title=$_REQUEST['title'];
//$country=$_REQUEST['country'];
$country=324;
$state=$_REQUEST['state'];
$city=$_REQUEST['city'];
$description=$_REQUEST['description'];
/*if($classtype==1)
{
$class_fetch=mysql_fetch_array(mysql_query("select * from membership where id='$classtype'"));

$godate=date("Y-m-d");
$notice=$class_fetch['duration'];

$s=mysql_query("SELECT DATE_ADD('$godate', INTERVAL +$notice DAY)");
		 $fer=mysql_fetch_array($s);
		 $godate1=$fer[0];
}
if($classtype==2)
{

$class_fetch=mysql_fetch_array(mysql_query("select * from membership where id='$classtype'"));

$godate=date("Y-m-d");

$notice1=$class_fetch['duration'];
$s=mysql_query("SELECT DATE_ADD('$godate', INTERVAL +$notice1 DAY)");
		 $fer=mysql_fetch_array($s);
		 $godate1=$fer[0];

} */


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
 //header("location:postclassified.php?errmsg3=1&po=".$_POST);
 //exit;
	//$errors=1;
}
else{
$imgext=explode(".",$img1);
$imgext1=count($imgext)-1;
 $time=explode(" ",microtime());
 
$adimage1=time()."$imgext[0]"."$time[1]".".$imgext[$imgext1]";

/*  $adimage1=$_SESSION['username']."$imgext[0]"."$time[1]".".$imgext[$imgext1]";*/
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
$adimage2=time()."$imgext1[0]"."$time1[1]".".$imgext1[$imgext11]";
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
  $adimage3=time()."$imgext3[0]"."$time2[1]".".$imgext3[$imgext31]";
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
  $adimage4=time()."$imgext4[0]"."$time3[1]".".$imgext4[$imgext41]";
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

/*$membership_class=mysql_fetch_array(mysql_query("select * from class_membership where userid='$usid'"));

$cnt_member=$membership_class['maxnoads'];

$post_class=mysql_query("select * from class_postclassified  where user_id='$usid' and p_postclass='0'");

$cnt_postclass=mysql_num_rows($post_class);
*/

//if($cnt_member > $cnt_postclass)
//{

//if($classtype==1)
//{

//$check_mem=mysql_fetch_array(mysql_query("select * from class_membership where userid='$usid'"));

//if($check_mem['avabfree'] > 0)
//{
/*if(mysql_query("insert into `class_postclassified`(`user_id`,`p_category`,`p_subcategory`,`p_title`,`p_country`,`p_state`,`p_city`,`p_description`,`p_sdate`,`p_photo1`,`p_photo2`,`p_photo3`,`p_photo4`,`p_conname`,`p_conemail`,`p_conno`,`p_date`,`p_status`)
 values('$usid','$category','$subcategory','$title','$country','$state','$city','$description','$godate1','$upload1','$upload2','$upload3','$upload4','$conname','$conemail','$conphone','$date','1')")) */
/*if($imgerr!=1) 
if(mysql_query("insert into `class_postclassified`(`user_id`,`p_category`,`p_subcategory`,`p_classtype`,`p_title`,`p_price`,`p_country`,`p_state`,`p_city`,`p_description`,`p_sdate`,`p_photo1`,`p_photo2`,`p_photo3`,`p_photo4`,`p_conname`,`p_conemail`,`p_conno`,`p_date`,`p_iam`,`p_status`)
 values('$usid','$category','$subcategory','$classtype','$title','$pricess','$country','$state','$city','$description','$godate1','$upload1','$upload2','$upload3','$upload4','$conname','$conemail','$conphone','$date','$iam','1')"))*/
 
 
 if($imgerr!=1) 
if(mysql_query("insert into `class_postclassified`(`user_id`,`p_category`,`p_subcategory`,`p_classtype`,`p_title`,`p_price`,`p_country`,`p_state`,`p_city`,`p_description`,`p_sdate`,`p_photo1`,`p_photo2`,`p_photo3`,`p_photo4`,`p_conname`,`p_conemail`,`p_conno`,`p_date`,`p_iam`,`p_status`)
 values($usid,'$category','$subcategory','$classtype','$title','$pricess','$country','$state','$city','$description','$godate1','$upload1','$upload2','$upload3','$upload4','$conname','$conemail','$conphone','$date','$iam','1')"))

//$membership_class1=mysql_fetch_array(mysql_query("select * from class_membership where userid='$usid'"));

//$avabfree=$membership_class1['avabfree']-1;

//mysql_query("update class_membership set avabfree='$avabfree' where userid='$usid'");
//}
//else
//{

//header("location:postclassified.php?errmsg1=1");

//}


//}

//if($classtype==2)
//{

//$check_mem=mysql_fetch_array(mysql_query("select * from class_membership where userid='$usid'"));

//if($check_mem['avabpayment'] > 0)
//{

//mysql_query("insert into `class_postclassified`(`user_id`,`p_category`,`p_subcategory`,`p_classtype`,`p_title`,`p_country`,`p_state`,`p_city`,`p_description`,`p_sdate`,
//`p_edate`,`p_photo1`,`p_photo2`,`p_photo3`,`p_photo4`,`p_conname`,`p_conemail`,`p_conno`,`p_date`,`p_status`,`p_postclass`)
//values('$usid','$category','$subcategory','$classtype','$title','$country','$state','$city','$description','$godate','$godate1','$upload1','$upload2','$upload3','$upload4','$conname','$conemail','$conphone','$date','1','1')");


//$membership_class12=mysql_fetch_array(mysql_query("select * from class_membership where userid='$usid'"));

//$avabpayment=$membership_class12['avabpayment']-1;

//mysql_query("update class_membership set avabpayment='$avabpayment' where userid='$usid'");

//}
//else
{

header("location:edit_class.php?errmsg1=1");

//header("location:postclassified.php?errmsg2=1");

}

//header("location:welcome.php?mess=1");

//}
//}
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
<title><?php echo $sitename;?></title>
<link type="text/css" rel="stylesheet" href="style/main.css"  />
<script language="javascript" src="ajax/ajaxstate.js"></script>
<script language="javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script language="javascript">

tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "table,inlinepopups",

        // Theme options
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,|,code",
        theme_advanced_buttons2 : "undo,redo",
        theme_advanced_buttons3 : "",
        theme_advanced_buttons4 : "",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        //theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "/jscripts/tiny_mce/themes/advanced/skins/default/content.css",

        // Style formats
        style_formats : [
                {title : 'Bold text', inline : 'b'},
                {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
                {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
                {title : 'Example 1', inline : 'span', classes : 'example1'},
                {title : 'Example 2', inline : 'span', classes : 'example2'},
                {title : 'Table styles'},
                {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
        ],

        formats : {
                alignleft : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'left'},
                aligncenter : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'center'},
                alignright : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'right'},
                alignfull : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'full'},
                bold : {inline : 'span', 'classes' : 'bold'},
                italic : {inline : 'span', 'classes' : 'italic'},
                underline : {inline : 'span', 'classes' : 'underline', exact : true},
                strikethrough : {inline : 'del'},
                customformat : {inline : 'span', styles : {color : '#00ff00', fontSize : '20px'}, attributes : {title : 'My custom format'}}
        }
});

function showcity(str)
{
if (str=="")
  {
  document.getElementById("city").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("city").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","get_city.php?q="+str,true);
xmlhttp.send();
}

function space(sid) {
//alert("hello");
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
tinyMCE.triggerSave();

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
					space(document.postForm.description.id)
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
				
/*var conphone=document.postForm.conphone.value;
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
			}	*/		

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
<script language="JavaScript" src="ajaxfunction.js"></script>
<script language="JavaScript" src="ajax/ajaxfunctions2.js"></script>
<script language="javascript" src="ajax/ajaxstate.js"></script>
<script language="javascript" type="text/javascript" src="datetimepicker.js"></script>
</head>

<body>
<div id="container">
  <h1 id="header_font"> <strong><?php echo $sitename;?> classifieds</strong> </h1>
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
          <div class=""> <a href="index.php" class="siteLink">Home</a>&nbsp;&nbsp;&nbsp; <a href="postclassified.php" class="siteLink">Post Ads</a>&nbsp;&nbsp;&nbsp; <a href="advance_search.php" class="siteLink">Search</a>&nbsp;&nbsp;&nbsp; <a href="edit_class.php" class="siteLink">My Ads</a> </div>
          <br />
          <div class="in_head">
            <div class="in_head">
              <div class="in_head">
                <div class="head_txt">Post Classified</div>
              </div>
            </div>
          </div>
          <div class="frmcont">
            <form action="" method="post" enctype="multipart/form-data" name="postForm" id="form1" onsubmit="return postCheck();">
              <table width="95%" border="0" cellspacing="0" cellpadding="5" align="right">
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
                  <td><input name="title" type="text" value="<?php echo $_POST['title'];?>" id="title" class="text_box" onblur="space(this.id)"/></td>
                </tr>
                <tr>
                  <td class="bold">Price</td>
                  <td align="center" class="bold">:</td>
                  <td><input name="pricess" type="text" maxlength="12" value="<?php echo $_POST['title'];?>" id="pricess" class="text_box" onblur="space(this.id)" style="width:100px;" />
                      <em>If you are giving away your item, enter a price of 0 </em></td>
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
                    <select name="state" id="state" class="combo_box" onchange="showcity(this.value)">
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
                  	<select name="city" id="city" class="combo_box">
                    <option value="">Select city</option>
                    </select>
                  
                    <?php /* ?><input name="city" type="text" id="city" value="<?php echo $_POST['city'];?>" class="text_box" /><?php */ ?>
                  </label></td>
                </tr>
                <tr>
                  <td class="bold">Description <font color="#FF0000" size="-4">*</font></td>
                  <td align="center" class="bold">:</td>
                  <td><textarea name="description" cols="28" rows="5" id="description" value="<?php echo $_POST['description'];?>"></textarea></td><?php /*  class="text_area" onblur="space(this.id)"  */ ?>
                </tr>
                <tr>
                  <td class="bold">I am: <font color="#FF0000" size="-4">*</font></td>
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
                  <td colspan="3" class="head_blue"><strong>A�Responses for the above listing should be sent to :</strong></td>
                </tr>
                <?php 
					$postselect=mysql_query("select * from `class_register` where `reg_id`='$usid'");
					$postfetch=mysql_fetch_array($postselect);
					$postname=$postfetch['reg_name'];
					$postemail=$postfetch['reg_email'];
					$postphone=$postfetch['reg_phone'];
					?>
                <tr>
                  <td height="10"></td>
                </tr>
                <tr>
                  <td class="bold">Contact Name <font color="#FF0000" size="-4">*</font></td>
                  <td align="center" class="bold">:</td>
                  <td>
                      <input type="text" name="conname" class="text_box"  value="<?php echo $postname;?>"/>
                  </td>
                </tr>
                <tr>
                  <td class="bold">Contact Email <font color="#FF0000" size="-4">*</font></td>
                  <td align="center" class="bold">:</td>
                  <td>
                      <input type="text" name="conemail" class="text_box"  value="<?php echo $postemail;?>"/>
                  </td>
                </tr>
                <tr>
                  <td class="bold">Contact Number</td>
                  <td align="center" class="bold">:</td>
                  <td>
                      <input type="text" name="conphone" class="text_box"  value="<?php echo $postphone;?>"/>
                  </td>
                </tr>
                <tr>
                  <td height="80" colspan="3" align="center"><input name="Submit" type="submit" class="but_bg" value="Submit" />
                    &nbsp;&nbsp;&nbsp;
                    <input name="Button" type="Button" onclick="location.href='welcome.php'" value="Back" />
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