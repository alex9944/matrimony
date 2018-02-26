<?PHP
  include("../config/error.php");
 $couid = $_GET['id'];

	$exec_areg=mysql_query("select * from class_state where countryid='$couid'"); 
?>

  <select name="state" id="state" class="combo_box">
  <option value="">Select state</option>
                <?php while($fetch_areg=mysql_fetch_array($exec_areg))
				{?>
				<option value="<?php echo $fetch_areg['stateid']; ?>"><?php echo $fetch_areg['state_name']; ?></option>
				<?php } ?>
  </select>  