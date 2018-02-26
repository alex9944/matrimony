<?php session_start();
ob_start();
include("config/error.php");
include("pagination.php");
if(isset($_SESSION['userid']))
{
$id=$_SESSION['userid'];
}
else
{
$id=0;
}
//echo "select * from lak_register where `reg_id`='$id'";
$regsql=mysql_query("select * from `class_register` where `reg_id`='$id'");
$View_fetch=mysql_fetch_array($regsql);
$view_name=$View_fetch['reg_name'];
$view_email=$View_fetch['reg_email'];
$view_phone=$View_fetch['reg_phone'];
$view_lastview=$View_fetch['last_visit'];

 $searchkey=$_REQUEST['vid'];

$categorysql11=mysql_fetch_array(mysql_query("select * from class_postclassified where p_id='$searchkey' and p_status='1' order by p_id desc"));

$categorysql1=mysql_fetch_array(mysql_query("select * from class_category where c_id='$categorysql11[p_category]'"));

$subcategorysql=mysql_fetch_array(mysql_query("select * from class_subcategory where sid='$categorysql11[p_subcategory]'"));

$post_query=mysql_query("select * from class_postclassified where p_category='$subcategorysql[cid]' and  p_status='1'");

if(isset($_REQUEST['searchsubmit']))
{

$youremail=$_POST['youremail']; 

$yourmessage=$_POST['yourmessage'];

 $searchkey=$_REQUEST['vid'];


$categorysql11=mysql_fetch_array(mysql_query("select * from class_postclassified where p_id='$searchkey'"));

$usersql=mysql_fetch_array(mysql_query("select * from class_register where reg_id='$categorysql11[user_id]'"));
mysql_query("insert into messageclass(ownerid,contactid,owneremail,contactemail,message) values('$usersql[reg_id]','$id','$usersql[reg_email]','$youremail','$yourmessage')");
   
   $headers  = "MIME-Version: 1.0\r\n";
   $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
   $headers .= "From: $adminmail" . "\r\n";
   $headers .= "Cc: $youremail";
   $to      = $usersql['reg_email'];
   $subject = "Message from clickone.com";

 
 $message ="<font style=\"font-size:12px;font-style:normal;font-family:Tahoma,Verdana,Arial,Helvetica,sans-serif\">
<table width=\"766\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"border:1px solid #EFF2F2;padding:20px\">
<tr>
<td><a href=\"$site_url_reg\" target=\"_blank\">
<img  src=\"$logo_url\" border=\"0\"></a></td>
</tr>
<tr><td style=\"background:#0195C5;height:5px;\"></td></tr>
<tr><td>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" align=\"left\" style=\"color:#333333;margin-top:20px;\">
<tr valign=\"top\">
<td style=\"width:255px;padding:10px 20px;font-size:12px;\">
<div style=\"color:#0195C5;font-size:14px;font-weight:bold;\">Dear $usersql[reg_name]!</div>

<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-size:12px;\">
<tr><td colspan=\"2\">Opinions For Category : $categorysql1[c_name] <br/><br/></td></tr>
<tr><td>Message :</td><td><span style=\"font-weight:bold\">$yourmessage</span></td></tr>

</table>

<br/><br/>

If you need any help along the way, please contact <a href=\"mailto:$adminmail\">$adminmail</a>
<br/><br/>Thanks for using Classified!
<br/> - $site_team
</td>
</tr>
</table>
</td></tr>
</table>
<table width=\"766\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"padding-top: 5px; padding-bottom: 5px;\">
<tbody>
<tr>
<td style=\"font-size:12px;color:#0195c5;line-height:1.4em;text-align:center;padding-top:10px;\" colspan=\"2\">Copyright ".date('Y')." clickone.com. All Rights Reserved.</td>
</tr>
</tbody>
</table>
</font>";
	mail($to,$subject,$message,$headers);
   header("location:searchview.php?vid=$searchkey&errmsg=1");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $sitename;?></title>
<link type="text/css" rel="stylesheet" href="style/main.css"  />
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
<script language="javascript">
function space(sid) {
	var name=document.getElementById(sid).value;
	document.getElementById(sid).value=name.replace(/^(?:\s)*/g,'').replace(/(?:\s)*$/g,'');
}

function validate() {
	if(document.sendmsg.youremail.value=="") {
		alert("Enter the Email");
		document.sendmsg.youremail.focus();
		return false;
	} else {
		var as=echeck(document.sendmsg.youremail.value);
		if(as==false) {
			return false;
		}
	}
	if(document.sendmsg.yourmessage.value=="") {
		alert("Enter the Message");
		document.sendmsg.yourmessage.focus();
		return false;
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
		   return false;
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID");
		   return false;
		}
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID");
		    return false;
		}
		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }
		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID");
		    return false;
		 }
		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }
 		 return true;					
	}
</script>
<script language="javascript">
function show1(divid) { 
	if(document.getElementById(divid).style.display == "block") {
		document.getElementById(divid).style.display = "none";
	} else {
		document.getElementById(divid).style.display = "block";
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
			<div class="m" style="">
				<?php include("includes/searchview-left.php");?>
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
		
			<div class="m" style="padding:14px;">
				<div class="in_head">
				<div class="in_head">
				<div class="in_head">
				<div class="head_txt">Business</div>
				
				</div>
				</div>
				</div>

				<div>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td style="padding-top:10px;" width="" id="body_right" valign="top" align="center">
             <?php 
			 if(isset($_REQUEST['errmsg'])==1)
			 {?>
			   <font style="font:bold 12px arial;color:green;"><strong><?php echo "Mail Sent Succesfully"; ?></strong></font>
			 
			 <?php }
			 
			 ?>
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr> 
              <td align="left" valign="top" bgcolor="#FFFFFF">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="color: #333333;font-size: 12px;">
                  <tr>
                    <td colspan="2" height="10" align="right"></td>
                  </tr>
                
                <?php
				$dateexp=explode("-",$categorysql11['p_date']);
				 $datesql=mysql_fetch_array(mysql_query("select *,DATE_FORMAT(p_date,'%W %M ') as datechk from class_postclassified"));
				
				?>
					
                  <tr>
                    <td colspan="2" bgcolor="#E4E4E4" style="font:normal 12px arial;">
						<span style="float:left;padding:2px 0px 0px 10px;"><?php echo $datesql['datechk']; ?><?php echo $dateexp[2];?>,&nbsp;<?php echo $dateexp[0];?></span>
						<span style="float:right;padding:2px 10px 0px 0px;"><a href="javascript:void(0);" style="color: #CC5600;font-size: 11px;" onclick="javascript:show1('frnd');">Email this Ad</a></span>
						<div style="position:relative;float:right;padding:20px 250px 0px 0px;">
							<div id="frnd" style="background: url(images/white-bg.jpg) repeat;display:none;position:absolute;width:300px;">
<?php 

if(isset($_REQUEST['frndsubmit']))
{
$frndname=$_POST['frndname'];
$frndemail=$_POST['frndemail'];
$yourname=$_POST['yourname'];
$youremail1=$_POST['youremail1'];
mysql_query("insert into friendrequest(userid,frndname,frndemail,yourname,youremail) values('$id','$frndname','$frndemail','$yourname','$youremail1')") or die(mysql_error());
  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "From: $adminmail" . "\r\n";
  $headers .= "Cc: $youremail1" . "\r\n";
  $to      = $frndemail;
  $subject = "Check this out - from clickone.com";
$message ="<font style=\"font-size:12px;font-style:normal;font-family:Tahoma,Verdana,Arial,Helvetica,sans-serif\">
<table width=\"766\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"border:1px solid #EFF2F2;padding:20px\">
<tr>
<td><a href=\"$site_url_reg\" target=\"_blank\">
<img  src=\"$logo_url\" width=\"188\" height=\"81\" border=\"0\"></a></td>
</tr>
<tr><td style=\"background:#0195C5;height:5px;\"></td></tr>
<tr><td>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" align=\"left\" style=\"color:#333333;margin-top:20px;\">
<tr valign=\"top\">
<td style=\"width:255px;padding:10px 20px;font-size:12px;\">
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-size:12px;\">
<tr><td colspan=\"2\">Hi $frndname, <br/><br/></td></tr>
<tr><td colspan=\"2\">I came across this post at clickone.com Classifieds and thought you might be interested. Have a look.
 <br/><br/></td></tr>
<tr><td colspan=\"2\"><a href='$site_url_reg/searchview.php?vid=$searchkey'>Click Here</a><br/><br/></td></tr> 
</table>
<br/><br/>
$yourname
$youremail
<br/><br/>
If you need any help along the way, please contact <a href=\"mailto:$adminmail\">$adminmail</a>
<br/><br/>Thanks for using Classified!
<br/> - $site_team
</td>
</tr>
</table>
</td></tr>
</table>
<table width=\"766\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"padding-top: 5px; padding-bottom: 5px;\">
<tbody>
<tr>
<td style=\"font-size:12px;color:#0195c5;line-height:1.4em;text-align:center;padding-top:10px;\" colspan=\"2\">Copyright ".date('Y')." clickone.com. All Rights Reserved.</td>
</tr>
</tbody>
</table>
</font>";
   mail($to,$subject,$message,$headers);
   header("location:searchview.php?vid=".$_GET['vid']."&errmsg=1");
}
?>
<script language="javascript">
function frndvalidate() { 
	if(document.frmfrndemail.frndname.value=="") {
		alert("Enter Your Friend Name");
		document.frmfrndemail.frndname.focus();
		return false;
	} else {
		var name=document.frmfrndemail.frndname.value;
		if(name!="") {
			var iChars = " !@#$%^&*()+=-[]\\\';`,./{}|\":<>?0123456789";
			for (var i = 0; i < name.length; i++) {
				if (iChars.indexOf(name.charAt(i)) != -1) {
					name="";
					alert ("Friend Name has special characters. \nThese are not allowed.\n Please remove them and try again.");
					document.frmfrndemail.frndname.focus();
					return false;
				}
			}
		} 
	}
	if(document.frmfrndemail.frndemail.value=="") {
		alert("Enter Your Friend Email ID");
		document.frmfrndemail.frndemail.focus();
		return false;
	} else {
		var as=echeck(document.frmfrndemail.frndemail.value);
		if(as==false) {
			return false;
		}
	}
	if(document.frmfrndemail.yourname.value=="") {
		alert("Enter Your Name");
		document.frmfrndemail.yourname.focus();
		return false;
	}
	if(document.frmfrndemail.youremail1.value=="") {
		alert("Enter Your Email ID");
		document.frmfrndemail.youremail1.focus();
		return false;
	} else {
		var as=echeck(document.frmfrndemail.youremail1.value);
		if(as==false) {
			return false;
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
		   return false;
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID");
		   return false;
		}
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID");
		    return false;
		}
		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }
		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID");
		    return false;
		 }
		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }
 		 return true;					
	}
</script>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="10" style="border:5px solid #b8e9ff;">
  <tr>
    <td bgcolor="#f8fdff"><form name="frmfrndemail" action="" method="post" onsubmit="return frndvalidate();">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td colspan="3" align="right"><a href="javascript:void(0);" style="color: #CC5600;font-size: 11px;" onclick="javascript:show1('frnd');">Close</a></td>
		</tr>
		<tr><td height="10"></td></tr>
		<tr>
          <td width="41%" height="30" class="bold"><strong>Friend's name: </strong><font color="#FF0000" size="-4">*</font></td>
          <td width="59%"><label>
            <input type="text" name="frndname" class="text_box2" />
          </label></td>
        </tr>
        <tr>
          <td height="30" class="bold"><strong>Friend's email: </strong><font color="#FF0000" size="-4">*</font></td>
          <td><input type="text" name="frndemail" class="text_box2"  /></td>
        </tr>
        <tr>
          <td height="30" class="bold"><strong>Your name: </strong><font color="#FF0000" size="-4">*</font></td>
          <td><input type="text" name="yourname" class="text_box2" /></td>
        </tr>
        <tr>
          <td height="30" class="bold"><strong>Your email: </strong><font color="#FF0000" size="-4">*</font></td>
          <td><input type="text" name="youremail1" class="text_box2" /></td>
        </tr>
		<tr><td height="10"></td></tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="frndsubmit"  value="Send Now" class="but_bg" />
          </label></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</div>
						</div>
					</td>
                  </tr>
				  <tr>
                    <td colspan="2" align="right">&nbsp;</td>
                  </tr>
                  <tr>  
                    <td colspan="2"><table><tr>
					<td valign="top" align="justify">
						<div id="gallery">
							<?php if(file_exists($categorysql11['p_photo1'])) { $photoct = 1; ?>
							<a title="<?php echo ucfirst($categorysql11['p_title']);  ?>" href="<?php echo $categorysql11['p_photo1']; ?>"><img style="border:1px solid #E4E4E4;padding:2px;" src="<?php echo $categorysql11['p_photo1']; ?>" height="100" width="100" /></a>
							<div style="display:none;">
								<?php if($categorysql11['p_photo2'] != "") { $photoct = 2; ?><a title="<?php echo ucfirst($categorysql11['p_title']); ?>" href="<?php echo $categorysql11['p_photo2']; ?>"><img src="<?php echo $categorysql11['p_photo2']; ?>" height="100" width="100" /></a><?php } ?>
								<?php if($categorysql11['p_photo3'] != "") { $photoct = 3; ?><a title="<?php echo ucfirst($categorysql11['p_title']); ?>" href="<?php echo $categorysql11['p_photo3']; ?>"><img src="<?php echo $categorysql11['p_photo3']; ?>" height="100" width="100" /></a><?php } ?>
								<?php if($categorysql11['p_photo4'] != "") { $photoct = 4; ?><a title="<?php echo ucfirst($categorysql11['p_title']); ?>" href="<?php echo $categorysql11['p_photo4']; ?>"><img src="<?php echo $categorysql11['p_photo4']; ?>" height="100" width="100" /></a><?php } ?>
							</div><br />
							<em><span style="color:#F94D01;"><strong><?php echo $photoct; ?></strong></span> photos available</em>
							<?php } else { ?>
							<img src="images/NOIMAGE.jpeg" height="100" width="100"/>
							<?php }?>
						</div>
					</td>
					<td></td>
					<td valign="top" colspan="2" align="justify" style="line-height:20px;"><?php $c=$categorysql11['p_city'];
				 $city = mysql_query("select * from class_city where cityid='$c'");
				 $fetch=mysql_fetch_array($city);?>
					<span style="color: #F94D01;font-size: 12px;"><strong><?php echo ucfirst($categorysql11['p_title']); ?></strong></span>&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $categorysql1['c_name'];?>/<?php echo $subcategorysql['subcategoryname']; ?><br />
                    <?php if($categorysql11['p_price'] != 0) echo '<strong>Price</strong> : MYR. '.$categorysql11['p_price'].'<br />'; ?> 
					<?php echo '<strong>Description</strong> : '.$categorysql11['p_description']; ?><br /><span class="sub_title"><strong>City</strong> : </span><?php echo $categorysql11['p_city'].', '.$categorysql11['p_state'];?><br />
					<?php if($categorysql11['p_iam'] == 1) $stiam = "An Individual"; else $stiam = "A Professional/Business";
							echo '<strong>Customer Type</strong> : '.$stiam.'<br />'; 
					?> 
					<?php echo '<strong>Contact person</strong> : <br /><span style="padding-left:20px;"></span>'.$categorysql11['p_conname'].'<br /><span style="padding-left:20px;"></span>'.$categorysql11['p_conemail'].'<br /><span style="padding-left:20px;"></span>'.$categorysql11['p_conno']; ?>
					</td>
					</tr>
					</table></td>
                  </tr>
                  <tr> 
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr class="tab_head">
                    <td colspan="2"><strong>Contact this User:</strong></td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2">
                    <form name="sendmsg" method="post" action="" onsubmit="return validate();">
                    <table align="right" width="95%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="12%" class="bold">Your Email <font color="#FF0000" size="-4">*</font></td>
                        <td width="5%" class="bold">:</td>
                        <td width="63%">
                          
                            <input type="text" name="youremail" class="text_box" />                                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="bold">Message <font color="#FF0000" size="-4">*</font></td>
                        <td class="bold">:</td>
                        <td>
                            <textarea name="yourmessage" id="yourmessage" class="text_area" cols="40" rows="5" onblur="space(this.id)"></textarea>                                                  </td>
                      </tr>
                      <tr>
                        <td colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center">&nbsp;</td>
                        <td align="left">&nbsp;</td>
                        <td align="left"><input name="searchsubmit" type="submit" class="but_bg" value="Send" /></td>
                      </tr>
                      
                    </table>
                    </form>                    </td>
                  </tr>
                </table>                </td>
            </tr>
          </table></td>
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
