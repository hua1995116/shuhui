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
define('SCRIPT', 'video-detail');
//引用公共文件
require 'includes/common.inc.php';
//取出视屏资源
$_result=_query("SELECT * FROM tg_vidio WHERE id='{$_GET['id']}' limit 1");
$_result_video = _fetch_array_list($_result);
$_html_video = array();
$_html_video['workname'] = $_result_video['woknme'];
$_html_video['id'] = $_result_video['woknme'];
if($_GET['action']=='yes'){
	if(isset($_COOKIE['username'])){
		_query(
		"INSERT INTO comment (workname,username,comment,time) VALUES 
		  ('{$_COOKIE['workname']}','{$_COOKIE['username']}','{$_POST['publishin']}',NOW())"
		      );
	}else{
		_alert_back("请先登录");
	}
}else{
	@setcookie("workname",$_html_video['workname'],time()+3600*24*30);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>作品欣赏</title>
<?php
    require 'includes/title.inc.php';
    require 'includes/index.inc.php';
?>
<script src="js/video.js"></script>
<script type="text/javascript" src="js/artDialog.js?skin=black"></script>
<script type="text/javascript" src="js/loginstyle.js"></script>
<script type="text/javascript" src="js/video_detail.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.pagination.js"></script>
<link rel="stylesheet" type="text/css" href="css/head.css">
<link href="css/pagination.css" rel="stylesheet" type="text/css">
<link href="css/video-js.css" rel="stylesheet" type="text/css">
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
  <script>
    videojs.options.flash.swf = "video-js.swf";
  </script>
  <script type="text/javascript">
       function addClass(){
           $("#change").removeClass("publish");
           $("#change").addClass("publish1"); //添加样式        
       }
       function onblur1(){
       	   $("#change").removeClass("publish1");
           $("#change").addClass("publish"); //添加样式 
       }
  </script>
<script type="text/javascript">

    // This is a very simple demo that shows how a range of elements can
    // be paginated.
    // The elements that will be displayed are in a hidden DIV and are
    // cloned for display. The elements are static, there are no Ajax 
    // calls involved.

    /**
     * Callback function that displays the content.
     *
     * Gets called every time the user clicks on a pagination link.
     *
     * @param {int} page_index New Page index
     * @param {jQuery} jq the container with the pagination links as a jQuery object
     */
    function pageselectCallback(page_index, jq){
        var new_content = jQuery('.publish_comment1 .comment_a:eq('+page_index+')').clone();
        $('.publish_comment').empty().append(new_content);
        return false;
    }
   
    /** 
     * Initialisation function for pagination
     */
    function initPagination() {
        // count entries inside the hidden content
        var num_entries = jQuery('.publish_comment1 .comment_a').length;
        // Create content inside pagination element
        $("#Pagination").pagination(num_entries, {
            callback: pageselectCallback,
            current_page:0,
            items_per_page:1 ,
            prev_text:'前一页',
            next_text:'后一页',

            // Show only one item per page
        });
     }
    
    // When document is ready, initialize pagination
    $(document).ready(function(){      
        initPagination();
    });
    
    
    
  // </script>
</head>
<body>
<?php if(isset($_COOKIE['username'])){
          require 'includes/add.php';
      }    
?>
		<div id="header">
		  
		   <div class="covered">
		    
		   </div>
		   <div class="head-aera">
		          <a href="javascript:history.go(-1);"><div class="houtui"><div class="houtui1">返回</div></div></a>
		          <div class="classname">
		          	 <?php echo $_html_video['workname'];?>
		          </div>
		          <div class="login">
		    	     <?php 
		    	     if(isset($_COOKIE['username'])){
		    	     	$_faces=_fetch_array("SELECT tg_face FROM tg_user WHERE tg_username='{$_COOKIE['username']}'");
		    	     	$_face=array();
		    	     	$_face['face']=$_faces['tg_face'];
		    	     }
		    	     $_html=array();
		    	     $_html['username']=$_COOKIE['username'];
			           if(isset($_COOKIE['username'])){
				       echo '<div class="return"><a href="member.php" class="return1"> <img src="'.$_face['face'].'" id="member" /></a>';
				       echo '<div class="personcenter"><ul class="personcenter1"><li><a href="member.php">';
				       echo $_html['username'];
				       echo '</a></li>';
				       echo '<li><a href="logout.php">退出登录</a></li></ul></div></div>';
				       echo '<div class="login2"><a href="#" class="logina" id="register">注册</a></div>';
			           }else{
				       echo '<div class="login1"><a href="#" class="logina" id="img">登录</a>
			          </div><div class="login2"><a href="#" class="logina" id="register">注册</a></div>';
			            }
			          ?>   
			        </div>
			     <div id="reg">
		           <h2>学员注册</h2>
		           <form method="post" name="register" action="register.php?action=register" id="register1">
		               <input type='hidden' name="uniqid" value="<?php echo $_uniqid;?>" />
		               <div>
		           <dl>
		           <dd> 用  户  名：<input type="text" name="username" class="text" /></dd>
		           <dd> 登陆密码：<input type="password" name="password" class="text" /></dd>
		           <dd> 确认密码：<input type="password" name="notpassword" class="text" /></dd>
		           <dd> 验证问题: <input type="text" name="question" class="text" /></dd>
		           <dd> 验证回答: <input type="text" name="answer" class="text" /></dd>
		           <dd> 性&nbsp;别：<input type="radio" name="sex" value="男" checked="checked" />男<input type="radio" name="sex" value="女" />女</dd>
		           <dd> 电子邮件：<input type="text" name="email" class="text" /></dd>
		           <dd>Q&nbsp;Q：<input type="text" name="qq" class="text" /></dd>
		           <dd><input type="submit" class="button" value="注册" /></dd>
		           </dl>
		               </div>
		           </form>
		       </div>
			  
		  </div>
		  
		</div>
<div class="container1">
	  <div class="bodyz">
	    <div class="bodyx">
	        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="840" height="580"
	             
	             data-setup="{}">
	              <source src="video/<?php echo $_html_video['workname']; ?>" type='video/mp4' />
	              <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
	              <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
	        </video>
	    </div>
	  </div>
	
	  <div class="bottom_bg">
		     <div class="bottom_left">
		        <ul class="bottom_tittle">
		        	<li id="tittle1">评论</li>
		        	<li id="tittle2">问答</li>
		        	<li id="tittle3">作业</li>
		        </ul>
		     	<div class="left_comment bleft" id="left1" >
		     		<form action="video-detail.php?action=yes" method="post">
			     		<div class="publish" id="change" onclick="addClass()">
			     		   <textarea class="publishin" name="publishin" onblur="onblur1()"> </textarea>	
			     		</div>
			     		<div class="publish_submit">
			     			<input value="发表评论" type="submit" class="submit" />
			     		</div>
		     	    </form>
		     	
	         <!--        <br style="clear:both;" /> -->
		     	    <div class="publish_comment">

		     	    	<?php
		     	    	    $_clean = array();
		     	    	    echo '<div class="comment_a">';
							$_comment = _query("SELECT * FROM comment WHERE workname='{$_COOKIE['workname']}' ORDER BY time DESC limit 5");
							while(!!$_comments = _fetch_array_list($_comment)){
								$_clean['username'] = $_comments['username'];
								$_clean['comment'] = $_comments['comment'];
								$_clean['time'] = $_comments['time'];
								//获取头像
								$_user = _query("SELECT * FROM tg_user WHERE tg_username='{$_clean['username']}' limit 1");
								$_users = _fetch_array_list($_user);
								$_clean['face'] = $_users['tg_face'];		
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
					     	}
					     	echo '</div>';
					    ?>
		     	    </div>
		     	    <div id="Pagination"></div>
			     	    <div class="publish_comment1" style="display:none;">
			     	    <?php
				     	    //获取评论
			     	        $_i=0;
							$_comment = _query("SELECT * FROM comment WHERE workname='{$_COOKIE['workname']}' ORDER BY time DESC");
							while(!!$_comments = _fetch_array_list($_comment)){
							$_clean['username'] = $_comments['username'];
							$_clean['comment'] = $_comments['comment'];
							$_clean['time'] = $_comments['time'];
							//获取头像
							$_user = _query("SELECT * FROM tg_user WHERE tg_username='{$_clean['username']}' limit 1");
							$_users = _fetch_array_list($_user);
							$_clean['face'] = $_users['tg_face'];
							$_i+=1;
							if(($_i%5)==0){
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
					        
			     	    ?> 				     	    
			     	     
			     	    </div><!--由于PHP代码所需-->
			     	 </div>  
		     	
		     	<div class="left_question bleft" id="left2" style="display:none;">
		     		<div class="publish">
		     			<textarea class="publishin"></textarea>
		     		</div>
		     		<div class="publish_submit">
		     			<input value="发布" type="submit" class="submit"></input>
		     		</div>
		     		<div class="publish_question">
		     			<div class="respond_a">
		     				<div class="question_img">
		     				</div>
		     				<div class="question_name">
		     				</div>
		     				<div class="question_content">
		     				</div>
		     				<div class="question_time">	
		     				</div>
		     			</div>
		     		</div>
		     	</div>
		     	<div class="left_note belft1" id="left3" style="display:none;">
		     	   <div class="homework">
		     	   	  作业1：请观看相关课程
		     	   </div>
		     	   <div class="homework">
		     	   	  作业2：课后练习写字姿势
		     	   </div>
		     	   <div class="homework">
		     	   	  作业3：请模仿该视频中写《黄鹤楼》
		     	   </div>
		     	   <div class="clerk">
		     	   	  <div class="clerk_photo">
		     	   	  	 选择图片
		     	   	  </div>
		     	   	  <div class="clerk_up">
		     	   	  	 上传
		     	   	  </div>
		     	   </div>
		     	</div>
		     </div>
		     <div class="bottom_right">
		     	<div class="class_about">
		     	    相关课程
		     	</div>
		     	<div class="example_about">
		     	<?php
                  $_other = _query("SELECT * FROM tg_vidio WHERE type='楷书' ORDER BY tg_time DESC limit 3");
					while(!!$_others = _fetch_array_list($_other)){
						$_clean['o_woknme'] = $_others['woknme'];
						$_clean['o_img'] = $_others['img'];
						$_clean['o_id'] = $_others['id'];
						$_clean['o_content'] = $_others['content'];
						echo '<a href="?id='.$_clean['o_id'].'"><img src="videoface/'.$_clean['o_img'].'" /></a>
		     		          <div class="explain">'.$_clean['o_content'].'
		     		          </div>';
				    }
		     	?>		  
		     	</div>   	
		     </div>
	        </div>
	  </div>

<div class="shuoming"> 
</div>

</body>
</html>