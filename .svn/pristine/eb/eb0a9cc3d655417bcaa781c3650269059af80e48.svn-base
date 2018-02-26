<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}


      $subcategory=$_POST['ddlcategory'];
	  $cateid=$_REQUEST['catid'];
	
	$rowcat=mysql_fetch_array(mysql_query("select * from class_category where c_id='$cateid'"));
	
	
	if($_REQUEST['cid']!="")
	{
	         
		$cateid=$_REQUEST['catid'];
		$cid=$_REQUEST['cid'];
		$select="select * from class_subcategory where cid='$cateid' order by subcategoryname $cid";
	}
	else
	{
	$select="select * from class_subcategory where cid='$cateid' order by subcategoryname asc";
	}
	 $strget="catid=$cateid&cid=$cid";
              $rowsPerPage =15;
              $query=mysql_query(getPagingQuery($select, $rowsPerPage,$strget)) or die(mysql_error()); 
              $pagingLink = getPagingLink($select, $rowsPerPage,$strget); 
			  $num=mysql_num_rows($query);
	
	if($_REQUEST['id'])
	{
	$cateid=$_REQUEST['catid'];
	  $cidd=$_REQUEST['cid'];
	  $delid=$_REQUEST['id'];
	  $delse=mysql_fetch_array(mysql_query("select * from class_subcategory where sid='$delid'"));
	 
	  mysql_query("delete from class_subcategory where sid='$delid'");
	  header("location:changesubcategory.php?catid=$cateid");
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
window.location.href="changesubcategory.php?cid="+document.subcat.ddlcategory.options[document.subcat.ddlcategory.selectedIndex].value +"&catid="+<?php echo $cateid;?>
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
			<form name="subcat" action="" method="post" onsubmit="return validatelogin();">
			<table width="77%" align="center" cellspacing="0" style="border:solid 1px #edcfde;">
				<tr bgcolor="#edcfde">
				  <td height="34" align="left" bgcolor="#edcfde"><span class="link1">Sub Category Management&nbsp;&nbsp;&nbsp;&gt;&gt;</span></td>
			      <td height="34" align="left" bgcolor="#edcfde"><span class="link1"><?php echo $rowcat['c_name']; ?></span></td>
			      <td align="left" bgcolor="#edcfde">&nbsp;</td>
			      <td align="left" bgcolor="#edcfde">&nbsp;</td>
			      <td align="right" bgcolor="#edcfde" class="ad_text_color"><a href="changecategory.php">Back</a></td>
			  </tr>
				<tr>
				  <td width="24%" height="34" align="left" bgcolor="#faf3f7"><span class="link1"><a href="addsubcategory.php">Add a new subcategory</a></span></td>
				  <td height="34" colspan="4" align="left" bgcolor="#faf3f7"><select class="combo_box" name="ddlcategory" onchange="javascript:category11();">
                    <option value="">Select Option</option>
                    <option value="Asc">Ascending</option>
                    <option value="Desc">Descending</option>
                                    </select>                                    </td>
			    </tr>
				<tr>
				  <td colspan="5" bgcolor="#faf3f7"><table width="90%" height="79" align="center" cellspacing="0" style="border:1px solid #edcfde;">
						<tr bgcolor="#edcfde" class="">
					  <td width="375" height="29" align="center" bgcolor="#edcfde"><strong>Category Name</strong></td>
					  <td width="141" align="center"><strong>Edit</strong></td>
					  <td width="141" align="center"><strong>Delete</strong></td>
					  </tr>
						<?php 
						while($category=mysql_fetch_array($query)){
					
						?>
						<tr class="link1"><td>&nbsp;&nbsp;<?PHP echo $category['subcategoryname'];?></a></td>
						<td align="center"><a href="editsubcategory.php?mcat=<?PHP echo $cateid;?>&scat=<?PHP echo $category['sid'];?>"><img src="images/edit_f2.png" width="32" height="32" border="0" title="Edit" /></a></td>
						
						<td align="center"><a href="changesubcategory.php?id=<?php echo $category['sid'];?>&catid=<?php echo $category['cid'];?>" onclick="return confirm('Are you sure you wish to delete this Record?');"><img src="images/delete.jpg" border="0"  title="Delete"/></a></td>
					 <!-- demo	<td align="center"><a href="changesubcategory.php?id=<?php //echo $category['sid'];?>&catid=<?php //echo $category['cid'];?>" onclick="return editfun()"><img src="images/delete.jpg" border="0"  title="Delete"/></a></td> -->
						</tr>
					<?php }?>
						<tr><td colspan="3" align="center">&nbsp;</td></tr>						
						<?php if($num<=0){?>
						<tr><td colspan="3" align="center"><span class="link1">No Subcategories Found</span></td>
						</tr>
						<?php }?>
						<tr><td colspan="3" align="center"><font color="#000000"><?php echo $pagingLink;?></font></td></tr>
						<tr>
						<td colspan="3"> &nbsp;</td>
						</tr>
				  </table></td>
			    </tr>
				<tr>
				  <td height="34" colspan="5" align="left" bgcolor="#faf3f7">&nbsp;</td>				  
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
