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

$sql = mysql_query("SELECT * FROM register where Status='Active' and Orderstatus='No' order by ID desc"); 

//while($row = mysql_fetch_array($sql))
//{ 
    // Build your formatted results here. 
    //echo $row['status']."<br />"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Approve Active to Paid</title>
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
		<form action="approve_inactive_to_active_submit.php" method="post" name="form1" id="form1" onSubmit="return approvevalidate()">
		  <table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td class="headertext">&nbsp;</td>
              </tr>
              <tr>
                <td width="3%"><img src="images/icon5.gif" width="19" height="16" /></td>
                <td width="97%" class="headertext">ACTIVE/FREE MEMBERS <span class="paratext">(Waiting for Approval of Paid)</span> </td>
              </tr>
            </table>
              <br />
              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="center" class="smalltextgrey">
                    <div align="left" class="smalltextred"> Below is the list of all Active Profiles waiting approval. You can click on the profile ID to view the registrant details.You  can convert the active/free member to a paid member by clicking Approve to paid </div>
                  </div></td>
                </tr>
              </table>
              <br />             
              <br /></td>
            </tr>
          <tr>
            <td colspan="4" valign="top" class="HeadText1">
			
			
			
             
			 
			 
			 <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
				<thead>
					<tr>
					  <th style="text-align:left; width:50px;" >Sl.No</th>
					  <th width="12%">ID</th>
					  <th width="24%" >Email</th>
					  <th width="21%" >Name</th>
					  <th width="14%">Reg On</th>
					  <th width="9%" >Status</th>
					  <th width="14%" >Approve to Paid </th>
					</tr>
				</thead>
				<tbody>						
					<?php $i = 1; while($row = mysql_fetch_array($sql)){ ?>
						<TR >
						  <td class="smalltextgrey"><?php echo $i++; ?></td>
		
						  <td class="smalltextgrey"><a href="viewprofile.php?ID=<?php echo $row['MatriID'] ?>&amp;Action=approvetopaid"><?php echo $row['MatriID']?></a></td>
						  <td class="smalltextgrey"><?php echo $row['ConfirmEmail']?></td>
						  <td class="smalltextgrey"><?php echo $row['Name']?></td>
						  <td class="smalltextgrey"><?php echo $row['Regdate']?></td>
						  <td class="smalltextred"><?php echo $row['Status']?></td>
						  <td class="smalltextgrey">
						  <a href="#" onClick="newWindow('approve_paid_form.php?id=<?php  echo $row['MatriID']?>','','500','500')">Approve to Paid </a>
						  </td>
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
