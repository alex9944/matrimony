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

$max_results = 25; 



// Figure out the limit for the query based 

// on the current page number. 

$from = (($page * $max_results) - $max_results);  



// Perform MySQL query on only the current page number's results 



$sql = mysql_query("SELECT * FROM register where Status='InActive' or Status= '' order by ID desc"); 



//while($row = mysql_fetch_array($sql))

//{ 

    // Build your formatted results here. 

    //echo $row['status']."<br />"; 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Approve Inactive to Active</title>

</head>

<link href="style.css" rel="stylesheet" type="text/css">



<body>

<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">

  <tr>

    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">

      <tr>

        <td colspan="2"><?php include("adminheader.php");?></td>

      </tr>

      <tr>

        <td bgcolor="#F7F7F7" width="20%" valign="top"><?php include("adminleft.php");?></td>

        <td width="80%" valign="top">


		<?php //include('features_email.php'); ?>
		

		<form action="approve_inactive_to_active_submit.php" method="post" name="form1" id="form1" onSubmit="return approvevalidate()">

		  <table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">

          <tr>

            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td>&nbsp;</td>

                <td class="headertext">&nbsp;</td>

              </tr>

              <tr>

                <td width="3%"><img src="images/icon7.gif" width="19" height="16" /></td>

                <td width="97%" class="headertext">INACTIVE MEMBERS <span class="paratext">(Waiting for Approval)</span> </td>

              </tr>

            </table>

              <br />

              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">

                <tr>

                  <td><div align="center" class="smalltextgrey">

                    <div align="left" class="smalltextred"> Below is the list of all InActive Profiles waiting approval. You can click on the profile ID to view the registrant details.You can   convert the active/free member  by clicking active link </div>

                  </div></td>

                </tr>

              </table>

              <br />

              <table width="54%" border="0" align="center" cellpadding="1" cellspacing="1">

                <tr>

                  <td><div align="center" class="BlueBoxheader"><?php $StrAction=$_GET['Action'];

					if ($StrAction == "not check")

					{

					

					echo "You must Check atleast One Profile";

					

					}

					?>

					</div></td>

                </tr>

              </table>

              <br /></td>

            </tr>

          <tr>

            <td colspan="4" valign="top" class="HeadText1">

			

			

			   <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">

				<thead>

					 <tr>

					  <th style="text-align:left; width:50px;" >Sl.No</th>

					  <th >ID</th>

					  <th >Email</th>

					  <th >Name</th>

					  <th >Reg On</th>

					  <th >Status</th>

					  <th >View Profile </th>

					  <th >Check Approve</th>

					</tr>

				</thead>

				<tbody>						

					<?php $i = 1;  while($row = mysql_fetch_array($sql)){ ?>

					<TR >

					  <td class="smalltextgrey"><?php echo $i++; ?></td>

	

					  <td class="smalltextgrey"><a href="viewprofile.php?ID=<?php echo $row['MatriID'] ?>&amp;Action=approve"><?php echo $row['MatriID']?></a></td>

					  <td class="smalltextgrey"><?php echo $row['ConfirmEmail']?></td>

					  <td class="smalltextgrey"><?php echo $row['Name']?></td>

					  <td class="smalltextgrey"><?php echo $row['registered_on']?></td>

					  <td class="smalltextred"><?php echo $row['Status']?></td>

					  <td class="smalltextgrey"><a href="viewprofile.php?ID=<?php echo $row['MatriID'] ?>" target="_blank">Profile</a></td>

					  <td class="smalltextgrey"> <div align="center">

						<input name="chkapprove[]" type="checkbox" id="chkapprove[]" value="<?php echo $row['MatriID']?>">

					  </div></td>

					</tr>

					

					<?php }   ?>				

				</tbody>

			  </table>

			 

			 

			 <br />             

              <br />

			

             

            

			  

              <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">

                <tr>

                  <td><div align="right">

                    <input name="Submit" type="submit" class="green-button" value="Approve" />

                  </div></td>

                </tr>

              </table>

           

			  

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

