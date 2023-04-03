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
    <link rel="stylesheet" href="assets\css\login.css">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

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
                    <li><a class="nav-link scrollto active" href="login_separation.php">Bejelentkezés</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>



        </div>
    </header><!-- End Header -->

    <div id="login-form-wrap">
        <h2>Bejelentkezés</h2>
        <form method='post' action='login.php' id="login-form">
            <p>
                <input type="text" id="text" name="username" placeholder="Csapatnév" required ><i
                    class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="password" id="password" name="password" placeholder="Jelszó" required><i
                    class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="submit" id="login" value="Bejelentkezés">
            </p>
        </form>
        <div id="create-account-wrap">
            <p>Először versenyzel? <a href="register.php">Regisztrálj itt</a></p>
            <p> <a href="password.php">  Elfelejtetted a jelszót?  </a><a href="changepassword.php">  Jelszót szeretnél változtatni?  </a></p>
            
        </div>
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

    <!--Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>