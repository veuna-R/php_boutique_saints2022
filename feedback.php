<!-- Après 2 secondes, redirigez vers une autre page. Dans ce cas, la 'page d'accueil'. -->
<meta http-equiv='refresh' content='2; url=http://php_boutique_saints2022.test/index.php'>
<meta charset="UTF-8" />


<?php

$feedback_txt = $_POST['feedback'];

$conn = mysqli_connect("localhost", "root","", "boutique"); // connexion au BDD
$query ="insert into feedback(feedback)values('$feedback_txt')"; // inséré au BDD
$result = mysqli_query($conn, $query); // mysqli_query() effectue une requête sur une base de données.

// affichage de message
if($result == 'true') 
  echo "Merci pour votre avis. Très apprécié !";
else
  echo "Une erreur s'est produite. Veuillez réessayer.";

?>