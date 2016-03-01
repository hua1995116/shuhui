<div class="rides-cs">

	<div class="floatL">
		<div style="display:block" id="aFloatTools_Show" class="btnOpen" >
		   <div class="color">我的课程</div>
		   <div><img src="images/addright.png" /></div>
		</div>
		<div style="display:none" id="aFloatTools_Hide" class="btnCtn">
		   <div class="color">我的课程</div>
		   <div><img src="images/addleft.png" /></div>
		</div>
	</div>
	
	<div id="divFloatToolsView" class="floatR" style="display:none">
		<div class="cn">
			<ul>
		    <?
		    $_result = _query("SELECT * FROM myclass WHERE user='{$_COOKIE['username']}' ORDER BY time DESC ");
            while(!!$_myclass = _fetch_array_list($_result)){
            $_workehtml = array();
            $_workehtml['worksname'] = $_myclass['worksname'];
            $_workehtml['user'] = $_myclass['user'];
            $_workehtml['time'] = $_myclass['time'];
            $_img = _fetch_array("SELECT * FROM tg_vidio WHERE woknme='{$_workehtml['worksname']}' limit 1");
            $_workehtml['img'] = $_img['img']; 
            $_workehtml['id'] = $_img['id']; 
            ?>
				<a href="video-detail.php?id=<?echo $_workehtml['id'];?>"><li>
					<!-- <img src="videoface/<?echo $_workehtml['img'];?>" /> -->
					
					 <div class="add_name"><?echo $_workehtml['worksname'];?></div>
				    
					<div class="add_time"><?echo $_workehtml['time'];?></div>
				</li></a>
			<?}?>
			
			</ul>
		</div>
	</div>
	
</div>