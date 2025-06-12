<!DOCTYPE html>

<html lang="it">
    
    <head>
<!-- includo header -->
      <?php require 'sezioni/header.php' ?>
      <title> Guess - Shop online</title>
    </head>

    <body>

      <!-- includo navbar -->
      <?php require 'sezioni/navbar.php' ?>


<?php  
        // Includiamo il file per connettere il database
        require_once 'util/connessione.php'; 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // prendo i valori dal form e li mettiamo in variabili
            $vecchia_password = $_POST["vecchia_password"];
            $nuova_password = $_POST["nuova_password"];
            
            // Controllo se i campi sono vuoti
            if (empty($vecchia_password) || empty($nuova_password)) {
                echo "Tutti i campi sono obbligatori.";
                exit();
            }

            // Verifico se la vecchia password è corretta
            $username = $_SESSION["username"];
            $query = "SELECT password FROM utenti WHERE username='$username'";
            $risultato = mysqli_query($connessione, $query);
            
            if ($risultato && mysqli_num_rows($risultato) > 0) {
                $riga = mysqli_fetch_assoc($risultato);
                if ($riga['password'] !== $vecchia_password) {
                    echo "La vecchia password non è corretta.";
                    exit();
                }
                
                // Aggiorno la password
                $update_query = "UPDATE utenti SET password='$nuova_password' WHERE username='$username'";
                if (mysqli_query($connessione, $update_query)) {
                    echo "Password aggiornata con successo.";
                } else {
                    echo "Errore nell'aggiornamento della password: " . mysqli_error($connessione);
                }
            } else {
                echo "Utente non trovato.";
            }
            
            mysqli_close($connessione);
        }


?>


   <!-- includo footer -->

 <?php require 'sezioni/footer.php' ?>

    </body>

</html>