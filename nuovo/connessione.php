<?php
//connessione PHP con MySQL - indirizzo su cui gira il server, username e password
   $server="localhost";
    $user="root";
    $password=""; 
    $database="sito";

    // connessione a MySQL tramite mysql_connect() al DB
    $connessione = mysqli_connect($server, $user, $password, $database)
    or die("errore di connessione".mysqli_connect_error());


?>