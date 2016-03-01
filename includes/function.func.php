<?php

/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-4-1
*/
/**
 *  清空SESSION
 */
function _alert_close($_info){
	echo "<script type='text/javascript'>alert('$_info');window.close();</script>";
	exit();
}
function _session_destroy(){
	session_destroy();
}
//唯一标示符
function _sha1_uniqid(){
	return _mysql_string(sha1(uniqid(rand(),ture)));
}
function _alert_back($_info) {
	echo "<script type='text/javascript'>alert('$_info');history.back();</script>";
	exit();
}


/**
 * 删除cookies函数
 */
function _unsetcookies(){
	setcookie('username',' ',time()-1);
	_location(null, 'index.php');
}
/**
 * 去除文件名后缀函数
 */
function get_file_name($file_name){
$retval =""; 
$pt = strrpos ( $file_name , "." ); 
if ( $pt ) $retval = substr ( $file_name , 0,  $pt ); 
return ( $retval ); 
}
/**
 * 跳转函数
 * @param unknown_type $_info
 * @param unknown_type $_url
 */
function _location($_info,$_url){
	 if(!empty($_info)){ 
		echo "<script type='text/javascript'>alert('$_info');location.href='$_url';window.top.opener = null; window.close(); </script>";
		exit();
	 }  else{
	 	echo "<script type='text/javascript'>location.href='$_url';window.top.opener = null; window.close(); </script>";
	}
}
function _loca($_url){
	echo "<script type='text/javascript'>location.href='$_url';window.top.opener = null; window.close(); </script>";
}
/**
 * 判断唯一标示符是否异常
 * @param unknown_type $_mysql_uniqid
 * @param unknown_type $_cookie_uniqid
 */
function _uniqid($_mysql_uniqid,$_cookie_uniqid){
	if($_mysql_uniqid!=$_cookie_uniqid){
		_alert_back('唯一标示符异常');
	}
}
function _affected_rows() {
	return mysql_affected_rows();
}
/**
 * 验证码比对函数
 * @param unknown_type $_first_code
 * @param unknown_type $_end_code
 */
function _check_code($_first_code,$_end_code){
	if($_first_code!=$_end_code){
		_alert_back('验证码不正确');
	}

}
function _mysql_string($_string){
	//get_magic_quotes_gpc()如果开启状态就不需要转义
	if(!GPC){
		return mysql_real_escape_string($_string);
	}else{
		return $_string;
	}
}

function _html($_string) {
	if (is_array($_string)) {
		foreach ($_string as $_key => $_value) {
			$_string[$_key] = _html($_value);   //这里采用了递归，如果不理解，那么还是用htmlspecialchars
		}
	} else {
		$_string = htmlspecialchars($_string);
	}
	return $_string;
}

?>