<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date: 2010-8-10
*/
//防止恶意调用
if (!defined('IN_TG')) {
	exit('Access Defined!');
}
_close();
?>
<div id="footer">
	<p>本程序执行耗时为: <?php echo  round((_runtime() - START_TIME),4)?>秒</p>
	<p>版权所有 翻版必究</p>
	<p>本程序由<span>瓢城Web俱乐部</span>提供 源代码可以任意修改或发布 (c) yc60.com</p>
</div>