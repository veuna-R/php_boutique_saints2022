            </div>
        </main>
        <!-- Footer -->
        <footer class="bg-dark page-footer font-small blue pt-4" style="background-image: url(photo/stars_bg2.jpg);">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left py-4">

            <!-- Grid row -->
            <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3 text-center">

                <!-- Content -->
                <h5 class="text-white text-uppercase">Welcome to my online shop</h5>
                <br>
                <p class="text-white">This shop is purely cosmetic and serves no immediate purpose other than entertainment and training. Thank you for taking the time to visit this site.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <!-- <div class="col-md-3 mb-md-0 mb-3"> -->

                <!-- Links -->
                <!-- <h5 class="text-white text-uppercase">Links</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="index.php?categorie=chemise" class="text-white">Nos belles chemises</a>
                </li>
                <li>
                    <a href="index.php?categorie=tshirt" class="text-white">T-shirt tendance</a>
                </li>
                <li>
                    <a href="index.php?categorie=pull" class="text-white">Pull pour l'hiver</a>
                </li>
                </ul>

            </div> -->
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 mb-md-0 mb-3 text-center">

                <!-- Links -->
                <h5 class="text-white text-uppercase">Links</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="index.php" class="text-white">Shop</a>
                </li>
                <li>
                    <a href="panier.php" class="text-white">Cart</a>
                </li>

                <?php if(internauteEstConnecte()) { ?>
                    <li>
                        <a href="profil.php" class="text-white">My profile</a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="connexion.php" class="text-white">Connect</a>
                    </li>
                    <li>
                        <a href="inscription.php" class="text-white">Register</a>
                    </li>
                <?php } ?>
                </ul>

            </div>
            <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="text-white footer-copyright text-center py-3">
            © 2022 Copyright: Robert VEU NA
        </div>
        <!-- Copyright -->

        </footer>
        <!-- Footer -->

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>