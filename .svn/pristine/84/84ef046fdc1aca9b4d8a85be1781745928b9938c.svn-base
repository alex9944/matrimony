<?php include("config.php"); 
include('dbconnect.php'); ?>

<style type="text/css">
/* CSS Tooltip  */
* {font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; }
a:hover {background:#ffffff; text-decoration:none;} /*BG color is a must for IE6*/
a.tooltip span {display:none; padding:2px 3px; margin-left:0px; width:auto}
a.tooltip:hover span{display:inline; position:absolute; border:1px solid #cccccc; background:#ffffff; color:#6c6c6c;}
</style>


<style>
		img.imageborder {
			display: block;
			padding:1px;
			border:solid;
			border-color: #dddddd #aaaaaa #aaaaaa #dddddd;
			border-width: 1px 1px 1px 1px;
			background-color:white;
		}
	</style>


<link href="style.css" rel="stylesheet" type="text/css">

<table width="450" border="0" cellpadding="0" cellspacing="0" >
  
  <tr>
    <td height="1"></td>
  </tr>
  <tr>
    <td ><div align="center">
<?php  
$sql = "SELECT Name, MatriID,
Status , Photo1Approve, Regdate, Photo1,thump_photo1 
FROM register
WHERE Photo1 <> 'nophoto.gif'
AND Photo1Approve = 'Yes'
ORDER BY rand()
LIMIT 5"; 
$result = @mysql_query($sql); 
$recordCount = mysql_num_rows($result); 
// main data array 

$data = array(); 
while ($row = mysql_fetch_row($result)) { 
        $data[] = $row[1]; 

		
} 
$totCols = 5; 
$col = 0; 
$perCol = ceil( $recordCount / $totCols ); 
// build the columns 
while ($col < $totCols) { 
   $start = $col * $perCol; 
   $col_data = array_slice($data, $start, $perCol); 
   print "<td style=\"width:290px;line-height:1.3em;vertical-align:top;\">\n"; 
   // add data to current column 


   foreach ($col_data as $item) {  
//$cat = mysql_query("SELECT * FROM register where matriid = '$item' ");

$cat = mysql_query("SELECT MatriID,REPLACE(Name, ' ', '' ) as rname,Education,Occupation,City,Photo1,Status,Photo1Approve,thump_photo1  
FROM register WHERE Photo1 <> 'nophoto.gif' AND Status <> 'InActive'  AND Photo1Approve = 'Yes' AND  MatriID = '$item' ORDER BY rand() LIMIT 5 ");

	 while($crow = mysql_fetch_array($cat))
		{
	 ?>
	<br />
 
<div align="center">	 
<a class="tooltip"  href="viewprofile<?php echo $crow['MatriID']?>.htm">

<?php if ($crow['thump_photo1'] == '' ) { ?> 
<img src="photoprocess.php?image=memphoto1/<?php echo $crow['Photo1']?>&square=90" hspace="5"  vspace="5" border="0" class="imageborder" />
<?php } else { ?>
<img src="photoprocess.php?image=<?php echo $crow['thump_photo1']?>&square=90"  hspace="5"  vspace="5" border="0" class="imageborder" />
<?php } ?>
</a><span class="lightbluelink">

<a href="viewprofile<?php echo $crow['MatriID']?>.htm" target="_blank" style="text-decoration:none" class="tooltip"> <?php  echo $crow['MatriID']; ?><br />
<span> I am a <?php echo $crow['Occupation']?>	  </span></a>	 
<?php  } print " <br/>";  
} 
print "</td>\n"; 
$col++; 
} 
?>
</span></div>
	  
	  </div>    </td>
  </tr>
</table>
