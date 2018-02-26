<div class="header">MOST POPULAR CATEGORIES</div>
<?php 
$mostpopquery=mysql_query("SELECT * FROM (SELECT * FROM class_subcategory ORDER BY rand() LIMIT 23) T1 ORDER BY subcategoryname");
?>
<div class="boxlist_lft">
	<?php 
	while($mostsql=mysql_fetch_array($mostpopquery)) {	
	//subcategory count 
	//echo "select count(p_subcategory) as totsub from class_postclassified where p_subcategory = ".$mostsql['sid']." group by p_subcategory";
	$countcateleft = mysql_query("select count(p_subcategory) as totsub from class_postclassified where p_subcategory = ".$mostsql['sid']." group by p_subcategory");
	$subcatcountleft = mysql_fetch_assoc($countcateleft);
	$sid=base64_encode($mostsql['sid']);
	 $sname=str_replace(" ","-",$mostsql['subcategoryname']." ".$sid);
	?>
	<a href="categorysearch.php?<?php echo $sname; ?>" title="<?php echo $mostsql['subcategoryname']; ?>"><?php echo $mostsql['subcategoryname']; ?> <?php if($subcatcountleft['totsub'] != 0) echo '(<span style="color:#CC5600;">'.$subcatcountleft['totsub'].'</span>)'; ?></a>
	<?php } ?>
</div>
