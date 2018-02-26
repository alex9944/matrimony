<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/sentmsg.js"></script>
</head>

<body>
<?php include("config.php"); 
if(!isset($_GET['page'])){ 

    $page = 1; 

} else { 

    $page = $_GET['page']; 

} 



// Define the number of results per page 

$max_results = 10; 



// Figure out the limit for the query based 

// on the current page number. 

$from = (($page * $max_results) - $max_results);  

$strid = $_SESSION['matriid'];

$sql = "SELECT *,Left(message,30) as text from sendmessage where sender = '$strid' order by id desc LIMIT $from, $max_results ";
$sql = mysql_query($sql);

?>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
 <!--  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">My Inbox</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div> -->
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  <div class="container">
  <div id="content_area" class="content-bg">
    <?Php include('include/loginsidebar.php'); 
	$row = mysql_fetch_array($memcontrol)
	?>
  <div class="col-md-9">
    <div id="inner_right" > 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $_SESSION['name'];?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">My Inbox</h3>
        </div>
        <div class="body" align="left">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="left">Listed Below are <strong>Sent Personalised </strong>messages.</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                <table width="100%" border="0" align="center" cellpadding="3" cellspacing="3">
                  <tr>
                    <?php

$total_results =  mysql_result(mysql_query("SELECT COUNT(*) as Num FROM sendmessage where sender ='$strid' "),0); 



	

	if($total_results ==0)

	{

	print "No results";

   

	}

	

// Figure out the total number of pages. Always round up using ceil() 

$total_pages = ceil($total_results / $max_results);



?>
                    <td><div align="left"><?php echo " " . $total_results ." Sent Message Found" ?> </div></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2"><div align="center">
                        <?php 

$StrAction=$_GET['action'];

if ($StrAction == "s")

{

	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";

	echo "<tr>";

	echo "<td class=Alert><strong>Message(s) has been deleted successful.</strong> </td>";

	echo "</tr>";

	echo "</table>";

}

?>
                      </div></td>
                  </tr>
                </table>
                <form action="" method="post" name="forms" id="forms">
                  <table width="100%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table  height="0" border="0" cellpadding="0" cellspacing="0" width="98%">
                          <tr>
                            <td colspan="5" ><input name="topcheckbox" type="checkbox" class="check" id="topcheckbox" onClick="selectall();" value="ON" />
                              <span class="Alert">Select All</span></td>
                          </tr>
                          <tr>
                            <td width="61" ><div align="left"><strong><a href="javascript:goDel()" class="style1">Delete</a></strong></div></td>
                            <td width="80"><strong>From</strong></td>
                            <td width="80"><span class="bodysg">To</span></td>
                            <td width="252"><span class="bodysg">Messages</span></td>
                            <td width="141"><div align="left"><span class="bodysg">Sent on </span> </div></td>
                          </tr>
                        </table>
                        <?php while($row = mysql_fetch_array($sql))

			{ ?>
                        <table width="100%"  height="0" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="61" ><input name="<?php echo $row['id']?>" type="checkbox" class="check" /></td>
                            <td width="80"><?php  echo $row['sender']?></td>
                            <td width="80"><?php  echo $row['receiver']?></td>
                            <td width="252"><a href="javascript:void window.open('read_sentmsg.php?fullview=Y&amp;Msgid=<?php  echo $row['id']?>&amp;recipientID=<?php  echo $row['receiver']?>','','height=468,width=600,resizable=yes,scrollbars=no')"><strong>
                              <?php  echo $row['text']?>
                              ...</strong></a></td>
                            <td width="141"><?php  echo $row['date_sent']?></td>
                          </tr>
                        </table>
                        <hr size="1">
                        <?

			}

			?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                </form>
                <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td><div align="right">
                        <?php



//Paging info

echo "Page ";





for($i = 1; $i <= $total_pages; $i++){ 

    if(($page) == $i){ 

        echo "$i "; 

        } else { 

            echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i\">$i</a>  ] "; 

    } 

} 





echo " of ". $total_pages ; 





// Build Previous Link 

if($page > 1){ 

    $prev = ($page - 1); 

    //echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 

	echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"> Previous</a> &nbsp;|";

} 



// Build Next Link 

if($page < $total_pages){ 

    $next = ($page + 1); 

    echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next\">Next</a>"; 

} 

?>
                        </div></td>
                  </tr>
                </table></td>
            </tr>
          </table>
          <div class="hline2"></div>
        </div>
      </div>
      <?php include("include/afterloginmenu_active.php"); ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
        <tr>
          <td class="pg_left"></td>
          <td height="48" align="center" valign="middle" class="pg_center"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="prof_det_toolbar" style="height:48px;">
              <tr>
                <td width="80" class="p_d_block1"><a href="#top" class="btn_goTop">Go Top</a></td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          <td class="pg_right"></td>
        </tr>
      </table>
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
    </div>
  </div>
  </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>