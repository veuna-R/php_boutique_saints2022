<!-- After 3 seconds, redirect to a different page. In this case, the 'Home page'. -->
<meta http-equiv='refresh' content='3; url=http://php_boutique_saints2022.test/index.php'>
<meta charset="UTF-8" />

<?php

$feedback_txt = $_POST['feedback'];

$conn = mysqli_connect("localhost", "root","", "boutique");
$query ="insert into feedback(feedback)values('$feedback_txt')";
$result = mysqli_query($conn, $query);

if($result == 'true')
  echo "Thank you for your feedback. Very much appreciated!";
else
  echo "Something went wrong, please try again.";

?>