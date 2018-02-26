<?php
ob_start();
session_start();
include("../config/error.php");
if(isset($_SESSION['userid']))
{
header("location:logout.php");
}

$userid=$_SESSION['userid'];
mysql_query("UPDATE `class_register` set `last_visit`=NOW() WHERE `reg_id` ='$userid'");
unset($_SESSION['userid']);
unset($_SESSION['username']);
unset($_SESSION['emailid']);

header("location:index.php");
?>