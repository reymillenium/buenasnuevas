/* Forma Recomendada */
$(function () {

    //Asignamos los eventos comunes a los componente html de toda la aplicación web
    asignarEventos();

});

// Asigno las funciones para cada evento común, de cada componente
function asignarEventos() {

    // Determino las distintas partes de la página web actual y de la anterior
    var oldURL = document.referrer.toString();
    var currentURL = document.location.href.toString();

    var oldURLparts = oldURL.split('/');
    var oldURLlastSegment = oldURLparts.pop() || oldURLparts.pop();

    var currentURLparts = currentURL.split('/');
    var currentURLlastSegment = currentURLparts.pop() || currentURLparts.pop();

    /*------------------------------------------------------------------------------------------------------------------
     --> *** Definition of the events common for all the Web Site pages *** <--  
     -----------------------------------------------------------------------------------------------------------------*/

    // Dependiendo del tipo de resolución del dispositivo es el tipo de menu que voy a mostrar
    if (TheDeviceHasLowResolution() || usingMobile()) { // Si posee baja resolución o si está usando un móvil...

        // alertify.alert('Baja Resolución. Width: ' + window.innerWidth + ' Height: ' + innerHeight);

        // **Escondo los componentes diseñados para una PC
        //
        // Escondo el menú dropdown de Resources para pc
        $("li#li_resources").hide();
        // Escondo la info de contacto en la cabezera para pc
        $("div#div_contact_info_header").hide();
        // Escondo la imagen del logo para pc
        $("div#div_logo_pc").hide();

        // ** Muestro los componentes diseñados para móviles
        $("div.resources_mobile").show();

        // Determinamos si se encuentra en la página de la galería de imágenes
        if (currentURLlastSegment == 'pictures_page') {

            if (window.localStorage) {
                if (!localStorage.getItem('firstLoad')) {
                    localStorage['firstLoad'] = true;

                    // Reload the current page, without using the cache
                    window.location.reload(true);
                    // window.location.reload();
                }
                else
                    localStorage.removeItem('firstLoad');
            }


        }


    } else { // Si o tiene resolución baja o si NO está usando un móvil...

        // alertify.alert('Resolución Normal. Width: ' + window.innerWidth + ' Height: ' + innerHeight);

        // ** Muestro los componentes diseñados para una PC
        //
        // Muestro el menú dropdown de Resources para pc
        $("li#li_resources").show();
        // Muestro la info de contacto en la cabezera para pc
        $("div#div_contact_info_header").show();
        // Muestro la imagen del logo para pc
        $("div#div_logo_pc").show();

        // ** Escondo los componentes diseñados para móviles
        $("div.resources_mobile").hide();

    }

    // $('a#a_links').click(showUnorderedListHover);
    $('li#li_resources').on("mouseover", showUnorderedListHover);
    $('li#li_resources').on("mouseout", hideUnorderedListMouseLeave);


    // Flexisel. Responsive Carousel jQuery Plugin. Videos en index_page. De último para q no intervenga con la carga de los header
    flexisel();


    // Uso de Image Combo Box para mostrar los dos sexos en un select
    var genderDropdown = $('#slct_user_gender').msDropDown().data("dd");
    // Uso de Image Combo Box para mostrar un listado de los países y sus banderas en un select
    var countryDropdown = $("#slct_country_id").msDropdown().data("dd");

    // Determino si la página anterior es la misma que la actual, para no alterar el estado de los select salvo que sea la 1ra vez que se muestra
    // y así conservar el valor "old" en el proceso de validación del formulario de registro:
    if (oldURLlastSegment != currentURLlastSegment) {
        // Selecciono el item con index 1 (Femenino) del select, usando Image Combo Box para mostrar los dos sexos
        genderDropdown.set("selectedIndex", 1);

        // Selecciono el item con index 235 (USA) del select, usando Image Combo Box para mostrar un listado de los países y sus banderas
        countryDropdown.set("selectedIndex", 235);
    }


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
    // alert('test hideUnorderedListMouseLeave');
    //  alertify.alert('test hideUnorderedListMouseLeave');

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

// Determina si el dispositivo tiene una resolución menor de 800 x 600
function TheDeviceHasLowResolution() {

    if (window.innerWidth <= 800 && window.innerHeight <= 600) {
        // if (window.innerWidth <= 1921 || window.innerHeight <= 1081) {
        return true;
    } else {
        return false;
    }

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


function usingMobile() {

    // var check = false;
    //
    // if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) {
    //     check = true;
    // }
    //
    // return check;

    var check = false;
    (function (a) {
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;

}

function usingMobileOrTablet() {
    var check = false;
    (function (a) {
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
}




