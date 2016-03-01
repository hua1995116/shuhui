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

//定义一个常量用来制定本页的内容
define('SCRIPT', 'video-worksk');
//引用公共文件
require 'includes/common.inc.php';
/* if(isset($_COOKIE['username'])){
	$_rows=_fetch_array("SELECT tg_username FROM tg_user WHERE tg_username='{$_COOKIE['username']}' LIMIT 1");
	$_html=array();
	$_html['username']=$_rows['tg_username'];
}else{   
	_location('请先登录', index2);
} */
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>作品欣赏</title>
<?php require 'includes/title.inc.php';
	  require 'includes/index.inc.php';
?>
<script src="js/video.js"></script>
<script type="text/javascript" src="js/artDialog.js?skin=black"></script>
<script type="text/javascript" src="js/loginstyle.js"></script>
<link rel="stylesheet" type="text/css" href="css/head.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link href="css/video-js.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/header.js"></script>
<script>
function zan(name,num){
//发送Ajax查询请求并处理
var request = new XMLHttpRequest();
request.open("POST","includes/zan.inc.php?name="+name,"ture");
request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
request.send();
request.onreadystatechange = function(){
  if(request.readyState === 4){
     if(request.status === 200){
     document.getElementById(num).innerHTML = request.responseText;
     }else{
      alert("发生错误");
     }
  }
 }
}
function collect(name,num){
//发送Ajax查询请求并处理
var collect = new XMLHttpRequest();
collect.open("POST","includes/sc.inc.php?name="+name,"ture");
collect.setRequestHeader("Content-type","application/x-www-form-urlencoded");
collect.send();
collect.onreadystatechange = function(){
  if(collect.readyState === 4){
     if(collect.status === 200){
     document.getElementById(num).innerHTML = collect.responseText;
     }else{
      alert("发生错误");
     }
  }
 }
}
</script>
<!-- 视频 -->
<script>
function input_myclass(name,num){
//发送Ajax查询请求并处理
var request = new XMLHttpRequest();
request.open("POST","includes/myclass.php?name="+name,"ture");
request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
request.send();
request.onreadystatechange = function(){
  if(request.readyState === 4){
     if(request.status === 200){
     document.getElementById(num).innerHTML = request.responseText;
     }else{
      alert("发生错误");
     }
  }
 }
//add页面的刷新
var add = new XMLHttpRequest();
add.open("POST","includes/add.php?name="+name,"ture");
add.setRequestHeader("Content-type","application/x-www-form-urlencoded");
add.send();
add.onreadystatechange = function(){
  if(add.readyState === 4){
     if(add.status === 200){
     }else{
      alert("发生错误");
     }
  }
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
<div class="container1">
    <?php require 'includes/head.php';
    ?>
    <div class="bodyz">
         <div class="bodyztop">
                <div class="topin">
                    <div class="biaoti">
                	     搜寻结果
                	  </div>
                </div>
         </div>
         <div class="bodyx">
         <?php
          //取出视频作品资源
          $i=0;
          $_result = _query("SELECT * FROM tg_vidio WHERE woknme LIKE '%{$_GET['find']}%' ORDER BY tg_time DESC");
          while(!!$_result_video = _fetch_array_list($_result)){
          $_workehtml = array();
          $_workehtml['id'] = $_result_video['id'];
          $_workehtml['img'] = $_result_video['img'];
          $_workehtml['content'] = $_result_video['content'];
          $_workehtml['woknme'] = $_result_video['woknme'];
          $i+=1;
         ?>
             <a href="video-detail?id=<? echo $_workehtml['id'];?>">
             <div class="box1">
                <div class="boxtop">   
                    <img src="videoface/<?php echo $_workehtml['img']; ?>" class="boxtopimg">
                </div>
                <div class="boxbottom">
                   <div class="boxbottom_left">
                     <?php echo $_workehtml['woknme'];?></a>
                   </div>
                   <div class="boxbottom_right">
                      <?php
                        $_rows=_fetch_array("SELECT user,worksname FROM myclass WHERE user='{$_COOKIE['username']}' AND worksname='{$_workehtml['woknme']}' ");
                      if(isset($_COOKIE['username'])){
                       if($_rows['user']==$_COOKIE['username']){
                         echo '<input type="submit" value="已添加" class="addclasson addclassup"/>';
                       }else{
                      ?>
                       <a id="class<?php echo $i;?>"><input type="submit" value="添加课程" class="addclassup " 
                        onclick="input_myclass('<?php echo $_workehtml['woknme'];?>','class<?php echo $i;?>')" /></a>
                       <?php}
                      }?>
                   </div>          
             </div>
             </div>
               <?php 
                 }
               ?>
              <!--  box1end -->
          <?php
          //取出作品资源
          $i=0;
          $_fruit = _query("SELECT * FROM fruit WHERE name LIKE '%{$_GET['find']}%' ORDER BY time DESC");
          while(!!$_fruit_serch = _fetch_array_list($_fruit)){
          $_workehtml = array();
          $_workehtml['id'] = $_fruit_serch['id'];
          $_workehtml['work'] = $_fruit_serch['work'];
          $_workehtml['onwer'] = $_fruit_serch['onwer'];
          $_workehtml['name'] = $_fruit_serch['name'];
          $i+=1;
         ?>
             <a href="works_detail?id=<?php echo $_workehtml['id'];?>">
             <div class="box1">
                    <div class="boxtop">   
                        <img src="works/<?php echo $_workehtml['work']; ?>" class="boxtopimg">
                    </div>
                    <div class="boxbottom">
                         <div class="boxbottom_left">
                           <?php echo $_workehtml['name'];?></a>
                         </div>
                         <?php if(isset($_COOKIE['username'])){?>
                          <div class="collect"> 
                                <?php
                                $_rows=_fetch_array("SELECT scuser,worksname FROM tg_sc WHERE scuser='{$_COOKIE['username']}' AND worksname='{$_workehtml['work']}' ");
                                if($_rows['scuser']==$_COOKIE['username']){
                                echo '<dd><input id="collect_inputed" type="submit" value="" name="sc_sm" /></dd>';
                                }
                                else{
                                ?>
                                <dd id="a<?php echo $i;?>"><input id="collect_input" type="submit" value="" name="sc_sm" onclick="collect('<?php echo $_workehtml['work'];?>','a<?php echo $i;?>')"/></dd>
                              <?php } ?>
                         </div>

                         <div class="good">    
                                <?php
                                $_rows=_fetch_array("SELECT zanuser,worksname FROM tg_zan WHERE zanuser='{$_COOKIE['username']}' AND worksname='{$_workehtml['work']}' ");
                                if($_rows['zanuser']==$_COOKIE['username']){
                                echo '<dd><input id="good_inputed" type="submit" value="" name="zan_sm" /></dd>';
                                }
                                else{
                                ?>
                                 <dd id="<?php echo $i;?>"><input id="good_input"  type="submit" value="" name="zan_sm" onclick="zan
                                  ('<?php echo $_workehtml['work'];?>','<?php echo $i;?>')"/></dd>
                                <?php } ?>
                         </div>
                         <?php }?>
                    </div>          
               </div>
              
               <?php }?>
              <!--  box1end -->
         </div>
    </div>
</div>