
/*$('box11').mouseout(function(){
	clearTimeout(t);
	t=setTimeout(zoomln,400);
    startMove(box11,'opacity',60);
}).mouseover(function(){
	if(time!=null)
		clearTimeout(t);
	    t=null;
	    startMove(this,'opacity',0);
});*/
/*window.onload = function (){
	var box11 = document.getElementById("box11");
	var box11 = document.getElementById("box11");
    box11.onmouseover = function(){
    	 startMove(this,'opacity',0);
    }
    box11.onmouseout = function(){
    	aa = setTimeout(hide,10000);
    }
    function hide(){
    	startMove(box11,'opacity',60);
    }
}*/
/*$('#box11').bind({
	mouseenter.function(){
        startMove(this,'opacity',0);
	},
	mouseleaver.function(){
		startMove(this,'opacity',60);
	}
})*/
/*window.onload = function (){
    var bg1 = document.getElementById("bg1");
    var bg2 = document.getElementById("bg2");
    var bg3 = document.getElementById("bg3");
    var bg4 = document.getElementById("bg4");
    var bg5 = document.getElementById("bg5");
    bg1.onmouseover = function(){
    	 startMove(this,'opacity',0);
    }
    bg1.onmouseout = function(){
    	aa = setTimeout(hide,300);
    }
    function hide(){
    	startMove(bg1,'opacity',50);
    }

    bg2.onmouseover = function(){
    	 startMove(this,'opacity',0);
    }
    bg2.onmouseout = function(){
    	aa = setTimeout(hide,300);
    }
    function hide(){
    	startMove(bg2,'opacity',50);
    }
/*
    bg3.onmouseover = function(){
    	 startMove(this,'opacity',0);
    }
    bg3.onmouseout = function(){
    	aa = setTimeout(hide,300);
    }
    function hide(){
    	startMove(bg3,'opacity',50);
    }

    bg4.onmouseover = function(){
    	 startMove(this,'opacity',0);
    }
    bg4.onmouseout = function(){
    	aa = setTimeout(hide,300);
    }
    function hide(){
    	startMove(bg4,'opacity',50);
    }

    bg5.onmouseover = function(){
    	 startMove(this,'opacity',0);
    }
    bg5.onmouseout = function(){
    	aa = setTimeout(hide,300);
    }
    function hide(){
    	startMove(bg5,'opacity',50);
    }
}
function startMove(obj,attr,iTarget){ 
  clearInterval(obj.timer);
  obj.timer = setInterval(function(){
  	var icur = 0;
  	if(attr == 'opacity')
  	{
  	   icur = Math.round(parseFloat(getStyle(obj,attr))*100); 
  	}
  	else{ 
   	   var icur = parseInt(getStyle(obj,attr));
  	}
	var speed = (iTarget-icur)/5; 
	speed = speed>0?Math.ceil(speed):Math.floor(speed);
  	if(icur == iTarget){ 
      clearInterval(obj.timer);
      if(icur== 0){
      	obj.style.display="none";
      }
      else{
      	obj.style.display="block";
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
}*/


/*	var box1_bg1 = document.getElementById("box1_bg1");
	var box1_bg2 = document.getElementById("box1_bg2");
	var box1_bg3 = document.getElementById("box1_bg3");
	var box1_bg4 = document.getElementById("box1_bg4");
	var box1_bg5 = document.getElementById("box1_bg5");
	var box1_bg6 = document.getElementById("box1_bg6");
	box1_bg1.onmouseover = function(){
		box1_bg1.style.display= "block";
	}
	box1_bg1.onmouseout = function(){
		box1_bg1.style.display = "none";
	}
	box1_bg2.onmouseover = function(){
		box1_bg2.style.display= "block";
	}
	box1_bg2.onmouseout = function(){
		box1_bg2.style.display = "none";
	}
	box1_bg3.onmouseover = function(){
		box1_bg3.style.display= "block";
	}
	box1_bg3.onmouseout = function(){
		box1_bg3.style.display = "none";
	}
	box1_bg4.onmouseover = function(){
		box1_bg4.style.display= "block";
	}
	box1_bg4.onmouseout = function(){
		box1_bg4.style.display = "none";
	}
	box1_bg5.onmouseover = function(){
		box1_bg5.style.display= "block";
	}
	box1_bg5.onmouseout = function(){
		box1_bg5.style.display = "none";
	}
	box1_bg6.onmouseover = function(){
		box1_bg6.style.display= "block";
	}
	box1_bg6.onmouseout = function(){
		box1_bg6.style.display = "none";
	}
*/
$(function(){
$("#box1").hover(function(){
	$("#box11").stop(true,true).fadeOut(800);
},
	function(){
	$("#box11").stop(true,true).fadeIn(800);
})
});
$(function(){
$("#box2").hover(function(){
	$("#box21").stop(true,true).fadeOut(800);
},
	function(){
	$("#box21").stop(true,true).fadeIn(800);
})
});
$(function(){
$("#box3").hover(function(){
	$("#box31").stop(true,true).fadeOut(800);
},
	function(){
	$("#box31").stop(true,true).fadeIn(800);
})
});
$(function(){
$("#box4").hover(function(){
	$("#box41").stop(true,true).fadeOut(800);
},
	function(){
	$("#box41").stop(true,true).fadeIn(800);
})
});
$(function(){
$("#box5").hover(function(){
	$("#box51").stop(true,true).fadeOut(800);
},
	function(){
	$("#box51").stop(true,true).fadeIn(800);
})
});
$(function(){
$("#box6").hover(function(){
	$("#box61").stop(true,true).fadeOut(800);
},
	function(){
	$("#box61").stop(true,true).fadeIn(800);
})
});
