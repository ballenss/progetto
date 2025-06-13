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
              <a href="utenti.php"><h2 class="titoli_home"> Utenti </h2></a>

			</section>
			

       </article>
       

   <!-- includo footer -->

 <?php require '../sezioni/footer_admin.php' ?>

    </body>

</html>