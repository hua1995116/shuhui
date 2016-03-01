window.onload=function(){
    li1 = document.getElementById("li1");
    li2 = document.getElementById("li2");
    li3 = document.getElementById("li3");
    bodyx = document.getElementById("bodyx");
    bodyy = document.getElementById("bodyy");
    bodyz = document.getElementById("bodyz");
    li1.onclick = function(){
         li1.style.color = "#606635";
         li2.style.color = "#fff";
         li3.style.color = "#fff";
         bodyx.style.display="block";
         bodyy.style.display="none";
         bodyz.style.display="none"; 
    }
    li2.onclick = function(){
         li2.style.color = "#606635";
         li1.style.color = "#fff";
         li3.style.color = "#fff";
         bodyy.style.display="block";
         bodyx.style.display="none";
         bodyz.style.display="none"; 
    }
    li3.onclick = function(){
         li3.style.color = "#606635";
         li2.style.color = "#fff";
         li1.style.color = "#fff";
         bodyz.style.display="block";
         bodyy.style.display="none";
         bodyx.style.display="none"; 
    }

}