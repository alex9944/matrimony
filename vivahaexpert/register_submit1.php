<?php 

session_start();

//ob_start();

include('dbconnect.php');



if(isset($_POST['EMAILconfirm']))

  $_SESSION['ConfirmEmail'] = $_POST['EMAILconfirm'];



//ob_end_flush();

// connect to the mysql server

//$link = mysql_connect($server, $db_user, $db_pass)

//or die ("Could not connect to mysql because ".mysql_error());



// select the database

//mysql_select_db($database)

//or die ("Could not select database because ".mysql_error());





// Remove HTML tags

$_POST['txtFANAME']= strip_tags($_POST['txtFANAME']);

$_POST['txtMONAME']= strip_tags($_POST['txtMONAME']);

$_POST['txtFalive']= strip_tags($_POST['txtFalive'] );

$_POST['txtMalive']= strip_tags($_POST['txtMalive'] );

$_POST['txtFFO']= strip_tags($_POST['txtFFO']);

$_POST['txtFMO']= strip_tags($_POST['txtFMO']);

//$_POST['txtmsg']= strip_tags($_POST['txtmsg']);



if (!get_magic_quotes_gpc()) {

    $_POST['txtmsg']= addslashes($_POST['txtmsg']);

} else {

    $_POST['txtmsg'] = $_POST['txtmsg'];

}



 

$_POST['txtLooking']= strip_tags($_POST['txtLooking']); 

$_POST['txtFD']= strip_tags($_POST['txtFD']);

$_POST['txtFV']= strip_tags($_POST['txtFV']);

$_POST['txtFT']= strip_tags($_POST['txtFT']);

$_POST['txtFS']= strip_tags($_POST['txtFS']); 

$_POST['txtFO']= strip_tags($_POST['txtFO']);



$fs1= strip_tags($_POST['txtFS1']);

$fs2= strip_tags($_POST['txtFS2']);   



$nbm= strip_tags($_POST['nbm']);

$nsm= strip_tags($_POST['nsm']);



//$brother= $fs1.$nbm;

//$sister = $fs2.$nsm;





$_POST['Fromage']= strip_tags($_POST['Fromage']);

$_POST['Toage']= strip_tags($_POST['Toage']); 

$_POST['txtPHeight']= strip_tags($_POST['txtPHeight']);

$height_range[]  = $_REQUEST['height_range_frm'];
$height_range[]  = $_REQUEST['height_range_to'];
$str_hei         = implode(" to ",$height_range);

#echo '<pre>'; print_r($_REQUEST);
//$_POST['txtPHeight'] = $str_hei;
$_POST['txtPHeight']=$_REQUEST['txtPHeight_from'].' to '.$_REQUEST['txtPHeight_to'];

#echo '<br > FF :'.$_POST['txtPHeight']; exit;

$_POST['txtPComplexion']= strip_tags($_POST['txtPComplexion']);

$_POST['txtPPE']= strip_tags($_POST['txtPPE']); 

$_POST['religion']= strip_tags($_POST['religion']);  

$_POST['caste']= strip_tags($_POST['caste']);

$_POST['txtPEdu']= strip_tags($_POST['txtPEdu']); 

$_POST['txtPcountry']= strip_tags($_POST['txtPcountry']); 

$_POST['txtPReS']= strip_tags($_POST['txtPReS']); 

 $_POST['txtHobby']= implode(",",$_POST['txtHobby']);   

$_POST['txtOh']= strip_tags($_POST['txtOh']);

$_POST['txtInterest']= implode(",",$_POST['txtInterest']);

$_POST['txtOi']= strip_tags($_POST['txtOi']);

$_POST['txtstatus']= strip_tags($_POST['txtstatus']);

$_POST['txtregdate']= strip_tags($_POST['txtregdate']);

$_POST['txtip']= strip_tags($_POST['txtip']);

$_POST['txtref']= strip_tags($_POST['txtref']);

$_POST['txtagent']= strip_tags($_POST['txtagent']);





$subscribe  = '1';

if(isset($_POST['subscribe']))

 {

   $subscribe  = '1';

 }  





$strorderstatus = "No";

//$strchktick = "chklist-tick.gif"

$strchkcross = "chklist-cross.gif";





// check if the username is taken


$check = "delete   from register where ConfirmEmail = '".$_SESSION['ConfirmEmail']."';"; 
$qry = mysql_query($check) or die ("Could not match data because ".mysql_error());

$check = "select ConfirmEmail from register where ConfirmEmail = '".$_SESSION['ConfirmEmail']."';"; 

$qry = mysql_query($check) or die ("Could not match data because ".mysql_error());

$num_rows = mysql_num_rows($qry); 



/*if ($num_rows != 0) { 

ob_start();

header ('Location:email_already_taken.php');

$_SESSION['ConfirmEmail'] = $_POST['EMAILconfirm'];

//echo "Email already Exists";

//echo "<a href=register.html>Try again</a>";

exit; 

} else*/ 



if(1){



// insert the data

	

 $query = "insert into register (Prefix,Termsofservice,ConfirmEmail,ConfirmPassword,Profilecreatedby,Referenceby,Name,Gender,DOB,Age,TOB,POB,Maritalstatus,childrenlivingstatus,Education,EducationDetails,Occupation,Employedin,Annualincome,Religion,Caste,Subcaste,Gothram,Language,Star,Moonsign,Horosmatch,Manglik,Height,Weight,BloodGroup,Bodytype,Complexion,Diet,Smoke,Drink,Address,City,State,Country,Phone,Residencystatus,Fathername,Mothersname,Fatherlivingstatus,Motherlivingstatus,Fathersoccupation,Mothersoccupation,Profile,Looking,FamilyDetails,Familyvalues,FamilyType,FamilyStatus,FamilyOrigin,noofbrothers,noofsisters,nbm,nsm,PE_FromAge,PE_ToAge,PE_HaveChildren,PE_Height,PE_Complexion,PE_MotherTongue,PartnerExpectations,PE_Religion,PE_Caste,PE_Education,PE_Countrylivingin,PE_Residentstatus,Hobbies,OtherHobbies,Interests,OtherInterests,Status,Regdate,IP,Ref,Agent,Orderstatus,photochecklist,videochecklist,Horoschecklist,subscribe,pass,registered_on,place_of_birth,time_of_birth,horo_match,txtHabbits, Mobile) values ('$profile_prefix' ,'".$_SESSION['Accept']."', '".$_SESSION['ConfirmEmail']."', '".md5($_SESSION['ConfirmPassword'])."', '".$_SESSION['ProfileCreatedby']."', '".$_SESSION['Referenceby']."', '".$_SESSION['Name']."', '".$_SESSION['Gender']."', '".$_SESSION['DateofBirth']."', '".$_SESSION['Age']."', '".$_SESSION['Timeofbirth']."', '".$_SESSION['Placeofbirth']."', '".$_SESSION['MaritalStatus']."', '".$_SESSION['ChildrenLivingStatus']."', '".$_SESSION['Education']."', '".$_SESSION['EduDetails']."', '".$_SESSION['Occupation']."', '".$_SESSION['Employedin']."', '".$_SESSION['Annualincome']."', '".$_SESSION['Religion']."', '".$_SESSION['Caste']."', '".$_SESSION['SubCaste']."', '".$_SESSION['txtGothra']."', '".$_SESSION['Mothertongue']."', '".$_SESSION['txtStar']."', '".$_SESSION['txtMoon']."', '".$_SESSION['horo_match']."', '".$_SESSION['txtManglik']."', '".$_SESSION['Height']."', '".$_SESSION['Weight']."', '".$_SESSION['BloodGroup']."', '".$_SESSION['Bodytype']."', '".$_SESSION['Complexion']."', '".$_SESSION['Diet']."', '".$_SESSION['Smoke']."', '".$_SESSION['Drink']."', '".$_SESSION['Address']."', '".$_SESSION['City']."', '".$_SESSION['State']."', '".$_SESSION['Country']."', '".$_SESSION['Phone']."','".$_SESSION['Residencein']."','".$_POST['txtFANAME']."','".$_POST['txtMONAME']."', '".$_POST['txtFalive']."', '".$_POST['txtMalive']."', '".$_POST['txtFFO']."', '".$_POST['txtFMO']."','".$_POST['txtmsg']."', '".$_POST['txtLooking']."', '".$_POST['txtFD']."','".$_POST['txtFV']."','".$_POST['txtFT']."', '".$_POST['txtFS']."', '".$_POST['txtFO']."','$fs1','$fs2','$nbm','$nsm','".$_POST['Fromage']."','".$_POST['Toage']."', 'NULL', '".$_POST['txtPHeight']."', '".$_POST['txtPComplexion']."','".$_POST['Language']."','".$_POST['txtPPE']."', '".$_POST['religion']."',  '".$_POST['caste']."','".$_POST['txtPEdu']."', '".$_POST['txtPcountry']."', '".$_POST['txtPReS']."', '".$_POST['txtHobby']."',  '".$_POST['txtOh']."','".$_POST['txtInterest']."','".$_POST['txtOi']."','".$_POST['txtstatus']."','".date('Y-m-d')."','".$_POST['txtip']."','".$_POST['txtref']."','".$_POST['txtagent']."','$strorderstatus','$strchkcross','$strchkcross','$strchkcross','$subscribe','".$_SESSION['ConfirmPassword']."',now(),'".$_SESSION['place_of_birth']."','".$_SESSION['time_of_birth']."','".$_SESSION['horo_match']."','".$_SESSION['txtHabbits']."','".$_SESSION['mobile']."' )"; 

$insert = mysql_query($query)or die("Could not insert data because ".mysql_error());

if (  $_SESSION['horo_match'] == 'Required' ){
	$cust_id = mysql_insert_id();

	$longQ="SELECT *  FROM `citydata` WHERE `place_name` LIKE '".$place."'";

	$longexe=mysql_query($longQ);

	$longfetch=mysql_fetch_array($longexe);



	$insert_horoscope_sql = "INSERT INTO onlinehoroscope(custid, sex, name, dob_date, dob_month, dob_year, tob_hour, tob_minute, tob_second, timecorrection, place, longitude, latitude, longdir, latdir, timezone, timezonedir, chartstyle, language) VALUES 
	('MM".$cust_id."', '".$_SESSION['Gender']."', '".$_SESSION['Name']."', '".$_SESSION['date']."', '".$_SESSION['month']."', '".$_SESSION['year']."', '".$_SESSION['hour']."', '".$_SESSION['min']."', '".$_SESSION['sec']."', '".$_SESSION['correction_horo']."', '".$_SESSION['place']."', '078.04', '09.56', 'E', 'N', '05.30', 'E', '0', 'ENG')";

	mysql_query($insert_horoscope_sql);
}


// print a success message

//echo "Your user account has been created!<br>";

//echo $query; exit;

?>

<?php 

$stremail = $_SESSION['ConfirmEmail'];

//header ('Location:register_confirm.php?emid=$stremail');

//exit();

unset($_SESSION);

 print "<script>";

     print " self.location='register_confirm.php?emid=$stremail';"; // Comment this line if you don't want to redirect

     print "</script>";

//echo "Now you can <a href=login.html>log in</a>"; 

}

?>

