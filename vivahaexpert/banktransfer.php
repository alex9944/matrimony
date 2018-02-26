<?php include("dbconnect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Matrimonial - Registration Form</title>
<link href="css/template.css" rel="stylesheet" type="text/css" media="all" />
<!-- JS FOR SuperFish DropDown Menu ############################# -->
<link href="css/dropDownMenu/superfish.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="scripts/jquery1.6.2_production.js"></script>
<script type="text/javascript" src="scripts/superfish.js"></script>

<script language="javascript"> 
/*SCRIPT INITIALIZATION FOR DROPDOWN MENU###################### */ 
    $(document).ready(function(){ 
        $("ul.sf-menu").superfish(); 
    });
	
</script>

<link href="css/regis_mem_home.css" rel="stylesheet" type="text/css" />
<link href="css/payment.css" rel="stylesheet" type="text/css" />
<style>
td.td_bg1
{
	background-color:#C6CBD2;
	
}
td.td_bg2
{
	background-color:#FFDFAE;
}
td.td_bg3
{
	background-color:#C7D5B3;
}

td.td_bg4
{
background-color:#F8CBDB
}
</style>
</head>

<body>

<div id="wrapper">


<!-- HEADER STARTS HERE ###################################################  -->
  <div id="header">
    
   <?Php include("include/menu.php"); ?>
</div>
<!-- HEADER ENDS HERE ###################################################  -->

<!-- CONTENT AREA STARTS HERE ###################################################  -->

 <!-- BREADCRUMBS STARTS HERE #####################################  -->
<div id="breadcrumb"> 
<ul class="breadcrumbs">
		<li class="left"></li>
        
      <li class="center">
        <div id="breadcrumb_text">You are Here:
<span class="pathway">
<a href="#">My Home</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">

Upgrade</span>

</div>
      </li>
        
        <li class="right"></li>
</ul>
</div>
<!-- BREADCRUMBS ENDS HERE ########################################  -->

  <div id="content_area">
  
 
   <?php include("include/membershipsidebar.php") ?>
    <div id="inner_right">
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
        
          <h2 class="float_left title">
          Bank Transfer</h2>
           <strong  class="float_right"><a href="#" class="link">Call #### #### #### for payment assistance</a></strong>
        </div>
        <div class="body" style="font-size:12px;">
         <h3><strong>Outside India</strong></h3>
         <ul class="ddlist list-arrow2" style="margin-left:30px; margin-top:10px;"><li>Transfer your payment through on-line or transfer through any bank directly to any one of the account details listed below.</li></ul>
       
         <br />
<h3><strong>Within India</strong></h3>
       <ul class="ddlist list-arrow2" style="margin-left:30px; margin-top:10px;">
            <li>Visit any of the bank branches listed below to make your payment directly into the account, or, NEFT (National Electronic Funds Transfer) system is a nationwide funds transfer system to facilitate transfer of funds from one bank to any other bank branch in the country.</li>
         
       </ul>
        <p class="para_margin">Please write your username on the bank reference and send  us the email confirmation of the payment from the same email ID used at the  time of registration to <a href="mailto:<?=$siteadmin; ?></a>"><?=$siteadmin; ?></a>. As soon as we receive your money (it can take only a few  moments usually otherwise maximum a business day), we will add it to your  account on the site and upgrade your membership.</p>
        
        <p class="para_margin">Best wishes and good luck in finding your life partner. We are always happy to help you so please don't hesitate to contact us if you happen to have any questions.</p>
        
        <table width="100%" cellspacing="5" cellpadding="5" class="tbl_bankdetails">
        <tr>
            <!--<td class="td_bg1" ><strong>Bank: State Bank of India</strong><br />
								Branch: Chennai <br />
				                Account No.: 65846224522121 <br />
								Account Name: Matrimonial script <br />
								IFSC: SBIN000600252
            </td>-->
            <td class="td_bg2"><?php echo $bankdetail; ?>
			</td>
        </tr>    
       
        </table>
        <div style="width:300px; margin-right:auto; margin-left:auto;">
        <a href="contactus.php" class="button-small square-orange uppercase"><span></span> Notify us of your payment here </a>
        </div>
        <br />
         <strong  class="float_right"><a href="mymatri.php" class="link">I will subscribe later, Go back to Home Page</a></strong>
       
<br />
        </div>
        
        
        
        
      </div>
      <br />
      <div class="banner_h_std"><img src="images/H_STD_BANNER.gif" width="468" height="80" /></div>
      
      
      
      
      
      
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
