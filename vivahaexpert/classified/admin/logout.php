<?php
ob_start();
session_start();
include("config/error.php");
$username_adminis=$_SESSION['adminusername'];

  mysql_query("UPDATE `class_admin` set `last_visit`=NOW() WHERE `adm_username` ='$username_adminis'");
  $_SESSION['adminusername']="";
unset($_SESSION['adminusername']);
//unset($_SESSION['profileid']);
header("location:index.php");
?>