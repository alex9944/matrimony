<?Php include("include/metatag.php"); ?>






<link href="css/template.css" rel="stylesheet" type="text/css" media="all" />
<!-- JS FOR SuperFish DropDown Menu ############################# -->
<link href="css/dropDownMenu/superfish.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="scripts/jquery1.6.2_production.js"></script>

<link href="css/regis_mem_home.css" rel="stylesheet" type="text/css" />

<!-- START CHAT FILES -->
<link type="text/css" rel="stylesheet" media="all" href="chat/css/chat.css" />

							<link type="text/css" rel="stylesheet" media="all" href="chat/css/screen.css" />

							<script type="text/javascript" src="chat/js/jquery.js"></script>

							<script type="text/javascript" src="chat/js/chat.js"></script>
<!-- END CHAT FILES -->
<script type="text/javascript" src="scripts/superfish.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/fancyzoom.min.js"></script>
<script language="javascript"> 
/*SCRIPT INITIALIZATION FOR DROPDOWN MENU###################### */ 
    $(document).ready(function(){ 
        $("ul.sf-menu").superfish(); 
		$('div.photo a').fancyZoom({scaleImg: true, closeOnClick: true});

		$('#medium_box_link').fancyZoom({width:400, height:300});

		$('#large_box_link').fancyZoom();

		$('#flash_box_link').fancyZoom();
    });
	
</script>
   <script language="javascript" src="js/hide.js"></script>
   <link href="css/contact.css" rel="stylesheet" type="text/css" />
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function initShowHideDivs()
{     // Hidden value 
	var divs = document.getElementsByTagName('DIV');
	var divCounter = 1;
	for(var no=0;no<divs.length;no++){
		if(divs[no].className=='dhtmlgoodies_question'){
			divs[no].onclick = showHideContent;
			divs[no].id = 'dhtmlgoodies_q'+divCounter;
			var answer = divs[no].nextSibling;
			while(answer && answer.tagName!='DIV'){
				answer = answer.nextSibling;
			}
			answer.id = 'dhtmlgoodies_a'+divCounter;	
			contentDiv = answer.getElementsByTagName('DIV')[0];
			contentDiv.style.top = 0 - contentDiv.offsetHeight + 'px'; 	
			contentDiv.className='dhtmlgoodies_answer_content';
			contentDiv.id = 'dhtmlgoodies_ac' + divCounter;
			answer.style.display='none';
			answer.style.height='1px';
			divCounter++;
		}		
	}	
}
</script>

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


