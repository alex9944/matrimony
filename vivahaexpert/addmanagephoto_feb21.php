<?php include("memprotect.php"); ?>

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

  define( 'PROCESSED_IMAGE_DESTINATION', 'photoalbum/' );

  

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

mysql_query("INSERT INTO photoalbum(matriid,imagename,status) VALUES('".$_SESSION['matriid']."','".$temp_file_name."','InActive')");

		  echo "<script>

		  			opener.window.location.href = 'managephotoalbum.php';

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

      50,

      'ECE9D8',

      75,

      0,

      32

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

    //echo '<br>An error occurred during file processing.';

  }

  else

  {

    echo '<br>Original image saved as <a href="' . $result[ 0 ] . '" target="_blank">' . $result[ 0 ] . '</a>';

    echo '<br>Watermarked image saved as <a href="' . $result[ 1 ] . '" target="_blank">' . $result[ 1 ] . '</a>';

  }

  

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

<form name="addphoto" id="addphoto" method="post" enctype="multipart/form-data">

<table border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" width="90%" align="center">

<?php if($msg != "") { ?>

<tr>

<td colspan="2"><div align="center"><strong><?php echo $msg; ?></strong></div></td>

</tr>

<?php } ?>

<tr>

<td><div align="left">Select Photo</div></td>

<td><div align="left"> : <input type="file" name="addpho" id="addpho" class="textbox1" style="height:24px;" /></div></td>

</tr>

<tr>

<td><div align="left">&nbsp;</div></td>

<td><div align="left"> &nbsp; <strong>Image type must be .jpg, .jpeg, .png or .gif.</strong></div></td>

</tr>

<tr><td>&nbsp;</td>

<td><div align="left"><!--<input type="submit" name="submit" id="submit" value="Submit" onclick="return addphotovalidation();" /> &nbsp; <input type="button" name="close" id="close" value="Close" onclick="window.close();" />-->

	<input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Submit" alt="Submit" onclick="return addphotovalidation();">
	
	<input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Close" type="image" value="Close" alt="Close" onclick="window.close();">

</div></td></tr>

</table>

</form>

</body>

</html>