<?php 
session_start();
 include("../config/error.php"); 

$id=$_GET['email'];
?>
<html>
<title></title>
<head>
<link href="../css/news.css" rel="stylesheet" type="text/css" />
 <script src="js/jquery-1.1.3.1.pack.js" type="text/javascript"></script>
 <script src="../js/thickbox-compressed.js" type="text/javascript"></script>
</head>
<body>
<?php
 $select_sql="SELECT * FROM `class_register` WHERE `reg_email`='$id'";
$select_query=mysql_query($select_sql);
$select_count=mysql_num_rows($select_query);
if($select_count > 0)
 {?>
 <font color=red><?php echo $id." "."alredy Exists"; ?></font>
<a href="forgotpassword.php">Forgotpassword</a>

 <?php }
  
 
else
{
$email=$_GET['email'];
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
echo "<font color=red>$email Invalid email</font>";
}else{
echo "<font color=green> $email Valid Email</font>";}
}  
?>
</body>
</html>