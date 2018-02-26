<?PHP session_start();
//include("config/db_connect.php");
include("../config/error.php");

if(isset($_GET['catid']))
{
$id = $_GET['catid'];
$sql = "SELECT * FROM `class_state` WHERE `countryid` = '$id' order by state_name asc"; 
$query = mysql_query($sql);
?>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<select name="state1" onchange="Javascript:citylist(this.value);" style="width:165px;" class="body1">
<option value=''>Select State</option>
<?PHP
while($sub = mysql_fetch_array($query))
{
?>
 <option value="<?PHP echo $sub['stateid'];?>"><?PHP echo $sub['state_name']; ?></option>
<?PHP 
}?>
</select>
<?php } ?>

<?php 
if(isset($_GET['q'])) 
{
$id = $_GET['q'];

$_SESSION['state1']=$id;

$sql = "SELECT * FROM `class_city` WHERE `stateid` = '$id' order by city_name asc";
$query = mysql_query($sql);
?>
<select name="city1" style="width:165px;" class="body1" onchange="document.indexform.city.value=this.value">
<option value=''>Select City</option>
<?PHP
while($sub = mysql_fetch_array($query))
{
?>
 <option value="<?PHP echo $sub['cityid'];?>"><?PHP echo $sub['city_name'];?></option>
<?PHP 
}?>
</select>


<?php } ?>


