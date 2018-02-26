<?Php
session_start();

$caste = array("1"=>"Hindu","2"=>"Muslim - Shia","3"=>"Muslim - Sunni","4"=>"Muslim - Others","5"=>"Christian - Catholic","6"=>"Christian - Orthodox","7"=>"Christian - Protestant","8"=>"Christian - Others","9"=>"Sikh","10"=>"Jain - Digambar","11"=>"Jain - Shwetambar","12"=>"Jain - Others","13"=>"Parsi","14"=>"Buddhist","15"=>"Inter-Religion","16"=>"No Religious Belief");	

$Language =  array('','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu','','Badaga');
				
$religion = array("1"=>"Hindu","2"=>"Muslim - Shia","3"=>"Muslim - Sunni","4"=>"Muslim - Others", "5"=>"Christian - Catholic","6"=>"Christian - Orthodox","7"=>"Christian - Protestant","8"=>"Christian - Others","9"=>"Sikh","10"=>"Jain - Digambar","11"=>"Jain - Shwetambar","12"=>"Jain - Others","13"=>"Parsi","14"=>"Buddhist","15"=>"Inter-Religion","16"=>"No Religious Belief");



//print_r($_SESSION);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/searchresult.js"></script>
<script language="javascript" type="text/javascript">
function changepagenumber(pageno,linktext)
{
	window.location.href = 'simplesearch_results.php?page='+pageno+linktext;
}
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
// alert('generateCaste3.php?lang='+lang+'&rel='+religion+'&cast='+caste);
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


include "array_values.php";


$StrGender = $_REQUEST['txtGender'];
$StrSAge = $_REQUEST['txtSAge'];
$StrEAge = $_REQUEST['txtEAge'];
$StrReligion = $_REQUEST['religion'];
$StrCaste = $_REQUEST['caste'];
$StrPhoto = $_REQUEST['txtphoto'];

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

$searchcondition = "";
//$searchquery = "SELECT * FROM register WHERE 1 ";
$searchquery = "SELECT pd.spot_light, r.*  FROM register r LEFT JOIN payment_details pd ON (r.MatriID =pd.matriid) WHERE  Status <> 'InActive' AND Status <> '' ";
if($StrGender != "")
$searchquery .= " AND Gender = '".$StrGender."'";
if($StrReligion  != "")
{
	$searchquery .= " AND (Religion = '".$StrReligion."' || Religion like '%".$religion[$StrReligion]."%') ";
	$searchcondition .= ", Religion:".$religion[$StrReligion];
}
if($StrCaste != "Any" && $StrCaste != "")
{
	$searchquery .= " AND Caste = '".$StrCaste."'";
	$searchcondition .= ", Caste:".$caste_array_new[$StrCaste];
}
if($photo != "")
$searchquery .= " AND Photo1 <> 'nophoto.gif'";
$searchquery .= " AND Age Between '".$StrSAge."' AND '".$StrEAge."'";

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

//echo $searchquery; exit;

$count_record_exec = mysql_query($searchquery);
$searchresultcount = mysql_num_rows($count_record_exec);
$total_pages = ceil($searchresultcount / $max_results);

 //$searchquery .= " order by id desc LIMIT $from, $max_results ";
 
 $searchquery .= " order by pd.spot_light desc, r.Status = 'DIAMOND' DESC, r.Status = 'GOLD' DESC, r.Status = 'SILVER' DESC,  r.Status = 'Active' DESC,  r.id desc LIMIT $from, $max_results ";
 
 

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
        <div id="breadcrumb_text">You are Here:
<span class="pathway"> <?Php echo $breadcrumbspage; ?></span>
</div>
        <div id="breadcrumb_modifysearch"><a href="search_page.php" title="Modify Search" class="link" style="background-image:none">Modify Search >></a>				        </div>
        </li>
        
        <li class="right"></li>
</ul>
</div>
<!-- BREADCRUMBS ENDS HERE ########################################  -->

  <div id="content_area">
  
 
    <?php include("include/searchleftside.php"); ?>

  <?php include("featuredemo.php"); ?>


  </div>
<!-- CONTENT AREA ENDS HERE ###################################################  -->  

<!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
<!-- FOOTER ENDS HERE ###################################################  -->    



</div>
</body>
</html>