<?php 
include("dbconnect.php");


$amount = $_REQUEST['payment_gross'];
$custom = explode("#",$_REQUEST['custom']);
$transaction_id = $_REQUEST['txn_id'];
$payment_status = $_REQUEST['payment_status'];
//var_dump($matriid); exit;
$matriid =$custom[0]; 
$plan =$custom[1];
$pldur =$custom[2]; 
$plcon =$custom[3];
$plsms =$custom[4];
$plamn =$custom[5];

$strexpdate = date('Y-m-d', strtotime(".$pldur days"));
$expdays = date('Y-m-d h:i:s', strtotime(".$pldur days"));

$rename =$_REQUEST['$regmname'];
$remail =$_REQUEST['$regmmail'];
$readdr =$_REQUEST['$regmadd'];


/*$mepre=(mysql_fetch_array(mysql_query("SELECT * from register where MatriID=$matriid ")));
$rename=$mepre['Name'];
$remail=$mepre['ConfirmEmail'];
$readdr=$mepre['Address'];
*/
if($astro  == 1)
$astro_match = 1;
elseif($astro  == 2)
$astro_6month = 1;
elseif($astro  == 2)
$astro_3months = 1;

/*$spot_light =$custom[3]; 

$match_promoter =$custom[4]; 
*/
$payer_email = $_REQUEST['payer_email'];

$amount = $amount*60;

//print_r($_REQUEST);

//echo "INSERT INTO `payment_details` ( `matriid`, `transaction_id`, `transaction_date`, `amount`, `plan`, `astro_match`, `spot_light`, `match_promoter`, `astro_3months`, `astro_6month`, `payer_email`,`payment_status`) VALUES ('$matriid', '$transaction_id',now(), '$amount', '$plan', '$astro_match', '$spot_light', '$match_promoter', '$astro_3months', '$astro_6month', '$payer_email','$payment_status' )";

 $insert = "INSERT INTO `payment_details` ( `matriid`, `transaction_id`, `transaction_date`, `amount`, `plan`, `astro_match`, `spot_light`, `match_promoter`, `astro_3months`, `astro_6month`, `payer_email`,`payment_status`) VALUES ('$matriid', '$transaction_id',now(), '$amount', '$plan', '$astro_match', '$spot_light', '$match_promoter', '$astro_3months', '$astro_6month', '$payer_email','$payment_status' )"; 
$insert = mysql_query($insert );

//echo "INSERT INTO paiddetails (`Pmatriid`,`Pname`,`Pemail`,`Paddress`,`Ppaymode`,`Pactivedate`,`Pplan`,`Pplanduration`,`Pnocontct`,`Pamount`)VALUES('$matriid','$rename','$remail','$readdr','Paypal',now(),'$plan','$pldur','$plcon','$plamn')"; 

$insert2=mysql_query("INSERT INTO paiddetails (`Pmatriid`,`Pname`,`Pemail`,`Paddress`,`Ppaymode`,`Pactivedate`,`Pplan`,`Pplanduration`,`Pnocontct`,`Pamount`)VALUES('$matriid','$rename','$remail','$readdr',Paypal,now() ,'$plan','$pldur','$plcon','$plamn')");


//echo  "UPDATE register set Status='$plan',MemshipExpiryDate='$strexpdate',expdays='$expdays',Noofcontacts='$plcon',featured ='1',sms_count='$plsms' where MatriID='$matriid'"; exit;

$update = "UPDATE register set Status='$plan',MemshipExpiryDate='$strexpdate',expdays='$expdays',Noofcontacts='$plcon',featured ='1',sms_count='$plsms' where MatriID='$matriid'";

$update1 = mysql_query($update );


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<style>
.profile_block div.body {
    font-size: 12px !important;
}
</style>
<SCRIPT language="Javascript">

<!--

<!--

<!--

		


function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}


function MM_validateForm() { //v4.0

  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;

  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);

    if (val) { nm=val.name; if ((val=val.value)!="") {

      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');

        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';

      } else if (test!='R') { num = parseFloat(val);

        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';

        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');

          min=test.substring(8,p); max=test.substring(p+1);

          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';

    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }

  } if (errors) alert('The following error(s) occurred:\n'+errors);

  document.MM_returnValue = (errors == '');

}

//-->















</SCRIPT>
</head>

<body>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Success Story</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/innerpagesidebar.php'); ?>
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
          <h2 class="float_left title"><span style="padding-left:10px">Payment Status </span></h2>
        </div>
        
		
		
		

		
		
		<div class="body">
<table width="100%" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td>

		<?php 

$StrAction=$_GET['Action'];

if ($StrAction == "err")

{

	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 align='center' >";

	echo "<tr>";

	echo "<td class=Alert align='left'><strong>Please Correct the  errors.</strong> </td>";

	echo "</tr>";

	echo "<tr>";

	echo "<td class=Alert align='left'>";

	echo "Image format should be in .jpg  .gif  .png";

	echo "</br>";

	echo "Image file size below 350 KB";

	echo "</td>";

	echo "</tr>";

	echo "</table>";

}

?></td>

      </tr>

    </table>
	<script>
	function validate(){
	var frm = document.photoform;

	if(frm.ur_fname.value == "") {
	alert("Please enter your first name");
	frm.ur_fname.focus();
	return false;
	}
	else if(frm.partner_fname.value == "") {
	alert("Please enter partner first name");
	frm.partner_fname.focus();
	return false;
	}
	else if(frm.ur_lastname.value == "") {
	alert("Please enter your last name");
	frm.ur_lastname.focus();
	return false;
	}
	else if(frm.partner_lastname.value == "") {
	alert("Please enter partner last name");
	frm.partner_lastname.focus();
	return false;
	}
	
	else if(frm.ur_email.value == "") {
	alert("Please enter your email");
	frm.ur_email.focus();
	return false;
	}
	else if(!echeck(frm.ur_email.value)) {

	frm.ur_email.focus();
	return false;
	}
	
	else if(frm.partner_email.value == "") {
	alert("Please enter partner email");
	frm.partner_email.focus();
	return false;
	}
	
	else if(!echeck(frm.partner_email.value)) {

	frm.partner_email.focus();
	return false;
	}
	
	else if(frm.ur_matriid.value == "") {
	alert("Please enter your matriid");
	frm.ur_matriid.focus();
	return false;
	}
	else if(frm.partner_matriid.value == "") {
	alert("Please enter partner matriid");
	frm.partner_matriid.focus();
	return false;
	}
	
    else if(frm.Message.value == "") {
	alert("Please enter Message");
	frm.Message.focus();
	return false;
	}
			var photoform = this.document.photoform;



			if ( photoform.uploaded_file.value == "" )

			{

				alert( "Please select your Image file." );

				photoform.uploaded_file.focus( );

				return false;

			}



			var     extPos = photoform.uploaded_file.value.lastIndexOf( "." );

            if ( extPos == - 1)

            {

                alert( "Only Jpg or Gif or Png files can be added." );

				photoform.uploaded_file.focus( );

				return false;

			}

            else

            {

				var extn =  photoform.uploaded_file.value.substring(

					extPos + 1, photoform.uploaded_file.value.length );

				if ( extn != "jpeg" && extn != "jpg" && extn != "gif" && extn != "png" )

				{

                	alert( "Only Jpg or Gif or Png files can be added." );

					photoform.uploaded_file.focus( );

					return false;

				}

				

			 

				var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";



  for (var i = 0; i < photoform.BrideName.value.length; i++) {

  	if (iChars.indexOf(photoform.BrideName.value.charAt(i)) != -1) {

  	alert ("Special characters and numbers are not allowed in Bride Name.\n Please remove them.");

	photoform.BrideName.focus( );

  	return false;

  	}

  }

  

  var jChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";



  for (var j = 0; j < photoform.GroomName.value.length; j++) {

  	if (jChars.indexOf(photoform.GroomName.value.charAt(j)) != -1) {

  	alert ("Special characters and numbers are not allowed in Groom Name.\n Please remove them.");

	photoform.GroomName.focus( );

  	return false;

  	}

  }



var kChars = "!@#$%^*()+=-[]\\\';/{}|\":<>?";



  for (var k = 0; k < photoform.Message.value.length; k++) {

  	if (kChars.indexOf(photoform.Message.value.charAt(k)) != -1) {

  	alert ("Special characters are not allowed in Message.\n Please remove them.");

	photoform.Message.focus( );

  	return false;

  	}

  }

				

				

				

			}

			return true;

		
	}
	</script>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
          <tr>
            <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="center">
                      <table width="100%" bgcolor="#FFF5EB" cellspacing="5px">
                        <tr>
                          <td colspan="3" style='padding-left:10px'>&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td colspan="3" style='padding-left:10px'><p>
						  <? if($payment_status == 'Completed') { ?>
						  Congratulations. Your payment has been succesfully completed. you will receive the invoice / receipt soon.
						  <? } else {?>
						   Your payment is not yet completed. Please contact site admin.
						  <? } ?>
						  </p></td>
                        </tr>
                        <tr>
                          <td style='padding-left:10px'><a href='#' target="_blank"></a></td>
                        </tr>
                        <tr>
                          <td style='padding-left:10px'><a href='#' target="_blank"></a></td>
                        </tr>
						
                      </table>
                  </div></td>
                </tr>
            </table></td>
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
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>

<script language = "Javascript">
/**
 * DHTML email validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}

function ValidateForm(){
	var emailID=document.frmSample.txtEmail
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter your Email ID")
		emailID.focus()
		return false
	}
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
	return true
 }
</script>


</body>
</html>




