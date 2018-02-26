<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>

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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png"> About us</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div> -->
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  <div class="container">
  <div id="content_area" class="content-bg">
   
    <div id="inner_right" class="col-md-9"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
          <h2 class="float_left title"> <span class="black" style="color:#333;">About us - <strong><?php echo $sitename; ?> </strong></span></h2>
        </div>
        <div class="body">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
          
            <tr>
              <td><table width="100%" border="0" align="center" cellpadding="3" cellspacing="3">
                  <tr>
                    <td><div>
						<?php $abts=mysql_fetch_array(mysql_query("select about_us from cms_contents where id='1'"));
						
						echo $abts['about_us'];
						 ?>
						
					</div></td>
                  </tr>
                </table>
                
                
                <!--<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td width="50%"><p><strong>Address: </strong><?php echo $sitename; ?>&nbsp;</p>
           <p> <?php echo $address; ?></p></td>
              <td width="50%"><p align="right">
                      
                    
                    <strong>Follow  us on <a href="http://www.facebook.com"> <img src="facebook_large.png"></a>  &nbsp; <a href="http://www.twitter.com"><img src="twitter-large.png" width="100px" height="30px"></a>  </strong> </p></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                 
                  <tr>
                  <td colspan="3">
                                 </td>
                  </tr>
              </table>--></td>
            </tr>
          </table>
        </div>
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
      </div>
      <div class="banner_h_std"><img src="images/H_STD_BANNER.gif" width="468" height="80" /></div>
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
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
