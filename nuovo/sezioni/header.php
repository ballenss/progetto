<meta charset="UTF-8" />
<link rel="icon" type="immagini/png" href="immagini/favicon.png">
<meta name="keywords" content="moda, uomo, donna, teen, bambino, accessori" />
<meta name="description" content="Ecommerce del brand Guess" />
<meta name="author" content="Martina Ballesio" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

<?php 
 session_start();
  if(!isset($_SESSION["username"])){ //hai gia fatto il login
        header("Location: login.php");
        exit;
    }
 ?>