<?php
/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-4-20
*/
require 'common.inc.php';
if(isset($_COOKIE['username'])){
	$_clean=array();
	$_clean['sc_um'] = $_COOKIE['username'];
	$_clean['worksname'] = $_GET['name'];
	mysql_query("INSERT INTO tg_sc(
									worksname,
									scuser
									)
									VALUES(
									'{$_clean['worksname']}',
									'{$_clean['sc_um']}'
									)
									");
	echo '<input id="collect_inputed" type="submit" value="" name="sc_sm" />';
}
?>