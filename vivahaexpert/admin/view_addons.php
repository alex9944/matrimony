<?php include('protect.php'); ?>

<? 



// Database Connection 

include '../dbconnect.php'; 



// If current page number, use it 

// if not, set one! 



if(!isset($_GET['page'])){ 

    $page = 1; 

} else { 

    $page = $_GET['page']; 

} 



// Define the number of results per page 

$max_results = 20; 



// Figure out the limit for the query based 

// on the current page number. 

$from = (($page * $max_results) - $max_results);  



// Perform MySQL query on only the current page number's results 



$result = mysql_query("SELECT MatriID,ConfirmEmail,Name,Gender,Regdate,Status, registered_on FROM register where Status <> 'InActive' and Status <> 'Active' and Status <> 'Featured' order by ID desc "); 



//while($row = mysql_fetch_array($sql))

//{ 

    // Build your formatted results here. 

    //echo $row['status']."<br />"; 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Addons</title>

</head>

<link href="style.css" rel="stylesheet" type="text/css">

<SCRIPT LANGUAGE="JavaScript">

<!-- Begin

var win = null;

function newWindow(mypage,myname,w,h,features) {

  var winl = (screen.width-w)/2;

  var wint = (screen.height-h)/2;

  if (winl < 0) winl = 0;

  if (wint < 0) wint = 0;

  var settings = 'height=' + h + ',';

  settings += 'width=' + w + ',';

  settings += 'top=' + wint + ',';

  settings += 'left=' + winl + ',';

  settings += features;

  win = window.open(mypage,myname,settings);

  win.window.focus();

}

//  End -->

</script>

<body>

<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">

  <tr>

    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">

      <tr>

        <td colspan="2"><?php include("adminheader.php");?></td>

      </tr>

      <tr>

        <td bgcolor="#F7F7F7" width="20%" valign="top"><?php include("adminleft.php");?></td>

        <td width="80%">
		
		
		<?php if(isset($_REQUEST['key']) and $_REQUEST['key'] == 'delete')
		{
		   $id          = $_REQUEST['id'];
		   $sqlsq1      = "select * from paiddetails where Paidid = '$id'";
		   $res_output  = mysql_query($sqlsq1);
		   $countsql    = mysql_affected_rows();
		   if($countsql > 0)
		    {
			   while($recc = mysql_fetch_array($res_output))
			     {
				    $memberid  =  $recc['Pmatriid'];
					$addons    =  $recc['addons']; 
					$plantype  =  $recc['Pplan'];
					$profile_spotlight_amount  = $recc['profile_spotlight_amount'];
					if($plantype == 'Astromatch')
					 {
					    $astromatch  = 'astromatch';
					 }
					if($profile_spotlight_amount != '') 
					 {
					    $spotlight   = 'spotlight';
					 }
					
					if(isset($addons) and $addons == 'addons')
					 {
					    if(isset($astromatch) and $astromatch == 'astromatch')
						 {
						    $addsql  = "update payment_details set astro_match = '0', astro_3months = '0', astro_6month = '0' where matriid = '$memberid' ";
							mysql_query($addsql);
							
							$addsql  = "update payment_details set horoscope_remaining = '0' where MatriID  = '$memberid' ";
						    mysql_query($addsql);
						 }
						if(isset($spotlight) and $spotlight == 'spotlight')
						 {
						    $addsql  = "update payment_details set spot_light = '0' where matriid = '$memberid' ";
							mysql_query($addsql);
						 } 
					 }
					else
					 {
					    $addsql  = "update payment_details set Status = 'Active' where MatriID  = '$memberid' ";
						mysql_query($addsql);
					 } 
					 
					 $sqls = "delete  from paiddetails where Paidid = '$id'";
					 mysql_query($sqls);
					 ?>
					 <script type="text/javascript">
					   window.location  = "view_addons.php";
					 </script>
					 <?php 
				 }
			}
		} ?>

		<form action="approve_inactive_to_active_submit.php" method="post" name="form1" id="form1" onSubmit="return approvevalidate()">

		<table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">

          <tr>

            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="3%">&nbsp;</td>

                <td width="97%" class="headertext">&nbsp;</td>

              </tr>

            </table>

              <br />

              <br />

              <table width="54%" border="0" align="center" cellpadding="1" cellspacing="1">

                <tr>

                  <td><div align="center" class="headertext">
					   Addons Members
					</div></td>

                </tr>

              </table>

              <br /></td>

            </tr>

          <tr>

            <td colspan="4" valign="top" class="HeadText1">

			

			

			

			

			

             <br />             

              <br />

			 

			  <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">

				<thead>

					 <tr>
                      <th class="header" style="padding-left:0"><strong>Matri ID</strong></th>
                      <th class="header" style="padding-left:0"><strong>Name</strong></th>
                      <th class="header" style="padding-left:0"><strong>Membership</strong></th>
                      <th class="header" style="padding-left:0"><strong>Expiry Date</strong></th>
                      <th class="header" style="padding-left:0"><strong>No of Contacts</strong></th>
					  <th class="header" style="padding-left:0"><strong>Amount</strong></th>
					  <th class="header" style="padding-left:0"><strong>Type</strong></th>
					  <th class="header" style="padding-left:0">
					  <?php
					  $sqlss     = "SELECT * FROM paiddetails  order by Paidid  desc";
					  $resultsss = mysql_query($sqlss);
					  $countsss  = mysql_affected_rows();
					  if($countsss > 0)
					  { ?>
					  <strong>Invoice</strong> <?php
					  } ?> </th>
                    </tr>

				</thead>

									

					
					<tbody>	
                    <?php  while($row = mysql_fetch_array($resultsss)){ //print_r($row); ?>
                    <tr >
                      <td class="Partext1"><?php  echo $row['Pmatriid']?></td>
                      <td class="Partext1"><?php  echo $row['Pname']?></td>
                      <td class="Partext1"><?php  if(isset($row['Pplan']) and $row['Pplan'] != '') echo $row['Pplan']; else if(isset($row['profile_spotlight_amount']) and $row['profile_spotlight_amount'] != '') echo 'Profile Spotlight for '.$row['profile_spotlight_duration'].' Days'; ?></td>
                      <td class="Partext1"><?php  $Date = $row['Pactivedate']; $add_days = 0; if($row['Pplanduration'] != '0') $add_days = $row['Pplanduration']; else $add_days = $row['profile_spotlight_duration']; echo date('d-m-Y', strtotime($Date. ' + '.$add_days.' day'));  echo $row['memexpdate']?></td>
                      <td class="Partext1"><?php  if(isset($row['Pnocontct']) and $row['Pnocontct'] != '') echo $row['Pnocontct']; else echo '-';?></td>
					  <td class="Partext1"><?php  if(isset($row['Pamount']) and $row['Pamount'] != '') echo 'MYR.'.$row['Pamount']; else echo 'MYR.'.$row['profile_spotlight_amount'];?></td>
					  <td class="Partext1"><?php  if(isset($row['addons']) and $row['addons'] != '') echo '<b style="color:green;">Addons</b>'; else echo '<b style="color:green;">Plan</b>';?></td>
					  <td class="Partext1">
					  <?php
					  
					  if($countsss > 0)
					   { ?>
					     <a style="color:red;" href="#null" title="View" onClick="newWindow('invoice.php?id=<?php  echo $row['Paidid']?>','','790','500')">Invoice </a> <?php
					   }  ?> 	 
					  &nbsp;&nbsp;<a style="color:red;" href="view_addons.php?key=delete&id=<?php echo $row['Paidid']; ?>">Delete</a>
					  </td>
                    </tr>
                    
                    <? } ?>			

				</tbody>

			  </table>

			 

			 <br />             

              <br />

           

             </td>

            </tr>

          

        </table>

		</form>

		</td>

      </tr>

      <tr>

        <td colspan="2"><?php include("adminfooter.php");?></td>

      </tr>

    </table></td>

  </tr>

</table>

</body>

</html>

