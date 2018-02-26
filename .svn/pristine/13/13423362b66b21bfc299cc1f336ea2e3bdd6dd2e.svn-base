<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>

<?
		$strid = $_GET['id'];
		$result = mysql_query("SELECT * FROM successstory where ID='$strid' ");
		$row = mysql_fetch_array($result); ?>
		
		
</head>

<body>
<?php

?>
<!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
<div class="profile_block">
  <div class="header">
    <h3 class="float_left title">Success Story</h3>
  </div>
  <div class="body" align="left">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails" bgcolor="#FEF1E1" >
      <tr>
        <td><table width="98%" border="1" align="center" cellpadding="1" cellspacing="1" bgcolor="#FEF1E1" >
  
         <div  align="center"> <!--<img src="photoprocess.php?image=SuccessStory_Photos/<?php echo $row['weddingphoto']?>&square=300&watermark_text=<?php echo $info['Webname']; ?>&watermark_color=ffffff;" alt="<?php echo $row['groomname']?><?php echo $row['bridename']?>" border="2" class="submenubox" align="middle " />-->
		 
		 <img src="SuccessStory_Photos/<?php echo $row['weddingphoto']?>" alt="<?php echo $row['groomname']?><?php echo $row['bridename']?>" border="2" class="submenubox" align="middle " width="300px"  height="300px"/>
		 </div>

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
        <td> <strong>Would you like your story to be considered for an <?php echo $sitename; ?>' TV commercial? :  </strong></td> 
	    <td><?php if( $row['tv'] == 1) { echo "Yes"; } else { echo "No"; } ?></td>
	   </tr>
      <tr>
        <td><div align="center"></div></td>
        <td><a href="javascript:close();" class="bodysmall">X Close </a></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table></td>
      </tr>
    </table>
  </div>
</div>
<!-- BUSINESS PAGE CONTENT ends HERE ############################################ -->
</body>
</html>