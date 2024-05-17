
const closeAlertButton = document.getElementById('closeAlertButton');

if(closeAlertButton){
    closeAlertButton.addEventListener('click',()=>{
    
        const alertContainer = document.getElementById('alertContainer');
        alertContainer.style.display = "none";
    })
}

const saveChangesButton = document.getElementById('saveChangesButton');
