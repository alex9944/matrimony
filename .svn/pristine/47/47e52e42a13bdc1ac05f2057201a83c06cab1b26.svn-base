<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>

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
	   $update1 = mysql_query("update register set album_protect = '',album_password = '' WHERE MatriID='".$_SESSION['matriid']."' OR ConfirmEmail = '".$_SESSION['username']."'"); ?>
	   <script>location='managephotoalbum.php'; </script> 
	   <?php 
	 }


if((!$_REQUEST['chkdelete']) && ($_REQUEST['verify'] != ""))
{
	$msg = "You must Check atleast One Photo.";
}
	foreach($_REQUEST["chkdelete"] AS $val)
	{
		$getdeleteimagename = "SELECT imagename FROM photoalbum WHERE pid =".$val;
		$getdeleteimagenameexec = mysql_query($getdeleteimagename);
		$getdeleteimagenamefetch = mysql_fetch_array($getdeleteimagenameexec);
		@unlink("photoalbum/".$getdeleteimagenamefetch["imagename"]);
		mysql_query("DELETE FROM photoalbum WHERE pid =".$val);
		$msg = "Image successfully deleted from photo album.";
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
<?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Manage Photo Album</span>
</div>
      </li>
        
        <li class="right"></li>
</ul>
</div> -->
<!-- BREADCRUMBS ENDS HERE ########################################  -->
<div class="container">
  <div id="content_area" class="content-bg">
  
 
    <?Php include('include/loginsidebar.php'); 
	?>
  <div class="col-md-9">
    <div id="inner_right">

      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong><?php  echo $_SESSION['name'];?></strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left"><strong>Manage Photo Album</strong></h3>
        </div>
        <div class="body">
        <form name="photoalbum" id="photoalbum" method="post">
          <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tbl_profiledetails">
          <?php if($msg != "") { ?>
          <tr>
          <td><div align="center"><strong><?php echo $msg; ?></strong></div></td>
          </tr>
          <?php } 
		  
		  $imagesql  = "SELECT * FROM photoalbum WHERE matriid ='".$_SESSION['matriid']."'";
		  $imageexec = mysql_query($imagesql);
		  $album_count  = mysql_affected_rows();
		  
		  ?>
          <tr><td align="right"> 
		  
		  <?php
		    $memberid = $_SESSION['matriid'];
		    $mem_det_sql = mysql_query("SELECT MatriID,Name,album_protect, album_password FROM register Where ID = '$memberid' or matriid = '$memberid'");
		    $mem_det_fetch = mysql_fetch_array($mem_det_sql);
			if($mem_det_fetch["album_protect"] == '')
			{ ?>
			<a onclick="MM_openBrWindow('album_protect_password.php?id=<?php echo $_SESSION['matriid']; ?>','ppm','width=590,height=420')" href="javascript:;">Protect Password</a> <?php
			} else { ?><a onclick="" href="managephotoalbum.php?key=release">Release Protect Password</a><?php 
			} ?> | <a href="view_album.php">View Album</a> 
		  
		  <?php
		  if($album_count <= 12)
		  { ?>
		  | <a href="#" onclick="PopupCenter('addmanagephoto.php', 'Add Photo',450,350);">Add Photo</a> <?php 
		  } ?> </td></tr>
          <tr><td>
          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border:1px solid #F9D6A5;">
          <tr class="header">
          <td width="1%">&nbsp;</td>
          <td width="39%" valign="middle"> <div align="left"><strong>Image</strong></div></td><td valign="middle" width="50%"><div align="left"><strong>Status</strong></div></td>
          <td width="10%">Delete</td></tr>
          <?Php 
		  	$imagesql = "SELECT * FROM photoalbum WHERE matriid ='".$_SESSION['matriid']."'";
			$imageexec = mysql_query($imagesql);
			$countimage = mysql_num_rows($imageexec);
			if($countimage != 0)
			{
				while($imagefetch = mysql_fetch_array($imageexec))
				{
		  ?>
          <tr>
	        <td>&nbsp;</td>
            <td><img src="photoalbum/<?Php echo $imagefetch["imagename"];?>" border="0" width="50" height="50" /></td>
          	<td><?php if($imagefetch["status"] == "InActive") { ?> Waiting for admin approval<?php } else { echo $imagefetch["status"]; } ?> </td>
            <td><input name="chkdelete[]" type="checkbox" id="chkdelete[]" value="<?php echo $imagefetch['pid']?>"></td>
          </tr>
          <?php
				}
			}
			else
			{
		  ?>
          <tr><td colspan="3"><div align="center">Photos not available for album.</div></td></tr>
          <?Php
			}
		  ?>	
          </table></td></tr>
          <?Php if($countimage != 0) { ?>
			<tr><td><div align="right"><input type="submit" name="delete" id="delete" value="Delete" /></div></td></tr>
		  <?php } ?>	
          <input type="hidden" name="verify" id="verify" value="true" />
          </table>
          </form>
        </div>

      </div>
        			   <?php include("myint_inc.php");?>

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