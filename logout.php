<?php
    session_start();
    unset($_SESSION["fhnev"]);
    unset($_SESSION["psw"]);
    echo "Sikereses kijelentkezett";
    header("Location:login_separation.php");
?>