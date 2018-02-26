<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" type="text/javascript">
function addvideovalidation()
{
	if(document.addvideo.txtvideo.value == "")
	{
		alert("Kindly Enter Youtube Video Id.");
		document.addvideo.txtvideo.focus();
		return false;
	}
	return true;
}
</script>
</head>

<body>
<?php
$videoid = $_REQUEST['txtvideo'];
if($videoid != "")
{
	$videosel = "SELECT videoname FROM managevideo WHERE videoname=".$videoid;
	$videoexec = mysql_query($videosel);
	$videocount = mysql_num_rows($videoexec);
	 if($videocount != 0)
      {
    	  $msg = $videoid . " already exists. ";
      }
	 else
	  { 
		  mysql_query("INSERT INTO managevideo(matriid,videoname,status, type) VALUES('".$_SESSION['matriid']."','".$videoid."','InActive', 'youtube')");
		  echo "<script>
					opener.window.location.href = 'managevideo.php';
					window.close();
				</script>";
	  }
}
?>
<form name="addvideo" id="addvideo" method="post">
<table border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" width="90%" align="center">
<?php if($msg != "") { ?>
<tr>
<td colspan="2"><div align="center"><strong><?php echo $msg; ?></strong></div></td>
</tr>
<?php } ?>
<tr>
<td><div align="left">Video Path</div></td>
<td><div align="left"> : <input type="text" name="txtvideo" id="txtvideo" class="textbox1" style="height:24px;" /></div></td>
</tr>
<tr><td colspan="2"><div align="center">Ex: http://www.youtube.com/watch?v=<b>788FoFphTSk</b><br />In the above youtube video link just type the bold text only. </div></td></tr>
<tr><td>&nbsp;</td>
<td><div align="left"><!--<input type="submit" name="submit" id="submit" value="Submit" onclick="return addvideovalidation();" />--> &nbsp; <!--<input type="button" name="close" id="close" value="Close" onclick="window.close();" />-->


	<input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Submit" alt="Submit" onclick="return addvideovalidation();">
	
	<input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Close" type="image" value="Close" alt="Close" onclick="window.close();">

</div></td></tr>
</table>
</form>
</body>
</html>