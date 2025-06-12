
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

   <a class="navbar-brand" href="index.php"> 
    <img src="immagini/logo.svg" alt="logo" title="logo" id="logo" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li> 

        <li class="nav-item">
          <a class="nav-link" href="#">Offerte</a>
          <a href="offerte.html">
        </li>

<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Genere
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="uomo.php">Uomo</a></li>
            <li><a class="dropdown-item" href="#">Donna</a></li>
            <li><a class="dropdown-item" href="#">Bambino</a></li>
          </ul>
        </li>
 
        
      </ul> 
      <span class="navbar-text px-4">Ciao <?php echo $_SESSION["nome"] ?></span>
      <span class="navbar-text">
        <a href="logout.php">Logout</a>
      </span>
    </div>
  </div>
</nav>
