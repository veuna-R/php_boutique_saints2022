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

    <!-- Style CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

</head>

<body>

    <style>
        h1, h2, h3, h4, h6 {
            font-family: 'Yellowtail', cursive;
        }
    </style>

    <!-- debut du carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade mb-5 container-fluid" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="photo/0-gold-saints-wallpapers.png" class="d-block w-100 rounded" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span class="badge bg-dark">Athena and the Gold Saints</span>
                </div>
            </div>
            <div class="carousel-item">
                <img src="photo/1-gold-saints-wallpapers.jpg" class="d-block w-100 rounded" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span class="badge bg-dark">The Gold Saints</span>
                </div>
            </div>
            <div class="carousel-item">
                <img src="photo/2-gold-saints-wallpapers.jpg" class="d-block w-100 rounded" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span class="badge bg-dark">The Gold Saints</span>
                </div>
            </div>
            <div class="carousel-item">
                <img src="photo/3-gold-saints-wallpapers.jpg" class="d-block w-100 rounded" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span class="badge bg-dark">The Gold Saints</span>
                </div>
            </div>
        </div>
        <!-- fin du carousel -->

        <!-- jumbotron -->
        <div class="container-fluid text-center mt-5">
            <h1 class="display-2 text-warning">WELCOME TO THE SITE OF GOLD</h1><br>
            <p class="text-center">
                This is a small site/shop dedicated to my love for the anime "Saint Seiya" and preferbaly the Gold Saints. <br> <strong>Have you ever felt your cosmos?</strong>
            </p>
            <div class="mb-5">
                <img src="photo/soul_of_gold.png" alt="">
            </div>
        </div>

        <!-- start of brief history -->
        <div class="container col-md-9 col-sm-12 text-center my-5 p-3 border border-warning border-3">
            <h2 class="text-center text-warning display-4">The Gold Saints</h2>
            <p>The Gold Saints are a group of the twelve most powerful and highest ranking warriors in Athena's army. Their main duty at Sanctuary is to defend the Twelve Houses of Zodiac. They are the last line of defense and the ultimate warriors in the service of Athena and of the Grand Pope, from among whom the Pope is generally selected.</p>

            <p>The Gold Saints are among the most powerful characters in the series. Their power derives from their mastery of the Seventh Sense, the essence of Cosmo, which grants them miraculous abilities, such as the capability to move at the speed of light. Some among them have also reached the Eighth Sense.</p>

            <p>Like other Saints, who can raise their Cosmo beyond ordinary levels in extraordinary circumstances, the Gold Saints are capable of overcoming their limits in times of crisis to accomplish miracles. They are highly respected by other Saints, though this does not signify that all Gold Saints are honest or righteous. There are multiple Gold Saints who act with open cruelty and self-interest, unchecked by their peers.</p>

        </div>
        <!-- end of brief history -->

        <!-- Profiles  -->
        <div class="container">
            <div class="row">
                <div class="col-md-3 cold-sm-6 border border-warning py-3 rounded">
                    <img src="profile_photo/Aries-Mu.png" alt="Mu" class="rounded">
                </div>
                <div class="col-md-3 cold-sm-6">
                    <h2 class="text-warning">Aries - Mu</h2>
                    <p>Mu, Kiki's master, is one of the bronze saint's most trusted allies, and serves as the man who repairs damaged cloths. He is also known as Mu of Jamir "the Cloth Blacksmith".</p>
                </div>
                <div class="col-md-3 cold-sm-6">
                    <h2 class="text-warning text-end">Taurus - Aldebaran</h2>
                    <p class="text-end">Aldebaran of brazilian origin, is physically the strongest among all golden saints.</p>
                </div>
                <div class="col-md-3 cold-sm-6 border border-warning py-3 rounded">
                    <img src="profile_photo/tinywow_resize_3247508.jpg" alt="Aldebaran" class="rounded">
                </div>
            </div> <!-- end of the row -->

            <hr class="w-80 mx-auto text-warning">

            <div class="row">
                <div class="col-md-3 cold-sm-6">
                    <h2 class="text-warning">Gemini - Saga</h2>
                    <p>Saga, also known as Pope Ares, is the Gold Saint of the constellation Gemini. It is said that he is the most powerful Gold Saint to have ever served Athena.</p>
                </div>
                <div class="col-md-3 cold-sm-6 border border-warning py-3 rounded">
                    <img src="profile_photo/tinywow_resize_3247975.jpg" alt="Saga" class="rounded">
                </div>
                <div class="col-md-3 cold-sm-6 border border-warning py-3 rounded">
                    <img src="profile_photo/tinywow_resize_3248573.png" alt="Deathmask" class="rounded">
                </div>
                <div class="col-md-3 cold-sm-6">
                    <h2 class="text-warning">Cancer - Deathmask</h2>
                    <p>Deathmask is the cunningest and the cruelest Golden Saint. He was originally the keeper of the Temple of the same name, protecting the way to the Pontifical Chamber and the Statue of Athena along with the other eleven Golden Saints.</p>
                </div>
            </div><!-- end of the row -->

            <hr class="w-80 mx-auto text-warning">

            <div class="row">
                <div class="col-md-3 cold-sm-6 border border-warning py-3 rounded">
                    <img src="profile_photo/tinywow_resize_3248997.png" alt="Aiolio" class="rounded">
                </div>
                <div class="col-md-3 cold-sm-6">
                    <h2 class="text-warning">Leo - Aiolia</h2>
                    <p>Aiolia, the younger brother of Sagittarius Aiolos, is impetuous and has a hot spirit that incites him to action. Aiolia is named after the mythical island Aiolia or Aeolia, residence of Aiolos, the god of winds. Also, due to his talent and power, he is referred to as the reincarnation of Achilles.</p>
                </div>
                <div class="col-md-3 cold-sm-6">
                    <h2 class="text-warning text-end">Virgo - Shaka</h2>
                    <p class="text-end">Shaka, the reincarnation of Buddha is the most serene and one of the strongest Gold Saint.</p>
                </div>
                <div class="col-md-3 cold-sm-6 border border-warning py-3 rounded">
                    <img src="profile_photo/Shaka.png" alt="Shaka" class="rounded">
                </div>
            </div><!-- end of the row -->

            <hr class="w-80 mx-auto text-warning">
            
        </div>

        <!-- music in background -->
        <div class="container text-center">
            <audio src="MP3/SaintSeiya-BlueDreamInstrumental.mp3" loop controls class="col-md-3 mt-5"></audio>
            <p class="text-center">Saint Seiya - Blue Dream (instrumental)</p>
        </div>





        <?php
        require_once("inc/footer.php");
        ?>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>