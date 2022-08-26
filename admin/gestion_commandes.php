<?php

// Accueil du BACK OFFICE

require_once("../inc/init.php");

if($_POST) {

    $count = $pdo->exec("UPDATE commande SET etat = '$_POST[etat]' WHERE id_commande = '$_POST[id_commande]'");

    if($count > 0) {
        $content .= "<div class=\"col-md-12 alert alert-success\" role=\"alert\">
            The order n° $_POST[id_commande] has been successfully modified.
        </div>";
    }
}

// Récupérer toutes les commandes
$stmt = $pdo->query("SELECT * FROM commande");


require_once("inc/header.php");

?>


<!-- BODY -->
<h1 class='mb-5 text-center'>Orders received/pending</h1>

<?php echo $content; ?>

<table class="table mb-5">
  <thead class="thead-dark">
    <tr>
        <?php for ($i = 0; $i < $stmt->columnCount(); $i++) {
            $col = $stmt->getColumnMeta($i); ?>
            <th scope="col"><?= $col['name']; ?></th>
        <?php } ?>
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
                                        <option value="en cours de traitement" selected> Pending</option>
                                        <option value="envoyé"> Sent </option>
                                        <option value="livré"> Delivered </option>
                                    <?php }
                                    else if($valeur == "envoyé") { ?>
                                        <option value="en cours de traitement"> Pending </option>
                                        <option value="envoyé" selected> Sent </option>
                                        <option value="livré"> Delivered </option>
                                    <?php } 
                                    else { ?>
                                        <option value="en cours de traitement"> Pending </option>
                                        <option value="envoyé"> Sent </option>
                                        <option value="livré" selected> Delivered </option>
                                    <?php } ?>
                                </select>
                            </form>
                        </td>
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