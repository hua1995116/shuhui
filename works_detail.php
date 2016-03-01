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
define('SCRIPT', 'works_detail');
//引用公共文件
require 'includes/common.inc.php';
if($_GET['id']){
	$_rows = _fetch_array("SELECT * FROM fruit WHERE id='{$_GET['id']}' ORDER BY time");
	$_wd_html=array();
	$_wd_html['time']=$_rows['time'];
	$_wd_html['clicknum']=$_rows['clicknum'];
	$_wd_html['work']=$_rows['work'];
	$_wd_html['type']=$_rows['type'];
	$_scnum=mysql_num_rows(_query("SELECT worksname FROM tg_sc WHERE worksname='{$_rows['work']}'"));
	
	_query("UPDATE fruit SET clicknum=clicknum+1 WHERE id='{$_GET['id']}'");
	
}

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
<script type="text/javascript" src="js/artDialog.js?skin=blue"></script>
<script type="text/javascript" src="js/loginstyle.js"></script>
<link rel="stylesheet" type="text/css" href="css/head.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link href="css/video-js.css" rel="stylesheet" type="text/css">
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
    <div class="bodyztop">
             <div class="topin">
                    <div class="biaoti">
                         <a href="video-worksk.php">作品欣赏</a>\
                         <?php 
                         if($_wd_html['type']=='楷书'){echo '<a href=video-worksk.php>'.$_wd_html['type'].'</a>' ;}
                         if($_wd_html['type']=='隶书'){echo '<a href=video-worksl.php>'.$_wd_html['type'].'</a>' ;}
                         if($_wd_html['type']=='行书'){echo '<a href=video-worksh.php>'.$_wd_html['type'].'</a>' ;}
                         if($_wd_html['type']=='行楷'){echo '<a href=video-workshk.php>'.$_wd_html['type'].'</a>' ;}
                         if($_wd_html['type']=='草书'){echo '<a href=video-worksc.php>'.$_wd_html['type'].'</a>' ;}
                         ?>
                         
                         \详细内容  
                    </div>
             </div>   
    </div>
    
    <div class="top">
        <ul>
        <?php $_rows = _fetch_array("SELECT * FROM fruit WHERE id='{$_GET['id']}' ORDER BY time"); ?>
            <li>
              <span>  发布时间:<?php echo $_rows['time'];?> </span> 
         
            </li>
            <li>
                <span>点击量:<?php echo $_rows['clicknum'];?></span>
            </li>
            <li>
               <span> 收藏量:<?php echo $_scnum;?></span>
            </li>
            <li>
                关注此人
            </li>
        </ul>
    </div>
    <div class="bodyz">
         <div class="bodyx">
               <div class="name">
                   作品名称
               </div>
               <img src="works/<?php echo $_wd_html['work']?>" style="width:400px;height:300px" />
             
         </div>
           <div class="content">
               <div class="info">
                 作品简介
               </div>  
               <div class="content1">
                   王羲之草书作品欣赏《都下帖》又称《桓公当阳帖》麻纸摹本，与《秋月帖》合装为一卷（七月都下帖）。纵27.7厘米。5行，45字。永和十二年（356）书。与《右军书记》相校，此帖“仁”字下裁去27字。钤有绘“御府宝绘”、“群玉中秘”、“项元汴印”、“安氏仪周书画之章”、“姑熟曹氏珍玩”、“乾隆鉴赏”等。台北故宫博物院藏。
               </div>
           </div>  
    </div>
    <div class="about_works">
        <div class="about_works_tittle">
            相关课程
        </div>
        <div class="example_about">
        <?php
                  $_other = _query("SELECT * FROM tg_vidio WHERE type='{$_wd_html['type']}' ORDER BY tg_time DESC limit 3");
					while(!!$_others = _fetch_array_list($_other)){
						$_clean['o_woknme'] = $_others['woknme'];
						$_clean['o_img'] = $_others['img'];
						$_clean['o_id'] = $_others['id'];
						$_clean['o_content'] = $_others['content'];
						echo '<a href="video-detail.php?id='.$_clean['o_id'].'"><img src="videoface/'.$_clean['o_img'].'" /></a>
		     		          <div class="explain">'.$_clean['o_content'].'
		     		          </div>';
				    }
		     	?>		      
        </div>
    </div>
</div>

</body>
</html>