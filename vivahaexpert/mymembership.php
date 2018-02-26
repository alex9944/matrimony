<?php include("memprotect.php"); ?>
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


<SCRIPT LANGUAGE="JavaScript">

<!-- Begin

var win = null;

function newWindow(mypage,myname,w,h,features) {

  var winl = (screen.width-w)/2;

  var wint = (screen.height-h)/2;

  if (winl < 0) winl = 0;

  if (wint < 0) wint = 0;

  var settings = 'height=' + h + ',';

  settings += 'width=' + w + ',';

  settings += 'top=' + wint + ',';

  settings += 'left=' + winl + ',';

  settings += features;

  win = window.open(mypage,myname,settings);

  win.window.focus();

}

//  End -->

</script>

</head>

<body>
<?php include("config.php"); 
$strid  =  $_SESSION['username']; 
$sql    =  "SELECT *, MatriID,Name,date_format(expdays,'%d-%m-%Y') as memexpdate FROM register where MatriID='$strid' ";
$memchk = mysql_query($sql);

$strid  = $_SESSION['username']; 
$sql    = "SELECT * FROM  payment_details where matriid='$strid'  ";
$addons_list = mysql_query($sql);
?>
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">My Membership</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div> -->
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
    <div class="container">
  <div id="content_area" class="content-bg">

    <?Php include('include/loginsidebar.php'); 
  ?>
  <div class="col-md-9">
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $_SESSION['name'];?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">My Membership</h3>
        </div>
		
		
		
        <div class="body" align="left">
		
		  <div class="">
		 <?php 
		      $addons  = ' NIL ';
			  $current_status       =  ' NIL ';
			  $horoscope_remaining  =  ' NIL';
			  $sms_count            =  ' NIL ';
			  $expire_date          =  ' NIL ';
			  $Noofcontacts         =  ' NIL ';
			  
			  while($row = mysql_fetch_array($addons_list)){
			     if($row['spot_light'] == 1)
		           $addons_info[]  =  'Profile Spotlight';
				 if($row['astro_match'] == 1)
		           $addons_info[]  =  'Astromach 1 Year Plan';
				 if($row['astro_3months'] == 1)
		           $addons_info[]  =  'Astromach 3 Month(s) Plan';
				 if($row['astro_6month'] == 1)
		           $addons_info[]  =  'Astromach 6 Month(s) Plan';      
		      }
			  if(is_array($addons_info))
			   {
			      $addons  = implode(", ",$addons_info);
			   }
			   
			  while($row = mysql_fetch_array($memchk)){
		         $current_status       =  $row['Status'];
				 $horoscope_remaining  =  $row['horoscope_remaining'];
				 $sms_count            =  $row['sms_count'];
				 $expire_date          =  $row['memexpdate'];
				 $Noofcontacts         =  $row['Noofcontacts'];
				 $Name                 =  $row['Name'];
				 if($current_status == 'Active')
				   $current_status  = "Basic";
		      } ?>
		  
		  <table style="line-height:30px;">
		   
		    <tr><td style="width:200px;"><b>Matri Id</b></td><td style="width:20px;"><b>:</b></td><td><?php echo $strid; ?></td></tr>
			<tr><td style="width:200px;"><b>Name</b></td><td style="width:20px;"><b>:</b></td><td><?php echo $Name; ?></td></tr>
		    <tr><td style="width:200px;"><b>Membership </b></td><td style="width:20px;"><b>:</b></td><td><?php echo $current_status; ?></td></tr>
			<tr><td><b>Expiry Date</b></td><td><b>:</b></td><td><?php echo $expire_date; ?></td></tr>
			<tr><td><b>No of contacts</b></td><td><b>:</b></td><td><?php echo $Noofcontacts; ?></td></tr>
			<!--<tr><td><b>Addons</b></td><td><b>:</b></td><td><?php echo $addons; ?></td></tr>-->
			<tr><td><b>Remaining SMS Count</b></td><td><b>:</b></td><td><?php echo $sms_count; ?></td></tr>
			<!--<tr><td><b>Remaining Astromatch Count</b></td><td><b>:</b></td><td><?php echo $horoscope_remaining; ?></td></tr>-->		
			
			
		  </table>
		</div>
		
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
          <!--  <tr>
              <td><div align="center"> <br>
                  <table width="100%" height="30" border="0" align="center" cellpadding="3" cellspacing="0" style="border:1px solid #F9D6A5;">
                    <tr>
                      <td width="5" class="header" style="padding-left:0">&nbsp;</td>
                      <td width="10%" class="header" style="padding-left:0"><strong>Matri ID</strong></td>
                      <td width="15%" class="header" style="padding-left:0"><strong>Name</strong></td>
                      <td width="21%" class="header" style="padding-left:0"><strong>Membership/Addon</strong></td>
                      <td width="18%" class="header" style="padding-left:0"><strong>Expiry Date</strong></td>
                      <td width="15%" class="header" style="padding-left:0"><strong>No of Contacts</strong></td>
					  <td width="10%" class="header" style="padding-left:0"><strong>Amount</strong></td>
					  <td width="15%" class="header" style="padding-left:0"><strong>Type</strong></td>
					  <td width="10%" class="header" style="padding-left:0">
					  
					  <?php
					  $strid  =  $_SESSION['matriid'];
					  $sqlss     = "SELECT * FROM paiddetails where Pmatriid = '$strid' order by Paidid  desc";
					  $resultsss = mysql_query($sqlss);
					  $countsss  = mysql_affected_rows();
					  if($countsss > 0)
					  { ?>
					  <strong>Invoice</strong> <?php
					  } ?> </td>
                    </tr>
                    <?php  while($row = mysql_fetch_array($resultsss)){ //print_r($row); ?>
                    <tr bgcolor="#FFFFFF" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';">
                      <td class="Partext1">&nbsp;</td>
                      <td class="Partext1"><?php  echo $row['Pmatriid']?></td>
                      <td class="Partext1"><?php  echo $row['Pname']?></td>
                      <td class="Partext1"><?php  if(isset($row['Pamount']) and $row['Pamount'] != '' and $row['profile_spotlight_amount'] != '' ) { echo 'Astromatch'; echo '<br>Profile Spotlight'; }  else if(isset($row['Pamount']) and $row['Pamount'] != '') echo 'Astromatch'; else if ($row['profile_spotlight_amount'] != '') echo 'Profile Spotlight'; ?></td>
                      <td class="Partext1"><?php  $Date = $row['Pactivedate']; $add_days = 0; 
					  if($row['Pplanduration'] != '0') { echo ''; $add_days = $row['Pplanduration']; echo date('d-m-Y', strtotime($Date. ' + '.$add_days.' day'));  }
					  if($row['profile_spotlight_duration'] != '0') { echo '<br>'; $add_days = $row['profile_spotlight_duration']; echo date('d-m-Y', strtotime($Date. ' + '.$add_days.' day'));  }
					    echo $row['memexpdate']?></td>
                      <td class="Partext1"><?php  if(isset($row['Pnocontct']) and $row['Pnocontct'] != '') echo $row['Pnocontct']; else echo '-';?></td>
					  <td class="Partext1"><?php if(isset($row['Pamount']) and $row['Pamount'] != '' and $row['profile_spotlight_amount'] != '' ) { echo 'MYR.'.$row['Pamount']; echo '<br>MYR.'.$row['profile_spotlight_amount']; }  else if(isset($row['Pamount']) and $row['Pamount'] != '') echo 'MYR.'.$row['Pamount']; else echo 'MYR.'.$row['profile_spotlight_amount'];?></td>
					  <td class="Partext1"><?php  if(isset($row['addons']) and $row['addons'] != '') echo '<b style="color:green;">Addons</b>'; else echo '<b style="color:green;">Plan</b>';?></td>
					  <td class="Partext1">
					  <?php
					  
					  if($countsss > 0)
					   { ?>
					     <a href="#null" title="View" onClick="newWindow('view_invoice.php?id=<?php  echo $row['Paidid']?>','','790','500')">Invoice </a> <?php
					   }
					  else
					   { ?>
					      <?php 
					   } ?> 	 
					  
					  </td>
                    </tr>
                    <tr>
                      <td colspan="5" background="images/dot.gif" height="2"></td>
                    </tr>
                    <? } ?>
					
					
					
					
                  </table>
                  <br>
                  <br>
                </div></td>
            </tr>-->
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