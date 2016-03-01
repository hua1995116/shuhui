//登录
window.onload=function(){
	var img=document.getElementById('img');
	img.onclick=function (){ 
    art.dialog({
    id: 'shake-demo',
    title: '登录',
    content: '<div id="login"><img src="images/shuhui.png"></div>'
        +'<form class="loginform" method="post" name="login" action="index2.php?action=login">'
        +'<div class="biaodan1"><input id="loginuser" type="text" name="username" placeholder="用户名"/></div>'
        + '<br /><div class="biaodan2"><input id="loginpw" type="password" name="password" placeholder="密码"/></div>'
        +'<br /><div class="biaodan3"><input type="submit" value="登陆" class="button" id="登录"/></div>'
        +'</form>'
        ,
    initialize: function () {
        document.getElementById('login-na').focus();
    },
    width:400,
    height:290,
    lock: true,
    fixed: true,
    padding:0,
    okValue: '登陆',
    focus:false,    
});
}
$("#register").click(function(){
    art.dialog({
        title:'帐号注册',
        content:document.getElementById('reg'),
        initialize: function () {
        document.getElementById('login-na').focus();
    },
        lock: true,
        fixed: true,
        padding:0,
    })
});


		var login=document.getElementById('登陆');
	    login.onclick=function(){
		index2.location.reload();
	}
}

