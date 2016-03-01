<?php

/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-4-24
*/
$myfile=$_FILES['myfile'];
$myimg=$_FILES['image'];
$myfile['name']=iconv("UTF-8","gb2312",$myfile['name']);
$myimg['name']=iconv("UTF-8","gb2312",$myimg['name']);
$upfile='./video/'.$myfile['name'];
$upfileimg='./videoface/'.$myimg['name'];
if(is_uploaded_file($myfile['tmp_name'])){
		
	if(!move_uploaded_file($myfile['tmp_name'],$upfile))
	{
		echo"错误。移动文件出错"	;
		exit;
	}
}
else{
	echo'文件存在';
	exit;
}
if(is_uploaded_file($myimg['tmp_name'])){

	if(!move_uploaded_file($myimg['tmp_name'],$upfileimg))
	{
		echo"错误。移动文件出错"	;
		exit;
	}
}
else{
	echo'文件存在';
	exit;
}
$myfile['name']=iconv("gb2312","UTF-8",$myfile['name']);
$myimg['name']=iconv("gb2312","UTF-8",$myimg['name']);
mysql_query(
"INSERT INTO tg_vidio(
fromuser,
woknme,
type,
img,
tg_time,
tg_ip
)
VALUES(
'{$_COOKIE['username']}',
'{$myfile['name']}',
'{$_POST['type']}',
'{$myimg['name']}',
NOW(),
'{$_SERVER["REMOTE_ADDR"]}'
)"
);
	if(_affect_row()==1){
	_close();
	//跳转
	_location('上传成功', 'works.php');}
	else{
	_close();
	//跳转
	_location('上传失败', 'works.php');
	}
?>