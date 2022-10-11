<?php
require_once("inc/init.php");

// SI je ne suis pas connecté je suis redirigé vers la page de connexions
/* Si la personne ne remplit pas les conditions de la fonction internautEstConnecte() alors on va la renvoyer vers la page connexion.php */
if (!internauteEstConnecte()) {
    header("location:connexion.php");
    // exit();
}


////////////////////////////////////////////
//////////// Récupération des commandes ////////////////
////////////////////////////////////////////

$stmt = $pdo->query('SELECT * FROM commande WHERE id_membre ="' . $_SESSION["membre"]["id_membre"] . '"');
// echo '<pre>';
// var_dump($_SESSION["membre"]);
// echo '</pre>';


require_once("inc/header.php");
?>

<!-- Message de bienvenu -->
<div class="col-md-12 mt-3">
    <!-- Si je me connecte entant qu'administateur -->
    <?php if ($_SESSION["membre"]["statut"] == "1") { ?>
        <h2 class="text-center mb-4 text-white">Administateur -  <?= $_SESSION["membre"]["prenom"] . " " . $_SESSION["membre"]["nom"] ?> </h2>
    <!-- sinon, je me conecte au compte 'membre' -->
    <?php } elseif ($_SESSION["membre"]["civilite"] == "m") { ?>
        <h2 class="text-center mb-5 text-white">Bonjour M., <?= $_SESSION["membre"]["prenom"] . " " . $_SESSION["membre"]["nom"] ?>!</h2>
    <?php } else { ?>
        <h2 class="text-center mb-5 text-white">Bonjour Mme/Mlle, <?= $_SESSION["membre"]["prenom"] . " " . $_SESSION["membre"]["nom"] ?>!</h2>
    <?php } ?>
</div>

<!-- cadre de profil -->
<div class="card col-md-3 mb-4 p-3 border border-warning bg-transparent text-white" style="width:20rem">

    <!-- Img d'avatar -->
    <!-- Si je me connecte entant qu'administateur -->
    <?php if ($_SESSION["membre"]["statut"] == "1") { ?>
        <img src="photo/Avatar_2.png" alt="avatar admin" class="card-img-top">
        <!-- sinon, je me conecte au compte 'membre' -->
    <?php } elseif ($_SESSION["membre"]["civilite"] == "m") { ?>
        <img src="photo/Avatar_a.png" alt="avatar male" class="card-img-top">
    <?php } else { ?>
        <img src="photo/Avatar_fe.png" alt="avatar female" class="card-img-top">
    <?php } ?>

    <!-- Affichage des infos de membre -->
        <h3 class="mt-1 text-center bg-transparent text-uppercase"> <?= $_SESSION["membre"]["pseudo"] ?> </h3> 
        <p class="m-0 text-center bg-transparent"> <?= $_SESSION["membre"]["email"] ?> </p>
        <p class="m-0 text-center bg-transparent"> <?= $_SESSION["membre"]["code_postal"] . " " . $_SESSION["membre"]["ville"] ?> </p>


</div>

<!-- <div class="col-md-3">
    <ul class="list-group">
        <li class="list-group-item text-center bg-transparent text-white">
            <h5> Order(s) pending </h5>
        </li>

        <?php while ($commande = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <li class="list-group-item text-center">
                <p> Order n° <?php echo $commande["id_commande"] . " of " . $commande["date_enregistrement"];  ?> </p>
                <p class="badge badge-primary"> <?php echo $commande["etat"]; ?> </p>
            </li>
        <?php } ?>


    </ul>

    <ul class="mt-5 list-group list-group-flush">
        <li class="list-group-item text-center"> <h5> My order history </h5> </li>
        <li class="list-group-item text-center">
                <p> Order n°1 of 22/01/2020 </p>
                <p class="badge badge-primary"> Pending </p>
            </li>
    </ul>
</div> -->




<!-- BODY -->


<?php
require_once("inc/footer.php");
?>