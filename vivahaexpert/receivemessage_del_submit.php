<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); 
$recsno=$_GET["recsno"]; 

$data=trim($recsno); 

$ex=explode(" ",$data); 

$size=sizeof($ex); 

for($i=0;$i<$size;$i++) 

{ 

    $id=trim($ex[$i]); 

    $sql="delete from receivemessage where rid='$id'"; 

    $result=mysql_query($sql);

    

} 



 	print "<script>";

     print " self.location='inbox_msg.php?action=s';"; // Comment this line if you don't want to redirect

     print "</script>";


?>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">My Inbox</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/loginsidebar.php'); 
	$row = mysql_fetch_array($memcontrol)
	?>
    <div id="inner_right"> 
      
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

          <td><div align="left">Listed Below are <strong>Received Personalised </strong>messages.</div></td>

        </tr>

      </table>

        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="3">

          <tr>

            <?php
$total_results =  mysql_result(mysql_query("SELECT COUNT(*) as Num FROM receivemessage where ToID ='$strid' "),0); 
	if($total_results ==0)
	{
	print "No results";
	}

// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results);
?>

            <td><div align="left"><?php echo " " . $total_results ." Message Found" ?> </div></td>

            <td>&nbsp;</td>

          </tr>

          <tr>

            <td colspan="2"><div align="center">

              <?php 

$StrAction=$_GET['action'];

if ($StrAction == "s")

{

	echo "<table width=100% border=0 cellpadding=0 cellspacing=0 >";

	echo "<tr>";

	echo "<td class=Alert align='center'><strong>Message(s) has been deleted successful.</strong> </td>";

	echo "</tr>";

	echo "</table>";

}

?>

            </div></td>

            </tr>

        </table>

		<form action="" method="post" name="forms" id="forms">

        <table width="100%" height="20" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">

          <tr>

            <td align="left">

			

			<table  height="0" border="0" cellpadding="0" cellspacing="0" width="530">

  <tr>

    <td colspan="4" ><input name="topcheckbox" type="checkbox" id="topcheckbox" onClick="selectall();" value="ON" />

      <span class="Alert">Select All</span></td>

    </tr>

  <tr>

    <td width="61" ><div align="left"><strong><a href="javascript:goDel()" class="style1">Delete</a></strong></div></td>

    <td width="80"><span class="bodysg">From</span></td>

    <td width="252"><span class="bodysg">Messages</span></td>

    <td width="141"><div align="left"><span class="bodysg">Received</span> </div></td>

  </tr>

</table>

<?php while($row = mysql_fetch_array($sql))

			{ ?>

<table  height="0" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="61" ><input name="<?php echo $row['rid']?>" type="checkbox" /></td>

    <td width="80"><?php  echo $row['FromID']?></td>

    <td width="252"><a href="javascript:void window.open('read_receivemsg.php?fullview=Y&amp;Msgid=<?php  echo $row['rid']?>&amp;recipientID=<?php  echo $row['FromID']?>','','height=468,width=600,resizable=yes,scrollbars=no')"><strong><?php  echo $row['text']?> ...</strong></a></td>

    <td width="141"><?php  echo $row['SendDate']?></td>

  </tr>

</table>

			

			

			<hr size="1">

			

			<?

			}

			?>			

					</td>

          </tr>

          <tr>

            <td>&nbsp;</td>

          </tr>

        </table>

		</form>

        <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">

          <tr>

            <td><div align="right"><span class="Partext1">

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

            </span></div></td>

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
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>