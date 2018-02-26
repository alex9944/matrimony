<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>

<script language="javascript" src="js/simplesearch.js"></script>


<link rel="stylesheet" type="text/css" href="skin/minimalist.css">
<!-- flowplayer depends on jQuery 1.7.1+ (for now) -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<!-- include flowplayer -->
<script type="text/javascript" src="flowplayer.min.js"></script>


<SCRIPT TYPE="text/javascript" LANGUAGE="javascript">



<!-- PreLoad Wait - Script -->

<!-- This script and more from http://www.rainbow.arch.scriptmania.com 



function waitPreloadPage() { //DOM

if (document.getElementById){

document.getElementById('prepage').style.visibility='hidden';

}else{

if (document.layers){ //NS4

document.prepage.visibility = 'hidden';

}

else { //IE4

document.all.prepage.style.visibility = 'hidden';

}

}

}

// End -->

</SCRIPT>
</head>
<body>
<?php include("config.php"); ?>
<? 


$strid=$_GET['id']; 


?>
<div class="profile_block">
  <div class="header">
    <h3 class="float_left title">View Photo Album</h3>
  </div>
  <div class="body" align="left">
    <table width="600" height="350" border="0" cellpadding="0" cellspacing="0" class="Thickorangeborder" style="overflow:scroll;">
      <tr>
        <td valign="top"><br />
           <table border="0" width="100%" cellpadding="3" cellspacing="3"><tr>
					<?Php		
							$imagecount = 1;
							$getimagedetail = "SELECT imagename FROM photoalbum WHERE status='Active' AND matriid ='".$_REQUEST["id"]."'";
		$getimagedetailexec = mysql_query($getimagedetail);
		$getimagedetailcount = mysql_num_rows($getimagedetailexec);
							while($getimagedetailfetch = mysql_fetch_array($getimagedetailexec))
							{
					?>
							<td><a href="photoalbum/<?php echo $getimagedetailfetch["imagename"];?>" rel="lightbox[roadtrip]" target="_blank"><img src="photoalbum/<?php echo $getimagedetailfetch["imagename"];?>" width="150" height="150" /></a></td>
							
					<?php
							if($imagecount%3 == 0)
								echo '</tr><tr><td height="10"></td></tr><tr>';
							$imagecount++;
							}
							if($imagecount%3 == 2)
								echo '<td colspan="2">&nbsp;</td>';
							if($imagecount%3 == 0)
								echo '<td>&nbsp;</td>';	
					?>
							</tr></table>
          <div align="center"><a href="javascript:window.close();" style="color:red;"><b>Close</b></a></div></td>
      </tr>
    </table>
    <!-- BUSINESS PAGE CONTENT ends HERE ############################################ -->
  </div>
</div>
</body>
</html>
