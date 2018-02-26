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
	
		mysql_query("delete from class_register where reg_id='$userid_admin'");
	}
	
	if(isset($_REQUEST['inactid']))
   {
   		 $userid_admin=$_REQUEST['inactid'];
		mysql_query("update class_register set reg_status='0' where reg_id='$userid_admin' ");
		
	}
	if(isset($_REQUEST['actid'])){
		  $userid_admin=$_REQUEST['actid'];
		  mysql_query("update class_register set reg_status='1' where reg_id='$userid_admin' ");
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $adminsitename;?></title>

<script language="javascript">

function editfun()
{

alert("This is demo version not allowed to change");
  return false;	


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
    <td><?php include("includes/adminheader.php");?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php include("includes/adminmenu.php");?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
	  <!--<td width="6%" align="center">Search : </td>
        <td width="8%" align="center"><select name="select1">
		<option value="">Select</option>
          <?php 
	        	        while($user_fetch=mysql_fetch_array($user_search))
	  {
	  echo $user=$user_fetch['reg_id'];
	 echo $user_list=$user_fetch['reg_name'];
	  ?>
          <option value="<?php echo $user;?>"><?php echo $user_list;?></option>
          <?php }?>
        </select></td>
        <td width="15%" align="center"><select name="select2">
		<option value="">Select</option>
          <?php 
	        $user_search1=mysql_query("select * from membership ");
	        while($user_fetch1=mysql_fetch_array($user_search1))
	  {
	  $user_id=$user_fetch1['id'];
	 echo $user_list1=$user_fetch1['member'];
	  ?>
          <option value="<?php echo $user_id;?>"><?php echo $user_list1;?></option>
          <?php }?>
        </select>        </td>
        <td width="10%" align="left"><input type="submit" name="search" value="Submit" /></td>-->
        <td align="center" width="32%" class="ad_text_color"><a href="individual_user.php?userview=All" class="link1">All</a></td>
		
        <!--<td align="center" width="32%" class="ad_text_color"><a href="individual_user.php?userview=Payment" class="link1">Payment</a></td>-->
        <!--<td align="center" width="32%" class="ad_text_color"><a href="individual_user.php?userview=Free" class="link1">Free</a></td>-->
      </tr>
      <tr>
        <td colspan="12">&nbsp;</td>
      </tr>
	     <tr>
        <td colspan="12"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  
</table>
</td>
      </tr>
      <tr>
        <td colspan="12"><table width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr bgcolor="#0F507F">
		   <td width="13%" height="29" align="center" bgcolor="#edcfde" class="link1">Id</td>
    <td width="13%" height="29" align="center" bgcolor="#edcfde" class="link1">Name</td>
    <td width="12%" align="center" bgcolor="#edcfde" class="link1">Address</td>
    <td width="19%" align="center" bgcolor="#edcfde" class="link1">Email</td>
   <!-- <td width="12%" align="center" bgcolor="#edcfde" class="link1">Address</td>
    <td width="12%" align="center" bgcolor="#edcfde" class="link1">Website</td>-->
    <td width="11%" align="center" bgcolor="#edcfde" class="link1">Phone Number </td>
   <!--<td width="7%" align="center" bgcolor="#edcfde" class="link1">Usertype</td>-->
     <!--<td width="11%" align="center" bgcolor="#edcfde" class="link1">Membership Details</td>-->
     <td width="6%" align="center" bgcolor="#edcfde" class="link1">Edit</td>
    <td width="5%" align="center" bgcolor="#edcfde" class="link1">Delete</td>
	<td width="6%" align="center" bgcolor="#edcfde" class="link1">View</td>
    <td width="10%" align="center" bgcolor="#edcfde" class="link1">Status</td>
  </tr>
  <?php
  $select="SELECT * FROM `class_register` order by reg_id desc";
  $strget="";
  $rowsPerPage =10;
  if(isset($_REQUEST['page']))
  {
  $i=$_REQUEST['page']*$rowsPerPage;
  }
  else
  {
  $i=0;
  }
  $query=mysql_query(getPagingQuery($select, $rowsPerPage,$strget)) or die(mysql_error()); 
  $pagingLink = getPagingLink($select, $rowsPerPage,$strget); 
  $countuser=mysql_num_rows($query);
  while($reg_fetch=mysql_fetch_array($query)) 
  {
  ?>
  <tr align="center" bgcolor="#FF83C3">
  <td bgcolor="#faf3f7" class="welcome_text"><?php echo ++$i;?></td>
    <td bgcolor="#faf3f7" class="welcome_text"><?php echo $reg_fetch['reg_name'];?></td>
    <td bgcolor="#faf3f7" class="welcome_text"><?php echo $reg_fetch['reg_address'];?><?php /*?><?php $view_city=$reg_fetch['reg_city'];
	 $city_select=mysql_query("select * from `class_city` where `cityid`='$view_city'");
$city_fetch=mysql_fetch_array($city_select);
echo $city_fetch['city_name']."<br />";
	 ?>      <?php $view_state=$reg_fetch['reg_state'];
	  $state_select=mysql_query("select * from `class_state` where `stateid`='$view_state'");
$state_fetch=mysql_fetch_array($state_select);
echo $state_fetch['state_name']."<br />";
	  ?>      <?php $view_country=$reg_fetch['reg_country'];
	  
$country_select=mysql_query("select * from `class_country` where `countryid`='$view_country'");
$country_fetch=mysql_fetch_array($country_select);
echo $country_fetch['country'];?><?php */?></td>
    <td bgcolor="#faf3f7" class="welcome_text"><?php echo $reg_fetch['reg_email'];?></td>
    <!--<td bgcolor="#faf3f7"><?php echo $reg_fetch['reg_address'];?></td>
    <td bgcolor="#faf3f7"><?php echo $reg_fetch['reg_website'];?></td>-->
    <td bgcolor="#faf3f7" class="welcome_text"><?php echo $reg_fetch['reg_phone'];?></td>
    <?php	
	//$usertype=$reg_fetch['reg_usertype'];
	//$usertype_select=mysql_query("SELECT * FROM `membership` where `id`='$usertype'");
	//$usertype_fetch=mysql_fetch_array($usertype_select)
	?>
    <!--<td bgcolor="#faf3f7" class="welcome_text"><?php echo $usertype_fetch['member'];?></td>-->
    <!--<td bgcolor="#faf3f7" class="ad_text_color"><a href="memberinfo.php?userviewid=<?php echo $reg_fetch['reg_id'];?>">View</a></td>-->
    <td bgcolor="#faf3f7" class="ad_text_color"><a href="edituser.php?usereditid=<?php echo $reg_fetch['reg_id'];?>"><img src="images/edit_f2.png" width="32" height="32" border="0" title="Edit" /></a></td>
    <td bgcolor="#faf3f7" class="ad_text_color"><form id="form1" name="delete" method="post" action="manageuser.php?delid=<?php echo $reg_fetch['reg_id'];?>">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center" valign="bottom"><input name="delete2" type="image"  src="../images/delete_x.jpg"class="button" value="Delete" onclick="if( confirm('Are you sure you want to Delete this Record?') )
						{
						
						return true;
						}
						else
						{	
						return false; 
						}" />
                        
                   <!-- demo     <input name="delete2" type="image"  src="../images/delete_x.jpg"class="button" title="Delete" value="Delete" onclick="return editfun();" /> -->
                        
                        
                        </td>
        </tr>
      </table>
    </form></td>
	<td bgcolor="#faf3f7" class="ad_text_color"><a href="viewuser.php?userviewid=<?php echo $reg_fetch['reg_id'];?>">View</a></td>
    <td bgcolor="#faf3f7" class="ad_text_color"><?PHP
		  $userid_admin=$reg_fetch['reg_id']; 
		  $activate=$reg_fetch['reg_status'];
		  if($activate==1)
		  {
		  ?>
        <a href="manageuser.php?inactid=<?php echo $userid_admin;?>" class="register" onclick="if( confirm('Are you sure you want to Activate this Record?') )
			{
			return true;
			}
			else
			{
			return false; 
			}" style="text-decoration:none; ">Activate</a>
            
            
         <!--  demo  <a href="manageuser.php?inactid=<?php //echo $userid_admin;?>" class="register"
		    onclick="return editfun();" style="text-decoration:none; ">Activate</a>  -->
            
        <?php } if($activate==0){?>
          <a href="manageuser.php?actid=<?PHP echo $userid_admin;?>" class="register" onclick="if(confirm('Are you sure you want to InActivate this Record?') )
								{
								 return true;
								}
								else
								{
								 return false; 
								}" style="text-decoration:none; ">Inactivate</a>
                                
                                
                                
                           <!-- demo     <a href="manageuser.php?actid=<?PHP //echo $userid_admin;?>" class="register" onclick="return editfun();" style="text-decoration:none; ">Inactivate</a> -->
                                
        <?php } ?>    </td>
  </tr>
  <?php } ?>
        </table></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td align="center" class="ad_text_color"><?php 
		  if($countuser > 0)
		  {
		  echo $pagingLink;
		  }
		  else
		  {
		  echo "<font color=Red>No Records Found</font>"."<br><br>";
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
