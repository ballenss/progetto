<!DOCTYPE html>

<html lang="it">
    
    <head>
<!-- includo header -->
      <?php require 'sezioni/header.php' ?>
      <title> Guess - Shop online</title>
    </head>

    <body>

      <!-- includo navbar -->
      <?php require 'sezioni/navbar.php' ?>

       <article id="article_home">
          <h1>Profilo <?php echo $_SESSION["nome"] ?></h1>
          <div class="card shadow-lg rounded-4">
    <div class="card-body">
      <h4 class="card-title mb-4">Profilo Utente</h4>

      <div class="row mb-3">
        <div class="col-sm-3 fw-bold text-muted">Nome</div>
        <div class="col-sm-9"><?php echo $_SESSION["nome"]; ?></div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-3 fw-bold text-muted">Cognome</div>
        <div class="col-sm-9"><?php echo $_SESSION["cognome"]; ?></div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-3 fw-bold text-muted">Username</div>
        <div class="col-sm-9"><?php echo $_SESSION["username"]; ?></div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-3 fw-bold text-muted">Email</div>
        <div class="col-sm-9"><?php echo $_SESSION["mail"]; ?></div>
      </div>
    </div>
    
         </div>
  <div class="card shadow-lg rounded-4 mt-4">
    <div class="card-body">
      <h4 class="card-title mb-4">Modifica password</h4>
         <!-- Sezione per modificare i dati del profilo -->
          <form class="row g-3 needs-validation" action="modifica_password.php" method="POST" novalidate>
  

  <!-- Vecchia password -->
  <div class="col-md-3 position-relative">
    
    <label for="vecchia_password" class="form-label">Vecchia password</label>
    <input type="text" name="vecchia_password" class="form-control" id="vecchia_password" required>
    <div class="invalid-tooltip">
      Inserisci la vecchia password.
    </div>
  </div>

  <!-- Nuova password -->
  <div class="col-md-3 position-relative">
    <label for="nuova_password" class="form-label">Nuova password</label>
    <input type="text" name="nuova_password" class="form-control" id="nuova_password" required>
    <div class="invalid-tooltip">
      Inserisci una nuova password.
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Modifica dati</button>
  </div>
</form> 
</div></div>
       </article>
       

   <!-- includo footer -->

 <?php require 'sezioni/footer.php' ?>

    </body>

</html>