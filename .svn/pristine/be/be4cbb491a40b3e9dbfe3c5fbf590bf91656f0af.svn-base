<?php session_start();
ob_start();
include "../config/error.php";
if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}
$result=mysql_query("select * from generalsettings");
	$details=mysql_fetch_array($result);
	$id=$details['id'];
	$count=mysql_num_rows($result);
	$imglogo = $details['sitelogo'];
	if(isset($_REQUEST['submit']))
	{
		$webname=$_REQUEST['webname'];
		$webkeyword=$_REQUEST['webkeyword'];
		$webdes=$_REQUEST['webdes'];
		$projecttitle=$_REQUEST['project_title'];
		$sitename=$_REQUEST['site_name'];
		$siteteam=$_REQUEST['site_team'];
		$siteadmin=$_REQUEST['site_admin'];
		$sitecom=$_REQUEST['site_com'];
		$mailurl=$_REQUEST['mail_url'];
$newfilename=basename($_FILES['sitelogo']['name']);
 $tmpfilename=$_FILES['sitelogo']['tmp_name'];
 $uploadpath1="uploads/".$newfilename;
move_uploaded_file($tmpfilename,$uploadpath1);

if($newfilename!="")
          {
            $photofile=$newfilename;
           }
        else
        {
          $photofile=$imglogo;
        }
		
		if($count > 0)
		{
			mysql_query("update `generalsettings` set `title`='$webname', `webkeyword`='$webkeyword', `webdes`='$webdes', project_title='$projecttitle', site_name='$sitename', site_team='$siteteam', site_admin='$siteadmin', site_com='$sitecom', mail_url='$mailurl', sitelogo='$photofile' where `id`='$id'");
			header("Location:generalsettings.php?msg=upd");
		}
		else
		{
			mysql_query("insert into `generalsettings`(`title`, `webkeyword`, `webdes`, project_title, site_name, site_team, site_admin, site_com, mail_url, sitelogo) values('$webname', '$webkeyword', '$webdes', '$projecttitle', '$sitename', '$siteteam', '$siteadmin','$sitecom', '$mailurl', '$photofile')");
			header("Location:generalsettings.php?msg=ins");
		}
	}
	//echo "uploads/".$imglogo;exit;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title; ?></title>
<link href="css/style.css" rel="stylesheet"type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<script language="javascript">
function uploadval()
{
	
	if(document.settings.sitelogo.value!="")
	{
		var str = document.settings.sitelogo.value.substring(document.settings.sitelogo.value.indexOf('.'));
		if(str=='.jpg'||str=='.gif' || str=='.jpeg')
		{
			return true;
		}
		else
		{
			alert("Upload only jpg, jpeg and gif");
			return false;
		}
	}
}
</script>

<script language="javascript">

function postCheck()
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
    <td width="100%" colspan="9"><?php include("includes/adminmenu.php");?></td>
  </tr>
  
  
 
        
        
         <tr bgcolor="#FFFFFF">
          <td  ><br />
            <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="4%" align="right" valign="bottom"><img src="../images/box_left_top.jpg" width="17" height="17" /></td>
                <td width="92%" background="../images/box_top.jpg" style="background-position:bottom; background-repeat:repeat-x;">&nbsp;</td>
                <td width="4%" align="left" valign="bottom"><img src="../images/box_right_top.jpg" width="17" height="17" /></td>
              </tr>
              <tr>
                <td background="../images/box_left_center.jpg" style="background-position:right; background-repeat:repeat-y;">&nbsp;</td>
                <td bgcolor="#fef5fa"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="left" valign="top" ><form action="" method="post" enctype="multipart/form-data" name="postForm" id="form1" >
                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center">
                                      <tr>
                                        <td colspan="4" align="center" ><?php 
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
                                        <td colspan="4" class="head_bg"><strong>General Settings : </strong></td>
                                      </tr>
									  <?php if(isset($_REQUEST['msg'])){$msg=$_REQUEST['msg']?>
                                      <tr>
                                        <td colspan="4" align="center" class="bold"><?php if($msg=="upd"){?>
                                          <span style="color:#006633">Updated Successfully</span>
                                          <?php }else{?>
                                          <span style="color:#006633">Added Successfully</span>
                                          <?php }?></td>
                                      </tr>
									  <?php } ?>
                                      <tr>
                                        <td class="bold">&nbsp;</td>
                                        <td align="center" class="bold">&nbsp;</td>
                                        <td colspan="2">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td width="32%" class="bold">Website Name</td>
                                        <td width="2%" align="center" class="bold"><strong>:</strong></td>
                                        <td height="25%" colspan="2"><input name="webname" type="text" class="text_box" id="webname" value="<?php echo $details['title'];?>" style="width:180px;"/></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Website Keyword</td>
                                        <td align="center" class="bold">:</td>
                                        <td colspan="2"><textarea name="webkeyword" style="width:180px;" class="text_box" id="webkeyword"><?php echo $details['webkeyword'];?></textarea></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Website Description</td>
                                        <td align="center" class="bold">:</td>
                                        <td colspan="2"><textarea name="webdes" style="width:180px;" class="text_box" id="webdes"><?php echo $details['webdes'];?></textarea></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Project Title</td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td colspan="2"><input name="project_title" style="width:180px;" type="text" class="text_box" id="project_title" value="<?php echo $details['project_title'];?>"/></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Sitename</td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td width="27%"><input name="site_name" style="width:180px;" type="text" id="site_name" class="text_box" value="<?php echo $details['site_name'];?>"/></td>
                                        <td width="39%"></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Website Team</td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td colspan="2"><input name="site_team"  style="width:180px;" type="text" id="site_team" class="text_box" value="<?php echo $details['site_team'];?>" /></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Website Admin</td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td><input name="site_admin" style="width:180px;" type="text" id="site_admin" class="text_box" value="<?php echo $details['site_admin'];?>"/></td>
                                        <td><font color="#3399CC"> Ex: name@domain.com</font></td>
                                      </tr>
                                      <tr>
                                        <td class="bold">Website Url</td>
                                        <td align="center" class="bold"><strong>:</strong></td>
                                        <td colspan="2"><input name="site_com" style="width:180px;" type="text" class="text_box" id="site_com" value="<?php echo $details['site_com'];?>"/></td>
                                      </tr>
                                     
                                          <tr>
                                            <td class="bold">Mail url</td>
                                            <td align="center" class="bold">&nbsp;</td>
                                            <td><input type="text" style="width:180px;" name="textfield" class="text_box" value="<?php if($details['mail_url']=='') { echo "http://$_SERVER[HTTP_HOST]";} echo $details['mail_url'];?>"/></td>
                                            <td><font color="#3399CC">Ex:http://www.classified.com</font></td>
                                          </tr>
                                          <tr>
                                            <td class="bold">Exiting Site Logo </td>
                                            <td align="center" class="bold">:</td>
                                            <td colspan="2"><font face="Verdana" style="font-size:12px ">
                      <img src="<?php echo "uploads/".$imglogo;?>" width="180" height="47" border="0" />
                      </font></td>
                                          </tr>
                                          <tr><td class="bold">site Logo </td>
                                            <td align="center" class="bold"><strong>:</strong></td>
                                        <td colspan="2"><font face="Verdana" style="font-size:12px "><input name="sitelogo" type="file" id="sitelogo" /></font></td>
                                      </tr>
									  

                                      <tr>
                                        <td height="80" colspan="4" align="center">
                                        <!-- demo <input type="submit" name="submit" disabled="disabled" value="Save" onclick="return democheck();return postCheck();"/>This feature is disabled in the demo version... -->
										<input type="submit" name="submit" class="but_bg" value="Save" />
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
                <td align="right" valign="top"><img src="../images/box_left_bottom.jpg" width="17" height="17" /></td>
                <td background="../images/box_bottom.jpg" style="background-position:top; background-repeat:repeat-x;">&nbsp;</td>
                <td align="left" valign="top"><img src="../images/box_right_bottom.jpg" width="17" height="17" /></td>
              </tr>
            </table></td>
        </tr>
      
  
  
  
</table>
</body>
</html>
