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

      <form class="needs-validation" action="servizio_aggiunto.php" method="POST" novalidate>
        
        <!-- Campo Nome -->
        <div class="mb-3 row">
          <label for="nome" class="col-sm-4 col-form-label">Nome</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="nome" id="nome" required>
            <div class="invalid-feedback">Inserisci il nome.</div>
          </div>
        </div>

        <!-- Campo Tipo -->
        <div class="mb-3 row">
          <label for="tipo" class="col-sm-4 col-form-label">Tipo</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="tipo" id="tipo" required>
            <div class="invalid-feedback">Inserisci il tipo.</div>
          </div>
        </div>

        <!-- Campo Descrizione -->
        <div class="mb-3 row">
          <label for="descrizione" class="col-sm-4 col-form-label">Descrizione</label>
          <div class="col-sm-8">
            <textarea class="form-control" name="descrizione" id="descrizione" required></textarea>
            <div class="invalid-feedback">Inserisci la descrizione.</div>
          </div>
        </div>

        <!-- Campo Genere -->
        <div class="mb-3 row">
          <label for="genere" class="col-sm-4 col-form-label">Genere</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="genere" id="genere" required>
            <div class="invalid-feedback">Inserisci il genere.</div>
          </div>
        </div>

        <!-- Campo Immagine -->
        <div class="mb-3 row">
          <label for="immagine" class="col-sm-4 col-form-label">Immagine</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="immagine" id="immagine" required>
            <div class="invalid-feedback">Inserisci l'immagine.</div>
          </div>
        </div>

        <!-- Campo Prezzo -->
        <div class="mb-4 row">
          <label for="prezzo" class="col-sm-4 col-form-label">Prezzo</label>
          <div class="col-sm-8">
           <input type="number" class="form-control" name="prezzo" id="prezzo" step="0.01" min="0" required>
            <div class="invalid-feedback">Inserisci il prezzo.</div>
          </div>
        </div>

        <!-- Pulsante -->
        <div class="text-center">
          <button class="btn btn-primary" type="submit">Aggiungi servizio</button>
        </div>

      </form>

    </div>
  </div>
</section>
   

       </article>
       

   <!-- includo footer -->

 <?php require '../sezioni/footer.php' ?>

    </body>

</html>