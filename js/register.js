//注册
window.onload=function(){
	var Zhuce=document.getElementById('zhuce');
	Zhuce.onclick=function (){ 
        alert(zhuce);
    art.dialog({
    id: 'shake-demo',
    title: '登录',
    content:'<form method="post" name="register" action="register.php?action=register" id="register1">'+'<input type='hidden' name="uniqid" value="<?php echo $_uniqid;?>" />'+'<div>'+'<dl>'+'<dd> 用  户  名：<input type="text" name="username" class="text" /></dd>'+'<dd> 登陆密码：<input type="password" name="password" class="text" /></dd>'+'<dd> 确认密码：<input type="password" name="notpassword" class="text" /></dd>'+'<dd>会员性别：<input type="radio" name="sex" value="男" checked="checked" />男<input type="radio" name="sex" value="女" />女</dd>'+'<dd> 电子邮件：<input type="text" name="email" class="text" /></dd>'+'<dd> 腾讯 Q Q：<input type="text" name="qq" class="text" /></dd>'+'<dd><input type="submit" class="button" value="注册" /></dd>'+'</dl>'+'</div>'+'</form>',
    initialize: function () {
        document.getElementById('login-na').focus();
    },
    width:400,
    height:300,
    lock: true,
    fixed: true,
    okValue: '登陆',
    ok: function () {
        var pw = document.getElementById('login-pw');
        pw.select();
      pw.focus();
      this.shake();
        return false;
    },
    focus:false,
    
});
}
}