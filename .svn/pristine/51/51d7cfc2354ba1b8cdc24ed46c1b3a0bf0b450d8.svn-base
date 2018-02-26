
<?php include("../dbconnect.php"); ?>
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
</HEAD>
<?
		$strid = $_GET['id'];
		$result = mysql_query("SELECT * FROM successstory where ID='$strid' ");
		$row = mysql_fetch_array($result); ?>
<body >
<table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="29%" background="images/middlelinefinal.jpg"><div align="left">&nbsp;&nbsp;<strong>Success Story </strong></div></td>
    <td width="71%">&nbsp;</td>
  </tr>
</table>
<div  align="center"> <img src="../photoprocess.php?image=SuccessStory_Photos/<?php echo $row['weddingphoto']?>&square=300&watermark_text=<?php echo $info['Webname']; ?>&watermark_color=ffffff;" alt="<?php echo $row['groomname']?><?php echo $row['bridename']?>" border="2" class="submenubox" align="middle"/></div>
<table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="submenubox" bgcolor="#FFF5EB">
  <tr>
    <td><table width="98%" border="1" align="center" cellpadding="1" cellspacing="1">
  
 
      <tr>
        <td colspan="2" nowrap="nowrap"><?php echo $row['successmessage']?></td>
      </tr>
      <tr>
        <td> <strong>Bride Name </strong>:<?php echo $row['groomname']?></td>
        <td><strong>Groom Name </strong>: <?php echo $row['bridename']?></td>
      </tr>
      <tr>
        <td width="36%"><strong>Bride MatriId:</strong> <?php echo $row['brideid']?> </td> 
        <td width="37%"><strong>Groom MatriId:</strong> <?php echo $row['groomid']?> </td>
      </tr>
	      <tr>
        <td><strong>Bride Email</strong>: <?php echo $row['bride_email']?> </td> 
        <td><strong>Groom Email:</strong> <?php echo $row['groom_email']?> </td>
      </tr>
	  <tr>
        <td> <strong>With your permission, can we share your name, photo and story? : </strong></td> 
        <td><?php if( $row['share'] == 1) { echo "Yes"; } else { echo "No"; } ?> </td>
	  </tr>
	  
	   <tr>
        <td> <strong>Would you like your story to be considered for an <?=$sitename; ?> TV commercial? :  </strong></td> 
	    <td><?php if( $row['tv'] == 1) { echo "Yes"; } else { echo "No"; } ?></td>
	   </tr>
      <tr>
        <td><div align="center"></div></td>
        <td><a href="javascript:close();" class="bodysmall">X Close </a></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>


</body>
</html>
