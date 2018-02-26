<?php 
//$leftsubquery = mysql_query("SELECT * FROM class_subcategory where cid=".$searchkey." and status = 0");
$countleftsubquery = mysql_num_rows($post_query);
 ?>
<div class="header"><?php echo strtoupper($categorysql1['c_name']);?> (<?php echo $countleftsubquery; ?>)</div>
<?php 
$mostpopquery=mysql_query("SELECT * FROM (SELECT * FROM class_subcategory ORDER BY rand() LIMIT 23) T1 ORDER BY subcategoryname");
?>
<div class="boxlist_lft-search">
	<?php 
	$catsql=mysql_query("select * from class_subcategory where cid='$searchkey'");
	while($rowcat=mysql_fetch_array($catsql)) {
		$post_query1=mysql_query("select * from class_postclassified where p_subcategory='$rowcat[sid]' and  p_status='1'");
		$sid=base64_encode($rowcat['sid']);
	 $sname=str_replace(" ","-",$rowcat['subcategoryname']." ".$sid);
	?>
	<a href="categorysearch.php?<?php echo $sname; ?>" title="<?php echo $rowcat['subcategoryname']; ?>"><?php echo $rowcat['subcategoryname']; ?> <?php if(mysql_num_rows($post_query1) != 0) echo '(<span style="color:#CC5600;">'.mysql_num_rows($post_query1).'</span>)'; ?></a>
	<?php } ?>
</div>