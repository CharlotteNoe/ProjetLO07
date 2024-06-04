
<!-- ----- début fragmentAdministrateurMenu -->

<nav class="navbar navbar-expand-lg bg-success fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="router1.php?action=CaveAccueil">NOE- | administrateur | <?php echo($_SESSION['login']) ?> |</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Banques</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="router1.php?action=administrateurReadAllBanque">Liste des banques</a></li>
              <li><a class="dropdown-item" href="router1.php?action=administrateurBanqueCreate">Ajout d'une banque</a></li>
              <li><a class="dropdown-item" href="router1.php?action=administrateurReadBanque">Liste des comptes d'une banque</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clients</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router1.php?action=administrateurReadAllClient">Liste des clients</a></li>
            <li><a class="dropdown-item" href="router1.php?action=administrateurReadAllAdministrateur">Liste des administrateurs</a></li>
            <li><a class="dropdown-item" href="router1.php?action=administrateurReadAllCompte">Liste des comptes</a></li>
            <li><a class="dropdown-item" href="router1.php?action=administrateurReadAllResidence">Liste des residences</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav> 

<!-- ----- fin fragmentPatrimoineMenu -->

