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
    <div class='card col-md-4' style='width: 18rem;'>
        <img class='card-img-top' src='<?php echo $produit["photo"]?>' alt='<?php echo $produit["titre"]?>'>
        <div class='card-body'>
            <h5 class='card-title text-center'><?php echo $produit["titre"]?></h5>
            <p class='card-text text-center'><?php echo $produit["description"]?></p>
        </div>
    </div>

    <div class="col-md-4">
        <ul class="list-group">
            <li class="list-group-item">Category: <?php echo $produit["categorie"]?> </li>
            <li class="list-group-item">Price: <?php echo $produit["prix"]?> € </li>

            <!-- CRÉATION D'UN FORMULAIRE POUR RÉCUPÉRER LE PRODUIT SELECTIONNÉ ET LA QUANTITÉ POUR L'AJOUTER AU PANIER -->

            <form method="POST" action="panier.php">

                <li class="list-group-item">
                    <p> <span class="title"></span> </p>
                    <input type="hidden" name="id_produit" value="<?php echo $produit["id_produit"]?>">
                    <input type="hidden" name="categorie" value="<?php echo $produit["categorie"]?>">
                    <select class="custom-select" name="quantite" id="selectQuantity">
                        <!-- Je créé dynamiquement la quantité sélectionnable dans la limite du stock -->
                        <option disabled selected>Select an amount</option>
                        <?php for($i = 1; $i <= $produit["stock"]; $i++) { ?>
                            <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                        <?php }
                         ?>
                    </select>
                </li>
     
                <input class="btn btn-outline-warning mt-5" disabled type="submit" value="Add to cart" name="ajout_panier" style="width:100%" id="addCart">

            </form>
         
        

        </ul>
    </div>

<!-- BODY -->

<?php
require_once("inc/footer.php");
?>