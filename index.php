<!-- Costruire una pagina index.php contenente un form per il login di un utente.
     Dopo aver fatto il login si viene indirizzati alla pagina home.php. -->

<?php
    
    /* NOTA: in sessione bisogna salvare solo l’username o l’id dell’utente così da recuperare i dati dell’utente dal database solo all’evenienza.
    La sessione ci permette di sapere se l’utente è loggato o meno (usando la funzione isset posso verificare se esiste una chiave username o id, l’utente è loggato). */
    session_start();
    if(isset($_SESSION["username"])){ //hai gia fatto il login
        header("Location: connessione.php");
        exit;
    }
?>
<html>
    <head>

    </head>
    <h1>Benvenuto, puoi effettuare il login</h1>
    
    <body>
        <form action = "connessione.php" method = "POST">
            <input type = "text" name = "username" placeholder=" username"/> <input type = "password" name = "password" placeholder=" password"/> 
            <br><br>
            <input type = "submit" value = "login"/> &nbsp; &nbsp; <a href = "registrazione.php" > registrati</a> 
        </form>
    </body>
	<footer> 
	<p><a href="logout.php">Logout</a></p>
</footer> 
</html>


