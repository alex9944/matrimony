<?php

/**

 * The letter l (lowercase L) and the number 1

 * have been removed, as they can be mistaken

 * for each other.

 */



function createRandomPassword() {



    $chars = "abcdefghijkmnopqrstuvwxyz023456789";

    srand((double)microtime()*1000000);

    $i = 0;

    $pass = '' ;



    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }



    return $pass;



}



// Usage

$password = createRandomPassword();

//echo "Your random password is: $password";





//?heck that we have a file

if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {

  //Check if the file is JPEG image and it's size is less than 350Kb

  $filename = basename($_FILES['uploaded_file']['name']);

  $ext = substr($filename, strrpos($filename, '.') + 1);

 // if (($ext == "jpg") && ($_FILES["uploaded_file"]["type"] == "image/jpg") &&

  if (($ext == "jpg" || $ext == "JPG" || $ext == "jpeg" || $ext == "JPEG" || $ext == "gif" || $ext == "png" ) &&

 

    ($_FILES["uploaded_file"]["size"] < 350000)) {

    //Determine the path to which we want to save this file

      $newname = dirname(__FILE__).'/SuccessStory_Photos/'.$password.$filename;

	  $dbstorefilename = $password.$filename;

      //Check if the file with the same name is already exists on the server

      if (!file_exists($newname)) {

	  

        //Attempt to move the uploaded file to it's new place

        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {

          // echo "It's done! The file has been saved as: ".$newname;

/////////////////////////////////////////////////////////////////////////////////////////////////////

include('dbconnect.php');

$strapprove = "No";

 $_POST['txtbn']= strip_tags($_POST['ur_fname'])." ".strip_tags($_POST['ur_lastname']);

$_POST['txtbid']= strip_tags($_POST['ur_matriid']);

$_POST['txtgn']= strip_tags($_POST['partner_fname'])." ".strip_tags($_POST['partner_lastname']);

$_POST['txtgid']= strip_tags($_POST['partner_matriid']);

$_POST['txtmdate']= strip_tags($_POST['WeddingDate']);

$_POST['txtmsg']= strip_tags($_POST['Message']);
$_POST['txtmsg']= str_replace("'","",$_POST['txtmsg']);
$_POST['txturemail']= strip_tags($_POST['ur_email']);

$_POST['txtpartneremail']= strip_tags($_POST['partner_email']);

$_POST['share']= strip_tags($_POST['share']);
$_POST['tv']= strip_tags($_POST['tv']);
$_POST['en_date']= strip_tags($_POST['en_date']);

$_POST['mar_date']= strip_tags($_POST['mar_date']);


$email = $_POST['txturemail'];

$email1 = $_POST['txtpartneremail'];

$sel = "SELECT count(*) as cny FROM successstory where bride_email = '$email' or bride_email = '$email1' or groom_email = '$email' or groom_email = '$email1'" ;
$qry = mysql_query($sel);
$res = mysql_fetch_array($qry );

if($res['cny']==0) {

$sql = mysql_query("insert into successstory (weddingphoto,bridename,brideid,groomname,groomid,marriagedate,successmessage,approve,bride_email,groom_email,	share,tv,en_date,mar_date) values ('$dbstorefilename','".$_POST['txtbn']."','".$_POST['txtbid']."','".$_POST['txtgn']."','".$_POST['txtgid']."','".$_POST['txtmdate']."','".$_POST['txtmsg']."','$strapprove','".$_POST['txturemail']."','".$_POST['txtpartneremail']."','".$_POST['share']."','".$_POST['tv']."','".$_POST['en_date']."','".$_POST['mar_date']."')") 

or die("Could not insert data because ".mysql_error());



print "<script>";

print " self.location='ss_success_confirm.php';"; // Comment this line if you don't want to redirect

print "</script>";

}  else {
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<style>
.profile_block div.body {
    font-size: 12px !important;
}
</style>
<SCRIPT language="Javascript">

<!--

<!--

<!--

		


function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}



function MM_validateForm() { //v4.0

  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;

  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);

    if (val) { nm=val.name; if ((val=val.value)!="") {

      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');

        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';

      } else if (test!='R') { num = parseFloat(val);

        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';

        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');

          min=test.substring(8,p); max=test.substring(p+1);

          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';

    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }

  } if (errors) alert('The following error(s) occurred:\n'+errors);

  document.MM_returnValue = (errors == '');

}

//-->















</SCRIPT>
</head>

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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Success Story</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/innerpagesidebar.php'); ?>
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
          <h2 class="float_left title">Welcome back!</h2>
        </div>
        
		
		
	
		
		<div class="body">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
           
                 
                  <tr>
                    <td><div align="center">
                         <table width="100%" bgcolor="#FFF5EB" cellspacing="5px">




<tr>
  <td style='padding-left:10px'>Thank you for returning to our success story page!<br /><br />
A success story has already been submitted under the email address you entered, but we would love to hear from you again. Please email us your updates at <?php echo $sitename; ?>.</td>
</tr>
<tr>
  <td style='padding-left:10px'>&nbsp;</td>
</tr>
</table>
                      </div></td>
                  </tr>
                
                 
                </table></td>
            </tr>
          </table>
        </div>
		
	
		
		
	
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
      </div>
      <div class="banner_h_std"><img src="images/H_STD_BANNER.gif" width="468" height="80" /></div>
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
    </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>

<script language = "Javascript">
/**
 * DHTML email validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}

function ValidateForm(){
	var emailID=document.frmSample.txtEmail
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter your Email ID")
		emailID.focus()
		return false
	}
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
	return true
 }
</script>


</body>
</html>







<?

}

/////////////////////////////////////////////////////////////////////////////////////////////////////		   

		   

        } else {

           echo "Error: A problem occurred during file upload!";

        }

      } else {

         echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";

      }

  } else {

    // echo "Error: Only .jpg (or) .gif (or) .png images under 350Kb are accepted for upload";

print "<script>";

print " self.location='submit_success_stories.php?Action=err';"; // Comment this line if you don't want to redirect

print "</script>";

  }

} else {

 echo "Error: No file uploaded";

}

?>
