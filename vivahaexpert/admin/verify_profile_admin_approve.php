<? 
// Database Connection 

include '../dbconnect.php'; 

foreach($_POST['chkapprove'] as $key=>$value) {

 $update = "UPDATE verify_profile SET approved = 1 where matriid = "."'".$value."'"; 
mysql_query($update);
}


header('location:verify_profile_admin.php?suc=1');


?>