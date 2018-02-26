<?PHP
  include("../config/error.php");
 $couid = $_GET['subcat'];
 
	$exec_areg=mysql_query("select * from class_subcategory where cid='$couid'") or die(mysql_error()); 
	//print_r($exec_areg); exit;
?>
<select name="subcategory" class="combo_box" >
<option value="">Select</option>
<?php while($fetch_areg=mysql_fetch_array($exec_areg))	{?>				
<option value="<?php echo $fetch_areg['sid']; ?>"><?php echo $fetch_areg['subcategoryname']; ?></option>
<?php } ?>
</select>