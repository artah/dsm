<?php
$politykaPrywatnosci = "Polityka prywatności";
if (isset($_GET['mailer'])) {
    if ($_GET['mailer'] == 'ok') {
  $header = 'Twój codzienny przewodnik<br>w sprzedaży online.';
$description = 'Dziękujemy za zapisanie się na listę oczekujących. Będziemy Cię na bieżąco informować o postępach prac.';
$komunikatListaOczekujacych = '';
$description2 = '';
$image = 'background7.png';
$imagephone = 'background-phone8.png';
$button = 'Więcej';
require 'sekcja5.php';
    }
    if ($_GET['mailer'] == 'mail') {
  $header = 'Twój codzienny przewodnik<br>w sprzedaży online.';
$description = 'Dziękujemy za podanie adresu mail. Wysłaliśmy na niego wiadomość z linkiem potwierdzającym. Jeżeli nie doszła, to sprawdź proszę folder SPAM, OKAZJE i INNE';
$komunikatListaOczekujacych = '';
$description2 = '';
$image = 'background7.png';
$imagephone = 'background-phone8.png';
$button = 'Więcej';
require 'sekcja5.php';
    }
} 

$header = 'Twój codzienny przewodnik<br>w sprzedaży online.';
$description = 'Daily Sales Mentor to rewolucyjna, bezpłatna aplikacja dedykowana przedsiębiorcom, specjalistom marketingu i wszystkim, którzy chcą zwiększyć swoją sprzedaż online.';
$komunikatListaOczekujacych = 'Zapisz się na listę oczekujących i korzystaj z Daily Sales Mentor <b>za darmo - na zawsze!</b>';
$description2 = '';
$image = 'background1.png';
$imagephone = 'background-phone1.png';
$button = 'Więcej';
require 'sekcja1.php';

$header = 'Codzienne lekcje<br>z technikami sprzedaży';
$description = 'Otrzymuj codziennie skrócone lekcje prezentujące różnorodne techniki sprzedaży.';
$description2 = '365 lekcji na 365 dni!';
$komunikatListaOczekujacych = 'Zapisz się na listę oczekujących i korzystaj z Daily Sales Mentor <b>za darmo - na zawsze!</b>';
$image = 'background2.png';
$imagephone = 'background-phone2.png';
$button = 'Więcej';
require 'sekcja2.php';

$header = 'Personalizowany harmonogram';
$description = 'Ustal własny harmonogram, decydując o godzinie, o której chcesz otrzymywać codzienne lekcje. Dzięki temu, będziesz mógł dostosować naukę do swojego rytmu dnia.';
$komunikatListaOczekujacych = 'Zapisz się na listę oczekujących i korzystaj z Daily Sales Mentor <b>za darmo - na zawsze!</b>';
$description2 = '';
$image = 'background3.png';
$imagephone = 'background-phone3.png';
$button = 'Więcej';
require 'sekcja2.php';

$header = 'Ulubione techniki sprzedaży';
$description = 'Jeśli któraś z technik szczególnie Ci się spodoba, dodaj ją do swoich ulubionych, aby móc do niej wrócić w każdej chwili. Możesz też wysłać ją sobie na e-mail i mieć łatwy dostęp.';
$komunikatListaOczekujacych = 'Zapisz się na listę oczekujących i korzystaj z Daily Sales Mentor <b>za darmo - na zawsze!</b>';
$description2 = '';
$image = 'background4.png';
$imagephone = 'background-phone4.png';
$button = 'Więcej';
require 'sekcja2.php';

$header = 'Prywatność';
$description = 'Twoje dane są dla nas ważne. Zapewniamy, że nie przekazujemy żadnych informacji o naszych użytkownikach osobom trzecim. Dbamy o ochronę Twoich danych osobowych i przestrzegamy zasad RODO (Regulaminu Ochrony Danych Osobowych).';
$komunikatListaOczekujacych = 'Zapisz się na listę oczekujących i korzystaj z Daily Sales Mentor <b>za darmo - na zawsze!</b>';
$description2 = '100% prywatności';
$image = 'background7.png';
$imagephone = 'background-phone7.png';
$button = 'Więcej';
require 'sekcja2.php';

$header = 'Zapisz się na listę oczekujących i korzystaj z Daily Sales Mentor za darmo - na zawsze!';
$description = 'Nie przegap tej wyjątkowej okazji i zyskaj dostęp do nieograniczonej wiedzy o technikach sprzedaży za darmo!';
$komunikatListaOczekujacych = 'Zapisz się na listę oczekujących i korzystaj z Daily Sales Mentor <b>za darmo - na zawsze!</b>';
$description2 = '100% prywatności';
$image = 'background5.png';
$imagephone = 'background-phone5.png';
$buttonZapisz = "Zapisz się";
require 'sekcja4.php';

$header = 'Wersje wielojęzyczne';
$description = 'Aplikacja dostępna będzie w języku polskim, angielskim i hiszpańskim, co pozwala na korzystanie z niej przez użytkowników z różnych krajów.';
$komunikatListaOczekujacych = 'Zapisz się na listę oczekujących i korzystaj z Daily Sales Mentor <b>za darmo - na zawsze!</b>';
$description2 = 'Polski, angielski i hiszpański';
$image = 'background6.png';
$imagephone = 'background-phone6.png';
$button = 'Więcej';
require 'sekcja2.php';
?>