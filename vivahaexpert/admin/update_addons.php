<?php include('protect.php'); ?>
<? 
// Database Connection 
include '../dbconnect.php'; 
$strmid=$_GET['id']; 
$presult = mysql_query("SELECT * FROM register where MatriID='$strmid' ");
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
window.opener.location.href="addons.php";
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


<?php
if(isset($_POST['submit']))
 {
    $matri_id           =  $_POST['matri_id'];
	$astro_match        =  $_POST['astro_match'];
	$profile_spotlight  =  $_POST['profile_spotlight'];
	$astro_match_count  =  $_POST['astro_match_count'];
	$ctime              =  time();
	
	$astro_1match  = 0;
	$astro_3months = 0;
	$astro_6month  = 0;
	
	if($astro_match == '1')
	{
	  $astro_1match    = 1;
	  $profile_spotlight = 1;
	}  
	else if($astro_match == '2')
	{
	  $astro_3months  = 1;
	  $profile_spotlight = 1;
	}  
	else if($astro_match == '3')
	{
	  $astro_6month   = 1;  
	  $profile_spotlight = 1;  
	}  
	
	$sql_qry = "select * from payment_details where matriid = '$matri_id' ";
	$results = mysql_query($sql_qry);
	$rescount   = mysql_affected_rows();
	if($rescount > 0)
	{
	    $sqls = "update  payment_details set astro_match = '$astro_1match', spot_light = '$profile_spotlight', astro_3months = '$astro_3months', astro_6month ='$astro_6month' where matriid = '$matri_id'";	
		$result = mysql_query($sqls);
	}
	else
	{
		$sqls = "insert into payment_details (matriid, astro_match, spot_light, astro_3months, astro_6month, payer_email, payment_status ) values ('$matri_id', '$astro_1match', '$profile_spotlight', '$astro_3months', '$astro_6month', 'admin', 'Completed')";	
		$result = mysql_query($sqls);
	}
	
	$sql  = "insert into addons (matriid, astro_match_plan, astro_match_count, profile_spotlight, created_date ) values ('$matri_id', '$astro_match', '$astro_match_count', '$profile_spotlight', '$ctime' ) ";
	$result = mysql_query($sql);
	$count = mysql_affected_rows();
	if($count > 0)
	 {
	    $old_balance  = 0;
	    $sqlq   = "select horoscope_remaining from where MatriID = '$matri_id'";
		$result = mysql_query($sqlq);
		$count  = mysql_affected_rows();
		if($count > 0)
		 {
		    while($res = mysql_fetch_array($result))
			 {
			    $old_balance  =  $res['horoscope_remaining'];
			 }
		 }
		$new_balance  =  $old_balance + $astro_match_count;
	    $sql    = "update register set horoscope_remaining = '$new_balance' where MatriID = '$matri_id' ";
	    $result = mysql_query($sql);
	    $msg    = "<p style='color:green; text-align:center;'>Addons Updated Successfully.</p>";
	 }
	 
	 
 }
 ?>

<table width="400" height="400" border="0" cellpadding="0" cellspacing="0" class="GreenBox">
  <tr>
    <td>
	  
	  <form action="addons_confirm.php" method="post" style="height:588px; background:#fff;">
	     <?php if(isset($msg) and $msg != '') echo $msg; ?>
		 <? while($row = mysql_fetch_array($presult)){ ?>
	     <input type="hidden" name="matri_id" value="<?php echo $_GET['id']; ?>" />
		 <table width="100%" cellspacing="0" cellpadding="0" border="0"  align="center"  style="vertical-align:top; padding:30px 20px;">
		  
		  <tr>
        <td colspan="2"><div align="center" class="paratext">Update Addons</div></td>
        </tr>
		
		  <tr>
        <td width="28%" class="Partext1">Matri ID : </td>
        <td width="69%" class="Partext1"><? echo $row['MatriID']?>&nbsp;
          <input name="txthidmid" type="hidden" id="txthidmid" value="<? echo $row['MatriID'] ?>" /></td>
      </tr>
      <tr>
        <td class="Partext1">Name : </td>
        <td class="Partext1"><? echo $row['Name']?>
          <input name="txthidname" type="hidden" id="txthidname" value="<? echo $row['Name'] ?>" /></td>
      </tr>
      <tr>
        <td class="Partext1">Email : </td>
        <td class="Partext1"><? echo $row['ConfirmEmail']?>
          <input name="txthidemail" type="hidden" id="txthidemail" value="<? echo $row['ConfirmEmail'] ?>" /></td>
      </tr>
      <tr>
        <td class="Partext1">Address : </td>
        <td class="Partext1"><? echo $row['Address']?>
          <input name="txthidaddress" type="hidden" id="txthidaddress" value="<? echo $row['Address'] ?>" /></td>
      </tr>
      <tr>
        <td class="Partext1">Payment Mode&nbsp; : </td>
        <td><select name="txtpaymentmode" class="formselect" id="txtpaymentmode">
		<option value="Cash">Cash</option>
          <option value="Cheque">Cheque</option>
		   <option value="Credit Card">Credit Card</option>
          <option value="DD">DD</option>
          <option value="Money Order">Money Order</option>
          <option value="Funds Transfer">Funds Transfer</option>
          <option value="Other">Other</option>
        </select></td>
      </tr>
      <tr>
        <td class="Partext1">Activation Date&nbsp; : </td>
		<? $today1 = strtotime ('now');
$today=date("d-m-Y",$today1); ?>
        <td><input name="txtad" type="text" class="forminput" id="txtad" value="<? echo $today; ?>" /></td>
      </tr>
	  
		  <tr>
		    <td style="vertical-align:top;" class="Partext1">Astro Match</td>
		    <td style="vertical-align:top;" class="Partext1">
			  <select name="astro_match" id="astro_match" onchange="javscript: foo(this.value)" onselect="foo(this.value);">
			    <option value="0"> - Select Plan -</option>
			    <option value="1">1 Year Astromatch - MYR.1,150.00</option>
				<option value="2">6 Month(s) Astromatch - MYR. 850.00</option>
				<option value="3">3 Month(s) Astromatch - MYR. 630.00</option>
			  </select>
			  <input type="hidden" name="txtplan" id="plan" />
			  <input type="hidden" name="astro_match_count" value="" id="astromatch_count" />
			</td>
		  </tr>
		  <tr><td class="Partext1">Duration</td><td class="Partext1"><input type="text" name="txtduration" id="astro_match_duration" /> Day(s)</td></tr>
		  <tr><td class="Partext1">Astro Match Count</td><td class="Partext1"><input type="text" name="txtplancontact" id="astro_match_count" /></td></tr>
		  <tr><td class="Partext1">Amount</td><td class="Partext1"><input type="text" name="txtplanamount" id="astro_match_amount" /></td></tr>
		  <tr>
		    <td style="vertical-align:top;" class="Partext1">Profile Spotlight</td>
		    <td style="vertical-align:top;" class="Partext1">
			  <select name="profile_spotlight" onchange="javascript: updatespotlight(this.value);">
			    <option value="0"> - Select Plan - </option>
			    <option value="1">MYR. 1,200.00 for 3 months </option>
			  </select>
			  <input type="hidden" name="spot_light_duration" id="spot_light_duration" />
			  <input type="hidden" name="spot_light_amount" id="spot_light_amount" />
			  
			</td>
		  </tr>
		  
		  <tr>
			<td class="Partext1">Bank Details : </td>
			<td><textarea name="txtbankdet" cols="30" rows="4" class="forminput" id="txtbankdet"></textarea></td>
		  </tr>
		  
		  <tr><td colspan="2"><input type="submit" value="Submit" name="submit" /></td></tr>
		 </table>
		 
		 <div align="center">
            <input name="button" type="button" class="green-button" onclick="win();" value="Close window" />
         </div>
	     <?php
		 } ?>
		 <SCRIPT language=JavaScript>
			<!-- 
			function win(){
				window.opener.location.href="addons.php";
				self.close();
				//-->
			}
		 </SCRIPT>
	  </form>
	</td>
  </tr>
</table>
<style type="text/css">
 input[type='text'], textarea
 {
  width:150px;
 }
 select
 {
  width:155px;
 }
 td
 {
 padding-bottom:10px;
 }
</style>

<script type="text/javascript">
function updatespotlight(element)
{
  if(element == '1')
	 {
	    document.getElementById('spot_light_duration').value  = '90';
		document.getElementById('spot_light_amount').value  = '1200';
	 }
  else
     {
	    document.getElementById('spot_light_duration').value  = '';
		document.getElementById('spot_light_amount').value    = '';
	 }	 
}

function foo(element) {
   // alert(element);
    var elt = document.getElementById('astro_match').selectedOptions[0].text;
	if(element == '1')
	 {
	    count  = '150';
	    document.getElementById('astro_match_count').value  = count;
		document.getElementById('astromatch_count').value  = count;
		document.getElementById('astro_match_amount').value  = '1150';
		document.getElementById('astro_match_duration').value  = '365';
		document.getElementById('plan').value  = 'Astromatch';
	 }
	else if(element == '2')
	 {
	    count  = '100';
	    document.getElementById('astro_match_count').value  = count;
		document.getElementById('astromatch_count').value  = count;
		document.getElementById('astro_match_amount').value  = '850';
		document.getElementById('astro_match_duration').value  = '180';
		document.getElementById('plan').value  = 'Astromatch';
	 }
	else if(element == '3')
	 {
	    count  = '50';
	    document.getElementById('astro_match_count').value  = count;
		document.getElementById('astromatch_count').value  = count;
		document.getElementById('astro_match_amount').value  = '630';
		document.getElementById('astro_match_duration').value  = '90';
		document.getElementById('plan').value  = 'Astromatch';
	 }
	  
}
</script>

</body>
</html>
