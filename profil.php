<?php
require_once("inc/init.php");

// SI je ne suis pas connecté je suis redirigé vers la page de connexions

if(!internauteEstConnecte()) {
    header("location:connexion.php");
    exit();
}

////////////////////////////////////////////
//////////// Récupération des commandes ////////////////
////////////////////////////////////////////

$stmt = $pdo->query('SELECT * FROM commande WHERE id_membre ="' . $_SESSION["membre"]["id_membre"] . '"');
// echo '<pre>';
// var_dump($stmt->fetchAll());
// echo '</pre>';


require_once("inc/header.php");
?>  
    <div class="col-md-12 mt-3">
        <!-- Message de bienvenu -->
        <?php if($_SESSION["membre"]["civilite"] == "m") { ?>
            <h2 class="text-center mb-5">Hello Sir <?= $_SESSION["membre"]["prenom"] . " " . $_SESSION["membre"]["nom"] ?>!</h2>
        <?php } else { ?>
            <h2 class="text-center mb-5">Hello Mrs./Ms. <?= $_SESSION["membre"]["prenom"] . " " . $_SESSION["membre"]["nom"] ?>!</h2>
        <?php } ?>
    </div>

    <div class="card col-md-3 mb-3" style="width:15rem">

        <!-- Avatar -->
        <?php if($_SESSION["membre"]["civilite"] == "m") { ?>
            <img src="photo/Avatar_male.png" alt="avatar male" class="card-img-top">
        <?php } else { ?>
            <img src="photo/Avatar-female1.jpg" alt="avatar female" class="card-img-top">
        <?php } ?>

        <div class="card-body">
            <h5 class="card-title text-center"> <?= $_SESSION["membre"]["prenom"] . " " . $_SESSION["membre"]["nom"] ?> </h5>
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item text-center"> <?= $_SESSION["membre"]["email"] ?> </li>
            <li class="list-group-item text-center"> <?= $_SESSION["membre"]["adresse"] ?> </li>
            <li class="list-group-item text-center"> <?= $_SESSION["membre"]["ville"] . " " . $_SESSION["membre"]["code_postal"] ?> </li>
        </ul>

    </div>

    <div class="col-md-3">
        <ul class="list-group list-group-flush">
            <li class="list-group-item text-center"> <h5> Order pending </h5> </li>

            <?php while($commande = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <li class="list-group-item text-center">
                    <p> Order n° <?php echo $commande["id_commande"] . " of " . $commande["date_enregistrement"];  ?> </p>
                    <p class="badge badge-primary"> <?php echo $commande["etat"]; ?> </p>
                </li>
            <?php } ?>


        </ul>

        <ul class="mt-5 list-group list-group-flush">
            <li class="list-group-item text-center"> <h5> My order history </h5> </li>
            <!-- <li class="list-group-item text-center">
                <p> Order n°1 of 22/01/2020 </p>
                <p class="badge badge-primary"> Pending </p>
            </li> -->
        </ul>
    </div>




<!-- BODY -->


<?php
require_once("inc/footer.php");
?>