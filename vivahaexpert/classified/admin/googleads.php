<?php
ob_start();
session_start();
include "../config/error.php";
include "../pagination.php";
if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}
if(isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
	$sql1=mysql_query("delete from google_ad where ad_id='$id'") ;
	if($sql1)
	{
		header("location:googleads.php?del");
	}
	
}	

  
  
 // echo mysql_num_rows($sel_ad); 
  

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title><?php echo $adminsitename;?></title>
</head>

<body>
<table width="98%" align="center" cellpadding="3" cellspacing="1">
	<tr>
		<td height="26" colspan="9">
			<?php include("includes/adminheader.php");?>		</td>
	</tr>
	<tr><td height="10" colspan="9">&nbsp;</td>
	</tr>
	
	<tr>
	  <td height="20" colspan="9"><?php include("includes/adminmenu.php");?></td>
  </tr>
	
		<?php if(isset($_REQUEST['add']))
				{
		 ?>
		 <tr>
				  <td height="30" colspan="9" align="center" bgcolor="#faf3f7"><font color="#FF0000" size="4">Google Ads Added Successfully</font></td>				  
				
		</tr>
		<?php } ?>
		
		<?php if(isset($_REQUEST['upd']))
				{
		 ?>
		 <tr>
				  <td height="30" colspan="9" align="center" bgcolor="#faf3f7"><font color="#FF0000" size="4">Google Ads Updated Successfully</font></td>				  
				
		</tr>
		<?php } ?>
		
		<?php if(isset($_REQUEST['del']))
				{
		 ?>
		 <tr>
				  <td height="30" colspan="9" align="center" bgcolor="#faf3f7"><font color="#FF0000" size="4">Google Ads Deleted Successfully</font></td>				  
				
		</tr>
		<?php } ?>
		<tr>
				  <td height="30" colspan="4" align="left" bgcolor="#faf3f7">&nbsp;</td>				  
				<td height="30" colspan="5" align="Right"  bgcolor="#faf3f7"><span class="link1"><a href="addgoogleads.php">Add a new google Ads</a></span></td>
		</tr>
		<tr>
		<td height="32" colspan="9"></td>
		</tr>
		<tr>
		<td  colspan="9" valign="top">
		<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #edcfde;">
  <tr bgcolor="#edcfde" height="30" >
    
    <th align="center" width="20%" >Location</th>
	
    <th align="center" width="40%" >Google Ads</th>
	
	<th align="center" width="20%">Edit</th>
	
    <th align="center" width="20%">Delete</th>
  </tr>
  <?php
  $sql="select * from google_ad order by location desc"; 
 $rowsPerPage =3;
$strget="";
  $query=mysql_query(getPagingQuery1($sql,$rowsPerPage,$strget)) or die(mysql_error()); 
  $pagingLink = getPagingLink1($sql,$rowsPerPage,$strget); 
  $countuser=mysql_num_rows($query);
  while($tab=mysql_fetch_array($query))
  { ?>
  <tr  bgcolor="#faf3f7" height="250">
    <td align="center"><?php echo $tab['location']; ?></td>
	
    <td align="center" ><?php echo $tab['source']; ?></td>
	
	<td align="center"><a href="editgoogleads.php?id=<?php echo $tab['ad_id']; ?>"><img src="images/edit_f2.png" width="32" height="32" border="0" title="Edit" /></a></td>
	
    <td align="center" ><a href="googleads.php?id=<?php echo $tab['ad_id']; ?>" onclick="return confirm('Are you sure you wish to delete this Record?');"><img src="images/delete.jpg" border="0" title="Delete" /></a></td>
	</tr>
<?php	
	//$i++; 
	}
?>  
  
</table>
		</td>
		</tr>
<tr><td align="right" colspan="9"><?php echo $pagingLink; ?></td></tr>
	
</table>
</body>
</html>

