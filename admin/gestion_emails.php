<?php

// Accueil du BACK OFFICE

require_once("../inc/init.php");
require_once("inc/header.php");

// Récupération des comptes de la BDD
$stmt = $pdo->query("SELECT id_membre, pseudo, nom, prenom, email, statut FROM membre");

?>


<!-- BODY -->
<h1 class='mb-5 text-center'>Account management</h1>

<!-- table -->
<table class="col-sm-12 table table-hover mb-5 bg-light text-center">
    <thead class="thead-dark">
        <tr>
            <!-- affiche les contenus du BDD "feedback" -->
            <?php for ($i = 0; $i < $stmt->columnCount(); $i++) {
                $col = $stmt->getColumnMeta($i); ?>
                <th scope="col"><?= $col['name']; ?></th>
            <?php } ?>
            <!-- <th scope="col"></th> -->
        </tr>
    </thead>

    <tbody>
        <!-- affichage des commentaires (id, feedback et timestamp) -->
        <?php foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $index => $membre) { ?>

            <tr>
                
                <?php foreach($membre as $index => $valeur) { ?>
                    <?php if($index == "suppression") { ?>
                        
                    <?php } else { ?>
                        <td><?php echo $valeur; ?> </td>
                    <?php } ?>
                <?php } ?>

            </tr>

        <?php } ?>

    </tbody>
</table>

<?php
    require_once("inc/footer.php");
?>