<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script type="text/JavaScript">

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

</script>
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Contact Us</span> </div>
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
        <div class="header">
          <h2 class="float_left title"> <span class="black" style="color:#333;">Report Profile          </span></h2>
        </div>
        <div class="body">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><br>
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><p>We designed this website to be FREE, SAFE  and SECURE. All transactions are recorded and time-stamped. If you suspect  someone is behaving strangely, highly offensively or illegally, block them  using the &ldquo;Block this Member&rdquo; option provided in the member&rsquo;s profile page and  tell us about it. Please provide all evidence including any email that you may  have received. We will not disclose your identity to the miscreant.</p><br /><br />
                    Please  fill out the info below to make a complaint about this member to our Customer  Service Team.</td>
                  </tr>
                </table>
                <table width="100%" border="0" align="center" cellpadding="5" cellspacing="5" id="content">
                  <tr>
                    <td><table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
                        <tr>
                          <td colspan="2"><form action="report_submit.php" method="post" name="form1" id="form1" style="margin:0px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px; width:460px;" onSubmit="MM_validateForm('from','','RisEmail','subject','','R','verif_box','','R','message','','R');return document.MM_returnValue">
                              
                              Reason:<br />
                              
                              <input type="radio" name="rd" value="Underage: The member is under 18."  /> <span style="padding-bottom:2px;">Underage: The member is under 18.</span><br />
                               <input type="radio" name="rd" value="Scammer: The member asked for money or tried to scam me."  /> Scammer: The member asked for money or tried to scam me.<br />
                                <input type="radio" name="rd" value="Offensive: The member behaved in a rude / offensive way."  /> 
                                Offensive: The member behaved in a rude / offensive way. <br />
                                 <input type="radio" name="rd" value="Advertising: The member tried to advertise their products or services to me."  /> Advertising: The member tried to advertise their products or services to me.<br />
                                  <input type="radio" name="rd" value="Wrong gender: The member is using the incorrect gender."  /> 
                                  Wrong gender: The member is using the incorrect gender. <br />
                                   <input type="radio" name="rd" value="Other"  /> 
                                   Other <br />
                                   
                            <br /><br />
                                 Complaint details:<br />
                                 
                              <textarea name="complaints" cols="6" rows="5" style="width:350px"> </textarea><br /><br />
                                  
                                  
                              Complaint against member ID:<br />
                              <input name="Complaint_mem" type="text" id="Complaint_mem" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;" value="<?php echo $_GET['Complaint_mem'];?>"/>
                              <br />
                              <br />
                            Paste evidence, if any:<br />
                              <input name="eviddence" type="text" id="eviddence" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;" value="<?php echo $_GET['fnames'];?>"/>
                              <br />
                              <br />
                              Your e-mail ID:<br />
                              <input name="email" type="text" id="email" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"/>
                              <br />
                              <br />
                      
                              
                              Your membership ID::<br />
       <input name="mem_id" type="text" id="mem_id" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"/>
       
     <p> 
                            </td>
                        </tr>
                        <tr>
                        <td width="22%">
                      <input class="button-small square-orange uppercase float_right" style="width:200px;float:none; clear:both; border:0px;" name="Submit" type="image" value="SEND YOUR COMPLAINTS" alt="SEND YOUR COMPLAINTS" onclick="de()">                        </td>
                        <td width="60%"><input class="button-small square-orange uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="image" value="SEND YOUR COMPLAINTS" alt="Reset" onclick="fe()">   </form></td>
                        <td width="18%">&nbsp;</td>
                        </tr>
                       <script>
					   function de() {
					   this.form1.submit();
					   }
					   function fe() {
					   window.location='reportmisuse.php';
					   }
					   </script>
                      </table></td>
                  </tr>
                </table>
              <br></td>
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
  
</div><style>
input {
border:1px solid #D9D9D9;
font-size:11px;
height:9px !important;
outline-color:-moz-use-text-color;
outline-style:none;
outline-width:medium;
}
</style>

</body>
</html>
