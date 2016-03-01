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
error_reporting(E_ALL^E_NOTICE);
header('Content-Type: text/html; charset=utf-8');
//定义一个常量用来制定本页的内容
define('SCRIPT', 'index');
//引用公共文件
require 'includes/common.inc.php';

if(isset($_COOKIE['username'])){
	$_rows=_fetch_array("SELECT tg_username FROM tg_user WHERE tg_username='{$_COOKIE['username']}' LIMIT 1");
	$_html=array();
	$_html['username']=$_rows['tg_username'];
}
$today =  date("m-d");
$today1 =  date("m-d",strtotime("-1 day"));
$today2 =  date("m-d",strtotime("-2 day"));
$today3 =  date("m-d",strtotime("-3 day"));
$today4 =  date("m-d",strtotime("-4 day"));

?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xht ml1/DT D/xht ml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>多媒体学习平台-首页</title>
<?php require 'includes/title.inc.php';
	  require 'includes/index.inc.php';
?>


<script type="text/javascript" src="js/loginstyle.js"></script>
<script type="text/javascript" src="js/index2.js"></script>
<link rel="stylesheet" type="text/css" href="css/head.css" />
<link rel="stylesheet" type="text/css" href="css/header1.css" />

<link rel="stylesheet" href="css/demo.css">
<script src="js/modernizr.custom.34807.js"></script>
<script type="text/javascript" src="js/header.js"></script>
<script src="js/min/jquery-v1.10.2.min.js" type="text/javascript"></script>
<script src="js/min/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
<script src="js/min/jquery-finger-v0.1.0.min.js" type="text/javascript"></script>
<!--Include flickerplate-->
<link href="css/flickerplate.css"  type="text/css" rel="stylesheet">
<script src="js/min/flickerplate.min.js" type="text/javascript"></script>
<!--Execute flickerplate-->
<script>
	$(document).ready(function(){
		
		$('.flicker-example').flicker();
	});
	</script>

</head>
<body>


	
<?php if(isset($_COOKIE['username'])){
          require 'includes/add.php';
      }    
?>

<?php require'includes/header1.php';
?>
<div class="flicker-example" data-block-text="false">
  <ul>
    <li data-background="images/1.jpg">
      <div class="flick-title">简约</div>
      <div class="flick-sub-text">来创造一份属于你的书法</div>
    </li>
    <li data-background="images/2.jpg">
      <div class="flick-title">快速</div>
      <div class="flick-sub-text">来这里你便能快速学会一种书法</div>
    </li>
    <li data-background="images/3.jpg">
      <div class="flick-title">繁多</div>
      <div class="flick-sub-text">你可以看到多种多样的作品</div>
    </li>
  </ul>
</div>
<div class="body1">
	<div class="tittle_shows">
		<div class="tittle_shows_img">
			<img src="images/名家秀.png">
		</div>
		
	</div>
	<div class="shows_content">
		<div class="col-md-8">
			<div class="shows_content_left" id="t1">
			 	<img src="images/index/1.jpg" class="shows_img1">
				<img src="images/index/2.jpg" class="shows_img2">
				<img src="images/index/3.jpg" class="shows_img3">
			</div>
			<div class="shows_content_left" id="t2" style="display:none">
				<img src="images/index/4.jpg" class="shows_img1">
				<img src="images/index/5.jpg" class="shows_img2">
				<img src="images/index/6.jpg" class="shows_img3">
			</div>
		</div>
		<div class="col-md-3">
			<div class="shows_content_right">
				<ul class="shows_content_ul1">
					<li id="time1" class="actived">
						<?php echo date("m-d")."<br>"; ?>
					</li>
					<li>
						|
					</li>
					<li id="time2">
						<?php echo date("m-d",strtotime("-1 day"))."<br>"; ?>
					</li>
					<li>
						|
					</li>
					<li  id="time3">
						<?php echo date("m-d",strtotime("-2 day"))."<br>"; ?>
					</li>
					<li>
						|
					</li>
					<li  id="time4">
						<?php echo date("m-d",strtotime("-3 day"))."<br>"; ?>
					</li>
					<li>
						|
					</li>
					<li  id="time5">
						<?php echo date("m-d",strtotime("-4 day"))."<br>"; ?>
					</li>
				</ul>
				<ul class="shows_content_ul2">
					<li>
						楷书
					</li>
					<li>
						|
					</li>
					<li>
						行楷
					</li>
					<li>
						|
					</li>
					<li>
						行书
					</li>
					<li>
						|
					</li>
					<li>
						草书
					</li>
					<li>
						|
					</li>
					<li>
						隶书
					</li>
				</ul> 
			</div>
		</div>
	</div>
</div>
<div class="body2">
	<div class="body2_tittle">
		<img src="images/人气学员.png">
	</div>
	<div class="body2_content">
		<?php 
		$i = 1;
			$_RESULT =  _query("SELECT * FROM tg_user LIMIT 12");
			while(!!$_userHtml = _fetch_array_list($_RESULT)){
				
		 ?>
		<div class="body2_div<?php echo $i; ?> body2_div">
			<div class="body2_tip">
				<?php echo $_userHtml['tg_autograph']; ?>
			</div>
			<a href="#">
				<img src="<?php echo $_userHtml['tg_face']; ?>">
			</a>
			<br>
		</div>
		<?php $i++;} ?>
		

		
	</div>
</div>
<div class="body3">
	<div id="container">
    
    	<div class="body3_tittle">
    		<img src="images/精品课程.png">
    	</div>
	    <div id="itemlist">
	    <?php 
	    	$_suju = _query("SELECT img FROM tg_vidio LIMIT 5");
	    	$_dataBase = array();
	    	$j = 1;
	    	while(!!$_data = _fetch_array_list($_suju)){
	    		$_dataBase[$j] = $_data['img'];
	    		$j++;
	    	}
	     ?>
	      <img src="videoface/<?php echo $_dataBase[1]; ?>" alt="Busby" id="busby" />
	      <img src="videoface/<?php echo $_dataBase[2]; ?>" alt="Gridly" id="gridly" />
	      <img src="videoface/<?php echo $_dataBase[3]; ?>" alt="Reco" id="reco" />
	      <img src="videoface/<?php echo $_dataBase[4]; ?>" alt="Theblog" id="theblog" />
	      <img src="videoface/<?php echo $_dataBase[5]; ?>" alt="Ccc"id="ccc" />
	    </div>
	    
	    <div id="itemdescription">
	      <span data-for="busby"><a href="#">楷书教学视频</a></span>
	      <span data-for="gridly"><a href="#">行书教学视频</a></span>
	      <span data-for="reco"><a href="#">行楷教学视频</a></span>
	      <span data-for="theblog"><a href="#">草书教学视频</a></span>
	      <span data-for="ccc"><a href="#">楷书教学视频2</a></span>
	    </div>
  </div>  
  
  <script> if(!Modernizr.csstransforms3d) document.getElementById('information').style.display = 'block'; </script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
  <script src="js/demo.js"></script>
  <script>
  $(document).ready(function(){

  	time1 = $("#time1");
  	time2 = $("#time2");
  	time3 = $("#time3");
  	time4 = $("#time4");
  	time5 = $("#time5");
 	t1 = $("#t1");
 	t2 = $("#t2");
 	t3 = $("#t3");
 	t4 = $("#t4");
 	t5 = $("#t5");

 	time1.click(function(){
 		t1.css({
 			display:'block'
 		});
 		time1.css('background','#ddd');
 		time2.css('background','#fff');
 		time3.css('background','#fff');
 		time4.css('background','#fff');
 		time5.css('background','#fff');
 		t2.css('display','none');
 		t3.css('display','none');
 		t4.css('display','none');
 		t5.css('display','none');
 	});
  	time2.click(function(){
 		t2.css({
 			display:'block'
 		
 		});
 		time2.css('background','#ddd');
 		time1.css('background','#fff');
 		time3.css('background','#fff');
 		time4.css('background','#fff');
 		time5.css('background','#fff');
 		t1.css('display','none');
 		t3.css('display','none');
 		t4.css('display','none');
 		t5.css('display','none');
 	});
  	time3.click(function(){
 		t3.css('display','block');
 		time3.css('background','#ddd');
 		time2.css('background','#fff');
 		time1.css('background','#fff');
 		time4.css('background','#fff');
 		time5.css('background','#fff');
 		t2.css('display','none');
 		t1.css('display','none');
 		t4.css('display','none');
 		t5.css('display','none');
 	});
  	time4.click(function(){
 		t4.css('display','block');
 		time4.css('background','#ddd');
 		time2.css('background','#fff');
 		time3.css('background','#fff');
 		time1.css('background','#fff');
 		time5.css('background','#fff');
 		t2.css('display','none');
 		t3.css('display','none');
 		t1.css('display','none');
 		t5.css('display','none');
 	});
  	time5.click(function(){
 		t5.css('display','block');
 		time5.css('background','#ddd');
 		time2.css('background','#fff');
 		time3.css('background','#fff');
 		time4.css('background','#fff');
 		time1.css('background','#fff');
 		t2.css('display','none');
 		t3.css('display','none');
 		t4.css('display','none');
 		t1.css('display','none');
 	});
  });
  </script>
</div>
<div class="body4">
	<div class="body4_center">
		欢迎你的加入
	</div>
</div>
<div class="body5">
	<div class="body5_top">
		<div class="body5_tittle">
			友情链接
		</div>
		<div class="body5_content">
			<ul>
				<li>
					<a href="#">百度</a>
				</li>
				<li>
					<a href="#">新浪</a>
				</li>
				<li>
					<a href="#">腾讯</a>
				</li>
				<li>
					<a href="http://www.freehead.com/">中国书法网</a>
				</li>
				<li>
					<a href="http://www.shufa.cn/">书法网</a>
				</li>
				<li>
					<a href="http://www.shxw.com/">中华书法网</a>
				</li>
				<li>
					<a href="http://www.china-shufajia.com/html/index.html">中国书法家网</a>
				</li>
				<li>
					<a href="http://www.yingbishufa.com/">中国硬笔</a>
				</li>
				<li>
					<a href="#"></a>
				</li>
				<li>
					<a href="#"></a>
				</li>
			</ul>
		</div>
	</div>
	<div class="body5_up">
		<div class="body5_tittle">
			关于我们
		</div>
		<div class="body5_content">
			<ul>
				<li>
					<a href="#">关于书会</a>
				</li>
				<li>
					<a href="#">联系我们</a>
				</li>
				<li>
					<a href="#">加入我们</a>
				</li>
				<li>
					<a href="#">媒体报道</a>
				</li>
				<li>
					<a href="#">版权声明</a>
				</li>
				<li>
					<a href="#">网站地图</a>
				</li>
				
			</ul>
		</div>
		<div class="ico_banquan">
		 版权所有©書會备案号：浙ICP备00000000号 
		</div>
		
	</div>
	<div class="right_body5">
		<div>
			<img src="images/erweima.png">
		</div>
	</div>
	
</div>
</body>
</html>