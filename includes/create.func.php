<?
//基本函数
if (!function_exists('_alert_back')) {
	exit('_alert_back()函数不存在，请检查!');
}
if (!function_exists('_mysql_string')) {
	exit('_mysql_string()函数不存在，请检查!');
}

//用户名
function _check_groupname($_string,$_min_num,$_max_num) {
	//去掉两边的空格
	$_string = trim($_string);
	//长度小于2位或者大于10位
	if (mb_strlen($_string,'utf-8') < $_min_num || mb_strlen($_string,'utf-8') > $_max_num) {
		_alert_back('face-sad','小组名称长度不得小于'.$_min_num.'位或者大于'.$_max_num.'位',null);
	}
	//将用户名转义输入
	return _mysql_string($_string);
}

//头像
function _check_face($_string) {
	return _mysql_string($_string);
}

//类型
function _check_type($_string) {
	if ($_string == '请选择小组类型') {
		_alert_back('face-sad','请选择小组类型',null);
	}
	return $_string;
}

//人数上限
function _check_num($_string) {
	if ($_string == '请选择小组上限人数（人）') {
		_alert_back('face-sad','请选择小组上限人数',null);
	}
	return $_string;
}

//简介
function _check_content($_string) {
	if (empty($_string)) {
		return null;
	} else {
	return _mysql_string($_string);
	}
}
?>