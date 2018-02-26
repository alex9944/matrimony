
<div class="header">Categories List</div>
<div class="boxlist_lft-search">
	<?php 
	$catsql11=mysql_query("select * from class_category ");
	while($rowcat11=mysql_fetch_array($catsql11))
	{
	$post_query=mysql_query("select * from class_postclassified where p_category='$rowcat11[c_id]' and  p_status='1'");
	?>
	<a href="javascript:void(0);" onclick="javascript:show('subcat<?php echo $rowcat11['c_id'];?>')"><?php echo $rowcat11['c_name']; ?> <?php if(mysql_num_rows($post_query) != 0) echo '(<span style="color:#CC5600;">'.mysql_num_rows($post_query).'</span>)'; ?></a> 
	
	<div id="subcat<?php echo $rowcat11['c_id']; ?>" style="padding-left:10px;display:none;">
		<table cellpadding="0" cellspacing="0" width="100%" border="0">
			<?php 
			$catsql12=mysql_query("select * from class_subcategory where cid='$rowcat11[c_id]'");
			while($rowcat12=mysql_fetch_array($catsql12))
			{
			$post_query1=mysql_query("select * from class_postclassified where p_subcategory='$rowcat12[sid]' and  p_status='1'");
			$sid=base64_encode($rowcat12['sid']);
	 $sname=str_replace(" ","-",$rowcat12['subcategoryname']." ".$sid);
			?>
			<tr>
				<td>
					<a href="categorysearch.php?<?php echo $sname ;?>"><?php echo '- '.$rowcat12['subcategoryname']; ?> <?php if(mysql_num_rows($post_query1) != 0) echo '(<span style="color:#CC5600;">'.mysql_num_rows($post_query1).'</span>)'; ?></a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<?php } ?>
</div>