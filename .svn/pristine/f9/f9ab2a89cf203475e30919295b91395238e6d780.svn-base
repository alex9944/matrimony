<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<style type="text/css">
<!--
.style1 {
	font-size: medium;
	font-weight: bold;
}
.style2 {font-size: medium}
-->
</style>
<script type="text/javascript" src="js/ajax-dynamic-content.js"></script>

<script type="text/javascript" src="js/ajax.js"></script>

<script type="text/javascript" src="js/ajax-tooltip.js">

</script>	

<link rel="stylesheet" href="css/ajax-tooltip.css" media="screen" type="text/css">

<link rel="stylesheet" href="css/ajax-tooltip-demo.css" media="screen" type="text/css">
<link rel="stylesheet" href="css/bubble-tooltip.css" media="screen">
	
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

<script src="js/login.js" language="javascript"></script>















<script language="javascript" src="js/timepicker.js"></script>



 


<script language="javascript" src="js/advanced_search_locations.js" type="text/javascript"> </script>


 

<!--<script language="javascript" src="js/relcaste.js"></script>-->















<script language="javascript">







function check_phone(field_name)































{































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
    
	 if(flag == 0) {
	
	$.post('emailcheck.php?email='+text,'', function(data) {
	if(data!=''){
	
	obj2.innerHTML = data;
	}});
	} else if(flag == 1){
		$.post('passwordcheck.php','', function(data) {
	if(data!=''){
	
	obj2.innerHTML = data;
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
} else if(flag == 2  || flag == 10 || flag == 11) {
document.getElementById("caste").innerHTML = '* Sect/Division';
} else if(flag == 12 || flag == 13  || flag == 14 || flag == 3) {
document.getElementById("caste").innerHTML = '* Denomination/Division';
} else {
document.getElementById("caste").innerHTML = '* Caste/Division ';
}


}

function showToolTip1(e,text){
	if(document.all)e = event;
	
	var obj = document.getElementById('bubble_tooltip1');
	var obj2 = document.getElementById('bubble_tooltip_content1');
	obj2.innerHTML = text;
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
</script>
</head>

<body>
<?php include("config.php"); ?>

<div id="wrapper">


<!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); 	
  $row = mysql_fetch_array($memcontrol)
?>
<!-- HEADER ENDS HERE ###################################################  -->

<!-- CONTENT AREA STARTS HERE ###################################################  -->

 <!-- BREADCRUMBS STARTS HERE #####################################  -->
<div id="breadcrumb"> 
<ul class="breadcrumbs">
		<li class="left"></li>
        
      <li class="center">
        <div id="breadcrumb_text">You are Here:
<span class="pathway">
<?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">My search <img alt="" src="images/icons/arrow_breadcrumbs.png">View Full Profile Of <?php  echo $row['MatriID'];?></span>
			   <?  $matriid = $_REQUEST['ID'];

 $searchquery = "SELECT * FROM register WHERE ID = '$matriid' or MatriID = '$matriid'";
$qry = mysql_query($searchquery );
$row = mysql_fetch_array($qry);


?>

</div>
<div id="breadcrumb_modifysearch"><a href="search_page.php" title="Modify Search" class="link" style="background-image:none">Modify Search >></a>				        </div>
      </li>
        
        <li class="right"></li>
</ul>
</div>
<!-- BREADCRUMBS ENDS HERE ########################################  -->

  <div id="content_area">
  
 
    <?Php include('include/searchleftside.php'); ?>
    <div id="inner_right">
<a name="top" id="top"></a>
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->

<div class="profile_block">
        <div class="header">
          <h3 class="float_left"><a href="#" class="title"><?php  echo $row['Name']?> (<?php  echo $row['MatriID']?>), <? echo $row['Country']; ?> - <? echo $row['State']; ?></a></h3>
          <a href="#" class="icon_acc_type acc_diamond" title="<?php echo $sitename; ?> Diamond Account Holder"></a> <!--<span class="icon status stat_online">Active: <strong>Online Now</strong></span>--><?php include("include/profilechat.php"); ?> </div>
<?Php if(isset($_SESSION['username'])) { ?>
          <div class="footer" style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f9d6a5;"> 
           <a href="blockmember.php?id=<?php echo $row['MatriID']; ?>" class="btn_services btn_block float_right">Block this Member</a> 
           <a href="add_to_favorite.php?id=<?php echo $row['MatriID']; ?>" class="btn_services btn_favorite float_right" style="border-left-width: 1px; border-left-style: solid; border-left-color: #f9d6a5;">Add to Favorite</a>
          <a href="#" class="btn_services btn_varify float_right" style="border-left-width: 1px; border-left-style: solid; border-left-color: #f9d6a5;">Varify Profile</a>
          
        </div>
<?php } ?>
        <div class="body clear">
          <table width="100%" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td >

              <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>
  <?php //echo $row['Gender'];
  
 if(($row['Photo1']== "nophoto.gif" ) or $row['Photo1Approve'] == 'No') 
					   {
	                       if($row['Gender'] == 'Male')
						    { ?>
                              <a href='photo_req_int_form.php?eiid=<?php echo $row['MatriID']; ?>'><img src="images/icons/noimage_man.jpg" width="100" height="100" class="img_profile" /></a>
                      <?php } elseif($row['Gender'] == 'Female') 
					        { ?>
                              <a href='photo_req_int_form.php?eiid=<?php echo $row['MatriID']; ?>'><img src="images/icons/noimage_girl.jpg" width="100" height="100" class="img_profile" /></a>
                      <?php } else
					        { ?>
                              <img src="images/icons/photo_upload_lady.jpg" width="100" height="100" class="img_profile" />
                        <?  }  ?>
						  
                      
						<?php 
					  }
else if($row['PhotoProtect']== "Yes") { 
	if($row['Gender'] == 'Male') {
?>
                      <img src="images/icons/photo_askme_man.jpg" width="100" height="100" class="img_profile" />
					  
					  
                      <?Php		
	} else {
?>
                      <img src="images/icons/photo_askme_lady.jpg" width="100" height="100" class="img_profile" />
					  
					  
					  
                      <?Php
	} 

 }
  
  
  ?>	 
  
  

    <td style="padding:5px;"></td>
<!-- IF VIDEO IS AVAILABLE SHOW the below 2 TDs -->   
   
  </tr>
  
    <tr>

    <td > </td>

<!-- IF VIDEO IS AVAILABLE SHOW the below 2 TDs -->   
  
  </tr>

  
</table>

              
              </td>
              <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="profile">
                <tr class="hline2">
                  <th width="90">&nbsp;</th>
                  <td width="369"><font color="#A50050"><? if($_REQUEST['key'] == 'phone') {?>To view phone number of <? }  else if($_REQUEST['key'] == 'horoscope' or $_REQUEST['horo']) { ?> To view horoscope of  <? } else if($_REQUEST['key'] == 'chat') { ?> To chat with this member  <? } else if($_REQUEST['key'] == 'photo') { ?> To view more photos of this member  <? } else if($_REQUEST['key'] == 'album') { ?> To view photo album of this member  <? } ?> (
                      <?=$row["Name"]?>
                    ) 
                    <?=$row["MatriID"]?>, you must be a  registered member of <?php echo $sitename; ?></font> <br />   </td>
                  <th width="85">&nbsp;</th>
                  <td>&nbsp;</td>
                </tr>
                <tr class="hline2">
                  <th>&nbsp;</th>
                  <td>  <font color="#A50050">If you are a registered member,<a href="login.php"> <font color="#0000CC">click  here</font></a> to log in or use the form below to register FREE on  <?php echo $sitename; ?></font> </td>
                  <th>&nbsp;</th>
                  <td>&nbsp;</td>
                </tr>
               
               
              </table></td>
            </tr>
          </table>
        </div>
        

</div>
      <div class="profile_block">





        <div class="header">















          <h2 class="float_left title"> <span class="black" style="color:#333;">Find your suitable life partner - </span>Register Free</h2>















        </div>















        <div class="body">















          <form action="registration2.php" method="post" name="MatriForm" id="MatriForm" onSubmit="return Validate()" >















            <table width="100%" border="0" cellpadding="5" cellspacing="5" class="tbl_profiledetails">















              <tbody>















                <tr>















                  <td colspan="3" width="719"><div align="left"><br />















                      <ul class="ddlist list-tick">















					  <li>This site is dedicated to creating marriages for legal Indian resident or non-resident Indians. If you are interested in creating marriage, welcome, this is the right place! Enter the details of the person intending to get married. However, if you are married, listing yourself as single or otherwise, please avoid the embarrassment and the legal liability of committing fraud. We exercise our rights within the law to protect our members.</li>















                        <li>Please mention accurate information in this form or your profile may be declined.</li>















                        <li>Here is the place where you tell the world how good you look. Spend a bit of time in here and the world will be your oyster. No one really reads bad profiles so put the effort in and you will be rewarded for your time. Trust us it works.</li>















                        <li>When you have finished, you can review your own profile and change anything if it doesn't look good.</li>
                      </ul>















                      <br />















                    </div></td>
                </tr>















                <tr>















                  <td colspan="3"><img src="pics/trans.gif" height="1" /></td>
                </tr>















                <tr>















                  <td colspan="3" ><div align="left">















                      <h3 class="hline3"><strong>Basic Information </strong></h3>















                    </div></td>
                </tr>















                <tr>

 



                  <td colspan="3" ><img src="pics/blank%281%29.gif" height="1" /></td>
                </tr>

 

                <tr class="hline2">
 
                  <td ><div align="left">* Name</div></td>




 


                  <td colspan="2" ><div align="left">

  

                      <input name="txtName" type="text" class="textbox1"  id="txtName" onkeyup="nospaces(this)" size="40" maxlength="40" style="width:219px;" />



 

                    </div></td>
                </tr>















                <tr class="hline2">















                  <td ><div align="left">* Gender</div></td>















                  <td colspan="2" ><div align="left">















                      <input name="txtGender" value="Male" type="radio" />















                      Male   					&nbsp;















                      <input name="txtGender" value="Female" type="radio" />















                      Female </div></td>
                </tr>















                <tr class="hline2">















                  <td ><div align="left">* Date of Birth</div></td>















                  <td ><div align="left">















                      <select name="dobMonth" class="forminput" style="width:82px;" onclick="showToolTip(event,this.value,2);return true" onmouseout="hideToolTip()" onblur="hideToolTip()" id="dobMonth">















                        <option value="" selected="selected">-Month-</option>















                        <option value="1">January</option>















                        <option value="2">February</option>















                        <option value="3">March</option>















                        <option value="4">April</option>















                        <option value="5">May</option>















                        <option value="6">June</option>















                        <option value="7">July</option>















                        <option value="8">August</option>















                        <option value="9">September</option>















                        <option value="10">October</option>















                        <option value="11">November</option>















                        <option value="12">December</option>
                      </select>















                      <select  name="dobDay" class="forminput" style="width:57px;"  id="day">















                        <option value="1" selected="selected">-Date-</option>















                        <?php for($date=1;$date<=31;$date++) { ?>















                        <option value="<?php echo $date;?>"><?php echo $date;?></option>















                        <?php } ?>
                      </select>










<script>
 function calculate_age() {
    // validate input
	
	yy = document.getElementById('year').value.substr(2,3); 
	mm = document.getElementById('dobMonth').value;
	dd = document.getElementById('day').value;
	
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




                      <select name="dobYear" class="forminput" style="width:76px;" onChange="calculate_age();" id="year">















                        <option value="0" selected="selected">-Year-</option>















                        <?php for($year=1950;$year<=(date("Y") - 18);$year++) { ?>















                        <option value="<?php echo $year;?>"><?php echo $year;?></option>















                        <?php } ?>
                      </select>






    &nbsp;&nbsp;or&nbsp; <input type="text" name="age" value="" id="age" size="3"> yrs








                    </div>
					
					
				  </td>















                  <td ></td>
                </tr>















                <tr class="hline2">















                  <td   valign="center"><div align="left">* Marital Status</div></td>















                  <td colspan="2" ><div align="left">





<script> 

function do_hide(){



var x=document.getElementById("NOOFCHILDREN")

    x.disabled=true;

	

document.getElementById('CHILDLIVINGWITHME').disabled = true;

document.getElementById('NOTLIVINGWITHME').disabled = true;  

}



function do_hide2(){

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









                      <input name="MARITAL_STATUS" onclick="do_hide()" value="1" type="radio" />















                      Unmarried &nbsp;















                      <input name="MARITAL_STATUS" onclick="do_hide2()" value="2" type="radio" />















                      Widow/Widower &nbsp;















                      <input name="MARITAL_STATUS" onclick="do_hide2()" value="3" type="radio" />















                      Divorcee &nbsp;















                      <input name="MARITAL_STATUS" onclick="do_hide2()" value="4" type="radio" />















                      Separated </div></td>
                </tr>















                <tr class="hline2">















                  <td   width="210"><div align="left"> &nbsp;&nbsp;No. of Children</div></td>















                  <td colspan="2"   valign="top"><div align="left">















                      <!--<input name="NOOFCHILDREN" id="NOOFCHILDREN" size="40" maxlength="40" onkeyup="nospaces(this)" type="text" class="textbox1" />-->















					  <select style="width:220px;"  class="forminput" name="NOOFCHILDREN" id="NOOFCHILDREN" onchange="do_hide3(this.value)">















                                    <option selected="" value="">- Select -</option>















                                    <option value="0">None</option>















                                    <option value="One">1</option>















                                    <option value="Two">2</option>















                                    <option value="Three">3</option>















                                    <option value="Four and above">4 and above</option>
                      </select>















                    </div></td>
                </tr>















                <tr class="hline2">















                  <td ><div align="left">&nbsp;&nbsp;Children Living Status</div></td>















                  <td colspan="2" ><div align="left">















                      <input name="CHILDLIVINGWITHME"  id="CHILDLIVINGWITHME" value="Yes" type="radio" />















                      Living with me &nbsp;















                      <input name="CHILDLIVINGWITHME" id="NOTLIVINGWITHME" onfocus="" value="No" type="radio" />















                      Not living with me </div></td>
                </tr>


                <tr class="hline2">


                  <td ><div align="left">* Religion</div></td>

<script>
function caste_resetRF(val){ 
alertdo(val);
document.getElementById('Language').selectedIndex = 0;
}
</script>
                  <td colspan="2" ><div align="left">

                      <select onchange="caste_resetRF(this.value);" class="selectfield" style="width:220px;" size="1" id="religion" name="religion"><option selected="" value="0">-Select-</option><option value="1">Hindu</option><option value="10">Muslim - Shia</option><option value="11">Muslim - Sunni</option><option value="2">Muslim - Others</option><option value="12">Christian - Catholic</option><option value="13">Christian - Orthodox</option><option value="14">Christian - Protestant</option><option value="3">Christian - Others</option><option value="4">Sikh</option><option value="15">Jain - Digambar</option><option value="16">Jain - Shwetambar</option><option value="5">Jain - Others</option><option value="6">Parsi</option><option value="7">Buddhist</option><option value="8">Inter-Religion</option><option value="9">No Religious Belief</option></select>


                    </div></td>
                </tr>

 <tr class="hline2">















                  <td ><div align="left">* Mother tongue</div></td>













<script>
function do_request(val) {

document.getElementById('caste_rel').innerHTML = "<img src='loading.gif'>";
 $.post('generateCaste.php?lang='+val+'&rel='+document.getElementById('religion').selectedIndex,'', function(data) {
	document.getElementById('caste_rel').innerHTML = "<img src='loading.gif'>";
	if(data!=''){
	
	document.getElementById('caste_rel').innerHTML = data;
	}});
	//return true;
	


}
</script>

                  <td colspan="2" ><div align="left">

<select onchange="do_request(this.value);" class="selectfield" style="width:220px;" size="1" id="Language" name="Language"><option selected="" value="0">-Select-</option><option value="1">Arunachali</option><option value="2">Assamese</option><option value="3">Awadhi</option><option value="4">Bengali</option><option value="5">Bhojpuri</option><option value="6">Brij</option><option value="7">Bihari</option><option value="53">Badaga</option><option value="8">Chatisgarhi</option><option value="9">Dogri</option><option value="10">English</option><option value="11">French</option><option value="12">Garhwali</option><option value="13">Garo</option><option value="14">Gujarati</option><option value="15">Haryanvi</option><option value="16">Himachali/Pahari</option><option value="17">Hindi</option><option value="18">Kanauji</option><option value="19">Kannada</option><option value="20">Kashmiri</option><option value="21">Khandesi</option><option value="22">Khasi</option><option value="23">Konkani</option><option value="24">Koshali</option><option value="25">Kumoani</option><option value="26">Kutchi</option><option value="27">Lepcha</option><option value="28">Ladacki</option><option value="29">Magahi</option><option value="30">Maithili</option><option value="31">Malayalam</option><option value="32">Manipuri</option><option value="33">Marathi</option><option value="34">Marwari</option><option value="35">Miji</option><option value="36">Mizo</option><option value="37">Monpa</option><option value="38">Nicobarese</option><option value="39">Nepali</option><option value="40">Oriya</option><option value="41">Punjabi</option><option value="42">Rajasthani</option><option value="43">Sanskrit</option><option value="44">Santhali</option><option value="45">Sindhi</option><option value="46">Sourashtra</option><option value="47">Tamil</option><option value="48">Telugu</option><option value="49">Tripuri</option><option value="50">Tulu</option><option value="51">Urdu</option></select>

                    </div></td>
                </tr>













                <tr class="hline2">















                  <td  ><div align="left" id="caste">* Caste/Division </div></td>















                  <td colspan="2" ><div align="left" id="caste_rel">



                      <select name="caste" class="forminput" id="caste" style="width:220px;" disabled="true" >

                        <option>Others</option>
                      </select>















                    </div></td>
                </tr>















                <tr class="hline2">















                  <td ><div align="left">&nbsp;&nbsp;Sub Caste </div></td>















                  <td colspan="2" ><div align="left">















                      <input name="txtSubcaste" id="txtSubcaste" size="40" maxlength="50" onblur="javascript:this.value=this.value.toLowerCase();" type="text" class="textbox1" style="width:217px;"/>















                    </div>















                    <div align="left"></div></td>
                </tr>















				<!----added by Arunkumar on 28-11-2011-->















				<tr class="hline2">















                <td><div align="left">&nbsp;&nbsp;Country Living in </div></td>















                <td colspan="2"><div align="left">










<script>
function code(ccode) { 


val = document.getElementById("txtCC"); 

if(ccode == 'India'){
val.value = '+91';
}
if(ccode == 'United States of America') { 
val.value = '+1';
}
if(ccode == 'United Arab Emirates') {
val.value = '+971';
}

if(ccode == 'United Kingdom') {
val.value = '+44';
}
if(ccode == 'Australia') {
val.value = '+61';
}

if(ccode == 'Singapore') {
val.value = '+65';
}
if(ccode == 'Canada') {
val.value = '+1';
}
if(ccode == 'Qatar') {
val.value = '+974';
}if(ccode == 'Kuwait') {
val.value = '+965';
}if(ccode == 'Oman') {
val.value = '+968';
}if(ccode == 'Bahrain') {
val.value = '+973';
}if(ccode == 'Saudi Arabia') {
val.value = '+966';
}if(ccode == 'Malaysia') {
val.value = '+60';
}if(ccode == 'Germany') {
val.value = '+49';
}if(ccode == 'New Zealand') {
val.value = '+64';
}if(ccode == 'France') {
val.value = '+33';
}if(ccode == 'Ireland') {
val.value = '+353';
}if(ccode == 'Switzerland') {
val.value = '+41';
}if(ccode == 'South Africa') {
val.value = '+27';
}if(ccode == 'Sri Lanka') {
val.value = '+94';
}if(ccode == 'Indonesia') {
val.value = '+62';
}if(ccode == 'Nepal') {
val.value = '+977';
}if(ccode == 'Pakistan') {
val.value = '+92';
}if(ccode == 'Bangladesh') {
val.value = '+880';
}if(ccode == 'Afghanistan') {
val.value = '+93';
}

}
</script>




<select name="country" class="forminput" id="select_country" style="width:220px;" onChange="javascript:code(this.value);enb('country');"><option value="0">-Select-</option><option style="color:#004F00" value="India">India</option><option style="color:#004F00" value="United States of America">United States of America</option><option style="color:#004F00" value="United Arab Emirates">United Arab Emirates</option><option style="color:#004F00" value="United Kingdom">United Kingdom</option><option style="color:#004F00" value="Australia">Australia</option><option style="color:#004F00" value="Singapore">Singapore</option><option style="color:#004F00" value="Canada">Canada</option><option style="color:#004F00" value="Qatar">Qatar</option><option style="color:#004F00" value="Kuwait">Kuwait</option><option style="color:#004F00" value="Oman">Oman</option><option style="color:#004F00" value="Bahrain">Bahrain</option><option style="color:#004F00" value="saudia arabia">Saudi Arabia</option><option style="color:#004F00" value="Malaysia">Malaysia</option><option style="color:#004F00" value="Germany">Germany</option><option style="color:#004F00" value="New Zealand">New Zealand</option><option style="color:#004F00" value="France">France</option><option style="color:#004F00" value="Ireland">Ireland</option><option style="color:#004F00" value="Switzerland">Switzerland</option><option style="color:#004F00" value="South Africa">South Africa</option><option style="color:#004F00" value="Sri Lanka">Sri Lanka</option><option style="color:#004F00" value="Indonesia">Indonesia</option><option style="color:#004F00" value="Nepal">Nepal</option><option style="color:#004F00" value="Pakistan">Pakistan</option><option style="color:#004F00" value="Bangladesh">Bangladesh</option><option style="color:#004F00" value="Afghanistan">Afghanistan</option></select>

                    















                    </div></td>
              </tr>















              <tr class="hline2">















                <td><div align="left">&nbsp;&nbsp;State</div></td>















                <td colspan="2"><div align="left"> <select name="State" class="forminput" id="select_state" style="width:220px;" onChange="javascript:enb('state');">















                        <option value=" " >-- Select --</option>















                      </select>















                    </div></td>
              </tr>















              <tr class="hline2">















                <td><div align="left">&nbsp;&nbsp;City</div></td>















                <td colspan="2"><div align="left">  <select name="City" class="forminput" id="select_city" style="width:220px;" onChange="javascript:enb('city');" >















                        <option value=" " selected="true">-- Select --</option>















                      </select>















                    </div></td>
              </tr>	







			<tr class="hline2">







                  <td><div align="left">* Phone</div></td>







                  <td colspan="2"><div align="left">
                    <input name="txtAC" type="text" class="forminput" id="txtAC" size="10" maxlength="10" style="width:40px;" onFocus="if (this.value == 'Area Code') this.value = '';" value="Area Code" onKeyUp="check_phone('txtAC')">







                      -







                      <input name="txtPhone" type="text" class="forminput" id="txtPhone" size="10" maxlength="10" style="width:164px;" onKeyUp="check_phone('txtPhone')">







                    </div></td>
                </tr>







                <tr class="hline2">







                  <td><div align="left">*&nbsp;Mobile </div></td>







                  <td colspan="2"><div align="left">







                      <input name="txtCC" type="text" size="10" maxlength="10" style="width:40px;" id="txtCC" onkeyup="check_phone('txtCC')" value="+91" size="10" maxlength="10" /> - 
                      <input name="txtMobile" type="text" class="forminput" id="txtMobile" size="40" maxlength="40" style="width:164px;" onKeyUp="check_phone('txtMobile')" onClick="showToolTip1(event,'1.Phone number will be displayed to paid members. If you do not want to display your phone number to everyone, you have the option of hiding. <br> 2.This information is required if you wish to receive FREE SMS messages and notifications. It is optional and will not be displayed anywhere. ');return true" onblur="hideToolTip1()" >







                    </div></td>
                </tr>







			    <tr class="hline2" style="display:none;">















                  <td><div align="left">&nbsp;Other Country </div></td>















                  <td colspan="2"><div align="left">















                      <input name="text3" type="text" id="country_text" disabled="true" style="position: static" style="width:219px;"/>















                    </div></td>
                </tr>















                <tr class="hline2" style="display:none;">















                  <td><div align="left">&nbsp;Other State</div></td>















                  <td colspan="2"><div align="left">















                      <input name="text2" type="text" id="state_text" disabled="true" style="position: static" style="width:219px;" />















                    </div></td>
                </tr>















                <tr class="hline2" style="display:none;">















                  <td><div align="left">&nbsp;Other City </div></td>















                  <td colspan="2"><div align="left">















                      <input name="text" type="text" id="city_text" disabled="true" style="position: static"  style="width:219px;"/>















                      <input type="hidden" name="ddlSelectCountry" id="ddlSelectCountry" />















                      <input type="hidden" name="ddlSelectState" id="ddlSelectState" />















                      <input type="hidden" name="ddlSelectCity" id="ddlSelectCity" />















                    </div></td>
                </tr>	 































				<!-- ends here --->















                <tr class="hline2">















                  <td ><div align="left">&nbsp;&nbsp;Profile Created by </div></td>















                  <td colspan="2" ><div align="left">















                      <select name="txtPC" class="forminput" id="txtPC" style="width:220px;">















                        <option value="Self">Self</option>















                        <option value="Parents">Parents</option>















                        <option value="Guardian">Guardian</option>















                        <option value="Friends">Friends</option>















                        <option value="Sibling">Sibling</option>















                        <option value="Relatives">Relatives</option>
                      </select>















                    </div></td>
                </tr>















                <tr class="hline2">















                  <td ><div align="left">&nbsp;&nbsp;Reference by </div></td>















                  <td colspan="2" ><div align="left">















                      <select name="txtRef" class="forminput" id="txtRef" style="width:220px;">















                        <option value="Advertisements">Advertisements</option>















                        <option value="Friends">Friends</option>















                        <option value="Searh Engines">Searh Engines</option>















                        <option value="Others">Others</option>
                      </select>















                    </div></td>
                </tr>















                <tr>















                  <td colspan="3" align="left" ><div align="left">















                      <h3 class="hline3"><strong><br />















                        New Account Information </strong></h3>















                    </div>















                    <div align="left"></div></td>
                </tr>















                <tr class="hline2">















                  <td ><div align="left">* Email</div></td>















                  <td colspan="2" ><div align="left">















                      <input name="EMAIL" id="EMAIL" size="40" maxlength="40"  type="text" class="textbox1" style="width:219px;"  onkeydown="showToolTip(event,this.value,0);return true"  onkeyup="showToolTip(event,this.value,0);return true" onkeypress="showToolTip(event,this.value,0);return true" onclick="showToolTip(event,this.value,0);return true" onmouseout="hideToolTip()" onblur="hideToolTip()"/>
	
	
	<div id="bubble_tooltip">
	<div class="bubble_top"><span></span></div>
	<div class="bubble_middle"><span id="bubble_tooltip_content">Content is loading.</span></div>
	<div class="bubble_bottom"></div>
</div>

					  <span id="msg" > <?php if($_REQUEST['err']==1) { ?>
<font color='red'><b>The email already exist in the database.</b></font>
<? } ?></span>















                    </div></td>
                </tr>















                <tr class="hline2">















                  <td ><div align="left">* Confirm Email</div></td>















                  <td colspan="2" ><div align="left">















                      <input name="EMAILconfirm" id="EMAILconfirm" size="40" maxlength="40" onblur="javascript:this.value=this.value.toLowerCase();" type="text" style="width:219px;" class="textbox1" />















                    </div></td>
                </tr>















                <tr class="hline2">















                  <td align="left" ><div align="left">* Password</div></td>















                  <td colspan="2" ><div align="left">















                      <input name="txtp" id="txtp" size="40" maxlength="10" onkeyup="nospaces(this)"  style="width:219px;height:18px;" type="password"  onclick="showToolTip(event,this.value,1);return true" onmouseout="hideToolTip()" onblur="hideToolTip()"/>

<div id="bubble_tooltip1">
	<div class="bubble_top1"><span></span></div>
	<div class="bubble_middle1"><span id="bubble_tooltip_content1">Content is loading.</span></div>
	<div class="bubble_bottom1"></div>
</div>













                    </div></td>
                </tr>















                <tr class="hline2">















                  <td ><div align="left">* Confirm Password</div></td>















                  <td colspan="2" ><div align="left">















                      <input name="txtcp" id="txtcp" size="40" maxlength="10" onkeyup="nospaces(this)" type="password"  style="width:219px; height:18px;" />















                    </div></td>
                </tr>















                















                <tr>















                  <td ><div align="left"></div></td>















                  <td colspan="2">







				  <table cellpadding="0" cellspacing="0">







				  <tr><td>
                      <input name="txtAccept" id="txtAccept" value="I Accept  the Terms and Conditions" type="checkbox" />

</td><td width="5"></td><td>

                      <a href="terms_con.php" target="_blank">I have read, understood, and agree to be bound by all of the <u>Terms</u> and <u>Privacy policy</u> </a></td>
					  </tr>
				    </table></td>
                </tr>















                <tr>















                  <td   valign="center">&nbsp;</td>















                  <td width="500" colspan="2"   valign="top">&nbsp;</td>
                </tr>















                <tr>















                  <td colspan="4"   height="7"><div align="center">















                      <div align="center"><!-- <a href="#" class="button-small square-orange uppercase float_right" style="float:none; clear:both; margin:5px auto;"><span></span> Continue </a>--><span class=" span"></span>















                        <input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="Submit" alt="Submit" onclick="return chkmail();">
                      </div>















                    </div></td>
                </tr>
              </tbody>
            </table>















          </form>















        </div>















        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>















      </div>
      <?Php if(!isset($_SESSION['username'])) { ?>

      <div class="want_to_contact_bottom"></div>
      <?php } ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
        <tbody><tr>
          <td class="pg_left"></td>
          <td height="48" align="center" valign="middle" class="pg_center"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="prof_det_toolbar" style="height:48px;">
            <tbody><tr>
              <td width="80" class="p_d_block1"><a href="#top" class="btn_goTop">Go Top</a></td>
              <td>&nbsp;</td>
<?Php
            if($page > 1){ 

    $prev = ($page - 1); 
?>
              <td width="110" class="p_d_block2"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $prev.$searchlink; ?>" class="pageNum" style="float:left; font-size:11px; margin-right:3px;margin-left:10px;">&lt;&lt; Prev Profile</a></td>
<?Php
} 
if($page < $total_pages){ 

    $next = ($page + 1); 
?>
              <td width="110" class="p_d_block2"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $next.$searchlink; ?>" class="pageNum" style="float:left; font-size:11px; margin-left:15px; ">Next Profile&gt;&gt; </a></td>
<?Php

} 
?>
            </tr>
          </tbody></table></td>
          <td class="pg_right"></td>
        </tr>
      </tbody></table>
        
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ -->
    </div>
  </div>
<!-- CONTENT AREA ENDS HERE ###################################################  -->  

<!-- FOOTER STARTS HERE ###################################################  -->
<?php include("include/footermenu.php") ?>
<!-- FOOTER ENDS HERE ###################################################  -->    



</div>
</body>
</html>