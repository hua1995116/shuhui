<?php

/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-4-1
*/
require 'mysql.func.php';
require 'function.func.php';
error_reporting(0);
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', 'hyf');
define('DB_NAME', 'testguest');
//初始化数据库
_connect();//连接数据库
_select_db();//选择数据库
_set_names();//选择字符集
require 'commonlogin.inc.php';
require 'commonregister.inc.php';
?>