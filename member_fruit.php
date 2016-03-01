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
define('SCRIPT', 'member_fruit');
require 'includes/common.inc.php';
//设置字符集编码
header('Content-Type: text/html; charset=utf-8');
//获取用户信息
require 'includes/member_info.php';
if(isset($_COOKIE['username'])){
	$_rows=_fetch_array("SELECT tg_username,tg_email,tg_sex,tg_face,tg_qq FROM tg_user WHERE tg_username='{$_COOKIE['username']}'");
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
<link rel="stylesheet" type="text/css" href="css/header.css">
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
			       我的成果
			    </div>
			    
			</div>
		    <div class="fabuwork">
		       <a href="member_works.php">
		           <div class="fabuwork_f">
		              发布作品
		           </div>
		       </a>
		    </div>	
			<div class="content_fruit">
			   	  <div class="publish_comment">
		     	    	<?php
		     	    	    $_clean = array();
		     	    	    echo '<div class="comment_a">';
							$_result = _query("SELECT * FROM fruit WHERE onwer='{$_COOKIE['username']}' AND admin='1' ORDER BY time limit 5");
							while(!!$_result_fruit = _fetch_array_list($_result)){
								$_row_group=_fetch_array("SELECT * FROM group_list WHERE id='{$_groups['group_id']}'");
						    	$_work = array();
						    	$_work['id'] = $_result_fruit['id'];
						    	$_work['name'] = $_result_fruit['name'];
						    	$_work['time'] = $_result_fruit['time'];
						?>
                            <ul class="fruit_ul">
			                    <li class="fruit_name"><a href="works_detail?id=<?php echo $_work['id'];?>"><?php echo $_work['name'];?></a></li>
							    <li class="fruit_time"><?php echo $_work['time'];?></li>
						    </ul>
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
							$_result = _query("SELECT * FROM fruit WHERE onwer='{$_COOKIE['username']}' AND admin='1' ORDER BY time ");
							while(!!$_result_fruit = _fetch_array_list($_result)){
								$_row_group=_fetch_array("SELECT * FROM group_list WHERE id='{$_groups['group_id']}'");
						    	$_work = array();
						    	$_work['id'] = $_result_fruit['id'];
						    	$_work['name'] = $_result_fruit['name'];
						    	$_work['time'] = $_result_fruit['time'];
							    $_i+=1;
									if(($_i%5)==1){
										echo '<div class="comment_a">';
									}
				     	?>
						     	 <ul class="fruit_ul">
					                 <li class="fruit_name"><a href="works_detail?id=<?php echo $_work['id'];?>"><?php echo $_work['name'];?></a></li>
									 <li class="fruit_time"><?php echo $_work['time'];?></li>
								 </ul>
				     	 <?php
				     	    if(($_i%5)==0){
					     		echo '</div>';
					     	}
					        }
					        
			     	    ?> 		     	    
			     	    </div><!--由于PHP代码所需-->

			</div>
		</div>
			</div>
</div>

</body>
</html>