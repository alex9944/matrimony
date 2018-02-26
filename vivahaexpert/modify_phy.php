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
          <h3 class="float_left title">Edit - Physical Attributes</h3><span style="float:right"><img src="images/question.gif" border="0" /> &nbsp;Hint: please hold <strong style="font-weight:normal; color:#A50050; font-size:12px;">CTRL-KEY</strong> and click to select more than one item</span>	
        </div>
        <div class="body" align="left">
          <form action="edit_phy.php" class="form-horizontal" role="form" method="post" style="margin-left:15%;">
             
             <div class="form-group">
             <div class="col-md-10">
                 <label>Height</label>
                </div>
              <div class="col-md-10">
                 <?php 

$StrAction=$_GET['action'];

if ($StrAction == "physuccess")

{

  echo "<table width=97% border=0 cellpadding=0 cellspacing=0 >";

  echo "<tr>";

  echo "<td class=Alert><strong>Profile Updated Successfully.</strong> </td>";

  echo "</tr>";

  echo "</table>";

}



?>
<?php
          $txtHeight= array('Mention later','Below 4ft','4ft 6in','4ft 7in','4ft 8in','4ft 9in','4ft 10in','4ft 11in','5ft','5ft 1in','5ft 2in','5ft 3in','5ft 4in','5ft 5in','5ft 6in','5ft 7in','5ft 8in','5ft 9in','5ft 10in','5ft 11in','6ft','6ft 1in','6ft 2in','6ft 3in','6ft 4in','6ft 5in','6ft 6in ','6ft 7in','6ft 8in','6ft 9in','6ft 10in','6ft 11in','7ft','Above 7ft');
          
        $strheight = $row['Height'];
                
        ?>
        <select name="txtHeight" id="txtHeight" class="form-control" style="width:65%;">
                    
          <option>Height</option>
          
              <option value="1" <?php if($strheight == '1') echo "selected"; ?>>4ft - 121 cm</option>
              <option value="2" <?php if($strheight == '2') echo "selected"; ?>>4ft 1in - 124cm</option>
              <option value="3" <?php if($strheight == '3') echo "selected"; ?>>4ft 2in - 127cm</option>
              <option value="4" <?php if($strheight == '4') echo "selected"; ?>>4ft 3in - 129cm</option>
              <option value="5" <?php if($strheight == '5') echo "selected"; ?>>4ft 4in - 132cm</option>
              <option value="6" <?php if($strheight == '6') echo "selected"; ?>>4ft 5in - 134cm</option>
              <option value="7" <?php if($strheight == '7') echo "selected"; ?>>4ft 6in - 137cm</option>
              <option value="8" <?php if($strheight == '8') echo "selected"; ?>>4ft 7in - 139cm</option>
              <option value="9" <?php if($strheight == '9') echo "selected"; ?>>4ft 8in - 142cm</option>
              <option value="10" <?php if($strheight == '10') echo "selected"; ?>>4ft 9in - 144cm</option>
              <option value="11" <?php if($strheight == '11') echo "selected"; ?>>4ft 10in - 147cm</option>
              <option value="12" <?php if($strheight == '12') echo "selected"; ?>>4ft 11in - 149cm</option>
              <option value="13" <?php if($strheight == '13') echo "selected"; ?>>5ft - 152cm</option>
              <option value="14" <?php if($strheight == '14') echo "selected"; ?>>5ft 1in - 154cm</option>
              <option value="15" <?php if($strheight == '15') echo "selected"; ?>>5ft 2in - 157cm</option>
              <option value="16" <?php if($strheight == '16') echo "selected"; ?>>5ft 3in - 160cm</option>
              <option value="17" <?php if($strheight == '17') echo "selected"; ?>>5ft 4in - 162cm</option>
              <option value="18" <?php if($strheight == '18') echo "selected"; ?>>5ft 5in - 165cm</option>
              <option value="19" <?php if($strheight == '19') echo "selected"; ?>>5ft 6in - 167cm</option>
              <option value="20" <?php if($strheight == '20') echo "selected"; ?>>5ft 7in - 170cm</option>
              <option value="21" <?php if($strheight == '21') echo "selected"; ?>>5ft 8in - 172cm</option>
              <option value="22" <?php if($strheight == '22') echo "selected"; ?>>5ft 9in - 175cm</option>
              <option value="23" <?php if($strheight == '23') echo "selected"; ?>>5ft 10in - 177cm</option>
              <option value="24" <?php if($strheight == '24') echo "selected"; ?>>5ft 11in - 180cm</option>
              <option value="25" <?php if($strheight == '25') echo "selected"; ?>>6ft - 182cm</option>
              <option value="26" <?php if($strheight == '26') echo "selected"; ?>>6ft 1in - 185cm</option>
              <option value="27" <?php if($strheight == '27') echo "selected"; ?>>6ft 2in - 187cm</option>
              <option value="28" <?php if($strheight == '28') echo "selected"; ?>>6ft 3in - 190cm</option>
              <option value="29" <?php if($strheight == '29') echo "selected"; ?>>6ft 4in - 193cm</option>
              <option value="30" <?php if($strheight == '30') echo "selected"; ?>>6ft 5in - 195cm</option>
              <option value="31" <?php if($strheight == '31') echo "selected"; ?>>6ft 6in - 198cm</option>
              <option value="32" <?php if($strheight == '32') echo "selected"; ?>>6ft 7in - 200cm</option>
              <option value="33" <?php if($strheight == '33') echo "selected"; ?>>6ft 8in - 203cm</option>
              <option value="34" <?php if($strheight == '34') echo "selected"; ?>>6ft 9in - 205cm</option>
              <option value="35" <?php if($strheight == '35') echo "selected"; ?>>6ft 10in - 208cm</option>
              <option value="36" <?php if($strheight == '36') echo "selected"; ?>>6ft 11in - 210cm</option>
              <option value="37" <?php if($strheight == '37') echo "selected"; ?>>7ft - 213cm</option>
          
          
                    
                  </select>
              </div>
             </div> 
             <div class="form-group">
             <div class="col-md-10">
                 <label>Weight</label>
                </div>
              <div class="col-md-10">
                <?php
          $txtWeight= array('41 kg','42 kg','43 kg','44 kg','45 kg','46 kg','47 kg','48 kg','49 kg','50 kg','51 kg','52 kg','53 kg','54 kg','55 kg','56 kg','57 kg','58 kg','59 kg','60 kg','61 kg','62 kg','63 kg','64 kg','65 kg','66 kg','67 kg','68 kg','69 kg','70 kg','71 kg','72 kg','73 kg','74 kg','75 kg','76 kg','77 kg','78 kg','79 kg','80 kg','81 kg','82 kg','83 kg','84 kg','85 kg','86 kg','87 kg','88 kg','89 kg','90 kg','91 kg','92 kg','93 kg','94 kg','95 kg','96 kg','97 kg','98 kg','99 kg','100 kg','101 kg','102 kg','103 kg','104 kg','105 kg','106 kg','107 kg','Above 107 Kg');
                
        ?>
        <select name="txtWeight" id="txtWeight" class="form-control" style="width:65%;">
                   <?php
                    foreach ($txtWeight as $castes) {
             if ($row['Weight']==$castes) { ?>
                    <option value="<? echo $row['Weight']; ?>" selected><? echo $row['Weight']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                  </select>
              </div>
             </div> 
             <div class="form-group">
             <div class="col-md-10">
                 <label>Blood Group</label>
                </div>
              <div class="col-md-10">
                <?php
          $txtBlood= array('A+','A-','A1 +','A1 -','A1B +','A1B -','A2 +','A2 -','A2B +','A2B -','AB+','AB-','B+','B-','O+');
                
        ?>
        <select  name="txtBlood" id="txtBlood" class="form-control" style="width:65%;">
                 
                     <?php
                    foreach ($txtBlood as $castes) {
             if ($row['BloodGroup']==$castes) { ?>
                    <option value="<? echo $row['BloodGroup']; ?>" selected><? echo $row['BloodGroup']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                  </select>
              </div>
             </div> 
             <div class="form-group">
             <div class="col-md-10">
                 <label>Complexion</label>
                </div>
              <div class="col-md-10">
                <?php
          $txtComplexion= array('Very Fair','Fair','Wheatish','Wheatish Medium','Wheatish Brown','Dark');
        ?>
        <select name="txtComplexion" id="txtComplexion" class="form-control" style="width:65%;">
                    
                    <?php
                    foreach ($txtComplexion as $castes) {
             if ($row['Complexion']==$castes) { ?>
                    <option value="<? echo $row['Complexion']; ?>" selected><? echo $row['Complexion']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                  </select>
              </div>
             </div> 
             <div class="form-group">
             <div class="col-md-10">
                 <label>Body type</label>
                </div>
              <div class="col-md-10">
                <?php
          $txtBody= array('Slim','Average','Heavy','Athletic');
        ?>
        <select name="txtBody" id="txtBody" class="form-control" style="width:65%;">
                    
           <?php
                    foreach ($txtBody as $castes) {
             if ($row['Bodytype']==$castes) { ?>
                    <option value="<? echo $row['Bodytype']; ?>" selected><? echo $row['Bodytype']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                  </select>
              </div>
             </div> 
             <div class="form-group">
             <div class="col-md-10">
                 <label>Diet</label>
                </div>
              <div class="col-md-10">
                <?php
          $txtDiet= array('Veg','Eggetarian','Occasionally Non-Veg','Non-Veg','Jain','Vegan');
        ?>        
        <select name="txtDiet" class="form-control" id="txtDiet" style="width:65%;">
                    <option value="<? echo $row['Diet']; ?>">Diet<? echo $row['Diet']; ?></option>
                  <?php
                    foreach ($txtBody as $castes) {
             if ($row['Diet']==$castes) { ?>
                    <option value="<? echo $row['Diet']; ?>" selected><? echo $row['Diet']; ?></option>
            <?php } else { ?>
                      <option value="<? echo $castes ?>" ><? echo $castes ?></option>
            <?php }  }?> 
                  </select>
              </div>
             </div> 
             <div class="form-group">
             <div class="col-md-10">
                 <label>Habits</label>
                </div>
              <div class="col-md-10">
                <?php  $fechhabb=explode(',',$row['txtHabbits']); ?></div></td>
                <td>
              <select name="txtHabbits[]" class="form-control" id="txtHabbits" style="width:65%;" multiple="multiple">
  <option value="" <?php if(in_array("", $fechhabb)){ echo 'selected'; } ?>>- Select -</option>
  <option value="Not Important" <?php if(in_array("Not Importan", $fechhabb)){ echo 'selected'; } ?>>Not Important</option>
  <option value="Non-drinker" <?php if(in_array("Non-drinker", $fechhabb)){ echo 'selected'; } ?>>Non-drinker</option>
  <option value="Occasional drinker" <?php if(in_array("Occasional drinker", $fechhabb)){ echo 'selected'; } ?>>Occasional drinker</option>
  <option value="Enjoy drinking" <?php if(in_array("Enjoy drinking", $fechhabb)){ echo 'selected'; } ?>>Enjoy drinking</option>
  <option value="Drink to excess" <?php if(in_array("Drink to excess", $fechhabb)){ echo 'selected'; } ?>>Drink to excess</option>
  <option value="Non-smoker" <?php if(in_array("Non-smoker", $fechhabb)){ echo 'selected'; } ?>>Non-smoker</option>
  <option value="Quitting smoking" <?php if(in_array("Quitting smoking", $fechhabb)){ echo 'selected'; } ?>>Quitting smoking</option>
  <option value="Smoke occasionally" <?php if(in_array("Smoke occasionally", $fechhabb)){ echo 'selected'; } ?>>Smoke occasionally</option>
  <option value="Smoke frequently" <?php if(in_array("Smoke frequently", $fechhabb)){ echo 'selected'; } ?>>Smoke frequently</option>
</select>
              </div>
                           <div class="form-group">
              <div class="col-md-2">
                <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Submit" alt="Submit">
              </div>
              <div class="col-md-2">
                <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Cancel" alt="Cancel" onclick="window.location.href='modifyprofile.php';">
              </div>
             </div>    
             </div> 
   
            

                   
              
             
              <!--<tr class="hline2">
                <td><div align="left">Smoke</div></td>
                <td><div align="left"><select name="txtSmoke" id="txtSmoke" style="width:65%;">
                    <option value="<? echo $row['Smoke']; ?>"><? echo $row['Smoke']; ?></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Occasionally">Occasionally</option>
                  </select></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Drink</div></td>
                <td><div align="left"><select name="txtDrink" id="txtDrink" style="width:65%;">
                    <option value="<? echo $row['Drink']; ?>"><? echo $row['Drink']; ?></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Occasionally">Occasionally</option>
                  </select></div></td>
              </tr>-->
               
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