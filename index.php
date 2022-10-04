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
        #title_image:hover {
            transform: scale(1.05);
            transition: transform .5s ease;
        }

        #maintitle {
            text-shadow: 3px 3px black;
        }

        body {
            background-image: url("photo/stars_bg3.jpg") !important;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>

    <!-- Introduction -->
    <div class="container text-center mt-5 col-12">
        <h1 class="display-2 p-2 text-warning border border-warning border-2 bg-transparent shadow" id="maintitle">Bienveunue sur le site de l'Or</h1><br>
        <p class="fs-5 text-white">
        Ceci est un petit site dédié à mon amour pour l'anime "Saint Seiya", de préférence les Chevaliers d'Or. <br> <strong>"Have you ever felt your cosmos?"</strong>
        </p>
        <div class="mb-3">
            <img src="photo/soul_of_gold.png" alt="" class="img-fluid" id="title_image">
        </div>
    </div>

    <!-- Carousel -->
    <div id="carouselExampleSlidesOnly" class="m-0 p-0 col-md-9 col-sm-12 carousel slide carousel-fade          container-fluid" data-bs-ride="carousel">
        <div class="m-0 p-0 carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="photo/0-gold-saints-wallpapers.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span class="badge bg-dark">Athena et les Chevaliers d'Or</span>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="photo/1-gold-saints-wallpapers.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span class="badge bg-dark">Les Chevaliers d'Or</span>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="photo/2-gold-saints-wallpapers.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span class="badge bg-dark">Les Chevaliers d'Or</span>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="photo/3-gold-saints-wallpapers.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span class="badge bg-dark">Les Chevaliers d'Or</span>
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
    <!-- FIn du carousel -->

    <!-- Un petit rappel de l'histoire des chevaliers d'or-->
    <div class="container col-md-9 col-sm-12 text-center my-5 border border-warning border-3 shadow text-white">
        <h2 class="text-center text-warning display-4">Les Chevaliers d'Or</h2>
        <p>Les Chevaliers d'Or sont un groupe des douze saints les plus puissants et les plus haut placés au service d'Athéna. Leur devoir principal au Sanctuaire est de défendre les Douze Maisons du Zodiaque. Ils sont la dernière ligne de défense et les saints ultimes au service d'Athéna et du Grand Pape, parmi lesquels le Pape est généralement choisi.</p>

        <p>Les Chevaliers d'Or sont parmi les personnages les plus puissants de la série. Leur pouvoir découle de leur maîtrise du septième sens, l'essence de Cosmo, qui leur confère des capacités miraculeuses, telles que la capacité de se déplacer à la vitesse de la lumière. Certains d'entre eux ont également atteint le Huitième Sens.</p>

        <p>Comme les autres Chevaliers, qui peuvent élever leur Cosmo au-delà des niveaux ordinaires dans des circonstances extraordinaires, les Chevaliers d'Or sont capables de dépasser leurs limites en temps de crise pour accomplir des miracles. Ils sont très respectés par les autres Saints, bien que cela ne signifie pas que tous les Chevaliers d'Or sont honnêtes ou justes. Il y a plusieurs Chevaliers d'Or qui agissent avec cruauté et intérêt personnel, sans être contrôlés par leurs pairs.</p>

    </div>
    <!-- fin de rappel -->

    <!-- Profils  -->
    <div class="container-fluid col-sm-12 text-light p-4" id="profiles">
        <div class="col-md-4 col-sm-12 mx-auto text-center">
            <img src="profile_photo/Athena_1.png" alt="Athena" class="border border-warning p-3 img-fluid shadow">
            <h2 class="text-warning mt-2">Athena</h2>
            <p>Saori Kido est la réincarnation de la déesse Athéna.</p>
        </div>

        <hr class="w-50 mx-auto text-warning">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Aries-Mu.png" alt="Mu" class="w-100 border border-warning p-3  img-fluid shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Bélier - Mu</h2>
                <p>Mu, le maître de Kiki, est l'un des alliés les plus fiables du saint de bronze et est l'homme qui répare les vêtements endommagés. Il est également connu sous le nom de Mu de Jamir "le forgeron en tissu".</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning text-end">Taureau - Aldebaran</h2>
                <p class="text-end">Aldebaran d'origine brésilienne, est physiquement le plus fort parmi tous les Chevaliers d'Or.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/tinywow_resize_3247508.jpg" alt="Aldebaran" class="w-100 border border-warning p-3 shadow">
            </div>
        </div> <!-- fin de la rangée -->

        <hr class="w-75 mx-auto text-warning">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Gémeaux - Saga</h2>
                <p>Saga, également connu sous le nom de pape Ares, est le Chevalier d'Or de la constellation des Gémeaux. On dit qu'il est le chevalier d'or le plus puissant à avoir jamais servi Athéna.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/tinywow_resize_3247975.jpg" alt="Saga" class=" w-100 border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/tinywow_resize_3248573.png" alt="Deathmask" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Cancer - Deathmask</h2>
                <p>Deathmask est le Chevalier d'Or le plus rusé et le plus cruel. Il était à l'origine le gardien du temple du même nom, protégeant le chemin de la chambre pontificale et de la statue d'Athéna avec les onze autres chevaliers d'or.</p>
            </div>
        </div><!-- fin de la rangée -->

        <hr class="w-75 mx-auto text-warning">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Leo.jpg" alt="Aiolio" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Lion - Aiolia</h2>
                <p>Aiolia, le frère cadet du Sagittaire Aiolos, est impétueux et a un esprit chaud qui l'incite à l'action. Aiolia tire son nom de l'île mythique Aiolia ou Aeolia, résidence d'Aiolos, le dieu des vents. De plus, en raison de son talent et de sa puissance, il est appelé la réincarnation d'Achille.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning text-end">Vierge - Shaka</h2>
                <p class="text-end">Shaka, la réincarnation de Bouddha est la plus sereine et l'une des plus fortes des Chevaliers d'Or.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Shaka.png" alt="Shaka" class=" w-100  border border-warning p-3 shadow">
            </div>
        </div><!-- fin de la rangée -->

        <hr class="w-75 mx-auto text-warning">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Balance - Dohko</h2>
                <p>Le maître de Shiryu, il est l'un des personnages les plus anciens à côté d'Aries Shion, car ils apparaissent tous les deux dans la précédente Guerre Sainte. Il est également appelé le Vieux Maître (Roshi) par tous les chevaliers d'Athéna, en signe de respect, même si son seul véritable élève est Shiryu.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Dohko.jpg" alt="Dohko" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Milo.png" alt="Milo" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Scorpion - Milo</h2>
                <p>Milo est un fier Chevalier qui accorde une grande importance à la fierté et à l'honneur des chevaliers d'or et il semble toujours prêt à laver le nom de ses compagnons. Milo est toujours sûr de lui, il est plus impétueux que la plupart des autres Chevaliers d'Or et n'a pas peur d'exprimer ce qu'il pense.</p>
            </div>
        </div><!-- fin de la rangée -->

        <hr class="w-75 mx-auto text-warning">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Aoilos.jpg" alt="Aoilos" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Sagittaire - Aiolos</h2>
                <p>Il est le frère aîné d'Aiolia, le Chevalier d'Or du Lion. Aiolos a toujours été un paradigme de justice, considéré comme le saint parfait et l'un des deux chevaliers d'or qui pourraient succéder à Aries Shion en tant que prochain pape du sanctuaire et élu.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning text-end">Capricorne - Shura</h2>
                <p class="text-end">Shura appartient au rang légendaire de la hiérarchie Chevalier d'Or.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Shura_(2).png" alt="Shura" class=" w-100  border border-warning p-3 shadow">
            </div>
        </div><!-- fin de la rangée -->

        <hr class="w-50 mx-auto text-warning">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Verseau -Camus</h2>
                <p>Connu sous le nom de "Sorcier de l'eau et de la glace". Camus est un Chevalier très puissant, avec la capacité de baisser la température et de lancer " La poussière du diamond" avec une grande facilité. "Aurora Execution" est son attaque la plus puissante, qui émet une énergie froide proche du zéro absolu.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Camus.jpg" alt="Camus" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="profile_photo/Aphrodite.png" alt="Aphrodite" class=" w-100  border border-warning p-3 shadow">
            </div>
            <div class="col-md-3 col-sm-6">
                <h2 class="text-warning">Poissons - Aphrodite</h2>
                <p>Aphrodite est une sainte célèbre non seulement pour sa beauté, mais aussi pour sa réputation d'une des Chevaliers les plus forts. C'est un homme de taille moyenne et de peau claire. Il a les yeux bleus et les longs cheveux bleus. On dit que sa beauté resplendit entre ciel et terre et qu'il n'y a personne de plus beau que lui.</p>
            </div>
        </div><!-- fin de la rangée -->
        <!-- fin de la section 'profils' -->


    </div><!-- fin du 'row.container-fluid- 'profils'-->

    <!-- musique/media player -->
    <div class="container text-center my-3 col-sm-6 col-md-12">
        <audio src="MP3/SaintSeiya-BlueDreamInstrumental.mp3" loop controls class="col-md-3"></audio>
        <p class="text-center text-white">Saint Seiya - Blue Dream (instrumental)</p>
    </div>

    <!-- Commentaires -->
    <form action="feedback.php" method="post" id="feedback" class="container-fluid col-md-4 col-sm-9 p-3 mx-auto mb-5 border border-warning">
        <div>

            <h5 class="text-uppercase text-center text-warning">merci de me laisser un commentaire</h5>
            <label for="feedback" class="form-label"></label>

            <textarea class="form-control bg-transparent text-white border border-warning" rows="5" placeholder="Entrez le texte ici..." name="feedback" required></textarea>

            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-outline-warning mt-3">Soumettre</button>
            </div>
            
        </div>

    </form>
    <!-- fin de conmmentaires -->


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