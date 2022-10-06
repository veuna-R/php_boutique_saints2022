<?php

// Accueil du BACK OFFICE

require_once("../inc/init.php");

if($_POST) {

    $count = $pdo->exec("UPDATE commande SET etat = '$_POST[etat]' WHERE id_commande = '$_POST[id_commande]'");

    if($count > 0) {
        $content .= "<div class=\"col-md-6 alert alert-success text-center p-0\" role=\"alert\">
            La commande n° $_POST[id_commande] a été bien modifié.
        </div>";
    }
}


// Récupérer toutes les commandes
$stmt = $pdo->query("SELECT * FROM commande");


require_once("inc/header.php");

?>


<!-- BODY -->
<h1 class='mb-5 text-center col-md-12'>Gestion de Commandes</h1>

<?php echo $content; ?>

<table class="table mb-5 table-hover bg-light text-center">
  <thead class="thead-dark">
    <tr>
        <?php for ($i = 0; $i < $stmt->columnCount(); $i++) {
            $col = $stmt->getColumnMeta($i); ?>
            <th scope="col"><?= $col['name']; ?></th>
        <?php } ?>
            <!-- <th scope="col"></th> -->
    </tr>
  </thead>
  <tbody>
      
        <?php foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $index => $commande) { ?>
            <tr>
                <?php foreach($commande as $index => $valeur) { ?>
                    <?php if($index == "etat") { ?>
                        <td>
                            <form method="post">
                                <input type="hidden" value="<?php echo $commande["id_commande"] ?>" name="id_commande">
                                <select class="form-control" name="etat">
                                    <?php if($valeur == "en cours de traitement") { ?>
                                        <option value="en cours de traitement" selected> En attendant</option>
                                        <option value="envoyé"> Envoyé </option>
                                        <option value="livré"> Livré </option>
                                    <?php }
                                    else if($valeur == "envoyé") { ?>
                                        <option value="en cours de traitement"> En attendant </option>
                                        <option value="envoyé" selected> Envoyé </option>
                                        <option value="livré"> Livré </option>
                                    <?php } 
                                    else { ?>
                                        <option value="en cours de traitement"> En attendant </option>
                                        <option value="envoyé"> Envoyé </option>
                                        <option value="livré" selected> Livré </option>
                                    <?php } ?>
                                </select>
                            </form>
                        </td>
                    <?php } elseif ($index == "suppression") { ?>

                    <?php } else { ?>
                        <td><?php echo $valeur; ?> </td>
                    <?php } ?>
                <?php } ?>


                <!-- <td> <a href="?action=suppression&id_commande&id_details_commande=<?= $commande["id_commande"] && $details_commande["id_details_commande"]?>" role="button" class="btn btn-outline-danger btn-sm"> Delete </a> </td> -->

            </tr>
       <?php } ?>

  </tbody>
</table>



<?php
    require_once("inc/footer.php");
?>