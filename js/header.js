window.onload=function(){
	//注册页面关闭开启
	var register = document.getElementById("register");
	var login = document.getElementById("login");
	var login_pagetion = document.getElementById("login_pagetion");
	var bg = document.getElementById("bg");
	var login_close = document.getElementById("login_close");
	var Width = document.body.offsetWidth;
	var factWidth = (Width-500)/2;

    //正则验证
	var email_input = document.getElementById("email_input");
	var pw_input = document.getElementById("pw_input");
	var pwag_input = document.getElementById("pwag_input");
	var name_input = document.getElementById("name_input");
	var email_span = document.getElementById("email_span");
	var pw_span = document.getElementById("pw_span");
	var pwag_span = document.getElementById("pwag_span");
	var name_span = document.getElementById("name_span");
	var email_error = document.getElementById("email_error");
	var email_reg = /\w+((-w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+/;
	var pw_reg = /^[A-Za-z0-9_-]+$/;
	var name_reg = /^[A-Za-z0-9\u4e00-\u9fa5]+$/;
	login.onclick = function(){
        bg.style.display = "block";
        login_pagetion.style.display ="block";

	}
	login_close.onclick = function(){
		 bg.style.display = "none";
         login_pagetion.style.display ="none";
	}
	register.onclick = function(){
        bg.style.display = "block";
        register_pagetion.style.display ="block";

	}
	register_close.onclick = function(){
		 bg.style.display = "none";
        register_pagetion.style.display ="none";
        email_input.value = null;
        pw_input.value = null;
        pwag_input.value = null;
        name_inpt.value = null;
	}
	
	
	
	email_input.onfocus = function(){
		email_span.style.display = "block";
		email_error.style.display = "none";
	}
	email_input.onblur = function(){
		var email_REG = email_input.value;
		email_span.style.display = "none";
		if((email_REG.match(email_reg))==null){
			email_span.style.display = "none";
	        email_error.style.display = "block";
            email_input.style.background = "#fff";
	    }
	    else{
	    	email_input.style.background = "#F0EEF0";
	    }
	}
	pw_input.onfocus = function(){
		pw_span.style.display = "block";
		pw_error.style.display = "none";
	}
	pw_input.onblur = function(){
		var pw_REG = pw_input.value;
		pw_span.style.display = "none";
		if((pw_REG.match(pw_reg))==null){
			pw_span.style.display = "none";
	        pw_error.style.display = "block";
            pw_input.style.background = "#fff";
	    }
	    else{
	    	pw_input.style.background = "#F0EEF0";
	    }
	}
	pwag_input.onfocus = function(){
		pwag_span.style.display = "block";
		pwag_error.style.display = "none";
	}
	pwag_input.onblur = function(){
		var pwag_REG = pwag_input.value;
		var pw_REG = pw_input.value;
		pwag_span.style.display = "none";
		if(pwag_REG!=pw_REG||(pwag_REG ==null)){
			pwag_span.style.display = "none";
			pwag_error.style.display = "block";
            pwag_input.style.background = "#fff";
		}
		else{		
			pwag_input.style.background = "#F0EEF0";
	    	
	    }
		
	}
	name_input.onfocus = function(){
		name_span.style.display = "block";
		name_error.style.display = "none";
	}
	name_input.onblur = function(){
		var name_REG = name_input.value;
		var name_REG = name_input.value;
		name_span.style.display = "none";
		if((name_REG.match(name_reg))==null){
			name_span.style.display = "none";
			name_error.style.display = "block";
            name_input.style.background = "#fff";
		}
		else{
			if(name_input.value==null){
				name_input.style.background = "#fff";
			}else{
				name_input.style.background = "#F0EEF0";
			}
	    	
	    }
	}

}