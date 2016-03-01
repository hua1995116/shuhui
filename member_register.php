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
define('SCRIPT', 'member_register');
require 'includes/common.inc.php';
//设置字符集编码
header('Content-Type: text/html; charset=utf-8');
//获取用户信息
require 'includes/member_info.php';
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
<link rel="stylesheet" type="text/css" href="css/header.css" />
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
<?php require 'includes/member_inc.php';?>
		<div id="center">
			<div class="person">
			   <div class="person1">			 
			      发布课程	
			    </div>
			</div>
      <div class="bodyz">
         <form action="works.php?action=vidio" method="post" enctype="multipart/form-data">
           <div class="register_up">
              <label>
                 文件上传
              </label>     
              <input type="file" name="myfile" />
              <p></p>
           </div>
           <div class="register_up">
              <label>
                 上传类型
              </label>
              <select name="type" id="type" onchange="MM_jumpMenu('parent',this,0)">
                <option value="楷书">楷书</option>
                <option value="隶书">隶书</option>
                <option value="行楷">行楷</option>
                <option value="行书">行书</option>
                <option value="草书">草书</option>
          	  </select>
              <p></p>
            </div>
            <div class="register_up">
              <label>
                  课程封面
              </label>
              <input type="file" name="image" />
              <p></p>
            </div>
            <input type="submit" value="文件上传" class="register_sub" />
         </form>          
      </div>
		</div>
			
</div>

</body>
</html>