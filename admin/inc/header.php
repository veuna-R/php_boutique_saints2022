<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="inc/css/style.css">
    <title>Ma Boutique</title>
</head>
<body>

    <div class="container-flud">

        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary justify-content-end">
            <a class="navbar-brand" href="index.php">
                <img src="../photo/kisspng-the-boss-baby-film-dreamworks-animation-comedy-boss-5abb4dc7f20ab3.1393930015222245839914.png" width="100" height="100" class="d-inline-block align-top" alt="">
            <p class="d-inline-block align-center ">Espace administrateur</p> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Si je ne suis pas connecté j'affiche les pages connexion/inscription -->
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Boutique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gestion_produits.php">Gestion des produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gestion_commandes.php">Gestion des commandes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gestion_emails.php">Gestion des emails</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gestion_commentaires.php">Gestion des commentaires</a>
                    </li>

                    <!-- Si l'internaute est connecté j'affiche le bouton de déconnexion -->
                    <?php if(internauteEstConnecte()) { ?>

                        <li class="nav-item">
                            <a class="nav-link font-italic" href="../connexion.php?action=deconnexion">
                                Se déconnecter
                            </a>
                        </li>

                    <?php } ?>
                </ul>
            </div>
        </nav>

        <main class="bg-light p-5">
            <div class="row col-md-10 mx-auto justify-content-center">
