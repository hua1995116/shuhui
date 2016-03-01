<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date: 2010-9-8
*/
session_start();
//定义个常量，用来授权调用includes里面的文件
define('IN_TG',true);
//定义个常量，用来指定本页的内容
define('SCRIPT','message');
//引入公共文件
require dirname(__FILE__).'/includes/common.inc.php';
//判断是否登录了
if (!isset($_COOKIE['username'])) {
	_alert_close('请先登录！');
}
//写短信
if ($_GET['action'] == 'write') {
	_check_code($_POST['code'],$_SESSION['code']);
	if (!!$_rows = _fetch_array("SELECT 
																	tg_uniqid 
													 FROM 
																	tg_user 
												   WHERE 
																	tg_username='{$_COOKIE['username']}' 
													   LIMIT 
																	1
		")) {
		_uniqid($_rows['tg_uniqid'],$_COOKIE['uniqid']);
		include ROOT_PATH.'includes/check.func.php';
		$_clean = array();
		$_clean['touser'] = $_POST['touser'];
		$_clean['fromuser'] = $_COOKIE['username'];
		$_clean['content'] = _check_content($_POST['content']);
		$_clean = _mysql_string($_clean);
		//写入表
		_query("INSERT INTO tg_message (
																		tg_touser,
																		tg_fromuser,
																		tg_content,
																		tg_date
																	)
												    	VALUES (
													 					'{$_clean['touser']}',
													 					'{$_clean['fromuser']}',
													 					'{$_clean['content']}',
													 					NOW()
													 				)
		");
		//新增成功
		if (_affected_rows() == 1) {
			_close();
			//_session_destroy();
			_alert_close('短信发送成功');
		} else {
			_close();
			//_session_destroy();
			_alert_back('短信发送失败');
		}
	} else {
		_alert_close('非法登录！');
	}
}
//获取数据
if (isset($_GET['id'])) {
	if (!!$_rows = _fetch_array("SELECT tg_username FROM tg_user WHERE tg_id='{$_GET['id']}' LIMIT 1")) {
		$_html = array();
		$_html['touser'] = $_rows['tg_username'];
		$_html = _html($_html);
	} else {
		_alert_close('不存在此用户！');
	}
} else {
	_alert_close('非法操作！');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	require ROOT_PATH.'includes/title.inc.php';
?>
<script type="text/javascript" src="js/code.js"></script>
<script type="text/javascript" src="js/message.js"></script>
</head>
<body>


<div id="message">
	<h3>写短信</h3>
	<form method="post" action="?action=write">
	<input type="hidden" name="touser" value="<?php echo $_html['touser']?>" />
	<dl>
		<dd><input type="text" readonly="readonly" value="TO:<?php echo $_html['touser']?>" class="text" /></dd>
		<dd><textarea name="content"></textarea></dd>
		<dd>验 证 码：<input type="text" name="code" class="text yzm"  /> <img src="code.php" id="code" onclick="javascript:this.src='code.php?tm='+Math.random();" /> <input type="submit" class="submit" value="发送短信" /></dd>
	</dl>
	</form>
</div>



</body>
</html>