 <?php

          $query = "SELECT * FROM vestiti where id = " . $_GET['id'];
          // Query
          $risultato =mysqli_query($connessione, $query);

          // Controllo se la query ha restituito risultati
          $n = mysqli_num_rows($risultato);
          if ($risultato && $n > 0) {
            $riga = mysqli_fetch_assoc($risultato);
            $nome = $riga["nome"];
            $descrizione = $riga["descrizione"];
            $genere = $riga["genere"];
            $immagine = $riga["immagine"];
            $prezzo = $riga["prezzo"];
            $tipo = $riga["tipo"];

          } else {
              echo "<p>Nessun prodotto trovato.</p>";
          }
    ?>