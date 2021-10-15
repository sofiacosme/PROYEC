const altura=document.body.scrollHeight - window.innerHeight;
const fondo= document.getElementById('fondo');

window.onscroll= () =>{
    const anchofondo = (window.pageYOffset / altura) * 700;
    if(anchofondo<= 100){
        fondo.style.width = anchofondo + '%';
    }
    

}