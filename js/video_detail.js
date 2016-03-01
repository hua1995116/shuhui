window.onload=function(){
    tittle1 = document.getElementById("tittle1");
    tittle2 = document.getElementById("tittle2");
    tittle3 = document.getElementById("tittle3");
    left1 = document.getElementById("left1");
    left2 = document.getElementById("left2");
    left3 = document.getElementById("left3");
    tittle1.onclick = function(){
         tittle1.style.borderBottom ="1px red solid"; 
         tittle1.style.color = "red";
         tittle2.style.borderBottom ="none"; 
         tittle2.style.color = "#514646";
         tittle3.style.borderBottom = "none"; 
         tittle3.style.color = "#514646";
         left1.style.display="block";
         left2.style.display="none";
         left3.style.display="none"; 
    }
    tittle2.onclick = function(){
         tittle2.style.borderBottom ="1px red solid"; 
         tittle2.style.color = "red";
         tittle1.style.borderBottom ="none"; 
         tittle1.style.color = "#514646";
         tittle3.style.borderBottom = "none"; 
         tittle3.style.color = "#514646";
         left2.style.display="block";
         left1.style.display="none";
         left3.style.display="none"; 
    }
    tittle3.onclick = function(){
         tittle3.style.borderBottom ="1px red solid"; 
         tittle3.style.color = "red";
         tittle2.style.borderBottom ="none"; 
         tittle2.style.color = "#514646";
         tittle1.style.borderBottom = "none"; 
         tittle1.style.color = "#514646";
         left3.style.display="block";
         left2.style.display="none";
         left1.style.display="none"; 
    }

}