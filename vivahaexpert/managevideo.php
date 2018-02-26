<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>

<link rel="stylesheet" type="text/css" href="skin/minimalist.css">
<!-- flowplayer depends on jQuery 1.7.1+ (for now) -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<!-- include flowplayer -->
<script type="text/javascript" src="flowplayer.min.js"></script>

<script type="text/JavaScript">

<!--

function MM_openBrWindow(theURL,winName,features) { //v2.0

  window.open(theURL,winName,features);

}
</script>

</head>

<body>
<?php include("config.php"); 


/*if(($_SESSION['status'] == 'Active') || ($_SESSION['status'] == 'InActive')) { 
echo '<script>
		window.location.href ="verfication.php";
	  </script>';	
}*/


if(isset($_REQUEST['key']) and $_REQUEST['key'] =='release')
		 {
		   $update1 = mysql_query("update register set video_album_protect='',video_album_password ='' WHERE MatriID='".$_SESSION['matriid']."' OR ConfirmEmail = '".$_SESSION['username']."'"); ?>
		   <script>location='managevideo.php'; </script> 
		   <?php 
		 }

if((!$_REQUEST['chkdelete']) && ($_REQUEST["verify"] != ""))
{
	$msg = "You must Check atleast One Video.";
}
	foreach($_REQUEST["chkdelete"] AS $val)
	{
		mysql_query("DELETE FROM managevideo WHERE vid =".$val);
		$msg = "Video successfully deleted.";
	}


?>

<div id="wrapper">


<!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
<!-- HEADER ENDS HERE ###################################################  -->

<!-- CONTENT AREA STARTS HERE ###################################################  -->

 <!-- BREADCRUMBS STARTS HERE #####################################  -->
<!-- <div id="breadcrumb"> 
<ul class="breadcrumbs">
		<li class="left"></li>
        
      <li class="center">
        <div id="breadcrumb_text">You are Here:
<span class="pathway">
<?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Manage Video</span>
</div>
      </li>
        
        <li class="right"></li>
</ul>
</div> -->
<!-- BREADCRUMBS ENDS HERE ########################################  -->
<div class="container">
  <div id="content_area" class="content-bg">
  
 
    <?Php  include('include/loginsidebar.php');
	?>
	<div class="col-md-9">
    <div id="inner_right">

      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong><?php  echo $_SESSION['name'];?></strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left"><strong>Manage Video</strong></h3>
        </div>
        <div class="body">
        <form name="photoalbum" id="photoalbum" method="post">
          <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tbl_profiledetails">
          <?php if($msg != "") { ?>
          <tr>
          <td><div align="center"><strong><?php echo $msg; ?></strong></div></td>
          </tr>
          <?php } ?>
          <tr><td align="right">
		  
		  &nbsp;&nbsp;
		  <?php
		    $memberid = $_SESSION['matriid'];
		    $mem_det_sql = mysql_query("SELECT MatriID,Name,video_album_protect, video_album_password FROM register Where ID = '$memberid' or matriid = '$memberid'");
		    $mem_det_fetch = mysql_fetch_array($mem_det_sql);
			if($mem_det_fetch["video_album_protect"] == '')
			{ ?>
			<a onclick="MM_openBrWindow('video_protect_password.php?id=<?php echo $_SESSION['matriid']; ?>','ppm','width=590,height=420')" href="javascript:;">Protect Password</a> <?php
			} else { ?><a onclick="" href="managevideo.php?key=release">Release Protect Password</a><?php 
			} ?>
			
		  
		  <a href="#" onclick="PopupCenter('adduploadvideo.php', 'Add Video',450,350);">&nbsp;&nbsp;&nbsp;&nbsp;Browse from My Computer</a> &nbsp;&nbsp; <a href="#" onclick="PopupCenter('addmanagevideo.php', 'Add Video',450,350);">Add Youtube Video</a></td></tr>
          <tr><td>
          <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tr>
          <?Php 
		  	$videosql = "SELECT * FROM managevideo WHERE matriid ='".$_SESSION['matriid']."'";
			$videoexec = mysql_query($videosql);
			$countvideo = mysql_num_rows($videoexec);
			$videoinc = 1; 
			if($countvideo != 0)
			{
				while($videofetch = mysql_fetch_array($videoexec))
				{
				
				$video_name = explode("v=",$videofetch['videoname']);
			//echo $videofetch['videoname']; echo "<br>";
		  ?>
 <td width="25" align="center" valign="top"><input name="chkdelete[]" type="checkbox" id="chkdelete[]" value="<?php echo $videofetch['vid']?>"></td>
<td width="300">

<?php 
if($videofetch['type'] == 'local')
{ ?>
   <!-- the player -->
   
   <div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167" style="width:305px; height:215px;">
      <video>
         <source type="video/mp4" src="<?php echo $videofetch['videoname']; ?>">
      </video>
   </div>
  <?php 
}
else
{ ?>
   <iframe width="305" height="215" src="http://www.youtube.com/embed/<?=$videofetch['videoname'];?>" frameborder="0" allowfullscreen></iframe> <?php
} ?>   

<?php /*?><iframe width="305" height="215" src="http://www.youtube.com/embed/<?=$video_name[1];?>" frameborder="0" allowfullscreen></iframe><?php */?>


<br /><?php if($videofetch["status"] == "InActive") { ?> <p style="text-align:center; padding:5px;">Waiting for admin approval</p><?php } else { echo '<p style="text-align:center; padding:5px;">'.$videofetch["status"].'</p>'; } ?>
<p style="text-align:center;">

</p>
</td>
          <?php
		  		if($videoinc%2 == 0)
					echo '</tr><tr><td colspan="4" height="15"></td></tr><tr>';
		  		$videoinc++;
				}
		  		if($videoinc%2 == 0)
					echo '<td colspan="2"></td>';
		   ?>
          </tr>           
           <?Php 	
			}
			else
			{
		  ?>
          <tr><td colspan="3"><div align="center">Video not available.</div></td></tr>
          <?Php
			}
		  ?>	
          </table></td></tr>
          <?Php if($countvideo != 0) { ?>
			<!--<tr>
			  <td align="left"><a href="#" onclick="MM_openBrWindow('protect_video.php','ppm','width=590,height=420')">Protect My Video </a></td>
			  </tr>-->
			  
			<tr><td><div align="right"><!--<input type="submit" name="delete" id="delete" value="Delete" />-->
			
			<input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Delete" type="image" value="Delete" alt="Delete" onclick="">
			
			</div></td></tr>
		  <?php } ?>
          <input type="hidden" name="verify" id="verify" value="true" />	
          </table>
          </form>
        </div>

      </div>
        			   <?php 
					   
					   include("myint_inc.php");?>

			  <?php include("mymessage_inc.php");?>
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
<script>
function PopupCenter(pageURL, title,w,h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}


</script>

<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>