<hr />
<?php
//echo $searchquery; exit;

//echo $_REQUEST['religion'];

//$refine_sql =  $searchquery;

$caste = array("1"=>"Hindu","2"=>"Muslim - Shia","3"=>"Muslim - Sunni","4"=>"Muslim - Others","5"=>"Christian - Catholic","6"=>"Christian - Orthodox","7"=>"Christian - Protestant","8"=>"Christian - Others","9"=>"Sikh","10"=>"Jain - Digambar","11"=>"Jain - Shwetambar","12"=>"Jain - Others","13"=>"Parsi","14"=>"Buddhist","15"=>"Inter-Religion","16"=>"No Religious Belief");	

$Language =  array('','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu','','Badaga');
				
$religion = array("1"=>"Hindu","2"=>"Muslim - Shia","3"=>"Muslim - Sunni","4"=>"Muslim - Others", "5"=>"Christian - Catholic","6"=>"Christian - Orthodox","7"=>"Christian - Protestant","8"=>"Christian - Others","9"=>"Sikh","10"=>"Jain - Digambar","11"=>"Jain - Shwetambar","12"=>"Jain - Others","13"=>"Parsi","14"=>"Buddhist","15"=>"Inter-Religion","16"=>"No Religious Belief");


?>
        <strong style="margin-top:44px;" class="size12">Refine Search</strong> <a href="#" class="clearall">[Clear all]</a>
        <hr />
        <strong style="font-size:11px;" class="size12">Active</strong>
        <ul class="ddlist list-arrow2">
        <?php
		$logged_id  = $_SESSION['matriid'];
		$online_sql = "SELECT COUNT(*) AS onlinecount FROM register WHERE online_status = 'online' AND MatriID != '$logged_id' AND Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		$online_exec = mysql_query($online_sql);
		$online_result = mysql_fetch_array($online_exec);
		?>
          <li><a href="refinesearch.php?online=yes">Online now(<?php echo $online_result["onlinecount"]; ?>)</a></li>
        <?php
		$week_sql = "SELECT COUNT(*) AS weekcount FROM register WHERE DATEDIFF(Now(),STR_TO_DATE(Regdate,'%Y-%m-%d'))<=7 AND Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		$week_exec = mysql_query($week_sql);
		$week_result = mysql_fetch_array($week_exec);
		?>
          <li><a href="refinesearch.php?week=yes">One week(<?php echo $week_result["weekcount"]; ?>)</a></li>
        <?php
		$month_sql = "SELECT COUNT(*) AS monthcount FROM register WHERE DATEDIFF(Now(),STR_TO_DATE(Regdate,'%Y-%m-%d'))<=30 AND Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		$month_exec = mysql_query($month_sql);
		$month_result = mysql_fetch_array($month_exec);
		?>
          <li><a href="refinesearch.php?month=yes">One month(<?php echo $month_result["monthcount"]; ?>)</a></li>
        <?php
		$more_month_sql = "SELECT COUNT(*) AS moremonthcount FROM register WHERE DATEDIFF(Now(),STR_TO_DATE(Regdate,'%Y-%m-%d'))>30 AND Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		$more_month_exec = mysql_query($more_month_sql);
		$more_month_result = mysql_fetch_array($more_month_exec);
		?>
          <li><a href="refinesearch.php?morethanmonth=yes">One month and above(<?php echo $more_month_result["moremonthcount"]; ?>)</a></li>
        </ul>
        <a href="search_page.php" class="link more" style="background-image:none">More >></a>
        <hr />
        <strong style="font-size:11px;" class="size12">Profile Type</strong>
        <ul class="ddlist list-arrow2">
        <?php
		$photo_sql = "SELECT COUNT(*) AS photocount FROM register WHERE Photo1 <>'nophoto.gif' AND Photo1Approve = 'Yes' AND Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		$photo_exec = mysql_query($photo_sql);
		$photo_result = mysql_fetch_array($photo_exec);
		?>
          <li><a href="refinesearch.php?photo=yes">With Photo(<?php echo $photo_result["photocount"]; ?>)</a></li>
        </ul>
        <a href="search_page.php" class="link more" style="background-image:none">More >></a>
        <hr />
        <strong style="font-size:11px;" class="size12">Religion</strong>
        <ul class="ddlist list-arrow2">
        <?php
		$hindu_sql = "SELECT COUNT(*) AS hinducount FROM register WHERE (Religion = '1' || Religion like '%Hindu%') AND Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		$hindu_exec = mysql_query($hindu_sql);
		$hindu_result = mysql_fetch_array($hindu_exec);
		?>
          <li><a href="refinesearch.php?religion=Hindu">Hindu(<?php echo $hindu_result["hinducount"]; ?>)</a></li>
        <?php
		$christian_sql = "SELECT COUNT(*) AS christiancount FROM register WHERE (Religion = '5' || Religion = '6' || Religion = '7' || Religion = '8' || Religion like '%Christian%')  AND Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		$christian_exec = mysql_query($christian_sql);
		$christian_result = mysql_fetch_array($christian_exec);
		?>
          <li><a href="refinesearch.php?religion=Christian">Christian(<?php echo $christian_result["christiancount"]; ?>)</a></li>
        <?php
		$muslim_sql = "SELECT COUNT(*) AS muslimcount FROM register WHERE (Religion = '2' || Religion = '3' || Religion = '4' || Religion like '%Muslim%') AND Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		$muslim_exec = mysql_query($muslim_sql);
		$muslim_result = mysql_fetch_array($muslim_exec);
		?>
          <li><a href="refinesearch.php?religion=Muslim">Muslim(<?php echo $muslim_result["muslimcount"]; ?>)</a></li>
        </ul>
        <a href="search_page.php" class="link more" style="background-image:none">More >></a>
        <hr />
        <strong style="font-size:11px;" class="size12">Education</strong>
        <ul class="ddlist list-arrow2">
        <?php
		$doctorate_sql = "SELECT COUNT(*) AS doctoratecount FROM register WHERE (Education like '%Medicine%' or Education like '%Doctorate%') AND Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		$doctorate_exec = mysql_query($doctorate_sql);
		$doctorate_result = mysql_fetch_array($doctorate_exec);
		?>
          <li><a href="refinesearch.php?education=Doctorate">Medicine(<?php echo $doctorate_result["doctoratecount"]; ?>)</a></li>
        <?php
		$master_sql = "SELECT COUNT(*) AS mastercount FROM register WHERE Education like '%Master%' AND Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		$master_exec = mysql_query($master_sql);
		$master_result = mysql_fetch_array($master_exec);
		?>
          <li><a href="refinesearch.php?education=Masters">Masters(<?php echo $master_result["mastercount"]; ?>)</a></li>
        <?php
		$bachelors_sql = "SELECT COUNT(*) AS bachelorcount FROM register WHERE Education like '%Bachelor%' AND Status <> 'InActive' AND Status <> '' AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
		$bachelors_exec = mysql_query($bachelors_sql);
		$bachelors_result = mysql_fetch_array($bachelors_exec);
		?>
          <li><a href="refinesearch.php?education=Bachelors">Bachelors(<?php echo $bachelors_result["bachelorcount"]; ?>)</a></li>
        </ul>
        <a href="search_page.php" class="link more" style="background-image:none">More >></a>
        <hr />