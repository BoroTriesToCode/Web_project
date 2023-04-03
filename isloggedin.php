<?php
$conn = mysqli_connect("localhost", "root", "", "kutv");
// Check connection
if ($conn->connect_errno) {
    die("Failed to connect to MySQL: " . $conn->connect_error);
} else {
    session_start();
    $loginst = 0;
    if (isset($_SESSION['fhnev'])) {
        if (isset($_SESSION["fhnev"]) && isset($_SESSION["psw"]) && $_SESSION["fhnev"] == "admin" && $_SESSION["psw"] == "szupertitkos") {
            $loginst = 1;
        } else {
            $user_check = $_SESSION['fhnev'];

            $ses_sql = mysqli_query($conn, "SELECT Csapatnev FROM csapat WHERE Csapatnev='$user_check' ");

            $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

            $login_user = $row['Csapatnev'];

            if (!empty($login_user)) {
                $loginst = 1;
            }

        }
    }
}
?>