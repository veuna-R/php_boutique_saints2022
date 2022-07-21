<?php
$feedback_txt = $_POST['feedback'];

$conn = mysqli_connect("localhost", "root","", "boutique");
$query ="insert into feedback(feedback)values('$feedback_txt')";
$result = mysqli_query($conn, $query);
// if($result)
//   echo '<script type="text/javascript">
//   window.onload = function () { alert("Thank you for your feedback. Very much appreciated!"); } 
// </script>';
// else
// die("Something terrible happened. Please try again. ");
?>