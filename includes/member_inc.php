<?php

/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-5-28
*/

?>
	<div id="list">
		<ul>
			<li><a href="video-worksk.php">首页</a></li>
			<?php if($_memberhtml['level']=="1"){
				echo '<li><a href="admin.php">后台管理</a></li>';
			}?>
			<?php if($_memberhtml['level']=="2"){
				echo '<li><a href="member_register.php">课程上传</a></li>';
			}?>			
			<li><a href="member.php">我的资料</a></li>
			<li><a href="member_group.php">我的小组</a></li>
			<li><a href="member_friend.php">我的好友</a></li>
			<li><a href="member_fruit.php">我的成果</a></li>
			<li><a href="member_class.php">我的课程</a></li>
			<li><a href="member_work.php">我的互动</a></li>
		</ul>
	</div>