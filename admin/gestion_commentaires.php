<?php

// Accueil du BACK OFFICE

require_once("../inc/init.php");
require_once("inc/header.php");

////////////////////////////////////////////
//////////// Suppression d'un commentaire ////////////////
////////////////////////////////////////////

if (isset($_GET["action"]) && $_GET["action"] == "suppression") {
    $count = $pdo->exec("DELETE FROM feedback WHERE id_feedback = '$_GET[id_feedback]' ");
    $content .= "<div class=\"col-md-12 alert alert-success\" role=\"alert\">
            The message has been sucessfully deleted.
        </div>";
}

$stmt = $pdo->query("SELECT * FROM feedback");

?>


<!-- BODY -->

<h1 class='mb-5 text-center'>Feedbacks</h1>

<table class="table table-hover mb-5 bg-light">
    <thead class="thead-dark">
        <tr>
            <?php for ($i = 0; $i < $stmt->columnCount(); $i++) {
                $col = $stmt->getColumnMeta($i); ?>
                <th scope="col"><?= $col['name']; ?></th>
                <!-- <th scope="col"> Delete</th> -->
            <?php } ?>
        </tr>
    </thead>

    <tbody>

        <!-- J'itère dans le fetchAll qui m'index dans un tableau multidimensionnel les arrays contenants mes produits
        Pour chaque array de produit récupéré j'itère dans les index pour récupérer les valeurs et générer un td pour chaque valeur  -->
        <?php foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $index => $feedback) { ?>
            <tr>

                <!-- Lien de modification et de suppression -->

                <td> <a href="?action=suppression&id_feedback=<?= $feedback["id_feedback"] ?>"> Delete </a> </td>
            </tr>
        <?php } ?>

    </tbody>
</table>

<?php
require_once("inc/footer.php");
?>