/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Determino las distintas partes de la página web actual
var currentURL = document.location.href.toString();

/* Le asigno la class 'active' al enlace de acuerdo a la posición actual (fileName), para que se resalte el de la página actual */
$('.head-nav a').each(function () {

    if ($(this).attr('href').toString() === currentURL) {

        $(this).addClass('active');
    }
});


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


