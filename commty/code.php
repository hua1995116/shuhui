<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date: 2010-8-13
*/
session_start();
//定义个常量，用来授权调用includes里面的文件
define('IN_TG',true);
//引入公共文件
require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径，速度更快
//运行验证码函数
//默认验证码大小为：75 * 25，默认位数是4位 如果要6位，长度推荐125，如果要8为，推荐175
//第四个参数是，是否要边框，要的话true,不要的话false,默认是false;
//可以通过数据库的方法，来设置验证码的各种属性 
_code();
?>