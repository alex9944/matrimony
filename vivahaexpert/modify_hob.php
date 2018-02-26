<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/hobbies.js"></script>
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
          <h3 class="float_left title">Edit - Hobbies and Interests</h3> <span style="float:right"><img src="images/question.gif" border="0" />&nbsp; Hint: please hold <strong style="font-weight:normal; color:#A50050; font-size:12px;">CTRL-KEY</strong> and click to select more than one 

item</span>	
        </div>
        <div class="body" align="left">
          
             <FORM action="edit_hob.php" class="form-horizontal" role="form" method="post" style="margin-left:15%;">
          
            <div claSS="form-group">
                <div class="col-md-10">
                  <label>Hobbies</label>
                </div>
                <div class="col-md-10">
                  <?php $Hobbies = explode(",",$row['Hobbies']); ?>
                <select name="txtHobby[]" size="4"  class="forminput" id="txtHobby" style="width:65%;" multiple="multiple">
                        <option value="Acting" <?php if(in_array("Acting", $Hobbies)){ echo 'selected'; } ?>>Acting</option>
                        <option value="Astronomy" <?php if(in_array("Astronomy", $Hobbies)){ echo 'selected'; } ?>>Astronomy</option>
                        <option value="Astrology" <?php if(in_array("Astrology", $Hobbies)){ echo 'selected'; } ?>>Astrology</option>
                        <option value="Collectibles" <?php if(in_array("Collectibles", $Hobbies)){ echo 'selected'; } ?>>Collectibles</option>
                        <option value="Cooking" <?php if(in_array("Cooking", $Hobbies)){ echo 'selected'; } ?>>Cooking</option>
                        <option value="Crosswords" <?php if(in_array("Crosswords", $Hobbies)){ echo 'selected'; } ?>>Crosswords</option>
                        <option value="Dancing" <?php if(in_array("Dancing", $Hobbies)){ echo 'selected'; } ?>>Dancing</option>
                        <option value="Film-making" <?php if(in_array("Film-making", $Hobbies)){ echo 'selected'; } ?>>Film-making</option>
                        <option value="Fishing" <?php if(in_array("Fishing", $Hobbies)){ echo 'selected'; } ?>>Fishing</option>
                        <option value="Gardening/ landscaping" <?php if(in_array("Gardening/ landscaping", $Hobbies)){ echo 'selected'; } ?>>Gardening/ landscaping</option>
                        <option value="Graphology" <?php if(in_array("Graphology", $Hobbies)){ echo 'selected'; } ?>>Graphology</option>
                        <option value="ature" <?php if(in_array("ature", $Hobbies)){ echo 'selected'; } ?>>Nature</option>
                        <option value="umerology" <?php if(in_array("umerology", $Hobbies)){ echo 'selected'; } ?>>Numerology</option>
                        <option value="Painting" <?php if(in_array("Painting", $Hobbies)){ echo 'selected'; } ?>>Painting</option>
                        <option value="Palmistry" <?php if(in_array("Palmistry", $Hobbies)){ echo 'selected'; } ?>>Palmistry</option>
                        <option value="Pets" <?php if(in_array("Pets", $Hobbies)){ echo 'selected'; } ?>>Pets</option>
                        <option value="Photography" <?php if(in_array("Photography", $Hobbies)){ echo 'selected'; } ?>>Photography</option>
                        <option value="Playing musical instruments" <?php if(in_array("Playing musical instruments", $Hobbies)){ echo 'selected'; } ?>>Playing musical instruments</option>
                        <option value="Puzzles" <?php if(in_array("Puzzles", $Hobbies)){ echo 'selected'; } ?>>Puzzles</option>
                        <option value="o Hobbies" <?php if(in_array("o Hobbies", $Hobbies)){ echo 'selected'; } ?>>Not interest</option>
                      </select>
                </div>
            </div>    
            <div claSS="form-group">
                <div class="col-md-10">
                  <label>Other Hobby</label>
                </div>
                <div class="col-md-10">
                  <input name="txtOh" type="text" class="form-dontrol" id="txtOh" style="width:65%;" value="<? echo $row['OtherHobbies']; ?>" size="40" maxlength="40" onkeypress="if(event.keyCode) { kcode = event.keyCode; } else { kcode = event.charCode; } if((kcode == 46) || (kcode == 44) || (kcode == 8) || (kcode == 32) || (kcode == 59) || ((kcode >= 37) && (kcode <= 40)) || ((kcode >= 97) && (kcode <=122)) || ((kcode >= 65) && (kcode <=90))) { return true; } else { return false;}">
                </div>
            </div> 
            <div claSS="form-group">
                <div class="col-md-10">
                  <label>Interests</label>
                </div>
                <div class="col-md-10">
                  <?php $Interests = explode(",",$row['Interests']); ?>
                <select name="txtInterest[]" size="4"  multiple="multiple" class="form-control" id="select" style="width:65%;">
                        <option value="Adventure sports" <?php if(in_array("Adventure sports", $Interests)){ echo 'selected'; } ?>>Adventure sports</option>
                        <option value="Book clubs" <?php if(in_array("Book clubs", $Interests)){ echo 'selected'; } ?>>Book clubs</option>
                        <option value="Computer games" <?php if(in_array("Computer games", $Interests)){ echo 'selected'; } ?>>Computer games</option>
                        <option value="Health & fitness" <?php if(in_array("Health & fitness", $Interests)){ echo 'selected'; } ?>>Health & fitness</option>
                        <option value="Internet" <?php if(in_array("Internet", $Interests)){ echo 'selected'; } ?>>Internet</option>
                        <option value="Learning new languages" <?php if(in_array("Learning new languages", $Interests)){ echo 'selected'; } ?>>Learning new languages</option>
                        <option value="Movies" <?php if(in_array("Movies", $Interests)){ echo 'selected'; } ?>>Movies</option>
                        <option value="Music" <?php if(in_array("Music", $Interests)){ echo 'selected'; } ?>>Music</option>
                        <option value="Politics" <?php if(in_array("Politics", $Interests)){ echo 'selected'; } ?>>Politics</option>
                        <option value="Reading" <?php if(in_array("Reading", $Interests)){ echo 'selected'; } ?>>Reading</option>
                        <option value="Social service" <?php if(in_array("Social service", $Interests)){ echo 'selected'; } ?>>Social service</option>
                        <option value="Sports" <?php if(in_array("Sports", $Interests)){ echo 'selected'; } ?>> Sports</option>
                        <option value="Television" <?php if(in_array("Television", $Interests)){ echo 'selected'; } ?>>Television</option>
                        <option value="Theatre" <?php if(in_array("Theatre", $Interests)){ echo 'selected'; } ?>>Theatre</option>
                        <option value="Travel" <?php if(in_array("Travel", $Interests)){ echo 'selected'; } ?>>Travel</option>
                        <option value="Writing" <?php if(in_array("Writing", $Interests)){ echo 'selected'; } ?>>Writing</option>
                        <option value="Yoga" <?php if(in_array("Yoga", $Interests)){ echo 'selected'; } ?>>Yoga</option>
                        <option value="Alternative healing / medicine" <?php if(in_array("Alternative healing / medicine", $Interests)){ echo 'selected'; } ?>>Alternative healing / medicine</option>
                        <option value="ot interest" <?php if(in_array("ot interest", $Interests)){ echo 'selected'; } ?>>Not interest</option>
                      </select>
                </div>
            </div> 
            <div claSS="form-group">
                <div class="col-md-10">
                  <label>Other Interest</label>
                </div>
                <div class="col-md-10">
                  <input name="txtOi" type="text" class="form-control" id="txtOi" size="40" maxlength="40" style="width:65%;" value="<? echo $row['OtherInterests']; ?>" onkeypress="if(event.keyCode) { kcode = event.keyCode; } else { kcode = event.charCode; } if((kcode == 46) || (kcode == 44) || (kcode == 8) || (kcode == 32) || (kcode == 59) || ((kcode >= 37) && (kcode <= 40)) || ((kcode >= 97) && (kcode <=122)) || ((kcode >= 65) && (kcode <=90))) { return true; } else { return false;}">
                </div>
            </div> 
            <div claSS="form-group">
                <div class="col-md-2">
                <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Submit" alt="Submit">
                </div>
                <div class="col-md-2">
                   <input class="button-small btn btn-default uppercase float_right" style="float:none; clear:both; border:0px;" name="Submit" type="button" value="Cancel" alt="Cancel" onclick="window.location.href='modifyprofile.php';">
                </div>
            </div> 
                
              
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