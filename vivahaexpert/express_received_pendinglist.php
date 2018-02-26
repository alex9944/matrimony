<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); ?>
<?php 
if(!isset($_GET['page'])){ 

    $page = 1; 

} else { 

    $page = $_GET['page']; 

} 



// Define the number of results per page 

$max_results = 5; 



// Figure out the limit for the query based 

// on the current page number. 

$from = (($page * $max_results) - $max_results);  

$strid = $_SESSION['matriid'];
$sql = mysql_query("Select * from expressinterest where eisender_accept='Pending' and eireceiver='$strid' order by id desc LIMIT $from, $max_results ");?>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  <!-- <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Express Interest Received</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div> -->
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div class="container">
  <div id="content_area" class="content-bg">
    <?Php include('include/searchleftside.php'); ?>
    <div class="col-md-9">
    <div id="inner_right"> 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $_SESSION['name'];?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Express Interest Received</h3>
        </div>
        <div class="body" align="left">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">

    <tr>

      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

        <tr>

          <td>Listed below are members who are awaiting your response. Go ahead and send them a reply, don't   keep them guessing. If a member's profile does not interest you, kindly decline their interest.</td>

        </tr>

        <tr>

          <td>&nbsp;</td>

        </tr>

        

      </table>

        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="3">

          <tr>

            <?php

// Figure out the total number of results in DB: 

//$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Religion='$StrReligion'  AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' "),0); 

//$strid = $_SESSION['matriid'];

$total_results =  mysql_result(mysql_query("SELECT COUNT(*) as Num FROM expressinterest where eisender_accept='Pending' and eireceiver='$strid' "),0); 



	

	if($total_results ==0)

	{

	print "No results";

   

	}

	

// Figure out the total number of pages. Always round up using ceil() 

$total_pages = ceil($total_results / $max_results);



?>

            <td><div align="left">  <?php echo " " . $total_results ." Message Found" ?> </div></td>

            <td>&nbsp;</td>

          </tr>

        </table>

        <table width="100%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">

          <tr>

            <td>&nbsp;</td>

          </tr>

          <tr>

            <td>

			<?php while($row = mysql_fetch_array($sql))

			{ ?>

			Received From: <a href='memprofile.php?id=<?php echo $row['eisender']?>&eiid=<?php echo $row['id']?>&action=ei' class="redheading2" target="_blank">

			<?php echo $row['eisender']?></a>

			<br>

			Received Message : <?php echo $row['eimsg']?>

			<br>

			Received On : <?php echo $row['eisentdt']?>

			<br>

			Status :  <?php echo $row['eirec_accept']?><br>

			

			<hr size="1">

			

			<?

			}

			?>			</td>

          </tr>

          <tr>

            <td>&nbsp;</td>

          </tr>

        </table>

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
  </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>