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
<title>ClickOne.com</title>
<link type="text/css" rel="stylesheet" href="style/main.css"  />
</head>

<body bgcolor="#FFFFFF" >
<table width="100%" align="center">
          <tr>
            <td width="74%" id="body_right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top">
	<table width="94%" border="0" align="center" cellpadding="0" cellspacing="0">

        <tr>
          <td background="images/box_left_center.jpg" style="background-position:right; background-repeat:repeat-y;">&nbsp;</td>
          <td bgcolor="#fef5fa"><table width="104%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td><table width="98%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="center" valign="top"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="left" valign="top" ><form action="advance_result.php" method="post" enctype="multipart/form-data" name="advsearch" id="form1" onsubmit="return postCheck();">
                                <table width="97%" border="0" cellspacing="0" cellpadding="5" align="center">
                                  <tr>
                                    <td colspan="3" class="head_bg" align="center"><strong>Terms And Condition</strong> </td>
                                  </tr>
                                  <tr>
								  <?php $select_text=mysql_query("select `termtext` from sitesetting");
								  $fetch_text=mysql_fetch_array($select_text);
								  
								  ?>
								  <td width="95%" align="left" valign="top" class="welcome_text"><div align="justify"><?php echo nl2br(stripslashes($fetch_text['termtext'])) ?>   <br>
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
