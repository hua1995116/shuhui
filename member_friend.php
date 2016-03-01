<?php

/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-4-8
*/
define('SCRIPT', 'member_friend');
require 'includes/common.inc.php';
//获取用户信息
require 'includes/member_info.php';
$_result=_query("SELECT touser,fromuser FROM tg_friend WHERE fromuser='{$_COOKIE['username']}'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xht ml1/DT D/xht ml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>your title</title>
<link rel="stylesheet" type="text/css" href="css/header.css" />
<script type="text/javascript" src="js/header.js"></script>
<?php require 'includes/title.inc.php';?>
</head>
<body>
<?php
   require'includes/header.php';
?>
<?php if(isset($_COOKIE['username'])){
          require 'includes/add.php';
      }    
?>
<div class="contain">
<?php require 'includes/member_inc.php';?>
        <div id="center">
			<div class="person">
			   <div class="person1">			 
			      我的好友
	           </div>
	        </div> 
				<?php   while (!!$_rows = _fetch_array_list($_result)) {
					$_friend=_fetch_array("SELECT * FROM tg_user WHERE tg_username='{$_rows['touser']}'");
					$_html=array();
					$_html['id'] = $_friend['tg_id'];
					$_html['username']=$_friend['tg_username'];
					$_html['sex']=$_friend['tg_sex'];
					$_html['face']=$_friend['tg_face'];
					$_html=_html($_html);
				
				?>
				 
				 <dl>		
					<dd><a href="friendmember?id=<?php echo  $_friend['tg_id'];?>"><img src="<?php echo $_html['face'];?>" style="width:200px;height:200px;"  /></a></dd>
					<dd class="xinxi"><?php echo $_html['username'];?></dd>
					<dd class="xinxi"><?php echo $_html['sex'];?></dd>
				</dl>			
				<?php }?>	
				<div style="text-align:center;font-size:30px;color:#333;">
				暂无好友
			</div>
		
			
</div>

</div>

</body>
</html>