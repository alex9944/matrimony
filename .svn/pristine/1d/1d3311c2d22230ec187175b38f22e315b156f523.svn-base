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
    <h3 class="float_left title">View Phone</h3>
  </div>
  <div class="body" align="left">
    <table width="600" height="350" border="0" cellpadding="0" cellspacing="0" class="Thickorangeborder" style="overflow:scroll">
      <tr>
        <td valign="top"><br />
          <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <?Php 
		  	$videosql = "SELECT * FROM managevideo WHERE matriid ='".$_REQUEST['id']."' and status = 'Active'";
			$videoexec = mysql_query($videosql);
			$countvideo = mysql_num_rows($videoexec);
			$videoinc = 1;
			if($countvideo != 0)
			{
				while($videofetch = mysql_fetch_array($videoexec))
				{
				
				$video_name = explode("v=",$videofetch['videoname']);
		  ?>
              <td width="300" style="padding-right:20px;"><?php 
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
                <iframe width="305" height="215" src="http://www.youtube.com/embed/<?=$videofetch['videoname'];?>" frameborder="0" allowfullscreen></iframe>
                <?php
			} ?>
              </td>
              <?php
		  		if($videoinc%2 == 0)
					echo '</tr><tr><td colspan="2" height="15"></td></tr><tr>';
		  		$videoinc++;
				}
		  		if($videoinc%2 == 0)
					echo '<td></td>';
		   ?>
            </tr>
            <?Php 	
			}
			else
			{
		  ?>
            <tr>
              <td colspan="3"><div align="center">Video not available.</div></td>
            </tr>
            <?Php
			}
		  ?>
          </table>
          <div align="center"><a href="javascript:window.close();" style="color:red;"><b>Close</b></a></div></td>
      </tr>
    </table>
    <!-- BUSINESS PAGE CONTENT ends HERE ############################################ -->
  </div>
</div>
</body>
</html>
