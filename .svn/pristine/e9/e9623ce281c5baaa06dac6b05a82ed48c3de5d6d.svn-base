<?php include("memprotect.php"); ?>
<?php //@session_start(); 
 $free_mem = $_SESSION['status'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/searchresult.js"></script>
<script language="javascript" type="text/javascript">
function changepagenumber(pageno,linktext)
{
	window.location.href = 'visitors.php?page='+pageno+linktext;
}

function loadCaste(lang,religion,caste,divid)
 {
   //alert('generateCaste3.php?lang='+lang+'&rel='+religion+'&cast='+caste);
 $.post('generateCaste3.php?lang='+lang+'&rel='+religion+'&cast='+caste, function(data) {
 
// alert("shi" );
	if(data!=''){
	//alert(data);
	document.getElementById(divid).innerHTML = data;
	}});
 }

</script>
</head>

<body>
<?Php
//FOR PAGING
if(!isset($_GET['page'])){ 
    $page = 1; 
} else { 
    $page = $_GET['page']; 
} 
// Define the number of results per page 
$max_results = 15; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results);  
//END PAGING

 $searchquery = "SELECT R.*,V.* FROM visitor V,register R WHERE V.vmemberid  = '".$_SESSION['matriid']."' AND V.memberid = R.MatriID"; 


$count_record_exec = mysql_query($searchquery);
$searchresultcount = mysql_num_rows($count_record_exec);
$total_pages = ceil($searchresultcount / $max_results);

//$searchquery .= " ORDER BY vid DESC LIMIT $from, $max_results ";

//echo $searchquery;
$searchresultsql =  mysql_query($searchquery);	

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
        <div id="breadcrumb_text">You are Here:
<span class="pathway"> <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Your Visitors</span>
</div>
        </li>
        
        <li class="right"></li>
</ul>
</div>
<!-- BREADCRUMBS ENDS HERE ########################################  -->

  <div id="content_area">
  
 
    <div id="inner_left">
      <div id="inner_left_header"></div>
      
      <div id="inner_left_content">
     
      <p><a href="#" class="btn_registerfree"><img src="images/btn_registerfree.gif" width="136" height="46" alt="register free" /></a></p>
      <!--Left Banner Area1 starts here-->     
     <div class="innerleft_banner"><a href="#"><img src="images/innerleft_banner.jpg" width="228" height="399" alt="advertisement" /></a></div>
      <!--Left Banner Area1 ends here--> 
       
        
        
        <div class="F_prof_block margin10">
          <div class="head">
            <h2>Sucess Stories</h2>
          </div>
          <div class="body">
            <table width="100%" border="0" cellspacing="5" cellpadding="0">
              <tr>
                <td height="180" align="center" valign="middle"><a href="#"><img src="images/success_img.jpg" width="150" height="150" class="img_profile" /></a></td>
              </tr>
              <tr>
                <td align="center">
                <p><strong>Ajith</strong> got married to <strong>Priyanka</strong> on 27 February 2009 in a beautiful ceremony.Ajith was registered on <?php echo $sitename; ?> as a Diamond Member, whereas Priyanka held a basic membership. </p></td>
              </tr>
              <tr>
                <td align="center"><strong><a href="#">Read More</a></strong></td>
              </tr>
            </table>
          </div>
          <div class="foot"></div>
        </div>
      </div>
     
      <div id="inner_left_footer"></div>
    </div>
    <div id="inner_right">
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
        
          <h2 class="float_left title">
          <span class="black" style="color:#333;">Profile Spotlight. Big potential!</span></h2>
        </div>
        <div class="body">
          <p><img src="images/profile-smasher.jpg" width="150" height="150" align="right" />Profile Spotlight is a space on homepage and search page listings of a prospect where your profile is featured in the form of an advertisement to get maximum attention and to receive response in quick time.</p>
          <p><br />
          </p>
<h2><strong>Benefits</strong></h2>
            <br />
          <ul class="ddlist list-arrow2">
          <li>Become a Star</li>
          <li>Bold, Stylish, Distinguished</li>
          <li><a href="#"></a>Get Noticed</li>
          <li><a href="#"></a>Get even more results!</li>
          <li>It's fast and secure!</li>
          <li>It's easy to Meet Your Match.</li>
          </ul>
          <br/>
          <p>
            Your ad can be viewed by hundreds of thousands of prospects that will be interested in your profile. 
   </p>
          <p>&nbsp;</p>
         
          <table width="95%" border="1" align="center" cellpadding="0" cellspacing="5" class="tbl_featured">
            <tr>
              <td width="257" valign="top" class="td_bg2"><h3><br />
                  <strong>Give  it a try today - Profile Spotlight at MYR. 1, 200 for 3 months</strong></h3></td>
            </tr>
          </table>
          <br />
          
          <p>If you want to know more details about this  service call on 0484-3920400 or 9495542711</p>
          <br />
<p><a href="featuredprofile.php" title="Soul Mate Compatibility" target="_blank"><strong>View how it looks like.</strong></a></p>
<p>&nbsp;</p>
<p><br />
</p>
          <p>&nbsp;</p>
          <p>&nbsp; </p>
        </div>
        
        <div class="footer">
        <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a>
        </div>
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

<script>

function do_request(lang,religion,caste,divid)
{ 
 //alert('generateCaste3.php?lang='+lang+'&rel='+religion+'&cast='+caste);
 $.post('generateCaste3.php?lang='+lang+'&rel='+religion+'&cast='+caste, function(data) {
 
// alert("shi" );
	if(data!=''){
	//alert(data);
	document.getElementById(divid).innerHTML = data;
	}});

}
</script>

</div>
</body>
</html>