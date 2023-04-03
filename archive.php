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
    <link href="assets/css/archive.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">
            <?php
            include("isloggedin.php");
            if ($loginst == 1) {
                if(isset($_SESSION["fhnev"]) && isset($_SESSION["psw"]) && $_SESSION["fhnev"]=="admin" && $_SESSION["psw"]=="szupertitkos" ){
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
                    <li><a class="nav-link scrollto active" href="archive.php">Archívum</a></li>
                    <li><a class="nav-link scrollto" href="kontakt.php">Kapcsolat</a></li>
                    <li><a class="nav-link scrollto" href="user.php">Megoldás feltöltés</a></li>
                    <li><a class="nav-link scrollto" href="logout.php">Kijelentkezés</a></li>
                </ul>
            </nav><!-- .navbar -->
            <?php } else { ?>
            <div class="logo">
                <h1><a href="countdown-preindex.html"><span>KÜTV </span></a></h1>
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
                    <li><a class="nav-link scrollto active" href="archive.php">Archívum</a></li>
                    <li><a class="nav-link scrollto" href="kontakt.php">Kapcsolat</a></li>
                    <li><a class="nav-link scrollto" href="user.php">Megoldás feltöltés</a></li>
                    <li><a class="nav-link scrollto" href="logout.php">Kijelentkezés</a></li>
                </ul>
            </nav><!-- .navbar -->
            <?php }
            } else { ?>

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
                    <li><a class="nav-link scrollto active" href="archive.php">Archívum</a></li>
                    <li><a class="nav-link scrollto" href="kontakt.php">Kapcsolat</a></li>
                    <li><a class="nav-link scrollto" href="login_separation.php">Bejelentkezés</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                </ul>
            </nav><!-- .navbar -->
            <?php }
            ?>


        </div>
    </header><!-- End Header -->

    <!-- ======= Blog Section ======= -->
    <div id="blog" class="blog-area">
        <div class="blog-inner area-padding">
            <div class="blog-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Hírek (Archívum)</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Left Blog -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <img src="assets/img/FSEGA.jpg" alt="">
                            </div>
                            <div class="blog-meta">
                                <span class="date-type">
                                    <i class="fa fa-calendar">2022/04/01</i>
                                </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="assets\img\news1.pdf">XIV. Középiskolások Üzleti Tanácsadó Versenye 2022 -
                                        döntős csapatai</a>
                                </h4>
                                <p>
                                    Két év után újra kolozsvári helyszínen versenyeznek a jövő közgazdászai!
                                </p>
                            </div>
                            <span>
                                <a href="assets\img\news1.pdf" class="ready-btn">Tudj meg többet</a>
                            </span>
                        </div>
                        <!-- Start single blog -->
                    </div>
                    <!-- End Left Blog-->
                    <!-- Start Left Blog -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <img src="assets\img\research_3.jpg" alt="">
                            </div>
                            <div class="blog-meta">
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i>2021/04/14
                                </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="assets/img/news2.pdf">Ők a 13. KÜTV döntős csapatai! (archív)</a>
                                </h4>
                                <p>
                                    Gratulálunk a csapatoknak
                                </p>
                            </div>
                            <span>
                                <a href="assets/img/news2.pdf" class="ready-btn">Tudj meg többet</a>
                            </span>
                        </div>
                        <!-- Start single blog -->
                    </div>
                    <!-- End Left Blog-->
                    <!-- Start Right Blog-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <img src="assets/img/csapat_regi.jpg" alt="">
                            </div>
                            <div class="blog-meta">
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i>2021/02/15
                                </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="assets/img/news2.pdf">Jelentkezz a XIII. Középiskolások Üzleti Tanácsadó
                                        Versenyére! (archív)</a>
                                </h4>
                                <p>
                                    KÜTV jelentkezés
                                </p>
                            </div>
                            <span>
                                <a href="assets/img/news2.pdf" class="ready-btn">Tudj meg többet</a>
                            </span>
                        </div>
                    </div>
                    <!-- End Right Blog-->
                </div>
            </div>
        </div>
    </div><!-- End Blog Section -->


    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>