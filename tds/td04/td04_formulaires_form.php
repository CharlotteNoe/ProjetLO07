<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap523.css" type="text/css"/>

  </head>
  <body>
    <div class="container">
      <h1>TD</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">NOE Charlotte</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="#exercice1">Exercice 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice2">Exercice 2</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice3">Exercice 3</a></li>

              <!-- ===== Documentation ===== -->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentation</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="https://webdesign.tutsplus.com/fr/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068t">Envato Tuts+</a></li>
                  <li><a class="dropdown-item" href="https://www.pierre-giraud.com/bootstrap-apprendre-cours/formulaire/">Pierre Giraud</a></li>
                  <li><a class="dropdown-item" href="https://www.codeur.com/tuto/bootstrap/creer-formulaire-bootstrap/">Codeur.com</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>TD04 : Formulaire PHP avec Bootstrap 5</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 1 : formulaire de login et méthode GET</h5>

          <div class='mx-lg-3'> 

              <form action="td04_e1_action_get.php" method="GET">
                  <div class="mb-3">
                  <label for='login' class='form-label'>login</label>
                  <input type="text" class="form-control" id="login" name='login' required>
                  <label for='password' class='form-label'>Entrez votre mot de passe</label>
                  <input type="password" class="form-control" id="password" name='password' required>
                  </div>
                  <button type="submit" class='btn btn-success mt5'>Submit</button>
                  <button type="reset" class='btn btn-danger'>Reset</button>
                  
              </form>
          </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 2 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice2'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 2 : formulaire de login et méthode POST</h5>

          <div class='mx-lg-3'> 

              <form action="td04_e2_action_post.php" method="POST">
                  <div class="mb-3">
                  <label for='login' class='form-label'>login</label>
                  <input type="text" class="form-control" id="login" name='login' required>
                  <label for='password' class='form-label'>Entrez votre mot de passe</label>
                  <input type="password" class="form-control" id="password" name='password' required>
                  </div>
                  <button type="submit" class='btn btn-success mt5'>Submit</button>
                  <button type="reset" class='btn btn-danger'>Reset</button>
                  
              </form>
          </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 3 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice3'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 3 : Sondage UT</h6>
            <div class='mx-lg-3'> 

              <form action="td04_e3_action_post.php" method="POST">
                  <div class="mb-3">
                      <label for='nom' class="form-label"><strong>Nom</strong></label>
                    <input type="text" class="form-control" id="nom" name='nom' value="NOE" required>
                  </div>
                  
                  <div class="mb-3">
                      <label for='prenom' class='form-label'><strong>Prénom</strong></label>
                    <input type="text" class="form-control" id="prenom" name='prenom' value="Charlotte" required>
                  </div>
                  
                  <div class="mb-3">
                    <p><strong class="font-weight-bold">Sélectionnez votre genre</strong></p>
                    <input type="radio" id="homme" name='genre' value="H">                  
                    <label for='homme' class='form-label'>Homme</label>
                    <input type="radio" id="femme" name='genre' value="F" checked>                  
                    <label for='femme' class='form-label'>Femme</label>
                  </div>
                  
                  <div class="mb-3">
                    <p><strong class="font-weight-bold">Sélectionnez votre status</strong></p>                    
                    
                    <div class="btn-group">
                        <input type="radio" class="btn-check" name="status" id="etudiant" value="etudiant" checked>
                        <label class="btn btn-outline-secondary" for="etudiant">Etudiant</label>
                        
                        <input type="radio" class="btn-check" name="status" id="doctorant" value="doctorant">
                        <label class="btn btn-outline-secondary" for="doctorant">Doctorant</label>
                        
                        <input type="radio" class="btn-check" name="status" id="administratif" value="administratif">
                        <label class="btn btn-outline-secondary" for="administratif">Administratif</label>
                        
                        <input type="radio" class="btn-check" name="status" id="enseignant" value="enseignant">
                        <label class="btn btn-outline-secondary" for="enseignant">Enseignant</label>
                    </div>
                  </div>
                  
                  <div class="mb-3">
                    <p><strong class="font-weight-bold">Sélectionnez un véhicule</strong></p>                    
                    <select name="vehicule" size="9">
                        <optgroup label="Renault">
                            <option value="twingo">Twingo</option>
                            <option value="clio">Clio</option>
                            <option value="espace">Espace</option>
                        </optgroup>
                        <optgroup label="Tesla">
                            <option value="modeleS">Modèle S</option>
                            <option value="modele3">Modèle 3</option>
                            <option value="modeleX">Modèle X</option>
                            <option value="modeleY" checked>Modèle Y</option>                           
                        </optgroup>
                    </select>
                  </div>
                  
                  <div class="mb-3">
                    <p><strong class="font-weight-bold">Sélectionnez vos UT (plusieurs choix)</strong></p>                                          
                      <select name="ut[]" size="6" multiple>
                          <option value="utbm">UTBM</option>
                          <option value="utc">UTC</option>
                          <option value="utt">UTT</option>
                          <option value="utseus">UTSEUS</option>
                          <option value="utm">UTM (Martinique)</option>
                          <option value="utg">UTG (Guyane)</option>
                      </select>
                  </div>
                  
                  <div class="mb-3">
                      <div>
                        <input type="checkbox" id="newsletter" name="newsletter" />
                        <label for="newsletter"><strong class="font-weight-bold">Je souhaite recevoir la newsletter</strong></label>
                      </div>
                      <div>
                        <input type="checkbox" id="nemboursement" name="remboursement" />
                        <label for="remboursement"><strong class="font-weight-bold">Je souhaite recevoir le remboursement du déplacement</strong></label>    
                      </div>
                   </div>
                   <button type="submit" class='btn btn-success mt5'>Submit</button>
                   <button type="reset" class='btn btn-danger'>Reset</button>
                  
              </form>

            </div>      
        </div>
      </div>

    </div>


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Charlotte NOE rédigée le 26/03/2024</small>
    <p/><hr/><p/>
  </body>
</html>