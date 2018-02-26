<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}

$select="SELECT * FROM `class_currency`";
$strget="";
	$rowsPerPage =10;
	$query=mysql_query(getPagingQuery($select, $rowsPerPage,$strget)) or die(mysql_error()); 
	$pagingLink = getPagingLink($select, $rowsPerPage,$strget); 
	$num=mysql_num_rows($query);


//delete function start
if(isset($_REQUEST['cuid']))
{
	$cuid=$_REQUEST['cuid'];
	$curr_qry=mysql_query("delete from class_currency where cid=$cuid");
	if($curr_qry)
	{
		header("location:currency.php");
	}
	else
	{
		die("currency delete error ".mysql_error());
	}
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title><?php echo $adminsitename;?></title>


<script type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : false,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<script language="javascript1.1">
function validate()
{
 tinyMCE.triggerSave();
if(document.termtext.term.value=="")
{
alert("Please Enter The Text");
document.termtext.term.focus();
return false;
}
}
</script>

</head>

<body>
<table width="98%" cellpadding="3" cellspacing="1" align="center">
	<tr>
		<td height="26">
			<?php include("includes/adminheader.php");?>
		</td>
	</tr>
	<tr>
		<td height="10">&nbsp;</td>
	</tr>
	<tr>
		<td height="20"><?php include("includes/adminmenu.php");?></td>
	</tr>
	<tr>
		<td height="223">
			<table width="83%" align="center" cellspacing="0" style="border:solid 1px #669966;">
				<tr>
					<td height="27" bgcolor="#edcfde" class="link1">Currency</td>
					<td align="right" bgcolor="#edcfde" class="ad_text_color"><a href="javascript:history.back()">Back</a></td>
				</tr>
				<tr>
				  <td align="left" colspan="2" bgcolor="#faf3f7">
				  	<span class="link1"><a href="addcurrency.php">Add new currency</a></span>
				  </td>
				</tr>
				<tr>
				  <td align="right" colspan="2" bgcolor="#faf3f7">
					<table align="center" cellpadding="0" cellspacing="0" border="0" width="90%" style="border:1px solid #edcfde;">
						<tr bgcolor="#edcfde">
							<td width="30" height="29" align="center"><strong>S.No</strong></td>
							<td width="235" height="29" align="center" bgcolor="#edcfde"><strong>Currency </strong></td>
							<td width="236" align="center"><strong>Edit</strong></td>
							<td width="156" align="center"><strong>Delete</strong></td>
						</tr>
							<?php
							$c=1;
							while($curr_row=mysql_fetch_array($query))
							{
							?>
						<tr class="link1">
							<td align="center">
								<?php echo $c; ?>
							</td>
							<td align="center">
								<?php echo $curr_row['currency']." = ".$curr_row['name']; ?>
							</td>
							<td align="center">
								<a href="editcurrency.php?curid=<?php echo $curr_row['cid']; ?>"><img src="images/edit_f2.png" width="32" height="32" border="0" title="Edit" /></a>
							</td>
							<td align="center">
								<a href="currency.php?cuid=<?php echo $curr_row['cid']; ?>" onclick="return confirm('Are you sure you wish to delete this Record?');">
									<img src="images/delete.jpg" border="0" title="Delete" />
								</a>
							</td>
						</tr>
							<?php 
								$c++;
							} 
							?>
							
							<tr>
								<td colspan="4" align="center">&nbsp;</td>
							</tr>
							<?php if($num<=0){?>
							<tr>
							  <td colspan="4" align="center"><span class="style1"><font color="#FF0000">No Currency Found</font></span></td>
							</tr>
							<?php }?>
							<tr><td colspan="4" align="center"><?php echo $pagingLink;?></td></tr>
							<tr>
							<td colspan="4">&nbsp; </td>
							</tr>
						
					</table>
				  </td>
				</tr>
			</table>
		</td>
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