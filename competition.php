<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KÜTV-Bejelentkezés</title>
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
    <link href="assets/css/competition.css" rel="stylesheet">
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
                    <li><a class="nav-link scrollto active" href="competition.php">Versenyről</a></li>
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
            <div class="logo">
                <h1><a href="countdown-preindex.php"><span>KÜTV</span></a></h1>
                <h5>
                    <?php echo $_SESSION['fhnev'] ?>
                </h5>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Kezdőlap</a></li>
                    <li><a class="nav-link scrollto active" href="competition.php">Versenyről</a></li>
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
            } else { ?>
            <div class="logo">
                <h1><a href="countdown-preindex.php"><span>KÜTV</span></a></h1>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Kezdőlap</a></li>
                    <li><a class="nav-link scrollto active" href="competition.php">Versenyről</a></li>
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


    <!-- ======= Competition Section ======= -->
    <div id="competition" class="competition-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Versenyfordulók</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="comp_table_list">
                        <h3>I.Forduló <br /> <span>Piackutatás: adatgyűjtés<br>online – szelekció</span></h3>
                        <h4>A jelentkező csapatoknak a feladata egy piackutatás elvégzése megadott mintavételi és
                            módszertani
                            kritériumok figyelembe vételével. Azok a csapatok, amelyek sikeresen teljesítik az első
                            fordulót,
                            továbbjutnak a második fordulóba, amely egy piackutatást foglal magába.</h4>

                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="comp_table_list ">
                        <h3>II.Forduló <br /> <span>Piackutatás: adatfeldolgozás<br>online – szelekció</span></h3>
                        <h4>A második fordulóban a csapatok által beküldött adatok és más, már meglévő, piaci
                            információk alapján
                            a csapatoknak egy elemzést kell készíteniük egy adott témában. A második forduló részletes
                            leírását és
                            az elemzés szempontjait a verseny ütemtervében megjelölt időpontban kiküldjük a csapatoknak.
                        </h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="comp_table_list">
                        <h3>III.Forduló <br /> <span>Esettanulmány döntő<br>offline</span></h3>
                        <h4>A második forduló során továbbjutott csapatok a döntőben mérik össze tudásukat és
                            készségeiket egy
                            valós vállalati esettanulmány megoldása és bemutatása során. A döntő alatt a csapatok a
                            kampuszon dolgozzák ki megoldásaikat, amelyeket a
                            gyakorló
                            szakemberekből álló zsűri előtt mutatnak be.</h4>
                    </div>
                </div>
            </div>
            <a class="button" href="assets\img\rules.pdf">Versenyszabályzat</a>
        </div>
    </div><!-- End Competition Section -->

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
    <button class="fixed-btn"><a href="countdown-preindex.php"><img src="assets/img/kutvlightblue.png" alt=""
                class="img-fluid"><a href="countdown-preindex.php"></a></button>


    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/registration.js"></script>



</body>

</html>