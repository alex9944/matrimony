<?php include('protect.php'); ?>
<? 
// Database Connection 
include '../dbconnect.php'; 

////////// TOTAL MEMBERS
$Totaldata = mysql_query(" SELECT Count(*) as Totalmembers FROM register ") 
or die(mysql_error()); 
$Tot = mysql_fetch_array( $Totaldata );

////////////TOT INACTIVE MEMBERS
$InActivedata = mysql_query(" SELECT Count(MatriID) as TotInA FROM register where Status='InActive' ") 
or die(mysql_error()); 
$InA = mysql_fetch_array( $InActivedata );

//////////// TOT ACTIVE MEMBERS

//$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register where status ='Active' and Orderstatus='No' "),0); 


$Activedata = mysql_query(" SELECT Count(MatriID) as TotA FROM register where Status='Active' and Orderstatus='No'") 
or die(mysql_error()); 
$A = mysql_fetch_array( $Activedata );

//////////// TOT PAID MEMBERS
$Paiddata = mysql_query(" SELECT Count(MatriID) as TotP FROM register where Status != 'Active' and Status != 'InActive' ") 
or die(mysql_error()); 
$P = mysql_fetch_array( $Paiddata );



//////////// TOT MALE MEMBERS
$Maledata = mysql_query(" SELECT Count(Gender) as TotMale FROM register where Gender='Male' ") 
or die(mysql_error()); 
$Male = mysql_fetch_array( $Maledata );

//////////// TOT FEMALE MEMBERS
$Femaledata = mysql_query(" SELECT Count(Gender) as TotFemale FROM register where Gender='Female' ") 
or die(mysql_error()); 
$Female = mysql_fetch_array( $Femaledata );

//////////// TOT HINDUS MEMBERS
$Hindudata = mysql_query(" SELECT Count(Religion) as TotHindus FROM register where Religion='Hindu' or Religion= '1' ") 
or die(mysql_error()); 
$Hindus = mysql_fetch_array( $Hindudata );

//////////// TOT CHRISTIANS MEMBERS
$Christdata = mysql_query(" SELECT Count(Religion) as TotChrist FROM register where Religion='Christian' or Religion= '5' or Religion= '6' or Religion= '7' or Religion= '8'") 
or die(mysql_error()); 
$Christ = mysql_fetch_array( $Christdata );

//////////// TOT MUSLIMS MEMBERS
$Muslimdata = mysql_query(" SELECT Count(Religion) as TotMuslims FROM register where Religion='Muslim' or Religion= '2' or Religion= '3' or Religion= '4'") 
or die(mysql_error()); 
$Muslims = mysql_fetch_array( $Muslimdata );

//////////// TOT SIKHS MEMBERS
$Sikhdata = mysql_query(" SELECT Count(Religion) as count FROM register where Religion='Sikh' or Religion= '9'") 
or die(mysql_error()); 
$sikhs = mysql_fetch_array( $Sikhdata );


//////////// TOT JAINS MEMBERS
$Jaindata = mysql_query(" SELECT Count(Religion) as count FROM register where Religion='Jain' or Religion= '10' or Religion= '11' or Religion= '12'") 
or die(mysql_error()); 
$jains = mysql_fetch_array( $Jaindata );


//////////// TOT PARSIS MEMBERS
$Parsidata = mysql_query(" SELECT Count(Religion) as count FROM register where Religion='Parsi' or Religion= '13'") 
or die(mysql_error()); 
$parsis = mysql_fetch_array( $Parsidata );

?>

<link href="style.css" rel="stylesheet" type="text/css">
<table width="195" border="0" cellpadding="0" cellspacing="4">
  <tr>
    <td height="25" colspan="2" class="paratext"> <div align="center">Site Statistics </div></td>
  </tr>
  
  <tr>
    <td width="1%">&nbsp;</td>
    <td width="99%" class="smalltextgrey">Total Members : <span class="smalltextred"><?php echo $Tot['Totalmembers']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">In Active Members : <span class="smalltextred"><?php echo $InA['TotInA']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Active Members : <span class="smalltextred"><?php echo $A['TotA']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Paid Members : <span class="smalltextred"><?php echo $P['TotP']; ?></span></td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Male Profiles : <span class="smalltextred"><?php echo $Male['TotMale']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Female Profiles : <span class="smalltextred"><?php echo $Female['TotFemale']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Hindus : <span class="smalltextred"><?php echo $Hindus['TotHindus']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Christians : <span class="smalltextred"><?php echo $Christ['TotChrist']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="smalltextgrey">Muslims : <span class="smalltextred"><?php echo $Muslims['TotMuslims']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	<td class="smalltextgrey">Sikhs : <span class="smalltextred"><?php echo $sikhs['count']; ?></span></td>
    </tr>
  <tr>
	<td>&nbsp;</td>
	<td class="smalltextgrey">Jains : <span class="smalltextred"><?php echo $jains['count']; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	<td class="smalltextgrey">Parsis : <span class="smalltextred"><?php echo $parsis['count']; ?></span></td>
    <td>&nbsp;</td>
  </tr>
</table>
