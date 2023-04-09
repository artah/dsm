<?php
function generateToken() {
    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $token = substr(str_shuffle($chars), 0, 12);
    return $token;
}
?>

<?php
function getBrowserLanguage() {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    return $lang;
}

function setLanguageCookie($lang) {
    setcookie("language", $lang, time() + (86400 * 30), "/"); // 86400 = 1 dzień, 30 dni ważności pliku cookie
}

$accepted_languages = ['pl', 'en', 'es'];

if (isset($_COOKIE['language']) && in_array($_COOKIE['language'], $accepted_languages)) {
    $lang = $_COOKIE['language'];
} else {
    $lang = getBrowserLanguage();
    if (!in_array($lang, $accepted_languages)) {
        $lang = "en"; // Domyślny język to angielski
    }
    setLanguageCookie($lang);
}

?>


<!DOCTYPE html>

<html class="chrome windows desktop page-ready page-loaded"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>Daily Sales Mentor</title>
    <meta property="og:title" content="Main page">
    <meta name="twitter:title" content="Main page">
    <meta name="description" content="This is the main (index) page of your project.">
    <meta name="og:description" content="This is the main (index) page of your project.">
    <meta name="twitter:description" content="This is the main (index) page of your project.">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="./assets/icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="./assets/icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="./assets/icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="./assets/icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="./assets/icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="./assets/icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="./assets/icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="./assets/icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="./assets/icon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="./assets/icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="./assets/icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="./assets/icon/favicon-16x16.png">
<link rel="manifest" href="./assets/icon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="./assets/icon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    
    
    <!-- jQuery 3.6.0 -->
    <script src="./files/jquery.min.js.pobrane"></script>
            <!-- Compressed Styles -->
        <link href="./files/slides.min.css" rel="stylesheet" type="text/css" id="js-slides-css">
    
    
    <!-- Fonts and Material Icons -->
    <link rel="stylesheet" as="font" href="./files/css2" id="js-google-fonts">
    <style id="js-slides-fonts">
        .slides { font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; }
    </style>
<link href="./files/custom_P4673UTA.css" rel="stylesheet" type="text/css">    
  
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: black;
    }

    .modal-content {
        background-color: #000000;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-height: 80%;
        overflow-y: auto;

        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
    
        @media (min-width: 768px) {
  .modal-content {
    background-image: url(assets/background/background1.png);
  }
}
@media (max-width: 767px) {
  .modal-content {
    background-image: url(assets/background/background-phone11.png);
  }
}

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>




</head>
<body class="slides animated noPreload firstSlide stage-1" style="">
<!-- Navigation -->
<nav class="side">
  <div class="navigation default">
    <ul><li class="selected"></li><li></li><li></li><li></li><li></li><li></li><li></li>
    <?php
        if (isset($_GET['mailer'])) {
    echo"<li></li>";
    
    }
    ?>
    </ul>
  </div>
</nav>

<style>
    .language-container {
  position: fixed;
  top: 10px;
  right: 10px;
  z-index: 1000;
}

.language-selector {
  display: flex;
}

.language-flag {
  width: 24px;
  height: auto;
  cursor: pointer;
  margin-left: 5px;
}

</style>



<?PHP
    require './lang/lang-'.$lang.'.php';
?>

    <!-- Compressed Scripts -->
    <script src="./files/slides.min.js.pobrane" type="text/javascript"></script>
    
    
    


    
<div id="privacyPolicyModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <?php require './lang/politykaprywatnosci-'.$lang.'.php'; ?>
  </div>
</div>
    
<script>
    // Pobierz elementy modal, link i przycisk zamknięcia
    var modal = document.getElementById("privacyPolicyModal");
    var link = document.getElementById("privacyPolicyLink");
    var closeBtn = document.getElementsByClassName("close")[0];

    // Otwórz modal, gdy użytkownik kliknie link
    link.onclick = function () {
        modal.style.display = "block";
    };

    // Zamknij modal, gdy użytkownik kliknie przycisk (X)
    closeBtn.onclick = function () {
        modal.style.display = "none";
        window.location.href = "#rejestracja"; // przewiń stronę do sekcji "rejestracja"
    };

    // Zamknij modal, gdy użytkownik kliknie poza nim
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
            window.location.href = "#rejestracja"; // przewiń stronę do sekcji "rejestracja"
        }
    };
</script>




<script>
  document.addEventListener("DOMContentLoaded", function() {
    var languageFlags = document.getElementsByClassName("language-flag");
    for (var i = 0; i < languageFlags.length; i++) {
      languageFlags[i].addEventListener("click", function() {
        var lang = this.getAttribute("data-lang");
        setLanguageCookie(lang);
        location.reload();
      });
    }
  });

  function setLanguageCookie(lang) {
    var date = new Date();
    date.setTime(date.getTime() + (30 * 24 * 60 * 60 * 1000));
    var expires = "expires=" + date.toUTCString();
    document.cookie = "language=" + lang + ";" + expires + ";path=/";
  }
</script>

</body></html>