
function enlargeNav(navId){
    const hoverNav = document.getElementById(navId);
    hoverNav.style.height = 500;

}

function shrinkNav(navId){
    const unHoverNav = document.getElementById(navId);
    unHoverNav.style.height = 400;
}

window.addEventListener("scroll",transformContainer);

const stepsContainer = document.getElementById("steps-container");

function transformContainer (){
    if(window.scrollY >= 150) stepsContainer.style.transform = "translateY(-150px)";
    else stepsContainer.style.transform = "translateY(0)";
} 