function changeBackgroundColor(){
    const footerElement=document.getElementById("mainFooter");
    if(footerElement){
        footerElement.classList.toggle("toggled-red");
    }   
}

const button=document.getElementById("changeBackgroundColor");

if(button){
    button.addEventListener("click",changeBackgroundColor);
}