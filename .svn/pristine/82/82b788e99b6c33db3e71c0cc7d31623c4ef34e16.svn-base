<?php // echo md5('Little7'); exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?Php include("include/innerheadersection.php"); ?>
<link href="favicon.ico" rel="shortcut icon">


</head>

<link type="text/css"  rel="stylesheet" href="css/ui-elements-1.css" />

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

        <div id="breadcrumb_text">You are Here:

<span class="pathway">

<?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Latest News</span>

</div>

      </li>

        

        <li class="right"></li>

</ul>

</div>
 -->
<!-- BREADCRUMBS ENDS HERE ########################################  -->



  <div id="content_area">

  

 

   <div class="container">

    <div id="inner_right">

      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->

      <a name="top" id="top"></a>

      <div class="profile_block">

        <div class="header">

        

          <h2 class="float_left title">

          <span class="black" style="color:#C8060E;">Latest News</span></h2>

        </div>

        <div class="body">

              <?php $privacy=mysql_fetch_array(mysql_query("select security_tips from cms_contents where id='1'"));
			  
			  echo $privacy['security_tips'];
			   ?>

            </div>

        

        <div class="footer">

       <!--  <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a>
 -->
        </div>

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

