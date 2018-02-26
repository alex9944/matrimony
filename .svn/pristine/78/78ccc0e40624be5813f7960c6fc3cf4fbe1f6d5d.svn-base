<?php

session_start();
include 'dbconnect.php'; 

 if(isset($_SESSION['matriid']))

    {

	   $logid  =  $_SESSION['matriid'];

	   $qry  = "update register set online_status = '' where MatriID = '$logid' ";

	   mysql_query($qry);

	   

	}

session_unset();

session_destroy();

//echo "<p class=data> <center>Successfully,Logged out<br><br><a href='test.php'> Log OUT </a><br><br><a href=welcome.php>Click here if your browser is not redirecting automatically or you don't want to wait.</a><br></center>";

     print "<script>";

     print " self.location='logoutconfirm.php';"; // Comment this line if you don't want to redirect

     print "</script>";

?>