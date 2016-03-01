<?php
define('SCRIPT', '');
//引用公共文件
require 'includes/common.inc.php';
header('Content-Type: text/html; charset=utf-8');
if($_GET['action']=='delete'){
	_query("DELETE FROM tg_article WHERE tg_title='{$_POST['name']}' LIMIT 1");
	if(_affect_row()==1){
		_close();
		//跳转
		_location('已删除', 'admin_content.php');}
}


?>

<html>
<head>
<title>管理员</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF8">
<?php require 'includes/title.inc.php';?>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/contain.css"/>
    <script type="text/javascript" src="js/header.js"></script>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.php">首页</a></li>
               
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
       
                <li><a href="#">退出</a></li>
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
            <form name="myform" id="myform" method="post" action="admin_content.php?action=delete">
       
<div id="center">
        <?php 
            $_result=_query("SELECT * FROM tg_article");
            while(!!$_result_video = _fetch_array_list($_result)){
        	$_workehtml = array();
        	$_workehtml['tg_title'] = $_result_video['tg_title'];
        	$_workehtml['tg_username'] = $_result_video['tg_username'];
        	$_workehtml['tg_content'] = $_result_video['tg_content'];
        	$_workehtml['tg_readcount'] = $_result_video['tg_readcount'];
        	$_workehtml['id'] = $_result_video['id'];
        	$_workehtml['tg_commendcount'] = $_result_video['tg_commendcount'];
        	$_workehtml['tg_date'] = $_result_video['tg_date'];
        ?> 
      
            <dl>
	                 <dd><?php echo$_workehtml['tg_content'];?>
	                </dd>
	                <br/>
	 				<br/>
	          		<dd><?php echo $_workehtml['tg_username']; ?></dd>
	            	<dd> <input type="hidden" value='<?php echo $_workehtml['tg_title'];?>' name="name" />
						 <input type="submit" value="删除" id="delete" /></dd>			           									
			</dl> 
                            
        <?php }?>
        		
  
               <?php $_allnum=mysql_num_rows(mysql_query("SELECT * FROM tg_article"));?>
                    <div class="list-page"> 共<?php echo $_allnum?> 条 1/1 页</div>
              </div>
      </form>
  </div>
         
    </div>
    <!--/main-->
</div>

</body>
</html>