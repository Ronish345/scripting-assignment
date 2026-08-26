<?php

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$password = $_POST["password"] ?? "";

if ($name == "" || $email == "" || $phone == "" || $password == "") {

    echo "All fields are required.";

} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo "Invalid email.";

} elseif (!preg_match("/^[0-9]{10}$/", $phone)) {

    echo "Invalid phone number.";

} elseif (strlen($password) < 8) {

    echo "Password must contain at least 8 characters.";

} else {

    echo "Registration successful!";

}

?>
