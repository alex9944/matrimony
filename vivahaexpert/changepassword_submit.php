<?php include("memprotect.php"); ?>

<?php include("config.php"); ?>

<?php

session_start();

include('dbconnect.php');

$strop = md5($_POST['txtop']);

// CHECK IF OLD PASSWORD IS CORRECT OR NOT

if ($_SESSION['password'] == $strop) {



$strcp = md5($_POST['txtcp']);

$strid = $_SESSION['matriid'];

$update1 = mysql_query("UPDATE register SET ConfirmPassword='$strcp' WHERE MatriID = '$strid' ")

or die("Could not update data because ".mysql_error());
	 print "<script>";

     print " self.location='changepassword_submit_success.php?action=wrong old password';"; // Comment this line if you don't want to redirect

     print "</script>";

} else {

	 print "<script>";

     print " self.location='changepassword.php?action=wrong old password';"; // Comment this line if you don't want to redirect

     print "</script>";

}

?>