<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>

<body>
<?Php


// If current page number, use it 

// if not, set one! 



if(!isset($_GET['page'])){ 

    $page = 1; 

} else { 

    $page = $_GET['page']; 

} 



$max_results = 5; 

$from = (($page * $max_results) - $max_results);  

$sql = mysql_query("SELECT *,Left(successmessage ,200) as successmessageshort FROM successstory where approve ='Yes' order by ID desc LIMIT $from, $max_results"); 



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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Success Stories</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/innerpagesidebar.php'); ?>
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
          <h2 class="float_left title"> <span class="black" style="color:#333;">Success Story</span></h2>
        </div>
        <div class="body">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
          <tr><td align="right"><a href="submit_success_stories.php"><strong>Submit Success Stories</strong></a></td></tr>
            <tr>
              <td><table width="100%" border="0" align="center" cellpadding="3" cellspacing="3">
                  <tr>
                    <td><?php

// Figure out the total number of results in DB: 

$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM successstory where approve ='Yes' "),0); 

	/*

	if($total_results ==0)

	{

	print "<script>";

     print "self.location='noresults.php';"; // Comment this line if you don't want to redirect

     print "</script>";

	}

	

*/

echo "";



// Figure out the total number of pages. Always round up using ceil() 

@$total_pages = ceil($total_results / $max_results);



?>
                      <span><?php echo " " . $total_results ." Success Stories Found" ?></span></td>
                    <td><div align="right"><span>
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
                </table>
                <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td></td>
                  </tr>
                </table>
                <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
                  <?php if(isset($sql)) { while($row = mysql_fetch_array($sql)){ ?>
                  <tr>
                    <td width="6%" ><img src="photoprocess.php?image=SuccessStory_Photos/<?php echo $row['weddingphoto']?>&square=100&watermark_text=<?php echo $info['Webname']; ?>&watermark_color=ffffff;" alt="<?php echo $row['groomname']?>-<?php echo $row['bridename']?>" border="0" class="submenubox"/></td>
                    <td width="94%" valign="top" style="padding-left:10px"><span class="h3r"><?php echo $row['groomname']?> &amp; <?php echo $row['bridename']?></span> <br>
                      <?php echo $row['successmessageshort']?>&nbsp; <a href="#" onClick="MM_openBrWindow('sucsess_stroryread.php?id=<?php echo $row['ID']?>','ss','scrollbars=yes,width=450,height=500')">more ....</a></td>
                  </tr>
                  <?php } }  ?>
                </table>
                <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td><div align="right"><span>
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
        </div>
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
      </div>
      <div class="banner_h_std"><img src="images/H_STD_BANNER.gif" width="468" height="80" /></div>
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
