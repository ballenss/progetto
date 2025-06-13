<!DOCTYPE html>
<html lang="it">
<head>
  <?php require '../sezioni/header_admin.php' ?>
  <title>Modifica servizio</title>
</head>

<body>
  <?php require '../sezioni/navbar_admin.php' ?>

  <article id="article_home">
    <section class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">

          <h1 class="mb-4 text-center">Elenco prodotti</h1>

          <?php
          // Connessione al database
          $connessione = new mysqli("localhost", "root", "", "sito");
          if ($connessione->connect_error) {
              die("Connessione fallita: " . $connessione->connect_error);
          }

          // Query
          $risultato = $connessione->query("SELECT * FROM vestiti");

          if ($risultato->num_rows > 0) {
              echo "<ul class='list-group'>";
              while ($row = $risultato->fetch_assoc()) {
                  echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
                  echo htmlspecialchars($row['nome']);
                  echo "<a href='../modifica_prodotto.php" .  "' class='btn btn-sm btn-primary'>Modifica</a>";
                  echo "</li>";
              }
              echo "</ul>";
          } else {
              echo "<p>Nessun prodotto trovato.</p>";
          }

          $connessione->close();
          ?>

        </div>
      </div>
    </section>
  </article>

  <?php require '../sezioni/footer.php' ?>
</body>
</html>
