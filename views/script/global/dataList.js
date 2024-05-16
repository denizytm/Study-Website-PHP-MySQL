
document.addEventListener('DOMContentLoaded',handleText);

function handleText(){
    const textDatas = document.getElementsByClassName("list-text");
    for(let data of textDatas) {
        if(data.innerHTML.length > 75)
            data.innerHTML = data.innerHTML.slice(0,75) + "...";
    }
}

const questions = document.getElementsByClassName('question-text');

window.addEventListener('DOMContentLoaded',()=>{
    for(let data of questions){
        if(data.innerHTML.length > 75)
            data.innerHTML = data.innerHTML.slice(0,75) + "...";
    }
})