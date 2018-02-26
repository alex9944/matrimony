<?php include_once "includes/common.php"; 

require_once('cpmail_class.php');


if(isset($_POST['reg_button'])) 
{
	if($_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'] ) ) 
	{
      // Insert you code for processing the form here, e.g emailing the submission, entering it into a database. 
		 $fname=$_POST['fname'];  
		 $lname=$_POST['lname'];
		 $uname=$_POST['uname'];
		 $username_mail=$uname;
		 
		$default_email= $uname."@ikojomail.com";
		 
		 $password=$_POST['password'];
		 $question=$_POST['question'];
		 $otherquestion=$_POST['otherquestion'];
	 	 if($question!="others")
		 {
			 $common_question=$question;
		 }
		 else
		 {
			 $common_question=$otherquestion;
		 } 
		 $answer=$_POST['answer'];
		 $birth_month=$_POST['birth_month'];
		 $birth_date=$_POST['birth_date'];
		 $birth_year=$_POST['birth_year'];
		 
		 
		 $sec_email=$_POST['sec_email'];
		 $country=$_POST['country'];
		 $security_code=$_POST['security_code'];
		 $count_user=mysql_num_rows(mysql_query("select * from `tbl_register` where `username`='$username_mail' ")); 
		 if($count_user==0)
		 {
///////////////////////////// Insert here
			
			
			mysql_query("insert into  `tbl_register` (`firstname`,`lastname`,`username`,`password`,`security_question`, `security_answer`,`secondary_email`,`country`,`status`,`reg_date`,`default_email`,`birth_month`,`birth_date`,`birth_year`)
			
			values('$fname','$lname','$username_mail','$password' ,'$common_question','$answer','$sec_email','$country','1','$currentdate','$default_email','$birth_month','$birth_date','$birth_year')");
			
			
			$inbox= getcwd()."/inbox/$username_mail";
			mkdir($inbox, 0777);
			$contact= getcwd()."/contact_images/$username_mail";
			mkdir($contact, 0777);
			$compose= getcwd()."/compose_files/$username_mail";
			mkdir($compose, 0777);
			$drafts= getcwd()."/drafts/$username_mail";
			mkdir($drafts, 0777);


//Automatic Email Account creation in mail server			
			
			
			
		$cpanel=new cpmail("ikojo","inetsol","ikojomail.com","x");	
			
			
			echo $cpanel->create($uname,$password,"5000");

			
///////////////////////////////insert ends here


////////////////////// insert full chat user details


$last_insid=mysql_insert_id();

$uemail= $username_mail."@ikojomail.com";

mysql_query("insert into `php121_users`(`uid`,`uname`,`upassword`,`uemail`,`php121_smilies`,`php121_level`,
`php121_timezone`,`php121_language`) values ('$last_insid','$username_mail','$password','$uemail','1','3','1','english'                       )      "); 			







$last_id=mysql_insert_id();

$uname=$username_mail."@ikojomail.com";

mysql_query("insert into `multipleuser_details` (`userid`,`firstname`,`username`,`default_status`,`verify_status`,`code`,`regdate`)
 values ('$last_id','$fname','$uname','1','1','','$current_datetime')  ");

 			
			header("location:register_thanks.php");
			
			
		}
		else
		{
			$message= "<span class='red'>Your Username Already Exist</span>";
		} 
	} 
	else
	{
   	  // Insert your code for showing an error message here
		 if($_POST['security_code']!="")
		 {
		 	 $message1= "<span class='red'>Your Security Code is Wrong</span>";
		 }	 
	}
}
?>

<html>
<head>
<title><?php echo $title; ?></title>

<link href="css/fontstyles.css" rel="stylesheet" type="text/css">
</head>
<script src="ajax_common.js"></script>

<script >

//Registration java script
function otherques()
{
	if(document.reg.question.value=="others")
	{
		if(document.getElementById('otherques_id').style.display=="none")
		{
			document.getElementById('otherques_id').style.display="block";
		}
	}
    else
	{
        if(document.getElementById('otherques_id').style.display=="block")
		{
			document.getElementById('otherques_id').style.display="none";
		}
	}
}


function checkFirstName(strng1) 
{
	var error = "";
	if (strng1 == "") 
	{
	   error = "Please enter First Name.\n";
	}
	
	var illegalChars = /\W/; // allow letters, numbers, and underscores
    
	if (illegalChars.test(strng1)) 
	{
		   error = "First Name contains illegal characters.\n";
    } 
	return error;
	
}




function checkLastName (strng2) 
{
	var error = "";
	if (strng2 == "") 
	{
	   error = "Please enter Last Name.\n";
	}
	var illegalChars = /\W/; // allow letters, numbers, and underscores
    
	if (illegalChars.test(strng2)) 
	{
		   error = "Last Name contains illegal characters.\n";
    } 
	return error
}

function checkUserId (strng3) 
{
	var error = "";
	if (strng3 == "") 
	{
   		error = "Please enter login name.\n";
  	 	return error;
	}
   var illegalChars = /\w+([\-@!#$%^&*()+=-])/; 
<!--	/\W/; // allow letters, numbers, and underscores-->
	
	
    if ((strng3.length < 4) || (strng3.length > 20)) 
	{
       error = "Login name must be greater than 20 character.\n";
    }
	
	
    else if (illegalChars.test(strng3)) 
	{
		   error = "Login name contains illegal characters.\n";
    } 
	return error;
}
 




function checkPassword(strng4) 
{
	var error = "";
	if (strng4 == "") 
	{
   		error = "You didn't enter a password.\n";
   		return error; 
	}
    var illegalChars = /[\W_]/; // allow only letters and numbers
    if ((strng4.length < 6) || (strng4.length > 10)) 
	{
       error = "The password must be 6 to 10 character .\n";
    }
    else if (illegalChars.test(strng4)) 
	{
      error = "The password contains illegal characters.\n";
    } 
    else if (!((strng4.search(/(a-z)+/)) && (strng4.search(/(A-Z)+/)) && (strng4.search(/(0-9)+/)))) 
	{
       error = "The password must contain at least one uppercase letter, one lowercase letter, and one numeral.\n";
    }  
	
	return error;    
} 

//security question null




function checkquestion(strng5) 
{
	var error = "";
	if (strng5 == "") 
	{
	   error = "Please Choose The Security Question.\n";
	}

return error;
	
}

function checkotherquestion(strngval) 
{
	var error = "";
	if (strngval == "") 
	{
	   error = "Please enter security questions.\n";
	}

return error;
	
}



//

function checkanswer(strng6) 
{
	var error = "";
	if (strng6 == "") 
	{
	   error = "Please Enter The Answer .\n";
	}

return error;
	
}





function checkbirthofmonth(strng15) 
{
	var error = "";
	if (strng15 == "select") 
	{
	   error = "Please Enter The Month .\n";
	}

return error;
	
}
	
function checkbirthdate(strng16) 
{
	var error = "";
	if (strng16 == "") 
	{
	   error = "Please Enter The Date .\n";
	}
	
	//var illegalChars = /^([0-9]{11})$/;
	
	
//      else if (illegalChars.test(strng16)) 
//	    {
		//   error = "Date is illegal characters.\n";
    //  } 
return error;
	
}


	
function checkbirthyear(strng17) 
{
	var error = "";
	if (strng17 == "") 
	{
	   error = "Please Enter The Year.\n";
	}
	
return error;
	
}

function checkcountry(strng7) 
{
	var error = "";
	if (strng7 == "select") 
	{
	   error = "Please Choose The Country.\n";
	}

return error;
	
}

function checksecurity_code(strng8) 
{
	var error = "";
	if (strng8 == "") 
	{
	   error = "Please Enter The Security Code.\n";
	}

return error;
	
}
function verifyPassword(str1,str2)
{
	var error = "";
	if (str1 != str2) 
	{
	   error = "Your password is Mismatched.\n";
	}
	return error;
	
}

function checksecemail(strval2)
{
	var error = "";
	
	if(strval2.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1)
	{
	   error = "Your secondary email is wrong.\n";
	}
	return error;
	
	
}






function reg_vali()
{
	
	var why = "";
	var error="";
	why = checkFirstName(document.reg.fname.value);
	if (why != "")
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.fname.focus();
       return false;
    }
	
	why = checkLastName(document.reg.lname.value);
	if (why != "")
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.lname.focus();
       return false;
    }
	why = checkUserId(document.reg.uname.value);
	if (why != "")
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.uname.focus();
       return false;
    }

	why = checkPassword(document.reg.password.value);
	if (why != "") 
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.password.focus();
       return false;
    }	
	why = checkPassword(document.reg.cpassword.value);
	if (why != "") 
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.cpassword.focus();
       return false;
    }
	why = verifyPassword(document.reg.password.value,document.reg.cpassword.value);
	if (why != "") 
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.cpassword.focus();
       return false;
    }
	
	
	why = checkquestion(document.reg.question.value);
	if (why != "") 
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.question.focus();
       return false;
    }
	
     	
	if(document.reg.question.value=="others")
	{
	why = checkotherquestion(document.reg.otherquestion.value);
	if (why != "") 
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.otherquestion.focus();
       return false;
    }
	}
	

why = checkanswer(document.reg.answer.value);
	if (why != "") 
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.answer.focus();
       return false;
    }




why = checkbirthofmonth(document.reg.birth_month.value);
	if (why != "") 
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.birth_month.focus();
       return false;
    }




why = checkbirthdate(document.reg.birth_date.value);
	if (why != "") 
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.birth_date.focus();
       return false;
    }
	
	
	why = checkbirthyear(document.reg.birth_year.value);
	if (why != "") 
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.birth_year.focus();
       return false;
    }
	
	
	










if(document.reg.sec_email.value!='')
{
why = checksecemail(document.reg.sec_email.value);
	if (why != "") 
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.sec_email.focus();
       return false;
    }

}




why = checkcountry(document.reg.country.value);
	if (why != "") 
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.country.focus();
       return false;
    }

why = checksecurity_code(document.reg.security_code.value);
	if (why != "") 
	{	  
       document.getElementById("div_errmsg").innerHTML= why;
	   document.reg.security_code.focus();
       return false;
    }




}

//Registration Validation Ends Here
	
	
	



</script>

<link href="css/style.css" rel="stylesheet" type="text/css">
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><a href="index.html">
      <?php include_once "includes/top.php"; ?>
    </a></td>
  </tr>
  <tr>
    <td><table width="96%" border="0" align="center">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="contentbig">Create an Account </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="bo-links">Your ikojo Account gives you access to ikojomail. If you already have a ikojo Account, you can <a href="index.php">sign in here</a>. </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
	  <tr>
        <td valign="middle" class="button">Fields marked with an asterisk<span class="add">&nbsp;*&nbsp;</span>are required.</td>
      </tr>
	  <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><table width="75%" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #8525A0">
          
		  <tr>
            <td><form id="form1" name="reg" method="post" action="">
              <table width="100%" border="0" cellspacing="2" cellpadding="2">
                <tr>
                  <td valign="top" class="style1">&nbsp;</td>
                  <td colspan="3" align="left"><?php if($message!='') { echo $message; } ?>
                            <?php if($message1!='') { echo $message1; } ?>                            </td>
                </tr>
                <tr>
                  <td valign="top"><span class="violet">Get Started With Ikojomail </span></td>
                  <td colspan="3"><div class="red" id="div_errmsg"></div></td>
                </tr>
                <tr>
                  <td width="32%" valign="top" class="lik">&nbsp;&nbsp;First name :</td>
                  <td colspan="3"><input type="text" name="fname" value="<?php echo $_POST['fname']; ?>" /> 
                    <span class="add">*</span> </td>
                </tr>
                <tr>
                  <td valign="top" class="lik">&nbsp;&nbsp;Last name :</td>
                  <td colspan="3"><input type="text" name="lname" value="<?php echo $_POST['lname']; ?>"  />
                    <span class="add">*</span></td>
                </tr>
                <tr>
                  <td valign="top" class="lik">&nbsp;&nbsp;Desired Login Name : </td>
                  <td colspan="3" class="bo-links"><input type="text" name="uname" value="<?php echo $_POST['uname']; ?>"  />
                    @ikojomail.com<span class="add">*</span></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td colspan="3"><input type="button" name="Submit" value="Check Availability!" onClick="showAvailability(document.reg.uname.value)" /></td>
                </tr>
                <tr>
                  <td valign="top"></td>
                  <td colspan="3"><div id="txtHint" class="red" align="left"></div></td>
                </tr>
                <tr>
                  <td valign="top" class="lik">&nbsp;&nbsp;Choose a Password :</td>
                  <td colspan="3"><input type="password" name="password" />
                    <span class="add">*</span></td>
                </tr>
                <tr>
                  <td valign="top" class="lik">&nbsp;&nbsp;Re-enter Password : </td>
                  <td colspan="3"><input type="password" name="cpassword" />
                    <span class="add">*</span></td>
                </tr>
                <tr>
                  <td valign="top" class="lik">&nbsp;&nbsp;Security Question : </td>
                  <td colspan="3"><select name="question" onChange="otherques();">
                    <option value="">Choose a question</option>
                    <option value="What is your primary frequent flyer number">What is your primary frequent flyer number</option>
                    <option value="What is your library card number">What is your library card number</option>
                    <option value="What was your first phone number">What was your first phone number</option>
                    <option value="What was your first teachers name">What was your first teachers name</option>
                    <option value="others">Write your own question</option>
                  </select>
                    <span class="add">*</span>                  </td>
                </tr>
                <tr>
                  <td valign="top" class="lik">&nbsp;</td>
                  <td colspan="3" class="bo-links"><div id="otherques_id" style="display:none">
                    <input type="text" name="otherquestion" />
                  </div>
                    If you forget your password we will ask for the   answer to your security question.</td>
                </tr>
                <tr>
                  <td valign="top" class="lik">&nbsp;&nbsp;Answer : </td>
                  <td colspan="3"><input type="text" name="answer" />
                    <span class="add">*</span></td>
                </tr>
                <tr>
                  <td valign="top" class="lik">&nbsp;&nbsp;Birthday : </td>
                  <td width="15%" class="bo-links"><select name="birth_month" >
                    <option value="select">Select Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                    
                  </select>
                    </td>
                  <td width="3%" class="bo-links"><input name="birth_date" type="text" id="birth_date"  size="2" maxlength="2"></td>
                  <td width="50%" class="bo-links"><input name="birth_year" type="text" id="birth_year"  size="4" maxlength="4">
                    <span class="add">*</span></td>
                </tr>
                <tr>
                  <td valign="top" class="lik">&nbsp;&nbsp;Secondary email : </td>
                  <td colspan="3" class="bo-links"><input type="text" name="sec_email" value="<?php echo $_POST['sec_email']; ?>" />
                            <br />
                    This address is used to authenticate your account   should you ever encounter problems or forget your password. If you do not have   another email address, you may leave this field blank.</td>
                </tr>
                <tr>
                  <td valign="top" class="lik">&nbsp;&nbsp;Location : </td>
                  <td colspan="3"><select name="country" >
                    <option value="select">Select Country</option>
                    <?php
					$sel_cat=mysql_query("select * from `country`");
					while($row_cat=mysql_fetch_array($sel_cat))
					{
					
					?>
                    <option value="<?php echo $row_cat['country_id'];?>" <?php if($_POST['country']==$row_cat['country_id'])  ?>><?php echo $row_cat['country_name'];?></option>
                    <?php } ?>
                  </select>
                    <span class="add">*</span>                  </td>
                </tr>
                <tr>
                  <td valign="top" class="lik">&nbsp;&nbsp;Word Verification : </td>
                  <td colspan="3" align="left"><span class="bo-links">Type the characters you see in the picture below.</span><br />
                            <img src="CaptchaSecurityImages.php?width=100&height=40&characters=5" /><br />
                            <br />
                            <input id="security_code" name="security_code" type="text" />
                            <span class="add">*</span></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="3">&nbsp;</td>
                </tr>
				<tr><td class="inbox" colspan="4"></td></tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="3"><input type="submit" name="reg_button" value="Create my account" onClick="return reg_vali();" /></td>
                </tr>
              </table>
            </form></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="30"><?php include_once "includes/bottom.php"; ?>
    </td>
  </tr>
</table>
</body>
</html>