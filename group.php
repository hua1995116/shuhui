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
define('SCRIPT', 'group');
//引用公共文件
require 'includes/common.inc.php';
if(isset($_COOKIE['username'])){
	$_rows = _fetch_array("SELECT tg_username FROM tg_user WHERE tg_username='{$_COOKIE['username']}' LIMIT 1");
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
<?php 
   require 'includes/title.inc.php';
?>
<script type="text/javascript" src="js/artDialog.js?skin=black"></script>
<script type="text/javascript" src="js/loginstyle.js"></script>
<script type="text/javascript" src="js/group.js"></script>
<link rel="stylesheet" type="text/css" href="css/head.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript">
  window.onload=function(){
    tittle1 = document.getElementById("tittle1");
    tittle2 = document.getElementById("tittle2");
    tittle3 = document.getElementById("tittle3");
    left1 = document.getElementById("left1");
    left2 = document.getElementById("left2");
    left3 = document.getElementById("left3");
    tittle1.onclick = function(){
         tittle1.style.borderBottom ="1px red solid"; 
         tittle1.style.color = "red";
         tittle2.style.borderBottom ="none"; 
         tittle2.style.color = "#514646";
         tittle3.style.borderBottom = "none"; 
         tittle3.style.color = "#514646";
         left1.style.display="block";
         left2.style.display="none";
         left3.style.display="none"; 
    }
    tittle2.onclick = function(){
         tittle2.style.borderBottom ="1px red solid"; 
         tittle2.style.color = "red";
         tittle1.style.borderBottom ="none"; 
         tittle1.style.color = "#514646";
         tittle3.style.borderBottom = "none"; 
         tittle3.style.color = "#514646";
         left2.style.display="block";
         left1.style.display="none";
         left3.style.display="none"; 
    }
    tittle3.onclick = function(){
         tittle3.style.borderBottom ="1px red solid"; 
         tittle3.style.color = "red";
         tittle2.style.borderBottom ="none"; 
         tittle2.style.color = "#514646";
         tittle1.style.borderBottom = "none"; 
         tittle1.style.color = "#514646";
         left3.style.display="block";
         left2.style.display="none";
         left1.style.display="none"; 
    }

}
</script>
</head>
<body>
<?php
   require'includes/header.php';
?>
<?php if(isset($_COOKIE['username'])){
          require 'includes/add.php';
      }    
?>
   <div class="container1">
      <?php
         require'includes/head.php';
      ?>
      <div class="group">
               <?php
                  $_deal = _query("SELECT * FROM group_list WHERE id='{$_GET['id']}' LIMIT 1");
                  $_team = _fetch_array_list($_deal);
                  $_html = array();
                  $_html['name'] = $_team['name'];
                  $_html['username'] = $_team['username'];
                  $_html['type'] = $_team['type'];
                  $_html['face'] = $_team['face'];
                  $_html['content'] = $_team['content'];
            echo '<div class="group_tittle">
	                  <a href="group_look">
	                      <div class="tittle1 public">
	                           小组讨论
	                      </div>
	                  </a>
	                  <div class="tittle2 public">
	                      '.$_html['type'].'
	                  </div>
	                  <div class="tittle3 public">
	                     详细内容
	                  </div>
                  </div>';
                 if($_GET['action']=='yes'){
                   if(isset($_COOKIE['username'])){
                         _query(
                          "INSERT INTO group_comment (team,username,comment,time) VALUES 
                        ('{$_html['name']}','{$_COOKIE['username']}','{$_POST['publishin']}',NOW())"
                               );
                   }else{
                         _alert_back("请先登录");
                        }
                  }
                if($_GET['type']=='join'){
                   if(isset($_COOKIE['username'])){
                      _query("INSERT INTO group_member (group_id,join_name,level,join_time) VALUES (
                                          '{$_GET['id']}','{$_COOKIE['username']}',0,NOW())
                  ");
                }else{
                        _alert_back('请先登录');
                       }
                } 
                  $_sql = mysql_query("SELECT * FROM group_member WHERE join_name='{$_COOKIE['username']}'&&group_id='{$_GET['id']}'");
                  $_num = mysql_num_rows($_sql);
            echo '<div class="group_box">
                     <div class="group_top">
                         <div class="group_img">'
                            .'<img src="'.$_html['face'].'" >'.
                        '</div>
                         <div class="group_right">
	                         <div class="group_name">'.$_html['name'];
				                  if($_num==0){
				                       echo '<form class="join" action="group.php?type=join&&id='.$_GET['id'].'" method="post">
				                                <input class="join1" type="submit" name="join" value="加入我们">
				                             </from>';
				                  }else{
				                            
				                       echo '<input class="join2" type="submit" name="join" value="已加入">';
				                       }
				                  echo '
				             </div>
                             <div class="group_content">'.$_html['content'].'
                             </div>
                         </div>
                     </div>';
                  
                  echo  '
                          <div class="group_center">
                               <div class="gpctittle">
                                  <ul>
                                     <li id="tittle1">小组成员</li>
                                     <li id="tittle2">讨论专区</li>
                                     <li id="tittle3">小组共享</li>
                                  </ul>
                               </div>
                      <div class="gpccontent1 gpccontent" id="left1" style="display:block" >';
					                  //小组成员信息
					                  $_result = _query("SELECT * FROM group_member WHERE group_id='{$_GET['id']}' ORDER BY join_time DESC ");
					                  while(!!$_member = _fetch_array_list($_result)){
					                  $_html['member_name'] = $_member['join_name'];
					                  $_html['member_level'] = $_member['level'];
					                  $_html['member_time'] = $_member['join_time'];
					                  //头像
					                  $_results = _query("SELECT * FROM tg_user WHERE tg_username='{$_html['member_name']}' limit 1");
					                  $_member_img = _fetch_array_list($_results);
					                  $_html['member_face'] = $_member_img['tg_face'];

                  echo '<div class="gpmember">
                           <div class="img public">
                               <img src="'.$_html['member_face'].'">
                           </div>
                           <div class="name public">'.
		                        $_html['member_name'].'
		                   </div>';
	                        if($_html['member_level']== 1 ){
	                           echo '<div class="level public">组长</div>';
	                        }else{
	                           echo '<div class="level public">组员</div>';
	                        }
                  echo   '<div class="time public">入组时间:'.
                             $_html['member_time'].'
                          </div>
                        </div>
                        ';
             }
             echo '</div>
             <div class="gpccontent2 gpccontent" id="left2" style="display:none">
               <form action="group.php?id='.$_GET['id'].'&&action=yes" method="post">
                 <div class="publish" id="change" onclick="addClass()">
                     <textarea class="publishin" name="publishin" onblur="onblur1()"> </textarea> 
                 </div>
                 <div class="publish_submit">
                      <input value="发表评论" type="submit" class="submit" />
                 </div>
               </form>';
                       //获取评论
	              $_i=0;
	              $_clean = array();
	              $_comment = _query("SELECT * FROM group_comment WHERE team='{$_html['name']}' ORDER BY time DESC");
	              while(!!$_comments = _fetch_array_list($_comment)){
	              $_clean['username'] = $_comments['username'];
	              $_clean['comment'] = $_comments['comment'];
	              $_clean['time'] = $_comments['time'];
	              //获取头像
	              $_user = _query("SELECT * FROM tg_user WHERE tg_username='{$_clean['username']}' limit 1");
	              $_users = _fetch_array_list($_user);
	              $_clean['face'] = $_users['tg_face'];
	              $_i+=1;
	              if(($_i%5)==1){
	                echo '<div class="comment_a">';
	              }
	              echo '
	                <div class="comment_b">
	                  <div class="comment_img">
	                      <img src="'.$_clean['face'].'">
	                  </div>
	                  <div class="comment_content">'.
	                      $_clean['comment'].'
	                  </div>
	                  <div class="comment_name">'.
	                       $_clean['username'].'
	                  </div>
	                  <div class="comment_time">'.
	                    '时间：'.$_clean['time'].'
	                  </div>
	                </div>        
	              ';
                if(($_i%5)==0){
                  echo '</div>';
                }
              }
                  echo '</div>
                  
                 
                       <div class="gpccontent3 gpccontent" id="left3" style="display:none">
	              		 </div>
                  </div>
                       </div>
                    </div>
                 </div>';
               ?>
      </div>
   </div>

</body>
</html>