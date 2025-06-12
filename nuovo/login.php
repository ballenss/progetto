<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        // Includiamo il file per connettere il database
        require_once 'connessione.php';
        session_start();
        
        // Controllo se è una POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // il valore login del form
            $login = $_POST["login"];
            $pwd = $_POST["password"];

            echo "Hai inviato una POST! Ciao " . $login;

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
                }
            }
        }else{
            echo "Hai inviato una GET!";
        }
    ?>

    <form action="login.php" method="POST">
    Username:  <input type="text" name="login">
    Password:  <input type="text" name="password" >
  <button type="submit">Invia</button>
</form>
    
</body>
</html>