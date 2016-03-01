<?php

/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-5-28
*/
if(isset($_COOKIE['username'])){
	$_rows=_fetch_array("SELECT * FROM tg_user WHERE tg_username='{$_COOKIE['username']}'");
	$_memberhtml=array();
	$_memberhtml['user']=$_rows['tg_user'];
	$_memberhtml['email']=$_rows['tg_email'];
	$_memberhtml['sex']=$_rows['tg_sex'];
	$_memberhtml['face']=$_rows['tg_face'];
	$_memberhtml['qq']=$_rows['tg_qq'];
	$_memberhtml['tax']=$_rows['tg_autograph'];
	$_memberhtml['level']=$_rows['tg_level'];
	$_memberhtml['time']=$_rows['tg_reg_time'];
	$_memberhtml=_html($_memberhtml);
}
?>