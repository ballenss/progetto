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


    <?php

     // Includiamo il file per connettere il database
        require_once '../util/connessione.php';

        require '../sezioni/leggi_prodotto.php';

    ?>
    
    <h1 class="mb-4 text-center">Modifica prodotto</h1>
      <form class="needs-validation" action="prodotto_modificato.php" method="POST" novalidate>
        
        <!-- Campo ID (nascosto) -->
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

        <!-- Campo Nome -->
        <div class="mb-3 row">
          <label for="nome" class="col-sm-4 col-form-label">Nome</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $nome ?>" required>
            <div class="invalid-feedback">Inserisci il nuovo nome</div>
          </div>
        </div>

        <!-- Campo Tipo -->
        <div class="mb-3 row">
          <label for="tipo" class="col-sm-4 col-form-label">Tipo</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="tipo" id="tipo" value="<?php echo $tipo ?>" required>
            <div class="invalid-feedback">Inserisci il tipo.</div>
          </div>
        </div>

        <!-- Campo Descrizione -->
        <div class="mb-3 row">
          <label for="descrizione" class="col-sm-4 col-form-label">Descrizione</label>
          <div class="col-sm-8">
            <textarea class="form-control" name="descrizione" id="descrizione" rows="10" cols="40"  required><?php echo $descrizione ?></textarea>
            <div class="invalid-feedback">Inserisci la descrizione.</div>
          </div>
        </div>

        <!-- Campo Genere -->
        <div class="mb-3 row">
          <label for="genere" class="col-sm-4 col-form-label">Genere</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="genere" id="genere" value="<?php echo $genere ?>" required>
            <div class="invalid-feedback">Inserisci il genere.</div>
          </div>
        </div>

        <!-- Campo Immagine -->
        <div class="mb-3 row">
          <label for="immagine" class="col-sm-4 col-form-label">Immagine</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="immagine" id="immagine" value="<?php echo $immagine ?>" required>
            <div class="invalid-feedback">Inserisci l'immagine.</div>
          </div>
        </div>

        <!-- Campo Prezzo -->
        <div class="mb-4 row">
          <label for="prezzo" class="col-sm-4 col-form-label">Prezzo</label>
          <div class="col-sm-8">
           <input type="number" class="form-control" name="prezzo" id="prezzo" value="<?php echo $prezzo ?>" step="0.01" min="0" required>
            <div class="invalid-feedback">Inserisci il prezzo.</div>
          </div>
        </div>

        <!-- Pulsante -->
        <div class="text-center">
          <button class="btn btn-primary" type="submit">Modifica prodotto</button>
  </div>

      </form>

    </div>
  </div>
</section>
   

       </article>
       

   <!-- includo footer -->

 <?php require '../sezioni/footer_admin.php' ?>

    </body>

</html>