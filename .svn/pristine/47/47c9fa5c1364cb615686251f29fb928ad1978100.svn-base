<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript">
function  checkforwardfrm()
{
	if(document.forwardmsg.forwardemailaddress.value == "")
	{
		alert("Please enter email address.");
		document.forwardmsg.forwardemailaddress.focus();
		return false;
	}
	if(document.getElementById("forwardemailaddress").value != "")
    {
       var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
       var address = document.getElementById("forwardemailaddress").value;
       if(reg.test(address) == false)
       {
          alert('Please enter valid email address.');
          return false;
       }
    }
	return true;
}
</script>
</head>

<body>
<?php include("config.php"); 
if($_REQUEST["allmatriid"] != "")
{
	if(!isset($_REQUEST["msg"])) 
	{ 
		$to = $_REQUEST["forwardemailaddress"];
		$allmatriid = $_REQUEST["allmatriid"];
		$data=trim($allmatriid); 
		$ex=explode(" ",$data); 
		$size=sizeof($ex); 
		$message = "";
		for($i=0;$i<$size;$i++) 
		{ 
			$getprofile_sql = "SELECT * FROM register WHERE MatriID ='".$ex[$i]."'";
			$getprofile_exec = mysql_query($getprofile_sql);
			$getprofile_count = mysql_num_rows($getprofile_exec);
			if($getprofile_count != 0)
			{
				$getprofile_fetch = mysql_fetch_array($getprofile_exec);
				if($message != "")
					$message .= "<br/><hr size='1' style='background-color:#FFE0C4; color:#FFE0C4;'><br/>";
				
				$message .= '<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr><td width="120" align="center" valign="top">';
				if(($getprofile_fetch['Photo1']!= "nophoto.gif" ) && ($getprofile_fetch['PhotoProtect']!= "Yes")) { 
					$message .= '<img width="110" height="110" src="'.$site_url.'/memphoto1/'.$getprofile_fetch['Photo1'].'" />';
				}
				else if(($getprofile_fetch['Photo1']!= "nophoto.gif" ) && ($getprofile_fetch['PhotoProtect']== "Yes")) { 
					if($getprofile_fetch['Gender'] == 'Male') {
						$message .=	'<img src="'.$site_url.'/images/icons/photo_askme_man.jpg" width="100" height="100" />';
					} else {
						$message .=	'<img src="'.$site_url.'/images/icons/photo_askme_lady.jpg" width="100" height="100" />';
					} 
				}
				else
				{
					if($getprofile_fetch['Gender'] == 'Male') {
						$message .=	'<img src="'.$site_url.'/images/icons/noimage_man.jpg" width="100" height="100" />';
					} else {
						$message .=	'<img src="'.$site_url.'/images/icons/noimage_girl.jpg" width="100" height="100" />';
					} 
				}
				$message .=	'</td><td>';
				$message .= "Matri ID :".$getprofile_fetch["MatriID"]."<br/>";
				$message .= "Name :".$getprofile_fetch["Name"]."<br/>";
				$message .= "Age :".$getprofile_fetch["Age"]."<br/>";
				$message .= "Religion :".$getprofile_fetch["Religion"]."<br/>";
				$message .= "Caste :".$getprofile_fetch["Caste"]."<br/>";
				$message .= "Eductaion :".$getprofile_fetch["Education"]."<br/>";
				$message .= "Occupation :".$getprofile_fetch["Occupation"]."<br/>";
				$message .= "Location :".$getprofile_fetch["Address"];
				if($getprofile_fetch['City'] != "") $message .= ", ".$getprofile_fetch['City'];
				if($getprofile_fetch['State'] != "") $message .= ", ".$getprofile_fetch['State'];
				if($getprofile_fetch['Country'] != "") $message .=  ", ".$getprofile_fetch['Country'];
				$message .= "<br/> Want to see full profile <a href=''.$site_url.'/viewfullprofile.php?txtID=".$getprofile_fetch["MatriID"]."' style='color: #A50050;text-decoration: underline;'>Click Here</a>";
				$message .= '</td></tr></table>';
			}
		} 
		$mailmsg ='<html>
<body style="font-family:Arial, Helvetica, sans-serif;font-size:12px;">
<table width="663" border="0" align="center" cellspacing="0" cellpadding="0" style="background-color: #FFFBF8;border: 1px solid #FAD6A6;padding:20px;">
<tr><td>
<table width="633" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="middle" width="335"><div align="center"><img src="'.$site_url.'/images/logo.png" width="309" height="64"></div></td>
                        <td align="left"><strong>'.$sitename.'<br/>
                      '.$address.'	
					  
		<a href="mailto:'.$siteadmin.'" style="color: #A50050;text-decoration: underline;">'.$siteadmin.'</a></strong></td>
                      </tr>
					  
					  <tr><td colspan="2"><hr size="1" style="height:2px;background-color:#FFE0C4; color:#FFE0C4;"></td></tr>
                      <tr><td colspan="2" align="left"><br/>'.$message.'<br/><br/></td></tr>
                    </table></td></tr></table></body>
</html>';
$subject = "Liked profile send from" .$sitename."by".$_SESSION['name'];
		$getsenderdet_sql = "SELECT * FROM register WHERE MatriID ='".$_SESSION['matriid']."'";
		$getsenderdet_exec = mysql_query($getsenderdet_sql);
		$getsenderdet_fetch = mysql_fetch_array($getsenderdet_exec);
		$from = $getsenderdet_fetch["ConfirmEmail"];

		ini_set("SMTP",$smtphost);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";

//		echo $mailmsg;

		@mail($to, $subject, $mailmsg, $headers);


		$msg = "Profile Successfully Forwarded.";
	}
	else
	{
		$msg = "Profile Successfully Forwarded.";
	}
}
?>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
 <!--  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">My Search <img alt="" src="images/icons/arrow_breadcrumbs.png">Forward</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div> -->
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  <div class="container">
  <div id="content_area" class="content-bg">
    <?Php include('include/loginsidebar.php'); 
	$row = mysql_fetch_array($memcontrol)
	?>
	<div class="col-md-9">
    <div id="inner_right" > 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h2 style="color: #C8060E!important"><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $_SESSION['name'];?>
        </strong></h2>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Forward Profile</h3>
        </div>
        <div class="body" align="left">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">

    <tr>

      <td>Please enter the email address to forward the profile<br/>

       <form name="forwardmsg" id="forwardmsg" method="post" action="">
       <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
       <?php
	   if(isset($msg))
	   {
		   ?>
       <tr><td colspan="2" align="center"><b><?php echo $msg; ?></b></td></tr>
        <?Php } ?>   
       <tr><td colspan="2"><input type="hidden" name="allmatriid" id="allmatriid" value="<?php echo $_GET["recsno"]; ?>" /></td></tr>
       <tr class="hline2"><td align="right" width="50%">Email Address </td><td align="left"> : <input type="text" name="forwardemailaddress" id="forwardemailaddress" value="" class="textbox1" /></td></tr>
       <tr><td colspan="2" align="center"><!--<input type="submit" name="submit" id="submit" value="Submit" onclick="return checkforwardfrm();" />-->
	   
	    <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Submit" alt="Submit" onclick="return checkforwardfrm();">
	   </td></tr>
       </table>            
		</form>
        </td>

    </tr>

  </table>
          <div class="hline2"></div>
        </div>
      </div>
      <?php include("include/afterloginmenu_active.php"); ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
        <tr>
          <td class="pg_left"></td>
          <td height="48" align="center" valign="middle" class="pg_center"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="prof_det_toolbar" style="height:48px;">
              <tr>
                <td width="80" class="p_d_block1"><a href="#top" class="btn_goTop">Go Top</a></td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          <td class="pg_right"></td>
        </tr>
      </table>
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
    </div>
  </div>
  </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>