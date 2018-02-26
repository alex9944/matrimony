<?php session_start();
ob_start();
include("config/error.php");
include("pagination.php");

$id=$_SESSION['userid'];
//echo "select * from lak_register where `reg_id`='$id'";
$regsql=mysql_query("select * from `class_register` where `reg_id`='$id'");
$View_fetch=mysql_fetch_array($regsql);
$view_name=$View_fetch['reg_name'];
$view_email=$View_fetch['reg_email'];
$view_phone=$View_fetch['reg_phone'];
$view_lastview=$View_fetch['last_visit'];

// $searchkey=$_REQUEST['cid'];
$url=explode('?',$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$url2=explode("/",$url[1]);

$count_split2=count($url2)-1;


$split_id=explode("-",$url2[$count_split2]);

$count_split=count($split_id)-1;

$searchkey=base64_decode($split_id[$count_split]);


$subcategorysql1=mysql_fetch_array(mysql_query("select * from class_subcategory where sid='$searchkey'"));

$categorysql1=mysql_fetch_array(mysql_query("select * from class_category where c_id='$subcategorysql1[cid]'"));
 


$post_query=mysql_query("select * from class_postclassified where p_category='$subcategorysql1[cid]' and  p_status='1'");

$sid=base64_encode($subcategorysql1['sid']);
 $sname1=str_replace(" ","-",$subcategorysql1['subcategoryname']." ".$sid);

//echo $countsubcategory = mysql_num_rows($post_query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $sitename;?></title>
<link type="text/css" rel="stylesheet" href="style/main.css"  />
</head>

<body>
<div id="container">
  <h1 id="header_font"> <strong><?php echo $sitename;?> classifieds</strong> </h1>
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
          <?php include("includes/cate-left.php");?>
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
                <?php  $select="select * from class_postclassified where p_subcategory='$searchkey' and p_status='1' order by p_hotlisting desc"; 
			$strget=$sname1;
			$rowsPerPage = 5;
			$postquery=mysql_query(getPagingQuery1($select, $rowsPerPage,$strget)) or die(mysql_error()); 
			$pagingLink = getPagingLink1($select, $rowsPerPage,$strget); 
			$countclass=mysql_num_rows(mysql_query($select));?>
                <div class="head_txt"><?php echo $subcategorysql1['subcategoryname']; ?> <font>
                  <?php if($countclass != 0) echo '( '.$countclass.' )'; ?>
                </font></div>
              </div>
            </div>
          </div>
          <div class="bor_bot">
            <div class="links"> <?php echo $pagingLink;?> </div>
          </div>
          <?php if($countclass > 0)
			{
			while($postsql=mysql_fetch_array($postquery))
			{
			//$dateexp=explode("-",$postsql['p_date']);
			//$datesql=mysql_fetch_array(mysql_query("select *,DATE_FORMAT(p_date,'%W %M ') as datechk from class_postclassified"));
			$userdate = $postsql['p_date'];
			$dttemp=strtotime($userdate);
			$postdate=date("l-F d Y",$dttemp);
			
			$categorysql=mysql_fetch_array(mysql_query("select * from class_category where c_id='$postsql[p_category]'"));
			$subcategorysql=mysql_fetch_array(mysql_query("select * from class_subcategory where sid='$postsql[p_subcategory]'"));
			$sid=base64_encode($postsql['p_id']);
	 		$vname=str_replace(" ","-",$postsql['p_title']." ".$sid);
			?>
          <div class="bor_bot " <?php if($postsql['p_hotlisting']==1){?>  style="background-color:#cccccc;"<?php  }?>>
            <?php if($postsql['p_photo1'] != '') { 
			
			?>
            <a href="searchview.php?/<?php echo $vname;?>">
			<img width="90" height="90" src="<?php echo $postsql['p_photo1']; ?>" alt="" />
			</a>
            <?php } else { ?>
            <img src="images/img_not.jpg" alt="" />
            <?php } ?>
            <div class="rgtfirst"> 
			<a href="searchview.php?/<?php echo $vname;?>" class="sub_title">
			<?php echo $postsql['p_title']; ?></a> 
			<span>
			<?php echo $subcategorysql['subcategoryname']; ?> - <em>
			<?php echo $postdate;//echo $datesql['datechk']; ?>
			<?php //echo $dateexp[2];?>,&nbsp;
			<?php //echo $dateexp[0];?></em>
			</span> 
			<?php echo $postsql['p_description']; ?> 
			</div>
            <div class="rgtsecnd"></div>
          </div>
          <?php } }else
				 {?>
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
