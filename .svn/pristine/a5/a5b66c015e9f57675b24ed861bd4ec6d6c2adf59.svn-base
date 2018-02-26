		<?php session_start(); 
		error_reporting(0);
		// Education and Occupation 



		if(!isset($_SESSION['email']))
		{ ?>
		<script type="text/javascript">
		window.location  = 'registration1.php?err';
		</script>
		<?php 
		}

		if(!isset($_POST['txtAddress']))
		{ ?>
		<script type="text/javascript">
		window.location  = 'registration2.php?err';
		</script>
		<?php 
		}
		else if(isset($_POST['txtAddress']) and $_POST['txtAddress'] == '')
		{ ?>
		<script type="text/javascript">
		// window.location  = 'registration2.php?err';
		</script>
		<?php 
		}



		//$_SESSION['email']  =  $email1;	

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

		/*$_SESSION['City']= strip_tags($_POST['select_city']); 
		$_SESSION['State']= strip_tags($_POST['select_state']); 
		$_SESSION['Country']= strip_tags($_POST['select_country']);
		  $_SESSION['Code']= strip_tags($_POST['txtCC']);
		  $_SESSION['Areacode']= strip_tags($_POST['txtAC']);
		$sCC = strip_tags($_POST['txtCC']);
		$sAC = strip_tags($_POST['txtAC']);
		$sPhone = strip_tags($_POST['txtPhone']);
		$ssep="-";
		$_SESSION['Phone']= $sCC.$ssep.$sAC.$ssep.$sPhone;
		$_SESSION['Mobile']= strip_tags($_POST['txtMobile']);*/


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

		if($state_val != '')
		{
		  $state_val = ' - '. $state_val;
		}

		if(strip_tags($_POST['select1_city']) != '')
		{
		  $_POST['select1_city'] = ' - '. strip_tags($_POST['select1_city']);
		} 

		$_SESSION['place_of_birth']= strip_tags($_POST['select1_country']).$state_val.strip_tags($_POST['select1_city']);  

		$_SESSION['time_of_birth']= "H:".strip_tags($_POST['hour_horo'])."-"."M:".strip_tags($_POST['minute_horo'])."-"."S:".strip_tags($_POST['second_horo']);

		$_SESSION['date'] = $_POST['day_horo'];
		$_SESSION['month'] = $_POST['month_horo'];
		$_SESSION['year'] = $_POST['year_horo'];
		$_SESSION['hour'] = $_POST['hour_horo'];
		$_SESSION['min'] = $_POST['minute_horo'];
		$_SESSION['sec'] = $_POST['second_horo'];
		$_SESSION['place']=strip_tags($_POST['select1_city']);
		$_SESSION['correction_horo']= $_POST['correction_horo'];

		  $_SESSION['horo_match']= strip_tags($_POST['need_horoscope_match']); 


		//Dim StrIP As String = Request.ServerVariables("REMOTE_ADDR") 

		//	msg5.text = Request.ServerVariables("REMOTE_ADDR") 




		//echo '<pre>'; print_r($_SESSION); print_r($_POST); exit;




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
		  
		  
		  
		  function Search_Array(ArrayObj, SearchFor){
		    var Found = false;
		    for (var i = 0; i < ArrayObj.length; i++){
		      if (ArrayObj[i] == SearchFor){
		       
		  	  var Found = true;
		  	  
		  	  return i;
		       
		        break;
		      }
		      else if ((i == (ArrayObj.length - 1)) && (!Found)){
		        if (ArrayObj[i] != SearchFor){
		          return false;
		        }
		      }
		    }
		  }
		  
		  
		  function update_range(ele_from,ele_to)
		  {
		  	var sel = ele_to.value;
		  	ele_to.options.length =0;
		  	var val = ele_from.value;
		  	for(i=0;i<ele_from.options.length;i++)
		  	{
		  		var optn = document.createElement("OPTION");
		  		optn.value = ele_from.options[i].value;
		  		if(optn.value >= val)
		  		{			
		  			optn.text = ele_from.options[i].text;			
		  			ele_to.options.add(optn);
		  		}
		  	}
		  	if((sel - ele_from.value) > 0)	ele_to.value = sel;
		  	//else ele_to.options[1].selected = true;	
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
		  
		  
		  
		  
		  
		  
		  
		    	}
		  
		  
		  
		  
		  
		  
		  
		    } */
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
		  
		  
		  
		  
		  
		  
		  
		    	}
		  
		  
		  
		  
		  
		  
		  
		    } */
		  
		  
		  
		  
		  
		  
		  
		    
		  
		  
		  
		  
		  
		  
		  
		    
		  
		  
		  
		  
		  
		  
		  
		    var kChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  /*  for (var k = 0; k < MatriForm.txtFO.value.length; k++) {
		  
		  
		  
		  
		  
		  
		  
		    	if (kChars.indexOf(MatriForm.txtFO.value.charAt(k)) != -1) {
		  
		  
		  
		  
		  
		  
		  
		    	alert ("Special characters and numbers are not allowed in Family Origin.\n Please remove them.");
		  
		  
		  
		  
		  
		  
		  
		  	MatriForm.txtFO.focus( );
		  
		  
		  
		  
		  
		  
		  
		    	return false;
		  
		  
		  
		  
		  
		  
		  
		    	}
		  
		  
		  
		  
		  
		  
		  
		    } */
		  
		  
		  
		  
		  
		  
		  
		    
		  
		  
		  
		  
		  
		  
		  
		    
		  
		  
		  
		  
		  
		  
		  
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
		<!-- Add jQuery library -->
		<script type="text/javascript" src="popup/jquery-1.10.1.min.js"></script>
		<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="popup/jquery.mousewheel-3.0.6.pack.js"></script>
		<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="popup/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="popup/jquery.fancybox.css?v=2.1.5" media="screen" />
		<!-- Add Button helper (this is optional) -->
		<link rel="stylesheet" type="text/css" href="popup/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
		<script type="text/javascript" src="popup/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<!-- Add Thumbnail helper (this is optional) -->
		<link rel="stylesheet" type="text/css" href="popup/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
		<script type="text/javascript" src="popup/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<!-- Add Media helper (this is optional) -->
		<script type="text/javascript" src="popup/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
		<script type="text/javascript">
		  $(document).ready(function() {
		             $(".fancybox").fancybox();
		     });
		  
		  
		  $(window).load(function(){
		  	// Simulate click on trigger element
		  	//alert('hi');
		  	$('.fancybox').trigger('click');
		  });
		  
		</script>
		<script type="text/javascript">
		  $(document).ready(function() {
		  	/*
		  	 *  Simple image gallery. Uses default settings
		  	 */
		  	
		  	//alert('hi'); 
		  
		  	$('.fancybox').fancybox();
		  
		  	/*
		  	 *  Different effects
		  	 */
		  
		  	// Change title type, overlay closing speed
		  	$(".fancybox-effects-a").fancybox({
		  		helpers: {
		  			title : {
		  				type : 'outside'
		  			},
		  			overlay : {
		  				speedOut : 0
		  			}
		  		}
		  	});
		  
		  	// Disable opening and closing animations, change title type
		  	$(".fancybox-effects-b").fancybox({
		  		openEffect  : 'none',
		  		closeEffect	: 'none',
		  
		  		helpers : {
		  			title : {
		  				type : 'over'
		  			}
		  		}
		  	});
		  
		  	// Set custom style, close if clicked, change title type and overlay color
		  	$(".fancybox-effects-c").fancybox({
		  		wrapCSS    : 'fancybox-custom',
		  		closeClick : true,
		  
		  		openEffect : 'none',
		  
		  		helpers : {
		  			title : {
		  				type : 'inside'
		  			},
		  			overlay : {
		  				css : {
		  					'background' : 'rgba(238,238,238,0.85)'
		  				}
		  			}
		  		}
		  	});
		  
		  	// Remove padding, set opening and closing animations, close if clicked and disable overlay
		  	$(".fancybox-effects-d").fancybox({
		  		padding: 0,
		  
		  		openEffect : 'elastic',
		  		openSpeed  : 150,
		  
		  		closeEffect : 'elastic',
		  		closeSpeed  : 150,
		  
		  		closeClick : true,
		  
		  		helpers : {
		  			overlay : null
		  		}
		  	});
		  
		  	/*
		  	 *  Button helper. Disable animations, hide close button, change title type and content
		  	 */
		  
		  	$('.fancybox-buttons').fancybox({
		  		openEffect  : 'none',
		  		closeEffect : 'none',
		  
		  		prevEffect : 'none',
		  		nextEffect : 'none',
		  
		  		closeBtn  : false,
		  
		  		helpers : {
		  			title : {
		  				type : 'inside'
		  			},
		  			buttons	: {}
		  		},
		  
		  		afterLoad : function() {
		  			this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
		  		}
		  	});
		  
		  
		  	/*
		  	 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
		  	 */
		  
		  	$('.fancybox-thumbs').fancybox({
		  		prevEffect : 'none',
		  		nextEffect : 'none',
		  
		  		closeBtn  : false,
		  		arrows    : false,
		  		nextClick : true,
		  
		  		helpers : {
		  			thumbs : {
		  				width  : 50,
		  				height : 50
		  			}
		  		}
		  	});
		  
		  	/*
		  	 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
		  	*/
		  	$('.fancybox-media')
		  		.attr('rel', 'media-gallery')
		  		.fancybox({
		  			openEffect : 'none',
		  			closeEffect : 'none',
		  			prevEffect : 'none',
		  			nextEffect : 'none',
		  
		  			arrows : false,
		  			helpers : {
		  				media : {},
		  				buttons : {}
		  			}
		  		});
		  
		  	/*
		  	 *  Open manually
		  	 */
		  
		  	$("#fancybox-manual-a").click(function() {
		  		$.fancybox.open('1_b.jpg');
		  	});
		  
		  	$("#fancybox-manual-b").click(function() {
		  		$.fancybox.open({
		  			href : 'iframe.html',
		  			type : 'iframe',
		  			padding : 5
		  		});
		  	});
		  
		  	$("#fancybox-manual-c").click(function() {
		  		$.fancybox.open([
		  			{
		  				href : '1_b.jpg',
		  				title : 'My title'
		  			}, {
		  				href : '2_b.jpg',
		  				title : '2nd title'
		  			}, {
		  				href : '3_b.jpg'
		  			}
		  		], {
		  			helpers : {
		  				thumbs : {
		  					width: 75,
		  					height: 50
		  				}
		  			}
		  		});
		  	});
		  
		  
		  });
		</script>
		<style type="text/css">
		  .fancybox-custom .fancybox-skin {
		  box-shadow: 0 0 50px #222;
		  }
		  .fancybox-opened
		  {
		  top:60px !important;
		  }
		</style>
		<body>
		  <div id="wrapper">
		     <a class="fancybox fancybox.iframe" href="mobile_verify_form.php" style="display:none;">Mobile Verify</a>
		     <div id="inline1" style="width:400px;display: none;">
		        <h3>Etiam quis mi eu elit</h3>
		        <p>
		           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor. Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
		        </p>
		     </div>
		     <!-- HEADER STARTS HERE ###################################################  -->
		     <?Php include("include/menu.php"); ?>
		     <!-- HEADER ENDS HERE ###################################################  --> 
		     <!-- CONTENT AREA STARTS HERE ###################################################  --> 
		     <!-- BREADCRUMBS STARTS HERE #####################################  -->
		     
		     <!-- BREADCRUMBS ENDS HERE ########################################  -->
		     <div id="content_area">
		       
		        <div id="inner_right">
		           <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
		           <a name="top" id="top"></a>
		           <div class="profile_block">
		              <div class="header">
		                 <h2 class="float_left title"> <span class="black" style="color:#A50050;">You're just a step away from finding your Life Half!</span></h2>
		              </div>
		              <div class="body">
		             <form action="register_submit1.php" method="post" name="MatriForm" id="MatriForm" onSubmit="return Validate()" style="margin-left:30%;">
		                <div class="form-group col-md-10">
		                	<div class="col-md-10">
		                		<ul class="ddlist list-tick">
		                                      <li>Registration nearly complete! Spend bit more time in here and the world will be your oyster!!</li>
		                                      <li>All Fields marks * are compulsory.</li>
		                                      <li>Please mention accurate information in this form or your profile may be declined.</li>
		                                  </ul>
		                     </div>
		                     <div class="col-md-10">
		                		<h3><strong>Profile</strong></h3>
		                		* Profile <br>
		                                   <p>Here you create personal description for your profile. Min. 50 characters Max. 1000 characters.</p>
		                                   <p>&nbsp;</p>
		                                   <p >Here is the place where you tell the world how good you look. Your introduction is the one of the most important parts of your personal profile. We suggest that you try writing a bit about who you are; you’re interests and needs, and what you are looking for o this site. No one really reads bad profiles so put the effort in and you will be rewarded for your time. Trust us it works. When you have finished, you can review your own profile and change anything if it doesn’t look good.</p>
		                                   <br><br>
		                                   <textarea name="txtmsg" cols="50" rows="5" class="form-control" id="txtmsg" style="width:60%;" tabindex="1" onKeyDown="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onKeyUp="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onKeyPress="if(event.keyCode) { kcode = event.keyCode; } else { kcode = event.charCode; } if((kcode == 46) || (kcode == 44) || ( kcode== 46) || (kcode == 8)  || (kcode == 9) || (kcode == 32) || (kcode == 59) || ((kcode >= 37) && (kcode <= 40)) || ((kcode >= 97) && (kcode <=122)) || ((kcode >= 65) && (kcode <=90))) { return true; } else { return false;}" ></textarea>
		                                   <br><br>
		                                   <input name="remLen1" type="text" class="bodylight" value="1000" size="4" maxlength="4" tabindex="2" readonly>
		                                   <span style="color:#A50050;"> <a href="matchmaking_tips.php" target="_blank">Click here for some more useful tips on how to write your description.</a></span>
		                	</div>
		                </div>
		                <div class="form-group">
                           <div class="col-md-10">
                           	<h3><strong>Family Details</strong></h3>
                           </div>
                        </div>
		                <div class="form-group">
                           
                           <div class="col-md-10">
                              <textarea name="txtFD" class="form-control" placeholder="Family Details" rows="3" id="txtFD" style="width:60%;"></textarea>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <select name="txtFV" class="form-control" id="txtFV" style="width:60%;">
                              		<option>Family Values</option>
		                                      <option value="Traditional">Traditional</option>
		                                      <option value="Orthodox">Orthodox</option>
		                                      <option value="Liberal">Liberal</option>
		                                      <option value="Moderate">Moderate</option>
		                                   </select>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                               <select name="txtFS" class="form-control" id="txtFS" style="width:60%;">
                               	<option>Family Status</option>
		                                      <option value="Rich">Rich</option>
		                                      <option value="Upper Middle Class">Upper Middle Class</option>
		                                      <option value="High Class">High Class</option>
		                                      <option value="Middle Class">Middle Class</option>
		                                      <option value="Do not want to tell at this time">Do not want to tell at this time</option>
		                                   </select>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                               <input name="txtFO" placeholder="Family Origin" class="form-control" type="text" id="txtFO" size="49" maxlength="40" style="width:60%;">
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <select name="txtFS1" class="form-control" id="txtFS1" style="width:60%;">
                              	<option>No of Brothers </option>
		                                      <option value="0">0</option>
		                                      <option value="1">1</option>
		                                      <option value="2">2</option>
		                                      <option value="3">3</option>
		                                      <option value="4">4</option>
		                                      <option value="4 +">4 +</option>
		                                   </select>
		                                   &nbsp;&nbsp;&nbsp;&nbsp; 
		                                   <select name="nbm" class="form-control" id="nbm" style="width:60%;">
		                                   	<option>No of Brothers Married</option>
		                                      <option value="No married brother">No married brother</option>
		                                      <option value="One married brother">One married brother</option>
		                                      <option value="Two married brother">Two married brother</option>
		                                      <option value="Three married brother">Three married brother</option>
		                                      <option value="Four married brother">Four married brothers</option>
		                                      <option value="Above four married brother">Above four married brother</option>
		                                   </select>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <select name="txtFS2" class="form-control" id="txtFS2" style="width:60%;">
                              				<option>No of Sisters </option>
		                                      <option value="0">0</option>
		                                      <option value="1">1</option>
		                                      <option value="2">2</option>
		                                      <option value="3 ">3</option>
		                                      <option value="4">4</option>
		                                      <option value="4 +">4 +</option>
		                                   </select>
		                                   &nbsp;&nbsp;&nbsp;&nbsp; 
		                                   <select name="nsm" class="form-control" id="nsm" style="width:60%;">
		                                   	<option>No of Sisters Married</option>
		                                      <option value="No married sister">No married sister</option>
		                                      <option value="One married sister">One married sister</option>
		                                      <option value="Two married sisters">Two married sisters</option>
		                                      <option value="Three married sisters">Three married sisters</option>
		                                      <option value="Four married sisters">Four married sistes</option>
		                                      <option value="Above four married sisters">Above four married sisters</option>
		                                   </select>
                           </div>
                        </div>
                        <div class="col-md-10 form-group">
                        	<h3 class="bodysg">Father's Detail</h3><br>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                                <input name="txtFANAME" placeholder="Father's Name" style="width:60%" type="text" class="form-control" id="txtFANAME" size="49" maxlength="20">
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10" style="width:60%">
                              <input name="txtFalive" type="radio" value="Alive" checked>
		                                   <span class="h4p">Alive &nbsp;
		                                   <input name="txtFalive" type="radio" value="otAlive">
		                                   <span class="h4p">Not Alive</div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                             <input name="txtFFO" placeholder="Occupation" type="text" class="form-control" style="width:60%" id="txtFFO" size="49" maxlength="10">
		                    </div>
                        </div>
                        <div class="col-md-10 form-group">
                        	<h3 class="bodysg">Mother's Detail</h3><br>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                               <input name="txtMONAME" placeholder="Mother's Name" type="text" style="width:60%" class="form-control" id="txtMONAME" size="49" maxlength="20">
		                                </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-10" style="width:60%">
                              <input name="txtMalive" type="radio" value="Alive" checked>
		                                   <span class="h4p">Alive &nbsp;
		                                   <input name="txtMalive" type="radio" value="otAlive">
		                                   <span class="h4p">Not Alive</div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                             <input name="txtFMO" style="width:60%" placeholder="Occupation" type="text" class="form-control" id="txtFMO" size="49" maxlength="40">
		                                 </div>
                        </div>
                        
                        <div class="form-group">
                           <div class="col-md-12">
                           		<h3><strong>Partner Preference </strong></h3>
                           	</div>
                        </div>
                        <div class="form-group" style="width:60%">
                           <div class="col-md-3">
                           	<label>* Looking For </label>
                           </div>
                           <div class="col-md-9">
                             <input name="txtLooking" id="look1" type=radio class="style5" value="Unmarried">Unmarried &nbsp;
		                     <input name="txtLooking" id="look2" type=radio class="style5" value="Separated">Separated 
		                     <input name="txtLooking" id="look3" type=radio class="style5" value="Widowed" >Widowed                          
                           	<input name="txtLooking" id="look4" type=radio class="style5" value="Divorcee" >Divorcee 
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                           
		                                   <input name="Fromage" type="text" placeholder="Age from" class="form-control col-md-2" id="Fromage" onKeyPress="if ((event.keyCode < 48) ||(event.keyCode > 57)) event.returnValue = false;" value="18" size="2" maxlength="2" style="width:30%">
		                                  
		                                   <input name="Toage" type="text" placeholder="To" class="form-control col-md-2" id="Toage" onKeyPress="if ((event.keyCode < 48) ||(event.keyCode > 57)) event.returnValue = false;" value="30" size="2" maxlength="2" style="width:30%">
		                                
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                             <textarea name="txtPPE" placeholder="Expectations" rows="5" id="txtPPE" style="width:60%;" onKeyPress="return alpha(event)" tabindex=""></textarea>
		                               </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              
		                                   <select name="txtPcountry" class="form-control" id="txtPcountry" style="width:60%;">
		                                   	<option>Country Living in</option>
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
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <?php  $height= array("4ft 6in","4ft 7in","4ft 8in",'4ft 9in','4ft 10in','4ft 11in','5ft','5ft 1in','5ft 2in','5ft 3in','5ft 4in','5ft 5in','5ft 6in','5ft 7in','5ft 8in','5ft 9in','5ft 10in','5ft 11in','6ft','6ft 1in','6ft 2in','6ft 3in','6ft 4in','6ft 5in','6ft 6in','6ft 7in','6ft 8in','6ft 9in','6ft 10in','6ft 11in','7ft','Above 7ft'); ?>
		                                   <? 
		                                      $hei_from = '';
		                                      $hei_to   = '';  ?>
		                                   <select name="txtPHeight_from" class="form-control col-md-2" id="height_range_frm"  style="width:30%;" >
		                                      <option value="0" <?php if($hei_from == '0') echo "selected"; ?>>Select from Height </option>
		                                      <option value="4ft - 121 cm" <?php if($hei_from == '4ft - 121 cm') echo "selected"; ?>>4ft - 121 cm</option>
		                                      <option value="4ft 1in - 124cm" <?php if($hei_from == '4ft 1in - 124cm') echo "selected"; ?>>4ft 1in - 124cm</option>
		                                      <option value="4ft 2in - 127cm" <?php if($hei_from == '4ft 2in - 127cm') echo "selected"; ?>>4ft 2in - 127cm</option>
		                                      <option value="4ft 3in - 129cm" <?php if($hei_from == '4ft 3in - 129cm') echo "selected"; ?>>4ft 3in - 129cm</option>
		                                      <option value="4ft 4in - 132cm" <?php if($hei_from == '4ft 4in - 132cm') echo "selected"; ?>>4ft 4in - 132cm</option>
		                                      <option value="4ft 5in - 134cm" <?php if($hei_from == '4ft 5in - 134cm') echo "selected"; ?>>4ft 5in - 134cm</option>
		                                      <option value="4ft 6in - 137cm" <?php if($hei_from == '4ft 6in - 137cm') echo "selected"; ?>>4ft 6in - 137cm</option>
		                                      <option value="4ft 7in - 139cm" <?php if($hei_from == '4ft 7in - 139cm') echo "selected"; ?>>4ft 7in - 139cm</option>
		                                      <option value="4ft 8in - 142cm" <?php if($hei_from == '4ft 8in - 142cm') echo "selected"; ?>>4ft 8in - 142cm</option>
		                                      <option value="4ft 9in - 144cm" <?php if($hei_from == '4ft 9in - 144cm') echo "selected"; ?>>4ft 9in - 144cm</option>
		                                      <option value="4ft 10in - 147cm" <?php if($hei_from == '4ft 10in - 147cm') echo "selected"; ?>>4ft 10in - 147cm</option>
		                                      <option value="4ft 11in - 149cm" <?php if($hei_from == '4ft 11in - 149cm') echo "selected"; ?>>4ft 11in - 149cm</option>
		                                      <option value="5ft - 152cm" <?php if($hei_from == '5ft - 152cm') echo "selected"; ?>>5ft - 152cm</option>
		                                      <option value="5ft 1in - 154cm" <?php if($hei_from == '5ft 1in - 154cm') echo "selected"; ?>>5ft 1in - 154cm</option>
		                                      <option value="5ft 2in - 157cm" <?php if($hei_from == '5ft 2in - 157cm') echo "selected"; ?>>5ft 2in - 157cm</option>
		                                      <option value="5ft 3in - 160cm" <?php if($hei_from == '5ft 3in - 160cm') echo "selected"; ?>>5ft 3in - 160cm</option>
		                                      <option value="5ft 4in - 162cm" <?php if($hei_from == '5ft 4in - 162cm') echo "selected"; ?>>5ft 4in - 162cm</option>
		                                      <option value="5ft 5in - 165cm" <?php if($hei_from == '5ft 5in - 165cm') echo "selected"; ?>>5ft 5in - 165cm</option>
		                                      <option value="5ft 6in - 167cm" <?php if($hei_from == '5ft 6in - 167cm') echo "selected"; ?>>5ft 6in - 167cm</option>
		                                      <option value="5ft 7in - 170cm" <?php if($hei_from == '5ft 7in - 170cm') echo "selected"; ?>>5ft 7in - 170cm</option>
		                                      <option value="5ft 8in - 172cm" <?php if($hei_from == '5ft 8in - 172cm') echo "selected"; ?>>5ft 8in - 172cm</option>
		                                      <option value="5ft 9in - 175cm" <?php if($hei_from == '5ft 9in - 175cm') echo "selected"; ?>>5ft 9in - 175cm</option>
		                                      <option value="5ft 10in - 177cm" <?php if($hei_from == '5ft 10in - 177cm') echo "selected"; ?>>5ft 10in - 177cm</option>
		                                      <option value="5ft 11in - 180cm" <?php if($hei_from == '5ft 11in - 180cm') echo "selected"; ?>>5ft 11in - 180cm</option>
		                                      <option value="6ft - 182cm" <?php if($hei_from == '6ft - 182cm') echo "selected"; ?>>6ft - 182cm</option>
		                                      <option value="6ft 1in - 185cm" <?php if($hei_from == '6ft 1in - 185cm') echo "selected"; ?>>6ft 1in - 185cm</option>
		                                      <option value="6ft 2in - 187cm" <?php if($hei_from == '6ft 2in - 187cm') echo "selected"; ?>>6ft 2in - 187cm</option>
		                                      <option value="6ft 3in - 190cm" <?php if($hei_from == '6ft 3in - 190cm') echo "selected"; ?>>6ft 3in - 190cm</option>
		                                      <option value="6ft 4in - 193cm" <?php if($hei_from == '6ft 4in - 193cm') echo "selected"; ?>>6ft 4in - 193cm</option>
		                                      <option value="6ft 5in - 195cm" <?php if($hei_from == '6ft 5in - 195cm') echo "selected"; ?>>6ft 5in - 195cm</option>
		                                      <option value="6ft 6in - 198cm" <?php if($hei_from == '6ft 6in - 198cm') echo "selected"; ?>>6ft 6in - 198cm</option>
		                                      <option value="6ft 7in - 200cm" <?php if($hei_from == '6ft 7in - 200cm') echo "selected"; ?>>6ft 7in - 200cm</option>
		                                      <option value="6ft 8in - 203cm" <?php if($hei_from == '6ft 8in - 203cm') echo "selected"; ?>>6ft 8in - 203cm</option>
		                                      <option value="6ft 9in - 205cm" <?php if($hei_from == '6ft 9in - 205cm') echo "selected"; ?>>6ft 9in - 205cm</option>
		                                      <option value="6ft 10in - 208cm" <?php if($hei_from == '6ft 10in - 208cm') echo "selected"; ?>>6ft 10in - 208cm</option>
		                                      <option value="6ft 11in - 210cm" <?php if($hei_from == '6ft 11in - 210cm') echo "selected"; ?>>6ft 11in - 210cm</option>
		                                      <option value="7ft - 213cm" <?php if($hei_from == '7ft - 213cm') echo "selected"; ?>>7ft - 213cm</option>
		                                   </select>
		                                   
		                                   <select name="txtPHeight_to"  class="form-control col-md-2" id="height_range_to"  style="width:30%;">
		                                      <option value="0" <?php if($hei_to == '0') echo "selected"; ?>>To Height</option>
		                                      <option value="4ft - 121 cm" <?php if($hei_to == '4ft - 121 cm') echo "selected"; ?>>4ft - 121 cm</option>
		                                      <option value="4ft 1in - 124cm" <?php if($hei_to == '4ft 1in - 124cm') echo "selected"; ?>>4ft 1in - 124cm</option>
		                                      <option value="4ft 2in - 127cm" <?php if($hei_to == '4ft 2in - 127cm') echo "selected"; ?>>4ft 2in - 127cm</option>
		                                      <option value="4ft 3in - 129cm" <?php if($hei_to == '4ft 3in - 129cm') echo "selected"; ?>>4ft 3in - 129cm</option>
		                                      <option value="4ft 4in - 132cm" <?php if($hei_to == '4ft 4in - 132cm') echo "selected"; ?>>4ft 4in - 132cm</option>
		                                      <option value="4ft 5in - 134cm" <?php if($hei_to == '4ft 5in - 134cm') echo "selected"; ?>>4ft 5in - 134cm</option>
		                                      <option value="4ft 6in - 137cm" <?php if($hei_to == '4ft 6in - 137cm') echo "selected"; ?>>4ft 6in - 137cm</option>
		                                      <option value="4ft 7in - 139cm" <?php if($hei_to == '4ft 7in - 139cm') echo "selected"; ?>>4ft 7in - 139cm</option>
		                                      <option value="4ft 8in - 142cm" <?php if($hei_to == '4ft 8in - 142cm') echo "selected"; ?>>4ft 8in - 142cm</option>
		                                      <option value="4ft 9in - 144cm" <?php if($hei_to == '4ft 9in - 144cm') echo "selected"; ?>>4ft 9in - 144cm</option>
		                                      <option value="4ft 10in - 147cm" <?php if($hei_to == '4ft 10in - 147cm') echo "selected"; ?>>4ft 10in - 147cm</option>
		                                      <option value="4ft 11in - 149cm" <?php if($hei_to == '4ft 11in - 149cm') echo "selected"; ?>>4ft 11in - 149cm</option>
		                                      <option value="5ft - 152cm" <?php if($hei_to == '5ft - 152cm') echo "selected"; ?>>5ft - 152cm</option>
		                                      <option value="5ft 1in - 154cm" <?php if($hei_to == '5ft 1in - 154cm') echo "selected"; ?>>5ft 1in - 154cm</option>
		                                      <option value="5ft 2in - 157cm" <?php if($hei_to == '5ft 2in - 157cm') echo "selected"; ?>>5ft 2in - 157cm</option>
		                                      <option value="5ft 3in - 160cm" <?php if($hei_to == '5ft 3in - 160cm') echo "selected"; ?>>5ft 3in - 160cm</option>
		                                      <option value="5ft 4in - 162cm" <?php if($hei_to == '5ft 4in - 162cm') echo "selected"; ?>>5ft 4in - 162cm</option>
		                                      <option value="5ft 5in - 165cm" <?php if($hei_to == '5ft 5in - 165cm') echo "selected"; ?>>5ft 5in - 165cm</option>
		                                      <option value="5ft 6in - 167cm" <?php if($hei_to == '5ft 6in - 167cm') echo "selected"; ?>>5ft 6in - 167cm</option>
		                                      <option value="5ft 7in - 170cm" <?php if($hei_to == '5ft 7in - 170cm') echo "selected"; ?>>5ft 7in - 170cm</option>
		                                      <option value="5ft 8in - 172cm" <?php if($hei_to == '5ft 8in - 172cm') echo "selected"; ?>>5ft 8in - 172cm</option>
		                                      <option value="5ft 9in - 175cm" <?php if($hei_to == '5ft 9in - 175cm') echo "selected"; ?>>5ft 9in - 175cm</option>
		                                      <option value="5ft 10in - 177cm" <?php if($hei_to == '5ft 10in - 177cm') echo "selected"; ?>>5ft 10in - 177cm</option>
		                                      <option value="5ft 11in - 180cm" <?php if($hei_to == '5ft 11in - 180cm') echo "selected"; ?>>5ft 11in - 180cm</option>
		                                      <option value="6ft - 182cm" <?php if($hei_to == '6ft - 182cm') echo "selected"; ?>>6ft - 182cm</option>
		                                      <option value="6ft 1in - 185cm" <?php if($hei_to == '6ft 1in - 185cm') echo "selected"; ?>>6ft 1in - 185cm</option>
		                                      <option value="6ft 2in - 187cm" <?php if($hei_to == '6ft 2in - 187cm') echo "selected"; ?>>6ft 2in - 187cm</option>
		                                      <option value="6ft 3in - 190cm" <?php if($hei_to == '6ft 3in - 190cm') echo "selected"; ?>>6ft 3in - 190cm</option>
		                                      <option value="6ft 4in - 193cm" <?php if($hei_to == '6ft 4in - 193cm') echo "selected"; ?>>6ft 4in - 193cm</option>
		                                      <option value="6ft 5in - 195cm" <?php if($hei_to == '6ft 5in - 195cm') echo "selected"; ?>>6ft 5in - 195cm</option>
		                                      <option value="6ft 6in - 198cm" <?php if($hei_to == '6ft 6in - 198cm') echo "selected"; ?>>6ft 6in - 198cm</option>
		                                      <option value="6ft 7in - 200cm" <?php if($hei_to == '6ft 7in - 200cm') echo "selected"; ?>>6ft 7in - 200cm</option>
		                                      <option value="6ft 8in - 203cm" <?php if($hei_to == '6ft 8in - 203cm') echo "selected"; ?>>6ft 8in - 203cm</option>
		                                      <option value="6ft 9in - 205cm" <?php if($hei_to == '6ft 9in - 205cm') echo "selected"; ?>>6ft 9in - 205cm</option>
		                                      <option value="6ft 10in - 208cm" <?php if($hei_to == '6ft 10in - 208cm') echo "selected"; ?>>6ft 10in - 208cm</option>
		                                      <option value="6ft 11in - 210cm" <?php if($hei_to == '6ft 11in - 210cm') echo "selected"; ?>>6ft 11in - 210cm</option>
		                                      <option value="7ft - 213cm" <?php if($hei_to == '7ft - 213cm') echo "selected"; ?>>7ft - 213cm</option>
		                                   </select>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                             <select name="txtPComplexion" class="form-control" id="txtPComplexion" style="width:60%;">
                             	<option>Complexion</option>
		                                      <option value="Does not Matter" selected>- Does not Matter -</option>
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
                              <select name="txtPEdu" class="form-control" id="txtPEdu" style="width:60%;">
                              	<option>Education</option>
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
                           </div>
                        </div>
                        <div class="form-group">
                          
                           <div class="col-md-10">
                              <select onChange="caste_resetRF(this.value)" class="form-control selectfield religion" style="width:60%;" size="1" id="religion" name="religion">
		                                      <option selected="" value="0">-Select Religion-</option>
		                                      <option value="1" <?php if($_SESSION['Religion'] == 1) { ?> selected="selected" <? } ?>>Hindu</option>
		                                      <option value="2" <?php if($_SESSION['Religion'] == 2) { ?> selected="selected" <? } ?>>Muslim - Shia</option>
		                                      <option value="3" <?php if($_SESSION['Religion'] == 3) { ?> selected="selected" <? } ?>>Muslim - Sunni</option>
		                                      <option value="4" <?php if($_SESSION['Religion'] == 4) { ?> selected="selected" <? } ?>>Muslim - Others</option>
		                                      <option value="5" <?php if($_SESSION['Religion'] == 5) { ?> selected="selected" <? } ?>>Christian - Catholic</option>
		                                      <option value="6" <?php if($_SESSION['Religion'] == 6) { ?> selected="selected" <? } ?>>Christian - Orthodox</option>
		                                      <option value="7" <?php if($_SESSION['Religion'] == 7) { ?> selected="selected" <? } ?>>Christian - Protestant</option>
		                                      <option value="8" <?php if($_SESSION['Religion'] == 8) { ?> selected="selected" <? } ?>>Christian - Others</option>
		                                      <option value="9" <?php if($_SESSION['Religion'] == 9) { ?> selected="selected" <? } ?>>Sikh</option>
		                                      <option value="10" <?php if($_SESSION['Religion'] == 10) { ?> selected="selected" <? } ?>>Jain - Digambar</option>
		                                      <option value="11" <?php if($_SESSION['Religion'] == 11) { ?> selected="selected" <? } ?>>Jain - Shwetambar</option>
		                                      <option value="12" <?php if($_SESSION['Religion'] == 12) { ?> selected="selected" <? } ?>>Jain - Others</option>
		                                      <option value="13" <?php if($_SESSION['Religion'] == 13) { ?> selected="selected" <? } ?>>Parsi</option>
		                                      <option value="14" <?php if($_SESSION['Religion'] == 14) { ?> selected="selected" <? } ?>>Buddhist</option>
		                                      <option value="15" <?php if($_SESSION['Religion'] == 15) { ?> selected="selected" <? } ?>>Inter-Religion</option>
		                                      <option value="16" <?php if($_SESSION['Religion'] == 16) { ?> selected="selected" <? } ?>>No Religious Belief</option>
		                                   </select>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                             <select onChange="do_request(this.value);" class="form-control selectfield" style="width:60%;" size="1" id="Language" name="Language">
		                                   <option selected="" value="">-Select Mother tongue-</option>
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
		                                </select>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10" id="caste_rel">
                              <select name="caste" class="form-control" id="caste" style="width:60%;" disabled="true" >
                              	<option>Caste/Division</option>
		                                      <option>Others</option>
		                                   </select>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <select name="txtPReS" class="form-control" id="txtCitizen" style="width:60%;">
                              	<option>Residency Status</option>
		                                      <option value="Does not Matter" selected>- Does not Matter -</option>
		                                      <option value="Citizen">Citizen</option>
		                                      <option value="Permanent Resident">Permanent Resident</option>
		                                      <option value="Student Visa">Student Visa</option>
		                                      <option value="Temporary Visa">Temporary Visa</option>
		                                      <option value="Work permit">Work permit</option>
		                                   </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-12">
                           		<h3><strong> Hobbies and Interest</strong></h3>
                           	</div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                             <select name="txtHobby[]" size="4"  class="form-control" id="txtHobby" style="width:60%;" multiple="multiple">
		                                      <option>Hobbies</option>
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
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <input name="txtOh" placeholder="Other Hobbies" type="text" class="form-control" id="txtOh" size="49" maxlength="40" style="width:60%;">
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <select name="txtInterest[]" size="4"  multiple="multiple" class="form-control" id="select" style="width:60%;">
		                                      <option>Interests</option>
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
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                               <input name="txtOi" type="text" class="form-control" placeholder="Other Interests" id="txtOi" size="49" maxlength="40" style="width:60%;">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-10">
                           	<input type="checkbox" name="subscribe" value="1" checked="checked">
		                                <span style="color:#A50050">Inform me when I have new matches and messages.</span> 
                           </div>
                          
                        </div>
		                             
		                         
		                                <div align="center">
		                                   <div align="center">
		                                      <a href="javascript:clearform();"></a>
		                                      <input name="txtstatus" type="hidden" id="txtstatus" value="<?php echo "InActive" ; ?>">
		                                      <input name="txtregdate" type="hidden" id="txtregdate" value="<?php echo date('d-M-Y'); ?>">
		                                      <input name="txtip" type="hidden" id="txtip" value="<?php echo  $_SERVER['REMOTE_ADDR']; ?>">
		                                      <input name="txtref" type="hidden" id="txtref" value="<?php  echo  $_SERVER['HTTP_REFERER']; ?>">
		                                      <input name="txtagent" type="hidden" id="txtagent" value="<?php  echo $_SERVER['HTTP_USER_AGENT']; ?>">
		                                      <input name="h1" type="hidden" id="h1" value="<?php $_SESSION['Name']; ?>">
		                                      <span style="float:left;padding:0 0 0 248px">
		                                         <!--<input class="button-small1 square-orange uppercase float_right" ONCLICK="javascript:go_link()" style="float:none; clear:both; border:0px;" name="pre" type="button" value="Previous" alt="Previous">-->
		                                      </span>
		                                      <span style="float:right;margin:0 205px 0 0">
		                                      <input class="button-small square-orange uppercase" style="clear:both; border:0px; text-align:center; width:65px;" name="Submit" type="image" value="Register" onClick="return validateFrm(); " > </span>
		                                      <a href="javascript:clearform();"></a>
		                                   </div>
		                            
		                 </form>
		              </div>
		              
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
		     
		     religion = $('select.religion option:selected').val(); 
		     //religion  = document.getElementById('religion').selectedIndex;
		     //alert(religion);
		     document.getElementById('caste_rel').innerHTML = "<img src='loading.gif'>";
		      $.post('generateCaste.php?lang='+val+'&rel='+religion,'', function(data) {
		      //alert('generateCaste.php?lang='+val+'&rel='+religion);
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
		     } else if(flag == 2  || flag == 3 || flag == 4) {
		     document.getElementById("caste").innerHTML = 'Sect/Division';
		     } else if(flag == 5 || flag == 6  || flag == 7 || flag == 8) {
		     document.getElementById("caste").innerHTML = 'Denomination/Division';
		     } else {
		     document.getElementById("caste").innerHTML = 'Caste/Division ';
		     }
		     
		     
		     }
		     
		     function alpha(e) {
		         var k;
		         document.all ? k = e.keyCode : k = e.which;
		     	//alert(k);
		         return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || k == 44 || k == 46  || k == 0 || k == 8);
		     }
		     
		     
		     
		     function validateFrm()
		     { 
		      
		       look1 = document.getElementById('look1').checked;
		       look2 = document.getElementById('look2').checked;
		       look3 = document.getElementById('look3').checked;
		       look4 = document.getElementById('look4').checked;
		       
		      if(look1 == false && look2 == false && look3 == false && look4 == false)
		        {
		           alert('Please select Looking For');
		     	  return false;
		        }
		       else
		       {
		         //alert('Please select Looking For');
		         return true; 
		       }	
		     }
		     
		  </script>
		</body>
		</html>