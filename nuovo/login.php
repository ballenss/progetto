<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="immagini/png" href="immagini/favicon.png">
        <meta name="keywords" content="moda, uomo, donna, teen, bambino, accessori" />
        <meta name="description" content="Ecommerce del brand Guess" />
        <meta name="author" content="Martina Ballesio" />
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    </head>
<body>

<header> 
         <a href="index.html"> 
          <img src="immagini/logo.svg" alt="logo" title="logo" id="logo" />
         </a>
       </header>
    <?php
        // Includiamo il file per connettere il database
        require_once 'util/connessione.php';
        session_start();
        
        // Controllo se è una POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // il valore login del form
            $login = $_POST["login"];
            $pwd = $_POST["password"];

            echo "Hai inviato una POST!";

            // query con cognome e password da utenti
            $query = "SELECT cognome, password from utenti where username='$login'";
            // eseguiamo la query
            $risultato = mysqli_query($connessione, $query);
            // conto quanti risultati ha la query
            $n = mysqli_num_rows($risultato);
            if($n == 0){
                echo "L'username non esiste, registrati!";
            }else{
                // prende una riga della tabella del risultato
                $riga = mysqli_fetch_assoc($risultato);
                if($pwd != $riga["password"]){
                    echo "Hai sbagliato la password";
                }else{
                    echo "Ciao " . $riga["cognome"];
                    $_SESSION["username"]=$login;
                    $_SESSION["cognome"] = $riga["cognome"];
                }
            }
        }else{
            echo "Hai inviato una GET!";
        }
    ?>

    <h1>Login</h1>
    <form action="login.php" method="POST" class="border border-success p-2 mb-2">
    <div class="mb-3 mt-3">Username:  <input type="text" name="login"> <br /> </div>
    <div class="mb-3">Password:  <input type="text" name="password" ></div>
    <button type="submit" class="btn btn-primary">Invia</button>
    </form>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>
</html>