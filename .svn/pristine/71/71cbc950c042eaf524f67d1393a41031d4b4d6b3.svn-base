<?PHP

//Connection
function mysql_connection($db_hostx,$db_usernamex,$db_pwdx,$db_namex)
{
	$conn= @mysql_connect($db_hostx,$db_usernamex,$db_pwdx);
	$db = @mysql_select_db($db_namex,$conn);	
}
	
//Settings

function site_settings()
{
	$result=mysql_query("select * from generalsettings");
	$details=mysql_fetch_array($result);
	return $details;
	
}

//index.php

function select_query($qry)
{
	$exec=mysql_query($qry);
	
	return $exec;
	
}

function countt($qry)
{
	$login_count=mysql_num_rows($qry);
	
	return $login_count;
	
}

function fetch($login_selectx)
{
	$login_fetch=mysql_fetch_array($login_selectx);
	
	return $login_fetch;
	
}

//postclassified
function fetchpost($login_selectx)
{
	$class_fetch=mysql_fetch_array($login_selectx);
	
	return $class_fetch;
	
}

function select_queryx($qry)
{
	$s=mysql_query($qry);
	
	return $s;
	
}

function fetchfer($login_sel)
{
	$fer=mysql_fetch_array($login_sel);
	
	return $fer;
	
}
//
//home
function fetchHome($login_sel)
{
	$catsql=mysql_fetch_array($login_sel);
	
	return $catsql;
	
}
//Advance search
function fetchsearch($login_sel)
{
	$postfetch=mysql_fetch_array($login_sel);
	
	return $postfetch;
	
}

//My Ads
function fetchclass($login_sel)
{
	$seldata=mysql_fetch_array($login_sel);
	
	return $seldata;
	
}

//Registration

function counttt($qry)
{
	$regcnt=mysql_num_rows($qry);
	
	return $regcnt;
	
}

//mail
function ma($to,$subject,$message,$headers)
{
	$mil=mail($to,$subject,$message,$headers);
	
	return $mil;
	
}
?>