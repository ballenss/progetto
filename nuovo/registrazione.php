<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
        <link rel="icon" type="immagini/png" href="immagini/favicon.ico">
    <title>Registrati</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">
  <main class="flex-grow-1 container py-4"> <div> 
    <h1>Registrati</h1>
	<br>

<form method="post" action="registrazione.php">
  <div class="mb-3">
    <label for="cognome" class="form-label">Cognome</label>
    <input type="text" name="cognome" id="cognome" class="form-control" placeholder="Cognome" required>
  </div>

  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" required>
  </div>

  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="mail" id="email" class="form-control" placeholder="Email" required>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Password (min 8 caratteri)" required>
  </div>

  <button type="submit" class="btn btn-primary">Registrati</button>
</form>


    <?php

// Includo il file per connettere il database
  require_once 'util/connessione.php';
  session_start();
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // prendo i valori dal form e li mettiamo in variabili
  $user = $_POST[ "username" ];
  $pwd = $_POST["password"]; 
  $cogn = $_POST["cognome"];
  $nome = $_POST["nome"];
  $mail = $_POST["mail"];

  // controllo se l'utente ha inserito username
  if (empty($user)) {echo "campo utente vuoto"; exit();}
  if (empty($pwd)) {echo "campo password vuoto"; exit();}
  if (strlen($pwd)<8) {echo "La password deve essere lunga almeno 8 caratteri"; exit();}
  if (empty($cogn)) {echo "campo cognome vuoto"; exit();}
  if (empty($nome)) {echo "campo nome vuoto"; exit();}
  if (empty($mail)) {echo "campo mail vuoto"; exit();}

  // controllo se lo user è presente nel database
  $s= "SELECT cognome FROM utenti WHERE username='$user'";
  $ris= mysqli_query($connessione,$s);
  $n=mysqli_num_rows($ris);
  // se non c'è
  if ($n==0){ 
    // inserisco l'utente nel database
    $s = "INSERT INTO utenti (username, password, mail, cognome, nome)
    VALUES ('$user', '$pwd', '$mail', '$cogn', '$nome')";
    $tmp = mysqli_query($connessione,$s);
    if ($tmp) { 
      echo "dato inserito correttamente";
      header("refresh:3;url=login.php") ; 
    }else {
      echo "errore inserimento dato ".mysqli_error($conn);
    }
  }
  else {
    echo "utente esiste gia', cambia username";
  }


mysqli_close($connessione);
}

?> </div>
</main>
   <!-- includo footer -->

 <?php require 'sezioni/footer.php' ?>

	</body> 
	
</HTML>

