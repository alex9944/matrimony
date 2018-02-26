<?php

include "../config/error.php";

define('DB_HOST', $db_host);
define('DB_USER', $db_username);
define('DB_PASS', $db_pwd);
define('DB_NAME', $db_name);
$table_name = "class_postclassified";
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);
$errmsg = "Please wait...";
$path = sys_get_temp_dir();
$file = '/data.csv';
if(!$link)
{
$errmsg = "Invalid Server Information";
 }
else
{
$db_select = mysql_select_db(DB_NAME, $link);
if (!$db_select)
{
$errmsg = "Invalid Database Information";
}
else
{
if($table_name == "")
{
$errmsg = "Invalid URL";
}
else
{
$sql = "SELECT * FROM
$table_name";
$res = mysql_query($sql);
if($res)
{
$cnt_fld = mysql_num_rows($res);
if
($cnt_fld > 0)
{
for($i=0;$i<mysql_num_fields($res);$i++)
{
$data .= ucfirst(mysql_field_name($res,$i)).',';
}
$data = substr($data,0,-1);
$data .= "\n";
while($row = mysql_fetch_assoc($res))
{
for($j=0;$j<mysql_num_fields($res);$j++)
{
$data .= '"'.html_entity_decode(strip_tags(str_replace (",","",$row[mysql_field_name($res,$j)]))).'"'.',';
}
$data = substr($data,0,-1);
$data .= "\n";
}
}
else
{ $errmsg = "Data not found";
}
// create csv file on server and write data in it
$hd = fopen($path.$file,"w+");
if
(!$hd)
{
echo "Error: Cannot open file ($file)"; exit;
}
if (fwrite($hd, $data) === FALSE)
{
echo "Error: Cannot write to file ($file)"; exit;
}
else
{
header("Content-type: octet/stream"); header("Content-disposition: attachment; filename=".basename($path.$file));
header("Content-Length: ".filesize($path.$file)); readfile($path.$file); exit;
}
}
else
{
$errmsg = "Data not found";
}
}
 }
}
echo "<br />".$errmsg."<br />";


?>