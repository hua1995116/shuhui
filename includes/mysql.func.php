<?php


/**
 Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-2-7
*/

/**
 * _connect()连接MYSQL数据库
 */
function _connect(){
	//global  表示的是全局变量的意思,意图是此变量在函数外也能访问
	global $_conn;
	if(!$_conn=@mysql_connect(DB_HOST,DB_USER,DB_PWD)){
		exit('数据库连接失败');
	}
}
/**
 * _Select_db选择一款数据库
 */
function _select_db(){
	if(!mysql_select_db(DB_NAME)){
		exit('数据库找不到');
	}
}

function _set_names(){
	if(!mysql_query('SET NAMES UTF8'))
	{
		exit('字符集错误');
	}
}

//判断是否执行SQL语句成功
function _query($_sql){
	if(!$_result=mysql_query($_sql)){
		exit('SQL执行失败'.mysql_error());
	}
	return $_result;
}


function _fetch_array($_sql) {
	return mysql_fetch_array(_query($_sql),MYSQL_ASSOC);
}

function _fetch_array_list($_result) {
	return mysql_fetch_array($_result,MYSQL_ASSOC);
}


function _affect_row(){
	return mysql_affected_rows();
}
//判断用户名是否重复
function _is_repeat($_sql,$_info){
	if(_fetch_array($_sql)){
	_alert_back($_info);
	}
}

function _close(){
	if(!mysql_close()){
		exit('关闭异常');
	}
}
?>
