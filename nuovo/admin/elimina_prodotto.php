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

<h1 class="mb-4 text-center">Elimina prodotto</h1>
      
    <?php

     // Includiamo il file per connettere il database
        require_once '../util/connessione.php';

          $query = "DELETE FROM vestiti where id = " . $_GET['id'];
          // Query
          $risultato =mysqli_query($connessione, $query);
 
          if ($risultato) {
              echo "<p>Prodotto eliminato con successo.</p>";
              echo '<meta http-equiv="refresh" content="2;url=prodotti.php">';
              
          } else {
              echo "<p>Nessun prodotto trovato.</p>";
          }
    ?>
     

    </div>
  </div>
</section>
   

       </article>
       

   <!-- includo footer -->

 <?php require '../sezioni/footer_admin.php' ?>

    </body>

</html>