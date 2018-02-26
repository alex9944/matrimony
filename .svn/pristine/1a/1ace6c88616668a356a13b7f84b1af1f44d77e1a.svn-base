<?php
 
function checkdomainname($Domainname)
{
if(getmxrr($Domainname, $MXHost))
{
   return TRUE;
}
return FALSE;
}


function get_state($str)
{
$sel_state=mysql_fetch_array(mysql_query("select * from class_state where stateid=$str"));
return $sel_state['state_name'];
}


function get_country($str)
{
$sel_country=mysql_fetch_array(mysql_query("select * from class_country where countryid=$str"));
return $sel_country['country'];
}


?>