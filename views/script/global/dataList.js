
document.addEventListener('DOMContentLoaded',handleText);

function handleText(){
    const textDatas = document.getElementsByClassName("list-text");
    for(let data of textDatas) {
        data.innerHTML = data.innerHTML.slice(0,150) + "...";
    }

}
