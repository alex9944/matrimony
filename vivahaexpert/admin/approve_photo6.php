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

$max_results = 5; 



// Figure out the limit for the query based 

// on the current page number. 

$from = (($page * $max_results) - $max_results);  



// Perform MySQL query on only the current page number's results 




$sql = mysql_query("SELECT * FROM register WHERE (Photo6 != '0' and Photo6 != '') and (Photo6Approve='No' or Photo6Approve='0' ) LIMIT $from, $max_results "); 



//while($row = mysql_fetch_array($sql))

//{ 

    // Build your formatted results here. 

    //echo $row['status']."<br />"; 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Approve Photo</title>

</head>

<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/JavaScript">

<!--

function MM_openBrWindow(theURL,winName,features) { //v2.0

  window.open(theURL,winName,features);

}

//-->

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

        <td width="80%">

		<form action="approve_photo6_submit_bulk.php" method="post" name="form1" id="form1" onSubmit="return approvevalidate()">

		<table width="100%" height="0" border="0" cellpadding="1" cellspacing="1" id="content">

          <tr>

            <td height="54" colspan="4" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="3%"><img src="images/icon22.gif" width="19" height="16" /></td>

                <td width="97%" class="headertext">APPROVE MEMBERS PHOTO 6 <span class="paratext">(Waiting for Approval)</span> </td>

              </tr>

            </table>

              <br />

              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">

                <tr>

                  <td><div align="center" class="smalltextgrey">

                    <div align="left" class="smalltextred"> Below is the list of all Members Photo6 waiting approval .You can click on the profile ID to view the Photo.You can   approve/disapprove  by clicking the link. </div>

                  </div></td>

                </tr>

              </table>

              <br />

              <table width="54%" border="0" align="center" cellpadding="1" cellspacing="1">

                <tr>

                  <td><div align="center" class="BlueBoxheader">

				  <?php $StrAction=$_GET['Action'];

					if ($StrAction == "Approved")

					{

					

					echo "Approved Success";

					

					}

					?>

					</div></td>

                </tr>

              </table>

              <table width="54%" border="0" align="center" cellpadding="1" cellspacing="1">

                <tr>

                  <td><div align="center" class="BlueBoxheader">

                      <?php $StrAction=$_GET['Action'];

					if ($StrAction == "notcheck")

					{

					

					echo "You must Check atleast One Photo ";

					

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

                <td><?php

// Figure out the total number of results in DB: 

$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register WHERE (Photo6 != '0' and Photo6 != '') and (Photo6Approve='No' or Photo6Approve='0' )"),0); 

	

	if($total_results ==0)

	{

	print "<script>";

     print "self.location='noresults.php';"; // Comment this line if you don't want to redirect

     print "</script>";

	}

	

// Figure out the total number of pages. Always round up using ceil() 

$total_pages = ceil($total_results / $max_results);



?>

                  <span class="Partext1"><?php echo " " . $total_results ." Photos Found" ?></span></td>

                <td><div align="right"><span class="Partext1">

                  <?php



//Paging info

echo "Page ";


//echo $page;

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

             

              <table width="98%" border="0" align="center" cellpadding="4" cellspacing="0">

			 

                <tr>

                  <td width="4%" bgcolor="#ECECEC" class="HeadText1">&nbsp;</td>

                  <td width="13%" bgcolor="#ECECEC" class="paratext">ID</td>

                  <td width="11%" bgcolor="#ECECEC" class="paratext">Email</td>

                  <td width="11%" bgcolor="#ECECEC" class="paratext">Name</td>

                  <td width="13%" bgcolor="#ECECEC" class="paratext">Approval Status </td>

                  <td width="11%" bgcolor="#ECECEC" class="paratext">Photo</td>

                  <td width="13%" bgcolor="#ECECEC" class="paratext">Approve</td>

                  <td width="15%" bgcolor="#ECECEC" class="HeadText1"><span class="paratext">Disapprove</span></td>

                  <td width="9%" bgcolor="#ECECEC" class="HeadText1">&nbsp;</td>

                </tr>

				 <?php 
				 
				 $sql = "SELECT * FROM register WHERE Photo6 <> 'nophoto.gif' and Photo6Approve='No' order by ID desc LIMIT $from, $max_results";
				 $result = mysql_query($sql);
				 while($row = mysql_fetch_array($result))
				 { ?>

                <TR bgcolor="#FFFFFF" onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';">

                  <td class="smalltextgrey"><img src="images/icon22.gif" width="19" height="16" /></td>



                  <td class="smalltextgrey"><?php echo $row['MatriID']?></td>

                  <td class="smalltextgrey"><?php echo $row['ConfirmEmail']?></td>

                  <td class="smalltextgrey"><?php echo $row['Name']?></td>

                  <td class="smalltextgrey"><?php echo $row['Photo6Approve']?></td>

                  <td class="smalltextgrey"><div align="left"> 

				  <a href="#">

				  

				<!--  <img src="../photoprocess.php?image=memPhoto6/<?php echo $row['Photo6']?>&maxim_size=100" width="65"  hspace="1" vspace="1" border="0" class="submenubox" onClick="MM_openBrWindow('viewPhoto6.php?id=<?php  echo $row['MatriID']?>&Choice=1','vp','resizable=yes,width=600,height=450')">	-->

				  

				   <img src="../memphoto6/<?php echo $row['Photo6']?>" width="65"  hspace="1" vspace="1" border="0" class="submenubox" onClick="MM_openBrWindow('viewPhoto6.php?id=<?php  echo $row['MatriID']?>&Choice=1','vp','resizable=yes,width=600,height=450')">	

				  			  </a>

				   </div>

				   

				   </td>

                  <td class="smalltextgrey"><a href="Approve_Photo6_submit.php?ID=<?php echo $row['MatriID']?>&amp;Action=approve">Approve Photo </a></td>

                  <td class="smalltextgrey"><a href="UnApprove_Photo6_submit.php?ID=<?php echo $row['MatriID']?>&amp;delphoto=<?php echo $row['Photo6']?>&amp;Action=unapprove&email=<?php echo $row['ConfirmEmail']?>&name=<?php echo $row['Name']?>">Disapprove Photo </a></td>

                  <td class="smalltextgrey"><div align="center">

                    <input name="chkapprove[]" type="checkbox" id="chkapprove[]" value="<?php echo $row['MatriID']?>" />

                  </div></td>

                </tr>

                <tr>

                  <td height="2" colspan="9" background="images/dot.gif" class="smalltextgrey"></td>

                  </tr>

				<?php }  ?>

              </table>

			  

              <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">

                <tr>

                  <td><div align="right">

                    <input name="Submit" type="submit" class="green-button" value="Approve Photo" />

                  </div></td>

                </tr>

              </table>

              <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2">

                <tr>

                  <td><div align="right"><span class="Partext1">

                     <?php



//Paging info

echo "Page ";


//echo $page;

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

