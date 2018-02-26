<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}
    $mcat=$_REQUEST['mcat'];
	$subcat=$_REQUEST['scat'];
	$result=mysql_query("select * from class_subcategory where sid='$subcat' and cid='$mcat'");
	$num=mysql_num_rows($result);
	$final=mysql_fetch_array($result);
	$categoryname=$final['subcategoryname'];
	$sel=mysql_fetch_array(mysql_query("select * from class_category where c_id='$mcat'"));
	$catname=$sel['c_name'];
if(isset($_REQUEST['editcat']))
{
$cat=$_REQUEST['cat'];
$subcategory=$_REQUEST['category'];
//echo "update class_subcategory set subcategoryname='$subcategory' where cit='$cat' and sid='$subcat'";exit;
mysql_query("update class_subcategory set subcategoryname='$subcategory' where cid='$cat' and sid='$subcat'");
header("location:changecategory.php");
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
function editval()
{
if(document.editcat.cat.value=="")
{
 alert("Please Select The Corresponding Category");
 document.editcat.cat.focus();
 return false;
}
if(document.editcat.category.value=="")
{
 alert("Plese Enter The Subcategory");
 document.editcat.category.focus();
 return false;
}  
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
			<table width="77%" align="center" cellspacing="0" style="border:solid 1px #edcfde;">
				<tr>
				  <td height="27" bgcolor="#edcfde" class="link1">&nbsp;&nbsp;Edit Category </td>
				</tr>
				<tr>
				  <td align="right">&nbsp;</td>
				</tr>
				<tr><td valign="top">
					<form action="" method="post" name="editcat" onsubmit="return editval();"><table width="85%" height="79" align="center" cellspacing="0" style="border:1px solid #edcfde;">
						
						<tr class="link1">
						  <td class="link1" height="30">&nbsp;&nbsp;Category </td>
						  <td height="30"><select name="cat" id="cat" class="combo_box">
                            <option value="">Select Category</option>
                         <?PHP 
						  $cat=mysql_query("select * from class_category");
						  while($catresult=mysql_fetch_array($cat))
						  {
						
						  ?><option value="<?PHP echo $catresult['c_id'];?>" <?PHP if($catname==$catresult['c_name']) { ?> selected="selected" <?PHP } ?>> <?PHP echo $catresult['c_name'];  } ?></option>
                          </select></td>
					  </tr>
						<tr class="normal">
						  <td width="30%" class="link1">&nbsp;&nbsp;Sub Category Name </td>
						  <td width="50%"><input name="category" type="text" class="text_box" id="category" value="<?PHP echo $categoryname;?>" size="35" /></td>
						</tr>
						
						<tr>
						 <td colspan="2" align="center" height="50">
					<!-- demo	 <input type="submit" name="editcat" value="Update" onclick="return editfun()"/>  -->
					     <input type="submit" name="editcat" class="but_bg" value="Update"/>
						  <input type="button" name="Submit" value="Cancel" class="but_bg" onclick="javascript:history.back();"/></td>
						</tr>
				  </table>
					</form>
				</td></tr>
				<tr><td>&nbsp;</td></tr>
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
