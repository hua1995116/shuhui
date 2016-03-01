<?php

/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-2-2
*/

/**
 * 
 */
if(!function_exists('_alert_back')){
	exit('_alert_back()函数不存在。请检查');
	}
	//判断函数是否存在
if(!function_exists('_mysql_string')){
		exit('mysql_string()函数不存在。请检查');
	}
	/**
	 * 确认唯一标示符是否一样。避免跨站攻击
	 * @param unknown_type $_first_uniqid
	 * @param unknown_type $_end_uniqid
	 * @return Ambigous <string, unknown, unknown_type>
	 */
function _check_uniqid($_first_uniqid,$_end_uniqid){
		if((strlen($_first_uniqid)!=40)||($_first_uniqid!=$_end_uniqid))
		{
		_alert_back(唯一标示符异常);
		}
		return _mysql_string($_first_uniqid);
	}
/** 
 * chechk_username表示检测用户名和过滤
 * @param param string $_string	受污染的用户名
 * @param param int $_min_num   最小位数
 * @param  param int  $_max_num 	最大位数
 * @return string
 */
function _check_username($_string,$_min_num=2,$_max_num=20){
	//去掉两边空格
	$_string=trim($_string);
	//长度小于两位或大于20位都不行
	if(mb_strlen($_string,'utf-8')<$_min_num||mb_strlen($_string,'utf-8')>$_max_num){
		_alert_back('用户名格式错误');
	}	
	//限制特殊字符
	$_char_pattern='/[<>\'\"]/';
	if(preg_match($_char_pattern, $_string))
	{
		_alert_back('用户名不得包含敏感字符');
	}
	//限制敏感用户名
	$_mg[0]='牟正洋';
	$_mg[1]='陈鹏翼';
	$_mg[2]='陈达';
	$_mg[3]='李颖';
	//告诉用户有哪些不能注册
	foreach($_mg as $value){
        $_mg_string.='['.$value.']'. '\n';
		}
	//这里采用绝对匹配
	if(in_array($_string, $_mg)){
		_alert_back($_mg_string."以上敏感用户名不得注册");
	}
	
	//将用户名转意输入
	return _mysql_string($_string);
}


/**
 * _check_password验证密码
 * @param string $_first_pass
 * @param string $_end_pass
 * @param int $_min_num
 * @param int $_max_num
 * @return string $_first_pass返回加密后的密码
 */
function _check_password($_first_pass,$_end_pass,$_min_num=5,$_max_num=20){
	//判断密码
	if(strlen($_first_pass)<$_min_num){
		_alert_back('密码不得小于'.$_min_num.'位!');
	}
	if(strlen($_first_pass)>$_max_num){
		_alert_back('密码不得大于'.$_max_num.'位!');
	}
	//密码确认必须一致
	if($_first_pass!=$_end_pass){
		_alert_back('密码和确认密码不一致');
	}
	//把密码返回
	return _mysql_string(sha1($_first_pass));
	
}

function _check_modify_password($_string,$_min_num){
	//判断密码
	if(!empty($_string)){
		if(strlen($_string)<$_min_num){
			_alert_back('密码不得小于'.$_min_num.'位!');
		}
	}else{
		return null;
	}
	return sha1($_string);
}


/**
 * @param string $_string
 * @param int $_min_num
 * @param int $_max_num
 * @return string 密码问题
 */
function _check_question($_string,$_min_num=2,$_max_num=20){
	//长度小于两位或大于20位都不行
	$_string=trim($_string);
	if(mb_strlen($_string,'utf-8')<$_min_num||mb_strlen($_string,'utf-8')>$_max_num){
		_alert_back('问题长度不得小于'.$_min_num.'位大于'.$_max_num.'位');
	}
	//返回密码提示
	return _mysql_string($_string);
}

/**
 * 
 * @param string $_ques
 * @param string $_answ
 * @param int $_min_num
 * @param int $_max_num
 * @return string 密码回答
 */
function _check_answer($_ques,$_answ,$_min_num=2,$_max_num=20){
	//长度小于两位或大于20位都不行
	$_answ=trim($_answ);
	if(mb_strlen($_answ,'utf-8')<$_min_num||mb_strlen($_answ,'utf-8')>$_max_num){
		_alert_back('密码回答长度不得小于'.$_min_num.'位大于'.$_max_num.'位');
	}
	//密码提示与密码回答不得一致
	if($_ques==$_answ)
	{
		_alert_back('密码提示与密码回答不得一致');
		
	}
	//加密返回
	return _mysql_string(sha1($_answ));
}
/**
 * 转义性别
 * @param unknown_type $_string
 * @return Ambigous <string, unknown, unknown_type>
 */
function  _check_sex($_string){
	return _mysql_string($_string);
}
/**
 * 返回头像的转义
 * @param unknown_type $_string
 * @return Ambigous <string, unknown, unknown_type>
 */
function _check_face($_string){
	return _mysql_string($_string);
}
/**
 * _check_email()检测邮箱是否合法
 * @param 提交的邮箱地址 $_string
 * @return NULL|string 返回的邮箱
 */
function _check_email($_string,$_min_num=2,$_max_num){
	//参考bnbbs@163,com
	//[a-zA-Z0-9_]=\w
	//[\w\-\.]16.3
	//\.[\w+]只能是.com
	//正则理解了就简单
	if(empty($_string)){
		return null;
	}else{
 if(!preg_match('/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/', $_string)){
		_alert_back('邮箱格式不正确');
	                }
	     if(strlen($_string)<$_min_num||strlen($_string)>$_max_num){
	      	_alert_back('邮箱长度不合法');
	     }
	     return _mysql_string($_string);
	}
}

/**
 * _check_qq...
 * @param int $_string
 * @return NULL|int   返回的是QQ号码
 */
function _check_qq($_string){
	if(empty($_string)){
		return null;
	}else{
		//123456
		if(!preg_match('/^[1-9]{1}[\d]{4,9}$/', $_string)){
			_alert_back('QQ号码不正确！');
		}else {return _mysql_string($_string);}
	}
}


/**
 * _check_url() 检查网址是否合格
 * @param string $_string 输入的网址
 * @return NULL|string  返回验证后的网址
 */
function _check_url($_string){
	if(empty($_string)||($_string=='http://')){
		return null;
	}else{
	return _mysql_string($_string);
	}
}



?>