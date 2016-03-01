<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date: 2010-10-5
*/
//定义个常量，用来授权调用includes里面的文件
define('IN_TG',true);
//定义个常量，用来指定本页的内容
define('SCRIPT','thumb');
//引入公共文件
require dirname(__FILE__).'/includes/common.inc.php';
//缩略图
if (isset($_GET['filename']) && isset($_GET['percent'])) {
	_thumb($_GET['filename'],$_GET['percent']);
}
?>