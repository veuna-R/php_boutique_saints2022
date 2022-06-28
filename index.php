<?php
require_once("inc/init.php");
require_once("inc/header.php");
?>

<!-- Cette page représente la page d'acceuil  -->

<!doctype html>
<html lang="en">

<head>
    <title>Home Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- jumbotron -->
    <div class="text-white text-center">
        <h1 class="display-4">WELCOME TO THE SHOP OF GOLD</h1><br>
        <p class="text-white text-center">
            This is a small site dedicated to my love for the anime "Saint Seiya" and preferbaly the Gold Saints. <br> Have you ever felt your cosmos?
        </p>
        <div class="mb-5">
            <img src="photo/soul_of_gold.png" alt="">
        </div>
    </div>


    <!-- debut du carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="photo/0-gold-saints-wallpapers.png" class="d-block w-100 rounded" alt="...">
            </div>
            <div class="carousel-item">
                <img src="photo/1-gold-saints-wallpapers.jpg" class="d-block w-100 rounded" alt="...">
            </div>
            <div class="carousel-item">
                <img src="photo/2-gold-saints-wallpapers.jpg" class="d-block w-100 rounded" alt="...">
            </div>
            <div class="carousel-item">
                <img src="photo/3-gold-saints-wallpapers.jpg" class="d-block w-100 rounded" alt="...">
            </div>
        </div>
    </div>
    <!-- fin du carousel -->

    <!-- music in background -->
    <audio src="MP3/SaintSeiya-BlueDreamInstrumental.mp3" loop autoplay controls class="col-md-3 mt-5"></audio>
    <p class="text-white text-center">Saint Seiya - Blue Dream (instrumental)</p>





    <?php
    require_once("inc/footer.php");
    ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>