<?php
/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-3-28
*/
session_start();
//设置字符集编码
header('Content-Type: text/html; charset=utf-8');
//定义一个常量用来制定本页的内容
define('SCRIPT', 'group_look');
//引用公共文件
require 'includes/common.inc.php';
if(isset($_COOKIE['username'])){
	$_rows=_fetch_array("SELECT tg_username FROM tg_user WHERE tg_username='{$_COOKIE['username']}' LIMIT 1");
	$_html=array();
	$_html['username']=$_rows['tg_username'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xht ml1/DT D/xht ml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>多媒体学习平台-首页</title>
<?php require 'includes/title.inc.php';
?>

<script type="text/javascript" src="js/group_look.js"></script>
<link rel="stylesheet" type="text/css" href="css/head.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<script type="text/javascript" src="js/header.js"></script>
</head>
<body>
<?php
   require'includes/header.php';
?>
<div class="container1">
<?php
   require'includes/head.php';
?>
<?php if(isset($_COOKIE['username'])){
          require 'includes/add.php';
      }    
?>
   <div id="bodyr">
      <div class="body1">
        <!--楷书-->
          <div id="box1">
             <ul id="box1_ul">   
             <?php
                 $i=0;
                 $_record = _query("SELECT * FROM group_list WHERE type='楷书' ORDER BY time DESC LIMIT 6");
                 while(!!$_type_xs = mysql_fetch_array($_record,MYSQL_ASSOC)){
                 $_html['img'] = $_type_xs['face'];
                 $_html['name'] = $_type_xs['name']; 
                 $_html['id'] = $_type_xs['id'];
                 $i+=1;
                 echo  '<li id="box1_bg'.$i.'">
                         <a href="group.php?id='.$_html['id'].'">
	                        <div id="bg'.$i.'"> 
	                        </div>
	                        <img id="img'.$i.'" src="'.$_html['img'].'"/>
                         </a>
                     </li>';
                 }
             ?>
             <li id="box1_bg6">
               <a href="#">
               	  <div id="bg6">
               	  </div>
               	  <img src="images/group/more1.jpg">
               </a>
             </li>
             </ul>
             <div id="box11">
             	<div class="img">
             	   <img src="images/group/kai.png">
             	</div>
             </div>
          </div>
          <!--行楷-->
          <div id="box2">
            <ul id="box2_ul">
            <?php
                 $i=0;
                 $_record = _query("SELECT * FROM group_list WHERE type='隶书' ORDER BY time DESC LIMIT 5");
                 while($_type_xs = mysql_fetch_array($_record,MYSQL_ASSOC)){
                 $_html['img'] = $_type_xs['face'];
                 $_html['name'] = $_type_xs['name']; 
                 $_html['id'] = $_type_xs['id'];
                 $i+=1;
                 echo  '<li id="box2_bg'.$i.'">
                     <a href="group.php?id='.$_html['id'].'">
                        <div id="bg2'.$i.'"> 
                        </div>
                        <img id="img2'.$i.'" src="'.$_html['img'].'"/>
                     </a>
                     </li>';
                 }
             ?>
	             <li id="box2_bg6">
	               <a href="#">
	               	  <div id="bg26">
	               	  </div>
	               	  <img src="images/group/more2.jpg">
	               </a>
	             </li>
             </ul>
             <div id="box21">
             	<div class="img">
             	   <img src="images/group/li.png">
             	</div>
             </div>
          </div>
          <div id="box3">
            <ul id="box3_ul">
            <?php
                 $i=0;
                 $_record = _query("SELECT * FROM group_list WHERE type='行书' ORDER BY time DESC LIMIT 4");
                 while($_type_xs = mysql_fetch_array($_record,MYSQL_ASSOC)){
                 $_html['img'] = $_type_xs['face'];
                 $_html['name'] = $_type_xs['name']; 
                 $_html['id'] = $_type_xs['id'];
                 $i+=1;
                 echo  '<li id="box3_bg'.$i.'">
                     <a href="group.php?id='.$_html['id'].'">
                        <div id="bg3'.$i.'"> 
                        </div>
                        <img id="img3'.$i.'" src="'.$_html['img'].'"/>
                     </a>
                     </li>';
                 }
             ?>
                <li id="box3_bg5">
	               <a href="#">
	               	  <div id="bg35">
	               	  </div>
	               	  <img src="images/group/more3.jpg">
	               </a>
	             </li>
             </ul>
             <div id="box31">
             	<div class="img">
             	   <img src="images/group/xing.png">
             	</div>
             </div>
          </div>
          <div id="box4">
           <ul id="box4_ul">
            <?php
                 $i=0;
                 $_record = _query("SELECT * FROM group_list WHERE type='行楷' ORDER BY time DESC LIMIT 3");
                 while($_type_xs = mysql_fetch_array($_record,MYSQL_ASSOC)){
                 $_html['img'] = $_type_xs['face'];
                 $_html['name'] = $_type_xs['name']; 
                 $_html['id'] = $_type_xs['id'];
                 $i+=1;
                 echo  '<li id="box4_bg'.$i.'">
                     <a href="group.php?id='.$_html['id'].'">
                        <div id="bg4'.$i.'"> 
                        </div>
                        <img id="img4'.$i.'" src="'.$_html['img'].'"/>
                     </a>
                     </li>';
                 }
             ?>
                <li id="box4_bg4">
	               <a href="#">
	               	  <div id="bg44">
	               	  </div>
	               	  <img src="images/group/more4.jpg">
	               </a>
	             </li>
             </ul>
             <div id="box41">
             	<div class="img">
             	   <img src="images/group/zhuan.png">
             	</div>
             </div>
          </div>
          <div id="box5">
            <ul id="box5_ul">
            <?php
                 $i=0;
                 $_record = _query("SELECT * FROM group_list WHERE type='草书' ORDER BY time DESC LIMIT 4");
                 while($_type_xs = mysql_fetch_array($_record,MYSQL_ASSOC)){
                 $_html['img'] = $_type_xs['face'];
                 $_html['name'] = $_type_xs['name']; 
                 $_html['id'] = $_type_xs['id'];
                 $i+=1;
                 echo  '<li id="box5_bg'.$i.'">
                     <a href="group.php?id='.$_html['id'].'">
                        <div id="bg5'.$i.'"> 
                        </div>
                        <img id="img5'.$i.'" src="'.$_html['img'].'"/>
                     </a>
                     </li>';
                 }
             ?>
                <li id="box5_bg5">
	               <a href="#">
	               	  <div id="bg55">
	               	  </div>
	               	  <img src="images/group/more5.jpg">
	               </a>
	             </li>
             </ul>
             <div id="box51">
             	<div class="img">
             	   <img src="images/group/cao.png">
             	</div>
             </div>
          </div>
          <div id="box6">
            <ul id="box6_ul">
            <?php
                 $i=0;
                 $_record = _query("SELECT * FROM group_list WHERE type='其他' ORDER BY time DESC LIMIT 4");
                 while($_type_xs = mysql_fetch_array($_record,MYSQL_ASSOC)){
                 $_html['img'] = $_type_xs['face'];
                 $_html['name'] = $_type_xs['name']; 
                 $_html['id'] = $_type_xs['id'];
                 $i+=1;
                 echo  '<li id="box6_bg'.$i.'">
                     <a href="group.php?id='.$_html['id'].'">
                        <div id="bg6'.$i.'"> 
                        </div>
                        <img id="img6'.$i.'" src="'.$_html['img'].'"/>
                     </a>
                     </li>';
                 }
             ?>
             </ul>
             <div id="box61"></div>
          </div>
      </div>
   </div>     
</div>

</body>
</html>