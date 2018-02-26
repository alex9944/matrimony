<?php  
include("dbconnect.php");
$q=$_GET['q'];
$qry="select * from register where ConfirmEmail='$q'";

$result=mysql_query($qry);

$count=mysql_num_rows($result);

if($count!=0)
{
?>
 <font color=red><?php echo $q." "."already Exists Please choose another Email"; ?></font>


 <?php
}
else
{

echo "<font color=green> $q Valid Email</font>";
}




?>


