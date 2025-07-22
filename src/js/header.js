document.addEventListener('DOMContentLoaded', function() {

    function medirContenedor() {
    // wpadminbar
    
    const menu = document.querySelector('#navegacion'); 
    const alto = menu.offsetHeight;

    const marginafterMenu = document.querySelector('.first-content-after-menu');
    marginafterMenu.style.marginTop = `${alto}px`; 

    }

    // llamamos a la función
    medirContenedor();

    window.addEventListener('resize', medirContenedor); 
})

