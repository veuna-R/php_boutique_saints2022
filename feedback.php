<!-- After 2 seconds, redirect to a different page. In this case, the 'Home page'. -->
<meta http-equiv='refresh' content='2; url=http://php_boutique_saints2022.test/index.php'>
<meta charset="UTF-8" />


<?php

$feedback_txt = $_POST['feedback'];

$conn = mysqli_connect("localhost", "root","", "boutique"); // connexion au BDD
$query ="insert into feedback(feedback)values('$feedback_txt')"; // inséré au BDD
$result = mysqli_query($conn, $query);

// affichage de message
if($result == 'true') 
  echo "Merci pour votre avis. Très apprécié !";
else
  echo "Une erreur s'est produite. Veuillez réessayer.";

?>