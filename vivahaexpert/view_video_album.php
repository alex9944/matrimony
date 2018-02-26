<? session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); 
   $id  = $_REQUEST['id'];
   $member = "SELECT * FROM register WHERE  matriid ='".$id."'"; 
	    $member_result = mysql_query($member);
	    $result = mysql_num_rows($member_result);
     
	  //exit;
	  if($result == '0') {  
	  //header("location:verfication.php");
		  ?>
		 <!-- <script> window.location='verfication.php';</script>-->
		  <?
		  // die;
	  }


?>
<script language="javascript" src="js/simplesearch.js"></script>


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
//-->
</script>

</head>

<body>
<div id="wrapper"> 

  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage;?> <img alt="" src="images/icons/arrow_breadcrumbs.png">View Video</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?php include("include/searchleftside.php"); ?>
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
          <h2 class="float_left title"> <span class="black" style="color:#333;">View Video</span></h2>
        </div>
        <div class="body">
		
		<?php 
		   //while()
		   $fetch = mysql_fetch_array($member_result);
			if(isset($fetch['video_album_protect']) and $fetch['video_album_protect'] == '')
			{ ?>
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
			
			  
			 <?php /*?> <iframe width="305" height="215" src="http://www.youtube.com/embed/<?=$videofetch['videoname'];?>" frameborder="0" allowfullscreen></iframe><?php */?>
			 
			  <?php /*?><iframe width="305" height="215" src="http://www.youtube.com/embed/<?=$video_name[1]?>" frameborder="0" allowfullscreen></iframe><?php */?>
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
          <tr><td colspan="3"><div align="center">Video not available.</div></td></tr>
          <?Php
			}
		  ?>	
          </table>
			  <?php 
			    
			}
			else
			 {
			    echo 'Video Album has been protected with Password <br><br>'; ?>
				<a href="#" onClick="MM_openBrWindow('videopasswordrequest.php?MatriID=<? echo $fetch['MatriID']; ?>','ppr','width=650,height=500')" style="color:red;"><b>Request Password</b></a> &nbsp;&nbsp;
				<a href="#" onClick="MM_openBrWindow('viewprotectvideoform.php?MatriID=<? echo $fetch['MatriID']; ?>','ppr','width=650,height=500')" style="color:green;"><b>View Video Album</b> </a>
				<?php 
			 }
			?>
		

        </div>
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
      </div>
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
    </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>