<?php
if (isset($_POST["name"])) {
    $conn = mysqli_connect("localhost", "root", "", "kutv");
    if ($conn->connect_errno) {
        die("Failed to connect to MySQL: " . $conn->connect_error);
    } else {
        $name = $_POST['name'];
        $oldpassword = $_POST['oldpassword'];
        $query = ("SELECT Jelszo FROM csapat WHERE CsapatNev='$name'");
        $result = mysqli_query($conn, $query);
        $count = 0;
        while ($row = $result->fetch_assoc()) {
            $count += 1;
        }
        if ($count == 0) {
            echo 'Hiba: Helytelen csapatnév';
        } else {
            $result = mysqli_query($conn, $query);
            while ($row = $result->fetch_assoc()) {
                if (!password_verify($oldpassword, $row['Jelszo'])) {
                    echo "Helytelen jelszó";
                } else {
                    $newpassword = $_POST['newpassword'];
                    $hashcode = password_hash($newpassword, PASSWORD_DEFAULT);
                    $query = ("UPDATE csapat SET Jelszo='$hashcode' WHERE CsapatNev='$name'");
                    $result = mysqli_query($conn, $query);

                    if (!$result) {
                        echo "Hiba a jelszó megváltoztatásánál";
                    } else {
                        echo "A jelszót sikeresen megváltoztattuk";
                    }
                }
            }


        }


    }
}

?>

<h3>Változtasd meg jelenlegi kódodat néhány másodperc alatt:
</h3>
<form method="POST">
    <input type="text" name="name" placeholder="Csapatnév" autocomplete="off"><br>
    <input type="password" name="oldpassword" placeholder="Jelenlegi jelszó" autocomplete="off"><br>
    <input type="password" name="newpassword" placeholder="Új jelszó" autocomplete="off"><br>
    <br>
    <input type="submit" name="submit" value="Jelszó megváltoztatása">
</form>