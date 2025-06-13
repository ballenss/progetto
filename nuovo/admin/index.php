<!DOCTYPE html>

<html lang="it">
    
    <head>
<!-- includo header -->
      <?php require '../sezioni/header_admin.php' ?>
      <title>Amministrazione</title>
    </head>

    <body>

      <!-- includo navbar -->
      <?php require '../sezioni/navbar_admin.php' ?>

       <article id="article_home">
          <h1 lang="en">Amministrazione</h1>

          <section>
              <a href="aggiungi_servizio.php"><h2 class="titoli_home"> Aggiungi servizio </h2></a>

			</section>         
            
            <section>
              <a href="prodotti.php"><h2 class="titoli_home"> Prodotti </h2></a>

			</section>
			
          <section>
              <h2 class="titoli_home"> Novità donna </h2>
              <img src="immagini/felpa-donna.jpg" alt="felpa-donna" title="felpa-donna"
                    class="immagine-shop">
              <img src="immagini/maglietta-donna.jpg" alt="maglietta donna" title="maglietta donna" 
                     class="immagine-shop">
              <img src="immagini/jeans-donna.jpg" alt="jeans donna" title="jeans donna" 
                     class="immagine-shop">
          </section>
		  
          <section>
              <h2 class="titoli_home"> Novità bambino </h2>
              <img src="immagini/felpa-bambino.jpg" alt="felpa bambino" title="felpa bambino" 
                    class="immagine-shop">
              <img src="immagini/maglietta-bambino.jpg" alt="maglietta bambino" title="maglietta bambino" 
                      class="immagine-shop">
              <img src="immagini/jeans-bambino.jpg" alt="jeans bambino" title="jeans bambino" 
                   class="immagine-shop">
				   
          </section>
         

       </article>
       

   <!-- includo footer -->

 <?php require '../sezioni/footer.php' ?>

    </body>

</html>