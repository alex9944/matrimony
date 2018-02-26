<?php 



//print_r($_REQUEST);

//foreach($_REQUEST as $key=>$value)
//{

 // $content .= $key."-".$value.",";
//}



include("dbconnect.php");


$amount = $_REQUEST['payment_gross'];
$custom = explode("#",$_REQUEST['custom']);
$transaction_id = $_REQUEST['txn_id'];
$payment_status = $_REQUEST['payment_status'];

$matriid =$custom[0]; 
$plan =$custom[1];
$astro =$custom[2]; 

if($astro  == 1)
$astro_match = 1;
elseif($astro  == 2)
$astro_6month = 1;
elseif($astro  == 2)
$astro_3months = 1;

$spot_light =$custom[3]; 

$match_promoter =$custom[4]; 

$payer_email = $_REQUEST['payer_email'];

$amount = $amount*60;

$insert = "INSERT INTO `payment_details` ( `matriid`, `transaction_id`, `transaction_date`, `amount`, `plan`, `astro_match`, `spot_light`, `match_promoter`, `astro_3months`, `astro_6month`, `payer_email`,`payment_status`) VALUES ('$matriid', '$transaction_id',now(), '$amount', '$plan', '$astro_match', '$spot_light', '$match_promoter', '$astro_3months', '$astro_6month', '$payer_email','$payment_status' );";
$insert = mysql_query($insert );

$update = "UPDATE register set featured = 1 where MatriID ="."'".$matriid."'";

$update1 = mysql_query($update );


mail("".$siteadmin."","paypal",$content);

?>

