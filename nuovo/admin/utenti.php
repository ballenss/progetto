<!DOCTYPE html>
<html lang="it">
<head>
  <?php require '../sezioni/header_admin.php' ?>
  <title>Modifica Utente</title>
</head>

<body>
  <?php require '../sezioni/navbar_admin.php' ?>

  <article id="article_home">
    <section class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">

          <h1 class="mb-4 text-center">Elenco utenti</h1>

          <?php
         
     // Includiamo il file per connettere il database
        require_once '../util/connessione.php';
 
              $query = "SELECT * FROM utenti";
                      // Query
                      $risultato =mysqli_query($connessione, $query);

                      // Controllo se la query ha restituito risultati
                      $n = mysqli_num_rows($risultato);
                      if ($risultato && $n > 0) {
                        echo "<ul class='list-group'>";
                        while ($riga = mysqli_fetch_assoc($risultato)) {
                          echo "<li class='list-group-item'>";
                          echo "<div class='row align-items-center'>";

                          // Colonna nome prodotto
                          echo "<div class='col-md-8'>";
                          echo $riga['username'] . " - <strong>" . $riga['mail'] . "</strong> - "  . $riga['Nome'] . " - " .  $riga['cognome'];
                          echo "</div>";

                          echo "<div class='col-md-4 text-end'>";
                          echo "<a href='elimina_utente.php?id=" . $riga["id"] . "' class='btn btn-sm btn-danger'>Elimina</a>";
                          echo "</div>";

                          echo "</div>";
                          echo "</li>";
                      }

                  echo "</ul>";
          } else {
              echo "<p>Nessun utente trovato.</p>";
          }

          mysqli_close($connessione);
          ?>

        </div>
      </div>
    </section>
  </article>

  <?php require '../sezioni/footer_admin.php' ?>
</body>
</html>
