<script type="text/javascript">
function doClear(theText) {
     if (theText.value == theText.defaultValue) {
         theText.value = ""
     }
 }
 function Getback(theText) {
     if (theText.value == "") {
         theText.value = "Search"
     }
 }
</script>
<?php 
$bannersel=mysql_query("select * from banner_ads where bannerstatus = 1");
while($con1=mysql_fetch_array($bannersel)) {
	$bannerlink[] = $con1['bannerlink'];
	$bannerimg[] = $con1['bannerimage'];
	$bannerstatus[] = $con1['bannerstatus'];
}

$ip = $_SERVER['REMOTE_ADDR'];

$chek_ip=mysql_query("select * from `class_register` where `ip_addr`='$ip' AND `reg_status`='1' "  );

 $num_count=mysql_num_rows($chek_ip);
$result=mysql_query("select * from generalsettings");
	$details=mysql_fetch_array($result);


?>
<div class="logo"><a href="index.php" style="padding-top:20px;"><img src="admin/uploads/<?php echo $details['sitelogo']; ?>"  width="188" height="36" alt="" style="margin-left:20px; border:0px; margin-top:30px;" /></a><br /><span><?php echo $sitename;?> Classified Ad posting</span></div>
<div class="search_bar">
	<div class="top">
		<div class="flt_lft"><?php echo $sitename;?> Classifieds</div>
		<div class="search_sign">
		<?php if(isset($_SESSION['userid'])) { ?>	
			Welcome <?php echo $_SESSION['username']; ?>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="index.php" title="">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="postclassified.php" title="">Post Ads</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="advance_search.php" title="">Search</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="edit_class.php" title="">My Ads</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="welcome.php" title="">Myaccount</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="logout.php" title=""> Logout</a>
		<?php } else {
		if($num_count > 0) { ?>
		<a href="Javascript:void(0);" onclick="alert('This ip address is blocked. Please contact to admin.');" title="">Sign in</a> or<a href="Javascript:void(0);" onclick="alert('This ip address is blocked. Please contact to admin.');" title=""> Register</a>
		<?php } else { ?>
			<a href="index.php" title="">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="login.php" title="">Sign in</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="registration.php" title=""> Register</a>
		<?php } } ?>
		</div>
	</div>
	<div class="clr"></div>
	<div class="search_main">
		<div class="se_bg">
			<div class="se_bg">
				<div class="se_bg">
					<form action="advance_result.php" method="post">
					<div class="in">
						<input type="text" value="Search" class="text" onblur="Getback(this);" onClick="doClear(this);" name="keyword" style="font-size:12px; color:#999999;" />
						<span  class="section-wrap">
						<select class="search_data_values" name="category" id="category" style="font-size:12px;">
							<option value="">Select a Category</option>
							<?php 
							$catquery56 = mysql_query("select * from class_category");
							while($catsql56=mysql_fetch_array($catquery56)) {
							?>
							<option value="<?php echo $catsql56['c_id']; ?>"><?php echo $catsql56['c_name']; ?></option>
							<?php } ?>
						</select>
						</span>
						<div><input name="adv_search" class="button_bg" type="submit" value="" id="adv_search" /></div>
						<div class="post_button" >
						<?php if($num_count > 0) { ?>
		<a href="Javascript:void(0);" onclick="alert('This ip address is blocked. Please contact to admin.');"><img src="images/1.gif" alt="" width="210" height="25" border="0" /></a>
		<?php } else { ?>
						<a href="postclassified.php"><img src="images/1.gif" alt="" width="210" height="25" border="0" /></a>
						<?php } ?>
						<!--<a href="postclassified.php"><img src="images/1.gif" alt="" width="210" height="25" border="0" /></a> --></div>
					</div>
					</form>
				</div>
			</div>
		</div>
	<div class="pop-rel">
		<a href="#"><strong>Popular Searches</strong></a> : 
	<?php 
	$catquery = mysql_query("select * from class_category");
	$romvehy = mysql_num_rows($catquery);
	$st = 1;
	while($catsql=mysql_fetch_array($catquery)) {
     $cid=base64_encode($catsql['c_id']);
	 $cname=str_replace(" ","-",$catsql['c_name']." ".$cid);
	?>
		<a href="headersearch.php?/<?php echo $cname; ?>"><?php echo $catsql['c_name']; ?></a> <?php if($romvehy > $st) echo '-'; ?>  
	<?php $st++; } ?>
	
	
	</div>
	</div>
</div>

<!--<div class="clr" style="height:45px;">&nbsp;</div>-->

<div align="center" style="margin-top:10px;">

<?php $sel=mysql_query("select * from google_ad where location='header'"); 
    $tab=mysql_fetch_array($sel);
	if($tab)
	{
	 echo $tab['source'];
	 }
?>
</div>