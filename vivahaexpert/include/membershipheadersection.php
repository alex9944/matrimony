<?php include('include/metatag.php'); ?>
<link href="css/template.css" rel="stylesheet" type="text/css" media="all" />
<!-- JS FOR SuperFish DropDown Menu ############################# -->
<link href="css/dropDownMenu/superfish.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="scripts/jquery1.6.2_production.js"></script>
<script type="text/javascript" src="scripts/superfish.js"></script>

<script type="text/javascript" src="js/fancyzoom.min.js"></script>

<script language="javascript"> 
/*SCRIPT INITIALIZATION FOR DROPDOWN MENU###################### */ 
    $(document).ready(function(){ 
        $("ul.sf-menu").superfish(); 
		$('div.photo a').fancyZoom({scaleImg: true, closeOnClick: true});

		$('#medium_box_link').fancyZoom({width:400, height:300});

		$('#large_box_link').fancyZoom();

		$('#flash_box_link').fancyZoom();
		
		$("#btnBenifits").click(function () 
		{ 
		$("#upgradeCompare").slideDown("slow"); 
    	$("#upgrade").slideUp("slow");	
		});
		
		$("#btnCompare").click(function () 
		{ 
		$("#upgradeCompare").slideDown("slow"); 
    	$("#upgrade").slideUp("slow");	
		});
	
		$("#btnUpgrade").click(function () 
		{ 
		$("#upgradeCompare").slideUp("slow"); 
    	$("#upgrade").slideDown("slow");	
		});
	
	
	
	
    });
function gotonextpage(type,amt)
{
	window.location.href= 'paypal.php?type='+type+'&amt='+amt;
}
</script>

<link href="css/regis_mem_home.css" rel="stylesheet" type="text/css" />
<link href="css/payment.css" rel="stylesheet" type="text/css" />
<!-- START CHAT FILES -->
<link type="text/css" rel="stylesheet" media="all" href="chat/css/chat.css" />

							<link type="text/css" rel="stylesheet" media="all" href="chat/css/screen.css" />

<!--							<script type="text/javascript" src="chat/js/jquery.js"></script>
-->
							<script type="text/javascript" src="chat/js/chat.js"></script>
<!-- END CHAT FILES -->
