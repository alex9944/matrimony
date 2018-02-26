<?php
include("config.php");

include('dbconnect.php'); 

$state = $_GET['state'];

echo '<option value=" ">-- Select --</option>';

$result = mysql_query("SELECT place_name FROM citydata  where region_name 	 = '$state' order by place_name asc");

while($row = mysql_fetch_array($result))
  {
  $state_val =  $row["place_name"];
   echo "<option value='$state_val'>$state_val </option>";  
  }

?>