<?php include("memprotect.php"); ?>

<?php include("config.php"); ?>

<?php 

include('dbconnect.php');



$update1 = mysql_query("update register set LastLogin=Thislogin WHERE MatriID='".$_SESSION['username']."'");



$Insert1 = mysql_query("UPDATE register SET Thislogin = NOW() WHERE MatriID='".$_SESSION['username']."'");



$authent = mysql_query("SELECT * FROM register where MatriID='".$_SESSION['username']."'");







?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?Php include("include/innerheadersection.php"); ?>
</head>
<BODY>

<div id="wrapper">


<!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
<!-- HEADER ENDS HERE ###################################################  -->

<!-- CONTENT AREA STARTS HERE ###################################################  -->

 <!-- BREADCRUMBS STARTS HERE #####################################  -->
<div id="breadcrumb"> 
<ul class="breadcrumbs">
		<li class="left"></li>
        
      <li class="center">
        <div id="breadcrumb_text">You are Here:
<span class="pathway">
<a href="#">Home</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">How it Works</span>
</div>
      </li>
        
        <li class="right"></li>
</ul>
</div>
<!-- BREADCRUMBS ENDS HERE ########################################  -->

  <div id="content_area">
  
 
    <?Php include('include/innerpagesidebar.php'); ?>
    <div id="inner_right">
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
        
          <h2 class="float_left title">
          <span class="black" style="color:#333;">Profile Status</span></h2>
        </div>
        <div class="body"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" id="content">

            <tr>

              <td> <?php 

		

		while($row = mysql_fetch_array($authent))

		{

			$Strname=$row['Name'];

			$Strstatus=$row['Status'];

			$_SESSION['status'] = $row['Status'];

			if ($Strstatus == "InActive")

			{

			echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";

			echo "<tr>";

			echo "<td class=bodysg><div align=center><strong>Profile Status is <span class=Alert> $Strstatus </span></strong> </div></td>";

			echo "</tr>";

			echo "<tr>";

			echo "<td><ul>";

			echo "<li>Hello Mr/Ms $Strname</li>";

			echo "<li>Your profile is not validated as yet. It will take approximately 24hrs to 48hrs to validate.</li>";

			echo "<li>An email notification will be sent to you once approved. Please be patient until then.
</li>";
echo "<li>Best regards with </li>";
echo "<li>".$sitename."</li>";
			echo "</ul></td>";

			echo "</tr>";

			echo "</table>";

			session_start();

			session_unset();

			session_destroy();

			}

			else

			{

			print "<script>";

			print " self.location='mymatri.php';"; // Comment this line if you don't want to redirect

			print "</script>";

			}

			 

		} 

		?>  </td>

        </tr>

            </table>            </div>
        
        <div class="footer">
        <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a>
        </div>
      </div>
      <div class="banner_h_std"><img src="images/H_STD_BANNER.gif" width="468" height="80" /></div>
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ -->
    </div>
  </div>
<!-- CONTENT AREA ENDS HERE ###################################################  -->  

<!-- FOOTER STARTS HERE ###################################################  -->
<?php include("include/footermenu.php") ?>
<!-- FOOTER ENDS HERE ###################################################  -->    



</div>
</body>
</html>