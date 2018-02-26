<?php
session_start();
error_reporting(0);

include("dbconnect.php");
$email1 =  $_POST['EMAIL'];
if(!isset($_POST['EMAIL']))
 { ?>
    <script type="text/javascript">
	window.location  = 'registration1.php?err';
	</script>
    <?php 
 } 

$_SESSION['email']  =  $email1;

$configdata = mysql_query("SELECT * FROM register where ConfirmEmail ='$email1'") 



or die(mysql_error()); 
$info = mysql_num_rows( $configdata ); 



if($info > 0 ){

//header("location:registration1.php?err=1");
//exit;


}


	/// Basic Datas 

	$_SESSION['Name'] = strip_tags($_POST['txtName']);
	$_SESSION['Gender']= strip_tags($_POST['txtGender']);
	$sDay = strip_tags($_POST['dobDay']);
	$sMonth = strip_tags($_POST['dobMonth']);
	$syear = strip_tags($_POST['dobYear']);
	$slash = "-";

	$_SESSION['DateofBirth'] = $syear.$slash.$sMonth.$slash.$sDay;
	$sMs = $_POST['MARITAL_STATUS'];
	if ($sMs == "1") 
	{

	$_SESSION['MaritalStatus'] = "Unmarried";
	}
	elseif ($sMs == "2") 
	{
	$_SESSION['MaritalStatus'] = "Widow/Widower";
	}
	elseif ($sMs == "3") 
	{
	$_SESSION['MaritalStatus'] = "Divorcee";
	}
	elseif ($sMs == "4") 
	{
	$_SESSION['MaritalStatus'] = "Separated";
	}

	$Strnochild = strip_tags($_POST['NOOFCHILDREN']);
	if(isset($_POST['CHILDLIVINGWITHME']))
	{
		$Strchildwithme = strip_tags($_POST['CHILDLIVINGWITHME']);
	}
	else
	{
		$Strchildwithme = "";
	}
	$_SESSION['ChildrenLivingStatus'] = $Strnochild.' & '.$Strchildwithme;
	$_SESSION['Mothertongue']= strip_tags($_POST['Language']);
	$_SESSION['Religion']= strip_tags($_POST['religion']);
	$_SESSION['Caste']= strip_tags($_POST['caste']);
	$_SESSION['SubCaste']= strip_tags($_POST['txtSubcaste']);
	$_SESSION['ProfileCreatedby']= strip_tags($_POST['txtPC']);
	$_SESSION['Referenceby']= strip_tags($_POST['txtRef']);
	/// Accounts Datas
	$_SESSION['ConfirmEmail'] = strip_tags($_POST['EMAILconfirm']);
	$_SESSION['ConfirmPassword']= ($_POST['txtcp']);
	/// Socio Religious Attributes 
	$_SESSION['Gothra']= strip_tags($_POST['txtGothra']);
	$_SESSION['Star']= strip_tags($_POST['txtStar']);
	$_SESSION['Moonsign']= strip_tags($_POST['txtMoon']);
	if(isset($_POST['txtHorosMatch']))
	{
		$_SESSION['HoroscopeMatch']= strip_tags($_POST['txtHorosMatch']);
	}
	else
	{
		$_SESSION['HoroscopeMatch']= "";
	}





    $_SESSION['City']= strip_tags($_POST['City']); 
	$_SESSION['State']= strip_tags($_POST['State']); 
	$_SESSION['Country']= strip_tags($_POST['country']);
	$_SESSION['Code']= strip_tags($_POST['txtAC']);
	$_SESSION['Areacode']= strip_tags($_POST['txtAC1']);
	$sCC = strip_tags($_POST['txtAC']);
	$sAC = strip_tags($_POST['txtAC1']);
	$sPhone = strip_tags($_POST['txtPhone']);
	$ssep="-";
	$_SESSION['Phone']= $sCC.$ssep.$sAC.$ssep.$sPhone;
	$_SESSION['Mobile']= strip_tags($_POST['txtCC'].'-'.$_POST['txtMobile']);


   //echo '<pre>'; print_r($_POST); exit;

 

	if(isset($_POST['txtManglik']))
 
	{

 

		$_SESSION['Manglik']= strip_tags($_POST['txtManglik']);

 
	}

 
	else
 

	{

 
		$_SESSION['Manglik']= "";

 
	}

 
	$_SESSION['Placeofbirth']= strip_tags($_POST['txtPb']);
 

	$_SESSION['Timeofbirth']= strip_tags($_POST['txtTb']);


	$_SESSION['Accept']= strip_tags($_POST['txtAccept']);

 
	//msg5.text = Request.ServerVariables("REMOTE_ADDR") 

 

//echo '<pre>'; print_r($_POST); exit;
 
$sel="SELECT * FROM register ORDER BY ID DESC limit 0,1";

$exe=mysql_query($sel);

$result=mysql_fetch_array($exe);



$ID = $result['ID']+1;



$ID = 'MM'.$ID;

$mobile             =  trim($_POST['txtMobile']);
$verify             =  'no';
//$verification_code  =  time();

$verification_code  =  rand(00000, 99999);

$_SESSION['mobile'] = trim($_POST['txtMobile']);
$_SESSION['last_insert_id'] = trim($ID);

?>
<div style="float:left; border:1px solid red; display:none; ">
<?php 


/*$sms_api_username  = "test";
$sms_api_password  = "test";
$sms_api_sender    = "test";
$sms_mobile        = $mobile;
$sms_message       = "Dear ".$_SESSION['Name'].", Greetings from phpmatrimonialscript.in! Your mobile verification code is ".$verification_code.". Please enter it in the space provided next page.";
$sms_format        = "text";
$sms_date          = date('d-m-Y').'TO'.date('h:i:s');  // 11-01-2014T01:11:05

$sendsms_url = "http://login.smsindiahub.in/API/WebSMS/Http/v1.0a/index.php?username=$sms_api_username&password=$sms_api_password&sender=$sms_api_sender&to=$sms_mobile&message=$sms_message&reqid=1&format=$sms_format&route_id=#&callback=#&unique=0&sendondate=$sms_date";

// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, $sendsms_url);
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);*/


?>
</div>
<?php 


 $query="INSERT INTO register (MatriID,pass,Termsofservice,ConfirmEmail,ConfirmPassword,Profilecreatedby,Referenceby,Name,Gender,DOB,Maritalstatus,PE_HaveChildren, childrenlivingstatus,PE_MotherTongue,Language,Religion,Caste,Subcaste,City,State,Country,Status,registered_on, Mobile, verify, verification_code ) VALUES ('$ID','".$_POST['txtcp']."','".$_SESSION['Accept']."', '".$_SESSION['ConfirmEmail']."', '".md5($_SESSION['ConfirmPassword'])."', '".$_SESSION['ProfileCreatedby']."', '".$_SESSION['Referenceby']."','".$_SESSION['Name']."', '".$_SESSION['Gender']."', '".$_SESSION['DateofBirth']."','".$_SESSION['MaritalStatus']."','".$_POST['NOOFCHILDREN']."','".$_SESSION['ChildrenLivingStatus']."','".$_SESSION['Mothertongue']."','".$_POST['Language']."','".$_SESSION['Religion']."', '".$_SESSION['Caste']."', '".$_SESSION['SubCaste']."', '".$_SESSION['City']."', '".$_SESSION['State']."', '".$_SESSION['Country']."','InActive',now(), '$mobile', '$verify', '$verification_code' )"; 


 mysql_query($query);



 $lastid=mysql_insert_id(); 



$_SESSION['lastid'] = $lastid;

$_SESSION['last_insertid'] = trim($ID);


 $sel="SELECT * FROM register WHERE MatriID='$ID'"; 



$exe=mysql_query($sel);



$result=mysql_fetch_array($exe);


$matriid=$result['MatriID'];

 $msg='<div style="width:100% !important;-webkit-text-size-adjust:none;margin:0; padding:0;" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">

<center>

        	<table style="height:100% !important; margin:0; padding:0; width:100% !important;background-color:#FAFAFA;" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">



            	<tr>



                	<td align="center" valign="top">

 
                        <table border="0" cellpadding="10" cellspacing="0" width="600" id="templatePreheader">



                            <tr>



                                <td valign="top" class="preheaderContent">




                                    <table border="0" cellpadding="10" cellspacing="0" width="100%">



                                    	<tr>



                                        	<td valign="top">



                                            	<div mc:edit="std_preheader_content" style="color:#505050; font-family:Arial;font-size:10px;line-height:100%;text-align:left;">



                                                	 Use this area to offer a short teaser of your email\'s content. Text here will show in the preview area of some email clients.

                                                </div>

                                   </td>

				<td valign="top" width="190">



                                            	<div mc:edit="std_preheader_links" style="color:#505050; font-family:Arial;font-size:10px;line-height:100%;text-align:left;">



                                                	Is this email not displaying correctly?<br /><a href="*|ARCHIVE|*" target="_blank">View it in your browser</a>.



                                                </div>



                                            </td>



											



                                        </tr>



                                    </table>



                                                       



                                </td>



                            </tr>



                        </table>



                       



                    	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">



                        	<tr>



                            	<td align="center" valign="top">



                                   



                                	<table style=" background-color:#FFFFFF;border-bottom:0;" border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">



                                        <tr>



                                            <td height="100" style="color:#202020;font-family:Arial;font-size:34px;font-weight:bold;line-height:100%;padding:0;text-align:center;vertical-align:middle;" class="headerContent">


 

<img src="'.$sitelogo.'" border="0"  />

 

                                            </td>



                                      </tr>



                                    </table>



                                   



                                </td>



                            </tr>



                        	<tr>



                            	<td align="center" valign="top">



                                   



                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">



                                    	<tr>



                                            <td valign="top"  style="background-color:#FFFFFF;" class="bodyContent">



                                



                                                



                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">



                                                    <tr>



                                                        <td valign="top">



                                                            <div mc:edit="std_content00" style="color:#505050;font-family:Arial;font-size:14px;line-height:150%;text-align:left;">



                                                       <h2 style="color:#A50050;display:block;font-family:Arial;font-size:30px;font-weight:bold;line-height:100%;margin-top:0;margin-right:0;margin-bottom:10px;	margin-left:0;text-align:left;" class="h2"> Welcome to '.$sitename.' - Profile submitted for verification</h2>



                                                                



                                                           <strong>Dear '. $_SESSION['Name'] .'</strong>



																<br/>



																Congratulations! Your profile has been registered and is under validation.



Your profile will be reviewed for the next 72 hours and an email confirmation will be sent to you once it is approved. 



                                                                <br />



         







<br/>







 







We wish you all the best in your search for your soulmate.



Should you require any assistance, please feel free to contact our Customer support.



 







If you have not provided your photo during the registration process, you may upload it as soon as your profile is verified and approved. Please note that members who have uploaded their photos receive up to 15 times more attention than those who have not.







For commonly asked questions, visit our FAQ



 



section.



 







Wishing you luck in your search for an ideal partner,



Team - '.$sitename.'

                                               </div>



														</td>



                                                    </tr>



                                                </table>



                                                                                              



                                            </td>



                                        </tr>



                                    </table>



                                   



                                </td>



                            </tr>



                        	<tr>



                            	<td align="center" valign="top">



                                   



                                	



                                                                                          



                                            </td>



                                        </tr>



                                    </table>



                                   



                                </td>



                            </tr>



                      </table>



                        <br />



                    </td>

                </tr>

            </table>



        </center>



    </div>



';



$to=$_SESSION['ConfirmEmail'];	



//$from="info@phpmatrimonialscript.in";

$from=$siteadmin;


ini_set("SMTP",$smtphost);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";

$subject="Profile submitted for verification";



//$headers .= "\r\nContent-Type: multipart/alternative;"; 



$success = mail($to,$subject, $msg, $headers); 

 

?>















<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">







<html xmlns="http://www.w3.org/1999/xhtml">







<head>



<link rel="stylesheet" href="css/bubble-tooltip.css" media="screen">



<style>

#bubble_tooltip, #bubble_tooltip1{

    min-width:200px;
	max-width:300px;

	position:absolute;

	display:none;
	border:1px solid #000;
	background:#FFFAF4;
    margin-top:80px;
	height:85px;
	
}
#bubble_tooltip1
{
  margin-top:65px;
}
#bubble_tooltip{
margin-top:-35px;
height:70px;
}
#bubble_tooltip .bubble_top, #bubble_tooltip1 .bubble_top1{

	/*background-image: url('images/bubble_top.gif');

	background-repeat:no-repeat;*/

	height:16px;
		

}

#bubble_tooltip .bubble_middle, #bubble_tooltip1 .bubble_middle2{

	/*background-image: url('images/bubble_middle.gif');

	background-repeat:repeat-y;	

	background-position:bottom left;*/

	padding-left:7px;

	padding-right:7px;
	height:70px;

}

#bubble_tooltip .bubble_middle span, #bubble_tooltip1 .bubble_middle1 span{

	position:relative;

	top:-8px;

	font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;

	font-size:11px;

}

#bubble_tooltip1 .bubble_middle1
{
 padding:5px;
}

#bubble_tooltip .bubble_bottom{
	
	width: 0; 
	height: 0; 
	border-color:#FFFAF4;
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	border-top: 10px solid #000;
	
	font-size: 0;
	
	line-height: 0;
	position:relative;
	margin:-15px 0 0 50px;


}

 #bubble_tooltip1 .bubble_bottom1{
	
	width: 0; 
	height: 0; 
	border-color:#FFFAF4;
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	border-top: 10px solid #000;
	
	font-size: 0;
	
	line-height: 0;
	position:relative;
	margin:-5px 0 0 50px;


}





/*#bubble_tooltip1{

	width:147px;

	position:absolute;

	display:none;

}

#bubble_tooltip1 .bubble_top1{

	background-image: url('images/bubble_top.gif');

	background-repeat:no-repeat;

	height:16px;	

}

#bubble_tooltip1 .bubble_middle1{

	background-image: url('images/bubble_middle.gif');

	background-repeat:repeat-y;	

	background-position:bottom left;

	padding-left:7px;

	padding-right:7px;

}

#bubble_tooltip1 .bubble_middle1 span{

	position:relative;

	top:-8px;

	font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;

	font-size:11px;

}

#bubble_tooltip1 .bubble_bottom1{

	background-image: url('images/bubble_bottom.gif');

	background-repeat:no-repeat;

	background-repeat:no-repeat;	

	height:44px;

	position:relative;

	top:-6px;

}*/







</style>

	
<!--
<style>

#bubble_tooltip{

	width:147px;

	position:absolute;

	display:none;

}

#bubble_tooltip .bubble_top{

	background-image: url('images/bubble_top.gif');

	background-repeat:no-repeat;

	height:16px;	

}

#bubble_tooltip .bubble_middle{

	background-image: url('images/bubble_middle.gif');

	background-repeat:repeat-y;	

	background-position:bottom left;

	padding-left:7px;

	padding-right:7px;

}

#bubble_tooltip .bubble_middle span{

	position:relative;

	top:-8px;

	font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;

	font-size:11px;

}

#bubble_tooltip .bubble_bottom{

	background-image: url('images/bubble_bottom.gif');

	background-repeat:no-repeat;

	background-repeat:no-repeat;	

	height:44px;

	position:relative;

	top:-6px;

}







#bubble_tooltip1{

	width:147px;

	position:absolute;

	display:none;

}

#bubble_tooltip1 .bubble_top1{

	background-image: url('images/bubble_top.gif');

	background-repeat:no-repeat;

	height:16px;	

}

#bubble_tooltip1 .bubble_middle1{

	background-image: url('images/bubble_middle.gif');

	background-repeat:repeat-y;	

	background-position:bottom left;

	padding-left:7px;

	padding-right:7px;

}

#bubble_tooltip1 .bubble_middle1 span{

	position:relative;

	top:-8px;

	font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;

	font-size:11px;

}

#bubble_tooltip1 .bubble_bottom1{

	background-image: url('images/bubble_bottom.gif');

	background-repeat:no-repeat;

	background-repeat:no-repeat;	

	height:44px;

	position:relative;

	top:-6px;

}



</style>

-->

<script>

function checkcitystate() {
	if(document.getElementById('select_state').value == "Others")
	{
		document.getElementById('state_text').disabled = false;
	}
	if(document.getElementById('select_city').value == "Others")
	{
		document.getElementById('city_text').disabled = false;
	}
}

function ajaxCity(val) {



$.post('city.php?state='+val,'', function(data) {

//if(data!=''){



  document.getElementById('select1_city').innerHTML=data;



return false;

});

}

</script>

			

			

			

<script>



function go_link(){







window.location = 'registration1.php';







}



function show_div(flag){







if(flag == 'Required') {



document.getElementById('map').style.display = '';



document.getElementById('map2').style.display = '';



document.getElementById('map3').style.display = '';



document.getElementById('map4').style.display = '';

document.getElementById('map5').style.display = '';

}



else {



document.getElementById('map').style.display = 'none';



document.getElementById('map2').style.display = 'none';



document.getElementById('map3').style.display = 'none';



document.getElementById('map4').style.display = 'none';

document.getElementById('map5').style.display = 'none';

}

}

</script>


<?Php
   include("include/innerheadersection.php"); ?>

 
<script language="javascript" src="js/Country_States_Cities.js" type="text/javascript"> </script>

 
</head>







<script type="text/javascript" src="js/ajax-dynamic-content.js"></script>



<script type="text/javascript" src="js/ajax.js"></script>



<script type="text/javascript" src="js/ajax-tooltip.js">



</script>	



<link rel="stylesheet" href="css/ajax-tooltip1.css" media="screen" type="text/css">



<link rel="stylesheet" href="css/ajax-tooltip-demo.css" media="screen" type="text/css">



<script language="javascript" type="text/javascript">

 

			 function loadvalues()

 

			 {

 
				enb('country');

 

				select_field('country','');

 
				select_field('state','');

 
				enb('state');

 

				select_field('city','');

 

			 }



 

				 function Validate()







				{







				/* -------- city part ends here ------- */







				}







//checks the fields that are compulsory namely state, city, terms of use







function CheckFields()







{







    var i = Validate();







    if(i==0)







        return false;







    return true;







}







    </script>







<script language="javascript">







function ValidateNo( NumStr, String ) 







	{







 		for( var Idx = 0; Idx < NumStr.length; Idx ++ )







 		{







			 var Char = NumStr.charAt( Idx );







			 var Match = false;







				for( var Idx1 = 0; Idx1 < String.length; Idx1 ++) 







				{







					 if( Char == String.charAt( Idx1 ) ) 







					 Match = true;







				}







				if ( !Match ) 







					return false;







 		}







        	return true;







	}







	function ResetValues( )







	{







		var formn = this.document.formn;







		formn.txtEdu.value = "";







		formn.txtEdudetails = "";







		formn.txOccu.value = "";







		formn.txtEmp.value = "";















		formn.txtHeight.value = "";















		formn.txtWeight.value = "";















		formn.txtBlood.value = "";















		formn.txtBody.value = "";















		formn.txtComplexion.value = "";















		formn.txtAddress.value = "";















		formn.txtCity.value = "";















		formn.txtState.value = "";















		formn.txtPhone.value = "";















		return true;















	}















	// Function to validate all the inputs















	function Validate(  )















	{















		var formn = this.document.formn;















		// Check Education















		if ( formn.txtEdu.selectedIndex == 0 )















		{















			alert( "Please Select your Education." );	















			formn.txtEdu.focus( );















			return false;















		}







	// Check Edu details















		if ( formn.txtEdudetails.selectedIndex == 0 )















		{















			alert( "Please Select your Education Details" );	















			formn.txtEdudetails.focus( );















			return false;















		}







		// Check Occupation















		if ( formn.txtOccu.value == "" )















		{















			alert( "Please Select your Occupation." );	















			formn.txtOccu.focus( );















			return false;















		}







		// Check Employed in















		if ( formn.txtEmp.selectedIndex == 0 )















		{















			alert( "Please Select your Employed in status." );	















			formn.txtEmp.focus( );















			return false;















		}







		// Check Height















		if ( formn.txtHeight1.selectedIndex == 0 )















		{















			alert( "Please Select your Height." );	















			formn.txtHeight1.focus( );















			return false;















		}







		// Check Weight















		if ( formn.txtWeight.selectedIndex == 0 )















		{















			alert( "Please Select your Weight." );	















			formn.txtWeight.focus( );















			return false;















		}







		// Check Blood Group















		if ( formn.txtBlood.selectedIndex == 0 )















		{















			alert( "Please Select your Blood Group." );	















			formn.txtBlood.focus( );















			return false;















		}







		// Check BodyType















		if ( formn.txtBody.selectedIndex == 0 )















		{















			alert( "Please Select your Appearance." );	















			formn.txtBody.focus( );















			return false;















		}







		// Check Complexion















		if ( formn.txtComplexion.selectedIndex == 0 )















		{















			alert( "Please Select your Complexion." );	















			formn.txtComplexion.focus( );















			return false;















		}







		// Check Address 















		if ( formn.txtAddress.value == "" )















		{















			alert( "Please enter your Address." );















			formn.txtAddress.focus( );















			return false;















		}















			















	































	




























		















		return true;















	}







		</script>







<script>















function check_phone(field_name)
{
	var i, max, field_info
	field_info = eval("document.formn." + field_name);
	max = field_info.value.length;
	for (i = 0; i < max; i++)
	{
		if(isNaN(field_info.value.charAt(i)))
		{
			alert("You Must Enter A Number.");
			field_info.value = "";
			field_info.focus();
			return false;
		}
	}
			return true;
}















</script>







<script>















<!--















function clearform()















	{















	















//		formn.txtEdu.value = "1"















		//formn.txtAddress.value = ""















		//formn.txtAddress.value = ""















	//	formn.txtAddress.value = ""















		//formn.txtAddress.value = ""















		////formn.txtAddress.value = ""















	//	formn.txtAddress.value = ""















		formn.txtEdudetails.value = ""















		















		formn.txtAddress.value = ""















		formn.txtCity.value = ""















		formn.txtState.value = ""















		formn.txtPhone.value = ""















		















		















	}















//-->















</script>





<script language="javascript" src="js/manage_horo_country.js" type="text/javascript"> </script>










<body>







<div id="wrapper"> 







  







  <!-- HEADER STARTS HERE ###################################################  -->




  <?Php include("include/menu.php"); ?>


  <!-- HEADER ENDS HERE ###################################################  --> 







  







  <!-- CONTENT AREA STARTS HERE ###################################################  --> 







  






  <div id="content_area">










    <div id="inner_right"> 







      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 







      <a name="top" id="top"></a>







      <div class="profile_block">







        <div class="header">







          <h2 class="float_left title"> <span class="black" style="color:#A50050;">Completing this page will take you closer to your Life half and Get Married
</span></h2>







        </div>







        <div class="body">







          <form action="registration3.php" class="form-horizontal" method="post" style="margin-left:30%;" name="formn" onSubmit="return Validate()">



          				<div class="form-group">
                           <div class="col-md-12">
                           	<ul>
                           		<li>Registration Continue.</li>
		                        <li>All Fields marks * are compulsory.</li>
                        		<li>Please mention accurate information in this form or your profile may be declined.</li>
                            </ul>
                           </div>
                           <div class="col-md-9">
                           	<ul class="ddlist list-tick">
								<b>My Basics</b><br />
								<b>Name:&nbsp;&nbsp;</b><?echo $result['Name'];?><br />
								<b>Gender:&nbsp;&nbsp;</b><?=$result['Gender'];?><br />
								<b>Date of birth:&nbsp;&nbsp;</b><?=$result['DOB'];?><br />
								<b>Marital Status:&nbsp;&nbsp;</b> <?=$result['Maritalstatus'];?><br />
							</ul>	
                           </div>
                        </div>
                        <div class="form-group col-md-12">
                        	<h3><strong>More Personal Details</strong></h3>
                        </div>
                        <div class="form-group">
                           <div class="col-md-2">
                           	<label>* Address </label>
                           </div>
                           <div class="col-md-8">
                           	 <textarea class="form-control" name="txtAddress" rows="4" id="txtAddress" style="width:50%;" onKeyDown="showToolTip(event,'The contact address is only for Official purpose and will not be discloded to others');return true"  

	onkeyup="showToolTip(event,'The contact address is only for Official purpose and will not be discloded to others');return true" 

	onkeypress="showToolTip(event,'The contact address is only for Official purpose and will not be discloded to others');return true" 

	onclick="showToolTip(event,'The contact address is only for Official purpose and will not be discloded to others');return true" onMouseOut="hideToolTip()" onBlur="hideToolTip()"></textarea>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                            	<select name="txtRes" class="form-control" id="txtCitizen" style="width:60%;">
                            		<option>Residency Status</option>
                        			<option value="Citizen">Citizen</option>
			                        <option value="Permanent Resident">Permanent Resident</option>
                        			<option value="Student Visa">Student Visa</option>
                        			<option value="Temporary Visa">Temporary Visa</option>
                        			<option value="Work permit">Work permit</option>
                      			</select>
                           </div>
                        </div>
                         <div class="form-group col-md-10">
                        	<h3><strong>Socio Religious Attributes</strong></h3><br>
                        	<font color="#A50050"><b>Astrological information</b></font>
                        	<p>You may not believe in horoscope matching, yet we recommend that you fill in your Astrological details as many members would be interested in these details. You can create your horoscope free of charge in here</p>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                           		<input name="txtGothra" placeholder="Gothra(m)" id="txtGothra" size="49" maxlength="40" onKeyUp="nospaces(this)" type="text" class="form-control" style="width:60%"/>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <select name="txtStar" class="form-control" id="txtStar" style="width:60%;">
                              	<option>Star (Nakshatra)</option>
                        <option value="Does not matter">Does not matter</option>
                        <option value="Ashwini (ASHWATHY)">Ashwini (ASHWATHY)</option>
                        <option value="BHARANI">BHARANI</option>
                        <option value="Krittika (KARTHIKA)">Krittika (KARTHIKA)</option>
                        <option value="ROHINI">ROHINI</option>
                        <option value="Mrigashira (MAKAYIRAM)">Mrigashira (MAKAYIRAM)</option>
                        <option value="Ardra (THIRUVATHIRA)">Ardra (THIRUVATHIRA)</option>
                        <option value="Punarvasu (PUNARTHAM)">Punarvasu (PUNARTHAM)</option>
                        <option value="Pushya (POOYAM)">Pushya (POOYAM)</option>
                        <option value="Ashlesha (AYILYAM)">Ashlesha (AYILYAM)</option>
                        <option value="Makha (MAKAM)">Makha (MAKAM)</option>
                        <option value="Purva Phalguni (POORAM)">Purva Phalguni (POORAM)</option>
                        <option value="Uttara Phalguni (UTRAM)">Uttara Phalguni (UTRAM)</option>
                        <option value="Hasta (ATHAM)">Hasta (ATHAM)</option>
                        <option value="Chitra (CHITHIRA)">Chitra (CHITHIRA)</option>
                        <option value="Swati (CHOTHY)">Swati (CHOTHY)</option>
                        <option value="Vishaka (VISHAKAM)">Vishaka (VISHAKAM)</option>
                        <option value="Anuradha (ANIZHAM)">Anuradha (ANIZHAM)</option>
                        <option value="Jyeshta (TRIKETTA)">Jyeshta (TRIKETTA)</option>
                        <option value="Mula (MOOLAM)">Mula (MOOLAM)</option>
                        <option value="Purva Ashada (POORADAM)">Purva Ashada (POORADAM)</option>
                        <option value="Uttara Ashada (UTTARADAM)">Uttara Ashada (UTTARADAM)</option>
						<option value="Shravana (THIRUVONAM)">Shravana (THIRUVONAM)</option>
						<option value="Dhanista (AVITTAM)">Dhanista (AVITTAM)</option>
						<option value="Sathabhisha (CHATAYAM)">Sathabhisha (CHATAYAM)</option>
						<option value="Purva Bhadrapada (PURURUTTATHY)">Purva Bhadrapada (PURURUTTATHY)</option>
						<option value="Uttara Bhadrapada (UTHRITTATHY)">Uttara Bhadrapada (UTHRITTATHY)</option>
						<option value="Revati (REVATHI)">Revati (REVATHI)</option>
                     </select>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                        <select name="txtMoon" class="form-control" id="txtMoon" style="width:60%;">
                        	<option>Moon Sign / Sun Sign</option>
                        <option value="Does not matter">Does not matter</option>
                        <option value="Mesha (Medam) / Aries">Mesha (Medam) / Aries</option>
                        <option value="Vrishaba (Edavam) / Taurus">Vrishaba (Edavam) / Taurus</option>
                        <option value="Mithuna (Mithunam) / Gemini">Mithuna (Mithunam) / Gemini</option>
                        <option value="Karkata (Karkatam) / Cancer">Karkata (Karkatam) / Cancer</option>
                        <option value="Simha (Chingam) / Leo">Simha (Chingam) / Leo</option>
                        <option value="Kanya (Kanni) / Virgo">Kanya (Kanni) / Virgo</option>
                        <option value="Thula (Thulam) / Libra">Thula (Thulam) / Libra</option>
                        <option value="Vrichika (Vrichikam) / Scorpio">Vrichika (Vrichikam) / Scorpio</option>
                        <option value="Dhanu / Sagittarius">Dhanu / Sagittarius</option>
                        <option value="Makara  (Makaram)/ Capricorn">Makara  (Makaram)/ Capricorn</option>
                        <option value="Kumbha (Kumbham) / Aquarius">Kumbha (Kumbham) / Aquarius</option>
                        <option value="Meena (Meenam) / Pisces">Meena (Meenam) / Pisces</option>
                      	</select>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-2">
                           	<label>Manglik</label>
                           </div>
                           <div class="col-md-8">          
             <input name="txtManglik" onClick="return HaveChildnp(this)" value="No" type="radio" />No&nbsp;
	         <input name="txtManglik" onClick="return HaveChildnp(this)" value="Yes" type="radio" />Yes&nbsp;
             <input name="txtManglik" onClick="return HaveChildnp(this)" value="Do not know" type="radio" />Do not know &nbsp;
             <input name="txtManglik" onClick="return HaveChildnp(this)" value="Not applicable"  type="radio" />Not applicable 
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">                            
				  				<select style="width: 60%;" onChange="show_div(this.value);" name="need_horoscope_match" class="form-control">
									<option value="0">Select Horoscope Match </option>
									<option value="Required">Required</option>
									<option value="Not Required">Not Required</option>
									<option value="Does not Matter">Does not Matter</option>
								</select>  
							</div>
                        </div>
                        <div class="form-group col-md-12">
                        	<h3><strong>Education and Occupation</strong></h3><br>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">                	
                     	 	<select name="txtEdu" class="form-control" id="txtEdu" style="width:60%;">
                     	 		<option>Education</option>
		                     <option value="" selected>Any</option>
							<option value="Not Important">Not Important</option>
							<option value="No education">No education</option>
							<option value="High School">High School</option>
 							<option value="Bachelors Degree: Engg., Comp., Arch.,">Bachelors Degree: Engg., Comp., Arch.,</option>
							<option value="Masters Degree: Engg., Comp., Arch.,">Masters Degree: Engg., Comp., Arch.,</option>
							<option value="Bachelors Degree: Medicine & Surgery, Dentistry">Bachelors Degree: Medicine & Surgery, Dentistry</option>
							<option value="Masters Degree: Medicine & Surgery, Dentistry">Masters Degree: Medicine & Surgery, Dentistry</option>
	 						<option value="Bachelors Degree: Nursing">Bachelors Degree: Nursing</option>
	 						<option value="Masters Degree: Nursing">Masters Degree: Nursing</option>

 
						<option value="Bachelors Degree: Law">Bachelors Degree: Law</option>

 

						<option value="Master�s Degree: Law">Masters Degree: Law</option>


						<option value="Bachelors Degree: Arts, Science, Commerce">Bachelors Degree: Arts, Science, Commerce</option>

 
						<option value="Masters Degree: Arts, Science, Commerce">Masters Degree: Arts, Science, Commerce</option>

 
						<option value="Bachelors Degree: Management">Bachelors Degree: Management</option>

 
						<option value="Masters Degree: Management">Masters Degree: Management</option>

 

			<option value="Doctorate PhD">Doctorate PhD</option>

 
						<option value="Accounting & Fin.: CA, ICWAI">Accounting & Fin.: CA, ICWAI</option>


 
						<option value="Indian Civil Service: IAS, IFoS, IPS, IRS">Indian Civil Service: IAS, IFoS, IPS, IRS</option>

 
				<option value="Vocational">Vocational</option>
 
						<option value="Diploma">Diploma</option>

 
						<option value="Other">Other</option>
                      </select>

 

                           </div>
                        </div>
                        <div class="form-group">
                          
                           <div class="col-md-10">
                             <select name="txtEdudetails" class="form-control" id="txtEdudetails" style="width:60%;">







                        <option value="Select" selected>Select Edu Details</option>







                        <option value="Advertising/ Marketing">Advertising/ Marketing</option>







                        <option value="Administrative services">Administrative services</option>







                        <option value="Architecture">Architecture</option>







                        <option value="Armed Forces">Armed Forces</option>







                        <option value="Arts">Arts</option>







                        <option value="Commerce">Commerce</option>







                        <option value="Computers/ IT">Computers/ IT</option>







						  <option value="Dentistry">Dentistry</option>







                        <option value="Education">Education</option>







                        <option value="Engineering/ Technology">Engineering/ Technology</option>







                        <option value="Fashion">Fashion</option>







                        <option value="Finance">Finance</option>







                        <option value="Fine Arts">Fine Arts</option>







                        <option value="Home Science">Home Science</option>







                        <option value="Journalism/Media">Journalism/Media</option>







                        <option value="Law">Law</option>







                        <option value="Management">Management</option>







                        <option value="Medicine">Medicine</option>







                        <option value="Nursing/ Health Sciences">Nursing/ Health Sciences</option>







                        <option value="Office administration">Office administration</option>







                        <option value="Science">Science</option>







                        <option value="Shipping">Shipping</option>







                        <option value="Travel &amp; Tourism">Travel &amp; Tourism</option>
                      </select>

                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                           		<select name="txtIncome" class="form-control" id="txtIncome" style="width:60%;" onFocus="showToolTip1(event,'Money is one of the key deciding factors in any marriage for being the source that brings all possible and worldly joy and happiness. So, be honest while selecting your income.');return true" 

					  onblur="hideToolTip1()"  \>







                        <option value="" selected="selected">[Select Annual Income Range]</option>







                        <optgroup label=""></optgroup>







                        <optgroup label="Income in Indian Rupees">

						<option value="Prefer not to say">Prefer not to say</option>







                        <option value="Under   MYR.50,000">Under   MYR.50,000</option>







                        <option value="MYR.50,001 - 1,00,000">MYR.50,001 - 1,00,000</option>







                        <option value="MYR.1,00,001 - 2,00,000">MYR.1,00,001 - 2,00,000</option>







                        <option value="MYR.2,00,001 -   3,00,000">MYR.2,00,001 -   3,00,000</option>







                        <option value="MYR.3,00,001 - 4,00,000">MYR.3,00,001 - 4,00,000</option>







                        <option value="MYR.4,00,001 - 5,00,000">MYR.4,00,001 - 5,00,000</option>







                        <option value="MYR.5,00,001 -   7,50,000">MYR.5,00,001 -   7,50,000</option>







                        <option value="MYR.7,50,001 - 10,00,000">MYR.7,50,001 - 10,00,000</option>







                        <option value="MYR.10,00,001 and above">MYR.10,00,001 and above</option>
                        </optgroup>







                        <optgroup label=""></optgroup>







                        <optgroup label="Income in US Dollars">





                        <option value="Prefer not to say">Prefer not to say</option>

                        <option value="Under $25,000">Under $25,000</option>







                        <option value="$25,001 - 50,000">$25,001 - 50,000</option>







                        <option value="$50,001 - 75,000">$50,001 - 75,000</option>







                        <option value="$75,001 - 100,000">$75,001 - 100,000</option>







                        <option value="$100,001 - 150,000">$100,001 - 150,000</option>







                        <option value="$150,001 -   200,000">$150,001 -   200,000</option>







                        <option value="$200,001 and above">$200,001 and above</option>
                        </optgroup>







                        <optgroup label=""></optgroup>







                        <option value="No Income">No Income</option>
                      </select>
                   
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                             <select name="txtOccu" class="form-control" id="txtOccu" style="width:60%;">







                        <option value="" selected>- Select Occupation -</option>







                        <option value="Not working">Not working</option>







                        <option value="Non-mainstream professional">Non-mainstream professional</option>







                        <option value="Accountant">Accountant</option>







                        <option value="Acting Professional">Acting Professional</option>







                        <option value="Actor">Actor</option>







                        <option value="Administration Professional">Administration Professional</option>







                        <option value="Advertising Professional">Advertising Professional</option>







                        <option value="Air Hostess">Air Hostess</option>







                        <option value="Architect">Architect</option>







                        <option value="Artisan">Artisan</option>







                        <option value="Audiologist">Audiologist</option>







                        <option value="Banker">Banker</option>







                        <option value="Beautician">Beautician</option>







                        <option value="Biologist / Botanist">Biologist / Botanist</option>







                        <option value="Business Person">Business Person</option>







                        <option value="Chartered Accountant">Chartered Accountant</option>







                        <option value="Civil Engineer">Civil Engineer</option>







                        <option value="Clerical Official">Clerical Official</option>







                        <option value="Commercial Pilot">Commercial Pilot</option>







                        <option value="Company Secretary">Company Secretary</option>







                        <option value="Computer Professional">Computer Professional</option>







                        <option value="Consultant">Consultant</option>







                        <option value="Contractor">Contractor</option>







                        <option value="Cost Accountant">Cost Accountant</option>







                        <option value="Creative Person">Creative Person</option>







                        <option value="Customer Support Professional">Customer Support Professional</option>







                        <option value="Defense Employee">Defense Employee</option>







                        <option value="Dentist">Dentist</option>







                        <option value="Designer">Designer</option>







                        <option value="Doctor">Doctor</option>







                        <option value="Economist">Economist</option>







                        <option value="Engineer">Engineer</option>







                        <option value="Engineer (Mechanical)">Engineer (Mechanical)</option>







                        <option value="Engineer (Project)">Engineer (Project)</option>







                        <option value="Entertainment Professional">Entertainment Professional</option>







                        <option value="Event Manager">Event Manager</option>







                        <option value="Executive">Executive</option>







                        <option value="Factory worker">Factory worker</option>







                        <option value="Farmer">Farmer</option>







                        <option value="Fashion Designer">Fashion Designer</option>







                        <option value="Finance Professional">Finance Professional</option>







                        <option value="Flight Attendant">Flight Attendant</option>







                        <option value="Government Employee">Government Employee</option>







                        <option value="Health Care Professional">Health Care Professional</option>







                        <option value="Home Maker">Home Maker</option>







                        <option value="Hotel & Restaurant Professional">Hotel & Restaurant Professional</option>







                        <option value="Human Resources Professional">Human Resources Professional</option>







                        <option value="Interior Designer">Interior Designer</option>







                        <option value="Investment Professional">Investment Professional</option>







                        <option value="IT / Telecom Professional">IT / Telecom Professional</option>







                        <option value="Journalist">Journalist</option>







                        <option value="Lawyer">Lawyer</option>







                        <option value="Lecturer">Lecturer</option>







                        <option value="Legal Professional">Legal Professional</option>







                        <option value="Manager">Manager</option>







                        <option value="Marketing Professional">Marketing Professional</option>







                        <option value="Media Professional">Media Professional</option>







                        <option value="Medical Professional">Medical Professional</option>







                        <option value="Medical Transcriptionist">Medical Transcriptionist</option>







                        <option value="Merchant Naval Officer">Merchant Naval Officer</option>







                        <option value="Nurse">Nurse</option>







                        <option value="Occupational Therapist">Occupational Therapist</option>







                        <option value="Optician">Optician</option>







                        <option value="Pharmacist">Pharmacist</option>







                        <option value="Physician Assistant">Physician Assistant</option>







                        <option value="Physicist">Physicist</option>







                        <option value="Physiotherapist">Physiotherapist</option>







                        <option value="Pilot">Pilot</option>







                        <option value="Politician">Politician</option>







                        <option value="Production professional">Production professional</option>







                        <option value="Professor">Professor</option>







                        <option value="Psychologist">Psychologist</option>







                        <option value="Public Relations Professional">Public Relations Professional</option>







                        <option value="Real Estate Professional">Real Estate Professional</option>







                        <option value="Research Scholar">Research Scholar</option>







                        <option value="Retired Person">Retired Person</option>







                        <option value="Retail Professional">Retail Professional</option>







                        <option value="Sales Professional">Sales Professional</option>







                        <option value="Scientist">Scientist</option>







                        <option value="Self-employed Person">Self-employed Person</option>







                        <option value="Social Worker">Social Worker</option>







                        <option value="Software Consultant">Software Consultant</option>







                        <option value="Sportsman">Sportsman</option>







                        <option value="Student">Student</option>







                        <option value="Teacher">Teacher</option>







                        <option value="Technician">Technician</option>







                        <option value="Training Professional">Training Professional</option>







                        <option value="Transportation Professional">Transportation Professional</option>







                        <option value="Veterinary Doctor">Veterinary Doctor</option>







                        <option value="Volunteer">Volunteer</option>







                        <option value="Writer">Writer</option>







                        <option value="Zoologist">Zoologist</option>
                      </select>








                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <select name="txtEmp" class="form-control" id="txtEmp" style="width:60%;">







                        <option value="" selected>- Employed in -</option>







                        <option value="Business">Business</option>







                        <option value="Defence">Defence</option>







                        <option value="Government">Government</option>







                        <option value="Not Employed in">Not Employed in</option>







                        <option value="Private">Private</option>







                        <option value="Others">Others</option>
                      </select>
                      	  </div>
                        </div>
                        <div class="form-group col-md-12">
                           <h3><strong> Physical attributes </strong></h3>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                               <select name="txtHeight1" class="form-control" id="txtHeight1" style="width:60%;">
                          <option value="" selected>- Select Height -</option>
						  <option value="1">4ft - 121 cm</option>
						  <option value="2">4ft 1in - 124cm</option>
						  <option value="3">4ft 2in - 127cm</option>
						  <option value="4">4ft 3in - 129cm</option>
						  <option value="5">4ft 4in - 132cm</option>
						  <option value="6">4ft 5in - 134cm</option>
						  <option value="7">4ft 6in - 137cm</option>
						  <option value="8">4ft 7in - 139cm</option>
						  <option value="9">4ft 8in - 142cm</option>
						  <option value="10">4ft 9in - 144cm</option>
						  <option value="11">4ft 10in - 147cm</option>
						  <option value="12">4ft 11in - 149cm</option>
						  <option value="13">5ft - 152cm</option>
						  <option value="14">5ft 1in - 154cm</option>
						  <option value="15">5ft 2in - 157cm</option>
						  <option value="16">5ft 3in - 160cm</option>
						  <option value="17">5ft 4in - 162cm</option>
						  <option value="18">5ft 5in - 165cm</option>
						  <option value="19">5ft 6in - 167cm</option>
						  <option value="20">5ft 7in - 170cm</option>
						  <option value="21">5ft 8in - 172cm</option>
						  <option value="22">5ft 9in - 175cm</option>
						  <option value="23">5ft 10in - 177cm</option>
						  <option value="24">5ft 11in - 180cm</option>
						  <option value="25">6ft - 182cm</option>
						  <option value="26">6ft 1in - 185cm</option>
						  <option value="27">6ft 2in - 187cm</option>
						  <option value="28">6ft 3in - 190cm</option>
						  <option value="29">6ft 4in - 193cm</option>
						  <option value="30">6ft 5in - 195cm</option>
						  <option value="31">6ft 6in - 198cm</option>
						  <option value="32">6ft 7in - 200cm</option>
						  <option value="33">6ft 8in - 203cm</option>
						  <option value="34">6ft 9in - 205cm</option>
						  <option value="35">6ft 10in - 208cm</option>
						  <option value="36">6ft 11in - 210cm</option>
						  <option value="37">7ft - 213cm</option>
                      </select>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                               <select name="txtWeight" class="form-control" id="txtWeight" style="width:60%;">







                        <option value="0" selected="selected">- Select Weight -</option>







                        <option value="41 kg">41 kg</option>







                        <option value="42 kg">42 kg</option>







                        <option value="43 kg">43 kg</option>







                        <option value="44 kg">44 kg</option>







                        <option value="45 kg">45 kg</option>







                        <option value="46 kg">46 kg</option>







                        <option value="47 kg">47 kg</option>







                        <option value="48 kg">48 kg</option>







                        <option value="49 kg">49 kg</option>







                        <option value="50 kg">50 kg</option>







                        <option value="51 kg">51 kg</option>







                        <option value="52 kg">52 kg</option>







                        <option value="53 kg">53 kg</option>







                        <option value="54 kg">54 kg</option>







                        <option value="55 kg">55 kg</option>







                        <option value="56 kg">56 kg</option>







                        <option value="57 kg">57 kg</option>







                        <option value="58 kg">58 kg</option>







                        <option value="59 kg">59 kg</option>







                        <option value="60 kg">60 kg</option>







                        <option value="61 kg">61 kg</option>







                        <option value="62 kg">62 kg</option>







                        <option value="63 kg">63 kg</option>







                        <option value="64 kg">64 kg</option>







                        <option value="65 kg">65 kg</option>







                        <option value="66 kg">66 kg</option>







                        <option value="67 kg">67 kg</option>







                        <option value="68 kg">68 kg</option>







                        <option value="69 kg">69 kg</option>







                        <option value="70 kg">70 kg</option>







                        <option value="71 kg">71 kg</option>







                        <option value="72 kg">72 kg</option>







                        <option value="73 kg">73 kg</option>







                        <option value="74 kg">74 kg</option>







                        <option value="75 kg">75 kg</option>







                        <option value="76 kg">76 kg</option>







                        <option value="77 kg">77 kg</option>







                        <option value="78 kg">78 kg</option>







                        <option value="79 kg">79 kg</option>







                        <option value="80 kg">80 kg</option>







                        <option value="81 kg">81 kg</option>







                        <option value="82 kg">82 kg</option>







                        <option value="83 kg">83 kg</option>







                        <option value="84 kg">84 kg</option>







                        <option value="85 kg">85 kg</option>







                        <option value="86 kg">86 kg</option>







                        <option value="87 kg">87 kg</option>







                        <option value="88 kg">88 kg</option>







                        <option value="89 kg">89 kg</option>







                        <option value="90 kg">90 kg</option>







                        <option value="91 kg">91 kg</option>







                        <option value="92 kg">92 kg</option>







                        <option value="93 kg">93 kg</option>







                        <option value="94 kg">94 kg</option>







                        <option value="95 kg">95 kg</option>







                        <option value="96 kg">96 kg</option>







                        <option value="97 kg">97 kg</option>







                        <option value="98 kg">98 kg</option>







                        <option value="99 kg">99 kg</option>







                        <option value="100 kg">100 kg</option>







                        <option value="101 kg">101 kg</option>







                        <option value="102 kg">102 kg</option>







                        <option value="103 kg">103 kg</option>







                        <option value="104 kg">104 kg</option>







                        <option value="105 kg">105 kg</option>







                        <option value="106 kg">106 kg</option>







                        <option value="107 kg">107 kg</option>







                        <option value="108 kg">108 kg</option>







                        <option value="109 kg">109 kg</option>







                        <option value="110 kg">110 kg</option>







                        <option value="111 kg">111 kg</option>







                        <option value="112 kg">112 kg</option>







                        <option value="113 kg">113 kg</option>







                        <option value="114 kg">114 kg</option>







                        <option value="115 kg">115 kg</option>







                        <option value="116 kg">116 kg</option>







                        <option value="117 kg">117 kg</option>







                        <option value="118 kg">118 kg</option>







                        <option value="119 kg">119 kg</option>







                        <option value="120 kg">120 kg</option>







                        <option value="121 kg">121 kg</option>







                        <option value="122 kg">122 kg</option>







                        <option value="123 kg">123 kg</option>







                        <option value="124 kg">124 kg</option>







                        <option value="125 kg">125 kg</option>







                        <option value="126 kg">126 kg</option>







                        <option value="127 kg">127 kg</option>







                        <option value="128 kg">128 kg</option>







                        <option value="129 kg">129 kg</option>







                        <option value="130 kg">139 kg</option>







                        <option value="132 kg">130 kg</option>







                        <option value="131 kg">131 kg</option>







                        <option value="132 kg">132 kg</option>







                        <option value="133 kg">133 kg</option>







                        <option value="134 kg">134 kg</option>







                        <option value="135 kg">135 kg</option>







                        <option value="136 kg">136 kg</option>







                        <option value="137 kg">137 kg</option>







                        <option value="138 kg">138 kg</option>







                        <option value="139 kg">139 kg</option>







                        <option value="140 kg">140 kg</option>
                      </select>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <select  name="txtBlood" class="form-control" id="txtBlood" style="width:60%;">







                        <option value="" selected>- Select Blood Group -</option>







                        <option>A+</option>







                        <option>A-</option>







                        <option>A1 +</option>







                        <option>A1 -</option>







                        <option>A1B +</option>







                        <option>A1B -</option>







                        <option>A2 +</option>







                        <option>A2 -</option>







                        <option>A2B +</option>







                        <option>A2B -</option>







                        <option>AB+</option>







                        <option>AB-</option>







                        <option>B+</option>







                        <option>B-</option>







                        <option>O+</option>
                      </select>
                           </div>
                        </div>
                        
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <select name="txtComplexion" class="form-control" id="txtComplexion" style="width:60%;">







                        <option value="" selected>- Select Complexion -</option>











                        <option value="Very Fair">Very Fair</option>







                        <option value="Fair">Fair</option>







                        <option value="Wheatish">Wheatish</option>







                        <option value="Wheatish Medium">Wheatish Medium</option>







                        <option value="Wheatish Brown">Wheatish Brown</option>







                        <option value="Dark">Dark</option>
                      </select>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <select name="txtBody" class="form-control" id="txtComplexion" style="width:60%;">







                        <option value="" selected>- Select Appearance -</option>







                        <option value="Not important">Not important</option>







                        <option value="Attractive">Attractive</option>







                        <option value="Big and beautiful">Big and beautiful</option>







                        <option value="Short">Short</option>







						<option value="Slim">Slim</option>







						<option value="Tall">Tall</option>







						<option value="Athletic">Athletic</option>







						<option value="Voluptuous">Voluptuous</option>
                      </select>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                             <select name="txtHabbits[]" class="form-control" id="txtHabbits" style="width:60%;" multiple="multiple">







					   <option value="" selected>- Select Habits -</option>







                        <option value="Not Important">Not Important</option>







                        <option value="Non-drinker">Non-drinker</option>







                        <option value="Occasional drinker">Occasional drinker</option>







                        <option value="Enjoy drinking">Enjoy drinking</option>







                        <option value="Drink to excess">Drink to excess</option>



<option value="Non-smoker">Non-smoker</option>







						<option value="Quitting smoking">Quitting smoking</option>







						<option value="Smoke occasionally">Smoke occasionally</option>







						<option value="Smoke frequently">Smoke frequently</option>
                      </select>

                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <select style="width:60%;" id="txtDiet" class="form-control" name="txtDiet">

                              	<option>Diet</option>

                                <option value="Veg">Veg</option>

                                <option value="Eggetarian">Eggetarian</option>

                                <option value="Occasionally Non-Veg">Occasionally Non-Veg</option>

                                <option value="Non-Veg">Non-Veg</option>

                                <option value="Jain">Jain</option>

                                <option value="Vegan">Vegan</option>

                              </select>
                           </div>
                        </div>
                 

                <!--<tr class="hline2">

                  <td><div align="left">Smoke</div></td>


                  <td><div align="left">

                      <input name="txtSmoke" type="radio" value="No" checked>







                      No &nbsp;







                      <input name="txtSmoke" type="radio" value="Yes">







                      Yes &nbsp;







                      <input name="txtSmoke" type="radio" value="Occasionally">







                      Occasionally</div></td>







                </tr>-->







                <!--<tr class="hline2">







                  <td><div align="left">Drink</div></td>







                  <td><div align="left">







                      <input name="txtDrink" type="radio" value="No" checked>







                      No &nbsp;







                      <input name="txtDrink" type="radio" value="Yes">







                      Yes &nbsp;







                      <input name="txtDrink" type="radio" value="Occasionally">







                      Occasionally</div></td>







                </tr>-->


 



                
				
				<div style=" background:#FCECD6; padding:10px; line-height:25px; display:none;">
				   <h3 style="font-weight:bold;">Mobile Verification</h3>
				   <p style="color:#A50050; text-align:center; font-weight:bold;">Registrant/Member receives notification on their mobile as follows: </p>

<p style="color:#A50050; text-align:center; font-weight:bold;">Verify your mobile number now to activate your profile</p>

<p>If delayed for Verification, another notification goes as follows:</p>

					<p style="color:red;">It is mandatory that you verify your mobile number else your profile will not be displayed to other members.</p>
					<p>Verify through SMS</p>
					<p>An SMS with verification PIN has been sent to </p>
					
					
					
					<div class="inlineEdit"><span class="clsValue" ><?php echo $_SESSION['mobile']; ?> </span>- <a href="javascript:;" class="clsEdit" id="clsEdit">Edit Number</a></div>
					<div id="response"></div>
					<input type="hidden" name="lastid" id="lastid" value="<?php echo $_SESSION['lastid']; ?>" />
					<input type="text" name="mobile_pin" value="" id="mobile_pin" /><a href="javascript:;" class="clsCheckPin" >[SUBMIT]</a>
					<p>You will receive the SMS within a few seconds.</p>
					<p>If not, <a href="javascript:;" class="clsResend" >Click here to resend PIN</a></p>
					<p>Once your Mobile number is verified, <a href="search_page.php">Click here</a> to start your partner search.</p>
				</div>
				
				<script type="text/javascript">

$(document).ready(function () {

	$(".clsResend").live("click", function () {
        var id   = "<?php echo $_SESSION['lastid']; ?>";
        var data = '?id=' + id + '&user_id=' + id ;
        //alert(data);
        $.post("resend.php", data, function (response) {
		  //alert(response);
		  $("#response").html(response);
		  $("#response").slideDown('slow');
          slideout();
          $("#loading").fadeOut('slow'); 
        });

        $(this).parent().html(NewText).removeClass("selected").bind("click", updateText);

    });


    $(".clsCheckPin").live("click", function () {
        var id   = "<?php echo $_SESSION['lastid']; ?>";
		var mobile_pin  = $('#mobile_pin').val();
        var data = '?id=' + id + '&user_id=' + id + '&mobile_pin=' + mobile_pin;
        //alert(data);
        $.post("checkpin.php", data, function (response) {
		  //alert(response);
		  $("#response").html(response);
		  $("#response").slideDown('slow');
          slideout();
          $("#loading").fadeOut('slow'); 
        });

        $(this).parent().html(NewText).removeClass("selected").bind("click", updateText);

    });


    function slideout() {
        setTimeout(function () {
            $("#response").slideUp("slow", function () {});
        },
        300000);
    }

    $(".clsEdit").bind("click", updateText);

    var OrigText, NewText;

    $(".save").live("click", function () {

        $("#loading").fadeIn('slow');

        NewText  = $(this).siblings("form").children(".edit").val();
        var id   = "<?php echo $_SESSION['lastid']; ?>";
        var data = '?id=' + id + '&user_id=' + id + '&text=' + NewText;
        //alert(data);
        $.post("update.php", data, function (response) {
            //$("#response").html(response);
           // $("#response").slideDown('slow');
            //slideout();
            //$("#loading").fadeOut('slow'); 

        });

        $(this).parent().html(NewText).removeClass("selected").bind("click", updateText);

    });

    $(".revert").live("click", function () {
        $('.inlineEdit').parent().html(OrigText).removeClass("selected").bind("click", updateText);
    });



    function updateText() {

        $('li').removeClass("inlineEdit");
        OrigText = $('.clsValue').val();
        $('.inlineEdit').addClass("selected").html('<form ><input type="text" class="edit" value="' + OrigText + '" ></form><a href="#" class="save"><img src="images/save.png" border="0" width="48" height="15"/></a> <a href="#" class="revert"></a>').unbind('click', updateText);

    }
});
</script>
				<style>

.inlineEdit:hover {
	background-image:url(images/edit.png);
	background-repeat:no-repeat;
	background-position:right;
	cursor:pointer;
}

.save, .btnCancel {
	margin:0px 0px 0 5px;
}
#response {
	display:none;
	padding:10px;
	margin-bottom:20px;
}
#loading {
	display:none;
}
</style>
				
				<script type="text/javascript">
				 function changeMobile()
				  {
				  }
				 function validatePin()
				  {
				    mobile_pin  = $('#mobile_pin').val();
					if(mobile_pin == '')
					 {
					  alert('Enter Pin to validate to your mobile.');
					 }  
				  }
				 function resendPin()
				  {
				  }  
				</script>

				
				







                  <div align="center">







                      <div align="center">







                        <input name="h1" type="hidden" id="h1" value="<?php $_SESSION['Name'];?>">







                        <!-- <a href="#" class="button-small square-orange uppercase float_right" style="float:none; clear:both; margin:5px auto;"><span></span> Continue </a>--><span class=" span"></span>







<!--<input  onclick="javascript:go_link()"class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="button" type="image" value="Previous" alt="Previous">-->



    



	<input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Save & Continue" alt="Save & Continue">
                      </div>







                    </div>
                
          







          </form>







        </div>









      <!--   <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div> -->







      </div>







      <br />







      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 







    </div>







  </div>







  <!-- CONTENT AREA ENDS HERE ###################################################  --> 







  







  <!-- FOOTER STARTS HERE ###################################################  -->







  







  <!-- FOOTER ENDS HERE ###################################################  --> 







  





<?php include("include/footermenu.php") ?>

</div>







</body>







</html>



<script>

function showToolTip(e,text){

	if(document.all)e = event;

	

	var obj = document.getElementById('bubble_tooltip');

	var obj2 = document.getElementById('bubble_tooltip_content');

	obj2.innerHTML = text;

	obj.style.display = 'block';

	var st = Math.max(document.body.scrollTop,document.documentElement.scrollTop);

	if(navigator.userAgent.toLowerCase().indexOf('safari')>=0)st=0; 

	var leftPos = e.clientX - 100;

	if(leftPos<0)leftPos = 0;

	obj.style.left = leftPos + 'px';

	obj.style.top = e.clientY - obj.offsetHeight -1 + st + 'px';

}	

function showToolTip1(e,text){

	if(document.all)e = event;

	

	var obj = document.getElementById('bubble_tooltip1');

	var obj2 = document.getElementById('bubble_tooltip_content1');

	obj2.innerHTML = text;

	obj.style.display = 'block';

	var st = Math.max(document.body.scrollTop,document.documentElement.scrollTop);

	if(navigator.userAgent.toLowerCase().indexOf('safari')>=0)st=0; 

	var leftPos = e.clientX - 100;

	if(leftPos<0)leftPos = 0;

	obj.style.left = leftPos + 'px';

	obj.style.top = e.clientY - obj.offsetHeight -1 + st + 'px';

}	

function hideToolTip()

{

	document.getElementById('bubble_tooltip').style.display = 'none';

	

}function hideToolTip1()

{

	document.getElementById('bubble_tooltip1').style.display = 'none';

	

}

</script>






<script>





function get_state(country) {

document.getElementById('state_aj').innerHTML='<img src="loading.gif" >';

$.post(encodeURI('get_state.php?country='+country),'', function(data) {

if(data!=''){
 //alert(data);
 document.getElementById('state_aj').innerHTML=data;

return false;



}







});





}







function get_city(state) {

document.getElementById('city_aj').innerHTML='<img src="loading.gif" >';

$.post(encodeURI('get_city.php?state='+state),'', function(data) {



if(data!=''){

 document.getElementById('city_aj').innerHTML=data;

return false;



}







});





}



</script>