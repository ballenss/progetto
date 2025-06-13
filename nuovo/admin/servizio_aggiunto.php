<!DOCTYPE html>

<html lang="it">
    
    <head>
<!-- includo header -->
      <?php require '../sezioni/header_admin.php' ?>
      <title>Aggiungi servizio</title>
    </head>

    <body>

      <!-- includo navbar -->
      <?php require '../sezioni/navbar_admin.php' ?>

       <article id="article_home">
<section class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <h1 class="mb-4 text-center">Aggiungi servizio</h1>

    <?php 
    
     // Includiamo il file per connettere il database
        require_once '../util/connessione.php';

        
        // Controllo se è una POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
             // il valore login del form
            $nome = $_POST["nome"];
            $descrizione = $_POST["descrizione"];
            $genere = $_POST["genere"];
            $immagine = $_POST["immagine"];
            $prezzo = $_POST["prezzo"];
            $tipo = $_POST["tipo"];

            if($prezzo < 0){
              echo "Errore, il prezzo non può essere negativo!";
              exit;
            }
             // inserisco il vestito nel database
            $query = "INSERT INTO vestiti (nome, tipo, descrizione, genere, immagine, prezzo)
            VALUES ('$nome', '$tipo', '$descrizione', '$genere', '$immagine', '$prezzo')";
            $tmp = mysqli_query($connessione,$query);
            if ($tmp) { 
              echo "dato inserito correttamente";

              echo '<meta http-equiv="refresh" content="2;url=aggiungi_servizio.php">';
            }else {
              echo "errore inserimento dato ".mysqli_error($conn);
 
            };
        }else{
          echo "Non è una POST";
        }

    ?>


    </div>
  </div>
</section>
           <!-- Pulsante -->
        <div class="text-center">
          <a href="prodotti.php"><button class="btn btn-primary" >Prodotti</button></a>
  </div>

       </article>
       

   <!-- includo footer -->

 <?php require '../sezioni/footer_admin.php' ?>

    </body>

</html>