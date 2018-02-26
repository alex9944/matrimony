<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?Php include("include/innerheadersection.php"); ?>

</head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Matrimonial - Membership Form</title>

<link href="css/template.css" rel="stylesheet" type="text/css" media="all" />

<!-- JS FOR SuperFish DropDown Menu ############################# -->

<link href="css/dropDownMenu/superfish.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="scripts/jquery1.6.2_production.js"></script>

<script type="text/javascript" src="scripts/superfish.js"></script>



<script language="javascript"> 

/*SCRIPT INITIALIZATION FOR DROPDOWN MENU###################### */ 

    $(document).ready(function(){ 

        $("ul.sf-menu").superfish(); 

		

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

	

</script>



<link href="css/regis_mem_home.css" rel="stylesheet" type="text/css" />

<link href="css/payment.css" rel="stylesheet" type="text/css" />





<body>



<div id="wrapper">

  <?Php include("include/menu.php"); ?>



<!-- HEADER STARTS HERE ###################################################  -->

  

<!-- HEADER ENDS HERE ###################################################  -->



<!-- CONTENT AREA STARTS HERE ###################################################  -->



 <!-- BREADCRUMBS STARTS HERE #####################################  -->

<!-- <div id="breadcrumb"> 

<ul class="breadcrumbs">

		<li class="left"></li>

        

      <li class="center">

        <div id="breadcrumb_text">You are Here:

<span class="pathway">

<a href="#">My Home</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">



Upgrade</span>



</div>

      </li>

        

        <li class="right"></li>

</ul>

</div>
 -->
<!-- BREADCRUMBS ENDS HERE ########################################  -->

<form name="frm" method="post" action="paypal.php">
<div class="container">
  <div id="content_area" class="content-bg">

  

 

   <?Php include('include/innerpagesidebar.php'); ?>
<div class="col-md-9">
    <div id="inner_right">

      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->

      <a name="top" id="top"></a>

      <div class="profile_block">

        <div class="header">

        

          <h2 class="float_left title">

          <span class="black" style="color:#333;">

          Upgrade</span> to Premium Membership <a href="#" id="btnBenifits" class="black" style="color:#333;">(What are the benefits?)</a></h2>

        </div>

        <div class="body">

        <div style="text-align:center;">

          <h2 style="line-height:24px;" ><strong>Welcome  to <?php echo $sitename; ?> Payment Page</strong><br />

            <strong>Your  next step could change your Life!</strong><br /></h2>

            <h3><strong>Become  a Premium Member</strong> <strong>to  have all the benefits of contacting other members on a personalized level</strong><br />

            </h3>

        </div>

       

<br />

        </div>

      </div>

      <div class="profiledetails">

        

        <div id="upgradeCompare" style="display:none;">

            <h2><span> <strong><br />

            Compare Premium Member Benefits vs. Basic Member </strong></span><br />

          </h2>

             <table width="100%" border="0" cellspacing="5" cellpadding="5">

            <tr>

              <td width="80" height="80"><img src="images/icons/prize_winner_64.png" width="64" height="64" hspace="10" vspace="10" align="left" /></td>

              <td> <strong> Basic membership</strong> is a FREE membership that enables you to try out our system and see how it works. You can search, browse other member's profiles, and express your interest. </td>

            </tr>

          </table>

           <div style=" padding:10px; border: dotted 1px #a50050;">

             <table width="100%" border="0" cellpadding="0" cellspacing="0" class="ss_webhosting">

              <tbody><tr class="noborders">

          <th align="left" >&nbsp;</th>

          <th class="heading_plans1">  </th>

          <th class="heading_plans2"> </th>

          <th class="heading_plans4"> </th>

          <th class="heading_plans5">  </th>
		  
        </tr>

        <tr class="noborders">

          <th style="background-color:#fad3a6; color:#454545; font-weight:bold; font-size:16px; text-align:left;">Features</th>

          <th class="prices_plans1">Silver</th>

          <th class="prices_plans2">Gold</th>

          <th class="prices_plans4">Diamond</th>

          <th class="prices_plans5">Basic</th>

        </tr>

        <tr class="alt">

          <td class="features">My Account Home</td>

          <td class="plans1"><span class="status_yes">&nbsp;<span></td>

          <td class="plans2"><span class="status_yes">&nbsp;<span></td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_yes">&nbsp;<span></td>

        </tr>

        <tr>

          <td class="features">Search Profiles</td>

           <td class="plans1"><span class="status_yes">&nbsp;<span></td>

          <td class="plans2"><span class="status_yes">&nbsp;<span></td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_yes">&nbsp;<span></td>

        </tr>

        <tr class="alt">

          <td class="features">View Contact</td>

          <td class="plans1"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans2"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_no">&nbsp;<span></td>

        </tr>

        <tr>

          <td class="features">View Horoscope</td>

            <td class="plans1"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans2"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_no">&nbsp;<span></td>

        </tr>

        <tr class="alt">

          <td class="features">View Photo</td>

           <td class="plans1"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans2"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_yes">&nbsp;<span></td>

        </tr>

        <tr>

          <td class="features">View Video</td>

            <td class="plans1"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans2"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_yes">&nbsp;<span></td>

        </tr>

        <tr class="alt">

          <td class="features bestvalue">Express Interest</td>

         <td class="plans1"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans2"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_yes">&nbsp;<span></td>

        </tr>

        <tr>

          <td class="features">Personalised email</td>

           <td class="plans1"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans2"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_no">&nbsp;<span></td>

        </tr>
		
		<tr class="alt">

          <td class="features">SMS</td>

           <td class="plans1"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans2"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_no">&nbsp;<span></td>

        </tr>

        <tr class="">

          <td class="features">Early Bird Alerts</td>

          <td class="plans1"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans2"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_yes">&nbsp;<span></td>

          </tr>

        <tr class="alt">

          <td class="features">Chat Online</td>

           <td class="plans1"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans2"><span class="status_yes">&nbsp;<span> </td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_no">&nbsp;<span></td>

          </tr>

          <tr class="">

          <td class="features">Who's Online </td>

          <td class="plans1"><span class="status_yes">&nbsp;<span></td>

          <td class="plans2"><span class="status_yes">&nbsp;<span></td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_yes">&nbsp;<span></td>

        </tr>

        <tr class="alt">

          <td class="features">Auto Match </td>

           <td class="plans1"><span class="status_yes">&nbsp;<span></td>

          <td class="plans2"><span class="status_yes">&nbsp;<span></td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_yes">&nbsp;<span></td>

        </tr>

        <tr class="">

          <td class="features">Password Protect Photo </td>

          <td class="plans1"><span class="status_yes">&nbsp;<span></td>

          <td class="plans2"><span class="status_yes">&nbsp;<span></td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_yes">&nbsp;<span></td>

        </tr>

        <tr class="alt">

          <td class="features">Password Protect Horoscope </td>

           <td class="plans1"><span class="status_yes">&nbsp;<span></td>

          <td class="plans2"><span class="status_yes">&nbsp;<span></td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_yes">&nbsp;<span></td>

        </tr>

        <tr class="">

          <td class="features">Password Protect Video </td>

          <td class="plans1"><span class="status_yes">&nbsp;<span></td>

          <td class="plans2"><span class="status_yes">&nbsp;<span></td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_yes">&nbsp;<span></td>

        </tr>

        <tr class="alt">

          <td class="features">SMS Alerts </td>

           <td class="plans1"><span class="status_no">&nbsp;<span></td>

          <td class="plans2"><span class="status_yes">&nbsp;<span></td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_no">&nbsp;<span></td>

        </tr>

        <tr class="">

          <td class="features">Featured Member </td>

          <td class="plans1"><span class="status_no">&nbsp;<span></td>

          <td class="plans2"><span class="status_yes">&nbsp;<span></td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_no">&nbsp;<span></td>

        </tr>

        <tr class="alt">

          <td class="features">High Support </td>

           <td class="plans1"><span class="status_no">&nbsp;<span></td>

          <td class="plans2"><span class="status_no">&nbsp;<span></td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_no">&nbsp;<span></td>

        </tr>

        <tr class="">

          <td class="features">Priority Display </td>

          <td class="plans1"><span class="status_no">&nbsp;<span></td>

          <td class="plans2"><span class="status_no">&nbsp;<span></td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_no">&nbsp;<span></td>

        </tr>

        <tr class="alt">

          <td class="features">Match Horoscope Online</td>

           <td class="plans1"><span class="status_no">&nbsp;<span></td>

          <td class="plans2"><span class="status_no">&nbsp;<span></td>

          <td class="plans4"><span class="status_yes">&nbsp;<span></td>

          <td class="plans5"><span class="status_no">&nbsp;<span></td>

        </tr>

       

    </tbody></table>

             <h3><strong><a href="#" class="bold">and More&gt;&gt;&gt;</a></strong></h3>

             

               <div style="margin-left:auto; margin-right:auto; width:200px; height:30px;">

             <a href="#" class="button-small square-orange uppercase" id="btnUpgrade" ><span></span>SHOW UPGRADE PLANS </a>         </div>

          </div> 

        </div>



        <div id="upgrade">

        <h2><strong>Step 1 - Choose the Premium Membership Plan</strong></h2>

        <hr />

        <br />

 <div style="margin-left:auto; margin-right:auto; width:250px; height:30px;">

             <a href="#" id="btnCompare" class="button-small square-orange uppercase" ><span></span>Compare Membership Plan</a>         </div>

         <br />

<?php 
		$mempl=mysql_query("select * from membershipplan where planid ");
		 
		 while($memplan=mysql_fetch_array($mempl))
		 {
		 
		 $mon=$memplan['planduration']/30;
		 $monrs=$memplan['planamount']/$mon;
		?>

        <table width="100%" border="0" cellspacing="10" cellpadding="10">

  <tr>

    <td width="33%" align="center" valign="top">

    
    <table width="100%"  class="ss_webhosting">

   

    <tr> <th class="prices_plans2"><p><?php echo $memplan['plandisplayname']?></p></th></tr>

   <tr class="alt">

         <td height="140" class="plans2"><?php echo $memplan['plannoofcontacts']?> Verified Profiles<br />

           <h2 ><strong style="font-size:22px;"><?php echo round($monrs); ?> /</strong> month

           

           </h2>

          

           <p style="display:block; width:90px;  padding:5px; margin:5px auto; background-color:#909ba9; color:#fff; font-size:16px; font-weight:bold;">

             <label>

               <input type="radio"  value="<?php echo $memplan['planid']?>" style="outline:none; border:none;" name="memberPlan" id="RadioGroup1_0"  onclick="show_memamount(this.value)"/>

               <?php echo $memplan['plandisplay']?></label>

           </p>

<p>1 Payment of <strong>INR.<?php echo $memplan['planamount']?></strong></p></td>

        </tr>

   

    </table>

     
    </td>
<?php
		 }
		 ?>
		  <input type="hidden" id="total" name="total"   />
		 
		 <script>
		    function show_memamount(amount){
			 
			document.getElementById("total").value = amount;
			document.getElementById("mem_empty").style.display ='none';
			document.getElementById("mem_amount").style.display ='';
			document.getElementById("mem_amount").innerHTML ='<strong>'+amount+'</strong>';
			
			
			if(amount == 2400.00) {
			plan_name = 'Silver'; }
			if(amount == 5940.00) {
			plan_name = 'Gold'; }
			if(amount == 9000.00) {
			plan_name = 'Diamond'; }
			
			document.getElementById('RadioGroup1_').checked=false;
			document.getElementById('RadioGroup2_').checked=false;
			document.getElementById('RadioGroup3_').checked=false;
			
			document.getElementById("as_amount").style.display  = 'none';
			document.getElementById("as_empty").style.display  = '';
			document.getElementById("ps_amount").style.display  = 'none';
			document.getElementById("ps_empty").style.display  = '';
			document.getElementById("ms_amount").style.display  = 'none';
			document.getElementById("ms_empty").style.display  = '';
			
			
			
			
			
			
			document.getElementById("ts_empty").style.display  = 'none';
			document.getElementById("ts_amount").style.display  = '';
			
			document.getElementById("membership").value  = amount;
			
			document.getElementById("ts_amount").innerHTML  = amount;
			
			
			document.getElementById("plan_name").innerHTML = plan_name;
			}
		   </script>

   <!-- <td width="33%" align="center" valign="top">

     <table width="100%"  class="ss_webhosting">


    <tr> <th class="prices_plans2"><p> GOLD   </p></th></tr>

        <tr class="alt">

         <td height="140" class="plans2">

          105 Verified Profiles<br />
           <h2 >
		   <strong style="font-size:22px;">INR. 990.00/</strong> month
           </h2>

          

           <p style="display:block; width:90px; padding:5px; margin:5px auto; background-color:#e88c00; color:#fff; font-size:16px; font-weight:bold;">

             <label>
               <input type="text" id="total" name="total"   />
               <input type="radio" style="outline:none; border:none;" name="memberPlan" value="5940.00" id="RadioGroup1_0"  onclick="show_memamount(this.value)" />

               6 Months</label>

           </p>

<p>1 Payment of <strong>INR.5,940.00</strong></p>

           

          </td>

        </tr>
 
    </table>

    

    </td>

    <td align="center" valign="top">

         <table width="100%"  class="ss_webhosting">

     

    <tr> <th class="prices_plans4"><p> DIAMOND   </p></th></tr>

   <tr class="alt">

         <td height="140" class="plans4">

           

           

             225 Verified Profiles<br />

           <h2 ><strong style="font-size:22px;">INR. 750.00/</strong> month

           

           </h2>

          

           <p style="display:block; width:90px; padding:5px; margin:5px auto; background-color:#de036d; color:#fff; font-size:16px; font-weight:bold;">

             <label>

               <input type="radio" style="outline:none; border:none;" name="memberPlan" value="9000.00" id="RadioGroup1_0"  onclick="show_memamount(this.value)" />

               1 Year</label>

           </p>
		   
		   
<p>1 Payment of <strong>INR.9,000.00</strong><br />

  <strong style="color:#093">  BEST VALUE</strong></p>

           

           

           

           </td>-->

        </tr>

   

    </table>

    

    </td> 
  </tr>

</table>



		</div>



</div>

      <br />

      

      <div class="profiledetails" style="display:none;">

        <h2><strong>Traditional Matchmaking Process<br />

        </strong></h2>

        <hr />



        <table width="100%" border="0" cellspacing="10" cellpadding="10">

  <tr>

    <td width="33%" align="left" valign="top">With a fast paced work life, it is not easy to find a life partner. We'll help you to find your ideal match based on your selection criteria and specific instructions. Test the waters, register and find that someone special to share your life.   This service is available in Kerala State only for Malayalees.<br /></td>

    </tr>

  <tr>

    <td align="left" valign="top">

         <p style="display:block; text-align:center; width:50%; padding:5px; margin:5px auto; background-color:#fad3a6; color:#454545; font-size:16px; font-weight:bold;">

             <label>

               <input type="checkbox" style="outline:none; border:none;" name="traditionalMatch" value="silver" id="RadioGroup1_0" /> 

               INR. 16,000.00 -   3 Months Plan </label>

           </p>

    

    </td>

  </tr>

  <tr>

    <td align="right" valign="top"><strong><a href="#" class="link">More</a></strong></td>

  </tr>

        </table>







</div>

      

     <!-- <br />-->

      

    <!--  <div class="profiledetails">

        <h2><strong>Add on Special Features to Your Membership <br />

        </strong></h2>

        <hr />

        <table width="100%" border="0" cellspacing="5" cellpadding="5">

          <tr>

            <td width="160" rowspan="2"><img src="images/astro.png" width="150" height="150" /></td>

            

          </tr>

          <tr>

            <td align="center" rowspan="2" >

            <h2><strong>AstroMatch - Online Horoscope Matching</strong></h2>

            <p style="display:block; text-align:center; width:70%; padding:5px; margin:5px auto; height: 28px; background-color:#fad3a6; color:#454545; font-size:16px; font-weight:bold;">

                <label><input type="radio" style="outline:none; border:none;" name="astro" value="1150.00" id="RadioGroup1_" onclick="show_astro('1050.00')" />
                  INR.1, 150.00 for 150 AstroMatches  1 Year    </label>
            </p>
            <p style="display:block; text-align:center; width:70%; padding:5px; margin:5px auto; height: 28px; background-color:#fad3a6; color:#454545; font-size:16px; font-weight:bold;">
              <label>
                <input type="radio" style="outline:none; border:none;" name="astro" value="850.00" id="RadioGroup1_" onclick="show_astro('800.00')" />
                INR. 850.00 for 75 AstroMatches  6 Months       </label>
            </p>
            <p style="display:block; text-align:center; width:70%; padding:5px; margin:5px auto; height: 28px; background-color:#fad3a6; color:#454545; font-size:16px; font-weight:bold;">
               <label> <input type="radio" style="outline:none; border:none;" name="astro" value="630.00" id="RadioGroup1_" onclick="show_astro('550.00')" />
                 INR. 630.00 for 50 AstroMatches 3 Months       </label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <script>
			function show_astro(amt){
			
			document.getElementById("astro1").value = amt;
			for (var i=0; i < document.frm.RadioGroup1_0.length; i++) {
			if(document.frm.RadioGroup1_0[i].checked == true) {
			var flag = 1;
			} 
			
			}
			if(flag !=1) {
			alert("Please choose your membership plan first");
			}
	
			document.getElementById("as_empty").style.display = 'none';
			document.getElementById("as_amount").style.display = '';
			document.getElementById("as_amount").innerHTML = '<strong>'+amt+'</strong>';
			//document.getElementById("total").value = parseInt(document.getElementById("total").value) + parseInt(document.getElementById("astro1").value);
			document.getElementById("ts_empty").style.display  = 'none';
			document.getElementById("ts_amount").style.display  = '';
			
			
			
			document.getElementById('astro').value =  amt;
		
			document.getElementById("ts_amount").innerHTML  = countTotal();
			
			}
			
			
			function countTotal() {
			
			 
			var total =00;
			if(document.getElementById('astro').value!='' && document.getElementById('astro').value!='NaN')
			  var total = parseInt(total) + parseInt(document.getElementById('astro').value);
			 if(document.getElementById('membership').value!=''&& document.getElementById('membership').value!='NaN')
			  var total =  parseInt(total) + parseInt(document.getElementById('membership').value); 
			   if(document.getElementById('spot').value!=''&& document.getElementById('spot').value!='NaN')
			  var total =  parseInt(total) + parseInt(document.getElementById('spot').value);
			    if(document.getElementById('match').value!=''&& document.getElementById('match').value!='NaN')
			  var total =  parseInt(total) + parseInt(document.getElementById('match').value);
			  
			  
			
			
			  return total;
			}
			
			
			</script>
            
            

            <strong  class="float_right"><a href="astromatch.php" class="link">More</a></strong></td>

          </tr>

        </table>

        <hr />

            <table width="100%" border="0" cellspacing="5" cellpadding="5">

          <tr>

            <td width="160" rowspan="2"><img src="images/profile-smasher.jpg" width="150" height="150" /></td>

            

          </tr>

          <tr>

            <td align="center" rowspan="2" >

            <h2><strong>Profile Spotlight - Get better visibility with a special profile ad.</strong></h2>

            <p style="display:block; text-align:center; width:70%; padding:5px; margin:5px auto; background-color:#fad3a6; color:#454545; font-size:16px; font-weight:bold;">

                <label>

                  <input type="checkbox" style="outline:none; border:none;" name="spot_light" value="1" id="RadioGroup2_"  onclick="show_ps(this.value)"/>

                 INR. 1,200.00 for 3 months </label>

            </p>
<script>
			function show_ps(amount){
			
			for (var i=0; i < document.frm.RadioGroup1_0.length; i++) {
			if(document.frm.RadioGroup1_0[i].checked == true) {
			var flag = 1;
			} 
			
			}
			if(flag !=1) {
			alert("Please choose your membership plan first");
			}
			
			document.getElementById("ps_empty").style.display = 'none';
			document.getElementById("ps_amount").style.display = '';
			document.getElementById("total").value = parseInt(document.getElementById("total").value) + parseInt(1200);
				document.getElementById("ts_empty").style.display  = 'none';
			document.getElementById("ts_amount").style.display  = '';
			
			if(document.getElementById('RadioGroup2_').checked == true){
			document.getElementById("spot").value =  parseInt(1200);}
			else {
			document.getElementById('ps_amount').style.display = 'none';
            document.getElementById('ps_empty').style.display = '';
			document.getElementById("spot").value =  00; }
			
			
			document.getElementById("ts_amount").innerHTML  = countTotal();
			
			//document.getElementById("ts_amount_txt").value  = document.getElementById("total").value;
			
			}
			</script>
            <strong  class="float_right"><a href="profilespotlight.php" class="link">More</a></strong></td>

          </tr>

        </table>

        

        <!--<hr />-->

        <table width="100%" border="0" cellspacing="5" cellpadding="5" style="display:none;">

          <tr>

            <td width="160" rowspan="2"><img src="images/promote.jpg" width="150" height="150" /></td>

            

          </tr>

          <tr>

            <td align="center" rowspan="2" >

            <h2><strong>Match Promoter - Customized Email and SMS<br /> 

            Improve Response with Email and SMS</strong></h2>

            <p style="display:block; text-align:center; width:70%; padding:5px; margin:5px auto; background-color:#fad3a6; color:#454545; font-size:16px; font-weight:bold;">

                <label>

            <input type="checkbox" style="outline:none; border:none;" name="match_promoter" value="1" id="RadioGroup3_" onClick="show_ms(this.value)" />

                 INR. 1,500.00 </label>

            </p>
<script>
			function show_ms(amount)
			{
			
				for (var i=0; i < document.frm.RadioGroup1_0.length; i++) {
			if(document.frm.RadioGroup1_0[i].checked == true) {
			var flag = 1;
			} 
			
			}
			if(flag !=1) {
			alert("Please choose your membership plan first");
			}
			
			document.getElementById("ms_empty").style.display = 'none';
			document.getElementById("ms_amount").style.display = '';
			document.getElementById("total").value = parseInt(document.getElementById("total").value) + parseInt(1500);
				document.getElementById("ts_empty").style.display  = 'none';
			document.getElementById("ts_amount").style.display  = '';
			if(document.getElementById('RadioGroup3_').checked == true) {
			document.getElementById("match").value = parseInt(1500);  }
			else {
			document.getElementById("match").value = 00;
			document.getElementById('ms_amount').style.display = 'none';
            document.getElementById('ms_empty').style.display = '';
			} 
			
			document.getElementById("ts_amount").innerHTML  = countTotal();
			//document.getElementById("ts_amount_txt").value  = document.getElementById("total").value;
			
			}
			</script>
            <strong  class="float_right"><a href="matchPromoter.php" class="link">More</a></strong></td>

          </tr>

        </table>

        

       

      </div>

      <br />

      

      <!--<div class="profiledetails">

        <h2><strong>Your Cart<br />

        </strong></h2>

        <hr />
          <div id="nocart">
		  
		   <table width="102%" class="tbl_cart">

         <tr>

           <th width="10%">Remove.</th>

           <th>You have Choosen</th>

           <th width="20%">Total (Rupees)</th>

         </tr>
 <script>
 function remove_memamount() {
  document.getElementById("mem_amount").style.display = 'none';
  document.getElementById("mem_empty").style.display = '';
  
 
  document.getElementById('ts_amount').style.display = 'none';
  document.getElementById('ts_empty').style.display = '';
  
  document.getElementById('as_amount').style.display = 'none';
  document.getElementById('as_empty').style.display = '';
  
    document.getElementById('ps_amount').style.display = 'none';
  document.getElementById('ps_empty').style.display = '';
  
    document.getElementById('ms_amount').style.display = 'none';
  document.getElementById('ms_empty').style.display = '';
  
 }
 </script>
         <tr>

           <td align="center" id="membership"><img src="images/icons/cancel.png" width="16" height="16"  onclick="remove_memamount()"/></td>

           <td>Membership:  <span id="plan_name"></span></td>

           <td align="right" id="mem_empty"><strong>Empty</strong></td><td align="right" id="mem_amount" style="display:none" ><strong></strong></td>

         </tr>

         <tr align="center" class="subsection">

         <th colspan="3" align="left">Add-on Features</th>

           </tr>

         <tr>

           <td align="center"><img src="images/icons/cancel.png" width="16" height="16"  onclick="remove_as()"/></td>
		   <script>
function remove_as(){
document.getElementById('as_amount').style.display = 'none';
document.getElementById('as_empty').style.display = '';
document.getElementById("total").value = parseInt(document.getElementById("total").value) - parseInt(1050);
document.getElementById("astro").value = 00;
document.getElementById('ts_amount').innerHTML = countTotal();
document.getElementById('RadioGroup1_').checked=false;
}
</script>

           <td>AstroMatch - Online Horoscope Matching</td>

           <td align="right" id="as_empty"><strong>Empty</strong></td><td align="right" id="as_amount" style="display:none"><strong>1,050.00</strong></td>

         </tr>

         <tr>

           <td align="center"><img src="images/icons/cancel.png" width="16" height="16" onclick="remove_ps()" /></td>
<script>
function remove_ps(){
document.getElementById('ps_amount').style.display = 'none';
document.getElementById('ps_empty').style.display = '';
document.getElementById("total").value = parseInt(document.getElementById("total").value) - parseInt(1200);
document.getElementById("spot").value = 00;
document.getElementById('ts_amount').innerHTML = countTotal();
document.getElementById('RadioGroup2_').checked=false;
}
</script>

           <td >Profile Spotlight - Get better visibility with a special profile ad (3 Months)</td>

           <td align="right" id="ps_empty"><strong>Empty</strong></td> <td align="right" id="ps_amount" style="display:none"><strong>1200.00</strong></td>

         </tr>

             <tr style="display:none;">

           <td align="center"><img src="images/icons/cancel.png" width="16" height="16"  onclick="remove_ms()"/></td>
<script>
function remove_ms(){
document.getElementById('ms_amount').style.display = 'none';
document.getElementById('ms_empty').style.display = '';

document.getElementById("total").value = parseInt(document.getElementById("total").value) - parseInt(1500);


document.getElementById("match").value =00;
document.getElementById('ts_amount').innerHTML = countTotal();


	document.getElementById('RadioGroup3_').checked=false;
}
</script>
           <td>Match Promoter - Customized Email and SMS

Improve Response with Email and SMS</td>

           <td align="right" id="ms_empty" ><strong>Empty</strong></td><td align="right" id="ms_amount" style="display:none"><strong>1500.00</strong></td>

         </tr>

         <tr class="footer">

           <th>&nbsp;</th>

           <th>Grand Total</th>

           <th align="right" id="ts_empty">Empty</th>  <th align="right" id="ts_amount" style="display:none"></th>

         </tr>

        </table>
		  
		  </div>
		  
		 <div id="cart" style="display:none;">
		 
		  
         <table width="100%" class="tbl_cart">

         <tr>

           <th width="10%">Remove.</th>

           <th>You have Choosen</th>

           <th width="20%">Total (Rupees)</th>

         </tr>

         <tr>

           <td align="center" id="membership"><img src="images/icons/cancel.png" width="16" height="16" /></td>

           <td>Membership: <?php echo $sitename; ?> Gold</td>

           <td align="right"><strong>575.00</strong></td>

         </tr>

         <tr align="center" class="subsection">

         <th colspan="3" align="left">Add-on Features</th>

           </tr>

         <tr>

           <td align="center"><img src="images/icons/cancel.png" width="16" height="16" /></td>

           <td>AstroMatch - Online Horoscope Matching</td>

           <td align="right"><strong>1050.00</strong></td>

         </tr>

         <tr>

           <td align="center"><img src="images/icons/cancel.png" width="16" height="16" /></td>

           <td>Profile Smasher - Get better visibility with a special profile ad (3 Months)</td>

           <td align="right"><strong>1200.00</strong></td>

         </tr>

             <tr>

           <td align="center"><img src="images/icons/cancel.png" width="16" height="16" /></td>

           <td>Match Promoter - Customized Email and SMS

Improve Response with Email and SMS</td>

           <td align="right"><strong>1500.00</strong></td>

         </tr>

         <tr class="footer">

           <th>&nbsp;</th>

           <th>Grand Total</th>

           <th align="right">INR: 4325.00</th>

         </tr>

        </table>
		
		</div>

         <br />
-->
         <div style="width:170px;  padding-left: 261px;">
<input type="hidden"  name="ts_amount_txt" id="ts_amount_txt" />
           <!--  <a href="javascript:paypal()" class="button-small square-orange uppercase" ><span></span>Continue  </a>-->
			 
			  <span style="float:left;"> <!--<input type="button"  alt="  Reset  " value="  Reset  " name="button" style="float:none; clear:both; border:0px;" class="button-small square-orange uppercase float_left" onclick="return reset_from()"> 
			  
			  <a style="float:none; clear:both;" class="button-small square-orange uppercase float_right" href="#" onclick="return reset_from()"><span></span> &nbsp;&nbsp;Reset&nbsp;&nbsp; </a>			  </span>
			  
			  -->
			  
			  
			 	  <span style="margin-left:300px;">  
	 	    <input type="image"  alt="Continue" value="Continue" name="Submit" style="float:none; clear:both; border:0px;" class="button-small square-orange uppercase float_right"> 
	 	    </span>

         </div>

<br />
<script>
function reset_from()
 {
 	
//document.getElementById('RadioGroup1_0').checked=false; 

	for (var i=0; i < document.frm.RadioGroup1_0.length; i++) {
	if(document.frm.RadioGroup1_0[i].checked) {
	document.frm.RadioGroup1_0[i].checked = false; } }
	
	
	for (var i=0; i < document.frm.astro.length; i++) {
	if(document.frm.astro[i].checked) {
	document.frm.astro[i].checked = false; } }
	
	
	document.frm.spot_light.checked = false;  
	
	document.frm.match_promoter.checked = false;
	
	document.getElementById("mem_amount").innerHTML = ''; 
	document.getElementById("as_amount").innerHTML = '';  
	document.getElementById("ms_amount").innerHTML = ''; 
	document.getElementById("ps_amount").innerHTML = '';   
	document.getElementById("ts_amount").innerHTML = ''; 
	
	document.getElementById("ts_amount_txt").value = '';
	window.location = 'membershipform.php';
    return false;
}
</script>
      </div>



        <br />

        <strong  class="float_right"><a href="mymatri.php" class="link">I will subscribe later, Go back to Home Page</a></strong><br />

        <br />

      
      
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ -->

    </div>
</div>
</div>
  </div>
<input type="hidden"  name="astro1" id="astro1"/>
<input type="hidden"  name="membership"  id="membership"/>
<input type="hidden"  name="astro"  id="astro"/>

<input type="hidden"  name="spot"  id="spot"/>
<input type="hidden"  name="match"  id="match"/>
</form>
<!-- CONTENT AREA ENDS HERE ###################################################  -->  


<!-- FOOTER STARTS HERE ###################################################  -->

<?php include("include/footermenu.php"); ?>

<!-- FOOTER ENDS HERE ###################################################  -->    

</div>

</body>

</html>


