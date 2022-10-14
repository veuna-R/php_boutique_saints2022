<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Soul of Gold</title>
</head>

<body>
    <style>
        /* nav hover */
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
        /* fond d'image */
        body {
            background-image: url("photo/stars_bg3.jpg") !important;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>

    <div>
        <!-- bar de navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark justify-content-start px-5 sticky-top">
            <a class="navbar-brand text-warning" href="index.php" data-bs-toggle="tooltip" title="Home">
                <img src="photo/soul_of_gold.png" width="100" height="50" class="d-inline-block align-center" alt="">
                SOUL OF GOLD
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon justify-content-end"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="boutique.php"><span class="sr-only">(current)</span>Boutique</a>
                    </li>



                    <!-- Si je ne suis pas connecté j'affiche les pages connexion/inscription -->
                    <?php if (!internauteEstConnecte()) { ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="connexion.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="inscription.php">Inscription</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="profil.php">Mon Profil</a>
                        </li>
                    <?php } ?>

                    <!-- si il y a une quantité supérieur de zero dans le panier, un chriffre affiche la quantité à une position relative du panier. -->
                    <li class="nav-item active position_relative">
                        <?php if (isset($_SESSION["panier"]["id_produit"]) && count($_SESSION["panier"]["id_produit"]) > 0) { ?>
                            <span class='number_elem_in_cart'> <?php echo afficherNombreProduitsPanier(); ?> </span>

                        <?php } ?>
                        <a class="nav-link" href="panier.php">Panier</a>
                    </li>

                    <!-- Si je suis connecté entant q'admin -->
                    <?php if (internauteEstConnecteEtAdmin()) { ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="admin/index.php">BackOffice</a>
                        </li>
                    <?php } ?>

                    <!-- Si l'internaute est connecté j'affiche le bouton de déconnexion -->
                    <?php if (internauteEstConnecte()) { ?>

                        <li class="nav-item">
                            <a class="nav-link font-italic" href="connexion.php?action=deconnexion">
                                Deconnexion
                            </a>
                        </li>

                    <?php } ?>



                </ul>
            </div>
        </nav>

        <main>
            <div class="row col-sm-12 mx-auto justify-content-center p-0">