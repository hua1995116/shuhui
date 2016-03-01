function startMove(obj,attr,iTarget,fu){ 
  clearInterval(obj.timer);
  obj.timer = setInterval(function(){
    //取当前的值
  	var icur = 0;
  	if(attr == 'opacity')
  	{
  	   icur = Math.round(parseFloat(getStyle(obj,attr))*100); 
  	}
  	else{ 
   	   var icur = parseInt(getStyle(obj,attr));
  	}
    //算速度
	var speed = (iTarget-icur)/80; 
	speed = speed>0?Math.ceil(speed):Math.floor(speed);
  //检测停止
  	if(icur == iTarget){ 
      clearInterval(obj.timer);
      if(fu){
        fu();
      }
  	}
	else{
		if(attr == 'opacity'){ 
            obj.style.filter = 'alpha(opacity:'+(icur + speed)+')';
            obj.style.opacity = (icur + speed)/100;
		}
		else{ 
            obj.style[attr]=icur+speed+'px';
		}
    }
  },30)
}

function getStyle(obj,attr){ 
   if(obj.currentStyle){ 
     return obj.currentStyle[attr];
   }
   else{ 
     return getComputedStyle(obj,false)[attr];
   }
}