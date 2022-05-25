<!-- Consegna
cartella/repo: php-google-faq
Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php
include 'database.php';
// var_dump($faq);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  <title>Php Google Faq</title>
</head>
<body>
  <header>  
    <nav class="container-fluid">
      <div class="nav-top row d-flex nowrap justify-content-start align-items-center">
        <img src="" alt="logo">
        <h1>Privacy e termini</h1>
      </div> <!-- /div nav-top -->
      <div class="nav-bottom row d-flex justify-content-center align-items-center">
        <ul>
          <li>Introduzione</li>
          <li>Norme sulla privacy</li>
          <li>Termini di servizio</li>
          <li>Tecnologie</li>
          <li class="active">Domande frequenti</li>
        </ul>
      </div> <!-- /div nav-bottom -->
    </nav>
  </header>
  <main>
    <div class="container"> 
      <ul>
        <?php 
        for( $i= 0; $i < count($faq); $i++){ ?>
        <li>
        <?php echo "{$faq[$i]['question']} {$faq[$i]['answer']} <br>"; ?>
        </li>
        <?php 
        }
        ?>
      </ul> 
    </div>
    <!--  Versione foreach -->
    <div class="container debug">
      <?php foreach($faq as $value){ ?>
        
          <h2><?php echo $value['question']; ?></h2>
          <p><?php echo $value['answer']; ?></p>


        <?php } ?>
  
    </div>



  </main>

  <footer class="container-fluid">  
    <div class="footer-nav container">
      <div class="footer-bottom row d-flex justify-content-center align-items-center">
        <ul>
          <li>Google</li>
          <li>.</li>
          <li>Tutto su Google</li>
          <li>.</li>
          <li>Provaci</li>
          <li>.</li>
          <li>Termini</li>
        </ul>
      </div> <!-- /div footer-top -->
      <div class="footer-top row d-flex nowrap justify-content-start align-items-center">
        <!-- <span class="globe"></span> -->
        <div class="globo"><label class="gZggid" for="i3">Cambia lingua:</label><select class="iCthae" id="i3" jsname="O1htCb"><option value="af">Afrikaans</option><option value="id">Bahasa Indonesia</option><option value="ms">Bahasa Melayu</option><option value="ca">Català</option><option value="cs">Čeština</option><option value="da">Dansk</option><option value="de">Deutsch</option><option value="et">Eesti</option><option value="en">English</option><option value="en-GB">English (United Kingdom)</option><option value="es">Español</option><option value="es-419">Español (Latinoamérica)</option><option value="eu">Euskara</option><option value="fil">Filipino</option><option value="fr">Français</option><option value="fr-CA">Français (Canada)</option><option value="gl">Galego</option><option value="hr">Hrvatski</option><option value="zu">Isizulu</option><option value="is">Íslenska</option><option selected="" value="it">Italiano</option><option value="sw">Kiswahili</option><option value="lv">Latviešu</option><option value="lt">Lietuvių</option><option value="hu">Magyar</option><option value="nl">Nederlands</option><option value="no">Norsk</option><option value="pl">Polski</option><option value="pt-BR">Português (Brasil)</option><option value="pt-PT">Português (Portugal)</option><option value="ro">Română</option><option value="sk">Slovenčina</option><option value="sl">Slovenščina</option><option value="sr-Latn">Srpski</option><option value="fi">Suomi</option><option value="sv">Svenska</option><option value="vi">Tiếng Việt</option><option value="tr">Türkçe</option><option value="el">Ελληνικά</option><option value="bg">Български</option><option value="ru">Русский</option><option value="sr">Српски</option><option value="uk">Українська</option><option value="iw">&#x202B;עברית&#x202C;</option><option value="ur">&#x202B;اردو&#x202C;</option><option value="ar">&#x202B;العربية&#x202C;</option><option value="fa">&#x202B;فارسی&#x202C;</option><option value="am">አማርኛ</option><option value="mr">मराठी</option><option value="hi">हिन्दी</option><option value="bn">বাংলা</option><option value="gu">ગુજરાતી</option><option value="ta">தமிழ்</option><option value="te">తెలుగు</option><option value="kn">ಕನ್ನಡ</option><option value="ml">മലയാളം</option><option value="th">ไทย</option><option value="ko">한국어</option><option value="zh-HK">中文 (香港)</option><option value="zh-CN">中文（简体中文）</option><option value="zh-TW">中文（繁體中文）</option><option value="ja">日本語</option></select></div>
      </div> <!-- /div footer-bottom -->
    <div> <!-- /div footer-nav -->
  </footer>


</body>
</html>