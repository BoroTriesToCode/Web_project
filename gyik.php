<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KÜTV-Gyakori kérdések</title>
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
  <link href="assets/css/gyik.css" rel="stylesheet">
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
          <li><a class="nav-link scrollto" href="index.php">Kezdőlap</a></li>
          <li><a class="nav-link scrollto" href="competition.php">Versenyről</a></li>
          <li class="dropdown active"><a href="gyik.php"><span>Gyakori kérdések</span> <i
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
          <li><a class="nav-link scrollto" href="competition.php">Versenyről</a></li>
          <li class="dropdown active"><a href="gyik.php"><span>Gyakori kérdések</span> <i
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

  <!-- ======= Header ======= -->
  <div class="title">Gyakori kérdések</div>

  <div id="faq" class="faq-body">
    <div class="faq-list">
      <div>
        <details>
          <summary title="Kik jelentkezhetnek?">Kik jelentkezhetnek?</summary>
          <p class="faq-content">A versenyen 11. és 12. osztályos középiskolás diákokból álló 3 fős csapatok vehetnek
            részt. A jelentkezés az oldalra való regisztrációval történik.</p>
        </details>
      </div>
      <div>
        <details>
          <summary title="Miért éri meg jelentkezni?">Miért éri meg jelentkezni?</summary>
          <p class="faq-content">Az szakmai tapasztalat mellet, a kolozsvári döntőbe jutott csapatok betekintést
            nyerhetnek a Babes-Bolyai Tudományegyetem Közgazdaság- és Gazdálkodástudományi Karának egyetemi életébe is.
            Mindezek mellett értékes nyereményeket is lehet szerezni, valamint pluszpontokat is a karunkra való nyári
            felvételire.</p>
        </details>
      </div>
      <div>
        <details>
          <summary title="Mindhárom diák egy osztályból/évfolyamból kell legyen?">Mindhárom diák egy
            osztályból/évfolyamból kell legyen?</summary>
          <p class="faq-content">A 3 diák lehet különböző osztályból, illetve évfolyamból. Az egyetlen kikötés:
            ugyanannak az iskolának legyenek a diákjai.</p>
        </details>
      </div>
      <div>
        <details>
          <summary title="Egy iskolából csak egy csapat jelentkezhet?">Egy iskolából csak egy csapat jelentkezhet?
          </summary>
          <p class="faq-content">Természetesen akárhány csapat jelentkezhet egy iskolából, a döntőben is lehetnek azonos
            iskolát képviselő csapatok, ezért bátran jelentkezzen minden
            érdeklődő!</p>
        </details>
      </div>
      <div>
        <details>
          <summary title="Hogyan tudok jelentkezni?">Hogyan tudok jelentkezni?</summary>
          <p class="faq-content">Az első és egyben legfontosabb lépés a csapattársak keresése. Miután ezzel megvagytok,
            csapatotokkal együtt töltsétek ki az oldalon levő regisztrációt (Bejelentkezés/Először versenyzel?
            Regisztrálj itt). A regisztrációs form kitöltésével véglegesítitek a jelentkezést. FONTOS: A regisztráció
            alkalmával megadott felhasználónév és jelszó a későbbiekben még kulcsfontosságú lesz, mivel a profilotokba
            belépve kell leadnotok a megoldásaitokat, ezért tanácsos jól megjegyezni. Jó versenyzést és sok sikert!</p>
        </details>
      </div>
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


  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>