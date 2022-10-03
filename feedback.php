<!-- After 2 seconds, redirect to a different page. In this case, the 'Home page'. -->
<meta http-equiv='refresh' content='2; url=http://php_boutique_saints2022.test/index.php'>
<meta charset="UTF-8" />


<?php

$feedback_txt = $_POST['feedback'];

$conn = mysqli_connect("localhost", "root","", "boutique"); // connexion au BDD
$query ="insert into feedback(feedback)values('$feedback_txt')"; // inséré au BDD
$result = mysqli_query($conn, $query);

if($result == 'true') // affichage de message
  echo "Thank you for your feedback. Very much appreciated!";
else
  echo "Something went wrong, please try again.";

?>