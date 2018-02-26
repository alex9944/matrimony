<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/inboxmsg.js"></script>
<style type="text/css">
 .clsTable td
 {
  padding:5px;
 }
 *, body, html
 {
  margin:0;
  padding:0;
 }
 .profile_block
 {
  margin-top:0;
 }
 
</style>
</head>

<body>
<?php include("config.php"); 
$streiid = $_GET['id'];

?>
<!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->

 <div class="profile_block">

        <div class="header">

          <h3 class="float_left title">View Address and Email </h3>

        </div>

        <div class="body" align="left">

          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">

            <tr>

              <td><table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">

                  

                  <tr>

                    <td>
					
					
					<?php



					// View Address For PAID MEMBERS (Should be into Membership and contact Allocation) ////
					$sql  = "SELECT MatriID,Noofcontacts,Status FROM register WHERE DATEDIFF( CURRENT_DATE, Memshipexpirydate ) <1 AND Status <> 'InActive' AND Status <> 'Active' AND Noofcontacts >0 AND MatriID ='".$_SESSION['username']."' ";
					$adview = mysql_query($sql);
					$counts = mysql_affected_rows();
					$reccc = mysql_fetch_array($adview);
					//print_r($reccc['Noofcontacts']);
					
					if($reccc['Noofcontacts'] <= 0)
					
					{
					
						echo "You dont have any credits to view the contacts.";		
					
					} 
					
					else 
					
					{
					
					
					
					
					
							$strid=$_REQUEST['id'];
					
							$result = mysql_query("SELECT * FROM register Where MatriID ='$strid' ");
					
							while($row = mysql_fetch_array($result)) 
					
							{  ?>
					
							<table width="90%" border="1" cellpadding="2" cellspacing="2" bgcolor="#ECECEC" class="clsTable">
					
							<tr>
					
							<td width="35%" bgcolor="#FFFFFF">Matri ID : </td>
					
							<td width="65%" bgcolor="#FFFFFF"><?php echo $row['MatriID'] ?></td>
					
							</tr>
					
							<tr>
					
							<td bgcolor="#FFFFFF">Name : </td>
					
							<td bgcolor="#FFFFFF"><?php echo $row['Name'] ?></td>
					
							</tr>
					
							<tr>
					
							<td bgcolor="#FFFFFF">Email : </td>
					
							<td bgcolor="#FFFFFF"><?php echo $row['ConfirmEmail'] ?></td>
					
							</tr>
					
							<tr>
					
							<td bgcolor="#FFFFFF">Address : </td>
					
							<td bgcolor="#FFFFFF"><?php echo $row['Address'] ?></td>
					
							</tr>
					
							<tr>
					
							<td bgcolor="#FFFFFF">Phone : </td>
					
							<td bgcolor="#FFFFFF"><?php echo $row['Phone'] ?></td>
					
							</tr>
					
							<tr>
					
							<td bgcolor="#FFFFFF">Mobile : </td>
					
							<td bgcolor="#FFFFFF"><?php echo $row['Mobile'] ?></td>
					
							</tr>
					
							</table>
					
							<?php } ?>
					
					<?php
					
					}
					
					/// DECRESE ONE ASSURED CONTACTS //////////////////////// FOR LOGGED MEMBER 
					
					$update = mysql_query("UPDATE register SET Noofcontacts = (Noofcontacts-1) WHERE MatriID ='".$_SESSION['username']."' ");
					
					?>	
					
					
					</td>
                  </tr>

                  

                  <tr>

                    <td>&nbsp;</td>
                  </tr>

                  <tr>

                    <td>&nbsp;</td>
                  </tr>

                  <tr>

                    <td>&nbsp;</td>
                  </tr>

                </table></td>

            </tr>

          </table>

          <div class="hline2"></div>

        </div>

      </div>

</body>
</html>