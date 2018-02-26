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
//-->
</script>


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
$strid=$_SESSION['username']; 

if(isset($_REQUEST['key']) and $_REQUEST['key'] == 'delete')
 {
    $sql  = mysql_query("update register set Horoscheck = '', HorosApprove = '' where MatriID='$strid'");
	?>
	<script type="text/javascript">
	  window.location = "addhoros.php";
	</script>
	<?php 
 }

$horoschk = mysql_query("SELECT MatriID,Horoscheck FROM register where MatriID='$strid' ");
?>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
<!--   <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Horoscope Upload</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
 -->  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  <div class="container">
  <div id="content_area" class="content-bg">
    <?Php include('include/loginsidebar.php'); 
	$row = mysql_fetch_array($memcontrol)
	?>
  <div class="col-md-9">
    <div id="inner_right"> 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $_SESSION['name'];?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Horoscope Upload</h3>
        </div>
        <div class="body" align="left">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="left">Manage Your Horoscope : Add Horoscope/Change your Horoscope here.<br>
                      <br>
                      Acceptable Formats : <span class="Alert">GIF</span> and <span class="Alert">JPG</span>. </td>
                  </tr>
                  <tr>
                    <td><p class="normaltext">&nbsp;</p></td>
                  </tr>
                  <tr>
                    <td><?php  while($row = mysql_fetch_array($horoschk)){ ?>
                      <table width="550" border="0" cellpadding="2" cellspacing="2" align="center">
                        <tr>
                          <td width="158">&nbsp;</td>
                          <td width="66" valign="top"><div align="center">
                            <?php

				

			if($row['Horoscheck']=="")

			{	

			?>
                            <table width="130" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" align="center" id="PhotouploadTable11" >
                              <?php /*?><tr>
                                <td height="19"><div align="center"><strong> <a target="_blank" href="viewhoroscope.php?id=NM55551"><strong>View Horoscope</strong></a></strong></div></td>
                              </tr><?php */?>
                              <tr>
                                <td><div align="center"> <a href="horosupload.php?HorosChoice=1"> <img src="pics/horosnotavail.gif" name="Mainphoto" width="75" height="75" border="0" id="Mainphoto" /></a>
                                    <div align="center"> <a href="horosupload.php?horoschoice=1"> Add Horoscope </a></div>
                                    <br>
									
									
                                  </div>
								  
								  
								  </td>
                              </tr>
                            </table>
							
							<p style="color:red; text-align:center; font-size:12px; width:450px;"> For better Horoscope view the image size must be less than 600px X 600px</p>
							
                            <?php

} 

else

{

?>
                            <table width="130" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" align="center" id="PHMainPhoto" >
                              <?php /*?><tr>
                                <td height="19"><div align="center"><strong>  <a target="_blank" href="viewhoroscope.php?id=NM55551">My Horoscope</a> </strong> </div></td>
                              </tr><?php */?>
                              <tr>
                                <td><div align="center"> <!--<img src="photoprocess.php?image=horosphotos/<?php  //echo $row['Horoscheck']?>&maxim_size=100;"  hspace="1" vspace="1" border="0" class="submenubox"  >-->
								
								<a href="horosphotos/<?php  echo $row['Horoscheck']?>" class="group1"><img src="horosphotos/<?php  echo $row['Horoscheck']?>"  hspace="1" vspace="1" border="0"  class="submenubox" width="100" height="100"  ></a></div></td>
                              </tr>
							    <tr>
                                <td><div align="center"> <a onclick="MM_openBrWindow('protect_horo.php','ppm','width=590,height=420')" href="#">Protect My Horoscope </a></div></td>
								
								
                              </tr>
                              <tr>
                                <td><div align="center"> <a href="horosupload.php?horoschoice=1">Modify Horoscope </a></div> <br /> <div align="center"> <a href="addhoros.php?key=delete"> Delete Horoscope </a></div>
                                    <br> </td>
                              </tr>
                            </table>
                            <?php } ?></div></td>
                          <td width="190">&nbsp;</td>
                        </tr>
                      </table>
                      <?php } mysql_close($con); ?></td>
                  </tr>
				  
				  <tr>
				  <td>
				  
				  </td>
				  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="20"></td>
                  </tr>
                </table></td>
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
  <script type="text/JavaScript">

<!--

function MM_openBrWindow(theURL,winName,features) { //v2.0

  window.open(theURL,winName,features);

}
</script>
</div>
</body>
</html>