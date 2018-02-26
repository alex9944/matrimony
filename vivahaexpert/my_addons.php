
<div class="profile_block want_to_contact" style="height:auto; clear:both; overflow:auto;">
  <h2>My Addons</h2>
  <ul class="checklist">
    <?php
	$sel = "select * from payment_details where matriid ="."'".$_SESSION['matriid']."' and (astro_match  = 1 or astro_3months = 1 or astro_6month = 1 )" ;
	$qry = mysql_query($sel);
	$fetch  = mysql_fetch_array($qry );
	$counts = mysql_affected_rows();
	if($counts > 0 ) {
	   $css = 'prof_complete';
	   $link = "javascript:;";
	} else{
	   $css = "prof_pending";
	   $link = "membershipform.php";
	}
	if($fetch['astro_match'] == 1)
	 $astro_plan  = '1 Year Plan';
    else if($fetch['astro_3match'] == 1)
	 $astro_plan  = '3 Month Plan';
    else if($fetch['astro_6match'] == 1)
	 $astro_plan  = '6 Month Plan';	
	
	$astro_count  = 0;
	
	$sqls = "select horoscope_remaining from register where MatriID = '".$_SESSION['matriid']."'";
	$horo_result = mysql_query($sqls);
	while($resss = mysql_fetch_array($horo_result))
	 {
	   $astro_count  = $resss['horoscope_remaining'];
	 }
	
	if($astro_count > 0)  {
	   $css = 'prof_complete';
	   $link = "javascript:;";
	} else{
	   $css = "prof_pending";
	   $link = "membershipform.php";
	   $astro_plan  = '';
	}
	
	?>
    <li class="<?php echo $css; ?>" style="width:43%;"><a href="<?php echo $link; ?>">Astromatch ( <?php echo $astro_count; ?> ) <?php if(isset($astro_plan)) echo ' - '.$astro_plan; ?></a></li>
	
	
	<?php
	$sel = "select * from payment_details where matriid ="."'".$_SESSION['matriid']."' and (spot_light  = 1 )" ;
	$qry = mysql_query($sel);
	$fetch  = mysql_fetch_array($qry );
	$counts = mysql_affected_rows();
	if($counts > 0 ) {
	   $css = 'prof_complete';
	   $link = "javascript:;";
	} else{
	   $css = "prof_pending";
	   $link = "membershipform.php";
	}
	?>
    <li class="<?php echo $css; ?>" style="width:43%;"><a href="<?php echo $link; ?>">Profile Spotlight</a></li>
	
  </ul>
</div>
