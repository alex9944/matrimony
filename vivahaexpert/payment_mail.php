<?php

include '../dbconnect.php'; 

$sql = mysql_query("SELECT * FROM payment_details where id = ".$_REQUEST['id']); 
$row = mysql_fetch_array($sql);

$sql1 = mysql_query("SELECT * FROM register where MatriID = "."'".$row['matriid']."'"); 
$row2 = mysql_fetch_array($sql1);





$content = "<style type=\"text/css\">
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
</style>";

$content.="<div id=\"page\"  style=\"border:1px solid #A50050;background:#FFF5EB;\">
  <div id=\"logo\">
    <a href=\"".$site_url."\"><img src=".$sitelogo."></a>
  </div><!--end logo-->
  
  <div id=\"address\" align=\"right\">

    <p >".$sitename."<br />
    <a href=\"mailto:$siteadmin\">".$siteadmin."</a>
    <br /><br />
    Transaction id# ".$row['transaction_id']."<br />
    Created on ".$row['transaction_date']."<br />
    </p>

  </div><!--end address-->

  <div id=\"content\">
     <p align=\"center\">
	<font color=\"#A50050\" size=\"+1\"><b><u>Invoice cum Receipt</u></b></font>
	</p>
	<p>
      <strong>Customer Details</strong><br />
      Name: ".$row2['Name']."<br />
      Email: ".$row2['ConfirmEmail']."<br />
      Payment Type: Paypal    </p>

    <hr>
    <table>
      <tr>
        <td width=\"20%\"><strong>Matriid</strong></td>
        <td width=\"18%\"><strong>Email</strong></td>
        <td width=\"6%\"><strong>Plan</strong></td>
        <td width=\"27%\"><strong>Add ons </strong></td>
        <td width=\"29%\"><strong>Amount</strong></td>
      </tr>
      <tr class=\"odd\"><td bgcolor=\"#FFE5CA\">".$row['matriid']."</td>
        <td bgcolor=\"#FFE5CA\">".$row2['ConfirmEmail']."</td>
        <td bgcolor=\"#FFE5CA\">". $row['plan']."</td>
       
	    <td bgcolor=\"#FFE5CA\">";
		
	
				  if($row['astro_match'] == 1) {
				   $content.= "Diamond - 1"."<br>";
				  } elseif($row['astro_3months'] == 1) {
				  $content.= "Astro 3 months - 1"."<br>";
				  }elseif($row['astro_6month'] == 1) {
				  $content.= "Astro 6 months - 1"."<br>";
				  }
				  
				  if($row['spot_light'] == 1)
				  $content.= "Profile Spot light - 1"."<br>";
				  
				  if($row['match_promoter'] == 1)
				  $content.= "Match promoter - 1"."<br>";
				  
				
				  
				 $content.="</td>
      <td bgcolor=\"#FFE5CA\">".$row['amount']."</td>
      </tr>              <tr><td>&nbsp;</td><td colspan=\"2\">&nbsp;</td><td><strong>Total</strong></td><td><strong>".$row['amount']."</strong></td></tr>
    </table>
    <hr>
    <p>
      Thank you for your order!  This transaction will appear on your billing statement as \"".$site_url." \".<br />
      If you have any questions, please feel free to contact us at <a href=\"mailto:".$siteadmin."\">".$siteadmin."</a>.    </p>

    <hr>

    <p>
      <center><small><br />
      &copy; ".$siteadmin." All Rights Reserved
      </small>
      </center>
    </p>
  </div><!--end content-->
</div>";



ini_set("SMTP",$smtphost);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";
$to = $row2["ConfirmEmail"];
$subject= ''.$sitename.': Your  invoice details';
mail($to, $subject, $content, $headers);

header('location:payment_details.php?suc=1');
