<?php

// Gestion commentaires

require_once("../inc/init.php");
require_once("inc/header.php");

////////////////////////////////////////////
//////////// Suppression de commentaire ////////////////
////////////////////////////////////////////

if (isset($_GET["action"]) && $_GET["action"] == "suppression") {
    $count = $pdo->exec("DELETE FROM feedback WHERE id_feedback = '$_GET[id_feedback]' ");
    // $content .= "<div class=\"col-md-9 alert alert-success text-center\" role=\"alert\">
    //         The message has been sucessfully deleted.
    //     </div>";
}


// Récupérer toutes les commentaires
$stmt = $pdo->query("SELECT * FROM feedback");

?>

<!-- *****BODY***** -->

<!-- title -->
<h1 class='mb-5 text-center'>Gestion de Commentaires</h1>

<!-- table -->
<table class="table table-hover mb-5 bg-light text-center">
    <thead class="thead-dark">
        <tr>
            <!-- affiche les contenus du BDD "feedback" -->
            <?php for ($i = 0; $i < $stmt->columnCount(); $i++) {
                $col = $stmt->getColumnMeta($i); ?>
                <th scope="col"><?= $col['name']; ?></th>
            <?php } ?>
            <th scope="col"></th>
        </tr>
    </thead>

    <tbody>
        <!-- affichage des commentaires (id, feedback et timestamp) -->
        <?php foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $index => $feedback) { ?>

            <tr>

                <?php foreach ($feedback as $index => $valeur) { ?>
                    <?php if ($index == "suppression") { ?>

                    <?php } else { ?>
                        <td><?php echo $valeur; ?> </td>
                    <?php } ?>
                <?php } ?>

                <td>
                    <!-- ***la suppression des commentaires*** -->
                    <a href="gestion_commentaires.php?action=suppression&id_feedback=<?= $feedback["id_feedback"] ?>" role="button" class="btn btn-outline-danger btn-sm" name="suppression" onclick="return(confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?'))">Supprimer</a>

                </td>
            </tr>

        <?php } ?>

    </tbody>
</table>


<?php
require_once("inc/footer.php");
?>