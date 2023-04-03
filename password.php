<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'forms/PHPMailer.php';
require_once 'forms/Exception.php';
require_once 'forms/SMTP.php';

if ((isset($_POST["emailaddress"]))&&(isset($_POST["name"]))) {
    $conn = mysqli_connect("localhost", "root", "", "kutv");
    if ($conn->connect_errno) {
        die("Failed to connect to MySQL: " . $conn->connect_error);
    } else {

        $mail = new PHPMailer(true);
        try {
            $emailaddress = $_POST['emailaddress'];
            $name = $_POST['name'];
            $query = ("SELECT DiakTelefonszam FROM diak WHERE DiakEmail='$emailaddress' AND CsapatNev='$name'");
            $result = mysqli_query($conn, $query);
            $count = 0;
            while ($row = $result->fetch_assoc()) {
                $count += 1;
            }
            if ($count == 0) {
                echo 'Hiba: A csapat nincs regisztrálva vagy az adott csapat egyik tagja sem rendelkezik a megadott emailcímmel';
            } else {

                $newcode = uniqid(true);
                $hashcode = password_hash($newcode, PASSWORD_DEFAULT);
                $query = ("UPDATE csapat SET Jelszo='$hashcode' WHERE CsapatNev='$name'");
                $result = mysqli_query($conn, $query);

                if (!$result) {
                    echo "Error";
                } else {

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

                    $mail->CharSet = "UTF-8";
                    $mail->setFrom('kutv.office@gmail.com');
                    $mail->addAddress($emailaddress);
                    $mail->isHTML(true);
                    $mail->Subject = 'KÜTV - Jelszó megváltoztatás';
                    $mail->Body = "A jelszót sikeresen megváltoztattuk a következőre: ".$newcode ." <br> Ezt a rendszer által kigenerált jelszót egyszerűen megváltoztathatjátok a 'Bejelentkezés/Jelszót szeretnél változtatni?' fülnél. <br><br> Üdvözlettel, <br> a KÜTV csapat";
                    $mail->send();
                    echo "Link sikeresen elküldve. Köszönjük, hogy kapcsolatba lépett velünk!";
                }
            }
        } catch (Exception $e) {
            echo "Hiba történt a jelszó megváltoztatásnál:" . $mail->ErrorInfo;
        }

    }
}
?>

<h3>Add meg a csapatneved és emailcímed és elküldjük az új jelszavadat (melyet utána megváltoztathatsz)
</h3>
<form method="POST">
    <input type="text" name="name" placeholder="Csapatnév" autocomplete="off">
    <input type="text" name="emailaddress" placeholder="Emailcím" autocomplete="off">
    <br>
    <input type="submit" name="submit" value="Új kód kérés">
</form>