<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date: 2010-8-23
*/
session_start();
//定义个常量，用来授权调用includes里面的文件
define('IN_TG',true);
//定义个常量，用来指定本页的内容
define('SCRIPT','blog');
//引入公共文件
require dirname(__FILE__).'/includes/common.inc.php';
//分页模块
global $_pagesize,$_pagenum,$_system;
_page("SELECT tg_id FROM tg_user",$_system['blog']);   //第一个参数获取总条数，第二个参数，指定每页多少条
//首页要得到所有的数据总和
//从数据库里提取数据获取结果集
//我们必须是每次重新读取结果集，而不是从新去执行SQL语句
$_result = _query("SELECT 
												tg_id,tg_username,tg_sex,tg_face 
									FROM 
												tg_user 
							ORDER BY 
												tg_reg_time DESC 
									 LIMIT 
												$_pagenum,$_pagesize
							");							
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	require ROOT_PATH.'includes/title.inc.php';
?>
<script type="text/javascript" src="js/blog.js"></script>
</head>
<body>
<?php 
	require ROOT_PATH.'includes/header.inc.php';
?>

<div id="blog">
	<h2>博友列表</h2>
	<?php 
		$_html = array();
		while (!!$_rows = _fetch_array_list($_result)) {
			$_html['id'] = $_rows['tg_id'];
			$_html['username'] = $_rows['tg_username'];
			$_html['face'] = $_rows['tg_face'];
			$_html['sex'] = $_rows['tg_sex'];
			$_html = _html($_html);
	?>
	<dl>
		<dd class="user"><?php echo $_html['username']?>(<?php echo $_html['sex']?>)</dd>
		<dt><img src="<?php echo $_html['face']?>" alt="炎日" /></dt>
		<dd class="message"><a href="javascript:;" name="message" title="<?php echo $_html['id']?>">发消息</a></dd>
		<dd class="friend"><a href="javascript:;" name="friend" title="<?php echo $_html['id']?>">加为好友</a></dd>
		<dd class="guest">写留言</dd>
		<dd class="flower"><a href="javascript:;" name="flower" title="<?php echo $_html['id']?>">给他送花</a></dd>
	</dl>
	<?php }
		_free_result($_result);
		//_pageing函数调用分页，1|2，1表示数字分页，2表示文本分页
		_paging(1);
	?>


</div>

<?php 
	require ROOT_PATH.'includes/footer.inc.php';
?>
</body>
</html>
