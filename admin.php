<?php
    session_start();
    if(isset($_SESSION["fhnev"]) && isset($_SESSION["psw"]) && $_SESSION["fhnev"]=="admin" && $_SESSION["psw"]=="szupertitkos" ){
?>
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
    <link rel="stylesheet" href="assets\css\login.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1><a href="countdown-preindex.html"><span>KÜTV admin</span></a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="user.php">Felhasználói felület</a></li>
                    <li><a class="nav-link scrollto" href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=kutv">Adatbázis</a></li>
                    <li><a class="nav-link scrollto active" href="admin.php">Statisztikák</a></li>
                    <li><a class="nav-link scrollto" href="logout.php">Kijelentkezés</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>
    <div id="login-form-wrap">
        <h2>Admin felület</h2>
        <h4>Eddig jelentkezett csapatok</h4>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "kutv");
        // Check connection
        if ($conn->connect_errno) {
            die("Failed to connect to MySQL: " . $conn->connect_error);
        } else {
            $query = "SELECT TelepulesNev,IskolaNev,CsapatNev,CONCAT(TanarVezeteknev,' ',TanarKeresztnev) AS Tanar,RegisztracioIdopont FROM csapat
            INNER JOIN tanar  ON csapat.TanarEmail=tanar.TanarEmail
            INNER JOIN iskola ON csapat.IskolaID=iskola.IskolaID
            ORDER BY TelepulesNev ASC";
            $result = mysqli_query($conn, $query);
        }
        ?>
        <style>
            table,th,td{
                border:1px solid black;
                border-collapse:collapse;
                text-align: center;
                max-width:90%;
                width:auto;
            }
        </style>
        <table cellspacing="0" cellpadding="10">
            <tr bgcolor="#3ec1d5">
                <th >Sorszám</th>
                <th>Helységnév</th>
                <th>Iskola név</th>
                <th>Csapatnév</th>
                <th>Vezetőtanár</th>
                <th>Regiszráció időpontja</th>
            </tr>
            <?php
        if (mysqli_num_rows($result) > 0) {
            $sn = 1;
            while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td>
                    <?php echo $sn; ?>
                </td>
                <td>
                    <?php echo $data['TelepulesNev']; ?>
                </td>
                <td>
                    <?php echo $data['IskolaNev']; ?>
                </td>
                <td>
                    <?php echo $data['CsapatNev']; ?>
                </td>
                <td>
                    <?php echo $data['Tanar']; ?>
                </td>
                <td>
                    <?php echo $data['RegisztracioIdopont']; ?>
                </td>
            <tr>
                <?php
                $sn++;
            }
        } else {
        ?>
            <tr>
                <td colspan="8">No data found</td>
            </tr>
            <?php
        }
        ?>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
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
</body>
<!--Main JS File -->
<script src="assets/js/main.js"></script>

</html>
<?php
}
    else{
        echo "Ehhez a tartalomhoz nincsen hozzáférése, jelentkezzen be adminként!   "."</br>";
        unset($_SESSION["fhnev"]);
        unset($_SESSION["psw"]);
        echo '<a href="login_separation.php">Bejelentkezés</a>';
    }
?>