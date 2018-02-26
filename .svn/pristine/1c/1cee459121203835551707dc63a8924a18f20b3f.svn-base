<?php session_start();
// Database Connection 
include '../dbconnect.php'; 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Video</title>

<link rel="stylesheet" type="text/css" href="skin/minimalist.css">
<!-- flowplayer depends on jQuery 1.7.1+ (for now) -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<!-- include flowplayer -->
<script type="text/javascript" src="flowplayer.min.js"></script>



</head>

<body>

<?php $vid = $_GET['id'];

$sql = "select * from managevideo where vid = '$vid'";
$result = mysql_query($sql);
$count = mysql_affected_rows();
if($count > 0)
 {
    while($row = mysql_fetch_array($result))
	  { ?>
	    <?php
				    $video_name  = $row['videoname'];
					$urlpath  = $_SERVER['HTTP_REFERER'];
					$urlpath  = str_replace("admin/active_video.php","",$urlpath);
					if($row['type'] == 'local')
					{ 	?>
					  <div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167" style="width:400px; height:300px;">
						  <video>							
							 <source type="video/mp4" src="<?php echo $urlpath.$video_name; ?>">							 
						  </video>
					   </div>
					  <?php 
					}
					else
					{ ?>
					   <iframe width="400" height="300" src="http://www.youtube.com/embed/<?=$row['videoname'];?>" frameborder="0" allowfullscreen></iframe> <?php
					} ?>   
	    <?php 
	      
	  }
 }
 ?>

</body>
</html>
