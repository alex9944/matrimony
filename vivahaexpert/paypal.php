<?php  session_start();
include("dbconnect.php");
include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?Php 
include("include/innerheadersection.php"); 
//print_r($_REQUEST);

$matriid = $_SESSION['matriid'];

?>
<link href="css/payment.css" rel="stylesheet" type="text/css" />

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
        <div id="breadcrumb_text">You are Here:
<span class="pathway"><?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">
Upgrade</span>

</div>
      </li>
        
        <li class="right"></li>
</ul>
</div> -->
<!-- BREADCRUMBS ENDS HERE ########################################  -->
<div class="container"> 
  <div id="content_area" class="content-bg">
  
 
    <?php include("include/membershipsidebar.php"); ?>
    <div class="col-md-9">
    <div id="inner_right">
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
        
          <h2 class="float_left title">
          Payment Method</h2>
          
          <strong  class="float_right"><a href="#" class="link">Call #### #### #### for payment assistance</a></strong>
        </div>
        <div class="body" style="font-size:12px;">
        
     	<p> Become a Premium Member to have all the benefits of contacting other members on a personalized level </p>
        
       <ul class="ddlist list-tick" style="margin-left:30px; margin-top:10px;">
            <li>When you purchase a membership from <?php echo $sitename; ?> – You agree to our <a href="#">Subscription terms.</a></li>
            <li>I understand there is a strict 'NO REFUND' policy and that I am purchasing this service 'AS IS'.</li>
            <li>I will not SPAM, use vulgarity, or disrespect other members.</li>
       </ul>
       
       <br />
       <h2><strong>Step 2 - Select Payment Method</strong></h2>
        <hr />
       
         <table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td width="33%" align="center" valign="top">
 <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="payPalForm">
   <!--<form action="" method="post" >-->
     <table width="100%"  class="ss_webhosting">
    
    <tr> <th class="prices_plans1"><p>Pay by PAYPAL</p></th></tr>
   <tr class="alt">
         <td height="450" bgcolor="#D8DBE0" class="plans1">
           <table width="100%" border="0" cellspacing="5" cellpadding="5" style="border:0px;">
             <tr>
               <td><img src="images/paypal.gif" width="130" height="37" style="margin-top:10px;" /></td>
             </tr>
             <tr>
               <td><p><br />
                 Pay without sharing your info with merchants and sellers. <br />
                 This secure payment method can use only Indians living outside India. <br />
                <a href="#" style="color:#A50050;"> Have  a PayPal account?, Log in to your account to pay.</a> <br />
               </p></td>
             </tr>
             <tr>
               <td><p style="display:block; width:150px; padding:5px; margin:5px auto; border:solid 2px #909BA9;  font-size:12px; font-weight:bold;"> Don't have a PayPal account?<br />
                 <a href="#" style="color:#093; font-size:12px;"> Pay with your debit or credit card as a PayPal Guest.<br />
                   </a>
                 <label>
                   PayPal</label>  
				   
				   <?
				   
				 //  var_dump($_POST['memberPlan']);
				   
				 /*if($_POST['memberPlan'] =='1800.00') {
				     $plan = 'SILVER';
				   } 
	else if($_POST['memberPlan'] =='3450.00') {
				    $plan = 'GOLD';
				   }
				   else if($_POST['memberPlan'] =='5880.00') {
				    $plan = 'DIAMOND';
				   }
				   
				   if($_POST['astro'] =='1050.00'){
				   $astro = '1';
				   }elseif($_POST['astro'] =='800.00'){
				   $astro = '2';
				   }elseif($_POST['astro'] =='550.00'){
				   $astro = '3';
				   }
				   
				   if($_POST['spot_light'] ==1 )
				   {
				    
				   }*/
				   
				   $regme=(mysql_fetch_array(mysql_query("SELECT * from register where MatriID=$matriid ")));
				   $regmname=$regme['Name'];
				   $regmmail=$regme['ConfirmEmail'];
				   $regmaddr=$regme['Address'];
				   
				    $mempid=$_REQUEST['memberPlan'];
				   $mepl=(mysql_fetch_array(mysql_query("SELECT * from membershipplan where planid=$mempid ")));
				   
				   $total=$mepl['planamount'];
				   
				   
				   //echo $_REQUEST['total']; exit;
				   if($total!="") 
				   {	
	 				$dollar_amount = $total / 60;
				   }
				   
				   
				   $sucesspage=$site_url."paypal_success.php";
				   $failpage=$site_url."paypal_notify.php";
				   ?>             
                  
                   
					<input type="hidden" name="item_number" value="Membership plan- <?php echo $mepl['plandisplayname']; ?>">
					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="no_note" value="1">  
					<input type="hidden" name="business" value="<?php echo $paypalid; ?>">
					<input type="hidden" name="currency_code" value="USD">
					<input type="hidden" name="return" value="<?php echo $sucesspage; ?> ">
					<input name="item_name" type="hidden" id="item_name"  size="45" value="Membership plan - <?php echo $mepl['plandisplayname']; ?>">
					
					<input name="notify_url" type="hidden" id="notify_url"  size="45" value="<?php echo $failpage; ?>">
					<input type="hidden" name="custom"  value="<? echo $matriid.'#'.$mepl['plandisplayname'].'#'.$mepl['planduration'].'#'.$mepl['plannoofcontacts'].'#'.$mepl['sms_count'].'#'.$mepl['planamount']?>"  />
                 
                 <input name="amount" type="hidden" id="amount" size="45" value="<?php echo number_format($dollar_amount, 2, '.', ''); ?>">
					<br /><br />
				
			   
			   </p></td>
             </tr>
             <tr>
               <td><div style="width:100px; margin-right:auto; margin-left:auto;"> 
			   
			   <input type="image"  alt="Proceed" value="Proceed" name="Submit" style="float:none; clear:both; border:0px;" class="button-small square-orange uppercase float_right">
			   </div></td>
             </tr>
           </table>
           </td>
        </tr>
   
    </table>
    </form>
    
    </td>
    <td width="33%" align="center" valign="top">
     <table width="100%"  class="ss_webhosting">
    
    <tr> <th class="prices_plans2"><p> Bank & Online Transfer</p></th></tr>
        <tr class="alt">
         <td height="450" class="plans2">
          
          
          <table width="100%" border="0" cellspacing="5" cellpadding="5" style="border:0px;">
            <tr>
              <td><img src="images/bank.png" width="90" height="90" /></td>
            </tr>
            <tr>
              <td><p>NEFT is a nationwide funds transfer system to facilitate transfer of funds from one bank to any other bank branch in the country.<br />
              </p></td>
            </tr>
            <tr>
              <td><p style="display:block; width:150px; padding:5px; margin:5px auto; border:solid 2px #e88c00;  font-size:12px; font-weight:bold;"> This method can use for both members living outside and within India.<br />
                <a href="#" style="color:#093; font-size:12px;"> Click here for further information <br />
                  </a>
                <label>
                  <input type="radio" style="outline:none; border:none;" name="memberPlan" value="silver" id="RadioGroup1_2" />
                  Bank &amp; Online Transfer</label>
              </p></td>
            </tr>
            <tr>
              <td><div style="width:100px; margin-right:auto; margin-left:auto;"> <a href="banktransfer.php" class="button-small square-orange uppercase"><span></span> Proceed </a> </div></td>
            </tr>
          </table>
          </td>
        </tr>
   
    </table>
    
    </td>
    <td align="center" valign="top">
         <table width="100%"  class="ss_webhosting">
   <tr> <th class="prices_plans4"><p> By Cheque or Postal</p></th></tr>
   <tr class="alt">
         <td height="450" class="plans4">
           
           <table width="100%" border="0" cellspacing="5" cellpadding="5" style="border:0px;">
             <tr>
               <td><img src="images/Bankcheck.png" width="120" height="74" style="margin-top:0px;" /></td>
             </tr>
             <tr>
               <td><p>We also accept payment by cheque or postal order, although we cannot upgrade your account until the cheque has cleared. Your account will be upgraded, once it has been received.<br />
               </p></td>
             </tr>
             <tr>
               <td><p class="para_border" style="display:block; width:150px; padding:5px; margin:5px auto; color:#A50050; font-size:12px; font-weight:bold;"> This method is only for members living in India. <br />
                 <br />
                 <a href="#" style="color:#093; font-size:12px;"> Click here for further information <br />
                   </a>
                 <label>
                   <input type="radio" style="outline:none; border:none;" name="memberPlan" value="silver" id="RadioGroup1_0" />
                   By Cheque Or Postal</label>
               </p></td>
             </tr>
             <tr>
               <td><div style="width:100px; margin-right:auto; margin-left:auto;"> <a href="pdf/Payment_of_Cheque.pdf" target="_blank" class="button-small square-orange uppercase"><span></span> Proceed </a> </div></td>
             </tr>
           </table></td>
        </tr>
    </table>
    
    </td>
  </tr>
</table>
        
        
        
        <br />
         <strong  class="float_right"><a href="#" class="link">I will subscribe later, Go back to Home Page</a></strong>
       
<br />
        </div>
      </div>
      <br />
      
      
      
      <div class="banner_h_std"><img src="images/H_STD_BANNER.gif" width="468" height="80" /></div>
      
      
      
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
