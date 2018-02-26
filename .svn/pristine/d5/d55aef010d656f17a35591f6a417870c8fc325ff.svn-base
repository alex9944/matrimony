<?php include("memprotect.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?Php include("include/innerheadersection.php"); ?>

</head>



<body>

<?php include("config.php"); ?>

<?php 

$strid = $_SESSION['matriid'];

  $memcontrol = mysql_query("SELECT * FROM register where MatriID='$strid' ");

?>

<div id="wrapper"> 

  

  <!-- HEADER STARTS HERE ###################################################  -->

  <?Php include("include/menu.php"); ?>

  <!-- HEADER ENDS HERE ###################################################  --> 

  

  <!-- CONTENT AREA STARTS HERE ###################################################  --> 

  

  <!-- BREADCRUMBS STARTS HERE #####################################  -->

  

  <!-- BREADCRUMBS ENDS HERE ########################################  -->

  <div class="container">

  <div id="content_area" class="content-bg">

    <?Php include('include/loginsidebar.php'); 

	$row = mysql_fetch_array($memcontrol)

	?>
<div class="col-md-9">
    <div id="inner_right" > 

      

      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->

      <h1><a name="top" id="top"></a>Nice to See You..., <strong>

        <?php  echo $row['Name']?>

        </strong></h1>

      <div class="profile_block">

        <div class="header">

          <h3 class="float_left title">Edit - Education and Occupation</h3>

        </div>

        <div class="body" align="left">
          <FORM action="edit_eduocc.php" class="form-horizontal" role="form" method="post" style="margin-left:15%;">
              
              <div class="form-group">
              <div class="col-md-10">
                 <label>Education</label>
                </div>
                <div class="col-md-10">
                  <?php
          $txtEdu= array('Any','Not Important','No education','High School','Bachelor’s Degree: Engg., Comp., Arch.,','Master’s Degree: Engg., Comp., Arch.,','Bachelor’s Degree: Medicine & Surgery, Dentistry','Master’s Degree: Medicine & Surgery, Dentistry ','Bachelor’s Degree: Nursing','Master’s Degree: Nursing','Bachelor’s Degree: Law','Master’s Degree: Law','Bachelor’s Degree: Arts, Science, Commerce','Master’s Degree: Arts, Science, Commerce','Bachelor’s Degree: Management','Master’s Degree: Management','Doctorate PhD','Accounting & Fin.: CA, ICWAI','Indian Civil Service: IAS, IFoS, IPS, IRS','Vocational','Diploma','Other');
         ?>
        <select name="txtEdu" id="txtEdu" class="form-control" style="width:65%;">
                    <?php
            foreach ($txtEdu as $castes) {
             if ($row['Education']==$castes) { ?>
                    <option value="<? echo $row['Education']; ?>" selected><? echo $row['Education']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 


                  </select>
                </div>
              </div>
              <div class="form-group">
              <div class="col-md-10">
                 <label>Edu Details</label>
                </div>
                <div class="col-md-10">
                  <?php
          $txtEdudetails= array('Advertising/ Marketing','Administrative services','Architecture','Armed Forces','Arts','Commerce','Computers/ IT','Education ','Engineering/ Technology','Fashion','Finance','Fine Arts','Home Science','Journalism/Media','Law','Management','Medicine','Nursing/ Health Sciences','Office administration','Science','Shipping','Travel &amp; Tourism'); ?>
        
        <select name="txtEdudetails" id="txtEdudetails" class="form-control" style="width:65%;">

      <?php
            foreach ($txtEdudetails as $castes) {
             if ($row['EducationDetails']==$castes) { ?>
                    <option value="<? echo $row['EducationDetails']; ?>" selected><? echo $row['EducationDetails']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 

                   

                  </select>
                </div>
              </div>
              <div class="form-group">
              <div class="col-md-10">
                 <label>Annual income</label>
                </div>
                <div class="col-md-10">
                  <?php
          $txtIncome1= array('Under   MYR.50,000','MYR.50,001 - 1,00,000','MYR.1,00,001 - 2,00,000','MYR.2,00,001 - 3,00,000','MYR.3,00,001 - 4,00,000','MYR.4,00,001 - 5,00,000','MYR.5,00,001 -   7,50,000','MYR.7,50,001 - 10,00,000 ','MYR.10,00,001 and above');
          
          $txtIncome2= array('Under $25,000','$25,001 - 50,000','$50,001 - 75,000','$75,001 - 100,000','$100,001 - 150,000','$150,001 -   200,000','$200,001 and above');
          
          $txtIncome3= array('No Income'); ?>
        <select name="txtIncome" id="txtIncome" class="form-control" style="width:65%;">
                    
                    <option value="<? echo $row['Annualincome']; ?>" selected>Annual Income<? echo $row['Annualincome']; ?></option>

                    <optgroup label=""></optgroup>

                    <optgroup label="Income in Indian Rupees">

                <?php
            foreach ($txtIncome1 as $castes) {
             if ($row['Annualincome']==$castes) { ?>
                   
            <?php } else { ?>

                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 

                    </optgroup>

                    <optgroup label=""></optgroup>

                    <optgroup label="Income in US Dollars">
          
             <?php
            foreach ($txtIncome2 as $castes) {
             if ($row['Annualincome']==$castes) { ?>
                    <option value="<? echo $row['Annualincome']; ?>" selected><? echo $row['Annualincome']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 


                    </optgroup>

                    <optgroup label=""></optgroup>
           <?php
            foreach ($txtIncome3 as $castes) {
             if ($row['Annualincome']==$castes) { ?>
                    <option value="<? echo $row['Annualincome']; ?>" selected><? echo $row['Annualincome']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 

                   

                  </select>
                </div>
              </div>
              <div class="form-group">
              <div class="col-md-10">
                 <label>Occupation</label>
                </div>
                <div class="col-md-10">
                  <?php 
        $txtOccu= array('Not working','Non-mainstream professional','Accountant','Acting Professional','Actor','Administration Professional','Air Hostess','Architect','Artisan','Audiologist','Banker','Beautician' ,'Biologist / Botanist','Business Person','Chartered Accountant','Civil Engineer','Clerical Official','Commercial Pilot','Company Secretary','Computer Professional','Consultant','Contractor','Cost Accountant','Creative Person','Customer Support Professional','Defense Employee','Dentist','Designer','Doctor','Economist','Engineer','Engineer (Mechanical)','Engineer (Project)','Entertainment Professional','Event Manager','Executive','Factory worker','Farmer','Fashion Designer','Finance Professional','Flight Attendant','Government Employee','Health Care Professional','Home Maker','Hotel & Restaurant Professional','Interior Designer','Investment Professional','IT / Telecom Professional','Journalist','Lawyer','Lecturer','Legal Professional','Manager','Marketing Professional','Media Professional','Medical Professional','Medical Transcriptionist','Merchant Naval Officer','Nurse','Occupational Therapist','Optician','Pharmacist','Physician Assistant','Physicist','Physiotherapist','Pilot',
'Politician','Production professional','Professor','Psychologist','Public Relations Professional','Real Estate Professional','Research Scholar','Retired Person','Retail Professional','Sales Professional','Scientist','Self-employed Person','Social Worker','Software Consultant','Sportsman','Student','Teacher','Technician','Training Professional','Transportation Professional','Veterinary Doctor','Volunteer','Writer','Zoologist');
        ?>
        <select name="txtOccu" class="form-control" id="txtOccu" style="width:65%;">

                  
   <?php
            foreach ($txtOccu as $castes) {
             if ($row['Occupation']==$castes) { ?>
                    <option value="<? echo $row['Occupation']; ?>" selected>Working In<? echo $row['Occupation']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
          

                  </select>
                </div>
              </div>
              <div class="form-group">
              <div class="col-md-10">
                 <label>Employed in</label>
                </div>

                <div class="col-md-10">
                  <?php
          $txtEmp= array('Business','Defence','Government','Not Employed in','Private','Others');
                
        ?>
        <select name="txtEmp" id="txtEmp" class="form-control" style="width:65%;">

                   
         <?php
            foreach ($txtEmp as $castes) {
             if ($row['Employedin']==$castes) { ?>
                    <option value="<? echo $row['Employedin']; ?>" selected><? echo $row['Employedin']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                 

                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-2">
                  <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Submit" alt="Submit">
                </div>
              
                <div class="col-md-2">
                  <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Cancel" alt="Cancel" onclick="window.location.href='modifyprofile.php';">
                </div>
              </div>
              



              
                 <!--<div align="left">

                  <input name="Submit" type="image" value="Submit" src="pics/save.gif" align="absmiddle">

                  <a href="modifyprofile.php"><img src="pics/cancel.gif" width="57" height="18" border="0"></a></div>--></td>

          
          </form>

          <div class="hline2"></div>

        </div>

      </div>

      <?php include("include/afterloginmenu_active.php"); ?>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">

        <tr>

          <td class="pg_left"></td>

          <td height="48" align="center" valign="middle" class="pg_center"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="prof_det_toolbar" style="height:48px;">

              <tr>

                <td width="80" class="p_d_block1"><a href="#top" class="btn_goTop">Go Top</a></td>

                <td>&nbsp;</td>

              </tr>

            </table></td>

          <td class="pg_right"></td>

        </tr>

      </table>

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