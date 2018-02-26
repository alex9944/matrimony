<?php
$v = md5("123456");
mysql_connect("localhost","root","");
mysql_select_db("test");
mysql_query("insert into test(pass) values('".$v."')");
?>