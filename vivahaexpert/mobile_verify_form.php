<?php session_start();
include("dbconnect.php");
 ?>
<style type="text/css">
form
{
 float:left;
}
.save
{
 float:left;
 margin-top:3px !important;
}
#response
{
 color:green;
 float:left;
}
#response1
{
 float:left;
 padding-left:273px;
 clear:both;
 line-height:10px;
}
</style>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<div style=" background:#FCECD6; padding:10px; line-height:20px; width:auto; height:auto;">
  <div><img width="309" height="64" alt="Matrimonial " src="<?=$sitelogo; ?>"></div>
  
  <?php // echo '<pre>'; print_r($_SESSION); ?>
  
  <div style="background:#A50050; margin:0 225px; color:#fff; width:300px; font-size:24px; padding:5px; text-align:center;">Registration Complete!</div>
  
  <p style="text-align:center;">You have one more page to complete. You may continue do this straight away or later.</p>
  <p style="text-align:center;">Verify your mobile number now to activate your profile.</p>
  <p style="text-align:center; color:#A50050;">It is mandatory that you verify your mobile number else your profile will not be displayed to other members.</p>

  <p style="text-align:center;">An SMS with verification PIN has been sent to </p>
  <div class="inlineEdit" style="text-align:center; text-align:left; float:left; padding-left:273px;  padding-bottom:10px;"><span class="clsValue" ><?php echo $_SESSION['mobile']; ?> </span>- <a href="javascript:;" class="clsEdit" id="clsEdit">Edit Number</a></div>
  <div id="response" style="text-align:center;"></div>
  
  <p style="text-align:center; clear:both;"><input type="hidden" name="lastid" id="lastid" value="<?php echo $_SESSION['lastid']; ?>" /></p>
  <p style="text-align:center; padding-bottom:5px; margin:0;"><input type="text" name="mobile_pin" value="" id="mobile_pin" placeholder="Enter PIN here" />
  <a href="javascript:;" class="clsCheckPin" >[SUBMIT]</a></p>
  <div id="response1" style="text-align:center;"></div>
  <p style="text-align:center; clear:both;">You will receive the SMS within a few seconds.</p>
  <p style="text-align:center;">If not, <a href="javascript:;" class="clsResend" >Click here to resend PIN</a></p>
  <p style="text-align:center;">Once your Mobile number is verified, <a href="search_page.php">Click here</a> to start your partner search.</p>
</div>
<script type="text/javascript">

$(document).ready(function () {

$(".clsResend").live("click", function () {
var id   = "<?php echo $_SESSION['lastid']; ?>";
var data = '?id=' + id + '&user_id=' + id ;
//alert(data);
$.post("resend.php", data, function (response) {
//alert(response);
$("#response1").html("<p style='color:green'>Verification Code Sent.</p>");
 $("#response1").slideDown('slow');
 slideout();
 $("#loading").fadeOut('slow'); 
});

$(this).parent().html(NewText).removeClass("selected").bind("click", updateText);

});


$(".clsCheckPin").live("click", function () {
var id   = "<?php echo $_SESSION['lastid']; ?>";
var mobile_pin  = $('#mobile_pin').val();
var data = '?id=' + id + '&user_id=' + id + '&mobile_pin=' + mobile_pin;
//alert(data);
$.post("checkpin.php", data, function (response) {
	//alert(response);
	$("#response1").html(response);
	$("#response1").slideDown('slow');
	slideout();
	$("#loading").fadeOut('slow'); 
	//$.fancybox.close();
	setTimeout('parent.$.fancybox.close();', '1000');
});

$(this).parent().html(NewText).removeClass("selected").bind("click", updateText);

});


function slideout() {
setTimeout(function () {
  $("#response").slideUp("slow", function () {});
},
2000);
}

$(".clsEdit").bind("click", updateText);

var OrigText, NewText;

$(".save").live("click", function () {

$("#loading").fadeIn('slow');

NewText  = $(this).siblings("form").children(".edit").val();
var id   = "<?php echo $_SESSION['lastid']; ?>";
var data = '?id=' + id + '&user_id=' + id + '&text=' + NewText;
//alert(data);
$.post("update.php", data, function (response) {

//alert(response);

$("#response").css('display','block');
$("#response").html("<p style='margin: 0px; color: green; font-weight: bold; padding: 10px;'>Mobile Updated Successfully.</p>");


 $("#response").slideDown('slow');
slideout();
$("#loading").fadeOut('slow'); 

 //$("#response").html(response);

});

$(this).parent().html(NewText).removeClass("selected").bind("click", updateText);

});

$(".revert").live("click", function () {
$('.inlineEdit').parent().html(OrigText).removeClass("selected").bind("click", updateText);
});



function updateText() {

$('li').removeClass("inlineEdit");
OrigText = '<?php echo $_SESSION['mobile']; ?>';
$('.inlineEdit').addClass("selected").html('<form ><input type="text" class="edit" value="' + OrigText + '" ></form><a href="#" class="save"><img src="images/save.png" border="0" width="48" height="15"/></a> <a href="#" class="revert"></a>').unbind('click', updateText);

}
});
</script>
<style>

.inlineEdit:hover {
/*background-image:url(images/edit.png);*/
background-repeat:no-repeat;
background-position:right;
cursor:pointer;
}

.save, .btnCancel {
margin:0px 0px 0 5px;
}
#response {
display:none;
padding:0 10px;
margin-bottom:20px;
}
#loading {
display:none;
}
</style>
<script type="text/javascript">
 function changeMobile()
  {
  }
 function validatePin()
  {
	mobile_pin  = $('#mobile_pin').val();
	if(mobile_pin == '')
	 {
	  alert('Enter Pin to validate to your mobile.');
	 }  
  }
 function resendPin()
  {
  }  
</script>
