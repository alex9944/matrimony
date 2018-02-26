<?php include('config.php'); ?>
<?php include("dbconnect.php"); ?>
<? 




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




$sql = mysql_query("SELECT  *, Left(Name,15) as rname,Left(Education,15) as redu,Status,date_format(Lastlogin,'%d-%M-%Y') as lastlogindate,PhotoProtect  FROM register where  Status <> 'InActive'  order by Status IN('PLATINUM','DIAMOND','GOLDEN','Active') LIMIT $from, $max_results ")
or die("Could not select data because ".mysql_error());


?>

<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style10 {font-family: Arial, Helvetica, verdana; font-weight: bold; color: #FFFFFF; font-size: 11; }
.style9 {font-family: Arial, Helvetica, verdana; font-weight: normal;  font-size:11; }
-->
</style>

<style type="text/css">
/* CSS Tooltip  */
* {font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; }
a:hover {background:#ffffff; text-decoration:none;} /*BG color is a must for IE6*/
a.tooltip1 span {display:none; padding:1px 1px; margin-left:1px; width:280px;}
a.tooltip1:hover span{display:inline; position:absolute; border:1px solid #cccccc; background:#DEE2E6; color:#6c6c6c;}

.homeborder {
	
	border-bottom: 1px solid #8CA6BD;
	border-top: 1px solid #8CA6BD;
	border-left: 1px solid #8CA6BD;
	border-right: 1px solid #8CA6BD;
}

.bg_1 
{ 
background-color:#E8F8FF; 
} 

.bg_0 
{ 
background-color: #FFFFFF; 
} 

</style>


</HEAD>
<BODY class="body">



<DIV align="center">
<TABLE width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="BlueTborder">
          <!--DWLayoutTable-->
          <TR>
            <TD height="37" colspan="2">
			<?php include("header.php");?>
			</TD>
    </TR>
          <TR>
            
    </TR>
          <TR>
            <TD  colspan="2"><?php include("topmenu.php");?></TD>
          </TR>
          <TR bgcolor="#FFFFFF">
            <TD colspan="2" valign="top">
			  

  
<!-- START LEFT PART -->  
<DIV align="center">
<TABLE width="100%" border="0" cellpadding="0" cellspacing="0">
<TR>
  <TD height="303" valign="top" ><br>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
    <table width="95%" border="0" align="center" cellpadding="3" cellspacing="3">
      <tr>
        <?php
// Figure out the total number of results in DB: 
//= mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register"),0); 


$total_results  = mysql_result(mysql_query("SELECT  COUNT(*) as Num FROM register where  Status <> 'InActive' "),0); 


		if($total_results ==0)
	{
	//print "<script>";
    //print "self.location='searchoption.php?Action=refine';"; // Comment this line if you don't want to redirect
   // print "</s
	}
	
	
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results);

?>
        <td><div align="left"> <span class="Partext1"></span> <?php echo " " . $total_results ." Profiles Found" ?> </div></td>
        <td><div align="right"><span class="Partext1">
            <?php
 
$url = "";

//Paging info
echo "Page ";
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
echo "$i "; 
} else { 
echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i&$url\">$i</a>  ] "; 
} 
} 


echo " of ". $total_pages ; 


// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
//echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 
echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev&$url\"> Previous</a> &nbsp;|";
} 

// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 

echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&$url\">Next</a>"; 

//echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&$var1=".urlencode($SearchString) ."\">Next</a>";
 
//echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&SearchString=.urlencode($SearchString) .\">Next</a>"; 
//$Nav = "<A HREF=\"Search.php?page=" . $i . "page=$next&SearchString=" .urlencode($SearchString) . "\">Next</A>"; 
} 
?>
        </span></div></td>
      </tr>
    </table>
    <table width="95%" border="0" align="center" cellpadding="3" cellspacing="3" bgcolor="8CA6BD" class="bottomborder">
      <tr>
        <td width="25%"><div align="left" class="style10">Profile ID </div></td>
        <td width="8%"><div align="left" class="style10">Gender</div></td>
        <td width="12%"><div align="left" class="style10">Residing in </div></td>
        <td width="3%"><div align="left" class="style10">Age</div></td>
        <td width="8%"><div align="left" class="style10">Height</div></td>
        <td width="20%"><div align="left" class="style10">Sub Caste </div></td>
        <td width="15%"><div align="left" class="style10">Profession</div></td>
        </tr>
    </table>
    <table width="95%" border="0" align="center" cellpadding="4" cellspacing="0" class="tbborder1" bordercolorlight="#E4E4C9">
      <?php while($crow = mysql_fetch_array($sql)){ 
	  //$i = 0;
	  $i = ($i + 1) % 2;
	  ?>
	 
    
	 <?php echo "<tr class=\"bg_$i\">"; ?>
        <td width="25%"><div align="left" class="style9"><span class="smalltextgrey">
		 
	
	
		<a style="text-decoration:blink" href="viewprofile<?php echo $crow['MatriID']?>.htm" target="_blank" class="tooltip1"><?php echo $crow['rname']?>
		<span>
		<?php include('home_tooltip_content.php'); ?>.
		</span>
		</a>
                 <?php
				//////////// PHOTO 
				$strmatid = $crow['MatriID'];
				$sql1="SELECT * FROM register  WHERE Photo1 <> 'nophoto.gif' and Photo1Approve='Yes' and MatriID = '$strmatid'";
				$result1=mysql_query($sql1);
				$count1=@mysql_num_rows($result1);
				if($count1==1){
				echo "<img src=images/icon_photo.gif alt=Photo>"; } else { echo "" ;}
				?>
                  <?php
				//////////// HOROSCOPE 
				$sql2="SELECT * FROM register  WHERE  HorosApprove='Yes' and MatriID = '$strmatid'";
				$result2=mysql_query($sql2);
				$count2=@mysql_num_rows($result2);
				if($count2==1){
				echo "<img src=images/icon-astro.gif alt=Horoscope>"; } else { echo "" ;}
				?>
                  <?php
				//////////// MOBILE
				$sql3="SELECT * FROM register where Mobile <> '' and MatriID = '$strmatid'";
				$result3=mysql_query($sql3);
				$count3=@mysql_num_rows($result3);
				if($count3==1){
				echo "<img src=images/icon-phone.gif alt=Mobile>"; } else { echo "" ;}
				?>
				
				 <?php
				//////////// PHONE 
				$sql4="SELECT * FROM register where Phone <> '' and MatriID = '$strmatid'";
				$result4=mysql_query($sql4);
				$count4=@mysql_num_rows($result4);
				if($count4==1){
				echo "<img src=images/phone-verified-icon-new.gif alt=Phone align=absmiddle>"; } else { echo "" ;}
				?>
				
        </span> </div></td>
        <td width="8%"><div align="left" class="style9"><span class="smalltextgrey"><?php echo $crow['Gender']?></span></div></td>
        <td width="12%"><div align="left" class="style9"><span class="smalltextgrey"><?php echo $crow['State']?></span>,<span class="smalltextgrey"><?php echo $crow['Country']?></span></div></td>
        <td width="3%"><div align="left" class="style9"><span class="smalltextgrey"><?php echo $crow['Age']?></span></div></td>
        <td width="8%"><div align="left" class="style9"><span class="smalltextgrey">
            <?php  
$strheight = $crow['Height'];
if($strheight =="1") { echo "Below 4ft"; }
else if($strheight =="2") { echo "4ft 6in"; }
else if($strheight =="3") { echo "4ft 7in"; }
else if($strheight =="4") { echo "4ft 8in"; }
else if($strheight =="5") { echo "4ft 9in"; }
else if($strheight =="6") { echo "4ft 10in"; }
else if($strheight =="7") { echo "4ft 11in"; }
else if($strheight =="8") { echo "5ft"; }
else if($strheight =="9") { echo "5ft 1in"; }
else if($strheight =="10") { echo "5ft 2in"; }
else if($strheight =="11") { echo "5ft 3in"; }
else if($strheight =="12") { echo "5ft 4in"; }
else if($strheight =="13") { echo "5ft 5in"; }
else if($strheight =="14") { echo "5ft 6in"; }
else if($strheight =="15") { echo "5ft 7in"; }
else if($strheight =="16") { echo "5ft 8in"; }
else if($strheight =="17") { echo "5ft 9in"; }
else if($strheight =="18") { echo "5ft 10in"; }
else if($strheight =="19") { echo "5ft 11in"; }
else if($strheight =="20") { echo "6ft"; }
else if($strheight =="21") { echo "6ft 1in"; }
else if($strheight =="22") { echo "6ft 2in"; }
else if($strheight =="23") { echo "6ft 3in"; }
else if($strheight =="24") { echo "6ft 4in"; }
else if($strheight =="25") { echo "6ft 5in"; }
else if($strheight =="26") { echo "6ft 6in"; }
else if($strheight =="27") { echo "6ft 7in"; }
else if($strheight =="28") { echo "6ft 8in"; }
else if($strheight =="29") { echo "6ft 9in"; }
else if($strheight =="30") { echo "6ft 10in"; }
else if($strheight =="31") { echo "6ft 11in"; }
else if($strheight =="32") { echo "7ft"; }
else if($strheight =="33") { echo "Above 7ft"; }
?>
        </span></div></td>
        <td width="20%"><div align="left" class="style9"><span class="smalltextgrey"><?php echo $crow['Caste']?></span></div></td>
        <td width="15%"><div align="left" class="style9"><span class="smalltextgrey"><?php echo $crow['Occupation']?></span></div></td>
        </tr>
	
      <?php }  ?>
    </table>
    <table width="95%" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td><div align="right"><span class="Partext1">
            <?php

//Paging info
echo "Page ";


for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
echo "$i "; 
} else { 

echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i&$url\">$i</a>  ] "; 

} 
} 


echo " of ". $total_pages ; 


// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
//echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 
echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev&$url\"> Previous</a> &nbsp;|";
} 

// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&$url\">Next</a>"; 
} 
?>
        </span></div></td>
      </tr>
    </table></TD></TR>
</TABLE>

</DIV>
<!-- END LEFT PART -->	


		  
		    </TD>
    </TR>
			
          <TR>
            <TD><?php include("footer.php");?></TD>
          </TR>
          <TR>
          
    </TR>
          <TR>
         
          </TR>
  </TABLE>
  
</DIV>




</BODY>
</HTML>
