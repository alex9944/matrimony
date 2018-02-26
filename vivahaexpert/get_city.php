<?php 

include("dbconnect.php");
$state=$_REQUEST['state'];

$query="SELECT place_name FROM citydata WHERE region_name='".$state."' ORDER BY place_name ASC";

$exe=mysql_query($query);
?>
<select onChange="get_position(this.value);" style="" id="select_city" class="forminput" name="city">
<?
while($state_res = mysql_fetch_array($exe)) { ?>
<option value="<?=$state_res["place_name"]?>"><?=$state_res["place_name"]?></option>
<? } ?>
 <option value=" ">Others</option>
</select>