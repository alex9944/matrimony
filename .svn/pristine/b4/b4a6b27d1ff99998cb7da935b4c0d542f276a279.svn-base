<?php session_start();
ob_start();
include("config/error.php");
include("pagination.php");

$id=$_SESSION['userid'];

$category=$_REQUEST['category'];
$subcategory=$_REQUEST['subcategory'];
if($_REQUEST['keyword'] != 'Search')
	$keyword=$_REQUEST['keyword'];
else
	$keyword='';

 if(isset($_REQUEST['adv_search']))
{


if($category!="")
{
	if($str!="")
	{	 $temp="  ";	}
	$str.= $temp." p_category LIKE '%$category%'";
}

if($subcategory!="")
{
	if($str!="")
	{	 $temp=" and ";	}
	$str.= $temp." p_subcategory LIKE '%$subcategory%'";
}


if($keyword!="")
{
	if($str!="")
	{	 $temp=" or ";	}
	$str.= $temp." p_title LIKE '%$keyword%'";
}


if($keyword!="")
{
	if($str!="")
	{	 $temp=" or ";	}
	$str.= $temp." p_city LIKE '%$keyword%'";
}

if($str!="")
{

$querysearch="select * from class_postclassified where $str and p_status='1' order by p_id desc";
}
else
{


 $querysearch="select * from class_postclassified where p_status='1' order by p_id desc";

}
}
else
{

 $querysearch="select * from class_postclassified where p_status='1' order by p_id desc";

}
/*echo  $querysearch;*/


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $sitename;?></title>
<link type="text/css" rel="stylesheet" href="style/main.css"  />
<script language="javascript">
function show(divid)
{ 
	if(document.getElementById(divid).style.display == "block") {
		document.getElementById(divid).style.display = "none";
	} else {
		document.getElementById(divid).style.display = "block";
	}
}



</script>
</head>

<body>
<div id="container">
	<h1 id="header_font">
	  <strong><?php echo $sitename;?> classifieds</strong>
	</h1>
	<div class="contend_main">
		<?php include("includes/header.php");?>
	<div class="clr"></div>
	<div class="con_lft">	
		<div class="element-box">
			<div class="t">
				<div class="t">
					<div class="t"></div>
				</div>
			</div>
			<div class="m" style="">
				<?php include("includes/advance-search.php");?>
			</div>
			<div class="b">
				<div class="b">
					<div class="b"></div>
				</div>
			</div>
		</div>
		<!-- left ads -->
		<?php include("includes/left-ads.php");?>
	</div>
	<div class="con_rgt">
	
		<div class="element-box">
			<div class="t">
				<div class="t">
					<div class="t"></div>
				</div>
			</div>
		<div class="m" style="padding:14px;">
			<div class="in_head">
			<div class="in_head">
			<div class="in_head">
			
			<div class="head_txt">
				<?php  
					//$category=$_REQUEST['category']; 
					//$subcategory=$_REQUEST['subcategory'];
					//$keyword=$_REQUEST['keyword'];
					
					$categorysql1=mysql_fetch_array(mysql_query("select * from class_category where c_id='$category'"));
					$subcategorysql=mysql_fetch_array(mysql_query("select * from class_subcategory where sid='$subcategory'"));
					  if($category=="" && $subcategory=="" && $keyword=="") {
					    echo "All Classifieds Ads";
					  } elseif($category=="" && $subcategory=="" && $keyword!="") {
					  	echo "All Classifieds Ads &raquo ".$keyword;
					  } elseif($category!="" && $subcategory=="" && $keyword=="") {
					  	echo $categorysql1['c_name'];
					  }	else {
					  	echo $categorysql1['c_name'].' &raquo; '.$subcategorysql['subcategoryname'].$keyword;
					  }
					?>
					
			<?php 
		   $strget="category=$_REQUEST[category]&subcategory=$_REQUEST[subcategory]&keyword=$_REQUEST[keyword]&adv_search=$_REQUEST[adv_search]";
		   $rowsPerPage=5;
			$resu=mysql_query(getPagingQuery1($querysearch,$rowsPerPage,$strget));
			$pagingLink=getPagingLink1($querysearch,$rowsPerPage,$strget); 
			$cc= mysql_num_rows($resu);
			//total count
			$cctotal= mysql_num_rows(mysql_query($querysearch));
			 ?> <font><?php if($cctotal != 0) echo '( '.$cctotal.' )'; ?></font>
			</div>
			
			</div>
			</div>
			</div>
			<div class="bor_bot">
			
			<div class="links">
				<?php echo $pagingLink;?>
			</div>
			</div>			
                 <?php if($cc > 0)
					{
				//$catsql12=mysql_query("select * from class_subcategory where cid='$rowcat11[c_id]'");
				while($rowcat12=mysql_fetch_array($resu))
				{
				 //$dateexp=explode("-",$rowcat12['p_date']);
				 //$datesql=mysql_fetch_array(mysql_query("select *,DATE_FORMAT(p_date,'%W %M ') as datechk from class_postclassified"));
				 $userdate = $rowcat12['p_date'];
				 $dttemp=strtotime($userdate);
				 $postdate=date("l-F d Y",$dttemp);
				 
				 $categorysql=mysql_fetch_array(mysql_query("select * from class_category where c_id='$rowcat12[p_category]'"));
				 $subcategorysql=mysql_fetch_array(mysql_query("select * from class_subcategory where sid='$rowcat12[p_subcategory]'"));
				 $sid=base64_encode($rowcat12['p_id']);
	 $vname=str_replace(" ","-",$rowcat12['p_title']." ".$sid);
				?>
			<div class="bor_bot ">
			<?php if($rowcat12['p_photo1'] != '') { ?>
				<a href="searchview.php?<?php echo $vname; ?>"><img width="90" height="90" src="<?php echo $rowcat12['p_photo1']; ?>" alt="" /></a>
			<?php } else { ?>
				<img src="images/img_not.jpg" alt="" />
			<?php } ?>
			<div class="rgtfirst">
			<a href="searchview.php?<?php echo $vname; ?>" class="sub_title" style="text-decoration:underline;">
			<?php echo $rowcat12['p_title']; ?>
			</a>
			<span>
			<?php echo $subcategorysql['subcategoryname']; ?> - <em>
			<?php echo $postdate; //echo $datesql['datechk']; ?><?php //echo $dateexp[2];?>,&nbsp;
			<?php //echo $dateexp[0];?></em>
			</span>
			<?php echo $rowcat12['p_description']; ?>
			</div>
			<div class="rgtsecnd"></div>
			</div>
			  <?php 
				 } 
				 }
				 else
				 {
				 ?>
			<div style="font:normal 12px arial;color:red;padding-top:20px;" align="center">No Classifieds</div>
			 <?php } ?>
			
			<div class="clr"></div>
			
		</div>
		<div class="b">
			<div class="b">
				<div class="b"></div>
			</div>
		</div>
		</div>
		<!-- center ads -->
		<?php include("includes/center-ads.php");?>
	</div>
	<div class="clr"></div>
	<?php include("includes/footer.php");?>
	</div>
</div>
<div class="bottom_line"></div>
</body>
</html>
