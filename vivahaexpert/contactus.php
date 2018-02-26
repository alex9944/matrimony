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
  <!-- <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php //echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Contact Us</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div> -->
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
   	<div class="container">
    <div id="inner_right"  style="width:100%!important"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
          <h2 class="float_left title"> <span class="black" style="color:#333;">Contact Customer Support / Feedback</strong></h2>
        </div>
        <div class="body">
          <div class="col-md-12" align="left">Need some assistance and can't find it on our Frequently Asked Questions / Help page? Then we're here to help!
Provide us with your e-mail address and type in your question in the text box below. We will get back to you within 24
hours if your request is submitted during business hours Monday -Saturday. </div>
                 <div class="col-md-12">
                  <div class="col-md-3" style="margin-top:5%">
                    <p><img   src="feedBack.jpg" alt=""/></p>
          <?php 
  $gset=mysql_query("select * from siteconfig");
$genfe=mysql_fetch_array($gset);
          ?>
<p>         
  <?php echo $genfe['address']; ?>
</p>
                  </div>
                  <div class="col-md-9" style="margin-top:5%">
                    <form action="contactus_submit.php" class="form-horizontal" method="post" name="form1" id="form1" style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;" onSubmit="MM_validateForm('from','','RisEmail','subject','','R','verif_box','','R','message','','R');return document.MM_returnValue">
                            
                        <div class="form-group">
                          <div class="col-md-10">
                            <select  name="subject" class="form-control" style="width:60%;">
                              <option>Subject</option>
                             <option value="Accessing the site" >Accessing the site </option>
                              <option value="Membership Registration/Changes" >Membership Registration/Changes </option>
                               <option value="Photo uploading/Changes/Viewing" >Photo uploading/Changes/Viewing </option>
                               <option value="Logging on/Logging off" >Logging on/Logging off </option>
                               <option value="Email/Sending and Receiving" >Email/Sending and Receiving</option>
                               <option value="Harassment/Spam/Fraud" >Harassment/Spam/Fraud</option>
                               <option value="Success Stories" >Success Stories</option>
                               <option value="Feedback/Suggestions" >Feedback/Suggestions</option>
                                <option value="Premium Membership/Payments" >Premium Membership/Payments</option>
                                 <option value="Site functionality / Other features" >Site functionality / Other features</option>
                                  <option value="Profile Management" >Profile Management</option>
                                  <option value="SMS Problems" >SMS Problems</option>
                                     <option value="Complaints" >Complaints</option>
                                       <option value="Other" >Other</option>
                                      <option value="Business/Advertise opportunities" >Business/Advertise opportunities</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-10">          
                            <input name="username" type="text" class="form-control" placeholder="Your Username" id="username" style="width:60%;" value="<?php echo $_GET['username'];?>"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-10">
                            <input name="from" type="text" id="from" class="form-control" placeholder="Your e-mail" style="width:60%;" value="<?php echo $_GET['from'];?>"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-10">          
                            <input name="fnames" type="text" placeholder="Your first and last name" class="form-control" id="fnames" style="width:60%;" value="<?php echo $_GET['fnames'];?>"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-10">
                            <input name="verif_box" placeholder="Type verification image" class="form-control" type="text" id="verif_box" style="width:35%; float:left;"/>
                            <img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="60" height="28" style="float:left; margin-left:1%;" align="absbottom" /><br />
                            <?php if(isset($_GET['wrong_code'])){?>
                              <div style="border:1px solid #990000; background-color:#D70000; color:#FFFFFF; width:60%; margin-top:1%;">Wrong verification code</div>
                              <br />
                              <?php ;}?>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-10">          
                              <textarea name="message" class="form-control" placeholder="I Need Assistance With" cols="6" rows="5" id="message" style="width:60%;"><?php echo $_GET['message'];?></textarea>
                              <input name="Submit" type="submit" style="margin-top:10px; display:block; border:1px solid #000000; width:100px; height:20px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:2px; padding-right:2px; padding-top:0px; padding-bottom:2px; line-height:14px; background-color:#EFEFEF;cursor:pointer;" value="Send Message"  onmouseover="this.style.background='#A50050'"  onmouseout="this.style.background=''" />
                           </div>
                        </div>

                      </form>
              
                        <font color="#990000">Note: Any message found to be rude, containing profanity, or which shows disrespect to our staff members can lead to the termination of your membership.</font>                        </td>
                  
        </div>
        
      </div>
      
      <br />
      <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
    </div>
  </div>
  </div>
  </div>
  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
  
  <!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>
