<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date: 2010-9-2
*/
//防止恶意调用
if (!defined('IN_TG')) {
	exit('Access Defined!');
}
?>
	<div id="member_sidebar">
		<h2>管理导航</h2>
		<dl>
			<dt>系统管理</dt>
			<dd><a href="manage.php">后台首页</a></dd>
			<dd><a href="manage_set.php">系统设置</a></dd>
		</dl>
		<dl>
			<dt>会员管理</dt>
			<dd><a href="manage_member.php">会员列表</a></dd>
			<dd><a href="manage_job.php">职务设置</a></dd>
		</dl>
	</div>