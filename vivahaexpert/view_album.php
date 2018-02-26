<?php include("memprotect.php"); ?>
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


</head>

<body>
<?php include("config.php"); 
if(($_SESSION['status'] == 'Active') || ($_SESSION['status'] == 'InActive')) { 
/*echo '<script>
		window.location.href ="verfication.php?key=photo";
	  </script>';*/	
}

		$getimagedetail = "SELECT imagename FROM photoalbum WHERE status='Active' AND matriid ='".$_SESSION['matriid']."'";
		$getimagedetailexec = mysql_query($getimagedetail);
		$getimagedetailcount = mysql_num_rows($getimagedetailexec);

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
                <td><a href="photoalbum/<?php echo $getimagedetailfetch["imagename"];?>" class="group1"><img src="photoalbum/<?php echo $getimagedetailfetch["imagename"];?>" width="150" height="150" /></a></td>
                
        <?php
				if($imagecount%4 == 0)
					echo '</tr><tr><td height="10"></td></tr><tr>';
				$imagecount++;
				}
				if($imagecount%4 == 2)
					echo '<td colspan="2">&nbsp;</td>';
				if($imagecount%4 == 0)
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
		?>	
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