<?php 

    require_once("inc/init.php");

    if($_POST) {
        
        $to = "email@example.com"; // Votre adresse mail
        $from = $_POST['email']; // L'adresse email de destination
        $first_name = $_POST['first_name']; // Récupération du prénom
        $last_name = $_POST['last_name']; // Récupération du nom
        $subject = "Formulaire de contact";
        $subject2 = "Copie de votre formulaire de contact";
        $message = $first_name . " " . $last_name . " has written the following message:" . "\n\n" . $_POST['message'];
        $message2 = "Here is a copy of the message" . $first_name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        // Fonction prédéfinie PHP permettant d'envoyer un email
        mail($to,$subject,$message,$headers); // envoi du mail au propriétaire du site
        mail($from,$subject2,$message2,$headers2); // envoi une copie du message à l'envoyeur
        // Possibilité d'utiliser header('Location: thank_you.php'); pour rediriger vers une autre page.

        foreach($_POST as $indice => $valeur) {
            $_POST[$indice] = addslashes($valeur);
        }

        // Ajout de la demande de contact en BDD
        $count = $pdo->exec("INSERT INTO contact (id_membre, first_name, last_name, email, telephone, motive, message)
        VALUES('$_POST[id_membre]', '$_POST[first_name]', '$_POST[last_name]', '$_POST[email]', '$_POST[telephone]', '$_POST[motive]', '$_POST[message]' )");

        if($count > 0) {
            // Message de confirmation affiché à l'écran
            $content .= "<div class=\"col-md-12 alert alert-success\" role=\"alert\"> 
                Your message has been sent, a member of our team will be in touch within 48 hours.
            </div>";
        }

    }

    $id_membre = (isset($_SESSION["membre"]["id_membre"])) ? $_SESSION["membre"]["id_membre"] : NULL;

    require_once("inc/header.php");
?>

<h1 class="text-center">Leave us your information and a member of our team will contact you shortly.</h1>


<?php if(isset($count) && $count > 0) { ?>
    <?php echo $content; ?>
<?php } else { ?>
    <form class="row col-md-10" method="post">
        <div class="form-group col-md-6">
            <input type="hidden" name="id_membre" value="<?php echo $id_membre; ?>">
            <label for="prenom">First name: </label>
            <input type="text" name="first_name" class="form-control" id="prenom" aria-describedby="prenom" placeholder="Enter your first name">
        </div>
        <div class="form-group col-md-6">
            <label label for="name">Last name: </label>
            <input type="text" name="last_name" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group col-md-6">
            <label label for="name">Email: </label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group col-md-6">
            <label label for="name">Phone number: </label>
            <input type="telephone" name="telephone" class="form-control" id="telephone" placeholder="Enter your telephone">
        </div>
        <div class="form-group col-md-12">
            <label for="exampleFormControlSelect1">How can we help you?</label>
            <select class="form-control" id="exampleFormControlSelect1" name="motive">
                <option>I have a question regarding an order.</option>
                <option>I have a question regarding an item.</option>
                <option>I wish to contact customer service.</option>
                <option>I'm a supplier.</option>
            </select>
        </div>
        <div class="form-group col-md-12">
            <label for="message">Example text area</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">Send the message.</button>
        </div>
    </form>
<?php } ?>

<?php

    require_once("inc/footer.php");

?>
