<?php

/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-1-18
*/

//开始激活处理
//判断是否提交数据
if($_GET['action'] =='register'){
   //可以通过唯一标示符防止恶意注册和伪装表单攻击
   
	//引入验证文件
	include 'includes/register.func.php';
	//创建一个空数组用来存放合法的数据
	$_register=array();
	 //可以通过唯一标示符防止恶意注册和伪装表单攻击
	//active也是一个唯一标示符,用来刚注册的用户进行激活处理方可登陆
	$_register['username']=_check_username($_POST['username']); 
	$_register['password']=_check_password($_POST['password'], $_POST['notpassword']); 
	$_register['sex']=$_POST['sex'];
	$_register['face']='images/face/face1.jpg';
	$_register['email']=_check_email($_POST['email'],6,40);
	$_register['qq']=_check_qq($_POST['qq']);
	//在新增之前判断用户是否重复
/* 	_is_repeat(
				"SELECT tg_username FROM tg_user WHERE tg_username='{$_clean['username']}' LIMIT 1",
				'对不起，此用户已被注册'
	); */
	//新增用户//在双引号里直接放变量是可以的但如果是数组标量就必须加上{}
mysql_query(
			"INSERT INTO tg_user(
								tg_username,
								tg_password,
								tg_email,
								tg_qq,
								tg_sex,
								tg_face,
								tg_reg_time,
								tg_last_time,
								tg_last_ip
								)
						 VALUES(
						 		'{$_register['username']}',
						 		'{$_register['password']}',
						 		'{$_register['email']}',
						 		'{$_register['qq']}',
						 		'{$_register['sex']}',
						 		'{$_register['face']}',
						 		 NOW(),
						 		 NOW(),
						 		 '{$_SERVER["REMOTE_ADDR"]}'
						 		)"
);
if(_affect_row()==1){
		_close();
		_session_destroy();
	//跳转
	_location('注册成功', 'index.php');}
		else{
	_close();
	//跳转
	_location('注册失败', 'index.php');
}
}
else{
	$_SESSION['uniqid']=$_uniqid=_sha1_uniqid();
}
?>
