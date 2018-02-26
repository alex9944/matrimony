<?PHP session_start();
//include("config/db_connect.php");
include("../config/error.php");

if(isset($_GET['c_id']))
{
$id = $_GET['c_id'];
 $sql = "SELECT * FROM `class_subcategory` WHERE `cid` = '$id' order by subcategoryname asc"; 
$query = mysql_query($sql);
?>

<select name="subcat_id" style="width:110px;">
<option value="">-Select Subcategory -</option>
<?PHP
while($sub = mysql_fetch_array($query))
{
?>
 <option value="<?PHP echo $sub['sid'];?>"><?PHP echo $sub['subcategoryname']; ?></option>
<?PHP 
}?>
</select>
<?php } ?>




