<?php

/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-5-27
*/
define('SCRIPT', 'adminworks');
//引用公共文件
require 'includes/common.inc.php';
header('Content-Type: text/html; charset=utf-8');
if($_GET['action']=='delete'){
	_query("DELETE FROM fruit WHERE name='{$_POST['name']}' LIMIT 1");
	if(_affect_row()==1){
		_close();
		//跳转
		_location('已删除', 'adminworks.php');}
}
?>

<html>
<head>
<title>管理员</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF8">
<?php require 'includes/title.inc.php';?>
<link rel="stylesheet" type="text/css" href="css/common.css"/>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<script type="text/javascript" src="js/header.js"></script>


</head>

<body>     
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index1.php">首页</a></li>
               
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
       
                <li><a href="member.php">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="admin.php"><i class="icon-font">&#xe008;</i>作品审查</a></li>
                        <li><a href="adminworks.php"><i class="icon-font">&#xe005;</i>作品管理</a></li>
                        <li><a href="admin_video.php"><i class="icon-font">&#xe006;</i>视频管理</a></li>
                        <li><a href="admin_content.php"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        
          
                    </ul>
                </li>
    
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="#" method="post">
                    <table class="search-tab">
                        <tr>
                           
                         
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
<div class="result-wrap">
            <form name="myform" id="myform" method="post" action="adminworks.php?action=delete">
                <div class="result-title">
                    <div class="result-list">
                        <a href="insert.html"><i class="icon-font"></i>新增作品</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>标题</th>
                            <th>审核状态</th>
                            <th>点击</th>
                            <th>发布人</th>
                            <th>更新时间</th>
                            <th>评论</th>
                            <th>操作</th>
                        </tr>

                        <?php
                            $_clean = array();
                            echo '<div class="comment_a">';
                            $_result = _query("SELECT * FROM fruit ORDER BY time ");
                            while(!!$_result_fruit = _fetch_array_list($_result)){
                            $_workehtml = array();
                            $_workehtml['name'] = $_result_fruit['name'];
				        	$_workehtml['onwer'] = $_result_fruit['onwer'];
				        	$_workehtml['admin'] = $_result_fruit['admin'];
				        	$_workehtml['time'] = $_result_fruit['time'];
				        	$_workehtml['id'] = $_result_fruit['id'];
				        	$_workehtml['clicknum'] = $_result_fruit['clicknum'];
                        ?>
                          
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="59" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="0" type="text">
                            </td>
                            <td><?php echo $_workehtml['id'];?></td>
                            <td title="<?php echo $_workehtml['name'];?>"><a target="_blank" href="#" title="<?php echo $_workehtml['name'];?>"><?php echo $_workehtml['name'];?></a>
                            </td>
                            <td><?php echo $_workehtml['admin'];?></td>
                            <td><?php echo $_workehtml['clicknum'];?></td>
                            <td><?php echo $_workehtml['onwer'];?></td>
                            <td><?php echo $_workehtml['time'];?></td>
                            <td></td>
                            <td>                              
            					
								   <input type="hidden" value='<?php echo $_workehtml['name'];?>' name="name" />
								   <input type="submit" value="删除" id="delete" />								                         		 				
                               
                            </td>           
                        </tr> 
                        <?php    
                            }
                            echo '</div>';
                        ?>
       </table>
       <?php $_allnum=mysql_num_rows(mysql_query("SELECT * FROM fruit"));?>
                    <div class="list-page"> 共<?php echo $_allnum?> 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>

</body>
</html>