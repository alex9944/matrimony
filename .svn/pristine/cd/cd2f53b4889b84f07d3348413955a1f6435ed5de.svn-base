<?php

include '../dbconnect.php'; 

$sql = mysql_query("SELECT * FROM payment_details where id = ".$_REQUEST['id']); 
$row = mysql_fetch_array($sql);

$sql1 = mysql_query("SELECT * FROM register where MatriID = "."'".$row['matriid']."'"); 
$row2 = mysql_fetch_array($sql1);



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>HTML Invoice Template</title>
<style type="text/css">
<!--
body {
  font-family:Tahoma;
}

img {
  border:0;
}

#page {
  width:800px;
  margin:0 auto;
  padding:15px;

}

#logo {
  float:left;
  margin:0;
}

#address {
  height:181px;
  margin-left:250px; 
}

table {
  width:100%;
}

td {
padding:5px;
}

tr.odd {
  background:#e1ffe1;
}
-->
</style>
</head>
<body>
<div id="page" style="background:#FFF5EB">
  <div id="logo">
    <a href="http://www.danifer.com/"><img src="<?php echo $site_url; ?>/images/logo.png"></a>
  </div><!--end logo-->
  
  <div id="address" align="right">

    <p><?php echo $sitename; ?><br />
	
    <a href="mailto:<?php echo $siteadmin; ?>"> <?php echo $siteadmin; ?></a>
    <br /><br />
    Transaction id# <?=$row['transaction_id']?><br />
    Created on <?=$row['transaction_date']?><br />
    </p>

  </div><!--end address-->

  <div id="content">
    <p>
      <strong>Customer Details</strong><br />
      Name: <?=$row2['Name']?><br />
      Email: <?=$row2['ConfirmEmail']?><br />
      Payment Type: Paypal    </p>

    <hr>
    <table>
      <tr>
        <td width="20%"><strong>Matriid</strong></td>
        <td width="18%"><strong>Email</strong></td>
        <td width="6%"><strong>Plan</strong></td>
        <td width="27%"><strong>Add ons </strong></td>
        <td width="29%"><strong>Amount</strong></td>
      </tr>
      <tr class="odd"><td bgcolor="#FFE5CA"><?=$row['matriid']?></td>
        <td bgcolor="#FFE5CA"><?=$row2['ConfirmEmail']?></td>
        <td bgcolor="#FFE5CA"><?php echo $row['plan']?></td>
        <td bgcolor="#FFE5CA"><?php 
				  if($row['astro_match'] == 1) {
				  echo "Diamond - 1"."<br>";
				  } elseif($row['astro_3months'] == 1) {
				  echo "Astro 3 months - 1"."<br>";
				  }elseif($row['astro_6month'] == 1) {
				  echo "Astro 6 months - 1"."<br>";
				  }
				  
				  if($row['spot_light'] == 1)
				  echo "Profile Spot light - 1"."<br>";
				  
				  if($row['match_promoter'] == 1)
				  echo "Match promoter - 1"."<br>";
				  
				  ?></td>
      <td bgcolor="#FFE5CA"><?=$row['amount']?></td>
      </tr>              <tr><td>&nbsp;</td><td colspan="2">&nbsp;</td><td><strong>Total</strong></td><td><strong><?=$row['amount']?></strong></td></tr>
    </table>
    <hr>
    <p>
      Thank you for your order!  This transaction will appear on your billing statement.<br />
      If you have any questions, please feel free to contact us at <a href="mailto:<?php echo $siteadmin;?>"><?php echo $siteadmin;?></a>.    </p>

    <hr>

    <p>
      <center><small><br />
      &copy; <?php echo $siteadmin;?> All Rights Reserved
      </small>
      </center>
    </p>
  </div><!--end content-->
</div><!--end page-->
</body>

</html>