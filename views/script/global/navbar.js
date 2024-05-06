
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
