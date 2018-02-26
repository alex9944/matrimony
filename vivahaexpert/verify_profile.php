<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<style>
.profile_block div.body {
    font-size: 12px !important;
}
</style>
  <script>
  function redirect() { 
    window.location= 'mymatri.php';
  }
  </script>
<SCRIPT language="Javascript">

<!--

<!--

<!--

		


function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}



function MM_validateForm() { //v4.0

  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;

  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);

    if (val) { nm=val.name; if ((val=val.value)!="") {

      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');

        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';

      } else if (test!='R') { num = parseFloat(val);

        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';

        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');

          min=test.substring(8,p); max=test.substring(p+1);

          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';

    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }

  } if (errors) alert('The following error(s) occurred:\n'+errors);

  document.MM_returnValue = (errors == '');

}

//-->















</SCRIPT>
</head>

<body>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png"> Verify Profile Instructions</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?Php include('include/innerpagesidebar.php'); ?>
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
	   <?php //echo date('H:i A'); ?>
        <div class="header">
          <h2 class="float_left title"><span style="padding-left:10px">Upload photo for profile verification </span></h2>
        </div>
        
		
		
		

		
		
		<div class="body">
		
		<?php //print_r($_POST);
		
		if(isset($_POST['Submit_x'])) 
		{ ?>
		  <p style="text-align:center; color:green; padding-left:175px;"><span style="float:left;"><img src="pics/tick.png" /></span><strong style="float:left; padding:3px 0 0 5px;">You have successfully submitted verify profile photo!</strong></p>
	     <?php 		  
		}?>
		
<table width="100%" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td>

		<?php 

$StrAction=$_GET['Action'];

if ($StrAction == "err")

{

	echo "<table width=97% border=0 cellpadding=0 cellspacing=0 align='center' >";

	echo "<tr>";

	echo "<td class=Alert align='left'><strong>Please Correct the  errors.</strong> </td>";

	echo "</tr>";

	echo "<tr>";

	echo "<td class=Alert align='left'>";

	echo "Image format should be in .jpg  .gif  .png";

	echo "</br>";

	echo "Image file size below 350 KB";

	echo "</td>";

	echo "</tr>";

	echo "</table>";

}

?></td>

      </tr>

    </table>
	<script>
	function validate(){
	var frm = document.photoform;

	if(frm.ur_fname.value == "") {
	alert("Please enter your first name");
	frm.ur_fname.focus();
	return false;
	}
	else if(frm.partner_fname.value == "") {
	alert("Please enter partner first name");
	frm.partner_fname.focus();
	return false;
	}
	else if(frm.ur_lastname.value == "") {
	alert("Please enter your last name");
	frm.ur_lastname.focus();
	return false;
	}
	else if(frm.partner_lastname.value == "") {
	alert("Please enter partner last name");
	frm.partner_lastname.focus();
	return false;
	}
	
	else if(frm.ur_email.value == "") {
	alert("Please enter your email");
	frm.ur_email.focus();
	return false;
	}
	else if(!echeck(frm.ur_email.value)) {

	frm.ur_email.focus();
	return false;
	}
	
	else if(frm.partner_email.value == "") {
	alert("Please enter partner email");
	frm.partner_email.focus();
	return false;
	}
	
	else if(!echeck(frm.partner_email.value)) {

	frm.partner_email.focus();
	return false;
	}
	
	else if(frm.ur_matriid.value == "") {
	alert("Please enter your matriid");
	frm.ur_matriid.focus();
	return false;
	}
	else if(frm.partner_matriid.value == "") {
	alert("Please enter partner matriid");
	frm.partner_matriid.focus();
	return false;
	}
	
    else if(frm.Message.value == "") {
	alert("Please enter Message");
	frm.Message.focus();
	return false;
	}
			var photoform = this.document.photoform;



			if ( photoform.uploaded_file.value == "" )

			{

				alert( "Please select your Image file." );

				photoform.uploaded_file.focus( );

				return false;

			}



			var     extPos = photoform.uploaded_file.value.lastIndexOf( "." );

            if ( extPos == - 1)

            {

                alert( "Only Jpg or Gif or Png files can be added." );

				photoform.uploaded_file.focus( );

				return false;

			}

            else

            {

				var extn =  photoform.uploaded_file.value.substring(

					extPos + 1, photoform.uploaded_file.value.length );

				if ( extn != "jpeg" && extn != "jpg" && extn != "gif" && extn != "png" )

				{

                	alert( "Only Jpg or Gif or Png files can be added." );

					photoform.uploaded_file.focus( );

					return false;

				}

				

			

			

			

	

				

				var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";



  for (var i = 0; i < photoform.BrideName.value.length; i++) {

  	if (iChars.indexOf(photoform.BrideName.value.charAt(i)) != -1) {

  	alert ("Special characters and numbers are not allowed in Bride Name.\n Please remove them.");

	photoform.BrideName.focus( );

  	return false;

  	}

  }

  

  var jChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";



  for (var j = 0; j < photoform.GroomName.value.length; j++) {

  	if (jChars.indexOf(photoform.GroomName.value.charAt(j)) != -1) {

  	alert ("Special characters and numbers are not allowed in Groom Name.\n Please remove them.");

	photoform.GroomName.focus( );

  	return false;

  	}

  }



var kChars = "!@#$%^*()+=-[]\\\';/{}|\":<>?";



  for (var k = 0; k < photoform.Message.value.length; k++) {

  	if (kChars.indexOf(photoform.Message.value.charAt(k)) != -1) {

  	alert ("Special characters are not allowed in Message.\n Please remove them.");

	photoform.Message.focus( );

  	return false;

  	}

  }

				

				

				

			}

			return true;

		
	}
	</script>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
          <tr>
            <td>
                <tr>
                  <td><div align="center">
                      <table width="100%" bgcolor="" cellspacing="5px">
                        <tr>
                          <td style='padding-left:10px'><?php include("memprotect.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?Php include("include/innerheadersection.php"); ?>

<script language="javascript" type="text/javascript">

function addphotovalidation()

{

	if(document.addphoto.addpho.value == "")

	{

		alert("Kindly Select Photo.");

		document.addphoto.addpho.focus();

		return false;

	}

	if(document.addphoto.addpho.value != "")

	{

		var photoname = document.addphoto.addpho.value;

		var explodephoto = photoname.split(".");

//		alert(explodephoto[1]);

		if((explodephoto[1] != "jpg") && (explodephoto[1] != "jpeg") && (explodephoto[1] != "png") && (explodephoto[1] != "gif"))

		{

			alert("Kindly select valid image format");

			return false;

		}

	}

	return true;

}

</script>

</head>



<body>

<?php



define( 'WATERMARK_MARGIN_ADJUST', 5 );

define( 'WATERMARK_FONT_REALPATH', '' );





  function render_text_on_gd_image( &$source_gd_image, $text, $font, $size, $color, $opacity, $rotation, $align )

  {

    $source_width = imagesx( $source_gd_image );

    $source_height = imagesy( $source_gd_image );

  

    $bb = imagettfbbox_fixed( $size, $rotation, $font, $text );

  

    $x0 = min( $bb[ 0 ], $bb[ 2 ], $bb[ 4 ], $bb[ 6 ] ) - WATERMARK_MARGIN_ADJUST;

    $x1 = max( $bb[ 0 ], $bb[ 2 ], $bb[ 4 ], $bb[ 6 ] ) + WATERMARK_MARGIN_ADJUST;

    $y0 = min( $bb[ 1 ], $bb[ 3 ], $bb[ 5 ], $bb[ 7 ] ) - WATERMARK_MARGIN_ADJUST;

    $y1 = max( $bb[ 1 ], $bb[ 3 ], $bb[ 5 ], $bb[ 7 ] ) + WATERMARK_MARGIN_ADJUST;



    $bb_width = abs( $x1 - $x0 );

    $bb_height = abs( $y1 - $y0 );



    switch ( $align )

    {

      case 11:

        $bpy = -$y0;

        $bpx = -$x0;

        break;

      case 12:

        $bpy = -$y0;

        $bpx = $source_width / 2 - $bb_width / 2 - $x0;

        break;

      case 13:

        $bpy = -$y0;

        $bpx = $source_width - $x1;

        break;

      case 21:

        $bpy = $source_height / 2 - $bb_height / 2 - $y0;

        $bpx = -$x0;

        break;

      case 22:

        $bpy = $source_height / 2 - $bb_height / 2 - $y0;

        $bpx = $source_width / 2 - $bb_width / 2 - $x0;

        break;

      case 23:

        $bpy = $source_height / 2 - $bb_height / 2 - $y0;

        $bpx = $source_width - $x1;

        break;

      case 31:

        $bpy = $source_height - $y1;

        $bpx = -$x0;

        break;

      case 32:

        $bpy = $source_height - $y1;

        $bpx = $source_width / 2 - $bb_width / 2 - $x0;

        break;

      case 33;

        $bpy = $source_height - $y1;

        $bpx = $source_width - $x1;

        break;

    }

  

    $alpha_color = imagecolorallocatealpha(

      $source_gd_image,

      hexdec( substr( $color, 0, 2 ) ),

      hexdec( substr( $color, 2, 2 ) ),

      hexdec( substr( $color, 4, 2 ) ),

      127 * ( 100 - $opacity ) / 100

    );

  

    return imagettftext( $source_gd_image, $size, $rotation, $bpx, $bpy, $alpha_color, WATERMARK_FONT_REALPATH . $font, $text );

  }



  //----------------------------------------------------------------

  // imagettfbbox_fixed

  // FIX FOR THE BUGGY IMAGETTFBBOX IMPLEMENTATION IN GD LIBRARY

  //----------------------------------------------------------------



  function imagettfbbox_fixed( $size, $rotation, $font, $text )

  {

    $bb = imagettfbbox( $size, 0, WATERMARK_FONT_REALPATH . $font, $text );

    $aa = deg2rad( $rotation );

    $cc = cos( $aa );

    $ss = sin( $aa );

    $rr = array( );

    for( $i = 0; $i < 7; $i += 2 )

    {

      $rr[ $i + 0 ] = round( $bb[ $i + 0 ] * $cc + $bb[ $i + 1 ] * $ss );

      $rr[ $i + 1 ] = round( $bb[ $i + 1 ] * $cc - $bb[ $i + 0 ] * $ss );

    }

    return $rr;

  }

  

  

  

  define( 'WATERMARK_OUTPUT_QUALITY', 110 );



  function create_watermark_from_string( $source_file_path, $output_file_path, $text, $font, $size, $color, $opacity, $rotation, $align )

  {

    list( $source_width, $source_height, $source_type ) = getimagesize( $source_file_path );



    if ( $source_type === NULL )

    {

      return false;

    }



    switch ( $source_type )

    {

      case IMAGETYPE_GIF:

        $source_gd_image = imagecreatefromgif( $source_file_path );

        break;

      case IMAGETYPE_JPEG:

        $source_gd_image = imagecreatefromjpeg( $source_file_path );

        break;

      case IMAGETYPE_PNG:

        $source_gd_image = imagecreatefrompng( $source_file_path );

        break;

      default:

        return false;

    }



    render_text_on_gd_image( $source_gd_image, $text, $font, $size, $color, $opacity, $rotation, $align );



    imagejpeg( $source_gd_image, $output_file_path, WATERMARK_OUTPUT_QUALITY );

    imagedestroy( $source_gd_image );

  }

  

  define( 'UPLOADED_IMAGE_DESTINATION', 'originals/' );

  define( 'PROCESSED_IMAGE_DESTINATION', 'verify_profile/' );

  

  function process_image_upload( $Field )

  {

    $temp_file_path = $_FILES[ $Field ][ 'tmp_name' ];

    $temp_file_name = $_FILES[ $Field ][ 'name' ];

    

    list( , , $temp_type ) = getimagesize( $temp_file_path );

    

    if ( $temp_type === NULL )

    {

      return false;

    }

    

    switch ( $temp_type )

    {

      case IMAGETYPE_GIF:

        break;

      case IMAGETYPE_JPEG:

        break;

      case IMAGETYPE_PNG:

        break;

      default:

        return false;

    }

    $temp_file_name = $_SESSION['matriid']."_".$Field;

    $uploaded_file_path = UPLOADED_IMAGE_DESTINATION . $temp_file_name;

    $processed_file_path = PROCESSED_IMAGE_DESTINATION . preg_replace( '/\\.[^\\.]+$/', '.jpg', $temp_file_name );

    

    move_uploaded_file( $temp_file_path, $uploaded_file_path );


mysql_query("INSERT INTO `verify_profile` (`matriid`, `img`, `approved`) VALUES ('".$_SESSION['matriid']."', '".$temp_file_name."', '0');");

		  echo "<script>

		  			opener.window.location.href = 'verify_profile.php';

					window.close();

				</script>";

 

    //----------------------------------------------------------------

    // PARAMETER DESCRIPTION

    // (1) SOURCE FILE PATH

    // (2) OUTPUT FILE PATH

    // (3) THE TEXT TO RENDER

    // (4) FONT NAME -- MUST BE A *FILE* NAME

    // (5) FONT SIZE IN POINTS

    // (6) FONT COLOR AS A HEX STRING

    // (7) OPACITY -- 0 TO 100

    // (8) TEXT ANGLE -- 0 TO 360

    // (9) TEXT ALIGNMENT CODE -- POSSIBLE VALUES ARE 11, 12, 13, 21, 22, 23, 31, 32, 33

    //----------------------------------------------------------------



    $result = create_watermark_from_string(

      $uploaded_file_path,

      $processed_file_path,

      $sitename,

      'arial.ttf',

      30,

      'ECE9D8',

      30,

      0,

      30

    );

    

    if ( $result === false )

    {

      return false;

    }

    else

    {

      return array( $uploaded_file_path, $processed_file_path );

    }

  }



  //----------------------------------------------------------------

  // END OF FUNCTIONS

  //----------------------------------------------------------------



  $result = process_image_upload( 'addpho' );



  if ( $result === false )

  {

   // echo '<br>An error occurred during file processing.';

  }

  else

  {

   // echo '<br>Original image saved as <a href="' . $result[ 0 ] . '" target="_blank">' . $result[ 0 ] . '</a>';
$img = $result[1];


	
	


  }

  $img = 'ph1.jpg';

 /* 

if($photo != "")

{

	$photoname = $_SESSION['matriid']."_".$_FILES["addpho"]["name"];

	if (file_exists("photoalbum/" . $photoname))

      {

    	  $msg = $photoname . " already exists. ";

      }

    else

      {

	      move_uploaded_file($_FILES["addpho"]["tmp_name"],"photoalbum/" . $photoname);

		  mysql_query("INSERT INTO photoalbum(matriid,imagename,status) VALUES('".$_SESSION['matriid']."','".$photoname."','InActive')");

		  echo "<script>

		  			opener.window.location.href = 'managephotoalbum.php';

					window.close();

				</script>";

      }

}*/

?>
<div id="inner_right">
<div class="profiledetails">
        
        <table cellspacing="10" cellpadding="10" border="0" width="100%">
  <tbody><tr>
    <td width="50%">
    
    <ul class="alerts">
	<li style="background-color: #A50050;
    height: 30px;
    padding-left: 100px;
    padding-top: 10px;"> <b><font color="#FFFFFF" size="2px">Instructions</b></font>  </li>
	<li style="height:500px;padding-left:5px;font-size:13px"><br />
	Profile verification is a process to help weed
out fakes and frauds using a custom photo that
only you can provide.<br />
Only our staff will see this photo.
<font color="#A50050"><b>it will not appear on your profile. </b></font><br />
Your profile will display a <?php echo $sitename; ?> to
let others know you completed this process.<br /><br />
Just follow these simple steps:<br /><br />
 * Hand writes your <?php echo $sitename; ?> Member ID (56384) in
dark ink on a piece of paper<br /><br />
 * Take a picture of yourself holding the paper
  with your face, hands, and paper clearly visible.<br />
 * Upload this photo using the fields below.


 
<form name="addphoto" id="addphoto" method="post" enctype="multipart/form-data">

<table border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" width="90%" align="center">
<tr> <td> </td></tr>
<?php if($msg != "") { ?>

<tr>

<td colspan="2"><div align="center"><strong><?php echo $msg; ?></strong></div></td>
</tr>

<?php } ?>
<!--<div>
<img src="page.jpg"   width="650px"/> </div>-->

<tr >

<td colspan="2">  <div align="left"><font color="#A50050"><b>File path</b></font><br /> <input type="file" name="addpho" id="addpho" class="textbox1" style="height:24px;width:165px" 

/>
  </div></td>
</tr>

<tr>



<td colspan="2"><div align="left"> &nbsp; <strong>Image type must be .jpg, .jpeg, .png or .gif.</strong></div></td>
</tr>

<tr><td>	<input class="button-small square-orange uppercase float_right" style="float:none; clear:both; 

border:0px;" name="Submit" type="image" value="Submit" alt="Submit" onclick="return addphotovalidation();"></td>

<td>

<a style="width:128px; text-align:center;" class="button-small square-orange uppercase" href="mymatri.php">Go back to My Home</a></td></tr>
</table>

</form>
</li>

    </ul>
    
    </td>
    <td>
    
    <ul class="alerts">
	<li style="background-color: #A50050;
    height: 30px;
    padding-left: 70px;
    padding-top: 10px;"><b><font color="#FFFFFF" 

size="2px">Verification Photo</b></font> </li>
	<li style="height:500px;"><?  
	echo

"<div style='border:2px solid #A50050;width:250px;  border: 2px solid #A50050;
    margin-left: 13px;
    margin-top: 10px;
    width: 250px;'><img 

src='$site_url/$img' width='250px' height='250px'  align='center' 

border='2px'>
	
	</div>"?>
	<br /> <br /> <br /> 
	
	<span style="padding-left:10px"> <input  type="checkbox"  checked="checked"/> Face visible <br><br></span>
	<span style="padding-left:10px"> <input  type="checkbox"  checked="checked"/> Hand written Member Id Number <br><br></span>
	<span style="padding-left:10px"><input  type="checkbox" checked="checked" /> Clearly holding the paper <br><br></span>
	</li>
   
    </ul>
    
    
    
    
    </td>
  </tr>
</tbody></table>



</div>

</div>

</body>

</html></td>
                        </tr>
                      </table>
                  </div></td>
                </tr>
            </table></td>
          </tr>
        </table>
		</div>
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
      </div>
      <div class="banner_h_std"><img src="images/H_STD_BANNER.gif" width="468" height="80" /></div>
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
    </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>



<style>
hr {
    background-color: #ECDFD1;
    border-style: none;
    clear: both;
    height: 1px;
    margin-bottom: 8px;
    margin-top: 0 !important;
    width: 653px 0 !important;
}
.profiledetails {
    font-size: 12px;
}

#profiledetails, .profiledetails {
    background-color: #FFFBF8;
    border: 1px solid #FAD6A6;
    clear: both;
    display: block;
    font-size: 11px;
    height: auto;
    padding: 20px;
    width: 582px!important;
}
</style>
</body>
</html>
