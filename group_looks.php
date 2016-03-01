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
define('SCRIPT', 'group_looks');
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
<?php 
    require 'includes/title.inc.php';
?>
<link rel="stylesheet" type="text/css" href="css/head.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/group_looks.css">
<script type="text/javascript" src="js/header.js"></script>
</head>
<body>
<?php
   require'includes/header.php';
?>
<?php if(isset($_COOKIE['username'])){
          require 'includes/add.php';
      }    
?>
<div class="nav_title all_title">我的小组</div>
<div class="my_group">
	<ul>
		<?php
            if(!$_COOKIE['username']){
                echo '<div class="no_login">你还未<a href="#">登录</a>，登录可体验更多</div>';
            } else {
                if(!!$rs_my = ("SELECT * FROM group_member WHERE join_name='{$_COOKIE['username']}'")){
                    $rs_my_group = _query("SELECT * FROM group_member WHERE join_name='{$_COOKIE['username']}' LIMIT 6");
                    while($rows_my_group = _fetch_array_list($rs_my_group)){
                        $html_m_g = array();
                        $html_m_g['group_id'] = $rows_my_group['group_id'];
						$row_my_group_msg = _fetch_array("SELECT * FROM group_list WHERE id={$html_m_g['group_id']}");
						$html_m_g_m = array();
						$html_m_g_m['id'] = $row_my_group_msg['id'];
						$html_m_g_m['face'] = $row_my_group_msg['face'];
						$html_m_g_m['name'] = $row_my_group_msg['name'];
						$html_m_g_m['type'] = $row_my_group_msg['type'];
                        echo '
                            <li>
                                <a href="group.php?id='.$html_m_g_m['id'].'" class="my_face"><img src="'.$html_m_g_m['face'].'" alt="" />
                                </a>
                                <div class="my_name"><a href="group.php?id='.$html_m_g_m['id'].'" title="'.$html_m_g_m['name'].'">'
                                .$html_m_g_m['name'].'</a></div>
                                <div class="my_type">'.$html_m_g_m['type'].'</div>
                            </li>
                        ';
                    }
                } else {
					echo '<div class="no_group">你还未加入小组，快行动吧！</div>';
				}
            }
        ?>
    </ul>
</div>
<div class="_msgtitle2">热门小组</div>
<div class="hot_group">
	<ul>
    	<?php
        	$rs_hot_group = _query("SELECT * FROM group_list ORDER BY time DESC LIMIT 6");
			while($rows_hot_group = _fetch_array_list($rs_hot_group)){
				$html_hot = array();
				$html_hot['id'] = $rows_hot_group['id'];
				$html_hot['face'] = $rows_hot_group['face'];
				$html_hot['name'] = $rows_hot_group['name'];
				$html_hot['type'] = $rows_hot_group['type'];
				echo '
					<li>
						<a href="group.php?id='.$html_hot['id'].'" class="hot_face"><img src="'.$html_hot['face'].'" alt="" />
						</a>
						<div class="hot_name"><a href="group.php?id='.$html_hot['id'].'" title="'.$html_hot['name'].'">'
						.$html_hot['name'].'</a></div>
						<div class="hot_type">'.$html_hot['type'].'</div>
					</li>
				';
			}
		?>
    </ul>
</div>
<!-总小组-!>
<div class="_msgtitle3">小组</div>
<div class="group1">
	<ul>
    <?php
    $rs_group_work = _query("SELECT * FROM group_list WHERE type ='楷书' ORDER BY time DESC");
    $html_group_work = array();
    while (!!$rows_group_work = _fetch_array_list($rs_group_work)) {
		$html_group_work['id'] = $rows_group_work['id'];
        $html_group_work['face'] = $rows_group_work['face'];
        $html_group_work['name'] = $rows_group_work['name'];
        $html_group_work['type'] = $rows_group_work['type'];
        $html_group_work['content'] = $rows_group_work['content'];
		$html_group_work['time'] = $rows_group_work['time'];
        echo '
            <li>
                <a href="group.php?id='.$html_group_work['id'].'" class="groupface"><img class="shadow" src="'
                .$html_group_work['face'].'" alt="小组头像" /></a>
                <div class="groupname">
					<a href="group.php?id='.$html_group_work['id'].'">'.$html_group_work['name'].'</a>
				</div>
                <div class="grouptype">'.$html_group_work['type'].'</div>
				<div class="grouptime">'.$html_group_work['time'].'创建</div>
                <div class="groupcontent" title="'.$html_group_work['content'].'">'.$html_group_work['content'].'</div>
            </li>
        ';
    }
    ?>
    </ul>
</div>
</body>
</html>