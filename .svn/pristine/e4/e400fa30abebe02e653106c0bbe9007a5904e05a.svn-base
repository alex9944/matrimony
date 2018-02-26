<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?Php include("include/innerheadersection.php"); ?>

<script language="javascript" src="js/search.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 5,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 160,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 5,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 5                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1000));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
</script>

</head>



<body>

<div id="wrapper" > 

  

  <!-- HEADER STARTS HERE ###################################################  -->

  <?Php include("include/menu.php"); ?>

  <!-- HEADER ENDS HERE ###################################################  --> 

  

  <!-- CONTENT AREA STARTS HERE ###################################################  -->

  <div id="content_area"> 

    <div class="container">

    <!-- SHOWCASE AND QUICK SEARCH SECTIONS STARTS HERE ######################################## -->

    <div id="showcase">
     <img src="images/slider_img.png" width="100%">

    </div>

    <!-- SHOWCASE AND QUICK SEARCH SECTIONS ENDS HERE ######################################## --> 

    

    <!--CONTENT AREA SECTION ONE STARTS HERE ############################################# -->
</div>
    <div id="Content_section1"  style="background-color:black; height:10px;margin-top: 0.5%;">
    <!-- <form id="searchform" name="searchform" method="post" action="searchresult.php">
		<div class="col-md-1">Search</div>
		<div class="col-md-1">
				<label><input name="lookingfor" type="radio" id="lookingfor" value="Female" checked="checked" />Bride</label><br>
				<label><input type="radio" name="lookingfor" id="lookingfor" value="Male" />Groom</label>
        </div> 		
		<div class="col-md-2">
			<label>Age</label><br>
			<label align="left">

                                  <select name="selectagefrom" id="selectagefrom">

                                    <option value="18">18</option>

                                    <option value="19">19</option>

                                    <option value="20">20</option>

                                    <option value="21">21</option>

                                    <option value="22">22</option>

                                    <option value="23">23</option>

                                    <option value="24">24</option>

                                    <option value="25">25</option>

                                    <option value="26">26</option>

                                    <option value="27">27</option>

                                    <option value="28">28</option>

                                    <option value="29">29</option>

                                    <option value="30">30</option>

                                    <option value="31">31</option>

                                    <option value="32">32</option>

                                    <option value="33">33</option>

                                    <option value="34">34</option>

                                    <option value="35">35</option>

                                    <option value="36">36</option>

                                    <option value="37">37</option>

                                    <option value="38">38</option>

                                    <option value="39">39</option>

                                    <option value="40">40</option>

                                    <option value="41">41</option>

                                    <option value="42">42</option>

                                    <option value="43">43</option>

                                    <option value="44">44</option>

                                    <option value="45">45</option>

                                    <option value="46">46</option>

                                    <option value="47">47</option>

                                    <option value="48">48</option>

                                    <option value="49">49</option>

                                    <option value="50">50</option>

                                    <option value="51">51</option>

                                    <option value="52">52</option>

                                    <option value="53">53</option>

                                    <option value="54">54</option>

                                    <option value="55">55</option>

                                    <option value="56">56</option>

                                    <option value="57">57</option>

                                    <option value="58">58</option>

                                    <option value="59">59</option>

                                    <option value="60">60</option>

                                  </select>

        	</label>
        	<label align="center">to</label>
        	<label align="right">
        		<select name="selectageto" id="selectageto">

                                  <option value="18">18</option>

                                  <option value="19">19</option>

                                  <option value="20">20</option>

                                  <option value="21">21</option>

                                  <option value="22">22</option>

                                  <option value="23">23</option>

                                  <option value="24">24</option>

                                  <option value="25">25</option>

                                  <option value="26">26</option>

                                  <option value="27">27</option>

                                  <option value="28">28</option>

                                  <option value="29">29</option>

                                  <option value="30">30</option>

                                  <option value="31">31</option>

                                  <option value="32">32</option>

                                  <option value="33">33</option>

                                  <option value="34">34</option>

                                  <option value="35">35</option>

                                  <option value="36">36</option>

                                  <option value="37">37</option>

                                  <option value="38" selected="selected">38</option>

                                    <option value="39">39</option>

                                    <option value="40">40</option>

                                    <option value="41">41</option>

                                    <option value="42">42</option>

                                    <option value="43">43</option>

                                    <option value="44">44</option>

                                    <option value="45">45</option>

                                    <option value="46">46</option>

                                    <option value="47">47</option>

                                    <option value="48">48</option>

                                    <option value="49">49</option>

                                    <option value="50">50</option>

                                    <option value="51">51</option>

                                    <option value="52">52</option>

                                    <option value="53">53</option>

                                    <option value="54">54</option>

                                    <option value="55">55</option>

                                    <option value="56">56</option>

                                    <option value="57">57</option>

                                    <option value="58">58</option>

                                    <option value="59">59</option>

                                    <option value="60">60</option>

                                </select>
        	</label>
		</div>
		<div class="col-md-2">
			<label>Religion</label><br>
			<label>
				<select onchange="caste_resetRF(this.value)" class="width_100" size="1" id="religion" name="religion">
						
                        <option selected="" value="0">-Select-</option>
                        <option value="1" <?php if($_SESSION['Religion'] == 1) { ?> selected="selected" <? } ?>>Hindu</option>
                        <option value="2" <?php if($_SESSION['Religion'] == 2) { ?> selected="selected" <? } ?>>Muslim - Shia</option>
                        <option value="3" <?php if($_SESSION['Religion'] == 3) { ?> selected="selected" <? } ?>>Muslim - Sunni</option>
                        <option value="4" <?php if($_SESSION['Religion'] == 4) { ?> selected="selected" <? } ?>>Muslim - Others</option>
                        <option value="5" <?php if($_SESSION['Religion'] == 5) { ?> selected="selected" <? } ?>>Christian - Catholic</option>
                        <option value="6" <?php if($_SESSION['Religion'] == 6) { ?> selected="selected" <? } ?>>Christian - Orthodox</option>
                        <option value="7" <?php if($_SESSION['Religion'] == 7) { ?> selected="selected" <? } ?>>Christian - Protestant</option>
                        <option value="8" <?php if($_SESSION['Religion'] == 8) { ?> selected="selected" <? } ?>>Christian - Others</option>
                        <option value="9" <?php if($_SESSION['Religion'] == 9) { ?> selected="selected" <? } ?>>Sikh</option>
                        <option value="10" <?php if($_SESSION['Religion'] == 10) { ?> selected="selected" <? } ?>>Jain - Digambar</option>
                        <option value="11" <?php if($_SESSION['Religion'] == 11) { ?> selected="selected" <? } ?>>Jain - Shwetambar</option>
                        <option value="12" <?php if($_SESSION['Religion'] == 12) { ?> selected="selected" <? } ?>>Jain - Others</option>
                        <option value="13" <?php if($_SESSION['Religion'] == 13) { ?> selected="selected" <? } ?>>Parsi</option>
                        <option value="14" <?php if($_SESSION['Religion'] == 14) { ?> selected="selected" <? } ?>>Buddhist</option>
                        <option value="15" <?php if($_SESSION['Religion'] == 15) { ?> selected="selected" <? } ?>>Inter-Religion</option>
                        <option value="16" <?php if($_SESSION['Religion'] == 16) { ?> selected="selected" <? } ?>>No Religious Belief</option>
                </select>
            </label>
		</div>
		<div class="col-md-2">
			<label>Mother Tongue</label><br>
			<label><select onchange="do_request(this.value);" class="width_100"  size="1" id="Language" name="Language"><option selected="" value="0">-Select-</option><option value="1">Arunachali</option><option value="2">Assamese</option><option value="3">Awadhi</option><option value="4">Bengali</option><option value="5">Bhojpuri</option><option value="6">Brij</option><option value="7">Bihari</option><option value="53">Badaga</option><option value="8">Chatisgarhi</option><option value="9">Dogri</option><option value="10">English</option><option value="11">French</option><option value="12">Garhwali</option><option value="13">Garo</option><option value="14">Gujarati</option><option value="15">Haryanvi</option><option value="16">Himachali/Pahari</option><option value="17">Hindi</option><option value="18">Kanauji</option><option value="19">Kannada</option><option value="20">Kashmiri</option><option value="21">Khandesi</option><option value="22">Khasi</option><option value="23">Konkani</option><option value="24">Koshali</option><option value="25">Kumoani</option><option value="26">Kutchi</option><option value="27">Lepcha</option><option value="28">Ladacki</option><option value="29">Magahi</option><option value="30">Maithili</option><option value="31">Malayalam</option><option value="32">Manipuri</option><option value="33">Marathi</option><option value="34">Marwari</option><option value="35">Miji</option><option value="36">Mizo</option><option value="37">Monpa</option><option value="38">Nicobarese</option><option value="39">Nepali</option><option value="40">Oriya</option><option value="41">Punjabi</option><option value="42">Rajasthani</option><option value="43">Sanskrit</option><option value="44">Santhali</option><option value="45">Sindhi</option><option value="46">Sourashtra</option><option value="47">Tamil</option><option value="48">Telugu</option><option value="49">Tripuri</option><option value="50">Tulu</option><option value="51">Urdu</option></select>
</label>
		</div>
		<div class="col-md-2">
			<label>Caste/Division</label><br>
			<label id="caste_rel"><select name="caste" class="width_100" id="caste"  disabled="true" >

                        <option>Others</option>
                      </select></label>
		</div>->
		<div class="col-md-2">
			<label>Country</label><br>
			<label><select name="country" class="width_100" id="country">

                            <option value="">Select</option>

                            <option value="albania">Albania</option>

                            <option value="algeria">Algeria</option>

                            <option value="american samoa">American samoa</option>

                            <option value="andoria">Andoria</option>

                            <option value="andorra">Andorra</option>

                            <option value="angola">Angola</option>

                            <option value="anguilla">Anguilla</option>

                            <option value="anitgua">Anitgua</option>

                            <option value="antigua">Antigua</option>

                            <option value="argentina">Argentina</option>

                            <option value="armenia">Armenia</option>

                            <option value="aruba">Aruba</option>

                            <option value="australia">Australia</option>

                            <option value="austria">Austria</option>

                            <option value="azerbaijan">Azerbaijan</option>

                            <option value="azerbiajan">Azerbiajan</option>

                            <option value="bahamas">Bahamas</option>

                            <option value="bahrain">Bahrain</option>

                            <option value="bangladesh">Bangladesh</option>

                            <option value="barbados">Barbados</option>

                            <option value="belarus">Belarus</option>

                            <option value="belgium">Belgium</option>

                            <option value="belize">Belize</option>

                            <option value="benin">Benin</option>

                            <option value="bermuda">Bermuda</option>

                            <option value="bhutan">Bhutan</option>

                            <option value="boliva">Boliva</option>

                            <option value="bolivia">Bolivia</option>

                            <option value="bonaire">Bonaire</option>

                            <option value="bosnia &amp; herzegovina">Bosnia &amp; herzegovina</option>

                            <option value="botswana">Botswana</option>

                            <option value="brazil">Brazil</option>

                            <option value="brunei">Brunei</option>

                            <option value="bulgaria">Bulgaria</option>

                            <option value="burkina faso">Burkina faso</option>

                            <option value="burundi">Burundi</option>

                            <option value="cambodia">Cambodia</option>

                            <option value="cameroon">Cameroon</option>

                            <option value="canada">Canada</option>

                            <option value="canary islands the">Canary islands the</option>

                            <option value="cape varde">Cape varde</option>

                            <option value="cape verde">Cape verde</option>

                            <option value="cayman islands">Cayman islands</option>

                            <option value="central african republic">Central african republic</option>

                            <option value="chad">Chad</option>

                            <option value="chile">Chile</option>

                            <option value="china">China</option>

                            <option value="china, peoples rep">China, peoples rep</option>

                            <option value="colombia">Colombia</option>

                            <option value="columbia">Columbia</option>

                            <option value="comoros">Comoros</option>

                            <option value="congo">Congo</option>

                            <option value="congo, the democratic rep of">Congo, the democratic rep of</option>

                            <option value="cook islands">Cook islands</option>

                            <option value="costa rica">Costa rica</option>

                            <option value="croatia">Croatia</option>

                            <option value="cuba">Cuba</option>

                            <option value="curacao">Curacao</option>

                            <option value="cyprus">Cyprus</option>

                            <option value="czech republic">Czech republic</option>

                            <option value="czech republic the">Czech republic the</option>

                            <option value="denmark">Denmark</option>

                            <option value="djibouti">Djibouti</option>

                            <option value="dominica">Dominica</option>

                            <option value="dominican republic">Dominican republic</option>

                            <option value="ecuador">Ecuador</option>

                            <option value="egypt">Egypt</option>

                            <option value="el salvador">El salvador</option>

                            <option value="equatorial guinea">Equatorial guinea</option>

                            <option value="eritrea">Eritrea</option>

                            <option value="estonia">Estonia</option>

                            <option value="ethiopia">Ethiopia</option>

                            <option value="falkland islands">Falkland islands</option>

                            <option value="faroe islands">Faroe islands</option>

                            <option value="faroer islands">Faroer islands</option>

                            <option value="fiji">Fiji</option>

                            <option value="finland">Finland</option>

                            <option value="france">France</option>

                            <option value="french guana">French guana</option>

                            <option value="french guyana">French guyana</option>

                            <option value="french polynesia">French polynesia</option>

                            <option value="gabon">Gabon</option>

                            <option value="gambia">Gambia</option>

                            <option value="georgia">Georgia</option>

                            <option value="germany">Germany</option>

                            <option value="ghana">Ghana</option>

                            <option value="gibraltar">Gibraltar</option>

                            <option value="greece">Greece</option>

                            <option value="greenland">Greenland</option>

                            <option value="grenada">Grenada</option>

                            <option value="guadeloupe">Guadeloupe</option>

                            <option value="guadeluoupe">Guadeluoupe</option>

                            <option value="guam">Guam</option>

                            <option value="guatemala">Guatemala</option>

                            <option value="guernsey">Guernsey</option>

                            <option value="guinea">Guinea</option>

                            <option value="guinea republic">Guinea republic</option>

                            <option value="guinea-bissau">Guinea-bissau</option>

                            <option value="guyana">Guyana</option>

                            <option value="guyana (british)">Guyana (british)</option>

                            <option value="haiti">Haiti</option>

                            <option value="honduras">Honduras</option>

                            <option value="hong kong">Hong kong</option>

                            <option value="hungary">Hungary</option>

                            <option value="iceland">Iceland</option>

                            <option value="india">India</option>

                            <option value="indonesia">Indonesia</option>

                            <option value="iran">Iran</option>

                            <option value="ireland">Ireland</option>

                            <option value="ireland republic of">Ireland republic of</option>

                            <option value="israel">Israel</option>

                            <option value="italy">Italy</option>

                            <option value="italy">Italy</option>

                            <option value="ivory coast">Ivory coast</option>

                            <option value="jamaica">Jamaica</option>

                            <option value="japan">Japan</option>

                            <option value="jersey">Jersey</option>

                            <option value="jordan">Jordan</option>

                            <option value="kazakhstan">Kazakhstan</option>

                            <option value="kenya">Kenya</option>

                            <option value="kiribati">Kiribati</option>

                            <option value="korea, republic of">Korea, republic of</option>

                            <option value="korea, south">Korea, south</option>

                            <option value="korea,d.pr of">Korea,d.pr of</option>

                            <option value="kuwait">Kuwait</option>

                            <option value="kyrgyzstan">Kyrgyzstan</option>

                            <option value="lao peoples democratic republic">Lao peoples democratic republic</option>

                            <option value="laos">Laos</option>

                            <option value="latvia">Latvia</option>

                            <option value="lebanon">Lebanon</option>

                            <option value="lesotho">Lesotho</option>

                            <option value="liberia">Liberia</option>

                            <option value="libya">Libya</option>

                            <option value="liechtenstein">Liechtenstein</option>

                            <option value="lithuania">Lithuania</option>

                            <option value="luxembourg">Luxembourg</option>

                            <option value="macao">Macao</option>

                            <option value="macau">Macau</option>

                            <option value="macedonia">Macedonia</option>

                            <option value="macedonia republic of (fyrom)">Macedonia republic of (fyrom)</option>

                            <option value="madagascar">Madagascar</option>

                            <option value="malawi">Malawi</option>

                            <option value="malaysia">Malaysia</option>

                            <option value="maldives">Maldives</option>

                            <option value="mali">Mali</option>

                            <option value="malta">Malta</option>

                            <option value="marinique">Marinique</option>

                            <option value="marshall islands">Marshall islands</option>

                            <option value="martinique">Martinique</option>

                            <option value="mauritania">Mauritania</option>

                            <option value="mauritiania">Mauritiania</option>

                            <option value="mauritius">Mauritius</option>

                            <option value="mexico">Mexico</option>

                            <option value="micronesia">Micronesia</option>

                            <option value="moldova">Moldova</option>

                            <option value="moldova republic of">Moldova republic of</option>

                            <option value="monaco">Monaco</option>

                            <option value="mongolia">Mongolia</option>

                            <option value="montserrat">Montserrat</option>

                            <option value="morocco">Morocco</option>

                            <option value="mozambique">Mozambique</option>

                            <option value="myanmar">Myanmar</option>

                            <option value="myanmar (burma)">Myanmar (burma)</option>

                            <option value="namibia">Namibia</option>

                            <option value="nauru republic of">Nauru republic of</option>

                            <option value="nepal">Nepal</option>

                            <option value="netherland antilles">Netherland antilles</option>

                            <option value="netherlands">Netherlands</option>

                            <option value="netherlands the">Netherlands the</option>

                            <option value="nevis">Nevis</option>

                            <option value="new caledonia">New caledonia</option>

                            <option value="new zealand">New zealand</option>

                            <option value="nicaragua">Nicaragua</option>

                            <option value="niger">Niger</option>

                            <option value="nigeria">Nigeria</option>

                            <option value="niue">Niue</option>

                            <option value="norway">Norway</option>

                            <option value="oman">Oman</option>

                            <option value="pakistan">Pakistan</option>

                            <option value="palau">Palau</option>

                            <option value="palestine authority">Palestine authority</option>

                            <option value="panama">Panama</option>

                            <option value="papua new guinea">Papua new guinea</option>

                            <option value="paraguay">Paraguay</option>

                            <option value="peru">Peru</option>

                            <option value="peru">Peru</option>

                            <option value="philippines">Philippines</option>

                            <option value="poland">Poland</option>

                            <option value="portugal">Portugal</option>

                            <option value="puerto rico">Puerto rico</option>

                            <option value="qatar">Qatar</option>

                            <option value="reunion">Reunion</option>

                            <option value="reunion island">Reunion island</option>

                            <option value="romania">Romania</option>

                            <option value="russia">Russia</option>

                            <option value="russian federation">Russian federation</option>

                            <option value="rwanda">Rwanda</option>

                            <option value="saint lucia">Saint lucia</option>

                            <option value="saint vincent">Saint vincent</option>

                            <option value="saipan">Saipan</option>

                            <option value="samoa">Samoa</option>

                            <option value="sao tome &amp; principe">Sao tome &amp; principe</option>

                            <option value="saudi arabia">Saudi arabia</option>

                            <option value="saudia arabia">Saudia arabia</option>

                            <option value="senegal">Senegal</option>

                            <option value="seychelles">Seychelles</option>

                            <option value="sierra leone">Sierra leone</option>

                            <option value="singapore">Singapore</option>

                            <option value="slovak republic">Slovak republic</option>

                            <option value="slovakia">Slovakia</option>

                            <option value="slovenia">Slovenia</option>

                            <option value="solomon islands">Solomon islands</option>

                            <option value="somalia">Somalia</option>

                            <option value="south africa">South africa</option>

                            <option value="spain">Spain</option>

                            <option value="sri lanka">Sri lanka</option>

                            <option value="st kitts and nevis">St kitts and nevis</option>

                            <option value="st lucia">St lucia</option>

                            <option value="st vincent">St vincent</option>

                            <option value="st. barthelemy">St. barthelemy</option>

                            <option value="st. eustatius">St. eustatius</option>

                            <option value="st. kitts">St. kitts</option>

                            <option value="st. maarten">St. maarten</option>

                            <option value="sudan">Sudan</option>

                            <option value="suriname">Suriname</option>

                            <option value="swaziland">Swaziland</option>

                            <option value="sweden">Sweden</option>

                            <option value="switzerland">Switzerland</option>

                            <option value="syria">Syria</option>

                            <option value="tahiti">Tahiti</option>

                            <option value="taiwan">Taiwan</option>

                            <option value="tajikistan">Tajikistan</option>

                            <option value="tanzania">Tanzania</option>

                            <option value="thailand">Thailand</option>

                            <option value="togo">Togo</option>

                            <option value="tonga">Tonga</option>

                            <option value="trinidad &amp; tobago">Trinidad &amp; tobago</option>

                            <option value="trinidad and tobago">Trinidad and tobago</option>

                            <option value="tunisia">Tunisia</option>

                            <option value="turkey">Turkey</option>

                            <option value="turkmenistan">Turkmenistan</option>

                            <option value="turks &amp; caicos islands">Turks &amp; caicos islands</option>

                            <option value="turks and caicos islands">Turks and caicos islands</option>

                            <option value="tuvalu">Tuvalu</option>

                            <option value="uganda">Uganda</option>

                            <option value="ukraine">Ukraine</option>

                            <option value="united arab emirates">United arab emirates</option>

                            <option value="united kingdom">United kingdom</option>

                            <option value="united states of america">United states of america</option>

                            <option value="uruguay">Uruguay</option>

                            <option value="uzbekistan">Uzbekistan</option>

                            <option value="vanuatu">Vanuatu</option>

                            <option value="vatican city">Vatican city</option>

                            <option value="venezuela">Venezuela</option>

                            <option value="vietnam">Vietnam</option>

                            <option value="virgin island (gb)">Virgin island (gb)</option>

                            <option value="virgin islands  british">Virgin islands british</option>

                            <option value="virgin islands  us">Virgin islands us</option>

                            <option value="virgin islands (usa)">Virgin islands (usa)</option>

                            <option value="wallis &amp; futuna">Wallis &amp; futuna</option>

                            <option value="yemen arab republic">Yemen arab republic</option>

                            <option value="yugloslavia">Yugloslavia</option>

                            <option value="zaire (dem rep of congo)">Zaire (dem rep of congo)</option>

                            <option value="zambia">Zambia</option>

                            <option value="zimbabwe">Zimbabwe</option>

                            <option value="Others">Other</option>

                          </select></label>
		</div>
		<div class="col-md-2">
			<label align="right">@more</label><br>
			<label><a href="javascript:document.searchform.submit();"><img src="images/icons/search_16.png" width="24" height="24" style="margin-right:5px;"></a></label>
		</div>
	</form> -->
    </div>

    <!--CONTENT AREA SECTION ONE ENDS HERE ############################################# --> 

    
<div class="container">

    <!--CONTENT AREA SECTION TWO STARTS HERE ############################################# -->

    <div class="col-md-12" id="Content_section2"  style="width:100%;  <!-- height:150px;  --> clear:both;">

    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 100%; height: 150px; overflow: hidden;">
            <div><img u="image" src="images/img1.png" /></div>
            <div><img u="image" src="images/img2.png" /></div>
            <div><img u="image" src="images/img3.png" /></div>
            <div><img u="image" src="images/img1.png" /></div>
            <div><img u="image" src="images/img4.png" /></div>
            <div><img u="image" src="images/img1.png" /></div>
            <div><img u="image" src="images/img2.png" /></div>
            <div><img u="image" src="images/img3.png" /></div>
            <div><img u="image" src="images/img1.png" /></div>
            <div><img u="image" src="images/img4.png" /></div>
            
        </div>
        
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
       
        <!-- bullet navigator container -->
        <!-- <div u="navigator" class="jssorb03" style="bottom: 4px; right: 6px;">
            bullet navigator item prototype
            <div u="prototype"><div u="numbertemplate"></div></div>
        </div> -->
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora03l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora03r" style="top: 123px; right: 8px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
    

     

    
</div>
  </div>

  <!-- CONTENT AREA ENDS HERE ###################################################  --> 
    <div class="col-md-12" style="margin-top: 3%; background-color: rgba(255, 255, 255, 0.47);">
    <div class="container">
    <div class="welcome-contents">
        <div class="content-head">
            <h2>Welcome to Vivahaexpert.com</h2>
        </div>
        <div class="contents">
            <p>Inspired by the vintage tastes of classic India, Nuts Spices was founded on the 16th of June 1999. With over three generations of experience in business, we strive to continuously raise our benchmark by providing products of the highest quality and taste. Since our inception, we have started 22 outlets across the city of Chennai and have established a wide reputation for our exceptional range of consumable products. In order to cater to our internet shoppers, we have started this e-commerce portal, through which customers can buy all their favourite Nuts Spices products and get it delivered to their home.An extensive collection of almonds, cashew nuts, pistachios, figs, dry and wet dates, walnuts and their combo adorn the colossal section of our world. Our in-house condiments consists of various spices, sambar powder, rasam powder, idli milagai, dhall powder [parupu podi] etc. With health food shops being the preferred destination to satisfy your unique gesture of gifting your family with good health, Nuts 'n' Spices has always been keen to provide its customers with an exceptional variety of its irresistible, nutritious and healthy choice of fresh health food gift products.</p>
        </div>
    </div>
  
          
            
        
     
    </div>
  </div>
  </div>
  </div>
  <?php include("include/footermenu.php") ?>

  <!-- FOOTER STARTS HERE ###################################################  -->

 

  <!-- FOOTER ENDS HERE ###################################################  --> 
<!-- <footer>
        <div class="container">
          <div class="footer-menu">
          <div class="social col-md-3">
            <div class="head">
              <h3>Follow us on</h3>
            </div>
            <div class=" nav nav-justified follow">
              <ul>
                <li class="fa"><a href="#"><img src="images/fb.png"></a></li>
                <li class="fa"><a href="#"><img src="images/Google.png"></a></li>
                <li class="fa"><a href="#"><img src="images/linked.png"></a></li>
              </ul>
              <ul>
                <li class="fa"><a href="#"><img src="images/rss.png"></a></li>
                <li class="fa"><a href="#"><img src="images/twitter.png"></a></li>
                <li class="fa"><a href="#"><img src="images/youtube.png"></a></li>
              </ul>
            </div>
          </div>
          <div class="contact col-md-3">
            <div class="head">
              <h3>Contact Us</h3>
            </div>
          </div>
          <div class="news col-md-3">
             <div class="head">
              <h3>News letter</h3>
            </div>
            <div class="logerror"></div>
            <form id="newsletter-form" method="post">
              <div class="form-group">
                <input type="text" name="new_email" placeholder="email" class="form-control" id="email">
              </div>
              <div class="form-group">        
                
                  <button type="submit" id="news-btn" class="btn btn-default">Submit</button>
                </div>
              
            </form>
          </div>
          <div class="enquiry col-md-3">
             <div class="head">
              <h3>Enquiry</h3>
            </div>
            <form id="enquiry-form" method="post">
              <div class="form-group">
                <input type="text" placeholder="name" class="form-control" id="enq_name" name="enq_name">
              </div>
              <div class="form-group">
                <input type="text" placeholder="email" class="form-control" id="enq_email" name="enq_email">
              </div>
              <div class="form-group">
                <input type="text" placeholder="message" class="form-control" id="enq_msg" name="enq_msg">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="vivaha">copyrights@vivahaexpert.com</div>
        <div class="wifin">powered by wifin technologies india pvt ltd</div>
      </div>
      </footer> -->
  
<script>
function do_request(val) {

document.getElementById('caste_rel').innerHTML = "<img src='loading.gif'>";
 $.post('generateCasteIndex.php?lang='+val+'&rel='+document.getElementById('religion').selectedIndex,'', function(data) {
	document.getElementById('caste_rel').innerHTML = "<img src='loading.gif'>";
	if(data!=''){
	
	document.getElementById('caste_rel').innerHTML = data;
	}});
	//return true;
	


}
</script>

<script>
function caste_resetRF(val){ 
alertdo(val);
document.getElementById('Language').selectedIndex = 0;
}

function alertdo(flag)  { 
if(flag == 1) {
document.getElementById("caste").innerHTML = 'Caste/Division ';
} else if(flag == 2  || flag == 10 || flag == 11) {
document.getElementById("caste").innerHTML = 'Sect/Division';
} else if(flag == 12 || flag == 13  || flag == 14 || flag == 3) {
document.getElementById("caste").innerHTML = 'Denomination/Division';
} else {
document.getElementById("caste").innerHTML = 'Caste/Division ';
}


}

</script>
 <style>
            /* jssor slider bullet navigator skin 03 css */
            /*
            .jssorb03 div           (normal)
            .jssorb03 div:hover     (normal mouseover)
            .jssorb03 .av           (active)
            .jssorb03 .av:hover     (active mouseover)
            .jssorb03 .dn           (mousedown)
            */
            .jssorb03 {
                position: absolute;
            }
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
                position: absolute;
                /* size of bullet elment */
                width: 21px;
                height: 21px;
                text-align: center;
                line-height: 21px;
                color: white;
                font-size: 12px;
                background: url(../img/b03.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        </style>
        <style>
            /* jssor slider arrow navigator skin 03 css */
            /*
            .jssora03l                  (normal)
            .jssora03r                  (normal)
            .jssora03l:hover            (normal mouseover)
            .jssora03r:hover            (normal mouseover)
            .jssora03l.jssora03ldn      (mousedown)
            .jssora03r.jssora03rdn      (mousedown)
            */
            .jssora03l, .jssora03r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(../images/a03.png) no-repeat;
                overflow: hidden;
            }
            .jssora03l { background-position: -3px -33px; }
            .jssora03r { background-position: -63px -33px; }
            .jssora03l:hover { background-position: -123px -33px; }
            .jssora03r:hover { background-position: -183px -33px; }
            .jssora03l.jssora03ldn { background-position: -243px -33px; }
            .jssora03r.jssora03rdn { background-position: -303px -33px; }
        </style>



 
</body>


</html>

