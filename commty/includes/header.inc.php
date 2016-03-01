<nav class="navbar navbar-inverse " id="header">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                  <img src="images/logo.png" class="logo_img" style="margin:-35px 0 0 -20px">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
<?php 
      
if(isset($_SESSION['email'])){
  $_rows=_fetch_array("SELECT username FROM members WHERE email='{$_SESSION['email']}' LIMIT 1");
  $_html=array();
  $_html['username']=$_rows['username'];


 echo  '<ul class="nav navbar-nav navbar-right">';
 echo  '<li ><a href="user_class.php">'.$_html['username'].'</a></li>'; 
 echo  '<li id="login"><a href="logout.php">退出</a></li>';
 echo ' </ul>';
}
else{
 echo ' <ul class="nav navbar-nav navbar-right">';
 echo   ' <li id="register"><a href="#">注册</a></li>';
 echo    '<li id="login"><a href="#">登录</a></li>';
 echo  ' </ul>';
        } 


 ?>
        
            <ul class="nav navbar-nav navbar-right">
                <li>
                       <form class="search">
                          <input type="text"  class="searchfind" ></input>
                          <input name="search" class="searchsubmitoff" value="" onmouseover="this.className='searchsubmiton'" onmouseout="this.className='searchsubmitoff'" style="cursor:pointer" type="submit">
                        </form> 
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->


</nav>
<div id="bg">
</div>
<div id="login_pagetion">  
    <div class="login_img">
      <div id="login_name">
         登录
      </div>
      <div id="login_close">
         
      </div>
    </div>
    <div class="login_content">
    <form method="post" action="<?php echo NAME; ?>.php?action=login">
       <input type="text" name="email" class ="login_text" placeholder="请输入登录邮箱"/>
       <input type="password" name="password" class="login_text" placeholder="请输入密码"/>

       <input type="submit" class="login_submit" value="登录" />
    </form>
    </div>
</div>
<div id="register_pagetion">
    <div class="register_img">
      <div id="register_name">
         注册
      </div>
      <div id="register_close">
         
      </div>
    </div>
    <div class="register_content">
    <form method="post" action="<?php echo NAME; ?>.php?action=register">
       <input type="text" id="email_input" name="email" class ="register_text textwidth1 top" placeholder="请输入登录邮箱"/>
       <p>
         <span id="email_span">邮箱将作为您主要的身份识别，请输入您有效的邮箱</span>
         <span id="email_error">邮箱格式错误</span>
       </p>
       <input type="password" id="pw_input" name="password" class="register_text textwidth1" placeholder="请输入密码"/>
       <p>
         <span id="pw_span">请输入6-16位密码，区分大小写，不能使用空格</span>
         <span id="pw_error">请输入正确的格式</span>
       </p>
       <input type="password" id="pwag_input" name="repassword" class="register_text textwidth1" placeholder="再次确认密码"/>
       <p>
         <span id="pwag_span">请再次输入密码</span>
         <span id="pwag_error">两次输入不一致</span>
       </p>
       <input type="text" id="name_input" name="username" class="register_text textwidth1" placeholder="用户昵称"/>
       <p>
         <span id="name_span">请输入昵称，2-18位中英文、数字或下划线！</span>
         <span id="name_error">用户名不正确</span>
       </p>
       <input type="text" class="register_text textwidth2" placeholder="输入验证码"/>
       <input type="submit" class="register_submit" value="注册" />
    </form>
    </div>
</div>