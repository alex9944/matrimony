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

$sql = "SELECT MatriID, Status,date_format(expdays,'%d-%M-%Y') as Memshipexpirydate, DATEDIFF( CURRENT_DATE, Memshipexpirydate ) AS expdays FROM register WHERE DATEDIFF( CURRENT_DATE, Memshipexpirydate ) > 0  order by ID desc ";

//$sql = "select MatriID, Status,date_format(expdays,'%d-%M-%Y') as Memshipexpirydate, DATEDIFF( r.expdays, NOW()) AS expdays from register r where (DATEDIFF( r.expdays, NOW()) > 1 and DATEDIFF( r.expdays, NOW()) < 10 ) or DATEDIFF( r.expdays, NOW()) < 10 ";

$sql = mysql_query($sql); 

//while($row = mysql_fetch_array($sql))
//{ 
    // Build your formatted results here. 
    //echo $row['status']."<br />"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Membership Expired list</title>
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
		
		
		  <table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">
          <tr>
            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td class="headertext">&nbsp;</td>
              </tr>
              <tr>
                <td width="3%"><img src="images/icon16.gif" width="19" height="16" /></td>
                <td width="97%" class="headertext">RENEW - Membership Expired Members </td>
              </tr>
            </table>
              <br />
              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="center" class="smalltextgrey">
                    <div align="left" class="smalltextred"> Below is a complete list of profiles that&nbsp;EXPIRED. You can directly select &nbsp;ID  below to renew membership.<br />
                      You can click RENEW Now Link to do renewal of membership.</div>
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
					  <th>Matri ID </th>
					  <th>Status </th>
					  <th>Membership Expired on </th>
					  <th>Expiry Days</th>
					  <th>Action</th>
					</tr>
				</thead>
				<tbody>	    <?php  $i = 1;      
				        while($row=mysql_fetch_array($sql)) { 	  ?>
						<tr>
						  <td><?php echo $i++; ?></td>
						  <td ><a href="viewprofile.php?ID=<? echo $row['MatriID']; ?>" target="_blank"><? echo $row['MatriID']; ?></a></td>
						  <td ><? echo $row['Status']; ?></td>
						  <td ><? echo $row['Memshipexpirydate']; ?></td>
						  <td ><? echo '-'.$row['expdays']; ?></td>
						  <td > <a href="#" onClick="newWindow('approve_paid_form.php?id=<?php  echo $row['MatriID']?>','','400','400')">Renew Now </a></td>
						  
						</tr>
						<? } ?>		
				</tbody>
			  </table>
			
		
			 
			 <br /><br />
             
			 
			 
			 
			 
			  
			  </td>
            </tr>
          
        </table>
		
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
