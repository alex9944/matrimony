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

$result = mysql_query("SELECT MatriID,ConfirmEmail,Name,Gender,Regdate,Status FROM register where Status <> 'InActive' and Status <> 'Active' and Status <> 'Featured' order by ID desc "); 

//while($row = mysql_fetch_array($sql))
//{ 
    // Build your formatted results here. 
    //echo $row['status']."<br />"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Paid Member Reports</title>
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
        <td width="80%">
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
				 
					   Paid Members
					
					 
					
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
					 <th style="text-align:left; width:50px;" >Sl.No</th>
					  <th width="8%" ><strong>ID</strong></th>
					  <th width="17%"><strong>Email</strong></th>
					  <th width="17%" ><strong>Name</strong></th>
					  <th width="10%" ><strong>Gender</strong></th>
					  <th width="15%"><strong>Reg On</strong></th>
					  <th width="13%" ><strong>Status</strong></th>
					  <th width="16%" ><strong>Options</strong></th>
					</tr>
				</thead>
				<tbody>						
					<?php $i = 1; while($row = mysql_fetch_array($result)){ ?>
						<TR >
						  <td class="smalltextgrey"><?php echo $i++; ?></td>		
						  <td class="smalltextgrey"><?php echo $row['MatriID']?></td>
						  <td class="smalltextgrey"><?php echo $row['ConfirmEmail']?></td>
						  <td class="smalltextgrey"><?php echo $row['Name']?></td>
						  <td class="smalltextgrey"><?php echo $row['Gender']?></td>
						  <td class="smalltextgrey"><?php echo $row['Regdate']?></td>
						  <td class="smalltextgrey"><?php echo $row['Status']?></td>
						  <td class="smalltextgrey"><a href="viewprofile.php?ID=<?php echo $row['MatriID']?>">View</a></td>
						  </tr>						
				   <?php }  ?>					
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
