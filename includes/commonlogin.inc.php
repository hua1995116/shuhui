<?php

/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-4-7
*/
//开始处理登录状态
if($_GET['action']=='login'){
	//引入验证文件
	$_login=array();
	include 'includes/login.func.php';
	$_login['username']=_check_username($_POST['username'],2,20);
	$_login['password']=_check_password($_POST['password'], $_POST['notpassword'],6);
	//到数据库验证
	if(!!$_rows=_fetch_array("SELECT tg_username FROM tg_user WHERE tg_username='{$_login['username']}' and tg_password= '{$_login['password']}' LIMIT 1")){
		//登陆成功后记录登陆信息
		_query("UPDATE tg_user SET
		tg_last_time=NOW(),
		tg_last_ip='{$_SERVER["REMOTE_ADDR"]}',
		tg_login_count=tg_login_count+1
		WHERE
		tg_username='{$_rows['tg_username']}'
		");
		_close();
		_session_destroy();
		//生成cookie
		_setcookies($_rows['tg_username'],$_clean['time']);
		_location('','member.php');

	}else{
		_close();
		_session_destroy();
		_location('用户名密码不正确或未激活!','index.php');

	}
}
?>