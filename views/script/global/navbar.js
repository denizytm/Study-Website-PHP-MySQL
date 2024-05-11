
const navbar = document.getElementById('navbar');

function handleNavbar (){

    if(window.scrollY > 65) {
        navbar.style.position = "fixed";
        navbar.style.transform = "translateY(30px)";
    }
    else {
        navbar.style.position = "static";
        navbar.style.transform = "translateY(0px)";
    }
}

window.addEventListener("scroll",handleNavbar);

const arrowIcon = document.getElementById('arrow');

arrowIcon.style.transform = "rotate(0)";

const imageContainer = document.getElementById('image-container');

imageContainer.addEventListener('click',handleMenu);

function handleMenu(){
    const arrowIcon = document.getElementById('arrow');
    
    const userMenuContainer = document.getElementById('user-menu-container')

    if(arrowIcon.style.transform === "rotate(0deg)"){
        arrowIcon.style.transform = "rotate(180deg)";
        userMenuContainer.style.transform = "translateY(600px)"
    }
    else {
        arrowIcon.style.transform = "rotate(0deg)";
        userMenuContainer.style.transform = "translateY(0px)"
    }

}

function handleLogOut(){
    document.cookie = "login-data=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}
