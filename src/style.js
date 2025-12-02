function changeBackgroundColor(){
    const footerElement=document.getElementById("main-footer");
    if(footerElement){
        footerElement.classList.toggle("toggled-red");
    }   
}

const button=document.getElementById("cc");

if(button){
    button.addEventListener("click",changeBackgroundColor);
}

