<?Php
include("dbconnect.php");
$meta_sql = "SELECT * FROM siteconfig";
$meta_exec = mysql_query($meta_sql);
$info = mysql_fetch_array($meta_exec);
?>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!--<link rel="shortcut icon" href="favicon.ico"> -->

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">


<title><?php echo $info['Title']; ?></title>

<meta name="Description" content="<?php echo $info['Description']; ?>">

<meta name="keywords" content="<?php echo $info['Keywords']; ?>">

