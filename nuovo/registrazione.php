<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
    <title>Registrati</title>
</head>
<body>
    <h1>Registrati</h1>
	<br>

<form method="post" action="registrazione.php">
    <label for="cognome">Cognome <input type="text" name="cognome" placeholder="Cognome" required><br> </br> 
    <label for="nome">Nome <input type="text" name="nome" placeholder="Nome" required><br> </br> 
    <label for="username"> Username <input type="text" name="username" placeholder="Username" required><br></br> 
   <label for="email"> Email <input type="email" name="mail" placeholder="Email" required><br></br> 
    <label for="password"> Password <input type="password" name="password" placeholder="Password (min 8 caratteri)" required><br></br> 
   <INPUT TYPE="submit" VALUE="Registrati">
    </FORM>
    
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

?> 


	</body> 
	
</HTML>

