<?php include("memprotect.php"); ?>
<?php include("config.php"); ?>

<?php
session_start();
include('dbconnect.php');

$streiid = $_POST['txteiid'];
$sender = $_SESSION['matriid'];
$subject = "Horoscope view Request";
$body = 'I am interested in your profile. Please enable your horoscope.';

 $insert = "INSERT INTO `sendmessage` ( `receiver`, `sender`, `subject`, `message`, `date_sent`) VALUES ('$streiid', '$sender', '$body', '$body', now());"; 
$exe_insert = mysql_query($insert );


		
		
		
		print "<script>";
		print " self.location='hr_success_confirm.php?eiid=$streiid';"; // Comment this line if you don't want to redirect
		print "</script>";

///////////////////////////////////////////////////////////////////////////////////////////////
?>
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">

</HEAD>
<BODY class="body">



<DIV align="center">
<TABLE width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="BlueTborder">
          <!--DWLayoutTable-->
          <TR>
            <TD height="37" colspan="2">
			<?php include("header.php");?>
			</TD>
    </TR>
          <TR>
            
    </TR>
          <TR>
            <TD  colspan="2"><?php include("topmenu.php");?></TD>
          </TR>
          <TR bgcolor="#FFFFFF">
            <TD colspan="2" valign="top">
			  

  
<!-- START LEFT PART -->  
<DIV align="center">
<TABLE width="100%" border="0" cellpadding="0" cellspacing="0">
<TR>
<TD width="180" height="303" valign="top" bgcolor="#F5F5F5">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
  <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" background="images/middlelinefinal.jpg"><div align="left">&nbsp;&nbsp;<span class="bodysg">Express Interest   </span></div></td>
      <td width="63%">&nbsp;</td>
    </tr>
  </table>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox">
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  </TD>
</TR>
</TABLE>

</DIV>
<!-- END LEFT PART -->	


		  
		    </TD>
    </TR>
			
          <TR>
            <TD><?php include("footer.php");?></TD>
          </TR>
          <TR>
          
    </TR>
          <TR>
         
          </TR>
  </TABLE>
  
</DIV>




</BODY>
</HTML>
