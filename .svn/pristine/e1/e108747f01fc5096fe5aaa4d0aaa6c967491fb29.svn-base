<?php include('protect.php'); ?>

<? 



// Database Connection 

include '../dbconnect.php'; 



// If current page number, use it 

// if not, set one! 





?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Message History</title>

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

	

		  <table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">

          <tr>

            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td>&nbsp;</td>

                <td class="headertext">&nbsp;</td>

              </tr>

              <tr>

                <td width="3%"><img src="images/icon7.gif" width="19" height="16" /></td>

                <td width="97%" class="headertext">Message History <span class="paratext"></span> </td>

              </tr>

            </table>

              <br />

              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">

                <tr>

                  <td><div align="center" class="smalltextgrey">

                    <div align="left" class="smalltextred">  </div>

                  </div></td>

                </tr>

              </table>

              <br />

              <table width="54%" border="0" align="center" cellpadding="1" cellspacing="1">

                <tr>

                  <td><div align="center" class="BlueBoxheader"><?php $StrAction=$_GET['Action'];

					if ($StrAction == "not check")

					{

					

					echo "You must Check atleast One Profile";

					

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

if(isset($_REQUEST['key']) and $_REQUEST['key'] == 'approve')
 {
    $id = $_REQUEST['id'];
	$msg_qry     = "select * from sendmessage where id = '$id'";
	$msg_result  = mysql_query($msg_qry);
	$counts      = mysql_affected_rows();
	if($counts > 0)
	 {
	    while($resss  = mysql_fetch_array($msg_result))
		 {
		     $sender     = $resss['sender']; 
		     $to_matriid = $resss['receiver'];
			 $subject    = addslashes($resss['subject']);  
			 $body       = addslashes($resss['message']); 
			
			 $select = "SELECT ConfirmEmail FROM register WHERE MatriID ="."'".$to_matriid."'";
			 $exe    = mysql_query($select );
			 $res    = mysql_fetch_array($exe);
			 $to     = $res['ConfirmEmail']; 
		 }
		 
		 // subject
		$subject = ''.$sitename.': New message from '.$sender;
		
		// message
		$message = '
		<html>
		
		<body>
		  <p>here is the new message from'.$sender.' </p>
		  <table>
			<tr>
			<td>Sender:'.$sender.'  </td>
			</tr>
			<tr>
			 <td>Message :'.$body.' </td>
			</tr>
			   <tr><td>&nbsp;
			   </td>
			   </tr>
			<tr>
			<td> Regards,<br>
			'.$sitename.'
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
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";
		
		// Mail it
		
		mail($to, $subject, $message, $headers);
		$qrry = mysql_query("delete from sendmessage where id = '$id'"); 
		$msg = "Approved Message Sent Successfully.";
	 }
 }

if(isset($_REQUEST['key']) and $_REQUEST['key'] == 'disapprove')
 {
    $id = $_REQUEST['id'];
	$msg_qry     = "select * from sendmessage where id = '$id' ";
	$msg_result  = mysql_query($msg_qry);
	$counts      = mysql_affected_rows();
	if($counts > 0)
	 {
	    while($resss  = mysql_fetch_array($msg_result))
		 {
		     $to_matriid = $resss['sender']; 
		     $receiver   = $resss['receiver'];
			 $subject    = addslashes($resss['subject']);  
			 $body       = addslashes($resss['message']); 
			
			 $select = "SELECT ConfirmEmail FROM register WHERE MatriID ="."'".$to_matriid."'";
			 $exe    = mysql_query($select );
			 $res    = mysql_fetch_array($exe);
			 $to     = $res['ConfirmEmail']; 
		 }
		 
		 // subject
		$subject = ''.$sitename.': Message Status to send '.$receiver;
		
		// message
		$message = '
		<html>
		
		<body>
		  <p>Your messages does not send due to offensive language. </p>
		  <table>			
			<tr>
			 <td>Message :'.$body.' </td>
			</tr>
			   <tr><td>&nbsp;
			   </td>
			   </tr>
			<tr>
			<td> Regards,<br>
			'.$sitename.'
			</td>
			</tr>
		  </table>
		</body>
		</html>
		';
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Additional headers
		$headers .= 'To: ' .$to. "\r\n";
		$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";
		
		// Mail it
		
		mail($to, $subject, $message, $headers);
		$qty = "delete from sendmessage where id = '$id'";
		$qrry = mysql_query($qty); 
		$msg = "Disapproved Message Sent Successfully.";
	 }
 }

if(!isset($_GET['page'])){ 

    $page = 1; 

} else { 

    $page = $_GET['page']; 

} 



// Define the number of results per page 

$max_results = 10; 



// Figure out the limit for the query based 

// on the current page number. 

$from = (($page * $max_results) - $max_results);  



// Perform MySQL query on only the current page number's results 



$sql = mysql_query("SELECT * FROM sendmessage where subject not like '%Please upload your horoscope.%'  LIMIT $from, $max_results"); 

//$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM sendmessage  "),0);  exit;

//while($row = mysql_fetch_array($sql))

//{ 

    // Build your formatted results here. 

    //echo $row['status']."<br />"; 


$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM sendmessage where subject not like '%Please upload your horoscope.%' "),0); 

	

	if($total_results ==0)

	{

	print "<script>";

     print "self.location='noresults.php';"; // Comment this line if you don't want to redirect

     print "</script>";

	}

	

// Figure out the total number of pages. Always round up using ceil() 

$total_pages = ceil($total_results / $max_results);



?>

                  <span class="Partext1"><?php echo " " . $total_results ." Transactions Found" ?></span>
				  <? if($_REQUEST['suc'] == 1) { ?>
				  <span  style="color:#009900; font-weight:bold;"> Mail sent successfuly </span>
				  
				 <? }?>
				  </td>

                <td><div align="right"><span class="Partext1">

                  <?php



//Paging info

echo "Page ";



if($page < 4)
 {
    $start  = 1;
	$end    = 10;
 }
else
 {
    $start  = $page - 4;
	$end    = $page + 4;
 } 
if($end > $total_pages) 
 $end = $total_pages;

// Build Next Link 

if($total_pages > 0){ 

    $first = ($page + 1); 

    echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$first\">First</a> &nbsp;|"; 

}

if($page > 1){ 

    $prev = ($page - 1); 

    //echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 

	echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"> Previous</a> ";

} 




 
//for($i = 1; $i <= $total_pages; $i++)
for($i = $start; $i <= $end; $i++)
{ 

    if(($page) == $i){ 
       
	    if($i > 0)
        echo "$i "; 

        } else { 
           if($i > 0)
            echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i\">$i</a>  ] "; 

    } 

} 





echo " of ". $total_pages ; 




// Build Next Link 

if($page < $total_pages){ 

    $next = ($page + 1); 

    echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next\">Next</a> &nbsp;|&nbsp;"; 

} 


// Build Previous Link 

if($total_pages > 0){ 

    $last = $total_pages; 

    //echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 

	echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$last\"> Last</a> ";

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

             <?php if(isset($msg)) echo "<p style='padding:10px; text-align:center; color:green; font-weight:bold;'>".$msg."</p>"; ?>

              <table width="98%" border="1" align="center" cellpadding="4" cellspacing="0" class="blackbox">

			 

                <tr>

                  <td width="4%" bgcolor="#ECECEC" class="HeadText1">&nbsp;</td>

                  <td width="5%" align="center" bgcolor="#ECECEC" class="paratext">S.NO</td>

                  <td width="9%" align="center" bgcolor="#ECECEC" class="paratext">Sender Id</td>

                  <td width="8%" align="center" bgcolor="#ECECEC" class="paratext">Receiver Id</td>
                  <td width="18%" align="center" bgcolor="#ECECEC" class="paratext">Message </td>

                  <td width="10%" align="center" bgcolor="#ECECEC" class="paratext">Date Sent</td>
                  <td width="10%" align="center" bgcolor="#ECECEC" class="paratext">Options</td>
                  

               
                </tr>

				 <?php while($row = mysql_fetch_array($sql)){ //print_r($row); ?>

                <TR  onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" height="73px">

                  <td class="smalltextgrey"><img src="images/icon7.gif" alt="InActive Profile" width="19" height="16" /></td>



                  <td class="smalltextgrey"><a href="viewprofile.php?ID=<?php echo $row['MatriID'] ?>&amp;Action=approve"><?php echo $row['id']?></a></td>

                  <td class="smalltextgrey"><?php echo $row['sender']?></td>

                  <td class="smalltextgrey"><?php echo $row['receiver']?></td>
                  <td class="smalltextgrey"><?php echo $row['message']?></td>

                  <td class="smalltextgrey"><?php echo $row['date_sent']?></td>

                 <td width="10%"><a href="message_history.php?key=approve&id=<?php echo $row['id']; ?>">Approve</a>&nbsp;&nbsp;<a href="message_history.php?key=disapprove&id=<?php echo $row['id']; ?>">Disapprove</a></td>
                </tr>

                <tr>

                  <td height="2" colspan="14" background="images/dot.gif" class="smalltextgrey"></td>
                  </tr>

				<?php }  ?>
              </table>

			  

              <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">

                <tr>

                  <td><div align="right"></div></td>

                </tr>

              </table>

              <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">

                <tr>

                  <td><div align="right"><span class="Partext1">

                      <?php



//Paging info

echo "Page ";


if($page < 4)
 {
    $start  = 1;
	$end    = 10;
 }
else
 {
    $start  = $page - 4;
	$end    = $page + 4;
 } 
if($end > $total_pages) 
 $end = $total_pages;

// Build Next Link 

if($total_pages > 0){ 

    $first = ($page + 1); 

    echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$first\">First</a> &nbsp;|"; 

}

if($page > 1){ 

    $prev = ($page - 1); 

    //echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 

	echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"> Previous</a> ";

} 




 
//for($i = 1; $i <= $total_pages; $i++)
for($i = $start; $i <= $end; $i++)
{ 

    if(($page) == $i){ 
       
	    if($i > 0)
        echo "$i "; 

        } else { 
           if($i > 0)
            echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i\">$i</a>  ] "; 

    } 

} 





echo " of ". $total_pages ; 




// Build Next Link 

if($page < $total_pages){ 

    $next = ($page + 1); 

    echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next\">Next</a> &nbsp;|&nbsp;"; 

} 


// Build Previous Link 

if($total_pages > 0){ 

    $last = $total_pages; 

    //echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 

	echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$last\"> Last</a> ";

} 

?>

                  </span></div></td>

                </tr>

              </table>

			  

			  

			  </td>

            </tr>

          

        </table>

	

		</td>

      </tr>

      <tr>

        <td colspan="2"><?php include("adminfooter.php");?></td>

      </tr>

    </table></td>

  </tr>

</table>

</body>
<script language="javascript" type="text/javascript">
<!--
function popitup(url,id) {
	newwindow=window.open(url+'?id='+id,'name','height=500,width=550');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>
<style>
.green-button {
    background-color: #3C7999;
    border: 1px solid #3C7999;
    color: #FFFFFF;
    cursor: pointer;
    font-family: Arial,verdana;
    font-size: 11px;
    font-weight: normal;
}
</style>
</html>

