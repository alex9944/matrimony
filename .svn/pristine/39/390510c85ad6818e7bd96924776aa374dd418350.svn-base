<?php session_start();



$message_id = $_GET['id'];
include("dbconnect.php");

$delete = "DELETE from sendmessage where id= '$message_id'";
$deleted = mysql_query($delete);

header("location:sentmessage.php");

