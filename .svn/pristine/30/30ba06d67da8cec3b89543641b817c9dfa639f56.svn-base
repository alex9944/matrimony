<?php session_start();
ob_start();
include("config/error.php");
include("pagination.php");

$id=$_SESSION['userid'];


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $sitename;?></title>
<link type="text/css" rel="stylesheet" href="style/main.css"  />
</head>

<body bgcolor="#FFFFFF" >
<table width="100%" align="center" style="font-family:Arial, Helvetica, sans-serif;  font-size:11px; background-color:#d6e7f1; margin:0px; padding:0px;">
          <tr>
            <td width="74%"  valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top">
	<table width="94%" border="0" align="center" cellpadding="0" cellspacing="0">

        <tr>
          <td background="images/box_left_center.jpg" style="background-position:right; background-repeat:repeat-y;">&nbsp;</td>
          <td bgcolor=""><table width="104%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td><table width="98%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="center" valign="top"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="left" valign="top" ><form action="advance_result.php" method="post" enctype="multipart/form-data" name="advsearch" id="form1" onsubmit="return postCheck();">
                                <table width="97%" border="0" cellspacing="0" cellpadding="5" align="center" style="font-size:12px;">
                                  <tr>
                                    <td colspan="3" class="head_bg" align="center"><strong>Terms And Conditions</strong> </td>
                                  </tr>
                                  <tr>
								  <?php $select_text=mysql_query("select `termtext` from sitesetting");
								  $fetch_text=mysql_fetch_array($select_text);
								  
								  ?>
								  <td width="95%" align="left" valign="top" class=""><div align="justify"><?php echo stripslashes($fetch_text['termtext']); ?>   <br>
                        </div></td>
                                   
                                  </tr>                               

                                  <tr>
                                    <td align="center" colspan="3"><span class="ad_text_color"><a href="#" onclick="javascript:window.close();"> Close Window </a></span></td>
                                  </tr>
                                </table>
                            </form></td>
                          </tr>
                      </table></td>
                    </tr>
                </table></td>
              </tr>
          </table></td>
          
        </tr>
       
      </table>
	</td>
  </tr>
</table>
</td>
          </tr>
        </table>



</body>
</html>
