<?php
session_start();
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
	

	$_SESSION['ChildrenLivingStatus'] = $Strnochild.$Strchildwithme;

	$_SESSION['Mothertongue']= strip_tags($_POST['Language']);

	$_SESSION['Religion']= strip_tags($_POST['religion']);

	$_SESSION['Caste']= strip_tags($_POST['caste']);

	$_SESSION['SubCaste']= strip_tags($_POST['txtSubcaste']);

	$_SESSION['ProfileCreatedby']= strip_tags($_POST['txtPC']);

	$_SESSION['Referenceby']= strip_tags($_POST['txtRef']);

	

	/// Accounts Datas

	$_SESSION['ConfirmEmail']= strip_tags($_POST['EMAILconfirm']);

	$_SESSION['ConfirmPassword']= md5($_POST['txtcp']);



	

	

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





?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/Country_States_Cities.js" type="text/javascript"> </script>
</head>
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

				// Check india City

		var selected_country    = document.formn.select_country.options[document.formn.select_country.selectedIndex].value;

                var country_text = document.formn.country_text.value;

 

                 if(selected_country == " ")

                 {

                        alert("Please select a Country");

				 document.formn.select_country.focus();
                       return false;

                 }
                if(selected_country=="" && country_text=="" && trim(selected_country)=="" && trim(country_text)=="")
                {
                        alert("Please select a Country");
                        document.formn.select_country.focus();
                        return false;
                }
                else
                {

				if(selected_country=="Others" || selected_country=="")

                        {

                                if(country_text=="" || trim(country_text)=="")

                                {

                                        alert("Please enter a country");

                                        document.formn.country_text.focus();

                                        return false;

                                }

                                else

                                        document.formn.ddlSelectCountry.value=country_text;

                        }

                        else

                                document.formn.ddlSelectCountry.value=selected_country;

                }

/* --------- country part ends here ----------- */

/* --------- State Part ends here ------------ */

 var selected_state = document.formn.select_state.options[document.formn.select_state.selectedIndex].value;

        var state_text   = document.formn.state_text.value;



        if(selected_state == " ")

        {

        alert("Please select a State");

        return false;

        }

        if(selected_state=="" && state_text=="" && trim(selected_state)=="" && trim(state_text)=="")

        {

                alert("Please select a State");

                document.formn.select_state.focus();

                return false;

        }

        else {

                if(selected_state=="Others" || selected_state=="")

                {

                        if(state_text=="" || trim(state_text)=="") {

                                alert("Please enter a State");

                                document.formn.state_text.focus();

                                return false;

                        }

                        else

                                document.formn.ddlSelectState.value=state_text;

                }

                else

                                document.formn.ddlSelectState.value=selected_state;

        }

/* ------- state part ends here --------- */

/* ------- City part ends here ---------- */



var selected_city = document.formn.select_city.options[document.formn.select_city.selectedIndex].value;

         var city_text     = document.formn.city_text.value;



        if(selected_city == " ")

        {

         alert("Please select a City");

        return false;

        }

         if(selected_city=="" && city_text=="" && trim(select_city)=="" && trim(city_text)=="")

           {

                alert("Please select a City");

                document.formn.select_city.focus();

                return false;

           }

        else {

                if(selected_city=="Others" || selected_city=="")

                {

                        if(city_text=="" || trim(city_text)=="") {

                                alert("Please enter your City");

                                document.formn.city_text.focus();

                                return false;

                        }

                        else

                                document.formn.ddlSelectCity.value=city_text;

                }

                else



                   document.formn.ddlSelectCity.value=selected_city;

        }

	



	

	// Check any Phone number



	// Check Area Code

		if ( formn.txtAC.value == "" )

		{

			alert( "Please enter your Area Code." );

			formn.txtAC.focus( );

			return false;

		}





if ((document.formn.txtMobile.value == "") && (document.formn.txtPhone.value == "")){

		alert("One contact information is compulsory.\n Kindly enter your any contact number.");

		document.formn.txtPhone.focus( );

		return false; 

	}

	

	



	if ((document.formn.txtMobile.value == "") && (document.formn.txtPhone.value.length < 6 ))

		{

			alert( "Phone number must be atleast 6 numbers." );	

			document.formn.txtPhone.focus( );

			return false;

		}

		

		

		if ((document.formn.txtPhone.value == "") && (document.formn.txtMobile.value.length < 10 ))

		{

			alert( "Mobile number must be minimum 10 numbers." );	

			document.formn.txtMobile.focus( );

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
          <h2 class="float_left title"> <span class="black" style="color:#333;">Find your suitable life partner - </span>Register Free</h2>
        </div>
        <div class="body">
          <form action="registration3.php" method="post" name="formn" onSubmit="return Validate()">
            <table width="100%" border="0" cellpadding="5" cellspacing="5" class="tbl_profiledetails">
              <tbody>
                <tr>
                  <td colspan="2" width="719"><div align="left"><br />
                      <ul class="ddlist list-tick">
                        <li>Registration Continue.</li>
                        <li>All Fields marks * are compulsory.</li>
                        <li>Please mention accurate information in this form or your profile may be declined.</li>
                      </ul>
                      <br />
                    </div></td>
                </tr>
                <tr>
                  <td colspan="2"><img src="pics/trans.gif" height="1" /></td>
                </tr>
                <tr>
                  <td colspan="2" ><div align="left">
                      <h3 class="hline3"><strong>Education and Occupation</strong></h3>
                    </div></td>
                </tr>
                <tr>
                  <td colspan="2" ><img src="pics/blank%281%29.gif" height="1" /></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">* Education</div></td>
                  <td><div align="left">
                      <select name="txtEdu" class="forminput" id="txtEdu" style="width:215px;">
                     <option value="" selected>Any</option>
						<option value="Not Important">Not Important</option>
						<option value="No education">No education</option>
						<option value="High School">High School</option>
						<option value="Bachelor�s Degree: Engg., Comp., Arch.,">Bachelor�s Degree: Engg., Comp., Arch.,</option>
						<option value="Master�s Degree: Engg., Comp., Arch.,">Master�s Degree: Engg., Comp., Arch.,</option>
						<option value="Bachelor�s Degree: Medicine & Surgery, Dentistry">Bachelor�s Degree: Medicine & Surgery, Dentistry</option>
						<option value="Master�s Degree: Medicine & Surgery, Dentistry">Master�s Degree: Medicine & Surgery, Dentistry</option>
						<option value="Bachelor�s Degree: Nursing">Bachelor�s Degree: Nursing</option>
						<option value="Master�s Degree: Nursing">Master�s Degree: Nursing</option>
						<option value="Bachelor�s Degree: Law">Bachelor�s Degree: Law</option>
						<option value="Master�s Degree: Law">Master�s Degree: Law</option>
						<option value="Bachelor�s Degree: Arts, Science, Commerce">Bachelor�s Degree: Arts, Science, Commerce</option>
						<option value="Master�s Degree: Arts, Science, Commerce">Master�s Degree: Arts, Science, Commerce</option>
						<option value="Bachelor�s Degree: Management">Bachelor�s Degree: Management</option>
						<option value="Master�s Degree: Management">Master�s Degree: Management</option>
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
                  <td><div align="left">* Edu Details </div></td>
                  <td><div align="left">
                      <select name="txtEdudetails" class="forminput" id="txtEdudetails" style="width:215px;">
                        <option value="Select" selected>Select</option>
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
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">Annual income </div></td>
                  <td><div align="left">
                      <select name="txtIncome" class="forminput" id="txtIncome" style="width:215px;">
                        <option value="" selected="selected">[Select Annual Income Range]</option>
                        <optgroup label=""></optgroup>
                        <optgroup label="Income in Indian Rupees">
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
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">* Occupation </div></td>
                  <td><div align="left">
                      <select name="txtOccu" class="forminput" id="txtOccu" style="width:215px;">
                        <option value="" selected>- Select -</option>
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
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">* Employed in </div></td>
                  <td><div align="left">
                      <select name="txtEmp" class="forminput" id="txtEmp" style="width:215px;">
                        <option value="" selected>- Select -</option>
                        <option value="Business">Business</option>
                        <option value="Defence">Defence</option>
                        <option value="Government">Government</option>
                        <option value="Not Employed in">Not Employed in</option>
                        <option value="Private">Private</option>
                        <option value="Others">Others</option>
                      </select>
                    </div></td>
                </tr>
                <tr>
                  <td colspan="2" align="left" ><div align="left">
                      <h3 class="hline3"><strong><br />
                        Physical Attributes</strong></h3>
                    </div>
                    <div align="left"></div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">* Height </div></td>
                  <td><div align="left">
                      <select name="txtHeight1" class="forminput" id="txtHeight1" style="width:215px;">
                        <option value="" selected>- Select -</option>
                        <option value="1">Below 4ft</option>
                        <option value="2">4ft 6in</option>
                        <option value="3">4ft 7in</option>
                        <option value="4">4ft 8in</option>
                        <option value="5">4ft 9in</option>
                        <option value="6">4ft 10in</option>
                        <option value="7">4ft 11in</option>
                        <option value="8">5ft</option>
                        <option value="9">5ft 1in</option>
                        <option value="10">5ft 2in</option>
                        <option value="11">5ft 3in</option>
                        <option value="12">5ft 4in</option>
                        <option value="13">5ft 5in</option>
                        <option value="14">5ft 6in</option>
                        <option value="15">5ft 7in</option>
                        <option value="16">5ft 8in</option>
                        <option value="17">5ft 9in</option>
                        <option value="18">5ft 10in</option>
                        <option value="19">5ft 11in</option>
                        <option value="20">6ft</option>
                        <option value="21">6ft 1in</option>
                        <option value="22">6ft 2in</option>
                        <option value="23">6ft 3in</option>
                        <option value="24">6ft 4in</option>
                        <option value="25">6ft 5in</option>
                        <option value="26">6ft 6in</option>
                        <option value="27">6ft 7in</option>
                        <option value="28">6ft 8in</option>
                        <option value="29">6ft 9in</option>
                        <option value="30">6ft 10in</option>
                        <option value="31">6ft 11in</option>
                        <option value="32">7ft</option>
                        <option value="33">Above 7ft</option>
                      </select>
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">* Weight </div></td>
                  <td><div align="left">
                      <select name="txtWeight" class="forminput" id="txtWeight" style="width:215px;">
                        <option value="0" selected="selected">- Select -</option>
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
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">* Blood Group </div></td>
                  <td><div align="left">
                      <select  name="txtBlood" class="forminput" id="txtBlood" style="width:215px;">
                        <option value="" selected>- Select -</option>
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
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">* Complexion</div></td>
                  <td><div align="left">
                      <select name="txtComplexion" class="forminput" id="txtComplexion" style="width:215px;">
                        <option value="" selected>- Select -</option>
                        <option value="Very Fair">Very Fair</option>
                        <option value="Fair">Fair</option>
                        <option value="Wheatish">Wheatish</option>
                        <option value="Wheatish Medium">Wheatish Medium</option>
                        <option value="Wheatish Brown">Wheatish Brown</option>
                        <option value="Dark">Dark</option>
                      </select>
                    </div>
                    <div align="left"></div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">* Appearance</div></td>
                  <td><div align="left">
				  <select name="txtBody" class="forminput" id="txtComplexion" style="width:215px;">
                        <option value="" selected>- Select -</option>
                        <option value="Not important">Not important</option>
                        <option value="Attractive">Attractive</option>
                        <option value="Big and beautiful">Big and beautiful</option>
                        <option value="Short">Short</option>
						<option value="Slim">Slim</option>
						<option value="Tall">Tall</option>
						<option value="Athletic">Athletic</option>
						<option value="Voluptuous">Voluptuous</option>
                      </select>
                      </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">Habits</div></td>
                  <td><div align="left">
                      <select name="txtDiet" class="forminput" id="txtDiet" style="width:215px;">
					   <option value="" selected>- Select -</option>
                        <option value="Not Important">Not Important</option>
                        <option value="Non-drinker">Non-drinker</option>
                        <option value="Occasional drinker">Occasional drinker</option>
                        <option value="Enjoy drinking">Enjoy drinking</option>
                        <option value="Drink to excess">Drink to excess</option>
						<option value="Non-smoker">Non-smoker</option>
						<option value="Quitting smoking">Quitting smoking</option>
						<option value="Smoke occasionally">Smoke occasionally</option>
						<option value="Smoke frequently">Smoke frequently</option>
                        <option value="Diet">Diet</option>
                      </select>
                    </div></td>
                </tr>
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
                <tr>
                  <td colspan="2" ><div align="left">
                      <h3 class="hline3"><br />
                        <strong>Contact Details</strong></h3>
                    </div>
                    <div align="left"></div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">* Address </div></td>
                  <td><div align="left">
                      <textarea name="txtAddress" rows="4" id="txtAddress" style="width:210px;"></textarea>
                      <br>
                      <span class="style2">The contact address is only for Official purpose and will not be discloded to others</div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">* Country living in</div></td>
                  <td><div align="left">
                      <select name="select_country" class="forminput" id="select_country" style="width:215px;" onChange="javascript:enb('country');">
                        <option value=" " selected>-- Select --</option>
                        <option value="albania">Albania</option>
                        <option value="algeria">Algeria</option>
                        <option value="american samoa">American samoa</option>
                        <option value="andoria">Andoria</option>
                        <option value="andorra">Andorra</option>
                        <option value="angola">Angola</option>
                        <option value="anguilla">Anguilla</option>
                        <option value="anitgua">Anitgua</option>
                        <option value="antigua">Antigua</option>
                        <option value="argentina">Argentina</option>
                        <option value="armenia">Armenia</option>
                        <option value="aruba">Aruba</option>
                        <option value="australia">Australia</option>
                        <option value="austria">Austria</option>
                        <option value="azerbaijan">Azerbaijan</option>
                        <option value="azerbiajan">Azerbiajan</option>
                        <option value="bahamas">Bahamas</option>
                        <option value="bahrain">Bahrain</option>
                        <option value="bangladesh">Bangladesh</option>
                        <option value="barbados">Barbados</option>
                        <option value="belarus">Belarus</option>
                        <option value="belgium">Belgium</option>
                        <option value="belize">Belize</option>
                        <option value="benin">Benin</option>
                        <option value="bermuda">Bermuda</option>
                        <option value="bhutan">Bhutan</option>
                        <option value="boliva">Boliva</option>
                        <option value="bolivia">Bolivia</option>
                        <option value="bonaire">Bonaire</option>
                        <option value="bosnia &amp; herzegovina">Bosnia &amp; herzegovina</option>
                        <option value="botswana">Botswana</option>
                        <option value="brazil">Brazil</option>
                        <option value="brunei">Brunei</option>
                        <option value="bulgaria">Bulgaria</option>
                        <option value="burkina faso">Burkina faso</option>
                        <option value="burundi">Burundi</option>
                        <option value="cambodia">Cambodia</option>
                        <option value="cameroon">Cameroon</option>
                        <option value="canada">Canada</option>
                        <option value="canary islands the">Canary islands the</option>
                        <option value="cape varde">Cape varde</option>
                        <option value="cape verde">Cape verde</option>
                        <option value="cayman islands">Cayman islands</option>
                        <option value="central african republic">Central african republic</option>
                        <option value="chad">Chad</option>
                        <option value="chile">Chile</option>
                        <option value="china">China</option>
                        <option value="china, peoples rep">China, peoples rep</option>
                        <option value="colombia">Colombia</option>
                        <option value="columbia">Columbia</option>
                        <option value="comoros">Comoros</option>
                        <option value="congo">Congo</option>
                        <option value="congo, the democratic rep of">Congo, the democratic rep of</option>
                        <option value="cook islands">Cook islands</option>
                        <option value="costa rica">Costa rica</option>
                        <option value="croatia">Croatia</option>
                        <option value="cuba">Cuba</option>
                        <option value="curacao">Curacao</option>
                        <option value="cyprus">Cyprus</option>
                        <option value="czech republic">Czech republic</option>
                        <option value="czech republic the">Czech republic the</option>
                        <option value="denmark">Denmark</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="dominica">Dominica</option>
                        <option value="dominican republic">Dominican republic</option>
                        <option value="ecuador">Ecuador</option>
                        <option value="egypt">Egypt</option>
                        <option value="el salvador">El salvador</option>
                        <option value="equatorial guinea">Equatorial guinea</option>
                        <option value="eritrea">Eritrea</option>
                        <option value="estonia">Estonia</option>
                        <option value="ethiopia">Ethiopia</option>
                        <option value="falkland islands">Falkland islands</option>
                        <option value="faroe islands">Faroe islands</option>
                        <option value="faroer islands">Faroer islands</option>
                        <option value="fiji">Fiji</option>
                        <option value="finland">Finland</option>
                        <option value="france">France</option>
                        <option value="french guana">French guana</option>
                        <option value="french guyana">French guyana</option>
                        <option value="french polynesia">French polynesia</option>
                        <option value="gabon">Gabon</option>
                        <option value="gambia">Gambia</option>
                        <option value="georgia">Georgia</option>
                        <option value="germany">Germany</option>
                        <option value="ghana">Ghana</option>
                        <option value="gibraltar">Gibraltar</option>
                        <option value="greece">Greece</option>
                        <option value="greenland">Greenland</option>
                        <option value="grenada">Grenada</option>
                        <option value="guadeloupe">Guadeloupe</option>
                        <option value="guadeluoupe">Guadeluoupe</option>
                        <option value="guam">Guam</option>
                        <option value="guatemala">Guatemala</option>
                        <option value="guernsey">Guernsey</option>
                        <option value="guinea">Guinea</option>
                        <option value="guinea republic">Guinea republic</option>
                        <option value="guinea-bissau">Guinea-bissau</option>
                        <option value="guyana">Guyana</option>
                        <option value="guyana (british)">Guyana (british)</option>
                        <option value="haiti">Haiti</option>
                        <option value="honduras">Honduras</option>
                        <option value="hong kong">Hong kong</option>
                        <option value="hungary">Hungary</option>
                        <option value="iceland">Iceland</option>
                        <option value="india">India</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="iran">Iran</option>
                        <option value="ireland">Ireland</option>
                        <option value="ireland republic of">Ireland republic of</option>
                        <option value="israel">Israel</option>
                        <option value="italy">Italy</option>
                        <option value="italy">Italy</option>
                        <option value="ivory coast">Ivory coast</option>
                        <option value="jamaica">Jamaica</option>
                        <option value="japan">Japan</option>
                        <option value="jersey">Jersey</option>
                        <option value="jordan">Jordan</option>
                        <option value="kazakhstan">Kazakhstan</option>
                        <option value="kenya">Kenya</option>
                        <option value="kiribati">Kiribati</option>
                        <option value="korea, republic of">Korea, republic of</option>
                        <option value="korea, south">Korea, south</option>
                        <option value="korea,d.pr of">Korea,d.pr of</option>
                        <option value="kuwait">Kuwait</option>
                        <option value="kyrgyzstan">Kyrgyzstan</option>
                        <option value="lao peoples democratic republic">Lao peoples democratic republic</option>
                        <option value="laos">Laos</option>
                        <option value="latvia">Latvia</option>
                        <option value="lebanon">Lebanon</option>
                        <option value="lesotho">Lesotho</option>
                        <option value="liberia">Liberia</option>
                        <option value="libya">Libya</option>
                        <option value="liechtenstein">Liechtenstein</option>
                        <option value="lithuania">Lithuania</option>
                        <option value="luxembourg">Luxembourg</option>
                        <option value="macao">Macao</option>
                        <option value="macau">Macau</option>
                        <option value="macedonia">Macedonia</option>
                        <option value="macedonia republic of (fyrom)">Macedonia republic of (fyrom)</option>
                        <option value="madagascar">Madagascar</option>
                        <option value="malawi">Malawi</option>
                        <option value="malaysia">Malaysia</option>
                        <option value="maldives">Maldives</option>
                        <option value="mali">Mali</option>
                        <option value="malta">Malta</option>
                        <option value="marinique">Marinique</option>
                        <option value="marshall islands">Marshall islands</option>
                        <option value="martinique">Martinique</option>
                        <option value="mauritania">Mauritania</option>
                        <option value="mauritiania">Mauritiania</option>
                        <option value="mauritius">Mauritius</option>
                        <option value="mexico">Mexico</option>
                        <option value="micronesia">Micronesia</option>
                        <option value="moldova">Moldova</option>
                        <option value="moldova republic of">Moldova republic of</option>
                        <option value="monaco">Monaco</option>
                        <option value="mongolia">Mongolia</option>
                        <option value="montserrat">Montserrat</option>
                        <option value="morocco">Morocco</option>
                        <option value="mozambique">Mozambique</option>
                        <option value="myanmar">Myanmar</option>
                        <option value="myanmar (burma)">Myanmar (burma)</option>
                        <option value="namibia">Namibia</option>
                        <option value="nauru republic of">Nauru republic of</option>
                        <option value="nepal">Nepal</option>
                        <option value="netherland antilles">Netherland antilles</option>
                        <option value="netherlands">Netherlands</option>
                        <option value="netherlands the">Netherlands the</option>
                        <option value="nevis">Nevis</option>
                        <option value="new caledonia">New caledonia</option>
                        <option value="new zealand">New zealand</option>
                        <option value="nicaragua">Nicaragua</option>
                        <option value="niger">Niger</option>
                        <option value="nigeria">Nigeria</option>
                        <option value="niue">Niue</option>
                        <option value="norway">Norway</option>
                        <option value="oman">Oman</option>
                        <option value="pakistan">Pakistan</option>
                        <option value="palau">Palau</option>
                        <option value="palestine authority">Palestine authority</option>
                        <option value="panama">Panama</option>
                        <option value="papua new guinea">Papua new guinea</option>
                        <option value="paraguay">Paraguay</option>
                        <option value="peru">Peru</option>
                        <option value="peru">Peru</option>
                        <option value="philippines">Philippines</option>
                        <option value="poland">Poland</option>
                        <option value="portugal">Portugal</option>
                        <option value="puerto rico">Puerto rico</option>
                        <option value="qatar">Qatar</option>
                        <option value="reunion">Reunion</option>
                        <option value="reunion island">Reunion island</option>
                        <option value="romania">Romania</option>
                        <option value="russia">Russia</option>
                        <option value="russian federation">Russian federation</option>
                        <option value="rwanda">Rwanda</option>
                        <option value="saint lucia">Saint lucia</option>
                        <option value="saint vincent">Saint vincent</option>
                        <option value="saipan">Saipan</option>
                        <option value="samoa">Samoa</option>
                        <option value="sao tome &amp; principe">Sao tome &amp; principe</option>
                        <option value="saudi arabia">Saudi arabia</option>
                        <option value="saudia arabia">Saudia arabia</option>
                        <option value="senegal">Senegal</option>
                        <option value="seychelles">Seychelles</option>
                        <option value="sierra leone">Sierra leone</option>
                        <option value="singapore">Singapore</option>
                        <option value="slovak republic">Slovak republic</option>
                        <option value="slovakia">Slovakia</option>
                        <option value="slovenia">Slovenia</option>
                        <option value="solomon islands">Solomon islands</option>
                        <option value="somalia">Somalia</option>
                        <option value="south africa">South africa</option>
                        <option value="spain">Spain</option>
                        <option value="sri lanka">Sri lanka</option>
                        <option value="st kitts and nevis">St kitts and nevis</option>
                        <option value="st lucia">St lucia</option>
                        <option value="st vincent">St vincent</option>
                        <option value="st. barthelemy">St. barthelemy</option>
                        <option value="st. eustatius">St. eustatius</option>
                        <option value="st. kitts">St. kitts</option>
                        <option value="st. maarten">St. maarten</option>
                        <option value="sudan">Sudan</option>
                        <option value="suriname">Suriname</option>
                        <option value="swaziland">Swaziland</option>
                        <option value="sweden">Sweden</option>
                        <option value="switzerland">Switzerland</option>
                        <option value="syria">Syria</option>
                        <option value="tahiti">Tahiti</option>
                        <option value="taiwan">Taiwan</option>
                        <option value="tajikistan">Tajikistan</option>
                        <option value="tanzania">Tanzania</option>
                        <option value="thailand">Thailand</option>
                        <option value="togo">Togo</option>
                        <option value="tonga">Tonga</option>
                        <option value="trinidad &amp; tobago">Trinidad &amp; tobago</option>
                        <option value="trinidad and tobago">Trinidad and tobago</option>
                        <option value="tunisia">Tunisia</option>
                        <option value="turkey">Turkey</option>
                        <option value="turkmenistan">Turkmenistan</option>
                        <option value="turks &amp; caicos islands">Turks &amp; caicos islands</option>
                        <option value="turks and caicos islands">Turks and caicos islands</option>
                        <option value="tuvalu">Tuvalu</option>
                        <option value="uganda">Uganda</option>
                        <option value="ukraine">Ukraine</option>
                        <option value="united arab emirates">United arab emirates</option>
                        <option value="united kingdom">United kingdom</option>
                        <option value="united states of america">United states of america</option>
                        <option value="uruguay">Uruguay</option>
                        <option value="uzbekistan">Uzbekistan</option>
                        <option value="vanuatu">Vanuatu</option>
                        <option value="vatican city">Vatican city</option>
                        <option value="venezuela">Venezuela</option>
                        <option value="vietnam">Vietnam</option>
                        <option value="virgin island (gb)">Virgin island (gb)</option>
                        <option value="virgin islands  british">Virgin islands british</option>
                        <option value="virgin islands  us">Virgin islands us</option>
                        <option value="virgin islands (usa)">Virgin islands (usa)</option>
                        <option value="wallis &amp; futuna">Wallis &amp; futuna</option>
                        <option value="yemen arab republic">Yemen arab republic</option>
                        <option value="yugloslavia">Yugloslavia</option>
                        <option value="zaire (dem rep of congo)">Zaire (dem rep of congo)</option>
                        <option value="zambia">Zambia</option>
                        <option value="zimbabwe">Zimbabwe</option>
                        <option value="Others">Other</option>
                      </select>
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">* Region</div></td>
                  <td><div align="left">
                      <select name="select_state" class="forminput" id="select_state" style="width:215px;" onChange="javascript:enb('state');">
                        <option value=" " >-- Select --</option>
                      </select>
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">* City </div></td>
                  <td><div align="left">
                      <select name="select_city" class="forminput" id="select_city" style="width:215px;" onChange="javascript:enb('city');" >
                        <option value=" " selected="true">-- Select --</option>
                      </select>
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">&nbsp;Other Country </div></td>
                  <td><div align="left">
                      <input name="text3" type="text" id="country_text" disabled="true" style="position: static" />
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">&nbsp;Other State</div></td>
                  <td><div align="left">
                      <input name="text2" type="text" id="state_text" disabled="true" style="position: static" />
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">&nbsp;Other City </div></td>
                  <td><div align="left">
                      <input name="text" type="text" id="city_text" disabled="true" style="position: static" />
                      <input type="hidden" name="ddlSelectCountry" id="ddlSelectCountry" />
                      <input type="hidden" name="ddlSelectState" id="ddlSelectState" />
                      <input type="hidden" name="ddlSelectCity" id="ddlSelectCity" />
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">* Phone</div></td>
                  <td><div align="left">
                      <input name="txtCC" type="text" class="forminput" id="txtCC" style="width:30px;" onFocus="if (this.value == '91') this.value = '';" onKeyUp="check_phone('txtCC')" value="+91" size="10" maxlength="10">
                      -
                      <input name="txtAC" type="text" class="forminput" id="txtAC" size="10" maxlength="10" style="width:40px;" onFocus="if (this.value == 'Area Code') this.value = '';" value="Area Code" onKeyUp="check_phone('txtAC')">
                      -
                      <input name="txtPhone" type="text" class="forminput" id="txtPhone" size="10" maxlength="10" style="width:100px;" onKeyUp="check_phone('txtPhone')">
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">Mobile </div></td>
                  <td><div align="left">
                      <input name="txtMobile" type="text" class="textbox1" id="txtMobile" size="40" maxlength="40" style="width:210px;" onKeyUp="check_phone('txtMobile')">
                    </div></td>
                </tr>
                <tr class="hline2">
                  <td><div align="left">Residency Status</div></td>
                  <td><div align="left">
                      <select name="txtRes" class="forminput" id="txtCitizen" style="width:215px;">
                        <option value="Citizen">Citizen</option>
                        <option value="Permanent Resident">Permanent Resident</option>
                        <option value="Student Visa">Student Visa</option>
                        <option value="Temporary Visa">Temporary Visa</option>
                        <option value="Work permit">Work permit</option>
                      </select>
                    </div></td>
                </tr>
                <tr>
                  <td   valign="center">&nbsp;</td>
                  <td   valign="top" width="500">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3"   height="7"><div align="center">
                      <div align="center">
                        <input name="h1" type="hidden" id="h1" value="<?php $_SESSION['Name'];?>">
                        <!-- <a href="#" class="button-small square-orange uppercase float_right" style="float:none; clear:both; margin:5px auto;"><span></span> Continue </a>--><span class=" span"></span>
                        <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Continue" alt="Continue">
                      </div>
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
</body>
</html>