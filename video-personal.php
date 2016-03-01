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
define('SCRIPT', 'video-personal');
//引用公共文件
require 'includes/common.inc.php';
/* if(isset($_COOKIE['username'])){
	$_rows=_fetch_array("SELECT tg_username FROM tg_user WHERE tg_username='{$_COOKIE['username']}' LIMIT 1");
	$_html=array();
	$_html['username']=$_rows['tg_username'];
}else{   
	_location('请先登录', index2);
} */
//点赞功能
if($_GET['action'] =='worksz'){
require 'includes/zan.inc.php';
}
//收藏功能
if($_GET['action'] =='workssc'){
require 'includes/sc.inc.php';
}
//上传视频功能
if($_GET['action']=='vidio'){
require 'includes/onload.php';
}
//取出视屏资源
$_result=_query("SELECT woknme,fromuser FROM tg_vidio ORDER BY tg_time");

?>	
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>作品欣赏</title>
<?php require 'includes/title.inc.php';
	  require 'includes/index.inc.php';
?>
<script type="text/javascript" src="js/artDialog.js?skin=black"></script>
<script type="text/javascript" src="js/loginstyle.js"></script>
<link rel="stylesheet" type="text/css" href="css/head.css">
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

<div class="container1">
  <?php require 'includes/head.php';
  ?>
  <div class="bodyz">
       <div class="bodyztop">
              <div class="topin">
                  <div class="biaoti">
              	     作品欣赏-楷书
              	  </div>
              </div>
       </div>
       <div class="bodyx">
          <?php 
      $_workehtml = array();
      while (!!$_rows = _fetch_array_list($_result)) {
      $_workehtml['woknme'] = $_rows['woknme'];
      $_workehtml['fromuser']=$_rows['fromuser'];
      $_html['username']=$_COOKIE['username'];
      $_workehtml=_html($_workehtml);
          ?>    
       <div class="box1">

              <div class="boxtop">
				          <a href="vidio/<?php echo $_html['woknme'];?>">作品名:<?php echo $_workehtml['woknme']?></a>
                  <img src="images/city.png" class="boxtopimg">
              </div>

            	<div class="boxbottom">
            	     <div class="author">
            	       	 作者:<div id="othername">
            	       	 	<form method="post" action="othermember.php?action=name">
							<input type="hidden" value="<?php echo  $_workehtml['fromuser'];?>" name="name1" />
							<input type="submit" value="<?php echo  $_workehtml['fromuser'];?>" />
							</form>
            	       	 	 </div>
            	     </div>
            	</div>
            	     <div class="collect"> 
            	       	<form method="post" name="sc" action="works.php?action=workssc" id="works">
            	       	   <dl>
            	       	    <dd><input type="hidden" name="sc_um" class="text" value='<?php echo $_COOKIE['username'];?>'  />
            	       	    <dd><input type="hidden" name="worksname" class="text" value='<?php echo $_workehtml['woknme'];?>' /></dd>

            	       	   	<?php
            	           	$_rows=_fetch_array("SELECT scuser,worksname FROM tg_sc WHERE scuser='{$_COOKIE['username']}' AND worksname='{$_workehtml['woknme']}' ");
            	           	if($_rows['scuser']==$_COOKIE['username']){
            	       		  echo '已收藏';
            	       	    }
            	       	    else{
            	       		   echo '<dd><input type="submit" value="收藏" name="sc_sm" /></dd>';
            	       	    }
            	       	   ?>
            	       	   </dl>
            	       	</form>
            	     </div>

            	     <div class="good">
            	       	 <form method="post" name="sc" action="works.php?action=worksz" id="works">
            	       	   <dl>
            	       	    <dd><input type="hidden" name="zan_um" class="text" value='<?php echo $_COOKIE['username'];?>'  />
            	       	    <dd><input type="hidden" name="worksname" class="text" value='<?php echo $_workehtml['woknme'];?>' /></dd>
            	       	    <?php
            	       	    $_rows=_fetch_array("SELECT zanuser,worksname FROM tg_zan WHERE zanuser='{$_COOKIE['username']}' AND worksname='{$_workehtml['woknme']}' ");
            	       	    if($_rows['zanuser']==$_COOKIE['username']){
            	       		  echo '已赞';
            	       	    }
            	       	    else{
            	       		   echo '<dd><input type="submit" value="赞" name="zan_sm" /></dd>';
            	       	    }
            	       	    ?>
            	       	  </dl>
            	       	</form>
            	     </div>
            	</div>
       </div>
				   <?php }?>
       </div>
  </div>
</div>

</body>
</html>