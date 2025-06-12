<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Area Utente</title>
</head>
<body>
  <h2>Benvenuto, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
  <p>Questa è l'area riservata agli utenti registrati.</p>
  <a href="logout.php">Logout</a>
</body>
</html>
