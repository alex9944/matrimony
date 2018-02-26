<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
</head>

<body>
<?php include("config.php"); 
	$strpass  = $_POST['txtppwd'];

	$strpassid  = $_POST['txthidid'];

	

 $sql="SELECT MatriID, 	phone_password FROM register WHERE MatriID= '$strpassid' and phone_password = '$strpass' ";

			$result=mysql_query($sql);

			while($row = mysql_fetch_array($result))

 			 {

			// $strusername = $row['MatriID'];

			 }

			

			// Mysql_num_row is counting table row

			$count=@mysql_num_rows($result); 

			if($count==1)

			{

  	print "<script>";

    print " self.location='view_phone.php?id=$strpassid';"; // Comment this line if you don't want to redirect

    print "</script>";

			}

			else 

			{

	 print "<script>";

     print " self.location='viewprotectphoneform.php?action=wrong';"; // Comment this line if you don't want to redirect

     print "</script>";	

			}

?>
</body>
</html>