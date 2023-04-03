<?php
$password = $_POST['Jelszo'];
$number = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
 
if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase ) {
 echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter.";
} else {
 echo "Your password is strong.";
}
?>
