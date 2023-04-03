<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (isset($_SESSION["fhnev"]) && isset($_SESSION["psw"])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KÜTV-Középiskolások Üzleti Tanácsadó Versenye</title>
    <meta content="FSEGA - Középiskolások Üzleti Tanácsadó Versenye" name="description">
    <meta content="KÜTV, Középiskolások Üzleti Tanácsadó Versenye, FSEGA, Közgáz, Kolozsvár" name="keywords">

    <!-- Icons -->
    <link href="assets/img/kutvlightblue.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link href="assets/css/kontakt.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1><a href="countdown-preindex.php"><span>KÜTV</span></a></h1>
                <h5>
                    <?php echo $_SESSION['fhnev'] ?>
                </h5>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Kezdőlap</a></li>
                    <li><a class="nav-link scrollto" href="competition.php">Versenyről</a></li>
                    <li class="dropdown"><a href="gyik.php"><span>Gyakori kérdések</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="gyik.php">Kik jelentkezhetnek?</a></li>
                            <li><a href="gyik.php">Miért éri meg jelentkezni?</a></li>
                            <li><a href="gyik.php">Mindhárom diák egy osztályból/évfolyamból kell legyen?</a></li>
                            <li><a href="gyik.php">Egy iskolából csak egy csapat jelentkezhet?</a></li>
                            <li><a href="gyik.php">Hogyan tudok jelentkezni?</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="archive.php">Archívum</a></li>
                    <li><a class="nav-link scrollto" href="kontakt.php">Kapcsolat</a></li>
                    <li><a class="nav-link scrollto active" href="user.php">Megoldás feltöltés</a></li>
                    <li><a class="nav-link scrollto" href="logout.php">Kijelentkezés</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <div id="login-form-wrap">
    <div class="section-headline text-center">
        <br>
        <h2>Üdvözlünk, <?= $_SESSION['fhnev'] ?>!</p>
        </h2>
        <br>
        <br>
        <h3>Itt feltölthetitek megoldásotokat:</h3>
        <br>
        <br>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="submit">FELTÖLTÉS</button>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </form>

    </div>

    <!-- ======= Footer ======= -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="footer-head">
                    <h4>Szervezők</h4>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-content">
                            <div class="kutv-img">
                                <a href="https://hu.econ.ubbcluj.ro/"><img src="assets/img/logo.png" alt="fsega-logo"
                                        class="img-fluid"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-content">
                            <a href="index.html"><img src="assets/img/kutvwhite.png" alt="kutv-logo"
                                    class="img-fluid-kutv"></a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-content">
                            <a href="https://www.ubbcluj.ro/hu/"><img src="assets/img/babeswhite.png" alt="babes-logo"
                                    class="img-fluid"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <!-- fixed logo -->
    <button class="fixed-btn"><a href="countdown-preindex.html"><img src="assets/img/kutvlightblue.png" alt=""
                class="img-fluid"><a href="countdown-preindex.html"></a></button>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>

<?php
} else {
    echo "Ehhez a tartalomhoz nincsen hozzáférése, jelentkezzen be!   " . "</br>";
    echo '<a href="login_separation.php">Bejelentkezés</a>';
    unset($_SESSION["fhnev"]);
    unset($_SESSION["psw"]);
}
?>