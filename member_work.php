<?php

/**
Version1.0 Guest Test *
================================================ *
yc60 2010-2012 Copy *
http://www.yc60.com Web: *
*
================================================
Lee Author: *
*Date:2015-3-30
*/
define('SCRIPT', 'member_work');
require 'includes/common.inc.php';
//设置字符集编码
//获取用户信息
require 'includes/member_info.php';
if(isset($_COOKIE['username'])){
	$_rows=_fetch_array("SELECT * FROM tg_user WHERE tg_username='{$_COOKIE['username']}'");
	$_html=array();
	$_html['username']=$_rows['tg_username'];
	$_html['email']=$_rows['tg_email'];
	$_html['sex']=$_rows['tg_sex'];
	$_html['face']=$_rows['tg_face'];
	$_html['qq']=$_rows['tg_qq'];	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xht ml1/DT D/xht ml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>多媒体学习平台-个人中心</title>
<?php require 'includes/title.inc.php';?>
<script type="text/javascript" src="js/member.js"></script>
<link rel="stylesheet" type="text/css" href="css/memberinfo.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<script type="text/javascript" src="js/header.js"></script>
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
<?php require 'includes/header.php';
?>
<?php if(isset($_COOKIE['username'])){
          require 'includes/add.php';
      }    
?>
<div class="contain">
<?php require 'includes/member_inc.php';?>
		<div id="center">
			<div class="person">
			   <div class="person1">			 
                   我的互动
			    </div>
			</div>
                <div class="publish_comment">
		     	    	<?php
		     	    	    $_clean = array();
		     	    	    echo '<div class="comment_a">';
						    $_result=_query("SELECT * FROM tg_article WHERE tg_username='{$_COOKIE['username']}' limit 3");
							while(!!$_rows2=_fetch_array_list($_result)){
							    $_clean=array();
							    $_clean['title']=$_rows2['tg_title'];
							    $_clean['content']=$_rows2['tg_content'];
							    $_clean=_html($_clean);
							 $_rows=_fetch_array("SELECT * FROM tg_user WHERE tg_username='{$_COOKIE['username']}'"); 
						?>
						    <div class="centerdl">
							    <img src="<?php echo $_rows['tg_face'];?>" style="height:150px;width:150px;"/>
							    <dl>
								    <dd class="user"><?php echo $_html['username'];?>(<?php echo $_rows['tg_sex'];?>)</dd>
								    <dd>标题:	<?php echo $_clean['title'];?></dd>
								    <dd>我的回复:	<?php echo $_clean['content'];?></dd>
								</dl>
						    </div>
						<?php    
					     	}
					     	echo '</div>';
					    ?>
		     	    </div>
			    <div id="Pagination"></div>
			     	    <div class="publish_comment1" style="display:none;">
			     	    <?php
				     	    //获取评论
			     	        $_i=0;
						    $_result=_query("SELECT * FROM tg_article WHERE tg_username='{$_COOKIE['username']}'");
							while(!!$_rows2=_fetch_array_list($_result)){
							    $_clean=array();
							    $_clean['title']=$_rows2['tg_title'];
							    $_clean['content']=$_rows2['tg_content'];
							    $_clean=_html($_clean);
							    $_i+=1;
									if(($_i%3)==1){
										echo '<div class="comment_a">';
									}
				     	?>
							    <div class="centerdl">
								    <img src="<?php echo $_rows['tg_face'];?>" style="height:150px;width:150px;"/>
								    <dl>
									    <dd class="user"><?php echo $_html['username'];?>(<?php echo $_rows['tg_sex'];?>)</dd>
									    <dd>标题:	<?php echo $_clean['title'];?></dd>
									    <dd>我的回复:	<?php echo $_clean['content'];?></dd>
									</dl>
							    </div>
				     	 <?php
				     	    if(($_i%3)==0){
					     		echo '</div>';
					     	}
					        }
					        
			     	    ?> 				     	    
			     	    </div><!--由于PHP代码所需-->
			   
			
		</div>
			</div>
</div>

</body>
</html>