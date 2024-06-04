<?php

// ================================================================
// -----> LO07-2019 : PHP Object
// ================================================================

class Charte {

static function html_head_bootstrap3($titre) {
$resultat = "<html>\n";
$resultat .= " <head>\n";
$resultat .= "  <meta charset='UTF-8'>\n";
$resultat .= "  <meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
$resultat .= "  <link href='bootstrap.css' rel='stylesheet'/>\n";
$resultat .= "  <link href='my_css.css' rel='stylesheet'/>\n";

$resultat .= "  <title>$titre</title>\n";
$resultat .= " </head>\n";

$resultat .= " <body>\n";
$resultat .= "   <div class = 'container'>\n";
$resultat .= "    <div class='panel panel-success'>\n";
$resultat .= "      <div class = 'panel-heading'>\n";
$resultat .= "        <h3 class='panel-title'>$titre</h3>\n";
$resultat .= "      </div>\n";
$resultat .= "    </div> \n";
return $resultat;
}

static function html_head_bootstrap5($titre) {

$resultat = "<html lang='fr'>\n";
$resultat .= " <head>\n";
$resultat .= "  <meta charset='utf-8'>\n";
$resultat .= "  <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
$resultat .= "  <title>TD08 : PHP objet</title>\n";
$resultat .= "  <link \n";
$resultat .= "    href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css'>\n";
$resultat .= "    rel = 'stylesheet'\n";
$resultat .= "    integrity = 'sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD'\n";
$resultat .= "    crossorigin = 'anonymous'>\n";
$resultat .= "  <link href='my_css.css' rel='stylesheet' type='text/css'/>\n";
$resultat .= " </head>\n";
$resultat .= " <body>\n";
$resultat .= "   <div class='container-fluid lo07_container'>\n";
$resultat .= "     <script\n";
$resultat .= "       src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'\n";
$resultat .= "       integrity = 'sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'>\n";
$resultat .= "     </script>\n";

$resultat .= "   <?php\n";
$resultat .= "      include 'nav.html';\n";
$resultat .= "    ?>\n";

$resultat .= "      <div class='mt-4 p-5 bg-primary text-white rounded'>\n";
$resultat .= "       <h1>TD07 : Gestion du contexte</h1>\n";
$resultat .= "     </div>\n";

$resultat .= "      <p/><hr/>\n";
$resultat .= "      <div id = '' class = 'card col-8'>\n";
$resultat .= "        <div class='card-body bg-info'> \n";

}


static function html_foot_bootstrap3() {
$resultat = "  <div/>\n";
$resultat = "  <!-- Charte.html_foot_bootstrap() -->\n";
$resultat .= " </body>\n";
$resultat .= "</html>\n";
return $resultat;
}


static function html_foot_bootstrap5() {
$resultat .= "      <p/><hr/><p/>\n";
$resultat .= " <small>Page de Marc rédigée le 11 mars 2023</small>\n";
$resultat .= "      <p/><hr/><p/>\n";
$resultat .= " </body>\n";
$resultat .= "</html>\n";
        }
}