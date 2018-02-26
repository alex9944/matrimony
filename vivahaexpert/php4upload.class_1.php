<?php

/*



- PHP4 Image upload script



*/



class imageupload

{

	//pblic variables

	var $path = '';

	var $errorStr = '';

	var $imgurl = '';



	//private variables

	var $_errors = array();

	var $_params = array();

	var $_lang = array();

	var $_maxsize = 1048576;



	var $_im_status = false;



	//public methods

	function imageupload ()

	{

		//require 'photouploadconfig.php';

		

if($_GET['Choice']=="1")

{ 			

require 'Photouploddir1.php';

}

elseif ($_GET['Choice']=="2")

{

require 'Photouploddir2.php';

}

elseif ($_GET['Choice']=="3")

{

require 'Photouploddir3.php';

}


elseif ($_GET['Choice']=="4")

{

require 'Photouploddir4.php';

}

elseif ($_GET['Choice']=="5")

{

require 'Photouploddir5.php';

}
elseif ($_GET['Choice']=="6")

{

require 'Photouploddir6.php';

}

elseif ($_GET['Choice']=="7")

{

require 'Photouploddir7.php';

}

elseif ($_GET['horoschoice']=="1")

{

require 'horosuploaddir.php';

}

		

		$this->_types = $types;

		$this->_lang = $lang;

		$this->_upload_dir = $upload_dir;

		$this->_maxsize = $maxsize;



		$this->path = $PHP_SELF;

		

		if (is_array($_FILES['__upload']))

		{

			$this->_params = $_FILES['__upload'];

			if (function_exists('exif_imagetype'))

				$this->_doSafeUpload();

			else

				$this->_doUpload();



			if (count($this->_errors) > 0)

				$this->_errorMsg();

		}

	}



	function allowTypes ()

	{

		$str = '';

		if (count($this->_types) > 0) {

			$str = 'Allowed types: (';

			$str .= implode(', ', $this->_types);

			$str .= ')';

		}



		return $str;

	}



	// private methods

	function _doSafeUpload ()

	{

		preg_match('/\.([a-zA-Z]+?)$/', $this->_params['name'], $matches);

		if (exif_imagetype($this->_params['tmp_name']) && in_array(strtolower($matches[1]), $this->_types))

		{

			if ($this->_params['size'] > $this->_maxsize)

				$this->_errors[] = $this->_lang['E_SIZE'];

			else

				$this->_im_status = true;



			if ($this->_im_status == true)

			{

				$ext = substr($this->_params['name'], -4);

				$this->new_name = md5(time()).$ext;

                

				

				define( 'WATERMARK_MARGIN_ADJUST', 5 );

	define( 'WATERMARK_FONT_REALPATH', '' );

	define( 'WATERMARK_OUTPUT_QUALITY', 110 );

	define( 'UPLOADED_IMAGE_DESTINATION', 'originals/' );

	define( 'PROCESSED_IMAGE_DESTINATION', $this->_upload_dir );

	

	

	$temp_file_path = $this->_params['tmp_name'];

	 $temp_file_name = $this->new_name;

    $uploaded_file_path = UPLOADED_IMAGE_DESTINATION . $temp_file_name;

    $processed_file_path = PROCESSED_IMAGE_DESTINATION . preg_replace( '/\\.[^\\.]+$/', '.jpg', $temp_file_name );

	

	move_uploaded_file( $temp_file_path, $uploaded_file_path );

	

	$this->_params['tmp_name'] = $temp_file_path;

	 $this->_upload_dir.$this->new_name =$uploaded_file_path;

	

	 $result = imageupload::create_watermark_from_string(

      $uploaded_file_path,

      $processed_file_path,

      $sitename,

      'HELVE6.TTF',

      46,

      'ECE9D8',

      75,

      0,

      32

    );

	

	 	

	$result = imageupload::process_image_upload( '__upload' );



 

	

				//move_uploaded_file($this->_params['tmp_name'], $this->_upload_dir.$this->new_name);



			 $this->imgurl = str_replace("originals","",$this->new_name); 

				

			//$this->imgurl = .$this->new_name;

				

				

			}

		}

		else

			$this->_errors[] = $this->_lang['E_TYPE'];

	}



	function _doUpload ()

	{

		preg_match('/\.([a-zA-Z]+?)$/', $this->_params['name'], $matches);

		if(in_array(strtolower($matches[1]), $this->_types))

		{

			if ($this->_params['size'] > $this->_maxsize)

				$this->_errors[] = $this->_lang['E_SIZE'];

			else

				$this->_im_status = true;



			if ($this->_im_status == true)

			{

				$ext = substr($this->_params['name'], -3);

				$this->new_name = md5(time()).$ext;

                 

				 

				 

				move_uploaded_file($this->_params['tmp_name'], $this->_upload_dir.$this->new_name);



				//$this->imgurl = 'http://'.$_SERVER['HTTP_HOST'].preg_replace('/\/([^\/]+?)$/', '/', $_SERVER['PHP_SELF']).$this->_upload_dir.'/'.$this->new_name;

				

		//$this->imgurl = ''.$this->_upload_dir.''.$this->new_name;

		$this->imgurl = ''.$this->new_name;

				

				//$this->imgurl = $this->_upload_dir.'/'.$this->new_name;

				

			}

		}

		else

			$this->_errors[] = $this->_lang['E_TYPE'];

	}



	function _errorMsg()

	{

		$this->errorStr = implode('<br />', $this->_errors);

	}

	

	function render_text_on_gd_image( &$source_gd_image, $text, $font, $size, $color, $opacity, $rotation, $align )

  {

    $source_width = imagesx( $source_gd_image );

    $source_height = imagesy( $source_gd_image );

  

    $bb = imageupload::imagettfbbox_fixed( $size, $rotation, $font, $text );

  

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



    imageupload::render_text_on_gd_image( $source_gd_image, $text, $font, $size, $color, $opacity, $rotation, $align );





    imagejpeg( $source_gd_image, $output_file_path, WATERMARK_OUTPUT_QUALITY );

    imagedestroy( $source_gd_image );

  }

  

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

	}

  

}



?>