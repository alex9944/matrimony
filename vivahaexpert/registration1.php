		
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<?Php 
 
		include("dbconnect.php");
  
		include("include/innerheadersection.php"); ?>
		<script type="text/javascript" src="js/ajax-dynamic-content.js"></script>
		<script type="text/javascript" src="js/ajax.js"></script>
		<script type="text/javascript" src="js/ajax-tooltip.js">





		</script>
		<link rel="stylesheet" href="css/ajax-tooltip.css" media="screen" type="text/css">
		<link rel="stylesheet" href="css/ajax-tooltip-demo.css" media="screen" type="text/css">
		<link rel="stylesheet" href="css/bubble-tooltip.css" media="screen">
		<style>

		#bubble_tooltip, #bubble_tooltip1{

		min-width:200px;
		max-width:300px;

		position:absolute;

		display:none;
		border:1px solid #000;
		background:#FFFAF4;
		margin-top:-20px;
		height:70px;

		}

		#bubble_tooltip .bubble_top, #bubble_tooltip1 .bubble_top1{

		/*background-image: url('images/bubble_top.gif');

		background-repeat:no-repeat;*/

		height:16px;
			

		}

		#bubble_tooltip .bubble_middle, #bubble_tooltip1 .bubble_middle2{

		/*background-image: url('images/bubble_middle.gif');

		background-repeat:repeat-y;	

		background-position:bottom left;*/

		padding-left:7px;

		padding-right:7px;
		height:70px;

		}

		#bubble_tooltip .bubble_middle span, #bubble_tooltip1 .bubble_middle1 span{

		position:relative;

		top:-8px;

		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;

		font-size:11px;

		}

		#bubble_tooltip1 .bubble_middle1
		{
		padding:5px;
		}

		#bubble_tooltip .bubble_bottom{

		width: 0; 
		height: 0; 
		border-color:#FFFAF4;
		border-left: 10px solid transparent;
		border-right: 10px solid transparent;
		border-top: 10px solid #000;

		font-size: 0;

		line-height: 0;
		position:relative;
		margin:-15px 0 0 50px;


		}

		#bubble_tooltip1 .bubble_bottom1{

		width: 0; 
		height: 0; 
		border-color:#FFFAF4;
		border-left: 10px solid transparent;
		border-right: 10px solid transparent;
		border-top: 10px solid #000;

		font-size: 0;

		line-height: 0;
		position:relative;
		margin:-3px 0 0 50px;


		}





		/*#bubble_tooltip1{

		width:147px;

		position:absolute;

		display:none;

		}

		#bubble_tooltip1 .bubble_top1{

		background-image: url('images/bubble_top.gif');

		background-repeat:no-repeat;

		height:16px;	

		}

		#bubble_tooltip1 .bubble_middle1{

		background-image: url('images/bubble_middle.gif');

		background-repeat:repeat-y;	

		background-position:bottom left;

		padding-left:7px;

		padding-right:7px;

		}

		#bubble_tooltip1 .bubble_middle1 span{

		position:relative;

		top:-8px;

		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;

		font-size:11px;

		}

		#bubble_tooltip1 .bubble_bottom1{

		background-image: url('images/bubble_bottom.gif');

		background-repeat:no-repeat;

		background-repeat:no-repeat;	

		height:44px;

		position:relative;

		top:-6px;

		}*/







		</style>
		<style type="text/css">
		#bubble_tooltip2, #bubble_tooltip3{

		min-width:200px;
		max-width:300px;

		position:absolute;

		display:none;
		border:1px solid #000;
		background:#FFFAF4;
		margin-top:-20px;
		height:70px;

		}
		#bubble_tooltip3{
		height:70px;
		padding:7px;
		}
		#bubble_tooltip2{
		height: 35px;
		margin-top: -20px;
		padding: 5px;
		width:215px;
		}
		#bubble_tooltip2 .bubble_top2, #bubble_tooltip3 .bubble_top3{

		/*background-image: url('images/bubble_top.gif');

		background-repeat:no-repeat;*/

		height:16px;
			

		}

		#bubble_tooltip2 .bubble_middle2, #bubble_tooltip3 .bubble_middle3{

		/*background-image: url('images/bubble_middle.gif');

		background-repeat:repeat-y;	

		background-position:bottom left;*/

		padding-left:7px;

		padding-right:7px;
		height:70px;
		padding:10px;

		}

		#bubble_tooltip3 .bubble_middle3 span, #bubble_tooltip3 .bubble_middle3 span{

		position:relative;

		top:-8px;

		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;

		font-size:11px;

		}

		#bubble_tooltip2 .bubble_middle2
		{
		padding:5px;
		}

		#bubble_tooltip2 .bubble_bottom2, #bubble_tooltip2 .bubble_bottom{

		width: 0; 
		height: 0; 
		border-color:#FFFAF4;
		border-left: 10px solid transparent;
		border-right: 10px solid transparent;
		border-top: 10px solid #000;

		font-size: 0;

		line-height: 0;
		position:relative;
		margin:10px 0 0 50px;


		}

		#bubble_tooltip3 .bubble_bottom3,  #bubble_tooltip3 .bubble_bottom{

		width: 0; 
		height: 0; 
		border-color:#FFFAF4;
		border-left: 10px solid transparent;
		border-right: 10px solid transparent;
		border-top: 10px solid #000;

		font-size: 0;

		line-height: 0;
		position:relative;
		margin:0px 0 0 50px;


		}
		</style>
		<!--<style>

		#bubble_tooltip{

		min-width:200px;
		max-width:300px;

		position:absolute;

		display:none;
		border:1px solid #000;
		background:#FFFAF4;
		margin-top:-20px;
		height:70px;
		/*border-radius:10px;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px*/;

		}

		#bubble_tooltip .bubble_top{

		/*background-image: url('images/bubble_top.gif');

		background-repeat:no-repeat;*/

		height:16px;
			

		}

		#bubble_tooltip .bubble_middle{

		/*background-image: url('images/bubble_middle.gif');

		background-repeat:repeat-y;	

		background-position:bottom left;*/

		padding-left:7px;

		padding-right:7px;
		height:70px;

		}

		#bubble_tooltip .bubble_middle span{

		position:relative;

		top:-8px;

		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;

		font-size:11px;

		}

		#bubble_tooltip .bubble_bottom{

		/*background-image: url('images/bubble_bottom.gif');

		background-repeat:no-repeat;

		background-repeat:no-repeat;*/	

		width: 0; 
		height: 0; 
		border-color:#FFFAF4;
		border-left: 10px solid transparent;
		border-right: 10px solid transparent;
		border-top: 10px solid #000;

		font-size: 0;

		line-height: 0;
		position:relative;
		margin:-15px 0 0 50px;

		/*height:44px;

		position:relative;

		top:-6px;*/

		}







		#bubble_tooltip1{

		width:147px;

		position:absolute;

		display:none;

		}

		#bubble_tooltip1 .bubble_top1{

		background-image: url('images/bubble_top.gif');

		background-repeat:no-repeat;

		height:16px;	

		}

		#bubble_tooltip1 .bubble_middle1{

		background-image: url('images/bubble_middle.gif');

		background-repeat:repeat-y;	

		background-position:bottom left;

		padding-left:7px;

		padding-right:7px;

		}

		#bubble_tooltip1 .bubble_middle1 span{

		position:relative;

		top:-8px;

		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;

		font-size:11px;

		}

		#bubble_tooltip1 .bubble_bottom1{

		background-image: url('images/bubble_bottom.gif');

		background-repeat:no-repeat;

		background-repeat:no-repeat;	

		height:44px;

		position:relative;

		top:-6px;

		}







		</style>-->
		<?php /*?>

		<style>

		#bubble_tooltip{

		width:147px;

		position:absolute;

		display:none;

		}

		#bubble_tooltip .bubble_top{

		background-image: url('images/bubble_top.gif');

		background-repeat:no-repeat;

		height:16px;	

		}

		#bubble_tooltip .bubble_middle{

		background-image: url('images/bubble_middle.gif');

		background-repeat:repeat-y;	

		background-position:bottom left;

		padding-left:7px;

		padding-right:7px;

		}

		#bubble_tooltip .bubble_middle span{

		position:relative;

		top:-8px;

		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;

		font-size:11px;

		}

		#bubble_tooltip .bubble_bottom{

		background-image: url('images/bubble_bottom.gif');

		background-repeat:no-repeat;

		background-repeat:no-repeat;	

		height:44px;

		position:relative;

		top:-6px;

		}







		#bubble_tooltip1{

		width:147px;

		position:absolute;

		display:none;

		}

		#bubble_tooltip1 .bubble_top1{

		background-image: url('images/bubble_top.gif');

		background-repeat:no-repeat;

		height:16px;	

		}

		#bubble_tooltip1 .bubble_middle1{

		background-image: url('images/bubble_middle.gif');

		background-repeat:repeat-y;	

		background-position:bottom left;

		padding-left:7px;

		padding-right:7px;

		}

		#bubble_tooltip1 .bubble_middle1 span{

		position:relative;

		top:-8px;

		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;

		font-size:11px;

		}

		#bubble_tooltip1 .bubble_bottom1{

		background-image: url('images/bubble_bottom.gif');

		background-repeat:no-repeat;

		background-repeat:no-repeat;	

		height:44px;

		position:relative;

		top:-6px;

		}







		</style>

		<?php */?>
		<script src="js/register.js" language="javascript"></script>
		<script language="javascript" src="js/timepicker.js"></script>
		<script language="javascript" src="js/advanced_search_locations.js" type="text/javascript"> </script>
		<!--<script language="javascript" src="js/relcaste.js"></script>-->
		<script language="javascript">

			// Check Area Code
			if ( document.getElementById('txtAC1').value == "" )
			{
				alert( "Please enter your Area Code." );
				document.getElementById('txtAC1').focus( );
				return false;
			}

		function check_phone(field_name){





		var i, max, field_info



		field_info = eval("document.MatriForm." + field_name);





		max = field_info.value.length;











		for (i = 0; i < max; i++)















		{































































			if(isNaN(field_info.value.charAt(i)))































































			{































































				alert("You Must Enter A Number.");































































				field_info.value = "";































































				field_info.focus();































































				return false;































































			}

































































		}































































				return true;































































		}































































































































		var caste=new Array();































































		caste["Hindu"] = ["6000 Niyogi", "96K Kokanastha", "24 Manai Chettiar", "24 Manai Telugu-8 Veedu", "24 Manai Telugu-16 Veedu", "Ad Dharmi", "Adi Dravida", "Agarwal", "Agnikul Kshatriya", "Ambalavasi", "Andipandaram", "Arunthathiyar", "Arora", "Arya Vysya", "Arya Samaj", "Baduga", "Balija Naidu", "Baniya", "Bahi", "Bengali", "Besta", "Bhandari", "Boyer", "Brahmin", "Brahmin-Anavil", "Brahmin-Bhatt", "Brahmin-Bhumihar", "Brahmin-Dhiman", "Brahmin-Devadnya", "Brahmin-Dravida", "Brahmin-Garhwali", "Brahmin-Gaur", "Brahmin-Goswami", "Brahmin-Gurukkal", "Brahmin-Iyengar", "Brahmin-Iyer", "Brahmin-Kanyakubj", "Brahmin-Kumoani", "Brahmin-Madhwa", "Brahmin-Maithil", "Brahmin-Namboodiri", "Brahmin-Niyogi", "Brahmin-Pandit", "Brahmin-Sakaldwipi", "Brahmin-Sanadya", "Brahmin-Saraswat", "Brahmin-Saryuparin", "Brahmin-Smartha", "Brahmin-Sri Vishnava", "Brahmin-Tyagi", "Brahmin-Vaidiki", "Chamar", "Chandravanshi Kahar", "Chaudary", "Chaurasia", "Chettiar", "Chhetri", "Coorgi", "Devandra Kula Vellalar", "Devanga", "Devanga Chettiar", "Dheevara", "Dhobi", "Ezhava", "Ezhuthachan", "Gandla", "Garhwali", "Gavara Naidu", "Gavura Naidu", "Goan", "Goud", "Gounder", "Gowda", "Gupta", "Intercaste", "Jaiswal", "Jat", "Jangumar", "Kadava Patel", "Kalar", "Kalinga", "Kalwar", "Kamboj", "Kamma", "Kammavar Naidu", "Kapu", "Karuneegar", "Kashyap", "Kayastha", "Khandelwal", "Khatri", "Kongu Vellala Gounder", "Kori", "Kshatriya", "Kudumbi", "Kulalar", "Kumhar", "Kummari", "Kuravar", "Kumawat", "Kumbara", "Kunbi", "Kurmi Kshatriya", "Kuruba", "Kurumbar", "Leva Patel", "Lingayath", "Lohana", "Malayalee Variar", "Malayalee Namboodiri", "Madiga", "Mahajan", "Mahar", "Mahendra", "Maheshwari", "Mala", "Mali", "Malla", "Mapila", "Maratha", "Maruthuvar", "Meena", "Meenavar", "Mehra", "Meru Darji", "Mudaliyar", "Mudiraj", "Mukkulathor", "Munnuru Kapu", "Muthuraja", "Nagar Brahmin", "Nadar", "Nai", "Naicker", "Naidu", "Nair", "Nair Vaniya", "Nambiar", "Nepali", "Nus-Jat", "Oswal", "Others", "Padmasali", "Pal", "Pandaram", "Panicker", "Parkava Kulam", "Pasi", "Patel", "Patel Kadva", "Patel Leva", "Patnaick", "Perika", "Pillai", "Prajapati", "Rajaka", "Rajput", "Rawat", "Reddy", "Sahu", "Saini", "Saliya", "SC", "Senai Thalaivar", "Settibalija", "Sindhi", "Sindhi-Amil", "Sindhi-Baibhand", "Sindhi-Bhanusali", "Sindhi-Bhatia", "Sindhi-Brahmin", "Sindhi-Chhapru", "Sindhi-Dadu", "Sindhi-Hyderabadi", "Sindhi-Intercaste", "Sindhi-Larai", "Sindhi-Larkana", "Sindhi-Lohana", "Sindhi-Rohiri", "Sindhi-Sahiti", "Sindhi-Sakkhar", "Sindhi-Sehwani", "Sindhi-Shikarpuri", "Sindhi-Thatai", "Sonar", "Sozhiya Vellalar", "Sourashtra", "Sutar", "Swarnakar", "ST", "Tamil Yadava", "Teli", "Teluga", "Thevar", "Thakur", "Thiyya", "Udayar", "Uppara", "Vaddera", "Vaishnav", "Vaishnava", "Vaishya", "Valluvar", "Valmiki", "Vanjara", "Vannar", "Vannia Kula Kashatriyar", "Vanniar", "Vaniya chettiar", "Veera Saivam", "Velama", "Vellalar", "Veluthedathu Nair", "Vilakkithala Nair", "Viswabrahmin", "Viswakarma", "Vokkaliga", "Yadav", "Yogeeswarar"];































































		caste["Muslim"] = ["Ansari", "Arain", "Awan", "Bohra", "Dekkani", "Dudekula", "Hanafi", "Intercaste", "Jat", "Khoja", "Lebbai", "Malik", "Mapila", "Maraicar", "Memon", "Mughal", "Others", "Pathan", "Qureshi", "Rajput", "Rowther", "Shafi", "Sheikh", "Shia", "Siddiqui", "Sunni Syed", "Unspecified"];































































		caste["Christian"] = ["Born Again", "Bretheren", "Catholic CMS", "CSI", "Evangelist", "Intercaste", "Jacobite", "Knanaya", "Knanaya Catholic", "Knanaya Jacobite", "Latin Catholic", "Malankara", "Marthoma", "Nadar", "Others", "Pentacost", "Protestant", "Roman Catholic", "Syrian", "Syrian Catholic", "Syrian Jacobite", "Syrian Orthodox", "Syro Malabar", "Unspecified"];































































		caste["Jain"] = ["Agarwal", "Bania", "Intercaste", "Intercate", "Jaiswal", "Khandelwal", "Kutchi", "No Bar", "Oswal", "Others", "Porwal", "Unspecified", "Vaishya"];































































		caste["Sikh"] = ["Ahluwalia", "Arora", "Bhatia", "Clean Shaven", "Ghumar", "Gursikh", "Intercaste", "Intercaste", "Jat", "Kamboj", "Khatri", "Kshatriya", "Lubana", "Majabi", "Ramgharia", "No Bar"];































































		caste["Parsi"]=["Parsi", "Intercaste", "Irani"];































































































































































































		function get_caste(obj,show_default){































































































































			var sel_caste = '';































































































































			var sel_religion	= obj.options[obj.selectedIndex].text;































































			var caste_obj		= obj.form.elements["caste"];































































			//CLEAN CASTE SELECT BOX































































			while ( caste_obj.options.length ) caste_obj.options[0] = null;































































































































			//ADD FIRST SELECT OPTION



























































		caste_obj.options[0]=new Option("Select","Select",true);



			//caste_obj.options[0]=new Option("Does not matter","Does not matter",true);































































































































































































			//ADD CASTE OPTIONS FOR SELECTED RELIGION































































			//if(obj.selectedIndex>0){































































				for(j=0;j<caste[sel_religion].length;j++){































































					//NOT TO INCLUDE OPTIONS HAVING NULL VALUES































































					if(caste[sel_religion][j]!=""){































































						var caste_val = caste[sel_religion][j]=="Select"?"Select":caste[sel_religion][j];































































						var def_sel   = (sel_caste == caste_val) ? true : false;































































		                caste_obj.options[j+1] = new Option(caste[sel_religion][j], caste_val, true, def_sel);































































































































					}































































				}































































			//}































































































































		}































































		function loadvalues()































				 {































					enb('country');































					select_field('country','');































					select_field('state','');































					enb('state');































					select_field('city','');































				 }















































		function chkmail()















		{


		 




		if(document.getElementById('EMAIL').value!=''){







		mail=document.getElementById('EMAIL').value;















		$.post('functions.php?target=chk_mail',{mail:mail}, function(data) {







		if(data!=''){







		//  document.getElementById('msg').innerHTML=data;







		alert(data);







		document.getElementById('EMAIL').focus( );







		return false;







		}







		});







		}else{







		return true;







		}







		}















		</script>
		</head>
		<body onload="DrawCaptcha();">

		
		<!-- HEADER STARTS HERE ###################################################  -->
		<?Php include("include/menu.php"); ?>
		
		<!-- HEADER ENDS HERE ###################################################  -->
		<!-- CONTENT AREA STARTS HERE ###################################################  -->
		<!-- BREADCRUMBS STARTS HERE #####################################  -->
		
		<!-- BREADCRUMBS ENDS HERE ########################################  -->
		<div id="content_area">
			
		<div id="inner_right" style="width:100%!important">
		  <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
		 
		  
		    <!--// -->
		    <center>
		    	<div class="col-md-12">
                    <h2>Registration Page</h2>
              	</div>
            </center>  	
		      <form action="registration2.php" method="post" name="MatriForm" id="MatriForm" onSubmit=" return Validate(); "  class="form-horizontal" role="form" style="margin-left:30%;">
                        <div class="form-group">
                        	<div class="col-md-10">
                            <input name="txtName" type="text"  value="<?=$_SESSION['Name']?>" class="form-control"  id="txtName"  size="40" maxlength="40" style="width:60%;  float: left;" Placeholder="Name"/>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-2">
                           	<label>*Gender</label>
                           </div>
                           <div class="col-md-10">
                              <input name="txtGender" value="Male" type="radio" <? if($_SESSION['Gender'] == "Male") { ?> checked="checked" <? } ?> />
		                  Male   					&nbsp;
		                  <input name="txtGender" value="Female" type="radio" <? if($_SESSION['Gender'] == "Female") { ?> checked="checked" <? } ?>/>
		                  Female 
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-2">
                           	<label>* Date of Birth</label>
                           </div>
                           <div class="col-md-10">
                            	<?$db = explode("-",$_SESSION['DateofBirth']);?>
		                  <select name="dobMonth" class="form-control col-md-2" style="width:82px;"   id="example2" >
		                    <option value="" selected="selected" >-Month-</option>
		                    <option value="1" <? if($db[1] == 1) {?> selected="selected" <? } ?>>January</option>
		                    <option value="2" <? if($db[1] == 2) {?> selected="selected" <? } ?>>February</option>
		                    <option value="3" <? if($db[1] == 3) {?> selected="selected" <? } ?> onclick="" >March</option>
		                    <option value="4" <? if($db[1] == 4) {?> selected="selected" <? } ?>>April</option>
		                    <option value="5" <? if($db[1] == 5) {?> selected="selected" <? } ?>>May</option>
		                    <option value="6" <? if($db[1] == 6) {?> selected="selected" <? } ?>>June</option>
		                    <option value="7" <? if($db[1] == 7) {?> selected="selected" <? } ?>>July</option>
		                    <option value="8" <? if($db[1] == 8) {?> selected="selected" <? } ?>>August</option>
		                    <option value="9" <? if($db[1] == 9) {?> selected="selected" <? } ?>>September</option>
		                    <option value="10" <? if($db[1] == 10) {?> selected="selected" <? } ?>>October</option>
		                    <option value="11" <? if($db[1] == 11) {?> selected="selected" <? } ?>>November</option>
		                    <option value="12" <? if($db[1] == 12) {?> selected="selected" <? } ?>>December</option>
		                  </select>
		                  <select  name="dobDay" class="form-control col-md-2" style="width:57px;"  id="example3"   >
		                    <option value="1" selected="selected">-Date-</option>
		                    <?php for($date=1;$date<=31;$date++) { ?>
		                    <option value="<?php echo $date;?>" <? if($db[2] == $date) {?> selected="selected" <? } ?>><?php echo $date;?></option>
		                    <?php } ?>
		                  </select>
		                  <script>

		function calculate_age() {

		// validate input



		yy = document.getElementById('example4').value.substr(2,3); 

		mm = document.getElementById('example2').value;

		dd = document.getElementById('example3').value;



		yy = parseInt(yy,10);

		mm = parseInt(mm,10);

		dd = parseInt(dd,10);   

		if(isNaN(dd) || isNaN(mm) || isNaN(yy)) { return 0; }   

		if((dd < 1 || dd > 31) || (mm < 1 || mm > 12)) { return 0; }



		// change human inputted month to javascript equivalent 

		mm = mm - 1;



		// get today's date

		var today = new Date();

		var t_dd = today.getDate();

		var t_mm = today.getMonth();

		var t_yy = today.getFullYear(); 



		// We are using last two digits, so make a guess of the century 

		if(yy == 0) { yy = "00"; }

		else if(yy < 9) { yy = "0"+yy; }    

		yy = (today.getFullYear() < "20"+yy ? "19"+yy : "20"+yy);



		// Work out the age!

		var age = t_yy - yy - 1; // Starting point

		if( mm < t_mm ) { age++;} // If it's past their birth month

		if( mm == t_mm && dd <= t_dd) { age++; } // If it's past their birth day



		 

		document.getElementById('age').value=age;





		 

		}

		</script>
		                  <select name="dobYear" class="form-control" style="width:76px;" onChange="calculate_age();" id="example4"  >
		                    <option value="0" selected="selected">-Year-</option>
		                    <?php for($year=(date("Y") - 18);$year > (date('Y')-60);$year--) { ?>
		                    <option value="<?php echo $year;?>" <? if($db[0] == $year) {?> selected="selected" <? } ?>><?php echo $year;?></option>
		                    <?php } ?>
		                  </select>
		                  &nbsp;&nbsp;or&nbsp;
		                  <input type="text" name="age" value="<?=$_SESSION['age']?>" id="age" size="3"  >
		                  yrs 
                            </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-2">
                           	<label>* Marital Status</label>
                           </div>
                           <div class="col-md-10">
                              <script> 
								function do_hide()
								{
								var x=document.getElementById("NOOFCHILDREN")
								x.disabled=true;
								document.getElementById('CHILDLIVINGWITHME').disabled = true;
								document.getElementById('NOTLIVINGWITHME').disabled = true;  
								}
								function do_hide2()
								{
								var x=document.getElementById("NOOFCHILDREN")
								x.disabled=false;
								}
		function do_hide3(val) {
		if(val!=0) {
		document.getElementById('CHILDLIVINGWITHME').disabled = false;
		document.getElementById('NOTLIVINGWITHME').disabled = false;
		} else{
		document.getElementById('CHILDLIVINGWITHME').disabled = true;
		document.getElementById('NOTLIVINGWITHME').disabled = true;
		}
		}
		</script>
		                  <input name="MARITAL_STATUS" onclick="do_hide()" value="1" type="radio"  <? if($_SESSION['MaritalStatus'] == 'Unmarried') { ?> checked="checked" <? } ?>/>
		                  Unmarried &nbsp;
		                  <input name="MARITAL_STATUS" onclick="do_hide2()" value="2" type="radio" <? if($_SESSION['MaritalStatus'] == 'Widow/Widower') { ?> checked="checked" <? } ?> />
		                  Widow/Widower &nbsp;
		                  <input name="MARITAL_STATUS" onclick="do_hide2()" value="3" type="radio" <? if($_SESSION['MaritalStatus'] == 'Divorcee') { ?> checked="checked" <? } ?>  />
		                  Divorcee &nbsp;
		                  <input name="MARITAL_STATUS" onclick="do_hide2()" value="4" type="radio" <? if($_SESSION['MaritalStatus'] == 'Separated') { ?> checked="checked" <? } ?>   />
		                  Separated 
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <select style="width:60%;"  class="form-control" name="NOOFCHILDREN" id="NOOFCHILDREN" onchange="do_hide3(this.value)">
		                    <option selected="" value="">No. of Children</option>
		                    <option value="0"  <? if($_SESSION['Strnochild'] == '0') { ?> selected="selected" <? } ?>>None</option>
		                    <option value="One"  <? if($_SESSION['Strnochild'] == 'One') { ?> selected="selected" <? } ?>>1</option>
		                    <option value="Two"  <? if($_SESSION['Strnochild'] == 'Two') { ?> selected="selected" <? } ?>>2</option>
		                    <option value="Three"  <? if($_SESSION['Strnochild'] == 'Three') { ?> selected="selected" <? } ?>>3</option>
		                    <option value="Four and above"  <? if($_SESSION['Strnochild'] == 'Four and above') { ?> selected="selected" <? } ?>>4 and above</option>
		                  </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-2">
                           	<label>Children Living Status</label>
                           </div>                              
                           <div class="col-md-10">
                               <input name="CHILDLIVINGWITHME"  id="CHILDLIVINGWITHME" value="Yes" type="radio"  

						  <? if($_SESSION['Strchildwithme'] == 'Yes') { ?> checked="checked"<? } ?>   />
		                  Living with me &nbsp;
		                  <input name="CHILDLIVINGWITHME" id="NOTLIVINGWITHME" onfocus="" value="No" type="radio" <? if($_SESSION['Strchildwithme'] == 'No') { ?> checked="checked" <? } ?>  />
		                  Not living with me 
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                             <script>

		function caste_resetRF(val){ 

		alertdo(val);

		document.getElementById('Language').selectedIndex = 0;

		}

		</script>
		              
		                  <select onchange="caste_resetRF(this.value);" class="form-control selectfield religion" style="width:60%;height: 34px; " size="1" id="religion" name="religion">
		                    <option selected="" value="0">Religion</option>
		                    <option value="1" <?php if($_SESSION['Religion'] == 1) { ?> selected="selected" <? } ?>>Hindu</option>
		                    <option value="2" <?php if($_SESSION['Religion'] == 2) { ?> selected="selected" <? } ?>>Muslim - Shia</option>
		                    <option value="3" <?php if($_SESSION['Religion'] == 3) { ?> selected="selected" <? } ?>>Muslim - Sunni</option>
		                    <option value="4" <?php if($_SESSION['Religion'] == 4) { ?> selected="selected" <? } ?>>Muslim - Others</option>
		                    <option value="5" <?php if($_SESSION['Religion'] == 5) { ?> selected="selected" <? } ?>>Christian - Catholic</option>
		                    <option value="6" <?php if($_SESSION['Religion'] == 6) { ?> selected="selected" <? } ?>>Christian - Orthodox</option>
		                    <option value="7" <?php if($_SESSION['Religion'] == 7) { ?> selected="selected" <? } ?>>Christian - Protestant</option>
		                    <option value="8" <?php if($_SESSION['Religion'] == 8) { ?> selected="selected" <? } ?>>Christian - Others</option>
		                    <option value="9" <?php if($_SESSION['Religion'] == 9) { ?> selected="selected" <? } ?>>Sikh</option>
		                    <option value="10" <?php if($_SESSION['Religion'] == 10) { ?> selected="selected" <? } ?>>Jain - Digambar</option>
		                    <option value="11" <?php if($_SESSION['Religion'] == 11) { ?> selected="selected" <? } ?>>Jain - Shwetambar</option>
		                    <option value="12" <?php if($_SESSION['Religion'] == 12) { ?> selected="selected" <? } ?>>Jain - Others</option>
		                    <option value="13" <?php if($_SESSION['Religion'] == 13) { ?> selected="selected" <? } ?>>Parsi</option>
		                    <option value="14" <?php if($_SESSION['Religion'] == 14) { ?> selected="selected" <? } ?>>Buddhist</option>
		                    <option value="15" <?php if($_SESSION['Religion'] == 15) { ?> selected="selected" <? } ?>>Inter-Religion</option>
		                    <option value="16" <?php if($_SESSION['Religion'] == 16) { ?> selected="selected" <? } ?>>No Religious Belief</option>
		                  </select>
                           </div>
                        </div>
                        <div class="form-group">
                                                              
                           <div class="col-md-10">
                           	<script>

		function do_request(val) {

		religion = $('select.religion option:selected').val(); 
		//religion1  = document.getElementById('religion').selectedIndex;
		//alert(religion + ' - '+religion1);
		//alert('generateCaste.php?lang='+val+'&rel='+religion);

		document.getElementById('caste_rel').innerHTML = "<img src='loading.gif'>";

		$.post('generateCaste.php?lang='+val+'&rel='+religion,'', function(data) {

		document.getElementById('caste_rel').innerHTML = "<img src='loading.gif'>";

		if(data!=''){



		document.getElementById('caste_rel').innerHTML = data;

		}});

		//return true;







		}

		</script>
		             
		                  <select onchange="do_request(this.value);" class="form-control selectfield" style="height: 34px;width:60%;" size="1" id="Language" name="Language">
		                    <option selected="" value="0">Mother tongue</option>
		                    <option value="1" <?php if($_SESSION['Mothertongue'] == 1) { ?> selected="selected" <? } ?>>Arunachali</option>
		                    <option value="2"<?php if($_SESSION['Mothertongue'] == 2) { ?> selected="selected" <? } ?>>Assamese</option>
		                    <option value="3"<?php if($_SESSION['Mothertongue'] == 3) { ?> selected="selected" <? } ?>>Awadhi</option>
		                    <option value="53"<?php if($_SESSION['Mothertongue'] == 53) { ?> selected="selected" <? } ?>>Badaga</option>
		                    <option value="4"<?php if($_SESSION['Mothertongue'] ==4) { ?> selected="selected" <? } ?>>Bengali</option>
		                    <option value="5"<?php if($_SESSION['Mothertongue'] == 5) { ?> selected="selected" <? } ?>>Bhojpuri</option>
		                    <option value="6"<?php if($_SESSION['Mothertongue'] == 6) { ?> selected="selected" <? } ?>>Brij</option>
		                    <option value="7"<?php if($_SESSION['Mothertongue'] == 7) { ?> selected="selected" <? } ?>>Bihari</option>
		                    <option value="8"<?php if($_SESSION['Mothertongue'] == 8) { ?> selected="selected" <? } ?>>Chatisgarhi</option>
		                    <option value="9"<?php if($_SESSION['Mothertongue'] == 9) { ?> selected="selected" <? } ?>>Dogri</option>
		                    <option value="10"<?php if($_SESSION['Mothertongue'] == 10) { ?> selected="selected" <? } ?>>English</option>
		                    <option value="11"<?php if($_SESSION['Mothertongue'] == 11) { ?> selected="selected" <? } ?>>French</option>
		                    <option value="12"<?php if($_SESSION['Mothertongue'] == 12) { ?> selected="selected" <? } ?>>Garhwali</option>
		                    <option value="13"<?php if($_SESSION['Mothertongue'] == 13) { ?> selected="selected" <? } ?>>Garo</option>
		                    <option value="14"<?php if($_SESSION['Mothertongue'] == 14) { ?> selected="selected" <? } ?>>Gujarati</option>
		                    <option value="15"<?php if($_SESSION['Mothertongue'] == 15) { ?> selected="selected" <? } ?>>Haryanvi</option>
		                    <option value="16"<?php if($_SESSION['Mothertongue'] == 16) { ?> selected="selected" <? } ?>>Himachali/Pahari</option>
		                    <option value="17"<?php if($_SESSION['Mothertongue'] == 17) { ?> selected="selected" <? } ?>>Hindi</option>
		                    <option value="18"<?php if($_SESSION['Mothertongue'] == 18) { ?> selected="selected" <? } ?>>Kanauji</option>
		                    <option value="19"<?php if($_SESSION['Mothertongue'] == 19) { ?> selected="selected" <? } ?>>Kannada</option>
		                    <option value="20"<?php if($_SESSION['Mothertongue'] == 20) { ?> selected="selected" <? } ?>>Kashmiri</option>
		                    <option value="21"<?php if($_SESSION['Mothertongue'] == 21) { ?> selected="selected" <? } ?>>Khandesi</option>
		                    <option value="22"<?php if($_SESSION['Mothertongue'] == 22) { ?> selected="selected" <? } ?>>Khasi</option>
		                    <option value="23"<?php if($_SESSION['Mothertongue'] == 23) { ?> selected="selected" <? } ?>>Konkani</option>
		                    <option value="24"<?php if($_SESSION['Mothertongue'] == 24) { ?> selected="selected" <? } ?>>Koshali</option>
		                    <option value="25"<?php if($_SESSION['Mothertongue'] == 25) { ?> selected="selected" <? } ?>>Kumoani</option>
		                    <option value="26"<?php if($_SESSION['Mothertongue'] == 26) { ?> selected="selected" <? } ?>>Kutchi</option>
		                    <option value="27"<?php if($_SESSION['Mothertongue'] == 27) { ?> selected="selected" <? } ?>>Lepcha</option>
		                    <option value="28"<?php if($_SESSION['Mothertongue'] == 28) { ?> selected="selected" <? } ?>>Ladacki</option>
		                    <option value="29"<?php if($_SESSION['Mothertongue'] == 29) { ?> selected="selected" <? } ?>>Magahi</option>
		                    <option value="30"<?php if($_SESSION['Mothertongue'] == 30) { ?> selected="selected" <? } ?>>Maithili</option>
		                    <option value="31"<?php if($_SESSION['Mothertongue'] == 31) { ?> selected="selected" <? } ?>>Malayalam</option>
		                    <option value="32"<?php if($_SESSION['Mothertongue'] == 32) { ?> selected="selected" <? } ?>>Manipuri</option>
		                    <option value="33"<?php if($_SESSION['Mothertongue'] == 33) { ?> selected="selected" <? } ?>>Marathi</option>
		                    <option value="34"<?php if($_SESSION['Mothertongue'] == 34) { ?> selected="selected" <? } ?>>Marwari</option>
		                    <option value="35"<?php if($_SESSION['Mothertongue'] == 35) { ?> selected="selected" <? } ?>>Miji</option>
		                    <option value="36"<?php if($_SESSION['Mothertongue'] == 36) { ?> selected="selected" <? } ?>>Mizo</option>
		                    <option value="37"<?php if($_SESSION['Mothertongue'] == 37) { ?> selected="selected" <? } ?>>Monpa</option>
		                    <option value="38"<?php if($_SESSION['Mothertongue'] == 38) { ?> selected="selected" <? } ?>>Nicobarese</option>
		                    <option value="39"<?php if($_SESSION['Mothertongue'] == 39) { ?> selected="selected" <? } ?>>Nepali</option>
		                    <option value="40"<?php if($_SESSION['Mothertongue'] == 40) { ?> selected="selected" <? } ?>>Oriya</option>
		                    <option value="41"<?php if($_SESSION['Mothertongue'] == 41) { ?> selected="selected" <? } ?>>Punjabi</option>
		                    <option value="42"<?php if($_SESSION['Mothertongue'] == 42) { ?> selected="selected" <? } ?>>Rajasthani</option>
		                    <option value="43"<?php if($_SESSION['Mothertongue'] == 43) { ?> selected="selected" <? } ?>>Sanskrit</option>
		                    <option value="44"<?php if($_SESSION['Mothertongue'] == 44) { ?> selected="selected" <? } ?>>Santhali</option>
		                    <option value="45"<?php if($_SESSION['Mothertongue'] == 45) { ?> selected="selected" <? } ?>>Sindhi</option>
		                    <option value="46"<?php if($_SESSION['Mothertongue'] == 46) { ?> selected="selected" <? } ?>>Sourashtra</option>
		                    <option value="47"<?php if($_SESSION['Mothertongue'] == 47) { ?> selected="selected" <? } ?>>Tamil</option>
		                    <option value="48"<?php if($_SESSION['Mothertongue'] == 48) { ?> selected="selected" <? } ?>>Telugu</option>
		                    <option value="49"<?php if($_SESSION['Mothertongue'] == 49) { ?> selected="selected" <? } ?>>Tripuri</option>
		                    <option value="50"<?php if($_SESSION['Mothertongue'] == 50) { ?> selected="selected" <? } ?>>Tulu</option>
		                    <option value="51"<?php if($_SESSION['Mothertongue'] == 51) { ?> selected="selected" <? } ?>>Urdu</option>
		                  </select>
                           </div>
                       
                    </div>
                        <div class="form-group">
                           <div class="col-md-10" id="caste_rel">
                            	<select name="caste" class="form-control" id="caste" style="width:60%;" disabled="true" >
		                    		<option>Others</option>
		                  		</select>
                            </div>
                        </div>
                        <div class="form-group">
                                                                
                           <div class="col-md-10">
                              <input placeholder="Sub Caste" name="txtSubcaste" id="txtSubcaste" size="40" maxlength="50" onblur="javascript:this.value=this.value.toLowerCase();" type="text" class="form-control" style="width:60%;" value="<?=$_SESSION['SubCaste']?>"/>
		                	</div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10" id="cn">
                              
		                  <select name="country" class="form-control" id="select_country" style="width:60%;" onChange="javascript:code(this.value);enb('country');">
		                    <option value="0">Country Living in</option>
		                    <option  value="india">India</option>
		                    <option  value="united states of america">United States of America</option>
		                    <option  value="United Arab Emirates">United Arab Emirates</option>
		                    <option  value="United Kingdom">United Kingdom</option>
		                    <option  value="Australia">Australia</option>
		                    <option  value="Singapore">Singapore</option>
		                    <option  value="Canada">Canada</option>
		                    <option  value="Qatar">Qatar</option>
		                    <option  value="Kuwait">Kuwait</option>
		                    <option  value="Oman">Oman</option>
		                    <option  value="Bahrain">Bahrain</option>
		                    <option  value="saudia arabia">Saudi Arabia</option>
		                    <option  value="Malaysia">Malaysia</option>
		                    <option  value="Germany">Germany</option>
		                    <option  value="New Zealand">New Zealand</option>
		                    <option  value="France">France</option>
		                    <option  value="Ireland">Ireland</option>
		                    <option  value="Switzerland">Switzerland</option>
		                    <option  value="South Africa">South Africa</option>
		                    <option  value="Sri Lanka">Sri Lanka</option>
		                    <option  value="Indonesia">Indonesia</option>
		                    <option  value="Nepal">Nepal</option>
		                    <option  value="Pakistan">Pakistan</option>
		                    <option  value="Bangladesh">Bangladesh</option>
		                    <option  value="Afghanistan">Afghanistan</option>
		                    <option  value="more">Show more options</option>
		                  </select>
		                 
                           </div>
                        </div>
                        <div class="form-group">
                                                                  
                           <div class="col-md-10">
                           	<select name="State" class="form-control" id="select_state" style="width:60%;" onChange="javascript:enb('state');">
		                    <option value=" " >State</option>
		                  </select>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <select name="City" class="form-control" id="select_city" style="width:60%;" onChange="javascript:enb('city');" >
		                    <option value=" " selected="true">-- Select City --</option>
		                  </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-2">
                           	<label>Phone</label>
                           </div> 
                           <div class="col-md-10">
                             <select onchange="" class="selectfield" id="txtAC" name="txtAC" style="width: 70px;" onKeyUp="check_phone('txtMobile')" onClick="showToolTip1(event,'Phone number will be displayed to paid members. If you do not want to display your phone number to everyone, you have the option of hiding.');return true" onblur="hideToolTip1()" >
		                    <option selected="" value="0">Select</option>
		                    <option value="98" style="color: rgb(0, 79, 0);">+91</option>
		                    <option value="222" style="color: rgb(0, 79, 0);">+1</option>
		                    <option value="220" style="color: rgb(0, 79, 0);">+971</option>
		                    <option value="221" style="color: rgb(0, 79, 0);">+44</option>
		                    <option value="13" style="color: rgb(0, 79, 0);">+61</option>
		                    <option value="189" style="color: rgb(0, 79, 0);">+65</option>
		                    <option value="39" style="color: rgb(0, 79, 0);">+1</option>
		                    <option value="173" style="color: rgb(0, 79, 0);">+974</option>
		                    <option value="114" style="color: rgb(0, 79, 0);">+965</option>
		                    <option value="161" style="color: rgb(0, 79, 0);">+968</option>
		                    <option value="17" style="color: rgb(0, 79, 0);">+973</option>
		                    <option value="185" style="color: rgb(0, 79, 0);">+966</option>
		                    <option value="129" style="color: rgb(0, 79, 0);">+60</option>
		                    <option value="80" style="color: rgb(0, 79, 0);">+49</option>
		                    <option value="153" style="color: rgb(0, 79, 0);">+64</option>
		                    <option value="73" style="color: rgb(0, 79, 0);">+33</option>
		                    <option value="102" style="color: rgb(0, 79, 0);">+353</option>
		                    <option value="203" style="color: rgb(0, 79, 0);">+41</option>
		                    <option value="193" style="color: rgb(0, 79, 0);">+27</option>
		                    <option value="195" style="color: rgb(0, 79, 0);">+94</option>
		                    <option value="99" style="color: rgb(0, 79, 0);">+62</option>
		                    <option value="149" style="color: rgb(0, 79, 0);">+977</option>
		                    <option value="162" style="color: rgb(0, 79, 0);">+92</option>
		                    <option value="18" style="color: rgb(0, 79, 0);">+880</option>
		                    <option value="1" style="color: rgb(0, 79, 0);">+93</option>
		                    <option value="no" style="color: rgb(0, 79, 0);">Show more countries</option>
		                  </select>
		                  -
		                  <input name="txtAC1" type="text" class="forminput" id="txtAC1" size="10" maxlength="10" style="width:40px;" onFocus="if (this.value == 'Area Code') this.value = '';" value="Area Code" onKeyUp="check_phone('txtAC1')">
		                  -
		                  <input   value="<?=$_SESSION['txtPhone']?>"  name="txtPhone" type="text" class="forminput" id="txtPhone" size="10" maxlength="10" style="width:86px;" onKeyUp="check_phone('txtPhone')" onKeyUp="check_phone('txtMobile')" onClick="showToolTip1(event,'Phone number will be displayed to paid members. If you do not want to display your phone number to everyone, you have the option of hiding. ');return true" onblur="hideToolTip1()" > 
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-2">
                           	<label>* Mobile</label>
                           </div> 
                           <div class="col-md-10">
                              <select onchange="" class="selectfield" id="txtCC" name="txtCC" style="width: 83px;" onKeyUp="check_phone('txtMobile')" onClick="showToolTip1(event,'Phone number will be displayed to paid members. If you do not want to display your phone number to everyone, you have the option of hiding.');return true" onblur="hideToolTip1()" >
		                    <option selected="" value="0">Select</option>
		                    <option value="98" style="color: rgb(0, 79, 0);">+91</option>
		                    <option value="222" style="color: rgb(0, 79, 0);">+1</option>
		                    <option value="220" style="color: rgb(0, 79, 0);">+971</option>
		                    <option value="221" style="color: rgb(0, 79, 0);">+44</option>
		                    <option value="13" style="color: rgb(0, 79, 0);">+61</option>
		                    <option value="189" style="color: rgb(0, 79, 0);">+65</option>
		                    <option value="39" style="color: rgb(0, 79, 0);">+1</option>
		                    <option value="173" style="color: rgb(0, 79, 0);">+974</option>
		                    <option value="114" style="color: rgb(0, 79, 0);">+965</option>
		                    <option value="161" style="color: rgb(0, 79, 0);">+968</option>
		                    <option value="17" style="color: rgb(0, 79, 0);">+973</option>
		                    <option value="185" style="color: rgb(0, 79, 0);">+966</option>
		                    <option value="129" style="color: rgb(0, 79, 0);">+60</option>
		                    <option value="80" style="color: rgb(0, 79, 0);">+49</option>
		                    <option value="153" style="color: rgb(0, 79, 0);">+64</option>
		                    <option value="73" style="color: rgb(0, 79, 0);">+33</option>
		                    <option value="102" style="color: rgb(0, 79, 0);">+353</option>
		                    <option value="203" style="color: rgb(0, 79, 0);">+41</option>
		                    <option value="193" style="color: rgb(0, 79, 0);">+27</option>
		                    <option value="195" style="color: rgb(0, 79, 0);">+94</option>
		                    <option value="99" style="color: rgb(0, 79, 0);">+62</option>
		                    <option value="149" style="color: rgb(0, 79, 0);">+977</option>
		                    <option value="162" style="color: rgb(0, 79, 0);">+92</option>
		                    <option value="18" style="color: rgb(0, 79, 0);">+880</option>
		                    <option value="1" style="color: rgb(0, 79, 0);">+93</option>
		                    <option value="no" style="color: rgb(0, 79, 0);">Show more countries</option>
		                  </select>
		                  -
		                  <?php /*?><input value="<?=$_SESSION['txtMobile']?>"  name="txtMobile" type="text" class="form-control" id="txtMobile" size="40" maxlength="40" style="width:124px;" onKeyUp="check_phone('txtMobile')" onClick="showToolTip1(event,'This information is required if you wish to receive FREE SMS messages and notifications. It is optional and will not be displayed anywhere. ');return true" onblur="hideToolTip1()" ><?php */?>
		                  <input value="<?=$_SESSION['txtMobile']?>"  name="txtMobile" type="text" class="forminput" id="txtMobile" size="40" maxlength="40" style="width:124px;" onKeyUp="check_phone('txtMobile')" onClick="showToolTip2(event,'Please provide your mobile number without the country code');return true" onblur="hideToolTip2()"  >
		                  <a href="javascript:;" onmouseover="showToolTip3(event,'Mobile number is mandatory in member profile. We want to verify all profile’s Mobile Number to ensure your authenticity and credibility. You’ve the option of hiding your number. We will not share your phone number to Third Parties.]');return true" onblur="hideToolTip3()" onmouseout="hideToolTip3();">(i)</a>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <input placeholder="Other Country" class="form-control" style="width:60%;" name="text3" type="text" id="country_text" disabled="true" style="position: static" />
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <input placeholder="Other State" class="form-control" style="width:60%;" name="text2" type="text" id="state_text" disabled="true" style="position: static" style="width:60%;" />
		                   </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <input name="text" placeholder="Other City" type="text" id="city_text" disabled="true" style="position: static;width:60%"  class="form-control" />
		                  <input type="hidden" name="ddlSelectCountry" id="ddlSelectCountry" />
		                  <input type="hidden" name="ddlSelectState" id="ddlSelectState" />
		                  <input type="hidden" name="ddlSelectCity" id="ddlSelectCity" />
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <input placeholder="Email" placeholder="Email" name="EMAIL" value="<?=$_SESSION['EMAIL']?>" id="EMAIL" size="40" maxlength="40"  type="text" class="form-control" style="width:60%;!importent" onkeydown="showToolTip(event,this.value,0);return true"  onkeyup="showToolTip(event,this.value,0);return true" onkeypress="showToolTip(event,this.value,0);return true" onclick="showToolTip(event,this.value,0);return true" onmouseout="hideToolTip()"  onblur="email_val(this.value);"/>
		                <br/>
		                <span id="email_span"></span>
                           </div>
                        </div>
                        <div class="form-group">
                            
                           <div class="col-md-10">
                              <input name="EMAILconfirm" placeholder="Confirm Email" class="form-control" id="EMAILconfirm" size="40" maxlength="40" onblur="javascript:this.value=this.value.toLowerCase();" type="text" style="width:60%;" class="textbox1"  value="<?=$_SESSION['ConfirmEmail']?>"/>
		                    </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                             <input name="txtp" id="txtp" placeholder="Password" size="40" class="form-control"  maxlength="10" onkeyup="nospaces(this)"  style="width:60%;" type="password"  onclick="showToolTip(event,this.value,1);return true" onmouseout="hideToolTip()" onblur="hideToolTip()"/>
		                <div id="bubble_tooltip1">
		                  <div class="bubble_top1"><span></span></div>
		                  <div class="bubble_middle1"><span id="bubble_tooltip_content1">Content is loading.</span></div>
		                  <div class="bubble_bottom1"></div>
		                </div>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                                <input name="txtcp" placeholder="Confirm Password" class="form-control" id="txtcp" size="40" maxlength="10" onkeyup="nospaces(this)" type="password"  style="width:60%;" />
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <div class="col-md-10">
                              <input type="text" placeholder="Enter the Captcha" class="form-control" id="txtCaptchaInput" style="width:25%; float:left;"/> 
						  <input type="text" class="form-control" id="txtCaptchaImg" style="background-image:url(1.jpg); text-align:center; border:none; font-weight:bold; font-family:Modern; float:left; width:100px; margin-left:1%; " />
						   <img src="reload-icon.png" id="btnrefresh" onclick="DrawCaptcha();" style="height:16px; margin-left:1%; float:left; border:none;"	 />
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-12">
                           	<input name="txtAccept" id="txtAccept" value="I Accept  the Terms and Conditions" type="checkbox"  <? if($_SESSION['Accept'] == 'I Accept  the Terms and Conditions') { ?>  checked="checked" <? } ?>/>
                           	I have read, understood, and agree to be bound by all of the <a href="termsofuse.php" target="_blank"><u>Terms</u></a> and <a href="privacypolicy.php" target="_blank"><u>Privacy policy</u> </a>
                           </div> 
                           <div class="col-md-12">
                              <input class="button-small  uppercase float_right" style="float:none; clear:both; border:0px; height:30px; width:90px;" name="Submit" type="image" src="images/submit.png" value="" alt="Submit" onclick="return chkmail();">
                           </div>
                        </div>
                     
		
				  				 				
				<script type="text/javascript">

			   //Created / Generates the captcha function    
				function DrawCaptcha()
				{
					var a = Math.ceil(Math.random() * 9)+ '';
					var b = Math.ceil(Math.random() * 9)+ '';       
					var c = Math.ceil(Math.random() * 9)+ '';  
					var d = Math.ceil(Math.random() * 9)+ '';  
					var e = Math.ceil(Math.random() * 9)+ '';  
					
					var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e ;
					document.getElementById("txtCaptchaImg").value = code
				}
			
				// Validate the Entered input aganist the generated security code function   
				function ValidCaptcha(){
					var str1 = removeSpaces(document.getElementById('txtCaptchaImg').value);
					var str2 = removeSpaces(document.getElementById('txtCaptchaInput').value);
					if (str1 == str2)
					 { return true;   }  
					else
					 {     
				  	   alert('Enter Valid Captcha');
					   return false;
					 }  
					
				}
			
				// Remove the spaces from the entered and generated code
				function removeSpaces(string)
				{
					return string.split(' ').join('');
				}
				
			 
				</script>
				
				
				
				
		      </form>
		      
		    </div>
		  
		  </div>


		

<?php include("include/footermenu.php") ?>		
</body>


		<script>
		function email_val(val)
		{
		//alert(val);

		if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
			 	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("email_span").innerHTML=xmlhttp.responseText;
			//alert(xmlhttp.responseText);
			/*if(xmlhttp.responseText==1)
			{
			document.getElementById("email_span").innerHTML="<font color='red' style='font-size:12px;'>Eamil ID Already Exists </font> ";
			document.getElementById('email').value="";
			document.getElementById('email').focus();
		//document.getElementById('folrgetemail_span').style.display='block';
					
			}
			else
			{
			document.getElementById("email_span").innerHTML="<font color='#009966' style='font-size:12px;'>Email Id is available</font>";
			document.getElementById('folrgetemail_span').style.display='none';
			} */
			}
			}
			xmlhttp.open("GET","email.php?q="+val,true);
			xmlhttp.send();

			}
		</script>



		<script>

		function do_check(text1) {

		$.post('emailcheck.php?email='+text1,'', function(data) {

		if(data!=''){



		return data;

		}});

		//return true;



		}



		function showToolTip(e,text,flag){

		if(document.all)e = event;



		var obj = document.getElementById('bubble_tooltip');

		var obj2 = document.getElementById('bubble_tooltip_content');

		if(obj==1)

		{

		stop();

		}

		 if(flag == 0) {



		$.post('emailcheck.php?email='+text,'', function(data) {

		if(data!=''){



		obj2.innerHTML = data;

		}});

		} else if(flag == 1){

			$.post('passwordcheck.php','', function(data) {

		if(data!=''){



		obj2.innerHTML = '<font color="#A50050">'+data+'</font>';

		}});

		} else {

		obj2.innerHTML = '<font color="#A50050">Date of birth is for calculation of age only and will not display to other members</font>';

		}









		obj.style.display = 'block';

		var st = Math.max(document.body.scrollTop,document.documentElement.scrollTop);

		if(navigator.userAgent.toLowerCase().indexOf('safari')>=0)st=0; 

		var leftPos = e.clientX - 100;

		if(leftPos<0)leftPos = 0;

		obj.style.left = leftPos + 'px';

		obj.style.top = e.clientY - obj.offsetHeight -1 + st + 'px';

		}	



		function hideToolTip()

		{

		document.getElementById('bubble_tooltip').style.display = 'none';



		}

		</script>
		<script>

		function alertdo(flag)  { 

		if(flag == 1) {

		document.getElementById("caste").innerHTML = '* Caste/Division ';

		} else if(flag == 2  || flag == 3 || flag == 4) {

		document.getElementById("caste").innerHTML = '* Sect/Division';

		} else if(flag == 5 || flag == 6  || flag == 7 || flag == 8) {

		document.getElementById("caste").innerHTML = '* Denomination/Division';

		} else {

		document.getElementById("caste").innerHTML = '* Caste/Division ';

		}





		}



		function showToolTip1(e,text){

		if(document.all)e = event;



		var obj = document.getElementById('bubble_tooltip1');

		var obj2 = document.getElementById('bubble_tooltip_content1');

		//obj2.innerHTML = text;

		obj2.innerHTML = '<font color="#A50050">'+text+'</font>';

		obj.style.display = 'block';

		var st = Math.max(document.body.scrollTop,document.documentElement.scrollTop);

		if(navigator.userAgent.toLowerCase().indexOf('safari')>=0)st=0; 

		var leftPos = e.clientX - 100;

		if(leftPos<0)leftPos = 0;

		obj.style.left = leftPos + 'px';

		obj.style.top = e.clientY - obj.offsetHeight -1 + st + 'px';

		}	



		function hideToolTip1()

		{

		document.getElementById('bubble_tooltip1').style.display = 'none';



		}




		function showToolTip2(e,text){
		if(document.all)e = event;
		var obj = document.getElementById('bubble_tooltip2');
		var obj2 = document.getElementById('bubble_tooltip_content2');
		//obj2.innerHTML = text;
		obj2.innerHTML = '<font color="#A50050">'+text+'</font>';
		obj.style.display = 'block';
		var st = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
		if(navigator.userAgent.toLowerCase().indexOf('safari')>=0)st=0; 
		var leftPos = e.clientX - 100;
		if(leftPos<0)leftPos = 0;
		obj.style.left = leftPos + 'px';
		obj.style.top = e.clientY - obj.offsetHeight -1 + st + 'px';
		}	
		function hideToolTip2()
		{
		document.getElementById('bubble_tooltip2').style.display = 'none';
		}


		function showToolTip3(e,text){
		if(document.all)e = event;
		var obj = document.getElementById('bubble_tooltip3');
		var obj2 = document.getElementById('bubble_tooltip_content3');
		//obj2.innerHTML = text;
		obj2.innerHTML = '<font color="#A50050">'+text+'</font>';
		obj.style.display = 'block';
		var st = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
		if(navigator.userAgent.toLowerCase().indexOf('safari')>=0)st=0; 
		var leftPos = e.clientX - 100;
		if(leftPos<0)leftPos = 0;
		obj.style.left = leftPos + 'px';
		obj.style.top = e.clientY - obj.offsetHeight -1 + st + 'px';
		}	
		function hideToolTip3()
		{
		document.getElementById('bubble_tooltip3').style.display = 'none';
		}



		</script>
		<script type="text/javascript" src="http://www.lullabot.com/files/bt/bt-latest//other_libs/bgiframe_2.1.1/jquery.bgiframe.min.js"></script>
		<script type="text/javascript" src="http://www.lullabot.com/files/bt/bt-latest//jquery.bt.min.js"></script>
		<script> jq = jQuery.noConflict();</script>
		<script>jq('#example2').bt('<font color="A50050">Date of birth is for calculation of age only and will not display to other members</font>', {trigger: 'click', positions: 'top',fill: '#FFFAF4'}); </script>
		<script>jq('#example3').bt('<font color="A50050">Date of birth is for calculation of age only and will not display to other members</font>', {trigger: 'click', positions: 'top',fill: '#FFFAF4'}); </script>
		<script>jq('#example4').bt('<font color="A50050">Date of birth is for calculation of age only and will not display to other members</font>', {trigger: 'click', positions: 'top',fill: '#FFFAF4'}); </script>
		<script>
		function selectItemByValue(elmnt, value){

		for(var i=0; i < elmnt.options.length; i++)
		{
		  if(elmnt.options[i].text  == value)
		    elmnt.selectedIndex = i;
		}
		}
		function code(ccode) { 





		if(ccode == 'more'){



		document.getElementById('select_country').innerHTML='<option value="0">- Select -</option><option value="Afghanistan" selected>Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option<option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos Islands">Cocos Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and McDonald Islands">Heard and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn Island">Pitcairn Island</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="S. Georgia and S. Sandwich Isls.">S. Georgia and S. Sandwich Isls.</option><option value="Saint Kitts &amp; Nevis">Saint Kitts &amp; Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="St. Helena">St. Helena</option><option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States of America">United States of America</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands">Virgin Islands</option><option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia (Former)">Yugoslavia (Former)</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>';



		}



		//val = document.getElementById("txtCC"); 
		val = document.getElementById('txtCC').selectedItem ;
		//val1 = document.getElementById("txtAC"); 
		val1 =document.getElementById('txtAC').selectedItem ;

		var number = document.getElementById('txtCC');
		var number1 = document.getElementById('txtAC');
		if(ccode == 'india'){

		val = '+91';val1= '+91';
		selectItemByValue(number,val);selectItemByValue(number1, val1);


		}else if(ccode == 'united states of america') { 

		val = '+1';

		val1 = '+1';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}

		else if(ccode == 'United Arab Emirates') {

		val = '+971';

		val1 = '+971';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}



		else if(ccode == 'United Kingdom') {

		val = '+44';

		val1 = '+44';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}

		else if(ccode == 'Australia') {

		val = '+61';

		val1 = '+61';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}



		else if(ccode == 'Singapore') {

		val = '+65';

		val1 = '+65';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}

		else if(ccode == 'Canada') {

		val = '+1';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}

		else if(ccode == 'Qatar') {

		val = '+974';

		val1 = '+974';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}else if(ccode == 'Kuwait') {

		val = '+965';

		val1 = '+965';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}else if(ccode == 'Oman') {

		val = '+968';val1 = '+968';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}else if(ccode == 'Bahrain') {

		val = '+973';val1 = '+973';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}else if(ccode == 'Saudi Arabia') {

		val = '+966';val1 = '+966';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}else if(ccode == 'Malaysia') {

		val = '+60';val1 = '+60';

		}else if(ccode == 'Germany') {

		val = '+49';val1 = '+49';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}else if(ccode == 'New Zealand') {

		val = '+64';val1 = '+64';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}else if(ccode == 'France') {

		val = '+33';val1 = '+33';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}else if(ccode == 'Ireland') {

		val = '+353';val1 = '+353';

		}else if(ccode == 'Switzerland') {

		val = '+41';val1 = '+41';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}else if(ccode == 'South Africa') {

		val = '+27';val1 = '+27';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}else if(ccode == 'Sri Lanka') {

		val = '+94';val1 = '+94';

		}else if(ccode == 'Indonesia') {

		val = '+62';val1 = '+62';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}else if(ccode == 'Nepal') {

		val = '+977';val1 = '+977';

		}else if(ccode == 'Pakistan') {

		val = '+92';val1 = '+92';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		}else if(ccode == 'Bangladesh') {

		val = '+880';val1 = '+880';

		}else if(ccode == 'Afghanistan') {

		val = '+93';val1 = '+93';
		selectItemByValue(number,val);selectItemByValue(number1, val1);

		} else {

		val = ccode;val1 = ccode;

		}



		}



		</script>
		</html>
