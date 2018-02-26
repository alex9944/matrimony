<?php include('protect.php'); 
// Database Connection 

include '../dbconnect.php'; 

include("../config.php"); 

// If current page number, use it 

// if not, set one! 
//print_r($info); exit;

if(isset($_REQUEST['key']) and $_REQUEST['key'] == 'delete') 
{
   $id  = $_REQUEST['id'];
   $sss = mysql_query("delete from photoalbum where pid = '$id' ");
   
   
    $to = $stremail;
	$strsitename = $info['Webname'];
	$from = $info['ContactEmail'];
	$subject = "Your $sitename album's photo has been unapproved or Deleted.";
	$message = "
			<html>
	<style type=text/css>
	<!--
	.style4 {font-family: Arial; font-size:16px; font color=#FF6600 }
	.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
	.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
	-->
	</style>
	<body>		
	<table width=600 border=0 cellspacing=0 cellpadding=0>
	<tr>
	<td  width=600 height=90><table width=97% border=0 align=center cellpadding=2 cellspacing=2>
	<tr>
	<td><img src=$sitelogo border=0></td>
	</tr>
	</table></td>
	</tr>
	<tr>
	<td ><table width=573 border=0 align=center cellpadding=2 cellspacing=2>
	<tr>
	<td width=562 valign=top class=style3>Dear $strname,</td>
	</tr>
	<tr>
	<td width=562 valign=top class=style3>Welcome to $sitename,</td>
	</tr>
	<tr>
	<td valign=top class=style3><p>Thanks for choosing our matrimony services to find your life partner. This is to inform you that your photo has been Disapproved/Deleted due inappropriate for the website. Kindly Upload/Add another suitable photo again.</p>	
	<p>Warm regards<br>
	$sitename's Team<br>
	</p></td>
	</tr>
	<tr>
	<td valign=top class=style3>&nbsp;</td>
	</tr>
	<tr>
	<td valign=top class=style2>You are receiving this mail as a registered member of $sitename. This is a computer auto generated message. Please do not Reply.</td>
	</tr>
	</table></td>
	</tr>
	
	</table>
	</body>
	</html>
			";
	// To send HTML mail, the Content-type header must be set
	ini_set("SMTP",$smtphost);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";
	
	$success = mail($to,$subject, $message, $headers); 
   
    ?>
   <script type="text/javascript">
     window.location  = "active_photo_album.php";
   </script>
   <?php 
}

if(isset($_REQUEST['key']) and $_REQUEST['key'] == 'approve') 
{
   $id  = $_REQUEST['id'];
   $sss = mysql_query("update photoalbum set status = 'Active' where pid = '$id' "); 
   
   
   $to = $stremail;
	$strsitename = $info['Webname'];
	$from = $info['ContactEmail'];
	$subject = "Your $sitename album's photo has been Approved";
	$message = "
			<html>
	<style type=text/css>
	<!--
	.style4 {font-family: Arial; font-size:16px; font color=#FF6600 }
	.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
	.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
	-->
	</style>
	<body>		
	<table width=600 border=0 cellspacing=0 cellpadding=0>
	<tr>
	<td  width=600 height=90><table width=97% border=0 align=center cellpadding=2 cellspacing=2>
	<tr>
	<td><img src=$sitelogo border=0></td>
	</tr>
	</table></td>
	</tr>
	<tr>
	<td ><table width=573 border=0 align=center cellpadding=2 cellspacing=2>
	<tr>
	<td width=562 valign=top class=style3>Dear $strname,</td>
	</tr>
	<tr>
	<td width=562 valign=top class=style3>Welcome to $sitename,</td>
	</tr>
	<tr>
	<td valign=top class=style3><p>Thank you for choosing our matrimony services to find your life partner.</p>
	<p>This is to inform you that, your album photo has been Approved.</p>
	<p>Warm regards<br>
	$sitename's Team<br>
	</p></td>
	</tr>
	<tr>
	<td valign=top class=style3>&nbsp;</td>
	</tr>
	<tr>
	<td valign=top class=style2>You are receiving this mail as a registered member of $sitename. This is a computer auto generated message. Please do not Reply.</td>
	</tr>
	</table></td>
	</tr>
	
	</table>
	</body>
	</html>
			";
	// To send HTML mail, the Content-type header must be set
	ini_set("SMTP",$smtphost);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";
	
	$success = mail($to,$subject, $message, $headers); 
   
   ?>
   <script type="text/javascript">
     window.location  = "active_photo_album.php";
   </script>
   <?php 
}


if(!isset($_GET['page'])){ 

    $page = 1; 

} else { 

    $page = $_GET['page']; 

} 



// Define the number of results per page 

$max_results = 25; 



// Figure out the limit for the query based 

// on the current page number. 

$from = (($page * $max_results) - $max_results);  



// Perform MySQL query on only the current page number's results 



$sql = mysql_query("SELECT * FROM photoalbum where status='InActive' LIMIT $from, $max_results"); 



//while($row = mysql_fetch_array($sql))

//{ 

    // Build your formatted results here. 

    //echo $row['status']."<br />"; 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Approve Inactive to Active</title>

</head>

<link href="style.css" rel="stylesheet" type="text/css">



<body>

<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">

  <tr>

    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">

      <tr>

        <td colspan="2"><?php include("adminheader.php");?></td>

      </tr>

      <tr>

        <td bgcolor="#FCECD6" width="20%" valign="top"><?php include("adminleft.php");?></td>

        <td width="80%" valign="top">

		<form action="approve_inactive_to_active_photoalbum.php" method="post" name="form1" id="form1" onSubmit="return approvevalidate()">

		  <table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">

          <tr>

            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td>&nbsp;</td>

                <td class="headertext">&nbsp;</td>

              </tr>

              <tr>

                <td width="3%"><img src="images/icon22.gif" width="19" height="16" /></td>

                <td width="97%" class="headertext">Activate Photo Album </td>

              </tr>

            </table>

              <br />

              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">

                <tr>

                  <td><div align="center" class="smalltextgrey">

                    <div align="left" class="smalltextred"> Below is the list of all InActive photos to waiting approval. You can click on the image to view the full size image.</div>

                  </div></td>

                </tr>

              </table>

              <br />

              <table width="54%" border="0" align="center" cellpadding="1" cellspacing="1">

                <tr>

                  <td><div align="center" class="BlueBoxheader"><?php $StrAction=$_GET['Action'];

					if ($StrAction == "not check")

					{

					

					echo "You must Check atleast One Image.";

					

					}

					?>

					</div></td>

                </tr>

              </table>

              <br /></td>

            </tr>

          <tr>

            <td colspan="4" valign="top" class="HeadText1">

			

			

			<table width="98%" border="0" align="center" cellpadding="3" cellspacing="3">

              <tr>

                <td>

				<?php

// Figure out the total number of results in DB: 

$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM photoalbum where status ='InActive' "),0); 

	

	if($total_results ==0)

	{

	print "<script>";

     print "self.location='noresults.php';"; // Comment this line if you don't want to redirect

     print "</script>";

	}

	

// Figure out the total number of pages. Always round up using ceil() 

$total_pages = ceil($total_results / $max_results);



?>

                  <span class="Partext1"><?php echo " " . $total_results ." Profiles Found" ?></span></td>

                <td><div align="right"><span class="Partext1">

                  <?php



//Paging info

echo "Page ";





for($i = 1; $i <= $total_pages; $i++){ 

    if(($page) == $i){ 

        echo "$i "; 

        } else { 

            echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i\">$i</a>  ] "; 

    } 

} 





echo " of ". $total_pages ; 





// Build Previous Link 

if($page > 1){ 

    $prev = ($page - 1); 

    //echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 

	echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"> Previous</a> &nbsp;|";

} 



// Build Next Link 

if($page < $total_pages){ 

    $next = ($page + 1); 

    echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next\">Next</a>"; 

} 

?>

                </span></div></td>

              </tr>

              

            </table>

              <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">

                <tr>

                  <td></td>

                </tr>

              </table>

             

              <table width="98%" border="0" align="center" cellpadding="4" cellspacing="0" class="blackbox">

			 

                <tr>

                  <td width="4%" bgcolor="#ECECEC" class="HeadText1">&nbsp;</td>

                  <td width="10%" bgcolor="#ECECEC" class="paratext">Profile Id</td>
				  <td width="20%" bgcolor="#ECECEC" class="paratext">Name</td>
				  <td width="20%" bgcolor="#ECECEC" class="paratext">Email</td>
				  
				  
				  <td width="10%" bgcolor="#ECECEC" class="paratext">Image</td>

                  <td width="5%" bgcolor="#ECECEC" class="paratext">Status</td>
				  
				  <td width="13%" bgcolor="#ECECEC" class="paratext">Approve</td>

                  <td width="13%" bgcolor="#ECECEC" class="HeadText1"><span class="paratext">Disapprove</span></td>


                  <td width="10%" bgcolor="#ECECEC" class="HeadText1"><span class="paratext">Check Approve </span></td>

                </tr>

				 <?php while($row = mysql_fetch_array($sql)){ 
				 $email   = '';
				 $name    = '';
				 $id  =  $row['matriid'];
				 $userres = mysql_query("SELECT * FROM register WHERE  MatriID = '$id' "); 
				 while($res = mysql_fetch_array($userres)){ 
				   $email   = $res['ConfirmEmail'];
				   $name    = $res['Name'];
				 }
				  ?>

                <TR bgcolor="#FFFFFF" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';">

                  <td class="smalltextgrey"><img src="images/icon22.gif" width="19" height="16" /></td>

				  <td class="smalltextgrey"><a href="viewprofile.php?ID=<?php echo $row['matriid'] ?>" target="_blank"><?php echo $row['matriid'] ?></a>
				  
				  
				  <td class="smalltextgrey"><?php echo $name; ?></td>
				  <td class="smalltextgrey"><?php echo $email; ?></td>

                  <td class="smalltextgrey"><a href="viewprofile.php?ID=<?php echo $row['matriid'] ?>&amp;Action=approve"><img src="../photoalbum/<?php echo $row['imagename']?>" border="0" width="50" height="50" /></a></td>
                  <td class="smalltextred"><?php echo $row['status']?></td>
				  
				  <td class="smalltextgrey"><a href="active_photo_album.php?id=<?php echo $row['pid']?>&key=approve">Approve Photo </a></td>

                  <td class="smalltextgrey"><a href="active_photo_album.php?id=<?php echo $row['pid']?>&key=delete">Disapprove Photo </a></td>
				  
                  <td class="smalltextgrey"> <div align="center">
                    <input name="chkapprove[]" type="checkbox" id="chkapprove[]" value="<?php echo $row['pid']?>">
                  </div></td>

                </tr>

                <tr>

                  <td height="2" colspan="10" background="images/dot.gif" class="smalltextgrey"></td>

                  </tr>

				<?php }  ?>

              </table>

			  

              <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">

                <tr>

                  <td><div align="right">

                    <input name="Submit" type="submit" class="green-button" value="Approve" />

                  </div></td>

                </tr>

              </table>

              <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">

                <tr>

                  <td><div align="right"><span class="Partext1">

                      <?php



//Paging info

echo "Page ";





for($i = 1; $i <= $total_pages; $i++){ 

    if(($page) == $i){ 

        echo "$i "; 

        } else { 

            echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i\">$i</a>  ] "; 

    } 

} 





echo " of ". $total_pages ; 





// Build Previous Link 

if($page > 1){ 

    $prev = ($page - 1); 

    //echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 

	echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"> Previous</a> &nbsp;|";

} 



// Build Next Link 

if($page < $total_pages){ 

    $next = ($page + 1); 

    echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next\">Next</a>"; 

} 

?>

                  </span></div></td>

                </tr>

              </table>

			  

			  

			  </td>

            </tr>

          

        </table>

		</form>

		</td>

      </tr>

      <tr>

        <td colspan="2"><?php include("adminfooter.php");?></td>

      </tr>

    </table></td>

  </tr>

</table>

</body>

</html>

