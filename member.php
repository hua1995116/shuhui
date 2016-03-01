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
define('SCRIPT', 'member');
require 'includes/common.inc.php';
//设置字符集编码
header('Content-Type: text/html; charset=utf-8');
//获取用户信息
require 'includes/member_info.php';
if($_GET['action']=="change"){
	$_clean=array();
	$_clean['user']=$_POST['user'];
	$_clean['sex']=$_POST['sex'];
	$_clean['qq']=$_POST['qq'];
	$_clean['email']=$_POST['email'];
	$_clean['tax']=$_POST['tax'];
	_query("UPDATE tg_user SET 
				tg_user='{$_POST['user']}',
				tg_sex='{$_POST['sex']}',
				tg_email='{$_POST['email']}',
				tg_qq='{$_POST['qq']}',
				tg_autograph='{$_POST['tax']}'
				WHERE tg_username='{$_COOKIE['username']}'
				");

	_close();
	_location('恭喜你，修改成功！','member.php');
}

 if($_GET['action']=="face"){
 	$_chageface=$_POST['groupface'];
 		_query("UPDATE tg_user SET tg_face='{$_chageface}' 
							WHERE tg_username='{$_COOKIE['username']}'");
	_close();
	//_session_destroy();
	_location('成功修改!','member.php');
} 
if($_GET['action']=="password"){
	$_pass=array();
	$_pass['pass']=$_POST['pass'];
	$_pass['passagain']=$_POST['passagain'];
	if($_pass['pass']==$_pass['passagain']){
		_query("UPDATE tg_user SET tg_password='{$_pass['pass']}' WHERE tg_username='{$_COOKIE['username']}'");
		
			_close();
			//_session_destroy();
			_location('成功修改!','member.php');
		
	}else{
	_location("两次密码输入不一致", "member.php");
	}
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
<script type="text/javascript" src="js/member.modify.js"></script>
<script type="text/javascript" src="js/jquery-1.6.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/header.css" />
<script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript">
	window.onload=function(){
    li1 = document.getElementById("li1");
    li2 = document.getElementById("li2");
    li3 = document.getElementById("li3");
    bodyx = document.getElementById("bodyx");
    bodyy = document.getElementById("bodyy");
    bodyz = document.getElementById("bodyz");
    li1.onclick = function(){
         li1.style.color = "#606635";
         li2.style.color = "#fff";
         li3.style.color = "#fff";
         bodyx.style.display="block";
         bodyy.style.display="none";
         bodyz.style.display="none"; 
    }
    li2.onclick = function(){
         li2.style.color = "#606635";
         li1.style.color = "#fff";
         li3.style.color = "#fff";
         bodyy.style.display="block";
         bodyx.style.display="none";
         bodyz.style.display="none"; 
    }
    li3.onclick = function(){
         li3.style.color = "#606635";
         li2.style.color = "#fff";
         li1.style.color = "#fff";
         bodyz.style.display="block";
         bodyy.style.display="none";
         bodyx.style.display="none"; 
    }

}
</script>
</head>
<body>
<?php require 'includes/header.php';
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
			      我的资料	
			    </div>
			    <div class="person2">
			    	<ul class="person2_ul">
			    		<li id="li1">
			    			个人资料
			    		</li>
			    		<li id="li2">
			    			更换头像
			    		</li>
			    		<li id="li3">
			    			更换密码
			    		</li>
			    	</ul>
			    </div>
			</div>
			<form method="post" action="member.php?action=change">
			<ul id="bodyx">
				<li class="bodyxli">
					<div class="boxname">
						昵称
					</div>
					<div class="boxcontent">
						<input placeholder="<?php echo $_memberhtml['user']?>" class="nicheng_input" name="user" type="text"  />
						<p class="center_p"></p>
					</div>
				</li>
				<li class="bodyxli">
					<div class="boxname">
						性别
					</div>
					<div class="boxcontent boxcontent_sex">
							<input type="radio" name="sex" <?php if($_memberhtml['sex']=="保密"){echo 'checked=checked';}?> value="保密" /> 保密
						    <input type="radio" name="sex" value="男" <?php if($_memberhtml['sex']=="男"){echo 'checked=checked';}?>  /> 男 <input type="radio" name="sex" value="女" <?php if($_memberhtml['sex']=="女"){echo 'checked=checked';}?> />
							女

					</div>
				</li>
				<li class="bodyxli">
					<div class="boxname">
						注册时间
					</div>
					<div class="boxcontent boxcontent_time">
						<?php echo $_rows['tg_reg_time'];?>
					</div>
				</li>
				
				<li class="bodyxli">
					<div class="boxname">
						电子邮箱
					</div>
					<div class="boxcontent boxcontent_email"> 
						<input type="text" placeholder="<?php echo $_memberhtml['email'];?>" name="email"  class="nicheng_input" />
						<p class="center_p"> </p>
					</div>
				</li>
				<li class="bodyxli">
					<div class="boxname">
						QQ
					</div>
					<div class="boxcontent boxcontent_phone"> 
						<input type="text" placeholder="<?php echo $_memberhtml['qq']?>" name="qq" class="nicheng_input" />
						<p class="center_p"></p>
					</div>
				</li>
				<li class="bodyxli">
					<div class="boxname">
						个人介绍
					</div>
					<div class="boxcontent boxcontent_person">
						<textarea placeholder="<?php echo $_memberhtml['tax'];?>" class="boxcontent_textarea" name="tax"></textarea>
					</div>
				</li>
				<li class="bodyxli">
					<a href="member.modify.php">
						<input id="change" value="修改资料" type="submit" class="submit1" />
					</a>
				</li>
			</ul>
			</form>
			<ul id="bodyy" style="display:none">
				<li>
			<form method="post" action="member.php?action=face">
			<dl>
			<dd>
                       <input type="hidden" name="groupface" class="groupface" value="images/face/face1.jpg" /><img src="images/face/face1.jpg" alt="头像选择" id="groupface" class="shadow" />
                        <div class="choose_face">
                        	<ul>
                        	<?php foreach (range(1,54) as $num) {?>
                        		<li>
                        			<img src="images/face/face<?php echo $num?>.jpg" alt="images/face/face<?php echo $num?>.jpg" title="头像<?php echo $num?>" />
                        		</li>
                        <?php }?>
                        	</ul>
                        </div>
             </dd>
			<dd><input type="submit" id="change" value="修改头像" class="submit1" /></dd>
			</dl>
			</form>
				</li>
			</ul>
			<ul id="bodyz" style="display:none">
				<li>
				<form method="post" action="member?action=password">
                  <ul>
                    <li class="bodyxli">
						<div class="boxname">
							新 密 码
						</div>
						<div class="boxcontent">
							<input class="nicheng_input" name="pass" type="text"  />
							<p class="center_p"></p>
						</div>
				    </li>
				    <li class="bodyxli">
						<div class="boxname">
							确认密码
						</div>
						<div class="boxcontent">
							<input  class="nicheng_input" name="passagain" type="text"  />
							<p class="center_p"></p>
						</div>
				    </li>
				  </ul>
					
					<input type="submit" id="change" value="修改密码" class="submit2" />
	
				</form>
				</li>		
			</ul>
		</div>
</div>

</body>
</html>