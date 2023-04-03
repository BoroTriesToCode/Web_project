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
  <link href="assets/css/style.css" rel="stylesheet">
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
          <li><a class="nav-link scrollto  active" href="index.php">Kezdőlap</a></li>
          <li><a class="nav-link scrollto" href="competition.php">Versenyről</a></li>
          <li class="dropdown"><a href="gyik.php"><span>Gyakori kérdések</span> <i class="bi bi-chevron-down"></i></a>
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
        <h1><a href="countdown-preindex.html"><span>KÜTV </span></a></h1>
        <h5>
          <?php echo $_SESSION['fhnev'] ?>
        </h5>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Kezdőlap</a></li>
          <li><a class="nav-link scrollto" href="competition.php">Versenyről</a></li>
          <li class="dropdown"><a href="gyik.php"><span>Gyakori kérdések</span> <i class="bi bi-chevron-down"></i></a>
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
          <li><a class="nav-link scrollto active" href="index.php">Kezdőlap</a></li>
          <li><a class="nav-link scrollto" href="competition.php">Versenyről</a></li>
          <li class="dropdown"><a href="gyik.php"><span>Gyakori kérdések</span> <i class="bi bi-chevron-down"></i></a>
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

  <main id="main">

    <!-- ======= Timeline ======= -->
    <div class="bg-gradient_solid">
      <div class="container">
        <div class="section-header">
          <h2>Soha nem lehet elég korán elkezdeni...<br>Legyetek Ti a jövő közgazdászai!</h2>
          <hr>
        </div>
        <div class="steps">
          <div class="steps-container">
            <div class="content">
              <h2>2023</h2>
              <p>15.alkalommal kerül megszervezésre a Középiskolások Üzleti Tanácsadó Versenye</p>
              <img src="assets\img\kutvlightblue.png" alt="">
            </div>
            <i class="step-line"></i>
            <div class="date">2023</div>
          </div>
          <div class="steps-container">
            <div class="content">
              <h2>Döntő Kolozsváron</h2>
              <p>A pandémia után visszatérünk a kampuszra az offline döntőre</p>
              <img src="assets\img\FSEGA.jpg" alt="">
            </div>
            <i class="step-line"></i>
            <div class="date"></div>
          </div>
          <div class="steps-container">
            <div class="content">
              <h2>Értékes nyeremények</h2>
              <p>I.Díj: 3000 lej<br>II.Díj: 2000 lej<br>III.Díj: 1.500 lej<br><br>Dicséret: 1000
                lej<br>Csoportmásodikok: 750 lej</p>
              <img src="assets\img\img7.jpg" alt="">
            </div>
            <i class="step-line"></i>
            <div class="date"></div>
          </div>
          <div class="steps-container">
            <div class="content">
              <h2>Szakmai tapasztalat</h2>
              <p>A zsűrit elismert szakemberek alkotják</p>
              <img src="assets\img\img6.jpg" alt="">
            </div>
            <i class="step-line"></i>
            <div class="date"></div>
          </div>
          <div class="steps-container">
            <div class="content">
              <h2>...És természetesen óriási élmény!</h2>
              <img src="assets\img\group_1.jpg" alt="">
            </div>
            <i class="step-line"></i>
            <div class="date"></div>
          </div>
        </div>
      </div>
    </div>



    <!-- ======= Registration Section ======= -->
    <div class="registration-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="registration-text text-center">
              <h3>Felkeltettük az érdeklődésed?</h3>
              <a class="reg-btn" href="register.php">Regisztrálj most!</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- Registration Section -->

  </main><!-- End #main -->

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
              <a href="index.html"><img src="assets/img/kutvwhite.png" alt="kutv-logo" class="img-fluid-kutv"></a>
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