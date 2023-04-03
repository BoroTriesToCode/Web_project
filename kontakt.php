<?php include 'forms/contact.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KÜTV-Kontakt</title>
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

  <!-- Main CSS File -->
  <link href="assets/css/kontakt.css" rel="stylesheet">
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
          <li><a class="nav-link scrollto " href="archive.php">Archívum</a></li>
          <li><a class="nav-link scrollto active" href="kontakt.php">Kapcsolat</a></li>
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
          <li><a class="nav-link scrollto active" href="kontakt.php">Kapcsolat</a></li>
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
          <li><a class="nav-link scrollto active" href="kontakt.php">Kapcsolat</a></li>
          <li><a class="nav-link scrollto" href="login_separation.php">Bejelentkezés</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <?php } ?>


    </div>
  </header><!-- End Header -->

  <!-- ======= Contact Section ======= -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Vedd fel velünk a kapcsolatot</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="bi bi-phone"></i>
                <p>
                  Telefon:<br>
                  <span> 0264418652</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="bi bi-envelope"></i>
                <p>
                  Email: <br>
                  <span>magyar.intezet@econ.ubbcluj.ro</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="bi bi-geo-alt"></i>
                <p>
                  Cím: <br>
                  <span></span>400591 Kolozsvár, Teodor Mihali utca 58–60 szám</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6">
            <!-- Start Map -->
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.579807380789!2d23.619205315799483!3d46.77317835316797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490c15a18e8af9%3A0xcc357d4dedcf12a0!2zQkJURSBLw7Z6Z2F6ZGFzw6FnLSDDqXMgR2F6ZMOhbGtvZMOhc3R1ZG9tw6FueWkgS2Fy!5e0!3m2!1shu!2sro!4v1653174130563!5m2!1shu!2sro"
              width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6">
            <div class="form contact-form">
              <form action="forms/contact.php" method="post">
                <input type="text" name="name" class="form-control" id="name" placeholder="Név" required>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email cím" required><i
                  class="validation"><span></span><span></span></i>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Üzenet tárgya"
                  required>
                <textarea class="form-control" name="message" rows="5" placeholder="Üzenet" required></textarea>
                <input type="submit" name="submit" value="Küldés">
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div><!-- End Contact Section -->

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