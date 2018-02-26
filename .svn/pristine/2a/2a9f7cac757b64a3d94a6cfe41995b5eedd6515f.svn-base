<?php  
include('../dbconnect.php');

if(!isset($_SESSION['adminusername'])){
header('location:login.php');
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title> Admin panel</title>

<style type="text/css">

<!--

.style2 {

	font-family: Arial;

	font-size: 12px;

	font-weight: bold;

	color: #FF0000;

}

-->




 #header #title {
    clear: both;
    height: 78px;
    padding-top: 12px;
    width: 970px;
}
#title a.logo {
    display: block;
    float: left;
    height: 64px;
    width: 309px;
}
#title a.jk {
    display: block;
    float: right;
    height: 51px;
    margin-top: 13px;
    width: 206px;
}
#title div.live_support {
    float: left;
    height: 55px;
    margin-left: 233px;
    margin-top: 20px;
    width: 200px;
}
#header #top_menu {
    clear: both;
    margin-bottom: 10px;
    width: 970px;
}
#top_menu ul.menubar {
    clear: both;
    display: block;
    height: 46px;
}
#top_menu ul.menubar li {
    display: block;
    float: left;
    height: 46px;
}
#top_menu ul.menubar li.left, #top_menu ul.menubar li.center, #top_menu ul.menubar li.right, ul.menu li {
    background-image: url("../images/menu_bar.png");
}
#top_menu ul.menubar li.left {
    background-position: left top;
    background-repeat: no-repeat;
    width: 25px;
}
#top_menu ul.menubar li.center {
    background-position: left -56px;
    background-repeat: repeat-x;
    margin: 0;
    padding: 0;
    width: 920px;
}
ul.menu, ul.menu li {
    color: #FCECD6;
    font-size: 12px;
    font-weight: bold;
    height: 39px;
    margin: 0;
    padding: 0;
    text-shadow: 1px 1px 1px #4E0025;
}
ul.menu li {
    background-position: 0 -270px;
    background-repeat: no-repeat;
    margin-top: 2px;
}
ul.menu li:hover {
    background-position: 0 -170px;
    background-repeat: repeat-x;
}
ul.menu li:hover a {
    background-color: #A50050;
}
ul.menu li a {
    color: #FCECD6;
    display: block;
    height: 39px;
    line-height: 39px;
    padding-left: 20px;
    padding-right: 25px;
    text-decoration: none;
}
ul.menu li a:hover {
    color: #FFFFFF;
}
ul.menu li a.active {
    background-image: url("../images/icons/icon_collection.png");
    background-position: 5px -40px;
    background-repeat: no-repeat;
    color: #EEC1D8;
    padding-left: 40px;
    padding-right: 20px;
}
#top_menu ul.menubar li.right {
    background-position: left -112px;
    background-repeat: no-repeat;
    float: left;
    width: 25px;
}
#title div.live_support .support {
    background-image: url("../images/icons/icon_collection.png");
    background-position: left top;
    background-repeat: no-repeat;
    clear: left;
    display: block;
    float: left;
    height: 40px;
    margin-right: 5px;
    width: 50px;
}
#content_area {
    clear: both;
    overflow: auto;
    width: 970px;
}
#showcase {
    clear: both;
    margin-bottom: 15px;
    margin-top: 10px;
    width: 970px;
}
#showcase ul#wrap li {
    display: block;
    width: 970px;
}
#showcase ul#wrap li.top {
    background-image: url("../images/show_case.png");
    background-position: 0 0;
    background-repeat: no-repeat;
    height: 10px;
}
#showcase ul#wrap li.middle {
    background-color: #FFFFFF;
    clear: both;
    overflow: auto;
    padding-left: 10px;
    padding-right: 10px;
    width: 950px;
}
#showcase #left {
    clear: left;
    float: left;
    height: 317px;
    overflow: auto;
    width: 637px;
}
#showcase #left h2.caption {
    background-image: url("../images/showcase_caption.png");
    display: block;
    font-size: 16px;
    font-weight: bold;
    height: 42px;
    line-height: 42px;
    padding-left: 37px;
    width: 600px;
}
#showcase #left h2.caption a {
    color: #A50050;
    display: block;
    text-decoration: none;
    width: 600px;
}
#showcase #right {
    clear: right;
    float: right;
    height: 317px;
    overflow: auto;
    width: 304px;
}
#showcase ul#wrap li.bottom {
    background-image: url("../images/show_case.png");
    background-position: 0 -20px;
    background-repeat: no-repeat;
    height: 10px;
}
#showcase .banner {
    height: 274px;
    width: 637px;
}
#footer {
    clear: both;
    width: 970px;
}
#footer #sec1 {
    background-color: #FFF4E5;
    background-image: url("../images/footer_sec1_bg.png");
    background-position: left top;
    background-repeat: repeat-x;
    clear: both;
    font-size: 11px;
    overflow: auto;
    padding: 10px 10px 20px;
}
#sec1_left {
    float: left;
    width: 395px;
}
#sec1_right {
    float: right;
    margin-left: 10px;
    width: 535px;
}
#footer #sec2 {
    background-image: url("../images/hline1.png");
    background-position: left top;
    background-repeat: repeat-x;
    clear: both;
    font-size: 11px;
    overflow: auto;
    padding: 10px 10px 20px;
}
ul.vlist {
    float: left;
    margin: 0 60px 0 0;
}
ul.vlist li {
    padding-bottom: 2px;
    padding-top: 2px;
}
ul.vlist li a {
    color: #454545;
    text-decoration: none;
}
ul.vlist li a:hover {
    text-decoration: underline;
}
ul.vlist li.head {
    color: #993A61;
    font-size: 12px;
    font-weight: bold;
    padding-bottom: 5px;
}
#footer #sec3 {
    background-image: url("../images/hline1.png");
    background-position: left top;
    background-repeat: repeat-x;
    clear: both;
    font-size: 11px;
    overflow: auto;
    padding: 10px 10px 20px;
}
#footer_quicklinks {
    clear: right;
    float: right;
    height: 145px;
    margin-top: 15px;
    width: 205px;
}
#footer_quicklinks a {
    background-image: url("../images/hline1.png");
    background-position: left bottom;
    background-repeat: repeat-x;
    display: block;
    line-height: 24px;
    margin-bottom: 3px;
    margin-top: 3px;
    padding: 6px 3px 5px 6px;
    text-decoration: none;
}
#footer_quicklinks a:hover {
    text-decoration: underline;
}
#footer_quicklinks a span {
    clear: left;
    float: left;
    height: 24px;
    margin-right: 10px;
    width: 24px;
}
span.pathway {
    font-weight: normal;
    margin-left: 3px;
}
span.pathway img {
    padding-left: 3px;
    padding-right: 3px;
}
#inner_right {
    clear: right;
    float: right;
    margin-left: 10px;
    margin-right: 10px;
    width: 696px;
}
.banner_h_std {
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    width: auto;
}
.resgist_so_for {
    color: #A50050;
    font-size: 14px;
    font-weight: bold;
}


.sf-menu, .sf-menu * {
    list-style: none outside none;
    margin: 0;
    padding: 0;
}
.sf-menu {
    line-height: 1;
}
.sf-menu ul {
    position: absolute;
    top: -999em;
    width: 180px;
}
.sf-menu ul li {
    width: 100%;
}
.sf-menu li:hover {
    visibility: inherit;
}
.sf-menu li {
    float: left;
    position: relative;
}
.sf-menu a {
    display: block;
    position: relative;
}
.sf-menu li:hover ul, .sf-menu li.sfHover ul {
    left: 0;
    top: 38px;
    z-index: 99;
}
ul.sf-menu li:hover li ul, ul.sf-menu li.sfHover li ul {
    top: -999em;
}
ul.sf-menu li li:hover ul, ul.sf-menu li li.sfHover ul {
    left: 10em;
    top: 0;
}
ul.sf-menu li li:hover li ul, ul.sf-menu li li.sfHover li ul {
    top: -999em;
}
ul.sf-menu li li li:hover ul, ul.sf-menu li li li.sfHover ul {
    left: 10em;
    top: 0;
}
.sf-menu li li {
    background: none repeat scroll 0 0 #A50050;
    border-bottom: 1px solid #BE065F;
    height: auto;
    margin: 0;
    padding: 0;
}
.sf-menu li li a.active, .sf-menu li li li a.active {
}
.sf-menu li li li, .sf-menu li li:hover li {
    background: none repeat scroll 0 0 #A50050;
    border-bottom: 1px solid #DE006C;
    height: auto;
    margin: 0;
    padding: 0;
}
.sf-menu li li li, .sf-menu li li li a, .sf-menu li li:hover li, .sf-menu li:hover li li a, .sf-menu li li:hover li a, .sf-menu li:hover li:hover li:hover, .sf-menu li:hover li:hover li:hover a, .sf-menu li:hover li:hover li a {
    background-color: #C4005F;
}
.sf-menu li li a:hover, .sf-menu li li li a:hover {
    color: #FCAED6;
}
.sf-menu li li, .sf-menu li li li, ul.menu li li, ul.menu li li li, ul.menu li:hover li, ul.menu li:hover li:hover ul.menu li:hover li a ul.menu li:hover li a:hover {
    background-image: none;
}

</style>

</head>

<link href="style.css" rel="stylesheet" type="text/css">

<body>

<table width="100%" border="0" cellpadding="0" cellspacing="0" id="Outer">

  <tr>

    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" id="inner">

      <tr>

        <td colspan="2"><?php include("adminheader.php");?></td>

      </tr>

      <tr>

        <td bgcolor="#FCECD6" width="20%" style="float:left;" valign="top"><?php include("adminleft.php");?></td>

        <td width="79%" style="float:left;"><table width="100%" height="400" border="0" cellpadding="2" cellspacing="1" id="content">

          <tr>

            <td colspan="6" valign="top">&nbsp;</td>
            </tr>

          <tr>

            <td colspan="6" valign="top" class="HeadText1"><div align="center" class="headertext">

              <div align="left"><strong>ADMIN MAIN CONTROL </strong></div>

            </div></td>
            </tr>

          <tr>

            <td colspan="2" valign="top" class="HeadText1">&nbsp;</td>

            <td width="3%" valign="top">&nbsp;</td>

            <td width="32%" valign="top">&nbsp;</td>
            <td width="3%" valign="top">&nbsp;</td>
            <td width="25%" valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td height="15" colspan="2" valign="top" class="HeadText1"><strong>Site Configuration </strong></td>

            <td colspan="2" valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            </tr>

          <tr>

            <td height="15" valign="top" class="HeadText1"><img src="images/icon24.gif" width="19" height="16" /></td>

            <td height="15" valign="top" class="HeadText1"><a href="siteconfig.php" class="Lightblue">Web Settings </a></td>

            <td valign="top"><img src="images/members.gif" width="16" height="16" /></td>

            <td valign="top"><span class="HeadText1"><a href="admin-edit-plans.php" class="Lightblue">Edit Membership Plans </a></span></td>
            <td valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>
            <td valign="top"><a href="active_photo_album.php" class="Lightblue">Activate Photo album</a>
			<?php

				//////////// NEW INACTIVE PHOTOS IN ALBUM

				@$NewMP = mysql_query(" SELECT Count(*) as photocount FROM photoalbum  where status='InActive' ") 

				or die(mysql_error()); 

				$NMP = mysql_fetch_array( $NewMP);

				if ($NMP['photocount'] == 0) {

				}

				else {

				echo "<img src=images/ball.gif>"; }

				?></td>
          </tr>

          <tr>

            <td height="15" valign="top" class="HeadText1"><img src="images/icon29.gif" width="19" height="16" /></td>

            <td height="15" valign="top" class="HeadText1"><a href="setadminpassword.php" class="Lightblue">Set Admin Password</a></td>

            <td valign="top"><img width="16" height="16" src="images/members.gif"></td>

            <td valign="top"><a href="set_global_password.php">Set Global Password</a></td>
            <td valign="top"><img src="images/icon13.gif" width="19" height="16" /></td>
            <td valign="top"><a href="active_video.php" class="Lightblue">Active Video</a>
			<?php

				//////////// NEW INACTIVE VIDEOS IN ALBUM

				@$NewMV = mysql_query(" SELECT Count(*) as videocount FROM managevideo  where status='InActive' ") 

				or die(mysql_error()); 

				$NMV = mysql_fetch_array( $NewMV);

				if ($NMV['videocount'] == 0) {

				}

				else {

				echo "<img src=images/ball.gif>"; }

				?>                </td>
          </tr>
		  <tr>
		  <td height="15" valign="top" class="HeadText1"><img src="images/052407-ektron-pmsa-wiki.gif" width="19" height="16" /></td>
		    <td valign="top"><a href="admin-edit-page.php" class="Lightblue">CMS Content</a></td>
		  	
		  </tr>

          <tr>

            <td height="15" colspan="2" valign="top" class="HeadText1">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td height="15" colspan="2" valign="top" class="HeadText1"><strong>Members Approval </strong></td>

            <td colspan="2" valign="top"><span class="HeadText1"><strong>Members Photo Approval </strong></span></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            </tr>

          <tr>

            <td width="3%" height="18" valign="top"><img src="images/icon13.gif" width="19" height="16" /></td>

            <td width="37%" valign="top"><a href="approve_inactive_to_active.php" class="Lightblue">Approve Inactive to Active </a>

			<?php

				//////////// NEW INACTIVE ARRIVALS

				@$NewIA = mysql_query(" SELECT Count(MatriID) as TotnewIA FROM register  where Status='InActive' ") 

				or die(mysql_error()); 

				$NIA = mysql_fetch_array( $NewIA);

				if ($NIA['TotnewIA'] == 0) {

				}

				else {

				echo "<img src=images/ball.gif>"; }

				?>			</td>

            <td valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>

            <td valign="top"><a href="approve_photo1.php" class="Lightblue">Photo 1 Approval </a>

				<span class="smalltextred">

				<?

				//////////// NEW PHOTO1 ARRIVALS

				$Newphoto1 = mysql_query(" SELECT Count(MatriID) as Totnewphoto1 FROM register  WHERE Photo1 <> 'nophoto.gif' and Photo1Approve='No' ") 

				or die(mysql_error()); 

				$NP1 = mysql_fetch_array( $Newphoto1);

				if ($NP1['Totnewphoto1'] == 0) {

				}

				else {

				echo "<img src=images/ball.gif>"; }

				?>			
				</span></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top"><img src="images/icon15.gif" width="19" height="16" /></td>

            <td valign="top"><a href="approve_active_to_paid.php" class="Lightblue">Approve Active to Paid </a></td>

            <td valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>

            <td valign="top"><a href="approve_photo2.php" class="Lightblue">Photo 2 Approval </a>

			

			<span class="smalltextred">

				<?

				//////////// NEW PHOTO2 ARRIVALS

				$Newphoto2 = mysql_query(" SELECT Count(MatriID) as Totnewphoto2 FROM register  WHERE Photo2 <> 'nophoto.gif' and Photo2Approve='No' ") 

				or die(mysql_error()); 

				$NP2 = mysql_fetch_array( $Newphoto2);

				if ($NP2['Totnewphoto2'] == 0) {

				}

				else {

				echo "<img src=images/ball.gif>"; }

				?>			
				</span>			</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>

            <td valign="top"><a href="approve_photo3.php" class="Lightblue">Photo 3 Approval </a>

			

			<span class="smalltextred">

				<?

				//////////// NEW PHOTO3 ARRIVALS

				$Newphoto3 = mysql_query(" SELECT Count(MatriID) as Totnewphoto3 FROM register  WHERE Photo3 <> 'nophoto.gif' and Photo3Approve='No' ") 

				or die(mysql_error()); 

				$NP3 = mysql_fetch_array( $Newphoto3);

				if ($NP3['Totnewphoto3'] == 0) {

				}

				else {

				echo "<img src=images/ball.gif>"; }

				?>			
				</span>			</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>


 <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>

            <td valign="top"><a href="approve_photo4.php" class="Lightblue">Photo 4 Approval </a>

			

			<span class="smalltextred">

				<?

				//////////// NEW PHOTO3 ARRIVALS

				$Newphoto3 = mysql_query(" SELECT Count(MatriID) as Totnewphoto4 FROM register  WHERE (Photo4 <> 'nophoto.gif' and Photo4 != '') and (Photo4Approve='No' or Photo4Approve='0') ") 

				or die(mysql_error()); 

				$NP3 = mysql_fetch_array( $Newphoto3);

				if ($NP3['Totnewphoto4'] == 0) {

				}

				else {

				echo "<img src=images/ball.gif>"; }

				?>			
				</span>			</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
		  
		  
		   <tr>

            <td valign="top"><img src="images/email-icon.png" /></td>

            <td valign="middle"><a  href="message_history.php">Message History</a></td>

            <td valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>

            <td valign="top"><a href="approve_photo5.php" class="Lightblue">Photo 5 Approval </a>

			

			<span class="smalltextred">

				<?

				//////////// NEW PHOTO3 ARRIVALS

				$Newphoto3 = mysql_query(" SELECT Count(MatriID) as Totnewphoto5 FROM register  WHERE (Photo5 <> 'nophoto.gif' and Photo5 != '') and (Photo5Approve='No' or Photo5Approve='0') ") 

				or die(mysql_error()); 

				$NP3 = mysql_fetch_array( $Newphoto3);

				if ($NP3['Totnewphoto5'] == 0) {

				}

				else {

				echo "<img src=images/ball.gif>"; }

				?>			
				</span>			</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
		  
		  
		   <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>

            <td valign="top"><a href="approve_photo6.php" class="Lightblue">Photo 6 Approval </a>

			

			<span class="smalltextred">

				<?

				//////////// NEW PHOTO3 ARRIVALS

				$Newphoto6 = mysql_query(" SELECT Count(MatriID) as Totnewphoto6 FROM register  WHERE (Photo6 <> 'nophoto.gif' and Photo6 != '') and (Photo6Approve='No' or Photo6Approve='0') ") 

				or die(mysql_error()); 

				$NP3 = mysql_fetch_array( $Newphoto6);

				if ($NP3['Totnewphoto6'] == 0) {

				}

				else {

				echo "<img src=images/ball.gif>"; }

				?>			
				</span>			</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
		  
		  
		  
		  
		   <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top"><img src="images/icon22.gif" width="19" height="16" /></td>

            <td valign="top"><a href="approve_photo7.php" class="Lightblue">Photo 7 Approval </a>

			

			<span class="smalltextred">

				<?

				//////////// NEW PHOTO3 ARRIVALS

				$Newphoto6 = mysql_query(" SELECT Count(MatriID) as Totnewphoto7 FROM register  WHERE (Photo7 <> 'nophoto.gif' and Photo7 != '') and (Photo7Approve='No' or Photo7Approve='0') ") 

				or die(mysql_error()); 

				$NP3 = mysql_fetch_array( $Newphoto6);

				if ($NP3['Totnewphoto7'] == 0) {

				}

				else {

				echo "<img src=images/ball.gif>"; }

				?>			
				</span>			</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>
            <td colspan="2" valign="top">Payment details </td>
            <td colspan="2" valign="top">Profile verification </td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top"><img src="images/icon13.gif" width="19" height="16" /></td>
            <td valign="top"><a href="payment_details.php">Payment details </a></td>
            <td valign="top"><img src="images/icon13.gif" width="19" height="16" /></td>
            <td valign="top"><a href="verify_profile_admin.php">verify profile </a> 
			 <?php
			 $total_results = mysql_query("SELECT r.*,v.* FROM verify_profile v ,register r WHERE v.matriid = r.MatriID LIMIT 0, 10"); 
			 $ver_count = mysql_affected_rows();
			 //echo $ver_count;
			 if($ver_count > 0 )
			 { ?>
			 &nbsp;<img src=images/ball.gif> <?php
			 } ?></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" valign="top">&nbsp;</td>
            <td colspan="2" valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>

            <td colspan="2" valign="top"><span class="HeadText1"><strong>Horoscope Approval </strong></span></td>

            <td colspan="2" valign="top"><span class="HeadText1"><strong>Successstory Approval </strong></span></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            </tr>

          <tr>

            <td valign="top"><img src="images/icon13.gif" width="19" height="16" /></td>

            <td valign="top"><a href="approve_horos.php" class="Lightblue">Approve/UnApprove Horoscope </a>

			

			

			  <span class="smalltextred">

			  	<?php

				//////////// NEW HOROSCOPE ARRIVALS

				$Newhoros = mysql_query(" SELECT Count(MatriID) as Totnewhoros FROM register  WHERE HorosApprove='No' ") 

				or die(mysql_error()); 

				$NH = mysql_fetch_array( $Newhoros);

				if ($NH['Totnewhoros'] == 0) {

				}

				else {

				echo "<img src=images/ball.gif>"; }

				?>
			  </span></td>

            <td valign="top"><img src="images/icon13.gif" width="19" height="16" /></td>

            <td valign="top"><a href="approve_ss.php" class="Lightblue">Approve Successstory </a></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top"><a href="#" class="Lightblue"></a></td>

            <td valign="top"><img src="images/icon16.gif" width="19" height="16" /></td>

            <td valign="top"><a href="unapprove_ss.php" class="Lightblue">UnApprove/Delete Successstory </a></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td colspan="2" valign="top"><span class="HeadText1"><strong>Renewal Membership </strong></span></td>

            <td colspan="2" valign="top"><span class="HeadText1"><strong>Assured Contact Allocation </strong></span></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            </tr>

          <tr>

            <td valign="top"><img src="images/checkmark.gif" width="20" height="18" /></td>

            <td valign="top"><a href="renew_expired_list.php" class="Lightblue">Renew Membership expired</a></td>

            <td valign="top"><img src="images/icon3.gif" width="19" height="16" /></td>

            <td valign="top"><a href="set_contact_allocate.php" class="Lightblue">Set Contacts Allocation </a></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top"><img src="images/icom34.gif" width="16" height="16" /></td>

            <td valign="top"><a href="fourthcoming_renwals.php" class="Lightblue">Fourthcoming Renewals </a></td>

            <td valign="top"><img src="images/icon1.gif" width="19" height="16" /></td>

            <td valign="top"><a href="reset_contact_allocate.php" class="Lightblue">Reset Contacts Allocation </a></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td colspan="2" valign="top"><span class="HeadText1"><strong>Members Report </strong></span></td>

            <td colspan="2" valign="top"><span class="HeadText1"><strong>Members Report </strong></span></td>

            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            </tr>

          <tr>

            <td valign="top"><span class="paratext"><img src="images/icon7.gif" width="19" height="16" /></span></td>

            <td valign="top"><a href="inactive_reports.php" class="Lightblue">InActive Members </a></td>

            <td valign="top"><img src="images/small_xlicon.gif" width="18" height="19" /></td>

            <td valign="top"><a href="excel_report.php" class="Lightblue">Members Report in Excel File </a></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top"><img src="images/icon5.gif" width="19" height="16" /></td>

            <td valign="top"><a href="active_reports.php" class="Lightblue">Active Members </a></td>

            <td valign="top"><img src="images/icon28.gif" width="19" height="16" /></td>

            <td valign="top"><a href="sales_reports.php" class="Lightblue">Sales Reports </a></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top"><img src="images/icon8.gif" width="19" height="16" /></td>

            <td valign="top"><a href="paid_reports.php" class="Lightblue">Paid Members </a></td>

            <td valign="top"><img src="images/icon10.gif" width="19" height="16" /></td>

            <td valign="top"><a href="allmem_reports.php?g=all" class="Lightblue">View all members </a></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>


          <tr>

            <td colspan="2" valign="top"><span class="HeadText1"><strong>Delete Members</strong></span></td>

            <td colspan="2" valign="top"><span class="HeadText1"><strong>News Letter </strong></span></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            </tr>

          <tr>

            <td valign="top"><img src="images/icon27.gif" width="19" height="16" /></td>

            <td valign="top"><a href="remove_Inactive_mem.php" class="Lightblue">Remove InActive Members</a></td>

            <td valign="top"><img src="images/icon21.gif" width="19" height="16" /></td>

            <td valign="top"><a href="emailsto_mem_compose.php" class="Lightblue">Send Emails to  Members </a></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top"><img src="images/icon27.gif" width="19" height="16" /></td>

            <td valign="top"><a href="remove_Active_mem.php" class="Lightblue">Remove Active Members </a><a href="#" class="Lightblue"></a></td>

            <td valign="top"><img src="images/contact-us.gif" width="21" height="20" /></td>

            <td valign="top"><a href="groupmail_compose.php" class="Lightblue">Send Group Mails </a></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top"><img src="images/icon27.gif" width="19" height="16" /></td>

            <td valign="top"><a href="remove_paid_mem.php" class="Lightblue">Remove Paid Members</a></td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>

            <td colspan="2" valign="top">&nbsp;</td>

            <td colspan="2" valign="top"><span class="HeadText1"><strong>Database </strong></span></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            </tr>

          <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top"><img src="images/icon12.gif" width="19" height="16" /></td>

            <td valign="top"><a href="dbchk.php" class="Lightblue">Database CheckUp</a></td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>

          <tr>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>

            <td valign="top">&nbsp;</td>
          </tr>

        </table></td>

      </tr>

      <tr>

        <td colspan="2"><?php include("adminfooter.php");?></td>

      </tr>

    </table></td>

  </tr>

</table>

</body>

</html>

