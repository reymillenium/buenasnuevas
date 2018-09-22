/* Forma Recomendada */
$(function () {

    //Asignamos los eventos comunes a los componente html de toda la aplicación web
    asignarEventos();

});

// Asigno las funciones para cada evento común, de cada componente
function asignarEventos() {

    /*------------------------------------------------------------------------------------------------------------------
     --> *** Definition of the events common for all the Web Site pages *** <--  
     -----------------------------------------------------------------------------------------------------------------*/

    $('a#a_links').click(showUnorderedListHover);

    // Flexisel. Responsive Carousel jQuery Plugin. Videos en index_page. De último para q no intervenga con la carga de los header
    flexisel();


    // Uso de ddList para mostrar banderas en los select
    // $('#slct_country_id').ddlist({
    //     width: 345
    // });

    // Uso de Image Combo Box para mostrar los dos sexos en un select
    $('#slct_user_gender').msDropDown();

    // Uso de Image Combo Box para mostrar un listado de los países y sus banderas en un select
    // $('#slct_country_id').msDropDown({
    //     // selectedIndex: 203
    //
    // })

    // document.getElementById("slct_country_id").selectedIndex = "4";

    // $('#slct_country_id').set("selectedIndex", 2);

    var oDropdown = $("#slct_country_id").msDropdown().data("dd");
    oDropdown.set("selectedIndex", 235);

}

/*----------------------------------------------------------------------------------------------------------------------
 --> *** Programming of the functions common for all the Web Site pages *** <--  
 ---------------------------------------------------------------------------------------------------------------------*/

function showUnorderedListHover() {
    // alertify.alert('test showUnorderedListHover');

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

// Flexisel. Responsive Carousel jQuery Plugin. Videitos en la pagina de inicio
function flexisel() {


    // Determino el nombre de la pagina en que me encuentro
    $pageName = location.href.split("/").slice(-1).toString();

    /* Verifico que sea la página de inicio o la default (sin nombre) */
    // if (location.href.split("/").slice(-1).toString() === 'index_page') {


    if (($pageName === '') || ($pageName === 'index_page')) {

        // alert($pageName);

        // Verifico que exista el componente
        if ($("#flexiselDemo3")) {

            // alert('Encontró a flexiselDemo3');


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










