<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
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
            padding: 15px 5px;
            transition: 0.2s;
        }
    </style>

    <div class="container-flud">

        <nav class="navbar navbar-expand-lg navbar-dark justify-content-start sticky-top px-5" style="background-image: url(photo/stars_bg2.jpg);">
            <a class="navbar-brand" href="index.php" data-bs-toggle="tooltip" title="Home">
                <img src="photo/soul_of_gold.png" width="100" height="50" class="d-inline-block align-center" alt="">
                SOUL OF GOLD
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon justify-content-end"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="boutique.php"><span class="sr-only">(current)</span>Shop</a>
                    </li>



                    <!-- Si je ne suis pas connecté j'affiche les pages connexion/inscription -->
                    <?php if (!internauteEstConnecte()) { ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="connexion.php">Connect</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="inscription.php">Register</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="profil.php">My profile</a>
                        </li>
                    <?php } ?>

                    <li class="nav-item position_relative">
                        <?php if (isset($_SESSION["panier"]["id_produit"]) && count($_SESSION["panier"]["id_produit"]) > 0) { ?>
                            <span class='number_elem_in_cart'> <?php echo afficherNombreProduitsPanier(); ?> </span>

                        <?php } ?>
                        <a class="nav-link" href="panier.php">Cart</a>
                    </li>

                    <!-- Si l'internaute est connecté j'affiche le bouton de déconnexion -->
                    <?php if (internauteEstConnecte()) { ?>

                        <li class="nav-item">
                            <a class="nav-link font-italic" href="connexion.php?action=deconnexion">
                                Deconnect
                            </a>
                        </li>

                    <?php } ?>

                    <?php if (internauteEstConnecteEtAdmin()) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="admin/index.php">Back Office</a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </nav>

        <main class="">
            <div class="row col-sm-12 mx-auto justify-content-center p-0">