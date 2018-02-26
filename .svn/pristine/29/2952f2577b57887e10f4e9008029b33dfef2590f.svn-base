<?php session_start();



if(isset($_POST))
{
	if(isset($_POST['to_mobile']))
	   $to_mobile = $_POST['to_mobile'];
	   
	if(isset($_POST['nick_name']))
	{
	  $sender = $_SESSION['matriid'];
	  $nick_name = $_POST['nick_name'];
	  $body = urlencode("From : $sender ($nick_name)  - ".$_POST['message']); 
	}  
}


include("dbconnect.php");

?>
<div style="float:left; border:1px solid red; display:none; ">
<?php

if(isset($_POST['to_mobile'])) {

	$matriid= $_SESSION['username'];
	
	$configdata = mysql_query("SELECT * FROM register where MatriID ='$matriid'") ;

	$email_res = mysql_fetch_array($configdata);
	$old_sms_count  =  $email_res['sms_count'];
	$new_count  = $email_res['sms_count'] - 1;
	$matriid = $_SESSION['matriid'];
	
	if($new_count < 0)
	 $new_count = 0;
	 
	$sql  = "update register set sms_count = '$new_count' where MatriID ='$matriid'"; 
	mysql_query($sql);


    $nick_name = $_POST['nick_name'];
    $body = urlencode($_POST['message']." Sent By $sender"); 

    $mobile            = trim($_POST['to_mobile']);
    $sms_api_username  = "test";
	$sms_api_password  = "test";
	$sms_api_sender    = "test";
	$sms_mobile        = $mobile;
	//$sms_message       = "Dear ".$_SESSION['Name'].", Greetings from phpmatrimonialscript.in! Your mobile verification code is ".$verification_code.". Please enter it in the space provided next page.";
	$sms_message       = $body;
	$sms_format        = "text";
	$sms_date          = date('d-m-Y').'TO'.date('h:i:s');  // 11-01-2014T01:11:05
	
	$sendsms_url = "http://login.smsindiahub.in/API/WebSMS/Http/v1.0a/index.php?username=$sms_api_username&password=$sms_api_password&sender=$sms_api_sender&to=$sms_mobile&message=$sms_message&reqid=1&format=$sms_format&route_id=#&callback=#&unique=0&sendondate=$sms_date";
	
	// create a new cURL resource
	$ch = @curl_init();
	
	// set URL and other appropriate options
	@curl_setopt($ch, CURLOPT_URL, $sendsms_url);
	@curl_setopt($ch, CURLOPT_HEADER, 0);
	
	// grab URL and pass it to the browser
	@curl_exec($ch);
	
	// close cURL resource, and free up system resources
	@curl_close($ch);
   

	 //file_get_contents("http://sms.oxfro.in/sendsms?uname=demoshow&pwd=demo&senderid=$sender&to=$to_mobile&msg=$body&route=C");
	$succ_msg = "Your message sent successfuly";
	/*$url = "http://sms.oxfro.in/sendsms?uname=demoshow&pwd=demo&senderid=$sender&to=$to_mobile&msg=$body&route=C";
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, TRUE);
	curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$head = curl_exec($ch); 
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	print_r($ch);echo "<pre>";print_r($head);*/
			
	
}



 ?>
 </div>
 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>


<script language="JavaScript" type="text/javascript" src="admin/wysiwyg.js">

</script>
<?Php 

include("dbconnect.php");

$matriid= $_SESSION['username'];

$configdata = mysql_query("SELECT * FROM register where MatriID ='$matriid'") ;

$email_res = mysql_fetch_array($configdata);

$email = $_REQUEST['email'];
if(isset($_POST['to'])) {




$to=$_POST['to'];	
//$to="satheeshforblog@gmail.com";	

$from=$email_res["ConfirmEmail"]; 


$msg = "Dear User, <br><br>";
$msg .= $_REQUEST['message'];

$msg .= "<br><br> Regards, <br><br> $sitename Team";

ini_set("SMTP",$smtphost);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";
	

$subject=$_POST['subjuct'];

//$headers .= "\r\nContent-Type: multipart/alternative;"; 

 $success = mail($to,$subject, $msg, $headers); 
$success_msg = "Your message has been send successfuly.";



}
include("include/innerheadersection.php"); 


$configdata = mysql_query("SELECT * FROM register where MatriID ='$matriid'") ;

$email_res = mysql_fetch_array($configdata);
?>

<link rel="stylesheet" href="css/ajax-tooltip.css" media="screen" type="text/css">

<link rel="stylesheet" href="css/ajax-tooltip-demo.css" media="screen" type="text/css">
</head>

<body>
<div id="wrapper"> 
  <?Php include("include/menu.php"); ?>
  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway">  <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Send SMS</span> </div>
      </li>
      <li class="right"></li>
    </ul>

  </div>

  <div id="content_area">

    <?Php include("include/registersidebar.php"); ?>

    <div id="inner_right"> 
      <a name="top" id="top"></a>
      <div class="profile_block">

        <div class="header">
          <h2 class="float_left title"> <span class="black" style="color:#333;"> <?php echo $sitename; ?>:</span> Send SMS </h2>

        </div>

        <div class="body">
<div align="left"><font color="#006600"><b><?=$success_msg?></b> </font></div>
<form id="composeMessage" name="ComposeMessageCommand" method="post" action="">
            <table id="jspMailBox">
			<tbody><tr>
				<td valign="top">

<table width="100%" cellspacing="0" cellpadding="0" border="0" id="mediaTypeOne" style="font-size:12px !important; font-family:Arial, Helvetica, sans-serif;">
      <tr>
          <td  align="left">
		  	<img style="width: 135px; height: 120px;" src="images/smsMatch.jpg" id="mainImg">	
			
		

<p id="readMore"><b><font color="#9E0C4D" size="3">Send SMS message to member  </font> </b> Here you can send SMS to our members. Please specify the username of the person you are sending and the text of the message.<br /><br /><br />
</p>
<div id="blockQuestion">
						<img src="images/question.gif" id="imgQuestion" style="float:left;">
						<div id="textAfterQuestion" style="width:500px; float:left; font-size:14px;">
							<p id="readMore">&nbsp;&nbsp;&nbsp;&nbsp;Read more about sending SMS <a href="innerpage.php?id=4" id="redLink">here</a></p>
						</div>
				  </div>	
				  </td>
         
          <td  align="left" valign="top"><h2 id="title">&nbsp;</h2>
            </td>
          <td  align="left" valign="top">	</td>
      </tr>
        <tr>
		<td style="color:#006600;align:center;" align="center"><b> <?=$succ_msg?> </b> </td>
		</tr>
        <tr>
          <td colspan="2" id="mainContent"><div id="main"></div>
		  
		  <br />
		  <p>
		  <?php if(isset($email_res['Status']) and $email_res['Status'] == 'SILVER') { echo 'Allotted SMS for Silver  = 20'; } ?>
		  <?php if(isset($email_res['Status']) and $email_res['Status'] == 'GOLD') { echo 'Allotted SMS for Gold    = 40'; } ?>
		  <?php if(isset($email_res['Status']) and $email_res['Status'] == 'DIAMOND') { echo 'Allotted SMS for Diamond = 70'; } ?>
		   
		   <br />

		  </p>
		  <p>Remaining SMS Count : <?php echo $email_res['sms_count']; ?></p>
		  
		  <?php if(isset($email_res['sms_count']) and $email_res['sms_count'] > 0)
		  { ?>
		    <table width="100%" cellspacing="0" cellpadding="5" border="0" id="forMessage">
  <tbody><tr>
    <td width="16%"><!--<p >To: </p>--></td>
    <td width="84%" valign="top">
        <div id="ima" style="padding:0 390px 10px 27px">
          <input type="hidden" name="to_mobile" id="to_mobile" value="<?=$_GET['mobile']?>" size="63" height="20" >
        </div></td>
  </tr>
  
 <tr>
    <td width="16%"  nowrap="nowrap" style="vertical-align:top;"><p style="font-size:12px;" >Username: </p></td>
    <td width="84%" valign="top">
        <div id="ima" style="padding:0 390px 10px 27px"> 
          <input type="text" name="nick_name" id="nick_name" size="63" height="20"  style="width:488px; border-color:#F9D6A5;background-color:#FFF6EA" value="<?=$_GET['matriid']?>" readonly="" > 
        </div></td>
  </tr>
  <tr>
    <td valign="top" style="vertical-align:top;"><p style="font-size:12px;" >Message:</p></td>
    <td>
        <div align="left" style="padding:0 0 10px 27px; width:530px; font-size:12px;">
		  <!--<input type="text" name="message" maxlength="145" style="width:488px; border-color:#F9D6A5;background-color:#FFF6EA; height:200px;" />-->
          
		  <!--<textarea name="message" maxlength="145" rows="20" id="body" style="width:488px; border-color:#F9D6A5;background-color:#FFF6EA" lang="160"></textarea>-->
		  
		  <div style="float:left;"><input style="float:left;" type="radio" name="message" value="Interested in your profile. If you are interested in my profile, please respond at the earliest." /><span style="float:left; width:500px; padding-left:10px; padding-top:5px;">Interested in your profile. If you are interested in my profile, please respond at the earliest.</span> </div>
		  <div style="float:left;"><input style="float:left;" type="radio" name="message" value="I have gone through your details and feel we have lot in common. Would sure like to know your opinion on this?" /><span style="float:left; width:500px; padding-left:10px; padding-top:5px;">I have gone through your details and feel we have lot in common. Would sure like to know your opinion on this? </span></div>
		  <div style="float:left;"><input style="float:left;" type="radio" name="message" value="You are someone special I wish to know better. Please contact me at the earliest." /><span style="float:left; width:500px; padding-left:10px; padding-top:5px;">You are someone special I wish to know better. Please contact me at the earliest. </span></div>
		  
        </div>  <span style="color:red; float:left; padding:0 0 25px 25px; clear:both;"></span> <br /><br /></td>
		
		
  </tr>
  


<!---->
  <tr>
    <td>&nbsp;</td>
    <td>
		<!-- <div style="float:left "> -->
		 <a class="pageNum" style="float:left; font-size:11px; margin-left:27px;" href="javascript:;" onClick="window.history.go(-1)"><< Go Back</a> &nbsp;&nbsp; <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="submit" type="image" value="submit" alt="Send SMS" onClick="return do_submit()">	</td>
  </tr>
</tbody></table>	<?php
          } else { ?>
		  <p style="text-align:center; padding:20px; color:red;">Sorry! you are not having remaining SMS count to send SMS.</p>
		  <?php } ?>	  </td>
        </tr>		
	</table>
</td>
			</tr>
		</table>

     </form>


        </div>
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>

      </div>


      <br />
    </div>

  </div>


  <?php include("include/footermenu.php") ?>


</body>
</html>


	<script language="javascript1.2">
	
	function do_submit(){
	
	if(document.ComposeMessageCommand.to_matriid.value!='' && document.ComposeMessageCommand.subject.value!='' && document.ComposeMessageCommand.message.value!='') 
	{
	document.ComposeMessageCommand.submit();
	}
	else{
	alert("Please fill all the fileds"); return false();
	}
	
	
	}

  generate_wysiwyg('textarea1');

</script>




