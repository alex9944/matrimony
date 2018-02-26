<?php 
session_start();
?>

<!--      <div class="profiledetails">
        <h2>My Account</h2>
        <hr />
        <table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td width="50%">
    <ul class="alerts">
	<li class="noimage"><a href="myprofile.php"><span class="pink">My Profile</span></a></li>
	<li class="noimage"><a href="changepassword.php"><span class="pink">Change Password</span></a></li>
	<li class="noimage"><a href="managephotoalbum.php"><span class="pink">Manage Photo Album</span></a></li>
    </ul>
    </td>
    <td>
    <ul class="alerts">
	<li class="noimage"><a href="modifyprofile.php"><span class="pink">Modify My Profile</span></a></li>
	<li class="noimage"><a href="delmyprofile.php"><span class="pink">Delete Profile</span></a></li>
	<li class="noimage"><a href="managevideo.php"><span class="pink">Manage Video Album</span></a></li>
    </ul>
    </td>
  </tr>
</table>



</div>
      <div class="profiledetails">
        <h2>My Messages</h2>
        <hr />
        <table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td width="50%">
    <ul class="alerts">
	<li class="noimage"><a href="myint.php"><span class="pink">Interests Received</span></a></li>
    </ul>
    </td>
    <td>
    <ul class="alerts">
	<li class="noimage"><a href="mymessage.php"><span class="pink">Message Received</span></a></li>
    </ul>
    </td>
  </tr>
</table>



</div>
      <div class="profiledetails">
        <h2>My Photo</h2>
        <hr />
        <table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td width="50%">
    <ul class="alerts">
	<li class="noimage"><a href="addphoto.php"><span class="pink">Manage My photo</span></a></li>
    </ul>
    </td>
    <td>
    </td>
  </tr>
</table>



</div>
      <div class="profiledetails">
        <h2>My Horoscope</h2>
        <hr />
        <table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td width="50%">
    <ul class="alerts">
	<li class="noimage"><a href="addhoros.php"><span class="pink">Manage My Horoscope</span></a></li>
    </ul>
    </td>
    <td>
    </td>
  </tr>
</table>



</div>
      <div class="profiledetails">
        <h2>My Membership</h2>
        <hr />
        <table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td width="50%">
    <ul class="alerts">
	<li class="noimage"><a href="mymembership.php"><span class="pink">My Membership</span></a></li>
    </ul>
    </td>
    <td>
    <ul class="alerts">
	<li class="noimage"><a href="myorders.php"><span class="pink">My Orders</span></a></li>
    </ul>
    </td>
  </tr>
</table>



</div>-->
<br/>
<div class="profiledetails">

        <h2 style="display:inline">Your Visitors : </h2>
        Who's been checking out your profile?
        <a href="visitors.php" class="float_right">View More&gt;&gt;
        </a>
        <hr>
        <?php  
		  $searchquery  = '';
		  if(isset($_SESSION['username']))
			{ 
				$count_blocklist_sql = "SELECT COUNT(*) AS blockmemberlist FROM blockmember WHERE memberid = '".$_SESSION['username']."' or blockmemberid = '".$_SESSION['username']."'";
				$count_blocklist_exec = mysql_query($count_blocklist_sql);
				$count_blocklist_fetch = mysql_fetch_array($count_blocklist_exec);
				if($count_blocklist_fetch["blockmemberlist"] != 0)
				{
					$searchquery .= " AND r.MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."' or blockmemberid = '".$_SESSION['username']."')";
					
					$searchquery .= " AND r.MatriID NOT IN (SELECT memberid FROM blockmember WHERE memberid = '".$_SESSION['username']."' or blockmemberid = '".$_SESSION['username']."')";
				}
			}
			 
			 //AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')
			 $visitor_sql = "SELECT MatriID,Name,Gender,Photo1,PhotoProtect, Photo1Approve FROM visitor,register r WHERE vmemberid = '".$_SESSION['matriid']."' $searchquery AND memberid = MatriID  LIMIT 0,5";
			$visitor_exec = mysql_query($visitor_sql);
			$visitor_count = mysql_num_rows($visitor_exec);
			if($visitor_count != 0)
			{
				?>
				<table width="100%" border="0" cellspacing="5" cellpadding="5">
				  <tbody><tr>
						<?php  $cnt = 0;
						while($visitor_photo = mysql_fetch_array($visitor_exec)) { ?>
					
					<? $cnt++;
					if($cnt ==1 || $cnt ==2) 
					$width = '2%';
					else
					$width = '2%';
					?>
					<td width="<?=$width?>" align="center">
					
					
					<?php 
					
					//echo $visitor_photo['Photo1Approve'];
					if($visitor_photo['Photo1']== "nophoto.gif" or $visitor_photo['Photo1Approve'] == 'No' ) 
					  { 
					     
						 if($visitor_photo['Gender'] == 'Male') 
						 { ?>
							<img src="images/icons/noimage_man.jpg" width="100" height="100" class="img_profile" /> <?php
						 } 
						 elseif($visitor_photo['Gender'] == 'Female') 
						 { ?>
							<img src="images/icons/noimage_girl.jpg" width="100" height="100" class="img_profile" /> <?php 
						 }
						else 
						 { ?>
							<img src="images/icons/photo_upload_lady.jpg" width="100" height="100" class="img_profile" /> <? 
						 }
					   } 
					 else if($visitor_photo['PhotoProtect']== "Yes") 
					   { 
						  if($visitor_photo['Gender'] == 'Male')
						   { ?>
							 <img src="images/icons/photo_askme_man.jpg" width="100" height="100" class="img_profile" /> <?Php		
						   }
						  else 
						   { ?>		
							<img src="images/icons/photo_askme_lady.jpg" width="100" height="100" class="img_profile" /> <?Php
						   } 
				
					   }
					else
					  {  ?>					
						<img width="110" height="110" src="memphoto1/<?php echo $visitor_photo['Photo1']?>" />  <? 
					  } ?>

					
					
							
					</td>
						<?php  } ?>
		<!--            <td width="20%" align="center"><img src="images/img3.jpg" width="100" height="100"></td>
					<td width="20%" align="center"><img src="images/img6.jpg" width="100" height="100" class="img_whiteBorder"></td>
					<td width="20%" align="center"><img src="images/sruthi2.jpg" width="100" height="100" class="img_whiteBorder"></td>
					<td width="20%" align="center"><img src="images/img4.jpg" width="100" height="100"></td>
		-->          </tr>
				  <tr>
						<?php 
							$visitorcount = 1;
							$visitorname_exec = mysql_query($visitor_sql);
							while($visitor_name = mysql_fetch_array($visitorname_exec)) { 
							
							//print_r($visitor_name);?>
					<td align="center" style=""><a href="viewfullprofile1.php?id=<?php echo $visitor_name['MatriID']; ?>&page=<?php echo $visitorcount; ?>&view=visitors"><?php echo $visitor_name["Name"]; ?></a></td>
						<?php $visitorcount++; } ?>
		<!--            <td align="center"><a href="#">Elizabeth</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
					<td align="center"><a href="#">Sangeetha</a></td>
					<td align="center"><a href="#">Sangeetha</a></td>
					<td align="center"><a href="#">Sangeetha</a></td>
		-->          </tr>
				</tbody></table>
				<?Php
			}
			else
			{
		?>
        	<center>Visitor&acute;s not available.</center>
        <?php
			}
		?>	
</div>
<br />
<div class="profiledetails">

        <h2 style="display:inline">Your Match : </h2>
        Quickly find your matching  partners<a href="match.php" class="float_right">View More&gt;&gt;
        </a>
        <hr>
        <?php
		$loginmembersql = "SELECT PE_FromAge,PE_ToAge,PE_MotherTongue,PE_Religion,PE_Caste,PE_Education,PE_Countrylivingin FROM register WHERE MatriID='".$_SESSION['matriid']."'";
		$loginmemberexec = mysql_query($loginmembersql);
		$loginmemberfetch = mysql_fetch_array($loginmemberexec);
				
		$match_sql = "SELECT MatriID,Name,Gender,Photo1,PhotoProtect, Photo1Approve FROM register WHERE Gender != '".$_SESSION['gender']."' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		if(($loginmemberfetch["PE_MotherTongue"] != "") && ($loginmemberfetch["PE_MotherTongue"] != "NULL"))
			$match_sql .= " AND Language='".$loginmemberfetch["PE_MotherTongue"]."'";
		if(($loginmemberfetch["Religion"] != "") && ($loginmemberfetch["Religion"] != "NULL"))
			$match_sql .= " AND Religion='".$loginmemberfetch["PE_Religion"]."'";
		if(($loginmemberfetch["PE_Caste"] != "Any") && ($loginmemberfetch["PE_Caste"] != "") && ($loginmemberfetch["PE_Caste"] != "NULL") && ($loginmemberfetch["PE_Caste"] != "Does not matter") && ($loginmemberfetch["PE_Caste"] != "Does not Matter"))
			$match_sql .= " AND Caste='".$loginmemberfetch["PE_Caste"]."'";
		
		/*if(($loginmemberfetch["PE_Education"] != "Any") && ($loginmemberfetch["PE_Education"] != "") && ($loginmemberfetch["PE_Education"] != "NULL") && ($loginmemberfetch["PE_Education"] != "Does not matter") && ($loginmemberfetch["PE_Education"] != "Does not Matter"))	
		$match_sql .= " AND Education='".$loginmemberfetch["PE_Education"]."'";*/
		
		$match_sql .= " AND Country='".$loginmemberfetch["PE_Countrylivingin"]."' AND Age BETWEEN '".$loginmemberfetch["PE_FromAge"]."' AND  '".$loginmemberfetch["PE_ToAge"]."' ORDER BY ID DESC LIMIT 0,5";
		
		//echo $match_sql; exit;
		$match_exec = mysql_query($match_sql);
		$match_count = mysql_num_rows($match_exec);
		if($match_count != 0)
		{
		?>
            <table width="" border="0" cellspacing="5" cellpadding="5">
              <tbody><tr>
              	<?php 
				$cnt = 0;
				while($match_fetch = mysql_fetch_array($match_exec)) { ?>
               
			   
			   <? $cnt++;
			if($cnt ==1 ) 
			$width = '';
			else
			$width = '';
			?>
			<td width="<?=$width?>" align="center" style=" padding:15px;">
			
			
			<?php if($match_fetch['Photo1']== "nophoto.gif" or $match_fetch['Photo1Approve'] == 'No' ) 
					  { 
						 if($match_fetch['Gender'] == 'Male') 
						 { ?>
							<img src="images/icons/noimage_man.jpg" width="100" height="100" class="img_profile" /> <?php
						 } 
						 elseif($match_fetch['Gender'] == 'Female') 
						 { ?>
							<img src="images/icons/noimage_girl.jpg" width="100" height="100" class="img_profile" /> <?php 
						 }
						else 
						 { ?>
							<img src="images/icons/photo_upload_lady.jpg" width="100" height="100" class="img_profile" /> <? 
						 }
					   } 
					 else if($match_fetch['PhotoProtect']== "Yes") 
					   { 
						  if($match_fetch['Gender'] == 'Male')
						   { ?>
							 <img src="images/icons/photo_askme_man.jpg" width="100" height="100" class="img_profile" /> <?Php		
						   }
						  else 
						   { ?>		
							<img src="images/icons/photo_askme_lady.jpg" width="100" height="100" class="img_profile" /> <?Php
						   } 
				
					   }
					else
					  {  ?>					
						<img width="110" height="110" src="memphoto1/<?php echo $match_fetch['Photo1']?>" />  <? 
					  } ?>
			
            		
					
                </td>
                <?php } ?>
              </tr>
              <tr>
				<?php
				$matchcount = 1;
				$matchname_exec = mysql_query($match_sql);
				while($matchname_fetch = mysql_fetch_array($matchname_exec)) {
				?>	              
                <td align="center" style=""><a href="viewfullprofile1.php?id=<?php echo $matchname_fetch['MatriID']; ?>&page=<?php echo $matchcount; ?>&view=match"><?php echo $matchname_fetch["Name"]; ?></a></td>
                <?php
				$matchcount++;
				}
				?>
              </tr>
            </tbody></table>
        <?Php
		} else {
		?>
        	<center>Match&acute;s not available.</center>
        <?php
		}
		?>	
</div>
<br />
<div class="profiledetails">

        <h2 style="display:inline">New Members : </h2>See who has joined and make contact first<a href="newmember.php" class="float_right">View More&gt;&gt;
        </a>
        <hr>
        <table width="100%" border="0" cellspacing="10" cellpadding="10">
          <tbody><tr>
            <td width="50%">
            <ul class="alerts alerts_nobg ddlist list-orange " style="margin:0px; padding:0px;">
            <?php
			//FOR 3 MEMBER
			$new_sql = "SELECT MatriID,Name,Age,Country, Photo1Approve FROM register WHERE Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."') ORDER BY ID DESC LIMIT 0,3";
			$new_exec = mysql_query($new_sql);
			$newmember = 1;
			while($new_fetch= mysql_fetch_array($new_exec)) {
			?>
              <li><a href="viewfullprofile1.php?id=<?php echo $new_fetch['MatriID']; ?>&page=<?php echo $newmember; ?>&view=newmember"><?php echo $new_fetch["Name"]; ?><span class="gray">(<?php echo $new_fetch["Age"]; ?>, <?php echo $new_fetch["Country"]; ?>)</span></a></li>
			<?php $newmember++;} ?>                 
            </ul></td>
            <td>
            <ul class="alerts alerts_nobg ddlist list-orange " style="margin:0px; padding:0px;">
            <?php
			//FOR NEXT 3 MEMBER
			$new_sql = "SELECT MatriID,Name,Age,Country FROM register WHERE Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."') ORDER BY ID DESC LIMIT 3,3";
			$new_exec = mysql_query($new_sql);
			while($new_fetch= mysql_fetch_array($new_exec)) {
			?>
              <li><a href="viewfullprofile1.php?id=<?php echo $new_fetch['MatriID']; ?>&page=<?php echo $newmember; ?>&view=newmember"><?php echo $new_fetch["Name"]; ?><span class="gray">(<?php echo $new_fetch["Age"]; ?>, <?php echo $new_fetch["Country"]; ?>)</span></a></li>
			<?php $newmember++;} ?>                 
            </ul>
            
            </td>
          </tr>
        </tbody></table>
</div>
<br />
<div class="profiledetails">


<?


//echo "<pre>";print_r($_SESSION);

$loginmembersql = "SELECT * FROM register WHERE MatriID = "."'".$_SESSION['matriid']."'";
$qur = mysql_query($loginmembersql);
$fetch = mysql_fetch_array($qur);




	 $loginmembersql = "SELECT * FROM register WHERE Star != "."'".$fetch['Star']."'   AND Religion = "."'".$fetch['Religion']."' AND Caste ="."'".$fetch[
	'Caste']."' AND Age > "."'".$fetch['Age']."' AND Gender !="."'".$fetch['Gender']."'";
	 $loginmemberexec = mysql_query($loginmembersql);
		 
		
	$get_horos_detailg = "SELECT * FROM onlinehoroscope WHERE custid ='".$_SESSION['username']."'";
	$get_horos_execg = mysql_query($get_horos_detailg);
	$get_horos_fetchg = mysql_fetch_array($get_horos_execg);
	$get_horos_countg = mysql_num_rows($get_horos_execg);	
	
	if(isset($get_horos_countg) and $get_horos_countg > 0)	
	{  ?>
        <h2 style="display:inline">Star Match: </h2>
        Your ideal match according to your star sign<a href="star_match.php" class="float_right">View More&gt;&gt;
        </a>
        <hr>
        <table width="100%" border="0" cellspacing="10" cellpadding="10">
          <tbody>
		  
		  <tr>
            <td width="50%">
            
			<ul class="alerts alerts_nobg ddlist list-orange " style="margin:0px; padding:0px;">
              <? while($res = mysql_fetch_array($loginmemberexec)) { 
			  
/*$link = "http://www.astrovisiononline.com/avservices/horomatch/inserttodb.php?data=<DATA><BOYDATA><REGNO>".$fetch['MatriID']."</REGNO><NAME>".$_SESSION['Name']."</NAME><DAY>1</DAY><MONTH>1</MONTH><YEAR>1950</YEAR><TIME24HR>00.00.00</TIME24HR><CORR>1</CORR><PLACE>Mumbai</PLACE><LONG>072.50</LONG><LAT>18.58</LAT><LONGDIR>E</LONGDIR><LATDIR>N</LATDIR><TZONE>05.30</TZONE><TZONEDIR>E</TZONEDIR></BOYDATA><GIRLDATA><REGNO>".$res['MatriID']."</REGNO><NAME>".res['Name']."</NAME><DAY>1</DAY><MONTH>1</MONTH><YEAR>1950</YEAR><TIME24HR>00.00.00</TIME24HR><CORR>1</CORR><PLACE>Mumbai</PLACE><LONG>072.50</LONG><LAT>18.58</LAT><LONGDIR>E</LONGDIR><LATDIR>N</LATDIR><TZONE>05.30</TZONE><TZONEDIR>E</TZONEDIR></GIRLDATA><OPTIONS><CUSTID>S23467</CUSTID><CHARTSTYLE>0</CHARTSTYLE><LANGUAGE>Eng</LANGUAGE><REPTYPE>1</REPTYPE><REPDMN>numinousmatch</REPDMN><PSETTINGS><METHOD>S1</METHOD><KUJADOSHACHECK>K0</KUJADOSHACHECK><PAPASAMYA>P0</PAPASAMYA><DASACHECK>D00</DASACHECK></PSETTINGS></OPTIONS></DATA>";*/
			  
			  $boy_dob = explode("-",$fetch['DOB']);
			 // print_r($boy_dob);
			  
			  $girl_dob = explode("-",$res['DOB']);
			  //print_r($girl_dob);
			  
			  
			$link ="http://www.astrovisiononline.com/avservices/horomatch/inserttodb.php?data=<DATA><BOYDATA><REGNO>".$fetch['MatriID']."</REGNO><NAME>".$fetch['Name']."</NAME><DAY>".$boy_dob[2]."</DAY><MONTH>".$boy_dob[1]."</MONTH><YEAR>".$boy_dob[0]."</YEAR><TIME24HR>00.00.00</TIME24HR><CORR>1</CORR><PLACE>Mumbai</PLACE><LONG>072.50</LONG><LAT>18.58</LAT><LONGDIR>E</LONGDIR><LATDIR>N</LATDIR><TZONE>05.30</TZONE><TZONEDIR>E</TZONEDIR></BOYDATA><GIRLDATA><REGNO>S23467</REGNO><NAME>".$res['Name']."</NAME><DAY>".$girl_dob[2]."</DAY><MONTH>".$girl_dob[1]."</MONTH><YEAR>".$girl_dob[0]."</YEAR><TIME24HR>00.00.00</TIME24HR><CORR>1</CORR><PLACE>Mumbai</PLACE><LONG>072.50</LONG><LAT>18.58</LAT><LONGDIR>E</LONGDIR><LATDIR>N</LATDIR><TZONE>05.30</TZONE><TZONEDIR>E</TZONEDIR></GIRLDATA><OPTIONS><CUSTID>S23467</CUSTID><CHARTSTYLE>0</CHARTSTYLE><LANGUAGE>Eng</LANGUAGE><REPTYPE>1</REPTYPE><REPDMN>".$sitename."</REPDMN><PSETTINGS><METHOD>S1</METHOD><KUJADOSHACHECK>K0</KUJADOSHACHECK><PAPASAMYA>P0</PAPASAMYA><DASACHECK>D00</DASACHECK></PSETTINGS></OPTIONS></DATA>";
			  ?>
			  
			  <?php /*?><li><a href="<? echo $link;?>" target="_blank"><?=$res['Name']?><span class="gray">(<?=$res['Age']?>, <?=$res['Country']?>)</span></a></li><?php */?>
			  
			  <li><a href="viewfullprofile1.php?id=<?php echo $res['MatriID']; ?>&page=<?php echo $newmember; ?>&view=star"><?=$res['Name']?><span class="gray">(<?=$res['Age']?>, <?=$res['Country']?>)</span></a></li>
			  
             <? } ?>
			 
            </ul>
			
			</td>
  
          </tr>
        </tbody></table> <?php
	} ?>
		
</div>