<?php
$Setup_Server = 'localhost';
$Setup_User = 'xxxxx';
$Setup_Pwd = 'xxxxxxx';

$Setup_Database = 'ชื่อ database';

mysql_connect($Setup_Server,$Setup_User,$Setup_Pwd);

mysql_query("use $Setup_Database");
mysql_query("SET NAMES UTF8");

?>
