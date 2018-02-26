<div class="header">2DAY DISCOUNTS</div>
<?php 
$mostpopquery=mysql_query("SELECT * FROM class_2daydiscount limit 5");
?>
<div class="boxlist_lft">
	<?php 
	while($mostsql=mysql_fetch_array($mostpopquery)) {	
	//subcategory count 
	//echo "select count(p_subcategory) as totsub from class_postclassified where p_subcategory = ".$mostsql['sid']." group by p_subcategory";
	//$countcateleft = mysql_query("select count(d_subcategory) as totsub from class_2daydiscount where d_subcategory = ".$mostsql['d_subcategory']." group by d_subcategory");
	//$subcatcountleft = mysql_fetch_assoc($countcateleft);
	//$subcategory=mysql_fetch_array(mysql_query("select * from class_subcategory where sid='$mostsql[d_subcategory]'"));
	$sid=base64_encode($mostsql['d_id']);
	 $sname=str_replace(" ","-",$mostsql['d_title']." ".$sid);
	?>
	<a href="discount_view.php?/<?php echo $sname; ?>" title="<?php echo $mostsql['d_title']; ?>"><?php echo $mostsql['d_title']; ?></a>
	<?php } ?>
	<div align="right">
<a href="2daydiscountsearch.php">more...</a>
</div>


</div>

