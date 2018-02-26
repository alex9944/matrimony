<?php
if(!isset($featureprofile))
	$featureprofile = 2;
	
$featuresql = "SELECT ID, Name, MatriID,Status , Photo1Approve, Regdate, Photo1, Gender, Age,PE_FromAge,PE_ToAge,	Education,EducationDetails,PE_MotherTongue,PE_Religion FROM register WHERE Photo1 <> 'nophoto.gif' AND Photo1Approve = 'Yes' ORDER BY rand() LIMIT 0,".$featureprofile;
$featureexec = mysql_query($featuresql);
?>
<div class="F_prof_block margin10">
          <div class="head">
            <h2>Featured Profile</h2>
          </div>
          <div class="body">
          <?php 
		  $featureseparator = 1;
		  while($featurefetch = mysql_fetch_array($featureexec)) { ?>
            <table width="100%" border="0" cellspacing="5" cellpadding="0">
              <tr>
                <td height="180" align="center" valign="middle"><a href="viewfullprofile.php?ID=<?php echo $featurefetch["ID"]; ?>"><img src="memphoto1/<?php echo $featurefetch["Photo1"]; ?>" width="150" height="150" class="img_profile" /></a></td>
              </tr>
              <tr>
                <td align="center"> <strong><a href="viewfullprofile.php?ID=<?php echo $featurefetch["ID"]; ?>"><?php echo $featurefetch["Name"]; ?></a></strong><br />
                I am <?php echo $featurefetch["Age"]; ?> years old <?php echo $featurefetch["Education"]; ?> in <?php echo $featurefetch["EducationDetails"]; ?> <?php echo $featurefetch["Age"]; ?>, <?php echo $featurefetch["PE_FromAge"]; ?> yrs to <?php echo $featurefetch["PE_ToAge"]; ?> yrs, Religion: <?php echo $featurefetch["PE_Religion"]; ?>, Mother Tongue: <?php echo $featurefetch["PE_MotherTongue"]; ?></td>
              </tr>
              <tr>
                <td align="center"><strong><a href="viewfullprofile.php?ID=<?php echo $featurefetch["ID"]; ?>">View Profile</a></strong></td>
              </tr>
            </table>
            <?Php if(($featureseparator%2 != 0) && ($featureprofile != 1)) { ?>
            <div class="hline4"></div>
            <?php } 
			$featureseparator++;
			 } ?>
          </div>
          <div class="foot"></div>
        </div>