<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer.php';
require_once 'Exception.php';
require_once 'SMTP.php';

if (isset($_POST['submit'])) {
  $mail = new PHPMailer(true);
  $mail->CharSet = "UTF-8";
  $alert = '';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

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
    $mail->addAddress('kutv.office@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Kontakt üzenet a következő személytől:' . $name;
    $mail->Body = "Név: $name <br> Emailcím: $email <br> Tárgy: $subject <br> Üzenet: $message";
    $mail->send();
    echo "<div class='alert-success'><span>Üzenet sikeresen elküldve. Köszönjük, hogy kapcsolatba lépett velünk!</span></div>";
    echo '<a href="../kontakt.php">Vissza</a>';


  } catch (Exception $e) {
    echo "<div class='alert-error'><span>HIBA</span></div>";
  }
}
?>