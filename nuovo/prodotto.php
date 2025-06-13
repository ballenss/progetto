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

      <?php 
     // Includiamo il file per connettere il database
        require_once 'util/connessione.php';
        require 'sezioni/leggi_prodotto.php'; 
        ?>

<article>
 
          <section>
              <h2 class="titoli_home"> <?php echo $nome; ?> </h2>
			  
		
 
           <img src="<?php echo $immagine; ?>" alt="<?php echo $descrizione; ?>" title="<?php echo $nome; ?>" 
                 id="immagine-prodotto-singolo">
				 
				 
				 <br/>
				  
				 <strong>Prezzo:</strong> <?php echo $prezzo; ?> euro
				 
				 <br/>
				 <div>
				 <strong>Dettagli:</strong> 
         <p><?php echo $descrizione; ?></p>
                <strong>Genere:</strong> 
         <p><?php echo $genere; ?></p>
         <strong>Tipo:</strong> 
         <p><?php echo $tipo; ?></p>
				 </div>
				 <br/>
				 
            
          </section>
 

       </article>
       

   <!-- includo footer -->

 <?php require 'sezioni/footer.php' ?>

    </body>

</html>