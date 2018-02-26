<?php 
include("../dbconnect.php");
?>
<link href="favicon.ico" rel="shortcut icon">

<table width="100%" height="110" border="0" cellpadding="0" cellspacing="0">

<tr>

<td ><table width="100%" border="0" cellspacing="0" cellpadding="0">

<tr>

<td height="54"><table width="100%" border="0" cellspacing="0" cellpadding="0">

<tr>

<td width="30%" height="54" bgcolor="#FCECD6"><img src="<?php echo $sitelogo; ?>"></td>

<td width="70%" bgcolor="#FCECD6"><div align="right"><img src="images/as.gif" width="264" height="54" /></div></td>

</tr>

</table></td>

</tr>



<tr>

<td height="25">
<div id="top_menu">

            <ul class="menubar">

        <li class="left"></li>

        <li class="center">




        <ul class="menu sf-menu sf-js-enabled sf-shadow" id="sample-menu-1">

    
            <li class=""><a class="#" href="index.php" title="home">MY ADMIN </a>

</li>

      
           <li class=""><a href="approvals.php" title="Articles">APPROVALS</a>

           </li>

    
            <li class=""><a href="setcontacts.php" title="Gallery">SET CONTACTS </a>

          </li>

    
            <li class=""><a href="renewals.php" title="Affiliates">RENEWALS</a>

          </li>

		
    <li class=""><a href="reports.php" title="Articles">REPORTS</a>

           </li>

        
            <li class=""><a href="others.php" title="Abous us">OTHERS</a></li>  
	        <li><a href="dynamicpages.php" title="Dynamic pages">DYNAMIC PAGES</a></li>
			<!--<li><a href="addons.php" title="Addons">ADD-ONS</a></li>-->

			<li><a href="logout.php" title="Logout">LOGOUT</a></li>

		
      
          </ul>

 

        

        </li>

		

        <li class="right"></li>

		

      </ul>

    </div>
		<!--<ul class="menubar">	

			<li><a class="#" href="index.php" title="home">MY ADMIN </a></li>

			<li><a href="approvals.php" title="Articles">APPROVALS</a></li>

			<li><a href="setcontacts.php" title="Gallery">SET CONTACTS </a></li>

			<li><a href="renewals.php" title="Affiliates">RENEWALS</a></li>

			<li><a href="reports.php" title="Articles">REPORTS</a></li>

			<li><a href="others.php" title="Abous us">OTHERS</a></li>

			<li><a href="dynamicpages.php" title="Dynamic pages">Dynamic Pages</a></li>

			<li><a href="logout.php" title="Logout">LOGOUT</a></li>

		</ul>-->



		

		</td>

</tr>

</table></td>

</tr>

</table>
<style>


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
    width: 1150px;
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

<style type="text/css" title="currentStyle">
	@import "datagrid/css/demo_table_jui.css";
	@import "datagrid/css/jquery-ui-1.8.4.custom.css";
	@import "datagrid/css/TableTools.css";
	@import "datagrid/css/demo_page.css";
</style>
<script type="text/javascript" language="javascript" src="datagrid/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="datagrid/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" src="datagrid/js/ZeroClipboard.js"></script>
<script type="text/javascript" charset="utf-8" src="datagrid/js/TableTools.js"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready( function () {
		$('#example').dataTable( {
			"bJQueryUI": true,
			"sPaginationType": "full_numbers",
			"sDom": '<"H"Tfr>t<"F"ip>',
			"oTableTools": {
				"aButtons": [
					"copy",
					"print"
				]
			}
		} );
	} );
</script>
<style type="text/css">
	#example th
	{
	  color:#000;
	  font-weight:bold;
	}
	.dataTables_wrapper, .dataTables_wrapper label, .dataTables_info
	{
	 font-size:12px !important;
	 color:#000;
	 padding:0 5px;
	}
</style>
