<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}


       $category=$_REQUEST['ddlcategory'];
	$cid=$_REQUEST['cid'];
	
	if($_REQUEST['cid']!="")
	{
		$cid=$_REQUEST['cid'];
		$select="select * from class_country order by country $cid";
	}
	else
	{
		$select="select * from class_country order by country asc";
	}	
	$strget="c_id=$cid";
              $rowsPerPage =15;
              $query=mysql_query(getPagingQuery($select, $rowsPerPage,$strget)) or die(mysql_error()); 
              $pagingLink = getPagingLink($select, $rowsPerPage,$strget); 
			  $num=mysql_num_rows($query);
	
	if(isset($_REQUEST['id']))
	{
		$cid=$_REQUEST['id'];
		mysql_query("delete from class_country where countryid='$cid'");
		mysql_query("delete from class_state where countryid='$cid'");
		header("location:changecountry.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title><?php echo $adminsitename;?></title>

<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
.style2 {color: #FF0000}
-->
</style>
<script type="text/javascript">
function category11()
{
//alert(document.cate.ddlcategory.options[document.cate.ddlcategory.selectedIndex].value);
window.location.href="changecountry.php?cid="+document.cate.ddlcategory.options[document.cate.ddlcategory.selectedIndex].value;
}
function editfun()
{

alert("This is demo version not allowed to change");
  return false;	


}
</script>

</head>

<body>
<table width="98%" cellpadding="3" cellspacing="1" align="center">
	<tr>
		<td height="26" colspan="9">
			<?php include("includes/adminheader.php");?>		</td>
	</tr>
	<tr><td height="10" colspan="9">&nbsp;</td>
	</tr>
	
	<tr>
	  <td height="20" colspan="9"><?php include("includes/adminmenu.php");?></td>
  </tr>
	
	<tr>
		<td height="223" colspan="2">
			<form name="cate" action="" method="post" onsubmit="return validatelogin();">
			<table width="77%" align="center" cellspacing="0" style="border:solid 1px #0F507F;">
				<tr bgcolor="#669966">
				  <td height="34" colspan="3" align="left" bgcolor="#edcfde"><span class="link1">Country  Management </span></td>
			  </tr>
				<tr>
				  <td height="34" colspan="2" align="left" bgcolor="#faf3f7"><span class="link1"><a href="addcountry.php">Add country</a></span></td>
				  <td width="89%" height="34" align="left" bgcolor="#faf3f7"><select class="combo_box" name="ddlcategory" onchange="javascript:category11();">
                    <option value="">Select Option</option>
                    <option value="Asc">Ascending</option>
                    <option value="Desc">Descending</option>
                  </select></td>
				</tr>
				<tr>
				  <td colspan="3" bgcolor="#faf3f7"><table width="90%" height="79" align="center" cellspacing="0" style="border:1px solid #edcfde;">
						<tr bgcolor="#edcfde" class="">
					  <td width="235" height="29" align="center" bgcolor="#edcfde"><strong>Country name </strong></td>
					  <!--<td width="72" align="center"><strong>Subcategory</strong></td>-->
					  <td width="266" align="center"><strong>Edit</strong></td>
					  <td width="156" align="center"><strong>Delete</strong></td>
					  </tr>
						<?php 
						while($category=mysql_fetch_array($query)){
						$cid=$category['countryid'];
						?>
						<tr class="link1"><td style="padding-left:25px;">&nbsp;&nbsp;<a href="changestate.php?catid=<?PHP echo $cid;?>" class="greenli"><?PHP echo $category['country'];?></a></td>
						<!--<td><a href="changesubcategory.php?catid=<?PHP echo $cid;?>" class="bluebold">Subcategory</a></td>-->
						<td align="center"><a href="editcountry.php?catid=<?PHP echo $cid;?>"><img src="images/edit_f2.png" width="32" height="32" border="0" title="Edit" /></a></td>
						
						<td align="center"><a href="changecountry.php?id=<?php echo $category['countryid'];?>" onclick="return confirm('Are you sure you wish to delete this Record?');"> <!-- <a href="javascript:void(0);" class='boldG2' onclick="javascript:alert('This Feature Is Disabled In The Demo Version.. ');return false;"> --><img src="images/delete.jpg" border="0" title="Delete" /></a></td>
						</tr>
					<?php }?>
						<tr><td colspan="4" align="center">&nbsp;</td></tr>						
						<?php if($num<=0){?>
						<tr>
						  <td colspan="4" align="center"><span class="style1">No Country Found</span></td>
						</tr>
						<?php }?>
						<tr><td colspan="4" align="center"><?php echo $pagingLink;?></td></tr>
						<tr>
						<td colspan="4">&nbsp; </td>
						</tr>
						
				  </table></td>
			    </tr>
               	<tr>
				  <td height="34" colspan="3" align="left" bgcolor="#faf3f7">&nbsp;</td>				  
				</tr>			
		  </table>
		  </form>	  </td>
	</tr>	
</table>
</body>
</html>

<?PHP
 function getPagingQuery($sql, $itemPerPage = 10)
{
	if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
		$page = (int)$_GET['page'];
	} else {
		$page = 1;
	}
	
	// start fetching from this row number
	$offset = ($page - 1) * $itemPerPage;
	
	return $sql . " LIMIT $offset, $itemPerPage";
	
}
function getPagingLink($sql, $itemPerPage = 5,$strGet)
{
	$result        = mysql_query($sql) or die(mysql_error());
	$pagingLink    = '';
	$totalResults  = mysql_numrows($result);
		
	
	$totalPages    = ceil($totalResults / $itemPerPage);
	
		
	// how many link pages to show
	$numLinks      = 10;

		
	// create the paging links only if we have more than one page of results
	if ($totalPages > 1) {
	
		$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;
		
		if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
			$pageNumber = (int)$_GET['page'];
		} else {
			$pageNumber = 1;
		}
		
		// print 'previous' link only if we're not
		// on page one
		if ($pageNumber > 1) {
			$page = $pageNumber - 1;
			if ($page > 1) {
				$prev = " <a href=\"$self?page=$page&$strGet\" class=\"linktex\">| Prev |</a> ";
			} else {
				$prev = " <a href=\"$self?$strGet\" class=\"linktex\">| Prev |</a> ";
			}	
				
			$first = " <a href=\"$self?$strGet\" class=\"linktex\"> First</a> ";
		} else {
			$prev  = ''; // we're on page one, don't show 'previous' link
			$first = ''; // nor 'first page' link
		}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = " <a href=\"$self?page=$page&$strGet\" class=\"linktex\">| Next</a> ";
			$last = " <a href=\"$self?page=$totalPages&$strGet\" class=\"linktex\">| Last</a> ";
		} else {
			$next = ''; // we're on the last page, don't show 'next' link
			$last = ''; // nor 'last page' link
		}

		$start = $pageNumber - ($pageNumber % $numLinks) + 1;
		$end   = $start + $numLinks - 1;		
		
		$end   = min($totalPages, $end);
		
		$pagingLink = array();
		for($page = $start; $page <= $end; $page++)	{
			if ($page == $pageNumber) {
			    
				$pagingLink[] = " $page ";   // no need to create a link to current page
			} else {
				if ($page == 1) {
				  
					$pagingLink[] = " <a href=\"$self?$strGet\" class=\"linktex\">$page</a> ";
				} else {	
				 
					$pagingLink[] = " <a href=\"$self?page=$page&$strGet\" class=\"linktex\">$page</a> ";
				}	
			}
	
		}
		
		$pagingLink = implode(' | ', $pagingLink);
		
		// return the page navigation link
		$pagingLink = $first . $prev . $pagingLink . $next . $last;
		
	}
	
	if(empty($pagingLink)) { $pagingLink="<font color='#dddddd'>  First | Prev | 1 | 2 | 3 | Next | Last </font>"; }
	return $pagingLink;
}
 ?> 
