<?php //echo md5('123456'); exit; ?>
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<?Php include("include/metatag.php"); ?>

<!-- <script type="text/javascript" src="js/jquery-1.9.1.js"></script> -->
<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/jquery1.6.2_production.js"></script>
<script type="text/javascript" src="scripts/superfish.js"></script>
<!-- JS FOR SCROLLING NEWS TICKER ############################# -->
<script type="text/javascript" src="scripts/jquery.ticker.js"></script>

<script type="text/javascript" src="js/fancyzoom.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/template-home.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/news_ticker/ticker-style.css" rel="stylesheet" type="text/css" />

<!-- JS FOR SuperFish DropDown Menu ############################# -->
<link href="css/dropDownMenu/superfish.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">

body{
	font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;	/* Font to use */
	margin:0px;

}

.dhtmlgoodies_question{	/* Styling question */
	/* Start layout CSS */
	color:#FFF;
	font-size:0.9em;
	background-color:#317082;
	width:430px;
	margin-bottom:2px;
	margin-top:2px;
	padding-left:2px;
	background-image:url('images/bg_answer.gif');
	background-repeat:no-repeat;
	background-position:top right;
	height:20px;

	/* End layout CSS */

	overflow:hidden;
	cursor:pointer;
}
.dhtmlgoodies_answer{	/* Parent box of slide down content */
	/* Start layout CSS */
	border:1px solid #317082;
	background-color:#E2EBED;
	width:400px;

	/* End layout CSS */

	visibility:hidden;
	height:0px;
	overflow:hidden;
	position:relative;

}
.dhtmlgoodies_answer_content{	/* Content that is slided down */
	padding:1px;
	font-size:0.9em;
	position:relative;
}

</style>


<script language="javascript"> 
/*SCRIPT INITIALIZATION FOR DROPDOWN MENU###################### */ 
    $(document).ready(function(){ 
        $("ul.sf-menu").superfish(); 
		$('div.photo a').fancyZoom({scaleImg: true, closeOnClick: true});

		$('#medium_box_link').fancyZoom({width:400, height:300});

		$('#large_box_link').fancyZoom();

		$('#flash_box_link').fancyZoom();
    });
	
/* SCRIPT FOR SCROLLING NEWS TICKER ############################### */

    $(function () {
        $('#js-news').ticker();
    });

</script>

<!-- SLIDER FOR PROFESSIONAL SEARCH IMAGE SLIDER######################## -->
<link rel="stylesheet" href="css/slider.css">
<script src="scripts/jquery.easing.js"></script>
<script src="scripts/slides.min.jquery.js"></script>
<script language="javascript">
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 3000,
				pause: 2500,
				hoverPause: true
			});
		});
<!-- Function to OPEN NEW WINDOW FOR SITE TOUR -->		
function poponload()
{
    testwindow = window.open("site_tour/site_tour.html", "NuminousMatch_SiteTour", "resizable=0, menubar=0, toolbar=0, location=0,status=0,scrollbars=0,width=835,height=690");
    testwindow.moveTo(200, 200);
}
</script>


