<?php

$profilesql = "SELECT Pmatriid FROM paiddetails WHERE Pmatriid='".$_SESSION['username']."'";

$profilesql = mysql_query($profilesql);

$profilesql_count = mysql_num_rows($profilesql);







if(!isset($featureprofile))

	$featureprofile = 2;



	

	

$featuresql = "SELECT ID, Name, MatriID,Status , Photo1Approve, Regdate, Photo1, Gender, Age,PE_FromAge,PE_ToAge,	Education,EducationDetails,PE_MotherTongue,PE_Religion, PhotoProtect, PhotoprotectPassword FROM register WHERE Photo1 <> 'nophoto.gif' AND (Status = 'DIAMOND' or Status = 'GOLD' ) AND Photo1Approve = 'Yes' ORDER BY rand() LIMIT 0,".$featureprofile; 

$featureexec = mysql_query($featuresql);

?>

<div class="F_prof_block margin10">

          <div class="head">

            <h3 style="color: #C8060E!important">Featured Profile</h3>

          </div>

          <div class="body">

          <?php 

		  $featureseparator = 1;

		  while($featurefetch = mysql_fetch_array($featureexec)) {

		  	if ($profilesql_count==1)

			{

		   ?>

            <table width="100%" border="0" cellspacing="5" cellpadding="0">

              <tr>

                <td height="180" align="center" valign="middle"><a href="viewfullprofile.php?ID=<?php echo $featurefetch["ID"]; ?>">
				<?php 
				//echo '<pre>'; print_r($featurefetch['PhotoProtect']); exit;
				
				if($featurefetch['Photo1']== "nophoto.gif" or $featurefetch['Photo1Approve'] == 'No' ) 
				{ 
					if($featurefetch['Gender'] == 'Male') 
					{ 	?>
						<img src="images/icons/noimage_man.jpg" width="100" height="100" class="img_profile" />
						<?php } elseif($featurefetch['Gender'] == 'Female') { ?>
						<img src="images/icons/noimage_girl.jpg" width="100" height="100" class="img_profile" />
						<?php } else { ?>
						<img src="images/icons/photo_upload_lady.jpg" width="100" height="100" class="img_profile" />
						<? 
					}
				} 
				else if($featurefetch['PhotoProtect']== "Yes") 
				{ 
					if($featurefetch['Gender'] == 'Male') {
				?>
						<img src="images/icons/photo_askme_man.jpg" width="100" height="100" class="img_profile" />
				<?Php		
					} else {
				?>		
					<img src="images/icons/photo_askme_lady.jpg" width="100" height="100" class="img_profile" />
				<?Php
					} 
				
				 }
				else  {  ?>					
				  <img width="110" height="110" src="memphoto1/<?php echo $featurefetch['Photo1']?>" />
				<? } ?>
				<?php /*?><img src="memphoto1/<?php echo $featurefetch["Photo1"]; ?>" width="150" height="150" class="img_profile" /><?php */?>
				</a></td>

              </tr>

              <tr>

                <td align="center"> <strong><a href="viewfullprofile.php?ID=<?php echo $featurefetch["ID"]; ?>"><?php echo $featurefetch["Name"]; ?></a></strong><br />

                I am <?php echo $featurefetch["Age"]; ?> years old <?php echo $featurefetch["Education"]; ?> in <?php echo $featurefetch["EducationDetails"]; ?> 
				
				<?php /*?><?php echo $featurefetch["Age"]; ?>, <?php echo $featurefetch["PE_FromAge"]; ?> yrs to <?php echo $featurefetch["PE_ToAge"]; ?> yrs, Religion: <?php echo $featurefetch["PE_Religion"]; ?>, Mother Tongue: <?php echo $featurefetch["PE_MotherTongue"]; ?><?php */?>
				</td>

              </tr>

              <tr>

                <td align="center"><strong><a href="viewfullprofile.php?ID=<?php echo $featurefetch["ID"]; ?>">View Profile</a></strong></td>

              </tr>

            </table>

            <?Php

			} else

			{			

			  ?>

            <table width="100%" border="0" cellspacing="5" cellpadding="0">

              <tr>

                <td height="180" align="center" valign="middle"><a href="viewfullprofile1.php?ID=<?php echo $featurefetch["ID"]; ?>">
				<?php 
				//print_r($featurefetch['PhotoProtect']); exit;
				if($featurefetch['Photo1']== "nophoto.gif" or $featurefetch['Photo1Approve'] == 'No' ) 
				{ 
					if($featurefetch['Gender'] == 'Male') 
					{ 	?>
						<img src="images/icons/noimage_man.jpg" width="100" height="100" class="img_profile" />
						<?php } elseif($featurefetch['Gender'] == 'Female') { ?>
						<img src="images/icons/noimage_girl.jpg" width="100" height="100" class="img_profile" />
						<?php } else { ?>
						<img src="images/icons/photo_upload_lady.jpg" width="100" height="100" class="img_profile" />
						<? 
					}
				} 
				else if($featurefetch['PhotoProtect']== "Yes") 
				{ 
					if($featurefetch['Gender'] == 'Male') {
				?>
						<img src="images/icons/photo_askme_man.jpg" width="100" height="100" class="img_profile" />
				<?Php		
					} else {
				?>		
					<img src="images/icons/photo_askme_lady.jpg" width="100" height="100" class="img_profile" />
				<?Php
					} 
				
				 }
				else  {  ?>					
				  <img width="110" height="110" src="memphoto1/<?php echo $featurefetch['Photo1']?>" />
				<? } ?>
				
				
				<?php /*?><img src="memphoto1/<?php echo $featurefetch["Photo1"]; ?>" width="150" height="150" class="img_profile" /><?php */?>
				</a></td>

              </tr>

              <tr>

                <td align="center"> <strong><a href="viewfullprofile1.php?ID=<?php echo $featurefetch["ID"]; ?>"><?php echo $featurefetch["Name"]; ?></a></strong><br />

                I am <?php echo $featurefetch["Age"]; ?> years old <?php echo $featurefetch["Education"]; ?> in <?php echo $featurefetch["EducationDetails"]; ?> 
				
				<?php /*?><?php echo $featurefetch["Age"]; ?>, <?php echo $featurefetch["PE_FromAge"]; ?> yrs to <?php echo $featurefetch["PE_ToAge"]; ?> yrs, Religion: <?php echo $featurefetch["PE_Religion"]; ?>, Mother Tongue: <?php echo $featurefetch["PE_MotherTongue"]; ?><?php */?>
				
				</td>

              </tr>

              <tr>

                <td align="center"><strong><a href="viewfullprofile1.php?ID=<?php echo $featurefetch["ID"]; ?>">View Profile</a></strong></td>

              </tr>

            </table>

            <?Php

			

			}

			

			

			 if(($featureseparator%2 != 0) && ($featureprofile != 1)) { ?>

            <div class="hline4"></div>

            <?php } 

			$featureseparator++;

			 } ?>

          </div>

          <div class="foot"></div>

        </div>