<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Feldolgozás</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="hero">
        <div class="content">
            <h1>Feldolgozás</h1>
            </br>
            </br>
            <?php
            $fhnev = $_POST["username"];
            $psw = $_POST["password"];
            if ($fhnev == "admin" && $psw == "szupertitkos") {
                $_SESSION['fhnev'] = $fhnev;
                $_SESSION['psw'] = $psw;
                header('Location: admin.php');
            } else {
                $conn = mysqli_connect("localhost", "root", "", "kutv");
                // Check connection
                if ($conn->connect_errno) {
                    die("Failed to connect to MySQL: " . $conn->connect_error);
                } else {
                    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
                    if ($stmt = $conn->prepare('SELECT Csapatnev, Jelszo FROM csapat WHERE Csapatnev = ?')) {
                        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
                        $stmt->bind_param('s', $_POST['username']);
                        $stmt->execute();
                        // Store the result so we can check if the account exists in the database.
                        $stmt->store_result();
                    }

                    if ($stmt->num_rows > 0) {
                        $stmt->bind_result($id, $password);
                        $stmt->fetch();
                        // Account exists, now we verify the password.
                        // Note: remember to use password_hash in your registration file to store the hashed passwords.
                        if (password_verify($_POST['password'], $password)) {
                            // Verification success! User has logged-in!
                            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                            session_regenerate_id();
                            $_SESSION['loggedin'] = TRUE;
                            $_SESSION['fhnev'] = $_POST['username'];
                            $_SESSION['psw'] = $id;
                            header('Location: user.php');
                        } else {
                            // Incorrect password
                            echo 'Incorrect username and/or password!';
                        }
                    } else {
                        // Incorrect username
                        echo 'Incorrect username and/or password!';
                    }
                    $stmt->close();
                }
            }
            ?>
        </div>
    </div>

</body>

</html>