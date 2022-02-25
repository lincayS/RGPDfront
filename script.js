window.addEventListener("load",deb,false);
function deb(){  
    document.getElementById("top-menu").style.display = "none";
}
function menu(){
    if(    document.getElementById("top-menu").style.display == "none"){ 
    
    document.getElementById("top-menu").style.display = "flex";
}
else{    document.getElementById("top-menu").style.display = "none";

  }
}

