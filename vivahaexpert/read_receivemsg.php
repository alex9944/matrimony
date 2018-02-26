<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/inboxmsg.js"></script>
</head>

<body>
<?php include("config.php"); 




$strmsgid = $_GET['Msgid'];

$strrecepientid = $_GET['recipientID'];

$result = mysql_query("SELECT * FROM sendmessage Where id = '$strmsgid'");
?>
    <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
    <div class="profile_block">
      <div class="header">
        <h3 class="float_left title">Received Message</h3>
      </div>
      <div class="body" align="left">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
          <tr>
            <td><? while($row = mysql_fetch_array($result))

	{  ?>
              <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                <tr>
                  <td><strong>From : </strong></td>
                  <td><? echo $row['sender'] ?></td>
                  <td><div align="right">Received on : <? echo $row['date_sent'] ?></div></td>
                </tr>
                <tr>
                  <td width="12%"><strong>Message : </strong></td>
                  <td width="88%" colspan="2"><? echo $row['message'] ?></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left"> <img src="pics/arrow-grn-4x7.gif" width="4" height="7" /> <a href="reply_send_msg.php?MsgID=<? echo $strmsgid ?>&Toid=<? echo $strrecepientid ?>">Reply</a> </div></td>
                </tr>
              </table>
              <? } ?></td>
          </tr>
        </table>
    <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
  </div>
</div>
</body>
</html>