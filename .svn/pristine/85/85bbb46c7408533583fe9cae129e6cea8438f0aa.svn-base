<?Php  session_start();  //echo md5('12345'); exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<!-- Start Model Window -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/thickbox.js"></script>
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<!-- End Model Window -->


<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
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
</head>
<body>
<?php include("config.php"); ?>
<?php 



if(!isset($_REQUEST["page"])) $page = 1;
else  $page = $_REQUEST["page"];
if(isset($page))
{
	$lookingfor = $_REQUEST["lookingfor"];
	if(!isset($_REQUEST["lookingfor"]))
	{
		$lookingfor = $_REQUEST["txtGender"];
		if($lookingfor == "")
			$lookingfor = $_REQUEST["gender"];
	}
	$txtID = $_REQUEST["txtID"];
	$selectagefrom = $_REQUEST["selectagefrom"];
	if(!isset($_REQUEST["selectagefrom"]))
	{
		$selectagefrom = $_REQUEST["txtSAge"];
		if($selectagefrom == "")
			$selectagefrom = $_REQUEST["age1"];
	}	
	$selectageto = $_REQUEST["selectageto"];
	if(!isset($_REQUEST["selectageto"]))
	{
		$selectageto = $_REQUEST["txtEAge"];
		if($selectageto == "")
			$selectageto = $_REQUEST["age2"];
	}	
	$religion = $_REQUEST["religion"];
	$mothertongue = $_REQUEST["mothertongue"];
	if(!isset($_REQUEST["mothertongue"]))
	{
		$mothertongue = $_REQUEST["language"];
	}
	$location = $_REQUEST["location"];
	$caste = $_REQUEST["caste"];
	$ms = $_REQUEST['ms'];
	$country = $_REQUEST["country"];
	$height1 = $_REQUEST["height1"];
	$height2 = $_REQUEST["height2"];
	$edu = $_REQUEST["edu"];
	if(!isset($_REQUEST["edu"]))
	{
		$edu = $_REQUEST["txtEdu"];
		if(!isset($_REQUEST["txtEdu"]))
		{
			$edu = $_REQUEST["education"];
		}
	}
	$occu = $_REQUEST["occu"];
	if(!isset($_REQUEST["occu"]))
	{
		$occu = $_REQUEST["txtOccu"];
	}	
	$txtkey = $_REQUEST["txtkey"];
	$Country = $_REQUEST['Country'];
	$State = $_REQUEST['State'];
	$City = $_REQUEST['City'];
	$Weight = $_REQUEST['Weight'];
	$online = $_REQUEST['online'];
	$week = $_REQUEST['week'];
	$month = $_REQUEST['month'];
	$morethanmonth = $_REQUEST['morethanmonth'];

	$educationset = $_REQUEST['educationset'];
	$occupationset = $_REQUEST['occupationset'];
	$appset = $_REQUEST['appset'];
	
	$photo = $_REQUEST["photo"];
	if(!isset($_REQUEST["photo"]))
	{
		$photo = $_REQUEST["txtphoto"];
	}
/*	if(isset($_REQUEST["photo"]))
		$photo = $_REQUEST["photo"];
	else
		$photo = "";
	*/
$page =  $page;
$max_results = 1; 
$from = (($page * $max_results) - $max_results);


$searchcondition = "";
$searchlink = "";
$matriid = $_REQUEST['id'];
$searchquery = "SELECT * FROM register WHERE ID='$matriid' or MatriId = '$matriid'";

$count_record_exec = mysql_query($searchquery);
$searchresultcount = mysql_num_rows($count_record_exec);
$total_pages = ceil($searchresultcount / $max_results);




//echo $searchquery;
$memcontrol =  mysql_query($searchquery);	
$finalsearcondition = "";
if($lookingfor != "")
	$finalsearcondition .= $lookingfor ;
if(($selectagefrom != "") && ($selectageto != ""))
	$finalsearcondition .= ", ".$selectagefrom." yrs to ".$selectageto." yrs ";
$finalsearcondition .= $searchcondition;
}

if($_REQUEST["ID"] != "")
{
$strid = $_REQUEST["ID"];
  $memcontrol = mysql_query("SELECT * FROM register where ID='$strid' or MatriId = '$strid' ");
}
?>
<div id="wrapper">
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); 	
  $row = mysql_fetch_array($memcontrol)
?>
  <!-- HEADER ENDS HERE ###################################################  -->
  <!-- CONTENT AREA STARTS HERE ###################################################  -->
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  <!-- <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png"> search <img alt="" src="images/icons/arrow_breadcrumbs.png">View Full Profile Of <? echo $row['Name'];?></span>
          <?php
//VISITOR PROFILE FOR MEMBER REGISTER PAGE
if($_SESSION['matriid'] != "")
{
	 $visitor_sql = "SELECT COUNT(*) AS vcount FROM visitor WHERE memberid = '".$_SESSION["matriid"]."' AND vmemberid ='".$row['MatriID']."'";
	$visitor_exec = mysql_query($visitor_sql);
	$visitor_fetch = mysql_fetch_array($visitor_exec);
	
	if($visitor_fetch["vcount"] == 0)
	{
		if($_SESSION['matriid'] != $row["MatriID"])
		{
			if($_SESSION['gender'] != $row["Gender"])
			{
				$insert_visitor_sql = "INSERT INTO visitor(memberid,vmemberid) VALUES('".$_SESSION["matriid"]."','".$row['MatriID']."')";
				mysql_query($insert_visitor_sql);
			}
		}
	}
}
?>
        </div>
        <div id="breadcrumb_modifysearch"><a href="search_page.php" title="Modify Search" class="link" style="background-image:none">Modify Search >></a> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div> -->
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  <div class="container">
  <div id="content_area" class="content-bg">
    <?Php include('include/searchleftside.php'); ?>
    <div class="col-md-9">
    <div id="inner_right"> <a name="top" id="top"></a>
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top">Profile Details</a></h1>
      <br/>
      <strong> You have searched for:</strong><?php echo $matriid;?>.
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
        <tbody>
          <tr>
            <td class="pg_left"></td>
            <td height="48" align="center" valign="middle" class="pg_center"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="prof_det_toolbar" style="height:48px;">
                <tbody>
                  <tr>
                    
					<td align="left"><a class="pageNum" style="float:left; font-size:11px; margin-left:15px;" href="javascript:;" onclick="window.history.go(-1)"><< Go Back</a></td>
					
					<?php /*?><?Php
            if($page >= 1){ 

    $prev = ($page - 1); 
?>
                    <td width="110" class="p_d_block1"><a href="http://www.maxwebdesign.asia/demo/numinousmatch/viewfullprofile.php?page=<?php echo $prev.$searchlink; ?>" class="pageNum" style="float:left; font-size:11px; margin-left:15px;">&lt;&lt; Prev Profile</a></td>
                    <?Php
} 

if($page <= $total_pages){ 

    $next = ($page + 1); 
?>
                    <td width="110" class="p_d_block1"><a href="http://www.maxwebdesign.asia/demo/numinousmatch/viewfullprofile.php?page=<?php echo $next.$searchlink; ?>" class="pageNum" style="float:left; font-size:11px; margin-left:15px; ">Next Profile&gt;&gt; </a></td>
					
					
					<!--<td width="110" class="p_d_block2"><a href="javascript:;" onclick="javascript: window.history.back();" class="pageNum" style="float:left; font-size:11px; margin-left:15px; ">Go Back </a></td>-->
					
                    <?Php

} 
?><?php */?>
                    <td>&nbsp;</td>
                    <td width="60" class="p_d_block2"><a href="printprofile.php?id=<?php  echo $row['MatriID']?>" target="_blank" class="btn_print block">Print</a></td>
                    <td width="60" class="p_d_block2"><a href="forward_message_submit.php?recsno=<?php  echo $row['MatriID']?>" class="btn_mailforward block"> Forward</a></td>
                  </tr>
                </tbody>
              </table></td>
            <td class="pg_right"></td>
          </tr>
        </tbody>
      </table>
      <?php  
	  
	  
	   $language =$row['Language']; 
	   $religion = $row['Religion'];
	  
	  include("values.php");
	  foreach($json as $key=>$value) {
	  
	  if($value->value == $row['Caste']){
	  $caste = $value->caption;
	  }
	  }
	  
	  $religion = array("1"=>"Hindu","2"=>"Muslim - Shia","3"=>"Muslim - Sunni","4"=>"Muslim - Others","5"=>"Christian - Catholic","6"=>"Christian - Orthodox","7"=>"Christian - Protestant","8"=>"Christian - Others","9"=>"Sikh","10"=>"Jain - Digambar","11"=>"Jain - Shwetambar","12"=>"Jain - Others","13"=>"Parsi","14"=>"Buddhist","15"=>"Inter-Religion","16"=>"No Religious Belief");
	   
	   
	   
	   
	   
if($row['Height'] =="1") { $similarheight = "Below 4ft"; }
else if($row['Height'] =="2") { $similarheight = "4ft 6in"; }
else if($row['Height'] =="3") { $similarheight = "4ft 7in"; }
else if($row['Height'] =="4") { $similarheight = "4ft 8in"; }
else if($row['Height'] =="5") { $similarheight = "4ft 9in"; }
else if($row['Height'] =="6") { $similarheight = "4ft 10in"; }
else if($row['Height'] =="7") { $similarheight = "4ft 11in"; }
else if($row['Height'] =="8") { $similarheight = "5ft"; }
else if($row['Height'] =="9") { $similarheight = "5ft 1in"; }
else if($row['Height'] =="10") { $similarheight = "5ft 2in"; }
else if($row['Height'] =="11") { $similarheight = "5ft 3in"; }
else if($row['Height'] =="12") { $similarheight = "5ft 4in"; }
else if($row['Height'] =="13") { $similarheight = "5ft 5in"; }
else if($row['Height'] =="14") { $similarheight = "5ft 6in"; }
else if($row['Height'] =="15") { $similarheight = "5ft 7in"; }
else if($row['Height'] =="16") { $similarheight = "5ft 8in"; }
else if($row['Height'] =="17") { $similarheight = "5ft 9in"; }
else if($row['Height'] =="18") { $similarheight = "5ft 10in"; }
else if($row['Height'] =="19") { $similarheight = "5ft 11in"; }
else if($row['Height'] =="20") { $similarheight = "6ft"; }
else if($row['Height'] =="21") { $similarheight = "6ft 1in"; }
else if($row['Height'] =="22") { $similarheight = "6ft 2in"; }
else if($row['Height'] =="23") { $similarheight = "6ft 3in"; }
else if($row['Height'] =="24") { $similarheight = "6ft 4in"; }
else if($row['Height'] =="25") { $similarheight = "6ft 5in"; }
else if($row['Height'] =="26") { $similarheight = "6ft 6in"; }
else if($row['Height'] =="27") { $similarheight = "6ft 7in"; }
else if($row['Height'] =="28") { $similarheight = "6ft 8in"; }
else if($row['Height'] =="29") { $similarheight = "6ft 9in"; }
else if($row['Height'] =="30") { $similarheight = "6ft 10in"; }
else if($row['Height'] =="31") { $similarheight = "6ft 11in"; }
else if($row['Height'] =="32") { $similarheight = "7ft"; }
else if($row['Height'] =="33") { $similarheight = "Above 7ft"; }
?>
      <a href="viewsimilarprofile.php?gender=<?php echo $row['Gender']; ?>&age=<?php echo $row['Age']; ?>&religion=<?php echo $row['Religion']; ?>&caste=<?php echo $row['Caste']; ?>&education=<?php echo $row['Education']; ?>&height=<?php echo $similarheight; ?>" class="float_right" style="margin-top:5px; margin-bottom:5px;">View Similar Profile</a>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left"><a href="#" class="title">
            <?php  echo $row['Name']?>
            (
            <?php  echo $row['MatriID']?>
            ), <? echo ucfirst($row['State']); ?> - <? echo ucfirst($row['Country']); ?></a></h3>
			
			<?php
			$sel = "SELECT plan from payment_details where matriid ="."'".$searchresultfetch['MatriID']."' ";
			$qry = mysql_query($sel );
			$fetch = mysql_fetch_array($qry );
			//if(count($fetch) >1) 
			if(isset($row['Status']) and $row['Status'] != 'Active')
			{
			  $plan = $row['Status'];
			} else{
			  $plan = 'Basic';
			}	
			?>
		  <a href="javascript:;" class="icon_acc_type" title="<?php echo $sitename; ?> <?php echo $plan; ?> Account Holder"><?php echo $sitename; ?> <?php echo $plan; ?></a>	
          <!--<a href="#" class="icon_acc_type acc_diamond" title="<?php echo $sitename; ?> Diamond Account Holder"></a>-->
          <!--<span class="icon status stat_online">Active: <strong>Online Now</strong></span>-->
          <span class="icon status stat_online"><strong>
          <?php include("include/chat.php"); ?>
          <span class="icon status stat_online">
          <?php 
	if(in_array($row['MatriID'],$explodeonlinemember)) {
		echo $onlinechatmsg;
	}
	else {
		echo $offlinechatmsg;
	}
	?>
          </span> </strong></span></div>
        
        <div class="footer" style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f9d6a5;"> 
		
		<?Php if(isset($_SESSION['username'])) { ?>
		<a href="blockmember.php?id=<?php echo $row['MatriID']; ?>" class="btn_services btn_block float_right">Block this Member</a> <a href="add_to_favorite.php?id=<?php echo $row['MatriID']; ?>" class="btn_services btn_favorite float_right" style="border-left-width: 1px; border-left-style: solid; border-left-color: #f9d6a5;">Add to Favorite</a>
         
		 <?php } 
		
		//print_r(); exit;
		
		?>
		  <? 
			 $sel = "select approved from verify_profile where matriid = "."'".$row['MatriID']."'";
			$qry = mysql_query(	$sel );
			$fetch = mysql_fetch_array($qry);
			
			if($fetch['approved'] ==1) {
			$css = 'btn_services';
		$verified = 'Verified Profile: What is this? Click to See';
			//$verified = '';
			$vdivtitle = "Verified Profile: <font class='redcolottooltip'>What is this? Click to See</font>";
			$verifytext  = "Verified Profile";
			} else{
			$css = 'btn_services_disable btn_services';
			$verified = 'Unverified Profile: What is this? Click to See';
			//$verified = '';
			$vdivtitle = "Unverified Profile: <font class='redcolottooltip'>What is this? Click to See</font>";
			$verifytext  = "Verify Profile";
			}
			?>
          <a style="border-left-width: 1px; border-left-style: solid; border-left-color: #f9d6a5;" title="<?=$verified?>" class="<?=$css?> btn_varify float_right" href="#" rel="htmltooltip" onclick="return openverifywindow();"><?php echo $verifytext; ?></a>
          <?php /*?><div class="htmltooltip"><?php echo $vdivtitle; ?></div><?php */?>
          <!--          <a href="#" class="btn_services btn_varify float_right" style="border-left-width: 1px; border-left-style: solid; border-left-color: #f9d6a5;">Verify Profile</a>
-->
        </div>
        
        <div class="body clear">
          <table width="100%" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td ><table width="100%" border="0" cellspacing="5" cellpadding="5">
                  <tr>
                    <td>
					<?php if(($row['Photo1']== "nophoto.gif" ) or $row['Photo1Approve'] == 'No') 
					   {
	                       if($row['Gender'] == 'Male')
						    { ?>
                              <a href='photo_req_int_form.php?eiid=<?php echo $row['MatriID']; ?>'><img src="images/icons/noimage_man.jpg" width="100" height="100" class="img_profile" /></a>
                      <?php } elseif($row['Gender'] == 'Female') 
					        { ?>
                              <a href='photo_req_int_form.php?eiid=<?php echo $row['MatriID']; ?>'><img src="images/icons/noimage_girl.jpg" width="100" height="100" class="img_profile" /></a>
                      <?php } else
					        { ?>
                              <img src="images/icons/photo_upload_lady.jpg" width="100" height="100" class="img_profile" />
                        <?  }  ?>
						  <p style="text-align:center; padding:5px 0;"><a href="#" onClick="MM_openBrWindow('photo_req_int_form.php?MatriID=<? echo $row['MatriID']; ?>','ppr','width=650,height=500')"> Request Photo </a> </p>
                      
						<?php 
					  }
else if($row['PhotoProtect']== "Yes") { 
	if($row['Gender'] == 'Male') {
?>
                      <img src="images/icons/photo_askme_man.jpg" width="100" height="100" class="img_profile" />
					  
					  <p style="text-align:center; padding:5px 0;"><a href="#" onClick="MM_openBrWindow('photopasswordrequest.php?MatriID=<? echo $row['MatriID']; ?>','ppr','width=650,height=500')"> Request Password </a> <br>
                      <a href="#" onClick="MM_openBrWindow('viewprotectphotoform.php?MatriID=<? echo $row['MatriID']; ?>','ppr','width=650,height=500')"> View Photo </a></p>
                      <?Php		
	} else {
?>
                      <img src="images/icons/photo_askme_lady.jpg" width="100" height="100" class="img_profile" />
					  
					  <br /><a href="#" onClick="MM_openBrWindow('photopasswordrequest.php?MatriID=<? echo $row['MatriID']; ?>','ppr','width=650,height=500')"> Request Password </a> <br>
                                      <a href="#" onClick="MM_openBrWindow('viewprotectphotoform.php?MatriID=<? echo $row['MatriID']; ?>','ppr','width=650,height=500')"> View Photo </a>
					  
                      <?Php
	} 

 }

else  {  


if(isset($_SESSION['username'])) { 


if($row['video_protect'] == 'Yes') {
$video_link = "video_protect_int_form.php?eiid=".$row['MatriID'];
} else {

$video_link = "view_video_album.php?id=".$row['MatriID']; 
$video_link = "video_protect_int_form.php?eiid=".$row['MatriID'];
}



?>
                      <!--  <a href="view_photo_album.php?id=<? echo $row['MatriID']; ?>"><img width="110" height="110" src="memphoto1/<?php echo $row['Photo1']?>"  name="example"/></a>
-->
                      <a href="memphoto1/<?php echo $row['Photo1']?>" class="thickbox" id="imgamodelwindow" name="imgamodelwindow"><img width="110" height="110" src="memphoto1/<?php echo $row['Photo1']?>"  name="example"/></a>
                      <?php } else { ?>
                      <img  name="example" width="110" height="110" src="memphoto1/<?php echo $row['Photo1']?>" />
                      <? } } ?></td>
                    <td style="padding:5px;"></td>
                    <!-- IF VIDEO IS AVAILABLE SHOW the below 2 TDs -->
                    <?php  if(isset($_SESSION['username'])) { ?>
                    <td style="padding-right:10px; vertical-align:top;"><a href="<?=$video_link?>"><img src="images/video.jpg" width="100" height="100" class="img_profile" /></a> </td>
                    <?php } ?>
                  </tr>
                  <tr>
                    <td align="center"><?php 
					
					//print_r($_SESSION['status']);
					 if(isset($_SESSION['username'])) { ?>
                      <?php } ?>
                      <div class="thumb_slider">
                        <!--<a href="javascript:change_image('memphoto1/<?php echo $row['Photo1']?>','1')" class="active" id="1" name="1">1</a>-->
                        <?php  if(isset($_SESSION['username'])) {
	

		$j=0;
		
		for($p=1;$p<=7;$p++)
		{
			if($row['Photo'.$p.'Approve']=='Yes') { $ph[$j]=$p;
			$j++; }
		}
		
		$bal=7-count($ph);
		
		
		
		for($p=0;$p<count($ph);$p++)
		{
		 //echo $ph[$p].'-'.$p.'<br>';
		 //print_r($ph);
		 $proimg  = "memphoto".$ph[$p]."/".$row['Photo'.$ph[$p]];
		 
		?>
		<?php /*?><a href="javascript:change_image('<?php echo $ph[$p]; ?>/<?php echo $row['Photo'.$ph[$p]]?>','<?php echo $p+1; ?>')" id="<?php echo $p+1; ?>" name="<?php echo $p+1; ?>" class=""><?php echo $p+1; ?></a><?php */?>
		
		<?php
		
		if($_SESSION['status'] == 'Active' or $_SESSION['status'] == 'InActive')
		  {
		    $video_username  = "Subscribe to view more Photos of ".$row['Name']; ?>
			<a href="membershipform.php" title="<?php if($r != '1') echo $video_username; ?>" id="<?php echo $p+1; ?>" name="<?php echo $p+1; ?>" class="" style=" <?php echo $style; ?>" ><?php echo $p+1; ?></a>		<?php 
		  }		
		  else
		  { 
		    $video_username  = "Click here to view photo album of ".$row['Name'];  ?>
			<a title="<?php if($r != '1') echo $video_username; ?>" href="javascript:change_image('<?php echo $proimg; ?>','<?php echo $p+1; ?>')" id="<?php echo $p+1; ?>" name="<?php echo $p+1; ?>" class="" style=" <?php echo $style; ?>" ><?php echo $p+1; ?></a> <?php 
		  } ?>
		
         <?php /*?><a href="javascript:change_image('<?php echo $proimg; ?>','<?php echo $p+1; ?>')" id="<?php echo $p+1; ?>" name="<?php echo $p+1; ?>" class=""><?php echo $p+1; ?></a><?php */?>
                        <?php
		}
		
		
			for($r=1;$r<=$bal;$r++)
			{
				if(!isset($ph[$p]))
				 {
					 //echo $row['Gender'];
					 if($row['Gender'] == 'Male') 
					 {
						$proimg  = "images/icons/noimage_man.jpg";
						$style   = "color:grey";
					 }
					 else
					 {
						$proimg  = "images/icons/noimage_girl.jpg";
						$style   = "color:grey";
					 }
				 }	 
				 //echo $_SESSION['status'];
				 if($_SESSION['status'] == 'Active' or $_SESSION['status'] == 'InActive')
		          {
				   $video_username  = "Subscribe to view more Photos of ".$row['Name']; ?>
					<a href="membershipform.php" title="<?php if($r != '1') echo $video_username; ?>" id="<?php echo $p+1; ?>" name="<?php echo $p+1; ?>" class="" style=" <?php echo $style; ?>" ><?php echo $p+1; ?></a>
							<?php 
				  }		
				  else
				  { 
				     ?>
				    <a href="javascript:change_image('<?php echo $proimg; ?>','<?php echo $p+1; ?>')" id="<?php echo $p+1; ?>" name="<?php echo $p+1; ?>" class="" style=" <?php echo $style; ?>" ><?php echo $p+1; ?></a> <?php 
				  }	
				  
				  $p++; 
			 
		}	
	  //exit;
 } else {   $video_username  = "Register to View more Photos of ".$row['Name']; ?>
                        <a href="visiter_notification.php?ID=<?php echo $row['MatriID']; ?>&key=photo" id="2" name="2" class="" title="<?php echo $video_username; ?>">1</a> <a href="visiter_notification.php?ID=<?php echo $row['MatriID']; ?>&key=photo" id="2" name="2" class="" title="<?php echo $video_username; ?>">2</a> <a href="visiter_notification.php?ID=<?php echo $row['MatriID']; ?>&key=photo" id="3" name="3" class="" title="<?php echo $video_username; ?>">3</a> <a href="visiter_notification.php?ID=<?php echo $row['MatriID']; ?>&key=photo" id="4" name="4" class="" title="<?php echo $video_username; ?>">4</a><a href="visiter_notification.php?ID=<?php echo $row['MatriID']; ?>&key=photo" id="5" name="5" class="" title="<?php echo $video_username; ?>">5</a><a href="visiter_notification.php?ID=<?php echo $row['MatriID']; ?>&key=photo" id="6" name="6" class="" title="<?php echo $video_username; ?>">6</a><a href="visiter_notification.php?ID=<?php echo $row['MatriID']; ?>&key=photo" id="7" name="7" class="" title="<?php echo $video_username; ?>">7</a>
                        <?php } ?>
						
                        <script>
function change_image(img_val,aid) {

document.images.example.src='';
document.images.example.src=img_val;
	document.getElementById("imgamodelwindow").href=img_val;
	for(i=1;i<<?php echo count($ph) ?>;i++)
	{
		if(i==aid)
			document.getElementById(i).className='active';
		else	
			document.getElementById(i).className='';
	}
}
 </script>
                        <?php
/*	$photo_count_sel = "SELECT COUNT(*) FROM photoalbum WHERE matriid = '".$row['MatriID']."' AND status='Active'";
	$photo_count_exec = mysql_query($photo_count_sel); 
	$photo_count_fetch =mysql_fetch_array($photo_count_exec);
*/	?>
                      </div></td>
                    <td ></td>
                    <!-- IF VIDEO IS AVAILABLE SHOW the below 2 TDs -->
                    <?php  if(isset($_SESSION['username'])) { ?>
                    <td align="center">
					
					
					<?php
					  //echo $_SESSION['status'];
					  if($_SESSION['status'] == 'Active' or $_SESSION['status'] == 'InActive')
					  { ?>
					    <a href="membershipform.php" title="Subscribe to view Video Album" style="padding:2px 0 0 0">Video</a> <?php
					  } 
					  else
					  { 
					  
					    $getimagedetail = "SELECT imagename FROM managevideo WHERE status='Active' AND matriid ='".$row['MatriID']."'";
						$getimagedetailexec = mysql_query($getimagedetail);
						$getimagedetailcount = mysql_num_rows($getimagedetailexec);
						if($getimagedetailcount > 0)
						 {  ?>
					    <a href="view_video_album.php?id=<? echo $row['MatriID']; ?>" title="Click here to view Video Album" style="padding:2px 0 0 0">Video Album</a> <?php 
						 }
					    else
						 { ?>
						   <a href="view_video_album.php?id=<? echo $row['MatriID']; ?>" title="<?php echo $row['Name']; ?> has No Video Album Created" style="padding:2px 0 0 0">Video Album</a><?php 
						 }
						
					  ?>
					     <?php 
					  } ?>	
					
					
					<?php /*?><a href="view_video_album.php?id=<? echo $row['MatriID']; ?>">Video</a><?php */?>
					</td>
                    <?php } ?>
                  </tr>
                  <tr>
                    <td><img src= "images/photo.jpg" width="15px" height="15px"/>
					  <?php
					  //echo $_SESSION['status'];
					  if($_SESSION['status'] == 'Active' or $_SESSION['status'] == 'InActive')
					  { ?>
					    <a href="membershipform.php" title="Subscribe to view Photo Album" style="padding:2px 0 0 0">Photo album</a> <?php
					  } 
					  else
					  { 
					    $getimagedetail = "SELECT imagename FROM photoalbum WHERE status='Active' AND matriid ='".$row['MatriID']."'";
						$getimagedetailexec = mysql_query($getimagedetail);
						$getimagedetailcount = mysql_num_rows($getimagedetailexec);
						if($getimagedetailcount > 0)
						 {  ?>
					    <a href="view_photo_album.php?id=<? echo $row['MatriID']; ?>" title="Click here to view Photo Album" style="padding:2px 0 0 0">Photo album</a> <?php 
						 }
					    else if(isset($_SESSION['username'])) 
						 { ?>
						   <a href="view_photo_album.php?id=<? echo $row['MatriID']; ?>" title="<?php echo $row['Name']; ?> has No Photo Album Created" style="padding:2px 0 0 0">Photo album</a><?php 
						 }	 
						else
						 {  ?>
						   <a href="visiter_notification.php?ID=<? echo $row['MatriID']; ?>&key=album" title="Register to view Photo Album" style="padding:2px 0 0 0">Photo album</a><?php
						 } 
					  } ?>	
				    </td>
                  </tr>
                </table></td>
              <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="profile">
                  <tr class="hline2">
                    <th width="90">Posted By</th>
                    <td width="230">: <? echo $row['Profilecreatedby']; ?></td>
                    <th width="85">&nbsp;</th>
                    <td>&nbsp;</td>
                  </tr>
                  <tr class="hline2">
                    <th>Last Login</th>
                    <td>:&nbsp;<? echo $row['Lastlogin']; ?></td>
                    <th>&nbsp;</th>
                    <td>&nbsp;</td>
                  </tr>
                  <tr class="hline2">
                    <th>Registered on</th>
                    <td>:&nbsp;<? echo $row['registered_on']; ?></td>
                    <th>&nbsp;</th>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="4" valign="top"><strong>About Me</strong><br />
                      <? echo $row['Profile']; ?></td>
                  </tr>
                </table></td>
            </tr>
          </table>
        </div>
        <?php 
		
		$onlinehoros_sql = "SELECT COUNT(*) AS horosava FROM onlinehoroscope WHERE custid = '".$row['MatriID']."'";
$onlinehoros_exec = mysql_query($onlinehoros_sql);
$onlinehoros_fetch = mysql_fetch_array($onlinehoros_exec);

//echo $onlinehoros_fetch["horosava"]; exit;

//if(($onlinehoros_fetch["horosava"] != 0) && ($searchresultfetch['Status'] != 'Active') && ($searchresultfetch['Status'] != ''))




if(($onlinehoros_fetch["horosava"] != 0))
{
	$horoscopeclass = 'icon btn_services btn_horoscope';
	$horoscopelink = 'href="viewphoroscope.php?id='.$searchresultfetch['MatriID'].'"';
	$horo_tooltip = 'title=""';
	$divhorotitle = 'Horoscope: Available: <font class="redcolottooltip">View Now</font>';
	$baloontooltip = 1;
	$horo_tooltip1 = "title='View Horoscope and Test Soulmate Compatibility'";
}
else
{
	$horoscopeclass = 'icon_disable btn_services_disable btn_horoscope';
	$horoscopelink = 'href="horoscope_int_form.php?eiid='.$searchresultfetch['MatriID'].'"';
	$horo_tooltip = 'title="Horoscope: Not Available Request Now"';
	$divhorotitle = '';
	$baloontooltip = 0;
	$horo_tooltip1 = "title='Horoscope: Not Available: Request Now'";
}

 if(isset($_SESSION['status']) and $_SESSION['status'] == 'Active')
  {
	   $matriid  =  $searchresultfetch['MatriID'];
	   $horoscopeclass  = 'icon btn_services btn_horoscope';
	   $horo_tooltip    = 'title="Subscribe to view horoscope"';
	   $horo_tooltip1    = 'title="Subscribe to view horoscope"';
	   $divtitle        = '';
	   $horoscopelink   = "href='membershipform.php'";
  }

$video_sql = "SELECT COUNT(*) AS video_count FROM managevideo WHERE matriid = '".$row['MatriID']."'";
$video_exec = mysql_query($video_sql);
$video_fetch = mysql_fetch_array($video_exec);
//print_r($video_fetch);
$video_count  = $video_fetch['video_count']; 
if($video_count > 0)
 {
    $video_tool  = "Subscribe to view video";
	$video_css   = "btn_services btn_video";
 }
else
 {
    $video_tool  = "No Video Uploaded";
	$video_css   = "btn_services_disable btn_services btn_video";
 } 

if(isset($_SESSION['status']) and $_SESSION['status'] == 'Active')
{
  $video_tool  = "Subscribe to view video";
	$video_css   = "btn_services btn_video";
}

$onlinehoros_sql = "SELECT COUNT(*) AS horosava FROM onlinehoroscope WHERE custid = '".$row['MatriID']."'";
$onlinehoros_exec = mysql_query($onlinehoros_sql);
$onlinehoros_fetch = mysql_fetch_array($onlinehoros_exec);

if(($onlinehoros_fetch["horosava"] != 0) && ($row['Status'] != 'Active') && ($row['Status'] != ''))
{
	$horoscopeclass = 'icon btn_services btn_horoscope';
	$horoscopelink = 'href="viewphoroscope.php?id='.$searchresultfetch['MatriID'].'"';
	
	if(isset($_SESSION['status']) and ($_SESSION['status'] != 'Active' or $_SESSION['status'] != 'InActive'))
	{
		$horo_tooltip = 'title="View Horoscope and Test Soulmate Compatibility"';
		$divhorotitle = 'Horoscope: Available: <font class="redcolottooltip">View Now</font>';
	}
	else if ($_SESSION['username'] == "")
	{
	    $horo_tooltip = 'title="Register to view horoscope"';
		$divhorotitle = 'Register to view horoscope';
	}
	else
	{
	    $horo_tooltip = 'title="Paid member only view horoscope of this member"';
		$divhorotitle = 'Paid member only view horoscope of this member';
	}
	
	 if(isset($_SESSION['status']) and $_SESSION['status'] == 'Active')
	  {
		   $matriid  =  $searchresultfetch['MatriID'];
		   $horoscopeclass  = 'icon btn_services btn_horoscope';
		   $horo_tooltip    = 'title="Subscribe to view horoscope"';
		   $horo_tooltip1    = 'title="Subscribe to view horoscope"';
		   $divtitle        = '';
		   $horoscopelink   = "href='membershipform.php'";
	  }
	
	$baloontooltip = 1;
}
else
{
	$horoscopeclass = 'btn_services btn_horoscope';
	//$horoscopeclass = 'btn_services btn_horoscope';
	$horoscopelink = 'href="horoscope_int_form.php?eiid='.$row['MatriID'].'"';
	
	
	if(isset($_SESSION['status']) and ($_SESSION['status'] != 'Active' or $_SESSION['status'] != 'InActive'))
	{
		$horo_tooltip = 'title="Subscribe to view horoscope"';
	}
	else if ($_SESSION['username'] == "")
	{
	    $horo_tooltip = 'title="Register to view horoscope"';
	}
	else
	{
	    $horo_tooltip = 'title="Paid member only view horoscope of this member"';
	}
	
	$divhorotitle = '';
	$baloontooltip = 0;
}


		
		 if(isset($_SESSION['username'])) { ?>
        <div class="footer"> <a href="express_int.php?MatriID=<? echo $row['MatriID']; ?>" class="btn_services btn_expressInterest" > Express Interest</a>
          <?php if(($_SESSION['status'] != "") && ($_SESSION['status'] != 'Active')) { ?>
          <a href="sendmessage.php?matriid=<? echo $row['MatriID']; ?>"  class="btn_services btn_message" title="Send Message" > Send Message</a> <a href="sendsms.php?mobile=<? echo $row['Mobile']; ?>&matriid=<? echo $row['MatriID']; ?>" title="Send SMS"  class="btn_services btn_sms">Send SMS</a>
             <a href="view_phonenumber.php?ID=<? echo $row['ID']; ?>"  class="btn_services btn_viewPhone" title="Call Now" >Call Now</a>
			 
			  <?php
			    $strid  = $row['MatriID'];
			    $countvideo_sql   = "SELECT COUNT(*) AS videocount FROM managevideo WHERE matriid ='".$strid."' and status = 'Active'";
				$countvideo_exec  = mysql_query($countvideo_sql);
				$countvideo_fetch = mysql_fetch_array($countvideo_exec);
				
				if(isset($_SESSION['status']) and $_SESSION['status'] == 'Active')
				{ ?>
				  <a href="membershipform.php"  class="btn_services btn_video" title="Subscribe to view video" > Video</a><?php 
			    }				
				else if($countvideo_fetch['videocount'] > 0)
				{  ?>
			      <a href="view_video_album.php?id=<? echo $row['MatriID']; ?>"  class="btn_services btn_video" title="View Video" > Video</a>  <?php
				} else
				{ ?>
				  <a href="view_video_album.php?id=<? echo $row['MatriID']; ?>"  class="btn_services btn_video" title="No Video Uploaded" > Video</a>  <?php 
				} ?>  
			  
			     <?php
				 $matriid  = $row['MatriID'];
				 $astrosql = " select * from payment_details where matriid = '$matriid' and astro_match = '1'";
				 $resss    = mysql_query($astrosql);
				 $couns    = mysql_affected_rows();
				 
				 $strid  = $_SESSION['matriid'];
				 $counthoros_sql = "SELECT COUNT(*) AS horoscount FROM onlinehoroscope WHERE custid ='".$strid."'";
				 $counthoros_exec = mysql_query($counthoros_sql);
				 $counthoros_fetch = mysql_fetch_array($counthoros_exec);
				 
				 $strid  = $row['MatriID'];
				 $counthoros_sql = "SELECT COUNT(*) AS horoscount FROM onlinehoroscope WHERE custid ='".$strid."'";
				 $counthoros_exec = mysql_query($counthoros_sql);
				 $counthoros_fetch = mysql_fetch_array($counthoros_exec);
				
				//print_r($counthoros_fetch);
				
				$requrest_gen = 0;
				$horogene = 0;
				
				$qqq    = "select * from payment_details where matriid = '".$strid."' and astro_match = '1'"; 
				$rrrr   = mysql_query($qqq);
				$count  = mysql_affected_rows();
				if($count > 0)
				 {
					//$horo_tooltip    = 'title="Buy Astromatch for Online Horoscope matching"'; 
					//$horoscopelink   = "href='membershipform.php'";
				 }
				else
				 {
				    $strid  = $row['MatriID'];
					$horo_tooltip    = 'title="View and Buy Astromatch for Online Horoscope matching"'; 
					$horoscopelink   = "href='viewphoroscope.php?id=$strid'";
				 } 
				 
				if($horogene == 1 and $_SESSION['status'] != 'Active')
				 {
					$horo_tooltip    = 'title="Horoscope Not Uploaded: Send Request"'; 
					$matriid  = $row['MatriID'];
					$horoscopelink   = "href='horoscope_int_form.php?eiid=$matriid'";
					$requrest_gen  = 1;
					
				 } 
				 
				 if($counthoros_fetch == 0)
				  {
				     $horo_tooltip    = 'title="Horoscope Not Uploaded: Send Request"'; 
					$matriid  = $row['MatriID'];
					$horoscopelink   = "href='horoscope_int_form.php?eiid=$matriid'";
					$requrest_gen  = 1;
					$horoscopeclass = "icon_disable btn_services_disable btn_horoscope";
				  }
				 
				 if(!isset($_SESSION['matriid'])) {
				   $matriid  =  $searchresultfetch['MatriID'];
				   $horoscopeclass  = 'icon btn_services btn_horoscope';
				   $horo_tooltip    = 'title="Register to view horoscope"';
				   $divtitle        = '';
				   $horoscopelink   = "href='visiter_notification.php?ID=$matriid&key=horoscope'";
				 }
				
				
				if(isset($_SESSION['status']) and $_SESSION['status'] == 'Active')
				  {
					   $matriid  =  $searchresultfetch['MatriID'];
					   $horoscopeclass  = 'icon btn_services btn_horoscope';
					   $horo_tooltip    = 'title="Subscribe to view horoscope"';
					   $divtitle        = '';
					   $horoscopelink   = "href='membershipform.php'";
				  }
				 
				
				 
				 $horogene_count  = '';
				 if(isset($_SESSION['status']) and $_SESSION['status'] != 'Active')
					{
						
						$strid  = $row['MatriID'];
						$counthoros_sql = "SELECT COUNT(*) AS horoscount FROM onlinehoroscope WHERE custid ='".$strid."'";
						$counthoros_exec  =  mysql_query($counthoros_sql);
						while($countres = mysql_fetch_array($counthoros_exec))
						{
						   $horogene_count   =  $countres['horoscount'];
						} 
						
						$strid  = $_SESSION['matriid'];
						$counthoros_sql = "SELECT COUNT(*) AS horoscount FROM onlinehoroscope WHERE custid ='".$strid."'";
						$counthoros_exec = mysql_query($counthoros_sql);
						$counthoros_fetch = mysql_fetch_array($counthoros_exec);
						
						
						//print_r($counthoros_fetch);
						
						if($counthoros_fetch["horoscount"] == 0)
						 {
							$horo_tooltip    = 'title="To view horoscope, you’ve to generate yours first"'; 
							$horoscopelink   = "href='manage_horoscope.php'";
						 }	
						 
						if($counthoros_fetch["horoscount"] > 0)
						{
							$qqq    = "select * from payment_details where matriid = '".$strid."' and ( astro_match = '1' or astro_3months = '1' or astro_6month = '1' )"; 
							$rrrr   = mysql_query($qqq);
							$count  = mysql_affected_rows();
							if($count > 0)
							 {
								//$horo_tooltip    = 'title="View and Buy Astromatch for Online Horoscope matching"'; 
								//$horoscopelink   = "href='membershipform.php'";
								$strid  = $row['MatriID'];
								$horo_tooltip    = 'title="View Horoscope and Test Soulmate Compatibility"'; 
								$horoscopelink   = "href='viewphoroscope.php?id=$strid'";
								
							 }
							else
							 {
								$strid  = $row['MatriID'];
								$horo_tooltip    = 'title="View and Buy Astromatch for Online Horoscope matching"'; 
								$horoscopelink   = "href='viewphoroscope.php?id=$strid'";
							 } 
						   
						   if($horogene_count == 0)
							 {
								$horo_tooltip    = 'title="Horoscope Not Uploaded: Send Request"'; 
								$matriid  = $row['MatriID'];
								$horoscopelink   = "href='horoscope_int_form.php?eiid=$matriid'";
							 }  	
						   /*else
							 {
								$strid  = $row['MatriID'];
								$horo_tooltip    = 'title="View and Buy Astromatch for Online Horoscope matching"'; 
								$horoscopelink   = "href='viewphoroscope.php?id=$strid'";
							 }	*/	 
							 
						 }
					     
						
					} ?>

				<?php if($baloontooltip == 1) { ?>
					<a  <?php echo $horoscopelink;?> class="<?php echo $horoscopeclass; ?>" <?=$horo_tooltip?> target="_blank"  rel="htmltooltip">Horoscope</a>
					
				<?php } else { ?>
				  <a  <?php echo $horoscopelink;?> class="<?php echo $horoscopeclass; ?>" <?=$horo_tooltip?>> Horoscope</a>
				<?php } ?>

                 <?php /*?><?php 
			     if($requrest_gen == 1)
				 { ?>
					<a <?php echo $horoscopelink; ?> target="_blank"  class="<?php echo $horoscopeclass; ?>" <?php echo $horo_tooltip; ?> >Horoscope</a><?php 
				 }		
				else if($counthoros_fetch["horoscount"] == 0)
				 { ?>
					<a href="manage_horoscope.php" target="_blank"  class="<?php echo $horoscopeclass; ?>" title="To view horoscope, you’ve to generate yours first" >Horoscope</a><?php 
				 }
				 else if($couns > 0)
				  { ?>
				    <a href="viewhoroscope.php?id=<?php echo $row['MatriID']; ?>" target="_blank"  class="<?php echo $horoscopeclass; ?>" <?php echo $horo_tooltip; ?> >Horoscope</a> <?php  
				  }
				 else
				  { ?>
				    <a href="viewphoroscope.php?id=<?php echo $row['MatriID']; ?>" target="_blank"  class="<?php echo $horoscopeclass; ?>" title="View and Buy Astromatch for Online Horoscope matching" >Horoscope</a> <?php
				  } ?><?php */?>
				  
				  
				  
				  
				  
				  
          <?php } else { ?>
          <a href="membershipform.php"  class="btn_services btn_message" title="Subscribe to send message" > Send Message</a> <a href="membershipform.php" title="Subscribe to send sms"  class="btn_services btn_sms">Send SMS</a> <?php /*?><a title="Paid member only chat with this member" class="icon_disable btn_services_disable btn_services  btn_chat" href="membershipform.php"> Chat </a><?php */?> <a href="membershipform.php" class="btn_services btn_viewPhone" title="Subscribe to call">Call Now</a> <a href="membershipform.php" class="<?php echo $video_css; ?>" title="<?php echo $video_tool; ?>"> Video</a> <a href="membershipform.php" class="<?php echo $horoscopeclass; ?>" <?php echo $horo_tooltip; ?>>Horoscope</a>
          <?php } ?>
		  
		  <?php 
		  
		  //echo $_SESSION['status'];
		  
		  if(isset($_SESSION['status']) and ($_SESSION['status'] != 'Active' or $_SESSION['status'] != 'InActive'))
		   { 
		   
		       if(in_array($row['MatriID'],$explodeonlinemember)) 
				  { 
				     if(isset($_SESSION['status']) and ($_SESSION['status'] == 'Active'))
					  { ?>
						<a title="Subscribe to chat" class="btn_services btn_chat" href="membershipform.php"> Chat </a>
						 <?Php
					  }
				    else
					  { ?>
						<a href="javascript:void(0)" onClick="javascript:chatWith('<?php echo $row['MatriID']?>')" title="Request Chat"  class="icon btn_services btn_chat" > Chat </a>  <?php
					  } ?>
			<?php } 
				else if(isset($_SESSION['status']) and ($_SESSION['status'] == 'Active'))
				  { ?>
				    <a title="Subscribe to chat" class="btn_services btn_chat" href="membershipform.php"> Chat </a>
					 <?Php
				  } 
				else
				  { ?>
				    <a title="Not Chatting Now, instead send message" class="btn_services btn_chat" href="sendmessage.php?matriid=<?php echo $row['MatriID']?>"> Chat </a>
				    <?php 
				  }  
		   }
		 else
		   { ?>
		     <a title="Subscribe to chat" class="btn_services btn_chat" href="membershipform.php"> Chat </a> <?php 
		   } 
		
		?>
		  
        </div>
        <div class="want_to_contact">
          <table width="100%" border="0" cellspacing="5" cellpadding="0">
            <tr>
              <td><p>Premium members have success rate 80% more than free members.</p></td>
              <td><a href="membershipform.php" class="button-small square-orange uppercase" style="margin:5px auto;"><span></span> Upgrade Membership</a> </td>
            </tr>
          </table>
        </div>
        <?Php } ?>
        <?php  if(!isset($_SESSION['username'])) { ?>
        <div class="footer"><a class="icon btn_services btn_viewPhone" href="visiter_notification.php?ID=<?php echo $row['MatriID']?>&key=phone" title="Register to view Phone"> View Phone</a> <a <?php echo $horo_tooltip; ?> class="<?php echo $horoscopeclass; ?>" href="visiter_notification.php?ID=<?php echo $row['MatriID']?>&key=horoscope"> Horoscope</a><a title="Register to Chat with this member" class="btn_services btn_chat" href="visiter_notification.php?ID=<?php echo $row['MatriID']?>&key=chat"> Chat </a> 	
          <?

$sel = "select count(*) as cnt from verify_profile where matriid ="."'".$matriid."' and approved  = 1" ;
$qry = mysql_query($sel);
$fetch  = mysql_fetch_array($qry );
if($fetch['cnt']>0 ) {
$css = 'icon btn_services';
$title= 'Profile Verified'; 
} else{
$css = "icon_disable btn_services_disable";
$title= 'Profile Varification not Available';
}



//$caste_arr = array("517"=>"Syrian Orthodox")
?>
          <!--        <a style="border-right:none;" class="<?=$css?>  btn_varify" title="<?=$title?>" href="#">Verify Profile</a> -->
        </div>
        <div class="want_to_contact">
          <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <tbody>
              <tr>
                <td align="center" width="180"><strong>Want to Contact
                  <? if($row['Gender'] =='Male') { echo "him"; } else{  echo "her";}?>? </strong></td>
                <td align="center" width="140"><a title="Register Free" href="registration1.php"><img width="120" height="40" src="images/btn_register.png"></a></td>
                <td align="center" width="30">or</td>
                <td align="center" width="80"><a class="link" href="login.php"><strong>Login</strong></a></td>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table>
        </div>
        <?Php } ?>
      </div>
      <div class="want_to_contact_bottom" style="border-top: solid 1px #f9d6a5;">
        <p><a href="#basicinfo">Basic Information</a> | <a href="#religious">Socio Religious Attributes</a> | <a href="#education">Education and Occupation </a> | <a href="#physical">Physical Attributes</a> | <a href="#contact">Contact Details</a> | <a href="#family">Family Details</a> | <a href="#partner">Partner Preference</a> | <a href="#hobbies">Hobbies and Interest</a> </p>
      </div>
      <div id="profiledetails"> <a name="basicinfo" id="basicinfo">Basic Information</a>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Name</td>
            <td width="25%">:&nbsp; <? echo $row['Name']; ?></td>
            <td width="25%">Caste</td>
            <td width="25%">:&nbsp;
              <? //echo $caste;
            //echo $row['Caste'];
			if(is_numeric($row['Caste'])) {
				$caste_sql = "SELECT cName FROM castedata WHERE cId = '".$row['Caste']."'";
				$caste_exec = mysql_query($caste_sql);
				$caste_fetch = mysql_fetch_array($caste_exec);
				echo $caste_fetch["cName"];
			}
			else
			{
				echo $row["Caste"];	
			} ?></td>
          </tr>
          <tr>
            <td>Mother tongue</td>
            <td id="<?php //echo $row['MatriID'] ?>">:&nbsp;
<script>
function do_request(lang,religion,caste,divid)
{ 
 $.post("generateCaste3.php?lang="+lang+"&rel="+religion+"&cast="+caste, function(data) {
 
 //alert("generateCaste3.php?lang="+lang+"&rel="+religion+"&cast="+caste );
	if(data!=''){
	//alert(data);
	document.getElementById(divid).innerHTML = data;
	}});

}
</script>			
              <? $mother_tonque = array('','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu','','Badaga');
			  
			  
			  //echo $row['Language'];
			  
			  
			   echo $mother_tonque[$row['Language']];
			  
			  $Language =array('','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu','','Badaga');
			  
			   ?>
<script>
			do_request(<?php echo $row['Language'] ?>,<?php echo $row['Religion'] ?>, <?php echo $row['Caste'] ?>,'<?php echo $row['MatriID'] ?>');
			</script> 			  
			  
			  </td>
            <td>Sub Caste</td>
            <td>:&nbsp; <? echo $row['Subcaste']; ?></td>
          </tr>
          <tr>
            <td>Religion</td>
            <td>:&nbsp;
              <? 
			
			echo $religion[$row['Religion']]; ?></td>
            <?Php if(isset($_SESSION['username']) && isset($_SESSION['payment_status'])) { ?>
            <td>Email</td>
            <td>:&nbsp; <? echo $row['ConfirmEmail']; ?></td>
            <? } ?>
          </tr>
        </table>
        <div class="hline2"></div>
        <a name="religious" id="religious">Socio Religious Attributes</a>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Gothra(m) </td>
            <td width="25%">: &nbsp;<? echo $row['Gothram']; ?></td>
            <td width="25%">Manglik</td>
            <td width="25%">: &nbsp;<? echo $row['Manglik']; ?></td>
          </tr>
          <tr>
            <td>Star(Nakshatra)</td>
            <td>:&nbsp; <? echo $row['Star']; ?></td>
            <td><span class="bodywk">Place of Birth</span></td>
            <td>:&nbsp; <? echo $row['place_of_birth']; ?></td>
          </tr>
          <tr>
            <td>Moonsign</td>
            <td>: &nbsp;<? echo $row['Moonsign']; ?></td>
            <td><span class="bodywk">Time of Birth</span></td>
            <td>: &nbsp;<? echo $row['time_of_birth']; ?></td>
          </tr>
          <tr>
            <td>Horoscope Match</td>
            <td>:&nbsp;
              <? if(isset($row['horo_match']) and $row['horo_match'] == 'Required') echo 'Available'; else if(isset($row['horo_match']) and $row['horo_match'] == 'Not Required') echo 'Not Available';  else echo $row['horo_match']; ?></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table>
        <div class="hline2"></div>
        <a name="education" id="education">Education and Occupation</a>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Education</td>
            <td width="25%"><span style="float:left; margin-right:8px;">:</span><span style="float:left; width:140px;"><? echo $row['Education']; ?></span></td>
            <td width="25%">Occupation</td>
            <td><span style="float:left; margin-right:8px;">:</span><span style="float:left; width:150px;"><? echo $row['Occupation']; ?></span></td>
          </tr>
          <tr>
            <td>Edu Details</td>
            <td>:&nbsp; <? echo $row['EducationDetails']; ?></td>
            <td>Employed in</td>
            <td>:&nbsp; <? echo $row['Employedin']; ?></td>
          </tr>
          <tr>
            <td>Annual income</td>
            <td>:&nbsp; <? echo $row['Annualincome']; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <div class="hline2"></div>
        <a name="physical" id="physical">Physical Attributes</a>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Height</td>
            <td width="25%">:&nbsp;
              <?php  

$strheight = $row['Height'];
if($strheight =="1") { echo "4ft - 121 cm"; }

else if($strheight =="2") { echo "4ft 1in - 124cm"; }

else if($strheight =="3") { echo "4ft 2in - 127cm"; }

else if($strheight =="4") { echo "4ft 3in - 129cm"; }

else if($strheight =="5") { echo "4ft 4in - 132cm"; }

else if($strheight =="6") { echo "4ft 5in - 134cm"; }

else if($strheight =="7") { echo "4ft 6in - 137cm"; }

else if($strheight =="8") { echo "4ft 7in - 139cm"; }

else if($strheight =="9") { echo "4ft 8in - 142cm"; }

else if($strheight =="10") { echo "4ft 9in - 144cm"; }

else if($strheight =="11") { echo "4ft 10in - 147cm"; }

else if($strheight =="12") { echo "4ft 11in - 149cm"; }

else if($strheight =="13") { echo "5ft - 152cm"; }

else if($strheight =="14") { echo "5ft 1in - 154cm"; }

else if($strheight =="15") { echo "5ft 2in - 157cm"; }

else if($strheight =="16") { echo "5ft 3in - 160cm"; }

else if($strheight =="17") { echo "5ft 4in - 162cm"; }

else if($strheight =="18") { echo "5ft 5in - 165cm"; }

else if($strheight =="19") { echo "5ft 6in - 167cm"; }

else if($strheight =="20") { echo "5ft 7in - 170cm"; }

else if($strheight =="21") { echo "5ft 8in - 172cm"; }

else if($strheight =="22") { echo "5ft 9in - 175cm"; }

else if($strheight =="23") { echo "5ft 10in - 177cm"; }

else if($strheight =="24") { echo "5ft 11in - 180cm"; }

else if($strheight =="25") { echo "6ft - 182cm"; }

else if($strheight =="26") { echo "6ft 1in - 185cm"; }

else if($strheight =="27") { echo "6ft 2in - 187cm"; }

else if($strheight =="28") { echo "6ft 3in - 190cm"; }

else if($strheight =="29") { echo "6ft 4in - 193cm"; }

else if($strheight =="30") { echo "6ft 5in - 195cm"; }

else if($strheight =="31") { echo "6ft 6in - 198cm"; }

else if($strheight =="32") { echo "6ft 7in - 200cm"; }

else if($strheight =="33") { echo "6ft 8in - 203cm"; }
else if($strheight =="34") { echo "6ft 9in - 205cm"; }
else if($strheight =="35") { echo "6ft 10in - 208cm"; }
else if($strheight =="36") { echo "6ft 11in - 210cm"; }
else if($strheight =="37") { echo "7ft - 213cm"; }

?></td>
            <td width="25%">Body type</td>
            <td>:&nbsp; <? echo $row['Bodytype']; ?></td>
          </tr>
          <tr>
            <td>Weight</td>
            <td>:&nbsp; <? echo $row['Weight']; ?></td>
            <td>Diet</td>
            <td>:&nbsp; <? echo $row['Diet']; ?></td>
          </tr>
          <tr>
            <td>Blood Group</td>
            <td>:&nbsp; <? echo $row['BloodGroup']; ?></td>
            <td>Habbits</td>
            <td>:&nbsp; <? echo $row['txtHabbits']; ?></td>
          </tr>
          <tr>
            <td>Complexion</td>
            <td>:&nbsp; <? echo $row['Complexion']; ?></td>
          </tr>
        </table>
        <div class="hline2"></div>
        <?Php if(isset($_SESSION['username']) && $_SESSION['payment_status'] == 'Payment' ) { ?>
        <a name="contact" id="contact">Contact Details</a>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Address</td>
            <td width="25%">:&nbsp; <? echo $row['Address']; ?></td>
            <td width="25%">Phone</td>
            <td>:&nbsp; <? echo $row['Phone']; ?></td>
          </tr>
          <tr>
            <td>Country</td>
            <td>:&nbsp; <? echo $row['Country']; ?></td>
            <td>Mobile</td>
            <td>:&nbsp; <? echo $row['Mobile']; ?></td>
          </tr>
          <tr>
            <td>State</td>
            <td>:&nbsp; <? echo $row['State']; ?></td>
            <td>Residence in</td>
            <td>:&nbsp; <? echo $row['Residencystatus']; ?></td>
          </tr>
          <tr>
            <td>City</td>
            <td>:&nbsp; <? echo $row['City']; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <div class="hline2"></div>
        <? } ?>
        <a name="family" id="family">Family</a>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Family Details</td>
            <td width="25%"><div style="float:left; padding-top:10px;">:&nbsp;</div><div style="float:left; width:145px; padding-top:10px;"><? echo $row['FamilyDetails']; ?></div></td>
            <td width="25%">No of Sisters</td>
            <td>:&nbsp; <? echo $row['noofsisters']; ?></td>
          </tr>
          <tr>
            <td>Family Values</td>
            <td>:&nbsp; <? echo $row['Familyvalues']; ?></td>
            <td>Father Name</td>
            <td>:&nbsp; <? echo $row['Fathername']; ?></td>
          </tr>
          <tr>
            <td>Family Type</td>
            <td>:&nbsp; <? echo $row['FamilyType']; ?></td>
            <td>Father Occupation</td>
            <td>:&nbsp; <? echo $row['Fathersoccupation']; ?></td>
          </tr>
          <tr>
            <td>Family Status</td>
            <td>:&nbsp; <? echo $row['FamilyStatus']; ?></td>
            <td>Mother Name</td>
            <td>:&nbsp; <? echo $row['Mothersname']; ?></td>
          </tr>
          <tr>
            <td>Family Origin</td>
            <td>:&nbsp; <? echo $row['FamilyOrigin']; ?></td>
            <td>Mother Occupation</td>
            <td>:&nbsp; <? echo $row['Mothersoccupation']; ?></td>
          </tr>
          <tr>
            <td>No of Brothers</td>
            <td>:&nbsp; <? echo $row['noofbrothers']; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <div class="hline2"></div>
        <a name="partner" id="partner">Partner Preference</a>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="25%">Looking for</td>
            <td width="25%">:&nbsp; <? echo $row['Looking']; ?></td>
            <td width="25%">Complexion</td>
            <td>:&nbsp; <? echo $row['PE_Complexion']; ?></td>
          </tr>
          <tr>
            <td>Age</td>
            <td>:&nbsp; From <? echo $row['PE_FromAge']; ?>&nbsp; to&nbsp; <? echo $row['PE_ToAge']; ?></td>
            <td>Education</td>
            <td>:&nbsp; <? echo $row['PE_Education']; ?></td>
          </tr>
          <tr>
            <td>Expectations</td>
            <td><table cellpadding="0" cellspacing="0" border="0">
                <tr>
                  <td valign="top">:&nbsp; </td>
                  <td><? echo $row['PartnerExpectations']; ?></td>
                </tr>
              </table></td>
            <td>Religion</td>
            <td>:&nbsp; <? echo $religion[$row['Religion']];  ?></td>
          </tr>
          <tr>
            <td>Country Living in</td>
            <td>:&nbsp; <? echo $row['PE_Countrylivingin']; ?></td>
            <td>Caste</td>
            <td>:&nbsp;
              <? //echo $row['PE_Caste'];
			if(is_numeric($row['PE_Caste'])) {
				$pcaste_sql = "SELECT cName FROM castedata WHERE cId = '".$row['PE_Caste']."'";
				$pcaste_exec = mysql_query($pcaste_sql);
				$pcaste_fetch = mysql_fetch_array($pcaste_exec);
				echo $pcaste_fetch["cName"];
			}
			else
			{
				echo $row["PE_Caste"];	
			}
		  ?></td>
          </tr>
          <tr>
		  
		    
		  
            <td>Height</td>
            <td>:&nbsp; <? echo $row['PE_Height']; ?></td>
			
			 <td>Mother Tongue</td>
            <td>:&nbsp; <?php 
							  $Language =array('','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu','','Badaga');
							  
			if(trim($row['PE_MotherTongue']) != '0')  echo $Language[$row['PE_MotherTongue']]; ?></td>
           
          </tr>
		  
		  <tr>
             <td>Resident Status</td>
            <td>:&nbsp; <? echo $row['PE_Residentstatus']; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
		  
        </table>
        <div class="hline2"></div>
        <a name="hobbies" id="hobbies">Hobbies and Interest</a>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_profiledetails">
          <tr>
            <td width="24%">Hobbies</td>
            <td>:&nbsp; </td>
            <td width="25%"><? echo str_replace(",",", ",$row['Hobbies']); ?></td>
            <td width="25%">Interests</td>
            <td>:&nbsp; </td>
            <td><? echo $row['Interests']; ?></td>
          </tr>
          <tr>
            <td>Other Hobby</td>
            <td>:&nbsp; </td>
            <td><? echo str_replace(",",", ",$row['OtherHobbies']); ?></td>
            <td>Other Interest</td>
            <td>:&nbsp; </td>
            <td><? echo $row['OtherInterests']; ?></td>
          </tr>
        </table>
      </div>
      <?Php if(!isset($_SESSION['username'])) { ?>
      <div class="want_to_contact_bottom">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="180" align="center"><strong>Want to Contact <? if($row['Gender'] =='Male') { echo "him"; } else{  echo "her";}?>?</strong></td>
            <td width="140" align="center"><a href="registration1.php" title="Register Free"><img src="images/btn_register.png" width="120" height="40" /></a></td>
            <td width="30" align="center">or</td>
            <td width="80" align="center"><a href="login.php" class="link"><strong>Login</strong></a></td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </div>
      <?php } ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
        <tbody>
          <tr>
            <td class="pg_left"></td>
            <td height="48" align="center" valign="middle" class="pg_center"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="prof_det_toolbar" style="height:48px;">
                <tbody>
                  <tr>
                    <td width="80" class="p_d_block1"><a href="#top" class="btn_goTop">Go Top</a></td>
                    <td>&nbsp;</td>
                    <?Php
            if($page > 1){ 

    $prev = ($page - 1); 
?>
                    <td width="110" class="p_d_block2" style="display:none;"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $prev.$searchlink; ?>" class="pageNum" style="float:left; font-size:11px; margin-right:3px;margin-left:10px;">&lt;&lt; Prev Profile</a></td>
                    <?Php
} 
if($page < $total_pages){ 

    $next = ($page + 1); 
?>
                    <td width="110" class="p_d_block2" style="display:none;"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $next.$searchlink; ?>" class="pageNum" style="float:left; font-size:11px; margin-left:15px; ">Next Profile&gt;&gt; </a></td>
                    <?Php

} 
?>
	
					<!--<td width="110" class="p_d_block2"><a href="javascript:;" onclick="javascript: window.history.back();" class="pageNum" style="float:left; font-size:11px; margin-left:15px; ">Go Back </a></td>-->


                  </tr>
                </tbody>
              </table></td>
            <td class="pg_right"></td>
          </tr>
        </tbody>
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
