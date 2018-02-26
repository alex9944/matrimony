<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript">
function validate()
  {
 if (document.form.txtID.value == "" )
		 {
			alert( "Matri Id Required." );
			document.form.txtID.focus( );
			return false;
		}
	}
</script>
</head>

<body>
<div id="wrapper"> 
  
  <!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
  <!-- HEADER ENDS HERE ###################################################  --> 
  
  <!-- CONTENT AREA STARTS HERE ###################################################  --> 
  
  <!-- BREADCRUMBS STARTS HERE #####################################  -->
<!--   <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?Php echo $breadcrumbspage; ?></span> </div>
		<div id="breadcrumb_modifysearch"><a href="search_page.php" title="Modify Search" class="link" style="background-image:none">Modify Search >></a>				        </div>
      </li>
      <li class="right"></li>
    </ul>
  </div> -->
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  <div class="container">
  <div id="content_area" class="content-bg">
    <?php include("include/searchleftside.php"); ?>
    <div class="col-md-9">
    <div id="inner_right"> 
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ --> 
      <a name="top" id="top"></a>
      <div class="profile_block">
        <div class="header">
        <h2 class="float_left title">
          <span style="color:#333;" class="black">Matrimonial - </span>Matrimony ID Search
        </h2>
        </div>
        <div class="body">
          <table cellspacing="5" cellpadding="5" border="0" width="100%">
	        <tbody><tr>
    	        <td width="80" height="80"><img align="left" width="64" vspace="10" hspace="10" height="64" src="images/icons/search/id_srch.png"></td>
                <td>Search for a specific profile</strong> by entering the Matrimony ID.</td>
            </tr></tbody>
          </table>
        	<form action="id_search_submit.php"  method="post" name="form" id="form" onSubmit="return validate()">

	<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" class="tbl_profiledetails">

				<tr>
                  <td height="20" colspan="2"><div align="right" class="hline3">Note: All fields marked <span class="Alert">*</span> are Optional</div></td>
                </tr>

      <tr>

        <td><div align="left">* Matrimony ID</div></td>

        <td><div align="left">
        <input name="txtID" type="text" class="textbox1" id="txtID" maxlength="50" style="width:150px;"></td>

      </tr>

      <tr>

        <td>&nbsp;</td>

        <td  style="padding-left:24px;">

          <!--<input name="Submit" type="image" value="Submit" src="pics/submit_but.gif">-->
		  <input class="button-small square-orange uppercase" style="clear:both; border:0px; text-align:center; width:75px;" name="Submit" type="image" value="Submit"  />
		  </td>

      </tr>

      <tr>

        <td colspan="2"><div align="left">Matrimony ID is the identity of the profile which is provided by the website to the user at the time of creating the profile. Each profile ID is unique; Please ensure &amp; enter the correct Matrimony ID to get the specific result.</div></td>

      </tr>

    </table>

	</form>


        </div>
			
		<!--end left and right div here-->
		
		
		
		<table width="90%" border="0" cellpadding="0" cellspacing="0" class="table_srch" style=" border:none;" >
          <tr >
            <td width="33%"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">
              <tr>
                <td align="center"><h3><strong><a href="simplesearch.php">Simple Search</a></strong></h3></td>
              </tr>
              <tr>
                <td align="center"><a href="simplesearch.php"><img src="images/icons/search/search.png" width="64" height="64" /></a></td>
              </tr>
              <tr>
                <td align="center">Search based on the Minimal important criteria that you   would look for in a partner fastest way</td>
              </tr>
            </table></td>
            <td width="33%"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">
              <tr>
                <td align="center"><h3><strong><a href="adv_search.php">Advanced Search</a></strong></h3></td>
              </tr>
              <tr>
                <td align="center"><a href="adv_search.php"><img src="images/icons/search/search_male_user.png" width="64" height="64" /></a></td>
              </tr>
              <tr>
                <td align="center">The most comprehensive search that searches across all   criteria.</td>
              </tr>
            </table></td>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">
              <tr>
                <td align="center"><h3><strong><a href="keyword_search.php">Keyword Search</a></strong></h3></td>
              </tr>
              <tr>
                <td align="center"><a href="keyword_search.php"><img src="images/icons/search/search_page.png" width="64" height="64" /></a></td>
              </tr>
              <tr>
                <td align="center">Enter a word related to your search. For e.g. enter<strong> Software Professional </strong>.</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">
              <tr>
                <td align="center"><h3><strong><a href="edu_search.php" class="bodylink style1">Educational  Search</a></strong></h3></td>
              </tr>
              <tr>
                <td align="center"><a href="edu_search.php"><img src="images/icons/search/education_srch.png" width="64" height="64" /></a></td>
              </tr>
              <tr>
                <td align="center">Search and locates members who are finished higher education that you would look for in a partner. </td>
              </tr>
            </table></td>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">
              <tr>
                <td align="center"><h3><strong><a href="occu_search.php" class="bodylink style1">Occupational Search</a></strong></h3></td>
              </tr>
              <tr>
                <td align="center"><a href="occu_search.php"><img src="images/icons/search/prof_srch.png" width="64" height="64" /></a></td>
              </tr>
              <tr>
                <td align="center">Search based on the Occupation criteria that you   would look for in a partner.</td>
              </tr>
            </table></td>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_srch">
                <tr>
                  <td align="center"><h3><strong><a href="location_search.php" class="bodylink style1">Location Search </a></strong></h3></td>
                </tr>
                <tr>
                  <td align="center"><a href="location_search.php"><img src="images/icons/search/search_globe.png" width="64" height="64" /></a></td>
                </tr>
                <tr>
                  <td align="center">Search based on the Location criteria that you   would look for in a partner.</td>
                </tr>
              </table></td>
          </tr>
          <tr>
            
			
			
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
  
  
  
  <!--end small menu links-->
		
        <div class="footer"> <a href="#top" class="btn_goTop" style="margin-left:10px;">Go Top</a> </div>
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