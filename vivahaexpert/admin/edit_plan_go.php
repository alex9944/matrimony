<?php include('protect.php'); ?>
<? 
// Database Connection 
include '../dbconnect.php'; 
$strpid=$_GET['id']; 
$presult = mysql_query("SELECT * FROM membershipplan where planid='$strpid' ");

$plan_result = mysql_query("SELECT * FROM membershipplan");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>login</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<script language="javascript1.1">

function Check_form() {


 if(document.form1.txtpdn.value == "") {
alert("Kindly enter Plan Display name.");
document.form1.txtpdn.focus();
return false;
}


if(document.form1.txtnoc.value == "" ) {
alert("Kindly enter No of Contacts.");
document.form1.txtnoc.focus();
return false;
}

if(document.form1.txpa.value == "" ) {
alert("Kindly enter plan amount.");
document.form1.txpa.focus();
return false;
}




if(document.form1.phone.value == "") {
alert("Kindly enter your Phone no.");
document.form1.phone.focus();
return false;
}

//alert on finding all letters


		var illegalChars = /\W/;
  // allow only letters, numbers, and underscores
    if (illegalChars.test(document.form1.txpa.value)) {
       alert ("Please Remove Unwanted SPACE or Specaial Chararacters in Plan amount.");
	document.form1.txpa.focus( );
  	return false;
  	
    } 




return true;
}

//-->
</script>



<SCRIPT language=JavaScript>
<!-- 
function win(){
window.opener.location.href="admin-edit-plans.php";
self.close();
//-->
}
</SCRIPT>
<script>
function check_phone(field_name)
{
	var i, max, field_info
	field_info = eval("document.form1." + field_name);
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
<body>
<table width="400" height="400" border="0" cellpadding="0" cellspacing="0" class="GreenBox">
  <tr>
    <td>
	<form action="edit_plan_submit.php" method="post" name="form1" id="form1" onSubmit="return Check_form()">
	
	<table width="100%" height="387" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<? while($row = mysql_fetch_array($presult)){
	
	
	 ?>
      <tr>
        <td width="3%">&nbsp;</td>
        <td colspan="2"><div align="center">EDIT THIS PLAN </div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="33%" class="Partext1">Plan Display Name </td>
        <td width="64%"><input name="txtpdn" type="text" class="forminput" id="txtpdn" value="<? echo $row['plandisplayname'] ?>" maxlength="50" />
          <input name="txtpid" type="hidden" id="txtpid" value="<? echo $row['planid'] ?>" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="Partext1">No of Contacts </td>
        <td><input name="txtnoc" type="text" class="forminput" id="txtnoc" value="<? echo $row['plannoofcontacts'] ?>" maxlength="50" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="Partext1">Plan Duration </td>
        <td><select name="txtpd" id="txtpd" class="formselect" >
		 <option value="<?php echo $row['planduration'] ?>"><? echo $row['planduration'] ?></option>
          <option value="360">360 days -(12 Months)</option>
		  <option value="180">180 days -(6 Months)</option>
		  <option value="90">90 days -(3 Months)</option>
        </select>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="Partext1">Plan Amount </td>
        <td><input name="txpa" type="text" class="forminput" id="txpa" value="<? echo $row['planamount'] ?>" maxlength="50"  onKeyUp="check_phone('txpa')" /></td>
      </tr>
	  
	   <!--<tr>
        <td>&nbsp;</td>
        <td class="Partext1">Astromatch Count </td>
        <td><input name="astromatch_count" type="text" class="forminput" id="txpa" value="<? echo $row['astromatch_count'] ?>" maxlength="50"  onKeyUp="check_phone('txpa')" /></td>
      </tr>-->
	  
	   <tr>
        <td>&nbsp;</td>
        <td class="Partext1">SMS Count </td>
        <td><input name="sms_count" type="text" class="forminput" id="txpa" value="<? echo $row['sms_count'] ?>" maxlength="50"  onKeyUp="check_phone('txpa')" /></td>
      </tr>
	  
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="center">
          <input name="Submit" type="submit" class="formselect" value="Edit Plan" />
          <input name="Submit2" type="reset" class="formselect" value="Reset" />
</div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <div align="center">
            <input name="button" type="button" class="green-button" onclick="win();" value="Close window" />
          </div>
        </div></td>
        </tr>
		<? } ?>
    </table>
	
	</form>
	</td>
  </tr>
</table>

</body>
</html>
