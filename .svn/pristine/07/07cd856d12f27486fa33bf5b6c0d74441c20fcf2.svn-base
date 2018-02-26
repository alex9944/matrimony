<?php include('protect.php'); ?>

<? 



// Database Connection 

include '../dbconnect.php'; 



// If current page number, use it 

// if not, set one! 



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



$sql = mysql_query("SELECT * FROM payment_details  LIMIT $from, $max_results"); 



//while($row = mysql_fetch_array($sql))

//{ 

    // Build your formatted results here. 

    //echo $row['status']."<br />"; 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Payment details</title>

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

                <td width="97%" class="headertext">Payment transaction details <span class="paratext"></span> </td>

              </tr>

            </table>

              <br />

              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">

                <tr>

                  <td><div align="center" class="smalltextgrey">

                    <div align="left" class="smalltextred"> Below is the list of transaction made by users </div>

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

$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM payment_details  "),0); 

	

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

             

              <table width="98%" border="1" align="center" cellpadding="4" cellspacing="0" class="blackbox">

			 

                <tr>

                  <td width="4%" bgcolor="#ECECEC" class="HeadText1">&nbsp;</td>

                  <td width="5%" align="center" bgcolor="#ECECEC" class="paratext">S.NO</td>

                  <td width="4%" align="center" bgcolor="#ECECEC" class="paratext">Date</td>

                  <td width="6%" align="center" bgcolor="#ECECEC" class="paratext">MatriId</td>
                  <td width="10%" align="center" bgcolor="#ECECEC" class="paratext">Transaction Id </td>

                  <td width="7%" align="center" bgcolor="#ECECEC" class="paratext">Amount</td>

                  <td width="6%" align="center" bgcolor="#ECECEC" class="paratext">Plan</td>

                  <td width="16%" align="center" bgcolor="#ECECEC" class="paratext">Add ons</td>

                  <td width="10%" bgcolor="#ECECEC" class="paratext" align="center">Email</td>
                  <td width="6%" align="center" bgcolor="#ECECEC" class="paratext">Status</td>
                  <td width="6%" align="center" bgcolor="#ECECEC" class="paratext">Invoice</td>
                  <td width="11%" align="center" bgcolor="#ECECEC" class="paratext">Action</td>
                  <td width="9%" bgcolor="#ECECEC" class="paratext">&nbsp;</td>
                </tr>

				 <?php while($row = mysql_fetch_array($sql)){ ?>

                <TR bgcolor="#FFF5EB" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" height="73px">

                  <td class="smalltextgrey"><img src="images/icon7.gif" alt="InActive Profile" width="19" height="16" /></td>



                  <td class="smalltextgrey"><a href="viewprofile.php?ID=<?php echo $row['MatriID'] ?>&amp;Action=approve"><?php echo $row['id']?></a></td>

                  <td class="smalltextgrey"><?php echo $row['transaction_date']?></td>

                  <td class="smalltextgrey"><?php echo $row['matriid']?></td>
                  <td class="smalltextgrey"><?php echo $row['transaction_id']?></td>

                  <td class="smalltextgrey"><?php echo $row['amount']?></td>

                  <td class="smalltextred"><?php echo $row['plan']?></td>

                  <td class="smalltextgrey" nowrap="nowrap">
				  
				  <?php 
				  if($row['astro_match'] == 1) {
				  echo "Diamond - 1"."<br>";
				  } elseif($row['astro_3months'] == 1) {
				  echo "Astro 3 months - 1"."<br>";
				  }elseif($row['astro_6month'] == 1) {
				  echo "Astro 6 months - 1"."<br>";
				  }
				  
				  if($row['spot_light'] == 1)
				  echo "Profile Spot light - 1"."<br>";
				  
				  if($row['match_promoter'] == 1)
				  echo "Match promoter - 1"."<br>";
				  
				  ?>				  </td>

                  <td class="smalltextgrey"><?php echo $row['payer_email']?></td>
                  <td class="smalltextgrey"><?php echo $row['payment_status']?></td>
                  <td class="smalltextgrey"><a href='#' onclick="javascript:popitup('payment_invoice.php','<?php echo $row['id']?>')">View</a></td>
                 
				  <td class="smalltextgrey">
				  <form name="frm" method="post" action="payment_mail.php">
				  <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
				  
				  <a  href="#"><input type="submit" value="Send mail" class="green-button" name="Submit" ></a>
				  
				  
				  </form>
				  
                  <td class="smalltextgrey">&nbsp;</td>
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

