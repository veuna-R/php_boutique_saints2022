<?php

    require_once("inc/init.php");

    
    // cette page représente en gros le catalogue des produits

    // j'aimerais afficher les différentes catégories en base
    // et quand je clique sur une catégorie ça m'affiche tous les produits de ma catégories

    ////////////////////////////////////////////
    //////////// AFFICHER LA LISTE DE CATÉGORIES ////////////////
    ////////////////////////////////////////////

    // Récupérer les catégories
    $stmt = $pdo->query("SELECT DISTINCT(categorie) FROM produit");
    // itérer à l'intérieur et générer une liste
    $content .= (!isset($_GET["categorie"])) ? "<h3 class='my-5'> Welcome to the shop of gold </h3>" : "";
    $content .= "<div class='w-100'> </div>";
    $content .= " <div class='col-md-4 col-12 mb-3 justify-content-center'>";
    $content .= "<ul class='list-group text-center display-5'>";
    while($categorie = $stmt->fetch(PDO::FETCH_ASSOC)) {
       $content .= " <li class='list-group-item'> <a class='text-dark' href='?categorie=$categorie[categorie]'>  $categorie[categorie] </a> </li>";
    }
    $content .= "</ul>";
    $content .= "</div>";

    ////////////////////////////////////////////
    //////////// AFFICHER LES PRODUITS DE LA CATÉGORIE ////////////////
    ////////////////////////////////////////////

    // quand je clique sur une catégorie c'est à dire un lient
    // j'ai un rechargement de page
    // je rècupère le paramètre $_GET

    if($_GET && isset($_GET["categorie"])) {

        $categorieSelectionne = $_GET["categorie"];
        // je fais un select en base avec la catégorie sélectionnée pour récupérer les produits
        $r = $pdo->query("SELECT * FROM produit WHERE categorie = '$categorieSelectionne' ");
        // Ouverture de la partie concernant les produits
        $content .= "<div class='row col-md-12'>";
        // j'itère dans mon PDOSTATEMENT EN FETCHANT LES DONNÉES EN ITÉRANT DANS CHAQUE ARRAY GÉNÉRÉ PAR LE FETCH
        while($produit = $r->fetch(PDO::FETCH_ASSOC)) {
            // Génération de card boostrap à chaque fois qu'un produit est récupéré
            $content .= "<div class='col-md-6 col-lg-3 pl-2 pr-2 pb-2'> <div class='card col-md-12' style='width: 18rem;'>
            <img style='cursor:pointer' class='card-img-top' src='$produit[photo]' alt='$produit[titre]' title='$produit[description]'>
                <div class='card-body'>
                    <h5 class='text-center card-title'>$produit[titre]</h5>
                    <p class='text-center card-text'>" . substr($produit["description"], 0, 35) . "..." . "</p>
                    <p class='text-center card-text'>$produit[prix] €</p>
                    <a href='fiche_produit.php?idProduit=$produit[id_produit]' class='d-flex justify-content-center btn btn-warning'>Details/Place your order</a>
                </div>
            </div> </div>";
        }
        // Fermeture concernant la partie des produits
        $content .= "</div>";

    }

    require_once("inc/header.php");


?>

<!-- BODY -->
<?php echo $content; ?>


<?php
    require_once("inc/footer.php");
?>