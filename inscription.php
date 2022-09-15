<?php
require_once("inc/init.php");

if (internauteEstConnecte()) {
    header("location:profil.php");
    exit();
}

////////////////////////////////////////////
//////////// Inscription ////////////////
////////////////////////////////////////////

$inscriptionDone = false;

$erreur = '';

if ($_POST) {

    // Vérifier si le pseudo a entre 3 et 20 caractères(strlen)
    if (strlen($_POST["mdp"]) < 3 || strlen($_POST["mdp"]) > 20) {
        $erreur .= "<div class='alert alert-danger col-6 text-center' role='alert'>
                The password needs to be between 3 and 20 characters!
            </div>";
    }

    // Vérifier si le pseudo a une valeur alphanumérique(preg_match)

    if (!ctype_alnum($_POST["pseudo"])) {
        $erreur .= "<div class='alert alert-danger col-6 text-center' role='alert'>
                The username must contain only numbers and letters only please!
            </div>";
    }

    // Si c'est pas le cas j'affiche les erreurs

    // L'insert ne se fera que si je n'ai pas d'erreurs

    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    if ($erreur == '') {

        // Pour éviter les erreurs au niveau de l'insert
        // on va échapper pour chaque donnée du formulaire
        // les caractères succeptibles de provoquer des erreurs SQL *
        // comme l'apostrophe grâce à la fonction php addslashes()
        // pour chaque paramètre post je réaffecte la valeur actuelle du paramètre avec les caractèrs échapés

        // * single quote (')
        // double quote (")
        // backslash (\)
        // NULL

        foreach ($_POST as $indice => $valeur) {
            $_POST[$indice] = addslashes($valeur);
        }

        // echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';

        // Pour des raisons de sécurité nous allons crypter le mot de passe
        $_POST["mdp"] = password_hash($_POST["mdp"], PASSWORD_DEFAULT);

        $count = $pdo->exec("INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, ville, code_postal, adresse, statut)
            VALUES('$_POST[pseudo]', '$_POST[mdp]', '$_POST[nom]', '$_POST[prenom]', '$_POST[email]', '$_POST[civilite]', '$_POST[ville]', '$_POST[code_postal]', '$_POST[adresse]', 2)");

        // Si l'insert a correctement fonctionné msg de confirmation
        if ($count > 0) {
            $content .= "<div class='alert alert-success' role='alert'>
                    Your account is registered!
                </div>";

            $inscriptionDone = true;
        }
    }
}

require_once("inc/header.php");
?>

<!-- BODY -->

<div class="col-md-12">
    <h3 class='text-center mt-5 mb-4'>Register to become a Saint of Athena!</h3>
</div>

<?php if ($erreur != "") { ?>
    <?php echo $erreur; ?>
<?php }
if ($inscriptionDone) { ?>
    <?php echo $content; ?>
<?php } else { ?>

    <form action="" method="POST" class="mx-auto col-sm-12 col-md-6">
        <div class="form-row">
            <!-- Pseudo -->
            <div class="form-group col-md-6">
                <label for="pseudo"></label>
                <input type="text" class="form-control" id="pseudo" placeholder="Username" name="pseudo" required>
            </div>

            <!-- Password -->
            <div class="form-group col-md-6">
                <label for="password"></label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password must be between 3-20 characters" name="mdp" required>
                <input type="checkbox" onclick="myFunction()"> Show Password
            </div>

            <!-- Name -->
            <div class="form-group col-md-4">
                <!-- <label for="name"></label> -->
                <input type="text" class="form-control" id="name" placeholder="Last name" name="nom" required>
            </div>

            <!-- First Name -->
            <div class="form-group col-md-4">
                <!-- <label for="firstName"></label> -->
                <input type="text" class="form-control" id="firstName" placeholder="First Name" name="prenom" required>
            </div>

            <!-- Civilité -->
            <div class="form-group col-md-4">
                <!-- <label for="email"></label> -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="civilitem" value="m" name="civilite" checked>
                    <label class="form-check-label" for="civilitem">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="civilitef" value="f" name="civilite">
                    <label class="form-check-label" for="civilitef">
                        Female
                    </label>
                </div>
            </div>

        </div>

        <!-- Email -->
        <div class="form-group">
                <!-- <label for="email"></label> -->
                <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>

        <!-- Address -->

        <div class="form-group">
            <!-- <label for="address"></label> -->
            <input type="text" class="form-control" id="address" name="adresse" placeholder="Complete adress" required>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <!-- <label for="inputCity"></label> -->
                <input type="text" class="form-control" name="ville" id="inputCity" placeholder="State" required>
            </div>

            <div class="form-group col-md-6">
                <!-- <label for="inputZip"></label> -->
                <input type="text" class="form-control" id="inputZip" name="code_postal" placeholder="Zip Code" required>
            </div>
        </div>

        <br>

        <div class="text-center mb-5">
            <button type="submit" class="btn btn-info">Create my account</button>
        </div>

    </form>

<?php } ?>

<script src="js/pw.js"></script>

<?php
require_once("inc/footer.php");
?>
