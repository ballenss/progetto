<?php
 $connessione= mysqli_connect($server, $user, $password, $database);
 
   die("Errore di connessione".mysqli_connect_error());
	
$user = $_POST[ "username" ];
$pwd = $_POST["password"]; 
$cogn = $_POST["cognome"];
$mail = $_POST["mail"];

if (empty($user)) {echo "campo utente vuoto"; exit();}
$s= "SELECT cognome FROM utenti WHERE username='$user'";
$tmp= mysqli_query($conn,$s);
$n=mysqli_num_rows($tmp);
if ($n==0)
{ $s = "INSERT INTO utenti (username, cognome, nome, password, punti)
VALUES ('$user', '$cogn', '$nome', '$pwd', 0)";
$tmp = mysqli_query($conn,$s);
if ($tmp) { echo "dato inserito correttamente";
if (mail($mail, "negozio di paperopoli", "grazie per la registrazione"))
echo "Messaggio inviato con successo a" . $mail;
else
echo "Errore. Nessun messaggio inviato a ". $mail;
}
else {echo "errore inserimento dato".mysqli_error($conn);};
}
else {echo "utente esiste gia', cambia username";
sleep(10);
}

header("location:registrazione.html") ; 

mysqli_close($conn);

?> 