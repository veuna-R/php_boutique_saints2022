<?php
require_once("inc/init.php");
require_once("inc/header.php");

// SI je me déconnecte alors je vide la session membre
// La fonction isset() vérifie si une variable est définie, ce qui signifie qu'elle doit être déclarée et n'est pas NULL.
// la fonction unset() supprime une variable.
if (isset($_GET["action"]) && $_GET["action"] == "deconnexion") {
    unset($_SESSION["membre"]); // je supprime la session membre dans ma session
    $content .= "<div class=\"col-md-3 alert alert-success mx-auto text-center p-0\">Vous avez bien été déconnecté</div>";
}

// Si je suis déjà connecté
// je redirige vers la page profil
if (internauteEstConnecte()) {
    // Redirection vers la page profil
    header("location:profil.php");
    exit();
}

//  Si je me connecte
if ($_POST) {

    // La fonction query() effectue une requête sur une base de données.
    $r = $pdo->query("SELECT * FROM membre WHERE pseudo = '$_POST[pseudo]' ");

    // Si j'ai des données liées au pseudo renseigné dans le formulaire
    if ($r->rowCount() > 0) {
        // je peux fetcher le membre
        $membre = $r->fetch(PDO::FETCH_ASSOC);

        // Je compare le mot de passe saisi dans le formulaire avec le mot de passe crypté en base (hachage)

        if (password_verify($_POST["password"], $membre["mdp"])) {
            // si password_verify renvoit true c'est que le mot de passe renseigné dans le formulaire correspond au mot de passe crypté en BDD

            // créer une session membre avec les coordonnées du membre
            $_SESSION["membre"]["id_membre"] = $membre["id_membre"];
            $_SESSION["membre"]["pseudo"] = $membre["pseudo"];
            $_SESSION["membre"]["nom"] = $membre["nom"];
            $_SESSION["membre"]["prenom"] = $membre["prenom"];
            $_SESSION["membre"]["email"] = $membre["email"];
            $_SESSION["membre"]["civilite"] = $membre["civilite"];
            $_SESSION["membre"]["code_postal"] = $membre["code_postal"];
            $_SESSION["membre"]["adresse"] = $membre["adresse"];
            $_SESSION["membre"]["ville"] = $membre["ville"];
            $_SESSION["membre"]["statut"] = $membre["statut"];

            // Si je suis admin je suis redirigé directement vers le backoffice
            if ($_SESSION["membre"]["statut"] == 1) {
                // Redirection vers la page profil
                header("location:admin/index.php");
                exit();
            } else {
                // Redirection vers la page profil
                header("location:profil.php");
                exit();
            }

            // echo '<pre>';
            // var_dump($_SESSION["membre"]);
            // echo '</pre>';

            // rediriger vers la page profil

        } else {
            // Si le mot de passe rentré dans le formulaire ne correspond pas au mdp en BDD
            $content .= "<div class='alert alert-danger col-md-3 mt-3 mx-auto text-center p-0' role='alert'>
            Veuillez vérifier votre mot de passe!
                </div>";
        }
        // Si je n'ai pas ce pseudo en base
    } else {

        $content .= "<div class='alert alert-danger col-md-3 mt-3 mx-auto text-center p-0' role='alert'>
        Veuillez vérifier votre pseudo!
        </div>";
    }
}





?>
<!-- partie de la connexion -->
<div class="col-md-12">
    <?php echo $content; ?>
</div>
<!-- titre -->
<div class="col-md-12">
    <h3 class='text-center text-white mt-5 mb-5'>Connectez-vous à votre compte, Chevalier d'Athéna!</h3>
</div>
<!-- contenu -->
<div class="col-lg-3 col-md-6 col-sm-6">
    <form method="post" action="" class="border border-warning px-3">
        <div class="form-group">
            <label for="pseudo"></label>
            <input type="text" name="pseudo" class="form-control bg-transparent border border-warning text-white" id="pseudo" aria-describedby="pseudo" placeholder="Entrez votre pseudo" required>
        </div>

        <div class="form-group text-white">
            <label for="exampleInputPassword1"></label>
            <input type="password" name="password" class="form-control bg-transparent border border-warning text-white" id="exampleInputPassword1" placeholder="Entrez votre mot de passe" required>
            <input type="checkbox" onclick="myFunction()"> Afficher/masquer le mot de passe
        </div>

        <br>

        <!-- button -->
        <div class="text-center mb-3">
            <button type="submit" class="btn btn-outline-warning">Se connecter</button>
        </div>

    </form>

</div>
<!-- fin de la partie de la connexion -->

<!-- Javascript -->
<script src="js/pw.js"></script>

<?php
require_once("inc/footer.php");
?>