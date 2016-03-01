<?php

/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-3-30
*/
session_start();
define('SCRIPT', 'othermember');
require 'includes/common.inc.php';
//设置字符集编码
header('Content-Type: text/html; charset=utf-8');
if($_GET['id']){
	$_user=_fetch_array("SELECT onwer FROM fruit WHERE id='{$_GET['id']}' LIMIT 1");
	$_rows=_fetch_array("SELECT tg_username,tg_email,tg_sex,tg_face,tg_qq FROM tg_user WHERE tg_username='{$_user['onwer']}'");
	$_html=array();
	$_html['username']=$_rows['tg_username'];
	$_html['email']=$_rows['tg_email'];
	$_html['sex']=$_rows['tg_sex'];
	$_html['face']=$_rows['tg_face'];
	$_html['qq']=$_rows['tg_qq'];
}

if($_GET['action']=="friend")
{
	$_clean=array();
	$_clean['fromuser']=$_POST['fromuser'];
	$_clean['touser']=$_POST['touser'];
	_is_repeat(
	"SELECT fromuser,touser FROM tg_friend WHERE fromuser='{$_clean['fromuser']}' AND touser='{$_clean['touser']}' LIMIT 1",
	'你们已经是好友',
	'works.php'
			);
	mysql_query("INSERT INTO tg_friend(
									fromuser,
									touser,
									time	
										) 
									VALUES(
											'{$_POST['fromuser']}',
											'{$_POST['touser']}',
											NOW()
											)"
);
	if(_affect_row()==1){
		//跳转
		_location('添加成功', 'works.php');}
		else{

		_location('添加失败', 'works.php');
		}
}	 
else{
			$_SESSION['uniqid']=$_uniqid=_sha1_uniqid();
		}	 	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xht ml1/DT D/xht ml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>多媒体学习平台-个人中心</title>
<?php require 'includes/title.inc.php';?>
<script type="text/javascript" src="js/member.js"></script>
<link rel="stylesheet" type="text/css" href="css/memberinfo.css" />
<link rel="stylesheet" type="text/css" href="css/header.css">
<script type="text/javascript" src="js/header.js"></script>
</head>
<body>
<?php require 'includes/header.php';
?>
<?php if(isset($_COOKIE['username'])){
          require 'includes/add.php';
      }    
?>
<div class="contain">
	<div id="list">
		<ul>
			<li>
			    <a href="index2.php">
			       首页
			    </a>
			</li>
		</ul>
	</div>
		<div id="center">
			<div class="person">
			   <div class="person1">			 
			      个人资料	
			    </div>
			</div>
			<dl>
			   <dd>
			       <p></p>
			       <div class="img">
			       	  <img src="<?php echo $_rows['tg_face'];?>" style="width:200px;height:200px;" />
			       </div>
			       <p></p>
			   </dd>
			   <dd>
			       <div class="name">
			          用户名
			       </div>
			       <div class="content">
			          <?php echo $_rows['tg_username'];?>
			       </div>
			       <p></p>
			   </dd>
			   <dd>
			       <div  class="name">
			         性别
			       </div>
			       <div class="content">
			           <?php echo $_rows['tg_sex'];?>
			       </div>
			       <p></p>
			   </dd>
			   <dd>
			       <div  class="name">
			         邮箱
			       </div>
			       <div class="content">
			           <?php echo$_rows['tg_email'];?>
			       </div>
			       <p></p>
			   </dd>
			   <dd>
			       <div  class="name">
			         Q Q 
			       </div>
			       <div class="content">
			           <?php echo $_rows['tg_qq'];?>
			       </div>
			       <p></p>
			   </dd>
			   <dd>
			   	  <form method="post" action="othermember.php?action=friend">
					<input type="hidden" value="<?php echo $_COOKIE['username'];?>" name="fromuser" />
					<input type="hidden" value="<?php echo $_rows['tg_username'];?>" name="touser" />
				    <input type="submit" value="添加好友 " name="sumbit" class="submit" />
		          </form>
			   </dd>
			</dl>
		</div>
		
			
</div>

</body>
</html>