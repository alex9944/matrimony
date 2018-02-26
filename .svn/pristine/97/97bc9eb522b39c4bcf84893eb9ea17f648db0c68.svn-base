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



	
