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
    <link rel="stylesheet" href="css/style.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

</head>

<body>
    <style>
        #profiles {
            background-image: url("photo/stars_bg3.jpg");
            background-size: cover;
        }
        #title_image:hover {
            transform: scale(1.05);
            transition: transform .5s ease;
        }
        #maintitle {
            text-shadow: 3px 3px black;
        }
    </style>

    <!-- Introduction -->
    <div class="container text-center mt-5 col-12">
        <h1 class="display-2 p-2 text-warning border border-warning border-2 bg-light shadow" id="maintitle">WELCOME TO THE SITE OF GOLD</h1><br>
        <p class="fs-5">
            This is a small site dedicated to my love for the anime "Saint Seiya" and preferbaly the Gold Saints. <br> <strong>Have you ever felt your cosmos?</strong>
        </p>
        <div class="mb-3">
            <img src="photo/soul_of_gold.png" alt="" class="img-fluid" id="title_image">
        </div>
    </div>

    <!-- Start of the carousel -->
    <div id="carouselExampleSlidesOnly" class="m-0 p-0 col-md-9 col-sm-12 carousel slide carousel-fade          container-fluid" data-bs-ride="carousel">
        <div class="m-0 p-0 carousel-inner">
            <div class="carousel-item active">
                <img src="photo/0-gold-saints-wallpapers.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span class="badge bg-dark">Athena and the Gold Saints</span>
                </div>
            </div>
            <div class="carousel-item">
                <img src="photo/1-gold-saints-wallpapers.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span class="badge bg-dark">The Gold Saints</span>
                </div>
            </div>
            <div class="carousel-item">
                <img src="photo/2-gold-saints-wallpapers.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span class="badge bg-dark">The Gold Saints</span>
                </div>
            </div>
            <div class="carousel-item">
                <img src="photo/3-gold-saints-wallpapers.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span class="badge bg-dark">The Gold Saints</span>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- End of the carousel -->

    <!-- start of brief history -->
    <div class="container col-md-9 col-sm-12 text-center my-5 border border-warning border-3 shadow">
        <h2 class="text-center text-warning display-4">The Gold Saints</h2>
        <p>The Gold Saints are a group of the twelve most powerful and highest ranking warriors in Athena's army. Their main duty at Sanctuary is to defend the Twelve Houses of Zodiac. They are the last line of defense and the ultimate warriors in the service of Athena and of the Grand Pope, from among whom the Pope is generally selected.</p>

        <p>The Gold Saints are among the most powerful characters in the series. Their power derives from their mastery of the Seventh Sense, the essence of Cosmo, which grants them miraculous abilities, such as the capability to move at the speed of light. Some among them have also reached the Eighth Sense.</p>

        <p>Like other Saints, who can raise their Cosmo beyond ordinary levels in extraordinary circumstances, the Gold Saints are capable of overcoming their limits in times of crisis to accomplish miracles. They are highly respected by other Saints, though this does not signify that all Gold Saints are honest or righteous. There are multiple Gold Saints who act with open cruelty and self-interest, unchecked by their peers.</p>

    </div>
    <!-- end of brief history -->

    <!-- Profiles  -->
    <div class="container-fluid col-sm-12 text-light p-4" id="profiles">
        <div class="col-md-4 col-sm-12 mx-auto text-center">
            <img src="profile_photo/Athena_1.png" alt="Athena" class="border border-warning p-3 img-fluid shadow">
            <h2 class="text-warning mt-2">Athena</h2>
            <p>Saori Kido is the reincarnation of the goddess Athena.</p>
        </div>

        <hr class="w-50 mx-auto text-warning">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Aries-Mu.png" alt="Mu" class="w-100 border border-warning p-3  img-fluid shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Aries - Mu</h2>
                <p>Mu, Kiki's master, is one of the bronze saint's most trusted allies, and serves as the man who repairs damaged cloths. He is also known as Mu of Jamir "the Cloth Blacksmith".</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning text-end">Taurus - Aldebaran</h2>
                <p class="text-end">Aldebaran of brazilian origin, is physically the strongest among all golden saints.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/tinywow_resize_3247508.jpg" alt="Aldebaran" class="w-100 border border-warning p-3 shadow">
            </div>
        </div> <!-- end of the row -->

        <hr class="w-75 mx-auto text-warning">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Gemini - Saga</h2>
                <p>Saga, also known as Pope Ares, is the Gold Saint of the constellation Gemini. It is said that he is the most powerful Gold Saint to have ever served Athena.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/tinywow_resize_3247975.jpg" alt="Saga" class=" w-100 border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/tinywow_resize_3248573.png" alt="Deathmask" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Cancer - Deathmask</h2>
                <p>Deathmask is the cunningest and the cruelest Golden Saint. He was originally the keeper of the Temple of the same name, protecting the way to the Pontifical Chamber and the Statue of Athena along with the other eleven Golden Saints.</p>
            </div>
        </div><!-- end of the row -->

        <hr class="w-75 mx-auto text-warning">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Leo.jpg" alt="Aiolio" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Leo - Aiolia</h2>
                <p>Aiolia, the younger brother of Sagittarius Aiolos, is impetuous and has a hot spirit that incites him to action. Aiolia is named after the mythical island Aiolia or Aeolia, residence of Aiolos, the god of winds. Also, due to his talent and power, he is referred to as the reincarnation of Achilles.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning text-end">Virgo - Shaka</h2>
                <p class="text-end">Shaka, the reincarnation of Buddha is the most serene and one of the strongest Gold Saint.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Shaka.png" alt="Shaka" class=" w-100  border border-warning p-3 shadow">
            </div>
        </div><!-- end of the row -->

        <hr class="w-75 mx-auto text-warning">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Libra - Dohko</h2>
                <p>The master of Shiryu, he is one of the oldest characters next to Aries Shion, as they both appear in the previous Holy War. He is also referred to as the Old Master (Roshi) by all the Saints of Athena, as a sign of respect, even though his only true student is Shiryu.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Dohko.jpg" alt="Dohko" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Milo.png" alt="Milo" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Scorpion - Milo</h2>
                <p>Milo is a proud knight who sees great importance in the pride and honor of the Gold Saints and he seems to be always ready to clean the name of his companions. Milo is always sure of himself, he is more impetuous than most of the other Golden Saints and is not afraid to voice what he is thinking.</p>
            </div>
        </div><!-- end of the row -->

        <hr class="w-75 mx-auto text-warning">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Aoilos.jpg" alt="Aoilos" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Sagittarius - Aiolos</h2>
                <p>He is the older brother of Aiolia, the gold saint of Leo. Aiolos always was a paradigm of righteousness, seen as the perfect Saint and one of the two Gold Saints who could succeed Aries Shion as the next Pope of Sanctuary and the chosen one.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning text-end">Capricorn - Shura</h2>
                <p class="text-end">Shura belongs to the fabled rank of Gold Saint hierarchy.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Shura_(2).png" alt="Shura" class=" w-100  border border-warning p-3 shadow">
            </div>
        </div><!-- end of the row -->

        <hr class="w-50 mx-auto text-warning">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Aquarius -Camus</h2>
                <p>Known as the "Mage of water and ice". Camus is a very powerful Saint, with the ability to lower the temperature and cast "Diamond Dust" with great ease. "Execution Aurora" is his most powerful attack, which emits a cold energy close to absolute zero.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Camus.jpg" alt="Camus" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Aphrodite.png" alt="Aphrodite" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Pisces - Aphrodite</h2>
                <p>Aphrodite is a Saint famous not only because of his beauty, but also for his reputation as one of the strongest Saint. He is a man of medium stature and fair skin. He has blue eyes and long blue hair. It is said that its beauty shines between heaven and earth and that there is no one more beautiful than him.</p>
            </div>
        </div><!-- end of the row -->
        <!-- end of the section 'profile' -->


    </div><!-- end of 'row.container-fluid- 'profiles'-->

    <!-- music in background -->
    <div class="container text-center my-3">
        <audio src="MP3/SaintSeiya-BlueDreamInstrumental.mp3" loop controls class="col-md-3"></audio>
        <p class="text-center">Saint Seiya - Blue Dream (instrumental)</p>
    </div>

    <!-- FEEDBACK AREA -->
    <form action="feedback.php" method="post" id="feedback" class="container-fluid col-md-4 p-3 mx-auto mb-5 border border-light shadow">
        <div>

            <h5 class="text-uppercase text-center">please leave me a feedback</h5>
            <label for="feedback" class="form-label"></label>

            <textarea class="form-control" rows="5" placeholder="Enter text here..." name="feedback" required></textarea>

            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
            </div>

        </div>

    </form>
    <!-- end of the FEEDBACK AREA -->


    <?php
    require_once("inc/footer.php");
    ?>

    <!-- JS-->
    <script src=""></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>