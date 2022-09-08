// Section intro
ScrollReveal({
duration   : 600,
distance   : '80px',
easing     : 'ease-out',
origin     : 'top',
reset      : true,
scale      : 1,
viewFactor : 0,
interval: 106
}).reveal('.headline' );
    
// Servicios
ScrollReveal({
// delay: 400,
duration   : 1800,
distance   : '90px',
easing     : 'ease-out',
origin     : 'bottom',
reset      : true,
scale      : 1,
viewFactor : 0,
interval: 106
}).reveal('.hero-section' );

// Servicios Titulo
ScrollReveal({
delay: 500,
duration   : 1800,
distance   : '90px',
easing     : 'ease-out',
origin     : 'bottom',
reset      : true,
scale      : 1,
viewFactor : 0,
interval: 106
}).reveal('.titulo' );

// Clientes
ScrollReveal({
duration   : 600,
distance   : '80px',
easing     : 'ease-out',
origin     : 'bottom',
reset      : true,
scale      : 1,
interval: 106,
viewFactor : 0
}).reveal('.masthead-content' );

// Nosotros
ScrollReveal({
    duration   : 600,
    distance   : '80px',
    easing     : 'ease-out',
    origin     : 'top',
    reset      : true,
    scale      : 1,
    interval: 106,
    viewFactor : 0
    }).reveal('.section-team' );

// Contactanos
ScrollReveal({
    duration   : 600,
    distance   : '80px',
    easing     : 'ease-out',
    origin     : 'bottom',
    reset      : true,
    scale      : 1,
    interval: 106,
    viewFactor : 0
    }).reveal('.section-contact' );

// Formulario Requerimiento y prohibicion de numeros o letras


    function soloLetras(e){
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key).toLowerCase();
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
        especiales = "8-37-39-46";
 
        tecla_especial = false
        for(var i in especiales){
             if(key == especiales[i]){
                 tecla_especial = true;
                 break;
             }
         }
 
         if(letras.indexOf(tecla)==-1 && !tecla_especial){
             return false;
}
}
    

function numeros(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " 0123456789";
    especiales = [8,37,39,46];
 
    tecla_especial = false
    for(var i in especiales){
 if(key == especiales[i]){
     tecla_especial = true;
     break;
        } 
    }
 
    if(letras.indexOf(tecla)==-1 && !tecla_especial)
        return false;
        
}

