<?php
$q=$_GET["q"]; 
include("config/error.php");
$city=mysql_query("select * from class_city where `stateid`=$q && `country`=324");
$count=mysql_num_rows($city);
?>

<select name="city" id="city" style="width:158px;" >
 <option value="" selected="selected">Select State</option>
<?php 
while($row=mysql_fetch_array($city))
{
?>
<option value="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
<?php 
}
?>
</select>