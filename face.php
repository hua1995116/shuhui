<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date: 2010-8-12
*/

//定义个常量，用来指定本页的内容
define('SCRIPT','face');
//引入公共文件
require 'includes/common.inc.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>多用户留言系统--头像选择</title>
<?php 
	require 'includes/title.inc.php';
?>
<script type="text/javascript" src="js/opener.js"></script>
</head>
<body>

<div id="face">
	<h3>选择头像</h3>
	<dl>
		<?php foreach (range(1,9) as $num) {?>
		<dd><img src="images/face/face0<?php echo $num?>.png" alt="images/face/face0<?php echo $num?>.png" title="头像<?php echo $num?>" /></dd>
		<?php }?>
		
	</dl>
</div>


</body>
</html>