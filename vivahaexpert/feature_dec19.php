<?php 
//echo md5('ppandi');

$logged_gender = $_SESSION['gender'];
if($logged_gender == 'Female')
 {   
   $sql = "select * from register where  MatriID = 'NM57326' or MatriID = 'NM55554'";
 }
else if($logged_gender == 'Male')
 {
   $sql = "select * from register where MatriID = 'NM57329' or MatriID = 'NM57279' ";
 } 
else
 { 
   $sql = "select * from register where MatriID = 'NM57329' or MatriID = 'NM57326' or MatriID = 'NM57279' or MatriID = 'NM55554'";
 }
//echo $sql;
$searchresultsql1  = mysql_query($sql); 
while($searchresultfetch1 =  mysql_fetch_array($searchresultsql1)) {	
//print_r($searchresultfetch1);
$specificpage = (($page-1)*$max_results) + $currentpage; // For view profile
?>
        <label class="size10">
        <input name="<?php echo $searchresultfetch1["MatriID"];?>" type="checkbox" value="<?php echo $searchresultfetch1["MatriID"];?>" style="font-size:8px;">
        Select this Profile</label>
        <?php  $strheight1  =  $searchresultfetch1['Height'];
if($strheight1 =="1") { echo "4ft - 121 cm"; }

else if($strheight1 =="2") { $similarheight1 = "4ft 1in - 124cm"; }

else if($strheight1 =="3") { $similarheight1 = "4ft 2in - 127cm"; }

else if($strheight1 =="4") { $similarheight1 = "4ft 3in - 129cm"; }

else if($strheight1 =="5") { $similarheight1 = "4ft 4in - 132cm"; }

else if($strheight1 =="6") { $similarheight1 = "4ft 5in - 134cm"; }

else if($strheight1 =="7") { $similarheight1 = "4ft 6in - 137cm"; }

else if($strheight1 =="8") { $similarheight1 = "4ft 7in - 139cm"; }

else if($strheight1 =="9") { $similarheight1 = "4ft 8in - 142cm"; }

else if($strheight1 =="10") { $similarheight1 = "4ft 9in - 144cm"; }

else if($strheight1 =="11") { $similarheight1 = "4ft 10in - 147cm"; }

else if($strheight1 =="12") { $similarheight1 = "4ft 11in - 149cm"; }

else if($strheight1 =="13") { $similarheight1 = "5ft - 152cm"; }

else if($strheight1 =="14") { $similarheight1 = "5ft 1in - 154cm"; }

else if($strheight1 =="15") { $similarheight1 = "5ft 2in - 157cm"; }

else if($strheight1 =="16") { $similarheight1 = "5ft 3in - 160cm"; }

else if($strheight1 =="17") { $similarheight1 = "5ft 4in - 162cm"; }

else if($strheight1 =="18") { $similarheight1 = "5ft 5in - 165cm"; }

else if($strheight1 =="19") { $similarheight1 = "5ft 6in - 167cm"; }

else if($strheight1 =="20") { $similarheight1 = "5ft 7in - 170cm"; }

else if($strheight1 =="21") { $similarheight1 = "5ft 8in - 172cm"; }

else if($strheight1 =="22") { $similarheight1 = "5ft 9in - 175cm"; }

else if($strheight1 =="23") { $similarheight1 = "5ft 10in - 177cm"; }

else if($strheight1 =="24") { $similarheight1 = "5ft 11in - 180cm"; }

else if($strheight1 =="25") { $similarheight1 = "6ft - 182cm"; }

else if($strheight1 =="26") { $similarheight1 = "6ft 1in - 185cm"; }

else if($strheight1 =="27") { $similarheight1 = "6ft 2in - 187cm"; }

else if($strheight1 =="28") { $similarheight1 = "6ft 3in - 190cm"; }

else if($strheight1 =="29") { $similarheight1 = "6ft 4in - 193cm"; }

else if($strheight1 =="30") { $similarheight1 = "6ft 5in - 195cm"; }

else if($strheight1 =="31") { $similarheight1 = "6ft 6in - 198cm"; }

else if($strheight1 =="32") { $similarheight1 = "6ft 7in - 200cm"; }

else if($strheight1 =="33") { $similarheight1 = "6ft 8in - 203cm"; }
else if($strheight1 =="34") { $similarheight1 = "6ft 9in - 205cm"; }
else if($strheight1 =="35") { $similarheight1 = "6ft 10in - 208cm"; }
else if($strheight1 =="36") { $similarheight1 = "6ft 11in - 210cm"; }
else if($strheight1 =="37") { $similarheight1 = "7ft - 213cm"; }



$sel = "SELECT plan from payment_details where matriid ="."'".$searchresultfetch1['MatriID']."' ";
$qry = mysql_query($sel );

$fetch = mysql_fetch_array($qry );
if(count($fetch) >1) {
$plan = $fetch['plan'];
} else{
$plan = 'Basic';
}

$pre_count = 0;
$matriid   = $searchresultfetch1['MatriID']; 
$sql       = "select * from payment_details where matriid = '$matriid' and spot_light = '1' ";
$result    = mysql_query($sql);
$pre_count = mysql_affected_rows();

?>
        <a href="viewsimilarprofile.php?gender=<?php echo $searchresultfetch1['Gender']; ?>&age=<?php echo $searchresultfetch1['Age']; ?>&religion=<?php echo $searchresultfetch1['Religion']; ?>&caste=<?php echo $searchresultfetch1['Caste']; ?>&education=<?php echo $searchresultfetch1['Education']; ?>&height=<?php echo $similarheight1; ?>" class="float_right">View Similar Profile</a>
       
	   
	   
	   
	    <div class="profile_block <?php if($pre_count > 0) echo 'profile_block_featured'; ?>">
          <div class="header"><a href="viewfullprofile1.php?id=<?php echo $searchresultfetch1['MatriID']; ?>" class="title"><?php echo $searchresultfetch1["Name"];?> (<?php echo $searchresultfetch1["MatriID"];?>)</a> <a href="#" class="icon_acc_type acc_golden" title="<?php echo $sitename; ?> Golden Account Holder"></a>
            <!--<span class="icon status stat_online">Active: <strong>Online Now</strong></span> -->
            <a href="viewfullprofile1.php?page=<?php echo $searchresultfetch1['MatriID']; ?>" class="icon_acc_type" title="Numinous <?php echo ucwords(strtolower($plan)); ?> Account Holder">Numinous <?php echo ucwords(strtolower($plan)); ?> </a> <span class="icon status stat_online"><strong>
            <?php include("include/chat.php"); ?>
            <span class="icon status stat_online">
            <?php 
        if(in_array($searchresultfetch1['MatriID'],$explodeonlinemember)) {
            echo $onlinechatmsg;
        }
        else {
            echo $offlinechatmsg;
        }
        ?>
            </span> </strong></span></div>
          <?Php if(isset($_SESSION['username'])) { ?>
          <div style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f9d6a5;" class="footer"> <a style="border-left-width: 1px; border-left-style: solid; border-left-color: #f9d6a5;" class="btn_services btn_favorite float_right" href="add_to_favorite.php?id=<?php echo $searchresultfetch1['MatriID']; ?>">Add to Favorite</a>
            <? 
			 $sel = "select approved from verify_profile where matriid = "."'".$searchresultfetch1['MatriID']."'";
			$qry = mysql_query(	$sel );
			$fetch = mysql_fetch_array($qry);
			
			if($fetch['approved'] ==1) {
			$css = 'btn_services';
			$verified = 'Profile verified.';
			//$verified = "";
			//$vdivtitle = "Verified : <font class='redcolottooltip'>What is this?</font>";
			} else{
			$css = 'btn_services_disable';
			$verified = 'Profile not yet verified.';
			//$verified = "";
			//$vdivtitle = "Unverified : <font class='redcolottooltip'>What is this?</font>";
			}
			?>
            <a style="border-left-width: 1px; border-left-style: solid; border-left-color: #f9d6a5;" title="<?=$verified?>" class="<?=$css?> btn_varify float_right" href="#" rel="htmltooltip" onClick="return openverifywindow();">Verify Profile</a>
            <?php /*?><div class="htmltooltip"><?php echo $vdivtitle; ?></div><?php */?>
          </div>
          <?Php } ?>
          <div class="body">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="120"><?php if($searchresultfetch1['Photo1']== "nophoto.gif" or $searchresultfetch1['Photo1Approve'] == 'No' ) { 
	if($searchresultfetch1['Gender'] == 'Male') {
?>
                  <img src="images/icons/noimage_man.jpg" width="100" height="100" class="img_profile" />
                  <?php } elseif($searchresultfetch1['Gender'] == 'Female') { ?>
                  <img src="images/icons/noimage_girl.jpg" width="100" height="100" class="img_profile" />
                  <?php } else { ?>
                  <img src="images/icons/photo_upload_lady.jpg" width="100" height="100" class="img_profile" />
                  <? } } 
else if($searchresultfetch1['PhotoProtect']== "Yes") { 
	if($searchresultfetch1['Gender'] == 'Male') {
?>
                  <img src="images/icons/photo_askme_man.jpg" width="100" height="100" class="img_profile" />
                  <?Php		
	} else {
?>
                  <img src="images/icons/photo_askme_lady.jpg" width="100" height="100" class="img_profile" />
                  <?Php
	} 

 }
else  {  ?>
                  <img width="110" height="110" src="memphoto1/<?php echo $searchresultfetch1['Photo1']?>" />
                  <? } ?>
                  </a>
                  <!--          <div class="thumb_slider"> <a href="#">1</a> <a href="#" class="active">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a href="#">7</a> </div>--></td>
                <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="profile">
                    <tr>
                      <th width="80">Age</th>
                      <td width="240">:&nbsp;<?php echo $searchresultfetch1["Age"];?> yrs</td>
                      <th width="85">Height</th>
                      <td>:
                        <?php  

$strheight1 = $searchresultfetch1['Height'];
if($strheight1 =="1") { echo "4ft - 121 cm"; }

else if($strheight1 =="2") { echo "4ft 1in - 124cm"; }

else if($strheight1 =="3") { echo "4ft 2in - 127cm"; }

else if($strheight1 =="4") { echo "4ft 3in - 129cm"; }

else if($strheight1 =="5") { echo "4ft 4in - 132cm"; }

else if($strheight1 =="6") { echo "4ft 5in - 134cm"; }

else if($strheight1 =="7") { echo "4ft 6in - 137cm"; }

else if($strheight1 =="8") { echo "4ft 7in - 139cm"; }

else if($strheight1 =="9") { echo "4ft 8in - 142cm"; }

else if($strheight1 =="10") { echo "4ft 9in - 144cm"; }

else if($strheight1 =="11") { echo "4ft 10in - 147cm"; }

else if($strheight1 =="12") { echo "4ft 11in - 149cm"; }

else if($strheight1 =="13") { echo "5ft - 152cm"; }

else if($strheight1 =="14") { echo "5ft 1in - 154cm"; }

else if($strheight1 =="15") { echo "5ft 2in - 157cm"; }

else if($strheight1 =="16") { echo "5ft 3in - 160cm"; }

else if($strheight1 =="17") { echo "5ft 4in - 162cm"; }

else if($strheight1 =="18") { echo "5ft 5in - 165cm"; }

else if($strheight1 =="19") { echo "5ft 6in - 167cm"; }

else if($strheight1 =="20") { echo "5ft 7in - 170cm"; }

else if($strheight1 =="21") { echo "5ft 8in - 172cm"; }

else if($strheight1 =="22") { echo "5ft 9in - 175cm"; }

else if($strheight1 =="23") { echo "5ft 10in - 177cm"; }

else if($strheight1 =="24") { echo "5ft 11in - 180cm"; }

else if($strheight1 =="25") { echo "6ft - 182cm"; }

else if($strheight1 =="26") { echo "6ft 1in - 185cm"; }

else if($strheight1 =="27") { echo "6ft 2in - 187cm"; }

else if($strheight1 =="28") { echo "6ft 3in - 190cm"; }

else if($strheight1 =="29") { echo "6ft 4in - 193cm"; }

else if($strheight1 =="30") { echo "6ft 5in - 195cm"; }

else if($strheight1 =="31") { echo "6ft 6in - 198cm"; }

else if($strheight1 =="32") { echo "6ft 7in - 200cm"; }

else if($strheight1 =="33") { echo "6ft 8in - 203cm"; }
else if($strheight1 =="34") { echo "6ft 9in - 205cm"; }
else if($strheight1 =="35") { echo "6ft 10in - 208cm"; }
else if($strheight1 =="36") { echo "6ft 11in - 210cm"; }
else if($strheight1 =="37") { echo "7ft - 213cm"; }
?></td>
                    </tr>
                    <tr>
                      <th>Religion</th>
                      <td>:&nbsp;<?php echo $caste[$searchresultfetch1['Religion']]; ?></td>
                      <th>Caste</th>
                      <td><script>
			do_request(<?php echo $searchresultfetch1['Language'] ?>,<?php echo $searchresultfetch1['Religion'] ?>, <?php echo $searchresultfetch1['Caste'] ?>,'<?php echo $searchresultfetch1['MatriID'] ?>');
			</script>
                        <div id="<?php echo $searchresultfetch1['MatriID'] ?>"> </div></td>
                    </tr>
                    <tr>
                      <th>Education</th>
                      <td>:&nbsp;<?php echo $searchresultfetch1['Education']; ?></td>
                      <th>&nbsp;</th>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <th>Occupation</th>
                      <td>:&nbsp;<?php echo $searchresultfetch1['Occupation']; ?></td>
                      <th colspan="2"><?php 
					   if(isset($pre_count) and $pre_count > 0)
					    { ?>
                        <img src="images/featured_profile.png" alt="Featured Profile" width="120" height="26" border="0"  /><br />
                        <?php 
						}
					   ?></th>
                    </tr>
                    <tr>
                      <th>Location</th>
                      <td>:
                        <?php if(isset($_SESSION['username']) and $_SESSION['status'] != '' and  $_SESSION['status'] != 'Active') echo $searchresultfetch1['Address'].", "; ?>
                        <?php if($searchresultfetch1['City'] != "") echo $searchresultfetch1['City']; ?>
                        <?php if($searchresultfetch1['State'] != "") echo ", ".$searchresultfetch1['State']; ?>
                        <?php if($searchresultfetch1['Country'] != "") echo ", ".$searchresultfetch1['Country']; ?></td>
                      <th colspan="2"><?php if(isset($pre_count) and $pre_count > 0)
					    { ?>
                        <p style="color:#000;">Like this? then subscribe <a href="membershipform.php">Profile Spotlight</a></p>
                        <?php 
						} ?></th>
                    </tr>
                  </table></td>
              </tr>
            </table>
          </div>
          <div class="footer">
            <?php
 if(trim($searchresultfetch1['Phone']) !='') {
 $css = 'icon btn_services';
  $title = 'View Now';
  //$divtitle = 'Phone Number: Available: <font class="redcolottooltip">View Now</font>';
 } else {
 $css = 'icon btn_services_disable';
  $title = 'Phone Number:Not Available';
  //$divtitle = '';
 }
?>
            <?php if(isset($_SESSION['matriid'])) { ?>
            <a href="express_int.php?MatriID=<?php echo $searchresultfetch1['MatriID']; ?>" class="icon btn_services btn_expressInterest" > Express Interest</a>
            <?php } ?>
            <a href="viewfullprofile1.php?id=<?php echo $searchresultfetch1['MatriID']; ?>"  class="icon btn_services btn_viewProfile" > View Full Profile</a>
            <?php if($divtitle != "") { ?>
            <a href="view_phonenumber.php?ID=<?php echo $searchresultfetch1['ID']; ?>"  class="<?=$css?> btn_viewPhone" title="<?=$title?>"  rel="htmltooltip" > View Phone</a>
            <?php /*?><div class="htmltooltip"><?php echo $divtitle; ?></div><?php */?>
            <?php } else { ?>
            <a href="view_phonenumber.php?ID=<?php echo $searchresultfetch1['ID']; ?>"  class="<?=$css?> btn_viewPhone" title="<?=$title?>" > View Phone</a>
            <?php } ?>
            <?php
  $currentpage++;

 $onlinehoros_sql = "SELECT COUNT(*) AS horosava FROM onlinehoroscope WHERE custid = '".$searchresultfetch1['MatriID']."'";
$onlinehoros_exec = mysql_query($onlinehoros_sql);
$onlinehoros_fetch = mysql_fetch_array($onlinehoros_exec);

if(($onlinehoros_fetch["horosava"] != 0) )
{
	$horoscopeclass = 'icon btn_services btn_horoscope';
	$horoscopelink = 'href="viewphoroscope.php?id='.$searchresultfetch1['MatriID'].'"';
	$horo_tooltip = 'title="View Horoscope and Test Soulmate Compatibility"';
	//$horo_tooltip = 'title=""';
	//$divhorotitle = 'Horoscope: Available: <font class="redcolottooltip">View Now</font>';
	$baloontooltip = 1;

        $horoscopeclassmatch = 'icon btn_services btn_horoscope';
	$horoscopelinkmatch = 'href="curl.php?id='.$_SESSION['username'].'&gid='.$searchresultfetch1['MatriID'].'"';
	$horomatch_tooltip = 'title="Horoscope Matching : Available: View Now"';
}
else
{   
     if(isset($_SESSION['payment_status'])) {
		$horoscopeclass = 'icon_disable btn_services_disable btn_horoscope';
		$horoscopelink = 'href="horoscope_int_form.php"';
		$horo_tooltip = 'title="Horoscope: Not Available Request Now"';

$horoscopeclassmatch = 'icon_disable btn_services_disable btn_horoscope';
	$horoscopelinkmatch = '#';
	$horomatch_tooltip = 'title="Please request for Horoscope"';

	$divhorotitle = '';
	$baloontooltip = 0;
	} else {
	
	    $horoscopeclass = 'icon_disable btn_services_disable btn_horoscope';
		$horoscopelink = 'href="membershipform.php"';
		$horo_tooltip = 'title="Subscribe to view horoscope"';

        $horoscopeclassmatch = 'icon_disable btn_services_disable btn_horoscope';
	$horoscopelinkmatch = '#';
	$horomatch_tooltip = 'title="Subscribe to view horoscope matching"';


	$divhorotitle = '';
	$baloontooltip = 0;
	}
}


$onlinehoros_sql = "SELECT COUNT(*) AS horosava FROM onlinehoroscope WHERE custid = '".$searchresultfetch['MatriID']."'";
$onlinehoros_exec = mysql_query($onlinehoros_sql);
$onlinehoros_fetch = mysql_fetch_array($onlinehoros_exec);
if(($onlinehoros_fetch["horosava"] != 0) && ($searchresultfetch['Status'] != 'Active') && ($searchresultfetch['Status'] != ''))
{
	$horoscopeclass = 'icon btn_services btn_horoscope';
	$horoscopelink = 'href="viewphoroscope.php?id='.$searchresultfetch['MatriID'].'"';
$horotitle     = "View Horoscope and Test Soulmate Compatibility";
}
else
{
	$horoscopeclass = 'icon_disable btn_services_disable btn_horoscope';
	$horoscopelink = '';
	$horotitle     = "Horoscope: Not Available";
}

?>
            <?php if($baloontooltip == 1) { ?>
            <a  <?php echo $horoscopelink;?> class="<?php echo $horoscopeclass; ?>" title="<?php echo $horotitle; ?>"  target="_blank"  rel="htmltooltip"> Horoscope</a>
            <?php /*?><div class="htmltooltip"><?php echo $divhorotitle; ?></div><?php */?>
            <?php } else { ?>
            <a  <?php echo $horoscopelink;?> class="<?php echo $horoscopeclass; ?>" title="<?php echo $horotitle; ?>"  target="_blank"> Horoscope</a>
            <?php } ?>
            <!--<a href="#"  class="icon btn_services btn_chat" > Chat </a>-->
            <?php if(isset($_SESSION['payment_status']) and  $_SESSION['payment_status'] != '' ) { 
//if($chat == 1) { 
if(in_array($searchresultfetch1['MatriID'],$explodeonlinemember)) {?>
            <a href="javascript:void(0)" onClick="javascript:chatWith('<?php echo $searchresultfetch1['MatriID']?>')"  class="icon btn_services btn_chat" > Chat </a>
            <?php } else { ?>
            <a title="Chat Not Available" class="btn_services btn_chat" href="#"> Chat </a>
            <?Php } }?>
            <?php if(!isset($_SESSION['matriid'])) { ?>
            <div class="register_sec">Want to Contact her?, <a class="link" href="registration1.php"><strong>Register</strong></a> or <a class="link" href="login.php"><strong>Login</strong></a></div>
            <?php } ?>
          </div>
        </div>
        <?php } //exit; ?>
		