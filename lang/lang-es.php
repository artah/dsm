<?php
$politykaPrywatnosci =  'Política de privacidad';
if (isset($_GET['mailer'])) {
    if ($_GET['mailer'] == 'ok') {
  $header = 'Tu guía diaria<br>para ventas en línea.';
$description = 'Gracias por registrarte en la lista de espera. Te mantendremos informado sobre el progreso del trabajo.';
$komunikatListaOczekujacych = '';
$description2 = '';
$image = 'background7.png';
$imagephone = 'background-phone8.png';
$button ='Más';
require 'sekcja5.php';
    }
    if ($_GET['mailer'] == 'mail') {
  $header = 'Tu guía diaria<br>para ventas en línea.';
$description = 'Gracias por proporcionar tu correo electrónico. Hemos enviado un mensaje con un enlace de confirmación. Si no lo has recibido, por favor revisa la carpeta SPAM, PROMOCIONES y OTROS';
$komunikatListaOczekujacych = '';
$description2 = '';
$image = 'background7.png';
$imagephone = 'background-phone8.png';
$button ='Más';
require 'sekcja5.php';
    }
} 

$header = 'Tu guía diaria<br>para ventas en línea.';
$description = 'Daily Sales Mentor es una revolucionaria aplicación gratuita dedicada a empresarios, especialistas en marketing y todos aquellos que deseen aumentar sus ventas en línea.';
$komunikatListaOczekujacych = '¡Regístrate en la lista de espera y disfruta de Daily Sales Mentor <b>gratis - para siempre!</b>';
$description2 = '';
$image = 'background1.png';
$imagephone = 'background-phone1.png';
$button ='Más';
require 'sekcja1.php';

$header = 'Lecciones diarias<br>con técnicas de ventas';
$description = 'Recibe lecciones diarias y concisas que presentan diversas técnicas de ventas.';
$description2 = '¡365 lecciones para 365 días!';
$komunikatListaOczekujacych = '¡Regístrate en la lista de espera y disfruta de Daily Sales Mentor <b>gratis - para siempre!</b>';
$image = 'background2.png';
$imagephone = 'background-phone2.png';
$button ='Más';
require 'sekcja2.php';

$header = 'Programa personalizado';
$description = 'Establece tu propio horario, eligiendo la hora en que deseas recibir las lecciones diarias. De esta manera, podrás adaptar el aprendizaje al ritmo de tu día.';
$komunikatListaOczekujacych = '¡Regístrate en la lista de espera y disfruta de Daily Sales Mentor <b>gratis - para siempre!</b>';
$description2 = '';
$image = 'background3.png';
$imagephone = 'background-phone3.png';
$button ='Más';
require 'sekcja2.php';

$header = 'Técnicas de ventas favoritas';
$description = 'Si te gusta especialmente alguna técnica, agrégala a tus favoritos para poder volver a ella en cualquier momento. También puedes enviarla por correo electrónico y tener fácil acceso.';
$komunikatListaOczekujacych = '¡Regístrate en la lista de espera y disfruta de Daily Sales Mentor <b>gratis - para siempre!</b>';
$description2 = '';
$image = 'background4.png';
$imagephone = 'background-phone4.png';
$button ='Más';
require 'sekcja2.php';

$header = 'Privacidad';
$description = 'Tus datos son importantes para nosotros. Aseguramos que no compartimos ninguna información sobre nuestros usuarios con terceros. Nos preocupamos por la protección de tus datos personales y cumplimos con las normas del GDPR (Reglamento General de Protección de Datos).';
$komunikatListaOczekujacych = '¡Regístrate en la lista de espera y disfruta de Daily Sales Mentor <b>gratis - para siempre!</b>';
$description2 = '100% privacidad';
$image = 'background7.png';
$imagephone = 'background-phone7.png';
$button ='Más';
require 'sekcja2.php';

$header = '¡Regístrate en la lista de espera y disfruta de Daily Sales Mentor gratis - para siempre!';
$description = '¡No te pierdas esta oportunidad única y obtén acceso gratuito a un conocimiento ilimitado sobre técnicas de ventas!';
$komunikatListaOczekujacych = '¡Regístrate en la lista de espera y disfruta de Daily Sales Mentor <b>gratis - para siempre!</b>';
$description2 = '100% privacidad';
$image = 'background5.png';
$imagephone = 'background-phone5.png';
$buttonZapisz = "Inscribirse";
require 'sekcja4.php';

$header = 'Versiones multilingües';
$description = 'La aplicación estará disponible en polaco, inglés y español, lo que permite su uso por usuarios de diferentes países.';
$komunikatListaOczekujacych = '¡Regístrate en la lista de espera y disfruta de Daily Sales Mentor <b>gratis - para siempre!</b>';
$description2 = 'Polaco, inglés y español';
$image = 'background6.png';
$imagephone = 'background-phone6.png';
$button ='Más';
require 'sekcja2.php';
?>
