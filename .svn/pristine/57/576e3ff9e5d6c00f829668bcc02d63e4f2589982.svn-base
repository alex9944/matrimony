<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/inboxmsg.js"></script>
</head>

<body>
<?php include("config.php"); 
$recsno=$_GET["recsno"]; 

$data=trim($recsno); 

$ex=explode(" ",$data); 

$size=sizeof($ex); 

for($i=0;$i<$size;$i++) 

{ 

    $id=trim($ex[$i]); 

    $sql="delete from sendmessage where id='$id'"; 

    $result=mysql_query($sql);

    

} 



 	print "<script>";

     print " self.location='sent_msg.php?action=s';"; // Comment this line if you don't want to redirect

     print "</script>";


?>