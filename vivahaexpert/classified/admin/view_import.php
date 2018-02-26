<?php
ob_start();
session_start();
include "../config/error.php";

if(!isset($_SESSION['adminusername']))
{
header("location:index.php");
}

if(!isset($_SESSION['class_id']))
{
header("location:import_export.php");
}

if(isset($_REQUEST['delid'])){
	
		 $userid_admin=$_REQUEST['delid'];
	
		mysql_query("delete from class_postclassified where p_id='$userid_admin'");
	}
	
	if(isset($_REQUEST['inactid']))
   {
   		 $userid_admin=$_REQUEST['inactid'];
		mysql_query("update class_postclassified set p_status='0' where p_id='$userid_admin' ");
		
	}
	if(isset($_REQUEST['actid'])){
		  $userid_admin=$_REQUEST['actid'];
		  mysql_query("update class_postclassified set p_status='1' where p_id='$userid_admin' ");
	}
if(isset($_REQUEST['confirm_hotlisting']))
{
	//echo "dfdfdfdf"; exit;
	
	$ad_id = $_REQUEST['ad_id'];
	
	$add_id = substr($ad_id,0,-1);
	
	$t_adid = explode(",",$add_id);
	
	for($i=0; $i<count($t_adid); $i++)
	{
	
	$fet_user = mysql_fetch_array(mysql_query("select * from class_postclassified where p_id= '".$t_adid[$i]."'"));
	 mysql_query("update class_register set reg_hotlisting='1' where reg_id='$fet_user[user_id]' ");
	mysql_query("update class_postclassified set p_hotlisting='1' where user_id='$fet_user[user_id]'");
    }
 header("location:manageclassified.php?added");
	
}
	if(isset($_REQUEST['btnsendmail']))
	{
	
	$adminmail = $_REQUEST['from_mail'];
	$to_mail = $_REQUEST['to_mail'];
	$subject = $_REQUEST['subject'];
	$mess = $_REQUEST['message'];
	
	$mail_to = substr($to_mail,0,-1);
	
	$t_mail = explode(",",$mail_to);
	
	for($i=0; $i<count($t_mail); $i++)
	{
	
	$fet_user = mysql_fetch_array(mysql_query("select p_conemail, p_conname from class_postclassified where p_id= '".$t_mail[$i]."'"));
	
	$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $siteadmin" . "\r\n";
 $to      = $fet_user['p_conemail'];
 $name      = $fet_user['p_conname'];

$contact = $site_url_reg."contact_us.php";

$message ="<font style=\"font-size:12px;font-style:normal;font-family:Tahoma,Verdana,Arial,Helvetica,sans-serif\">
<table width=\"766\" border=\"0\" cellspacing=\"5\" cellpadding=\"0\" align=\"center\" style=\"border:1px solid #EFF2F2;padding:20px\">
<tr>
<td><a target=\"_blank\" href=\"$site_url_reg\">
<img  src=\"$sitelogo\" border=\"0\"></a></td>
</tr>
<tr><td style=\"background:#0195C5;height:5px;\"></td></tr>
<tr><td>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"5\" width=\"100%\" align=\"left\" style=\"color:#333333;margin-top:20px;\">
<tr valign=\"top\">
<td style=\"width:255px;padding:10px 20px;font-size:12px;\">
<div style=\"color:#0195C5;font-size:14px;font-weight:bold;\">Dear $name!</div>
<br/>

<br/>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-size:12px;\">
<tr><td>Message :</td><td><span style=\"font-weight:bold\">$mess</span></td></tr>
</table>

<br/><br/>

If you need any help along the way, please <a href=\"$contact\">Contact Us</a>
<br/><br/>Thanks for using $sitename!
<br/> - $sitename Team
</td>
</tr>
</table>
</td></tr>
</table>
<table width=\"766\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"padding-top: 5px; padding-bottom: 5px;\">
<tbody>
<tr>
<td style=\"font-size:12px;color:#0195c5;line-height:1.4em;text-align:center;padding-top:10px;\" colspan=\"2\">Copyright ".date("Y")." $sitename. All Rights Reserved.</td>
</tr>
</tbody>
</table>
</font>";
//echo $message;die();
	//$mil=ma($to,$subject,$message,$headers);
 mail($to,$subject,$message,$headers);
 }
 header("location:manageclassified.php?success=1");
	
	}
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $adminsitename;?></title>
<script type="text/javascript" src="ajaxfunction.js"></script>
<script>
function editfun()
{

alert("This is demo version not allowed to change");
  return false;	


}


function chkdates(dt1,dt2)
{
	
	if(Date.parse(dt1)>Date.parse(dt2))
	{
	alert("From Date Should Be Less than To Date ");
	document.frmregister.txtregdt.value="";
	document.frmregister.txttoregdt.value="";
	document.frmregister.txtregdt.focus();
	return false
	} 
	
}

function date_clear()
{
	document.getElementById('txtregdt').value="";
	document.getElementById('txttoregdt').value="";
}


function chk(theElement){
	var form=document.form;
     var theForm = theElement.form, z = 0;
	 for(z=0; z<theForm.length;z++){
      if(theForm[z].type == 'checkbox' && theForm[z].name != 'selectall'){
	  theForm[z].checked = theElement.checked;
	  
	  }
     }
if(document.getElementById('selectall').checked == true){
	document.getElementById('hc').value='1';
}
else
document.getElementById('hc').value='0';
}


function submit_chk(){
		var chks = document.getElementsByName('box[]');
		var hasChecked = false;
		for (var i = 0; i < chks.length; i++)
		{
			if (chks[i].checked)
			{
			hasChecked = true;
			break;
			}
		}
		if (hasChecked == false)
		{
			alert("Please select at least one.");
			return false;
		}
		
		
		showdiv('sendmail',chks);
}
function submit_chks(){
		var chks = document.getElementsByName('box[]');
		var hasChecked = false;
		for (var i = 0; i < chks.length; i++)
		{
			if (chks[i].checked)
			{
			hasChecked = true;
			break;
			}
		}
		if (hasChecked == false)
		{
			alert("Please select at least one.");
			return false;
		}
		showhotdiv('addhotlisting',chks);
		
		
}
function showhotdiv(divid,chks)
{
	document.getElementById(divid).style.display=(document.getElementById(divid).style.display =="none" ? "block" : "none" );
	
		for (var i = 1; i <= chks.length; i++)
		{ 
			if (chks[i].checked)
			{			
			document.getElementById('ad_id').value+=chks[i].value+",";
			}
		}
}
function showdiv(divid,chks)
{
	document.getElementById(divid).style.display=(document.getElementById(divid).style.display =="none" ? "block" : "none" );
	
		for (var i = 1; i <= chks.length; i++)
		{ 
			if (chks[i].checked)
			{			
			document.getElementById('to_mail').value+=chks[i].value+",";
			}
		}
}


function frmemailvalidation()
{
	frm=document.mail_form
	
	if(frm.subject.value=="")
	{
	alert("Please Enter Subject");
	frm.subject.focus()
	return false
	}
	if(frm.message.value=="")
	{
	alert("Please Enter Your Message");
	frm.message.focus();
	return false
	}
	
	
}





</script>
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
    <td colspan="11"><?php include("includes/adminheader.php");?></td>
  </tr>
  <tr>
    <td colspan="11">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="11" align="center"><?php include("includes/adminmenu.php");?></td>
  </tr>
  <tr>
    <td colspan="11"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <?php if(isset($_REQUEST['success'])) { ?>
        <tr>
          <td colspan="12" align="center"><font color="#006633" style="font-size:14px;"><b>Mail Sent Successfully.</b></font>
            <META HTTP-EQUIV="REFRESH" CONTENT="10;URL=manageclassified.php">
          </td>
        </tr>
        <?php } ?>
		 <?php if(isset($_REQUEST['added'])) { ?>
        <tr>
          <td colspan="12" align="center"><font color="#006633" style="font-size:14px;"><b>Added to Hotlisting List</b></font>
            <META HTTP-EQUIV="REFRESH" CONTENT="10;URL=manageclassified.php">
          </td>
        </tr>
        <?php } ?>
        <!-- <tr>
	  <td width="6%" align="center"><span class="company_directory">Search</span>:</td>-->
        <!--<td width="8%" align="center"><select name="select1">
		<option value="">Select</option>
          <?php 
	        $user_search=mysql_query("select * from class_register ");
	        while($user_fetch=mysql_fetch_array($user_search))
	  {
	  echo $user=$user_fetch['reg_id'];
	 echo $user_list=$user_fetch['reg_name'];
	  ?>
          <option value="<?php echo $user;?>"><?php echo $user_list;?></option>
          <?php }?>
        </select></td>-->
        <!--<td width="15%" align="center"><select name="select2">
		<option value="">Select</option>
          <?php 
	        //$user_search1=mysql_query("select * from membership");
	       // while($user_fetch1=mysql_fetch_array($user_search1))
	 // {
	  //$user_id=$user_fetch1['id'];
	 //echo $user_list1=$user_fetch1['member'];
	  ?>
          <option value="<?php echo $user_id;?>"><?php echo $user_list1;?></option>
          <?php //}?>
        </select>        </td>-->
        <!--<td width="10%" align="left"><input type="submit" name="search" value="Submit" /></td>
        <td width="20%" align="center" class="ad_text_color"><a href="individual_usertype.php?userview=2" class="link1" >All</a></td>-->
        <!--<td width="20%" align="center" class="ad_text_color"><a href="individual_usertype.php?userview=2" class="link1" >Payment</a></td>-->
        <!--<td width="21%" align="center" class="ad_text_color"><a href="individual_usertype.php?userview=1" class="link1" >Free</a></td>
      </tr>-->
        <tr>
          <td colspan="6"><form name="frmregister" method="post" action="">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center"  bgcolor="#edcfde">
                <tr>
                  <td colspan="6" height="50" valign="middle" class="head_bg"><b>Imported Classifieds</b></td>
                </tr>
                

              </table>
            </form>

      </table></td>
  </tr>
  <tr>
    <td colspan="11"><table width="100%" border="0" cellspacing="1" cellpadding="5">
        <form name="form" action="" method="post">
          <tr>
            <td width="3%" height="29" align="center" bgcolor="#edcfde" class="link1"><input type="checkbox" name="box[]"  id="box[]" onclick="chk(this)" title="Select / Deselect All" />
            </td>
            <td width="3%" height="30" align="center" bgcolor="#edcfde" class="link1">S.No</td>
            <td width="16%" height="30" align="center" bgcolor="#edcfde" class="link1">Title</td>
            <td width="8%" align="center" bgcolor="#edcfde" class="link1">Category</td>
            <td width="14%" align="center" bgcolor="#edcfde" class="link1">Subcategory</td>
            <!--<td width="9%" align="center" bgcolor="#edcfde" class="link1">Classified Type </td>-->
            <td width="8%" align="center" bgcolor="#edcfde" class="link1">City </td>
            <td width="16%" align="center" bgcolor="#edcfde" class="link1">Email</td>
            <td width="9%" align="center" bgcolor="#edcfde" class="link1" nowrap="nowrap">Posted Date </td>
          </tr>
          <?php
		  
$imp_count=strlen($_SESSION['class_id']);
$imp_classified=substr($_SESSION['class_id'],0,$imp_count-1);

/*print_r($imp_classified);*/
  
   $strget=""; 
     $sel_enq = "select * from `class_postclassified`  where `p_hotlisting`='0' and p_id in ($imp_classified) ";
									   $str_qry="";
									   $temp_qry="";

									    	 $select_User = $sel_enq." order by p_id desc";

			
								
								
  
 // echo $select_User;
  
  //$select="SELECT * FROM `class_postclassified` order by p_date desc";
 
 
  $rowsPerPage =20;
  if(isset($_REQUEST['page']))
	{
		$i=(($_REQUEST['page']-1)*$rowsPerPage)+1;
	}
	else
	{
		 $i=1;
	}
	$j=$i;
  $query=mysql_query(getPagingQuery($select_User, $rowsPerPage,$strget)) or die(mysql_error()); 
  $pagingLink = getPagingLink($select_User, $rowsPerPage,$strget); 
  $countuser=mysql_num_rows($query);
  while($reg_fetch=mysql_fetch_array($query)) 
  {
  ?>
          <tr colspan="9" align="left" bgcolor="#FF83C3">
            <td bgcolor="#faf3f7" class="welcome_text" align="center"><input type="checkbox" name="box[]"  id="box[]" value="<?php echo $reg_fetch['p_id']; ?>" />
            </td>
            <td bgcolor="#faf3f7" class="welcome_text" align="center"><?php echo $i;?></td>
            <td bgcolor="#faf3f7" class="welcome_text" nowrap="nowrap"><a href="viewclassified.php?viewid=<?php echo $reg_fetch['p_id'];?>" class="ad_text_color" title="<?php echo $reg_fetch['p_title'];?>"><?php echo substr($reg_fetch['p_title'],0,22)."..";?></a></td>
            <?php 
	$cat_id=$reg_fetch['p_category'];
	
	$cat_select=mysql_query("select * from `class_category` where `c_id`='$cat_id'");
	$cat_fetch=mysql_fetch_array($cat_select);
    ?>
            <td bgcolor="#faf3f7" class="welcome_text"><?php echo $cat_fetch['c_name'];?></td>
            <?php 
	$subcat_id=$reg_fetch['p_subcategory'];
	
	$subcat_select=mysql_query("select * from `class_subcategory` where `sid`='$subcat_id'");
	$subcat_fetch=mysql_fetch_array($subcat_select);
	?>
            <td bgcolor="#faf3f7" class="welcome_text"><?php echo $subcat_fetch['subcategoryname'];?></td>
            <?php 
	//$classtype_id=$reg_fetch['p_classtype'];
	
	//$classtype_select=mysql_query("select * from `class_type` where `cid`='$classtype_id'");
	//$classtype_fetch=mysql_fetch_array($classtype_select);
	?>
            <!--<td bgcolor="#faf3f7"><?php echo $classtype_fetch['value'];?></td>-->
            <td bgcolor="#faf3f7" class="welcome_text"><?php echo $reg_fetch['p_city']; //$reg_fetch['p_conno'];?></td>
            <td bgcolor="#faf3f7" class="welcome_text"><?php echo $reg_fetch['p_conemail'];?></td>
            <td bgcolor="#faf3f7" class="welcome_text" align="center" nowrap="nowrap"><?php echo $reg_fetch['p_date'];?></td>
            
            
          </tr>
          <?php $i++;
  } ?>
        </form>
      </table></td>
  </tr>

  <tr>
    <td colspan="11" align="center" class="ad_text_color"><?php 
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
 