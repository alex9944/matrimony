<?php 

include("dbconnect.php");
$country=$_REQUEST['country'];

$query="SELECT region_name FROM citydata WHERE country_name='".$country."'  GROUP BY region_name ORDER BY region_name ASC";

$exe=mysql_query($query);
?>
<select onchange="javascript:get_city(this.value);" style="" id="select_state" class="forminput" name="State">
<?php while($state_res = mysql_fetch_array($exe)) { ?>
<option value="<?=$state_res["region_name"]?>"><?=$state_res["region_name"]?></option>
<? } ?>
 <option value="">Others</option>
</select>