<?Php
session_start();
$Language =array('-Select-','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Badaga','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu');
				
$caste =array('-Select-','Hindu','Muslim - Shia','Muslim - Sunni','Muslim - Others','Christian - Catholic','Christian - Orthodox','Christian - Protestant','Christian - Others','Sikh','Jain - Digambar','Jain - Shwetambar','Jain - Others','Parsi','Buddhist','Inter-Religion','No Religious Belief');		

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/searchresult.js"></script>
<script language="javascript" type="text/javascript">
function changepagenumber(pageno,linktext)
{
	window.location.href = 'refinesearch.php?page='+pageno+linktext;
}
</script>
<script language="javascript" type="text/javascript">
function openverifywindow()
{
	var l = (screen.availWidth-350) / 2 ;
	var t = (screen.availHeight-250) / 2 ;
	window.open("verifypopup.php","What is this?","resizable=no,scrollbars=no,status=yes,width=350,height=250,menubar=0,toolbar=0,left="+l+",top="+t+"");
	return false;
}
</script>
<!-- FOR TOOL TIP START -->
<script type="text/javascript" src="js/jquery-1.2.2.pack.js"></script>
<script type="text/javascript" src="js/htmltooltip.js"></script>
<!-- FOR TOOL TIP END -->
<script>
function do_request(lang,religion,caste,divid)
{ 
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

$max_results = 25; 



// Figure out the limit for the query based 

// on the current page number. 

$from = (($page * $max_results) - $max_results);  
//END PAGING

$searchcondition = "";
$searchquery = "SELECT DISTINCT pd.matriid, pd.spot_light, r.* FROM register r LEFT JOIN payment_details pd ON pd.matriid = r.MatriID WHERE Status <> 'InActive' AND Status <> ''  ";
if($_REQUEST['religion'] != "")
{

    if($_REQUEST['religion'] == 'Hindu')
	 {
   	   //$searchquery .= " AND Religion = '".$_REQUEST['religion']."'";
	   $searchquery .= " AND (Religion = '1' || Religion like '%Hindu%')";
	 }  
	else if($_REQUEST['religion'] == 'Christian')
	 {
   	   //$searchquery .= " AND Religion = '".$_REQUEST['religion']."'";
	   $searchquery .= " AND (Religion = '5' || Religion = '6' || Religion = '7' || Religion = '8' || Religion like '%Christian%')";
	 }  
	else if($_REQUEST['religion'] == 'Muslim')
	 {
   	   //$searchquery .= " AND Religion = '".$_REQUEST['religion']."'";
	   $searchquery .= " AND (Religion = '2' || Religion = '3' || Religion = '4' || Religion like '%Muslim%')";
	 }    
	$searchcondition = "Religion:".$_REQUEST['religion'];
}
if($_REQUEST['education'] != "")
{
	//$searchquery .= " AND Education = '".$_REQUEST['education']."'";
	
	if($_REQUEST['education'] == 'Doctorate')
	 {
   	   //$searchquery .= " AND Religion = '".$_REQUEST['religion']."'";
	   $searchquery .= " AND (Education like '%Medicine%' or Education like '%Doctorate%') ";
	 }  
	else if($_REQUEST['education'] == 'Masters')
	 {
   	   //$searchquery .= " AND Religion = '".$_REQUEST['religion']."'";
	   $searchquery .= " AND Education like '%Master%' ";
	 }  
	else if($_REQUEST['education'] == 'Bachelors')
	 {
   	   //$searchquery .= " AND Religion = '".$_REQUEST['religion']."'";
	   $searchquery .= " AND Education like '%Bachelor%' ";
	 }    
	
	$searchcondition = "Caste:".$_REQUEST['education'];
}
if($_REQUEST['photo'] != "")
{
	$searchquery .= " AND Photo1 <> 'nophoto.gif' AND Photo1Approve = 'Yes' ";
	$searchcondition = "Show the photo";
}
if($_REQUEST['online'] != "")
{
	$searchquery .= " AND online_status = 'online' and r.MatriID != '".$_SESSION['matriid']."'";
	$searchcondition = "Show online member";
}
if($_REQUEST['week'] != "")
{
	$searchquery .= " AND DATEDIFF(Now(),STR_TO_DATE(Regdate,'%Y-%m-%d'))<=7";
	$searchcondition = "Member of last week";
}
if($_REQUEST['month'] != "")
{
	$searchquery .= " AND DATEDIFF(Now(),STR_TO_DATE(Regdate,'%Y-%m-%d'))<=30";
	$searchcondition = "Member of last month";
}
if($_REQUEST['morethanmonth'] != "")
{
	$searchquery .= " AND DATEDIFF(Now(),STR_TO_DATE(Regdate,'%Y-%m-%d'))>30";
	$searchcondition = "Member of more than one month";
}


/*if(isset($_SESSION['username']))
{ 
	$count_blocklist_sql = "SELECT COUNT(*) AS blockmemberlist FROM blockmember WHERE memberid = '".$_SESSION['username']."'";
	$count_blocklist_exec = mysql_query($count_blocklist_sql);
	$count_blocklist_fetch = mysql_fetch_array($count_blocklist_exec);
	if($count_blocklist_fetch["blockmemberlist"] != 0)
	{
		$searchquery .= " AND r.MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
	}
}*/


if(isset($_SESSION['username']))
{ 
	$count_blocklist_sql = "SELECT COUNT(*) AS blockmemberlist FROM blockmember WHERE memberid = '".$_SESSION['username']."' or blockmemberid = '".$_SESSION['username']."'";
	$count_blocklist_exec = mysql_query($count_blocklist_sql);
	$count_blocklist_fetch = mysql_fetch_array($count_blocklist_exec);
	if($count_blocklist_fetch["blockmemberlist"] != 0)
	{
		$searchquery .= " AND r.MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."' or blockmemberid = '".$_SESSION['username']."')";
		
		$searchquery .= " AND r.MatriID NOT IN (SELECT memberid FROM blockmember WHERE memberid = '".$_SESSION['username']."' or blockmemberid = '".$_SESSION['username']."')";
	}
}

$count_record_exec = mysql_query($searchquery);
$searchresultcount = mysql_num_rows($count_record_exec);
$total_pages = ceil($searchresultcount / $max_results);

$searchquery .= " order by pd.spot_light desc, id desc LIMIT $from, $max_results ";

//echo $searchquery; exit;
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?></span> </div>
        <div id="breadcrumb_modifysearch"><a href="search_page.php" title="Modify Search" class="link" style="background-image:none">Modify Search >></a> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  <div id="content_area">
    <?php include("include/searchleftside.php"); ?>
    <form action="" method="post" name="searchrsforms" id="searchrsforms">
      <div id="inner_right">
        <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
        <a name="top" id="top"></a>
        <h1>Search Results</h1>
        <br />
        <strong> You have searched for:</strong> <?php echo $searchcondition;?>. <br />
        This results are based on your search criteria. If you are looking for better results,please try again, this time expanding your search criteria. After all, love is often  found where you least expect it.
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
          <tr>
            <td class="pg_left"></td>
            <td align="center" valign="middle" class="pg_center"><?php

if($_REQUEST['religion'] != "")
	$link = "&religion=".$_REQUEST["religion"];
if($_REQUEST['education'] != "")
	$link = "&education=".$_REQUEST["education"];
if($_REQUEST['photo'] != "")
	$link = "&photo=".$_REQUEST["photo"];
if($_REQUEST['online'] != "")
	$link = "&online=".$_REQUEST['online'];
if($_REQUEST['week'] != "")
	$link = "&week=".$_REQUEST['week'];
if($_REQUEST['month'] != "")
	$link = "&month=".$_REQUEST['month'];
if($_REQUEST['morethanmonth'] != "")
	$link = "&morethanmonth=".$_REQUEST['morethanmonth'];
?>
              <table width="100%" align="center">
                <tr>
                  <td><strong>Total Number of Matches Found : <?php echo $searchresultcount;?></strong></td>
                  <td width="188"><strong>Showing Page <?php echo $page; ?> of <?php echo $total_pages; ?></strong>
                    <select name="select" id="select" onchange="return changepagenumber(this.value,'<?php echo $link; ?>');" >
                      <?php for($selectpage = 1 ; $selectpage <= $total_pages; $selectpage++) { ?>
                      <option value="<?php echo $selectpage; ?>" <?Php if($selectpage == $page) echo "selected='selected'"; ?>><?php echo $selectpage; ?></option>
                      <?php } ?>
                    </select></td>
                  <td width="179"><?php
// Build Next Link 

if($page < $total_pages){ 

    $next = ($page + 1); 

    echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next".$link."\" class='pageNum'>&gt;&gt;</a>"; 

} 

for($i = $total_pages; $i >= 1; $i--) {
if(($page) == $i)
    echo "<span class='pageNum'>$i</span>"; 
else
	if((($page <= $i) && ($i <= ($page+2))) || (($i < $page) && ($i >= $page-2)))
	{
	    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$i".$link."\" class='pageNum'>$i</a>"; 
	}
}
// Build Previous Link 

if($page > 1){ 

    $prev = ($page - 1); 

    //echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 

	echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev".$link."\" class='pageNum'>&lt;&lt;</a> &nbsp;";

} 

?>
                  </td>
                </tr>
              </table></td>
            <td class="pg_right"></td>
          </tr>
        </table>
        <label class="size10 block" style="float:left; font-weight:bold; clear:left; margin-top:8px;">
        <input name="selectallcheckbox" type="checkbox" value="1" style="font-size:8px; margin-top:8px;" onClick="selectallprofile();" id="selectallcheckbox">
        Select All</label>
        <a href="javascript:clickforward()" class="button-small square-orange uppercase float_right" style="float:right; clear:right; margin:5px 0px;"><span></span> Forward </a>
        <hr style="background-color:#f9d6a5; height:2px; clear:both; margin:0px; padding:0px;"   />
        <br />
        <?php 
$currentpage = 1; // For view profile

while($searchresultfetch =  mysql_fetch_array($searchresultsql)) {	
$specificpage = (($page-1)*$max_results) + $currentpage; // For view profile
?>
        <label class="size10">
        <input name="<?php echo $searchresultfetch["MatriID"];?>" type="checkbox" value="<?php echo $searchresultfetch["MatriID"];?>" style="font-size:8px;">
        Select this Profile</label>
        <?php  
if($searchresultfetch['Height'] =="1") { $similarheight = "Below 4ft"; }
else if($searchresultfetch['Height'] =="2") { $similarheight = "4ft 6in"; }
else if($searchresultfetch['Height'] =="3") { $similarheight = "4ft 7in"; }
else if($searchresultfetch['Height'] =="4") { $similarheight = "4ft 8in"; }
else if($searchresultfetch['Height'] =="5") { $similarheight = "4ft 9in"; }
else if($searchresultfetch['Height'] =="6") { $similarheight = "4ft 10in"; }
else if($searchresultfetch['Height'] =="7") { $similarheight = "4ft 11in"; }
else if($searchresultfetch['Height'] =="8") { $similarheight = "5ft"; }
else if($searchresultfetch['Height'] =="9") { $similarheight = "5ft 1in"; }
else if($searchresultfetch['Height'] =="10") { $similarheight = "5ft 2in"; }
else if($searchresultfetch['Height'] =="11") { $similarheight = "5ft 3in"; }
else if($searchresultfetch['Height'] =="12") { $similarheight = "5ft 4in"; }
else if($searchresultfetch['Height'] =="13") { $similarheight = "5ft 5in"; }
else if($searchresultfetch['Height'] =="14") { $similarheight = "5ft 6in"; }
else if($searchresultfetch['Height'] =="15") { $similarheight = "5ft 7in"; }
else if($searchresultfetch['Height'] =="16") { $similarheight = "5ft 8in"; }
else if($searchresultfetch['Height'] =="17") { $similarheight = "5ft 9in"; }
else if($searchresultfetch['Height'] =="18") { $similarheight = "5ft 10in"; }
else if($searchresultfetch['Height'] =="19") { $similarheight = "5ft 11in"; }
else if($searchresultfetch['Height'] =="20") { $similarheight = "6ft"; }
else if($searchresultfetch['Height'] =="21") { $similarheight = "6ft 1in"; }
else if($searchresultfetch['Height'] =="22") { $similarheight = "6ft 2in"; }
else if($searchresultfetch['Height'] =="23") { $similarheight = "6ft 3in"; }
else if($searchresultfetch['Height'] =="24") { $similarheight = "6ft 4in"; }
else if($searchresultfetch['Height'] =="25") { $similarheight = "6ft 5in"; }
else if($searchresultfetch['Height'] =="26") { $similarheight = "6ft 6in"; }
else if($searchresultfetch['Height'] =="27") { $similarheight = "6ft 7in"; }
else if($searchresultfetch['Height'] =="28") { $similarheight = "6ft 8in"; }
else if($searchresultfetch['Height'] =="29") { $similarheight = "6ft 9in"; }
else if($searchresultfetch['Height'] =="30") { $similarheight = "6ft 10in"; }
else if($searchresultfetch['Height'] =="31") { $similarheight = "6ft 11in"; }
else if($searchresultfetch['Height'] =="32") { $similarheight = "7ft"; }
else if($searchresultfetch['Height'] =="33") { $similarheight = "Above 7ft"; }

$pre_count = 0;
$matriid   = $searchresultfetch['MatriID']; 
$sql       = "select * from payment_details where matriid = '$matriid' and spot_light = '1' ";
$result    = mysql_query($sql);
$pre_count = mysql_affected_rows();

$sel = "SELECT plan from payment_details where matriid ="."'".$searchresultfetch['MatriID']."' ";
$qry = mysql_query($sel );

$fetch = mysql_fetch_array($qry );
//if(count($fetch) >1) 

if($searchresultfetch['Status'] != 'Active')
{
$plan = $searchresultfetch['Status'];
} else{
$plan = 'Basic';
}


?>
        <a href="viewsimilarprofile.php?gender=<?php echo $searchresultfetch['Gender']; ?>&age=<?php echo $searchresultfetch['Age']; ?>&religion=<?php echo $searchresultfetch['Religion']; ?>&caste=<?php echo $searchresultfetch['Caste']; ?>&education=<?php echo $searchresultfetch['Education']; ?>&height=<?php echo $similarheight; ?>" class="float_right">View Similar Profile</a>
        <div class="profile_block <?php if(isset($pre_count) and $pre_count > 0) echo 'profile_block_featured'; ?>">
          <div class="header"><a href="viewfullprofile1.php?id=<?php echo $searchresultfetch['MatriID']; ?>" class="title"><?php echo $searchresultfetch["Name"];?> (<?php echo $searchresultfetch["MatriID"];?>)</a> <a href="#" class="icon_acc_type acc_golden" title="<?php echo $sitename; ?> Golden Account Holder"></a> <a href="viewfullprofile1.php?id=<?php echo $searchresultfetch['MatriID']; ?>" class="icon_acc_type" title="<?php echo $sitename; ?> <?php echo $plan; ?> Account Holder"><?php echo $sitename; ?>
            <?=$plan?>
            </a> <span class="icon status stat_online"><strong>
            <?php include("include/chat.php"); ?>
            <span class="icon status stat_online">
            <?php 
	if(in_array($searchresultfetch['MatriID'],$explodeonlinemember)) {
		echo $onlinechatmsg;
	}
	else {
		echo $offlinechatmsg;
	}
	?>
            </span> </strong></span> </div>
          
          <div style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f9d6a5;" class="footer"> 
		  
		  <?Php if(isset($_SESSION['username'])) { ?>
		  <a style="border-left-width: 1px; border-left-style: solid; border-left-color: #f9d6a5;" class="btn_services btn_favorite float_right" href="add_to_favorite.php?id=<?php echo $searchresultfetch['MatriID']; ?>">Add to Favorite</a>  <?Php } ?>
            <? 
			 $approvesel = "select approved from verify_profile where matriid = "."'".$searchresultfetch['MatriID']."'";
			$approveqry = mysql_query($approvesel);
			$approvefetch = mysql_fetch_array($approveqry);
			
			if($approvefetch['approved'] ==1) {
			$css = 'btn_services';
   		    $verified = 'Verified Profile: What is this? Click to See';
			//$verified = "";
			//$vdivtitle = "Verified : <font class='redcolottooltip'>What is this?</font>";
			$verifytext  = "Verified Profile";
			} else{
			$css = 'btn_services_disable';
			$verified= "Unverified Profile: What is this? Click to See";
			//$verified = "";
			//$vdivtitle = "Verified : <font class='redcolottooltip'>What is this?</font>";
			$verifytext  = "Verify Profile";
			}
			?>
            <a style="border-left-width: 1px; border-left-style: solid; border-left-color: #f9d6a5;" title="<?=$verified?>" class="<?=$css?> btn_varify float_right" href="#" rel="htmltooltip" onclick="return openverifywindow();"><?php echo $verifytext; ?></a>
            <?php /*?><div class="htmltooltip"><?php echo $vdivtitle; ?></div><?php */?>
          </div>
         
          <div class="body">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="130">
				
				<?php if($searchresultfetch['Photo1']== "nophoto.gif" or $searchresultfetch['Photo1Approve'] == 'No' ) 
      { 
	     if($searchresultfetch['Gender'] == 'Male') 
		 { ?>
			<img src="images/icons/noimage_man.jpg" width="100" height="100" class="img_profile" /> <?php
		 } 
		 elseif($searchresultfetch['Gender'] == 'Female') 
		 { ?>
			<img src="images/icons/noimage_girl.jpg" width="100" height="100" class="img_profile" /> <?php 
		 }
	    else 
		 { ?>
            <img src="images/icons/photo_upload_lady.jpg" width="100" height="100" class="img_profile" /> <? 
		 }
       } 
     else if($searchresultfetch['PhotoProtect']== "Yes") 
	   { 
	      if($searchresultfetch['Gender'] == 'Male')
		   { ?>
		     <img src="images/icons/photo_askme_man.jpg" width="100" height="100" class="img_profile" /> <?Php		
	       }
		  else 
		   { ?>		
         	<img src="images/icons/photo_askme_lady.jpg" width="100" height="100" class="img_profile" /> <?Php
   	       } 

       }
	else
	  {  ?>					
        <img width="110" height="110" src="memphoto1/<?php echo $searchresultfetch['Photo1']?>" />  <? 
	  } ?>
                  </a>
                  <!--          <div class="thumb_slider"> <a href="#">1</a> <a href="#" class="active">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a href="#">7</a> </div>--></td>
                <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="profile">
                    <tr>
                      <th width="80">Age</th>
                      <td width="240">:&nbsp;<?php echo $searchresultfetch["Age"];?> yrs</td>
                      <th width="85">Height</th>
                      <td>:
                        <?php  

$strheight = $searchresultfetch['Height'];

if($strheight =="1") { echo "Below 4ft"; }

else if($strheight =="2") { echo "4ft 6in"; }

else if($strheight =="3") { echo "4ft 7in"; }

else if($strheight =="4") { echo "4ft 8in"; }

else if($strheight =="5") { echo "4ft 9in"; }

else if($strheight =="6") { echo "4ft 10in"; }

else if($strheight =="7") { echo "4ft 11in"; }

else if($strheight =="8") { echo "5ft"; }

else if($strheight =="9") { echo "5ft 1in"; }

else if($strheight =="10") { echo "5ft 2in"; }

else if($strheight =="11") { echo "5ft 3in"; }

else if($strheight =="12") { echo "5ft 4in"; }

else if($strheight =="13") { echo "5ft 5in"; }

else if($strheight =="14") { echo "5ft 6in"; }

else if($strheight =="15") { echo "5ft 7in"; }

else if($strheight =="16") { echo "5ft 8in"; }

else if($strheight =="17") { echo "5ft 9in"; }

else if($strheight =="18") { echo "5ft 10in"; }

else if($strheight =="19") { echo "5ft 11in"; }

else if($strheight =="20") { echo "6ft"; }

else if($strheight =="21") { echo "6ft 1in"; }

else if($strheight =="22") { echo "6ft 2in"; }

else if($strheight =="23") { echo "6ft 3in"; }

else if($strheight =="24") { echo "6ft 4in"; }

else if($strheight =="25") { echo "6ft 5in"; }

else if($strheight =="26") { echo "6ft 6in"; }

else if($strheight =="27") { echo "6ft 7in"; }

else if($strheight =="28") { echo "6ft 8in"; }

else if($strheight =="29") { echo "6ft 9in"; }

else if($strheight =="30") { echo "6ft 10in"; }

else if($strheight =="31") { echo "6ft 11in"; }

else if($strheight =="32") { echo "7ft"; }

else if($strheight =="33") { echo "Above 7ft"; }

?></td>
                    </tr>
                    <tr>
                      <th>Religion</th>
                      <td>:&nbsp;<?php echo $caste[$searchresultfetch['Religion']]; ?></td>
                      <th>Caste</th>
                      <td><script>
			do_request(<?php echo $searchresultfetch['Language'] ?>,<?php echo $searchresultfetch['Religion'] ?>, <?php echo $searchresultfetch['Caste'] ?>,'<?php echo $searchresultfetch['MatriID'] ?>');
			</script>
                        <div id="<?php echo $searchresultfetch['MatriID'] ?>"></div></td>
                    </tr>
                    <tr>
                      <th>Education</th>
                      <td><div style="float:left;">:&nbsp;</div>
                        <div style="float:left; width:220px;"><?php echo $searchresultfetch['Education']; ?></div></td>
                      <th>&nbsp;</th>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <th>Occupation</th>
                      <td>:&nbsp;<?php echo $searchresultfetch['Occupation']; ?></td>
                      <th colspan="2">
		   <?php 
		   if(isset($pre_count) and $pre_count > 0)
			{ ?>
			  <img src="images/featured_profile.png" alt="Featured Profile" width="120" height="26" border="0"  /><br />
			 
			  <?php 
			}  ?></th>
                    </tr>
                    <tr>
                      <th>Location</th>
                      <td><div style="float:left;">:&nbsp;</div>
                        <?php //echo $searchresultfetch['Address']; ?>
                        <div style="float:left; width:220px;">
                          <?php if($searchresultfetch['City'] != "") echo $searchresultfetch['City']; ?>
                          <?php if($searchresultfetch['State'] != "") echo ", ".$searchresultfetch['State']; ?>
                          <?php if($searchresultfetch['Country'] != "") echo ", ".$searchresultfetch['Country']; ?>
                        </div></td>
                      <th>&nbsp;</th>
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
            </table>
          </div>
          <?php include('common_tooltip.php'); ?>
        </div>
        <?php } ?>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
          <tr>
            <td class="pg_left"></td>
            <td align="center" valign="middle" class="pg_center"><table width="100%" align="center">
                <tr>
                  <td><strong>Total Number of Matches Found : <?php echo $searchresultcount;?></strong></td>
                  <td width="188"><strong>Showing Page <?php echo $page; ?> of <?php echo $total_pages; ?></strong>
                    <select name="select" id="select" onchange="return changepagenumber(this.value,'<?php echo $link; ?>');" >
                      <?php for($selectpage = 1 ; $selectpage <= $total_pages; $selectpage++) { ?>
                      <option value="<?php echo $selectpage; ?>" <?Php if($selectpage == $page) echo "selected='selected'"; ?>><?php echo $selectpage; ?></option>
                      <?php } ?>
                    </select></td>
                  <td width="179"><?php
// Build Next Link 

if($page < $total_pages){ 

    $next = ($page + 1); 

    echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next".$link."\" class='pageNum'>&gt;&gt;</a>"; 

} 

for($i = $total_pages; $i >= 1; $i--) {
if(($page) == $i)
    echo "<span class='pageNum'>$i</span>"; 
else
	if((($page <= $i) && ($i <= ($page+2))) || (($i < $page) && ($i >= $page-2)))
	{
	    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$i".$link."\" class='pageNum'>$i</a>"; 
	}
}
// Build Previous Link 

if($page > 1){ 

    $prev = ($page - 1); 

    //echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 

	echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev".$link."\" class='pageNum'>&lt;&lt;</a> &nbsp;";

} 

?>
                  </td>
                </tr>
              </table></td>
            <td class="pg_right"></td>
          </tr>
        </table>
        <br />
        <!-- BUSINESS PAGE CONTENT ends HERE ############################################ -->
      </div>
    </form>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  -->
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  -->
</div>
</body>
</html>
