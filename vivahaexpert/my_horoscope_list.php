<?php include("memprotect.php"); ?>
<?php include("config.php");

$matri_id   =  $_SESSION['matriid'];

//Get Sent Details
$sql     = "select count(*) as sentcount from horoscope_request_status where sender_id  = '$matri_id' ";
$result  = mysql_query($sql);
$count   = mysql_affected_rows();
if($count > 0)
 {
   while($res = mysql_fetch_array($result))
    {
	   $sent_count  = $res['sentcount'];
	}
 }
 
$sql     = "select count(*) as sentcount from horoscope_request_status where sender_id  = '$matri_id' and status = 'pending' ";
$result  = mysql_query($sql);
$count   = mysql_affected_rows();
if($count > 0)
 {
   while($res = mysql_fetch_array($result))
    {
	   $sent_pending_count  = $res['sentcount'];
	}
 }
 
$sql     = "select count(*) as sentcount from horoscope_request_status where sender_id  = '$matri_id' and status = 'accept' ";
$result  = mysql_query($sql);
$count   = mysql_affected_rows();
if($count > 0)
 {
   while($res = mysql_fetch_array($result))
    {
	   $sent_accept_count  = $res['sentcount'];
	}
 }  
 
 $sql     = "select count(*) as sentcount from horoscope_request_status where sender_id  = '$matri_id' and status = 'declined' ";
$result  = mysql_query($sql);
$count   = mysql_affected_rows();
if($count > 0)
 {
   while($res = mysql_fetch_array($result))
    {
	   $sent_declined_count  = $res['sentcount'];
	}
 } 
 

//Get received Details
$sql     = "select count(*) as sentcount from horoscope_request_status where receiver_id  = '$matri_id' ";
$result  = mysql_query($sql);
$count   = mysql_affected_rows();
if($count > 0)
 {
   while($res = mysql_fetch_array($result))
    {
	   $received_count  = $res['sentcount'];
	}
 }
 
$sql     = "select count(*) as sentcount from horoscope_request_status where receiver_id  = '$matri_id' and status = 'pending' ";
$result  = mysql_query($sql);
$count   = mysql_affected_rows();
if($count > 0)
 {
   while($res = mysql_fetch_array($result))
    {
	   $received_pending_count  = $res['sentcount'];
	}
 }
 
$sql     = "select count(*) as sentcount from horoscope_request_status where receiver_id  = '$matri_id' and status = 'accept' ";
$result  = mysql_query($sql);
$count   = mysql_affected_rows();
if($count > 0)
 {
   while($res = mysql_fetch_array($result))
    {
	   $received_accept_count  = $res['sentcount'];
	}
 }  
 
 $sql     = "select count(*) as sentcount from horoscope_request_status where receiver_id  = '$matri_id' and status = 'declined' ";
$result  = mysql_query($sql);
$count   = mysql_affected_rows();
if($count > 0)
 {
   while($res = mysql_fetch_array($result))
    {
	   $received_declined_count  = $res['sentcount'];
	}
 }   

?>

<div class="profiledetails">
  <h2>Horoscope Request</h2>
  <hr>
  <table cellspacing="10" cellpadding="10" border="0" width="100%">
    <tbody>
      <tr>
        <td width="50%"><ul class="alerts">
            <li style=" height:30px;">&nbsp;<a href='horoscopereqreceived.php' class="clsHoroscope" style="border:none; background-color:none !important; ">Horoscope Request Received (
              <?php if(isset($received_count) and $received_count > 0) echo $received_count; else echo '0'; ?>
              )</a></li>
            <li style="padding-left:15px;"><a class="btn_alerts alerts_expIntrAccept" href="horoscopereqreceived.php?key=accept">Accepted<span class="pink"> (
              <?php if(isset($received_accept_count) and $received_accept_count > 0) echo $received_accept_count; else echo '0'; ?>
              )</span></a></li>
            <li style="padding-left:15px;"><a class="btn_alerts alerts_expIntrPending" href="horoscopereqreceived.php?key=pending"> Pending&nbsp;<span class="pink">(
              <?php if(isset($received_pending_count) and $received_pending_count > 0) echo $received_pending_count; else echo '0'; ?>
              )</span></a></li>
            <li style="padding-left:15px;"><a class="btn_alerts alerts_expIntrDeclined" href="horoscopereqreceived.php?key=declined"> Declined&nbsp;<span class="pink"> (
              <?php if(isset($received_declined_count) and $received_declined_count > 0) echo $received_declined_count; else echo '0'; ?>
              )</span></a></li>
          </ul></td>
        <td><ul class="alerts">
            <li style=" height:30px;">&nbsp;<a href='horoscopereqsent.php' class="clsHoroscope" style="border:none; background-color:none !important;" >Horoscope Request Sent  (
              <?php if(isset($sent_count) and $sent_count > 0) echo $sent_count; else echo '0'; ?>
              )</a></li>
            <li style="padding-left:15px;"><a class="btn_alerts alerts_expIntrAccept" href="horoscopereqsent.php?key=accept">Accepted <span class="pink">(
              <?php if(isset($sent_accept_count) and $sent_accept_count > 0) echo $sent_accept_count; else echo '0'; ?>
              )</span></a></li>
            <li style="padding-left:15px;"><a class="btn_alerts alerts_expIntrPending" href="horoscopereqsent.php?key=pending"> Pending&nbsp;<span class="pink">(
              <?php if(isset($sent_pending_count) and $sent_pending_count > 0) echo $sent_pending_count; else echo '0'; ?>
              )</span></a></li>
            <li style="padding-left:15px;"><a class="btn_alerts alerts_expIntrDeclined" href="horoscopereqsent.php?key=declined"> Declined&nbsp;<span class="pink"> (
              <?php if(isset($sent_declined_count) and $sent_declined_count > 0) echo $sent_declined_count; else echo '0'; ?>
              )</span></a></li>
          </ul></td>
      </tr>
    </tbody>
  </table>
</div>
