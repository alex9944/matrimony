<? 
error_reporting(0);
include('../dbconnect.php');

if(!isset($_SESSION['adminusername'])){
header('location:login.php');
}
?>