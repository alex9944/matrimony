<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}
$cateid=$_REQUEST['catid'];
$result=mysql_query("select * from class_country where countryid='$cateid'");
$num=mysql_num_rows($result);
$final=mysql_fetch_array($result);

if(isset($_REQUEST['editcat']))
{
	$catname=$_REQUEST['category'];
	mysql_query("insert into class_country (country) values ('$catname')");
	
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
<script language="javascript">
function val()
{
 if(document.addcategory.category.value=="")
 {
  alert("Please Enter The Country Name");
  document.addcategory.category.focus();
  return false;
 }
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
			<table width="77%" align="center" cellspacing="0" style="border:solid 1px #669966;">
				<tr>
				  <td height="27" bgcolor="#edcfde" class="link1">&nbsp;&nbsp;Add Country </td>
				</tr>
				<tr>
				  <td align="right" bgcolor="#faf3f7">&nbsp;</td>
				</tr>
				<tr><td valign="top" bgcolor="#faf3f7">
					<form name="addcategory" enctype="multipart/form-data" method="post" onsubmit="return val();"><table width="400" height="79" align="center" cellspacing="0" style="border:1px solid #D8F1E4;">
						<tr><td height="10"></td></tr>
						<tr class="normal" bgcolor="#faf3f7">
						  <td width="171" class="link1">&nbsp;&nbsp;Country Name</td>
						  <td width="195" align="">
						    <input name="category" type="text" id="category" class="text_box" value="<?php echo $final['country'];?>" />
						  </td>
						</tr>
						
						
						<tr><td colspan="2" align="center" bgcolor="#faf3f7">
				<!-- demo		<input type="button" onclick="alert('This Feature Is Disabled In The Demo Version...'); return false;" name="editcat" value="Submit" /> -->
						<input type="submit" name="editcat" value="Submit" class="but_bg" />
						  &nbsp;&nbsp;<input type="button" class="but_bg" name="Submit" value="Back" onclick="javascript:history.back();"/></td></tr>
						<tr><td height="10"></td></tr>
				  </table></form>
				</td></tr>
				<tr bgcolor="#faf3f7"><td>&nbsp;</td></tr>
		  </table>	  </td>
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
