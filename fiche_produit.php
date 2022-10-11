<?php
require_once("inc/init.php");

    // idée générale : afficher les informations produit du produit sélectionné depuis index.php

    if(!isset($_GET["idProduit"])) { // si je n'ai pas de paramètre $_GET["id_produit"]
        header("location:index.php"); // je suis redirigé vers index.php
        exit();
    }

    // Je récupère mon paramètre $_GET["id_produit"]
    // je requête en base avec la valeur de id_produit récupérée
    if(isset($_GET["idProduit"])) {
        $stmt = $pdo->query("SELECT * FROM produit WHERE id_produit = '$_GET[idProduit]' ");
    if($stmt->rowCount() <= 0) {
           header("location:index.php"); // Si le produit n'éxiste pas en base je redirige
        exit();
    }  
       $produit = $stmt->fetch(PDO::FETCH_ASSOC); // Je récupère le produit
    }

    require_once("inc/header.php");

?>

<div class="row col-md-6 mx-auto">
<!-- Cardre de produit -->
    <div class='card col-md-6 my-3 border border-warning bg-transparent' >
        <img class='card-img-top mt-3' src='<?php echo $produit["photo"]?>' alt='<?php echo $produit["titre"]?>'>
        <div class='card-body'>
            <h5 class='card-title text-center text-white'><?php echo $produit["titre"]?></h5>
            <p class='card-text text-center text-white'><?php echo $produit["description"]?></p>
        </div>
    </div>

<!-- Info de produit -->
    <div class="col-md-6 my-3">
        <ul class="list-group">
            <!-- récupération de produits de la BDD -->
            <li class="list-group-item border border-warning bg-transparent text-white text-center">Categorie : <?php echo $produit["categorie"]?> </li>
            <!-- récupération de prix de la BDD -->
            <li class="list-group-item border border-warning my-1 bg-transparent text-white text-center">Prix : <?php echo $produit["prix"]?> € </li>

            <!-- CRÉATION D'UN FORMULAIRE POUR RÉCUPÉRER LE PRODUIT SELECTIONNÉ ET LA QUANTITÉ POUR L'AJOUTER AU PANIER -->

            <form method="POST" action="panier.php">

                <li class="list-group-item border border-warning bg-transparent">                  
                    <input type="hidden" name="id_produit" value="<?php echo $produit["id_produit"]?>">
                    <input type="hidden" name="categorie" value="<?php echo $produit["categorie"]?>">
                    <select class="custom-select border border-warning bg-transparent text-secondary container-fluid" name="quantite" id="selectQuantity">
                        <!-- Je créé dynamiquement la quantité sélectionnable dans la limite du stock -->
                        <option disabled selected>Sélectionnez un montant</option>
                        <?php for($i = 1; $i <= $produit["stock"]; $i++) { ?>
                            <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                        <?php }
                         ?>
                    </select>
                </li>
     
                <div class="text-center">
                    <!-- bouton: ajout au panier -->
                    <input class="btn btn-outline-warning mt-3" disabled type="submit" value="Ajouter au panier" name="ajout_panier" style="width:60%" id="addCart">

                    <!-- bouton: revien à la page de la boutique -->
                    <a class="btn btn-danger mt-3" href="boutique.php" role="button" style="width:60%">Retour à la boutique</a>
                </div>

            </form>
         
        

        </ul>
    </div>
    <!-- Fin d'info de produit -->
</div>
<!-- BODY -->

<?php
require_once("inc/footer.php");
?>