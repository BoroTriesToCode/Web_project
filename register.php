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
    <link rel="stylesheet" href="assets\css\register.css?v=<?php echo time(); ?>">
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
            </nav><!-- .navbar -->

        </div>
    </header> <!-- End Header -->

        <!-- fieldsets -->

    <form id="msform" action='insert.php' method="post">
      <br>
        <br>
        <div class="title">Regisztráció</div>
        <br>
        <br>
        <br>
     
        <h2 class="fs-title">1.Adjátok meg az iskolátok adatait</h2>
            <div class="iskolak">
                <label for="iskola">Iskolátok neve:</label>
                <?php
            $mysqli = new mysqli("localhost","root","","kutv");

            // Check connection
            if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
            }
            else
            {
            // echo "Connected successfully"."</br>";
            $query="SELECT IskolaID, IskolaNev, TelepulesNev FROM iskola";
            $result = mysqli_query($mysqli, $query);
            echo "<select name='IskolaID' value=''>Iskolák</option>"; 
            while ($row = mysqli_fetch_row($result)) {
                echo "<option name=school value=$row[0]>$row[1],  $row[2]</option>";  //echo $row[0].", ".$row[1]."</br>";
            }
            echo "</select>";
            }
            ?>
            </div>
            <br>
            <br>
            
            <h2 class="fs-title">2.Irányító tanár adatai</h2>
            <input type="text" name="TanarVezeteknev" placeholder="Vezetéknév" required><i
                class="validation"><span></span><span></span></i>
            <input type="text" name="TanarKeresztnev" placeholder="Keresztnév" required><i
                class="validation"><span></span><span></span></i>
            <input type="tel" id="phone" name="TanarTelefonszam" pattern="[0-9]{10}" required placeholder="Telefonszám" required><i
                class="validation"><span></span><span></span></i>
            <input type="email" name="TanarEmail" placeholder="Emailcím"required><i
                class="validation"><span></span><span></span></i>
                <br>
                <br>

            <h2 class="fs-title">3.Bejelentkezési információ</h2>
            <h3 class="fs-subtitle">(A csapatotoknak egy közös profilja lesz, a felhasználónevetek a csapatnevetek lesz)</h3> 
            <input name="CsapatNev" placeholder="Felhasználónév=Csapatnév"><i
                class="validation"><span></span><span></span></i>
            <input type="password" name="Jelszo" placeholder="Jelszó" required><i
                class="validation"><span></span><span></span></i>
                <?php
                if(isset($_POST['Jelszo'])){
                $password = $_POST['Jelszo'];
                $number = preg_match('@[0-9]@', $password);
                $uppercase = preg_match('@[A-Z]@', $password);
                $lowercase = preg_match('@[a-z]@', $password);

                if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase ) {
                    echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter.";
                } else {
                    echo "Your password is strong.";
                }
                }
                ?>
            <h2 class="fs-title">4.Csapatkapitány adatai</h2>
            <h3 class="fs-subtitle">(A csapatkapitányotok lesz a kapcsolattartó személy)</h3>
            <input type="text" name="D1Vezeteknev" placeholder="Vezetéknév" required><i
                class="validation"><span></span><span></span></i>
            <input type="text" name="D1Keresztnev" placeholder="Keresztnév" required><i
                class="validation"><span></span><span></span></i>
            <p>Válaszd ki, hogy melyik osztályba jársz:</p>
            <input id="radio11" name="D1Evfolyam" type="radio" value="11">
            <label for="radio11">11. osztály</label>
            <input id="radio12" name="D1Evfolyam" type="radio" value="12">
            <label for="radio12">12. osztály</label>
            <input type="tel" id="phone" name="D1Telefonszam" pattern="[0-9]{10}" required placeholder="Telefonszám" required><i
                class="validation"><span></span><span></span></i>
            <input type="email" name="D1Email" placeholder="Emailcím" required><i
                class="validation"><span></span><span></span></i>
            <br>
            <br>

            <h2 class="fs-title">5.Második csapattag</h2>
            <input type="text" name="D2Vezeteknev" placeholder="Vezetéknév" required><i
                class="validation"><span></span><span></span></i>
            <input type="text" name="D2Keresztnev" placeholder="Keresztnév" required><i
                class="validation"><span></span><span></span></i>
            <p>Válaszd ki, hogy melyik osztályba jársz:</p>
            <input id="radio11" name="D2Evfolyam" type="radio" value="11">
            <label for="radio11">11. osztály</label>
            <input id="radio12" name="D2Evfolyam" type="radio" value="12">
            <label for="radio12">12. osztály</label>
            <input type="tel" id="phone" name="D2Telefonszam" pattern="[0-9]{10}" required placeholder="Telefonszám" required><i
                class="validation"><span></span><span></span></i>
            <input type="email" name="D2Email" placeholder="Emailcím" required><i
                class="validation"><span></span><span></span></i>
                <br>
                <br>

            <h2 class="fs-title">6.Harmadik csapattag</h2>
            <input type="text" name="D3Vezeteknev" placeholder="Vezetéknév" required><i
                class="validation"><span></span><span></span></i>
            <input type="text" name="D3Keresztnev" placeholder="Keresztnév" required><i
                class="validation"><span></span><span></span></i>
            <p>Válaszd ki, hogy melyik osztályba jársz:</p>
            <input id="radio11" name="D3Evfolyam" type="radio" value="11">
              <label for="radio11">11. osztály</label>
              <input id="radio12" name="D3Evfolyam" type="radio" value="12">
              <label for="radio12">12. osztály</label>
            <input type="tel" id="phone" name="D3Telefonszam" pattern="[0-9]{10}" required placeholder="Telefonszám" required><i
                class="validation"><span></span><span></span></i>
            <input type="email" name="D3Email" placeholder="Emailcím" required><i
                class="validation"><span></span><span></span></i>
                <br>
            
            <input type="submit" name="submit" class="submit action-button" value="Véglegesítés" />
        </fieldset>
    </form>
    <div class="space"></div>
    

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
  <button class="fixed-btn"><a href="countdown-preindex.php"><img src="assets/img/kutvlightblue.png" alt="" class="img-fluid"><a
    href="countdown-preindex.php"></a></button>


    <!-- Main JS File -->
  <!--  <script src="assets/js/main.js"></script>
    <script src="assets/js/registration.js"></script> -->



</body>

</html>