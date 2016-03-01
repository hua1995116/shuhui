function code(){
			var code=document.getElementById('code');
			code.onclick=function(){
			this.src='code.php?tm='+Math.random()
	};
};