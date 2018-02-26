<?PHP //session_start();
//include("config/db_connect.php");
include("config/error.php");
?>
<div class="bot1">
		<div class="bot1">
			<div class="bot1">
				<div style="padding-top:10px; padding-left:15px;">
					Location :
					<?php
						$country_temp=mysql_query("select * from class_country where countryid=selected");
						$r=0;
						while($country=mysql_fetch_array($country_temp))
						{
							if($r==0)
								echo $country['country'];
							else
								echo ", ".$country['country'];
							$r++;
						}
					?>
					<br />
					Professional Classifieds
				</div>
			</div>
		</div>
	</div>
<div class="bottom_main" style="width:980px; padding-left:20px;" >
	<?php
	$country_temp1=mysql_query("select * from class_country where countryid=selected");
	while($country1=mysql_fetch_array($country_temp1))
	{ 
	?>
	<div style="text-align:center; width:940px; font:16px Verdana bold; border-bottom:1px #0051A5 solid;">

		<?php 
			$cntry_selected=$country1['countryid'];
			echo $country1['country']; 
		?>
	</div>
	<div class="boxlist_bot">
		<?php 
		$i=0;
		//echo "select * from class_city where country=$cntry_selected order by city_name asc";
		$sel_city = mysql_query("select * from class_city where country=$cntry_selected order by city_name asc");
		while($fet_city=mysql_fetch_array($sel_city))
		{
		$i++;
		?>
		<?php if($fet_city['city_name'] != "") { ?>
		 <a href="advance_result.php?keyword=<?php echo $fet_city['city_name']; ?>&adv_search" title=""><?php echo $fet_city['city_name']; ?></a>
		<?php 
		}
		if(($i%15)==0)
		{
			//$i=0;
			echo '</div>';
			if(($i%105)==0)
			{
				break; //echo "<div class='clr'></div>";
			}
			echo'<div class="boxlist_bot">';
		}
		?>
		
		<?php
		} ?>
	</div>
	<div class="clr"></div>
	<?php } ?>
</div>
<div class="footer">
	<div class="footer">
		<div class="footer">
			<div class="links">
				-- <a href="index.php">Home</a> | <a href="aboutus.php">About Us</a> | <a href="privacy.php">Privacy</a> | <a href="termsofuse.php">Terms Of Use</a> | <a href="help.php">Help</a> | <a href="contact_us.php">Contact Us</a>   --
			</div>
		</div>
	</div>
</div>
<div class="copy" align="center">Copyright &copy; <?php echo date("Y"); ?> <a href="http://www.2daybiz.com" target="_blank">2daybiz.com.</a> All Rights Reserved.</div>