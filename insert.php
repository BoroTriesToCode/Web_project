<?php
  use PHPMailer\PHPMailer\PHPMailer;
  $conn = mysqli_connect("localhost","root","","kutv");

  // Check connection
  if ($conn -> connect_errno) {
  die("Failed to connect to MySQL: " . $conn -> connect_error);
  }
  else
  {
    $psw=$_POST['Jelszo'];
    $password = $_POST['Jelszo'];
    $number = preg_match('@[0-9]@', $psw);
    $uppercase = preg_match('@[A-Z]@', $psw);
    $lowercase = preg_match('@[a-z]@', $psw);
    if(strlen($psw) < 8 || !$number || !$uppercase || !$lowercase ) {
      echo "Hiba: A jelszó legalább 8 karakterből kell álljon, kell tartalmaznia legalóbb egy kis- és nagybetűt, illetve legalább egy számot";
     } else {
      //tanar
      $TanarEmail=mysqli_real_escape_string($conn,$_POST['TanarEmail']);
      $TanarTelefonszam=mysqli_real_escape_string($conn,$_POST['TanarTelefonszam']);
      $TanarKeresztnev=mysqli_real_escape_string($conn,$_POST['TanarKeresztnev']);
      $TanarVezeteknev=mysqli_real_escape_string($conn,$_POST['TanarVezeteknev']);
      $query="INSERT INTO tanar VALUES('$TanarEmail','$TanarTelefonszam','$TanarKeresztnev','$TanarVezeteknev')";
      $insert=mysqli_query($conn,$query);
      //csapat
      $CsapatNev=mysqli_real_escape_string($conn,$_POST['CsapatNev']);
      $IskolaID=mysqli_real_escape_string($conn,$_POST['IskolaID']);
      $Jelszo=password_hash($psw,PASSWORD_DEFAULT);
      $Datum=new DateTime('now');
      $formazottDatum=date_format($Datum,"Y-m-d H:i:s");
      $query="INSERT INTO csapat VALUES('$CsapatNev','$Jelszo','$formazottDatum','$IskolaID','$TanarEmail')";
      $insert=mysqli_query($conn,$query);
      //csapatkapitany(diak1)
      $Diak1Vezeteknev=mysqli_real_escape_string($conn,$_POST['D1Vezeteknev']);
      $Diak1Keresztnev=mysqli_real_escape_string($conn,$_POST['D1Keresztnev']);
      $DiakTelefonszam=mysqli_real_escape_string($conn,$_POST['D1Telefonszam']);
      $Diak1Email=mysqli_real_escape_string($conn,$_POST['D1Email']);
      $DiakEvfolyam=mysqli_real_escape_string($conn,$_POST['D1Evfolyam']);
      $query="INSERT INTO diak VALUES('$Diak1Vezeteknev','$Diak1Keresztnev','$DiakTelefonszam','$Diak1Email','$DiakEvfolyam','$CsapatNev')";
      $insert=mysqli_query($conn,$query);
      //diak2
      $Diak2Vezeteknev=mysqli_real_escape_string($conn,$_POST['D2Vezeteknev']);
      $Diak2Keresztnev=mysqli_real_escape_string($conn,$_POST['D2Keresztnev']);
      $DiakTelefonszam=mysqli_real_escape_string($conn,$_POST['D2Telefonszam']);
      $Diak2Email=mysqli_real_escape_string($conn,$_POST['D2Email']);
      $DiakEvfolyam=mysqli_real_escape_string($conn,$_POST['D2Evfolyam']);
      $query="INSERT INTO diak VALUES('$Diak2Vezeteknev','$Diak2Keresztnev','$DiakTelefonszam','$Diak2Email','$DiakEvfolyam','$CsapatNev')";
      $insert=mysqli_query($conn,$query);
      //diak3
      $Diak3Vezeteknev=mysqli_real_escape_string($conn,$_POST['D3Vezeteknev']);
      $Diak3Keresztnev=mysqli_real_escape_string($conn,$_POST['D3Keresztnev']);
      $DiakTelefonszam=mysqli_real_escape_string($conn,$_POST['D3Telefonszam']);
      $Diak3Email=mysqli_real_escape_string($conn,$_POST['D3Email']);
      $DiakEvfolyam=mysqli_real_escape_string($conn,$_POST['D3Evfolyam']);
      $query="INSERT INTO diak VALUES('$Diak3Vezeteknev','$Diak3Keresztnev','$DiakTelefonszam','$Diak3Email','$DiakEvfolyam','$CsapatNev')";
      $insert=mysqli_query($conn,$query);

      mysqli_close($conn);

      require_once 'forms/PHPMailer.php';
      require_once 'forms/Exception.php';
      require_once 'forms/SMTP.php';

    if (isset($_POST['submit'])) {
      $mail = new PHPMailer(true);
      $mail->CharSet = "UTF-8";
      $alert = '';

      try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kutv.office@gmail.com';
        $mail->Password = 'jmunoyigiwtmuzmi';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = '465';

        $mail->SMTPOptions = array(
          'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
          )
        );

        $mail->setFrom('kutv.office@gmail.com');
        $mail->addAddress($Diak1Email);
        $mail->addAddress($Diak2Email);
        $mail->addAddress($Diak3Email);


        $mail->isHTML(true);
        $mail->Subject = 'KÜTV 2023 - Sikeres regisztráció';
        $mail->Body = "Kedves $CsapatNev! <br><br> Gratulálunk a sikeres regisztrációhoz! <br> Csapatnév: $CsapatNev <br> Vezetőtanár: $TanarVezeteknev $TanarKeresztnev <br> Diákok: $Diak1Vezeteknev $Diak1Keresztnev, $Diak2Vezeteknev $Diak2Keresztnev, $Diak3Vezeteknev $Diak3Keresztnev <br> Regisztráció időpontja: $formazottDatum <br><br> Sok sikert kívánunk a versenyzéshez, <br> a KÜTV csapata";
        $mail->send();
        echo "Sikeres regisztráció! A regisztrációt visszaigazoló email el lett küldve az emailcímeitekre";


      } catch (Exception $e) {
        echo "Hiba: A regisztrációnál problémák merültek fel";
      }
    }

    }
  }
?>