<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script type="text/JavaScript">

<!--

function MM_openBrWindow(theURL,winName,features) { //v2.0

  window.open(theURL,winName,features);

}
</script>
</head>

<body>
<?php include("config.php"); 
$strid=$_SESSION['username']; 

$photochk = mysql_query("SELECT MatriID,Photoprotect,PhotoprotectPassword,Photo1,Photo2,Photo3,Photo4,Photo5,Photo6,Photo7, Photo1Approve, Photo2Approve, Photo3Approve, Photo4Approve, Photo5Approve, Photo6Approve, Photo7Approve  FROM register where MatriID='$strid' ");
?>
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
        <div id="breadcrumb_text">You are Here: <span class="pathway"> <?php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Photo Upload</span> </div>
      </li>
      <li class="right"></li>
    </ul>
  </div> -->
  <!-- BREADCRUMBS ENDS HERE ########################################  -->
  <div class="container">
  <div id="content_area" class="content-bg">
    <?Php include('include/loginsidebar.php'); 
	$row = mysql_fetch_array($memcontrol)
	?>
  <div class="col-md-9">
    <div id="inner_right"> 
      
      <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
      <h1><a name="top" id="top"></a>Nice to See You..., <strong>
        <?php  echo $_SESSION['name'];?>
        </strong></h1>
      <div class="profile_block">
        <div class="header">
          <h3 class="float_left title">Photo Upload</h3>
        </div>
        <div class="body" align="left">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
            <tr>
              <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="left">Manage Your photos : Add Photo/Change your photos here.<br>
                      <br>
                      1. Get 20 times more responses. <br>
                      2. Express yourself in more than one way. <br>
                      3. Acceptable Formats : <span class="Alert">GIF</span> and <span class="Alert">JPG</span>. </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><?php  while($row = mysql_fetch_array($photochk)){ ?>
                      <table width="550" border="0" cellpadding="2" cellspacing="2" align="center">
                        <tr>
                          <td colspan="5"><div align="center"> </div></td>
                        </tr>
                        <tr>
                          <td width="158">&nbsp;</td>
                          <td width="66" valign="top"><div align="center"> 
                              
                              <!-- Photoupload1 table -->
                              
                              <?php	

				

			if($row['Photo1']=="nophoto.gif" or $row['Photo1']== "" )

			

			{	

			?>
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="submenubox" id="PhotouploadTable11" >
                                <tr>
                                  <td height="19" bgcolor="#FFEFD9"><div align="center" class="bodysg"><strong> Photo</strong> 1 </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <a href="photoupload.php?Choice=1"> <img src="pics/photonotavailable.gif" name="Mainphoto" width="75" height="75" border="0" id="Mainphoto" /></a>
                                      <div align="center"> <a href="photoupload.php?Choice=1"> Add Photo 1 </a></div>
                                      <br>
                                    </div></td>
                                </tr>
                              </table>
                              <?php

} 

else

{

?>
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" id="PHMainPhoto" >
                                <tr>
                                  <td height="19" bgcolor="#FFEFD9"><div align="center"><strong> Photo</strong> 1 </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <img width="100" height="100" src="memphoto1/<?php echo $row['Photo1']?>" /> </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center">
                                    <a href="modifyphoto.php?Choice=1&op=<?php  echo $row['Photo1'] ?>">Modify Photo 1 </a> <br>
                                    <br>
                                    <div align="center"> <a href="deletephoto.php?Choice=1&op=<?php  echo $row['Photo1'] ?>">Delete Photo 1 </a> <br>
                                      <br>
                                      <?php
									  
									   if($row['Photoprotect']==""){

		?>
                                      <a href="#" onClick="MM_openBrWindow('protect_photo.php','ppm','width=590,height=420')">Protect My Photo </a>
                                      <?php }?>
                                      <?php if($row['Photoprotect']=="Yes"){

			?>
                                      <a href="#" onClick="MM_openBrWindow('Remove_photoprotect.php','ppm','width=590,height=420')">Remove Photo Protect </a>
                                      <?php }?>
                                    </div>
                                    <br></td>
                                </tr>
                              </table>
                              
                              <!--  -->
                              
                              <?php

}

?>
                            </div></td>
                          <td width="66" valign="top"><!-- Photoupload2 table --> 
                            
                            <!--  --> 
                            
                            <!-- Photo2 Display table --> 
                            
                            <!--  -->
                            
                            <div align="center"> 
                              
                              <!-- Photoupload1 table -->
                              
                              <?php		

			

			

			if($row['Photo2']=="nophoto.gif" or $row['Photo2']== "" )

			{	

			

			?>
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails"  >
                                <tr>
                                  <td height="19" bgcolor="#FFEFD9"><div align="center"><strong> Photo</strong> 2 </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <a href="photoupload.php?Choice=2"> <img src="pics/photonotavailable.gif" name="Mainphoto" width="75" height="75" border="0" id="Mainphoto" /></a>
                                      <div align="center"> <a href="photoupload.php?Choice=2"> Add Photo 2 </a></div>
                                      <br>
                                    </div></td>
                                </tr>
                              </table>
                              <?php

} 

else

{

?>
                              
                              <!--  -->
                              
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" >
                                <tr>
                                  <td height="19" bgcolor="#FFEFD9"><div align="center"><strong> Photo</strong> 2 </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"><img width="100" height="100" src="memphoto2/<?php echo $row['Photo2']?>" /></div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <a href="modifyphoto.php?Choice=2&op=<?php echo $row['Photo2']; ?>">Modify Photo 2 </a> </div>
                                    <br>
                                    
                                    <div align="center">
                                    <a href="deletephoto.php?Choice=2&op=<?php  echo $row['Photo2'] ?>">Delete Photo 2 </a> <br> <br>
									
									<?php
									  
									   if($row['Photoprotect']==""){

		?>
                                      <a href="#" onClick="MM_openBrWindow('protect_photo.php','ppm','width=590,height=420')">Protect My Photo </a>
                                      <?php }?>
                                      <?php if($row['Photoprotect']=="Yes"){

			?>
                                      <a href="#" onClick="MM_openBrWindow('Remove_photoprotect.php','ppm','width=590,height=420')">Remove Photo Protect </a>
                                      <?php }?> </div>
									</td>
                                </tr>
                              </table>
                              <?php

}

?>
                            </div></td>
                          <td width="66" valign="top"><div align="center"> 
                              
                              <!-- Photoupload1 table -->
                              
                              <?php		

			//print_r($row);
			//echo $row['Photo3Approve']; exit;
			if($row['Photo3']=="nophoto.gif" or $row['Photo3']== "" )

			{	

			?>
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" id="PhotouploadTable11" >
                                <tr>
                                  <td height="19" bgcolor="#FFEFD9"><div align="center"><strong> Photo </strong>3</div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <a href="photoupload.php?Choice=3"> <img src="pics/photonotavailable.gif" name="Mainphoto" width="75" height="75" border="0" id="Mainphoto" /></a>
                                      <div align="center"> <a href="photoupload.php?Choice=3"> Add Photo 3 </a></div>
                                      <br>
                                    </div></td>
                                </tr>
                              </table>
                              <?php 

} 

else

{

?>
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" id="PHMainPhoto" >
                                <tr>
                                  <td height="19" bgcolor="#FFEFD9"><div align="center"><strong> Photo</strong> 3 </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"><img width="100" height="100" src="memphoto3/<?php echo $row['Photo3']?>" /></div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <a href="modifyphoto.php?Choice=3&op=<?php echo $row['Photo3']; ?>">Modify Photo 3 </a> </div>
                                    <br>
                                    
                                    <div align="center">
                                    <a href="deletephoto.php?Choice=3&op=<?php  echo $row['Photo3'] ?>">Delete Photo 3 </a> <br> <br>
									<?php
									  
									   if($row['Photoprotect']==""){

		?>
                                      <a href="#" onClick="MM_openBrWindow('protect_photo.php','ppm','width=590,height=420')">Protect My Photo </a>
                                      <?php }?>
                                      <?php if($row['Photoprotect']=="Yes"){

			?>
                                      <a href="#" onClick="MM_openBrWindow('Remove_photoprotect.php','ppm','width=590,height=420')">Remove Photo Protect </a>
                                      <?php }?>
									 </div></td>
                                </tr>
                              </table>
                              <?php

}

?>
                            </div></td>
                          <td width="190">&nbsp;</td>
                        </tr>
						
						
						
						
						
						
						
						
						
						
						
						<tr>
                          <td width="158">&nbsp;</td>
                          <td width="66" valign="top"><div align="center"> 
                              
                              <!-- Photoupload1 table -->
                              
                              <?php	

				

			if($row['Photo4']=="nophoto.gif" or $row['Photo4']=="" )

			

			{	

			?>
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="submenubox" id="PhotouploadTable11" >
                                <tr>
                                  <td height="19" bgcolor="#FFEFD9"><div align="center" class="bodysg"><strong> Photo</strong> 4 </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <a href="photoupload.php?Choice=4"> <img src="pics/photonotavailable.gif" name="Mainphoto" width="75" height="75" border="0" id="Mainphoto" /></a>
                                      <div align="center"> <a href="photoupload.php?Choice=4"> Add Photo 4 </a></div>
                                      <br>
                                    </div></td>
                                </tr>
                              </table>
                              <?php

} 

else

{

?>
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" id="PHMainPhoto" >
                                <tr>
                                  <td height="19" bgcolor="#FFEFD9"><div align="center"><strong> Photo</strong> 4 </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <img width="100" height="100" src="memphoto4/<?php echo $row['Photo4']?>" /> </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center">
                                    <a href="modifyphoto.php?Choice=4&op=<?php  echo $row['Photo4'] ?>">Modify Photo 4 </a> <br>
                                    <br>
                                    <div align="center"> <a href="deletephoto.php?Choice=4&op=<?php  echo $row['Photo4'] ?>">Delete Photo 4 </a> <br>
                                      <br>
                                      <?php if($row['Photoprotect']==""){

		?>
                                      <a href="#" onClick="MM_openBrWindow('protect_photo.php','ppm','width=590,height=420')">Protect My Photo </a>
                                      <?php }?>
                                      <?php if($row['Photoprotect']=="Yes"){

			?>
                                      <a href="#" onClick="MM_openBrWindow('Remove_photoprotect.php','ppm','width=590,height=420')">Remove Photo Protect </a>
                                      <?php }?>
                                    </div>
                                    <br></td>
                                </tr>
                              </table>
                              
                              <!--  -->
                              
                              <?php

}

?>
                            </div></td>
                          <td width="66" valign="top"><!-- Photoupload2 table --> 
                            
                            <!--  --> 
                            
                            <!-- Photo2 Display table --> 
                            
                            <!--  -->
                            
                            <div align="center"> 
                              
                              <!-- Photoupload1 table -->
                              
                              <?php		

			

			

			if($row['Photo5']=="nophoto.gif" or $row['Photo5']=="" )

			{	

			

			?>
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails"  >
                                <tr>


                                  <td height="19" bgcolor="#FFEFD9"><div align="center"><strong> Photo</strong> 5 </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <a href="photoupload.php?Choice=5"> <img src="pics/photonotavailable.gif" name="Mainphoto" width="75" height="75" border="0" id="Mainphoto" /></a>
                                      <div align="center"> <a href="photoupload.php?Choice=5"> Add Photo 5</a></div>
                                      <br>
                                    </div></td>
                                </tr>
                              </table>
                              <?php

} 

else

{

?>
                              
                              <!--  -->
                              
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" >
                                <tr>
                                  <td height="19" bgcolor="#FFEFD9"><div align="center"><strong> Photo</strong> 5 </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"><img width="100" height="100" src="memphoto5/<?php echo $row['Photo5']?>" /></div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <a href="modifyphoto.php?Choice=5&op=<?php echo $row['Photo5']; ?>">Modify Photo 5 </a> </div>
                                    <br>
                                   
                                    <div align="center">
                                    <a href="deletephoto.php?Choice=5&op=<?php  echo $row['Photo5'] ?>">Delete Photo 5 </a> <br>  <br>
									
									<?php
									  
									   if($row['Photoprotect']==""){

		?>
                                      <a href="#" onClick="MM_openBrWindow('protect_photo.php','ppm','width=590,height=420')">Protect My Photo </a>
                                      <?php }?>
                                      <?php if($row['Photoprotect']=="Yes"){

			?>
                                      <a href="#" onClick="MM_openBrWindow('Remove_photoprotect.php','ppm','width=590,height=420')">Remove Photo Protect </a>
                                      <?php }?>
									 </div></td>
                                </tr>
                              </table>
                              <?php

}

?>
                            </div></td>
                          <td width="66" valign="top"><div align="center"> 
                              
                              <!-- Photoupload1 table -->
                              
                              <?php		

				

			if($row['Photo6']=="nophoto.gif" or $row['Photo6']=="" )

			{	

			?>
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" id="PhotouploadTable11" >
                                <tr>
                                  <td height="19" bgcolor="#FFEFD9"><div align="center"><strong> Photo </strong>6</div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <a href="photoupload.php?Choice=6"> <img src="pics/photonotavailable.gif" name="Mainphoto" width="75" height="75" border="0" id="Mainphoto" /></a>
                                      <div align="center"> <a href="photoupload.php?Choice=6"> Add Photo 6 </a></div>
                                      <br>
                                    </div></td>
                                </tr>
                              </table>
                              <?php 

} 

else

{

?>
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" id="PHMainPhoto" >
                                <tr>
                                  <td height="19" bgcolor="#FFEFD9"><div align="center"><strong> Photo</strong> 6 </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"><img width="100" height="100" src="memphoto6/<?php echo $row['Photo6']?>" /></div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <a href="modifyphoto.php?Choice=6&op=<?php echo $row['Photo6']; ?>">Modify Photo 6 </a> </div>
                                    <br>
                                   
                                    <div align="center">
                                    <a href="deletephoto.php?Choice=6&op=<?php  echo $row['Photo6'] ?>">Delete Photo 6 </a> <br>   <br>
									
									<?php
									  
									   if($row['Photoprotect']==""){

		?>
                                      <a href="#" onClick="MM_openBrWindow('protect_photo.php','ppm','width=590,height=420')">Protect My Photo </a>
                                      <?php }?>
                                      <?php if($row['Photoprotect']=="Yes"){

			?>
                                      <a href="#" onClick="MM_openBrWindow('Remove_photoprotect.php','ppm','width=590,height=420')">Remove Photo Protect </a>
                                      <?php }?>
									
									</div></td>
                                </tr>
                              </table>
                              <?php

}

?>
                            </div></td>
                          <td width="190">&nbsp;</td>
                        </tr>
						
						
						
						
						<tr>
                          <td width="158">&nbsp;</td>
                          <td width="66" valign="top"><div align="center"> 
                              
                              <!-- Photoupload1 table -->
                              
                              <?php	

				

			if($row['Photo7']=="nophoto.gif" or $row['Photo7']=="" )

			

			{	

			?>
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="submenubox" id="PhotouploadTable11" >
                                <tr>
                                  <td height="19" bgcolor="#FFEFD9"><div align="center" class="bodysg"><strong> Photo</strong>7</div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <a href="photoupload.php?Choice=7"> <img src="pics/photonotavailable.gif" name="Mainphoto" width="75" height="75" border="0" id="Mainphoto" /></a>
                                      <div align="center"> <a href="photoupload.php?Choice=7"> Add Photo 7 </a></div>
                                      <br>
                                    </div></td>
                                </tr>
                              </table>
                              <?php

} 

else

{

?>
                              <table width="130" border="0" cellpadding="0" cellspacing="0" class="tbl_profiledetails" id="PHMainPhoto" >
                                <tr>
                                  <td height="19" bgcolor="#FFEFD9"><div align="center"><strong> Photo</strong> 7 </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center"> <img width="100" height="100" src="memphoto7/<?php echo $row['Photo7']?>" /> </div></td>
                                </tr>
                                <tr>
                                  <td><div align="center">
                                    <a href="modifyphoto.php?Choice=7&op=<?php  echo $row['Photo7'] ?>">Modify Photo 7 </a> <br>
                                    <br>
                                    <div align="center"> <a href="deletephoto.php?Choice=7&op=<?php  echo $row['Photo7'] ?>">Delete Photo 7 </a> <br>
                                      <br>
                                      <?php if($row['Photoprotect']==""){

		?>
                                      <a href="#" onClick="MM_openBrWindow('protect_photo.php','ppm','width=590,height=420')">Protect My Photo </a>
                                      <?php }?>
                                      <?php if($row['Photoprotect']=="Yes"){

			?>
                                      <a href="#" onClick="MM_openBrWindow('Remove_photoprotect.php','ppm','width=590,height=420')">Remove Photo Protect </a>
                                      <?php }?>
                                    </div>
                                    <br></td>
                                </tr>
                              </table>
                              
                              <!--  -->
                              
                              <?php

}

?>
                            </div></td>
                          <td width="190">&nbsp;</td>
                        </tr>
                      </table>
                      <?php if($row['PhotoProtect']=="Yes")

{

?>
                      <table width="100%" border="0" align="center" cellpadding="3" cellspacing="3" >
                        <tr>
                          <td width="11%">&nbsp;</td>
                          <td width="89%"><strong>Remove Photo Protect :</strong> Click to <a href="#" onClick="MM_openBrWindow('Remove_photoprotect.php','rpp','width=590,height=420')">Remove Photo Protect </a></td>
                        </tr>
                      </table>
                      <?php } ?>
                      <?php } mysql_close($con); ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="20"></td>
                  </tr>
                </table></td>
            </tr>
          </table>
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
  <?php include("include/footermenu.php"); ?>
  <!-- FOOTER ENDS HERE ###################################################  --> 
  
</div>
</body>
</html>