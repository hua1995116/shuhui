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
	$_clean['zan_um']=$_COOKIE['username'];
	$_clean['worksname']= $_GET['name'];
	mysql_query("INSERT INTO tg_zan(
									worksname,
									zanuser
									)
									VALUES(
									'{$_clean['worksname']}',
									'{$_COOKIE['username']}'
									)
	");
     echo '<input id="good_inputed" type="submit" value="" name="zan_sm" />';
}
?>