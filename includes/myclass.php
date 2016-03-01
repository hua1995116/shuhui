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
	mysql_query("INSERT INTO myclass(
									worksname,
									user,
									time
									)
									VALUES(
									'{$_clean['worksname']}',
									'{$_COOKIE['username']}',
									NOW()
									)
	");
     echo '<input type="submit" value="已添加" class="addclasson addclassup"/>';
}
?>