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

  </main>
</body>
</html>