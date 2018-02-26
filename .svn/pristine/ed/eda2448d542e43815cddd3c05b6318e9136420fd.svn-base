function nospaces(t){



if(t.value.match(/\s/g)){



alert('Sorry, you are not allowed to enter any space');



t.value=t.value.replace(/\s/g,'');



}



}

function updateDay(change,formName,yearName,monthName,dayName)



{	



	



	var form = document.forms[formName];



	var yearSelect = form[yearName];



	var monthSelect = form[monthName];



	var daySelect = form[dayName];



	var year = yearSelect[yearSelect.selectedIndex].value;



	var month = monthSelect[monthSelect.selectedIndex].value;



	var day = daySelect[daySelect.selectedIndex].value;







	if (change == 'month' || (change == 'year' && month == 2))



	{



		var i = 31;



		var flag = true;



		while(flag)



		{



			var date = new Date(year,month-1,i);



			if (date.getMonth() == month - 1)



			{



				flag = false;



			}



			else



			{



				i = i - 1;



			}



		}







		daySelect.length = 0;



		daySelect.length = i;



		var j = 0;



		while(j < i)



		{



			daySelect[j] = new Option(j+1,j+1);



			j = j + 1;



		}



		if (day <= i)



		{



			daySelect.selectedIndex = day - 1;



		}



		else



		{



			daySelect.selectedIndex = daySelect.length - 1;



		}



	}



}

function HaveChildnp()



	{



//		var MARST = document.MatriForm.MARITAL_STATUS.options[document.MatriForm.MARITAL_STATUS.selectedIndex].value;







 







		var CHILDLW = document.MatriForm.NOOFCHILDREN.options[document.MatriForm.NOOFCHILDREN.selectedIndex].value;







		



		if(document.MatriForm.MARITAL_STATUS[0].checked)



		{



		document.MatriForm.NOOFCHILDREN.value ='';



		document.MatriForm.NOOFCHILDREN.disabled=true;	



		document.MatriForm.CHILDLIVINGWITHME[0].disabled=true;		



		document.MatriForm.CHILDLIVINGWITHME[1].disabled=true;									



	    }



		

		 

		 else if ( document.MatriForm.MARITAL_STATUS[1].checked || document.MatriForm.MARITAL_STATUS[2].checked  || document.MatriForm.MARITAL_STATUS[3].checked  || document.MatriForm.MARITAL_STATUS[4].checked)



		{



		document.MatriForm.NOOFCHILDREN.disabled=false;			



		document.MatriForm.CHILDLIVINGWITHME[0].disabled=false;		



		document.MatriForm.CHILDLIVINGWITHME[1].disabled=false;											



		}



		



		if(document.MatriForm.MARITAL_STATUS[0].checked && document.MatriForm.CHILDLIVINGWITHME[0].checked || document.MatriForm.CHILDLIVINGWITHME[1].checked)



		{



		document.MatriForm.CHILDLIVINGWITHME[0].disabled=false;		



		document.MatriForm.CHILDLIVINGWITHME[1].disabled=false;											



		}



		



		







		if(CHILDLW > 0)



		{



			if ( document.MatriForm.MARITAL_STATUS[0].checked)



			{



					if ( (document.MatriForm.CHILDLIVINGWITHME[0].checked || document.MatriForm.CHILDLIVINGWITHME[1].checked) && (!document.MatriForm.CHILDLIVINGWITHME[0].checked || !document.MatriForm.CHILDLIVINGWITHME[1].checked) )



					{



							document.MatriForm.CHILDLIVINGWITHME[0].checked=false;



							document.MatriForm.CHILDLIVINGWITHME[1].checked=false;



							document.MatriForm.CHILDLIVINGWITHME[0].disabled=true;		



							document.MatriForm.CHILDLIVINGWITHME[1].disabled=true;	



					}



					



		



					



			}



		}







		if(CHILDLW == 0)



		{



		document.MatriForm.CHILDLIVINGWITHME[0].disabled=true;		



		document.MatriForm.CHILDLIVINGWITHME[1].disabled=true;							



	    }



			 



		else if ( CHILDLW > 1)



		{



		document.MatriForm.CHILDLIVINGWITHME[0].disabled=false;		



		document.MatriForm.CHILDLIVINGWITHME[1].disabled=false;							



		}



		



		



	}

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

	function ValidateEmail( Email )



	{



		var atCharPresent = false;



		var dotPresent = false;







		for ( var Idx = 0; Idx < Email.length; Idx++ )



		{



			if ( Email.charAt ( Idx ) == '@' )



				atCharPresent = true;



			if ( Email.charAt ( Idx ) == '.' )



				dotPresent = true;



		}







		if ( !atCharPresent || !dotPresent )



			return false;







		return true;



	}







	function ResetValues( )



	{



		var MatriForm = this.document.MatriForm;











		MatriForm.EMAIL.value = "";



		MatriForm.EMAILconfirm.value = "";



		MatriForm.txtp.value = "";



		MatriForm.txtcp.value = "";



		MatriForm.txtname.value = "";



		MatriForm.txtgender.value = "";



		MatriForm.txtmaritalstatus.value = "";



		



		return true;



	}

	// Function to validate all the inputs



	function Validate()



	{

		var MatriForm = this.document.MatriForm;

		// Check the Name field



		if ( MatriForm.txtName.value == "" )



		{



			alert( "Please Enter your name." );



			MatriForm.txtName.focus( );



			return false;



		}







var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";







  for (var i = 0; i < MatriForm.txtName.value.length; i++) {



  	if (iChars.indexOf(MatriForm.txtName.value.charAt(i)) != -1) {



  	alert ("Special characters and numbers are not allowed in Name.\n Please remove them.");



	MatriForm.txtName.focus( );



  	return false;



  	}



  }



















		// Check gender field



		if ( !MatriForm.txtGender[0].checked && !MatriForm.txtGender[1].checked)



		{



			//alert( "Please select the gender." );



			//alert("Welcome "  txtName "\nHow are we today");



			alert("Please Select the gender.");



			







			MatriForm.txtGender[0].focus( );



			return false;



		}



		



			







		



		if (document.MatriForm.dobMonth.options[document.MatriForm.dobMonth.selectedIndex].text=="-Month-")	



			  	{



				  	alert("Select Month");



					MatriForm.dobMonth.focus();



					return false;



			  	}



			  if (document.MatriForm.dobDay.options[document.MatriForm.dobDay.selectedIndex].text=="-DATE-")	



			  	{



				  	alert("Select Day");



					MatriForm.dobDay.focus();



					return false;



			  	}



			  if (document.MatriForm.dobYear.value=="0")		



			  	{



				  	alert("Select Year");



					MatriForm.dobYear.focus();



					return false;



			  	}



		



		



		



		// Check Marital Status



		if ( !MatriForm.MARITAL_STATUS[0].checked && !MatriForm.MARITAL_STATUS[1].checked && !MatriForm.MARITAL_STATUS[2].checked && !MatriForm.MARITAL_STATUS[3].checked)



		{



			alert( "Please Select the Marital Status." );



			MatriForm.MARITAL_STATUS[0].focus( );



			return false;



		}



		



		







		if ( !(document.MatriForm.MARITAL_STATUS[0].checked) && MatriForm.NOOFCHILDREN.selectedIndex == 0 )



		{



			alert( "Please select the number of children" );



			MatriForm.NOOFCHILDREN.focus( );



			return false;



		}			



		



		if ( !(document.MatriForm.MARITAL_STATUS[0].checked) && document.MatriForm.NOOFCHILDREN.options[document.MatriForm.NOOFCHILDREN.selectedIndex].value >= 1 && !MatriForm.CHILDLIVINGWITHME[0].checked && !MatriForm.CHILDLIVINGWITHME[1].checked)



		{



			alert("Please indicate whether the child /children is/are living with you.");



			MatriForm.CHILDLIVINGWITHME[0].focus( );



			return false;



		}

		

		



		



		



		// Check Language



		if ( MatriForm.Language.selectedIndex == 0 )



		{



			alert( "Please Select your Language." );	



			MatriForm.Language.focus( );



			return false;



		}



		



		// Check Religion



		if ( MatriForm.religion.selectedIndex == 0 )



		{



			alert( "Please Select your Religion." );	



			MatriForm.religion.focus( );



			return false;



		}



		



		// Check Caste
if ((MatriForm.txtMobile.value == "") && (MatriForm.txtPhone.value == "")){
		alert("One contact information is compulsory.\n Kindly enter your any contact number.");
		MatriForm.txtPhone.focus( );
		return false; 
		}




		



		// Check E-mail field



		if ( MatriForm.EMAIL.value == "" )



		{



			alert( "Please enter a valid E-mail ID." );



			MatriForm.EMAIL.focus( );



			return false;



		}



		else



		{



			if ( !ValidateEmail( MatriForm.EMAIL.value ) )



			{



				alert( "Invalid E-mail " + MatriForm.EMAIL.value );



				MatriForm.EMAIL.focus( );



				return false;



			}



			for ( var Idx = 0; Idx < MatriForm.EMAIL.value.length; Idx++ )



			{



				if ( MatriForm.EMAIL.value.charAt(Idx) == '	' 



					|| MatriForm.EMAIL.value.charAt(Idx) == ' ' 



					|| MatriForm.EMAIL.value.charAt(Idx) == ',' 



					|| MatriForm.EMAIL.value.charAt(Idx) == '/' 



					|| MatriForm.EMAIL.value.charAt(Idx) == '\\' 



					|| MatriForm.EMAIL.value.charAt(Idx) == ';' )



				{



					alert( "Blanks or other invalid characters are not allowed in the e-mail ID.\n Please enter only one E-mail ID." );



					MatriForm.EMAIL.focus( );



					return false;



				}



			}



		}







		if ( MatriForm.EMAILconfirm.value != "" && MatriForm.EMAILconfirm.value == "" )



		{



			alert( "Please confirm E-mail address" );



			MatriForm.EMAILconfirm.focus( );



			return false;



		}







		if ( MatriForm.EMAIL.value != MatriForm.EMAILconfirm.value )



		{



			alert( "E-mail address did not match, please enter a  confirm E-mail" );



			MatriForm.EMAILconfirm.focus( );



			return false;



		}











	// Check Password 



		if ( MatriForm.txtp.value == "" )



		{



			alert( "Please enter a password." );



			MatriForm.txtp.focus( );



			return false;



		}
	



		if ( MatriForm.txtp.value.length < 6 )



		{



			alert( "Password must be 6 characters." );	



			MatriForm.txtp.focus( );



			return false;



		}

if ( MatriForm.txtp.value != "" )
	{	
		paval=MatriForm.txtp.value	
		var re = /^[a-z0-9]+$/i;
		var ch=/^\w*(?=\w*\d)(?=\w*[A-Za-z])\w*$/;
		if (!ch.test(paval)) { alert("Your password must be alphanumeric charcters"); return false;}
	}






		if ( MatriForm.txtcp.value == "" )



		{



			alert( "Please enter a confirm password." );



			MatriForm.txtcp.focus( );



			return false;



		}







		if ( MatriForm. txtp.value != MatriForm. txtcp.value )



		{



			alert( "Password did not match." );



			MatriForm.txtp.value = "";



			MatriForm.txtcp.value = "";







			MatriForm.txtp.focus( );







			return false;



		}







		tmpPass = MatriForm.txtp.value;







		goodPasswd = 1;







		for( var idx=0; idx< tmpPass.length; idx++ )



		{



			ch = tmpPass.charAt(idx);







			if( !((ch>='a') && (ch<='z')) && !((ch>='A') && (ch<='Z')) && !((ch>=0) && (ch <=9)) )



			{



				goodPasswd = 0;



				break;



			}



		}







		if( goodPasswd ==0 )



		{



			alert( "Password must contains only letters and digits." );



			MatriForm. txtp.value="";



			MatriForm. txtcp.value="";



			MatriForm. txtp.focus();



			return false;



		}



















/*var jChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";







  for (var j = 0; j < MatriForm.txtGothra.value.length; j++) {



  	if (jChars.indexOf(MatriForm.txtGothra.value.charAt(j)) != -1) {



  	alert ("Special characters and numbers are not allowed in Gothram.\n Please remove them.");



	MatriForm.txtGothra.focus();



  	return false;



  	}



  }*/



  



  



 /* var kChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";







  for (var k = 0; k < MatriForm.txtp.value.length; k++) {



  	if (kChars.indexOf(MatriForm.txtP.value.charAt(k)) != -1) {



  	alert ("Special characters and numbers are not allowed in Place of Birth.\n Please remove them.");



	MatriForm.txtP.focus();



  	return false;



  	}



  }*/



  


   



	



	if( !(MatriForm.txtAccept.checked) )



		{



			alert("Please read and accept the terms and conditions.");



			return false;



		}


      var str1 = removeEmptySpaces(document.getElementById('txtCaptchaImg').value);
		var str2 = removeEmptySpaces(document.getElementById('txtCaptchaInput').value);
		if (str1 == str2)
		 {   }  
		else
		 {     
		   alert('Enter Valid Captcha');
		   return false;
		 }  
	



		return true;



	}
	
function removeEmptySpaces(string)
	{
		return string.split(' ').join('');
	}	
	

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



function updateDay(change,formName,yearName,monthName,dayName) 



{



	var form = document.forms[formName];



	var yearSelect = form[yearName];



	var monthSelect = form[monthName];



	var daySelect = form[dayName];



	var year = yearSelect[yearSelect.selectedIndex].value;



	var month = monthSelect[monthSelect.selectedIndex].value;



	var day = daySelect[daySelect.selectedIndex].value;







	if (change == 'month' || (change == 'year' && month == 2))



	{



		var i = 31;



		var flag = true;



		while(flag)



		{



			var date = new Date(year,month-1,i);



			if (date.getMonth() == month - 1)



			{



				flag = false;



			}



			else



			{



				i = i - 1;



			}



		}







		daySelect.length = 0;



		daySelect.length = i;



		var j = 0;



		while(j < i)



		{



			daySelect[j] = new Option(j+1,j+1);



			j = j + 1;



		}



		if (day <= i)



		{



			daySelect.selectedIndex = day - 1;



		}



		else



		{



			daySelect.selectedIndex = daySelect.length - 1;



		}



	}



}

function clearform()



	{



	MatriForm.txtName.value=""



//	MatriForm.txtDay.value="1"



//	MatriForm.txtMonth.value="1"



//	MatriForm.txtYear.value="1"



	MatriForm.txtGender[0].Checked



	MatriForm.MARITAL_STATUS.value="0"



	MatriForm.NOOFCHILDREN.value="0"







	MatriForm.EMAIL.value=""



	MatriForm.EMAILconfirm.value=""



	MatriForm.txtp.value=""



	MatriForm.txtcp.value=""



	//MatriForm.Accept.unChecked



	}

			 function loadvalues()



			 {



		  



				enb('country');



				select_field('country','');



				select_field('state','');



				enb('state');



				select_field('city','');



			 }



//checks the fields that are compulsory namely state, city, terms of use



function CheckFields()



{



    var i = Validate();



    



    if(i==0)



        return false;



    return true;



}

