  
  <div class="footer"> 
<?php
 if(trim($searchresultfetch['Phone']) !='') {
  $css = 'icon btn_services';
  $title = 'Phone Number: Available: View Now';
  $divtitle = '<font class="redcolottooltip">Phone Number: Available: View Now</font>';
 } else {
  $css = 'icon btn_services_disable';
  $title = 'Not Available';
  $divtitle = '';
 }
 
 if(!isset($_SESSION['matriid'])) {
   $css = 'icon btn_services';
   $title = 'Register to view phone';
   $divtitle = '';
   $matriid    = $searchresultfetch['MatriID'];
   $phonelink  =  "visiter_notification.php?ID=$matriid&key=phone";
 }

 if(isset($_SESSION['status']) and $_SESSION['status'] == 'Active')
  {
     $css = 'icon btn_services';
     $title = 'Subscribe to view phone';
     $divtitle = '';
	 $phonelink  =  "membershipform.php";
  }
 
?>
 <?php if(isset($_SESSION['matriid'])) { ?>
  <a href="express_int.php?MatriID=<?php echo $searchresultfetch['MatriID']; ?>" class="icon btn_services btn_expressInterest" > Express Interest</a> 
  <?php } ?>
<a href="viewfullprofile1.php?id=<?php echo $searchresultfetch['MatriID'] ?>"  class="icon btn_services btn_viewProfile"  > View Full Profile</a> 

<?php if($divtitle != "") { ?>  
  <a href="view_phonenumber.php?ID=<?php echo $searchresultfetch['MatriID']; ?>"  class="<?=$css?> btn_viewPhone" title="<?=$title?>"  > View Phone</a> 
	
<?php } else { ?>
  <a href="<?php echo $phonelink; ?>"  class="<?=$css?> btn_viewPhone" title="<?=$title?>" > View Phone</a> 
<?php } ?>    
  
<?php


//echo '<pre>'; print_r($_SESSION); exit;

$horogene  = '';

  $currentpage++;

$onlinehoros_sql = "SELECT COUNT(*) AS horosava FROM onlinehoroscope WHERE custid = '".$searchresultfetch['MatriID']."'";
$onlinehoros_exec = mysql_query($onlinehoros_sql);
$onlinehoros_fetch = mysql_fetch_array($onlinehoros_exec);

if(($onlinehoros_fetch["horosava"] != 0) && ($searchresultfetch['Status'] != 'Active') && ($searchresultfetch['Status'] != ''))
{
	$horoscopeclass = 'icon btn_services btn_horoscope';
	$horoscopelink = 'href="viewphoroscope.php?id='.$searchresultfetch['MatriID'].'"';
	
	if(isset($_SESSION['status']) and ($_SESSION['status'] != 'Active' or $_SESSION['status'] != 'InActive'))
	{
		$horo_tooltip = 'title="Horoscope: Available: View Now"';
		$divhorotitle = 'Horoscope: Available: <font class="redcolottooltip">View Now</font>';
	}
	else
	{
	    $horo_tooltip = 'title="Paid member only view horoscope of this member"';
		$divhorotitle = 'Paid member only view horoscope of this member';
	}
	
	
	$baloontooltip = 1;
}
else
{
	$horoscopeclass = 'icon_disable btn_services_disable btn_horoscope';
	$horoscopelink = 'href="horoscope_int_form.php?eiid='.$searchresultfetch['MatriID'].'"';
	
	
	if(isset($_SESSION['status']) and ($_SESSION['status'] != 'Active' or $_SESSION['status'] != 'InActive'))
	{
		$horo_tooltip = 'title="Horoscope Not Uploaded: Send Request"';
		$horogene  = 1;
	}
	else
	{
	    $horo_tooltip = 'title="Paid member only view horoscope of this member"';
	}
	
	$divhorotitle = '';
	$baloontooltip = 0;
}

if(!isset($_SESSION['matriid'])) {
   $matriid  =  $searchresultfetch['MatriID'];
   $horoscopeclass  = 'icon btn_services btn_horoscope';
   $horo_tooltip    = 'title="Register to view horoscope"';
   $divtitle        = '';
   $horoscopelink   = "href='visiter_notification.php?ID=$matriid&key=horoscope'";
 }


if(isset($_SESSION['status']) and $_SESSION['status'] == 'Active')
  {
	   $matriid  =  $searchresultfetch['MatriID'];
	   $horoscopeclass  = 'icon btn_services btn_horoscope';
	   $horo_tooltip    = 'title="Subscribe to view horoscope"';
	   $divtitle        = '';
	   $horoscopelink   = "href='membershipform.php'";
  }

//print_r($_SESSION);
$strid  = $_SESSION['matriid'];
$counthoros_sql = "SELECT COUNT(*) AS horoscount FROM onlinehoroscope WHERE custid ='".$strid."'";

$counthoros_exec = mysql_query($counthoros_sql);

$counthoros_fetch = mysql_fetch_array($counthoros_exec);

//print_r($counthoros_fetch);

if($counthoros_fetch["horoscount"] == 0)
 {
	$horo_tooltip    = 'title="To view horoscope, you’ve to generate yours first"'; 
	$horoscopelink   = "href='manage_horoscope.php'";
 }	
 
$qqq    = "select * from payment_details where matriid = '".$strid."' and astro_match = '1'"; 
$rrrr   = mysql_query($qqq);
$count  = mysql_affected_rows();
if($count > 0)
 {
    //$horo_tooltip    = 'title="Buy Astromatch for Online Horoscope matching"'; 
	//$horoscopelink   = "href='membershipform.php'";
 }
else
 {
    $strid  = $searchresultfetch['MatriID'];
    $horo_tooltip    = 'title="Buy Astromatch for Online Horoscope matching"'; 
	$horoscopelink   = "href='viewphoroscope.php?id=$strid'";
 } 
 
if($horogene == 1 and $_SESSION['status'] != 'Active')
 {
    $horo_tooltip    = 'title="Horoscope Not Uploaded: Send Request"'; 
	$matriid  = $searchresultfetch['MatriID'];
	$horoscopelink   = "href='horoscope_int_form.php?eiid=$matriid'";
 } 
?>  
<?php if($baloontooltip == 1) { ?>
	<a  <?php echo $horoscopelink;?> class="<?php echo $horoscopeclass; ?>" <?=$horo_tooltip?> target="_blank"  rel="htmltooltip">Horoscope</a>
	
<?php } else { ?>
  <a  <?php echo $horoscopelink;?> class="<?php echo $horoscopeclass; ?>" <?=$horo_tooltip?>> Horoscope</a>
<?php } ?>  
  
  <?php if(isset($_SESSION['payment_status']) and  $_SESSION['payment_status'] != '' ) { 
  //if($chat == 1) { 
	if(in_array($searchresultfetch['MatriID'],$explodeonlinemember)) {
	?>
<a href="javascript:void(0)" onClick="javascript:chatWith('<?php echo $searchresultfetch['MatriID']?>')" title="Request Chat"  class="icon btn_services btn_chat" > Chat </a> 
<?php } else { ?>
<a title="Not Chatting Now, instead send message now." class="btn_services btn_chat" href="sendmessage.php?matriid=<?php echo $searchresultfetch['MatriID']?>"> Chat </a>
<?Php } } ?>	  
<?php if(!isset($_SESSION['matriid'])) { ?>
<div class="register_sec">Want to Contact her?, <a class="link" href="registration1.php"><strong>Register</strong></a> or <a class="link" href="login.php"><strong>Login</strong></a></div>
<?php } ?>
   </div>

<style type="text/css">
.htmltooltip, div.htmltooltip
{
 display:none !important;
}
</style>   