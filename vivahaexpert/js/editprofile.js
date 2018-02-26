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



		return true;

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

//-->



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

