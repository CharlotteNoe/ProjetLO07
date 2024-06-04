
<!-- ----- début fragmentClientMenu -->

<nav class="navbar navbar-expand-lg bg-success fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="router1.php?action=Accueil">NOE- | Client | <?php echo($_SESSION['login']) ?> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mes comptes bancaires</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="router1.php?action=clientReadAllCompte">Liste des mes comptes</a></li>
              <li><a class="dropdown-item" href="router1.php?action=clientCompteCreate">Ajouter un nouveau compte</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Se connecter</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="router1.php?action=patrimoineLogOut">Se deconnecter</a></li>
          </ul>
        </li>

        
      </ul>
    </div>
  </div>
</nav> 

<!-- ----- fin fragmentClientMenu -->

