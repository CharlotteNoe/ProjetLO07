<?php
require_once '../model/ModelPersonne.php';
?>
<!-- ----- début fragmentPatrimoineMenu -->

<nav class="navbar navbar-expand-lg bg-success fixed-top">
    <div class="container-fluid">
        <?php
        switch ($_SESSION['statut']) {
            case ModelPersonne::ADMINISTRATEUR:
                echo('<a class="navbar-brand" href="router1.php?action=Accueil">NOE-GAGNIERE | Administrateur | ' . $_SESSION['nom'] .' '. $_SESSION['prenom']. ' | </a>');
                break;
            case ModelPersonne::CLIENT:
                echo('<a class="navbar-brand" href="router1.php?action=Accueil">NOE-GAGNIERE | Client | ' . $_SESSION['nom'] .' '. $_SESSION['prenom'] . ' | </a>');
                break;
            default:
                echo('<a class="navbar-brand" href="router1.php?action=Accueil">NOE-GAGNIERE | Non connecté |</a>');
                break;
        }
        ?>
        <!--echo('<a class="navbar-brand" href="router1.php?action=CaveAccueil">NOE-| </a>');-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                switch ($_SESSION['statut']) {
                    case ModelPersonne::ADMINISTRATEUR:
                        echo('<li class="nav-item dropdown">');
                        echo('<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Banques</a>');
                        echo('<ul class="dropdown-menu">');
                        echo('<li><a class="dropdown-item" href="router1.php?action=administrateurReadAllBanque">Liste des banques</a></li>');
                        echo('<li><a class="dropdown-item" href="router1.php?action=administrateurBanqueCreate">Ajout d' . "'une banque</a></li>");
                        echo('<li><a class="dropdown-item" href="router1.php?action=administrateurReadBanque">Liste des comptes d' . "'une banque</a></li>");
                        echo('</ul>');
                        echo('</li>');

                        echo('<li class="nav-item dropdown">');
                        echo('<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clients</a>');
                        echo('<ul class="dropdown-menu">');
                        echo('<li><a class="dropdown-item" href="router1.php?action=administrateurReadAllClient">Liste des clients</a></li>');
                        echo('<li><a class="dropdown-item" href="router1.php?action=administrateurReadAllAdministrateur">Liste des administrateurs</a></li>');
                        echo('<li><a class="dropdown-item" href="router1.php?action=administrateurReadAllCompte">Liste des comptes</a></li>');
                        echo('<li><a class="dropdown-item" href="router1.php?action=administrateurReadAllResidence">Liste des residences</a></li>');
                        echo('</ul>');
                        echo('</li>');

                        break;

                    case ModelPersonne::CLIENT:
                        echo('<li class="nav-item dropdown">');
                        echo('<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mes comptes bancaires</a>');
                        echo('<ul class="dropdown-menu">');
                        echo('<li><a class="dropdown-item" href="router1.php?action=clientReadAllCompte">Liste des mes comptes</a></li>');
                        echo('<li><a class="dropdown-item" href="router1.php?action=clientCompteCreate">Ajouter un nouveau compte</a></li>');
                        echo('<li><a class="dropdown-item" href="router1.php?action=clientTransfertInterCompte">Transfert inter-compte (TODO)</a></li>');
                        echo('</ul>');
                        echo('</li>');

                        echo('<li class="nav-item dropdown">');
                        echo('<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mes résidences</a>');
                        echo('<ul class="dropdown-menu">');
                        echo('<li><a class="dropdown-item" href="router1.php?action=clientReadAllResidence">Liste des mes résidences (TODO)</a></li>');
                        echo('<li><a class="dropdown-item" href="router1.php?action=clientResidenceAchat">Achat d' . "'une nouvelle résidence (TODO)</a></li>");
                        echo('</ul>');
                        echo('</li>');

                        echo('<li class="nav-item dropdown">');
                        echo('<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mon patrimoine</a>');
                        echo('<ul class="dropdown-menu">');
                        echo('<li><a class="dropdown-item" href="router1.php?action=clientReadPatrimoine">Bilan de mon patrimoine (TODO)</a></li>');
                        echo('</ul>');
                        echo('</li>');

                        break;

                    default:
                        break;
                }
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Innovations</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item">...</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Se
                        connecter</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="router1.php?action=patrimoineConnexion">Login</a></li>
                        <li><a class="dropdown-item" href="router1.php?action=patrimoineInscription">S'inscrire
                                (TODO)</a></li>
                        <li><a class="dropdown-item" href="router1.php?action=patrimoineLogOut">Se deconnecter</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- ----- fin fragmentPatrimoineMenu -->

