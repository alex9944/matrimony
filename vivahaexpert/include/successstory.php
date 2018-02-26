<?Php
include("dbconnect.php");
?>
<div class="F_prof_block margin10">
          <div class="head">
            <h2> Success Stories</h2>
          </div>
          <?php 
		  $ssdetailsql = "SELECT * FROM successstory WHERE approve ='Yes' ORDER BY RAND()";
		  $ssdetailexec = mysql_query($ssdetailsql);
		  $ssdetailfetch = mysql_fetch_array($ssdetailexec);
		  $ssdetailcount = mysql_num_rows($ssdetailexec);
		  ?>
          <div class="body">
          <?php if($ssdetailcount != 0) { ?>
            <table width="100%" border="0" cellspacing="5" cellpadding="0">
              <tr>
                <td height="180" align="center" valign="middle"><img src="SuccessStory_Photos/<?php echo $ssdetailfetch["weddingphoto"]; ?>" width="150" height="150" border="0" /></td>
              </tr>
              <tr>
                <td align="center">
               <strong>
			   <?php echo $ssdetailfetch["bridename"]; ?></strong> got married to <strong><?php echo $ssdetailfetch["groomname"]; ?></strong> in a beautiful ceremony. <?php echo $ssdetailfetch["bridename"]; ?> was registered on <?php echo $siteadmin;?> as a Diamond Member, whereas <?php echo $ssdetailfetch["groomname"]; ?> held a basic membership.
			   
			   </td>
              </tr>
              <tr>
                <td align="center" style="  font-size: 11px;"><strong><a href="successstory.php">Read More</a></strong></td>
              </tr>
			  <tr> <td  style="padding-left:26px;  font-size: 11px;"><a href="submit_success_stories.php"><strong>Share Your Success Story Here.</strong></a> </td>
			  </tr>
            </table>
            <?php } else { ?>
            <table width="100%" border="0" cellspacing="5" cellpadding="0">
              <tr>
                <td height="180" align="center" valign="middle">Click here to <a href="submit_success_stories.php"><strong>submit success story.</strong></a></td>
              </tr>
            </table>
            <?php } ?>
          </div>
          <div class="foot"></div>
        </div>