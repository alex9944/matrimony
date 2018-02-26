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
          <h3 class="float_left title">Edit - Family Details</h3>
        </div>
        <div class="body" align="left">
          <FORM action="edit_fam.php" class="form-horizontal" role="form" method="post" style="margin-left:15%;">
              <div class="form-group">
                <div class="col-md-10">
                  <label>Family Details</label>
                </div>
                <div class="col-md-10">
                  <textarea name="txtFD" class="form-control" rows="3" id="txtFD" style="width:65%;" onKeyUp="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onkeypress="if(event.keyCode) { kcode = event.keyCode; } else { kcode = event.charCode; } if((kcode == 46) || (kcode == 44) || (kcode == 8) || (kcode == 32) || (kcode == 59) || ((kcode >= 37) && (kcode <= 40)) || ((kcode >= 97) && (kcode <=122)) || ((kcode >= 65) && (kcode <=90))) { return true; } else { return false;}"><? echo $row['FamilyDetails']; ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <label>Family Values</label>
                </div>
                <div class="col-md-10">
                  <?php
          $txtFV= array('Traditional','Orthodox','Liberal','Moderate');
                
        ?>
        <select name="txtFV" id="txtFV" class="form-control" style="width:65%;">
                     <?php
            foreach ($txtFV as $castes) {
             if ($row['Familyvalues']==$castes) { ?>
                    <option value="<? echo $row['Familyvalues']; ?>" selected><? echo $row['Familyvalues']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <label>Family Type</label>
                </div>
                <div class="col-md-10">
                  <?php
          $txtFT= array('Seperate Family','Joint Family');
                
        ?>
        
        <select name="txtFT" id="txtFT" class="form-control" style="width:65%;">
                    
                     <?php
            foreach ($txtFT as $castes) {
             if ($row['FamilyType']==$castes) { ?>
                    <option value="<? echo $row['FamilyType']; ?>" selected><? echo $row['FamilyType']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <label>Family Status</label>
                </div>
                <div class="col-md-10">
                  <?php
          $txtFS= array('Rich','Upper Middle Class','High Class','Middle Class','Do not want to tell at this time');
                
        ?>
        <select name="txtFS" class="form-control" id="txtFS" style="width:65%;">
                
                  <?php
            foreach ($txtFS as $castes) {
             if ($row['FamilyStatus']==$castes) { ?>
                    <option value="<? echo $row['FamilyStatus']; ?>" selected><? echo $row['FamilyStatus']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
          
          </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <label>Family Origin</label>
                </div>
                <div class="col-md-10">
                  <input name="txtFO" type="text" class="form-control" style="width:65%;" id="txtFO" onKeyUp="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onkeypress="if(event.keyCode) { kcode = event.keyCode; } else { kcode = event.charCode; } if((kcode == 46) || (kcode == 44) || (kcode == 8) || (kcode == 32) || (kcode == 59) || ((kcode >= 37) && (kcode <= 40)) || ((kcode >= 97) && (kcode <=122)) || ((kcode >= 65) && (kcode <=90))) { return true; } else { return false;}" value="<? echo $row['FamilyOrigin']; ?>" size="40" maxlength="40">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <label>No of Brothers</label>
                </div>
                <div class="col-md-10">
                  <?php
          $txtFS1= array('0','1','2','3','4','4 +');
                
        ?>

         <select name="txtFS1" id="txtFS1" class="form-control" style="width:65%;">
                      <?php
            foreach ($txtFS1 as $castes) {
             if ($row['noofbrothers']==$castes) { ?>
                    <option value="<? echo $row['noofbrothers']; ?>" selected><? echo $row['noofbrothers']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
          
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <label>No of Sisters</label>
                </div>
                <div class="col-md-10">
                  <?php
          $txtFS2= array('0','1','2','3','4','4 +');
                
        ?>
        <select name="txtFS2" id="txtFS2" class="form-control" style="width:65%;">
                   
                    <?php
            foreach ($txtFS2 as $castes) {
             if ($row['noofsisters']==$castes) { ?>
                    <option value="<? echo $row['noofsisters']; ?>" selected><? echo $row['noofsisters']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <label>No of Brothers  Married</label>
                </div>
                <div class="col-md-10">
                  <?php
          $nbm= array('No married brother','One married brother','Two married brother','Three married brother','Four married brother','Above four married brother');
                
        ?>
         <select name="nbm" id="nbm" class="form-control" style="width:65%;">
                   
                <?php
            foreach ($nbm as $castes) {
             if ($row['nbm']==$castes) { ?>
                    <option value="<? echo $row['nbm']; ?>" selected><? echo $row['nbm']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <label>No of Sisiters  Married</label>
                </div>
                <div class="col-md-10">
                  <?php
          $nsm= array('No married sister','One married sister','Two married sisters','Three married sisters','Four married sisters','Above four married sisters');
                
        ?>
        <select name="nsm" id="nsm" class="form-control" style="width:65%;">
                   
                    <?php
            foreach ($nsm as $castes) {
             if ($row['nsm']==$castes) { ?>
                    <option value="<? echo $row['nsm']; ?>" selected><? echo $row['nsm']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <label>Father Name</label>
                </div>
                <div class="col-md-10">
                  <input name="txtFANAME" type="text" class="form-control" style="width:65%; id="txtFANAME" size="40" maxlength="20" onKeyUp="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onkeypress="if(event.keyCode) { kcode = event.keyCode; } else { kcode = event.charCode; } if((kcode == 46) || (kcode == 44) || (kcode == 8) || (kcode == 32) || (kcode == 59) || ((kcode >= 37) && (kcode <= 40)) || ((kcode >= 97) && (kcode <=122)) || ((kcode >= 65) && (kcode <=90))) { return true; } else { return false;}" value="<? echo $row['Fathername']; ?>" >
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <label>Father Occupation</label>
                </div>
                <div class="col-md-10">
                  <input name="txtFFO" type="text" class="form-control" style="width:65%; id="txtFFO" size="40" maxlength="10" onKeyUp="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onkeypress="if(event.keyCode) { kcode = event.keyCode; } else { kcode = event.charCode; } if((kcode == 46) || (kcode == 44) || (kcode == 8) || (kcode == 32) || (kcode == 59) || ((kcode >= 37) && (kcode <= 40)) || ((kcode >= 97) && (kcode <=122)) || ((kcode >= 65) && (kcode <=90))) { return true; } else { return false;}" value="<? echo $row['Fathersoccupation']; ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <label>Mother Name</label>
                </div>
                <div class="col-md-10">
                  <input name="txtMONAME" type="text" class="form-control" style="width:65%; id="txtMONAME" size="40" maxlength="20" onKeyUp="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onkeypress="if(event.keyCode) { kcode = event.keyCode; } else { kcode = event.charCode; } if((kcode == 46) || (kcode == 44) || (kcode == 8) || (kcode == 32) || (kcode == 59) || ((kcode >= 37) && (kcode <= 40)) || ((kcode >= 97) && (kcode <=122)) || ((kcode >= 65) && (kcode <=90))) { return true; } else { return false;}" value="<? echo $row['Mothersname']; ?>" >
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <label>Mother Occupation</label>
                </div>
                <div class="col-md-10">
                  <input name="txtFMO" type="text" class="form-control" style="width:65%; id="txtFMO" size="40" maxlength="40" onKeyUp="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,1000)" onkeypress="if(event.keyCode) { kcode = event.keyCode; } else { kcode = event.charCode; } if((kcode == 46) || (kcode == 44) || (kcode == 8) || (kcode == 32) || (kcode == 59) || ((kcode >= 37) && (kcode <= 40)) || ((kcode >= 97) && (kcode <=122)) || ((kcode >= 65) && (kcode <=90))) { return true; } else { return false;}" value="<? echo $row['Mothersoccupation']; ?>">
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
            
          </FORM>
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