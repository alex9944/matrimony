<?php session_start();include('protect.php'); ?>

<? 



// Database Connection 

include '../dbconnect.php'; 



// If current page number, use it 

// if not, set one! 


if(isset($_REQUEST['key']) and $_REQUEST['key'] == 'delete')
 {
    $id     = $_REQUEST['id'];
	$sql    = "select * from managevideo where vid = '$id'";
	$result = mysql_query($sql);
	$counts = mysql_affected_rows();
	if($counts > 0)
	 {
	   while($recc = mysql_fetch_array($result))
	   {
			$matriid  = $recc['matriid'];
			$qrys     = "delete from managevideo where vid = '$id'";
			mysql_query($qrys);
	   }
	   
	   $select = "SELECT ConfirmEmail FROM register WHERE MatriID ="."'".$matriid."'";
	   $exe    = mysql_query($select );
	   $res    = mysql_fetch_array($exe);
	   $to     = $res['ConfirmEmail']; 
	   
	   // subject
		$subject = '$sitename: Video Approve Status';
		
		// message
		$message = '
		<html>
		<body>
		  <p>Your video has been disapproved due to not according to the specifications given. </p>
		  <table>
			<td> Regards,<br>
			$sitename
			</td>
			</tr>
		  </table>
		</body>
		</html>
		';
		
		// To send HTML mail, the Content-type header must be set
		ini_set("SMTP",$smtphost);
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Additional headers
		$headers .= 'To: ' .$to. "\r\n";
		$headers .= 'From: $sitename <$siteadmin>' . "\r\n";
		
		// Mail it
		
		mail($to, $subject, $message, $headers);
	   
	 }
	 
	 
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



$sql = mysql_query("SELECT * FROM managevideo where status='InActive' LIMIT $from, $max_results"); 



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


 <link rel="stylesheet" type="text/css" href="skin/minimalist.css">
<!-- flowplayer depends on jQuery 1.7.1+ (for now) -->
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

   <!-- include flowplayer -->
   <script type="text/javascript" src="flowplayer.min.js"></script>


<script>
function PopupCenter(pageURL, title,w,h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}


</script>

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

		<form action="approve_inactive_to_active_video.php" method="post" name="form1" id="form1" onSubmit="return approvevalidate()">

		  <table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">

          <tr>

            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td>&nbsp;</td>

                <td class="headertext">&nbsp;</td>

              </tr>

              <tr>

                <td width="3%"><img src="images/icon22.gif" width="19" height="16" /></td>

                <td width="97%" class="headertext">Active <span class="paratext"> inactive video to active</span> </td>

              </tr>

            </table>

              <br />

              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">

                <tr>

                  <td><div align="center" class="smalltextgrey">

                    <div align="left" class="smalltextred"> Below is the list of all InActive videos to waiting approval.</div>

                  </div></td>

                </tr>

              </table>

              <br />

              <table width="54%" border="0" align="center" cellpadding="1" cellspacing="1">

                <tr>

                  <td><div align="center" class="BlueBoxheader"><?php $StrAction=$_GET['Action'];

					if ($StrAction == "not check")

					{

					

					echo "You must Check atleast One Video.";

					

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

$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM managevideo where status ='InActive' "),0); 

	

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
				  <td bgcolor="#ECECEC" class="paratext" width="" style="width:200px;">Matri Id</td>

                  <td width="" style="width:200px;" bgcolor="#ECECEC" class="paratext">Video Link</td>
				  
				  <td bgcolor="#ECECEC" width="30%" class="paratext" style="text-align:center;">Video</td>

                  <td width="10%" bgcolor="#ECECEC" class="paratext">Status</td>

                  <td width="12%" bgcolor="#ECECEC" class="HeadText1"><span class="paratext">Check Approve </span></td>
				  <td style="width:100px;" bgcolor="#ECECEC" class="HeadText1">Options</td>

                </tr>

				 <?php while($row = mysql_fetch_array($sql)){  ?>

                <TR bgcolor="#FFFFFF" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';">

                  <td class="smalltextgrey"><img src="images/icon22.gif" width="19" height="16" /></td>

                  <td><a href="viewprofile.php?ID=<?php echo $row['matriid']; ?>" target="_blank"><?php echo $row['matriid']; ?></a></td>

                  <td class="smalltextgrey"><a href="javascript:;" onclick="PopupCenter('playvideo.php?id=<?php echo $row['vid']; ?>', 'Add Video',450,350);"><?php echo $row['videoname']?></a></td>
				  <td style="text-align:center;">
				  
				   
					<a href="javascript:;" onclick="PopupCenter('playvideo.php?id=<?php echo $row['vid']; ?>', 'Add Video',450,350);">Play Video</a>
					
				  
				  <?php /*?><iframe width="200" height="100" src="http://www.youtube.com/embed/<?=$row['videoname'];?>" frameborder="0" allowfullscreen></iframe><?php */?>
				  
				  
				  </td>
                  <td class="smalltextred"><?php echo $row['status']?></td>
                  <td class="smalltextgrey"> <div align="center">
                    <input name="chkapprove[]" type="checkbox" id="chkapprove[]" value="<?php echo $row['vid']?>">
                  </div></td>
				  <td><a href="active_video.php?id=<?php echo $row['vid']; ?>&key=delete">Delete</a></td>

                </tr>

                <tr>

                  <td height="2" colspan="8" background="images/dot.gif" class="smalltextgrey"></td>

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

