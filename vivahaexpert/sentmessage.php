<?php session_start();


include("dbconnect.php");



$sender = $_SESSION['matriid'];


$select_messages = "SELECT * FROM sendmessage where sender = '$sender'"; 
$res = mysql_query($select_messages);



$select_inbox = mysql_query("select count(*)  as inbox_cnt from sendmessage where receiver = '$sender'");
$inbox_count = mysql_fetch_array($select_inbox);
$inbox_count1 = $inbox_count["inbox_cnt"];


$select_sent = mysql_query("select count(*)  as inbox_cnt from sendmessage where sender = '$sender'");
$sent_count = mysql_fetch_array($select_sent);
$sent_count1 = $sent_count["inbox_cnt"];


 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<style>
.toolbar1 {
    background-image: url("icons/background_silver.jpg");
    border: 1px solid #666666;
    height: 26px;
}
.toolbar2 {
    -moz-border-bottom-colors: none;
    -moz-border-image: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-image: url("icons/background_silver.jpg");
    border-color: -moz-use-text-color #666666;
    border-left: 1px solid #666666;
    border-right: 1px solid #666666;
    border-style: none solid;
    border-width: 0 1px;
    height: 24px;
}
.button {
    background: none repeat scroll 0 0 transparent;
    border: 0 solid transparent;
    height: 20px;
    margin: 1px;
    padding: 0;
    width: 20px;
}
.buttonOver {
    border: 1px solid #999999;
    height: 20px;
    margin: 0;
    padding: 0;
    width: 20px;
}
.dropdown {
    background-color: #FFFFFF;
    border: 1px solid #333333;
    height: 140px;
    overflow: auto;
    padding: 1px;
}
button.mouseOver {
    background-color: #EEEEEE;
    border: 1px solid #CCCCCC;
    cursor: default;
    padding: 3px;
    text-align: left;
}
button.mouseOut {
    background-color: #FFFFFF;
    border: 1px solid #FFFFFF;
    cursor: default;
    padding: 3px;
    text-align: left;
}
.on {
    background-color: #EEEEEE;
    border: 1px solid #CCCCCC;
    cursor: default;
    height: 5px;
    padding: 6px;
    width: 140px;
}
.off {
    background-color: #FFFFFF;
    border: 1px solid #FFFFFF;
    cursor: default;
    height: 5px;
    padding: 6px;
    width: 140px;
}
.selectColorTable {
    background-color: #F7F7F7;
    border: 1px solid #7E7E81;
    padding: 1px;
}
.selectColorBorder {
    border: 1px solid #F7F7F7;
}
.selectColorOn {
    background-color: #CCCCCC;
    border: 1px solid #999999;
}
.selectColorOff {
    background-color: #F7F7F7;
    border: 1px solid #F7F7F7;
}
.selectColorBox {
    border: 1px solid #FFFFFF;
    font-size: 1px;
    height: 13px;
    width: 13px;
}

h2#title {
    margin-left: 0;
    padding-left: 0;
}

table#jspMailBox td h2#title, table.forAddMediaItemHtml td h2#title {
    font-size: 140%;
    margin: 10px 0 0 10px;
    text-align: left;
}

table#personalSetAndInfo td h2#title {
    font-size: 140%;
    margin: 10px 0 0 10px;
    text-align: left;
}


body {
    font-family: Arial,Helvetica,sans-serif;
    font-size: 13px;
    text-align: center;
}

body, div#myShortProfile button#trial, div#yourAdmires h3 a#hotList, div.groups p#groupName, td#rightColumn div#superMatchWizard table#parametersMatches p#nameBold a, p#forPersonalSettingsTest, table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#default p#getDefault, div#alterNavbar p a, div.forTabbedPane table td div.activeTab p.selectedActiveTab {
    color: #2572B3;
}


table.HIGHLIGHT_IN_SEARCH_RESULT_ENABLED div#photoOut{ border-right:0}
	td.HIGHLIGHT_IN_SEARCH_RESULT_ENABLED div#HIGHLIGHT_IN_SEARCH{ border-left:0}
	body {margin:0 auto; padding:0; text-align:center; font-size:13px; font-family:Arial, Helvetica, sans-serif; width:1100px; position:relative;}
	h3 {margin:15px 0; font-size:115%;}
	
	/* Fieldset*/
	label.check input {border-style:none; background:none;}
	button {height:24px; /*background:url(/images/skin/bgButton.gif) repeat-x; border:1px solid #9DB8BD; font-weight:bold; color:#CB0000;*/ cursor:pointer;}
	p.buttons {padding:0; margin:10px 0 0 36%;text-align:left;}
	button p.inButton,p.buttons button p.inButton { margin:0; padding:0 15px; text-align:center; /*color:#CC0000*/}
	
	fieldset.horizontal {border:0px solid #333; margin:0; padding:10px 0 10px 0;}
	fieldset.horizontal label {display:block; margin: 0 0 -0.9em 0; text-align:left; width:100%;padding-left:10px;}
	fieldset.horizontal label input,
	fieldset.horizontal label select,
	fieldset.horizontal label textarea {position: relative; top: -1.4em; /*left: 35%;*/ display:block; width:60%; font-weight:normal;}
	fieldset.horizontal label.check {margin-bottom:0.3em; font-weight:normal; margin-left:30px; width:auto;}
	fieldset.horizontal label.check input {width:auto; position:inherit; top:2px; left:0; display:inline;}
	fieldset.horizontal label.editor {margin-bottom:-1.8em;}
	fieldset.horizontal label.editor input {width:60%;}
	fieldset.horizontal label.editor img {position: relative; top: -40px; left: 95%; display:block;}
	
	fieldset.horizontal p {margin-left:35%; font-size:11px;}
	
	/* [PSCS-347] - start */
	fieldset.horizontal input#nickname,
	fieldset.horizontal input#password,
	fieldset.horizontal input#email,
	fieldset.horizontal input#phoneNumber,
	fieldset.horizontal input#mobilePhoneNumber,
	fieldset.horizontal input#confirmPassword,
	fieldset.horizontal textarea#reasonOfLeaving {left:0px; margin-left:130px;}	

	fieldset.horizontal select#sexId,
	fieldset.horizontal select#countryId,
	fieldset.horizontal select#regionId,
	fieldset.horizontal select#interfaceLocaleCode,
	fieldset.horizontal file#mediaItem {left:0px; margin-left:130px;}					
	
	fieldset.horizontal label.check {left:0px;}					
	fieldset.horizontal p.buttons {left:0px; margin-left:130px;}
	/* [PSCS-347] - end*/	
	
	/*added*/
	/*fieldset div.radiogroup {margin-bottom:1em;}*/
	fieldset div.radiogroup label.radio { margin:-0.2em 0 0 0;}
	/**/
	fieldset.vertical {border:0px solid #333; margin:0 0 5px 5px; padding:20px;}
	fieldset.vertical label {display:block; text-align:left; width:100%; clear:both; /*margin-bottom:0.5em;*/}
	fieldset.vertical label input,
	fieldset.vertical label select,
	fieldset.vertical label textarea {float:left; width:100%;}
	fieldset.vertical label.check {/*margin-bottom:0.3em; */font-weight:normal;}
	fieldset.vertical label.check input {width:auto; float:none; /*margin-top:2px;*/ left:0;}
	fieldset.vertical label.editor {}
	fieldset.vertical label.editor input {width:85%;}
	fieldset.vertical label.editor img { float:left;}
	
	fieldset div.radiogroup {margin-bottom:1em;}
	fieldset div.radiogroup label.radio { margin:-0.2em 0 0 0;}
	fieldset label.subgroup input{margin-left:1.5em;}
	
	/*Here must be header*/
	/* Footer */
	div#alterNavbar {width:764px; margin:0 auto; padding:10px 0; border-bottom:none;}
	div#alterNavbar p { margin:0; padding:0; text-align:center;position:static; margin-right:180px}
	div#alterNavbar p a{ text-decoration:none;}
	div#alterNavbar p a:hover{ text-decoration:underline}
	div#copyBar {width:764px; height:25px; background:url(/images/skin/footer/bgCopy.gif) repeat-x; margin:0 auto; padding:0;}
	div#copyBar p {height:25px; line-height:25px; margin:0; padding:0 1em; color:#FFF;}
	div#alterNavbar div.registrationNumber{float:left; display:block; font-size:11px; width:140px; text-align:left; margin-left:0px; padding:0; padding-left:20px; margin-right:25px;}
	.left {float: left;}
	.right {float: right;}
	.asButton{cursor:pointer; text-decoration:none; line-height:20px;}
	p.marginTopFive {margin:0; padding:0}
	/*ERROR STYLES*/
	fieldset.horizontal div.errorList {margin:0 0 0 40%; width:60%;}
	fieldset.vertical div.errorList {float:left; width:100%; margin:0; padding:0;}
	
	/*fieldset*/ div.errorList p.errorHeader {margin:0; padding:0 0.5em; height:21px; line-height: 21px; font-weight:bold; font-size:90%}
	/*fieldset*/ div.errorList p.errorHeader img {float:left; margin-right:5px;}

	ul#errorGlobalList {margin:2px 0 10px 0; padding:0.5em;}
	ul#errorGlobalList li { font-size:90%; list-style-position:inside; font-weight:bold;}
	/*END ERROR STYLES*/
	
	/* HINT & POPUP */
	div.hint {background:#FFF; border-style:solid; border-width:2px 1px 2px 1px; padding:0.5em; font-size:9pt; font-family:Verdana, Arial, Helvetica, sans-serif; overflow:auto; color:#CA0000;}

	div.popup {background:#FFF; border-style:solid; border-width:2px 1px 2px 1px; padding:1px; font-size:9pt; font-family:Verdana, Arial, Helvetica, sans-serif;}
	div.popup div.title {height:19px; border-style:solid; border-width:1px;  border-left:#FFF; border-right:#FFF; border-top:#FFF;}
	div.popup div.title p {margin:0; padding:0 0 0 20px; cursor:move; font-weight:bold; font-size:8pt; height:19px; line-height:19px;}
	div.popup div.title img {position:absolute; top:4px; right:5px; cursor:pointer;}
	div.popup div.content { clear:both; overflow:auto; margin:2px 3px; padding:2px; font-size:9pt;}
	div.popup div.content p {margin:3px;}
	
	/* ERROR HINT*/
	div#errorPrototype {}
	div#errorPrototype p {float:left; font-size:90%; color:#FFF; margin:0; padding:0 .5em 0 25px; height:21px; line-height:21px; background-color:#E40000; background-image:url(/images/skin/errors/errorSign.gif); background-position:3px center; background-repeat:no-repeat; border-style:solid; border-color:#B60000; border-width:2px 2px 0 2px;}
	div#errorPrototype div {clear:left; height:5px;}

	/*end border for all pages*/
	div.hightLightMailBox,table#personalSetAndInfo td.borderedBottom,
	form#blockList  table#blockList td,table#callHistory td,
	table#oppositeHotListHtml td,table#callCenterRate td,table#callCenterRate th{border-top:0; border-left:0; border-right:0}
	
	form#readMessage td#mainContent table#tableOfContent td#from,
	form#readMessage td#mainContent table#tableOfContent td#subject{border-top:0; border-bottom:0; border-left:0}	
	table#crumbs td.colored3{border-top:0; border-bottom:0}
	
	.templateColorOne,table#templateColorTwo,table#viewProfileTable .groundColor,
	table#viewProfileTable .groundColorBold{border-left:0; border-right:0}
	
	/*replace div.bordered and it's extended classes by class bordered*/
	.bordered{ background:#FFF;}
	a.crumbs{text-decoration:none;}
	/* common styles For Login, registrationStep1,2*/	
	div#pict{width:100%;margin:0;}
	div#form{width:85%;text-align:left;clear:left;}
	h3.rightH3{text-align:left;padding-top:5px;}
	/*end  common styles For Login, registrationStep1,2*/	
	
	/*using in each class*/
	a#redLink{text-align:center;}	
	.warning{margin:5px auto; display:block; padding:0; text-align:center; font-weight:bold; font-size:12px;}
	/*end using in each class*/
		
	/*SearchResult from default.html*/
	td div.cells{display:block; float:left; background:#FFF; margin:7px 5px 10px 0; height:23px; font-size:11px}
	td div.cells p.sexmatch{margin:4px 0 0 0;padding:0 2px 0 5px; float:left; font-weight:bold;font-size:11px;}
	td div.cells p.sexmatchNormal{margin:4px 0 0 0;padding:0 2px 0 5px;}
	td div.cells  img{margin:3px 5px; float:left;}
	div p.status{margin:4px 0 0 0;padding:0 2px 0 5px; font-weight:bold;}
	p.titleInfo{padding:0;margin:15px 0 0 10px;text-align:left;}
	p.description{margin:0;padding:0;text-align:left;margin:0 5px 0 10px;}
	table#mediaView{margin-top:3px;height:85px;}
	table.media td{background:#FFF;text-align:left;}
	table.media td a.redLink{text-decoration:none;vertical-align:top;text-align:left;margin:0;padding:0;}
	table.media td img{float:left;vertical-align:middle;margin:0 3px 0 5px;padding:0;border:none;}
	div p.signes{float:left; margin:0; margin-right:5px; padding:0;width:125px;text-align:right; font-size:11px;}
	div.signesMain a.redLink, div.photo a.redLink, div a.redLink{text-align:center;text-decoration:none;margin:0 0 0 2px ;}
	div.signes{width:52px; float:left;text-align:left;margin-top:3px; height:7px; margin-left:1px;}

	/*for superMatch*/
	div.signesRed{width:100px; float:left; background:#FFFFFF;text-align:left;margin-top:2px;height:9px;}
	div.signesRed table.superMatchRed{margin-top:2px;margin-bottom:2px;background:url(/images/skin/SearchResult/superMatch.gif); background-repeat:repeat-x; height:5px;}	
	/*end*/
	div.signesMain{clear:both;}
	td.minus{height:11px;line-height:1px;}
	td.minusImg{width:14px;height:11px; text-align:left;}
	div.FullComponent{float:left;}
	div.FullComponent table#around{margin-top:2px; height:72px; width:245px;}
	div.FullComponent table#around td#content{background:#FFF;}
	p.pageline{height:30px;margin:10px 0 0 0;}
	div.signesMain p#super{font-weight:bold;margin-left:5px;}
	div.signes table.compotiblePercent{margin-top:1px;margin-bottom:1px; margin-left:1px; background:url(/images/skin/SearchResult/matchCommon.gif); background-repeat:repeat-x;height:5px;}
	div.signes table.superMatch{margin-top:2px;margin-bottom:2px;background:url(/images/skin/SearchResult/superMatch.gif); background-repeat:repeat-x; height:5px;}	
	div.photo{width:120px; float:left;display:block; margin:0;padding:0;height:200px;}	
	div.photo a.addToHotList{margin:0 5px 0 0; text-decoration:none;}
	td.photo div#photoOut{width:120px; height:110px;border-right:0}
	td.photo div#photoIn{width:92px; height:92px;background:#FFF; margin:5px 5px 10px 10px;}	
	td.photo div#photoIn Img{
		margin:5px; vertical-align:top;border:2px solid #9B9899;
	}
	td img#PictLink{margin:0 7px 0 15px;float:left; vertical-align:top;border:0;}
	div.aboutUser{display:block; height:200px; text-align:left;}
	div#statisticComponenets{margin:0;float:none; height:130px;padding:0;margin-left:15px;}
	div.PrevNext{float:left; width:200px;height:40px;}
	div.PrevNextWhite{width:181px; float:left; background:#FFF;}/*was 180px*/
	div#LayerReg2{margin:5px 0 0 0;background:#FFF;}/*was* margin:5px 0/
	/*End styles SearchResult*/
	
	/*All styles Login*/
	h3.didYou,h3.didU{margin:0 7px; padding:0;font-size:12px}
	
	div#adv p.adv{margin:0 7px; padding:0; text-align:justify; font-size:11px}
	div.LoginMain p{text-align:left;padding-left:10px;padding-right:10px;padding-top:0;margin-top:0;}
	div.LoginMain h3{padding-top:15px;padding-bottom:0;margin-bottom:0;}
	div.LoginMain td{background:#FFFFFF;}
	div.LoginMain p.leftContent{text-align:left;padding-right:50px;}
	div.LoginMain IMG#auth{float:left;vertical-align:top;margin-left:5px;padding-top:5px;margin-right:5px;}
	div.LoginMain{text-align:center; width:775px; margin:0 auto;}
	div.LoginMain table.registration h3#newFet{margin-left:10px; text-align:left;}
	div.LoginMain table.registration p#pFirst{margin-top:30px;}

	/*end styles Login*/
	
	/*All styles RegistrationStep1*/
	div.RegistrationStepOne p{text-align:left;padding-left:15px;padding-right:20px;padding-top:0;margin-top:0;}
	div.RegistrationStepOne img#work{float:none;vertical-align:top;padding-top:10px;margin-right:5px;}
	div.RegistrationStepOne img#book{vertical-align:top;float:left;margin:5px 5px 0 10px;}
	div.RegistrationStepOne{text-align:center; width:775px; margin:0 auto;}
	div#imageRegistrationTable{margin:10px auto; width:250px}
	div#imageRegistrationTable a#redLink{margin:15px 0;}
	div#imageRegistrationTable table.main{width:100%; border:0;}
	div#imageRegistrationTable table.main table.tabl{width:239px; border:0;}
	div#imageRegistrationTable table.main table.tabl td.imgLine{width:220px; height:9px;}
	div#imageRegistrationTable table.main table.tabl td.imgbgRight{background-image:url(/images/skin/Registration/register/bg_right.gif); background-position:right; background-repeat:repeat-y;}
	div#imageRegistrationTable table.main table.tabl td table.imgbgLeft{background-image:url(/images/skin/Registration/register/bg_left.gif); background-position:left; background-repeat:repeat-y; width:100%;  border:0;}
	div#imageRegistrationTable table.main table.tabl td table.imgbgLeft td.img123{width:42px; height:63px;}
	div#imageRegistrationTable table.main table.tabl td table.imgbgLeft td.imgIllustration{width:78px; height:77px;}
	div#imageRegistrationTable table.main table.tabl td table.imgbgLeft span.spanTextBold{font-weight:bold; font-family:Arial, Helvetica, sans-serif; font-size:14px;}
	div#imageRegistrationTable table.main table.tabl td table.imgbgLeft span.spanText{font-family:Arial, Helvetica, sans-serif; font-size:11px;}
	div#imageRegistrationTable table.main table.tabl td table.imgbgLeft td.tdSpan{padding-right:5px;}
	/*end styles RegistrationStep1*/
	td.fontSizeTo{font-size:11px;}
	
	/*Styles of ViewProfile*/
	table#viewProfileTable{background:#FFF}
	table#viewProfileTable h3#forNoUser{margin:120px auto; text-align:center; font-size:120%; color:#E40000;}
	table#viewProfileTable h2#name{margin:0 auto; padding:10px 0; font-size:16px}

	table#viewProfileTable .groundColorBold{width:130px; padding-left:10px; font-weight:bold;}
	table#viewProfileTable .whiteColorBold{background:#FFF;width:40%;padding-left:10px;font-weight:bold;}
	table#viewProfileTable .whiteColor{background:#FFF;}
	table#viewProfileTable td.whiteColor p#imIcon{margin:4px 10px 4px 0;padding:0;float:left;}
	table#viewProfileTable td.whiteColor p#imText{margin:5px 0 0 0;padding:0;}
	table#viewProfileTable table#mediaProfile img{margin:0 5px 0 5px;}
	table#viewProfileTable table#mediaProfile a{margin:0 5px 0 0;}
	table#viewProfileTable .whiteColorBoldPad{background:#FFF;width:40%;padding-left:10px;font-weight:bold;padding-top:5px;padding-bottom:5px;}
	table#viewProfileTable .whiteColorPad{background:#FFF;width:60%;padding-top:5px;padding-bottom:5px;}
	table#viewProfileTable .profileDescription{text-align:left;padding:10px;}
	table#viewProfileTable .profileDescription p,table#viewProfileTable .profileDescription h3{margin:0; padding:0}
	table#viewProfileTable a.redLinkProfile{text-decoration:none;}
	table#viewProfileTable a.redLinkProfile:hover{text-decoration:none;}
	table#viewProfileTable table.media td p.middleLink{margin:7px 0 0 0;padding:0; vertical-align:bottom;}
	
	table#mainViewProfile td#bottomContent{text-align:left;background:#FFF;}
	table#mainViewProfile td#bottomContent p{margin:10px;}
	table#mainViewProfile{ margin:0 auto;}
	/*End Styles of ViewProfile*/
	
	/*Begin Styles of PersonalInformation*/
	div#PersonalInformation table td h3.Names{text-align:center;margin:0; padding:0;}
	div#PersonalInformation label#looking{float:left;}
	div#PersonalInformation div#info{margin:0 40px 20px 155px;}
	div#PersonalInformation div#mainText{margin:0 0 0 30px;}
	div#PersonalInformation div#age{margin:15px 25px 10px 25px;}
	div#PersonalInformation label#sex{position:relative;top:-7px; margin-left:40px;} 
	div#PersonalInformation fieldset#look{width:200px; margin:0 0 0 15px;padding:0;}
	div#PersonalInformation fieldset#head{margin: 0 15px 0 15px;}
	div#PersonalInformation label#mySex{position:relative;top:5px;}
	div#PersonalInformation label#mySex IMG{position:relative;top:3px;}
	div#PersonalInformation h3#basic{margin:0;}
	div#PersonalInformation table.fields{width:250px;}
	div#PersonalInformation fieldset#head textarea{height:100px;}
	div#PersonalInformation table.fields label#dateBirth{padding-top:5px; width:180px;}
	div#PersonalInformation table.fields label.location{padding-top:5px;}
	div#PersonalInformation table.fields td#names{height:480px; vertical-align:top;}
	div#PersonalInformation table.fields td#names fieldset.vertical{width:190px;}
	div#PersonalInformation p.buttons{margin-left:250px;}
	table#personalSetAndInfo{margin:0 auto; width:580px;}
	table#personalSetAndInfo td h2#title{font-size:140%; text-align:left; margin:10px 0 0 10px;}
	table#personalSetAndInfo td p#personalAll{margin:10px;padding:0; text-align:left;}
	table#personalSetAndInfo td p#readMore{margin:7px 0 0 7px; font-size:11px; text-align:left;}
	table#personalSetAndInfo td p#readMore a#redLink{font-size:11px;}
	table#personalSetAndInfo td img#mainImg{float:left;margin:0 0 0 5px;}
	table#personalSetAndInfo td img#imgQuestion{position:relative; left:10px; top:8px; float:left;}
	table#personalSetAndInfo td div#textAfterQuestion{margin:0 20px 0 50px; padding:0;}
	table#personalSetAndInfo td div#blockQuestion{margin:0; padding:5px 0 0 0;}
	/*End Styles of PersonalInformation*/
	
	/*Template internal*/
	table#crumbs td.colored1{font-weight:bold; font-size:11px;}
	table#crumbs td.colored1 p{margin:0 10px; padding:0;}
	table#crumbs td.colored2 img{margin:0 10px}
	table#crumbs td.colored3{padding:0 5px 0 5px;}
	table#crumbs{margin:0; padding:0; font-size:11px; clear:both}
	td#leftColumn div.bordered {margin:0;}
	td#leftColumn h3.hdrMarked {font-size:110%; height:23px; line-height:23px; text-align:center; border-top:1px solid #FFF; border-left:1px solid #FFF; border-right:1px solid #FFF; margin:0 0px 0 0;}
	td#leftColumn h3.hdrMarkedReverse { font-size:110%; height:23px; line-height:23px; text-align:center; border-top:1px solid #FFF; border-left:1px solid #FFF; border-right:1px solid #FFF; margin:0 0px 0 0;}
	td#rightColumn div.bordered{margin:0; height:25px;}
	td#leftColumn div#upgradeMembership{height:78px;}
	td#leftColumn div#upgradeMembership button#up{width:150px; height:40px;margin:19px auto; padding:0;text-transform:uppercase; font-family:Arial,Times; font-size:12px;cursor:pointer;}
	td#leftColumn  table.profileOption{width:130px;text-align:left; margin:10px auto}
	td#leftColumn  table.profileOption a.redLink{text-align:left; margin:0; padding:0;}
	td#leftColumn  p.link{text-align:left; margin:0; padding:0; font-weight:bold;}
	td#rightColumn div#flash{ width:580px; margin-bottom:5px;}
	td#rightColumn div#flash p.non{padding-top:15px}
	td#rightColumn div#flash p {margin:0px;}
	td#rightColumn div#flashMycrowd{height:95px; width:578px; margin-bottom:5px}
	/*Begin mycrowd menu*/	
	td#leftColumn  ul#staticMenuTop{text-align:left; margin:15px 0 5px 20px;list-style:none;padding:0;}
	td#leftColumn   ul#staticMenuBottom{text-align:left; margin:5px 0 15px 20px;list-style:none;padding:0;}
	td#leftColumn   ul#staticMenu{text-align:left; margin:5px 0 5px 20px;list-style:none;padding:0;}
	td#leftColumn   ul#staticMenu li, td#leftColumn  ul#staticMenuTop li, td#leftColumn   ul#staticMenuBottom li{margin:0; padding:0; font-weight:bold;}
	td#leftColumn  ul#staticMenu li a,td#leftColumn  ul#staticMenuTop li a,td#leftColumn   ul#staticMenuBottom li a{margin:0 0 0 10px; padding:0; font-weight:normal; font-size:11px; text-decoration:none;}	
	/*End mycrowd menu*/
	
	/*BEGIN MyProfile/default*/
	div#myShortProfile {border-top-style:none; margin:0;padding:0; width:170px}
	div#myShortProfile p {margin:0; padding:0; text-align:center; font-size:75%;}
	div#myShortProfile div.signesVer{width:7px; height:103px; float:left; margin:5px 0 0 0;padding:0;}
	div#myShortProfile div.signesVer table.compotiblePercent td#me{background:url(/images/skin/SearchResult/vertProgress.gif);background-repeat:repeat-y;width:5px;}
	div#myShortProfile a img{float:left;margin:5px 0 5px 5px;}
	div#myShortProfile  img#im{margin:0 5px 5px 5px;}
	div#myShortProfile a{position:relative; bottom:10px	}
	div#myShortProfile button#trial{width:82px;}
	div#myShortProfile img#textSuccess{float:left; margin:5px 2px 2px 0;}
	div#myShortProfile img#grad{margin:6px 0 0 0; padding:0;}
	div#myShortProfile img#trial{float:left;}
	div#myShortProfile p#trial{margin:2px;padding:0;}
	a#redLink div#memberShipMyProfile, div#memberShipMyProfilePlatinum{margin-top:10px; margin-bottom:0; padding-bottom:0; margin-left:5px; width:82px; text-align:center; font-size:11px}
	a#redLink div#memberShipMyProfile img, div#memberShipMyProfilePlatinum img{float:left;margin:0; padding:0; position:relative; left:10px; border:0}
	a div#myProfileMoreButton{margin-top:10px; height:20px; width:60px ; text-align:center; font-size:11px;margin-bottom:0; padding-bottom:0;}
	/*END MyProfile/default*/
	
	/*BEGIN Hotlist_default.html*/
	div.groups{width:115px; height:35px; background:#FFF; margin: 5px 5px; text-align:center;}
	div.groups p#group{margin-top:8px; font-size:11px;}
	div.groups p#groupName{margin-top:5px;}
	div#manageGroups{width:115px; height:35px;z-index:1; text-align:center;position:relative; left:155px; top:28px;}
	div#manageGroups a.myManage{text-decoration:none; font-size:11px; position:relative; top:6px;}
	div#hotList{border-bottom:none; width:85px; height:36px;z-index:1; background:#FFF;position:relative; top:-9px; left:272px; text-align:center; font-size:11px;}
	div#allMembers{width:129px;border-right:none; z-index:1;position:relative;left:6px;/*background:#FFF; margin-top:5px;*/}
	div#hotList p#hotList{margin:6px 0 0 0; font-size:11px;}
	table#groupTable{margin:0 auto; text-align:center;width:96%; height:100%;position:relative;top:-20px;}
	table#scheise{width:98%; margin:0 !important; text-align:center;}
	table#scheise tr#head{font-size:11px;}
	table#scheise tr#head th, table#scheise tr#head td {padding-left:3px;}
	table#scheise input{border:none; background:none;}
	table#mainScheise{position:relative; background:#FFF; margin:5px 5px 3% 0;height:97%;width:99%;}
	div#allMembers p#allMembers{margin-top:7px;}
	table#scheise tr#head p#userName{margin-left:10px;padding:0;}
	.stringColorless{background-color:#FFF;}
	select.selHotlist{width:245px; margin-left:30px;float:left;position:relative; top:-15px;}
	div#hotListScroll{width:170px;position:relative; top:-35px; left:400px;}
	div#hotListScroll p#scroll{text-align:right; margin-right:20px;}
	button#hotListSubmit{float:left;margin-left:5px;position:relative; top:-15px; height:20px;}
	div#groupNameDiv{width:123px; border-right:0; margin-right:0;}
	/*END Hotlist_default.html*/
	
	/*BEGIN Hotlist_manageGroups*/
	div#manageHotLispGroup div#manageGroups{width:115px; height:36px; border-bottom:none; background:#FFF; z-index:1; text-align:center;position:relative; left:155px; top:28px;}
	div#manageHotLispGroup div#hotList{width:85px; height:35px;z-index:1;position:relative; top:-9px; left:272px; text-align:center; font-size:11px;}
	div#manageHotLispGroup div#manageGroups p#hotList{margin:6px 0 0 0;font-size:12px;}
	div#manageHotLispGroup label#newGroup{margin:0 0 0 30px;}
	div#manageHotLispGroup input#groupName{width:270px;margin-left:5px;}
	div#manageHotLispGroup button#submit{height:20px; width:90px;}
	div#manageHotLispGroup table#main{margin:0 20px; position:relative;top:-3px;width:94%; text-align:center}
	div#manageHotLispGroup table#main table#in{margin:3%; text-align:center;width:94%;border:0;}
	
	div#manageHotLispGroup table#main table#in tr#head{font-size:11px; height:30px;}
	div#manageHotLispGroup table#main table#in tr#head td#border,div#manageHotLispGroup table#main table#in tr#head th#border{text-align:center;border:1px solid #FFF;}
	div#manageHotLispGroup table#main table#in tr#head th#name{border:1px solid #FFF; text-align:left;}
	div#manageHotLispGroup table#main table#in tr#head th#name p#name{margin:0 0 0 10px; padding:0;}
	/*END Hotlist_manageGroups*/
	
	/*BEGIN HOTLIST_MoveToListGroup*/
	/*div#header div#navBar p{
		float:left;position:relative; left:420px; color:#36648B; font-weight:bold; margin:4px 0 0 0;
	}*/
	td#leftColumn div#payForFriend{height:90px;}
	td#leftColumn div#payForFriend h3{margin:10px 0 0 0;}
	td#leftColumn div#payForFriend p{margin: 5px 15px 0 0;  text-align:left;}
	td#leftColumn div#payForFriend img{float:left; margin:5px 10px;}
	td#leftColumn div#userNameSearch{height:117px; margin:5px 0 5px 0; overflow:hidden; width:179px}
	td#leftColumn div#userNameSearch table{margin:0 auto; padding:0; width:150px; height:100px;}
	td#leftColumn div#userNameSearch table td h3{margin:10px auto 0 auto; padding:0;}
	
	form#moveHotList div#move{position:relative; top:33px; left:40px; background:#FFF; z-index:1; height:36px; border-bottom:none; width:95px;}
	form#moveHotList div#move p#move{position:relative; left:20px; margin:10px 0 0 0; padding:0;}
	form#moveHotList div#manageGroups{position:relative; top:-4px; left:137px; z-index:1; border-bottom:none; height:35px; width:105px;}
	form#moveHotList div#manageGroups a#manage{position:relative; top:10px;}
	form#moveHotList div#view{position:relative; top:-40px; left:244px; z-index:1; border-bottom:none; height:35px; width:115px; float:none;} 
	form#moveHotList div#view a#view{position:relative; left:20px; top:10px;}

	form#moveHotList table#main{ margin:0 20px;width:93%; text-align:center;height:100%;position:relative;top:-50px;}
	form#moveHotList table#main td{background:#FFF;}
	form#moveHotList table#main div#blue{width:auto; margin:5px 0 0 0;}
	form#moveHotList table#main div#blue div#white{margin:5px; height:auto;}
	form#moveHotList table#main select#destinationGroupId{width:300px;}
	form#moveHotList table#main button#submit{margin:0 0 0 5px;}
	/*END HOTLIST_MoveToListGroup*/
	
	/*BEGIN HOTLIST_RenametGroup*/
	form#renameHotList div#rename{position:relative; top:33px; z-index:1; background:#FFF; left:40px; height:36px; border-bottom:none; width:95px;}
	form#renameHotList div#rename p#rename{position:relative; left:5px; margin:10px 0 0 0; padding:0; font-size:12px;}
	form#renameHotList div#manageGroups{position:relative; top:-4px; left:137px; z-index:1; border-bottom:none;height:35px; width:105px;}
	form#renameHotList div#manageGroups a#manage{position:relative;top:10px;}
	form#renameHotList div#view{position:relative; top:-40px; left:244px;  z-index:1; border-bottom:none; height:35px; width:115px; float:none;}
	form#renameHotList div#view a#view{position:relative; left:20px; top:10px;}
	form#renameHotList table#main{margin:0 20px;width:93%; text-align:center;height:150px;position:relative;top:-50px;}
	form#renameHotList table#main td{background:#FFF;}
	form#renameHotList table#main button#submit{height:21px;}
	/*END HOTLIST_RenametGroup*/
	
	/*BEGIN SelectMAtchCriteria*/
	fieldset#selectMatchCriteria table td#white{background:#FFF; height:20px; line-height:16px;}
	fieldset#selectMatchCriteria table td#white h3{font-size:16px; margin:0; padding:0;}
	fieldset#selectMatchCriteria table td#white p{margin-bottom:10px;}
	fieldset#selectMatchCriteria table#componentIn{background:#FFF;}
	fieldset#selectMatchCriteria table#componentIn td p{margin-bottom:15px;}
	/*END SelectMAtchCriteria*/
	
	/*BEGIN MyCrowd*/
	div#articleManAsAnimal{ margin:5px 0; width:764px; overflow:hidden}
	div#articleManAsAnimal a#img{ display:block; float:left; margin:5px 10px}
	div#articleManAsAnimal div#articleContent{ display:block; padding:10px; margin-left:80px; margin-right:20px}
	div#articleManAsAnimal p{ text-align:justify; margin:0; padding:0}
	div#articleManAsAnimal h3{ text-align:left; margin:0; padding:0}
	td#rightColumn div#underMenu ul{text-align:left; margin:5px 0 5px 15px; float:left; list-style:none;padding:0;}
	td#rightColumn  div#underMenu ul li{margin:0; padding:0; font-weight:bold;}
	td#rightColumn div#underMenu ul li a{margin:0; padding:0; font-weight:bold; font-size:12px; text-decoration:none;}
	td#rightColumn div#underMenu ul li a:hover{text-decoration:underline;}
	td#rightColumn div#underMenu{height:78px; margin-bottom:5px; text-align:left; margin-top:5px;}
	td#rightColumn div#notifier{height:95px; margin-bottom:5px;}
/*BEGIN TABS*/
	td#rightColumn div#menuSelectMatch table#s1 {background:url(/images/skin/MyCrowd/MENU/bg_selectMatch.gif) repeat-x;}
	td#rightColumn div#menuSelectMatch table#s2 {background:url(/images/skin/MyCrowd/MENU/bg_soulMatch.gif) repeat-x;}
	td#rightColumn div#menuSelectMatch table#s3 {background:url(/images/skin/MyCrowd/MENU/bg_sexMatch.gif) repeat-x;}
	td#rightColumn div#menuSelectMatch table#s4 {background:url(/images/skin/MyCrowd/MENU/bg_starMatch.gif) repeat-x;}
	td#rightColumn div#menuSelectMatch table#s5 {background:url(/images/skin/MyCrowd/MENU/bg_superMatch.gif) repeat-x;}
	td#rightColumn div#menuSelectMatch table td#color div{background:url(/images/skin/MyCrowd/MENU/tabs_bottom.gif) repeat-x;}
	td#rightColumn div#menuSelectMatch div.activeTab table{background:url(/images/skin/MyCrowd/MENU/bg_match_active.gif) repeat-x;}
			
	td#rightColumn div#menuSelectMatch table.selectMatchTable{height:32px; width:107px; overflow:hidden; display:block}
	td#rightColumn div#menuSelectMatch table#s3Wider{width:120px;}
	
	td#rightColumn div#menuSelectMatch table.selectMatchTable td.leftSelect,
	td#rightColumn div#menuSelectMatch table.selectMatchTable td.rightSelect{border-top:0;}	
	td#rightColumn div#menuSelectMatch{height:37px;  border:none; overflow:hidden}
	td#rightColumn div#menuSelectMatch table#s3, td#rightColumn div#menuSelectMatch table#s4{width:119px}
	td#rightColumn div#menuSelectMatch table td div{margin-right:2px; padding-right:2px}
	td#rightColumn div#menuSelectMatch table td div a{cursor:pointer; text-decoration:none; font-size:9pt;}
	td#rightColumn div#menuSelectMatch table td div a:hover{text-decoration:underline;}
	
	td#rightColumn div#menuSelectMatch table td#color div{height:5px; width:576px; padding:0; margin:0}
	td#rightColumn div#menuSelectMatch table td#free{width:3px; height:5px;}
	td#rightColumn table#parametersMatches{margin:8px auto; text-align:left;}
	td#rightColumn div#superMatchWizard{margin:0; height:240px;}
	td#rightColumn div#superMatchWizard h3{margin: 10px 0 0 20px; font-size:16px; text-align:left;}
	td#rightColumn div#superMatchWizard table#parametersMatches p#nameBold{margin:0; padding:0 0 0 3px; float:left; font-weight:bold; font-size:12px;}
	
	td#rightColumn div#superMatchWizard table#parametersMatches p#nameBold a{ text-decoration:none;}
	td#rightColumn div#superMatchWizard table#parametersMatches p#nameBold a:hover{ text-decoration:underline}
	
	td#rightColumn div#superMatchWizard table#parametersMatches p#nameNormal{margin:1px 0 0 0; padding:0; font-size:11px;}
	td#rightColumn div#chatted{ height:227px}
	td#rightColumn div#chatted img{float:left; margin:20px 10px 0 15px;}
	td#rightColumn div#chatted h3#chatOnline{font-size:18px; padding:0; margin:0px auto 0 auto}
	td#rightColumn div#chatted span#now{ font-size:20px; font-weight:bolder;margin:0 auto}
	td#rightColumn div#chatted span#chatMinded{font-size:14px; margin:15px 0 0 0; padding:0; text-align:left;  font-weight:bold}

	div#yourAdmires{height:115px; overflow:hidden}
	div#yourAdmires h3{font-size:16px; text-align:left; float:left; margin:10px 0 0 0; padding-left:20px;}
	div#yourAdmires h3 a#hotList{text-decoration:none}
	div#yourAdmires h3 a#hotList:hover{ text-decoration:underline}
	div#yourAdmires p#h3{margin:12px 0 0 0; padding:0; text-align:left; font-size:12px; clear:right}
	div#yourAdmires a#more{text-decoration:none; font-size:11px; margin:0 0 0 2px; padding:2px 10px;}
	
	div#yourAdmires img,td#rightColumn div#platinumMembers img{margin:0 15px 0 20px;}
	
	td#rightColumn div#platinumMembers{height:180px; margin:5px 0; text-align:left;}
	td#rightColumn div#platinumMembers h3{font-size:16px; text-align:left;margin:10px 0 0 0; padding-left:20px;}
	td#rightColumn div#platinumMembers p#how{margin:0 0 10px 20px; font-size:11px; text-align:left;}
	td#rightColumn div#platinumMembers  a{text-decoration:underline;}
	td#rightColumn div#platinumMembers  a#more{text-decoration:none; font-size:11px; margin:0 0 0 2px; padding:2px 5px;}
	td#rightColumn div#yourSettings{height:447px; margin:0 0 0 5px;}
	td#rightColumn div#yourSettings h3{margin:10px 0 0 15px; text-align:left; font-size:16px;}
	td#rightColumn div#yourSettings ul{list-style:none;list-style:none;text-align:left; margin:0;padding:5px 0 0 15px;}
	td#rightColumn div#yourSettings ul li a{text-decoration:none;}
	td#rightColumn div#yourSettings ul li a:hover{text-decoration:underline;}
	td#rightColumn div#goldMembers{margin-left:5px;height:192px;}
	td#rightColumn div#mediaCenter{height:155px; margin:0;}
	td#rightColumn div#mediaCenter h3{font-size:16px; text-align:left; float:left; margin:10px 0 0 0; padding-left:20px;}
	td#rightColumn div#mediaCenter p#h3{margin:12px 0 0 0; padding:0; font-weight:bold; text-align:left; font-size:12px;}
	td#rightColumn div#platinumMembers{height:200px;}
	td#rightColumn div#platinumMembers h3{font-size:16px; text-align:left;margin:10px 0 0 0; padding-left:20px;}
	td#rightColumn div#platinumMembers p#how{margin:0 0 10px 20px; font-size:11px; text-align:left;}
	td#leftColumn div#mycrowdSearchUpdate{height:310px;width:179px; margin-top:5px; overflow:hidden}
	/*END MyCrowd*/
	
	/*Begin CompleteProfile.jsp*/
	div.RegistrationStepOne table.registration td div#completeProfile{margin:0 20px 0 40px;}
	div.RegistrationStepOne table.registration td div#completeProfile h3#upload{text-align:left; padding:0 0 0 15px;}
	div.RegistrationStepOne table.registration td div#pict p#completeProfileText{margin: 30px 20px 0 10px;}
	/*End CompleteProfile.jsp*/
	
	/* Begin BlockList default.html*/
	form#blockList table#blockList{width:94%; margin:2% 4%;}
	form#blockList  table#blockList tr#head p#userName{padding:0;margin:0 0 0 10px;}
	/*End BlockList default.html*/
	
	/*Begin CompleteProfile/default.html*/
	form#completeProfile fieldset.horizontal{width:360px;}
	form#completeProfile fieldset.horizontal label{padding:0 0 0 25px; margin:0;}
	form#completeProfile fieldset.vertical{padding:0 0 0 25px; margin:0; width:350px;}
	form#completeProfile fieldset.vertical label#description{padding:10px 0 0 0;}
	form#completeProfile fieldset.vertical button{margin:0; padding:0; position:relative; left:25px}
	/*End CompleteProfile/default.html*/
	
	/*Begin Faq.jsp*/
	div#staticContent p#null{margin:0; padding:0;}
	div#staticContent  p#headBold{font-weight:bold; margin:10px 0; font-size:14px;}
	div#staticContent{margin: 0 40px;}
	div#staticContent a{ font-size:12px}
	/*End Faq.jsp*/
	
	/*Begin mediaLibrary/mediaType1.html*/
	table#mediaTypeOne div#nextPage{margin:0; padding:0; position:relative; top:-20px}
	table#mediaTypeOne div#nextPage p#id{margin:0 20px 0 0; padding:0; text-align:right;}
	table#mediaTypeOne td#amountOfMedia div p.signes{float:left; margin:0; margin-right:5px; padding:0;width:95px;text-align:right; font-size:11px;}
	table#mediaTypeOne td#amountOfMedia div.signes{width:100px; float:left;text-align:left;margin-top:2px;height:7px;margin-right:12px;}
	
	table#mediaTypeOne td#amountOfMedia p#contentUse{margin:0 0 0 55px; padding:0; padding-top:11px; text-align:left; font-size:11px;}
	table#mediaTypeOne td#amountOfMedia p#usagePercentage{margin:0 10px 0 0; padding:0; text-align:right; font-weight:bold;}
	table#mediaTypeOne td#amountOfMedia div#slider{	position:relative; right:-55px;}
	table#mediaTypeOne td#mainContent div#main{margin:10px 0 30px 70px;z-index:1; height:50px; position:relative; top:20px;}
	table#mediaTypeOne td#mainContent div#main div#selectedNow{padding:10px; background-color:#FFF; width:80px; float:left; height:16px;border-bottom:none;}
	table#mediaTypeOne td#mainContent div#main div#selectedNow p#hotList{margin:0;font-size:11px; padding:0;}
	table#mediaTypeOne td#mainContent div#main div#selectedNot{padding:10px; width:80px; height:15px; float:left;}
	table#mediaTypeOne td#mainContent div#main div#newItem{margin-right:10px; padding-top:0; text-align:right;}
	table#mediaTypeOne td#mainContent div#main div#newItem{font-weight:bolder; font-size:14px;}
	table#mediaTypeOne td#mainContent div#main div#newItem img{margin:0 0 0 45px; float:left;position:relative; top:-5px}
	table#mediaTypeOne td#mainContent div#main div#newItem p{padding-top:0; margin:0 1px 0 0;}
	table#mediaTypeOne td#mainContent div#main div#newItem button#but{width:135px; height:20px; font-size:11px; text-decoration:none}
	table#mediaTypeOne td#mainContent div#images{z-index:0; position:relative; top:-34px;}
	table#mediaTypeOne td#mainContent div#images table#scheise{margin:0 3%;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out{background:#FFF;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out button#butSubmitMedia{margin-left:0; padding-left:0; position:relative; left:-10px;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out div#butCancelMedia{text-align:left; width:100px;position:relative; top:-24px; left:75px}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out div#butCancelMedia p#par{margin:0; padding:0; width:65px; height:22px;text-align:center;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out div#butCancelMedia p#par a{font-weight:bold; text-decoration:none;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out div#formAdding{width:390px; margin:10px; float:left;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out div#formEditing{width:370px; margin:10px; float:left;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out div#formEditing fieldset.horizontal,
	table#mediaTypeOne td#mainContent div#images table#scheise td#out div#formAdding fieldset.horizontal{margin-bottom:0; padding-bottom:0;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out div#formAdding input#fileChooser{border:1px solid #999999;width:220px}
	
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items{float:left; margin:10px; width:150px;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td div#buttonPlay{margin:0 5px; padding:0; font-weight:bold; text-align:center; width:60px; height:20px}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td div#buttonPlay p#buttonP{margin:5px 0; padding:0; line-height:10px}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td div#buttonPlay p#buttonP a.play{text-decoration:none; margin:0; padding:0; font-size:11px; font-weight:bold;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#click p#edit{margin:2px 5px 0 25px; padding:0;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#click img.float{float:left;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#click img#delete{margin:0 3px 0 0}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#click span#delete{margin:2px 5px 0 0; padding:0; text-align:left;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#default p#setDefault{margin:0 5px; padding:0;  font-weight:bold; text-align:center}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#default p#getDefault{margin:0 5px; padding:0; font-weight:bold; font-size:11px; text-align:center}	
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#description p#description{margin: 0 0 0 5px;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#lastModified p#lastModified{margin:0 0 0 5px; padding:0; font-size:11px;}
	
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#fileSize{height:30px; vertical-align:top;}
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#fileSize p#fileSize{font-size:11px;margin: 0 0 0 5px}
	/*End mediaLibrary/mediaType1.html*/
	
	/***********Maskina*************************/
	/*Begin showRateOnDestination/default.html*/
	form#showRateOnDestination table#main div#head{width:225px; height:35px; text-align:center;}
	form#showRateOnDestination table#main div#head p{font-weight:bold; margin:10px 0 0 0; padding:0;}
	form#showRateOnDestination table#main div#content{ background:#FFF; width:225px; height:180px;}
	form#showRateOnDestination table#main div#content fieldset{ width:170px}
	form#showRateOnDestination table#main div#content fieldset label#orientation{margin:0; padding:0;}
	form#showRateOnDestination table#main div#content fieldset label#destination{position:relative; top:15px; left:0; margin:0; padding:0}
	form#showRateOnDestination table#main div#content fieldset p#button{position:relative; top:30px; left:0; margin:0; padding:0}
	/*End showRateOnDestination/default.html*/
	
	/*Begin callCenterAccount/default.html*/
	div#callCenterAccount{margin:0 0 0 150px; text-align:left;}
	/*End callCenterAccount/default.html*/
	
	/*Begin callCenter.jsp*/
	table#personalSetAndInfo td div#contentOfComponents{margin-left:150px; margin-top:10px;}
	table#personalSetAndInfo td div#contentOfComponents div#callCenterRight{margin:0; padding:0;}
	table#personalSetAndInfo td div#contentOfComponents div#callCenterRight a#link{position:relative; top:5px; margin:0; font-size:11px}
	h3#forNoUserText{margin:10px 30px; padding:0; text-align:center; font-size:18px;}
	/*End callCenter.jsp*/
	
	/*Begin CallHistory*/
	h3#callHistoryH3{font-size:16px; margin:10px auto;}
	table#callHistory{width:94%; margin:0 3%; background:#FFFFFF; font-size:12px}
	table#callHistory tr#head{font-size:11px; text-align:left; margin-left:10px; height:30px; line-height:11px}
	table#callHistory tr#head2{font-size:11px; text-align:left;}
	table#callHistory p#pad{padding:0;margin:0 0 0 10px;}
	table#callHistory td{text-align:left;}
	table#callHistory th#balance{border:none; text-align:center}
	table#callHistory th#before{text-align:left;}
	div#callHistoryPage{text-align:right;margin-right:3%;}
	/*End CallHistory*/
	
	/*Begin CallToMember*/	
	form#callToMember fieldset.horizontal label input{margin-left:30px; width:220px;}
	form#callToMember fieldset.horizontal p#but{margin:0; padding:0 160px 0 0;}
	/*End CallToMember*/
	
	/*Begin CallCenterRate/default.html*/
	table#callCenterRate td,table#callCenterRate th{height:15px;}
	/*End CallCenterRate/default.html*/
	
	/*MAILBOX*/
	a.underlineNot{font-size:11px; text-decoration:none;}
	table#jspMailBox{margin:0; padding:0;width:580px}
	table.forMailBoxHtml{margin:0 auto; padding:0;width:570px}
	/**/
	table#jspMailBox td h2#title, table.forAddMediaItemHtml td h2#title{font-size:140%; text-align:left; margin:10px 0 0 10px;}
	table#jspMailBox td p#personalAll, table.forAddMediaItemHtml td p#personalAll{margin:10px;padding:0; text-align:left;}
	table#jspMailBox td p#readMore, table.forAddMediaItemHtml td p#readMore{margin:7px 0 0 7px; font-size:11px; text-align:left;}
	table#jspMailBox td img#mainImg, table.forAddMediaItemHtml td img#mainImg{float:left;margin:0 0 0 5px;}
	table#jspMailBox td img#imgQuestion, table.forAddMediaItemHtml td img#imgQuestion{position:relative; left:10px; top:8px; float:left;}
	table#jspMailBox td div#textAfterQuestion,table.forAddMediaItemHtml td div#textAfterQuestion {margin:0 20px 0 50px; padding:0;}
	table#jspMailBox td div#blockQuestion,table.forAddMediaItemHtml td div#blockQuestion{margin:0; padding:5px 0 0 0;}
	/**/
	div.hightLightMailBox{height:10px; line-height:1px; width:540px; position:relative; top:-15px; margin:0 auto;}
	
	/*BEGIN Mailbox/default.html*/
	form#mailBox table#mediaTypeOne td#mainContent div#forLinks{text-align:left; /*width:325px;*/ margin-left:190px}
	html:root form#mailBox table#mediaTypeOne td#mainContent div#forLinks {}
	html:root div#forLinks table {}
	form#mailBox table#mediaTypeOne td#mainContent div#forLinks img#compose{position:relative; top:5px; margin:0 5px 0 5px}
	form#mailBox table#mediaTypeOne td#mainContent div#forLinks img#sendCard{position:relative; top:5px;text-decoration:none;}
	form#mailBox table#mediaTypeOne td#mainContent table#scheise tr#forHeader{font-size:11px;}
	form#mailBox td#mainContent div#main{top:40px;}
	form#mailBox div#forms{width:360px; float:left; margin:0; padding:0}
	form#mailBox div#forms fieldset{margin:15px 0 0 15px; padding:0;}
	form#mailBox  div#forms fieldset label#actions{position:relative; top:-20px;}
	form#mailBox div#pagePrevNext{margin:15px 15px 0 0 ; padding:0; text-align:right;}
	/*END Mailbox/default.html*/
	
	/*BEGIN ReadMessage/default.html*/
	form#readMessage td#mainContent div#main{top:40px;}
	form#readMessage td#mainContent div#main div#selectedNot a#redLink{font-size:11px; text-decoration:none}
	form#readMessage td#mainContent div#main img{border:none; text-decoration:none; position:relative; top:4px}
	form#readMessage td#mainContent table#tableOfContent{margin:0 auto;}
	form#readMessage td#mainContent table#tableOfContent td#from{text-align:right}
	form#readMessage td#mainContent table#tableOfContent td#from p{margin:0 15px 0 0; padding:0}
	form#readMessage td#mainContent table#tableOfContent td#nickName{text-align:left;}
	form#readMessage td#mainContent table#tableOfContent td#nickName a#redLink{margin:0 0 0 10px; padding:0;}
	form#readMessage td#mainContent table#tableOfContent td#date{text-align:left;}
	form#readMessage td#mainContent table#tableOfContent td#date p{margin:0; padding:0; font-size:11px;}
	form#readMessage td#mainContent table#tableOfContent td.media a#redLink{text-decoration:none; font-size:11px}
	form#readMessage td#mainContent table#tableOfContent td.media a#redLink img{border:none; float:left; margin:0 5px;}
	form#readMessage td#mainContent table#tableOfContent td.media a#redLink p{margin:0 10px 0 0; padding:0; text-align:left}
	form#readMessage td#mainContent table#tableOfContent td#subject{text-align:right}
	form#readMessage td#mainContent table#tableOfContent td#subject p{margin:0 15px 0 0; padding:0}
	form#readMessage td#mainContent table#tableOfContent td p#subjectText{font-weight:bold; margin:0 0 0 10px; padding:0}
	form#readMessage td#mainContent table#tableOfContent td p#messageBody{margin:10px 0 0 0; padding:0}
	/*END ReadMessage/default.html*/
	
	/*BEGIN ComposeMessage/default.html*/
	form#composeMessage table#forMessage p.text{margin:0 0 0 15px; padding:0;}
	form#composeMessage table#mediaTypeOne h2#title{margin-left:0; padding-left:0 ;}
	form#composeMessage table#mediaTypeOne p#beSure{margin:0; padding:0; text-align:left}
	form#composeMessage table#mediaTypeOne td p#personalAll p#important{margin:0; padding:0; text-align:left}
	form#composeMessage table#mediaTypeOne td#mainContent div#main{top:40px;}
	form#composeMessage table#mediaTypeOne td#mainContent div#main div#selectedNot a#redLink{font-size:11px; text-decoration:none}
	form#composeMessage table#mediaTypeOne td#mainContent div#main div#forLinks{text-align:left; /*width:325px;*/}
	html:root form#composeMessage table#mediaTypeOne td#mainContent div#main div#forLinks {width:325px;}
	form#composeMessage table#mediaTypeOne td#mainContent table#forMessage{text-align:left}
	form#composeMessage table#mediaTypeOne td#mainContent table#forMessage div#ima{text-align:left;float:left;}
	form#composeMessage table#mediaTypeOne td#mainContent table#forMessage img#to{position:relative; top:-5px; left:5px; cursor:pointer;}
	form#composeMessage table#mediaTypeOne td#mainContent table#forMessage div#selectCard{float:left; margin:5px 5px 5px 0;}
	form#composeMessage table#mediaTypeOne td#mainContent table#forMessage div#selectCard input{border:none; background:#FFF;}
	/*END ComposeMessage/default.html*/
	
	/*BEGIN ReadMessage/printableVersion.html*/
	form#printMessage p#text{margin:0 0 0 20px; padding:0}
	form#printMessage p#message{margin:0 0 0 20px; padding:5px 0;}
	/*END ReadMessage/printableVersion.html*/
	
	/*BEGIN SendProfileToFriend/default.html*/
	form#sendProfileToFriend table#personalSetAndInfo{width:570px; margin:0 auto; padding:0}
	form#sendProfileToFriend table#mediaTypeOne div#layerOne{text-align:center; width:110px; height:120px;margin:0 0 0 50px; padding:0}
	form#sendProfileToFriend table#mediaTypeOne div#layerOne p{margin:5px 0; padding:0; font-weight:bold}
	form#sendProfileToFriend table#mediaTypeOne div#layerOne div#layerTwo{width:92px; height:92px;background:#FFF; margin:5px auto; padding:0}
	form#sendProfileToFriend table#mediaTypeOne div#layerOne div#layerTwo div#layerThree{margin:6px; width:80px; height:80px; padding:0}
	form#sendProfileToFriend table#mediaTypeOne table#invite{margin-top:10px}
	form#sendProfileToFriend table#mediaTypeOne table#invite img#imgQuestion{margin-top:0; padding-top:0;position:relative;top:0}
	form#sendProfileToFriend table#mediaTypeOne table#invite div#textAfterQuestion{margin-top:0; padding-top:0; position:relative;top:-10px}
	form#sendProfileToFriend table#mediaTypeOne table#invite button{width:95px; margin:0; padding:0}
	form#sendProfileToFriend table#mediaTypeOne table#invite div#submit{float:left; margin:0; padding:0}
	form#sendProfileToFriend table#mediaTypeOne table#invite div#cancel{width:95px; height:22px; margin-left:107px; padding:0; text-align:center}
	/*END SendProfileToFriend/default.html*/
	/*END MAILBOX*/
	
	/*BEGIN HelpRequest/default.html*/
	div.message_ok{font-weight:bold; font-size:14px}
	form#helpRequest fieldset.vertical{margin:0; padding:0;}
	form#helpRequest fieldset.vertical label#problem{position:relative; top:10px;}
	form#helpRequest p#confirm{float:left; width:130px; position:relative; top:25px; margin:0; padding:0}
	form#helpRequest img#captcha{position:relative; top:15px;}
	form#helpRequest button#continue{margin:30px 0 40px 0;}
	/*END HelpRequest/default.html*/
	
	/*BEGIN UpdateProfile.jsp*/
	table#updateProfile a#updataProfile{font-weight:bold; font-size:12px;}
	table#updateProfile a.redLink {margin:0}
	/*END UpdateProfile.jsp*/
	
	/*BEGIN ViewSuccessMeter/default.html*/
	table#viewSuccessMeter  div.marg{margin:5px 20px 5px 0; padding:0}
	table#viewSuccessMeter  p.firstHeadTop{margin:0; padding:0; float:left; font-weight:bold}
	table#viewSuccessMeter  p.secondHead{text-align:right; font-weight:bold; margin:0 20px 0 0; padding:0}
	table#viewSuccessMeter  p.text{margin:0; padding:0; font-size:11px}
	table#viewSuccessMeter  a#redLink{font-size:11px;}
	table#viewSuccessMeter div.signesVer{width:10px; height:157px; float:left;}
	table#viewSuccessMeter div.signesVer table.compotiblePercent td#bg{background:url(/images/skin/SuccessMeter/successMeterBg.gif); background-repeat:repeat-y;width:8px;}
	table#viewSuccessMeter h3.percent{margin:0 0 5px 0; padding:0;font-size:15px}
	table#viewSuccessMeter div#percentage{width:50px; margin-top:10px}
	table#viewSuccessMeter div#percentage img#successText{float:left; margin: 35px 5px 0 0;}
	table#viewSuccessMeter div#percentage img#scale{float:right; text-align:right}
	/*END ViewSuccessMeter/default.html*/
	
	/* BEGIN MembersEventList/oppositeHotlist.html */
	table#oppositeHotListHtml{width:94%; margin:2% 3%;}
	table#oppositeHotListHtml tr#head p#userName{padding:0;margin:0 0 0 10px;}
	/* END MembersEventList/oppositeHotlist.html */
	
	/*BEGIN SearchResultPreview/yourAdmires.html,featuredMembers.html*/
	table#YourAdmiresHtml,table#featuredMembersHtml{margin:10px auto;}
	table#YourAdmiresHtml p#nameLink,table#featuredMembersHtml p#nameLink{margin:3px auto; padding:0}
	p#featuredMembersHow{margin:5px 0 5px 20px ; padding:0;}
	/*END SearchResultPreview/yourAdmires.html,featuredMembers.html*/
	
	/*BEGIN MembersTests/default.html*/
	table.membersTestsSteps{margin:0 auto;}
	table.membersTestsSteps div.radioGroup{margin:10px 0;}
	table.membersTestsSteps div.radioGroup label{margin:0 20px; padding:0}
	table.membersTestsSteps div.radioGroup label input{border:0; background:#FFF; width:20px}
	table.membersTestsSteps div.buttonsLayer{margin:5px 0;}
	table.membersTestsSteps div.buttonsLayer p#back{margin:0; padding: 0 15px; height:22px}
	table.membersTestsSteps div.buttonsLayer p#back a{text-decoration:none; font-weight:bold; font-size:12px}
	table.membersTestsSteps div.buttonsLayer p#next{margin:0; padding:0 10px}
	p.membersTestsSteps{text-align:center; font-weight:bold; margin:0 0 5px 0; padding:0;}
	/*END MembersTests/default.html*/
	
	/*BEGIN MembersTestsJsp*/
	table.membersTestJsp td h2#title{margin:20px 0 10px 0; text-align:center; font-size:135%}
	/*END MembersTestsJsp*/
	
	/*BEGIN MembersMatchTestStart*/
	table.testWelcomePage{margin:20px; border:0;}
	table.testWelcomePage h3.yourMatch{margin:0; padding:0;}
	table.testWelcomePage p.takeTestNow{ margin:10px 0 0 0; padding:0;}
	table.testWelcomePage p.textYourTemperament{margin:10px 0; padding:0;}
	table.testWelcomePage p.textTest{margin:10px 0 0 0; padding:0;}
	table.testWelcomePage a.testName{font-weight:bold;}
	/* END MembersMatchTestStart*/
	
	/*BEGIN Payment/upgradeMembership.jsp*/
	table.payment{margin:0 auto;}
	table.payment td#textInfo h2{font-size:20px; margin:0; padding:0}
	table.payment td#textInfo h3{font-size:18px; margin:20px 0 0 0; padding:0}
	table.payment td#textInfo h2#bottom{margin-bottom:20px}
	table.payment td#textInfo h2#top{margin-top:20px}
	table.payment td#textInfo p#continue{margin:0; padding:0; font-size:16px; font-weight:bold}
	table.payment td#textInfo{width:315px;text-align:center}
	table.payment div#selectPlan{float:none; clear:both; width:315px}
	table.payment td#textInfo div#selectPlan p{margin:0 10px; padding:0; float:left;font-size:14px; font-weight:bold}
	table.payment td#textInfo div#couple{text-align:center; width:315px; clear:both}
	table.payment td#textInfo div#complete{height:30px}
	/*END Payment/upgradeMembership.jsp*/
	
	/*BEGIN SavedSearch/default.html*/
	table#savedSearchTableHtml{ margin: 10px 0 0 15px; width:180px}
	table#savedSearchTableHtml td.borderRight{border-left:0}
	table#savedSearchTableHtml th{height:20px; text-align:center;}
	table#savedSearchTableHtml th#back{height:18px; line-height:5px}
	table#savedSearchTableHtml button#delete{font-size:11px; width:40px; height:18px; font-weight:normal}
	/*END SavedSearch/default.html*/
	
	/*BEGIN Search/advanced.html*/


	/*form#advancedSearchFormHtml label select#mySexId, form#advancedSearchFormHtml label select#seekingSexId{width:100px}
	form#advancedSearchFormHtml fieldset.vertical{ margin:5px 10px 0 10px; padding:0}
	form#advancedSearchFormHtml fieldset.vertical select{ width:160px}
	form#advancedSearchFormHtml fieldset.horizontal{padding-bottom:0; margin-bottom:0;}
	form#advancedSearchFormHtml div#ins{margin-left:10px}
	
	form#advancedSearchFormHtml div p.description{ font-size:12px; font-weight:bold; margin:0; padding:5px 0 0 0}
	form#advancedSearchFormHtml div p.description a{ text-decoration:none; font-weight:normal; font-size:11px}
	form#advancedSearchFormHtml div p.description a:hover{ text-decoration:underline}
*/


	form#advancedSearchFormHtml label select#mySexId, form#advancedSearchFormHtml label select#seekingSexId,
	form#advancedSearchFormHtml label select#memberSexTestResultId, form#advancedSearchFormHtml label select#memberPsychoTestResultId,
	form#advancedSearchFormHtml label select#starSignId {width:100px}
	form#advancedSearchFormHtml label select#memberSexTestResultId, form#advancedSearchFormHtml label select#memberPsychoTestResultId {}
	form#advancedSearchFormHtml fieldset.vertical{ margin:5px 10px 0 10px; padding:0}
	form#advancedSearchFormHtml fieldset.vertical select{ width:160px}
	form#advancedSearchFormHtml fieldset.horizontal{padding-bottom:0; margin-bottom:0;}
	
	form#advancedSearchFormHtml div#ins{margin-left:0px}
	/*
	form#advancedSearchFormHtml div.containers select { width:150px; margin-left:5px;}	
	form#advancedSearchFormHtml div.memberCriteriaName{ float:left; width:120px; padding-bottom:5px;} 
	form#advancedSearchFormHtml div.containers {width:100px; float:left; text-align:left; margin-right:30px; padding-right:5px; margin-left:20px;}
	form#advancedSearchFormHtml div.containers select { width:150px; margin-left:5px;}
	form#advancedSearchFormHtml	p#chooseExpandedCriteria{text-align:left; margin-top:30px; margin-left:10px;}
	form#advancedSearchFormHtml #chooseExpandedCriteria_td{ padding:10px; padding-left:25px;}
	form#advancedSearchFormHtml input.criteriaCheckBox{border:none;}
	form#advancedSearchFormHtml input#seekingAgeFrom {  width:25px; height:15px; left:67px; margin-left:3px; padding:0}
	form#advancedSearchFormHtml input#seekingAgeTo{width:25px; height:15px; padding:0 ; margin-left:13px;}
	form#advancedSearchFormHtml td#chooseExpandedCriteria_td {font-size:16px; padding-bottom:10px}
	form#advancedSearchFormHtml p#chooseExpandedCriteria {font-size:16px; padding-bottom:10px;}
	form#advancedSearchFormHtml div#lineDelimiter {border-bottom: 10px solid #fcebd6; margin-top:-20px;}
	form#advancedSearchFormHtml	label.criteriaLabel{display: block; margin:0px;}
	form#advancedSearchFormHtml div p.description{ font-size:12px; font-weight:bold; margin:0; padding:5px 0 0 0}
	form#advancedSearchFormHtml div p.description a{ text-decoration:none; font-weight:normal; font-size:11px}
	form#advancedSearchFormHtml div p.description a:hover{ text-decoration:underline}
	form#advancedSearchFormHtml p#submitButton {text-align:center; margin-bottom:30px; margin-top:20px;} 

*/


	/*END Search/advanced.html*/
	
	/*BEGIN common/JOINNOW.html*/	
	fieldset#joinNow{margin:0; padding:0 20px 5px 20px}
	fieldset#joinNow h3.header{ font-size:18px; padding:20px 0 0 20px; margin:0}
	fieldset#joinNow h3.header a{text-decoration:none;}
	p#butContinue{margin:0 80px 0 0; padding:0; text-align:right}
	fieldset#joinNow input.forInput{background:#FFF; border:none;width:13px; height:13px; margin:0; padding:0; position:relative; top:3px}
	fieldset#joinNow div.forInput{float:left; width:20px; height:20px;}
	fieldset#joinNow div.forInputText{margin-left:20px;padding:0; position:relative;}
	/*END*/	
	
	div#HIGHLIGHT_IN_SEARCH{height:40px;border-left:0}
	div#messenger{ z-index:1000000;}
	div#denkFlash{ z-index:0; margin:0 auto}
	a#searchResultMorePolish{margin-left:5px; position:relative;top:-2px}
	div.forTabbedPane{position:relative;top:-1px; width:580px; height:30px; z-index:2;}
	div.forTabbedPaneUnder{position:relative; width:580px; z-index:2; top:-6px} 
	div.forTabbedPane table td div.activeTab p.selectedActiveTab{margin:0; padding:0; font-weight:bold; font-size:11px}
	/*Complete Profile.jsp*/	
	ul#somePointers{margin:5px 20px 5px 30px; padding:0; text-align:left}
	ul#somePointers li{ margin:0; padding:0}
	/*Complete Profile*/
	
	table#addMediaItem { margin:0 auto 10px auto;}
	div#tabs {clear:both; float:none; height:35px;  position:relative; top:11px; left:40px; padding:0; margin:0; overflow:hidden; float:left}
	div#tabs div.active {float:left; border-bottom:0; background:#FFF; height:35px; width:100px;}
	div#tabs div.notActive {float:left; height:33px; width:100px}
	div#tabs div.active p{margin:0; padding:0; position:relative; top:7px; text-align:center; font-size:11px}
	div#label {border-style:none; background:none; font-size:100%; font-weight:bold; height:35px; overflow:hidden;}
	div#label img{ margin-right:17px; margin-left:5px}
	
	table#addMediaItem td#entry div {margin:10px 20px 10px 10px; background:#FFF;}
	table#addMediaItem td[id=entry] div {margin-right:10px !important;}	
	button#butSubmitMedia { margin:0; padding-left:5px; padding-right:5px; margin:0;}
	div#butCancelMedia{text-align:center; width:100px; border:none;}
	div p#par{margin:0; padding:0 15px; height:22px;text-align:center;}
	div p#par a{font-weight:bold; text-decoration:none;}
	div#contactImg{ padding-bottom:10px}
	
	div#dropdownAddressBook, div#dropdownAddressBook_document {text-align:left;}
	div#dropdownAddressBook p, div#dropdownAddressBook_document p {margin:0; padding:0; font-size:75%; font-weight:bold;}
	div#dropdownAddressBook ul {list-style:none; margin:0; padding:0 0 0 25px;}
	div#dropdownAddressBook ul li {margin:0; padding:0;}
	div#dropdownAddressBook ul li a {text-decoration:none;}
	.tabDisabled{ width:130px; height:29px; background:url(/images/skin/Search/pointer.gif) 58px 22px no-repeat}
	.tabEnabled{font-style:inherit; font-size:12px; text-align:center; cursor:pointer;  font-weight:bold; width:130px; height:29px;}
	.tabEnabled div.tabText, .tabDisabled div.tabText {font-size:12px; text-align:center;  font-weight:bold; height:20px; line-height:16px; border:solid 1px;}
	.tabEnabled div.tabText {text-decoration: underline;}

/* New Search component */
p#chooseExpandedCriteria {font-size:16px; padding-bottom:10px; text-align:left; margin-top:30px;margin-bottom:14px !important;  margin-left:10px; margin-left:25px !important;margin-bottom:0}
div#lineDelimiter {margin-top:-25px; margin-right:10px; margin-bottom: 0px; width:550px;}

div#byCity {float:right; border-right:none;font-size:11px;font-weight:bold;}
div#byPostCode { float:right;  padding-left:0; font-size:11px;font-weight:bold;} 
/* div#byCity {margin-left:26px  !important;width:72px !important; width:72px; float:left; border-right:none; margin-left:12px;height:20px;font-size:11px;font:bold;}
div#byPostCode { float:right !important;  margin-right:20px  !important; padding-left:0;   height:20px; width:84px; margin-right:11px;font-size:11px;font:bold;} */
fieldset#cityFieldset {margin-bottom:0; padding-bottom:0; width:190px}
div#headerBlock {width:350px; display:block; float:left; text-align:left;}
div#headerText {display:block; float:left; padding-top:25px; font-weight:bold; font-size:16px}
div#additionalCriteriaButtonOff,div#additionalCriteriaButtonOn {font-size:11px; cursor:pointer;}

a.paidOnly {text-decoration:none; font-weight:bold; font-size:18px; color:#CC0000;}

div#activation {margin:5px 0; padding:25px 0px 10px 0px;}
div#activation div#welcomeText {height:100px}
div#activation div#welcomeText p { font-size:14px; margin:5px 0px}
div#activation div#welcomeText span#mainHeader4 { font-size:20px; margin:0; padding:0}

div#activation div.contentBlock { float:left; display:block; width:298px; padding:0px 40px 20px 40px; text-align:center; margin-top:20px;}
div#activation div#dashed {background:url(/images/skin/SiteGuide/dashed_vertical.gif) top right repeat-y;}

div#activation div.contentBlock h2 {font-size:18px; font-weight:normal; margin:0px; text-align:left;}

div#activation div.contentBlock p { font-size:12px; margin-top:5px; text-align:left;}
div#activation div.contentBlock p a { font-weight:bold}
div#activation div.contentBlock p strong { white-space:nowrap}
div#activation div.contentBlock p.orangeHeader {font-size:22px; margin-bottom:17px}

div#activation div.contentBlock form {margin:0; padding:0}
div#activation div.contentBlock form input.textField { height:20px; width:280px; margin-top:5px;}
div#activation div.contentBlock button { margin:10px auto; text-align:center;}

div#activation div.contentBlock div#errorMessage {background-color:#FFF2F2; font-weight:bold; color:#DE0000; font-size:12px; padding:15px; text-align:left; margin:10px 5px}

div#activation div.contentBlock div#infoMessage h5 {background-color:#6AAD00; font-weight:bold; color:#fff; font-size:12px; text-align:left; height:20px; line-height:19px; width:280px; margin:10px auto 1px auto}
div#activation div.contentBlock div#infoMessage h5 img {border:none; padding:3px 5px;}

div#activation div.contentBlock div#infoMessage p {background-color:#F3FEDC; font-weight:bold; color:#578B02; font-size:12px; text-align:left; width:248px; margin:0px auto; border-color:#D0E49C; border-style:solid; border-width:1px; padding:15px}
@media screen{
/*SITE BACKGROUND*/
	body,.templateColorOne,div.forTabbedPaneUnder,div.forTabbedPane,.coloredBackgroundTemplate,div#LayerReg1{background:#EAF4FF;}
/*END SITE BACKGROUND*/
/*BORDER FOR BACKGROUND*/
	.bordered,table#templateColorTwo,table#crumbs td.colored3,div#LayerReg2{ border:1px solid #A6CBF3}
/*BORDER FOR BACKGROUND*/

/*BORDER FOR ALL PAGES*/
	table.media td,div.FullComponent table#around td#content,
	table#personalSetAndInfo tr#birthdayTR td#contentBorder,table#savedSearchTableHtml td.borderLeft,
	td.minus,form#showRateOnDestination table#main div#head,div.signesRed,div.groups,div#manageGroups,
	div#hotList,table#mainScheise,div#manageHotLispGroup div#manageGroups,form#moveHotList div#move,
	form#moveHotList div#manageGroups,form#moveHotList table#main td#border,form#renameHotList div#rename,
	form#renameHotList div#manageGroups,form#renameHotList div#view,form#renameHotList table#main td#border,
	fieldset#selectMatchCriteria table td#white,table#mediaTypeOne td#mainContent div#main div#selectedNow,
	table#mediaTypeOne td#mainContent div#main div#selectedNot,div#allMembers,form#moveHotList div#view,
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#default p#setDefault,
	div#manageHotLispGroup div#hotList,fieldset#selectMatchCriteria table#componentIn,
	table#mediaTypeOne td#mainContent div#images table#scheise td#out,
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td div#buttonPlay,
	table#personalSetAndInfo tr#birthdayTR td#contentBorderTwo,
	table#savedSearchTableHtml td.borderRight,form#showRateOnDestination table#main div#content,
	table#addMediaItem td#entry div,table#addMediaItem td#tabs div, table#callHistory th#before,
	div#tabs div.active,div#tabs div.notActive,/**/.templateColorOne,table#viewProfileTable .groundColor,
	table#viewProfileTable .groundColorBold,/**//**/
	form#readMessage td#mainContent table#tableOfContent td#from,
	form#readMessage td#mainContent table#tableOfContent td#subject,/**/
	div.hightLightMailBox,table#personalSetAndInfo td.borderedBottom,
	form#blockList  table#blockList td,table#callHistory td,
	table#oppositeHotListHtml td,table#callCenterRate td,table#callCenterRate th,
	div.popup,div.popup div.title,div.hint,table#savedSearchTableHtml th,table#savedSearchTableHtml td.bordered,table.fields td.bordered,table#main td.bordered {
		border:1px solid #FFDEBD;
	}
/* END BORDER FOR ALL PAGES*/
 
/*COLOR FOR ALL COMPONENTS*/
	table#viewProfileTable .groundColorBold,table#viewProfileTable .groundColor,form#moveHotList div#manageGroups,
	form#moveHotList div#view,form#renameHotList div#view,.stringColor,table#addMediaItem td#tabs div,
	table#mediaTypeOne td#mainContent div#images table#scheise,div.hightLightMailBox,table#addMediaItem td#entry,
	div#PersonalInformation table.fields,div#manageGroups,table#groupTable,div#manageHotLispGroup div#hotList,

	div#manageHotLispGroup table#main,form#moveHotList table#main,form#renameHotList table#main,
	table#mediaTypeOne td#mainContent div#main div#selectedNot,form#showRateOnDestination table#main,
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td div#buttonPlay,
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#default p#setDefault,
	form#readMessage td#mainContent table#tableOfContent td#from,table.media,
	form#readMessage td#mainContent table#tableOfContent td#subject,fieldset#selectMatchCriteria table td#out,
	form#sendProfileToFriend table#mediaTypeOne div#layerOne,td.minus,div.FullComponent table#around,
	table#mainViewProfile,form#renameHotList div#manageGroups,table#callHistory th#before,table.membersTestsSteps tr th,
	div#tabs div.notActive,div.popup div.title{
		background:#FFF7EC;
	}
/*END COLOR FOR ALL COMPONENTS*/
 
/*BUTTON COLORS*/
	button,.asButton{background:#61A3EB url(/images/skin/Home/bg_big_buttons.gif); border:1px solid #BEDCF1; font-weight:bold; color:#D60092;}
	.asButton a, .asButton a:hover, .asButton a#redLink, .asButton a#redLink:hover {color:#D60092}
/*BUTTON COLORS*/

/*TEXTAREA COLORS*/
	input, textarea,select {color:#465766; background:#FFF4FC;border-top:1px solid #748189; border-left:1px solid #748189; border-bottom:1px solid #D4D0C8; border-right:1px solid #D4D0C8;}	
/*END TEXTAREA COLORS*/

/*LINKS COLORS*/
	a#redLink,a.crumbs,table.media td a.redLink,div.signesMain a.redLink, div.photo a.redLink, div a.redLink,
	div.photo a.addToHotList,td#leftColumn  table.profileOption a.redLink,table#viewProfileTable a.redLinkProfile,
	div#staticContent a,div p.status,div.signesMain p#super,td#leftColumn  p.link,
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td div#buttonPlay,
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#default p#setDefault,
	div#dropdownAddressBook div.content ul li a,div#dropdownAddressBook div.content p/*,
	table#mediaTypeOne td#mainContent div#images table#scheise td#out div#butCancelMedia p#par a*/{
		color:#D60092;font-size:11px;
	}
	
	a#redLink:hover,a.crumbs:hover,table.media td a.redLink:hover,div a.redLink:hover,div.signesMain a.redLink:hover,
	div.photo a.addToHotList:hover,table#viewProfileTable a.redLinkProfile:hover,td#leftColumn  table.profileOption a.redLink:hover,
	div#staticContent a:hover,table.media td a.redLink:hover,div a.redLink:hover,div.signesMain a.redLink:hover{
		color:RED;/* color:cyan;*/
	}
/*END LINKS COLORS*/

/*TEXT COLOR*/
	body,div#myShortProfile button#trial,div#yourAdmires h3 a#hotList,div.groups p#groupName,
	td#rightColumn div#superMatchWizard table#parametersMatches p#nameBold a,p#forPersonalSettingsTest,
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#default p#getDefault,
	div#alterNavbar p a,div.forTabbedPane table td div.activeTab p.selectedActiveTab{
		color:#2572B3;
	}
/*END TEXT COLOR*/

/*TH*/
	div#manageHotLispGroup table#main table#in tr#head,form#blockList  table#blockList tr#head,
	table#callHistory tr#head,table#callHistory tr#head2,table#oppositeHotListHtml tr#head,
	form#showRateOnDestination table#main div#head,table#crumbs td.colored3,
	form#mailBox table#mediaTypeOne td#mainContent table#scheise tr#forHeader,table#savedSearchTableHtml th{ 
		background:#EAF4FF; color:#36648B
	}
/*END TH*/

/*MENU STATIC AND MYCROWD*/
	td#leftColumn  ul#staticMenu li a,td#leftColumn  ul#staticMenuTop li a,td#leftColumn   ul#staticMenuBottom li a,
	td#rightColumn div#yourSettings ul li a,
	td#leftColumn  ul#staticMenuTop,td#leftColumn   ul#staticMenuBottom,td#leftColumn   ul#staticMenu{
		color:#2572B3;
	}
	td#leftColumn  ul#staticMenu li a:hover, td#leftColumn  ul#staticMenuTop li a:hover,td#leftColumn   ul#staticMenuBottom li a:hover{
		background-color:#E9EFF2;
	}
/*END MENU STATIC AND MYCROWD*/

/*SEARCH*/
td.photo div { background-color:#DFF3FF !important}
td.photo div#photoIn { background-color:#FFF !important}

	td div.cells,td.photo div#photoOut,div#HIGHLIGHT_IN_SEARCH,td.photo div#photoIn{
		border:1px solid #84AFE0;
	}
	td.photo,div.PrevNext,div#HIGHLIGHT_IN_SEARCH, td.photo div#photoOut{
		background:#9DC5F2 !important;
	}
	/*HIGHLIGHT*/
	td.HIGHLIGHT_IN_SEARCH_RESULT_ENABLED div.cells,table.HIGHLIGHT_IN_SEARCH_RESULT_ENABLED div#photoOut,
	table.HIGHLIGHT_IN_SEARCH_RESULT_ENABLED td.photo div#photoIn,
	td.HIGHLIGHT_IN_SEARCH_RESULT_ENABLED div#HIGHLIGHT_IN_SEARCH {
		border:1px solid #FFABE6
	}
	table.HIGHLIGHT_IN_SEARCH_RESULT_ENABLED div#photoOut,td.HIGHLIGHT_IN_SEARCH_RESULT_ENABLED div#HIGHLIGHT_IN_SEARCH,
	table.HIGHLIGHT_IN_SEARCH_RESULT_ENABLED td.photo { 
		background:#FFABE6 !important;
	}
/*END SEARCH*/		

/*TABBED PANE*/	
	td#rightColumn div#menuSelectMatch table td div a{color:#FFF;}
/*END TABBED PANE*/

/*SLIDERS FOR SEARCH AND MEDIA */
	div.signes,table#mediaTypeOne td#amountOfMedia div.signes,
	
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#default p#getDefault{
		border:1px solid #47BBFF;background:#B3E3FF;
	}
	table#viewSuccessMeter div.signesVer, div#myShortProfile div.signesVer {border:1px solid #FF5689;background:#FFD7DC;}
/*END SLIDERS FOR SEARCH AND MEDIA*/

/*BEGIN BUTTON UPGRADE MEMBERSHIP*/
	td#leftColumn div#upgradeMembership button#up{background:url(/images/skin/bgButton.gif) repeat-x; background-position:bottom; border:1px solid #F399D6; color:#FFF;}
/*END BUTTON UPGRADE MEMBERSHIP*/	

/*MORE BUTTONS FOR MYCROWD*/
	td#rightColumn div#platinumMembers  a#more,div#yourAdmires a#more{background:#61A3EB; color:#FFFFFF;}
/*END MORE BUTTONS FOR MYCROWD*/

/*SKIP BUTTON FOR MYCROWD*/
	a#skipUpgrade{color:#FFF; background-color:#A3BCD1}
/*END SKIP BUTTON FOR MYCROWD*/

/*HEADERS FOR PAYMENT*/
	fieldset#joinNow h3.header,fieldset#joinNow h3.header a,fieldset#joinNow p strong{color:#2572B3;}
	.hightLightJoinNow{background-color:#FFFF00}
	table.payment td#textInfo div#selectPlan p,table.payment td#textInfo h2{color:#C239B0;}
/*END HEADERS FOR PAYMENT*/

/*IMAGE BORDER*/
	div#yourAdmires img,td#rightColumn div#platinumMembers img{border:1px solid #84AFE0;}
/*END IMAGE BORDER*/

/*COLOR IMAGES VIEW PROFILE*/
	table#viewProfileTable div#viewProfileMedialib img,div#myShortProfile a img,
	form#moveHotList table#main div#blue,form#sendProfileToFriend table#mediaTypeOne div#layerOne div#layerTwo,
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#links img{
		border:2px solid #C5D9DF;
	}
/*END COLOR IMAGES VIEW PROFILE*/

/*MYCROWD VIEW PROFILE*/
	td#leftColumn h3.hdrMarked{background:#61A3EB; color:#FFF;}
	td#leftColumn h3.hdrMarkedReverse{background:#FFF; color:#61A3EB;}
/*END MYCROWD VIEW PROFILE*/

/*REGISTRATION IMAGE TEXT*/
	div#imageRegistrationTable table.main table.tabl td table.imgbgLeft span.spanTextBold,
	div#imageRegistrationTable table.main table.tabl td table.imgbgLeft span.spanText{
		color:#79808A;
	}
/*END REGISTRATION IMAGE TEXT*/

/*LOGIN TEXT*/
	h3.didYou{color:#C239B0;}
	h3.didU{color:#C239B0;}
/*END LOGIN TEXT*/

/*MESSAGE_OK*/
	.warning,div.message_ok,p#warning{color:#006600;}
/*END MESSAGE_OK*/

/*USER NOT FOUND*/
	p.membersTestsSteps,h3#forNoUserText,table#personalSetAndInfo b#boldRed,strong.boldRed
	div.popup div.content p,form#advancedSearchFormHtml div p.description{color:#E40000;}
/*END USER NOT FOUND*/

/*MEDIA LIBRARY*/
	table#mediaTypeOne td#mainContent div#images table#scheise td#out table#items td#lastModified p#lastModified{
		color:#ADB3BC;
	}
/*END MEDIA LIBRARY*/

/*CHAT NOW MYCROWD*/
	td#rightColumn div#chatted h3#chatOnline,td#rightColumn div#chatted p#chatMinded,
	td#rightColumn div#chatted p#now{color:#CA0000;}
/*END CHAT NOW MYCROWD*/

/*LABELS AND TEXTAREA MISTAKES*/	
	label.wrong {color:#E40000; font-weight:bold;}
	label.wrong input, 
	label.wrong select,
	label.wrong textarea {background:#FFF2F2;}
	
	p.errorHeader{background:#E40000; color:#FFF;}
	ul#errorGlobalList{border:1px solid #FFCACA; background:#FFF2F2;color:#F00;}
/*END LABELS AND TEXTAREA MISTAKES*/

/* New Search component */
	.tabDisabled div.tabText { color:#666666; border-color: #61A3EB !important;}
	.tabEnabled div.tabText { background-color:#FFF0FB; color:#D72BA1; border-color: #61A3EB !important;}


div#lineDelimiter {border-bottom: 10px solid #61A3EB;}
div#coloredBorder {border-top: 10px solid #61A3EB;}
div#resetButtonDiv button {background:#FFF; color:#cb0000;}
div#additionalCriteriaButtonOff, div#additionalCriteriaButtonOn {color:#cb0000;}

div.signesRed {background:#DFF3FF none repeat scroll 0% !important; border:1px solid #ABDBF7}
table#viewProfileTable tr td table { background-color:#FFF7EC; border-color:#FFDEBD !important}

/*PAGING*/

.ten {padding:0 0.5em; font-weight:bold; background:#cee9fc;font-size:11px; color: #34629d;}
.prev {padding:0 0.5em; font-weight:bold; background:#cee9fc;font-size:11px; color: #545148;}
.page_number_current {padding:0 0.5em; background:#729ee7;font-size:11px; color: #FFF;}
.page_number {padding:0 0.5em; background:#a8e5f8;font-size:11px; color: #3382a0;}


@media screen {
/* Header */
	div#header { margin:0 auto;}
	
	div#headerBg {height:83px; text-align:left; width:764px; background:url(/images/bg_header.jpg) left top repeat-x ;}
	div#headerLogo {width:240px; display:block; float:left; height:83px; overflow:hidden}
	h1#headerSlogan {color:#D60092; text-align:center; font-size:14px; font-family:Arial, Helvetica, sans-serif; margin:0 10px}
	div#headerGlare {width:524px; margin:0; padding:0; padding-top:8px; display:block; float:right; height:47px; background:url(/images/bg_glare_in_header.gif) right top no-repeat ;}
	
div#siteIcons {padding:0 0 0 35px; float:right; height:46px; display:block; width:80px; /*background:url(/images/bg_for_icons.gif) 22px 6px no-repeat ;*/}
div#siteIcons img {padding-right:10px; border:0; padding-top:12px}
	
	div#header div#langs {height:25px; float:right; margin-top:7px; display:block;}
	
	div#langBar {float:left; text-align:left;}
	
	div#langBar p {float:left; height:25px; line-height:25px; margin:0; padding:0; color:#465977}
	
	div#langBar p, div#alterNavbar p, div#copyBar p {font-size:11px}
	
	div#langBar ul#switchlocale {list-style:none; float:left; margin:0; padding:0; height:25px;}
	div#langBar ul#switchlocale li {float:left; margin:0 0.5em; padding:0; line-height:25px;}
	div#langBar ul#switchlocale li span {display:block; border:1px solid #C3DCE2; padding:0 0.5em; font-weight:bold; background:#FFF;font-size:11px}
	div#langBar ul#switchlocale li a {color:#D60092; text-decoration:none;font-size:11px}
	div#langBar ul#switchlocale li a:hover {}

div#reserved {height:16px; width:524px; display:block; float:right}
	
	
	div#navBar {height:25px; background:url(/images/bg_menu_header.gif) repeat-x; text-align:left; clear:left}
	div#navBar div#nav {float:left; height:25px; line-height:25px; padding-left:5px;}
	div#navBar h2 {float:right; margin:0; padding:0 1em; height:25px; line-height:25px; color:#007DAF; font-size:130%; font-family:Arial,Verdana, Helvetica, sans-serif;}
	div#navBar div#nav ul {list-style:none; margin:0 0 0 5px; padding:0; font-size:12px}
	div#navBar div#nav ul li {margin:0; padding:0; float:left; background:url(/images/menu_spacer.gif) right center no-repeat;}
	div#navBar div#nav ul li.last {background-image:none;}
	div#navBar div#nav ul li a {display:block; float:left; height:25px; line-height:25px; padding:0 15px 0 15px; color:#007DAF; text-decoration:none; font-weight:bold;}



</style>
<script language="JavaScript" type="text/javascript" src="admin/wysiwyg.js">

</script>
<?Php 

include("dbconnect.php");

$matriid= $_SESSION['username'];

$configdata = mysql_query("SELECT * FROM register where MatriID ='$matriid'") ;

$email_res = mysql_fetch_array($configdata);

$email = $_REQUEST['email'];
if(isset($_POST['to'])) {

$to=$_POST['to'];	
//$to="satheeshforblog@gmail.com";	

$from=$email_res["ConfirmEmail"]; 

ini_set("SMTP",$smtphost);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.ucfirst($sitename).' <'.$siteadmin.'>'."\r\n";
	

$msg = "Dear User, <br><br>";
$msg .= $_REQUEST['message'];

$msg .= "<br><br> Regards, <br><br> $sitename Team";


$subject=$_POST['subjuct'];

//$headers .= "\r\nContent-Type: multipart/alternative;"; 

 $success = mail($to,$subject, $msg, $headers); 
$success_msg = "Your message has been send successfuly.";
}
include("include/innerheadersection.php"); 

?>

<link rel="stylesheet" href="css/ajax-tooltip.css" media="screen" type="text/css">

<link rel="stylesheet" href="css/ajax-tooltip-demo.css" media="screen" type="text/css">
</head>

<body>
<div id="wrapper"> 
  <?Php include("include/menu.php"); ?>
  <div id="breadcrumb">
    <ul class="breadcrumbs">
      <li class="left"></li>
      <li class="center">
        <div id="breadcrumb_text">You are Here: <span class="pathway">  <?Php echo $breadcrumbspage; ?> <img alt="" src="images/icons/arrow_breadcrumbs.png">Register Free</span> </div>
      </li>
      <li class="right"></li>
    </ul>

  </div>

  <div id="content_area">

    <?Php include("include/registersidebar.php"); ?>

    <div id="inner_right"> 
      <a name="top" id="top"></a>
      <div class="profile_block">

        <div class="header">
          <h2 class="float_left title"> <span class="black" style="color:#333;"><?php echo $sitename; ?>:</span>Your personal mailbox </h2>

        </div>

        <div class="body">
        Stay in control of your correspondence - monitor messages you send to your favourites! ? For more information about your mailbox <a href="faq.php"> click here </a>
<div align="left"><font color="#006600"><b><?=$success_msg?></b> </font></div>
<form id="composeMessage" name="ComposeMessageCommand" method="post" action="">
            <table id="jspMailBox">
			<tbody><tr>
				<td valign="top">

<table width="100%" cellspacing="0" cellpadding="0" border="0" id="mediaTypeOne">
      <tr>
          <td  align="left">
		  	<img style="width: 135px; height: 120px;" src="images/mailbox.jpg" id="mainImg">	
			
		

<p id="readMore"><b><font color="#9E0C4D" size="3">Compose an e-mail </font> </b> Be sure to fill all the necessary fields below. <br /></p>
<div id="blockQuestion">
						<img src="images/question.gif" id="imgQuestion">
						<div id="textAfterQuestion">
							<p id="readMore">&nbsp;&nbsp;&nbsp;&nbsp;Read more about sending messages <a href="how_it_works.php" id="redLink">here</a></p>
						</div>
				  </div>	
				  </td>
         
          <td  align="left" valign="top"><h2 id="title">&nbsp;</h2>
            </td>
          <td  align="left" valign="top">	</td>
      </tr>
        <tr>
		<td style="color:#006600;" align="center"><b> <?=$succ_msg?> </b> </td>
		</tr>
        <tr>
          <td colspan="2" id="mainContent"><div id="main">
			
			
			
			
			<div id="selectedNot" style="overflow:hidden;line-height:12px"><a href="sendmessagelist.php?matriid=<?=$_SESSION['matriid']?>" id="redLink">INBOX&nbsp;(<?=$inbox_count1?>)</a></div>
			
			
			
			
			<div id="selectedNot" style="overflow:hidden; line-height:12px"><a href="sentmessage.php?matriid=<?=$_SESSION['matriid']?>" id="redLink">SENT&nbsp;(<?=$sent_count1?>)</a></div>
			
				<div id="selectedNot" style="overflow:hidden; line-height:12px; width:100px;"><a href="sendmessage.php?matriid=<?=$_SESSION['matriid']?>" id="redLink">Compose message</a></div>
			
			

		</div>
		<!--<div class="hightLightMailBox">&nbsp;</div>-->

<table cellspacing="0" cellpadding="0" border="0" id="scheise">
					<tbody><tr style="height:25px;" id="forHeader" class="stringColor">
						<td height="25">&nbsp;</td>
						<td width="20" align="left"><?php /*?><img src="/images/icons/mailboxStatuses/mails.gif"><?php */?></td>
						<!-- <th width="50" align="left">Status</th> -->
						<td width="20" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<th width="120" align="left">
							
							From						</th>
						<th align="left" height="25"><span id="userName">Subject</span></th>
						<!-- <td height="35"><b>Age</b></td> -->
						<th width="60" align="left">Date</th>
						<td width="60" height="25">Delete</td>
					</tr>
  					
					
					<? while($result = mysql_fetch_array($res)) {
                     
					 $sender = $result["sender"];
					 $select = mysql_fetch_array(mysql_query("SELECT * from register where 	MatriID = '$sender'"));
					 $sender_name =  $select["Name"];
                    $subject  = $result["subject"]; 
					 $date  = $result["date_sent"]; 

 ?>
					
					<tr class="stringColor">
					  <td width="30">
					  	<label for="mailsIds_88876953">
							<input type="checkbox" value="88876953" id="mailsIds_88876953" style="border:0" name="mailsIds">
					  	</label>					  </td>
					  <td align="left"><img width="22" height="18" alt="new message" src="images/new.gif"></td>
					
					  <td align="left" style="font-weight:bold "> 
                      </td>
					  <td align="left" style="font-weight:bold "><img width="110" height="110" src="memphoto1/<?php echo $select['Photo1']?>" /><br>
                      <a style="text-decoration:none;" id="redLink" href="viewfullprofile.php?ID=<?=$sender?>"><?=$sender_name?></a></td>
					  <td align="left"><?=$subject?></td><td align="left"><?=$date ?></td>
					  <td width="60">
					  	<div align="center">
							<a onclick="return confirm('Are you sure?');" href="messsagedelete1.php?id=<?=$result["id"]?>"><img border="0" src="images/record_Delete.gif"></a>							</div>					  </td>
					</tr>
					
				<? 	//$memcontrol = mysql_query("SELECT * FROM register where ID='$strid'");

} 
					if($sent_count1 == 0)
					 { ?>
					    <tr><td colspan="6" style="text-align:center; color:red;">There is no Inbox messages.</td></tr><?php 					    
					 } 
					
			?>	</tbody></table>		  </td>
        </tr>		
	</table>
</td>
			</tr>
		</table>

     </form>


        </div>
        <div class="footer"> <a href="javascript:;" onclick="javascript: window.history.back();"><b><< Go Back</b></a>  </div>

      </div>


      <br />
    </div>

  </div>


  <?php include("include/footermenu.php") ?>


</body>
</html>


	<script language="javascript1.2">
	
	function do_submit(){
	document.ComposeMessageCommand.submit();
	}

  generate_wysiwyg('textarea1');

</script>




