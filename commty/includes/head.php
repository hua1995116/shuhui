<!--导航-->
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script>
		$(function(){
			$(window).scroll(function(){
			nav_height = $("#list").offset().top;//获取内容高  
			screenheight = window.screen.availHeight; //获取屏幕高
			var scr_height = $(window).scrollTop(); 					
			if(scr_height>=100){
				$("#list").css("position","fixed");
								
			}
			else{
			$("#list").css("position","relative");
							}				
		})	
	})
</script>
	<div id="list">
		<ul class="dhone">
			<li class="ddhh1">
			     <a href="../index.php">&nbsp首页</a>
			</li>
			<li class="ddhh2">
			     <a href="../video-worksk.php">&nbsp作品欣赏</a>
			     <div class="none2">
			       <div class="cover2"> </div>
			       <ul>
			     	   <div class="none2head1">&nbsp优秀作品</div>
			     	   <li><a href="../video-worksk.php">楷书</a></li>
			     	   <li><a href="../video-worksl.php">隶书</a></li>
			     	   <li><a href="../video-workshk.php">行楷</a></li>
			     	   <li><a href="../video-worksh.php">行书</a></li>
			     	   <li><a href="../video-worksc.php">草书</a></li>
			     	   <li></li>
			     	   <li></li>
			     	   <li></li>
			     	   <div class="none2head2">&nbsp名家作品</div>
			     	   <li><a href="#">楷书</a></li>
			     	   <li><a href="#">行楷</a></li>
			     	   <li><a href="#">行书</a></li>
			     	</ul>
			     </div>
			</li>
			<li class="ddhh3">
			     <a href="../works.php">&nbsp课程安排</a>
			     <div class="none3">
			       <div class="cover3"> </div>
			       <ul>
			     	   <div class="none3head1">&nbsp视屏课程</div>
			     	   <li><a href="../works.php">楷书</a></li>
			     	   <li><a href="../worksl">隶书</a></li>
			     	   <li><a href="../workshk">行楷</a></li>
			     	   <li><a href="../worksx">行书</a></li>
			     	   <li><a href="../worksc">草书</a></li>
			     	   <li></li>
			     	   <li></li>
			     	   <li></li>
			     	   <div class="none3head2">&nbsp教案教程</div>
			     	   <li><a href="#">楷书</a></li>
			     	   <li><a href="#">行楷</a></li>
			     	   <li><a href="#">行书</a></li>
			     	</ul>
			     </div>
			</li>
			<li class="ddhh4">
			     <a href="###">&nbsp经验分享</a>
			     <div class="none4">
			       <div class="cover4"> </div>
			       <ul>
			     	   <li><a href="index.php">学习论坛</a></li>
			     	   <li><a href="#">在线教学</a></li>
			     	</ul>
			     </div>
			</li>
			<li class="ddhh5">
			     <a href="###">&nbsp小组讨论</a>
			     <div class="none5">
			       <div class="cover5"> </div>
			       <ul>
			     	   <li><a href="../create_group.php">创立小组</a></li>
			     	   <li><a href="../group_look.php">查看小组</a></li>
			     	   <li><a href="#">小组排名</a></li>
			     	</ul>
			     </div>
			</li>
		</ul>
		<div>
			
		</div>
	</div>