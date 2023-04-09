<?php
$politykaPrywatnosci = "Privacy Policy";
if (isset($_GET['mailer'])) {
    if ($_GET['mailer'] == 'ok') {
  $header = 'Your daily guide<br>in online sales.';
$description = 'Thank you for signing up for the waiting list. We will keep you updated on the progress of our work.';
$komunikatListaOczekujacych = '';
$description2 = '';
$image = 'background7.png';
$imagephone = 'background-phone8.png';
$button = "More";
require 'sekcja5.php';
    }
    if ($_GET['mailer'] == 'mail') {
  $header = 'Your daily guide<br>in online sales.';
$description = 'Thank you for providing your email address. We have sent a confirmation link to it. If you did not receive it, please check your SPAM, DEALS, and OTHER folders.';
$komunikatListaOczekujacych = '';
$description2 = '';
$image = 'background7.png';
$imagephone = 'background-phone8.png';
$button = "More";
require 'sekcja5.php';
    }
} 

$header = 'Your daily guide<br>in online sales.';
$description = 'Daily Sales Mentor is a revolutionary, free app dedicated to entrepreneurs, marketing specialists, and anyone who wants to increase their online sales.';
$komunikatListaOczekujacych = 'Sign up for the waiting list and use Daily Sales Mentor <b>for free - forever!</b>';
$description2 = '';
$image = 'background1.png';
$imagephone = 'background-phone1.png';
$button = "More";
require 'sekcja1.php';

$header = 'Daily lessons<br>with sales techniques';
$description = 'Receive daily condensed lessons presenting various sales techniques.';
$description2 = '365 lessons for 365 days!';
$komunikatListaOczekujacych = 'Sign up for the waiting list and use Daily Sales Mentor <b>for free - forever!</b>';
$image = 'background2.png';
$imagephone = 'background-phone2.png';
$button = "More";
require 'sekcja2.php';

$header = 'Personalized schedule';
$description = 'Set your own schedule, deciding what time you want to receive daily lessons. This way, you can adjust your learning to the rhythm of your day.';
$komunikatListaOczekujacych = 'Sign up for the waiting list and use Daily Sales Mentor <b>for free - forever!</b>';
$description2 = '';
$image = 'background3.png';
$imagephone = 'background-phone3.png';
$button = "More";
require 'sekcja2.php';

$header = 'Favorite sales techniques';
$description = "If you particularly like any of the techniques, add it to your favorites so you can return to it at any time. You can also send it to your email for easy access.";
$komunikatListaOczekujacych = 'Sign up for the waiting list and use Daily Sales Mentor <b>for free - forever!</b>';
$description2 = '';
$image = 'background4.png';
$imagephone = 'background-phone4.png';
$button = "More";
require 'sekcja2.php';

$header = 'Privacy';
$description = 'Your data is important to us. We ensure that we do not share any information about our users with third parties. We care about the protection of your personal data and comply with GDPR (General Data Protection Regulation) rules.';
$komunikatListaOczekujacych = 'Sign up for the waiting list and use Daily Sales Mentor <b>for free - forever!</b>';
$description2 = '100% privacy';
$image = 'background7.png';
$imagephone = 'background-phone7.png';
$button = "More";
require 'sekcja2.php';

$header = 'Sign up for the waiting list and use Daily Sales Mentor for free - forever!';
$description = "Don't miss this unique opportunity and gain access to unlimited sales technique knowledge for free!";
$komunikatListaOczekujacych = 'Sign up for the waiting list and use Daily Sales Mentor <b>for free - forever!</b>';
$description2 = '100% privacy';
$image = 'background5.png';
$imagephone = 'background-phone5.png';
$buttonZapisz = "Sign up";
require 'sekcja4.php';

$header = 'Multilingual versions';
$description = 'The app will be available in Polish, English, and Spanish, allowing users from different countries to use it.';
$komunikatListaOczekujacych = 'Sign up for the waiting list and use Daily Sales Mentor <b>for free - forever!</b>';
$description2 = 'Polish, English, and Spanish';
$image = 'background6.png';
$imagephone = 'background-phone6.png';
$button = "More";
require 'sekcja2.php';
?>