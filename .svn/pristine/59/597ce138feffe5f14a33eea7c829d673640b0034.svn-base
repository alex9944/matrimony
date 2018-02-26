<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}

if(isset($_REQUEST['delid'])){
	
		 $userid_admin=$_REQUEST['delid'];
	
		mysql_query("delete from membership where id='$userid_admin'");
	}
	if(isset($_REQUEST['editid'])){
	
		 $userid_admin=$_REQUEST['editid'];
	
		mysql_query("update membership set `member`=id='$userid_admin'");
	}
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $adminsitename;?></title>
</head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #FF0000}
.style3 {color: #003399}
-->
</style>
<body>
<table width="98%" border="0" cellpadding="3" cellspacing="1" align="center">
  <tr>
    <td colspan="9"><?php include("includes/adminheader.php");?></td>
  </tr>
  <tr>
    <td colspan="9">&nbsp;</td>
  </tr>
  <tr>
    <td width="100%" colspan="9"><?php include("includes/adminmenu.php");?></td>
  </tr>
  <tr>
    <td colspan="9"><table width="100%" border="0" cellspacing="0" cellpadding="0">
     
      <tr>
        <td colspan="4" align="center">
		<?php 
		if(isset($_REQUEST['msg']))
		{
		    echo "Your Membership Details Updated Successfully";
		}
	    ?>
		</td>
        </tr>
      <tr>
        <td colspan="4"><table width="50%" border="0" cellpadding="3" cellspacing="1" align="center">
          <tr bgcolor="#0F507F">
    <td height="30" align="center" bgcolor="#edcfde" class="link1">Id</td>
    <td align="center" bgcolor="#edcfde" class="link1">Member Type</td>
    <td align="center" bgcolor="#edcfde" class="link1">Payment</td>
    <td align="center" bgcolor="#edcfde" class="link1">Duration</td>
    
    <td align="center" bgcolor="#edcfde" class="link1">Update</td>
    <td align="center" bgcolor="#edcfde" class="link1">Delete</td>
  </tr>
  <?php
  $select="SELECT * FROM `membership`";
  $strget="";
  $rowsPerPage =10;
  $query=mysql_query(getPagingQuery($select, $rowsPerPage,$strget)) or die(mysql_error()); 
  $pagingLink = getPagingLink($select, $rowsPerPage,$strget); 
  $countuser=mysql_num_rows($query);
  while($reg_fetch=mysql_fetch_array($query)) 
  {
  ?>
  <tr align="left" bgcolor="#FF83C3">
    <td bgcolor="#faf3f7"><?php echo $reg_fetch['id'];?></td>
    <td bgcolor="#faf3f7"><?php echo $reg_fetch['member'];?></td>
    <td height="20" bgcolor="#faf3f7"><?php echo $reg_fetch['payment'];?></td>
    <td bgcolor="#faf3f7"><?php echo $reg_fetch['duration'];?></td>
    
    <td align="center" bgcolor="#faf3f7"><a href="editmembertype.php?editid=<?php echo $reg_fetch['id'];?>">Update</a></td>
    <td bgcolor="#faf3f7"><form id="form1" name="delete" method="post" action="manageuser.php?delid=<?php echo $reg_fetch['id'];?>">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td align="center" valign="bottom"><!--<input name="delete" type="image"  src="../images/delete_x.jpg"class="button" value="Delete" onclick="if( confirm('Are you sure you want to Delete this Record?') )
						{
						
						return true;
						}
						else
						{	
						return false; 
						}" />--><input name="delete" type="image"  src="../images/delete_x.jpg"class="button" value="Delete" onclick="alert('This Feature Is Disabled In The Demo Version...');
return false;" /></td>
                            </tr>
                          </table>
            </form></td>
  </tr>
  <?php } ?>
        </table></td>
      </tr>
    </table></td>
  </tr>
 
  <tr>
    <td colspan="9" align="center"><?php 
		  if($countuser > 0)
		  {
		  echo $pagingLink;
		  }
		  else
		  {
		  echo "No Records Found"."<br><br>";
		  echo $pagingLink;
		  }
		  ?></td>
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
