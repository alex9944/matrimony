<?php
error_reporting(E_ALL);
include('dbconnect.php');
$path  = '';
//$path  =  "http://localhost/numinousmatch/";

//if(isset($_POST['submit']))
 {
    ob_start();
    //include($path.'html2pdf/examples/res/exemple00.php');
	$id  = $_REQUEST['matri_id'];
	
	include('savehoroscope.php');
    $content = ob_get_clean();
	
	echo $arguments;

	//echo $content; exit;

    // convert in PDF
    require_once($path.'html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
//      $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple00.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
	
 }
?>