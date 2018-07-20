/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* Forma Recomendada */
$(function () {

    //Asignamos los eventos comunes a los componente html de toda la aplicación web
    asignarEventos();

//    $(".swipebox").swipebox();


});

// Asigno las funciones para cada evento común, de cada componente
function asignarEventos() {


    /*------------------------------------------------------------------------------------------------------------------
     --> *** Definition of the events common for all the Web Site pages *** <--  
     -----------------------------------------------------------------------------------------------------------------*/

    // $("[data-load]").each(function () {
    //     $(this).load($(this).data("load"), function () {
    //     });
    // });

//    $('ul.menu li.dropdown').on('mouseover', showUnorderedListHover);
//    $('li#li_resources').click(showUnorderedListHover);
    $('a#a_links').click(showUnorderedListHover);


    /*------------------------------------------------------------------------------------------------------------------
     --> *** Definition of the Specific Events of the index.html page *** <--  
     -----------------------------------------------------------------------------------------------------------------*/

    // start-smoth-scrolling
    // scrollingIcon();


    // Flexisel. Responsive Carousel jQuery Plugin. Videos en index_page. De último para q no intervenga con la carga de los header
    flexisel();


}

/*----------------------------------------------------------------------------------------------------------------------
 --> *** Programming of the functions common for all the Web Site pages *** <--  
 ---------------------------------------------------------------------------------------------------------------------*/

function showUnorderedListHover() {
    // alert('test showUnorderedListHover');
   // alertify.alert('test showUnorderedListHover');

    /* Disparo el evento click del enlace con clase dropdown-toggle, para que se mmuestre el ul en el evento mouseover (no en el click) */

    /* Modo inicial de invocar el click. Funciona solo cuando se ejecuta una función anónima en el evento hover */
    // $('.dropdown-toggle', this).trigger('click');
//    $('.dropdown-toggle', 'li.dropdown').trigger('click');

    /* Cambio la figura del caret en el b, de abajo hacia arriba */
    $('li.dropdown a b.fa-caret-down').removeClass('fa-caret-down').addClass('fa-caret-up');

}

function hideUnorderedListMouseLeave() {
//    alert('test hideUnorderedListMouseLeave');

    /* Cambio la figura del caret en el b, de arriba hacia abajo */
    $('li.dropdown a b.fa-caret-up').removeClass('fa-caret-up').addClass('fa-caret-down');

    /* Quito el focus del enlace, para que se repliegue la linea inferior */
//    $('#a_short_codes').blur();

}


/*----------------------------------------------------------------------------------------------------------------------
 --> *** Programming of the specific functions of the index.html page *** <--  
 ---------------------------------------------------------------------------------------------------------------------*/

// Here stars scrolling icon 
function scrollingIcon() {


//     var defaults = {
//     containerID: 'toTop', // fading element id
//     containerHoverID: 'toTopHover', // fading element hover id
//     scrollSpeed: 1200,
//     easingType: 'linear'
//     };


    $().UItoTop({
//        easingType: 'easeOutQuart' // Aceptable. Venía por defecto
//        easingType: 'easeOutElastic' //demasiado fuerte
//        easingType: 'easeInOutElastic' //demasiado fuerte
//        easingType: 'easeInOutBack' //demasiado feo
        easingType: 'easeOutBounce' // Aceptable
    });

}

// Flexisel. Responsive Carousel jQuery Plugin
function flexisel() {

    /* Verifico que sea la página de inicio */
    if (location.href.split("/").slice(-1).toString() === 'index_page') {

        if ($("#flexiselDemo3")) {

            $("#flexiselDemo3").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            });

        }
    }


}










