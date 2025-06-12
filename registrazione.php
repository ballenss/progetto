<?php
// Includo il file per connettere il database
  require_once 'connessione.php';

  // prendo i valori dal form e li mettiamo in variabili
  $user = $_POST[ "username" ];
  $pwd = $_POST["password"]; 
  $cogn = $_POST["cognome"];
  $mail = $_POST["mail"];

  // controllo se l'utente ha inserito username
  if (empty($user)) {echo "campo utente vuoto"; exit();}

  // controllo se lo user è presente nel database
  $s= "SELECT cognome FROM utenti WHERE username='$user'";
  $ris= mysqli_query($conn,$s);
  $n=mysqli_num_rows($ris);
  // se non c'è
  if ($n==0){ 
    // inserisco l'utente nel database
    $s = "INSERT INTO utenti (username, password, mail, cognome)
    VALUES ('$user', '$psw', '$mail', '$cogn')";
    $tmp = mysqli_query($conn,$s);
    if ($tmp) { 
      echo "dato inserito correttamente";
      sleep(2);
      header("location:login.html") ; 
    }else {
      echo "errore inserimento dato ".mysqli_error($conn);
    };
      

  }
  else {
    echo "utente esiste gia', cambia username";
  sleep(10);
  }

header("location:registrazione.html") ; 

mysqli_close($conn);

?> 