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
define('SCRIPT', 'create_group');
//引用公共文件
require 'includes/common.inc.php';
if(!isset($_COOKIE['username'])){
    _alert_back('请先登录！');
}
if(isset($_COOKIE['username'])){
	$_rows=_fetch_array("SELECT tg_username FROM tg_user WHERE tg_username='{$_COOKIE['username']}' LIMIT 1");
	$_html=array();
	$_html['username']=$_rows['tg_username'];
}
if ($_GET['action'] == 'create') {
    //创建一个空数组，用来存放提交过来的合法数据
    $_clean = array();
    $_clean['name'] = $_POST['groupname'];
    $_clean['username'] = $_html['username'];
    $_clean['face'] = $_POST['groupface'];
    $_clean['type'] = $_POST['grouptype'];
    $_clean['limit_num'] = $_POST['grouppeople'];
    $_clean['content'] = $_POST['groupcontent'];
    _query(
    "INSERT INTO group_list (name,username,type,face,limit_num,content,time) VALUES ('{$_clean['name']}','{$_COOKIE['username']}','{$_clean['type']}','{$_clean['face']}',{$_clean['limit_num']},'{$_clean['content']}',NOW())"
    );
    if (_affected_rows() == 1) {
        $insert_id = mysql_insert_id();
        _query("INSERT INTO group_member (group_id,join_name,level,join_time) VALUES ($insert_id,'{$_COOKIE['username']}',1,NOW())");
        mysql_close();
        _session_destroy();
        _alert_back('恭喜你，创建成功！');
    }
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
 <script type="text/javascript" src="js/create_group.js"></script> 
<link rel="stylesheet" type="text/css" href="css/head.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
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
    <div class="contain">
        <?php
           require'includes/head.php';
        ?>
         <div id="bodyr">
            <div class="create_title">创建你自己的小组</div>
                <div class="create_form">
                	<form method="post" name="group" action="create_group.php?action=create">
                    	<ul>
                        	<li>
                            	<div class="group_note">小组名称</div>
                                <div class="groupname ">
                                   <input type="text" name="groupname" class="group_input" maxlength="10" />
                                </div>
                                <span class="groupname_msg"></span>
                            </li>
                                <li>
                                <div class="group_note">小组类型</div>
                                <div class="group_note1">
                                    <select class="grouptype" name="grouptype">
                                        <option value='0' selected>请选择小组类型</option>
                                        <option value='楷书'>楷书</option>
                                        <option value='隶书'>隶书</option>
                                        <option value='行楷'>行楷</option>
                                        <option value='行书'>行书</option>
                                        <option value='草书'>草书</option>
                                    </select>
                                </div>
                                <span class="groupname_msg"></span>
                            </li>
                            <li>
                            	<span class="group_note">小组头像</span>
                                <input type="hidden" name="groupface" value="groupface/1.jpg" id="groupimg" /><img src="groupface/1.jpg" alt="头像选择" id="groupface" class="shadow" />
                                <div class="choose_face">
                                	<dl>
                                	<?php foreach (range(1,48) as $num) {?>
                                		<dd>
                                			<img src="groupface/<?php echo $num?>.jpg" alt="groupface/<?php echo $num?>.jpg" title="头像<?php echo $num?>" />
                                		</dd>
                                <?php }?>
                                	</dl>
                                </div>
                            </li>
                            <li>
                            	<span class="group_note">人数上限</span>
                                <div class="group_note1">
                                    <select class="grouppeople" name="grouppeople">
                                    	<option value=0 selected>请选择小组上限人数（人）</option>
                                        <option value=5>5</option>
                                        <option value=10>10</option>
                                        <option value=20>20</option>
                                        <option value=50>50</option>
                                        <option value=100>100</option>
                                        <option value=150>150</option>
                                        <option value=200>200</option>
                                    </select>
                                 </div>
                                <span class="grouppeople_msg"></span>
                            </li>
                            <li>
                            	<script type="text/javascript">
        						function ismaxlength(obj){
        							var mlength=obj.getAttribute? parseInt(obj.getAttribute("maxlength")) : "";
        							if (obj.getAttribute && obj.value.length>mlength)
        								obj.value=obj.value.substring(0,mlength)
        						}
        						</script>
                            	<span class="group_note">小组简介</span>
                                <div class="group_note1">
                                     <textarea name="groupcontent" maxlength="100" onkeyup="return ismaxlength(this)" class="groupcontent"></textarea>
                                </div> 
                               <span class="groupcontent_msg"></span>
                            </li>
                            
                   <!--          <li>
                            	<span class="group_note">验&nbsp;证&nbsp;码:</span>
                                <input type="text" name="code" class="_code group_input" maxlength="4" />
                                <span class="code_msg"></span>
                                <img src="code.php" id="code" title="看不清？点击刷新" />
                                <span id="_change"><a href="#">换一张</a></span>
                            </li>  -->
                            <li>
                            	<input type="submit" class="group_sub" value="确认创建" />
                                <span class="sub_msg"></span>
                            </li>
                        </ul>
                    </form>
                </div>
            </div> 

         </div>    


</body>
</html>