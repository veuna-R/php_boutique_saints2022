<?php

require_once("inc/init.php");
require_once("inc/header.php");


// cette page représente en gros le catalogue des produits

// et quand je clique sur une catégorie ça m'affiche tous les produits de ma catégories

////////////////////////////////////////////
//////////// AFFICHER LA LISTE DE CATÉGORIES ////////////////
////////////////////////////////////////////

// Récupérer les catégories
$stmt = $pdo->query("SELECT DISTINCT(categorie) FROM produit");
// itérer à l'intérieur et générer une liste
$content .= (!isset($_GET["categorie"])) ? "<h3 class='mt-5 text-center text-white'> Welcome to the shop of gold! <br> Choose your destiny</h3>" : "";
$content .= "<div class='w-100'> </div>";
$content .= " <div class='col-md-4 col-12 mb-5'>";
$content .= "<ul class='list-group text-center display-5 pt-5' style='list-style: none'>";
while ($categorie = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $content .= " <li class='my-1'> <a class='btn btn-outline-warning d-grid gap-2 col-6 mx-auto' role='button' href='?categorie=$categorie[categorie]'>  $categorie[categorie] </a> </li>";
}
$content .= "</ul>";
$content .= "</div>";

////////////////////////////////////////////
//////////// AFFICHER LES PRODUITS DE LA CATÉGORIE ////////////////
////////////////////////////////////////////

// quand je clique sur une catégorie c'est à dire un lient
// j'ai un rechargement de page
// je rècupère le paramètre $_GET

if ($_GET && isset($_GET["categorie"])) {

    $categorieSelectionne = $_GET["categorie"];
    // je fais un select en base avec la catégorie sélectionnée pour récupérer les produits
    $r = $pdo->query("SELECT * FROM produit WHERE categorie = '$categorieSelectionne' ");
    // Ouverture de la partie concernant les produits
    $content .= "<div class='row col-12'>";
    // j'itère dans mon PDOSTATEMENT EN FETCHANT LES DONNÉES EN ITÉRANT DANS CHAQUE ARRAY GÉNÉRÉ PAR LE FETCH
    while ($produit = $r->fetch(PDO::FETCH_ASSOC)) {
        // Génération de card boostrap à chaque fois qu'un produit est récupéré.
        // Si il y a plus que zero en stock, il va afficher un card normal, autre il va aussi afficher un card mais avec un badge: "out of stock" et un bouton désactivé.
        if (($produit['stock'] > 0)) {
            $content .= "<div class='col-md-6 col-lg-3 col-sm-12 pb-2 mx-auto mb-3'> 
            <div class='card col-12 border border-warning mx-auto bg-transparent shadow' style='max-width: 20rem;'>
            <img style='' class='card-img-top mt-3' src='$produit[photo]' alt='$produit[titre]' title='$produit[description]'>
                <div class='card-body'>
                    <h5 class='text-center card-title text-white'>$produit[titre]</h5>
                    <p class='text-center card-text text-white'>$produit[prix] €</p>
                    <a href='fiche_produit.php?idProduit=$produit[id_produit]' class='d-flex justify-content-center btn btn-outline-warning'>Details/Place your order</a>
                </div>
            </div> </div>";
        } else {
            $content .= "<div class='col-md-6 col-lg-3 col-sm-12 pb-2 mx-auto mb-3'> 
            <div class='card col-12 border border-warning mx-auto bg-transparent shadow' style='max-width: 20rem;'>
            <img style='' class='card-img-top mt-3' src='$produit[photo]' alt='$produit[titre]' title='$produit[description]'>
                <div class='card-body'>
                    <h5 class='text-center card-title text-white'>$produit[titre]</h5>
                    <p class='text-center card-text text-white'>$produit[prix] €</p>
                    <a href='fiche_produit.php?idProduit=$produit[id_produit]' class='d-flex justify-content-center btn btn-outline-warning disabled'>Details/Place your order</a>
                </div>
            
                <span class='position-absolute ml-2 mt-2 translate-middle badge rounded-pill border border-dark shadow p-2 bg-danger text-uppercase'>Out of stock</span>

            </div> </div>";
        }
    }
    // Fermeture concernant la partie des produits
    $content .= "</div>";
}




?>

<!-- BODY -->
<?php echo $content; ?>


<?php
require_once("inc/footer.php");
?>