<?php session_start(); 
error_reporting(0);































	







	// Education and Occupation 







	$_SESSION['Education']= strip_tags($_POST['txtEdu']);







	$_SESSION['EduDetails']= strip_tags($_POST['txtEdudetails']);







	$_SESSION['Annualincome']= strip_tags($_POST['txtIncome']); 







	$_SESSION['Occupation']= strip_tags($_POST['txtOccu']); 







	$_SESSION['Employedin']= strip_tags($_POST['txtEmp']);







	







	//Physical Attributes







	$_SESSION['Height']= strip_tags($_POST['txtHeight1']); 







	$_SESSION['Weight']= strip_tags($_POST['txtWeight']); 







	$_SESSION['BloodGroup']= strip_tags($_POST['txtBlood']); 







	$_SESSION['Bodytype']= strip_tags($_POST['txtBody']); 







	$_SESSION['Complexion']= strip_tags($_POST['txtComplexion']);







	$_SESSION['Diet']= strip_tags($_POST['txtDiet']);



$_SESSION['txtHabbits']= implode(",",$_POST['txtHabbits']);



	$_SESSION['Smoke']= strip_tags($_POST['txtSmoke']);







	$_SESSION['Drink']= strip_tags($_POST['txtDrink']);







	







	// Contact Details 







	$_SESSION['Address']= strip_tags($_POST['txtAddress']);







	$_SESSION['City']= strip_tags($_POST['select_city']); 







	$_SESSION['State']= strip_tags($_POST['select_state']); 







	$_SESSION['Country']= strip_tags($_POST['select_country']);







   $_SESSION['Code']= strip_tags($_POST['txtCC']);







   $_SESSION['Areacode']= strip_tags($_POST['txtAC']);







 







	$sCC = strip_tags($_POST['txtCC']);







	$sAC = strip_tags($_POST['txtAC']);







	$sPhone = strip_tags($_POST['txtPhone']);







	$ssep="-";







	$_SESSION['Phone']= $sCC.$ssep.$sAC.$ssep.$sPhone;







	$_SESSION['Mobile']= strip_tags($_POST['txtMobile']);







	$_SESSION['Residencein']= strip_tags($_POST['txtRes']);
	
	$_SESSION['txtGothra']= strip_tags($_POST['txtGothra']); 
	$_SESSION['txtStar']= strip_tags($_POST['txtStar']);  
	$_SESSION['txtMoon']= strip_tags($_POST['txtMoon']); 
	$_SESSION['txtManglik']= strip_tags($_POST['txtManglik']); 
	$_SESSION['txtManglik']= strip_tags($_POST['txtManglik']); 
	
	
	if(strip_tags($_POST['select1_state'])!='0' &&  strip_tags($_POST['select1_state'])!='')
	$state_val = strip_tags($_POST['select1_state']);
	if(strip_tags($_POST['select2_state'])!='0' &&  strip_tags($_POST['select2_state'])!='')
	$state_val = strip_tags($_POST['select2_state']);
	
	
	$_SESSION['place_of_birth']= strip_tags($_POST['select1_country'])."-".$state_val."-".strip_tags($_POST['select1_city']);  
	
	$_SESSION['time_of_birth']= "H:".strip_tags($_POST['hour_horo'])."-"."M:".strip_tags($_POST['minute_horo'])."-"."S:".strip_tags($_POST['second_horo']);
    $_SESSION['horo_match']= strip_tags($_POST['need_horoscope_match']); 
	
	
  //Dim StrIP As String = Request.ServerVariables("REMOTE_ADDR") 

  //	msg5.text = Request.ServerVariables("REMOTE_ADDR") 















?>







<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html40/loose.dtd">







<html>



<head>

<script>

function go_link(){



window.location = 'registration2.php';



}





</script>

<?Php include("include/innerheadersection.php"); ?>



<style type="text/css">



<!--



.style1 {



	font-size: 10px;



	color: #333333;



}



.style2 {



	color: #FF0000



}



.style3 {



	font-family: Verdana, Arial, Helvetica, sans-serif



}



.style4 {



	font-size: 13px;



	color: #ff0000;



}



.style5 {



	color: #000000;



	font-size: 11px;



}



-->



</style>



</head>



<script>







function smutEngine() {







smut="..";







cmp="sex babes shit fuck damn porno cum cunt prick pecker ass fucking xxx XXX yahoo msn rediff gmail hotmail sify rediffmail www http"







+"asshole pedophile man-boy man/boy dong twat";







txt=document.MatriForm.txtmsg.value;







tstx="";







for (var i=0;i<16;i++){







pos=cmp.indexOf(" ");







wrd=cmp.substring(0,pos);







wrdl=wrd.length







cmp=cmp.substring(pos+1,cmp.length);







while (txt.indexOf(wrd)>-1){







pos=txt.indexOf(wrd);







txt=txt.substring(0,pos)+smut.substring(0,wrdl)







+txt.substring((pos+wrdl),txt.length);







   }







}







document.MatriForm.txtmsg.value=txt;







}







// End -->







</script>



<script>







function stringFilter (input) {







s = input.value;







filteredValues = "1234567890@/#$%^&*()_-=|][}.,;:?'{!\><";     // Characters stripped out







var i;







var returnString = "";







for (i = 0; i < s.length; i++) {  // Search through string and append to unfiltered values to returnString.







var c = s.charAt(i);







if (filteredValues.indexOf(c) == -1) returnString += c;







}







input.value = returnString;







}







//  End -->







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























	







	function ResetValues()







	{







		var MatriForm = this.document.MatriForm;















		







		MatriForm.txtLooking.value = "";







		MatriForm.txtmsg = "";







		MatriForm.txtFD = "";







		MatriForm.txtPPE = "";







	







		return true;







	}















	







	







	







	// Function to validate all the inputs







	function Validate(  )







	{







		var MatriForm = this.document.MatriForm;







		







	







	







	// Check Looking Field







		







	







		// Check Profile







		if ( MatriForm.txtmsg.value == "" )







		{







			alert( "Please Enter your Profile" );	







			MatriForm.txtmsg.focus( );







			return false;







		}







		







		// Profile Min Chars 







		if ( MatriForm.txtmsg.value.length < 50 )







		{







			alert( "Profile must be atleast 50 chars." );	







			MatriForm.txtmsg.focus( );







			return false;







		}







		







		// Profile Max Chars







		if ( MatriForm.txtmsg.value.length > 1000 )







		{







			alert( "Please do not enter more than 1000 chars. Please shorten your Profile and submit again." );	







			MatriForm.txtmsg.focus( );







			return false;







		}







		















//var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";







var iChars = "!@#$%^&*()+=-[]\\\';/{}|\":<>?0123456789";















 /* for (var i = 0; i < MatriForm.txtmsg.value.length; i++) {







  	if (iChars.indexOf(MatriForm.txtmsg.value.charAt(i)) != -1) {







  	alert ("Special characters and numbers are not allowed in Profile.\n Please remove them.");







	MatriForm.txtmsg.focus( );







  	return false;







  	}*/







  }















		







		















		







		// Check Family Details







		if ( MatriForm.txtFD.value.length > 300 )







		{







			alert( "Please do not enter more than 300 chars. Please shorten your Family Details and submit again." );	







			MatriForm.txtFD.focus( );







			return false;







		}































/*var jChars = "!@#$%^&*()+=-[]\\\';/{}|\":<>?";















  for (var j = 0; j < MatriForm.txtFD.value.length; j++) {







  	if (jChars.indexOf(MatriForm.txtFD.value.charAt(j)) != -1) {







  	alert ("Special characters are not allowed in Family Details.\n Please remove them.");







	MatriForm.txtFD.focus( );







  	return false;







  	}*/







  }







  







  







  var kChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";















/*  for (var k = 0; k < MatriForm.txtFO.value.length; k++) {







  	if (kChars.indexOf(MatriForm.txtFO.value.charAt(k)) != -1) {







  	alert ("Special characters and numbers are not allowed in Family Origin.\n Please remove them.");







	MatriForm.txtFO.focus( );







  	return false;







  	}
*/






  }







  







  







  var lChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";















  for (var l = 0; l < MatriForm.txtFANAME.value.length; l++) {







  	if (lChars.indexOf(MatriForm.txtFANAME.value.charAt(l)) != -1) {







  	alert ("Special characters and numbers are not allowed in Father Name.\n Please remove them.");







	MatriForm.txtFANAME.focus( );







  	return false;







  	}







  }







  







  







   var mChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";















  for (var m = 0; m < MatriForm.txtFFO.value.length; m++) {







  	if (mChars.indexOf(MatriForm.txtFFO.value.charAt(m)) != -1) {







  	alert ("Special characters and numbers are not allowed in Father Occupation.\n Please remove them.");







	MatriForm.txtFFO.focus( );







  	return false;







  	}







  }







  







  







   var nChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

















  for (var n = 0; n < MatriForm.txtMONAME.value.length; n++) {







  	if (nChars.indexOf(MatriForm.txtMONAME.value.charAt(n)) != -1) {







  	alert ("Special characters and numbers are not allowed in Mother Name.\n Please remove them.");







	MatriForm.txtMONAME.focus( );







  	return false;







  	}







  }







  







   var oChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";















  for (var o = 0; o < MatriForm.txtFMO.value.length; o++) {







  	if (oChars.indexOf(MatriForm.txtFMO.value.charAt(o)) != -1) {







  	alert ("Special characters and numbers are not allowed in Mother Occupation.\n Please remove them.");







	MatriForm.txtFMO.focus( );







  	return false;







  	}







  }















































		







if ( !MatriForm.txtLooking[0].checked && !MatriForm.txtLooking[1].checked && !MatriForm.txtLooking[2].checked && !MatriForm.txtLooking[3].checked)







		{







			alert( "Please Select the Looking for." );







			MatriForm.txtLooking[0].focus( );







			return false;







		}







	















if ( MatriForm.Fromage.value == "" )







		{







			alert( "Please Enter your Expected From Age." );







			MatriForm.Fromage.focus( );







			return false;







		}































if(isNaN(document.MatriForm.Fromage.value)) 







		{ 







		 alert("Age should be only numbers."); 







		document.MatriForm.Fromage.focus();







		 return false; 







		}







		







		if(isNaN(document.MatriForm.Toage.value)) 







		{ 







		 alert("Age should be only numbers."); 







		document.MatriForm.Toage.focus();







		 return false; 







		}		















if(document.MatriForm.Fromage.value < 18 )







		{ 







		 alert("Age should be 18 And Above."); 







		 document.MatriForm.Fromage.focus();







		 return false; 







		}































if ( MatriForm.Toage.value == "" )







		{







			alert( "Please Enter your Expected To Age." );







			MatriForm.Toage.focus( );







			return false;







		}















		







		if(document.MatriForm.Toage.value < 18 )







		{ 







		 alert("Age should be 18 And Above."); 







		 document.MatriForm.Toage.focus();







		 return false; 







		}















		if(document.MatriForm.Toage.value < document.MatriForm.Fromage.value )







		{ 







		 alert("To Age field should be greater than From Age field."); 







		 document.MatriForm.Toage.focus();







		 return false; 







		}















































if ( MatriForm.religion.selectedIndex == 0 )







		{







			alert( "Please Select your Expected Religion." );	







			MatriForm.religion.focus( );







			return false;







		}























if ( MatriForm.caste.selectedIndex == 0 )







		{







			alert( "Please Select your Expected Caste." );	







			MatriForm.caste.focus( );







			return false;







		}







		







		// Check Partner Expectation details







		if ( MatriForm.txtPPE.value.length > 300 )







		{







			alert( "Please do not enter more than 300 chars. Please shorten your Partner Expectation and submit again." );	







			MatriForm.txtPPE.focus( );







			return false;







		}







































 var pChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";















  /*for (var p = 0; p < MatriForm.txtPPE.value.length; p++) {







  	if (pChars.indexOf(MatriForm.txtPPE.value.charAt(p)) != -1) {







  	alert ("Special characters and numbers are not allowed in Partner Preference.\n Please remove them.");







	MatriForm.txtPPE.focus( );







  	return false;







  	}







  }
*/






















var qChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";















  for (var q = 0; q < MatriForm.txtOh.value.length; q++) {







  	if (qChars.indexOf(MatriForm.txtOh.value.charAt(q)) != -1) {







  	alert ("Special characters and numbers are not allowed in Other Hobbies.\n Please remove them.");







	MatriForm.txtOh.focus( );







  	return false;







  	}







  }







  







  







  var rChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";















  for (var r = 0; r < MatriForm.txtOi.value.length; r++) {







  	if (rChars.indexOf(MatriForm.txtOi.value.charAt(r)) != -1) {







  	alert ("Special characters and numbers are not allowed in Other Interest.\n Please remove them.");







	MatriForm.txtOi.focus( );







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







	







//		MatriForm.txtEdu.value = "1"







		//MatriForm.txtAddress.value = ""







		//MatriForm.txtAddress.value = ""







	//	MatriForm.txtAddress.value = ""







		//MatriForm.txtAddress.value = ""







		////MatriForm.txtAddress.value = ""







	//	MatriForm.txtAddress.value = ""







		MatriForm.txtEdudetails.value = ""







		







		MatriForm.txtAddress.value = ""







		MatriForm.txtCity.value = ""







		MatriForm.txtState.value = ""







		MatriForm.txtPhone.value = ""







		







		







	}







//-->







</script>



<script language="JavaScript">







<!--







function textCounter(field,cntfield,maxlimit) {







if (field.value.length > maxlimit) // if too long...trim it!







field.value = field.value.substring(0, maxlimit);







// otherwise, update 'characters left' counter







else







cntfield.value = maxlimit - field.value.length;







}







//  End -->















function MM_openBrWindow(theURL,winName,features) { //v2.0







  window.open(theURL,winName,features);







}







//-->







</script>



<script language="JavaScript">















function caste_disable(obj){







	







	















	if ( document.MatriForm.religion.value == 'Others' ){







	document.MatriForm.caste.value = '';







	document.MatriForm.caste.disabled = true;







				







	}







	







	else {







		document.MatriForm.caste.disabled = false;







		get_caste(obj.form.religion,0);







	}







		







}







//-->







</script>



<script language="javascript">















	var caste=new Array();







caste["Hindu"] = ["6000 Niyogi", "96K Kokanastha", "24 Manai Chettiar", "24 Manai Telugu-8 Veedu", "24 Manai Telugu-16 Veedu", "Ad Dharmi", "Adi Dravida", "Agarwal", "Agnikul Kshatriya", "Ambalavasi", "Andipandaram", "Arunthathiyar", "Arora", "Arya Vysya", "Arya Samaj", "Baduga", "Balija Naidu", "Baniya", "Bahi", "Bengali", "Besta", "Bhandari", "Boyer", "Brahmin", "Brahmin-Anavil", "Brahmin-Bhatt", "Brahmin-Bhumihar", "Brahmin-Dhiman", "Brahmin-Devadnya", "Brahmin-Dravida", "Brahmin-Garhwali", "Brahmin-Gaur", "Brahmin-Goswami", "Brahmin-Gurukkal", "Brahmin-Iyengar", "Brahmin-Iyer", "Brahmin-Kanyakubj", "Brahmin-Kumoani", "Brahmin-Madhwa", "Brahmin-Maithil", "Brahmin-Namboodiri", "Brahmin-Niyogi", "Brahmin-Pandit", "Brahmin-Sakaldwipi", "Brahmin-Sanadya", "Brahmin-Saraswat", "Brahmin-Saryuparin", "Brahmin-Smartha", "Brahmin-Sri Vishnava", "Brahmin-Tyagi", "Brahmin-Vaidiki", "Chamar", "Chandravanshi Kahar", "Chaudary", "Chaurasia", "Chettiar", "Chhetri", "Coorgi", "Devandra Kula Vellalar", "Devanga", "Devanga Chettiar", "Dheevara", "Dhobi", "Ezhava", "Ezhuthachan", "Gandla", "Garhwali", "Gavara Naidu", "Gavura Naidu", "Goan", "Goud", "Gounder", "Gowda", "Gupta", "Intercaste", "Jaiswal", "Jat", "Jangumar", "Kadava Patel", "Kalar", "Kalinga", "Kalwar", "Kamboj", "Kamma", "Kammavar Naidu", "Kapu", "Karuneegar", "Kashyap", "Kayastha", "Khandelwal", "Khatri", "Kongu Vellala Gounder", "Kori", "Kshatriya", "Kudumbi", "Kulalar", "Kumhar", "Kummari", "Kuravar", "Kumawat", "Kumbara", "Kunbi", "Kurmi Kshatriya", "Kuruba", "Kurumbar", "Leva Patel", "Lingayath", "Lohana", "Malayalee Variar", "Malayalee Namboodiri", "Madiga", "Mahajan", "Mahar", "Mahendra", "Maheshwari", "Mala", "Mali", "Malla", "Mapila", "Maratha", "Maruthuvar", "Meena", "Meenavar", "Mehra", "Meru Darji", "Mudaliyar", "Mudiraj", "Mukkulathor", "Munnuru Kapu", "Muthuraja", "Nagar Brahmin", "Nadar", "Nai", "Naicker", "Naidu", "Nair", "Nair Vaniya", "Nambiar", "Nepali", "Nus-Jat", "Oswal", "Others", "Padmasali", "Pal", "Pandaram", "Panicker", "Parkava Kulam", "Pasi", "Patel", "Patel Kadva", "Patel Leva", "Patnaick", "Perika", "Pillai", "Prajapati", "Rajaka", "Rajput", "Rawat", "Reddy", "Sahu", "Saini", "Saliya", "SC", "Senai Thalaivar", "Settibalija", "Sindhi", "Sindhi-Amil", "Sindhi-Baibhand", "Sindhi-Bhanusali", "Sindhi-Bhatia", "Sindhi-Brahmin", "Sindhi-Chhapru", "Sindhi-Dadu", "Sindhi-Hyderabadi", "Sindhi-Intercaste", "Sindhi-Larai", "Sindhi-Larkana", "Sindhi-Lohana", "Sindhi-Rohiri", "Sindhi-Sahiti", "Sindhi-Sakkhar", "Sindhi-Sehwani", "Sindhi-Shikarpuri", "Sindhi-Thatai", "Sonar", "Sozhiya Vellalar", "Sourashtra", "Sutar", "Swarnakar", "ST", "Tamil Yadava", "Teli", "Teluga", "Thevar", "Thakur", "Thiyya", "Udayar", "Uppara", "Vaddera", "Vaishnav", "Vaishnava", "Vaishya", "Valluvar", "Valmiki", "Vanjara", "Vannar", "Vannia Kula Kashatriyar", "Vanniar", "Vaniya chettiar", "Veera Saivam", "Velama", "Vellalar", "Veluthedathu Nair", "Vilakkithala Nair", "Viswabrahmin", "Viswakarma", "Vokkaliga", "Yadav", "Yogeeswarar"];







caste["Muslim"] = ["Ansari", "Arain", "Awan", "Bohra", "Dekkani", "Dudekula", "Hanafi", "Intercaste", "Jat", "Khoja", "Lebbai", "Malik", "Mapila", "Maraicar", "Memon", "Mughal", "Others", "Pathan", "Qureshi", "Rajput", "Rowther", "Shafi", "Sheikh", "Shia", "Siddiqui", "Sunni Syed", "Unspecified"];







caste["Christian"] = ["Born Again", "Bretheren", "Catholic CMS", "CSI", "Evangelist", "Intercaste", "Jacobite", "Knanaya", "Knanaya Catholic", "Knanaya Jacobite", "Latin Catholic", "Malankara", "Marthoma", "Nadar", "Others", "Pentacost", "Protestant", "Roman Catholic", "Syrian", "Syrian Catholic", "Syrian Jacobite", "Syrian Orthodox", "Syro Malabar", "Unspecified"];







caste["Jain"] = ["Agarwal", "Bania", "Intercaste", "Intercate", "Jaiswal", "Khandelwal", "Kutchi", "No Bar", "Oswal", "Others", "Porwal", "Unspecified", "Vaishya"];







caste["Sikh"] = ["Ahluwalia", "Arora", "Bhatia", "Clean Shaven", "Ghumar", "Gursikh", "Intercaste", "Intercaste", "Jat", "Kamboj", "Khatri", "Kshatriya", "Lubana", "Majabi", "Ramgharia", "No Bar"];







caste["Parsi"]=["Parsi", "Intercaste", "Irani"];























	function get_caste(obj,show_default){















		var sel_caste = '';















		var sel_religion	= obj.options[obj.selectedIndex].text;







		var caste_obj		= obj.form.elements["caste"];







		//CLEAN CASTE SELECT BOX







		while ( caste_obj.options.length ) caste_obj.options[0] = null;















		//ADD FIRST SELECT OPTION







		caste_obj.options[0]=new Option("Does not matter","Does not matter",true);























		//ADD CASTE OPTIONS FOR SELECTED RELIGION







		//if(obj.selectedIndex>0){







			for(j=0;j<caste[sel_religion].length;j++){







				//NOT TO INCLUDE OPTIONS HAVING NULL VALUES







				if(caste[sel_religion][j]!=""){







					var caste_val = caste[sel_religion][j]=="Does not matter"?"Does not matter":caste[sel_religion][j];







					var def_sel   = (sel_caste == caste_val) ? true : false;







                    caste_obj.options[j+1] = new Option(caste[sel_religion][j], caste_val, true, def_sel);















				}







			}







		//}















	}















	</script>







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



        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Register Free</span> </div>



      </li>



      <li class="right"></li>



    </ul>



  </div>



  <!-- BREADCRUMBS ENDS HERE ########################################  -->



  <div id="content_area">



    <?Php include("include/registersidebar.php"); ?>



    <div id="inner_right"> 



      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 



      <a name="top" id="top"></a>



      <div class="profile_block">



        <div class="header">



          <h2 class="float_left title"> <span class="black" style="color:#333;">Find your suitable life partner - Register Free</h2>



        </div>



        <div class="body">



          <form action="register_submit1.php" method="post" name="MatriForm" id="MatriForm" onSubmit="return Validate()" >



            <table width="100%" border="0" cellpadding="5" cellspacing="5" class="tbl_profiledetails">



              <tbody>



                <tr>



                  <td colspan="2" width="719"><div align="left"><br />



                      <ul class="ddlist list-tick">



                        <li>Registration nearly complete! Spend bit more time in here and the world will be your oyster!!</li>



                        <li>All Fields marks * are compulsory.</li>



                        <li>Please mention accurate information in this form or your profile may be declined.</li>
                      </ul>



                      <br />



                    </div></td>
                </tr>



                <tr>



                  <td colSpan=2 class=grebg><IMG height=1  src="pics/trans.gif"></td>
                </tr>



                <tr>



                  <td colspan="2" ><div align="left">



                      <h3 class="hline3"><strong>Profile</strong></h3>



                    </div></td>
                </tr>
                



                <tr>



                  <td colspan="2" ><img src="pics/blank%281%29.gif" height="1" /></td>
                </tr>


                <tr class="hline2">
                  <td colspan="2" align="right">* All fields are mandatory </td>
                </tr>
                <tr class="hline2">



                  <td colspan="2"><div align="left">* Profile <br>



				  <p>Here you create personal description for your profile. Min. 50 characters Max. 1000 characters.</p>



				  <p>&nbsp;</p>
<p style="color:#A50050;">All profiles will be censored. Also, we ask that you do not include any personal information in your profile, including, but not limited to: your home address, cell or telephone number, a real email address or personal web address or bank details. We reserve the right to refuse any profile that we feel is inappropriate for this site. </p>

<p>&nbsp;</p>
				  <p >Here is the place where you tell the world how good you look. Your introduction is the one of the most important parts of your personal profile. We suggest that you try writing a bit about who you are; you’re interests and needs, and what you are looking for o this site. No one really reads bad profiles so put the effort in and you will be rewarded for your time. Trust us it works. When you have finished, you can review your own profile and change anything if it doesn’t look good.</p><br><br>



                      <textarea name="txtmsg" cols="50" rows="7" id="txtmsg" style="width:650px;"







onKeyDown="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onKeyUp="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onkeypress="if(event.keyCode) { kcode = event.keyCode; } else { kcode = event.charCode; } if((kcode == 46) || (kcode == 44) || (kcode == 8) || (kcode == 32) || (kcode == 59) || ((kcode >= 37) && (kcode <= 40)) || ((kcode >= 97) && (kcode <=122)) || ((kcode >= 65) && (kcode <=90))) { return true; } else { return false;}"></textarea>



                      <br><br>



                      <input name="remLen1" type="text" class="bodylight" value="1000" size="4" maxlength="4" readonly>



                    <span style="color:#A50050;"> <a href="matchmaking_tips.php">Click here for some more useful tips on how to write your description.</a></span></div></td>
                </tr>



                <tr>



                  <td colspan="2" ><div align="left">



                      <h3 class="hline3"><strong>Family Details</strong></h3>



                    </div></td>
                </tr>



                <tr>



                  <td colspan="2" ><img src="pics/blank%281%29.gif" height="1" /></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Family Details </div></td>



                  <td><div align="left">



                      <textarea name="txtFD" rows="3" id="txtFD" style="width:213px;"></textarea>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Family Values </div></td>



                  <td><div align="left">



                      <select name="txtFV" class="forminput" id="txtFV" style="width:215px;">



                        <option value="Traditional">Traditional</option>



                        <option value="Orthodox">Orthodox</option>



                        <option value="Liberal">Liberal</option>



                        <option value="Moderate">Moderate</option>
                      </select>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td vAlign=center><div align="left">&nbsp;Family Type</div></td>



                  <td><div align="left">



                      <select name="txtFT" class="forminput" id="txtFT" style="width:215px;">



                        <option value="Seperate Family">Seperate Family</option>



                        <option value="Joint Family" >Joint Family</option>
                      </select>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td width=719><div align="left">&nbsp;Family Status</div></td>



                  <td vAlign=top><div align="left">



                      <select name="txtFS" class="forminput" id="txtFS" style="width:215px;">



                        <option value="Rich">Rich</option>



                        <option value="Upper Middle Class">Upper Middle Class</option>



                        <option value="High Class">High Class</option>



                        <option value="Middle Class">Middle Class</option>



                        <option value="Do not want to tell at this time">Do not want to tell at this time</option>
                      </select>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Family Origin </div></td>



                  <td class=grtxt><div align="left">



                      <input name="txtFO" type="text" id="txtFO" size="49" maxlength="40" class="textbox1">



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">No of Brothers </div></td>



                  <td class=grtxt><div align="left">



                      <select name="txtFS1" class="forminput" id="txtFS1" style="width:95px;">



                        <option value="0">0</option>



                        <option value="1">1</option>



                        <option value="2">2</option>



                        <option value="3">3</option>



                        <option value="4">4</option>



                        <option value="4 +">4 +</option>
                      </select>



                      &nbsp;&nbsp;&nbsp;&nbsp;No of Brothers Married :



                      <select name="nbm" class="forminput" id="nbm" style="width:95px;">



                        <option value="No married brother">No married brother</option>



                        <option value="One married brother">One married brother</option>



                        <option value="Two married brother">Two married brother</option>



                        <option value="Three married brother">Three married brother</option>



                        <option value="Four married brother">Four married brothers</option>



                        <option value="Above four married brother">Above four married brother</option>
                      </select>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">No of Sisters </div></td>



                  <td class=grtxt><div align="left">



                      <select name="txtFS2" class="forminput" id="txtFS2" style="width:95px;">



                        <option value="0">0</option>



                        <option value="1">1</option>



                        <option value="2">2</option>



                        <option value="3 ">3</option>



                        <option value="4">4</option>



                        <option value="4 +">4 +</option>
                      </select>



                      &nbsp;&nbsp;&nbsp;&nbsp;No of Sisters Married :&nbsp;&nbsp;&nbsp;



                      <select name="nsm" class="forminput" id="nsm" style="width:95px;">



                        <option value="No married sister">No married sister</option>



                        <option value="One married sister">One married sister</option>



                        <option value="Two married sisters">Two married sisters</option>



                        <option value="Three married sisters">Three married sisters</option>



                        <option value="Four married sisters">Four married sistes</option>



                        <option value="Above four married sisters">Above four married sisters</option>
                      </select>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td colspan="2"><div align="left"><span class="bodysg">Father's Detail </div>



                    <div align="left"></div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Name:</div></td>



                  <td class=grtxt><div align="left">



                      <input name="txtFANAME" type="text" class="textbox1" id="txtFANAME" size="49" maxlength="20">



                    </div>



                    <div align="left"></div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left"></div></td>



                  <td><div align="left">



                      <input name="txtFalive" type="radio" value="Alive" checked>



                      <span class="h4p">Alive &nbsp;



                      <input name="txtFalive" type="radio" value="otAlive">



                      <span class="h4p">Not Alive</div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Occupation</div></td>



                  <td class=grtxt><div align="left">



                      <input name="txtFFO" type="text" class="textbox1" id="txtFFO" size="49" maxlength="10">



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td colspan="2" align=left><div align="left" class="bodysg">Mother's Detail </div>



                    <div align="left"></div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Name:</div></td>



                  <td><div align="left">



                      <input name="txtMONAME" type="text" class="textbox1" id="txtMONAME" size="49" maxlength="20">



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left"></div></td>



                  <td><div align="left">



                      <input name="txtMalive" type="radio" value="Alive" checked>



                      <span class="h4p">Alive &nbsp;



                      <input name="txtMalive" type="radio" value="otAlive">



                      <span class="h4p">Not Alive</div></td>
                </tr>



                <tr class="hline2">



                  <td align=left><div align="left">Occupation</div></td>



                  <td><div align="left">



                      <input name="txtFMO" type="text" class="textbox1" id="txtFMO" size="49" maxlength="40">



                    </div></td>
                </tr>



               <tr>



                  <td height="20" colspan="2">

				  <div align="left" class="hline3">

				  <table>

				  <tr><td>

				 
				   <h3 class=""><strong><br />



                       Partner Preference </strong></h3>

				  
				  </td>

				  <td width="115"></td>

				  <td>

				  <table>

				  <tr><td>

				  <img src="images/question.gif" border="0" />

				  </td>

				  

				  <td style="padding-left:5px;">

				  <span>Hint: please hold <strong style="font-weight:normal; color:#A50050; font-size:12px;">CTRL-KEY</strong> and click to select more than one item</span>				  </td></tr></table>				  </td>
				  </tr>
				  </table>
				  </div>				  </td>
                </tr>



                <tr>



                  <td colspan="2" ><img src="pics/blank%281%29.gif" height="1" /></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">* Looking For </div></td>



                  <td><div align="left">



                      <table width="100%" align="left" cellpadding="0" cellspacing="0">



                        <tr>



                          <td width="24%"><div align="left">



                              <input name="txtLooking" type=radio class="style5" value="Unmarried">



                              Unmarried &nbsp;</div></td>



                          <td width="24%" class="style3"><div align="left">



                              <input name="txtLooking" type=radio class="style5" value="Separated">



                              Separated </div></td>



                          <td width="24%" class="style3"><div align="left">



                              <input name="txtLooking" type=radio class="style5" value="Widowed" >



                              Widowed </div></td>



                          <td width="24%" class="style3"><div align="left">



                              <input name="txtLooking" type=radio class="style5" value="Divorcee" >



                              Divorcee </div></td>
                        </tr>
                      </table>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Age </div></td>



                  <td><div align="left">From



                      <input name="Fromage" type="text" class="forminput" id="Fromage" onKeyPress="if ((event.keyCode < 48) ||(event.keyCode > 57)) event.returnValue = false;" value="18" size="2" maxlength="2">



                      &nbsp;to



                      <input name="Toage" type="text" class="forminput" id="Toage" onKeyPress="if ((event.keyCode < 48) ||(event.keyCode > 57)) event.returnValue = false;" value="30" size="2" maxlength="2" >



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Expectations</div></td>



                  <td><div align="left">



                      <textarea name="txtPPE" rows="5" id="txtPPE" style="width:213px;"></textarea>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Country Living in </div></td>



                  <td><div align="left"><span class="formselect">



                      <select name="txtPcountry" class="forminput" id="txtPcountry" style="width:215px;">



                        <option value="Does not Matter" selected>- Does not Matter -</option>



                        <option>Pakistan</option>



                        <option>USA</option>



                        <option>United Kingdom</option>



                        <option>United Arab Emirates</option>



                        <option>Canada</option>



                        <option>Australia</option>



                        <option selected>India</option>



                        <option>Saudi Arabia</option>



                        <option>Kuwait</option>



                        <option>South Africa</option>



                        <option>Afghanistan</option>



                        <option>Albania</option>



                        <option>Algeria</option>



                        <option>American Samoa</option>



                        <option>Andorra</option>



                        <option>Angola</option>



                        <option>Anguilla</option>



                        <option>Antigua &amp; Barbuda</option>



                        <option>Argentina</option>



                        <option>Armenia</option>



                        <option>Australia</option>



                        <option>Austria</option>



                        <option>Azerbaijan</option>



                        <option>Bahamas</option>



                        <option>Bahrain</option>



                        <option>Bangladesh</option>



                        <option>Barbados</option>



                        <option>Belarus</option>



                        <option>Belgium</option>



                        <option>Belize</option>



                        <option>Bermuda</option>



                        <option>Bhutan</option>



                        <option>Bolivia</option>



                        <option>Bosnia and Herzegovina</option>



                        <option>Botswana</option>



                        <option>Brazil</option>



                        <option>Brunei</option>



                        <option>Bulgaria</option>



                        <option>Burkina Faso</option>



                        <option>Burundi</option>



                        <option>Cambodia</option>



                        <option>Cameroon</option>



                        <option>Canada</option>



                        <option>Cape Verde</option>



                        <option>Cayman Islands</option>



                        <option>Central African Republic</option>



                        <option>Chad</option>



                        <option>Chile</option>



                        <option>China</option>



                        <option>Colombia</option>



                        <option>Comoros</option>



                        <option>Congo</option>



                        <option>Congo (DRC)</option>



                        <option>Cook Islands</option>



                        <option>Costa Rica</option>



                        <option>Cote d'Ivoire</option>



                        <option>Croatia (Hrvatska)</option>



                        <option>Cuba</option>



                        <option>Cyprus</option>



                        <option>Czech Republic</option>



                        <option>Denmark</option>



                        <option>Djibouti</option>



                        <option>Dominica</option>



                        <option>Dominican Republic</option>



                        <option>East Timor</option>



                        <option>Ecuador</option>



                        <option>Egypt</option>



                        <option>El Salvador</option>



                        <option>Equatorial Guinea</option>



                        <option>Eritrea</option>



                        <option>Estonia</option>



                        <option>Ethiopia</option>



                        <option>Falkland Islands</option>



                        <option>Faroe Islands</option>



                        <option>Fiji Islands</option>



                        <option>Finland</option>



                        <option>France</option>



                        <option>French Guiana</option>



                        <option>French Polynesia</option>



                        <option>Gabon</option>



                        <option>Gambia</option>



                        <option>Georgia</option>



                        <option>Germany</option>



                        <option>Ghana</option>



                        <option>Gibraltar</option>



                        <option>Greece</option>



                        <option>Greenland</option>



                        <option>Grenada</option>



                        <option>Guadeloupe</option>



                        <option>Guam</option>



                        <option>Guatemala</option>



                        <option>Guinea</option>



                        <option>Guinea-Bissau</option>



                        <option>Guyana</option>



                        <option>Haiti</option>



                        <option>Honduras</option>



                        <option>Hong Kong SAR</option>



                        <option>Hungary</option>



                        <option>Iceland</option>



                        <option>India</option>



                        <option>Indonesia</option>



                        <option>Iran</option>



                        <option>Iraq</option>



                        <option>Ireland</option>



                        <option>Israel</option>



                        <option>Italy</option>



                        <option>Jamaica</option>



                        <option>Japan</option>



                        <option>Jordan</option>



                        <option>Kazakhstan</option>



                        <option>Kenya</option>



                        <option>Kiribati</option>



                        <option>Korea</option>



                        <option>Kuwait</option>



                        <option>Kyrgyzstan</option>



                        <option>Laos</option>



                        <option>Latvia</option>



                        <option>Lebanon</option>



                        <option>Lesotho</option>



                        <option>Liberia</option>



                        <option>Libya</option>



                        <option>Liechtenstein</option>



                        <option>Lithuania</option>



                        <option>Luxembourg</option>



                        <option>Macao SAR</option>



                        <option>Macedonia</option>



                        <option>Madagascar</option>



                        <option>Malawi</option>



                        <option>Malaysia</option>



                        <option>Maldives</option>



                        <option>Mali</option>



                        <option>Malta</option>



                        <option>Martinique</option>



                        <option>Mauritania</option>



                        <option>Mauritius</option>



                        <option>Mayotte</option>



                        <option>Mexico</option>



                        <option>Micronesia</option>



                        <option>Moldova</option>



                        <option>Monaco</option>



                        <option>Mongolia</option>



                        <option>Montserrat</option>



                        <option>Morocco</option>



                        <option>Mozambique</option>



                        <option>Myanmar</option>



                        <option>Namibia</option>



                        <option>Nauru</option>



                        <option>Nepal</option>



                        <option>Netherlands</option>



                        <option>Netherlands Antilles</option>



                        <option>New Caledonia</option>



                        <option>New Zealand</option>



                        <option>Nicaragua</option>



                        <option>Niger</option>



                        <option>Nigeria</option>



                        <option>Niue</option>



                        <option>Norfolk Island</option>



                        <option>North Korea</option>



                        <option>Norway</option>



                        <option>Oman</option>



                        <option>Pakistan</option>



                        <option>Panama</option>



                        <option>Papua New Guinea</option>



                        <option>Paraguay</option>



                        <option>Peru</option>



                        <option>Philippines</option>



                        <option>Pitcairn Islands</option>



                        <option>Poland</option>



                        <option>Portugal</option>



                        <option>Puerto Rico</option>



                        <option>Qatar</option>



                        <option>Reunion</option>



                        <option>Romania</option>



                        <option>Russia</option>



                        <option>Rwanda</option>



                        <option>Samoa</option>



                        <option>San Marino</option>



                        <option>Sao Tome and Principe</option>



                        <option>Saudi Arabia</option>



                        <option>Senegal</option>



                        <option>Serbia and Montenegro</option>



                        <option>Seychelles</option>



                        <option>Sierra Leone</option>



                        <option>Singapore</option>



                        <option>Slovakia</option>



                        <option>Slovenia</option>



                        <option>Solomon Islands</option>



                        <option>Somalia</option>



                        <option>South Africa</option>



                        <option>Spain</option>



                        <option>Sri Lanka</option>



                        <option>St. Helena</option>



                        <option>St. Kitts and Nevis</option>



                        <option>St. Lucia</option>



                        <option>St. Pierre and Miquelon</option>



                        <option>St. Vincent &amp; Grenadines</option>



                        <option>Sudan</option>



                        <option>Suriname</option>



                        <option>Swaziland</option>



                        <option>Sweden</option>



                        <option>Switzerland</option>



                        <option>Syria</option>



                        <option>Taiwan</option>



                        <option>Tajikistan</option>



                        <option>Tanzania</option>



                        <option>Thailand</option>



                        <option>Togo</option>



                        <option>Tokelau</option>



                        <option>Tonga</option>



                        <option>Trinidad and Tobago</option>



                        <option>Tunisia</option>



                        <option>Turkey</option>



                        <option>Turkmenistan</option>



                        <option>Turks and Caicos Islands</option>



                        <option>Tuvalu</option>



                        <option>Uganda</option>



                        <option>Ukraine</option>



                        <option>United Arab Emirates</option>



                        <option>United Kingdom</option>



                        <option>Uruguay</option>



                        <option>USA</option>



                        <option>Uzbekistan</option>



                        <option>Vanuatu</option>



                        <option>Venezuela</option>



                        <option>Vietnam</option>



                        <option>Virgin Islands</option>



                        <option>Virgin Islands (British)</option>



                        <option>Wallis and Futuna</option>



                        <option>Yemen</option>



                        <option>Yugoslavia</option>



                        <option>Zambia</option>



                        <option>Zimbabwe</option>
                      </select>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Height</div></td>



                  <td><div align="left">



                      <select name="txtPHeight" class="forminput" id="txtPHeight" style="width:215px;" multiple>



                        <option value="Does not Matter" selected>- Does not Matter -</option>



                        <option value="Below 4ft">Below 4ft</option>



                        <option value="4ft 6in">4ft 6in</option>



                        <option value="4ft 7in">4ft 7in</option>



                        <option value="4ft 8in">4ft 8in</option>



                        <option value="4ft 9in">4ft 9in</option>



                        <option value="4ft 10in">4ft 10in</option>



                        <option value="4ft 11in">4ft 11in</option>



                        <option value="5ft">5ft</option>



                        <option value="5ft 1in">5ft 1in</option>



                        <option value="5ft 2in">5ft 2in</option>



                        <option value="5ft 3in">5ft 3in</option>



                        <option value="5ft 4in">5ft 4in</option>



                        <option value="5ft 5in">5ft 5in</option>



                        <option value="5ft 6in">5ft 6in</option>



                        <option value="5ft 7in">5ft 7in</option>



                        <option value="5ft 8in">5ft 8in</option>



                        <option value="5ft 9in">5ft 9in</option>



                        <option value="5ft 10in">5ft 10in</option>



                        <option value="5ft 11in">5ft 11in</option>



                        <option value="6ft">6ft</option>



                        <option value="6ft 1in">6ft 1in</option>



                        <option value="6ft 2in">6ft 2in</option>



                        <option value="6ft 3in">6ft 3in</option>



                        <option value="6ft 4in">6ft 4in</option>



                        <option value="6ft 5in">6ft 5in</option>



                        <option value="6ft 6in">6ft 6in</option>



                        <option value="6ft 7in">6ft 7in</option>



                        <option value="6ft 8in">6ft 8in</option>



                        <option value="6ft 9in">6ft 9in</option>



                        <option value="6ft 10in">6ft 10in</option>



                        <option value="6ft 11in">6ft 11in</option>



                        <option value="7ft">7ft</option>



                        <option value="Above 7ft">Above 7ft</option>
                      </select>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Complexion</div></td>



                  <td><div align="left">



                      <select name="txtPComplexion" class="forminput" id="txtPComplexion" style="width:215px;">



                        <option value="Does not Matter" selected>- Does not Matter -</option>



                        <option value="Very Fair">Very Fair</option>



                        <option value="Fair">Fair</option>



                        <option value="Wheatish">Wheatish</option>



                        <option value="Wheatish Medium">Wheatish Medium</option>



                        <option value="Wheatish Brown">Wheatish Brown</option>



                        <option value="Dark">Dark</option>
                      </select>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Education</div></td>



                  <td><div align="left">



                      <select name="txtPEdu" class="forminput" id="txtPEdu" style="width:215px;">



                       <option value="" selected>Any</option>



						<option value="Not Important">Not Important</option>



						<option value="No education">No education</option>



						<option value="High School">High School</option>



						<option value="Bachelor’s Degree: Engg., Comp., Arch.,">Bachelor’s Degree: Engg., Comp., Arch.,</option>



						<option value="Master’s Degree: Engg., Comp., Arch.,">Master’s Degree: Engg., Comp., Arch.,</option>



						<option value="Bachelor’s Degree: Medicine & Surgery, Dentistry">Bachelor’s Degree: Medicine & Surgery, Dentistry</option>



						<option value="Master’s Degree: Medicine & Surgery, Dentistry">Master’s Degree: Medicine & Surgery, Dentistry</option>



						<option value="Bachelor’s Degree: Nursing">Bachelor’s Degree: Nursing</option>



						<option value="Master’s Degree: Nursing">Master’s Degree: Nursing</option>



						<option value="Bachelor’s Degree: Law">Bachelor’s Degree: Law</option>



						<option value="Master’s Degree: Law">Master’s Degree: Law</option>



						<option value="Bachelor’s Degree: Arts, Science, Commerce">Bachelor’s Degree: Arts, Science, Commerce</option>



						<option value="Master’s Degree: Arts, Science, Commerce">Master’s Degree: Arts, Science, Commerce</option>



						<option value="Bachelor’s Degree: Management">Bachelor’s Degree: Management</option>



						<option value="Master’s Degree: Management">Master’s Degree: Management</option>



						<option value="Doctorate PhD">Doctorate PhD</option>



						<option value="Accounting & Fin.: CA, ICWAI">Accounting & Fin.: CA, ICWAI</option>



						<option value="Indian Civil Service: IAS, IFoS, IPS, IRS">Indian Civil Service: IAS, IFoS, IPS, IRS</option>



						<option value="Vocational">Vocational</option>



						<option value="Diploma">Diploma</option>



						<option value="Other">Other</option>
                      </select>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">  Religion </div></td>



                  <td><div align="left">
                    <select onChange="caste_resetRF(this.value)" class="selectfield" style="width:215px;" size="1" id="religion" name="religion">
                      <option selected="" value="0">-Select-</option>
                      <option value="1">Hindu</option>
                      <option value="10">Muslim - Shia</option>
                      <option value="11">Muslim - Sunni</option>
                      <option value="2">Muslim - Others</option>
                      <option value="12">Christian - Catholic</option>
                      <option value="13">Christian - Orthodox</option>
                      <option value="14">Christian - Protestant</option>
                      <option value="3">Christian - Others</option>
                      <option value="4">Sikh</option>
                      <option value="15">Jain - Digambar</option>
                      <option value="16">Jain - Shwetambar</option>
                      <option value="5">Jain - Others</option>
                      <option value="6">Parsi</option>
                      <option value="7">Buddhist</option>
                      <option value="8">Inter-Religion</option>
                      <option value="9">No Religious Belief</option>
                    </select>
                    </div></td>
                </tr>



                <tr class="hline2">
                  <td>Mother tongue</td>
                  <td><select onChange="do_request(this.value);" class="selectfield" style="width:215px;" size="1" id="Language" name="Language">
                    <option selected="" value="0">-Select-</option>
                    <option value="1">Arunachali</option>
                    <option value="2">Assamese</option>
                    <option value="3">Awadhi</option>
                    <option value="4">Bengali</option>
                    <option value="5">Bhojpuri</option>
                    <option value="6">Brij</option>
                    <option value="7">Bihari</option>
                    <option value="53">Badaga</option>
                    <option value="8">Chatisgarhi</option>
                    <option value="9">Dogri</option>
                    <option value="10">English</option>
                    <option value="11">French</option>
                    <option value="12">Garhwali</option>
                    <option value="13">Garo</option>
                    <option value="14">Gujarati</option>
                    <option value="15">Haryanvi</option>
                    <option value="16">Himachali/Pahari</option>
                    <option value="17">Hindi</option>
                    <option value="18">Kanauji</option>
                    <option value="19">Kannada</option>
                    <option value="20">Kashmiri</option>
                    <option value="21">Khandesi</option>
                    <option value="22">Khasi</option>
                    <option value="23">Konkani</option>
                    <option value="24">Koshali</option>
                    <option value="25">Kumoani</option>
                    <option value="26">Kutchi</option>
                    <option value="27">Lepcha</option>
                    <option value="28">Ladacki</option>
                    <option value="29">Magahi</option>
                    <option value="30">Maithili</option>
                    <option value="31">Malayalam</option>
                    <option value="32">Manipuri</option>
                    <option value="33">Marathi</option>
                    <option value="34">Marwari</option>
                    <option value="35">Miji</option>
                    <option value="36">Mizo</option>
                    <option value="37">Monpa</option>
                    <option value="38">Nicobarese</option>
                    <option value="39">Nepali</option>
                    <option value="40">Oriya</option>
                    <option value="41">Punjabi</option>
                    <option value="42">Rajasthani</option>
                    <option value="43">Sanskrit</option>
                    <option value="44">Santhali</option>
                    <option value="45">Sindhi</option>
                    <option value="46">Sourashtra</option>
                    <option value="47">Tamil</option>
                    <option value="48">Telugu</option>
                    <option value="49">Tripuri</option>
                    <option value="50">Tulu</option>
                    <option value="51">Urdu</option>
                  </select>                  </td>
                </tr>
                <tr class="hline2">



                  <td><div align="left" id="caste">Caste/Division </div></td>



                  <td><div align="left" id="caste_rel">
                    <select name="caste" class="forminput" id="caste" style="width:215px;" disabled="true" >
                      <option>Others</option>
                    </select>
                  </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Residency Status</div></td>



                  <td><div align="left">



                      <select name="txtPReS" class="forminput" id="txtCitizen" style="width:215px;">



                        <option value="Does not Matter" selected>- Does not Matter -</option>



                        <option value="Citizen">Citizen</option>



                        <option value="Permanent Resident">Permanent Resident</option>



                        <option value="Student Visa">Student Visa</option>



                        <option value="Temporary Visa">Temporary Visa</option>



                        <option value="Work permit">Work permit</option>
                      </select>



                    </div></td>
                </tr>



                <tr>



                  <td height="20" colspan="2">

				  <div align="left" class="hline3">

				  <table>

				  <tr><td>

				 
				   <h3 class=""><strong><br />



                       Hobbies and Interest</strong></h3>

				  
				  </td>

				  <td width="115"></td>

				  <td>

				  <table>

				  <tr><td>

				  <img src="images/question.gif" border="0" />

				  </td>

				  

				  <td style="padding-left:5px;">

				  <span>Hint: please hold <strong style="font-weight:normal; color:#A50050; font-size:12px;">CTRL-KEY</strong> and click to select more than one item</span>				  </td></tr></table>				  </td>
				  </tr>
				  </table>
				  </div>				  </td>
                </tr>



                <tr>



                  <td colspan="2" ><img src="http://phpmatrimonialscript.in/pics/blank%281%29.gif" height="1" /></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Hobbies</div></td>



                  <td><div align="left">



                      <select name="txtHobby[]" size="4"  class="forminput" id="txtHobby" style="width:215px;" multiple="multiple">



                        <option value="Acting">Acting</option>



                        <option value="Astronomy">Astronomy</option>



                        <option value="Astrology">Astrology</option>



                        <option value="Collectibles">Collectibles</option>



                        <option value="Cooking">Cooking</option>



                        <option value="Crosswords">Crosswords</option>



                        <option value="Dancing">Dancing</option>



                        <option value="Film-making">Film-making</option>



                        <option value="Fishing">Fishing</option>



                        <option value="Gardening/ landscaping">Gardening/ landscaping</option>



                        <option value="Graphology">Graphology</option>



                        <option value="ature">Nature</option>



                        <option value="umerology">Numerology</option>



                        <option value="Painting">Painting</option>



                        <option value="Palmistry">Palmistry</option>



                        <option value="Pets">Pets</option>



                        <option value="Photography">Photography</option>



                        <option value="Playing musical instruments">Playing musical instruments</option>



                        <option value="Puzzles">Puzzles</option>



                        <option value="o Hobbies">Not interest</option>
                      </select>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Other Hobbies</div></td>



                  <td><div align="left">



                      <input name="txtOh" type="text" class="textbox1" id="txtOh" size="49" maxlength="40">



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Interests</div></td>



                  <td><div align="left">



                      <select name="txtInterest[]" size="4"  multiple="multiple" class="forminput" id="select" style="width:215px;">



                        <option value="Adventure sports">Adventure sports</option>



                        <option value="Book clubs">Book clubs</option>



                        <option value="Computer games">Computer games</option>



                        <option value="Health & fitness">Health & fitness</option>



                        <option value="Internet">Internet</option>



                        <option value="Learning new languages">Learning new languages</option>



                        <option value="Movies">Movies</option>



                        <option value="Music">Music</option>



                        <option value="Politics">Politics</option>



                        <option value="Reading">Reading</option>



                        <option value="Social service">Social service</option>



                        <option value="Sports"> Sports</option>



                        <option value="Television">Television</option>



                        <option value="Theatre">Theatre</option>



                        <option value="Travel">Travel</option>



                        <option value="Writing">Writing</option>



                        <option value="Yoga">Yoga</option>



                        <option value="Alternative healing / medicine">Alternative healing / medicine</option>



                        <option value="ot interest" >Not interest</option>
                      </select>



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td><div align="left">Other Interests</div></td>



                  <td><div align="left">



                      <input name="txtOi" type="text" class="textbox1" id="txtOi" size="49" maxlength="40">



                    </div></td>
                </tr>



                <tr class="hline2">



                  <td vAlign=center>&nbsp;</td>



                  <td width=719 vAlign=top class=formtxt  ><input type="checkbox" name="subscribe" value="1" checked="checked">



                    <span style="color:#A50050">Inform me when I have new matches and messages.</span> </td>
                </tr>



                <tr class="hline2">



                  <td>&nbsp;</td>



                  <td></td>
                </tr>



                <tr class="hline2">



                  <td vAlign=center>&nbsp;</td>



                  <td width=719 vAlign=top class=formtxt>&nbsp;</td>
                </tr>



                <tr class="hline2">



                  <td height=7 colSpan=3><div align="center">



                      <div align="center"><a href="javascript:clearform();"></a>



                        <input name="txtstatus" type="hidden" id="txtstatus" value="<?php echo "InActive" ; ?>">



                        <input name="txtregdate" type="hidden" id="txtregdate" value="<?php echo date('d-M-Y'); ?>">



                        <input name="txtip" type="hidden" id="txtip" value="<?php echo  $_SERVER['REMOTE_ADDR']; ?>">



                        <input name="txtref" type="hidden" id="txtref" value="<?php  echo  $_SERVER['HTTP_REFERER']; ?>">



                        <input name="txtagent" type="hidden" id="txtagent" value="<?php  echo $_SERVER['HTTP_USER_AGENT']; ?>">



                        <input name="h1" type="hidden" id="h1" value="<?php $_SESSION['Name']; ?>">

	<span style="float:left;padding:0 0 0 248px">					

<!--<input class="button-small1 square-orange uppercase float_right" ONCLICK="javascript:go_link()" style="float:none; clear:both; border:0px;" name="pre" type="button" value="Previous" alt="Previous">-->
</span><span style="float:right;margin:0 205px 0 0">

                       <input class="button-small square-orange uppercase" style="clear:both; border:0px; text-align:center; width:65px;" name="Submit" type="image" value="Register"> </span>



                        <a href="javascript:clearform();"></a></div>



                    </div></td>
                </tr>
              </tbody>
            </table>



          </form>



        </div>



        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>



      </div>



      <br />



      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 



    </div>



  </div>



  <!-- CONTENT AREA ENDS HERE ###################################################  --> 



  



  <!-- FOOTER STARTS HERE ###################################################  -->



  <?php include("include/footermenu.php") ?>



  <!-- FOOTER ENDS HERE ###################################################  --> 



  



</div>


<script>
function do_request(val) {

document.getElementById('caste_rel').innerHTML = "<img src='loading.gif'>";
 $.post('generateCaste.php?lang='+val+'&rel='+document.getElementById('religion').selectedIndex,'', function(data) {
	document.getElementById('caste_rel').innerHTML = "<img src='loading.gif'>";
	if(data!=''){
	
	document.getElementById('caste_rel').innerHTML = data;
	}});
	//return true;
	


}
</script>

<script>
function caste_resetRF(val){ 
alertdo(val);
document.getElementById('Language').selectedIndex = 0;
}

function alertdo(flag)  { 
if(flag == 1) {
document.getElementById("caste").innerHTML = 'Caste/Division ';
} else if(flag == 2  || flag == 10 || flag == 11) {
document.getElementById("caste").innerHTML = 'Sect/Division';
} else if(flag == 12 || flag == 13  || flag == 14 || flag == 3) {
document.getElementById("caste").innerHTML = 'Denomination/Division';
} else {
document.getElementById("caste").innerHTML = 'Caste/Division ';
}


}

</script>

</body>



</html>