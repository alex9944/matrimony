<?Php
session_start();
?>
        <?php if($_SESSION['username'] != "") { 
		if(!isset($_SESSION["logintimedate"]))
{
$_SESSION["logintimedate"] = date("g:i A");
}
?>
<p style="text-align:center;margin-top:20px; font-size:12px"><strong><?php echo $_SESSION['name'];?></strong>, You are Logged in at <?php echo $_SESSION["logintimedate"];?><br/><br/>
        <a href="logout.php" class="button-small square-orange uppercase" style="width:60px; text-align:center;">Logout </a>
        <?php } else { ?>
        <a href="registration1.php" class="btn_registerfree"><img src="images/btn_registerfree.gif" width="136" height="46" alt="register free" /></a>   
        <?php } ?>
</p>