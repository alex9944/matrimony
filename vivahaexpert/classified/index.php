<?php
session_start();
ob_start(); 
include("config/error.php");

 $cd=date("Y-m-d");

if(isset($_REQUEST['loginbutton']))
{
$login_userid=$_REQUEST['email'];
$login_pass=$_REQUEST['password'];

$login_select=mysql_query("select * from `class_register` where `reg_email`='$login_userid' AND `reg_password`='$login_pass' AND reg_status='0'");

$login_count=mysql_num_rows($login_select);
 

if($login_count > 0)
{

$login_fetch=mysql_fetch_array($login_select);
$user_id=$login_fetch['reg_id'];
$_SESSION['userid']=$user_id;
$_SESSION['username']=$login_fetch['reg_name'];
$_SESSION['emailid']=$login_fetch['reg_email'];
header("location:welcome.php");
}
else
{
header("location:login.php?loginerror=2");
}
}
if(isset($_REQUEST['maction']))
{

$select_user=mysql_query("select * from `class_register` where reg_id='".$_REQUEST['maction']."'");
$login_count=mysql_num_rows($select_user);
//$exe=select_query("select * from `class_register` where reg_id='".$_REQUEST['maction']."'");
//$login_count=countt("select * from `class_register` where reg_id='".$_REQUEST['maction']."'");
if($login_count > 0)
{
$login_fetch=mysql_fetch_array($select_user);
mysql_query("update class_register set reg_status='1' where reg_id='".$_REQUEST['maction']."'");
$user_id=$login_fetch['reg_id'];
$_SESSION['userid']=$user_id;
$_SESSION['username']=$login_fetch['reg_name'];
$_SESSION['emailid']=$login_fetch['reg_email'];
header("location:welcome.php");
}
else
{
header("location:login.php?loginerror=2");
}

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="google-site-verification" content="DfKwZCiat1kpDn9hSa5KYUBx4YDsiiGDll4I-rcUgto" />

<title><?php echo $sitename;?></title>

<META NAME="Description" CONTENT="<?php echo $site_desc;?>">

<META NAME="Keywords" CONTENT="<?php echo $site_keyword;?>">

<META NAME="author" CONTENT="FreeIndiaClassifiedWebsite.com">
<META NAME="subject" CONTENT="Free Classified Website">
<META NAME="Geography" CONTENT="India">
<META NAME="Language" CONTENT="English">
<META HTTP-EQUIV="Expires" CONTENT="never">
<META NAME="Copyright" CONTENT="FreeIndiaClassifiedWebsite">
<META NAME="Publisher" CONTENT="FreeIndiaClassifiedWebsite">
<META NAME="Revisit-After" CONTENT="7 days">
<META NAME="distribution" CONTENT="Global">
<META NAME="Robots" CONTENT="INDEX,FOLLOW">
<META NAME="country" CONTENT="India">

<link type="text/css" rel="stylesheet" href="style/main.css"  />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21872743-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

function fun(){
new_window = window.open('http://www.inetcomplaints.com','_blank');
}
</script>
</head>
<body>
<div id="container">
  <h1 id="header_font"> <strong><?php echo $sitename;?> classifieds</strong> </h1>
  <div class="contend_main">
    <?php include("includes/header.php");?>
    <div class="clr"></div>
    <div class="con_lft">
      <div class="element-box">
        <div class="t">
          <div class="t">
            <div class="t"></div>
          </div>
        </div>
        <div class="m" style="height:500px;">
          <?php include("includes/left.php");?>
        </div>
        <div class="b">
          <div class="b">
            <div class="b"></div>
          </div>
        </div>
      </div>
      <div><br/>
      </div>
      <!--<div class="element-box">
        <div class="t">
          <div class="t">
            <div class="t"></div>
          </div>
        </div>
        <div class="m" style="height:140px;">
          <?php //include("includes/left2daydiscount.php");?>
         
        </div>
        <div class="b">
          <div class="b">
            <div class="b"></div>
          </div>
        </div>
      </div>-->
      <!-- left ads -->
      <?php include("includes/left-ads.php");?>
    </div>
    <div class="con_rgt">
      <div class="element-box">
        <div class="t">
          <div class="t">
            <div class="t"></div>
          </div>
        </div>
        <div class="m" style="padding-left:10px;">
          <?php 
		$catquery = mysql_query("select * from class_category");
		while($catsql=mysql_fetch_array($catquery)) {
		//subcategory
		$subquery=mysql_query("SELECT * FROM (SELECT * FROM class_subcategory where cid='$catsql[c_id]' ORDER BY rand() LIMIT 10) T1 ORDER BY subcategoryname");
		//category count
		$post_query12=mysql_query("select * from class_postclassified where p_category='".$catsql['c_id']."' and  p_status='1'");
		$countSubCat = mysql_num_rows($post_query12);
		$cid=base64_encode($catsql['c_id']);
	 $cname=str_replace(" ","-",$catsql['c_name']." ".$cid);
		?>
          <div class="inner_back1" style="height:300px;">
            <div class="header_bg" style="border:#E3E3E3 solid 1px; border-radius:10px;">
              <div class="h_lft" style="cursor:pointer; font-size:14px;" onclick="location.href='headersearch.php?<?php echo $cname; ?>'"><?php echo ucfirst($catsql['c_name']); ?>  <font>
                <?php if($countSubCat != 0) echo '('.$countSubCat.')'; ?>
              </font> </div>
              <?php if($catsql['c_filetype'] != "") { ?>
              <img width="34" height="26" src="images/category_icon/<?php echo $catsql['c_id'].'.'.$catsql['c_filetype']; ?>" alt="" />
              <?php } else { ?>
              <img width="34" height="26" src="images/business_icon.jpg" alt="" />
              <?php } ?>
            </div>
            <div class="boxlist">
              <?php 
				while($subsql=mysql_fetch_array($subquery)) {
				//subcategory count 
				$countcate = mysql_query("select count(p_subcategory) as totsub from class_postclassified where p_subcategory = ".$subsql['sid']." group by p_subcategory");
				$subcatcount = mysql_fetch_assoc($countcate); 
				$sid=base64_encode($subsql['sid']);
	            $sname=str_replace(" ","-",$subsql['subcategoryname']." ".$sid);                      
				?>
              <a href="categorysearch.php?<?php echo $sname; ?>" title="<?php echo $subsql['subcategoryname']; ?>"><?php echo $subsql['subcategoryname']; ?>
                <?php if($subcatcount['totsub'] != 0) echo '(<span style="color:#CC5600;">'.$subcatcount['totsub'].'</span>)'; ?>
              </a>
              <?php } ?>
            </div>
          </div>
          <?php } ?>
          <div class="clr"></div>
        </div>
        <div class="b">
          <div class="b">
            <div class="b"></div>
          </div>
        </div>
      </div>
      <!-- center ads -->
      <?php include("includes/center-ads.php");?>
    </div>
    <div class="clr"></div>
    <?php include("includes/footer.php");?>
  </div>
</div>
<div class="bottom_line"></div>
</body>
</html>
