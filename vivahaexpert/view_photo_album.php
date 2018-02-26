<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>

<link rel="stylesheet" href="colorbox/colorbox.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="colorbox/jquery.colorbox.js"></script>
<script>
	$(document).ready(function(){
		//Examples of how to assign the Colorbox event to elements
		$(".group1").colorbox({rel:'group1'});
		$(".group2").colorbox({rel:'group2', transition:"fade"});
		$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
		$(".group4").colorbox({rel:'group4', slideshow:true});
		$(".ajax").colorbox();
		$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
		$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
		$(".inline").colorbox({inline:true, width:"50%"});
		$(".callbacks").colorbox({
			onOpen:function(){ alert('onOpen: colorbox is about to open'); },
			onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
			onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
			onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
			onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
		});

		$('.non-retina').colorbox({rel:'group5', transition:'none'})
		$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
		
		//Example of preserving a JavaScript event for inline calls.
		$("#click").click(function(){ 
			$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
		});
	});
</script>


<script language="javascript" src="js/simplesearch.js"></script>

<script type="text/JavaScript">

<!--

function MM_openBrWindow(theURL,winName,features) { //v2.0

  window.open(theURL,winName,features);

}
</script>

</head>

<body>
<div id="wrapper"> 
<?php
        $member = "SELECT * FROM register WHERE  matriid ='".$_REQUEST["id"]."' "; 
	    $member_result = mysql_query($member);
	    $result = mysql_num_rows($member_result);
     
	  
	  if($result == '0') {  
	  //header("location:verfication.php");
	  ?>
	  <!--<script> window.location='verfication.php';</script>-->
	  <?
	   //die;
	  }

		$getimagedetail = "SELECT imagename FROM photoalbum WHERE status='Active' AND matriid ='".$_REQUEST["id"]."'";
		$getimagedetailexec = mysql_query($getimagedetail);
		$getimagedetailcount = mysql_num_rows($getimagedetailexec);

?>
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage;?> <img alt="" src="images/icons/arrow_breadcrumbs.png">View Photo Album</span> </div>
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
          <h2 class="float_left title"> <span class="black" style="color:#333;">View Photo Album</span></h2>
        </div>
        <div class="body" style="min-height:70px;">
               
			   <?php 
		   //while()
		   $fetch = mysql_fetch_array($member_result);
			if(isset($fetch['album_protect']) and $fetch['album_protect'] == '')
			{ ?>
			      <?Php
						if($getimagedetailcount != 0)
						{
					?>
							<table border="0" width="100%" cellpadding="3" cellspacing="3"><tr>
					<?Php		
							$imagecount = 1;
							while($getimagedetailfetch = mysql_fetch_array($getimagedetailexec))
							{
					?>
							<td><a href="photoalbum/<?php echo $getimagedetailfetch["imagename"];?>" class="group1" target="_blank"><img src="photoalbum/<?php echo $getimagedetailfetch["imagename"];?>" width="150" height="150" /></a></td>
							
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
							
					<?php		
						}
						else
						{
					?>
					<center><strong>There is no photo in album.</strong></center>
					
					<?php
						}
			}
			else
			 {
			    echo 'Photo Album has been protected with Password <br><br>'; ?>
				<a href="#" onClick="MM_openBrWindow('albumpasswordrequest.php?MatriID=<? echo $fetch['MatriID']; ?>','ppr','width=650,height=500')" style="color:red;"><b>Request Password</b></a> &nbsp;&nbsp;
				<a href="#" onClick="MM_openBrWindow('viewprotectalbumform.php?MatriID=<? echo $fetch['MatriID']; ?>','ppr','width=650,height=500')" style="color:green;"><b>View Photo Album</b> </a>
				<?php 
			 }			
		?>	
		
		 
        <br /> <br />
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