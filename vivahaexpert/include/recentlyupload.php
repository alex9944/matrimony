      <h3 class="left_title"> Recently Uploaded Profiles</h3>
<?php
$profilesql = "SELECT Pmatriid FROM paiddetails WHERE Pmatriid='".$_SESSION['username']."'";
$profilesql = mysql_query($profilesql);
$profilesql_count = mysql_num_rows($profilesql);

$recentprofilesql = "SELECT ID, Name, MatriID, Regdate, Photo1,Height, Gender, Age, Language, Religion, Caste, State, Education, PhotoProtect, PhotoprotectPassword FROM register WHERE Photo1 <> 'nophoto.gif' AND Photo1Approve = 'Yes' ORDER BY rand() LIMIT 0,3";
$recentprofileexec = mysql_query($recentprofilesql);
?>      <div class="recentupload">
      <table width="100%" class="padding_5p tbl_recentupload" border="0" align="center" cellpadding="5" cellspacing="0" style="margin-top:5px;">
          <?php 
		  while($recentprofilefetch = mysql_fetch_array($recentprofileexec)) { 
		  
		   	if ($profilesql_count==1)
			{
		  ?>
      <tr>
        <th colspan="2"><a href="viewfullprofile1.php?ID=<?php echo $recentprofilefetch["ID"]; ?>"><?php echo $recentprofilefetch["MatriID"]; ?></a></th>
      </tr>
      <tr>
      	<td width="30%"><a href="viewfullprofile1.php?ID=<?php echo $recentprofilefetch["ID"]; ?>">
		
		<?php 
				//echo '<pre>'; print_r($featurefetch['PhotoProtect']); exit;
				
				if($recentprofilefetch['Photo1']== "nophoto.gif" or $recentprofilefetch['Photo1Approve'] == 'No' ) 
				{ 
					if($recentprofilefetch['Gender'] == 'Male') 
					{ 	?>
						<img src="images/icons/noimage_man.jpg" width="100" height="100" class="img_profile" />
						<?php } elseif($recentprofilefetch['Gender'] == 'Female') { ?>
						<img src="images/icons/noimage_girl.jpg" width="100" height="100" class="img_profile" />
						<?php } else { ?>
						<img src="images/icons/photo_upload_lady.jpg" width="100" height="100" class="img_profile" />
						<? 
					}
				} 
				else if($recentprofilefetch['PhotoProtect']== "Yes") 
				{ 
					if($recentprofilefetch['Gender'] == 'Male') {
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
				  <img width="110" height="110" src="memphoto1/<?php echo $recentprofilefetch['Photo1']?>" />
				<? } ?>
		<?php /*?><img src="memphoto1/<?php echo $recentprofilefetch["Photo1"]; ?>" width="100" height="100"/><?php */?>
		
		</a></td> 
        <td width="70%"><strong><?php echo $recentprofilefetch["Name"]; ?></strong><br />
         <?php echo $recentprofilefetch["Age"]; ?> yrs, <?php  

$strheight = $recentprofilefetch["Height"];

if($strheight =="1") { echo "Below 4ft"; }

else if($strheight =="2") { echo "4ft 6in"; }

else if($strheight =="3") { echo "4ft 7in"; }

else if($strheight =="4") { echo "4ft 8in"; }

else if($strheight =="5") { echo "4ft 9in"; }

else if($strheight =="6") { echo "4ft 10in"; }

else if($strheight =="7") { echo "4ft 11in"; }

else if($strheight =="8") { echo "5ft"; }

else if($strheight =="9") { echo "5ft 1in"; }

else if($strheight =="10") { echo "5ft 2in"; }

else if($strheight =="11") { echo "5ft 3in"; }

else if($strheight =="12") { echo "5ft 4in"; }

else if($strheight =="13") { echo "5ft 5in"; }

else if($strheight =="14") { echo "5ft 6in"; }

else if($strheight =="15") { echo "5ft 7in"; }

else if($strheight =="16") { echo "5ft 8in"; }

else if($strheight =="17") { echo "5ft 9in"; }

else if($strheight =="18") { echo "5ft 10in"; }

else if($strheight =="19") { echo "5ft 11in"; }

else if($strheight =="20") { echo "6ft"; }

else if($strheight =="21") { echo "6ft 1in"; }

else if($strheight =="22") { echo "6ft 2in"; }

else if($strheight =="23") { echo "6ft 3in"; }

else if($strheight =="24") { echo "6ft 4in"; }

else if($strheight =="25") { echo "6ft 5in"; }

else if($strheight =="26") { echo "6ft 6in"; }

else if($strheight =="27") { echo "6ft 7in"; }

else if($strheight =="28") { echo "6ft 8in"; }

else if($strheight =="29") { echo "6ft 9in"; }

else if($strheight =="30") { echo "6ft 10in"; }

else if($strheight =="31") { echo "6ft 11in"; }

else if($strheight =="32") { echo "7ft"; }

else if($strheight =="33") { echo "Above 7ft"; }

?><br />
         <?php echo $recentprofilefetch["Religion"]; ?> - <?php echo $recentprofilefetch["Caste"]; ?>,<?php echo $recentprofilefetch["State"]; ?><br /><?php echo $recentprofilefetch["Education"]; ?><br/>
         <a href="viewfullprofile1.php?ID=<?php echo $recentprofilefetch["ID"]; ?>">View Full Profile</a></td>
      </tr>
      <tr></tr>
<?Php 
}
else
{
	  ?>
      <tr>
        <th colspan="2"><a href="viewfullprofile1.php?ID=<?php echo $recentprofilefetch["ID"]; ?>"><?php echo $recentprofilefetch["MatriID"]; ?></a></th>
      </tr>
      <tr>
      	<td width="30%"><a href="viewfullprofile1.php?ID=<?php echo $recentprofilefetch["ID"]; ?>">
		
		<?php 
				//echo '<pre>'; print_r($featurefetch['PhotoProtect']); exit;
				
				if($recentprofilefetch['Photo1']== "nophoto.gif" or $recentprofilefetch['Photo1Approve'] == 'No' ) 
				{ 
					if($recentprofilefetch['Gender'] == 'Male') 
					{ 	?>
						<img src="images/icons/noimage_man.jpg" width="100" height="100" class="img_profile" />
						<?php } elseif($recentprofilefetch['Gender'] == 'Female') { ?>
						<img src="images/icons/noimage_girl.jpg" width="100" height="100" class="img_profile" />
						<?php } else { ?>
						<img src="images/icons/photo_upload_lady.jpg" width="100" height="100" class="img_profile" />
						<? 
					}
				} 
				else if($recentprofilefetch['PhotoProtect']== "Yes") 
				{ 
					if($recentprofilefetch['Gender'] == 'Male') {
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
				  <img width="110" height="110" src="memphoto1/<?php echo $recentprofilefetch['Photo1']?>" />
				<? } ?>
		<?php /*?><img src="memphoto1/<?php echo $recentprofilefetch["Photo1"]; ?>" width="100" height="100"/><?php */?>
		
		</a></td> 
        <td width="70%"><strong><?php echo $recentprofilefetch["Name"]; ?></strong><br />
         <?php echo $recentprofilefetch["Age"]; ?> yrs, <?php  

$strheight = $recentprofilefetch["Height"];

if($strheight =="1") { echo "Below 4ft"; }

else if($strheight =="2") { echo "4ft 6in"; }

else if($strheight =="3") { echo "4ft 7in"; }

else if($strheight =="4") { echo "4ft 8in"; }

else if($strheight =="5") { echo "4ft 9in"; }

else if($strheight =="6") { echo "4ft 10in"; }

else if($strheight =="7") { echo "4ft 11in"; }

else if($strheight =="8") { echo "5ft"; }

else if($strheight =="9") { echo "5ft 1in"; }

else if($strheight =="10") { echo "5ft 2in"; }

else if($strheight =="11") { echo "5ft 3in"; }

else if($strheight =="12") { echo "5ft 4in"; }

else if($strheight =="13") { echo "5ft 5in"; }

else if($strheight =="14") { echo "5ft 6in"; }

else if($strheight =="15") { echo "5ft 7in"; }

else if($strheight =="16") { echo "5ft 8in"; }

else if($strheight =="17") { echo "5ft 9in"; }

else if($strheight =="18") { echo "5ft 10in"; }

else if($strheight =="19") { echo "5ft 11in"; }

else if($strheight =="20") { echo "6ft"; }

else if($strheight =="21") { echo "6ft 1in"; }

else if($strheight =="22") { echo "6ft 2in"; }

else if($strheight =="23") { echo "6ft 3in"; }

else if($strheight =="24") { echo "6ft 4in"; }

else if($strheight =="25") { echo "6ft 5in"; }

else if($strheight =="26") { echo "6ft 6in"; }

else if($strheight =="27") { echo "6ft 7in"; }

else if($strheight =="28") { echo "6ft 8in"; }

else if($strheight =="29") { echo "6ft 9in"; }

else if($strheight =="30") { echo "6ft 10in"; }

else if($strheight =="31") { echo "6ft 11in"; }

else if($strheight =="32") { echo "7ft"; }

else if($strheight =="33") { echo "Above 7ft"; }

?><br />


<script>
function do_request1(lang,religion,caste,divid)
{ 
 //alert('generateCaste3.php?lang='+lang+'&rel='+religion+'&cast='+caste);
 $.post('generateCaste_new.php?lang='+lang+'&rel='+religion+'&cast='+caste, function(data) {
 
// alert("shi" );
	if(data!=''){
	//alert(data);
	
	var str = data;
    var res = str.replace(":",""); 
	var res = res.replace("  ","");
	document.getElementById(divid).innerHTML = res;
	}});

}
</script>

         <?php
		 
		  $religion = array("1"=>"Hindu","2"=>"Muslim - Shia","3"=>"Muslim - Sunni","4"=>"Muslim - Others", "5"=>"Christian - Catholic","6"=>"Christian - Orthodox","7"=>"Christian - Protestant","8"=>"Christian - Others","9"=>"Sikh","10"=>"Jain - Digambar","11"=>"Jain - Shwetambar","12"=>"Jain - Others","13"=>"Parsi","14"=>"Buddhist","15"=>"Inter-Religion","16"=>"No Religious Belief");
		 
		  echo $religion[$recentprofilefetch["Religion"]]; ?> -<script>
			do_request1(<?php echo $recentprofilefetch['Language'] ?>,<?php echo $recentprofilefetch['Religion'] ?>, <?php echo $recentprofilefetch['Caste'] ?>,'<?php echo 'recent'.$recentprofilefetch['MatriID'] ?>');
			</script> 
			<span id="recent<?php echo $recentprofilefetch['MatriID'] ?>"></span>,<?php echo $recentprofilefetch["State"]; ?><br /><?php echo $recentprofilefetch["Education"]; ?><br/>
         <a href="viewfullprofile1.php?ID=<?php echo $recentprofilefetch["ID"]; ?>">View Full Profile</a></td>
      </tr>
      <tr></tr>
<?Php 

}

} 
$featureprofile = 1;
?>      
      </table>
    </div>