<?php 
ob_start();
session_start();
include "../config/error.php";
if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}

if(isset($_REQUEST['act']))
	{
	  
	  $activeuserid=$_REQUEST['act'];
	   
	  mysql_query("update google_ad set status='1' where ad_id='$activeuserid'");
	
	}
	if(isset($_REQUEST['inact']))
	{
	  
	  $activeuserid=$_REQUEST['inact'];
	   
	  mysql_query("update google_ad set status='0' where ad_id='$activeuserid'");
	
	}
	if(isset($_REQUEST['delproduct']))
	{
	  $delproid=$_REQUEST['delproduct'];
	  mysql_query("delete from google_ad where ad_id='$delproid'");
	}
	
	if(isset($_REQUEST['ctype']))
	{
	$gctype=mysql_fetch_array(mysql_query("select * from google_ad where ad_id='$_REQUEST[ctype]'"));
	if($gctype['type']=='Script')
	$changet='Image';
	else
	$changet='Script';
	
	mysql_query("update google_ad set type='$changet' where ad_id='$_REQUEST[ctype]'");
	header("location:bannerads.php");
	}
	
	if(isset($_REQUEST['all']))
	{
	   $selectuser = "select * from google_ad order by ad_id desc";
	
	}
	else if(isset($_REQUEST['inner']))
	{
	   $selectuser = "select * from google_ad where bannertype='Inner' order by ad_id desc";
	
	}
    else if(isset($_REQUEST['outer']))
	{
	   $selectuser = "select * from google_ad where bannertype='Outer' order by ad_id desc";
	
	}
    else
	{
	  $selectuser = "select * from google_ad order by ad_id desc";
	
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ClickOne.com</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
function validate()
{
if(document.frmadd.image1.value!= "" )
			{
				var ss=document.frmadd.image1.value;
				var index=ss.lastIndexOf(".");
				var sstring=ss.substring(index+1);
				var ssivanew=sstring.toLowerCase();
				if(ssivanew!="jpg" && ssivanew!="png" && ssivanew!="jpeg" && ssivanew!="bmp")
				{
					  alert("Please upload .jpg , .png , .jpeg , .bmp files only");
					  return false;
				 }
			}
	if(document.frmadd.image2.value!= "" )
			{
				var ss=document.frmadd.image2.value;
				var index=ss.lastIndexOf(".");
				var sstring=ss.substring(index+1);
				var ssivanew=sstring.toLowerCase();
				if(ssivanew!="jpg" && ssivanew!="png" && ssivanew!="jpeg" && ssivanew!="bmp")
				{
					  alert("Please upload .jpg , .png , .jpeg , .bmp files only");
					  return false;
				 }
			}
			if(document.frmadd.image.value!= "" )
			{
				var ss=document.frmadd.image.value;
				var index=ss.lastIndexOf(".");
				var sstring=ss.substring(index+1);
				var ssivanew=sstring.toLowerCase();
				if(ssivanew!="jpg" && ssivanew!="png" && ssivanew!="jpeg" && ssivanew!="bmp")
				{
					  alert("Please upload .jpg , .png , .jpeg , .bmp files only");
					  return false;
				 }
			}
					
			}
</script>

<body>
<table width="98%" border="0" cellpadding="3" cellspacing="1" align="center">
  <tr>
    <td colspan="9"><?php include("includes/adminheader.php");?></td>
  </tr>
  <tr>
    <td colspan="9">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9"><?php include("includes/adminmenu.php");?></td>
  </tr>
  <tr>
  <form action="#" method="post" enctype="multipart/form-data" name="frmadd" onsubmit="return validate();">
      <td bgcolor="#FFFFFF" colspan="9"><br />
        <table width="100%" border="0" cellpadding="5" cellspacing="0" align="center" >
							
							<tr>
								<td width="471" align="left" class="company_directory">Advertisement</td>
							    <td width="164" align="right" class="globaltext"><!-- <a href="bannerads.php?all" class="menu_small1"><strong>All</strong></a>							      <a href="bannerads.php?inner" class="menu_small1"><strong>Inner</strong></a>							      <a href="imgbannerads.php" class="menu_small1"><strong>View Image</strong></a> --></td> 
							    <td width="135" align="right" class="globaltext"><!-- <a href="#" onClick="javascript:window.open('newaddbanner.php','mywindow','width=600,height=500,left=300top=275')" class="menu_small1">Add images</a> --> </td>
							</tr>
							<tr>
								<td colspan="3">
									<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" class="bgCal">
										<tr class="JMiniHeadBorder">
											
											<td width="102" align="left" class="link1">Location</td>
											<td width="171" align="center" class="link1">Image</td>
                                           <!-- <td width="110" align="center" class="link1">Script</td> -->
										  <td width="107" align="center" class="link1">Status</td>
										<!--  <td width="68" align="center" class="link1">ViewType</td> -->
											 <td width="127" align="center" class="link1">Action</td>
									  </tr>
										
										<?php
										$strget='';
			$rowsPerPage =5;
			$query_1=mysql_query(getPagingQuery($selectuser, $rowsPerPage,$strget)) or die(mysql_error()); 
			$pagingLink = getPagingLink($selectuser, $rowsPerPage,$strget); 
			
			$count_sent=mysql_num_rows(mysql_query($selectuser));
			 
			 if($count_sent>0)
			 {
										while($fetchuser = mysql_fetch_array($query_1))
											{
										?>
										<tr>
											
											<td align="center" class="tab1"><?php echo $fetchuser['location']; ?></td>
										<td class="tab1" align="center">
										<?php /*$getimg=mysql_query("select * from bannerads order by bid");
										while($viewimg=mysql_fetch_array($getimg))
										{
										 ?>
										
										<a href="imgbannerads.php"><img src="<?php echo "smallbannerlogo/".$viewimg['bannerlogo']; ?>" border="0" /></a>
										
										<?php } */?>
                                       <?php if($fetchuser['image'] != "") { ?>										
										<a href="#"><img src="<?php echo "../smallbannerlogo/".$fetchuser['image']; ?>" border="0" /></a>
										<?php } else { ?>
										<a href="#"><img src="images/NOIMAGE.jpeg" border="0" /></a>
										<?php } ?>
										</td>
										<!--	<td class="tab1" align="center"><?php //echo $fetchuser['source']; ?></td>	-->
										
											<td class="tab1" align="center">
                                              <?php $status=$fetchuser['status'];
						  if($status==0)
						  {
						  ?>
						  <a href="bannerads.php?act=<?php echo $fetchuser['ad_id']; ?>" class="newlink">Active</a>
                       <?php } ?>
					     <?php if($status==1)
						  {
						  ?>
						  <a href="bannerads.php?inact=<?php echo $fetchuser['ad_id']; ?>" class="ad_text_color">Inactive</a>
                       <?php } ?>                                            </td>
					<!--   <td width="68" align="center" class="tab1"><a href="bannerads.php?ctype=<?php //echo $fetchuser['ad_id']; ?>" class="newlink"><?php //echo $fetchuser['type']; ?></a></td> -->
											
									<?php /*	  <td class="tab1" align="center">
                                           <a href="#" onClick="javascript:window.open('googleadd_edit.php?ad_id=<?php echo $fetchuser['ad_id'];?>','mywindow','width=500,height=600,left=300top=275')">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="bannerads.php?delproduct=<?php echo $fetchuser['ad_id']; ?>" ><!-- demo <a href="javascript:void(0);" class='boldG2' onclick="javascript:alert('This Feature Is Disabled In The Demo Version.. ');return false;"> --><img src="images/delete.jpg" border="0" title="Delete" /></a> 
										</td> */ ?>
										<td class="tab1" align="center">
                                           <a href="#" onClick="javascript:window.open('googleadd_edit.php?ad_id=<?php echo $fetchuser['ad_id'];?>','mywindow','width=500,height=600,left=300top=275')">Edit</a>
										   </td>
									  </tr>
										<?php 
										}
										?>
									<?php
	} 
	
	else
		{
?>
 <tr><td colspan="11" align="center" class="inTxtSHead"><div align="center" class="inTxtHead"> No Records Found</div></td>
 </tr> <?php }
 
 ?>
<tr><td height="35" colspan="11" align="center" class="ad_text_color"><?PHP echo $pagingLink; ?></td>
</tr>	
								  </table>							  </td>
							</tr>
					  </table></td>
    </form>
  </tr>
</table>
<?PHP
 function getPagingQuery($sql, $itemPerPage = 3)
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
function getPagingLink($sql, $itemPerPage = 3,$strGet)
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
				$prev = " <a href=\"$self?page=$page&$strGet\" class=\"global\">| Prev |</a> ";
			} else {
				$prev = " <a href=\"$self?$strGet\" class=\"global\">| Prev |</a> ";
			}	
				
			$first = " <a href=\"$self?$strGet\" class=\"global\"> First</a> ";
		} else {
			$prev  = ''; // we're on page one, don't show 'previous' link
			$first = ''; // nor 'first page' link
		}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = " <a href=\"$self?page=$page&$strGet\" class=\"global\">| Next</a> ";
			$last = " <a href=\"$self?page=$totalPages&$strGet\" class=\"global\">| Last</a> ";
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
				  
					$pagingLink[] = " <a href=\"$self?$strGet\" class=\"global\">$page</a> ";
				} else {	
				 
					$pagingLink[] = " <a href=\"$self?page=$page&$strGet\" class=\"global\">$page</a> ";
				}	
			}
	
		}
		
		$pagingLink = implode(' | ', $pagingLink);
		
		// return the page navigation link
		$pagingLink = $first . $prev . $pagingLink . $next . $last;
		
	}
	
	if(empty($pagingLink)) { $pagingLink="<font color='#CCCCCC'>  First | Prev | 1 | 2 | 3 | Next | Last </font>"; }
	return $pagingLink;
}

  
 ?> 
</body>
</html>
