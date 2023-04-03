<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KÜTV-Középiskolások Üzleti Tanácsadó Versenye</title>
    <meta content="Középiskolások Üzleti Tanácsadó Versenye" name="description">
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

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="assets\css\countdown-preindex.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">


            <?php
                include("isloggedin.php");
            if ($loginst == 1) {
                if (isset($_SESSION["fhnev"]) && isset($_SESSION["psw"]) && $_SESSION["fhnev"] == "admin" && $_SESSION["psw"] == "szupertitkos") {
            ?>
                <div class="logo">
                    <h1><a href="countdown-preindex.php"><span>KÜTV admin </span></a></h1>
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
                        <li><a class="nav-link scrollto" href="user.php">Megoldás feltöltés</a></li>
                        <li><a class="nav-link scrollto" href="logout.php">Kijelentkezés</a></li>
                    </ul>
                </nav><!-- .navbar -->
                <?php } else { ?>
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
                    <li><a class="nav-link scrollto" href="user.php">Megoldás feltöltés</a></li>
                    <li><a class="nav-link scrollto" href="logout.php">Kijelentkezés</a></li>
                </ul>
            </nav><!-- .navbar -->
            <?php }
            } else {?>
            <div class="logo">
                <h1><a href="countdown-preindex.php"><span>KÜTV</span></a></h1>
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
                    <li><a class="nav-link scrollto" href="login_separation.php">Bejelentkezés</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                <?php } ?>


        </div>
    </header><!-- End Header -->
    <div class="container-countdown">
        <div class="headline">Ennyi nap van a XV.Középiskolások Üzleti Tanácsadó Versenyéig:</div>
        <div id="countdown">
            <ul>
                <li><span id="days"></span>nap</li>
                <li><span id="hours"></span>óra</li>
                <li><span id="minutes"></span>perc</li>
                <li><span id="seconds"></span>másodperc</li>
            </ul>
        </div>
        <a class="button" href="index.php">Tudj meg többet</a>
    </div>


    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/countdown.js"></script>

</body>

</html>