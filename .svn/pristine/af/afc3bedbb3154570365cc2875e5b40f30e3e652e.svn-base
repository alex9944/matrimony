	function Validate(  )

	{

		var MatriForm = this.document.MatriForm;

		

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

		

	

		

		return true;

	}
function smutEngine() {

smut="..";

cmp="sex babes shit fuck damn porno cum cunt prick pecker ass fucking xxx XXX yahoo msn rediff gmail hotmail sify rediffmail www http @ phone mobile contact no address"

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
function textCounter(field,cntfield,maxlimit) {

if (field.value.length > maxlimit) // if too long...trim it!

field.value = field.value.substring(0, maxlimit);

// otherwise, update 'characters left' counter

else

cntfield.value = maxlimit - field.value.length;

}
