<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<SCRIPT TYPE="text/javascript" LANGUAGE="javascript">



<!-- PreLoad Wait - Script -->

<!-- This script and more from http://www.rainbow.arch.scriptmania.com 



function waitPreloadPage() { //DOM

if (document.getElementById){

document.getElementById('prepage').style.visibility='hidden';

}else{

if (document.layers){ //NS4

document.prepage.visibility = 'hidden';

}

else { //IE4

document.all.prepage.style.visibility = 'hidden';

}

}

}

// End -->

</SCRIPT>

</head>

<body>
<?php include("config.php"); ?>

<? 


$strid=$_GET['id']; 

$result = mysql_query("SELECT *,Left(profile,200) as profile1 FROM register where matriid='$strid' ");

?>


<div class="profile_block">
  <div class="header">
    <h3 class="float_left title">View Phone</h3>
  </div>
  <div class="body" align="left">
    <table width="600" height="350" border="0" cellpadding="0" cellspacing="0" class="Thickorangeborder">

  <tr>

    <td valign="top">

        <br />

		



		

      <?php  while($fetch = mysql_fetch_array($result)){ ?>

       <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
          <tr>
            <td align="left" style="vertical-align:top;">Father's Name</td>
            <td align="left"> : <?php echo $fetch["Fathername"]; ?></td>
          </tr>
          <tr>
            <td align="left" style="vertical-align:top;">Mother's Name</td>
            <td align="left"> : <?php echo $fetch["Mothersname"]; ?></td>
          </tr>
          <tr>
            <td align="left" style="vertical-align:top;">Phone Number</td>
            <td align="left"> : 
			<?php 
			    echo str_replace("Area Code-","",$fetch["Phone"]);			
				if(($fetch["Phone"] != "") && ($fetch["Mobile"] != "")) { echo ", "; }
			      echo $fetch["Mobile"];
			
			?>
            </td>
          </tr>
		  
		  
		  
		  
        </table>

      <?php } mysql_close($con); ?>

	   <div align="center"><a href="javascript:window.close();" style="color:red;"><b>Close</b></a></div>

	  

	  

	  

    </td>

  </tr>

</table>
    <!-- BUSINESS PAGE CONTENT ends HERE ############################################ --> 
  </div>
</div>



</body>

</html>

