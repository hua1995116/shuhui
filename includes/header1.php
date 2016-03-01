<div id="header">
  <div class="logo">
     <img src="images/logo.png">
  </div>
  <div class="header_class">
      <ul class="header_ul">
        <li>
          <a href="video-worksk.php">作品欣赏</a>
        </li>
        <li>
          <a href="works.php">课程安排</a>
        </li>
        <li>
          <a href="commty/index.php">经验分享</a>
        </li>
        <li>
          <a href="group.php">小组讨论</a>
        </li>
  
      </ul>
  </div>
  <div class="header_search">
      <ul class="nav navbar-nav navbar-right">
          <li>
                 <form class="search">
                    <input type="text"  class="searchfind" ></input>
                    <input name="search" class="searchsubmitoff" value="" onmouseover="this.className='searchsubmiton'" onmouseout="this.className='searchsubmitoff'" style="cursor:pointer" type="submit">
                  </form> 
          </li>
     </ul>
  </div>
  <div class="login">
    <ul class="login_ul">
      <li style="width:200px;height:60px;">
        
      </li>

      <li id="register">
        <a href="#">
          注册
        </a>
      </li>
      <li id="login">
        <a href="#">
          登录
        </a>
      </li>
    </ul>
  </div>
</div>


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
    <form method="post" name="login" action="index.php?action=login">
        <input id="loginuser" type="text" class ="login_text" name="username" placeholder="用户名"/>
       <input id="loginpw" type="password" class="login_text" name="password" placeholder="密码"/>

       <input type="submit" value="登陆" class="login_submit" id="登录"/>
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
     <form method="post" name="register" action="register.php?action=register" id="register1">
      <input type="text" name="username" id="email_input" class="register_text textwidth1 top" placeholder="用户名"/>
       <p>
         <span id="email_span">邮箱将作为您主要的身份识别，请输入您有效的邮箱</span>
         <span id="email_error">邮箱格式错误</span>
       </p>
      <input type="password" id="pw_input" name="password" class="register_text textwidth1" placeholder="密码"/>
       <p>
         <span id="pw_span">请输入6-16位密码，区分大小写，不能使用空格</span>
         <span id="pw_error">请输入正确的格式</span>
       </p>
       <input type="password" id="pwag_input" name="notpassword" class="register_text textwidth1" placeholder="确认密码"/>
       <p>
         <span id="pwag_span">请再次输入密码</span>
         <span id="pwag_error">两次输入不一致</span>
       </p>
      <input type="text" name="email" id="name_input" class="register_text textwidth1" placeholder="电子邮箱">
       <p>
         <span id="name_span">请输入昵称，2-18位中英文、数字或下划线！</span>
         <span id="name_error">用户名不正确</span>
       </p>
       <input type="submit" class="register_submit" value="注册" />
    </form>
    </div>
</div>