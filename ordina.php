<?php
session_start();
if (!isset($_SESSION["username"]){header(location:"login.html");};
$quanti=$_POST["quanti"];
$cognome=$_SESSION["cognome"]; $nome=$_SESSION["nome"];
$username=$_SESSION["username"]; $tipo=$_SESSION["tipo"];
$marca=$_SESSION["marcaprodotto"];
$nomeprodotto=$_SESSION["nomeprodotto"];
$prezzo=$_SESSION["Prezzoprodotto"];

echo "grazie $cognome per il tuo ordine <P>";
$totale=$prezzo*$quanti;

echo "la fattura totale in Euro: $totale <P>";
$punti=$totale*2;
echo "che vale $punti<P>";
echo "per cui il tuo nuovo saldo punti: ";

$conn=mysqli_connect; 
$s="SELECT punti FROM utenti WHERE username='$username'";
$ris=mysqli_query($conn,$s);
$riga=mysqli_fetch_assoc($ris);
$vecchipunti=$riga["punti"];
$nuovipunti=$vecchipunti+$punti;
echo "$nuovipunti <P>";
$s="UPDATE utenti SET punti=$nuovipunti WHERE username='$username'";
$ris=mysqli_query($conn,$s);
echo "arrivederci";
session_destroy();

?>

