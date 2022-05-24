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
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  <title>Php Google Faq</title>
</head>
<body>
  <main>
    <div> 
    <ul>
        <?php 
        for( $i= 0; $i < count($faq); $i++){ ?>
        <li>
        <?php echo "{$faq[$i]['question']} - {$faq[$i]['answer']} <br>"; ?>
        </li>
        <?php 
        }
        ?>
      </ul> 

 </div>

  </main>
</body>
</html>