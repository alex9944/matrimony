<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/inboxmsg.js"></script>
</head>

<body>
<?php include("config.php"); 
$strtoid = $_GET['Toid'];
$strmsgid = $_GET['MsgID'];
$result = mysql_query("SELECT * FROM sendmessage Where id = '$strmsgid' ");
?>
<!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
<div class="profile_block">
  <div class="header">
    <h3 class="float_left title">Reply</h3>
  </div>
  <div class="body" align="left">
    <form action="reply_send_msg_submit.php" method="post" name="form">
      <? while($row = mysql_fetch_array($result)){ ?>
      <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" class="tbl_profiledetails">
        <tr>
          <td>&nbsp;</td>
        </tr>
	
		<tr>
          <td><div align="left">Subject : <? echo $row['subject']; ?>
            <input name="subject" type="hidden" id="txtTo" value="<? echo $row['subject']; ?>" /></div></td>
        </tr>
	
        <tr>
          <td><div align="left">To : <? echo $strtoid ?>
            <input name="txtTo" type="hidden" id="txtTo" value="<? echo $strtoid ?>" /></div></td>
        </tr>
        <tr>
          <td><div align="left">
              <textarea name="txtreply" cols="60" rows="10" id="txtreply">
			  --------Original Message------

		 < <? echo $row['message'] ?></textarea>
            </div></td>
        </tr>
        <tr>
          <td><input name="Submit" type="image" value="Submit" src="pics/button-send.gif" /></td>
        </tr>
        <tr>
          <td><div align="center"><a href="javascript:window.close();">Close</a></div></td>
        </tr>
      </table>
      <? } ?>
    </form>
    <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
  </div>
</div>
</body>
</html>