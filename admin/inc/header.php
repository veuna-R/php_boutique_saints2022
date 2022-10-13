<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only - bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- style CSS -->
    <link rel="stylesheet" href="inc/css/style.css">
    
    <title>Space Admin</title>
</head>

<body>
    <style>
        .nav-item::after {
            content: '';
            display: block;
            width: 0px;
            height: 2px;
            background: #fec400;
            transition: 0.5s;
        }

        .nav-item:hover::after {
            width: 100%;
        }

        .navbar-dark .navbar-nav .active>.nav-link,
        .navbar-dark .navbar-nav .nav-link.active,
        .navbar-dark .navbar-nav .nav-link.show,
        .navbar-dark .navbar-nav .show>.nav-link,
        .navbar-dark .navbar-nav .nav-link:focus,
        .navbar-dark .navbar-nav .nav-link:hover {
            color: white;
        }

        .nav-link {
            padding: 5px 5px;
            transition: 0.2s;
        }
    </style>

    <div class="container-fluid p-0">

        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary justify-content-end sticky-top" style="background-image: url(../photo/stars_bg2.jpg);">
            <a class="navbar-brand" href="index.php">
                <img src="" width="" height="" class="d-inline-block align-center " alt="">
                Administrateur
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Si je ne suis pas connecté j'affiche les pages connexion/inscription -->
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Acceuil</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="gestion_produits.php">Produits</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="gestion_commandes.php">Commandes</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="gestion_emails.php">Comptes</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="gestion_commentaires.php">Commentaires</a>
                    </li>

                    <!-- Si l'internaute est connecté j'affiche le bouton de déconnexion -->
                    <?php if (internauteEstConnecte()) { ?>

                        <li class="nav-item">
                            <a class="nav-link font-italic" href="../connexion.php?action=deconnexion">
                                Déconnexion
                            </a>
                        </li>

                    <?php } ?>
                </ul>
            </div>
        </nav>

        <main class="bg-light p-5">
            <div class="row col-md-10 mx-auto justify-content-center">