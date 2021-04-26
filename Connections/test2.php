<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_test2 = "localhost";
$database_test2 = "boke";
$username_test2 = "root";
$password_test2 = "";
$test2 = mysql_pconnect($hostname_test2, $username_test2, $password_test2) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("set names utf8");
?>