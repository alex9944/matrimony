	function Validate(  )

	{

		var MatriForm = this.document.MatriForm;

		

	// Check Address 

		if ( MatriForm.txtAddress.value == "" )

		{

			alert( "Please enter your Address." );

			MatriForm.txtAddress.focus( );

			return false;

		}

			

			// Check phone 

		if ( MatriForm.txtPhone.value == "" )

		{

			alert( "Please enter your phone no." );

			MatriForm.txtPhone.focus( );

			return false;

		}

		

		

			// Check mobile

		if ( MatriForm.txtMobile.value == "" )

		{

			alert( "Please enter your mobile no." );

			MatriForm.txtMobile.focus( );

			return false;

		}

		

		

		

		if ((document.MatriForm.txtMobile.value.length < 10 ))

		{

			alert( "Mobile number must be minimum 10 numbers." );	

			document.MatriForm.txtMobile.focus( );

			return false;

		}

		

		

		

		if ((document.MatriForm.txtPhone.value.length < 5 ))

		{

			alert( "Phone number must be minimum 5 numbers." );	

			document.MatriForm.txtPhone.focus( );

			return false;

		}

	

		

		return true;

	}

function check_phone(field_name)

{

	var i, max, field_info

	field_info = eval("document.MatriForm." + field_name);

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
