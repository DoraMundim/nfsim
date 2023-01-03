function menuShow () {
    let menuMobile = document.querySelector('.mobile-menu');
    if (menuMobile.classList.contains('open')) {
        menuMobile.classList.remove('open');
    } else {
        menuMobile.classList.add('open');
    }
}

var interval = 0;

var maxSlider = document.querySelectorAll('.box-image').length - 1;


 sumir()

 function sumir(){
     let img = document.querySelectorAll('.box-image img')
     let span = document.querySelector('.bolinhas')
    
     

     img[1].style.display = 'none';
     img[2].style.display = 'none';   


     for(var i = 0; i < maxSlider+1; i++){

        if(i == 0){

            span.innerHTML += '<span class="marcador"></span>'
        }else{

            span.innerHTML += '<span></span>'
        }
     }    
 }

 acao();


function acao(){

    let img = document.querySelectorAll('.box-image img')
    let span = document.querySelectorAll('.bolinhas span')

    setInterval(function(){

        img[interval].style.display = 'none';
        span[interval].classList.remove('marcador')
        interval++; 
        if(interval > maxSlider){

            interval = 0;
        }
        img[interval].style.display = 'block';
        span[interval].classList.add('marcador')

        
    },5000)


}

controlador();



function controlador(){

    let img = document.querySelectorAll('.box-image img')
    document.querySelectorAll('.bolinhas span').forEach(function(valor,index){


            valor.addEventListener('click',function(){
                
                img[interval].style.display = 'none';
                interval = index;
                img[interval].style.display = 'block';

               let div = document.querySelectorAll('.bolinhas span').length;

               if(div == 3){

                document.querySelectorAll('.bolinhas span').forEach(function(valor){

                    valor.classList.remove('marcador')

                })

               }

               valor.classList.add('marcador')

            })
    })
}

function planosepacotes () {
    document.getElementById("remove").style.display="none";
    document.getElementById("adicione").style.display="flex";
    document.getElementById("adicione2").style.display="flex";

}

function planosepacotes2 () {
    document.getElementById("remove22").style.display="none";
    document.getElementById("adicione11").style.display="flex";
    document.getElementById("adicione12").style.display="flex";
    
}

function mostrarResposta () {
    document.getElementById("mostrar").style.display="flex";
} 

function mostrarResposta2 () {
    document.getElementById("mostrar2").style.display="flex";
} 

function mostrarResposta3 () {
    document.getElementById("mostrar3").style.display="flex";
} 

function mostrarResposta4 () {
    document.getElementById("mostrar4").style.display="flex";
} 

function mostrarResposta6 () {
    document.getElementById("mostrar6").style.display="flex";
} 

function mostrarResposta7 () {
    document.getElementById("mostrar7").style.display="flex";
} 

function mostrarResposta8 () {
    document.getElementById("mostrar8").style.display="flex";
}

function mostrarResposta9 () {
    document.getElementById("mostrar9").style.display="flex";
} 






function esconder1 () {
    document.getElementById("mostrar").style.display="none";
} 

function esconder2 () {
    document.getElementById("mostrar2").style.display="none";
} 

function esconder3 () {
    document.getElementById("mostrar3").style.display="none";
} 

function esconder4 () {
    document.getElementById("mostrar4").style.display="none";
} 

function esconder5 () {
    document.getElementById("mostrar6").style.display="none";
} 

function esconder6 () {
    document.getElementById("mostrar7").style.display="none";
} 

function esconder7 () {
    document.getElementById("mostrar8").style.display="none";
} 

function esconder8 () {
    document.getElementById("mostrar9").style.display="none";

}




