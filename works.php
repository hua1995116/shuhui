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
define('SCRIPT', 'works');
//引用公共文件
require 'includes/common.inc.php';

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
<script type="text/javascript" src="js/artDialog.js?skin=blue"></script>
<script type="text/javascript" src="js/loginstyle.js"></script>

<link rel="stylesheet" type="text/css" href="css/head.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<script type="text/javascript" src="js/header.js"></script>
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
<?php if(isset($_COOKIE['username'])){
          require 'includes/add.php';
      }    
?>
<?php require 'includes/header.php';    
?>

<div class="container1">
  <?php require 'includes/head.php';
  ?>
  <div class="bodyz">
       <div class="bodyztop">
              <div class="topin">
                  <div class="biaoti">
              	    课程安排-楷书
              	  </div>
              </div>
       </div>
       <div class="bodyx">
          <?php 
            $i=0;          
            $_result = _query("SELECT * FROM tg_vidio WHERE type = '楷书' ORDER BY tg_time DESC LIMIT 5");     
            while (!!$_rows = _fetch_array_list($_result)) {
      	    $_workehtml = array();	
      	    $_html['id'] = $_rows['id'];
            $_workehtml['woknme'] = $_rows['woknme'];
            $_workehtml['fromuser']=$_rows['fromuser'];
            $_workehtml['img'] = $_rows['img'];
            $_workehtml['content'] = $_rows['content'];
            $_html['username']=$_COOKIE['username'];
            $_workehtml=_html($_workehtml);
            $i+=1;
          ?>    
       <a href="video-detail.php?id=<?php echo$_html['id']?>"><div class="box1">
              <div class="boxtop">   
                  <img src="videoface/<?php echo $_workehtml['img'];?>" class="boxtopimg">
              </div>

            	<div class="boxbottom">
                   <div class="boxbottom_left">
                      <a href="###"><div class="works_name"><?php echo $_workehtml['woknme']?></div></a>
                   </div> 
                   <div class="boxbottom_right">
                      <?php
                        $_rows=_fetch_array("SELECT user,worksname FROM myclass WHERE user='{$_COOKIE['username']}' AND worksname='{$_workehtml['woknme']}' ");
                      if(isset($_COOKIE['username'])){
                       if($_rows['user']==$_COOKIE['username']){
                         echo '<input type="submit" value="已添加" class="addclasson addclassup"/>';
                       }else{
                      ?>
                       <a id="<?php echo $i;?>"><input type="submit" value="添加课程" class="addclassup " onclick="input_myclass(
                        '<?php echo $_workehtml['woknme'];?>','<?php echo $i;?>')" /></a>
                       <?php}
                      }?>
                    </div>       	     
            	</div>
            			   
         </div></a>
		           <?php }?>
       </div>
  </div>
</div>

</body>
</html>