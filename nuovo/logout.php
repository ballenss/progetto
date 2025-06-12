<?php
// Avvia la sessione
session_start();

// Distrugge completamente la sessione
session_destroy();

// Reindirizza l'utente alla pagina di login
header("Location: login.php");
exit;
?>
