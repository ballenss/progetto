<!DOCTYPE html>

<html lang="it">
    
    <head>
      <meta charset="UTF-8" />
      <title> Calvin Klein - Shop online</title>
	      <link rel="icon" type="immagini/png" href="immagini/favicon.png">
      <meta name="keywords" content="moda, uomo, donna, teen, bambino, accessori" />
      <meta name="description" content="Ecommerce del brand Calvin Klein" />
      <meta name="author" content="martina ballesio" />
      <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

    <body>
       
       <header> 
         <a href="index.html"> 
          <img src="immagini/logo.svg" alt="logo" title="logo" id="logo" />
         </a>
       </header>

       <nav>
         <ul class="ul_menu">
          <li class="li_menu"><a href="uomo.html"> Uomo</a></li>
          <li class="li_menu"><a href="donna.html"> Donna</a> </li>
          <li class="li_menu"><a href="bambino.html"> Bambino</a> </li>
         <li class="li_menu"><a href="offerte.html">Offerte</a></li>
		 </ul>
       </nav>

       <article>
          <h2> Contatti </h2>
          E-mail: info@ch.guess.eu. <br/>
          Telefono: 0039 0699721020 (numero italiano) <br/>
          Servizio Clienti: Lunedì - Sabato: 08:00 - 19:00 (+1)CET
          <br/><br/>
       <h2> Inviaci un messaggio </h2>
         
		<form action="mailto:martina.ballesio592@edu.unito.it" method="post" 
		enctype="text/plain" > 
		
		<fieldset>
		<label for="Nome" class="label">Nome</label><br/>
		<input type="text" name="nome" placeholder="scrivi il tuo nome"
		      size="45" maxlenght="45" />
			  <br></br>
		
		<label for="Cognome" class="label">Cognome</label><br/>
		<input type="text" name="cognome" placeholder="scrivi il tuo cognome"
		 size="45" maxlenght="45" />
		</fieldset>
		<br></br>
		
       <label for="Messaggio" class="label">Messaggio</label></label><br/>
	   <textarea name="commento" cols="50" rows="6">
	Inseriesci qui il tuo messaggio 
	   </textarea>
	   <br></br>
	   
	   <Label for="Genere" class="label">Genere</label><br/>
	   <input type="radio" name="genere" value="F" />Femmina
	   <input type="radio" name="genere" value="M" />Maschio
	    <br></br>
		
	<label for="Motivazione" class="label">Motivazione</label><br/>
	<input type="checkbox" name="motivo" value="Privacy" /> Privacy
	<input type="checkbox" name="motivo" value="Acquisti" /> Acquisti
	<input type="checkbox" name="motivo" value="Lavoro" /> Lavoro
		
		 <br></br>
		 
	<label for="età" class="label">Età</label><br/>
	<select name="età">
	<option value="1">meno di 20 anni</option>
	<option value="1">tra 20 e 40 anni</option>
	<option value="1">più di 40 anni</option>
	</select>
	<br></br>
		
	<label for="documento" class="label">
	Allega il tuo CV o Documento d'identità:
	</label><br/>
	<input type="file" name="allegato" />
	<br></br>
	
	<label for="paese" class="label">Paese di provenienza</label><br/>
		<select name="country" id="paese">
		<optgroup label="Europa">
		<option value="ITA">Italia</option>
		<option value="ENG">Inghilterra</option>
		</optgroup>
		<optgroup label="Stati Uniti" class="label">
		<option value="ALA">Alaska</option>
		<option value="ARI">Arizona</option>
		</optgroup>
		</select>
		<br></br>
	
	<label for="email" class="label">Email:</label> <br/>
	<input type="email" name="email" id="email" placeholder="Inserisci email" />
		<br></br>
	
	<label for="Telefono" class="label">Telefono:</label> <br/>
	<input type="Telefono" name="Telefono" id="Telefono" placeholder="Inserisci telefono" />
		<br></br>
		
	<label for="Sito" class="label">Sito web:</label> <br/>
	<input type="url" name="url" id="url" placeholder="http://www.tuosito.it" />
		<br></br>
	

	<label for="Acquisti" class="label">Numero Acquisti:</label><br/>
	<input type="number" name="numero_acquisti" id="acquisti" placeholder="5"
	min="4" max="20" step="1" />
	<br></br>
	
	<label for="Data-acquisti" class="label">Data Acquisto:</label><br/>
	<input type="date" name="data_partenza" id="data_partenza" step="1"
	min="2010-05-01" max="2010-12-31"  />
	
    <input type="time" name="ora" id="ora" step="1" min="08:00:00"  max="18:30:00" />
	 <input type="month" name="mese" id="mese" />
	  <input type="week" name="settimana" id="settimana" />
	  <br></br>
	  
	 <label for="Colore" class="label">Colore acquisto:</label><br/>
	 <input type="color" name="colore_vestito" id="colore_vestito" />
 <br></br>
	  

 
 <input type="submit" value="Invia" />
	<input type="reset" value="Cancella" />
        </form>
	   
	   
	   
	   
       </article>
       

       <aside>
         <p>
          <strong>Guess Europe SAGL</strong> <br/>
          Strada Regina,44,<br/>
         6934 Bioggio<br/>
          Svizzera<br/>
          Camera di commercio: 10904000154<br/>
          N. d'identificazione fiscale: NL006585978B01<br/>
          Responsabile: Alessandro Bondavalli<br/>
         </p>
         <p>
          <strong>GUESS Italia S.r.l.</strong><br/>
          VIA DE' CATTANI 18<br/>
         50145 - FIRENZE  <br/>
          Italia<br/>
          N. d'identificazione fiscale:IT02168430482 <br/>
         </p>
       </aside>


       <footer>
           <br/>
           Guess Shop Online |
           <a href="faq.html"> Faq </a> | <strong> Contatti </strong><br/>
           Sito web realizzato da Martina Ballesio
           <br/>
       </footer>

    </body>

</html>