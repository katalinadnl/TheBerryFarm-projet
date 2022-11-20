<?php
$dbco = new PDO("mysql:host=localhost;dbname=TheBerryFarm", 'root', '');
?>
<!DOCTYPE html>

<html>
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>The Berry Farm</title>
        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" />
        <link rel="stylesheet" href="styles.css"/>
        <!-- JavaScripts -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" href="app.js"></script>

        <link rel="icon" type="image/png" sizes="16x16" href="TheBerryFarm logo.png">
      </head>
    <body>
            <nav id= "header" class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="theberryfarm.php">
                    <img src="TheBerryFarm logo petit.png" width="100" height="100">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" style="color:#352f5d" href="theberryfarm.php" >Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:#352f5d" href="#p1">À propos de nous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:#352f5d" href="NosProduits.php">Nos Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:#352f5d" href="NosRecettes.php">Nos Recettes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" style="color:#352f5d" href="SeConnecterhtml.php">Se connecter</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" style="color:#352f5d" href="Inscriptionhtml.php" >Créer un compte</a>
                    </li>
                  </ul>
                  <?php if( isset($_SESSION['email']) && $_SESSION['email'] !== null ) : ?>
                  <a style="margin-right:1cm;" href="dashboard.php" class="btn btn-outline-info">Mon compte </a>
              
                  <?php endif; ?>

                  <a href="shoppingCart.php" class="btn btn-outline-info">Panier </a>
                  
                </div>
              </nav>
              
        
    
            