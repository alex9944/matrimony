<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/educationsearch.js"></script>
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?></span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div>
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  
  <div id="content_area">
    <?php include("include/searchleftside.php"); ?>
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
        <h2 class="float_left title">
          <span style="color:#333;" class="black">Matrimonial - </span>Educational Search
        </h2>
        </div>
        <div class="body">
          <table cellspacing="5" cellpadding="5" border="0" width="100%">
	        <tbody><tr>
    	        <td width="80" height="80"><img align="left" width="64" vspace="10" hspace="10" height="64" src="images/icons/search/education_srch.png"></td>
                <td>Search based on a Educationa criteria one would look for in a   partner. Results can be viewed as Thumbnail View, Full View. If you like a profile you can Express Interest or Send Mail.</td>
            </tr></tbody>
          </table>
          <form action="edusearch_results.php" method="get" name="MatriForm" id="MatriForm" onSubmit="return validate()" >
            <table width="100%" border="0" cellpadding="3" cellspacing="2" class="tbl_profiledetails">
				<tr>
                  <td height="20" colspan="2"><div align="right" class="hline3">Note: All fields marked <span class="Alert">*</span> are Optional</div></td>
                </tr>
              <tr class="hline2">
                <td><div align="left">Looking for </div></td>
                <td><div align="left">
                    <input name="txtGender" type="radio" value="Male">
                    Male 
                    
                    &nbsp;
                    <input name="txtGender" type="radio" value="Female" checked>
                    Female </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Age</div></td>
                <td><div align="left">From
                    <INPUT name="txtSAge" class="textbox1" id="txtSAge" value="18" size="2" maxLength="2" onKeyUp="check_Age('txtSAge')">
                    &nbsp; to &nbsp;
                    <INPUT name="txtEAge" class="textbox1" id="txtEAge" value="60" size="2" maxLength="2" onKeyUp="check_Age('txtEAge')" >
                    years </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Religion</div></td>
                <td><div align="left">
                    <select name="religion" id="religion" onChange="return caste_disable(document.MatriForm.religion);" style="width:200px;">
                      <option value="" selected>- Select -</option>
                      <option>Hindu</option>
                      <option>Christian</option>
                      <option>Muslim</option>
                      <option>Sikh</option>
                      <option>Jain</option>
                      <option>Parsi</option>
                      <option>Buddhist</option>
                      <option>Bahai</option>
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Caste</div></td>
                <td><div align="left">
                    <select name="caste" id="caste" style="width:180px;">
                      <option value="Any">Any</option>
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Country</div></td>
                <td><div align="left"><input type="text" name="Country" id="Country" value="" class="textbox1" /></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">State</div></td>
                <td><div align="left"><input type="text" name="State" id="State" value="" class="textbox1" /></div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Education</div></td>
                <td><div align="left">
                    <select name="txtEdu" class="forminput" id="txtEdu" style="width:180px;">
                      <option value="" selected>Any</option>
                      <option value="Bachelors">Bachelors</option>
                      <option value="Masters">Masters</option>
                      <option value="Doctorate">Doctorate</option>
                      <option value="Diploma">Diploma</option>
                      <option value="Undergraduate">Undergraduate</option>
                      <option value="Associates degree">Associates degree</option>
                      <option value="Honours degree">Honours degree</option>
                      <option value="Trade school">Trade school</option>
                      <option value="High school">High school</option>
                      <option value="Less than high school">Less than high school</option>
                    </select>
                  </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left">Show *</div></td>
                <td><div align="left">
                    <input name="txtphoto" type="checkbox" id="txtphoto" value="Show profiles with Photo">
                    Profiles with Photo<br /><input name="txthoros" type="checkbox" id="txthoros" value="Show profiles with Horoscope">
                    Profiles with Horoscope </div></td>
              </tr>
              <tr class="hline2">
                <td><div align="left"></div></td>
                <td><div align="left">
                    <input name="Submit" type="image" value="Submit" src="pics/search-button.gif">
                  </div></td>
              </tr>
            </table>
          </form>
        </div>
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
      </div>
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