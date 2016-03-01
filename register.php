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
session_start();
//设置字符集编码
header('Content-Type: text/html; charset=utf-8');
//定义一个常量用来制定本页的内容
define('SCRIPT', 'register');
//引用公共文件
require 'includes/common.inc.php';

//开始激活处理
//判断是否提交数据
if($_GET['action'] =='register'){
   echo "1";
	//引入验证文件
	include 'includes/register.func.php';
	//创建一个空数组用来存放合法的数据
	$_clean=array();
	 //可以通过唯一标示符防止恶意注册和伪装表单攻击

	$_clean['username']=_check_username($_POST['username']); 
	$_clean['password']=_check_password($_POST['password'], $_POST['notpassword']); 
	$_clean['sex']=$_POST['sex'];
	$_clean['face']='images/face/face01.png';
	$_clean['email']=_check_email($_POST['email'],6,40);
	$_clean['qq']=_check_qq($_POST['qq']);
	$_clean['question']=_check_question($_POST['question']);
	$_clean['answer']=_check_answer($_POST['question'],$_POST['answer']);
	//在新增之前判断用户是否重复
	_is_repeat(
				"SELECT tg_username FROM tg_user WHERE tg_username='{$_clean['username']}' LIMIT 1",
				'对不起，此用户已被注册'
	);
mysql_query(
			"INSERT INTO tg_user(
						
							
								tg_username,
								tg_password,
								tg_email,
								tg_qq,
								tg_sex,
								tg_face,
								tg_question,
								tg_answer,
								tg_reg_time,
								tg_last_time,
								tg_last_ip
								)
						 VALUES(
						 	
						 	
						 		'{$_clean['username']}',
						 		'{$_clean['password']}',
						 		'{$_clean['email']}',
						 		'{$_clean['qq']}',
						 		'{$_clean['sex']}',
						 		'{$_clean['face']}',
						 		'{$_clean['question']}',
						 		'{$_clean['answer']}',
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
?>
