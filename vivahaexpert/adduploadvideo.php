<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>

<?php 
//get unique id
$up_id = uniqid(); 
?>

<?php

//process the forms and upload the files
if ($_POST) {

//specify folder for file upload
$folder = "admin/video/"; 

//specify redirect URL
$redirect = "adduploadvideo.php?success";

//upload the file
move_uploaded_file($_FILES["file"]["tmp_name"], "$folder" . $_FILES["file"]["name"]);
//move_uploaded_file($_FILES["file"]["tmp_name"], "$adminfolder" . $_FILES["file"]["name"]);

$video_path  =   "$folder" . $_FILES["file"]["name"];
$sql  = "INSERT INTO managevideo(matriid,videoname,status, type) VALUES('".$_SESSION['matriid']."','".$video_path."','InActive', 'local')";
mysql_query($sql) or die('Error :'.mysql_error());

//do whatever else needs to be done (insert information into database, etc...)

//redirect user
header('Location: '.$redirect); die;
}
//

?>

<!--Progress Bar and iframe Styling-->
<link href="style_progress.css" rel="stylesheet" type="text/css" />

<!--Get jQuery-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.js" type="text/javascript"></script>

<!--display bar only if file is chosen-->
<script>

$(document).ready(function() { 
//

//show the progress bar only if a file field was clicked
	var show_bar = 0;
    $('input[type="file"]').click(function(){
		show_bar = 1;
    });

//show iframe on form submit
    $("#form1").submit(function(){

		if (show_bar === 1) { 
			$('#upload_frame').show();
			function set () {
				$('#upload_frame').attr('src','upload_frame.php?up_id=<?php echo $up_id; ?>');
			}
			setTimeout(set);
		}
    });
//

});

</script>


</head>

<body>



<div style="padding:20px; ">
  <h1>Upload your file </h1> <br />
  <?php if (isset($_GET['success'])) { ?>
  <p class="notice" style="text-align:center; color:green; padding:10px; font-weight:bold;">Your file has been uploaded.</p>
  <?php } ?>
  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
   
    <b>Choose a file to upload  :</b>

<!--APC hidden field-->
    <input type="hidden" name="APC_UPLOAD_PROGRESS" id="progress_key" value="<?php echo $up_id; ?>"/>	
<!---->
    <input name="file" type="file" id="file" size="30" style="border:none;"/>
	<div style="color:red; font-size:12px;">(Note : Upload only mp4 file format, you can convert and upload the video format as mp4.)</div>

<!--Include the iframe-->
    <br />
    <iframe id="upload_frame" name="upload_frame" frameborder="0" border="0" src="" scrolling="no" scrollbar="no" > </iframe>
    <br />
<!---->

    <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Submit" alt="Submit" >
	
	<input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Close" type="image" value="Close" alt="Close" onclick="window.close();">
	
  </form>
  </div>

</body>
</html>