const button = document.getElementById('go-up-button');

function handleButton (){
    if(window.scrollY > 65) {
        button.style.opacity = "100%";  
        button.style.cursor = "pointer"; 
    } else{
        button.style.opacity = "0";
        button.style.cursor = "default";
    } 
         
}

window.addEventListener("scroll",handleButton);

function goUp(){
    window.scrollTo({
        top : "0",
        behavior : "smooth"
    })
}
