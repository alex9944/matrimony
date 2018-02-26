<?php
session_start();
ob_start(); 
include("config/error.php");
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
		<!-- left ads -->
		
		
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
      <div class="element-box">
        <div class="t">
          <div class="t">
            <div class="t"></div>
          </div>
        </div>
        <div class="m" style="min-height:140px;">
          <?php include("includes/left2daydiscount.php");?>
          <!--<div class="header"><a href="2daydiscountsearch.php" style="text-decoration:none;font-family:"Trebuchet MS"; font-size:12px; color:#000; font-weight:bold;">2DAY DISCOUNTS</a></div>-->
        </div>
        <div class="b">
          <div class="b">
            <div class="b"></div>
          </div>
        </div>
      </div>
    </div>
		<div class="con_rgt">
			<div class="element-box">
				<div class="t">
					<div class="t">
						<div class="t"></div>
					</div>
				</div>
			<div class="m" style="padding-left:10px;padding-right:10px;">
			<div class="in_head">
				<div class="in_head">
					<div class="in_head">
						<div class="head_txt">About Us</font></div>
					</div>
				</div>
			</div>
			
			<div class="frmcont">
			
			<?php 
				$site_temp="SELECT * FROM sitesetting";
				$site_about_value=mysql_fetch_array(mysql_query($site_temp)) or die("Select site setting error ".mysql_error());
				echo $site_about_value['aboutus_content'];
			?>
			</div>
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
