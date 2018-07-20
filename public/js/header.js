/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Le asigno la class active al enlace de acuerdo a la posición actual (fileName) */
$('.head-nav a').each(function () {

    var fileName = location.href.split("/").slice(-1);
    // var fileName = location.pathname.split("/").slice(-1);

    if ($(this).attr('href').toString() === fileName.toString()) {

        $(this).addClass('active');

        // alert('entrada al pathname ' + fileName);
        // alert($(this).attr('href'));
        // alert($(this).attr('class'));

    }
});

/* Asigno el href adecuado a cada enlace de idioma, de acuerdo al propio idioma y la posición actual (fileName) */
// $('ul.languages a').each(function () {
//
//     /* Obtengo el nombre del fichero actual */
//     var fileName = location.href.split("/").slice(-1);
//
//     /* Recompongo el href de acuerdo a la class del a (quito la parte final y agrego una nueva de acuerdo al idioma) */
//     $(this).attr('href', fileName.toString().slice(0, -7) + $(this).attr('class') + '.html');
//
// });


/* Opens the mail agent in a new tab (on your browser) */
$('a#a_email').on('click', sendEmailInNewTab);


/* Abre el gestor de correo para comunicarse con la iglesia */
function sendEmailInNewTab() {
    event.preventDefault();

    var email = 'buenasnuevasmiami@gmail.com';
    var subject = 'Saludos Iglesia Buenas Nuevas';
    var emailBody = 'Hola Iglesia Buenas Nuevas. \n\n';
    // var attach = 'path';

    // javascript:window.open('mailto:sample1@domain.com?subject=test', 'mail');
    javascript:window.open('mailto:' + email + '?subject=' + subject + '&body=' + emailBody, 'mail');

    // document.location = "mailto:" + email + "?subject=" + subject + "&body=" + emailBody + "?attach=" + attach;
    // document.location = "mailto:" + email + "?subject=" + subject + "&body=" + emailBody + "";

}

/* ¿? */
$("span.menu").click(function () {
    $(".head-nav ul").slideToggle(300, function () {
        // Animation complete.
//                        alert('probando span_menu');
    });
});


