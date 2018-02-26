<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php
$pageid = 62;
$pagesql = "SELECT * FROM pages WHERE pId =".$pageid;
$pageexec = mysql_query($pagesql);
$pagefetch = mysql_fetch_array($pageexec);
?>
<div id="wrapper">


<!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
<!-- HEADER ENDS HERE ###################################################  -->

<!-- CONTENT AREA STARTS HERE ###################################################  -->

 <!-- BREADCRUMBS STARTS HERE #####################################  -->

<!-- BREADCRUMBS ENDS HERE ########################################  -->
<div class="container">
  <div id="content_area" class="content-bg">
  <div class="col-md-9">
 
    
    <div id="inner_right">
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
        
          <h2 class="float_left title">
          <span class="black" style="color:#C8060E;"><?php echo $pagefetch["pName"];?></span></h2>
        </div>
        
		
		
		<div class="body" style="clear:both;">
		
		<div style="width:100%;  float:left; margin-bottom:20px;"><a class="pageNum" style="float:left; font-size:11px; margin:0px;" href="javascript:;" onclick="window.history.go(-1)"><< Go Back</a></div>
		
		<div style="clear:both; margin-top:20px;"><?php echo stripslashes($pagefetch["content"]);?></div>
        </div>
        
        <div class="footer">
        <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a>
        </div>
      </div>
      <?php include("include/fullbanner.php"); ?>
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
