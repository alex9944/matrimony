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
	
	 
  
	if(isset($_REQUEST['search']))
	{
	
	echo $ur_name=$_REQUEST['select1'];
	echo $ur_name1=$_REQUEST['select2'];
	
	if($ur_name!='' && $ur_name1=='')
	{
	
	  $select="SELECT * FROM `class_postclassified` where user_id='$ur_name'";
		
	}
	if($ur_name=='' && $ur_name1!='')
	{
	
	  $select="SELECT * FROM `class_postclassified` where p_classtype ='$ur_name1'";
		
	}
	if($ur_name!='' && $ur_name1!='')
	{
	
	  $select="SELECT * FROM `class_postclassified` where user_id='$ur_name' and p_classtype ='$ur_name1'";
		
	}
	if($ur_name=='' && $ur_name1=='')
	{
	
		$select="SELECT * FROM `class_postclassified`";
	}

	
	}
	else
	{
	  $select="SELECT * FROM `class_postclassified`";
	
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
    <td colspan="2"><?php include("includes/adminheader.php");?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><?php include("includes/adminmenu.php");?></td>
  </tr>
  <tr>
    <td colspan="2"><form action="#" method="post"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
	  <td width="6%" align="center">Search : </td>
        <td width="6%" align="center"><select name="select1">
		<option value="">Select</option>
          <?php 
	        $user_search=mysql_query("select * from class_register");
	        while($user_fetch=mysql_fetch_array($user_search))
	  {
	   $user=$user_fetch['reg_id'];
	  $user_list=$user_fetch['reg_name'];
	  ?>
          <option value="<?php echo $user;?>"><?php echo $user_list;?></option>
          <?php }?>
        </select></td>
        <td width="15%" align="center"><select name="select2">
		<option value="">Select</option>
          <?php 
	        $user_search1=mysql_query("select * from membership");
	        while($user_fetch1=mysql_fetch_array($user_search1))
	  {
	  $user_id=$user_fetch1['id'];
	  $user_list1=$user_fetch1['member'];
	  ?>
          <option value="<?php echo $user_id;?>"><?php echo $user_list1;?></option>
          <?php }?>
        </select>        </td>
        <td width="10%" align="left"><input type="submit" name="search" value="Submit" /></td>
        <td width="26%" align="center"><a href="individual_usertype.php?userview=2" class="link1" >Payment</a></td>
        <td width="37%" align="center"><a href="individual_usertype.php?userview=1" class="link1" >Free</a></td>
      </tr>
      <tr>
        <td colspan="5">&nbsp;</td>
      </tr>
    </table>
    </form></td>
  </tr>
  <tr>
  <td valign="top" ><table width="98%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="10" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr colspan="12" bgcolor="#0F507F">
      <td width="13%" height="30" align="center" bgcolor="#edcfde" class="link1">Title</td>
      <td width="17%" align="center" bgcolor="#edcfde" class="link1">Category</td>
      <td width="23%" align="center" bgcolor="#edcfde" class="link1">Subgategory</td>
      <td width="14%" align="center" bgcolor="#edcfde" class="link1">Classified Type </td>
      <!--<td width="14%" align="center" bgcolor="#edcfde" class="link1">Phone Number </td>
    <td width="18%" align="center" bgcolor="#edcfde" class="link1">Email</td>
    <td width="7%" align="center" bgcolor="#edcfde" class="link1">Posted Date </td>-->
      <td width="10%" align="center" bgcolor="#edcfde" class="link1">Delete</td>
      <td width="9%" align="center" bgcolor="#edcfde" class="link1">View</td>
      <td width="14%" align="center" bgcolor="#edcfde" class="link1">Status</td>
    </tr>
    <?php 
	//echo $select;
  $strget="";
  $rowsPerPage =10;
  $query=mysql_query(getPagingQuery($select, $rowsPerPage,$strget)); 
  $pagingLink = getPagingLink($select, $rowsPerPage,$strget); 
  $countuser=mysql_num_rows($query);
  while($reg_fetch=mysql_fetch_array($query)) 
  {
  ?>
    <tr colspan="9" align="left" bgcolor="#FF83C3">
      <td bgcolor="#faf3f7"><?php echo $reg_fetch['p_title'];?></td>
      <?php 
	$cat_id=$reg_fetch['p_category'];
	
	$cat_select=mysql_query("select * from `class_category` where `c_id`='$cat_id'");
	$cat_fetch=mysql_fetch_array($cat_select);
    ?>
      <td bgcolor="#faf3f7"><?php echo $cat_fetch['c_name'];?></td>
      <?php 
	$subcat_id=$reg_fetch['p_subcategory'];
	
	$subcat_select=mysql_query("select * from `class_subcategory` where `sid`='$subcat_id'");
	$subcat_fetch=mysql_fetch_array($subcat_select);
	?>
      <td bgcolor="#faf3f7"><?php echo $subcat_fetch['subcategoryname'];?></td>
      <?php 
	$classtype_id=$reg_fetch['p_classtype'];
	
	$classtype_select=mysql_query("select * from `class_type` where `cid`='$classtype_id'");
	$classtype_fetch=mysql_fetch_array($classtype_select);
	?>
      <td bgcolor="#faf3f7"><?php echo $classtype_fetch['value'];?></td>
      <!--<td bgcolor="#faf3f7"><?php echo $reg_fetch['p_conno'];?></td>
    <td bgcolor="#faf3f7"><?php echo $reg_fetch['p_conemail'];?></td>
   <td bgcolor="#faf3f7"><?php echo $reg_fetch['p_date'];?></td>-->
      <td bgcolor="#faf3f7"><form id="form2" name="delete" method="post" action="manageclassified.php?delid=<?php echo $reg_fetch['p_id'];?>">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" valign="bottom"><input name="delete" type="image"  src="../images/delete_x.jpg"class="button" value="Delete" onclick="if( confirm('Are you sure you want to Delete this Record?') )
						{
						
						return true;
						}
						else
						{	
						return false; 
						}" /></td>
            </tr>
          </table>
      </form></td>
      <td align="center" bgcolor="#faf3f7"><a href="viewclassified.php?viewid=<?php echo $reg_fetch['p_id'];?>">View</a></td>
      <td bgcolor="#faf3f7"><?PHP
		  $userid_admin=$reg_fetch['p_id']; 
		  $activate=$reg_fetch['p_status'];
		  if($activate==1)
		  {
		  ?>
          <a href="manageclassified.php?inactid=<?php echo $userid_admin;?>" class="register"
		    onclick="if( confirm('Are you sure you want to activate this Record?') )
			{
			return true;
			}
			else
			{
			return false; 
			}" style="text-decoration:none; ">Inactivate</a>
          <?php } if($activate==0){?>
          <a href="manageclassified.php?actid=<?PHP echo $userid_admin;?>" class="register" onclick="if(confirm('Are you sure you want to InActivate this Record?') )
								{
								 return true;
								}
								else
								{
								 return false; 
								}" style="text-decoration:none; ">Activate</a>
          <?php } ?>      </td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="10" align="center"><?php 
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
  </table></td>
  </tr>
  </table>
  </td>
  <td>
  <form id="form1" name="indexform" method="post" action="" onsubmit="return regCheck();">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                               
                                <tr>
                                  <td height="30" colspan="4" align="left" bgcolor="#edcfde" class="link1">&nbsp;&nbsp;Membership Statistics:</td>
                                </tr>
								<tr>
								<td align="center" class="bold">
								<table width="100%" border="0" cellspacing="0" cellpadding="2">
                                <tr>
                                  <td align="left" bgcolor="#faf3f7" class="sub_title" >&nbsp;</td>
                                  <td align="left" bgcolor="#faf3f7" class="bold">&nbsp;</td>
                                  <td width="43%" align="left" bgcolor="#faf3f7">&nbsp;</td>
                                  </tr>
                                <tr>
                                  <td height="25" align="left" bgcolor="#faf3f7" class="sub_title" >Free</td>
                                  <td align="left" bgcolor="#faf3f7" class="bold">&nbsp;</td>
                                  <td align="left" bgcolor="#faf3f7">&nbsp;</td>
                                  </tr>
                                
                                <?php $memsql=mysql_fetch_array(mysql_query("select * from membership limit 0,1"));
								$memsql1=mysql_fetch_array(mysql_query("select * from membership limit 1,1"));
								?>
                                <tr>
                                  <td width="40%" height="25" align="left" bgcolor="#faf3f7" class="bold" >Max No. Of Ads</td>
                                  <td width="9%" align="left" bgcolor="#faf3f7" class="bold"><strong class="bold">:</strong></td>
                                  <td align="left" bgcolor="#faf3f7" class="welcome_text"><?php echo $memsql['postads']; ?></td>
                                  </tr>
                                <tr>
                                  <td height="25" align="left" bgcolor="#faf3f7" class="bold">Amount</td>
                                  <td align="left" bgcolor="#faf3f7" class="bold">:</td>
                                  <td align="left" bgcolor="#faf3f7" class="welcome_text"><?php echo $memsql['payment']; ?></td>
                                  </tr>
                                
                                <tr>
                                  <td height="25" align="left" bgcolor="#faf3f7" class="bold"><span class="sub_title">Payment</span></td>
                                  <td align="left" bgcolor="#faf3f7" class="bold">&nbsp;</td>
                                  <td align="left" bgcolor="#faf3f7" class="welcome_text">&nbsp;</td>
                                  </tr>
                                <tr>
                                  <td height="25" align="left" bgcolor="#faf3f7" class="bold">Max No. Of Ads</td>
                                  <td align="left" bgcolor="#faf3f7" class="bold">:</td>
                                  <td align="left" bgcolor="#faf3f7" class="welcome_text"><span class="welcome_text"><?php echo $memsql1['postads']; ?></span></td>
                                  </tr>
                                <tr>
                                  <td height="25" align="left" bgcolor="#faf3f7" class="bold">Amount</td>
                                  <td align="left" bgcolor="#faf3f7" class="bold">:</td>
                                  <td align="left" bgcolor="#faf3f7" class="welcome_text"><span class="welcome_text"><?php echo $memsql1['payment']."$"; ?>&nbsp;(<?php echo $memsql1['payduration']; ?>) </span></td>
                                  </tr>
								  </table>
								  </td>
							    </tr>
								  
                                <tr>
                                  <td height="30" colspan="4" align="center" class="bold">
                                  
                                  
                                  
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td align="center">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td height="30" align="left" bgcolor="#edcfde" class="link1">&nbsp;&nbsp;Membership Info</td>
                                    </tr>
                                    
                                    <tr>
                                      <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                                       
                                       <?php $countuser=mysql_query("select * from memberregister where userid='$id' and status='1'"); 
									   $memsql11=mysql_fetch_array(mysql_query("select * from  class_membership  where userid='$id'"));
									   ?>
                                       <?php if(mysql_num_rows($countuser)== 0)
									   {
									   
									   $memsql12=mysql_fetch_array(mysql_query("select * from membership where id='$memsql11[memshiptype]'"));
									   
									   
									   ?>
                                        <tr>
                                          <td width="44%" height="25" bgcolor="#faf3f7" class="bold">Member Type</td>
                                          <td width="4%" align="center" bgcolor="#faf3f7" class="bold">:</td>
                                          <td width="52%" bgcolor="#faf3f7" class="company_directory"><?php echo $memsql12['member']; ?></td>
                                        </tr>
                                        
                                        <tr>
                                          <td height="25" bgcolor="#faf3f7" class="bold">Max No Of Ads</td>
                                          <td align="center" bgcolor="#faf3f7" class="bold">:</td>
                                          <td bgcolor="#faf3f7" class="company_directory"><?php echo $memsql11['maxnoads']; ?></td>
                                        </tr>
                                        
                                        <tr>
                                          <td height="25" bgcolor="#faf3f7" class="bold">Avaliable No. Of Ads</td>
                                          <td align="center" bgcolor="#faf3f7" class="bold">:</td>
                                          <td bgcolor="#faf3f7" class="company_directory"><?php echo $memsql11['avabfree']; ?></td>
                                        </tr>
                                        <?php }else
										{
										$memsql12=mysql_fetch_array(mysql_query("select * from membership where id='$memsql11[memshiptype]'"));
										 ?>
                                        <tr>
                                          <td width="44%" height="25" bgcolor="#faf3f7" class="bold">Member Type</td>
                                          <td width="4%" align="center" bgcolor="#faf3f7" class="bold">:</td>
                                          <td width="52%" bgcolor="#faf3f7" class="company_directory"><?php echo $memsql12['member']; ?></td>
                                        </tr>
                                        
                                        <tr>
                                          <td height="25" bgcolor="#faf3f7" class="bold">Max No Of Ads</td>
                                          <td align="center" bgcolor="#faf3f7" class="bold">:</td>
                                          <td bgcolor="#faf3f7" class="company_directory"><?php echo $memsql11['maxnoads']; ?></td>
                                        </tr>
                                        
                                        <tr>
                                          <td height="25" bgcolor="#faf3f7" class="bold">Free Ads</td>
                                          <td align="center" bgcolor="#faf3f7" class="bold">:</td>
                                          <td bgcolor="#faf3f7" class="company_directory"><?php echo $memsql11['freeads']; ?></td>
                                        </tr>
                                        
                                        <tr>
                                          <td height="25" bgcolor="#faf3f7" class="bold">Payment Ads</td>
                                          <td align="center" bgcolor="#faf3f7" class="bold">:</td>
                                          <td bgcolor="#faf3f7" class="company_directory"><?php echo $memsql11['paymentads']; ?></td>
                                        </tr>
                                        
                                        <tr>
                                          <td height="25" bgcolor="#faf3f7" class="bold">Avaliable Free  Ads</td>
                                          <td align="center" bgcolor="#faf3f7" class="bold">:</td>
                                          <td bgcolor="#faf3f7" class="company_directory"><?php echo $memsql11['avabfree']; ?></td>
                                        </tr>
                                        
                                        <tr>
                                          <td height="25" bgcolor="#faf3f7" class="bold">avaliable Payment Ads</td>
                                          <td align="center" bgcolor="#faf3f7" class="bold">:</td>
                                          <td bgcolor="#faf3f7" class="company_directory"><?php echo $memsql11['avabpayment']; ?></td>
                                        </tr>
                                        
                                        <?php } ?>
                                      </table></td>
                                    </tr>
                                  </table>
                                  
                                  
                                  
                                  </td>
                                </tr>
        </table>
      </form>
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












