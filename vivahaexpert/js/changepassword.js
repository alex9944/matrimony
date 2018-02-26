message = ("Sorry, you are not allowed to enter any spaces");

function nospaces(which) {

x = which.value

if (navigator.appName == "Netscape" ) {

if (e.which == 32) {

alert (message);

return false

}

}

if (navigator.appName == "Microsoft Internet Explorer") {

if (event.keyCode == 32) {

alert (message);

return false;

}

}

x = x.replace(/\s/g,""); // remove the unwanted space

document.signupForm.txtp.value = x;

}

function Check_form() {





// Check old Password 

		if (document.signupForm.txtop.value == "" )

		{

			alert( "Kindly enter your old password." );

			document.signupForm.txtop.focus( );

			return false;

		}



// Check Password 

		if ( document.signupForm.txtp.value == "" )

		{

			alert( "Kindly enter a new password." );

			document.signupForm.txtp.focus( );

			return false;

		}



		if ( document.signupForm.txtp.value.length < 4 )

		{

			alert( "Password must be atleast 4 characters." );	

			document.signupForm.txtp.focus( );

			return false;

		}





		if ( document.signupForm.txtp.value.length > 20 )

		{

		alert( "Password must be Max 20 characters." );	

		document.signupForm.txtp.focus( );

		return false;

		}



		if ( document.signupForm.txtcp.value == "" )

		{

			alert( "Kindly enter a confirm password." );

			document.signupForm.txtcp.focus( );

			return false;

		}



		if ( document.signupForm. txtp.value != document.signupForm. txtcp.value )

		{

			alert( "Password and Confirm password must be same." );

			document.signupForm.txtp.value = "";

			document.signupForm.txtcp.value = "";



			document.signupForm.txtp.focus( );



			return false;

		}



		tmpPass = document.signupForm.txtp.value;



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

			document.signupForm. txtp.value="";

			document.signupForm. txtcp.value="";

			document.signupForm. txtp.focus();

			return false;

		}



	



return true;

}

